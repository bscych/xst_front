<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->string('description');
            $table->unsignedInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->unsignedInteger('teacher');
            $table->foreign('teacher')->references('id')->on('teachers');
            $table->unsignedInteger('supervisor')->nullable();
            $table->unsignedInteger('classroom_id');
            $table->foreign('classroom_id')->references('id')->on('class_rooms');
            $table->unsignedInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->integer('numberOfPeriod');
            $table->integer('numberOfStudent');
            $table->date('start_at');
            $table->date('end_at');
            $table->timestamps();
        });
        
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('plans');
            $table->time('start_at');
            $table->time('end_at');
            $table->integer('numberOfPeriod');
            $table->integer('class_status');
            $table->timestamps();
        });
        
         
        Schema::create('plan_students', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('plans');
            $table->unsignedInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->timestamps();
        });
        Schema::create('class_students', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('class_id');
            $table->foreign('class_id')->references('id')->on('classes');
            $table->unsignedInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->unsignedInteger('student_status');
            $table->foreign('student_status')->references('id')->on('constants');
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
        Schema::dropIfExists('plans');
        Schema::dropIfExists('classes');
        Schema::dropIfExists('plan_students');
        Schema::dropIfExists('class_students');
    }
}
