<?php

use Illuminate\Database\Seeder;
use App\PickupPlace;

class PickupPlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $picks = [
            ['JAKARTA', 2],
            ['BOGOR', 1],
            ['DEPOK', 1],
            ['TANGERANG', 3],
            ['BEKASI', 1],
            ['CIANJUR', 1],
            ['KARAWANG', 1],
            ['BANDUNG', 1],
            ['PURWAKARTA', 1],
            ['SUKABUMI', 1]
        ];

        foreach ($picks as $pick) {
            $pickupPlace = new PickupPlace;
            $pickupPlace->city = $pick[0];
            $pickupPlace->province_id = $pick[1];
            $pickupPlace->save();
        }
        /*$pickupPlace = new PickupPlace;
        $pickupPlace->city = "BANDUNG";
        $pickupPlace->province_id = 1;
        $pickupPlace->save();

        $pickupPlace = new PickupPlace;
        $pickupPlace->city = "JAKARTA";
        $pickupPlace->province_id = 1;
        $pickupPlace->save();

        $pickupPlace = new PickupPlace;
        $pickupPlace->city = "BEKASI";
        $pickupPlace->province_id = 1;
        $pickupPlace->save();

        $pickupPlace = new PickupPlace;
        $pickupPlace->city = "BANTEN";
        $pickupPlace->province_id = 1;
        $pickupPlace->save();

        $pickupPlace = new PickupPlace;
        $pickupPlace->city = "JATINANGOR";
        $pickupPlace->province_id = 1;
        $pickupPlace->save();*/
    }
}
