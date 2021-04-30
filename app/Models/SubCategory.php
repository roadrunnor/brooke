<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    //------------test affiche par catégorie
    protected $primaryKey = 'sub_category_id';
    public $incrementing = false;
    protected $keyType = 'string';
    //-------------------------------

    public $fillable = [
        'sub_category_id',
        'sub_category_name',
        'category_id',
    ];

<<<<<<< HEAD
    public function categories(){
        return $this->belongsTo(Category::class);
    }
=======
    protected $table = "sub_categories";
    protected $primaryKey = 'sub_category_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function category()
{
    return $this->belongsTo(Category::class, 'category_id', 'sub_category_id');
}
public function productSub(){
    return $this->hasMany(Product::class, 'sub_category_id', 'sub_category_id');  
}
>>>>>>> f435367ec13291183318a1be6257941ac464ac12
   
}
