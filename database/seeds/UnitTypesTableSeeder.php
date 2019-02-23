<?php

use Illuminate\Database\Seeder;
use App\UnitType;

class UnitTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
        	'VIP',
        	'LUXURY'
        ];

        foreach ($units as $unit) {
        	$unitType = new UnitType;
        	$unitType->type = $unit;
        	$unitType->save();
        }
    }
}
