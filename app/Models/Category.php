<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    use HasFactory;
    public $fillable = [
        'category_id',
        'category_name'
    ];
    
    protected $table = "categories";
    protected $primaryKey = 'category_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'category_id');
    }



}//Fin de la classe





