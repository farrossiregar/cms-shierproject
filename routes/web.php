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
Route::get('article/edit/{alias}', 'ArticleController@edit')->name('article/edit/');
Route::post('update-article', 'ArticleController@update')->name('update_article');
Route::post('delete-article-{alias}', 'ArticleController@delete')->name('delete_article');


Route::get('index-image', 'ImageController@index')->name('index-image');
Route::get('add-image', 'ImageController@add')->name('add_image');
Route::post('store-image', 'ImageController@store')->name('store_image');
Route::get('edit-image/{id}', 'ImageController@edit')->name('edit_image');


Route::get('index-category', 'CategoryController@index')->name('index-category');
Route::get('add-category', 'CategoryController@add')->name('add_category');
Route::post('store-category', 'CategoryController@store')->name('store_category');
Route::get('edit-category/{id}', 'CategoryController@edit')->name('edit_category');

Route::get('api-index-article', 'ApiController@index')->name('api-index-article');
	
