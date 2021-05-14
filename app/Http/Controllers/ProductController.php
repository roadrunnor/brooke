<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
   
    public function getProducts()
    {

      $category = Category::pluck('category_id');

      $i = 1;
      foreach ($category as $bigCat) {
        $subCatId[$i++] = SubCategory::get()->where('category_id', $bigCat)->pluck('sub_category_id');
      }
      $subCatIdBook = Product::whereIn('sub_category_id', $subCatId[1])->get();
      $subCatIdFilm = Product::whereIn('sub_category_id', $subCatId[2])->get();
      $subCatIdVideoGame = Product::whereIn('sub_category_id', $subCatId[3])->get();

      $cart = Cart::find(1);
      $nbArticles = $cart->nbArticles;

      return view('products', ['subCatIdBook'=>$subCatIdBook, 'subCatIdFilm'=>$subCatIdFilm, 'subCatIdVideoGame'=>$subCatIdVideoGame, 'nbArticles'=> $nbArticles]);      
    }

    public function menu(){
    $categoryName = Category::pluck('category_name');
   
  return view('header' ,['categoryName'=>$categoryName]);
  
}
    public function getDetail($id)
    {
        $response = Product::find($id);
        $subCatProduct = SubCategory::where('sub_category_id', '=',  $response->sub_category_id)->get();
        $categoryProduct = $subCatProduct->pluck('category_id') ;   
        $subCatResponse = SubCategory::where('category_id', '=',  $categoryProduct)->get(); 
        $productsOfCat = Product::whereIn('sub_category_id', $subCatResponse)->get();
        return view('details', ['response'=>$response, 'productsOfCat'=>$productsOfCat, 'categoryProduct'=>$categoryProduct]);
    }

    public function categoryBooks(){
      $subCategory = SubCategory::where('category_id','=', "cat-001")->get()->pluck('sub_category_id');
      $catBooks = Product::whereIn('sub_category_id', $subCategory)->get();
     return view('categoryBooks', ['catBooks'=>$catBooks, 'subCategory'=>$subCategory]);
    }

    public function categoryFilms(){
      $subCategory = SubCategory::where('category_id','=', "cat-002")->get()->pluck('sub_category_id');
      $catFilms = Product::whereIn('sub_category_id', $subCategory)->get();
      return view('categoryFilms', ['catFilms'=>$catFilms, 'subCategory'=>$subCategory]);
    }

    public function categoryVgames(){
      $subCategory = SubCategory::where('category_id','=', "cat-003")->get()->pluck('sub_category_id');
      $catVgames = Product::whereIn('sub_category_id', $subCategory)->get();
      return view('categoryVgames', ['catVgames'=>$catVgames, 'subCategory'=>$subCategory]);
    }

    public function subCinemaBook(){

      return "";
    }
  }  