<?php

use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $data = [
                [
                    'company_id' => 1,
                    'user_id' => 1,
                    'role_id' => 1,
                    'name' => 'Mohammed Rahat Hossain',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('password')
                ],
                [
                    'company_id' => 1,
                    'user_id' => 1,
                    'role_id' => 1,
                    'name' => 'Faisal Nur Roney',
                    'email' => 'md.faisalnur55@gmail.com',
                    'password' => bcrypt('password')
                ]
            ];
            foreach($data as $d){
                User::query()->create($d);
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
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
