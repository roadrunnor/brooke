<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGame extends Model
{
    use HasFactory;
    public $fillable =[
        'product_id',
        'game_consoles',
    ];
    protected $table = "video_games";
    protected $primaryKey = 'product_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public function product(){
<<<<<<< HEAD
        return $this->belongsTo(Product::class, 'foreign_key');
=======
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
>>>>>>> f435367ec13291183318a1be6257941ac464ac12
    }
}
