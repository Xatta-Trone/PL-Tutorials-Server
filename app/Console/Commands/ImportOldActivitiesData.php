<?php

namespace App\Console\Commands;

use App\Traits\ActivityTrait;
use App\Models\Admin\Activity;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ImportOldActivitiesData extends Command
{
    use ActivityTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'activities:import';

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
        // $data = [
        //     'causer_type' => $this->getpostclass('user'),
        //     'causer_id' => $userId,
        //     'activity' => 'logout',
        //     'model_id' => $userTrace ? $userTrace->id : null,
        //     'model_type' => $this->getpostclass('usertrace'),
        //     'label' => $label,
        //     'pat_id' => $this->getUserTokenId(),
        // ];

        $id = $this->ask('start row number', 0);
        $truncate = $this->ask('truncate table', 0);

        $bar = $this->output->createProgressBar(DB::table('old_activities')->count());
        // DB::table('old_activities')->truncate();
        if ($truncate) {
            DB::table('activities')->truncate();
        }

        $bar->start();

        DB::table('old_activities')->where('id', '>', $id)->orderBy('id')
            ->chunk(1000, function ($traces) {
                $ndata = [];




                foreach ($traces as $trace) {
                    // $this->saveActivity($trace->causer, $trace->causer_id, $trace->activity, $trace->model, $trace->model_id, $trace->label);
                    $data = [
                        'id' => $trace->id,
                        'causer_type' => $this->getpostclass($trace->causer),
                        'causer_id' => $trace->causer_id,
                        'activity' => $trace->activity,
                        'model_id' => $trace->model_id,
                        'model_type' => $this->getpostclass($trace->model),
                        'label' => $trace->label,
                        'created_at' => $trace->created_at,
                        'updated_at' => $trace->updated_at,

                    ];

                    $data = Activity::create($data);
                    // $ndata[][] = $data;
                }
                // dd($ndata);
                // DB::table('activities')->insert($ndata);
            });
        $bar->finish();
    }
}