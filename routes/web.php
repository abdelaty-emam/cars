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
/*Route::get('server',function(){

	return view('front.layout.master');
});*/	
Route::resource('cars','CarController');

Route::get('/category/{id}','PagesController@view_category')->name('category');
Route::get('/home','PagesController@cars')->name('cars');

Route::get('categories','CategoryController@index')->name('category.create');
Route::post('categories','CategoryController@store')->name('category.store');
Route::get('categories/{id}/edit','CategoryController@edit')->name('category.edit');
Route::post('categories/{id}','CategoryController@update')->name('category.update');

//Auth
//Route::get('/register','RegisterationController@create');
//Route::post('/register','RegisterationController@store');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/login','AdminLoginController@showlogin');
Route::post('/login','AdminLoginController@do_login')->name('adminlogin');
/*Route::group(['middleware' => 'admin:admin'], function () {


			Route::resource('cars','CarController');
	

});*/

});





