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

Route::get('/dashboard/receviers', 'ShipmentController@showRecevies')->name('receviers')->middleware('auth');


Route::resource('/dashboard/shipments', 'ShipmentController')->middleware('auth');
Route::resource('/dashboard/customers', 'CustomerController')->middleware('auth');
Route::resource('/dashboard/users', 'DriverController')->middleware('auth');

// Route::resource('/dashboard/toDriver', 'toDriverController')->name('toDriver')->middleware('auth');

// exports
Route::get('users/export/', 'DriverController@export')->name('UserExport');
Route::get('customers/export/', 'CustomerController@export')->name('CustomerExport');
Route::get('shipments/export/', 'ShipmentController@export')->name('ShipmentExport');

Route::get('/dashboard', 'HomeController@index')->name('dashboard')->middleware('auth');