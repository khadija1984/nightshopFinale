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


Route::get('/', 'HomeController@index')->name('home');

Route::get('/produit/', 'ProductController@index')->name('produit.index');
//Route::get('/categories', 'CategorieController@listCategories');
Route::post('nous contacter', 'HomeController@postcontact')->name('contact.post');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/apropos', function () {
    return view('apropos');
});

Route::get('produit/{id}', 'ProductController@index')->name('product.index');
Route::get('panier/add/{id}', 'PanierController@add')->name('panier.add');
Route::get('/categories', 'CategorieController@listCategories');
Route::get('/categories/alcools', 'CategorieController@alcools');

Route::get('/categories/alcools', 'CategorieController@filtre')->name('alcools.index');;
Route::get('/categories/softs', 'CategorieController@softs');
Route::get('panier','PanierController@index')->name('panier');
 /* Route::get('/categories/alcools', function () {
    return view('alcools');
});*/
Auth::routes();
/*
Route::get('/categories', 'CategorieController@index')->name('categories.index');
Route::get('/categories/produits}', 'ProduitController@index')->name('prouits.index');
Route::get('/categories/produits/{id}', 'ProduitController@index')->name('prouits.index');

*/
Route::get('panier/addOne/{id}','PanierController@addOne')->name('panier.addOne');
Route::get('panier/subOne/{id}','PanierController@subOne')->name('panier.subOne');
Route::get('panier/delete/{id}','PanierController@delete')->name('panier.delete');


