<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseholdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('households', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('province_id')->unsigned()->nullable();
            $table->bigInteger('city_id')->unsigned()->nullable();
            $table->bigInteger('pool_id')->unsigned()->nullable();
            $table->string('sale')->nullable();
            $table->string('rent')->nullable();
            $table->float('sale_price', 10, 2)->default(0.00)->nullable();
            $table->float('rent_price', 10, 2)->default(0.00)->nullable();
            $table->float('rent_price_january', 10, 2)->default(0.00)->nullable();
            $table->float('rent_price_july', 10, 2)->default(0.00)->nullable();
            $table->float('rent_price_august', 10, 2)->default(0.00)->nullable();
            $table->float('rent_price_days', 10, 2)->default(0.00)->nullable();
            $table->float('rent_price_years', 10, 2)->default(0.00)->nullable();
            $table->string('reference_keys');
            $table->string('seat_number');
            $table->integer('number_keys');
            $table->text('address');
            $table->text('description');
            $table->string('square_meter_h')->comment('metro cuadrado en la vivienda');
            $table->string('square_meter_p')->comment('metro cuadrado en la piscina');
            $table->integer('garage_number')->nullable();
            $table->bigInteger('alarm_company_id')->unsigned()->nullable();
            $table->bigInteger('electric_company_id')->unsigned()->nullable();
            $table->bigInteger('water_company_id')->unsigned()->nullable();
            $table->bigInteger('phone_company_id')->unsigned()->nullable();
            $table->string('administrator_name');
            $table->string('administrator_phone');
            $table->string('contract_agent');
            $table->enum('state', [0, 1])->default(1);
            $table->enum('photo', [0, 1]);
            $table->timestamps();


            #Relations
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('alarm_company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('electric_company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('water_company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('phone_company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('pool_id')->references('id')->on('pools')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('households');
    }
}
