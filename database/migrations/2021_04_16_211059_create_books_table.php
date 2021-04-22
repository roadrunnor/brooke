<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
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
            $table->id();
            $table->string('product_id',10);
            $table->integer('book_nb_pages');
            $table->string('book_ISBN',50);
            $table->date('book_release_date');
            $table->string('book_author',50);
            $table->string('book_editor',50);
            $table->string('book_collection',50);
            $table->string('book_Link',100);
           // $table->primary('product_id');
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
    });
        DB::table('books')->insert([
            'product_id'=>'pr-001',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn52.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=>'MahVakili12',
            'book_editor'=>'web design with Laravel85',
            'book_collection'=>'2',
            'book_Link'=>'sub-001'

        ]);
        DB::table('books')->insert([
            'product_id'=>'pr-002',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn52.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=>'MahVakili12',
            'book_editor'=>'web design with Laravel85',
            'book_collection'=>'2',
            'book_Link'=>'sub-001'

        ]);
        DB::table('books')->insert([
            'product_id'=>'pr-003',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn52.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=>'MahVakili12',
            'book_editor'=>'web design with Laravel85',
            'book_collection'=>'2',
            'book_Link'=>'sub-001'

        ]);
        DB::table('books')->insert([
            'product_id'=>'pr-004',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn52.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=>'MahVakili12',
            'book_editor'=>'web design with Laravel85',
            'book_collection'=>'2',
            'book_Link'=>'sub-001'

        ]);
        DB::table('books')->insert([
            'product_id'=>'pr-005',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn52.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=>'MahVakili12',
            'book_editor'=>'web design with Laravel85',
            'book_collection'=>'2',
            'book_Link'=>'sub-001'

        ]);
        DB::table('books')->insert([
            'product_id'=>'pr-006',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn52.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=>'MahVakili12',
            'book_editor'=>'web design with Laravel85',
            'book_collection'=>'2',
            'book_Link'=>'sub-001'

        ]);
        DB::table('books')->insert([
            'product_id'=>'pr-007',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn52.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=>'MahVakili12',
            'book_editor'=>'web design with Laravel85',
            'book_collection'=>'2',
            'book_Link'=>'sub-001'

        ]);
        DB::table('books')->insert([
            'product_id'=>'pr-008',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn52.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=>'MahVakili12',
            'book_editor'=>'web design with Laravel85',
            'book_collection'=>'2',
            'book_Link'=>'sub-001'

        ]);
       
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
