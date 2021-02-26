<?php

use Illuminate\Database\Seeder;

class PoolsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pools = [
        	['name' => 'Grande', 'slug' => 'pool-1', 'state' => '1'],
        	['name' => 'Mediana', 'slug' => 'pool-2', 'state' => '1'],
        	['name' => 'Pequeña', 'slug' => 'pool-3', 'state' => '1']
    	];
    	DB::table('pools')->insert($pools);
    }
}
