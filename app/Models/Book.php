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
        'book_link',
    ];
      protected $table = "books";
      protected $primaryKey = 'product_id';
      public $incrementing = false;
      protected $keyType = 'string';

      public function product(){

      return $this->belongsTo(Product::class, 'product_id', 'product_id');
        // return $this->hasOneThrough(App\Product::class, App\Film::class, App\VideoGame::class);

      }
     
}
