<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->string('sub_category_id',10);
            $table->string('sub_category_name',50);
            $table->string('category_id',10);
            $table->primary('sub_category_id')->unsigned();
           $table->foreign('category_id')->references('category_id')->on('categories') ;
        });

        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-001',
            'sub_category_name' =>'Informatique',
            'category_id' => 'cat-001'
        ]);
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-002',
            'sub_category_name' =>'Mathematical',
            'category_id' => 'cat-001'
        ]);
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-003',
            'sub_category_name' =>'Hystory',
            'category_id' => 'cat-001'
        ]);
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-004',
            'sub_category_name' =>'Geography',
            'category_id' => 'cat-001'
        ]);
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-005',
            'sub_category_name' =>'Roman',
            'category_id' => 'cat-001'
        ]);
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-006',
            'sub_category_name' =>'Action',
            'category_id' => 'cat-002'
        ]);
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-007',
            'sub_category_name' =>'Fantastic',
            'category_id' => 'cat-002'
        ]);
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-008',
            'sub_category_name' =>'Animation',
            'category_id' => 'cat-002'
        ]);
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-009',
            'sub_category_name' =>'Comedy ',
            'category_id' => 'cat-002'
        ]);
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-010',
            'sub_category_name' =>'Informatique',
            'category_id' => 'cat-001'
        ]);
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-011',
            'sub_category_name' =>'Play station',
            'category_id' => 'cat-003'
        ]);
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-012',
            'sub_category_name' =>'XBox',
            'category_id' => 'cat-003'
        ]);
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-013',
            'sub_category_name' =>'Nintendo',
            'category_id' => 'cat-003'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_categories');
    }
}
