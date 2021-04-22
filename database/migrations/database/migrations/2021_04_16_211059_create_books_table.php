<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->string('product_id',10);
            $table->integer('book_nb_pages');
            $table->string('book_ISBN',50);
            $table->date('book_release_date');
            $table->string('book_author',50);
            $table->string('book_editor',50);
            $table->string('book_collection',50);
            $table->string('book_Link',100);
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
        Schema::dropIfExists('books');
    }
}
