<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
                $table->string('product_id',10);
                $table->string('product_name',50);
                $table->decimal('product_price',10,2);
                $table->decimal('product_promotion_price',10,2);
                $table->integer('product_stock_quantity');
                $table->string('product_description',100);
                $table->string('product_image',50);
                $table->string('sub_category_id',10);
                $table->primary('product_id');
                $table->foreign('sub_category_id')->references('sub_category_id')->on('sub_categories') ;
        });

        DB::table('products')->insert([
            'product_id'=>'pr-001',
            'product_name'=>'Html',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with HTML5',
            'product_image'=>'html.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-002',
            'product_name'=>'PHp',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with PHP5',
            'product_image'=>'php.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-003',
            'product_name'=>'Laravel',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with Laravel85',
            'product_image'=>'laravel.jpg',
            'sub_category_id'=>'sub-001'

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
