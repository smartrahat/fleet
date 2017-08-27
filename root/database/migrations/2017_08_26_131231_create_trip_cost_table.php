<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripCostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_costs', function (Blueprint $table) {
            $table->increments('id');
            $table->authorities();
            $table->date('date');
            $table->integer('program_id');
            $table->string('driver_salary');
            $table->string('helper_salary');
            $table->string('fuel_cost');
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
        Schema::dropIfExists('trip_costs');
    }
}
