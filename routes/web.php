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

//Pages
Route::get('/', 'PageController@homePage');

Route::get('/cart/{size}/{quantity}', 'CartController@add')->middleware('web');
Route::post('/cart', 'CartController@add')->middleware('web');
Route::get('/viewCart', 'CartController@view')->middleware('web');
Route::post('/cartUpdate', 'CartController@update')->middleware('web');
Route::get('/cancel/{id}', 'CartController@cancel')->middleware('web');
Route::get('/clear', 'CartController@clear')->middleware('web');
Route::post('/makeOrder', 'CartController@makeOrder')->middleware('web');
Route::get('/checkOut', function(){
	return view('detailsForm');
})->middleware('web');


//slider man
Route::get('/addSlider', 'AdminController@addSlider')->middleware('admin');
Route::post('/newSlider', 'AdminController@newSlider')->middleware('admin');
Route::get('/removeSlider', 'AdminController@removeSlider')->middleware('admin');
Route::get('/removeSlider/{id}', 'AdminController@removeSliderId')->middleware('admin');

//product man
Route::get('/addProduct', 'AdminController@addProduct')->middleware('admin');
Route::post('/newProduct', 'AdminController@newProduct')->middleware('admin');
Route::get('/removeProduct', 'AdminController@removeProduct')->middleware('admin');
Route::get('/removeProduct/{id}', 'AdminController@removeProductId')->middleware('admin');

Route::get('/groupVariant', 'AdminController@groupVariant')->middleware('admin');
Route::get('/productVariant/{id}', 'AdminController@productVariant')->middleware('admin');
Route::get('/addProductVariant/{id}', 'AdminController@addProductVariant')->middleware('admin');
Route::post('/newProductVariant', 'AdminController@newProductVariant')->middleware('admin');
Route::get('/removeProductVariant', 'AdminController@removeProductVariant')->middleware('admin');
Route::get('/removeProductVariant/{id}', 'AdminController@removeProductVariantId')->middleware('admin');

//product view
Route::get('/product/{id}', 'PageController@productPage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
