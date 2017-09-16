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
            $table->integer('program_id')->unsigned();
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
            $table->string('other');
            $table->string('total');
            $table->timestamps();
            $table->softDeletes();
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
