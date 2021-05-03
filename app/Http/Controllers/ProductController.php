<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
    }
   
    public function getProducts()
    {
     // $titles = DB::table('users')->pluck('title');
      $category = Category::pluck('category_id');
       $i = 0;
      foreach ($category as $bigCat) {
        $subCatId[$i++] = SubCategory::get()->where('category_id', $bigCat)->pluck('sub_category_id');
      
      }
      $subCatIdBook = Product::whereIn('sub_category_id', $subCatId[0])->get();
      $subCatIdFilm = Product::whereIn('sub_category_id', $subCatId[1])->get();
      $subCatIdVideoGame = Product::whereIn('sub_category_id', $subCatId[2])->get();
      return view('products', compact('subCatIdBook'), compact('subCatIdFilm'), compact('subCatIdVideoGame'));
      
      // $category.'<br>'.$subCatIdBook.'<br>'.$subCatIdFilm.'<br>'.$subCatIdVideoGame; 
      
      //   $response = Product:: all();
      //   return view('products', compact('response'));

      // return $category.'<br>'.$subCatIdBook.'<br>'.$subCatIdFilm.'<br>'.$subCatIdVideoGame;
      // .$subCatIdFilm.'<br>'.$subCatIdVideoGame;
    }



    public function getDetail($id)
    {
        //===== trouver un roduit
        $response = Product::find($id);

        //touver ID sous categorie de ce produit (pour chercher son category) 
        $subCatProduct = SubCategory::where('sub_category_id', '=',  $response->sub_category_id)->get();

        //===== Réqupérer Category_Id du produit (ex: En cliquant sur un livre, il va chreche cat livre et ...)
            foreach ($subCatProduct as $item) {
              $categoryProduct =[];  
              array_push($categoryProduct, $item->category_id);
            }
        //====================   
        
        // il a trouvé la categorie du produit que vous avez cliqué
        $subCatResponse = SubCategory::where('category_id', '=',  $categoryProduct)->get();  //
        // chercher tous les porduits de ce categorie   
        $productsOfCat = Product::whereIn('sub_category_id', $subCatResponse)->get();
        return view('details', compact('response'), compact('productsOfCat'));
       
       
       
    }

  }  
       
       
       
       
       
       
       
       
        // return view('details', ['response'=>$response]);
      // return $productsOfCat; 






       //$subsCatId = SubCategory::whereIn('category_id', '=',  $subCatProduct->category_id)->get();
      // $bookDetail = Product::find($id)->book;

      // $filmDetail = Product::find($id)->film;
      // $vGameDetail = Product::find($id)->videoGame;
      // return $response."  ******** ".$bookDetail." ==========+++==== ".$filmDetail."   ++++++++++++  ".$vGameDetail ;
      //return view('details', ['response'=>$response], ['bookDetail'=>$bookDetail], ['filmDetail'=>$filmDetail], ['vGameDetail'=>$filmDetail]);
      
   
