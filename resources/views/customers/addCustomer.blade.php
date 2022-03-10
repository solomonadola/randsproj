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
                                <h3 class="page-title">add house</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>
                            {{session('success')}}
                        </strong>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    @endif
                    <form action="{{ url('/house/submit/') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">house title</label>
                                    <input name="title" class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="location">house location</label>
                                    <input name="location" class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="owner_id">owner id</label>
                                    <input name="owner_id" class="form-control" type="text" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label for="for">for</label>
                                    <select name="for" class="form-control">
                                        <option value="sell">sell</option>
                                        <option value="rental">rental</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label for="status">status</label>
                                    <select name="status" class="form-control">

                                        <option value="not sold">not sold</option>
                                        <option value="sold">sold</option>


                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label for="price">price</label>
                                    <input name="price" class="form-control" value="" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label for="size">size</label>
                                    <input name="size" class="form-control" value="" type="text">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md- col-lg-3">
                                <div class="form-group">
                                    <label for="bedrooms">bedrooms</label>
                                    <input name="bedrooms" class="form-control" value="" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label for="bathrooms">bathrooms</label>
                                    <input name="bathrooms" class="form-control" value="" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">description</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control " value=""
                                        type="text"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">


                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="form-group">
                                    <label for="ims">upload image</label>
                                    <input name="images[]" class="form-control" type="file" multiple="" >
                                </div>
                            </div>


                        </div>
                        @error('images')
                        <span class="text-danger"> {{ $message}}</span>

                        @enderror

                        <div class="submit-section">
                            <button type="submit" class="btn btn-primary submit-btn">Save</button>
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
