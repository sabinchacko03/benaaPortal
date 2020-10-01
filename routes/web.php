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
Route::get('search/{searchKey?}/{page?}', 'HomeController@search');
Route::get('product/{category}', 'CategoryController@showSubcategories');
Route::get('product/{category}/{sub_category}', 'CategoryController@showSubcategoryProducts');
Route::get('product/{category}/{sub_category}/{product}', 'CategoryController@showProductDetails');
Route::post('addtocart', 'CategoryController@addToCart');
Route::post('updatecart', 'CategoryController@updateCart');
Route::view('cart', 'cart');
Route::post('deleteitem', 'CategoryController@deleteItem');
Route::get('checkout', 'CategoryController@checkout');
Route::post('submitcheckout', 'CategoryController@checkoutSubmit');
Route::get('api/getcart', 'CategoryController@getCart');
Route::get('api/updateshipping', 'CategoryController@updateShipping');
Route::get('shop', 'CategoryController@shop');
Route::view('contact-us', 'contact-us');
Route::view('about-us', 'about-us');
Route::view('fast-track', 'fast-track');
Route::get('ajax-search', 'HomeController@ajaxSearch');
// Route::post('api/updateshipping', 'CategoryController@updateShipping');