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
            'product_image'=>'book1.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-002',
            'product_name'=>'PHp',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with PHP5',
            'product_image'=>'book2.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-003',
            'product_name'=>'Laravel',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with Laravel85',
            'product_image'=>'book3.jpg',
            'sub_category_id'=>'sub-003'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-004',
            'product_name'=>'Html',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with HTML5',
            'product_image'=>'book4.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-005',
            'product_name'=>'PHp',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with PHP5',
            'product_image'=>'book5.jpg',
            'sub_category_id'=>'sub-004'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-006',
            'product_name'=>'Laravel',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with Laravel85',
            'product_image'=>'book6.jpg',
            'sub_category_id'=>'sub-002'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-007',
            'product_name'=>'Html',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with HTML5',
            'product_image'=>'book7.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-008',
            'product_name'=>'PHp',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with PHP5',
            'product_image'=>'book8.jpg',
            'sub_category_id'=>'sub-004'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-009',
            'product_name'=>'film1',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with Laravel85',
            'product_image'=>'film1.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-010',
            'product_name'=>'film2',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with HTML5',
            'product_image'=>'film2.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-011',
            'product_name'=>'film3',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with PHP5',
            'product_image'=>'film3.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-012',
            'product_name'=>'film4',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with Laravel85',
            'product_image'=>'film4.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-013',
            'product_name'=>'film5',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with HTML5',
            'product_image'=>'film5.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-014',
            'product_name'=>'film6',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with PHP5',
            'product_image'=>'film6.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-015',
            'product_name'=>'film7',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with Laravel85',
            'product_image'=>'film7.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-016',
            'product_name'=>'game1',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game1',
            'product_image'=>'game1.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-017',
            'product_name'=>'game2',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game2',
            'product_image'=>'game2.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-018',
            'product_name'=>'game3',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game3',
            'product_image'=>'game3.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-019',
            'product_name'=>'game4',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game4',
            'product_image'=>'game4.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-020',
            'product_name'=>'game5',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game5',
            'product_image'=>'game5.jpg',
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
