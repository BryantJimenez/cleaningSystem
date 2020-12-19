<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseholdPaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('household_pays', function (Blueprint $table) {
            $table->bigIncrements('id');;
            $table->bigInteger('payment_id')->unsigned()->nullable();
            $table->integer('days')->nullable();
            $table->integer('months')->nullable();
            $table->float('rent_price_day', 10, 2)->default(0.00)->nullable();
            $table->float('rent_price_month', 10, 2)->default(0.00)->nullable();
            $table->enum('operation', [1, 2, 3]);
            $table->enum('state', [0, 1, 2])->default(1);
            $table->timestamps();

            //Operaciones
            // 1 = Pago por venta
            // 2 = Pago por Alquiler por Días
            // 3 = Pago por Alquiler por Meses

            #Relations
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('household_pays');
    }
}
