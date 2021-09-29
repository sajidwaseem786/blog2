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
// Route::get('posts/search/','postController@search');
// Route::middleware('ajax.check')->group(function(){
// Route::get('/posts','postController@index');
// Route::get('/posts/create','postController@create');
// Route::post('posts/store', 'postController@store');
// Route::get('/posts/show/{id}','postController@show');
// Route::get('/posts/edit/{id}','postController@edit');
// Route::post('/posts/update','postController@update');
// Route::get('/posts/destroy/{id}','postController@destroy');


// });
Route::get('verify/{email}/{token}','Auth\RegisterController@verifyUser')->name('verify');

// Route::get('verify/{email}/{token}','Auth\RegisterController@verifyUser')->name('verify');
Route::get('/stores','storeController@index');
// Route::get('/notify2','HomeController@notify');
Route::get('/notify2','HomeController@notify');//

Route::middleware('ajax.check')->group(function(){
Route::get('/stores/create','storeController@create');
Route::post('stores/store','storeController@store');
Route::get('stores/edit/{id}','storeController@edit');
Route::post('stores/update','storeController@update');
Route::get('stores/destroy/{id}','storeController@destroy');
});

Route::get('/', function () {
  session()->put('token','sssssddd');
    return view('welcome');
});

// Route::resource('posts','postController');
// Route::get('products','productController@index');
// Route::get('products/show/{product}','productController@show');
// Route::get('products/edit/{edit}','productController@edit');
// Route::post('products/update','productController@update');
// Route::get('products/{id}/delete','productController@destroy');
// Route::get('products/create','productController@create');
// Route::post('products','productController@store');

Route::get('posts/create','PostController@create');
Route::post('/posts','PostController@save');
Route::get('/posts','PostController@index');
Route::get('posts/show/{post}','PostController@show');
Route::get('posts/{id}/edit','PostController@edit');
Route::post('posts/update','PostController@update');
Route::get('posts/{id}/delete','PostController@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
