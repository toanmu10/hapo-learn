<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('user_course', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('course_id');
            $table->date('register_course_time')->nullable();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_course');
    }
}
