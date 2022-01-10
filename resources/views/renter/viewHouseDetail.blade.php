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
            <h2>house title</h2>
            <div class="row">
                <div class="card col-md-8 p-20">

                    <div class="container">
                        <div class="mySlides">
                            <div class="numbertext">1 / 6</div>
                            <img src="{{ '/assets/house_images/house2.jpg' }}" style="width:70%; ">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 6</div>
                            <img src="{{ '/assets/house_images/house4.jpg' }}" style="width:70%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 6</div>
                            <img src="{{ '/assets/house_images/house5.jpg' }}" style="width:70%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 6</div>
                            <img src="{{ '/assets/house_images/house6.jpg' }}" style="width:70%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">5 / 6</div>
                            <img src="{{ '/assets/house_images/house7.jpg' }}" style="width:70%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">6 / 6</div>
                            <img src="{{ '/assets/house_images/house5.jpg' }}" style="width:70%">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>



                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="{{ '/assets/house_images/house2.jpg' }}" style="width:100%"
                                    onclick="currentSlide(1)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="{{ '/assets/house_images/house4.jpg' }}" style="width:100%"
                                    onclick="currentSlide(2)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="{{ '/assets/house_images/house5.jpg' }}" style="width:100%"
                                    onclick="currentSlide(3)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="{{ '/assets/house_images/house6.jpg' }}" style="width:100%"
                                    onclick="currentSlide(4)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="{{ '/assets/house_images/house7.jpg' }}" style="width:100%"
                                    onclick="currentSlide(5)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="{{ '/assets/house_images/house5.jpg' }}" style="width:100%"
                                    onclick="currentSlide(6)" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">

                        <div class="card-header">
                            house owner contact
                            <div class="card-body" style="color: rgb(5, 22, 16)">
                                <div class="form-group">
                                    name: solomon adola
                                </div>
                                <div class="form-group">
                                    email: solomonadola@gmail.com
                                </div>
                                <div class="form-group">
                                    phone: +251984695747
                                </div>
                                <div class="form-group">
                                    address: adama, colleage street
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 p-20">
                    <div class="card">
                        <h2>house detail</h2>

                        <div class="row">

                            <div class="card-header">
                                <div class="card-body">
                                    <div class="form-group">
                                        house size
                                    </div>
                                    <div class="form-group">
                                        kitchen
                                    </div>
                                    <div class="form-group">
                                        bath room
                                    </div>
                                    <div class="form-group">
                                        price/month
                                    </div>

                                    <div>
                                        description
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div>
                                        description
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-header">
                                    <div class="card-body">
                                        <div class="form-group">
                                            house size
                                        </div>
                                        <div class="form-group">
                                            kitchen
                                        </div>
                                        <div class="form-group">
                                            bath room
                                        </div>
                                        <div class="form-group">
                                            price/month
                                        </div>

                                        <div>
                                            description
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <div>
                                            description
                                        </div>
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
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }
    </script>

    @endsection
