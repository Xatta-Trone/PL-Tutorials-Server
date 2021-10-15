<?php

namespace App\Http\Controllers\Api\Util;

use App\Http\Controllers\Controller;
use App\Models\Admin\Course;
use App\Models\Admin\Department;
use App\Models\Admin\LevelTerm;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User\User;
use Illuminate\Http\Request;

class PublicInfoController extends Controller
{
    public function checkEmail()
    {
        $email = request()->input('email', null);

        if ($email == null) {
            return response()->json(['status' => 'Provide an email']);
        }

        $exists = User::where('email', $email)->exists();

        return response()->json(['status' => $exists ? 'Email not available' : 'Email available']);
    }

    public function checkstudentID()
    {
        $studentid =  request()->input('studentid', null);

        if (!is_numeric($studentid)) {
            return response()->json(['status' => 'Provide a student ID']);
        }

        $exists = User::where('student_id', $studentid)->exists();

        return response()->json(['status' => $exists ? 'student ID not available' : 'student ID available']);
    }

    public function getdepartments()
    {
        $depts = Department::select('name', 'id', 'slug')->get();
        return response()->json(['status' => true, 'data' => $depts]);
    }
    public function getlevelterms($id)
    {
        // dd($id);
        $lts = LevelTerm::select('name', 'id', 'slug')->where('department_id', $id)->get();
        return response()->json(['status' => true, 'data' => $lts]);
    }

    public function getcourse($dept_id, $levelterm_id)
    {
        // dd($id);
        $lts = Course::select('course_name', 'id', 'slug')->where('department_id', $dept_id)->where('level_term_id', $levelterm_id)->get();
        return response()->json(['status' => true, 'data' => $lts]);
    }

    public function getroles()
    {
        // dd($id);
        $lts = Role::select('id', 'name')->get();
        return response()->json(['status' => true, 'data' => $lts]);
    }

    public function getpermissions()
    {
        $lts = Permission::select('id', 'name')->get();
        return response()->json(['status' => true, 'data' => $lts]);
    }
}
