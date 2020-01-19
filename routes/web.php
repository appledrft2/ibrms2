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
// Dashboard
Route::get('/dashboard', 'DashboardController@index');
Route::post('/getfather', 'DashboardController@getfather');
Route::post('/getmother', 'DashboardController@getmother');
// Event
Route::resource('/event', 'EventController');
// Household
Route::resource('/household', 'HouseholdController');
// Resident
Route::resource('/resident', 'ResidentController');

// Barangay Profile
Route::resource('/barangay', 'BarangayController');

// Purok 
Route::resource('/purok', 'PurokController');
// Judicial 
Route::resource('/judicial', 'JudicialController');
Route::put('/judicial/{judicial}/status', 'JudicialController@updateStatus');
// Judicial Kp08
Route::resource('/judicial/{judicial}/kp08', 'JudicialKp08Controller');
// Judicial Kp09
Route::resource('/judicial/{judicial}/kp09', 'JudicialKp09Controller');


});
// Default Laravel Auth Scaffolding
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
