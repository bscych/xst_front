<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
