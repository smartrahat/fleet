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

                    <li class="nav-parent {{ isActive(['vehicle*','brand*','type*','status*']) }}">
                        <a>
                            <i class="fa fa-truck" aria-hidden="true"></i>
                            <span>Vehicle</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="{{ isActive('vehicles') }}">
                                <a href="{{action('VehicleController@index')}}">
                                    Vehicle Information
                                </a>
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

                    <li class="nav-parent {{ isActive(['part*']) }}">
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

                    <li class="nav-parent {{ isActive(['program*','trip*','rotation*','report*','receipt*']) }}">
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
                            <li class="{{ isActive('trips') }}">
                                <a href="{{action('TripController@index')}}">Trip list</a>
                            </li>
                            <li class="{{ isActive('trip/create') }}">
                                <a href="{{action('TripController@create')}}">Add Trip</a>
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
                            {{--<li class="{{ isActive('program/report') }}">--}}
                                {{--<a href="{{action('ProgramController@programReport')}}">Report</a>--}}
                            {{--</li>--}}
                            <li class="{{ isActive('program/receipt') }}">
                                <a href="{{action('ProgramController@driverReceipt')}}">Accounting From Driver</a>
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
                                <a href="ui-elements-typography.html">
                                    Add Product
                                </a>
                            </li>
                            <li>
                                <a href="ui-elements-typography.html">
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
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <span>Suppliers</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="ui-elements-typography.html">
                                    Supplier list
                                </a>

                            </li>
                            <li>
                                <a>
                                    Add Supplier
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a>
                            <i class="fa fa-balance-scale" aria-hidden="true"></i>
                            <span>Purchase</span>
                        </a>
                        {{--<ul class="nav nav-children">--}}
                        {{--<li>--}}
                        {{--<a href="ui-elements-typography.html">--}}
                        {{--Supplier list--}}
                        {{--</a>--}}

                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a>--}}
                        {{--Add Supplier--}}
                        {{--</a>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
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

                </ul>
            </nav>

        </div>
    </div>

</aside>
<!-- end: sidebar -->

