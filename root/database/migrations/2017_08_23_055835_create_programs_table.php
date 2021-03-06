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
            $table->date('date');
            $table->integer('serial');
            $table->integer('employee_id')->unsigned();
            $table->integer('party_id')->unsigned();
            $table->float('weight')->nullable();
            $table->float('rate')->nullable();
            $table->integer('adv_rent');
            $table->integer('due_rent');
            $table->integer('rent');
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
        Schema::dropIfExists('Programs');
    }
}
