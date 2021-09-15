<?php

namespace App\Console\Commands;

use App\Models\User\User;
use App\Models\Admin\Admin;
use Illuminate\Support\Str;
use App\Models\Admin\Activity;
use App\Models\Admin\Contact;
use App\Models\Admin\Course;
use App\Models\Admin\Department;
use App\Models\Admin\LevelTerm;
use App\Models\Admin\Permission;
use App\Models\Admin\Post;
use App\Models\Admin\Quote;
use App\Models\Admin\Reply;
use App\Models\Admin\Role;
use App\Models\Admin\Settings;
use App\Models\Admin\Software;
use App\Models\Admin\Testimonial;
use App\Models\admin\UserData;
use App\Traits\ActivityTrait;
use Illuminate\Console\Command;

class AddMorphtoActivity extends Command
{
    use ActivityTrait;
    /*
    **
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'activity:morph';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Activity::chunkById(200, function ($flights) {
            foreach ($flights as $flight) {
                $data = [
                    'causer' => $this->getuserclass($flight->causer),
                ];

                if ($flight->activity != 'searched') {
                    $data['model'] = $this->getpostclass($flight->model);
                }



                $flight->update($data);
                // dd($this->getpostclass($flight->model));
                // dd($flight->model);
            }
        }, $column = 'id');
    }
}
