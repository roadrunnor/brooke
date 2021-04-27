<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('cart', [
            'product' => 'les anciennes lignes commande'
        ]);
    }
    //-----------------------------------------------
    public function addProduct($product){
        return view('cart', [
            'product' => $product
        ]);
    }//Fin de addProduct

    //--------------------------------------------------
}//Fin de contrôleur
