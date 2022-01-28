<?php

namespace App\Http\Controllers\Api\User;

use App\Models\Admin\Course;
use Illuminate\Http\Request;
use App\Models\Admin\LevelTerm;
use App\Models\Admin\Department;
use App\Http\Controllers\Controller;
use App\Http\Resources\DepartmentResource;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Admin\Software;

class MaterialController extends Controller
{
    public function departments()
    {
        $data = DepartmentResource::collection(Department::orderBy('name')->get(['name', 'slug', 'image']));
        return $data != null ? $this->successResponse('DEPARTMENTS_FOUND', $data) : $this->errorResponse('DEPARTMENTS_NOT_FOUND', $data);
    }

    public function infos($deptSlug, $ltSlug = null, $courseSlug = null)
    {
        if ($courseSlug) {
            $data = Course::select('id', 'course_name', 'slug')->with('active_posts:id,name,course_id,link')->where('slug', $courseSlug)->get()->first();
            return $this->successResponse('COURSES_FOUND', $data);
        }


        if ($ltSlug) {
            $dept = Department::where('slug', $deptSlug)->first();

            $data = LevelTerm::select('id', 'name', 'department_id')
                ->with(['course:id,course_name,slug,level_term_id', 'department:id,name'])
                ->where([['slug', '=', $ltSlug], ['department_id', '=', $dept->id]])
                ->first();

            return $this->successResponse('LEVEL_TERMS_FOUND', $data);
        }

        $data = Department::select('id', 'name')->with('levelterms:id,name,slug,department_id')->where('slug', $deptSlug)->first();
        return $this->successResponse('DEPARTMENTS_FOUND', $data);
    }

    public function softwares()
    {
        $vs = new CustomVueTable2Service();
        return  $vs->get(new Software(), [
            'id', 'name', 'author', 'status', 'link', 'description'
        ]);
    }
}
