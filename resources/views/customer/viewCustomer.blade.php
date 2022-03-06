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
    <!-- wraper-->
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
                            <li class="breadcrumb-item ">manage renter</li>
                            <li class="breadcrumb-item ">view rent detail</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="container">
                <h2>{{ $house->title }}</h2>
                <div class="row">
                    <div class="card col-md-8 p-20">

                        <div class="container">
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($housepic as $images)
                                <div class="mySlides">
                                    <div class="numbertext">$i++ / $housepic.length</div>
                                    <img src="/{{ $images->image }}" style="width:70%; ">
                                </div>
                            @endforeach


                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>



                            <div class="row" style="  display: flex; justify-content: center;">
                                @php
                                    $h = 1;
                                @endphp
                                @foreach ($housepic as $images)
                                    <div class="column">
                                        <img class="demo cursor" src="/{{ $images->image }}" style="width:100%"
                                            onclick="currentSlide({{ $h++ }})">
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">

                            <div class="card-header">
                                house owner contact
                                <div class="card-body" style="color: rgb(5, 22, 16)">
                                    <div class="form-group">
                                        name: {{ $customer->name }}
                                    </div>
                                    <div class="form-group">
                                        email: {{ $customer->email }}
                                    </div>
                                    <div class="form-group">
                                        phone: {{ $customer->phone_number }}
                                    </div>
                                    <div class="form-group">
                                        {{-- address: {{$customer}} --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 p-20">
                        <div class="card">

                            <div class="row">

                                <div class="card-header">
                                    <div class="card-body">
                                        <h2 style="text-align: center">house detail</h2>
                                        <div class="form-group">
                                            <b style="color: black; font-size: 120%">size:</b> {{ $house->size }}

                                        </div>
                                        <div class="form-group">
                                            <b style="color: black; font-size: 120%">bath room:</b>
                                            {{ $house->bath_rooms }}
                                        </div>
                                        <div class="form-group">
                                            <b style="color: black; font-size: 120%">price/month:</b> {{ $house->price }}
                                        </div>

                                        <div>
                                            <b style="color: black; font-size: 120%">description:</b>
                                            {{ $house->description }}
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>
    @endsection
