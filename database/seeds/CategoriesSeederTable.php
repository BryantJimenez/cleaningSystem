<?php

use Illuminate\Database\Seeder;

class CategoriesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
        	['name' => 'Casa de Playa', 'slug' => 'category-1', 'state' => '1'],
        	['name' => 'Casa de Invierno', 'slug' => 'category-2', 'state' => '1'],
        	['name' => 'Casa de Bosque', 'slug' => 'category-3', 'state' => '1'],
        	['name' => 'Apartamento', 'slug' => 'category-4', 'state' => '1'],
        	['name' => 'Casa', 'slug' => 'category-5', 'state' => '1']
    	];
    	DB::table('categories')->insert($categories);
    }
}
