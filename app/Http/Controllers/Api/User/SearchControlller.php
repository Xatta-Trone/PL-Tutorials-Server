<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Book;
use App\Models\Admin\Post;
use App\Models\Admin\Software;
use App\Traits\DepartmentsTrait;
use Illuminate\Http\Request;

class SearchControlller extends Controller
{
    use DepartmentsTrait;

    public function search()
    {
        $query = request()->get('q');
        $l_t = request()->get('l_t');
        $dept = request()->get('dept');
        $course_id = request()->get('course_id');
        $content_type = request()->get('content_type');
        $page = request()->get('page', 1);
        $per_page = request()->get('per_page', 25);

        $softwares = Software::query();
        $books = Book::query();
        $posts = Post::query();
        // return $content_type;

        if (empty($query) && empty($l_t) && empty($dept) && empty($course_id) && empty($content_type)) {
            // return [

            //     'total' => 0,
            // ];
            return  [];
        }

        if ($query != null) {
            $posts->where('name', 'like', '%' . $query . '%')->orWhere('author', 'like', '%' . $query . '%')->orWhere('description', 'like', '%' . $query . '%');
            $books->where('name', 'like', '%' . $query . '%')->orWhere('author', 'like', '%' . $query . '%')->orWhere('description', 'like', '%' . $query . '%');
            $softwares->where('name', 'like', '%' . $query . '%')->orWhere('author', 'like', '%' . $query . '%')->orWhere('description', 'like', '%' . $query . '%');
        }
        if ($l_t != null) {
            $posts->where('level_term_slug', $l_t);
            $books->where('level_term_slug', $l_t);
            $softwares->where('level_term_slug', $l_t);
        }

        if ($dept != null) {
            $res = $this->accessible_dept(request()->user()->student_id);

            if ($res !== "NA" && (strpos($res, $dept) !== false)) {
                $posts->where('department_slug', $dept);
                $books->where('department_slug', $dept);
                $softwares->where('department_slug', $dept);
            }
        }
        if ($content_type != null) {
            $posts->where('post_type', $content_type);
            $books->where('post_type', $content_type);
            $softwares->where('post_type', $content_type);
        }
        if ($course_id) {
            $posts->where('course_id', $course_id);
            $books->where('course_id', $course_id);
            $softwares->where('course_id', $course_id);
        }



        // filter dept materials
        $res = $this->accessible_dept(request()->user()->student_id);

        // return $res;



        // filter other dept data
        $posts->whereNotIn('department_slug', $this->getOtherDept($res));
        $softwares->whereNotIn('department_slug', $this->getOtherDept($res));
        $books->whereNotIn('department_slug', $this->getOtherDept($res));

        $results = $posts->union($softwares)
            ->union($books);

        return $results->orderBy('created_at', 'desc')->skip(($page - 1) * $per_page)->take($per_page)->get();

        // return [
        //     'data' => $results->skip(($page - 1) * $per_page)->take($per_page)->get(),
        //     'total' => $results->count()
        // ];
    }
}