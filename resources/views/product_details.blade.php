<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--nav section-->
    <div class="header">
        <div class="container">
            <nav class="navbar">
                <div class="navbar__container">
                    <a href="index.html" id="navbar__logo">
                        <div class="navbar__toggle" id="mobile-menu">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                        <ul class="navbar__menu">
                            <li class="navbar__item">
                                <a href="{{ Route('RandShome') }}" class="navbar__links">Home</a>
                            </li>
                            <li class="navbar__item">
                                <a href="{{ Route('RandSproduct') }}" class="navbar__links">Products</a>
                            </li>
                            <li class="navbar__item">
                                <a href="" class="navbar__links">Contact</a>
                            </li>
                            <li class="navbar__item">
                                <a href="" class="navbar__links">Account</a>
                            </li>
                        </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- single product detail -->

    <div class="row">
        <div class="col__2">

            <div class="row" style="margin: 40px 10px 0 0;">
                <div class="card col-md-8">

                    <div class="container">
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($images as $image)
                            <div class="mySlides">
                                <div class="numbertext">$i++ / $images.length</div>
                                <img src="/{{ $image->image }}" style="width:70%; ">
                            </div>
                        @endforeach


                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>



                        <div class="row" style="  display: flex; justify-content: center;">
                            @php
                                $h = 1;
                            @endphp
                            @foreach ($images as $image)
                                <div class="column">
                                    <img class="demo cursor" src="/{{ $image->image }}" style="width:100%"
                                        onclick="currentSlide({{ $h++ }})">
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>


            </div>

        </div>
        {{-- @foreach ($data as $dat) --}}
        <div class="col__2">
            <p>Home / products/Detail</p>
            <h1>{{ $data->title }}</h1>
            <h4> <i class="fa fa-location-arrow"></i> {{ $data->location }}</h4>
            <h4>{{ $data->price }}ETB</h4>
            <h4>Status: {{ $data->status }}</h4>
            <h4>For: {{ $data->for }}</h4>
            <div class="card col-md-6">

                <div class="container">
                    <h3>Product Description <i class="fa fa-indent"></i></h3>
                    <br>
                    <p>{{ $data->description }}
                </div>
            </div>
            </p>
            <div>
                <h2> house owner contact</h2>
                <h4>name: {{ $customer->name }}</h4>
                <h4>email: {{ $customer->email }}</h4>
                <h4>phone: {{ $customer->phone_number }}</h4>


            </div>
        </div>
    </div>
    {{-- @endforeach --}}


    </div>

    <!-- title -->
    <div class="small__container">
        <div class="row row__2">
            <h2>Related Product</h2>
            <p>View More</p>
        </div>


    </div>


    <!-- products -->
    <div class="small__container">
        <div class="row">
            @php
                $i = 0;
            @endphp
            @foreach ($ldata as $data)
                @if ($fid == $data->house_id && $i == 0)
                    <div class="col__4">
                        <a href="{{ url('www.RandS.com/productDetail/' . $data->id) }}">
                            <img src="/{{ $data->image }}" alt="">
                            <h4>{{ $data->title }} </h4>

                        </a>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>{{ $data->price }}</p>
                    </div>
                @endif
                @if ($fid != $data->house_id)
                    <div class="col__4">
                        <a href="{{ url('www.RandS.com/productDetail/' . $data->id) }}">
                            <img src="/{{ $data->image }}" alt="">
                            <h4>{{ $data->title }} </h4>

                        </a>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>{{ $data->price }}</p>
                    </div>
                @endif
                @php
                    $i++;
                    $fid = $data->house_id;
                @endphp
            @endforeach

        </div>

    </div>
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer__col__1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and iso mobile phone.</p>
                    <div class="app__logo">
                        <img src="/assets/play-store.png">
                        <img src="/assets/app-store.png">
                    </div>
                </div>
                <div class="footer__col__2">
                    s
                    <p>Our Purpose Is To Susuainably make the pleasure and
                        Benefits of Sportd Accessible to the many.
                    </p>
                </div>
                <div class="footer__col__3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer__col__4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright"> copyright 2022 - CSEC <sup>&#169;</sup></p>
        </div>
    </div>
    <script src="/assets/js/randshome.js"></script>
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
</body>

</html>
