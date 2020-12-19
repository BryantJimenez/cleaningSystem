<?php

use Illuminate\Database\Seeder;

class OpinionsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $opinions = [
        	['photo' => 'testimony-1.jpg', 'opinion' => 'Tenemos un pequeño chalet que heredamos de mis suegros. Mi mujer le tiene especial aprecio. Sin embargo, en muchas ocasiones, me es imposible ir a pasar una temporadas y saber si estan en las mejores condiciones. Mi mujer siempre estaba preocupada por si algo de la casa fallaba. Desde que contratamos los servicios de <strong>Cuidamos tu casa</strong> mi mujer está mas tranquila', 'name' => 'José Antonio Martín', 'position' => 'Cliente Satisfecho', 'state' => 1],
        	['photo' => 'about-1.jpg', 'opinion' => 'Gracias al esfuerzo de la familia hemos podido hacernos de otra casa en la playa, asi que vamos a pasar casi todo el verano con los niños, sin embargo en invierno simepre estoy preocupada si por si algo le falla a la casa como el aire acondicionado o las calderas, una amiga me recomendo los servicios de <strong>Cuidamos tu casa</strong> y sinceramente en el invierno estamos mas tarnquilos de nuestra casa de la playa.', 'name' => 'Carmen Núñez', 'position' => 'Cliente Satisfecho', 'state' => 1]
    	];
    	DB::table('opinions')->insert($opinions);
    }
}
