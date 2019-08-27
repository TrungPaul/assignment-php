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

Route::group((['prefix' => 'category' ,'as'=> 'category.']), function () {
	
	Route::get('/','CategoryController@index')->name('list');
		Route::get('add', 'CategoryController@createform')->name('add');
		Route::post('create-post', 'CategoryController@create')->name('create');
		Route::get('{category}/edit', 'CategoryController@editform')->name('edit');
		Route::post('update-post', 'CategoryController@update')->name('update');
		Route::get('{category}/remove','CategoryController@remove')->name('remove');
});
Route::group((['prefix' => 'user' ,'as'=> 'user.']), function () {
	
	Route::get('/','UserController@index')->name('list');
		Route::get('add', 'UserController@createform')->name('add');
		Route::post('create-post', 'UserController@create')->name('create');
		Route::get('{user}/edit', 'UserController@editform')->name('edit');
		Route::post('update-post', 'UserController@update')->name('update');
		Route::get('{user}/remove','UserController@remove')->name('remove');
});
Route::group((['prefix' => 'product' ,'as'=> 'product.']), function () {
	
	Route::get('/','ProductController@index')->name('list');
		Route::get('add', 'ProductController@createform')->name('add');
		Route::post('create-post', 'ProductController@create')->name('create');
		Route::get('{product}/edit', 'ProductController@editform')->name('edit');
		Route::post('update-post', 'ProductController@update')->name('update');
		Route::get('{product}/remove','ProductController@remove')->name('remove');
});
Route::get('product-list','ProductController@list')->name('productList');
Route::get('{product}/product-detail','ProductController@detail')->name('productDetail');

Route::group((['prefix' => 'comment' ,'as'=> 'comment.']), function () {
	
	Route::get('/','CommentController@index')->name('list');
		Route::get('add', 'CommentController@createform')->name('add');
		Route::post('create-post', 'CommentController@create')->name('create');
		Route::get('{comment}/edit', 'CommentController@editform')->name('edit');
		Route::post('update-post', 'CommentController@update')->name('update');
		Route::get('{comment}/remove','CommentController@remove')->name('remove');
});
Route::group((['prefix' => 'admins' ,'as'=> 'admins.']), function () {
	Route::get('login', 'loginController@getLogin')->name('getLogin');
	Route::post('postLogin', 'loginController@postLogin' )->name('postLogin');
	Route::get('logout', 'loginController@logout')->name('getLogout');
	Route::get('register', 'loginController@getRegister')->name('getRegister');
	Route::post('postRegister', 'loginController@postRegister' )->name('postRegister');
});