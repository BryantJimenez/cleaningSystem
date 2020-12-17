<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_visit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('news_id')->unsigned()->nullable();
            $table->bigInteger('visit_id')->unsigned()->nullable();
            $table->timestamps();

            #Relations
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('visit_id')->references('id')->on('visits')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_visit');
    }
}
