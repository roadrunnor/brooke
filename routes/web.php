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



//---------Routage panier--------------------
Route::get('/cart',[CartController::class, 'index'])->name('cart.show');
Route::get('/addProduct/{product_id}/{user_id}',[CartController::class, 'addProduct'])->name('cart.addProduct');
Route::get('/destroyCommandLine/{id}',[CartController::class, 'destroy'])->name('destroy.show');
Route::get('/destroyCart/{id}',[CartController::class, 'destroyCart'])->name('destroyCart.cart');
Route::post('/updateCommandLine',[CartController::class, 'updateCommandLine'])->name('updateCommandLine.cart');
Route::get('/passerCommande/{user_id}/{cart_id}',[CartController::class, 'passerCommande'])->name('passerCommande.cart');
//-----------Fin de routage panier--------------

//---------Routage Products--------------------
Route::get('/product',[ProductController::class, 'getProducts'])->name('getAll.getProducts');
Route::get('/details/{product_id}', [ProductController::class, 'getDetail']);
Route::get('/cattegoryBooks', [ProductController::class, 'cattegoryBooks']);
Route::get('/cattegoryFilms', [ProductController::class, 'cattegoryFilms']);
Route::get('/cattegoryVgames', [ProductController::class, 'cattegoryVgames']);
Route::get('/header',[ProductController::class,'menu'])->name('header');

// Route::get('/categoryBooks/subCinemaBook', [ProductController::class,'subCinemaBook'])->nsme('category.subCinemaBook');
//-----------Fin de routage products--------------

Auth::routes();

/* Route::get('/',[LoginController::class,'index'])->name('login.index'); */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register');



