<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    public $fillable = [
        'product_id',
        'film_duration',
        'film_recommanded_for_age',
        'film_actors',
    ];
    protected $table = "films";
    protected $primaryKey = 'product_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public function product(){

        return $this->belongsTo(Product::class, 'product_id', 'product_id');

    }
}
