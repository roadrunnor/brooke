<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Product as ModelsProduct;

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
  

}
