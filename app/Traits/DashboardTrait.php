<?php

namespace App\Traits;

use App\Models\Admin\Activity;
use App\Models\Admin\Department;
use App\Models\User\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
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

        $activity_rearranged = array_combine(
            array_column($a, 'date'),
            $a
        );
        $user_data_rearranged = array_combine(
            array_column($u, 'date'),
            $u
        );
        $dates_rearranged = array_combine(
            array_column($dates, 'date'),
            $dates
        );

        $activityFinalData = [];
        $downloadsFinalData = [];
        $usersFinalData = [];


        foreach ($dates_rearranged as $date => $value) {
            // activity data
            if (array_key_exists($date, $activity_rearranged)) {
                $activityFinalData[] = (int) $activity_rearranged[$date]['activities'];
                $downloadsFinalData[] = (int) $activity_rearranged[$date]['downloads'];
            } else {
                $activityFinalData[] = 0;
                $downloadsFinalData[] = 0;
            }

            if (array_key_exists($date, $user_data_rearranged)) {
                $usersFinalData[] = (int) $user_data_rearranged[$date]['users'];
            } else {
                $usersFinalData[] = 0;
            }
        }


        $fomattedDates = [];

        foreach ($dates as $key => $value) {
            $fomattedDates[] = Carbon::parse($value['date'])->format('M d');
        }

        return ['date' => $fomattedDates, 'data' => [
            [
                'name' => 'downloads',
                'data' =>  $downloadsFinalData,
            ],
            [
                'name' => 'activities',
                'data' => $activityFinalData,
            ],
            [
                'name' => 'users',
                'data' => $usersFinalData,
            ],
        ]];
    }

    public function getPieUserDataByBatchNDept()
    {
        $pieUserDatas = DB::table('users')
            ->selectRaw('substr(`student_id`,1,4) as total, count(`id`) as number')
            ->where(DB::raw('substr(`student_id`,1,4)'), '<>', '0000')
            ->groupBy(DB::raw('substr(`student_id`,1,4)'))
            ->orderBy('total', 'desc')
            ->get()->toArray();

        $departments = Department::select('code', 'slug')->get();

        foreach ($pieUserDatas as $pieUser) {
            $pieUser->dept_batch = $this->returnDeptBatchString($pieUser->total, $departments);
        }

        return $pieUserDatas;

        // $rand_color = '#' . substr(md5(mt_rand()), 0, 6);
    }

    public function deptBatchDataPie()
    {
        $pieUserDatas = $this->getPieUserDataByBatchNDept();

        return [
            'labels' => array_column($pieUserDatas, 'dept_batch'),
            'data' => array_column($pieUserDatas, 'number'),
        ];
    }

    public function returnDeptBatchString($batchDept = '', Collection $departments)
    {
        $batch = substr($batchDept, 0, 2);
        $dept = substr($batchDept, 2, 2);

        $single_department = $departments->where('code', $dept)->first();

        $dept_status_or_slug = ($single_department != null) ? strtoupper($single_department->slug) : 'Not Found';

        return $dept_status_or_slug . "'" . $batch;

        //return $batch.'+'.$dept;
    }
}