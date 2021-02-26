<?php

use Illuminate\Database\Seeder;

class ServicesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$services = [
    		['name' => 'Supervisión', 'slug' => 'service-1', 'photo' => 'supervision.jpg', 'description' => 'Hacemos una visita periódica para supervisar cualquier eventualidad', 'square_meter' => '0.35', 'state' => '1'],
    		['name' => 'Cuidamos de tu Casa', 'slug' => 'service-2', 'photo' => 'cuidado.jpg', 'description' => 'Gestión y Tramitación de averías, puertas de acceso, vallado, terrazas, toldos, retiradas de escombros, etc.', 'square_meter' => '0.35', 'state' => '1'],
    		['name' => 'Limpieza', 'slug' => 'service-3', 'photo' => 'limpieza.jpg', 'description' => 'Servicio de Lavandería y Limpieza. Nuestro equipo especializado se encargará de cubrir con la máxima calidad todas tus necesidades', 'square_meter' => '0.35', 'state' => '1'],
    		['name' => 'Key Keepers', 'slug' => 'service-4', 'photo' => 'key.jpg', 'description' => 'Tenemos unas llaves de tu casa por todos esos imprevistos que puedan suceder cuando no estas o quizás  se te hayan olvidado', 'square_meter' => '0.35', 'state' => '1'],
    		['name' => 'Mantenimiento', 'slug' => 'service-5', 'photo' => 'mantenimiento.jpg', 'description' => 'Mantenimiento de jardín y piscina', 'square_meter' => '0.35', 'state' => '1']
    	];
    	DB::table('services')->insert($services);
    }
}
