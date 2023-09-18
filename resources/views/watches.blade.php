<!DOCTYPE HTML>
<HTML lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta HTTP-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <title>WATCHES'LAND</title>


    <!-- bootstrap core CSS -->
    <link rel="stylesheet" type="text/CSS" href="{{ asset('CSS/bootstrap.CSS') }}" />
    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/CSS"
        href="HTTPS://CDNjs.cloudflare.com/AJAX/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.CSS" />

    <!-- font awesome style -->
    <link href="{{ asset('CSS/font-awesome.min.CSS') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('CSS/style.CSS') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('CSS/responsive.CSS') }}" rel="stylesheet" />

</head>

<body class="sub_page">

    <div class="hero_area">

        <!-- header section strats -->
        @include('composant.head')
    </div>

    <!-- shop section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Rolex
                </h2>
            </div>
            <div class="row">
                @foreach ($Rolex as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->marque }}
                                    </h6>
                                    <h6>
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Patek Philippe
                </h2>
            </div>
            <div class="row">
                @foreach ($Patek as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->nom }}
                                    </h6>
                                    <h6>
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Audemars Piguet
                </h2>
            </div>
            <div class="row">
                @foreach ($Audemars as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->nom }}
                                    </h6>
                                    <h6>
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Cartier
                </h2>
            </div>
            <div class="row">
                @foreach ($Cartier as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->marque }}
                                    </h6>
                                    <h6>
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Richard Mille
                </h2>
            </div>
            <div class="row">
                @foreach ($Richard as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->nom }}
                                    </h6>
                                    <h6>
       
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Diesel
                </h2>
            </div>
            <div class="row">
                @foreach ($Diesel as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->nom }}
                                    </h6>
                                    <h6>
                        
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Hugo Boss
                </h2>
            </div>
            <div class="row">
                @foreach ($Hugo as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->nom }}
                                    </h6>
                                    <h6>
                                     
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Calvin Klein
                </h2>
            </div>
            <div class="row">
                @foreach ($Calvin as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->nom }}
                                    </h6>
                                    <h6>
                                       
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Tommy Hilfiger
                </h2>
            </div>
            <div class="row">
                @foreach ($Tommy as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->nom }}
                                    </h6>
                                    <h6>
                                  
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Casio
                </h2>
            </div>
            <div class="row">
                @foreach ($Casio as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->nom }}
                                    </h6>
                                    <h6>
                                    
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Timex
                </h2>
            </div>
            <div class="row">
                @foreach ($Timex as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->nom }}
                                    </h6>
                                    <h6>
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Orient
                </h2>
            </div>
            <div class="row">
                @foreach ($Orient as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->nom }}
                                    </h6>
                                    <h6>
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Omega Seamaster
                </h2>
            </div>
            <div class="row">
                @foreach ($Omega as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->marque }}
                                    </h6>
                                    <h6>
                                        
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Citizen Promaster
                </h2>
            </div>
            <div class="row">
                @foreach ($Citizen as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->nom }}
                                    </h6>
                                    <h6>

                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Oris Divers
                </h2>
            </div>
            <div class="row">
                @foreach ($Oris as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->marque }}
                                    </h6>
                                    <h6>
                                        Prix:
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Apple Watch
                </h2>
            </div>
            <div class="row">
                @foreach ($Apple as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->marque }}
                                    </h6>
                                    <h6>
                                        Prix:
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Samsung Galaxy Watch
                </h2>
            </div>
            <div class="row">
                @foreach ($Samsung as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->marque }}
                                    </h6>
                                    <h6>
                                        Prix:
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Huawei Watch
                </h2>
            </div>
            <div class="row">
                @foreach ($Huawei as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->marque }}
                                    </h6>
                                    <h6>
                                        Prix:
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    TicWatch Pro
                </h2>
            </div>
            <div class="row">
                @foreach ($TicWatch as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('watches') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::URL($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->marque }}
                                    </h6>
                                    <h6>
                                        Prix:
                                        <span>
                                            {{ $montre->prix }} FCFA
                                        </span>
                                    </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    <!-- end shop section -->

    @include('composant.footer')

    <!-- jQery -->
    <script src="{{ asset('js/jQuery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="HTTPS://CDN.jsdelivr.net/NPM/popper.js@1.16.0/dist/UMD/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- owl slider -->
    <script src="HTTPS://CDNjs.cloudflare.com/AJAX/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- Google Map -->
    <script src="HTTPS://maps.googleapis.com/maps/API/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</HTML>
