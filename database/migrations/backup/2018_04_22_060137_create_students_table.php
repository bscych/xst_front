<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('primaryschool')->nullable();
            $table->boolean('hasRegistered')->default(false);
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->unsignedInteger('operator');
            $table->foreign('operator')->references('id')->on('users');
            $table->timestamps();
        });
        
         Schema::create('contact_persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('relatoinShip');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('wechat');
            $table->string('qq');
            $table->unsignedInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->timestamps();
        });
        
         Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
             $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
        Schema::dropIfExists('contact_persons');
        Schema::dropIfExists('teachers');
    }
}
