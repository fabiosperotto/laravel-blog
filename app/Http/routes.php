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
//Route::get('admin/create', 'PostsAdminController@create');
Route::get('/post/{id}','BlogController@show');

Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function () {

	Route::get('posts', ['as' => 'admin.posts.index', 'uses' => 'PostsAdminController@index']); //rotas nomeadas
	Route::get('posts/create', ['as' => 'admin.posts.create', 'uses' => 'PostsAdminController@create']);
	Route::post('posts/store', ['as' => 'admin.posts.store', 'uses' => 'PostsAdminController@store']);
	Route::get('posts/edit/{id}', ['as' => 'admin.posts.edit', 'uses' => 'PostsAdminController@edit']);
	Route::put('posts/update/{id}', ['as' => 'admin.posts.update', 'uses' => 'PostsAdminController@update']);
	Route::get('posts/destroy/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'PostsAdminController@destroy']);

});

//rota de testes:
// Route::get('/auth', function (){

// 	// $user = \App\User::find(1);
//  //    Auth::login($user);

// 	if(Auth::attempt(['email' => 'teste@gmail.com', 'password' => 123456])){
// 		return 'login valido!';
// 	}

//     //if(Auth::check()){
//     	return 'falhou';
//     //}

// });

//sessoes com rotas individuais:
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');

//sessoes:
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);