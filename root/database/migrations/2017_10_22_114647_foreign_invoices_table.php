<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->foreignAuthority();
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropForeignAuthority();
            $table->dropForeign(['employee_id']);
            $table->dropForeign(['supplier_id']);
        });
    }
}
