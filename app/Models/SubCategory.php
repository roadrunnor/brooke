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

    public function categories(){
        return $this->belongsTo(Category::class);
    }
   
}
