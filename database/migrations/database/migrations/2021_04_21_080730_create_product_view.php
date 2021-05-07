<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProductView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_view', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            DB::statement($this->drowpView());
            DB::statement($this->products_view());

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_view');
    }
    private function products_view():string{
        return <<<SQL
       
        create or replace view products_view AS 
        SELECT products.*, books.book_nb_pages as Pages, books.book_ISBN AS ISBN, books.book_release_date As "Release_date", books.book_author AS Author, books.book_editor AS Editor, books.book_collection AS Collections,
                books.book_Link AS Link, "" AS Duration, "" AS Age,"" AS Actors, "" AS "Console"
                from products, books
                where products.product_id = books.product_id 
                union
                
                SELECT products.*,"" AS Pages, "" AS ISBN,	"" AS "Release_date" , "" AS Author, "" AS Editor, "" AS Collections, "" AS Link,
                films.film_duration AS Duration, films.film_recommanded_for_age AS Age, films.film_actors AS Actors, "" AS "Console"
                from products, films
                where products.product_id = films.product_id 
                union
                
                SELECT products.*,"" AS Pages, "" AS ISBN,	"" AS "Release_date" , "" AS Author, "" AS Editor, "" AS Collections, "" AS Link, 
                "" AS Duration, ""  AS Age, ""  AS Actors, video_games.game_consoles AS "Console"
                from products, video_games
                where products.product_id = video_games.product_id; 
        SQL;
  }
  private function drowpView():string{
    return <<<SQL
   
      DROP VIEW IF EXISTS products_view;
      SQL;

  }
}
