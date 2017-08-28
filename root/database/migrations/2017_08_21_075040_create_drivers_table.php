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
            $table->string("f_name");
            $table->string("m_name");
            $table->string("pre_address");
            $table->string("perm_address");
            $table->string("nid");
            $table->string("d_licence");
            $table->string("image");
            $table->string("mobile");
            $table->string("ref_name");
            $table->string("app_person");
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
