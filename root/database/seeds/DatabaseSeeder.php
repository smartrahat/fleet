<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(CompanyTableSeeder::class);
        // $this->call(UserTableSeeder::class);
        // $this->call(BrandTableSeeder::class);
        $this->call(DesignationTableSeeder::class);
        // $this->call(StatusTableSeeder::class);
        // $this->call(TypeTableSeeder::class);
        $this->call(DriverTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);
        $this->call(OwnerTableSeeder::class);
        $this->call(PartyTableSeeder::class);
        $this->call(VehicleTableSeeder::class);
    }
}
