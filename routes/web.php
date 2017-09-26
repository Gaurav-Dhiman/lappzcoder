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

Auth::routes();

/*
* Website Routes
*/
	//	All resource routes
	Route::resource('/', 'HomeController');
	//	All get routes

	//	All post routes


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


/*
* Admin Routes
*/
	Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
		Route::get('/', 'HomeController@index')->name('home');
	});
	//add prefix in below for adding admin in url
	Route::group(['namespace' => 'Admin'], function(){
		//	All get routes
		Route::get('dashboard', 'HomeController@dashboard')->name('unishop_dashboard');
		Route::get('home', 'HomeController@index');
		//	All post routes
		Route::post('do-login', ["uses" => 'UsersController@dologin', "as" => "do.login"]);
		Route::post('verify-pickup-code', ["uses" => 'OrdersController@verify_pickupcode', "as" => "verify.pickup.code"]);
		//	All resource routes
		Route::resource('roles', 'RolesController');
		Route::resource('readexcel', 'ExcelController');
	});


/*
* SuperAdmin Routes
*/
	Route::group(['namespace' => 'Superadmin', 'prefix' => 'superadmin'], function(){
		Route::get('/', 'AdminController@index');
	});
	//add prefix in below for adding admin in url
	Route::group(['namespace' => 'Superadmin'], function(){

		//	All get routes
		Route::get('give-role-permissions', 'AdminController@getGiveRolePermissions');
		Route::get('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);

		//	All post routes
		Route::post('give-role-permissions', 'AdminController@postGiveRolePermissions');		
		Route::post('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

		//	All resource routes
		Route::resource('roles', 'RolesController');
		Route::resource('permissions', 'PermissionsController');
		Route::resource('users', 'UsersController');		
	});

// Route::get('/home', 'HomeController@index')->name('home');


