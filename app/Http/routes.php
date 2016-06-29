<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'WelcomeController@index');
//Route::get('contact', 'WelcomeController@contact');   // 追加
Route::get('contact', 'PagesController@contact');   // 追加
Route::get('about', 'PagesController@about');    // 追加
Route::get('articles', 'ArticlesController@index');
// 追加
Route::get('articles/create', 'ArticlesController@create'); // ①
Route::get('articles/{id}', 'ArticlesController@show');
// 追加
Route::post('articles', 'ArticlesController@store');
 