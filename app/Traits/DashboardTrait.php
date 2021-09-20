<?php

namespace App\Traits;

use App\Models\Admin\Activity;
use App\Models\User\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

trait DashboardTrait
{
    private function getDataBetweenDates(Carbon $startDate, Carbon $endDate)
    {
        // $startDate = Carbon::create('2019-05-03 08:46:34')->subDays(30);
        // $endDate = Carbon::create('2019-05-03 08:46:34');

        $dates = [];

        for ($date = $startDate->copy(); $date->lte($endDate); $date->addDay()) {
            $dates[]['date'] = $date->format('Y-m-d');
        }

        $a = Activity::select(DB::raw("count(*) AS activities, sum(case when `activity` = 'downloaded' then 1 else 0 end) AS downloads, Date(`created_at`) as date"))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy(DB::raw('Date(`created_at`)'))->orderBy(DB::raw('Date(`created_at`)'))
            ->get()->toArray();

        $u =
            User::select(DB::raw('count(*) AS users, Date(`created_at`) as date'))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy(DB::raw('Date(`created_at`)'))->orderBy(DB::raw('Date(`created_at`)'))
            ->get()->toArray();

        $c = array_replace_recursive(
            array_combine(array_column($a, 'date'), $a),
            array_combine(array_column($u, 'date'), $u),
            array_combine(array_column($dates, 'date'), $dates)
        );
        $finalData = [];
        $fomattedDates = [];
        $downloads = [];
        $users = [];
        $activities = [];

        foreach ($c as $key => $value) {
            // $keys = ['users', 'activities', 'downloads'];
            array_key_exists('downloads', $value) ? $downloads[] = $value['downloads'] : $downloads[] = 0;
            array_key_exists('activities', $value) ? $activities[] = $value['activities'] : $activities[] = 0;
            array_key_exists('users', $value) ? $users[] = $value['users'] : $users[] = 0;
        }

        foreach ($dates as $key => $value) {
            $fomattedDates[] = Carbon::parse($value['date'])->format('M d');
        }

        return ['date' => $fomattedDates, 'data' => [
            [
                'name' => 'downloads',
                'data' => $downloads,
            ],
            [
                'name' => 'activities',
                'data' => $activities,
            ],
            [
                'name' => 'users',
                'data' => $users,
            ],
        ]];
    }
}
