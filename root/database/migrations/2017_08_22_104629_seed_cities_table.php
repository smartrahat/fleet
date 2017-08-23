<?php

use App\City;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cities', function (Blueprint $table) {
            $data = [
                ['country_id'=>1,'state_id'=>8,'name'=>'Barguna'],
                ['country_id'=>1,'state_id'=>8,'name'=>'Barisal'],
                ['country_id'=>1,'state_id'=>8,'name'=>'Bhola'],
                ['country_id'=>1,'state_id'=>8,'name'=>'Jhalkati'],
                ['country_id'=>1,'state_id'=>8,'name'=>'Potuakhali'],
                ['country_id'=>1,'state_id'=>8,'name'=>'Pirojpur'],
                ['country_id'=>1,'state_id'=>2,'name'=>'Bandorbun'],
                ['country_id'=>1,'state_id'=>2,'name'=>'Brammonbaria'],
                ['country_id'=>1,'state_id'=>2,'name'=>'Chandpur'],
                ['country_id'=>1,'state_id'=>2,'name'=>'Chittagong'],
                ['country_id'=>1,'state_id'=>2,'name'=>'Comilla'],
                ['country_id'=>1,'state_id'=>2,'name'=>'Cox\'s Bazar'],
                ['country_id'=>1,'state_id'=>2,'name'=>'Feni'],
                ['country_id'=>1,'state_id'=>2,'name'=>'Khagrachari'],
                ['country_id'=>1,'state_id'=>2,'name'=>'Laxmipur'],
                ['country_id'=>1,'state_id'=>2,'name'=>'Noakhali'],
                ['country_id'=>1,'state_id'=>2,'name'=>'Rangamati'],
                ['country_id'=>1,'state_id'=>1,'name'=>'Dhaka'],
                ['country_id'=>1,'state_id'=>1,'name'=>'Faridpur'],
                ['country_id'=>1,'state_id'=>1,'name'=>'Gazipur'],
                ['country_id'=>1,'state_id'=>1,'name'=>'Gopalganj'],
                ['country_id'=>1,'state_id'=>1,'name'=>'Kishorganj'],
                ['country_id'=>1,'state_id'=>1,'name'=>'Madaripur'],
                ['country_id'=>1,'state_id'=>1,'name'=>'Manikganj'],
                ['country_id'=>1,'state_id'=>1,'name'=>'Munshiganj'],
                ['country_id'=>1,'state_id'=>1,'name'=>'Narayanganj'],
                ['country_id'=>1,'state_id'=>1,'name'=>'Narshingdi'],
                ['country_id'=>1,'state_id'=>1,'name'=>'Rajbari'],
                ['country_id'=>1,'state_id'=>1,'name'=>'Shariatpur'],
                ['country_id'=>1,'state_id'=>1,'name'=>'Tangail'],
                ['country_id'=>1,'state_id'=>7,'name'=>'Bagerhat'],
                ['country_id'=>1,'state_id'=>7,'name'=>'Chuadanga'],
                ['country_id'=>1,'state_id'=>7,'name'=>'Jessore'],
                ['country_id'=>1,'state_id'=>7,'name'=>'Jhinaidaha'],
                ['country_id'=>1,'state_id'=>7,'name'=>'Khulna'],
                ['country_id'=>1,'state_id'=>7,'name'=>'Kushtia'],
                ['country_id'=>1,'state_id'=>7,'name'=>'Magura'],
                ['country_id'=>1,'state_id'=>7,'name'=>'Meherpur'],
                ['country_id'=>1,'state_id'=>7,'name'=>'Norail'],
                ['country_id'=>1,'state_id'=>7,'name'=>'Sathkira'],
                ['country_id'=>1,'state_id'=>6,'name'=>'Jamalpur'],
                ['country_id'=>1,'state_id'=>6,'name'=>'Netrokuna'],
                ['country_id'=>1,'state_id'=>6,'name'=>'Mymensing'],
                ['country_id'=>1,'state_id'=>6,'name'=>'Sherpur'],
                ['country_id'=>1,'state_id'=>3,'name'=>'Bogra'],
                ['country_id'=>1,'state_id'=>3,'name'=>'Joypurhat'],
                ['country_id'=>1,'state_id'=>3,'name'=>'Nouga'],
                ['country_id'=>1,'state_id'=>3,'name'=>'Nator'],
                ['country_id'=>1,'state_id'=>3,'name'=>'Nobabgonj'],
                ['country_id'=>1,'state_id'=>3,'name'=>'Pabna'],
                ['country_id'=>1,'state_id'=>3,'name'=>'Rajshahi'],
                ['country_id'=>1,'state_id'=>3,'name'=>'Shirajganj'],
                ['country_id'=>1,'state_id'=>5,'name'=>'Dinajpur'],
                ['country_id'=>1,'state_id'=>5,'name'=>'Gaibanda'],
                ['country_id'=>1,'state_id'=>5,'name'=>'Kurigram'],
                ['country_id'=>1,'state_id'=>5,'name'=>'Lalmonirhat'],
                ['country_id'=>1,'state_id'=>5,'name'=>'Nilfamari'],
                ['country_id'=>1,'state_id'=>5,'name'=>'Panchogor'],
                ['country_id'=>1,'state_id'=>5,'name'=>'Rangpur'],
                ['country_id'=>1,'state_id'=>5,'name'=>'Tegorgaon'],
                ['country_id'=>1,'state_id'=>4,'name'=>'Hobiganj'],
                ['country_id'=>1,'state_id'=>4,'name'=>'Moulovibazar'],
                ['country_id'=>1,'state_id'=>4,'name'=>'Sunamganj'],
                ['country_id'=>1,'state_id'=>4,'name'=>'Sylhet'],
            ];
            foreach($data as $d){
                City::create($d);
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
        Schema::table('cities', function (Blueprint $table) {
            //
        });
    }
}
