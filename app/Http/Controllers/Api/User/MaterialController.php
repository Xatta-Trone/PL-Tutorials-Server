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
        $data = DepartmentResource::collection(Department::orderBy('name')->get(['name', 'slug', 'image', 'id', 'can_be_accessed_by']));
        return $data != null ? $this->successResponse('DEPARTMENTS_FOUND', $data) : $this->errorResponse('DEPARTMENTS_NOT_FOUND', $data);
    }

    public function levelterms()
    {
        $data = LevelTerm::orderBy('name')->get(['name', 'slug', 'id', 'department_id']);
        return $data != null ? $this->successResponse('LEVEL_TERM_FOUND', $data) : $this->errorResponse('LEVEL_NOT_FOUND', $data);
    }

    public function courses()
    {
        $data = Course::with(['levelterm:id,slug'])->orderBy('course_name')->get(['course_name', 'slug', 'id', 'department_id', 'level_term_id']);
        return $data != null ? $this->successResponse('LEVEL_TERM_FOUND', $data) : $this->errorResponse('LEVEL_NOT_FOUND', $data);
    }

    public function infos($deptSlug, $ltSlug = null, $courseSlug = null)
    {
        // check if can access dept
        $dept  = Department::select('can_be_accessed_by')->where('slug', $deptSlug)->first();
        $canBeAccessedBy = explode(',', $dept->can_be_accessed_by);

        if (!in_array(auth()->user()->department, $canBeAccessedBy)) {
            return $this->errorResponse('NOT_AUTHORIZED_TO_ACCESS_THIS_DEPARTMENT', []);
        }


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

        $data = Department::select('id', 'name', 'can_be_accessed_by')->with('levelterms:id,name,slug,department_id')->where('slug', $deptSlug)->first();
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
