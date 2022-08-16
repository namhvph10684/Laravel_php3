<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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

Route::middleware('guest')->prefix('/home')->name('home.')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/product/{id}', [HomeController::class, 'productDetail'])->name('product');
    Route::get('/cart/{id}', [HomeController::class, 'cart'])->name('cart');
   
});



Route::middleware(['auth', 'admin'])->prefix('/users')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('list'); //users.list
    Route::delete('/delete/{user}', [UserController::class, 'delete'])->name('delete'); //name: users.delete
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
    Route::post('/update/{user}', [UserController::class, 'update'])->name('update');
    Route::put('/updatePosition/{id}',[UserController::class, 'updatePosition'])->name('updatePosition');
    
});


Route::middleware(['auth', 'admin'])->prefix('/cate')->name('cate.')->group(function () {
        Route::get('/',[CategoryController::class, 'index'])->name('list');
        Route::delete('/delete/{cate}', [CategoryController::class, 'delete'])->name('delete');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{cate}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{cate}', [CategoryController::class, 'update'])->name('update');
});


Route::middleware(['auth', 'admin'])->prefix('/products')->name('products.')->group(function () {
    Route::get('/',[ProductController::class, 'index'])->name('list');
    Route::delete('/delete/{product}', [ProductController::class, 'delete'])->name('delete');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
    Route::put('/update/{product}', [ProductController::class, 'update'])->name('update');
    Route::put('/updateStatus/{id}',[ProductController::class, 'updateStatus'])->name('updateStatus');
   
});


 Route::middleware('guest')->prefix('/auth')->name('auth.')->group(function () {
     Route::get('/login', [AuthController::class, 'getLogin'])->name('getLogin');
     Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
     Route::get('/rigister',[AuthController::class, 'getRigister'])->name('getRigister');
     Route::post('/rigister',[AuthController::class, 'postRigister'])->name('postRigister');
  
 
 });

  Route::get('/auth/logout', [AuthController::class, 'logout'])->middleware('auth');

 