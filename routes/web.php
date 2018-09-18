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

//Route::get('/', 'HomeController@show')->name('home');
//Route::get('/', 'HomeController@index1')->name('home');
//Route::get('/incudes._menuverticale', 'HomeController@footerLasts');
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
Route::get('/categories/packs', 'CategorieController@packs');
Route::get('/categories/divers', 'CategorieController@divers');

//route voir le panier
Route::get('/panier','PanierController@index')->name('panier');

//ROUTE AJOUTER AU PANIER EN CLIQUANT SUR UN BUTTON
Route::post('panier/add', 'PanierController@addProduct')->name('panier.add.product');
Route::get('panier/add/{name}', 'PanierController@add')->name('panier.add');
// route  pour valider
Route::get('panier/validation', 'PanierController@valider')->name('panier.valider');
Route::get('/', 'HomeController@show')->name('');
//ROUTE PAIEMENT
Route::group(['middleware' => ['isAdmin']], function () {
    Route::get('/admin', 'AdminController@index')->name('dashbordAdmin');
    Route::get('/admin/users', 'AdminController@showUsers')->name('showUsers');
    Route::get('/admin/categories', 'AdminController@showCategories')->name('showCategories');
    Route::get('/admin/produits', 'AdminController@showProduits')->name('showProduits');
    Route::delete('/admin/users/delete/{id}','AdminController@destroyUser')->name('deleteuser');
    Route::delete('/admin/categories/delete/{id}','AdminController@destroyCategory')->name('deletecategory');
    Route::delete('/admin/produits/delete/{id}','AdminController@destroyProduct')->name('deleteproduct');
    Route::get('/admin/users/addUser', function () {
    return view('addUser');
    });
    Route::get('/admin/Category/addCategory', function () {
    return view('addCategory');
    });
    Route::get('/admin/Product/addProduct', function () {
    return view('addProduct');
    });
    //Route::POST('/admin/users/addUser/createUser{request}','AdminController@createUser')->name('createUser');
    Route::PUT('/admin/users/addUser/createUser','AdminController@createUser')->name('createUser');
    Route::GET('/admin/users/addUser/createUser','AdminController@createUser')->name('createUser');
    Route::get('/admin/users/addUser/add', 'AdminController@addUser')->name('adduser');
    Route::PUT('/admin/categories/addCategory/createCategory','AdminController@createCategory')->name('createCategory');
    Route::GET('/admin/categories/addCategory/createCategory','AdminController@createCategory')->name('createCategory');
    Route::PUT('/admin/categories/addProduct/createProduct','AdminController@createProduct')->name('createProduct');
   Route::get('/admin/categories/addProduct/createProduct','AdminController@createProduct')->name('createProduct');
   Route::get('/admin/users/{id}', 'AdminController@ficheUser')->name('user.index');
    Route::put('/admin/users/updateUser','AdminController@updateUser')->name('updateUser');
    Route::get('/admin/users/updateUser','AdminController@updateUser')->name('updateUser');
    Route::get('/admin/categories', 'AdminController@showCategories')->name('showCategories');
    Route::get('/admin/produits', 'AdminController@showProduits')->name('showProduits');
});
Route::group(['middleware' => ['IsNightshop']], function () {
    Route::get('/nightshop', 'NightshopController@index')->name('dashbordNightshop');
    Route::get('/nightshop/categories', 'NightshopController@showCategories')->name('showCategories');
    Route::get('/nightshop/produits', 'NightshopController@showProduits')->name('showProduits');
    Route::get('/nightshop/Category/addCategory', function () {
    return view('addCategoryNightshop');
    });
       Route::PUT('/nightshop/categories/addCategory/createCategory','NightshopController@createCategory')->name('createCategory');
       Route::GET('/nightshop/categories/addCategory/createCategory','NightshopController@createCategory')->name('createCategory');
});
Route::get('/error', 'HomeController@error')->name('error');
Route::get('/error1', 'HomeController@error1')->name('error');
/****  Route::get('admin', [
        'uses' => 'AdminController@index',
        'as' => 'admin',
        'middleware' => 'admin'
    ]);***/

Route::group(['middleware'=>['auth']], function(){
    
    Route::get('panier/paiement', 'PanierController@payer')->name('panier.payer');
    Route::post('paiement/stripe', 'PaiementController@checkoutStripe')->name('checkout.stripe');
    Route::get('paiement/paypal', 'PaiementController@checkoutPaypal')->name('checkout.paypal');
    Route::get('paiement/paypal/done', 'PaiementController@checkoutPaypalDone')->name('checkout.paypal.done');
    Route::get('paiement/paypal/cancel', 'PaiementController@checkoutPaypalCancel')->name('checkout.paypal.cancel');
    
});
Route::get('compte','CompteController@compte')->name('compte');
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


