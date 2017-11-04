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
            $table->foreign('supplier_id')->references('id')->on('suppliers');
        });
    }
    //supplier_id, 'vehicle_id','category_id','parts_id','brand_id'

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('purchases', function (Blueprint $table) {
            $table->dropForeignAuthority();
            $table->dropForeign(['supplier_id']);
        });
    }
}
