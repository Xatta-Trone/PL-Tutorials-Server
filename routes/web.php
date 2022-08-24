<?php

use Goutte\Client;
use App\Models\Role;
use App\Models\User\User;
use App\Models\Admin\Chat;
use App\Models\Admin\Post;
use App\Events\SendMessage;
use App\Models\Admin\Admin;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use App\Models\Admin\Course;
use App\Mail\AdminWelcomeMsg;
use App\Mail\UserLoginDetails;
use Illuminate\Support\Carbon;
use App\Models\Admin\LevelTerm;
use App\Events\SendMessageToAdmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Mail\UserPasswordResetNotification;
use App\Http\Services\CustomVueTable2Service;
use App\Models\Admin\Contact;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

function getModels($path)
{
    $out = [];
    $results = scandir($path);
    foreach ($results as $result) {
        if ($result === '.' or $result === '..') {
            continue;
        }
        $filename = $path . '/' . $result;
        if (is_dir($filename)) {
            $out = array_merge($out, getModels($filename));
        } else {
            $out[] = substr($filename, 0, -4);
        }
    }

    return $out;
}

function getPieUserDataByBatchNDept()
{
    $pieUserDatas = DB::table('users')
        ->selectRaw('substr(`student_id`,1,4) as total, count(`id`) as number')
        ->where(DB::raw('substr(`student_id`,1,4)'), '<>', '0000')
        ->groupBy(DB::raw('substr(`student_id`,1,4)'))
        ->orderBy('total', 'desc')
        ->get()->toArray();

    foreach ($pieUserDatas as $pieUser) {
        $pieUser->dept_batch = returnDeptBatchString($pieUser->total);
    }

    $data = [
        'labels' => array_column($pieUserDatas, 'dept_batch'),
        'data' => array_column($pieUserDatas, 'number'),
    ];

    return $data;

    // $rand_color = '#' . substr(md5(mt_rand()), 0, 6);
}

function returnDeptBatchString($batchDept = '')
{
    $batch = substr($batchDept, 0, 2);
    $dept = substr($batchDept, 2, 2);

    $single_department = DB::table('departments')->where('code', $dept)->first();

    $dept_status_or_slug = ($single_department != null) ? strtoupper($single_department->slug) : 'Not Found';

    return $dept_status_or_slug . "'" . $batch;

    //return $batch.'+'.$dept;
}

