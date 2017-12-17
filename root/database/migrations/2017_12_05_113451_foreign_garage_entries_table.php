<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignGarageEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('garage_entries', function (Blueprint $table) {
            $table->foreignAuthority();
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
        Schema::table('garage_entries', function (Blueprint $table) {
            $table->dropForeignAuthority();
            $table->dropForeign(['vehicle_id']);
        });
    }
}
