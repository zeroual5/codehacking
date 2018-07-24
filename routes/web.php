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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/admin', function (){
        return view('admin.index');
    })->name('admin');
});


Route::get('/', 'HomeController@index');
Route::get('posts/{id}', 'HomeController@show')->name('posts.show');


Route::resource('/admin/users', 'AdminUsersController',['names' => [
    'index' => 'admin.users.index',
    'store' => 'admin.users.store',
    'create' => 'admin.users.create',
    'destroy' => 'admin.users.destroy',
    'show' => 'admin.users.show',
    'update' => 'admin.users.update',
    'edit' => 'admin.users.edit'
]]);


Route::resource('/admin/posts', 'AdminPostsController', ['names' => [
    'index' => 'admin.posts.index',
    'store' => 'admin.posts.store',
    'create' => 'admin.posts.create',
    'destroy' => 'admin.posts.destroy',
    'show' => 'admin.posts.show',
    'update' => 'admin.posts.update',
    'edit' => 'admin.posts.edit'
]]);


Route::resource('/admin/categories', 'AdminCategoriesController',['names' => [
    'index' => 'admin.categories.index',
    'store' => 'admin.categories.store',
    'create' => 'admin.categories.create',
    'destroy' => 'admin.categories.destroy',
    'show' => 'admin.categories.show',
    'update' => 'admin.categories.update',
    'edit' => 'admin.categories.edit'
]]);


Route::resource('/admin/media', 'AdminMediasController', ['names' => [
    'index' => 'admin.media.index',
    'store' => 'admin.media.store',
    'create' => 'admin.media.create',
    'destroy' => 'admin.media.destroy',
    'show' => 'admin.media.show',
    'update' => 'admin.media.update',
    'edit' => 'admin.media.edit'
]]);