<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    public $fillable = [
        'sub_category_id',
        'sub_category_name',
        'category_id',
    ];
   
}
