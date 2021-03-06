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
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">manage renter</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">manage renter</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->


            <section class="review-section personal-excellence">
                <div class="review-header text-center">
                    @if (session('success'))
                        <div class="alert alert-danger">
                            {{ session('success') }}
                        </div>
                    @endif

                    <h3 class="review-title">customers list</h3>
                    <p class="text-muted">on RandS</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered review-table mb-0">
                                <thead>
                                    <tr>
                                        <th style="width:40px;">#</th>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $customer->id }}</td>
                                            <td>{{ $customer->name }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->phone_number }}</td>

                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>


            <!-- /Page Content -->
        </div>
    </div>

    <!-- /Page Wrapper -->
@section('script')
    <!-- Add Table Row JS -->
    <script>
        $(function() {
            $(document).on("click", '.btn-add-row', function() {
                var id = $(this).closest("table.table-review").attr('id'); // Id of particular table
                console.log(id);
                var div = $("<tr />");
                div.html(GetDynamicTextBox(id));
                $("#" + id + "_tbody").append(div);
            });
            $(document).on("click", "#comments_remove", function() {
                $(this).closest("tr").prev().find('td:last-child').html(
                    '<button type="button" class="btn btn-danger" id="comments_remove"><i class="fa fa-trash-o"></i></button>'
                );
                $(this).closest("tr").remove();
            });

            function GetDynamicTextBox(table_id) {
                $('#comments_remove').remove();
                var rowsLength = document.getElementById(table_id).getElementsByTagName("tbody")[0]
                    .getElementsByTagName("tr").length + 1;
                return '<td>' + rowsLength + '</td>' +
                    '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' +
                    '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' +
                    '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' +
                    '<td><button type="button" class="btn btn-danger" id="comments_remove"><i class="fa fa-trash-o"></i></button></td>'
            }
        });
    </script>
@endsection
@endsection
