<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('product', 'ProductController');
Route::resource('category', 'CategoryController');
Route::resource('user', 'UserController');
Route::resource('promotion', 'PromotionController');
Route::resource('message', 'MessageController');
Route::resource('panier', 'PanierController');
Route::resource('line', 'LineController');
Route::resource('paiment', 'PaimentController');
Route::resource('visuel', 'VisuelController');
Route::resource('tag', 'TagController');
Route::resource('brand', 'BrandController');
Route::resource('page', 'PageController');
