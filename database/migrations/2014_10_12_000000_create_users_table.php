<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastname');
            $table->bigInteger('contract_id')->unsigned()->nullable();
            $table->string('photo')->default('usuario.png');
            $table->string('slug')->unique();
            $table->string('phone')->nullable();
            $table->string('phone_house')->nullable();
            $table->string('email')->unique();
            $table->text('address');
            $table->string('dni');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('state', [0, 1])->default(1);
            $table->enum('type', [1, 2, 3])->default(3);
            $table->rememberToken();
            $table->timestamps();

             #Relations
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
        Schema::dropIfExists('users');
    }
}
