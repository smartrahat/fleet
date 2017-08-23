<?php

use App\Company;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $data = [
                'name' => 'Web Point Limited',
                'address' => 'Fulkoli Bhaban, College Road',
                'city_id' => 1,
                'state_id' => 2,
                'country_id' => 1,
                'phone' => '01875 004610',
                'email' => 'info@webpointbd.com',
                'logo' => '',
                'favicon' => ''
            ];

            Company::create($data);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            //
        });
    }
}
