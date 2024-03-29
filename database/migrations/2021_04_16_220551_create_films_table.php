<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
            $table->string('film_recommanded_for_age',5);
            $table->string('film_actors',250);
            $table->primary('product_id');
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade') ;
   
        });
        DB::table('films')->insert([
            'product_id'=>'pr-021',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-022',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-023',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-024',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-025',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-026',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-027',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-028',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-029',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-030',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-031',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-032',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-033',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-034',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-035',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-036',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-037',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-038',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-039',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
        DB::table('films')->insert([
            'product_id'=>'pr-040',
            'film_duration'=>'2:55',
            'film_recommanded_for_age'=>'18+',
            'film_actors'=>'Sylvain'
            
        ]);
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
