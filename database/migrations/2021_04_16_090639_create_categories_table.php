<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->string('category_id',10);
            $table->string('category_name',50);
            $table->primary('category_id');
        });
        
        DB::table('categories')->insert([
            'category_id'=>'cat-001',
            'category_name'=>'Books',
        ]); 
        DB::table('categories')->insert([
            'category_id'=>'cat-002',
            'category_name'=>'Films',
        ]);

        DB::table('categories')->insert(array( 
            'category_id'=>'cat-003',
            'category_name'=>'Video Games',
        ));
    }
     

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
