<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripTable extends Migration
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
            $table->string('loading');
            $table->string('unloading');
            $table->string('product');
            $table->string('emp_container');
            $table->string('weight');
            $table->string('fuel');
            //$table->string('rent');
            $table->string('driver_adv');
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
