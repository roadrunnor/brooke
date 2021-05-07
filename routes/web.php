<?php

use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use Illuminate\Auth\Events\Login;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
/* Route::get('user',[UserController::class,'index'])->name('user.index'); */

/* -- Ricardo Login-- */


/* Route::get('/',[UserController::class,'login'])->name('user.index'); */
// Route::get('/',[LoginController::class,'index']);

/*Route::post('/user',[UserController::class,'login'])->name('user.login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');
 Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit'); 
 Route::get('/',[UserController::class,'loginSubmit']); */
/* ----------------- */


<<<<<<< HEAD
/* Route::get('/posts',[clientController::class,'getAllPost'])->name('posts.getallposts');
=======
Route::get('/', [ProductController::class,'index'])->name('product.index');

//Route::get('/', function () {return view('header');})->name('post.header');
//Route::get('/',[HeaderControler::class,'headerProduct'])->name('header.headerProduct');

Route::get('/', function () {return view('header');})->name('header.index');

Route::get('user',[UserController::class,'index'])->name('user.index');
Route::get('/posts',[clientController::class,'getAllPost'])->name('posts.getallposts');
>>>>>>> 17cd1595a86c4f691da2d0957b2ffeb593104602
Route::get('/posts/{id}',[clientController::class,'getPostById'])->name('posts.getPostById');
Route::get('/add-post',[clientController::class,'addPost'])->name('posts.addPost');
Route::get('/update-post', [clientController::class,'updatePost'])->name('posts-update');
Route::get('/delete-post/{id}',[clientController::class,'deletePost'])->name('post.delete'); */

<<<<<<< HEAD
Route::get('/',[LoginController::class,'index'])->name('login.index');
Route::post('/',[LoginController::class,'loginSubmit'])->name('login.submit');
/* Route::get('/product',[ProductController::class, 'getProducts'])->name('getAll.getProducts');
 */
Route::get('/product',[ProductController::class, 'getProducts'])->name('getAll.getProducts');
=======
Route::get('/',[ProductController::class, 'getProducts'])->name('getAll.getProducts');

>>>>>>> 17cd1595a86c4f691da2d0957b2ffeb593104602

//---------Routage panier--------------------
Route::get('/cart',[CartController::class, 'index'])->name('cart.show');
Route::get('/addProduct/{product_id}/{user_id}',[CartController::class, 'addProduct'])->name('cart.addProduct');
Route::get('/destroyCommandLine/{id}',[CartController::class, 'destroy'])->name('destroy.show');
Route::get('/destroyCart/{id}',[CartController::class, 'destroyCart'])->name('destroyCart.cart');

//-----------Fin de routage panier--------------

Route::get('/details/{product_id}', [ProductController::class, 'getDetail']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
