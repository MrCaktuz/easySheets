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
    if (Auth::user()) {
        return redirect('/dashboard');
    }
    return view('welcome');
})->name('welcome');

Auth::routes(['verify' => true]);

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('verified');

Route::get('/user/{user}', 'UserController@show')->middleware('verified')->name('profile');
Route::post('/user/{user}', 'UserController@update')->middleware('verified')->name('profileUpdate');
Route::get('/user/{user}/edit', 'UserController@edit')->middleware('verified')->name('profileEdit');