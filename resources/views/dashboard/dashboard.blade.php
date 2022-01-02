@extends('layouts.master')
@section('content')

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="submenu">
                    <a href="#" class="noti-dot">
                        <i class="la la-dashboard"></i>
                        <span> Dashboard</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a class="active" href="{{ route('home') }}">Admin Dashboard</a></li>
                    </ul>
                </li>
                @if (Auth::user()->role_name=='Admin')
                <li class="menu-title"> <span>Authentication</span> </li>
                <li class="submenu">
                    <a href="#">
                        <i class="la la-user-secret"></i> <span> User Controller</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a href="{{ route('userManagement') }}">All User</a></li>
                        <li><a href="{{ route('activity/log') }}">Activity Log</a></li>
                        <li><a href="{{ route('activity/login/logout') }}">Activity User</a></li>
                    </ul>
                </li>
                @endif

                <li class="menu-title"> <span>Products</span> </li>
                <li class="submenu">
                    <a href="#">
                        <i class="la la-files-o"></i>
                        <span> Sales </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="display: none;">
                        <li><a href="estimates.html">Estimates</a></li>
                        <li><a href="{{ route('form/invoice/view/page') }}">Invoices</a></li>
                        <li><a href="payments.html">Payments</a></li>
                        <li><a href="expenses.html">Expenses</a></li>
                        <li><a href="provident-fund.html">Provident Fund</a></li>
                        <li><a href="taxes.html">Taxes</a></li>
                    </ul>
                </li>

                <li class="submenu"> <a href="#"><i class="la la-pie-chart"></i>
                        <span> Reports </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('form/expense/reports/page') }}"> Expense Report </a></li>
                        <li><a href="{{ route('form/invoice/reports/page') }}"> Invoice Report </a></li>
                        <li><a href="payments-reports.html"> Payments Report </a></li>
                        <li><a href="employee-reports.html"> Employee Report </a></li>
                        <li><a href="payslip-reports.html"> Payslip Report </a></li>
                        <li><a href="attendance-reports.html"> Attendance Report </a></li>
                        <li><a href="{{ route('form/leave/reports/page') }}"> Leave Report </a></li>
                        <li><a href="{{ route('form/daily/reports/page') }}"> Daily Report </a></li>
                    </ul>
                </li>
                <li class="menu-title"> <span>Performance</span> </li>
                <li class="submenu"> <a href="#"><i class="la la-graduation-cap"></i>
                        <span> Performance </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('form/performance/indicator/page') }}"> Performance Indicator </a></li>
                        <li><a href="{{ route('form/performance/page') }}"> Performance Review </a></li>
                        <li><a href="{{ route('form/performance/appraisal/page') }}"> Performance Appraisal </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="la la-edit"></i>
                        <span> Training </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('form/training/list/page') }}"> Training List </a></li>
                        <li><a href="trainers.html"> Trainers</a></li>
                        <li><a href="training-type.html"> Training Type </a></li>
                    </ul>
                </li>
                <li><a href="promotion.html"><i class="la la-bullhorn"></i> <span>Promotion</span></a></li>
                <li><a href="resignation.html"><i class="la la-external-link-square"></i> <span>Resignation</span></a>
                </li>
                <li><a href="termination.html"><i class="la la-times-circle"></i> <span>Termination</span></a></li>


            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->

<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Welcome Admin!</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-product-hunt"></i></span>
                        <div class="dash-widget-info">
                            <h3>112</h3> <span>Active Products</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                <div class="card dash-widget">
                    <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                        <div class="dash-widget-info">
                            <h3>44</h3> <span>Active Customers</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div>
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Products</h3>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                        <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-product-hunt"></i></span>
                            <div class="dash-widget-info">
                                <h3>112</h3> <span>Active Products for sell</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                        <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-product-hunt"></i></span>
                            <div class="dash-widget-info">
                                <h3>44</h3> <span>Active Products for Rental</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                        <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-shopping-cart"></i></span>
                            <div class="dash-widget-info">
                                <h3>37</h3> <span>Sold Products</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                        <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-building-o"></i></span>
                            <div class="dash-widget-info">
                                <h3>218</h3> <span>Rented Products</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 d-flex">
                <div class="card card-table flex-fill">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Clients</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-19.jpg"></a>
                                                <a href="client-profile.html">Barry Cuda </a>
                                            </h2>
                                        </td>
                                        <td>barrycuda@example.com</td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Active
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Inactive
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-19.jpg"></a>
                                                <a href="client-profile.html">Tressa Wexler </a>
                                            </h2>
                                        </td>
                                        <td>tressawexler@example.com</td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-dot-circle-o text-danger"></i> Inactive </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Active
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Inactive
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="client-profile.html" class="avatar">
                                                    <img alt="" src="assets/img/profiles/avatar-07.jpg">
                                                </a>
                                                <a href="client-profile.html">Ruby Bartlett </a>
                                            </h2>
                                        </td>
                                        <td>rubybartlett@example.com</td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-dot-circle-o text-danger"></i> Inactive </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Active
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Inactive
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="client-profile.html" class="avatar">
                                                    <img alt="" src="assets/img/profiles/avatar-06.jpg">
                                                </a>
                                                <a href="client-profile.html"> Misty Tison </a>
                                            </h2>
                                        </td>
                                        <td>mistytison@example.com</td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Active
                                                    </a> <a class="dropdown-item" href="#">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Inactive
                                                    </a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="client-profile.html" class="avatar">
                                                    <img alt="" src="assets/img/profiles/avatar-14.jpg">
                                                </a>
                                                <a href="client-profile.html"> Daniel Deacon </a>
                                            </h2>
                                        </td>
                                        <td>danieldeacon@example.com</td>
                                        <td>
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-dot-circle-o text-danger"></i> Inactive </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-dot-circle-o text-success"></i> Active
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fa fa-dot-circle-o text-danger"></i> Inactive
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer"> <a href="clients.html">View all clients</a> </div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="card card-table flex-fill">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Recent Products for Sell</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Project Name </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2>
                                                <a href="project-view.html">Office Management</a>
                                            </h2>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h2>
                                                <a href="project-view.html">Project Management</a>
                                            </h2>

                                        </td>


                                    </tr>
                                    <tr>
                                        <td>
                                            <h2>
                                                <a href="project-view.html">Video Calling App</a>
                                            </h2>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h2>
                                                <a href="project-view.html">Hospital Administration</a>
                                            </h2>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h2>
                                                <a href="project-view.html">Digital Marketplace</a>
                                            </h2>


                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="projects.html">View All Products for Sell</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="card card-table flex-fill">
                    <div class="card-header">
                        <h3 class="card-title mb-0">Recent Products for Rent</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Project Name </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2>
                                                <a href="project-view.html">Office Management</a>
                                            </h2>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h2>
                                                <a href="project-view.html">Project Management</a>
                                            </h2>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h2>
                                                <a href="project-view.html">Video Calling App</a>
                                            </h2>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h2>
                                                <a href="project-view.html">Hospital Administration</a>
                                            </h2>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <h2>
                                                <a href="project-view.html">Digital Marketplace</a>
                                            </h2>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="projects.html">View All Products for Rent</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
</div>
@endsection
