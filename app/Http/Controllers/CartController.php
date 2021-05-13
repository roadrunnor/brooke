<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\CommandLine;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(){

        $carts = Cart::where('user_id', 1)->get();
        $categorys = DB::table('categories')->get();
        $sub_categories = DB::table('sub_categories')->get();
        $tabIdSubCatBooks= [];
        $tabIdSubCatFilms= [];
        $tabIdSubCatGames = [];
        
        foreach($sub_categories as $sub_categorie){
            if($sub_categorie->category_id == 'cat-001'){
                array_push($tabIdSubCatBooks, $sub_categorie->sub_category_id);
                // break;
            }
            if($sub_categorie->category_id == 'cat-002'){
                array_push($tabIdSubCatFilms, $sub_categorie->sub_category_id);
                // break;
            }
            if($sub_categorie->category_id == 'cat-003'){
                array_push($tabIdSubCatGames, $sub_categorie->sub_category_id);
                // break;
            }
        }

        if(count($carts) == 0){
            $cart = new Cart();
            $cart->orderStatus = 'init';
            $cart->total = 0;
            $cart->user_id = 1;
            $cart->save();
        }
        //Si le panier n'est pas vide
        return view('cart', [
            // 'teste' => count($carts)
            'carts' => $carts,
            // 'categorys' => $categorys,
            // 'sub_categories' => $sub_categories,
            'tabIdSubCatBooks' => collect($tabIdSubCatBooks),
            'tabIdSubCatFilms' => collect($tabIdSubCatFilms),
            'tabIdSubCatGames' => collect($tabIdSubCatGames)    
        ]);
    }
    //-----------------------------------------------
   
    //-----------------------------------------------
    //----------------------------------------------------
    public function addProduct($product_id, $user_id){
         //$tabConditions = ['user_id' => 5 ];
         //il faut créer une variable session dans la fonction login
         //$user_id = User::session(auth()->id())->getContent();
         $user_id = 1;
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
                    $cart->nbArticles += 1;
                   
                    $cart->save();
                    // return redirect()->route('cart.show');
                    //return view('products');
                    return redirect()->route('getAll.getProducts', ['nbArticles' => 5]);
                   }
                 }
                $commandLine = new CommandLine();
                $commandLine->cart_id = $cart->id;
                $commandLine->product_id = $product_id;
                $commandLine->quantity = 1;
                $commandLine->price = $product->product_promotion_price;
                $commandLine->save();
                $cart->total += $commandLine->price;
                $cart->nbArticles += 1;
                //$cart->save();
                if($cart->orderStatus == 'init'){
                    $cart->orderStatus = 'ongoing';
                   
                }
                $cart->save();
            }
         }
         //return redirect()->route('cart.show');
         //return view('products');
         return redirect()->route('getAll.getProducts', ['nbArticles' => 5]);
    }//Fin de addProduct
    //-----------------------------------------------
    public function destroy($id){
        $commandLine = CommandLine::find($id);
        $cart = Cart::where('id', $commandLine->cart_id)->get();
        $cart[0]->total -= $commandLine->price;
        $cart[0]->nbArticles -= $commandLine->quantity;
        
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
        $cart->nbArticles = 0;
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

        $ancienneNbArticles = $cart[0]->nbArticles;
        $ancienneNbArticles -= $commandLine->quantity;
        
        //------------------------
        $commandLine->quantity = $qtn; 
        $product = Product::find($commandLine->product_id);
        $commandLine->price = $product->product_promotion_price * $qtn;
        $commandLine->save(); 
        $cart[0]->total = $ancienneTotalb + $commandLine->price;  
        $cart[0]->nbArticles = $ancienneNbArticles + $commandLine->quantity;  
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
