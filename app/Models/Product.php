<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //--------------Partie panier------
    protected $primaryKey = 'product_id';
    public $incrementing = false;
    protected $keyType = 'string';
    //------------Fin de panier panier------------
    use HasFactory;
    protected $table = 'products';
    public $fillable =[
        'product_id',
        'product_name',
        'product_price',
        'product_promotion_price',
        'product_stock_quantity',
        'product_description',
        'product_image',
        'sub_category_id',
    ];
    protected $primaryKey = 'product_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public function book(){
<<<<<<< HEAD
        return $this->hasOne(Book::class, 'foreign_key');
    }
    public function film(){
        return $this->hasOne(Film::class, 'foreign_key');
    }
    public function videoGame(){
        return $this->hasOne(VideoGame::class, 'foreign_key');
=======
        return $this->hasOne(Book::class, 'product_id', 'product_id');

    }
    public function film(){
        return $this->hasOne(Film::class, 'product_id', 'product_id');
    }
    public function videoGame(){
        return $this->hasOne(VideoGame::class, 'product_id', 'product_id');
    }
    public function subCategoryToProduct() {
    return $this->belongsTo(SubCategory::class, 'sub_category_id', 'product_id');   
>>>>>>> f435367ec13291183318a1be6257941ac464ac12
    }


    //------------Partie panier------------
    public function commandLines(){
        return $this->hasMany(CommandLine::class);
    }
    //------------Fin de Partie panier------------
}
