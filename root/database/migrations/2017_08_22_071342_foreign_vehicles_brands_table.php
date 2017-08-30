<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignVehiclesBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->foreignAuthority();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropForeignAuthority();
            $table->dropForeign(['brand_id']);
            $table->dropForeign(['owner_id']);
            $table->dropForeign(['type_id']);
            $table->dropForeign(['status_id']);
        });
    }
}
