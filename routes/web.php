<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ShopController;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Session;
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

Route::post('/login',[UserController::class, 'login']);
Route::get('/login',function(){
    return view ('login');
});
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get("product/{id}",[HomeController::class,'single_product'])->name('product');
Route::post("addtocart",[CartController::class,'addtocart'])->name('addtocart');
Route::get('/logout',function(){
    Session::forget('user');
    return redirect ('/');
});
Route::get('/cartlist',[CartController::class,'cartlist'])->name('cartlist');
Route::get('/removecart/{id}',[CartController::class,'removecart']);
Route::post('/savedregister',[UserController::class,'register'])->name('register');
Route::get('/register',function(){
    return view ('register');
});
Route::get('/wishes',[HomeController::class,'cartlist']);
Route::post('',[HomeController::class,'wishes'])->name('wishes');
Route::get('/about',function(){
    return view ('about');
});
Route::get('/removewish/{id}',[HomeController::class,'removewish']);
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/shop/men',[ShopController::class,'men']);
Route::get('/shop/baby',[ShopController::class,'baby']);
Route::get('/shop/women',[ShopController::class,'women']);
Route::get('/shop/pc',[ShopController::class,'pc']);
Route::get('/shop/pcgamer',[ShopController::class,'pcGamer']);
Route::get('/shop/devices',[ShopController::class,'printerScanner']);
Route::get('/shop/datastorage',[ShopController::class,'dataStorage']);
Route::get('/shop/accessories',[ShopController::class,'accessoriesPerpherals']);
Route::get('/shop/appliance',[ShopController::class,'homeAppliance']);
Route::get('/shop/kitchen',[ShopController::class,'kitchen']);
Route::get('/shop/books',[ShopController::class,'books']);
Route::get('/shop/groceries',[ShopController::class,'groceries']);
Route::get('/shop/jewelry',[ShopController::class,'jewelry']);
Route::get('/shop/parfum',[ShopController::class,'parfum']);
Route::get('/shop/mobile',[ShopController::class,'mobile']);
Route::get('/shop/tablette',[ShopController::class,'tablette']);
Route::get('/shop',[ShopController::class,'shop']);
Route::post('/checkout',[CheckoutController::class,'checkout'])->name('checkout');
Route::get('/checkout',[CheckoutController::class,'checkoutData']);
Route::get('search',[HomeController::class,'search']);
