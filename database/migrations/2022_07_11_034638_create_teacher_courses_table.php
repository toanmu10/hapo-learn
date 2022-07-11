<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('teacher_course', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('course_id');
            $table->date('teach_course_time')->nullable();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher_courses');
    }
}
