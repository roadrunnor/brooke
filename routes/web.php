<?php
use App\Http\Controllers\clientController;
use App\Http\Controllers\HeaderControler;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Facade\FlareClient\Http\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class,'index'])->name('product.index');
 
//Route::get('/', function () {return view('header');})->name('post.header');
//Route::get('/',[HeaderControler::class ,'headerProduct'])->name('header.headerProduct');
Route::get('user',[UserController::class,'index'])->name('user.index');
Route::get('/posts',[clientController::class,'getAllPost'])->name('posts.getallposts');
Route::get('/posts/{id}',[clientController::class,'getPostById'])->name('posts.getPostById');
Route::get('/add-post',[clientController::class,'addPost'])->name('posts.addPost');
Route::get('/update-post', [clientController::class,'updatePost'])->name('posts-update');
Route::get('/delete-post/{id}',[clientController::class,'deletePost'])->name('post.delete');
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');
Route::get('/',[ProductController::class, 'getProducts'])->name('getAll.getProducts');

//---------Routage panier--------------------
Route::get('/cart',[CartController::class, 'index'])->name('cart.show');
Route::get('/addProduct/{product_id}/{user_id}',[CartController::class, 'addProduct'])->name('cart.addProduct');
Route::get('/destroyCommandLine/{id}',[CartController::class, 'destroy'])->name('destroy.show');

//-----------Fin de routage panier--------------
