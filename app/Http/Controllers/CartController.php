<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CommandLine;
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
        $cart = new Cart();
        $cart->total = 12;
        $cart->user_id = 1;
        $cart->save();
        $commandLine = new CommandLine();
        $commandLine->cart_id = $cart->id;
        $commandLine->product_id = $product;
        $commandLine->save();

        return view('cart', [
            'product' => $product
        ]);
    }//Fin de addProduct

    //--------------------------------------------------
}//Fin de contrôleur
