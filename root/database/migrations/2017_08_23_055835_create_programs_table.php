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
            $table->integer('vehicle_id');
            $table->integer('driver_id');
            $table->integer('party_id');
            $table->integer('employee_id');
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
