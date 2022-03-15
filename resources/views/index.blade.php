<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Rental and Sells System</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
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
                    <a href="index.html" id="navbar__logo"></a>
                    <div class="navbar__toggle" id="mobile-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <ul class="navbar__menu">
                        <li class="navbar__item">
                            <a href="#" class="navbar__links">Home</a>

                        </li>
                        <li class="navbar__item">
                            <a href="{{ Route('RandSproduct') }}" class="navbar__links">Products</a>
                        </li>
                        <li class="navbar__item">
                            <a href="#" class="navbar__links">Contact</a>
                        </li>
                        <li class="navbar__item">
                            <a href="#" class="navbar__links">Account</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col__2">
                <h1>come and use our service <br> </h1>
                <p> <br></p>
                <a href="" class="btn">Explor Now &#8594;</a>
            </div>
            <div class="col__2">

            </div>
        </div>

    </div>
    <!-- featured categories -->


    <!-- featured products -->
    <div class="small__container">

        <h2 class="title">Featured Products</h2>
        <div class="row">
            @php
                $i = 0;
            @endphp
            @foreach ($data as $img)
                @if ($fid == $img->house_id && $i == 0)
                    <div class="col__4">
                        <a href="{{ url('www.RandS.com/productDetail/' . $img->id) }}">
                            <img src="/{{ $img->image }}" alt="">
                            <h4>{{ $img->title }} </h4>

                        </a>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>$50.00</p>
                    </div>
                    {{ $i++ }}
                @endif

                @if ($fid != $img->house_id)
                    <div class="col__4">
                        <a href="{{ url('www.RandS.com/productDetail/' . $img->id) }}">
                            <img src="/{{ $img->image }}" alt="">
                            <h4>{{ $img->title }} </h4>

                        </a>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>{{ $img->price }}ETB</p>
                    </div>
                @endif
                @php
                    $i++;
                    $fid = $img->house_id;
                @endphp
            @endforeach
        </div>
        <h2 class="title">Latest Products</h2>
        <div class="row">

            @php
                $i = 0;
            @endphp
            @foreach ($ldata as $img)
                @if ($fid == $img->house_id && $i == 0)
                    <div class="col__4">
                        <a href="{{ url('www.RandS.com/productDetail/' . $img->id) }}">
                            <img src="/{{ $img->image }}" alt="">
                            <h4>{{ $img->title }} </h4>

                        </a>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>{{$img->price}}</p>
                    </div>
                    @php
                        $i++;
                    @endphp
                @endif

                @if ($fid != $img->house_id)
                    <div class="col__4">
                        <a href="{{ url('www.RandS.com/productDetail/' . $img->id) }}">
                            <img src="/{{ $img->image }}" alt="">
                            <h4>{{ $img->title }} </h4>

                        </a>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <p>{{ $img->price }}ETB</p>
                    </div>
                @endif
                @php
                    $i++;
                    $fid = $img->house_id;
                @endphp
            @endforeach

        </div>
    </div>
    <!--  offer  -->
    <div class="offer">
        <div class="small__container">
            <div class="row">
                @php
                    $j = 0;
                @endphp
                @foreach ($ldata as $data)
                    <div class="col__4">
                        <img src="/{{ $data->image }}" class="offer__img">
                    </div>
                    @if ($j == 3)
                    @break
                @endif
                @php
                    $j++;
                @endphp
            @endforeach
        </div>



        <a href="" class="btn">Buy Now &#8594;</a>
    </div>
</div>
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
        <p class="copyright"> copyright 2022 CSEC <sup>&#169;</sup></p>
    </div>
</div>
<script src="/js/randshome.js"></script>
</body>

</html>
