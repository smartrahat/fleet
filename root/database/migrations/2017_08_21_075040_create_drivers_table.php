<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->authorities();
            $table->string('name');
            $table->string("f_name")->nullable();
            $table->string("m_name")->nullable();
            $table->string("pre_address")->nullable();
            $table->string("perm_address")->nullable();
            $table->string("nid")->nullable();
            $table->string("d_licence")->nullable();
            $table->string("image")->nullable();
            $table->string("mobile")->nullable();
            $table->string("ref_name");
            $table->string("app_person")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Drivers');
    }
}
