<?php

use Illuminate\Database\Seeder;

class BanksSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$banks = [
    		['name'=> 'Abanca', 'code' => '2080'], 
    		['name'=> 'Andbank España', 'code' => '1544'],
    		['name'=> 'Banca March', 'code' => '0061'],
    		['name'=> 'Banco Banif', 'code' => '0086'],
    		['name'=> 'BBVA', 'code' => '0182'],
    		['name'=> 'Banco BPI', 'code' => '0190'],
    		['name'=> 'Banco Caixa Geral', 'code' => '0130'],
    		['name'=> 'Banco Caminos', 'code' => '0234'],
    		['name'=> 'Banco de España', 'code' => '9000'],
    		['name'=> 'Banco de Madrid', 'code' => '0059'],
    		['name'=> 'Banco Mediolanum', 'code' => '0186'],
    		['name'=> 'Banco Sabadell', 'code' => '0081'],
    		['name'=> 'Banco Finantia Sofinloc', 'code' => '0220'],
    		['name'=> 'Banco Inversis', 'code' => '0232'],
    		['name'=> 'Banco Mare Nostrum', 'code' => '0487'],
    		['name'=> 'Banco Pastor', 'code' => '0238'],
    		['name'=> 'Banco Pichincha España', 'code' => '0235'],
    		['name'=> 'Banco Popular', 'code' => '0075'],
    		['name'=> 'Banco Santander', 'code' => '0049'],
    		['name'=> 'Bancopopular-e', 'code' => '0229'],
    		['name'=> 'Bankia', 'code' => '2038'],
    		['name'=> 'Bankinter', 'code' => '0128'],
    		['name'=> 'Bankoa', 'code' => '0138'],
    		['name'=> 'Barclays Bank', 'code' => '0065'],
    		['name'=> 'BNP Paribas España', 'code' => '0058'],
    		['name'=> 'Caixabank', 'code' => '2100'],
    		['name'=> 'Caixa Ontinyent', 'code' => '2045'],
    		['name'=> 'Cajasur Banco', 'code' => '0237'],
    		['name'=> 'Catalunya Bank', 'code' => '2013'],
    		['name'=> 'Cecabank', 'code' => '2000'],
    		['name'=> 'China Construction Bank', 'code' => '1553'],
    		['name'=> 'Citibank España', 'code' => '0122'],
    		['name'=> 'Coinc', 'code' => '0128'],
    		['name'=> 'Colonya (Caixa Pollença)', 'code' => '2056'],
    		['name'=> 'Commerzbank', 'code' => '0159'],
    		['name'=> 'Credit Agricole', 'code' => '0154'],
    		['name'=> 'Deutsche Bank', 'code' => '0019'],
    		['name'=> 'Evo Banco', 'code' => '0239'],
    		['name'=> 'HSBC Bank', 'code' => '0162'],
    		['name'=> 'Ibercaja Banco', 'code' => '2085'],
    		['name'=> 'ING Bank', 'code' => '1465'],
    		['name'=> 'Instituto de crédito oficial', 'code' => '1000'],
    		['name'=> 'Kutxabank', 'code' => '2095'],
    		['name'=> 'Liberbank', 'code' => '2048'],
    		['name'=> 'Novo Banco', 'code' => '0131'],
    		['name'=> 'Openbank', 'code' => '0073'],
    		['name'=> 'RCI Banque', 'code' => '1508'],
    		['name'=> 'Renta 4 Banco', 'code' => '0083'],
    		['name'=> 'Self Bank', 'code' => '1490'],
    		['name'=> 'Societe Generale', 'code' => '0108'],
    		['name'=> 'Targobank', 'code' => '0216'],
    		['name'=> 'Triodos Bank', 'code' => '1491'],
    		['name'=> 'Unicaja Banco', 'code' => '2103'],
    		['name'=> 'Unoe', 'code' => '0227'],
    		['name'=> 'Volkswagen Bank España', 'code' => '1480']
    	];
    	DB::table('banks')->insert($banks);
    }
}
