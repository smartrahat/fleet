<?php

use App\State;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('states', function (Blueprint $table) {
            $data = [
                ['country_id' => 1,'name'=>'Dhaka Division'],
                ['country_id' => 1,'name'=>'Chittagong Division'],
                ['country_id' => 1,'name'=>'Rajshahi Division'],
                ['country_id' => 1,'name'=>'Khulna Division'],
                ['country_id' => 1,'name'=>'Sylhet Division'],
                ['country_id' => 1,'name'=>'Mymensing Division'],
                ['country_id' => 1,'name'=>'Rangpur Division'],
                ['country_id' => 1,'name'=>'Barisal Division'],
            ];
            foreach($data as $d){
                State::create($d);
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('states', function (Blueprint $table) {
            //
        });
    }
}
