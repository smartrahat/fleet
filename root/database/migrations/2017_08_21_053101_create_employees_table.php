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
            ['name','f_name','m_name','pre_address','perm_address', 'nid',
                'designation','image','mobile','email','join_date','app_person'];
            $table->increments('id');
            $table->authorities();
            $table->string('name');
            $table->string("f_name")->nullable();
            $table->string("m_name")->nullable();
            $table->text('pre_address')->nullable();
            $table->text('perm_address')->nullable();
            $table->string('nid')->nullable();
            $table->string('designation');
            $table->string('image')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->date('join_date')->nullable();
            $table->string('app_person')->nullable();
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
        Schema::dropIfExists('Employees');
    }
}
