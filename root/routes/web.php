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
Route::get('vehicleDailyReport', 'VehicleController@report');
Route::post('vehicleStatusChange', 'VehicleController@changeStatus');

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
Route::get('program/dailyReport','ProgramController@dailyReport');
Route::get('program/dailyIncomeReport','ProgramController@dailyIncomeReport');
Route::get('program/show/{id}','ProgramController@show');
Route::get('showTrips','ProgramController@showTrip');
Route::get('program/trips','ProgramController@dateWiseTripReport');


//Trip routes
Route::get('trips', 'TripController@index');
Route::get('trip/create', 'TripController@create');
Route::post('trip/store', 'TripController@store');
Route::get('trip/edit/{id}','TripController@edit');
Route::patch('trip/{id}/update','TripController@update');
Route::delete('trip/delete/{id}','TripController@destroy');
Route::get('trip/cancelTrip/{id}','TripController@cancelTrip');
Route::post('trip/{id}/tripCancellation','TripController@tripCancel');

//Trip Cost routes
Route::get('tripCosts', 'TripCostController@index');
Route::get('tripCost/create', 'TripCostController@create');
Route::post('tripCost/store', 'TripCostController@store');
Route::get('tripCost/edit/{id}','TripCostController@edit');
Route::patch('tripCost/{id}/update','TripCostController@update');
Route::delete('tripCost/delete/{id}','TripCostController@destroy');
Route::post('tripCost/driverTripCost','TripCostController@driverTripCost');
Route::post('tripCost/vehicleTripCost','TripCostController@vehicleTripCost');

//Due Collection routes
Route::get('dues', 'DueController@index');
Route::get('due/create', 'DueController@create');
Route::post('due/dueSubmit','DueController@dueSubmit');
Route::post('due/store', 'DueController@store');
Route::get('due/edit/{id}','DueController@edit');
Route::patch('due/{id}/update','DueController@update');
Route::delete('due/delete/{id}','DueController@destroy');

/** Company Route */
Route::get('companies', 'CompanyController@index');
Route::get('company/create', 'CompanyController@create');
Route::post('company/store', 'CompanyController@store');
Route::get('company/edit/{id}','CompanyController@edit');
Route::patch('company/{id}/update','CompanyController@update');
Route::delete('company/delete/{id}','CompanyController@destroy');
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

/** Category Routes */
Route::get('categories','CategoryController@index');
Route::post('category/store','CategoryController@store');
Route::get('category/edit/{id}','CategoryController@edit');
Route::patch('category/{id}/update','CategoryController@update');
Route::delete('category/destroy/{id}','CategoryController@destroy');

/** Spare Part Routes */
Route::get('spare-parts','SparePartController@index');
Route::post('spare-parts/store','SparePartController@store');
Route::get('spare-parts/edit/{id}','SparePartController@edit');
Route::patch('spare-parts/{id}/update','SparePartController@update');
Route::delete('spare-parts/destroy/{id}','SparePartController@destroy');


/** Parts Routes */
Route::get('parts','PartsController@index');
Route::post('parts/store','PartsController@store');
Route::get('parts/edit/{id}','PartsController@edit');
Route::patch('parts/{id}/update','PartsController@update');
Route::delete('parts/destroy/{id}','PartsController@destroy');



/** Supplier Routes */
Route::get('suppliers','SupplierController@index');
Route::get('supplier/create','SupplierController@create');
Route::post('supplier/store','SupplierController@store');
Route::get('supplier/edit/{id}','SupplierController@edit');
Route::patch('supplier/{id}/update','SupplierController@update');
Route::delete('supplier/destroy/{id}','SupplierController@destroy');

/**Invoice routes */
Route::get('invoices', 'InvoiceController@index');
Route::get('invoice/create', 'InvoiceController@create');
Route::post('invoice/store', 'InvoiceController@store');
Route::get('invoice/edit/{id}','InvoiceController@edit');
Route::patch('invoice/{id}/update','InvoiceController@update');
Route::delete('invoice/delete/{id}','InvoiceController@destroy');
Route::delete('invoice/purchaseRecord','InvoiceController@purchaseRecord');
Route::get('invoice/productwisePurchaseRecord','InvoiceController@purchaseHistory');


/**Purchase Controller*/
Route::get('purchases', 'PurchaseController@index');
Route::get('purchase/edit/{id}','PurchaseController@edit');
Route::patch('purchase/{id}/update','PurchaseController@update');
Route::delete('purchase/delete/{id}','PurchaseController@destroy');
Route::get('purchase/show/{id}', 'PurchaseController@show');


/** Product Brand routes */
Route::get('productBrands', 'ProductBrandController@index');
Route::post('productBrand/store', 'ProductBrandController@store');
Route::get('productBrand/edit/{id}','ProductBrandController@edit');
Route::patch('productBrand/{id}/update','ProductBrandController@update');
Route::delete('productBrand/delete/{id}','ProductBrandController@destroy');

