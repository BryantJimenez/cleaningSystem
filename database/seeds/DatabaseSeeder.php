<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(CompaniesSeederTable::class);
        $this->call(PoolsSeederTable::class);
        $this->call(ContractsSeederTable::class);
        $this->call(ServicesSeederTable::class);
        $this->call(CategoriesSeederTable::class);
        $this->call(HouseholdsSeederTable::class);
        $this->call(HouseholdPhotosSeederTable::class);
        $this->call(BanksSeederTable::class);
        $this->call(BusinessSeederTable::class);
        $this->call(EmployeesSeederTable::class);
        $this->call(OpinionsSeederTable::class);
        $this->call(SectionsSeederTable::class);
        
    }
}
