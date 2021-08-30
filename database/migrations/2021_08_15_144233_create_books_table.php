<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string(
                'name'
            );
            $table->string('author')->nullable();
            $table->string('department_slug')->nullable();
            $table->string(
                'level_term_slug'
            )->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id')->references('id')->on('courses');
            $table->unsignedBigInteger('user_id')->nullable();

            $table->string(
                'user_type'
            )->default('admin');
            $table->string('post_type')->default('book');
            $table->string('link');
            $table->string('image')->nullable();
            $table->string('status')->default(0);
            $table->longText('custom_message')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
