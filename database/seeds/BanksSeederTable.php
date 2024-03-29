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
    		['slug' => 'bank-1', 'name'=> 'Abanca', 'code' => '2080', 'type'=> '0'], 
    		['slug' => 'bank-2', 'name'=> 'Andbank España', 'code' => '1544', 'type'=> '0'],
    		['slug' => 'bank-3', 'name'=> 'Banca March', 'code' => '0061', 'type'=> '0'],
    		['slug' => 'bank-4', 'name'=> 'Banco Banif', 'code' => '0086', 'type'=> '0'],
    		['slug' => 'bank-5', 'name'=> 'BBVA', 'code' => '0182', 'type'=> '1'],
    		['slug' => 'bank-6', 'name'=> 'Banco BPI', 'code' => '0190', 'type'=> '0'],
    		['slug' => 'bank-7', 'name'=> 'Banco Caixa Geral', 'code' => '0130', 'type'=> '0'],
    		['slug' => 'bank-8', 'name'=> 'Banco Caminos', 'code' => '0234', 'type'=> '0'],
    		['slug' => 'bank-9', 'name'=> 'Banco de España', 'code' => '9000', 'type'=> '0'],
    		['slug' => 'bank-10', 'name'=> 'Banco de Madrid', 'code' => '0059', 'type'=> '0'],
    		['slug' => 'bank-11', 'name'=> 'Banco Mediolanum', 'code' => '0186', 'type'=> '0'],
    		['slug' => 'bank-12', 'name'=> 'Banco Sabadell', 'code' => '0081', 'type'=> '0'],
    		['slug' => 'bank-13', 'name'=> 'Banco Finantia Sofinloc', 'code' => '0220', 'type'=> '0'],
    		['slug' => 'bank-14', 'name'=> 'Banco Inversis', 'code' => '0232', 'type'=> '1'],
    		['slug' => 'bank-15', 'name'=> 'Banco Mare Nostrum', 'code' => '0487', 'type'=> '0'],
    		['slug' => 'bank-16', 'name'=> 'Banco Pastor', 'code' => '0238', 'type'=> '0'],
    		['slug' => 'bank-17', 'name'=> 'Banco Pichincha España', 'code' => '0235', 'type'=> '0'],
    		['slug' => 'bank-18', 'name'=> 'Banco Popular', 'code' => '0075', 'type'=> '0'],
    		['slug' => 'bank-19', 'name'=> 'Banco Santander', 'code' => '0049', 'type'=> '1'],
    		['slug' => 'bank-20', 'name'=> 'Bancopopular-e', 'code' => '0229', 'type'=> '0'],
    		['slug' => 'bank-21', 'name'=> 'Bankia', 'code' => '2038', 'type'=> '0'],
    		['slug' => 'bank-22', 'name'=> 'Bankinter', 'code' => '0128', 'type'=> '0'],
    		['slug' => 'bank-23', 'name'=> 'Bankoa', 'code' => '0138', 'type'=> '0'],
    		['slug' => 'bank-24', 'name'=> 'Barclays Bank', 'code' => '0065', 'type'=> '0'],
    		['slug' => 'bank-25', 'name'=> 'BNP Paribas España', 'code' => '0058', 'type'=> '0'],
    		['slug' => 'bank-26', 'name'=> 'Caixabank', 'code' => '2100', 'type'=> '0'],
    		['slug' => 'bank-27', 'name'=> 'Caixa Ontinyent', 'code' => '2045', 'type'=> '0'],
    		['slug' => 'bank-28', 'name'=> 'Cajasur Banco', 'code' => '0237', 'type'=> '0'],
    		['slug' => 'bank-29', 'name'=> 'Catalunya Bank', 'code' => '2013', 'type'=> '0'],
    		['slug' => 'bank-30', 'name'=> 'Cecabank', 'code' => '2000', 'type'=> '0'],
    		['slug' => 'bank-31', 'name'=> 'China Construction Bank', 'code' => '1553', 'type'=> '0'],
    		['slug' => 'bank-32', 'name'=> 'Citibank España', 'code' => '0122', 'type'=> '0'],
    		['slug' => 'bank-33', 'name'=> 'Coinc', 'code' => '0128', 'type'=> '0'],
    		['slug' => 'bank-34', 'name'=> 'Colonya (Caixa Pollença)', 'code' => '2056', 'type'=> '0'],
    		['slug' => 'bank-35', 'name'=> 'Commerzbank', 'code' => '0159', 'type'=> '0'],
    		['slug' => 'bank-36', 'name'=> 'Credit Agricole', 'code' => '0154', 'type'=> '0'],
    		['slug' => 'bank-37', 'name'=> 'Deutsche Bank', 'code' => '0019', 'type'=> '0'],
    		['slug' => 'bank-38', 'name'=> 'Evo Banco', 'code' => '0239', 'type'=> '0'],
    		['slug' => 'bank-39', 'name'=> 'HSBC Bank', 'code' => '0162', 'type'=> '0'],
    		['slug' => 'bank-40', 'name'=> 'Ibercaja Banco', 'code' => '2085', 'type'=> '0'],
    		['slug' => 'bank-41', 'name'=> 'ING Bank', 'code' => '1465', 'type'=> '0'],
    		['slug' => 'bank-42', 'name'=> 'Instituto de crédito oficial', 'code' => '1000', 'type'=> '0'],
    		['slug' => 'bank-43', 'name'=> 'Kutxabank', 'code' => '2095', 'type'=> '0'],
    		['slug' => 'bank-44', 'name'=> 'Liberbank', 'code' => '2048', 'type'=> '0'],
    		['slug' => 'bank-45', 'name'=> 'Novo Banco', 'code' => '0131', 'type'=> '0'],
    		['slug' => 'bank-46', 'name'=> 'Openbank', 'code' => '0073', 'type'=> '0'],
    		['slug' => 'bank-47', 'name'=> 'RCI Banque', 'code' => '1508', 'type'=> '0'],
    		['slug' => 'bank-48', 'name'=> 'Renta 4 Banco', 'code' => '0083', 'type'=> '0'],
    		['slug' => 'bank-49', 'name'=> 'Self Bank', 'code' => '1490', 'type'=> '0'],
    		['slug' => 'bank-50', 'name'=> 'Societe Generale', 'code' => '0108', 'type'=> '0'],
    		['slug' => 'bank-51', 'name'=> 'Targobank', 'code' => '0216', 'type'=> '0'],
    		['slug' => 'bank-52', 'name'=> 'Triodos Bank', 'code' => '1491', 'type'=> '0'],
    		['slug' => 'bank-53', 'name'=> 'Unicaja Banco', 'code' => '2103', 'type'=> '0'],
    		['slug' => 'bank-54', 'name'=> 'Unoe', 'code' => '0227', 'type'=> '0'],
    		['slug' => 'bank-55', 'name'=> 'Volkswagen Bank España', 'code' => '1480', 'type'=> '0']
    	];
    	DB::table('banks')->insert($banks);
    }
}
