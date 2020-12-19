<?php

use Illuminate\Database\Seeder;

class ContractsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contracts = [
        	['name' => 'Estándar', 'slug' => 'contact-1', 'price' => '10.00', 'state' => 1],
        	['name' => 'Medio', 'slug' => 'contact-2', 'price' => '20.00', 'state' => 1],
        	['name' => 'VIP', 'slug' => 'contact-3', 'price' => '30.00', 'state' => 1]
    	];
    	DB::table('contracts')->insert($contracts);
    }
}
