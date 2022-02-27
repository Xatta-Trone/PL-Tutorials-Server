<?php

namespace App\Traits;

use App\Models\Admin\Department;

trait DepartmentsTrait
{
    public static $depts = [
        4 => 'ce',
        16 => 'wre',
        1 => 'arch',
        2 => 'che',
        5 => 'cse',
        6 => 'eee',
        10 => 'me',
        11 => 'mme',
        12 => 'name',
        15 => 'urp',
    ];

    public function accessible_dept($student_id)
    {

        $d =  Department::where('code', substr($student_id, 2, 2))->get()->first();
        return $d ? $d->can_be_accessed_by : 'NA';
    }

    public function getOtherDept($in)
    {

        return array_diff([
            'ce',
            'wre',
            'arch',
            'che',
            'cse',
            'eee',
            'me',
            'mme',
            'name',
            'urp',
            'bme',
            'ipe'
        ], explode(',', $in));
    }
}