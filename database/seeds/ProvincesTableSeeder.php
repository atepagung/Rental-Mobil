<?php

use Illuminate\Database\Seeder;
use App\Province;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$provs = [
    		'JAWA BARAT',
    		'DKI JAKARTA',
    		'BANTEN',
    		'JATENG',
    		'JATIM',
    		'BALI',
    		'NTB',
    		'LAMPUNG',
    		'SUMATERA SELATAN',
    		'SUMATERA BARAT',
    		'SUMATERA UTARA',
    		'ACEH'
    	];
    	foreach ($provs as $prov) {
	        $province = new Province;
	        $province->province = $prov;
	        $province->save();
    	}
    }
}
