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

<body class="sub_page" style="background-color: rgb(227, 227, 229)">
    <!-- Conteneur du panier (initialement masqué) -->
    <div id="cart-container"
        class="shadow-lg overflow-y-auto transform translate-x-full transition-transform duration-300 ease-in-out"
        style="display: none; position: absolute; top: 0; right: 0; width: 40%; height: 20rem; z-index: 900;
 background-color: #E6C511; border-radius: 0.5rem;overflow:auto;position: fixed;">
        <!-- En-tête du panier -->
        <div class="p-4">
            <h2 class="text-2xl"
                style="margin: 0; font-weight: 600;font-size: 2.5rem/* 24px */;
    line-height: 2rem/* 32px */; text-align: center;color: white">
                Mon Panier</h2>
            <button id="close-cart-button" class="float-right"
                style="border: none; background: none; font-size: 1.5rem; line-height: 1; cursor: pointer;">&times;</button>
        </div>

        <!-- Contenu du panier ici -->
        <div id="cart-content" class="p-4">
            <div class="cart-item mb-2 border-b pb-2">
                <div class="" style=" display: flex; justify-content: space-between;.items-center {
            ">
                    <span style=" font-weight: 600;font-size: 1.125rem/* 18px */;line-height: 1.75rem/* 28px */;"
                        class="text-lg">Nom du
                        Produit </span>
                    <span style=" font-weight: 600;font-size: 1.125rem/* 18px */;line-height: 1.75rem/* 28px */;"
                        class="text-lg">Prix</span>
                </div>
                <hr style="background-color: black; height: 2px; border: none; border-radius: 1px">
            </div>
        </div>

        <!-- Total du panier -->
        <div style="padding: 1rem/* 16px */; display: flex;justify-content: flex-end; flex-direction: column;">
            <p
                id="cart-total"style="margin: 0; font-size: 1.25rem/* 20px */; 
    line-height: 1.75rem/* 28px */; font-weight: 600;">
                Total:</p>
            <button class="bg-blue-500 hover:bg-blue-600"
                style="border: none; cursor: pointer; padding-top: 0.5rem/* 8px */; border-radius: 0.375rem/* 6px */;
        padding-bottom: 0.5rem/* 8px */;background-color: #3B4A6B;color: white;  padding-left: 1rem/* 16px */;padding-right: 1rem/* 16px */;">
                Passer la Commande</button>
        </div>
    </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
                            <div class="text-center">
                                <button class="rounded border-transparent"
                                    onclick="addToCart('{{ $montre->nom }}',  {{ $montre->prix }})"
                                    style="background-color: #3B4A6B;color: white;border: none;">
                                    Ajouter au panier</button>
                            </div>
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
    <script>
        // Sélectionnez les éléments du panier et du bouton
        const openCartButton = document.getElementById('open-cart-button');
        const closeCartButton = document.getElementById('close-cart-button');
        const cartContainer = document.getElementById('cart-container');

        // Écoutez le clic sur le bouton d'ouverture du panier
        openCartButton.addEventListener('click', () => {
            cartContainer.style.transform = 'translateX(0)';
            cartContainer.style.display = 'block';
        });

        // Écoutez le clic sur le bouton de fermeture du panier
        closeCartButton.addEventListener('click', () => {
            cartContainer.style.transform = 'translateX(100%)';
            cartContainer.style.display = 'none';
        });
        const cartPrices = [];

        // Fonction pour ajouter un produit au panier (à appeler lorsque l'utilisateur ajoute un produit)
        function addToCart(productName, productPrice) {
            const cartContent = document.getElementById('cart-content');

            // Créez un élément d'article du panier
            const cartItem = document.createElement('div');
            cartItem.classList.add('border-b', 'pb-2', 'mb-2');
            // Remplissez le contenu de l'article du panier
            cartItem.innerHTML = `
            <div class=""style=" display: flex; justify-content: space-between;.items-center">
                    <span style=" font-size: 1.125rem/* 18px */;line-height: 1.75rem/* 28px */;" class="text-lg">${productName} </span>
                    <span style=" font-size: 1.125rem/* 18px */;line-height: 1.75rem/* 28px */;" class="text-lg">${productPrice}</span>
                </div>`;
            // Ajoutez l'article au contenu du panier
            cartContent.appendChild(cartItem);
            cartPrices.push(parseFloat(productPrice));
            // Calculez et mettez à jour le total du panier (à implémenter)
            updateCartTotal();
        }

        // Fonction pour mettre à jour le total du panier
        function updateCartTotal() {
            const totalElement = document.getElementById('cart-total');

            // Calculez le nouveau total en additionnant tous les prix du tableau
            const newTotal = cartPrices.reduce((accumulator, currentValue) => accumulator + currentValue, 0);

            // Mettez à jour l'élément du total
            totalElement.textContent = `Total : ${newTotal.toFixed(2)} CFA`;
        }
    </script>
</body>

</HTML>
