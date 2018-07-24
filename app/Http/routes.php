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


//Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/posts/{id}', 'HomeController@show')->name('posts.show');

//Route::group(['middleware' => 'admin'], function (){
    Route::resource('/admin/users', 'AdminUsersController');
    Route::resource('/admin/categories', 'AdminCategoriesController');
//});

//Route::group(['middleware' => 'auth'], function (){
    Route::resource('/admin/posts', 'AdminPostsController');
    Route::resource('/admin/media', 'AdminMediasController');
//});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/admin', function (){
        return view('admin.index');
    })->name('admin');
});