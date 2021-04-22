<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $fillable = [
        'product_id',
        'book_nb_pages',
        'book_ISBN',
        'book_release_date',
        'book_author',
        'book_editor',
        'book_collection',
        'book_Link',
    ];
      protected $table = "books";
      public function product(){
          return $this->belongsTo('App\Models\Product');
      }
}
