<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->string('password');
            $table->date('birthday')->nullable();
            $table->string('wechat')->nullable();
            $table->string('qq')->nullable();
            $table->unsignedInteger('role');
            $table->unsignedInteger('school_id');
            $table->rememberToken();
            $table->timestamps();
        });
        
        DB::table('users')->insert([
            'name' => 'Admin',
            'email'=>'admin@admin.admin',
            'password'=>'123456',
            'birthday'=>1900-01-01,
            'role'=>-1,
            'school_id'=>-1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
