<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignTripCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trip_costs', function (Blueprint $table) {
            $table->foreignAuthority();
            $table->foreign('program_id')->references('id')->on('programs');
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trip_costs', function (Blueprint $table) {
            $table->dropForeignAuthority();
            $table->dropForeign(['program_id']);
            $table->dropForeign(['driver_id']);
            $table->dropForeign(['vehicle_id']);
        });
    }
}
