<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatessysTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('constant_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
        });


        Schema::create('constants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('constant_category_id');
            $table->foreign('constant_category_id')->references('id')->on('constant_categories');
            $table->string('value');
            $table->string('label_name')->nullable();
            $table->timestamps();
        });
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('price', 8, 2);
            $table->integer('duration');
            $table->unsignedInteger('constant_id');
            $table->foreign('constant_id')->references('id')->on('constants');
            $table->timestamps();
        });
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('homepage')->nullable();
            $table->string('city')->nullable();
            $table->timestamps();
        });

        Schema::create('classrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->unsignedInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->timestamps();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('userinfos', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('name');
            $table->string('mobile')->nullable();
            $table->date('birthday')->nullable();
            $table->string('wechat')->nullable();
            $table->string('qq')->nullable();
            $table->unsignedInteger('operator');
            $table->foreign('operator')->references('id')->on('users');
            $table->boolean('is_deleted')->default(false);
            $table->timestamps();
        });

        Schema::create('user_userinfo', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('userinfo_id');
            $table->foreign('userinfo_id')->references('id')->on('userinfos');
        });
        
        Schema::create('school_userinfo', function (Blueprint $table) {
            $table->unsignedInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->unsignedInteger('userinfo_id');
            $table->foreign('userinfo_id')->references('id')->on('userinfos');
        });

        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('comments');
            $table->string('primaryschool')->nullable();
            $table->boolean('hasRegistered')->default(false);

            $table->unsignedInteger('userinfo_id');
            $table->foreign('userinfo_id')->references('id')->on('userinfos');
            $table->unsignedInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools');

            $table->timestamps();
        });

        Schema::create('account_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->double('amount', 8, 2);
            $table->unsignedInteger('accountingSubjects');
            $table->foreign('accountingSubjects')->references('id')->on('constants');
            $table->string('comments');
            $table->unsignedInteger('operator');
            $table->foreign('operator')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('userinfo_id');
            $table->foreign('userinfo_id')->references('id')->on('userinfos');
            // $table->unsignedInteger('school_id');
            //$table->unsignedInteger('role');
        });
/*
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
            $table->foreign('classroom_id')->references('id')->on('classrooms');
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
        */

        DB::table('constant_categories')->insert([
            'name' => '交费类型',
        ]);
        DB::table('constant_categories')->insert([
            'name' => '课程类型',
        ]);

        DB::table('constant_categories')->insert([
            'name' => '学生状态',
        ]);
        DB::table('constant_categories')->insert([
            'name' => 'Teacher Status',
        ]);
        DB::table('constant_categories')->insert([
            'name' => '班级状态',
        ]);
        DB::table('constant_categories')->insert([
            'name' => '角色',
        ]);
        DB::table('constant_categories')->insert([
            'name' => str_random(10),
        ]);
        DB::table('constant_categories')->insert([
            'name' => str_random(10),
        ]);

        DB::table('constants')->insert([
            'constant_category_id' => 1,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 1,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 1,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 1,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 1,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 2,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 2,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 2,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 2,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 2,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 3,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 3,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 3,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 3,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 3,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 4,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 4,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 5,
            'value' => 'Admin',
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 5,
            'value' => 'Sales',
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 5,
            'value' => 'Teacher',
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 5,
            'value' => 'Student',
            'label_name' => str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id' => 5,
            'value' => str_random(10),
            'label_name' => str_random(10)
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'bscych@hotmail.com',
            'password' => '$2y$10$iRYX9FH4mgL8Xyi0./2ur.n9Mvc.vljOPvoPLB.HdgvsvBlDQEl5.'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('constant_categories');
        Schema::dropIfExists('constants');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('schools');
        Schema::dropIfExists('classrooms');
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('users');
        Schema::dropIfExists('userinfos');
        Schema::dropIfExists('user_userinfo');
        Schema::dropIfExists('students');
        Schema::dropIfExists('account_details ');
        Schema::dropIfExists('teachers');
        Schema::dropIfExists('plans');
        Schema::dropIfExists('classes');
        Schema::dropIfExists('plan_students');
        Schema::dropIfExists('class_students');
    }

}
