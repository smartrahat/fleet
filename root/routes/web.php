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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//Owner routes
Route::get('owners', 'OwnerController@index');
Route::get('owner/create', 'OwnerController@create');
Route::post('owner/store', 'OwnerController@store');
Route::get('owner/edit/{id}','OwnerController@edit');
Route::patch('owner/{id}/update','OwnerController@update');
Route::delete('owner/delete/{id}','OwnerController@destroy');

//Vehicle routes
Route::get('vehicles', 'VehicleController@index');
Route::get('vehicle/create', 'VehicleController@create');
Route::post('vehicle/store', 'VehicleController@store');
Route::get('vehicle/edit/{id}','VehicleController@edit');
Route::patch('vehicle/{id}/update','VehicleController@update');
Route::delete('vehicle/delete/{id}','VehicleController@destroy');

//Brand routes
Route::get('brands', 'BrandController@index');
Route::post('brand/store', 'BrandController@store');
Route::get('brand/edit/{id}','BrandController@edit');
Route::patch('brand/{id}/update','BrandController@update');
Route::delete('brand/delete/{id}','BrandController@destroy');

//Type routes
Route::get('types', 'TypeController@index');
Route::post('type/store', 'TypeController@store');
Route::get('type/edit/{id}','TypeController@edit');
Route::patch('type/{id}/update','TypeController@update');
Route::delete('type/delete/{id}','TypeController@destroy');

//Status routes
Route::get('statuses', 'StatusController@index');
Route::post('status/store', 'StatusController@store');
Route::get('status/edit/{id}','StatusController@edit');
Route::patch('status/{id}/update','StatusController@update');
Route::delete('status/delete/{id}','StatusController@destroy');


//Employee routes
Route::get('employees', 'EmployeeController@index');
Route::get('employee/create', 'EmployeeController@create');
Route::post('employee/store', 'EmployeeController@store');
Route::get('employee/edit/{id}','EmployeeController@edit');
Route::patch('employee/{id}/update','EmployeeController@update');
Route::delete('employee/delete/{id}','EmployeeController@destroy');


//Driver routes
Route::get('drivers', 'DriverController@index');
Route::get('driver/create', 'DriverController@create');
Route::post('driver/store', 'DriverController@store');
Route::get('driver/edit/{id}','DriverController@edit');
Route::patch('driver/{id}/update','DriverController@update');
Route::delete('driver/delete/{id}','DriverController@destroy');

/** Company Route */
Route::get('company/show/{id}','CompanyController@show');