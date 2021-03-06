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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['admin']], function () {
    Route::get('admin/dashboard', 'AdminController@dashboard');
    Route::get('/settings', 'AdminController@settings');
    Route::get('/admin/view_users', 'UsersController@viewusers');
    Route::post('/admin/update-user-status', 'UsersController@updateUserStatus');
});

Route::match(['get', 'post'], '/admin', 'AdminController@login');
Route::get('/', 'FrontController@front');
Route::any('/signup', 'UsersController@signup');

Route::get('/check-username', 'UsersController@checkUsername');
Route::get('/check-email', 'UsersController@checkEmail')->name('check.email');

Route::any('/signin', 'UsersController@signin');

Route::any('/phase/2', 'UsersController@phase2');

Route::get('/inreview', 'UsersController@inreview');

Route::get('/logout', 'UsersController@logout');