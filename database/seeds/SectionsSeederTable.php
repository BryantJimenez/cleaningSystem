<?php

use Illuminate\Database\Seeder;

class SectionsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Section::create([
    		'title' => 'Cuidamos de tu casa, mientras no estás',
    		'subtitle' => 'Disfruta de la tranquilidad de que alguien cuide de tu casa mientras no estás',
    		'about' => 'Cuidamos tu Casa es una empresa dedicada a cuidar tu casa mientras tú no estás, para que puedas tener la tranquilidad de saber que tu hogar está en las mejores manos. <br> Te avisamos de cualquier desperfecto. Años de experiencia en el sector inmobiliario nos avalan.',
    		'services' => 'Nos dedicamos a cuidar tu casa mientras tú no estás a través de los siguientes servicios',
    		'households' => 'Si te interesa comprar, vender o alquilar alguna vivienda, estas en la sección correcta.',
            'opinion' => 'Cada cliente es un mundo, por lo tanto, estan en todo su derecho de opinar segun la calidad de nuestros servicios',
    		'legal' => 'El Reglamento (UE) 2016/679 de protección de datos de carácter personal, establece un nuevo enfoque para el control y el tratamiento de los datos de carácter personal. Hemos revisado y adaptado nuestra política de privacidad a los nuevos requisitos y queremos ofrecer mayor información y transparencia en relación con el tratamiento de los datos personales. <br> URBANIZA XXI, SL con CIF B39559844 es responsable del tratamiento de los datos de carácter personal de sus usuarios y clientes, así como de los datos que puedan ser recabados a través de la web. <br> URBANIZA XXI, SL informa a los usuarios del sitio de su política respecto del tratamiento y protección de los datos de carácter personal de los usuarios y clientes que puedan ser recabados por la navegación o contratación de servicios a través de su sitio web. <br> <h1><strong>Finalidad del tratamiento de los datos.</strong></h1><br> Sus datos de carácter personal se recaban con la finalidad de prestar y mantener los servicios acordados contractualmente así como poder informarle sobre los nuevos productos y servicios. <br> El tratamiento de los datos que nos facilite a través de los formularios de la web https://cuidamosdetucasa.es Las operaciones, gestiones y procedimientos técnicos que se realicen de forma automatizada o no automatizada y que posibiliten la recogida, el almacenamiento, la modificación, la transferencia y otras acciones sobre datos de carácter personal, tienen la consideración de tratamiento de datos personales. <br> URBANIZA XXI, SL procederá a tratar los datos de carácter personal de manera lícita, leal, transparente, adecuada, pertinente, limitada, exacta y actualizada. <br> <h1><strong>Datos recabados para la solicitud de información a través del formulario web.</strong></h1><br> Los datos personales recabados a través del formulario web para la petición de información tienen como finalidad el envío de información comercial sobre nuestros productos y servicios. <br> El tratamiento de los datos en este caso está legitimado por el consentimiento expreso que usted nos presta al aceptar el envío de la información aportada a través del formulario. <br> <h1><strong>Ejercicio de los derechos</strong></h1><br> De acuerdo con los derechos que confiere el Reglamento (UE) 2016/679 de protección de datos de carácter personal podrá ejercer los derechos de acceso, rectificación, limitación de tratamiento, supresión, portabilidad y oposición al tratamiento de sus datos dirigiendo su petición a la dirección postal indicada o al correo electrónico <br> info@cuidamosdetucasa.es Para el ejercicio de los derechos deberá identificarse mediante la presentación de su DNI. <br> <h1><strong>Destinatarios</strong></h1><br> URBANIZA XXI, SL informa de que sus datos personales no serán comunicados a terceros, con la salvedad de que dicha comunicación de datos este amparada en una obligación legal o cuando la prestación de un servicio implique la necesidad de una relación contractual con un encargado de tratamiento. En este último caso, los destinatarios de sus datos pueden ser empresas del grupo, empresas de solvencia patrimonial (en el caso de impagos, comunicados mediante los procedimientos y garantías establecidos por la normativa vigente) así como determinados encargados del tratamiento necesarios para la correcta prestación de los servicios. <br> URBANIZA XXI, SL mantiene unos criterios estrictos de selección de encargados de tratamiento y se compromete contractualmente con cada uno a cumplir y hacer cumplir las obligaciones establecidas en materia de protección de datos. <br> <h1><strong>Variación de los datos</strong></h1><br> Mientras no nos comuniquen lo contrario, entenderemos que los datos no han sido modificados y que usted se compromete a notificarnos cualquier variación. <br> Para cualquier reclamación puede dirigirse a Avda Santander, 23 Bajo. <br> Noja (Cantabria). Igualmente podrá dirigirse a la Agencia Española de Protección de Datos www.agdp.es.',
    		'email' => '	info@cuidamostucasa.net',
    		'address' => 'Avd, La Union, 66-68 30730 - San Javier (Murcia)',
    		'phone_1' => '968 192 093',
    		'phone_2' => '968 192 092',
    		'phone_3' => '968 191 506'
    	]);
}
}
