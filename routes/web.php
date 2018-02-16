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
//	All resource routesfront_about_us
Route::get('/', 'HomeController@index')->name('front_home');
//	All get routes
Route::get('/about_us', 'StaticPagesController@about_us')->name('front_about_us');
Route::get('/privacy-policy', 'StaticPagesController@privacy_policy')->name('front_privacy_policy');
Route::get('/terms-and-conditions', 'StaticPagesController@terms_cond')->name('front_tc');
Route::get('/user-login', 'UserAuthController@login')->name('front_login');
Route::post('/user-login', 'Auth\LoginController@login')->name('front_login');
Route::get('/user-register', 'UserAuthController@register')->name('front_register');
Route::post('/user-register', 'UserAuthController@sign_up')->name('front_register');
Route::get('/contact_us', 'ContactUsController@form')->name('front_contact_us');

// All post routes


Route::group(['middleware' => 'login_required'], function () {
    //    Route::get('/link1', function ()    {
    //         Uses Auth Middleware
    //    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes

    Route::get('/challenge', 'ChallengeController@course')->name('front_challenge');
    Route::get('/classes', 'SchoolingController@classes')->name('classes');
    Route::get('/class/{class}', 'SchoolingController@subjects')->name('subjects');
    Route::get('/class/{class}/{subject}', 'SchoolingController@chapters')->name('chapters');
    Route::get('/class/{class}/{subject}/{chapter}', 'SchoolingController@tutorials')->name('tutorials');
    Route::get('/class/{class}/{subject}/{chapter}/{video}', 'SchoolingController@video')->name('video');
    Route::get('/exams', 'ExamsController@exams')->name('exams');
    Route::get('/exams/{exam}', 'ExamsController@videos')->name('exam_videos');
    Route::get('/exams/{exam}/{video}', 'ExamsController@video')->name('exam_video');
    Route::get('/chapters/{course_id}', 'ChallengeController@course_detail')->name('course_detail');
    Route::get('/videos/{chapter_id}', 'ChallengeController@videos')->name('videos');
});


/*
* Admin Routes
*/
//add prefix in below for adding admin in url
Route::group(['namespace' => 'Admin', 'middleware' => 'admin_access', 'prefix' => 'admin'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    //	All get routes
    Route::get('dashboard', 'HomeController@dashboard')->name('unishop_dashboard');
    Route::get('home', 'HomeController@index');


    //	All post routes
    // Route::post('do-login', ["uses" => 'UsersController@dologin', "as" => "do.login"]);
    // Route::post('verify-pickup-code', ["uses" => 'OrdersController@verify_pickupcode', "as" => "verify.pickup.code"]);
    //	All resource routes
    Route::resource('cls', 'ClsController');
    Route::resource('subjects', 'SubjectsController');
    Route::resource('chapters', 'ChaptersController');
    Route::resource('competetive_exams', 'Competetive_examsController');
    Route::resource('test_series', 'Test_seriesController');

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

