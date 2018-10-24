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

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
Route::get('/trangchu', 'PageController@index')->name('home');
Route::get('admin/users/login',['as'=>'admin.users.getLogin','uses'=>'UserController@getLogin']);
Route::post('admin/users/login',['as'=>'admin.users.postLogin','uses'=>'UserController@postLogin']);
Route::get('admin/users/logout',['as'=>'admin.users.getLogout','uses'=>'UserController@getLogout']);
Route::group(['prefix'=>'pages'],function(){
	Route::get('san-pham',['as'=>'pages.getProduct','uses'=>'PageController@getProduct']);
});
Route::group(['prefix'=>'admin','middleware'=>'checkLogin'],function(){
	Route::resource('users','UserController');
	Route::resource('roles','RoleController');
	Route::group(['prefix'=>'users'],function(){
		Route::get('city/{id}',['as'=>'admin.users.getCity','uses'=>'AjaxController@getCity']);
		Route::get('district/{id}',['as'=>'admin.users.getDistrict','uses'=>'AjaxController@getDistrict']);
	});
});