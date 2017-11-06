<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('purchases', function (Blueprint $table) {
            $table->foreignAuthority();
            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('parts_id')->references('id')->on('parts');
            $table->foreign('brand_id')->references('id')->on('productbrands');
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
            $table->dropForeign(['invoice_id']);
            $table->dropForeign(['category_id']);
            $table->dropForeign(['parts_id']);
            $table->dropForeign(['brand_id']);
        });
    }
}
