<?php

use Illuminate\Database\Seeder;
use App\Unit;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
        	[1, 7],
            [2, 2]
        ];

        foreach ($units as $value) {
        	$unit = new Unit;
        	$unit->unit_type_id = $value[0];
        	$unit->unit = $value[1];
        	$unit->save();
        }
    }
}
