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
            $table->string('product_id',10);
            $table->integer('book_nb_pages');
            $table->string('book_ISBN',50);
            $table->date('book_release_date');
            $table->string('book_author',50);
            $table->string('book_editor',50);
            $table->string('book_collection',50);
            $table->string('book_Link',100);
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
    });
        DB::table('books')->insert([
            'product_id'=>'pr-001',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn51.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=>'Nick Morgan',
            'book_editor'=> 'No Starch Press',
            'book_collection'=>'2',
            'book_Link'=>'Link1.com'

        ]);
        DB::table('books')->insert([
            'product_id'=>'pr-002',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn52.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=> 'Simon Sarris',
            'book_editor'=> 'Pearson Education',
            'book_collection'=>'2',
            'book_Link'=>'Link2.com'

        ]);
        DB::table('books')->insert([
            'product_id'=>'pr-003',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn53.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=> 'Addy Osmani',
            'book_editor'=>"O'Reilly",
            'book_collection'=>'2',
            'book_Link'=>'Link3.com'

        ]);
        DB::table('books')->insert([
            'product_id'=>'pr-004',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn54.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=>'Diogo Resende and Paul Osman',
            'book_editor'=>'Packt Book Collection',
            'book_collection'=>'2',
            'book_Link'=>'Link4.com'

        ]);
        DB::table('books')->insert([
            'product_id'=>'pr-005',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn55.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=>"Ruben D'Oliveira",
            'book_editor'=> 'Kindle Edition',
            'book_collection'=>'2',
            'book_Link'=>'Link5.com'

        ]);
        DB::table('books')->insert([
            'product_id'=>'pr-006',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn56.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=> 'Jeremy Keith',
            'book_editor'=> 'A Book Apart',
            'book_collection'=>'2',
            'book_Link'=>'Link6.com'

        ]);
        DB::table('books')->insert([
            'product_id'=>'pr-007',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn57.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=> 'Michael Hartl',
            'book_editor'=> 'Kindle Edition',
            'book_collection'=>'2',
            'book_Link'=>'Link7.com'

        ]);
        DB::table('books')->insert([
            'product_id'=>'pr-008',
            'book_nb_pages'=>255,
            'book_ISBN'=>'isbn58.29',
            'book_release_date'=> '2020-10-15',
            'book_author'=> 'Harry Oliver',
            'book_editor'=> 'Kindle Edition',
            'book_collection'=>'2',
            'book_Link'=>'Link8.com'

        ]);
        DB::table('books')->insert([
            'product_id' => 'pr-009',
            'book_nb_pages' => 255,
            'book_ISBN' => 'isbn52.29',
            'book_release_date' => '2020-10-15',
            'book_author' => 'David R. Brooks',
            'book_editor' => 'Springer',
            'book_collection' => '2',
            'book_Link' =>'Linke.com'

        ]);
        DB::table('books')->insert([
            'product_id' => 'pr-010',
            'book_nb_pages' => 255,
            'book_ISBN' => 'isbn52.29',
            'book_release_date' => '2020-10-15',
            'book_author' => 'Azat Mardan',
            'book_editor' => 'APress',
            'book_collection' => '2',
            'book_Link' => 'Linke.com'

        ]);
        DB::table('books')->insert([
            'product_id' => 'pr-011',
            'book_nb_pages' => 255,
            'book_ISBN' => 'isbn52.29',
            'book_release_date' => '2020-10-15',
            'book_author' => 'Jennifer Niederst Robbins',
            'book_editor' => "O'Reilly",
            'book_collection' => '2',
            'book_Link' =>'Linke.com'

        ]);
        DB::table('books')->insert([
            'product_id' => 'pr-012',
            'book_nb_pages' => 255,
            'book_ISBN' => 'isbn52.29',
            'book_release_date' => '2020-10-15',
            'book_author' => 'Kirupa Chinnathambi',
            'book_editor' => 'Kindle Edition',
            'book_collection' => '2',
            'book_Link' =>'Linke.com'

        ]);
        DB::table('books')->insert([
            'product_id' => 'pr-013',
            'book_nb_pages' => 255,
            'book_ISBN' => 'isbn52.29',
            'book_release_date' => '2020-10-15',
            'book_author' => 'Joe Morgan',
            'book_editor' => 'The Pragmatic Programmers',
            'book_collection' => '2',
            'book_Link' => 'Linke.com'

        ]);
        DB::table('books')->insert([
            'product_id' => 'pr-014',
            'book_nb_pages' => 255,
            'book_ISBN' => 'isbn52.29',
            'book_release_date' => '2020-10-15',
            'book_author' => 'Sheela Preuitt',
            'book_editor' => 'Lerner',
            'book_collection' => '2',
            'book_Link' => 'Linke.com'

        ]);
        DB::table('books')->insert([
            'product_id' => 'pr-015',
            'book_nb_pages' => 255,
            'book_ISBN' => 'isbn52.29',
            'book_release_date' => '2020-10-15',
            'book_author' => 'Jeremy Keith',
            'book_editor' => 'A Book Apart',
            'book_collection' => '2',
            'book_Link' => 'Linke.com'

        ]);
        DB::table('books')->insert([
            'product_id' => 'pr-016',
            'book_nb_pages' => 255,
            'book_ISBN' => 'isbn52.29',
            'book_release_date' => '2020-10-15',
            'book_author' => 'Bruce Lawson, Remy Sharp',
            'book_editor' => 'Pearson Education',
            'book_collection' => '2',
            'book_Link' => 'Link.com'

        ]);
        DB::table('books')->insert([
            'product_id' => 'pr-017',
            'book_nb_pages' => 255,
            'book_ISBN' => 'isbn52.29',
            'book_release_date' => '2020-10-15',
            'book_author' => 'Darren Jones',
            'book_editor' => 'Sitepoint',
            'book_collection' => '2',
            'book_Link' => 'Link.com'

        ]);
        DB::table('books')->insert([
            'product_id' => 'pr-018',
            'book_nb_pages' => 255,
            'book_ISBN' => 'isbn52.29',
            'book_release_date' => '2020-10-15',
            'book_author' => 'Laura Lemay, Rafe Colbum, Jennifer Kyrmin',
            'book_editor' => 'Sams',
            'book_collection' => '2',
            'book_Link' => 'Link.com'

        ]);
        DB::table('books')->insert([
            'product_id' => 'pr-019',
            'book_nb_pages' => 255,
            'book_ISBN' => 'isbn52.29',
            'book_release_date' => '2020-10-15',
            'book_author' => 'Group Author: M. Park, M. Zburlea',
            'book_editor' => 'A Book Apart',
            'book_collection' => '2',
            'book_Link' => 'Link.com'

        ]);
        DB::table('books')->insert([
            'product_id' => 'pr-020',
            'book_nb_pages' => 255,
            'book_ISBN' => 'isbn52.29',
            'book_release_date' => '2020-10-15',
            'book_author' => 'M. Gans, T. Hodge, G. Wilson',
            'book_editor' => 'A Chapman & Hall Book',
            'book_collection' => '2',
            'book_Link' => 'Link.com'

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
