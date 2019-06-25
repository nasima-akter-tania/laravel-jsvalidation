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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/','CrudControllerController');
Route::resource('/practise_helper','PractiseHelperController');
Route::get('/str_helper','PractiseHelperController@str_helper');
Route::get('/url_helper','PractiseHelperController@helper_function');
Route::resource('/valid_crud','PostController');