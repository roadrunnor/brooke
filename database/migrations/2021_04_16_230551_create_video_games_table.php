<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateVideoGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_games', function (Blueprint $table) {
            $table->string('product_id',10);
            $table->string('game_consoles',50);
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade') ;
        });

        DB::table('video_games')->insert([
            'product_id'=>'pr-041',
            'game_consoles'=>'PS4',
                      
        ]);
        DB::table('video_games')->insert([
            'product_id'=>'pr-042',
            'game_consoles'=>'XBox',
                      
        ]);
        DB::table('video_games')->insert([
            'product_id'=>'pr-043',
            'game_consoles'=>'Nintendo',
                      
        ]);
        DB::table('video_games')->insert([
            'product_id'=>'pr-044',
            'game_consoles'=>'Xbox',
                      
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_games');
    }
}
