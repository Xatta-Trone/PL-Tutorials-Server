<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTraceDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_trace_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_trace_id')->index();
            $table->json('location_info');
            $table->json('browser_info');
            $table->timestamps();
        });
        Schema::table('user_traces', function (Blueprint $table) {
            $table->dropColumn('location_info', 'browser_info');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_trace_data');
    }
}