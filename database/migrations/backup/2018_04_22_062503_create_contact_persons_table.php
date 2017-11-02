<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactPersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_persons');
    }
}
