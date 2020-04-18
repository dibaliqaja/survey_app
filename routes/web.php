<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/surveys/create', 'SurveyController@create');
Route::post('/surveys', 'SurveyController@store');
Route::get('/surveys/{survey}', 'SurveyController@show');

Route::get('/surveys/{survey}/questions/create', 'QuestionController@create');
Route::post('/surveys/{survey}/questions', 'QuestionController@store');

Route::get('/takesurveys/{survey}-{slug}', 'TakeSurveyController@show');
Route::post('/takesurveys/{survey}-{slug}', 'TakeSurveyController@store');
