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
                ['name' => 'KG(s)','company_id'=>1,'user_id'=>1,'description'=>null],
                ['name' => 'Litre(s)','company_id'=>1,'user_id'=>1,'description'=>null],
                ['name' => 'Piece(s)','company_id'=>1,'user_id'=>1,'description'=>null]
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
