<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

Route::post('/signUp','App\Http\Controllers\api\AuthController@signUp');
Route::post('/Login','App\Http\Controllers\api\AuthController@Login');
// Route::post('/sendOtp','App\Http\Controllers\api\AuthController@sendOtp');
Route::post('/verifyOtp','App\Http\Controllers\api\AuthController@verifyOtp');
Route::post('/sendotp','App\Http\Controllers\api\AuthController@sendotp');
Route::post('/change','App\Http\Controllers\api\AuthController@changepassword');

Route::post('/term','App\Http\Controllers\api\appListController@terms');
Route::post('/admin_login','App\Http\Controllers\apiLoginController@admin_login');
Route::post('/getdata', 'App\Http\Controllers\QuestionController@fatch');
// Route::post('/questionlist', 'App\Http\Controllers\QuestionController@fatch');
Route::post('/quiz', 'App\Http\Controllers\QuestionController@quiz');
Route::post('/quizresult', 'App\Http\Controllers\QuestionController@quizresult');
Route::post('/fatch', 'App\Http\Controllers\QuestionController@chapter');
Route::post('/filter', 'App\Http\Controllers\QuestionController@fliter');
Route::post('/fliterbychapter', 'App\Http\Controllers\QuestionController@fliterbychapter');
Route::post('/fliterbytype', 'App\Http\Controllers\QuestionController@fliterbytype');
Route::post('/fliterbystatus', 'App\Http\Controllers\QuestionController@fliterbystatus');
Route::post('/changequestionstatus', 'App\Http\Controllers\QuestionController@changeQuestionstatus');
Route::post('/courseapi', 'App\Http\Controllers\QuestionController@courseapi');

