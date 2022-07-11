<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTagsTable extends Migration
{
    public function up()
    {
        Schema::create('course_tag', function (Blueprint $table) {
            $table->integer('course_id');
            $table->integer('tag_id');
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_tag');
    }
}
