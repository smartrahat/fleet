<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('problems', function (Blueprint $table) {
            $table->foreignAuthority();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('problems', function (Blueprint $table) {
            $table->dropForeignAuthority();
            $table->dropForeign(['vehicle_id']);
            $table->dropForeign(['employee_id']);
            $table->dropForeign(['category_id']);
        });
    }
}
