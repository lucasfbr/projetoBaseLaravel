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


Route::group(['prefix' => 'painel'], function (){

        //HomeController
        Route::get('/', 'Painel\HomeController@index');
        //PostController
        Route::get('/post', 'Painel\PostController@index');
        Route::get('/post/update/{id}', 'Painel\PostController@update');
        //UserController
        Route::get('/user', 'Painel\UserController@index');
        //RoleController
        Route::get('/role', 'Painel\RoleController@index');
        //PermissionController
        Route::get('/permission', 'Painel\PermissionController@index');

});


Auth::routes();

Route::get('/', 'Portal\HomeController@index');