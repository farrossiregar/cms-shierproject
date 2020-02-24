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
    return view('dashboard');
});

Auth::routes();

Route::get('article', 'ArticleController@index')->name('article');

//Route::get('index-article', 'ArticleController@index')->name('index-article');
Route::get('article/add', 'ArticleController@add')->name('article/add');
Route::post('store-article', 'ArticleController@store')->name('store_article');
Route::get('article/edit/{id}', 'ArticleController@edit')->name('article/edit/');
Route::post('article/update/{id}', 'ArticleController@update')->name('article/update/');
Route::post('article/delete/{id}', 'ArticleController@delete')->name('article/delete/');


Route::get('index-image', 'ImageController@index')->name('index-image');
Route::get('add-image', 'ImageController@add')->name('add_image');
Route::post('store-image', 'ImageController@store')->name('store_image');
Route::get('edit-image/{id}', 'ImageController@edit')->name('edit_image');


Route::get('category', 'CategoryController@index')->name('category');
Route::get('category/add', 'CategoryController@add')->name('category/add');
Route::post('category/store', 'CategoryController@store')->name('category/store');
Route::get('category/edit/{id}', 'CategoryController@edit')->name('category/edit');

Route::get('api-index-article', 'ApiController@index')->name('api-index-article');
	
