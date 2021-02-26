<?php

use Illuminate\Database\Seeder;

class EmployeesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
        	['business_id' => '1', 'slug' => 'employee-1', 'name' => 'Maria', 'lastname' => 'Gonzalez', 'phone' => '12345678', 'address' => 'Zaragoza', 'email' => 'mariagonzalez@gmail.com', 'dni' =>'1234567', 'state' => '1'],
        	['business_id' => '1', 'slug' => 'employee-2', 'name' => 'Juan', 'lastname' => 'López', 'phone' => '91011121', 'address' => 'Madrid', 'email' => 'juanlopez@gmail.com', 'dni' => '91234567', 'state' => '1'],
        	['business_id' => '1', 'slug' => 'employee-3', 'name' => 'Olivia', 'lastname' => 'Ibarra', 'phone' => '31415161', 'address' => 'Caracas', 'email' => 'oliviaibarra@gmail.com', 'dni' => '89012345', 'state' => '1'],
        	['business_id' => '1', 'slug' => 'employee-4', 'name' => 'Aida', 'lastname' => 'Blanco', 'phone' => '71819202', 'address' => 'Barcelona', 'email' => 'Laidablanco@gmail.com', 'dni' =>'90123456', 'state' => '1'],
        	['business_id' => '1', 'slug' => 'employee-5', 'name' => 'Gabriela', 'lastname' => 'Rangel', 'phone' => '12347890', 'address' => 'Malta', 'email' => 'gbrielarangel@gmail.com', 'dni' =>'78901234', 'state' => '1']
    	];
    	DB::table('employees')->insert($employees);
    }
}
