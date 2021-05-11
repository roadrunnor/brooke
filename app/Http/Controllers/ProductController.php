<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Facade\FlareClient\Http\Response;
use GuzzleHttp\Psr7\Request;
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
       $i = 1;
      foreach ($category as $bigCat) {
        $subCatId[$i++] = SubCategory::get()->where('category_id', $bigCat)->pluck('sub_category_id');
      }
      $subCatIdBook = Product::whereIn('sub_category_id', $subCatId[1])->get();
      $subCatIdFilm = Product::whereIn('sub_category_id', $subCatId[2])->get();
      $subCatIdVideoGame = Product::whereIn('sub_category_id', $subCatId[3])->get();
      return view('products', ['subCatIdBook'=>$subCatIdBook, 'subCatIdFilm'=>$subCatIdFilm, 'subCatIdVideoGame'=>$subCatIdVideoGame]);
    }

    //detail du produit par son id
    public function getDetail($id)
    {
        //===== trouver un produit
        $response = Product::find($id);

        //touver ID sous categorie de ce produit (pour chercher son category) 
        $subCatProduct = SubCategory::where('sub_category_id', '=',  $response->sub_category_id)->get();

        //===== Réqupérer Category_Id du produit (ex: En cliquant sur un livre, il va chreche cat livre et ...)
          $categoryProduct = $subCatProduct->pluck('category_id') ;   
        //====================   
        
        // il a trouvé la categorie du produit que vous avez cliqué
        $subCatResponse = SubCategory::where('category_id', '=',  $categoryProduct)->get(); 
        
        // chercher tous les porduits de ce categorie   
        $productsOfCat = Product::whereIn('sub_category_id', $subCatResponse)->get();
        return view('details', ['response'=>$response, 'productsOfCat'=>$productsOfCat, 'categoryProduct'=>$categoryProduct]);
        // view('details', ['response'=>$response, 'productsOfCat'=>$productsOfCat]);
       
       
        // redirect()->route('dtails.getDetail',['response'=>$response, 'productsOfCat'=>$productsOfCat]); 
    }

    public function cattegoryBooks(){
      $subCategory = SubCategory::where('category_id','=', "cat-001")->get()->pluck('sub_category_id');
      $catBooks = Product::whereIn('sub_category_id', $subCategory)->get();
     return view('cattegoryBooks', ['catBooks'=>$catBooks, 'subCategory'=>$subCategory]);

      // return $catBooks;

    }
    public function cattegoryFilms(){
      $subCategory = SubCategory::where('category_id','=', "cat-002")->get()->pluck('sub_category_id');
      $catFilms = Product::whereIn('sub_category_id', $subCategory)->get();
      return view('cattegoryFilms', ['catFilms'=>$catFilms, 'subCategory'=>$subCategory]);

      // return $catBooks;

    }
    public function cattegoryVgames(){
      $subCategory = SubCategory::where('category_id','=', "cat-003")->get()->pluck('sub_category_id');
      $catVgames = Product::whereIn('sub_category_id', $subCategory)->get();
      return view('cattegoryVgames', ['catVgames'=>$catVgames, 'subCategory'=>$subCategory]);

      // return $catBooks;

    }

    public function subCinemaBook(){

      return "";
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
      
   
