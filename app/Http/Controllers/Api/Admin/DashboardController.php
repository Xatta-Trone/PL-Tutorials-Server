<?php

namespace App\Http\Controllers\Api\Admin;

use Carbon\Carbon;
use App\Models\User\Bug;
use App\Models\Admin\Faq;
use App\Models\User\User;
use App\Models\Admin\Book;
use App\Models\Admin\Post;
use App\Models\Admin\Contact;
use App\Models\Admin\Activity;
use App\Models\Admin\Software;
use App\Models\Admin\UserData;
use App\Traits\DashboardTrait;
use App\Models\Admin\Testimonial;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    use DashboardTrait;

    public function index()
    {
        $user = new User();
        $user_total = User::count();
        $new_contact = Contact::where('status', 0)->get()->count();
        $total_downloads = Activity::where('activity', 'downloaded')->get()->count();
        $total_activities = Activity::count();
        $total_userdatas = UserData::count();
        $total_posts = Post::count();
        $total_softwares = Software::count();
        $total_books = Book::count();
        $total_testimonial = Testimonial::count();
        $total_faq = Faq::count();
        $new_user_today = User::whereDate('created_at', Carbon::today())->count();
        $new_user_thisweek = User::where('created_at', '>=', Carbon::today()->subDays(7))->count();
        $bugs = Bug::where('is_seen', false)->count();

        $data = [
            'online_users' => $user->allOnline()->count(),
            'users_total' => $user_total,
            'new_contact' => $new_contact,
            'total_downloads' => $total_downloads,
            'total_activities' => $total_activities,
            'total_userdatas' => $total_userdatas,
            'total_softwares' => $total_softwares,
            'total_books' => $total_books,
            'total_posts' => $total_posts,
            'total_testimonial' => $total_testimonial,
            'total_faq' => $total_faq,
            'new_user_today' => $new_user_today,
            'new_user_thisweek' => $new_user_thisweek,
            'bugs' => $bugs,
        ];

        return response()->json($data);
    }

    public function chartdata()
    {
        $today = Carbon::now()->endOfDay();
        $pastDate  = Carbon::now()->startOfDay()->subMonth();
        $data = $this->getDataBetweenDates($pastDate, $today);

        return response()->json($data);
    }

    public function batchDeptDataPie()
    {
        $data = $this->deptBatchDataPie();

        return response()->json($data);
    }

    public function batchDeptDatatable()
    {
        $data = $this->getPieUserDataByBatchNDept();

        return response()->json($data);
    }
}