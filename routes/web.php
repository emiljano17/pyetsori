<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pyetsori/create', 'PyetsoriController@create');
Route::post('/pyetsori','PyetsoriController@store');
Route::get('/pyetsori/{pyetsori}','PyetsoriController@show');
Route::delete('/pyetsori/{pyetsori}','PyetsoriController@destroy');

Route::get('/pyetsori/{pyetsori}/pyetjet/create','PyetjaController@create');
Route::post('/pyetsori/{pyetsori}/pyetjet','PyetjaController@store');
Route::delete('/pyetsori/{pyetsori}/pyetjet/{pyetja}','PyetjaController@destroy');


Route::get('/surveys/{pyetsori}-{slug}','SurveyController@show');
Route::post('/surveys/{pyetsori}-{slug}','SurveyController@store');
 