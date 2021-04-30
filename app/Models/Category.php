<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    //------------test affiche par catégorie
    protected $primaryKey = 'category_id';
    public $incrementing = false;
    protected $keyType = 'string';
    //-------------------------------
    use HasFactory;
    public $fillable = [
        'category_id',
        'category_name'
    ];

    public function subCategories(){
        return $this->hasMany(SubCategory::class);
    }


}//Fin de la classe

