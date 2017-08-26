<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Trips', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('program_id');
            $table->string('loading');
            $table->string('unloading');
            $table->string('product');
            $table->string('emp_container');
            $table->string('weight');
            $table->string('fuel');
            $table->string('fuel_cost');
            $table->string('rent');
            $table->string('driver_adv');
            $table->string('driver_salary');
            $table->string('helper_salary');
            $table->string('driver_allow');
            $table->string('helper_allow');
            $table->string('labour');
            $table->string('toll');
            $table->string('bridge');
            $table->string('scale');
            $table->string('wheel');
            $table->string('donation');
            $table->string('container');
            $table->string('port_gate');
            $table->string('driver_cost');
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
        Schema::dropIfExists('Trips');
    }
}
