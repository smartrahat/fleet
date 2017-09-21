<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->authorities();
            $table->string('name');
            $table->integer('brand_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->integer('owner_id')->unsigned();
            $table->date('roadPermitStart');
            $table->date('roadPermitEnd');
            $table->date('taxTokenStart');
            $table->date('taxTokenEnd');
            $table->date('insuranceStart');
            $table->date('insuranceEnd');
            $table->date('fitnessStart');
            $table->date('fitnessEnd');
            $table->date('regCertStart');
            $table->date('regCertEnd');
            $table->string('vehicleNo');
            $table->string('engineNo');
            $table->string('chasesNo');
            $table->string('mobile');
            $table->integer('status_id')->unsigned();
            $table->string('image');
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
        Schema::dropIfExists('vehicles');
    }
}
