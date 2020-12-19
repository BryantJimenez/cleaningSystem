<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('business_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('lastname');
            $table->string('slug')->unique();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->text('address');
            $table->string('dni');
            $table->enum('state', [0, 1])->default(1);
            $table->timestamps();


            #Relations
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
