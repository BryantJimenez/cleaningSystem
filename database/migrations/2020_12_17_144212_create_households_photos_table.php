<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseholdsPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('households_photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('photo');
            $table->string('description');
            $table->bigInteger('household_id')->unsigned()->nullable();
            
            $table->timestamps();

            #Relation
            $table->foreign('household_id')->references('id')->on('households')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('households_photos');
    }
}
