<?php
use App\Http\Controllers\clientController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('user',[UserController::class,'index'])->name('user.index');
Route::get('/posts',[clientController::class,'getAllPost'])->name('posts.getallposts');
Route::get('/posts/{id}',[clientController::class,'getPostById'])->name('posts.getPostById');
Route::get('/add-post',[clientController::class,'addPost'])->name('posts.addPost');
Route::get('/update-post', [clientController::class,'updatePost'])->name('posts-update');
Route::get('/delete-post/{id}',[clientController::class,'deletePost'])->name('post.delete');
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');
Route::get('/',[ProductController::class, 'getProducts'])->name('getAll.getProducts');
Route::get('/details/{product_id}', [ProductController::class, 'getDetail']);
