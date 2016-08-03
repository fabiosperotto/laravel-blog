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

// Route::get('/', function () {
//     return view('welcome');
// });



//Route::get('ola/{nome}', 'TestController@index');
//Route::get('notas', 'TestController@notas');
//Route::get('blog', 'BlogController@index');
Route::resource('/', 'BlogController');
//Route::controller('blog', 'BlogController');
Route::get('admin', 'PostsAdminController@index');
