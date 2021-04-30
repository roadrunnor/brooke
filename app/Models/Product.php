<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
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
    }
}
