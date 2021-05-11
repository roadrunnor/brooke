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

        /* BOOKS */
        /* Computer */

        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-001',
            'sub_category_name' => 'Computer',
            'category_id' => 'cat-001'
        ]);

        /* Mathematic */
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-002',
            'sub_category_name' => 'Mathematic',
            'category_id' => 'cat-001'
        ]);

        /* History */
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-003',
            'sub_category_name' => 'History',
            'category_id' => 'cat-001'
        ]);

        /* Geography */
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-004',
            'sub_category_name' => 'Geography',
            'category_id' => 'cat-001'
        ]);

        /* Novel */
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-005',
            'sub_category_name' => 'Novel',
            'category_id' => 'cat-001'
        ]);


        /* FILMS */
        /* Action */
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-006',
            'sub_category_name' => 'Action',
            'category_id' => 'cat-002'
        ]);

        /* Fantastic */
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-007',
            'sub_category_name' => 'Fantastic',
            'category_id' => 'cat-002'
        ]);

        /* Animation 3D */
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-008',
            'sub_category_name' => 'Animation',
            'category_id' => 'cat-002'
        ]);

        /* Comedy */
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-009',
            'sub_category_name' => 'Comedy ',
            'category_id' => 'cat-002'
        ]);

        /* Deram */
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-010',
            'sub_category_name' => 'Deram ',
            'category_id' => 'cat-002'
        ]);
        
        /* Video Games */
        /* Sub-category-PS4 */
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-011',
            'sub_category_name' => 'Play station',
            'category_id' => 'cat-003'
        ]);

        /* Sub-category-WII */
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-012',
            'sub_category_name' => 'Nintendo',
            'category_id' => 'cat-003'
        ]);

        /* Sub-category-XBOX */
        DB::table('sub_categories')->insert([
            'sub_category_id' => 'sub-013',
            'sub_category_name' => 'XBOX',
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
