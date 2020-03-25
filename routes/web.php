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

// Route::get('/', function () {
//     return view('dashboard');
// });



Auth::routes();



Route::get('/', 'DashboardController@index');
Route::get('/login', 'UserController@login')->name('/login');
Route::post('/loginPost', 'UserController@loginPost')->name('/loginPost');
Route::get('/register', 'UserController@register')->name('/register');
Route::post('/registerPost', 'UserController@registerPost')->name('/registerPost');
Route::get('/logout', 'UserController@logout')->name('/logout');

// Route::get('/', [
//     'middleware' => 'auth',
//     'uses' => 'DashboardController@index'
// ]);


Route::get('article', 'ArticleController@index')->name('article');

//Route::get('index-article', 'ArticleController@index')->name('index-article');
Route::get('article/add', 'ArticleController@add')->name('article/add');
Route::post('store-article', 'ArticleController@store')->name('store_article');
Route::get('article/edit/{id}', 'ArticleController@edit')->name('article/edit/');
Route::post('article/update/{id}', 'ArticleController@update')->name('article/update/');
Route::post('article/delete/{id}', 'ArticleController@delete')->name('article/delete/');


Route::get('image', 'ImageController@index')->name('image');
Route::get('image/add', 'ImageController@add')->name('image/add');
Route::post('image/store', 'ImageController@store')->name('image/store/');
Route::get('image/edit/{id}', 'ImageController@edit')->name('image/edit/');
Route::post('image/update/{id}', 'ImageController@update')->name('image/update/');
Route::post('image/delete/{id}', 'ImageController@delete')->name('image/delete/');



Route::get('category', 'CategoryController@index')->name('category');
Route::get('category/add', 'CategoryController@add')->name('category/add');
Route::post('category/store', 'CategoryController@store')->name('category/store');
Route::get('category/edit/{id}', 'CategoryController@edit')->name('category/edit/');
Route::post('category/edit/{id}', 'CategoryController@update')->name('category/update/');


Route::get('api-index-article', 'ApiController@index')->name('api-index-article');
Route::get('api-menu', 'ApiController@menu')->name('api-menu');
	
