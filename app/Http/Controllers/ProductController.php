<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
<<<<<<< HEAD
use App\Models\Product as ModelsProduct;
use App\Models\SubCategory;

class ProductController extends Controller
{
  public function index(){
      $fruits = array("Mango","Orange",'Bnaan', 'Apple','Pineapple' );
      return view('welcome',\compact('fruits'));
  }
  public function getProducts(){
    $response = DB::table('products')->get();
    // $product = new product();
    // $product->product_image =  $response->product_image;
    return view('products', compact('response'));
  }
  //------------------------------------
  public function getBooks(){
    //----------Selon le sous catégorie
    // $book = product::where('sub_category_id', 'sub-003')->get();
    // return $book;

    //-------Selon la catégorie
    $souCats = SubCategory::where('category_id', 'cat-001')->get();
    $tabIdSousCat = [];
    foreach($souCats as $souCat){
      array_push($tabIdSousCat, $souCat->sub_category_id);
    }
    $book = product::whereIn('sub_category_id', $tabIdSousCat)->get();
    return $book;
  }
  //------------------------------------
  

}//Fin de la classe
=======
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
        $response = Product:: all();
        return view('products', compact('response'));
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
       
       
       
       
       
       
       
       
       
       
       
        // return view('details', ['response'=>$response]);
      // return $productsOfCat; 






       //$subsCatId = SubCategory::whereIn('category_id', '=',  $subCatProduct->category_id)->get();
      // $bookDetail = Product::find($id)->book;

      // $filmDetail = Product::find($id)->film;
      // $vGameDetail = Product::find($id)->videoGame;
      // return $response."  ******** ".$bookDetail." ==========+++==== ".$filmDetail."   ++++++++++++  ".$vGameDetail ;
      //return view('details', ['response'=>$response], ['bookDetail'=>$bookDetail], ['filmDetail'=>$filmDetail], ['vGameDetail'=>$filmDetail]);
      
     
    }

  }
>>>>>>> f435367ec13291183318a1be6257941ac464ac12
