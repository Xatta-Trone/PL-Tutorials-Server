<?php

namespace App\Http\Services;

use Carbon\Carbon;

class VueTable2Service
{
    public function get($model, array $fields)
    {
        // extract(request()->only(['query', 'limit', 'page', 'orderBy', 'ascending', 'byColumn']));
        $query = request()->input('query', null);
        $limit = request()->input('limit', 50);
        $page = request()->input('page', 1);
        $orderBy = request()->input('orderBy', 'id');
        $ascending = request()->input('ascending', 0);
        $byColumn = request()->input('byColumn', 1);


        $rawfields = array_filter($fields, function ($col) {
            return !str_contains($col, ':');
        });

        $relaitonship_fields = array_filter($fields, function ($col) {
            return str_contains($col, ':');
        });


        $data = $model->select($rawfields);


        if (count($relaitonship_fields) > 0) {
            $data = $model->with($relaitonship_fields);
        }




        if (isset($query) && $query) {
            $data = $byColumn == 1 ?
                $this->filterByColumn($data, $query) :
                $this->filter($data, $query, $fields);
        }

        if (isset($orderBy) && !str_contains($orderBy, '.')) {
            $direction = $ascending == 1 ? 'ASC' : 'DESC';
            $data->orderBy($orderBy, $direction);
        }

        $count = $data->count();
        if (isset($limit) && $limit && isset($page) && $page) {
            $data->limit($limit)
                ->skip($limit * ($page - 1));
        }



        $results = $data->get();

        // if (isset($orderBy) && str_contains($orderBy, '.')) {
        //     // $direction = $ascending == 1 ? 'ASC' : 'DESC';
        //     $results = $ascending == 1 ? $results->sortBy($orderBy) : $results->sortByDesc($orderBy);
        // }


        $results = $results->toArray();

        return [
            'data' => $results,
            'count' => $count,
        ];
    }

    protected function filterByColumn($data, $queries)
    {
        return $data->where(function ($q) use ($queries) {
            foreach ($queries as $field => $query) {
                if (is_string($query)) {
                    $q->where($field, 'LIKE', "%{$query}%");
                } else {
                    $start = Carbon::createFromFormat('Y-m-d', $query['start'])->startOfDay();
                    $end = Carbon::createFromFormat('Y-m-d', $query['end'])->endOfDay();

                    $q->whereBetween($field, [$start, $end]);
                }
            }
        });
    }

    protected function filter($data, $query, $fields)
    {
        return $data->where(function ($q) use ($query, $fields) {
            foreach ($fields as $index => $field) {
                $method = $index ? 'orWhere' : 'where';
                $q->{$method}($field, 'LIKE', "%{$query}%");
            }
        });
    }
}
