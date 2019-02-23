<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(DestinationsTableSeeder::class);
        $this->call(PickupPlacesTableSeeder::class);
        $this->call(RatesTableSeeder::class);
        $this->call(ServiceClassesTableSeeder::class);
        $this->call(UnitTypesTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}