Route::get('/', function () {

    // $user = User::where('student_id', '14041444')->get()->first();
    // $chat = Chat::find(1);
    // event(new SendMessage($chat, $user->id));

    // Mail::to($user->email)->send(new UserPasswordResetNotification($user, 'asdfasdfsd'));

    // return new UserPasswordResetNotification($user, 'asdfasdf');


    // // return Course::with(['levelterm','department'])->find(1);






    // dd(getPieUserDataByBatchNDept());

    // return view('welcome');

    // $user = new User();
    // dd($user->allOnline());

    // $user = new User();
    // $new_users = User::where('created_at', '>', now())->count();
    // $new_users_this_week = User::where('created_at', '>', Carbon::now()->subWeek())->count();
    // $total_users = User::all()->count();
    // // $total_downloads = User::all()->count();

    // $data = [
    //     'online_users' => $user->allOnline()->count(),
    //     'new_user_today' => $new_users,
    //     'new_user_week' => $new_users_this_week,
    //     'total_users' => $total_users,
    // ];

    // dd($data);
    // $a = Admin::find(1);
    // $a->password = 'asdfasdf';
    // $a->allPermissions()->pluck('name');
    // return new UserLoginDetails($a);

    // dd($a->hasRole('system'));

    // $query = request()->input('query', null);
    // $limit = request()->input('limit', 50);
    // $page = request()->input('page', 1);
    // $orderBy = request()->input('orderBy', 'id');
    // $ascending = request()->input('ascending', 0);
    // $byColumn = request()->input('byColumn', 1);

    // $cols =  [
    //     'id', 'name', 'department_slug', 'level_term_slug', 'status',  'course_id', 'user_id', 'admin:id,name'
    // ];

    // $main_cols =  [
    //     'id', 'name', 'department_slug', 'level_term_slug', 'status',  'course_id', 'user_id',
    // ];
    // $relations = ['user:id,name:foreign_key=user_id', 'course:id,slug'];
    // $columns = [];

    // $vs = new CustomVueTable2Service();
    // $d =  $vs->get(new Post(), [
    //     'id', 'name', 'department_slug', 'level_term_slug', 'status',  'course_id', 'user_id',
    // ], ['user:id,name:foreign_key=user_id', 'course:id,slug']);

    // dd($d);

    // // $parent_table = (new Post())->{$relation}()->getRelated()->getTable();
    // $parent_model = new Post();
    // $parent_table = $parent_model->getTable();
    // $parent_query = '';
    // $relation_query = '';
    // foreach ($main_cols as $column) {
    //     $parent_query .= "{$parent_table}.{$column},";
    //     array_push($columns, "{$parent_table}.{$column}");
    // }
    // $parent_query = rtrim($parent_query, ',');
    // // dd($columns);

    // $relation_tables = [];

    // foreach ($relations as $relation) {
    //     if (str_contains($relation, ':')) {
    //         // $relation_column_names = substr($relation, strpos($relation, ':') + 1);

    //         $relation_query .= ',';
    //         $relation_data = explode(':', $relation);
    //         // dd($relation_data);
    //         $relation_table_name =  $parent_model->{$relation_data[0]}()->getRelated()->getTable();

    //         $relation_table_name_singular = Str::singular($relation_table_name);
    //         $relation_column_names = $relation_data[1];

    //         //get foreign key

    //         $foreign_key = Arr::flatten(array_filter($relation_data, function ($filter) {
    //             return str_contains($filter, 'foreign_key');
    //         }));

    //         $foreign_key_column =  Str::after(count($foreign_key) > 0 ? $foreign_key[0] : '', 'foreign_key=');
    //         $foreign_key = $foreign_key_column == '' ? $parent_table . '.' . $relation_table_name_singular . '_id' : $parent_table . '.' . $foreign_key_column;
    //         // dd($foreign_key);

    //         $relation_table_data = [
    //             'table' => $relation_table_name,
    //             'foreign_key' => $foreign_key,
    //             'local_key' => $relation_table_name . '.' . 'id'
    //         ];
    //         array_push($relation_tables, $relation_table_data);
    //         // dd($relation_column_names, $relation_table_name, $relation_table_data);

    //         $relatoin_columns = explode(',', $relation_column_names);

    //         foreach ($relatoin_columns as $column) {
    //             $main_col = $relation_table_name . '.' . $column;
    //             $dummy_name = $relation_table_name_singular . '_' . $column;
    //             $relation_query .= $main_col . ' as ' . $dummy_name . ',';
    //             array_push($columns, $main_col);
    //         }
    //         $relation_query = rtrim($relation_query, ',');
    //     } else {
    //     }
    // }
    // // dd($columns);
    // $query_all = $parent_query . $relation_query;

    // $data = DB::table($parent_table)->select(DB::raw($query_all));

    // foreach ($relation_tables as $table) {
    //     $data->join(DB::raw($table['table']), DB::raw($table['foreign_key']), '=', DB::raw($table['local_key']));
    // }
    // // query get

    // if ($query) {
    //     $data->where(function ($q) use ($query, $columns) {
    //         foreach ($columns as $index => $field) {
    //             $method = $index ? 'orWhere' : 'where';
    //             $q->{$method}($field, 'LIKE', "%{$query}%");
    //         }
    //     });
    // }

    // if (isset($orderBy)) {
    //     $direction = $ascending == 1 ? 'ASC' : 'DESC';
    //     $data->orderBy($orderBy, $direction);
    // }

    // $count = $data->count();
    // if (isset($limit) && $limit && isset($page) && $page) {
    //     $data->limit($limit)
    //         ->skip($limit * ($page - 1));
    // }

    // $data = $data->get();
    // // $data = $data->toSql();

    // dd($data);

    // dd($parent_table, $parent_query);
    //check if relation contains :

    // dd($parent_table, $parent_query);

    // $a_without = array_filter($cols, function ($col) {
    //     return !str_contains($col, ':');
    // });

    // $a_with = array_filter($cols, function ($col) {
    //     return str_contains($col, ':');
    // });

    // $u = Post::query()->with(['course' => function ($q) {
    //     return $q->select('id', 'slug')->orderBy('id', 'desc');
    // }])->get()->take(2);

    // dd($a_with, $a_without, $u);

    return view('welcome');
});

Route::get('call', function () {
    $call = request()->input('call');

    if (request()->get('kay') && request()->get('kay') == env('ARTISAN_KEY')) {
        Artisan::call($call);

        return $call . ' called success';
    }

    return $call . ' not success';
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/scrap', function () {
    $client = new Client();
    $crawler = $client->request('GET', 'https://www.engineeringbooks.me/search/label/civil?max-results=20');

    $crawler->filter('a.timestamp-link')->each(function ($node) {
        // dd($node->text . "\n");
        $href = $node->attr('href');
        $title = $node->attr('title');
        $date = $node->filter('abbr.published')->attr('title');
        $datefomatted = Carbon::createFromDate($date);
        // $c = Carbon::yesterday();

        echo $date . '\n';

        if ($datefomatted->isYesterday()) {
            getinfo($href);
        }
    });
});

function getinfo($link)
{
    $client = new Client();
    $crawler = $client->request('GET', $link);

    // get title
    $title = $crawler->filter('.post-body h2')->first()->text();
    // get author
    $author = $crawler->filter('.post-body div')->eq(1)->filter('span')->eq(1)->text();
    //get link
    $crawler->filter('.post-body a')->each(function ($node) use ($title, $author) {
        // dd($node->text() . "\n");
        if ($node->text() == 'LINK') {
            $href = $node->attr('href');
            dd(compact('href', 'title', 'author'));
        } else {
            return 'none';
        }
    });
    // dd($crawler->filter('a')->link());
}

Route::get('/change-email', function () {



    User::chunkById(
        500,
        function ($records) {
            foreach ($records as $record) {
                $record->update(['email' => Str::snake(Str::remove(".", Str::lower($record->name)), '-')  . $record->student_id . "@example.com"]);
            }
        },
        $column = 'id'
    );
});