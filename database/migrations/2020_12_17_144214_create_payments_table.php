<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('contract_id')->unsigned()->nullable();
            $table->bigInteger('service_id')->unsigned()->nullable();
            $table->bigInteger('household_id')->unsigned()->nullable();
            $table->bigInteger('bank_id')->unsigned()->nullable();
            $table->bigInteger('issue_bank')->unsigned()->nullable();
            $table->enum('type_pay', [1, 2, 3, 4]);
            $table->enum('state', [0, 1, 2])->default(2);
            $table->float('total', 10, 2)->default(0.00);
            $table->string('reference')->nullable();
            $table->string('date');
            $table->timestamps();

            //Type Pay
            // 1 = Transferencia
            // 2 = Tarjeta Bancaria
            // 3 = PayPal
            // 4 = Bizum

            #Relations
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('household_id')->references('id')->on('households')->onDelete('cascade')->onUpdate('cascade');
            
            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('issue_bank')->references('id')->on('banks')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('contract_id')->references('id')->on('contracts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
