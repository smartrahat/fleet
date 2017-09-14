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
Route::get('vehicle/show/{id}', 'VehicleController@show');

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


//designation routes
Route::get('designations', 'DesignationController@index');
Route::post('designation/store', 'DesignationController@store');
Route::get('designation/edit/{id}','DesignationController@edit');
Route::patch('designation/{id}/update','DesignationController@update');
Route::delete('designation/delete/{id}','DesignationController@destroy');


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

//Party routes
Route::get('parties', 'PartyController@index');
Route::get('party/create', 'PartyController@create');
Route::post('party/store', 'PartyController@store');
Route::get('party/edit/{id}','PartyController@edit');
Route::patch('party/{id}/update','PartyController@update');
Route::delete('party/delete/{id}','PartyController@destroy');

//Program routes
Route::get('programs', 'ProgramController@index');
Route::get('program/create', 'ProgramController@create');
Route::post('program/store', 'ProgramController@store');
Route::get('program/edit/{id}','ProgramController@edit');
Route::patch('program/{id}/update','ProgramController@update');
Route::delete('program/delete/{id}','ProgramController@destroy');
Route::get('program/rotation','ProgramController@rotation');
Route::get('program/report','ProgramController@programReport');
Route::get('program/receipt','ProgramController@driverReceipt');

//Trip routes
Route::get('trips', 'TripController@index');
Route::get('trip/create', 'TripController@create');
Route::post('trip/store', 'TripController@store');
Route::get('trip/edit/{id}','TripController@edit');
Route::patch('trip/{id}/update','TripController@update');
Route::delete('trip/delete/{id}','TripController@destroy');

//Trip Cost routes
Route::get('tripCosts', 'TripCostController@index');
Route::get('tripCost/create', 'TripCostController@create');
Route::post('tripCost/store', 'TripCostController@store');
Route::get('tripCost/edit/{id}','TripCostController@edit');
Route::patch('tripCost/{id}/update','TripCostController@update');
Route::delete('tripCost/delete/{id}','TripCostController@destroy');

/** Company Route */
Route::get('company/show/{id}','CompanyController@show');

/** User Routes */
Route::get('users','UserController@index');
Route::get('user/create','UserController@create');
Route::post('user/store','UserController@store');
Route::get('user/show/{id}','UserController@show');
Route::get('user/edit/{id}','UserController@edit');
Route::patch('user/{id}/update','UserController@update');
Route::patch('user/{id}/reset','UserController@resetPassword');
Route::get('user/change','UserController@changePassword');
Route::patch('user/new','UserController@newPassword');
Route::delete('user/destroy/{id}','UserController@destroy');