/** Product routes */
Route::get('products','ProductController@index');
Route::get('product/create','ProductController@create');
Route::post('product/store','ProductController@store');
Route::get('product/edit/{id}','ProductController@edit');
Route::patch('product/{id}/update','ProductController@update');
Route::delete('product/delete/{id}','ProductController@destroy');
Route::post('product/partsLoad','ProductController@partsLoad');


/** Stock routes */
Route::get('stocks','StockController@index');
Route::get('stock/edit/{id}','StockController@edit');
Route::delete('stocks','StockController@destroy');



/** Unit routes */
Route::get('units', 'UnitController@index');
Route::post('unit/store', 'UnitController@store');
Route::get('unit/edit/{id}','UnitController@edit');
Route::patch('unit/{id}/update','UnitController@update');
Route::delete('unit/delete/{id}','UnitController@destroy');


/** Expense routes */
Route::get('expenses','ExpenseController@index');
Route::get('expense/create','ExpenseController@create');
Route::post('expense/store','ExpenseController@store');
Route::get('expense/edit/{id}','ExpenseController@edit');
Route::patch('expense/{id}/update','ExpenseController@update');
Route::delete('expense/delete/{id}','ExpenseController@destroy');


/** Expense Category routes */
Route::get('expenseCategories','ExpenseCategoryController@index');
Route::get('expenseCategory/create','ExpenseCategoryController@create');
Route::post('expenseCategory/store','ExpenseCategoryController@store');
Route::get('expenseCategory/edit/{id}','ExpenseCategoryController@edit');
Route::patch('expenseCategory/{id}/update','ExpenseCategoryController@update');
Route::delete('expenseCategory/delete/{id}','ExpenseCategoryController@destroy');


/** Vehicle User Assign routes */
Route::get('vehicleUserAssigns','VehicleUserAssignController@index');
Route::get('vehicleUserAssign/create','VehicleUserAssignController@create');
Route::post('vehicleUserAssign/store','VehicleUserAssignController@store');
Route::get('vehicleUserAssign/edit/{id}','VehicleUserAssignController@edit');
Route::patch('vehicleUserAssign/{id}/update','VehicleUserAssignController@update');
Route::delete('vehicleUserAssign/delete/{id}','VehicleUserAssignController@destroy');


/** Garage Entry routes */
Route::get('garageEntries','GarageEntryController@index');
Route::get('garageEntries/search','GarageEntryController@search');
Route::get('garageEntry/create','GarageEntryController@create');
Route::post('garageEntry/store','GarageEntryController@store');
Route::get('garageEntry/edit/{id}','GarageEntryController@edit');
Route::patch('garageEntry/{id}/update','GarageEntryController@update');
Route::delete('garageEntry/delete/{id}','GarageEntryController@destroy');

/** Garage Exit routes */
Route::get('garageExits','GarageExitController@index');
Route::get('garageExit/create','GarageExitController@create');
Route::post('garageExit/store','GarageExitController@store');
Route::get('garageExit/edit/{id}','GarageExitController@edit');
Route::patch('garageExit/{id}/update','GarageExitController@update');
Route::delete('garageExit/delete/{id}','GarageExitController@destroy');

/** Vehicle Problem Entry routes */
Route::get('problems','ProblemController@index');
Route::get('problem/create','ProblemController@create');
Route::post('problem/store','ProblemController@store');
Route::get('problem/edit/{id}','ProblemController@edit');
Route::patch('problem/{id}/update','ProblemController@update');
Route::delete('problem/delete/{id}','ProblemController@destroy');


/** Vehicle Service routes */
Route::get('services','ServiceController@index');
Route::get('service/create','ServiceController@create');
Route::post('service/partsSubmit','ServiceController@partsLoad');
Route::post('service/store','ServiceController@store');
Route::get('service/edit/{id}','ServiceController@edit');
Route::patch('service/{id}/update','ServiceController@update');
Route::delete('service/delete/{id}','ServiceController@destroy');
Route::post('service/problemSubmit','ServiceController@problemLoad');

//Garage routes
Route::get('garages', 'GarageController@index');
Route::post('garage/store', 'GarageController@store');
Route::get('garage/edit/{id}','GarageController@edit');
Route::patch('garage/{id}/update','GarageController@update');
Route::delete('garage/delete/{id}','GarageController@destroy');



//Accounts routes
Route::get('accounts', 'AccountController@index');
Route::get('account/create', 'AccountController@create');
Route::post('account/store', 'AccountController@store');
Route::get('account/edit/{id}','AccountController@edit');
Route::patch('account/{id}/update','AccountController@update');
Route::delete('account/delete/{id}','AccountController@destroy');