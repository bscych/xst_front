<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
class CreateConstantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
        
        DB::table('constant_categories')->insert([
            'name' => '交费类型',
        ]);
        DB::table('constant_categories')->insert([
            'name' => '课程类型',
        ]);
        DB::table('constant_categories')->insert([
            'name' => '角色',
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
            'name' => str_random(10),
        ]);
        DB::table('constant_categories')->insert([
            'name' => str_random(10),
        ]);
        
        DB::table('constants')->insert([
            'constant_category_id'=>1,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id'=>1,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id'=>1,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id'=>1,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id'=>1,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);DB::table('constants')->insert([
            'constant_category_id'=>2,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);DB::table('constants')->insert([
            'constant_category_id'=>2,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);DB::table('constants')->insert([
            'constant_category_id'=>2,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);DB::table('constants')->insert([
            'constant_category_id'=>2,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);DB::table('constants')->insert([
            'constant_category_id'=>2,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);DB::table('constants')->insert([
            'constant_category_id'=>3,
            'value'=>'Admin',
            'label_name'=>str_random(10)
        ]);DB::table('constants')->insert([
            'constant_category_id'=>3,
            'value'=>'Sales',
            'label_name'=>str_random(10)
        ]);DB::table('constants')->insert([
            'constant_category_id'=>3,
            'value'=>'Teacher',
            'label_name'=>str_random(10)
        ]);DB::table('constants')->insert([
            'constant_category_id'=>3,
            'value'=>'Student',
            'label_name'=>str_random(10)
        ]);DB::table('constants')->insert([
            'constant_category_id'=>3,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);DB::table('constants')->insert([
            'constant_category_id'=>4,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);DB::table('constants')->insert([
            'constant_category_id'=>4,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);DB::table('constants')->insert([
            'constant_category_id'=>4,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);DB::table('constants')->insert([
            'constant_category_id'=>4,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id'=>4,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id'=>5,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);
        DB::table('constants')->insert([
            'constant_category_id'=>5,
            'value'=>str_random(10),
            'label_name'=>str_random(10)
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constant_categories');
        Schema::dropIfExists('constants');
    }
}
