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
                    <li >
                        <a href="{{ route('home') }}">
                            <i class="la la-dashboard"></i>

                            <span>Dashboard</span> </a>
                    </li>

                    <li class="submenu">
                        <a href="#">
                            <i class="la la-files-o"></i>
                            <span> Manage Rent </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('viewRenter') }}">view Rent</a></li>
                            <li><a href="{{ route('addrentalhouse') }}">add rent house</a></li>

                        </ul>
                    </li>

                    <li class="submenu"> <a href="#"><i class="la la-pie-chart"></i>
                            <span> Manage Seller </span> <span class="menu-arrow"></span></a>

                    </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span> Houses </span>
                        </a>
                    </li>
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
                        <div class="card-body"> <span class="dash-widget-icon"><i
                                    class="fa fa-product-hunt"></i></span>
                            <div class="dash-widget-info">

                                <h3>{{ $housCount }}</h3> <span>Total Houses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                        <div class="card-body"> <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                            <div class="dash-widget-info">
                                <h3>{{ $custCount }}</h3> <span> Customers</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div>
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Houses</h3>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card dash-widget">
                            <div class="card-body"> <span class="dash-widget-icon"><i
                                        class="fa fa-product-hunt"></i></span>
                                <div class="dash-widget-info">
                                    <h3>{{ $housForSell }}</h3> <span>Houses for sell</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card dash-widget">
                            <div class="card-body"> <span class="dash-widget-icon"><i
                                        class="fa fa-product-hunt"></i></span>
                                <div class="dash-widget-info">
                                    <h3>{{ $housForRental }}</h3> <span>Houses for Rental</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card dash-widget">
                            <div class="card-body"> <span class="dash-widget-icon"><i
                                        class="fa fa-shopping-cart"></i></span>
                                <div class="dash-widget-info">
                                    <h3>{{ $housSold }}</h3> <span>Sold Houses</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="card dash-widget">
                            <div class="card-body"> <span class="dash-widget-icon"><i
                                        class="fa fa-building-o"></i></span>
                                <div class="dash-widget-info">
                                    <h3>{{ $housRented }}</h3> <span>Rented Houses</span>
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
                            <h3 class="card-title mb-0">Recent Houses for Sell</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table custom-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>House Name </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($latestSell as $sell)

                                            <tr>
                                                <td>
                                                    <h2>
                                                        <a href="{{ route('viewHouseDetail') }}">{{ $sell->title }}</a>
                                                    </h2>

                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="projects.html">View All Houses for Sell</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h3 class="card-title mb-0">Recent Houses for Rent</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table custom-table mb-0">
                                    <thead>
                                        <tr>
                                            <th>House Name </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($latestRental as $rent)

                                            <tr>
                                                <td>
                                                    <h2>
                                                        <a href="{{ route('viewHouseDetail') }}">{{ $rent->title }}</a>
                                                    </h2>

                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="projects.html">View All Houses for Rent</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </div>
@endsection
