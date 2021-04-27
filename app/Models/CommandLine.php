<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandLine extends Model
{
    use HasFactory;

    public function cart(){
        return $this->belongsTo(Cart::class);
    }
}//Fin de la classe
