<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->string('product_id',10);
            $table->string('film_duration',10);
            $table->date('film_recommanded_for_age',5);
            $table->string('film_actors',250);
            $table->primary('product_id');
            $table->foreign('product_id')->references('product_id')->on('products') ;
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
