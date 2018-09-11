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

Route::get('/categories', 'CategorieController@listCategories');
Route::get('/categories/alcools', 'CategorieController@alcools');

Route::get('/categories/alcools', 'CategorieController@filtre')->name('alcools.index');
Route::get('/categories/softs', 'CategorieController@softs');

//route voir le panier
Route::get('panier','PanierController@index')->name('panier');

//ROUTE AJOUTER AU PANIER EN CLIQUANT SUR UN BUTTON
Route::post('panier/add', 'PanierController@addProduct')->name('panier.add.product');
Route::get('panier/add/{name}', 'PanierController@add')->name('panier.add');
// route  pour valider
Route::get('panier/validation', 'PanierController@valider')->name('panier.valider');

//route ajouter le meme produit (quantité)
Route::get('panier/addOne/{id}','PanierController@addOne')->name('panier.addOne');
//route enlever le meme produit  (quantité)
Route::get('panier/subOne/{id}','PanierController@subOne')->name('panier.subOne');
//route supprimer un produit de panier
Route::get('panier/delete/{id}','PanierController@delete')->name('panier.delete');

 /* Route::get('/categories/alcools', function () {
    return view('alcools');
});*/

Auth::routes();

/*
Route::get('/categories', 'CategorieController@index')->name('categories.index');
Route::get('/categories/produits}', 'ProduitController@index')->name('prouits.index');
Route::get('/categories/produits/{id}', 'ProduitController@index')->name('prouits.index');

*/


