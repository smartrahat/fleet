<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Programs', function (Blueprint $table) {
            $table->increments('id');
            $table->authorities();
            $table->integer('vehicle_id')->unsigned();
            $table->integer('driver_id')->unsigned();
            $table->integer('party_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->date('date');
            $table->integer('serial');
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
        Schema::dropIfExists('Programs');
    }
}
