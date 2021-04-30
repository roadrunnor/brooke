<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Category;
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
