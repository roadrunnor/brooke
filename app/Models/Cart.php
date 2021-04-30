<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function commandLines(){
        return $this->hasMany(CommandLine::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


}//fin de la classe
