<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->authorities();
            $table->integer('invoice_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('parts_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->integer('quantity');
            $table->float('rate');
            $table->float('p_total');
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
        Schema::dropIfExists('invoices');
    }
}
