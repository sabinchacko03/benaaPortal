<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');
Route::get('search', 'HomeController@search');
Route::get('product/{category}', 'CategoryController@showSubcategories');
Route::get('product/{category}/{sub_category}', 'CategoryController@showSubcategoryProducts');
Route::get('product/{category}/{sub_category}/{product}', 'CategoryController@showProductDetails');
Route::post('addtocart', 'CategoryController@addToCart');
Route::post('updatecart', 'CategoryController@updateCart');
Route::view('cart', 'cart');
Route::post('deleteitem', 'CategoryController@deleteItem');
Route::view('checkout', 'checkout');
Route::post('submitcheckout', 'CategoryController@checkoutSubmit');