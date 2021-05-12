<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CommandLine;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class CartController extends Controller
{
    public function index(){

        $carts = Cart::where('user_id', 5)->get();
        if(count($carts) == 0){
            $cart = new Cart();
            $cart->orderStatus = 'init';
            $cart->total = 0;
            $cart->user_id = 5;
            $cart->save();
        }
        //Si le panier n'est pas vide
        return view('cart', [
            // 'teste' => count($carts)
            'carts' => $carts           
        ]);
    }
    //-----------------------------------------------
   
    //-----------------------------------------------
    //----------------------------------------------------
    public function addProduct($product_id, $user_id){
         //$tabConditions = ['user_id' => 5 ];
         $user_id = 5;
         $carts = Cart::where('user_id', $user_id)->get();
         $product = Product::find($product_id);
         foreach ($carts as $cart) {
            if($cart->orderStatus == 'init' || $cart->orderStatus == 'ongoing'){
                foreach( $cart->commandLines()->get() as  $commandLine){
                   if($commandLine->product_id == $product_id){
                    $commandLine->quantity += 1;
                    $cart->total -=  $commandLine->price;
                    $commandLine->price += $product->product_promotion_price;
                    $commandLine->save();
                    $cart->total += $commandLine->price;
                   
                    $cart->save();
                    return redirect()->route('cart.show');
                   }
                 }
                $commandLine = new CommandLine();
                $commandLine->cart_id = $cart->id;
                $commandLine->product_id = $product_id;
                $commandLine->quantity = 1;
                $commandLine->price = $product->product_promotion_price;
                $commandLine->save();
                $cart->total += $commandLine->price;
                //$cart->save();
                if($cart->orderStatus == 'init'){
                    $cart->orderStatus = 'ongoing';
                   
                }
                $cart->save();
            }
         }
         return redirect()->route('cart.show');
    }//Fin de addProduct
    //-----------------------------------------------
    public function destroy($id){
        $commandLine = CommandLine::find($id);
        $cart = Cart::where('id', $commandLine->cart_id)->get();
        $cart[0]->total -= $commandLine->price;
        
        $commandLine->delete();
        $cart[0]->save();
        return redirect()->route('cart.show');
    }
   
    //--------------------------------------------------
    public function destroyCart($id){
        $cart = Cart::find($id);
        $commandLines = $cart->commandLines;
        foreach($commandLines as $commandLine){
            $commandLine->delete();
        }
        $cart->total = 0;
        $cart->save();
        return redirect()->route('cart.show');
    }
   
    //--------------------------------------------------
    public function updateCommandLine(){
        $id = $_POST['id'];
        $qtn = $_POST['qtn'];
        $commandLine = CommandLine::find($id);
        //-----------------------
        $cart = Cart::where('id', $commandLine->cart_id)->get();
        $ancienneTotalb = $cart[0]->total;
        $ancienneTotalb -= $commandLine->price;
        
        //------------------------
        $commandLine->quantity = $qtn; 
        $product = Product::find($commandLine->product_id);
        $commandLine->price = $product->product_promotion_price * $qtn;
        $commandLine->save(); 
        $cart[0]->total = $ancienneTotalb + $commandLine->price;  
        $cart[0]->save();
        return redirect()->route('cart.show');
    }
   
    //--------------------------------------------------

    public function passerCommande($user_id, $cart_id){
        $user = User::find($user_id);
        $cart = Cart::find($cart_id);

        return view('passerCommande', [
            'user' => $user,
            'cart' => $cart         
        ]);
    }

    
}//Fin de contrôleur
