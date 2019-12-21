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
    return redirect('login');
});

// Route group for auth
Route::group(['middleware'=>'auth'],function(){

Route::get('/dashboard', 'DashboardController@index');
Route::resource('/household', 'HouseholdController');
Route::resource('/resident', 'ResidentController');

});
// Default Laravel Auth Scaffolding
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');