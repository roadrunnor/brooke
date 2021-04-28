<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CommandLine;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(){
        // $cart = Cart::where('user_id', 5)->get();
        $carts = Cart::where('user_id', 5)->get();
        //$products = Product::get();
        //Si le panier est vide
        if(count($carts) == 0){
            $cart = new Cart();
            $cart->orderStatus = 'init';
            $cart->total = 0;
            $cart->user_id = 5;
            $cart->save();
        }
        //Si le panier n'est pas vide
        return view('cart', [
            // 'product' => 'les anciennes lignes commande'
            // 'cart' => $cart[0]
            'carts' => $carts
           
        ]);
    }
    //-----------------------------------------------
    public function addProduct($product_id, $user_id){
         //$tabConditions = ['user_id' => 5 ];
         $user_id = 5;
         $carts = Cart::where('user_id', $user_id)->get();
         foreach ($carts as $cart) {
            if($cart->orderStatus == 'init' || $cart->orderStatus == 'ongoing'){
                foreach( $cart->commandLines()->get() as  $commandLine){
                   if($commandLine->product_id == $product_id){
                    $commandLine->quantity += 1;
                    $commandLine->save();
                    return;
                   }
                 }
                $commandLine = new CommandLine();
                $commandLine->cart_id = 1;
                $commandLine->product_id = $product_id;
                $commandLine->quantity = 1;
                $commandLine->price = 10.5;
                $commandLine->save();
                if($cart->orderStatus == 'init'){
                    $cart->orderStatus = 'ongoing';
                    $cart->save();
                }
            }
         }
        // if(count($cart) != 0 && $cart->orderStatus = 'init'){
            
        // }
        // $cart = new Cart();
        // $cart->total = 12;
        // $cart->user_id = 1;
        // $cart->save();
        // $commandLine = new CommandLine();
        // $commandLine->cart_id = $cart->id;
        // $commandLine->product_id = $product;
        // $commandLine->save();

        // return view('cart', [
        //     'product' => $product
        // ]);

        //  return view('cart');
    }//Fin de addProduct
    //-----------------------------------------------
    public function addProduct_0($product){
        // $tabConditions = ['user_id' => 5 ]
        // $cart = Cart::where('user_id', 5)->get();
        // if(count($cart) != 0 && $cart->orderStatus = 'init'){
            $commandLine = new CommandLine();
            $commandLine->cart_id = 1;
            $commandLine->product_id = $product;
            $commandLine->quantity = 1;
            $commandLine->price = 85;
            $commandLine->save();
        // }
        // $cart = new Cart();
        // $cart->total = 12;
        // $cart->user_id = 1;
        // $cart->save();
        // $commandLine = new CommandLine();
        // $commandLine->cart_id = $cart->id;
        // $commandLine->product_id = $product;
        // $commandLine->save();

        // return view('cart', [
        //     'product' => $product
        // ]);

        //  return view('cart');
    }//Fin de addProduct

    //--------------------------------------------------
}//Fin de contrôleur
