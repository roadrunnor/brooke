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
                $table->foreign('sub_category_id')->references('sub_category_id')->on('sub_categories')->onDelete('cascade') ;
        });

        /* 20 Books */
        DB::table('products')->insert([
            'product_id'=>'pr-001',
            'product_name'=>'Javascipt for Kids',
            'product_price'=>45.95,
            'product_promotion_price'=> 35.49,
            'product_stock_quantity'=>250,
            'product_description'=>'A Playful Introduction to Programming',
            'product_image'=>'book_01.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-002',
            'product_name'=>'HTML5 Unleashed',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'HTML5 Unleashed',
            'product_image'=>'book_02.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-003',
            'product_name'=>'Leaning Javascript Design Patterns',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'Learning Javascript Design Patterns',
            'product_image'=>'book_03.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-004',
            'product_name'=>'Building Microservices with Javascript',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'Learning Path Building Microservices with Javascript',
            'product_image'=>'book_04.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-005',
            'product_name'=>'HTML5 Website Features and Elements in 1 Day',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'HTML5 Website Features and Elements in 1 Day',
            'product_image'=>'book_05.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-006',
            'product_name'=> 'HTML5 for Web Designers',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'HTML5 for Web Designers',
            'product_image'=>'book_06.jpg',
            'sub_category_id'=> 'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-007',
            'product_name'=>'Ruby on Rails Tutorial',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'Ruby on Rails Tutorial Second Edition',
            'product_image'=>'book_07.jpg',
            'sub_category_id'=>'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-008',
            'product_name'=>'Ruby on Rails',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'Ruby on Rails Learn Web Development with Ruby on Rails',
            'product_image'=>'book_08.jpg',
            'sub_category_id'=>'sub-002'

        ]);

        DB::table('products')->insert([
            'product_id' => 'pr-009',
            'product_name' => 'Guide to HTML, Javascript and PHP',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Guide to HTML, Javascript and PHP for Scientists and Engineers',
            'product_image' => 'book_09.jpg',
            'sub_category_id' => 'sub-003'

        ]);

        DB::table('products')->insert([
            'product_id' => 'pr-010',
            'product_name' => 'Full Stack Javascript',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' =>'Full Stack Javascript',
            'product_image' => 'book_10.jpg',
            'sub_category_id' => 'sub-003'

        ]);

        DB::table('products')->insert([
            'product_id' => 'pr-011',
            'product_name' => 'Learning Web Design',
            'product_price' => 45.95,
            'product_promotion_price' => 35.49,
            'product_stock_quantity' => 250,
            'product_description' => "A Beginner\'s Guide to HTML, CSS, Javascript, and Web Graphics",
            'product_image' => 'book_11.jpg',
            'sub_category_id' => 'sub-001'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-012',
            'product_name' => 'Learning React',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'A Hands-On Guide to Building Web Applications Using React and Redux',
            'product_image' => 'book_12.jpg',
            'sub_category_id' => 'sub-005'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-013',
            'product_name' => 'Simplifying Javascript',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Simplifying Javascript: Writing Modern Javascript with ES5, ES6, and Beyond',
            'product_image' => 'book_13.jpg',
            'sub_category_id' => 'sub-003'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-014',
            'product_name' => 'Mission Javascript',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Mission Javascript',
            'product_image' => 'book_14.jpg',
            'sub_category_id' => 'sub-002'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-015',
            'product_name' => 'HTML5 for Web Designers',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'HTML5 for Web Designers: Foreword by Jeffrey Zeidman',
            'product_image' => 'book_15.jpg',
            'sub_category_id' => 'sub-004'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-016',
            'product_name' => 'Introducing HTML5',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Introducing HTML5',
            'product_image' => 'book_16.jpg',
            'sub_category_id' => 'sub-005'

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-017',
            'product_name' => 'Javascript Novice to Ninja',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => "Javascript Novice to Ninja Second Edition. The Ultimate Beginner\'s Guide to Javascript",
            'product_image' => 'book_17.jpg',
            'sub_category_id' => 'sub-005' 

        ]);
        DB::table('products')->insert([
            'product_id' => 'pr-018',
            'product_name' => 'HTML, CSS & Javascript Web Publishing',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'HTML, CSS & Javascript Web Publishing in One Hour a Day',
            'product_image' => 'book_18.jpg',
            'sub_category_id' => 'sub-003'

        ]);

        DB::table('products')->insert([
            'product_id' => 'pr-019',
            'product_name' => 'The HTML and CSS Workshop',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'The HTML and CSS Workshop, A New, Interactive Approach to Learning HTML and CSS',
            'product_image' => 'book_19.jpg',
            'sub_category_id' => 'sub-004'

        ]);

        DB::table('products')->insert([
            'product_id' => 'pr-020',
            'product_name' => 'Javascript for Data Science',
            'product_price' => 52.29,
            'product_promotion_price' => 45.49,
            'product_stock_quantity' => 250,
            'product_description' => 'Javascript for Data Science: Data Science Series',
            'product_image' => 'book_20.jpg',
            'sub_category_id' => 'sub-003'

        ]);

        /* 20 films */
        DB::table('products')->insert([
            'product_id'=>'pr-021',
            'product_name'=>'Indiana Jones with the German',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'Indiana Jones',
            'product_image'=>'film_01.jpg',
            'sub_category_id'=>'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-022',
            'product_name'=>'film_2',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with HTML5',
            'product_image'=>'film_02.jpg',
            'sub_category_id'=>'sub-007'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-023',
            'product_name'=>'film_3',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with PHP5',
            'product_image'=>'film_03.jpg',
            'sub_category_id'=>'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-024',
            'product_name'=>'film_4',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with Laravel85',
            'product_image'=>'film_04.jpg',
            'sub_category_id'=>'sub-007'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-025',
            'product_name'=>'film_5',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with HTML5',
            'product_image'=>'film_05.jpg',
            'sub_category_id'=>'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-026',
            'product_name'=>'film_6',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with PHP5',
            'product_image'=>'film_06.jpg',
            'sub_category_id'=>'sub-009'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-027',
            'product_name'=>'film_7',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with Laravel85',
            'product_image'=>'film_07.jpg',
            'sub_category_id'=>'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-028',
            'product_name'=>'Indiana Jones with the German',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'Indiana Jones',
            'product_image'=>'film_08.jpg',
            'sub_category_id'=>'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-029',
            'product_name'=>'film_2',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with HTML5',
            'product_image'=>'film_09.jpg',
            'sub_category_id'=>'sub-007'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-030',
            'product_name'=>'film_3',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with PHP5',
            'product_image'=>'film_10.jpg',
            'sub_category_id'=>'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-031',
            'product_name'=>'film_4',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with Laravel85',
            'product_image'=>'film_11.jpg',
            'sub_category_id'=>'sub-007'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-032',
            'product_name'=>'film_5',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with HTML5',
            'product_image'=>'film_12.jpg',
            'sub_category_id'=>'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-033',
            'product_name'=>'film_6',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with PHP5',
            'product_image'=>'film_13.jpg',
            'sub_category_id'=>'sub-009'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-034',
            'product_name'=>'film_7',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with Laravel85',
            'product_image'=>'film_14.jpg',
            'sub_category_id'=>'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-035',
            'product_name'=>'Indiana Jones with the German',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'Indiana Jones',
            'product_image'=>'film_15.jpg',
            'sub_category_id'=>'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-036',
            'product_name'=>'film_15',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with HTML5',
            'product_image'=>'film_16.jpg',
            'sub_category_id'=>'sub-007'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-037',
            'product_name'=>'film_3',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with PHP5',
            'product_image'=>'film_17.jpg',
            'sub_category_id'=>'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-038',
            'product_name'=>'film_4',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with Laravel85',
            'product_image'=>'film_18.jpg',
            'sub_category_id'=>'sub-007'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-039',
            'product_name'=>'film_5',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with HTML5',
            'product_image'=>'film_19.jpg',
            'sub_category_id'=>'sub-006'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-040',
            'product_name'=>'film_6',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with PHP5',
            'product_image'=>'film_20.jpg',
            'sub_category_id'=>'sub-009'

        ]);
   
        /* 20 VGames */
        DB::table('products')->insert([
            'product_id'=>'pr-041',
            'product_name'=>'game1',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game1',
            'product_image'=>'ps4_01.jpg',
            'sub_category_id'=>'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-042',
            'product_name'=>'game2',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game2',
            'product_image'=>'ps4_02.jpg',
            'sub_category_id'=>'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-043',
            'product_name'=>'game3',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game3',
            'product_image'=>'ps4_03.jpg',
            'sub_category_id'=>'sub-010'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-044',
            'product_name'=>'game4',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game4',
            'product_image'=>'ps4_04.jpg',
            'sub_category_id'=>'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-045',
            'product_name'=>'game5',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game5',
            'product_image'=>'ps4_05.jpg',
            'sub_category_id'=>'sub-013'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-046',
            'product_name'=>'game4',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game4',
            'product_image'=>'ps4_06.jpg',
            'sub_category_id'=>'sub-012'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-047',
            'product_name'=>'game1',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game1',
            'product_image'=>'wii_01.jpg',
            'sub_category_id'=>'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-048',
            'product_name'=>'game2',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game2',
            'product_image'=>'wii_02.jpg',
            'sub_category_id'=>'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-049',
            'product_name'=>'game3',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game3',
            'product_image'=>'wii_03.jpg',
            'sub_category_id'=>'sub-010'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-050',
            'product_name'=>'game4',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game4',
            'product_image'=>'wii_04.jpg',
            'sub_category_id'=>'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-051',
            'product_name'=>'game5',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game5',
            'product_image'=>'wii_05.jpg',
            'sub_category_id'=>'sub-013'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-052',
            'product_name'=>'game4',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game4',
            'product_image'=>'wii_06.jpg',
            'sub_category_id'=>'sub-012'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-053',
            'product_name'=>'game1',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game1',
            'product_image'=>'xbox_01.jpg',
            'sub_category_id'=>'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-054',
            'product_name'=>'game2',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game2',
            'product_image'=>'xbox_02.jpg',
            'sub_category_id'=>'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-055',
            'product_name'=>'game3',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game3',
            'product_image'=>'xbox_03.jpg',
            'sub_category_id'=>'sub-012'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-056',
            'product_name'=>'game4',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game4',
            'product_image'=>'xbox_04.jpg',
            'sub_category_id'=>'sub-011'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-057',
            'product_name'=>'game5',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game5',
            'product_image'=>'xbox_05.jpg',
            'sub_category_id'=>'sub-013'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-058',
            'product_name'=>'game6',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game4',
            'product_image'=>'xbox_06.jpg',
            'sub_category_id'=>'sub-012'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-059',
            'product_name'=>'game7',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game4',
            'product_image'=>'game5.jpg',
            'sub_category_id'=>'sub-012'

        ]);
        DB::table('products')->insert([
            'product_id'=>'pr-060',
            'product_name'=>'game8',
            'product_price'=>52.29,
            'product_promotion_price'=> 45.49,
            'product_stock_quantity'=>250,
            'product_description'=>'web design with game4',
            'product_image'=>'game5.jpg',
            'sub_category_id'=>'sub-012'

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
