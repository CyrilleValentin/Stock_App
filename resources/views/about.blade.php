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


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page"style="background-color: rgb(227, 227, 229)">
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
        @include('composant.head')
    </div>

    <!-- about section -->

    <section class="about_section layout_padding" style="background-color: white; color: #6A8EDE">
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
                                A propos de Nous
                            </h2>
                        </div>
                        <p>
                                Bienvenue chez WATCHES'LAND !
                              <br>
                              Chez WATCHES'LAND, nous sommes passionnés par l'horlogerie et l'art intemporel de créer des
                            montres exceptionnelles. Notre histoire a commencé il y a 5 ans avec une vision
                            simple : offrir des montres de haute qualité qui allient élégance, innovation et artisanat.

                              Depuis nos débuts modestes, nous avons parcouru un long chemin. Grâce à notre engagement
                            envers l'excellence et notre dévouement pour satisfaire nos clients, nous sommes devenus une
                            référence dans l'industrie horlogère. Chaque montre que nous créons est le fruit d'un
                            travail minutieux et de l'expertise de nos horlogers talentueux.

                              Notre collection de montres incarne l'équilibre parfait entre tradition et modernité. Chaque
                            modèle est conçu avec une attention particulière aux détails, des mécanismes sophistiqués
                            aux matériaux de haute qualité. Que vous recherchiez une montre classique pour une occasion
                            spéciale ou une pièce contemporaine pour le quotidien, nous avons une montre pour chaque
                            style et chaque goût.

                              Nous croyons en la valeur de l'authenticité et de la durabilité. Chaque montre que nous
                            proposons est le reflet de notre engagement envers la qualité et l'intégrité. Nous sommes
                            fiers de vous offrir des montres qui non seulement embellissent votre poignet, mais qui
                            racontent aussi une histoire unique.

                             Chez WATCHES'LAND, nous ne sommes pas seulement dans le business des montres, nous sommes
                            dans le business des moments précieux. Chaque montre que vous portez est un témoin
                            silencieux des instants inoubliables de votre vie. Nous sommes honorés de faire partie de
                            ces moments et de vous accompagner à chaque étape de votre voyage.

                             Explorez notre collection et découvrez le monde captivant de l'horlogerie chez WATCHES'LAND.
                            Merci de nous rejoindre dans cette aventure.

                            L'équipe de WATCHES'LAND

                        </p>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

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

</html>
