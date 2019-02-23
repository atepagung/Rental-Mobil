<?php

use Illuminate\Database\Seeder;
use App\ServiceClass;

class ServiceClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $serviceClasses = [
        	'VIP',
        	'LUXURY'
        ];

        foreach ($serviceClasses as $value) {
        	$serviceClass = new ServiceClass;
        	$serviceClass->type = $value;
            if ($value == 'VIP') {
                $serviceClass->seat = "15";
            }else {
                $serviceClass->seat = "9";
            }
        	$serviceClass->save();
        }
    }
}
