<?php

use Illuminate\Database\Seeder;
use App\Rate;

class RatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rates = [
        	['DROP', 'Layanan antar ke tempat tujuan anda'],
        	['HALF DAY', 'Layanan pemakaian armada selama 8 jam'],
        	['FULL DAY', 'layanan pemakaian armada selama 16 jam']
        ];

        foreach ($rates as $value) {
        	$rate = new Rate;
        	$rate->type = $value[0];
            $rate->type_detail = $value[1];
        	$rate->save();
        }
    }
}
