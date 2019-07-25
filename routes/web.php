<?php
use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
    $shipmentNum = $request->get('shipmentNum');
    $shipment = App\Shipment::where('shipmentNum', '=', $shipmentNum)->get('state_id');
    return view('welcome',compact('shipment'));
});

Auth::routes();

Route::get('/dashboard/receviers', 'ShipmentController@showRecevies')->name('receviers')->middleware('isAdmin');

Route::resource('/dashboard/shipments', 'ShipmentController')->middleware('isAdmin');
Route::resource('/dashboard/customers', 'CustomerController')->middleware('isAdmin');
Route::resource('/dashboard/users', 'DriverController')->middleware('isAdmin');

Route::get('/dashboard/shipments/todriver/{shipment}/edit', 'ShipmentController@editDriver')->middleware('isAdmin');
Route::patch('/dashboard/shipments/todriver/{shipment}', 'ShipmentController@updateDriver')->middleware('isAdmin');

// exports
Route::get('users/export/', 'DriverController@export')->name('UserExport');
Route::get('customers/export/', 'CustomerController@export')->name('CustomerExport');
Route::get('shipments/export/', 'ShipmentController@export')->name('ShipmentExport');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/profile','HomeController@show')->name('profile');