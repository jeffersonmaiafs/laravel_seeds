<?php

/* * * * * ROTAS REORGANIZADAS CATEGORIAS * * * * * * * * * * * * * * * * * * * * * * * */
Route::group(['prefix'=>'admin','where'=> ['id'=>'[0-9]+']], function(){

    Route::group(['prefix'=>'categories'], function(){
        Route::get('/', ['as'=>'categories','uses'=>'CategoriesController@index']);
        Route::post('/', ['as'=>'categories.store','uses'=>'CategoriesController@store']);
        Route::get('create', ['as'=>'categories.create','uses'=>'CategoriesController@create']);
        Route::get('{id}/destroy', ['as'=>'categories.destroy','uses'=>'CategoriesController@destroy']);
        Route::put('{id}/update', ['as'=>'categories.update','uses'=>'CategoriesController@update']);
        Route::get('{id}/edit', ['as'=>'categories.edit','uses'=>'CategoriesController@edit']);
   });
   
   Route::group(['prefix'=>'products'], function(){
   
        Route::get('/', ['as'=>'products','uses'=>'ProductsController@index']);
        Route::get('create', ['as'=>'products.create','uses'=>'ProductsController@create']);
        Route::post('/', ['as'=>'products.store','uses'=>'ProductsController@store']);
        Route::get('{id}/destroy', ['as'=>'products.destroy','uses'=>'ProductsController@destroy']);
        Route::put('{id}/update', ['as'=>'products.update','uses'=>'ProductsController@update']);
        Route::get('{id}/edit', ['as'=>'products.edit','uses'=>'ProductsController@edit']);
       
        
   });
   
});

/*ANTES DOS PREFIXOS ERAM ASSIM:*/
            
//    Route::get('categories', ['as'=>'categories','uses'=>'CategoriesController@index']);
//    Route::post('categories', ['as'=>'categories.store','uses'=>'CategoriesController@store']);
//    Route::get('categories/create', ['as'=>'categories.create','uses'=>'CategoriesController@create']);
//    Route::get('categories/{id}/destroy', ['as'=>'categories.destroy','uses'=>'CategoriesController@destroy']);
//    Route::put('categories/{id}/update', ['as'=>'categories.update','uses'=>'CategoriesController@update']);
//    Route::get('categories/{id}/edit', ['as'=>'categories.edit','uses'=>'CategoriesController@edit']);
//
//    Route::get('products', ['as'=>'products','uses'=>'ProductsController@index']);
//    Route::get('products/create', ['as'=>'products.create','uses'=>'ProductsController@create']);
//    Route::post('products', ['as'=>'products.store','uses'=>'ProductsController@store']);
//    Route::get('products/{id}/destroy', ['as'=>'products.destroy','uses'=>'ProductsController@destroy']);
//    Route::put('products/{id}/update', ['as'=>'products.update','uses'=>'ProductsController@update']);
//    Route::get('products/{id}/edit', ['as'=>'products.edit','uses'=>'ProductsController@edit']);





/* * * * FINAL DAS ROTAS REORGANIZADAS CATEGORIAS * * * * * * * * * * * * * * * * * * * * * * * */

/* * * * * * * * * * * * * * * * * * * * * * *  * * * * * * * * * * * * * * * * * * * * * * *  * * * * */

/******** INICIO DAS ROTAS PRODUCTS *****/
//Route::get('products', ['as'=>'products','uses'=>'ProductsController@index']);
//Route::post('products', ['as'=>'products.store','uses'=>'ProductsController@store']);
//Route::get('products/create', ['as'=>'products.create','uses'=>'ProductsController@create']);
//Route::get('products/{id}/destroy', ['as'=>'products.destroy','uses'=>'ProductsController@destroy']);
//Route::put('products/{id}/update', ['as'=>'products.update','uses'=>'ProductsController@update']);
//Route::get('products/{id}/edit', ['as'=>'products.edit','uses'=>'ProductsController@edit']);
/******** FIM DAS ROTAS PRODUCTS *****/


//Route::get('categories', 'CategoriesController@index');


//Route::get('categories/create', 'CategoriesController@create');

//Route::post('categories', 'CategoriesController@store');



//Route::get('categorias', 'AdminCategoriesController@consulta');

Route::get('/', 'WelcomeController@index');

Route::put('exemplo','WelcomeController@exemplo');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


//
////Testando este no momento
//Route::get('exemplo', 'WelcomeController@exemplo');
//
////Route::get('/', 'WelcomeController@index');
//
Route::get('/', 'EcommerceController@index');
//
////Direciona para o index através do caminho localhost:8000/admin/categories
//Route::get('admin/categories', 'AdminCategoriesController@index');
//
//////Direciona para o index através do caminho localhost:8000/admin/categories
////Route::get('admin/products', 'AdminProductsController@index');
//
//Route::get('home', 'HomeController@index');






