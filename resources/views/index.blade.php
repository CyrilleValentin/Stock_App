<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <title>WATCHES'LAND</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">


</head>

<body class="sub_page" style="background-color: rgb(227, 227, 229)">
    <!-- Conteneur du panier (initialement masqué) -->
    <div id="cart-container"
        class="cart-container"
        style="">
        <!-- En-tête du panier -->
        <div id="titre-panier" class="p-4">
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
                <div class=""
                    style=" display: flex; justify-content: space-between;.items-center {
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
    <!-- slider section -->


    <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h1>
                                        RM 63-02
                                    </h1>
                                    <p>
                                        Le modèle RM 63-02 Heure Universelle réitère l’exploit en intégrant la fonction
                                        heure universelle au sein d’un mouvement automatique maison.
                                    </p>
                                    <div class="btn-box">
                                        <a href="{{ route('contact') }}" class="btn1">
                                            Contactez Nous
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="https://media.richardmille.com/wp-content/uploads/2019/01/23170707/richard-mille-rm-63-02-automatic-worldtimer-17832.png?dpr=10&width=170&height=100"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item ">
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h1>
                                        Smart Watches
                                    </h1>
                                    <p>
                                        Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl,
                                        convallis et augue sit amet, lobortis semper quam.
                                    </p>
                                    <div class="btn-box">
                                        <a href="{{ route('contact') }}" class="btn1">
                                            Contactez Nous
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="images/slider-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item ">
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h1>
                                        RM 72-01
                                    </h1>
                                    <p>
                                        Mouvement squeletté à remontage automatique bidirectionnel avec heures, minutes,
                                        petite seconde, date, chronographe flyback, indicateur de fonctions et stop
                                        seconde.

                                    </p>
                                    <div class="btn-box">
                                        <a href="{{ route('contact') }}" class="btn1">
                                            Contactez Nous
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="https://media.richardmille.com/wp-content/uploads/2020/09/13124951/RM72-01LMCF.png?dpr=10&width=170&height=100"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#customCarousel1" data-slide-to="1"></li>
                <li data-target="#customCarousel1" data-slide-to="2"></li>
            </ol>
        </div>

    </section>
    <!-- end slider section -->
    </div>

    <!-- shop section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Dernières Arrivages
                </h2>
            </div>

            <div class="row">
                @foreach ($derniersMontres as $montre)
                    <div class="col-sm-6 col-xl-3">
                        <div class="box">
                            <a href="{{ route('home') }}">
                                <div class="img-box">
                                    <img src="{{ Storage::url($montre->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{ $montre->marque }}
                                    </h6>
                                    <h6>

                                        <span>
                                            {{ $montre->prix }} CFA
                                        </span>
                                    </h6>
                                </div>
                                <div class="new">
                                    <span>
                                        Nouveau
                                    </span>
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


            <div class="btn-box">
                <a href="{{ route('watches') }}">
                    Voir tous
                </a>
            </div>
        </div>
    </section>

    <!-- end shop section -->

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6 col-lg-5 ">
                    <div class="img-box">
                        <img src="images/about-img.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-7">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                A Propos de Nous
                            </h2>
                        </div>
                        <p>
                            Bienvenue chez WATCHES'LAND !

                            Chez WATCHES'LAND, nous sommes passionnés par l'horlogerie et l'art intemporel de créer des
                            montres exceptionnelles. Notre histoire a commencé il y a 5 ans avec une vision
                            simple : offrir des montres de haute qualité qui allient élégance, innovation et artisanat.

                            Depuis nos débuts modestes, nous avons parcouru un long chemin. Grâce à notre engagement
                            envers l'excellence et notre dévouement pour satisfaire nos clients, nous sommes devenus une
                            référence dans l'industrie horlogère. Chaque montre que nous créons est le fruit d'un
                            travail minutieux et de l'expertise de nos horlogers talentueux.
                        </p>
                        <a href="{{ route('about') }}">
                            Lire plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- feature section -->

    <section class="feature_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Fonctionalités de nos Montres
                </h2>
                <p>
                    Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/f1.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Fitness Tracking
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            </p>
                            <a href="">
                                <span>
                                    Lire plus
                                </span>
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/f2.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Alerts & Notifications
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            </p>
                            <a href="">
                                <span>
                                    Lire plus
                                </span>
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/f3.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Messages
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            </p>
                            <a href="">
                                <span>
                                    Lire plus
                                </span>
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/f4.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Bluetooth
                            </h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            </p>
                            <a href="">
                                <span>
                                    Lire plus
                                </span>
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- end feature section -->




    <!-- end client section -->

    @include('composant.footer')
    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
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
        let nombreArticles = 0;
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
            nombreArticles++;
            updateCartCounter();
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

        function updateCartCounter() {
            const cartCounter = document.getElementById('cart-counter');
            cartCounter.textContent = nombreArticles;
        }
        window.onload = () => {
            updateCartCounter();
        }
    </script>
    <style>
        .nav-item {
            transition: background-color 0.2s, color 0.2s;
        }

        .nav-item.active {
            background-color: #6A8EDE;
            /* Couleur de fond pour l'élément actif */
            color: white;
            /* Couleur du texte pour l'élément actif */
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.nav-item').click(function() {
                // Retirez la classe active de tous les éléments de la barre de navigation
                $('.nav-item').removeClass('active');
                // Ajoutez la classe active à l'élément cliqué
                $(this).addClass('active');
            });
        });
    </script>

</body>

</html>
