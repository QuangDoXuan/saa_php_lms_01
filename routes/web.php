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


Route::group([
    'namespace' => 'User'
],function (){
    Route::get('/login', 'LoginController@showLoginForm');
    // Route::post('/login', 'LoginController');
    Route::get('/', 'HomeController@index');
    Route::get('/detail', 'HomeController@show');
    Route::get('/profile', 'HomeController@profile');
    Route::post('/login', 'LoginController@login')->name('user/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('dashboard', 'Admin\DashboardController@index')->name('admin/dashboard');
    // Route::get('register', 'DashboardController@create')->name('admin.register');
    // Route::post('register', 'DashboardController@store')->name('admin.register.store');
    Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin\auth\login');
    Route::post('login', 'Admin\Auth\LoginController@loginAdmin')->name('admin\auth\loginAdmin');
    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin\auth\logout');
  });