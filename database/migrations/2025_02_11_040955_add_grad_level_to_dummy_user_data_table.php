<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGradLevelToDummyUserDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dummy_user_data', function (Blueprint $table) {
            $table->string('grad_level')->nullable()->default("UG");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dummy_user_data', function (Blueprint $table) {
            $table->dropColumn('grad_level');
        });
    }
}
