<?php

namespace App\Http\Services;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CustomVueTable2Service
{
    public function get($model, array $main_cols, array $relations = [])
    {
        // extract(request()->only(['query', 'limit', 'page', 'orderBy', 'ascending', 'byColumn']));
        $query = request()->input('query', null);
        $limit = request()->input('limit', 50);
        $page = request()->input('page', 1);
        $orderBy = request()->input('orderBy', 'id');
        $ascending = request()->input('ascending', 0);
        $byColumn = request()->input('byColumn', 1);



        $columns = [];
        $relation_tables = [];
        $parent_query = '';
        $relation_query = '';


        $parent_model = $model;
        $parent_table = $parent_model->getTable();

        //set main columns
        foreach ($main_cols as $column) {
            $parent_query .= "{$parent_table}.{$column},";
            array_push($columns, "{$parent_table}.{$column}");
        }
        $parent_query = rtrim($parent_query, ',');
        // dd($columns);


        foreach ($relations as $relation) {
            if (str_contains($relation, ':')) {
                // $relation_column_names = substr($relation, strpos($relation, ':') + 1);
                $relation_query .= ',';
                $relation_data = explode(':', $relation);
                // dd($relation_data);
                $relation_table_name =  $parent_model->{$relation_data[0]}()->getRelated()->getTable();

                $relation_table_name_singular = Str::singular($relation_table_name);
                $relation_column_names = $relation_data[1];

                //get foreign key

                $foreign_key = Arr::flatten(array_filter($relation_data, function ($filter) {
                    return str_contains($filter, 'foreign_key');
                }));

                $foreign_key_column =  Str::after(count($foreign_key) > 0 ? $foreign_key[0] : '', 'foreign_key=');
                $foreign_key = $foreign_key_column == '' ? $parent_table . '.' . $relation_table_name_singular . '_id' : $parent_table . '.' . $foreign_key_column;
                // dd($foreign_key);

                $relation_table_data = [
                    'table' => $relation_table_name,
                    'foreign_key' => $foreign_key,
                    'local_key' => $relation_table_name . '.' . 'id'
                ];
                array_push($relation_tables, $relation_table_data);
                // dd($relation_column_names, $relation_table_name, $relation_table_data);

                $relatoin_columns = explode(',', $relation_column_names);

                foreach ($relatoin_columns as $column) {
                    $main_col = $relation_table_name . '.' . $column;
                    $dummy_name = $relation_table_name_singular . '_' . $column;
                    $relation_query .= $main_col . ' as ' . $dummy_name . ',';
                    array_push($columns, $main_col);
                }
                $relation_query = rtrim($relation_query, ',');
            }
        }

        $query_all = $parent_query . $relation_query;


        $data = DB::table($parent_table)->select(DB::raw($query_all));

        foreach ($relation_tables as $table) {
            $data->join(DB::raw($table['table']), DB::raw($table['foreign_key']), '=', DB::raw($table['local_key']), 'left outer');
        }
        // query get


        if (isset($query) && $query) {
            $data = $byColumn == 1 ?
                $this->filterByColumn($data, $query) :
                $this->filter($data, $query, $columns);
        }


        if (isset($orderBy)) {
            $direction = $ascending == 1 ? 'ASC' : 'DESC';
            $data->orderBy($orderBy, $direction);
        }

        $count = $data->count();

        if (isset($limit) && $limit && isset($page) && $page) {
            $data->limit($limit)
                ->skip($limit * ($page - 1));
        }



        $results = $data->get();

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
