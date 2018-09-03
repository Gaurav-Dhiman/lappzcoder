<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/signup', 'UserAuthController@sign_up_from_api');
Route::post('/login', 'Auth\LoginController@authenticate');
Route::post('/forgot_password', 'Auth\ForgotPasswordController@sendResetLinkEmail');

Route::group(['middleware' => 'auth:api'], function () {

    Route::get('/classes', 'SchoolingController@classes');
	Route::get('/class/{class}', 'SchoolingController@subjects');
	Route::get('/class/{class}/{subject}', 'SchoolingController@chapters');
	Route::get('/class/{class}/{subject}/{chapter}', 'SchoolingController@tutorials');
	Route::get('/class/{class}/{subject}/{chapter}/{video}', 'SchoolingController@video');

	Route::get('/exams', 'ExamsController@exams');
	Route::get('/exams/{exam}', 'ExamsController@subjects');
	Route::get('/exams/{exam}/{subject}', 'ExamsController@chapters');
	Route::get('/exams/{exam}/{subject}/{chapter}', 'ExamsController@videos');
	Route::get('/exams/{exam}/{subject}/{chapter}/{video}', 'ExamsController@video');


	Route::get('/test_series', 'TestSeriesController@list');
	Route::get('/test_series/{test_series}', 'TestSeriesController@detail');
	Route::get('/test_series/{test_series}/{pdf}', 'TestSeriesController@download');

	
	Route::get('/chapters/{course_id}', 'ChallengeController@course_detail');

	Route::get('/profile', 'UserAuthController@profile')->name('profile');
    Route::post('/profile', 'UserAuthController@update_profile')->name('update_profile');
		
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_api_routes
});
