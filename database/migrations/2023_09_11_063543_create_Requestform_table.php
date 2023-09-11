<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Requestform', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname')->nullable();
            $table->integer('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('c_address')->nullable();
            $table->string('car_model')->nullable();
            $table->integer('y_manifactured')->nullable();
            $table->string('service_name')->nullable();
            $table->date('appointment')->nullable();
            $table->string('instructions')->nullable();
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
        Schema::dropIfExists('Requestform');
    }
}
