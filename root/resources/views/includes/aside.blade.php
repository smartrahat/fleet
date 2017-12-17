<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left no-print">
    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigation
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li class="{{ isActive('/') }}">
                        <a href="{{ url('/') }}">
                            <i class="fa fa-tachometer" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-parent {{ isActive(['employees*','employee*','designation*']) }}">
                        <a>
                            <i class="fa fa-id-card-o" aria-hidden="true"></i>
                            <span>Employee</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('employees') }}">
                                <a href="{{action('EmployeeController@index')}}">Employee Information</a>
                            </li>
                            <li class="{{ isActive('employee/create') }}">
                                <a href="{{action('EmployeeController@create')}}">Add Employee</a>
                            </li>
                            <li class="{{ isActive('designations') }}">
                                <a href="{{action('DesignationController@index')}}">Add Designation</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-parent {{ isActive(['vehicleUserAssigns*','vehicleUserAssign/create*']) }}">
                        <a>
                            <i class="fa fa-drivers-license" aria-hidden="true"></i>
                            <span>Vehicle Assignation</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('vehicleUserAssigns') }}">
                                <a href="{{action('VehicleUserAssignController@index')}}">List of vehicles</a>
                            </li>
                            <li class="{{ isActive('vehicleUserAssign/show') }}">
                                <a href="{{action('VehicleUserAssignController@create')}}">Assign Vehicle</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-parent {{ isActive(['drivers*','driver*']) }}">
                        <a>
                            <i class="fa fa-drivers-license" aria-hidden="true"></i>
                            <span>Driver</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('drivers') }}">
                                <a href="{{action('DriverController@index')}}">Driver Information</a>
                            </li>
                            <li class="{{ isActive('driver/create') }}">
                                <a href="{{action('DriverController@create')}}">Add Driver</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-parent {{ isActive(['vehicles','vehicle/create','brand*','type*','status*']) }}">
                        <a>
                            <i class="fa fa-truck" aria-hidden="true"></i>
                            <span>Vehicle</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('vehicles') }}">
                                <a href="{{action('VehicleController@index')}}">Vehicle Information</a>
                            </li>
                            <li class="{{ isActive('vehicle/create') }}">
                                <a href="{{action('VehicleController@create')}}">Add Vehicle</a>
                            </li>
                            <li class="{{ isActive('brands') }}">
                                <a href="{{action('BrandController@index')}}">Brand</a>
                            </li>
                            <li class="{{ isActive('types') }}">
                                <a href="{{action('TypeController@index')}}">Type</a>
                            </li>
                            <li class="{{ isActive('statuses') }}">
                                <a href="{{action('StatusController@index')}}">Status</a>
                            </li>
                            <li class="{{ isActive('vehicleDailyReport') }}">
                                <a href="{{action('VehicleController@report')}}">Vehicle Daily Report</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-parent {{ isActive(['owners*','owner*']) }}">
                        <a>
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                            <span>Owner</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('owners') }}">
                                <a href="{{action('OwnerController@index')}}">Owner</a>
                            </li>
                            <li class="{{ isActive('owner/create') }}">
                                <a href="{{action('OwnerController@create')}}">Add Owner</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-parent {{ isActive(['party*','parties*']) }}">
                        <a>
                            <i class="fa fa-handshake-o" aria-hidden="true"></i>
                            <span>Parties</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('parties') }}">
                                <a href="{{action('PartyController@index')}}">Party list</a>
                            </li>
                            <li class="{{ isActive('party/create') }}">
                                <a href="{{action('PartyController@create')}}">Add Party</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-parent {{ isActive(['program*','dailyReport*','trip*','rotation*','dailyIncomeReport*','report*','receipt*']) }}">
                        <a>
                            <i class="fa fa-ship" aria-hidden="true"></i>
                            <span>Programs</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('programs') }}">
                                <a href="{{action('ProgramController@index')}}">Program list</a>
                            </li>
                            <li class="{{ isActive('program/create') }}">
                                <a href="{{action('ProgramController@create')}}">Add Program</a>
                            </li>
                            <li class="{{ isActive('tripCosts') }}">
                                <a href="{{action('TripCostController@index')}}">Trip Cost list</a>
                            </li>
                            <li class="{{ isActive('tripCost/create') }}">
                                <a href="{{action('TripCostController@create')}}">Add Trip Cost</a>
                            </li>
                            <li class="{{ isActive('program/rotation') }}">
                                <a href="{{action('ProgramController@rotation')}}">Rotation</a>
                            </li>

                            <li class="{{ isActive('program/dailyIncomeReport') }}">
                                <a href="{{action('ProgramController@dailyIncomeReport')}}">Daily Income Report</a>
                            </li>

                            {{--<li class="{{ isActive('program/report') }}">--}}
                            {{--<a href="{{action('ProgramController@programReport')}}">Report</a>--}}
                            {{--</li>--}}
                            <li class="{{ isActive('program/receipt') }}">
                                <a href="{{action('ProgramController@driverReceipt')}}">Accounting From Driver</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-parent {{ isActive(['accounts*','due/create*']) }}">
                        <a>
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <span>Accounts</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('due/create') }}">
                                <a href="{{action('DueController@create')}}">Due Collection</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-parent {{ isActive(['expense/create*','expenseCategories*','expense/dail*']) }}">
                        <a>
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <span>Expenses</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('expense/create') }}">
                                <a href="{{action('ExpenseController@create')}}">Add Expense</a>
                            </li>
                            <li class="{{ isActive('expenseCategories') }}">
                                <a href="{{action('ExpenseCategoryController@index')}}">Add Category</a>
                            </li>
                            <li class="{{ isActive('expense/dailyReport') }}">
                                <a href="{{action('ExpenseController@index')}}">Daily Expense Report</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-parent {{ isActive(['parts*','productBrands*','categories*','products*','product/create*']) }}">
                        <a>
                            <i class="fa fa-gift" aria-hidden="true"></i>
                            <span>Products</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('products') }}">
                                <a href="{{ action('ProductController@index') }}">Product List</a>
                            </li>
                            <li class="{{ isActive('product/create') }}">
                                <a href="{{ action('ProductController@create') }}">Add Product</a>
                            </li>
                            <li class="{{ isActive('categories') }}">
                                <a href="{{ action('CategoryController@index') }}">Add Category</a>
                            </li>
                            <li class="{{ isActive('parts') }}">
                                <a href="{{ action('PartsController@index') }}">Add Parts</a>
                            </li>
                            <li class="{{ isActive('productBrands') }}">
                                <a href="{{ action('ProductBrandController@index') }}">Add Product Brand</a>
                            </li>
                            <li class="{{ isActive('units') }}">
                                <a href="{{ action('UnitController@index') }}">Add Unit</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-parent {{ isActive(['stock*']) }}">
                        <a>
                            <i class="fa fa-stack-overflow" aria-hidden="true"></i>
                            <span>Stock</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('stocks') }}">
                                <a href="{{action('StockController@index')}}">Stock List</a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-parent {{ isActive(['problem/create*','garageEntries*','garageEntry/create*','garageExit/create*','garageExit/create*','service/create*']) }}">
                        <a>
                            <i class="fa fa-wrench" aria-hidden="true"></i>
                            <span>Garage</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('garageEntry/create') }}">
                                <a href="{{action('GarageEntryController@create')}}">Entry Vehicle</a>
                            </li>

                            <li class="{{ isActive('garageEntries') }}">
                                <a href="{{action('GarageEntryController@index')}}">Vehicle List of Garage</a>
                            </li>

                            <li class="{{ isActive('problem/create') }}">
                                <a href="{{action('ProblemController@create')}}">Vehicle Problem Entry</a>
                            </li>

                            <li class="{{ isActive('service/create') }}">
                                <a href="{{action('ServiceController@create')}}">Vehicle Service Form</a>
                            </li>

                            <li class="{{ isActive('garageExit/create') }}">
                                <a href="{{action('GarageExitController@create')}}">Exit Vehicle</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-th-list" aria-hidden="true"></i>
                            <span>Inventory</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="">
                                    Add Product
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Category
                                </a>

                            </li>
                            <li>
                                <a>
                                    Sub Category
                                </a>
                            </li>
                            <li>
                                <a>
                                    Brands
                                </a>

                            </li>
                            <li>
                                <a>
                                    Size
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent {{ isActive(['suppliers*','supplier/create*']) }}">
                        <a>
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <span>Suppliers</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('suppliers') }}">
                                <a href="{{ action('SupplierController@index') }}">Supplier list</a>
                            </li>
                            <li class="{{ isActive('supplier/create') }}">
                                <a href="{{ action('SupplierController@create') }}">Add Supplier</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-parent {{ isActive(['invoice*','addPurchase*']) }}">
                        <a>
                            <i class="fa fa-balance-scale" aria-hidden="true"></i>
                            <span>Purchase</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('invoices') }}">
                                <a href="{{ action('InvoiceController@index') }}">Purchase list</a>
                            </li>
                            <li class="{{ isActive('invoice/create') }}">
                                <a href="{{ action('InvoiceController@create') }}">Add Purchase</a>
                            </li>
                            {{--<li class="{{ isActive('invoice/dailyReport') }}">--}}
                                {{--<a href="{{action('InvoiceController@dailyReport')}}">Daily Expense Report</a>--}}
                            {{--</li>--}}
                        </ul>
                    </li>

                    <li class="nav-parent {{ isActive(['user*']) }}">
                        <a>
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>User Management</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('users') }}">
                                <a href="{{ action('UserController@index') }}">Users</a>
                            </li>
                            <li class="{{ isActive('user/create')}}">
                                <a href="{{ action('UserController@create') }}">Add User</a>
                            </li>
                            <li class="{{ isActive('user/change')}}">
                                <a href="{{ action('UserController@changePassword') }}">Change Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent {{ isActive(['companies*']) }}">
                        <a>
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>Company Management</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('companies') }}">
                                <a href="{{ action('CompanyController@index') }}">Companies</a>
                            </li>
                            <li class="{{ isActive('company/create')}}">
                                <a href="{{ action('CompanyController@create') }}">Add Company</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</aside>
<!-- end: sidebar -->

