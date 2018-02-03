<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignServiceUsedPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('used_parts', function (Blueprint $table) {
            $table->foreignAuthority();
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('used_parts', function (Blueprint $table) {
            $table->dropForeignAuthority();
            $table->dropForeign(['service_id']);
            $table->dropForeign(['employee_id']);
            $table->dropForeign(['product_id']);
        });
    }
}
