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
    <link rel="stylesheet" href="css/cart.css">

</head>

<body>

    @include('composant.head')
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
                                        Heure Universelle à Remontage Automatique
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
                                        Chronographe Flyback à Remontage Automatique Le Mans Classic
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
                                            Prix:
                                            <span>
                                                {{ $montre->prix }} FCFA
                                            </span>
                                        </h6>
                                    </div>
                                    <div class="new">
                                        <span>
                                            Nouveau
                                        </span>
                                    </div>
                                </a>
                            </div>
                           <div class="text-center"> <button class="rounded border-transparent" style="background-color: #3B4A6B"><a class="text-white" href="#">Ajouter au panier</a></button></div>
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
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration
                            in some form, by injected humour, or randomised words which don't look even slightly
                            believable. If you
                            are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                            embarrassing hidden in
                            the middle of text. All
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
            <div class="btn-box">
                <a href="">
                    Voir plus
                </a>
            </div>
        </div>
    </section>

    <!-- end feature section -->



    <!-- client section -->
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Testimonial
                </h2>
            </div>
            <div class="carousel-wrap ">
                <div class="owl-carousel client_owl-carousel">
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/c1.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <div class="client_info">
                                    <div class="client_name">
                                        <h5>
                                            Mark Thomas
                                        </h5>
                                        <h6>
                                            Customer
                                        </h6>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore
                                    et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut
                                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse
                                    cillum
                                    dolore eu fugia
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/c2.jpg" alt="">
                            </div>
                            <div class="detail-box">
                                <div class="client_info">
                                    <div class="client_name">
                                        <h5>
                                            Alina Hans
                                        </h5>
                                        <h6>
                                            Customer
                                        </h6>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore
                                    et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut
                                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse
                                    cillum
                                    dolore eu fugia
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

// Fonction pour ajouter un produit au panier (à appeler lorsque l'utilisateur ajoute un produit)
function addToCart(productName, productPrice) {
    const cartContent = document.getElementById('cart-content');
    
    // Créez un élément d'article du panier
    const cartItem = document.createElement('div');
    cartItem.classList.add('border-b', 'pb-2', 'mb-2');
    
    // Remplissez le contenu de l'article du panier
    cartItem.innerHTML = `
        <div class="flex justify-between items-center">
            <span class="text-lg">${productName}</span>
            <span class="text-lg">$${productPrice}</span>
        </div>
    `;
    
    // Ajoutez l'article au contenu du panier
    cartContent.appendChild(cartItem);
    
    // Calculez et mettez à jour le total du panier (à implémenter)
    updateCartTotal(productPrice);
}

// Fonction pour mettre à jour le total du panier
function updateCartTotal(productPrice) {
    const totalElement = document.querySelector('.bg-gray-200 p');
    const currentTotal = parseFloat(totalElement.textContent.replace('$', ''));
    
    // Calculez le nouveau total
    const newTotal = currentTotal + parseFloat(productPrice);
    
    // Mettez à jour l'élément du total
    totalElement.textContent = `Total : $${newTotal.toFixed(2)}`;
}

// Exemple d'ajout de produit au panier (à appeler lorsque l'utilisateur ajoute un produit)
addToCart('Produit 1', 20.00);

    </script>
</body>

</html>
