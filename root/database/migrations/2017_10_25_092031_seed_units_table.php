<?php

use App\Unit;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('units', function (Blueprint $table) {
            $data = [
                ['name' => 'Piece(s)','description'=>'prices'],
                ['name' => 'KG(s)','description'=>'kgs'],
                ['name' => 'Liter(s)','description'=>'liters']
            ];
            foreach($data as $d){
                Unit::query()->create($d);
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
        Schema::table('units', function (Blueprint $table) {
            //
        });
    }
}
