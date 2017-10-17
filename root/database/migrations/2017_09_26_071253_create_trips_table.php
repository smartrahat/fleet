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
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->authorities();
            $table->integer('program_id')->unsigned();
            $table->integer('driver_id')->unsigned();
            $table->integer('vehicle_id')->unsigned();
            $table->integer('driver_adv')->nullable();
            $table->string('loading')->nullable();
            $table->string('unloading')->nullable();
            $table->string('product')->nullable();
            $table->string('emp_container')->nullable();
            $table->string('fuel')->nullable();
            $table->integer('d_a_fix')->nullable();
            $table->integer('extra_adv')->nullable();
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
        Schema::dropIfExists('trips');
    }
}
