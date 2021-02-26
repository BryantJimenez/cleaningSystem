<?php

use Illuminate\Database\Seeder;

class BusinessSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $businesses = [
        	['name' => 'Cleaning Company', 'slug' => 'business-1', 'phone' => '12345678', 'address' => 'Zaragoza', 'specialty' => 'Limpieza General', 'state' => '1'],
        	['name' => 'Key Keepers Company', 'slug' => 'business-2', 'phone' => '91011121', 'address' => 'Madrid', 'specialty' => 'Key Keepers', 'state' => '1'],
        	['name' => 'Pool Cleaning Company', 'slug' => 'business-3', 'phone' => '31415161', 'address' => 'Caracas', 'specialty' => 'Limpieza de piscinas', 'state' => '1'],
        	['name' => 'Garden Cleaning Comapny', 'slug' => 'business-4', 'phone' => '71819202', 'address' => 'Barcelona', 'specialty' => 'Limpieza de Jardin', 'state' => '1'],
        	['name' => 'Garage Cleaning Company', 'slug' => 'business-5', 'phone' => '12347890', 'address' => 'Malta', 'specialty' => 'Limpieza de garaje', 'state' => '1']
    	];
    	DB::table('businesses')->insert($businesses);
    }
}
