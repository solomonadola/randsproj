@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li>
                        <a href="{{ route('home') }}">
                            <i class="la la-dashboard"></i>

                            <span>Dashboard</span>
                        </a>

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

                    <li class="submenu">
                        <a href="#">
                            <i class="la la-pie-chart"></i>
                            <span> Manage Sell </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('viewSeller') }}">View Sell</a></li>
                            <li><a href="{{ route('addsellhouse') }}">Add Sell House</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-user-alt"></i>
                            <span> Manage customer </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('addcustomer') }}">Add Customer</a></li>
                            <li><a href="{{ route('viewcustomer') }}">View Customer </a></li>
                        </ul>
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
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">add customer</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>
                                {{ session('success') }}
                            </strong>
                            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (session('fails'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>
                                {{ session('fails') }}
                            </strong>
                            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="{{ url('add/customer/new') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row bg-white">
                            <div class="col-sm-8 ">

                                <div class="form-group">

                                    <label for="name">Full Name:</label>
                                    <input style="border: 1px solid rgb(0, 0, 0) " name="name" class="form-control "
                                        type="text" value="{{ $name }}">
                                </div> @error('name')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>


                        </div>
                        <div class="row bg-white">
                            <div class="col-sm-8">

                                <div class="form-group">

                                    <label for="email">Email:</label>
                                    <input style="border: 1px solid rgb(0, 0, 0) " name="email" class="form-control"
                                        type="text" value="">
                                </div> @error('email')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row bg-white">
                            <div class="col-sm-4">

                                <div class="form-group">

                                    <label for="phone">Phone:</label>
                                    <input style="border: 1px solid rgb(0, 0, 0) " name="phone" class="form-control"
                                        type="tel" value="{{ $phone }}">
                                </div> @error('phone')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                        <div class="submit-section">
                            <button type="submit" class="btn btn-secondary submit-btn">Add Customer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->
@section('script')
    {{-- update js --}}


    {{-- delete model --}}
@endsection


@endsection
