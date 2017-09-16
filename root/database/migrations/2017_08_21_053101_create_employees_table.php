<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Employees', function (Blueprint $table) {
            $table->increments('id');
            $table->authorities();
            $table->string('name');
            $table->string("f_name")->nullable();
            $table->string("m_name")->nullable();
            $table->text('pre_address')->nullable();
            $table->text('perm_address')->nullable();
            $table->string('nid')->nullable();
            $table->date('dob')->nullable();
            $table->string('education')->nullable();
            $table->integer('designation_id')->unsigned();
            $table->string('image')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->date('join_date')->nullable();
            $table->string('app_person')->nullable();
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
        Schema::dropIfExists('Employees');
    }
}
