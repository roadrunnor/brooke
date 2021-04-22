<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
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
    public function book(){
        return $this->HasOne('App\Models\Book');
    }
    public function film(){
        return $this->HasOne('App\Models\Film');
    }
    public function videoGame(){
        return $this->HasOne('App\Models\VideoGame');
    }
}
