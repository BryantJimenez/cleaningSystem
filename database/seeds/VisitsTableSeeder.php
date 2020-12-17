<?php

use Illuminate\Database\Seeder;

class VisitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Visit::class, 700)->create();
        factory(App\NewsVisit::class, 100)->create();
    }
}
