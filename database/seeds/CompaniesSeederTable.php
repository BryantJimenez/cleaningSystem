<?php

use Illuminate\Database\Seeder;

class CompaniesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            ['name' => 'Ninguna', 'slug' => 'company-1-1', 'state' => '1', 'type' => '1'],
            ['name' => 'Ninguna', 'slug' => 'company-1-2', 'state' => '1', 'type' => '2'],
            ['name' => 'Ninguna', 'slug' => 'company-1-3', 'state' => '1', 'type' => '3'],
            ['name' => 'Ninguna', 'slug' => 'company-1-5', 'state' => '1', 'type' => '4'],
        	['name' => 'Compañía de Alarmas', 'slug' => 'company-1', 'state' => '1', 'type' => '1'],
        	['name' => 'Compañía Eléctrica', 'slug' => 'company-2', 'state' => '1', 'type' => '2'],
        	['name' => 'Compañía de Agua', 'slug' => 'company-3', 'state' => '1', 'type' => '3'],
        	['name' => 'Compañía Telefónica', 'slug' => 'company-4', 'state' => '1', 'type' => '4']
            
    	];
    	DB::table('companies')->insert($companies);
    }
}
