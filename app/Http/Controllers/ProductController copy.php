<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Product as ModelsProduct;

class ProductController extends Controller
{
  public function getProducts(){
    $response = DB::table('products_view')->get();
    return view('products', compact('response'));
  }
}
