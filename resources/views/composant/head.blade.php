<div class="hero_area">

    <!-- header section strats -->
    <header class="header_section" style="position: fixed;z-index: 100;background-color:white;width: 100%;">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <span>
                        WATC<span style="color: #6a8ede">HES'</span>LAND
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="position: relative;">
                    <ul class="navbar-nav">
                        <li class="nav-item active hover:text-white bg-blue-950">
                            <a class="nav-link" href="{{ route('home') }}">ACCUEIL <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('watches') }}">BOUTIQUE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}"> A PROPOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">CONTACTEZ-NOUS</a>
                        </li>
                    </ul>
                    <div class="user_option-box" style="margin-right: 2rem">

                        @guest
                            <a style="text-align: center; border-radius: 0.5rem;background-color: #6a8ede;
                            border-color: #6a8ede;padding: 0.3rem"
                                href="{{ route('login') }}">Se connecter</a>
                        @else
                            <form method="POST" action="{{ route('logout') }}">
                                @CSRF
                                <a style="text-align: center;padding: 0.3rem; border-radius: 0.5rem;background-color: #6a8ede;border-color: #6a8ede;"
                                    onclick="event.preventDefault();this.closest('form').submit();" class="dropdown-item"
                                    href="route('logout')">Déconnexion</a>
                            </form>
                        @endguest


                        <a style="margin-left: 2rem;" href="{{ route('profile.edit') }} ">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                        <!-- Bouton pour ouvrir le panier -->

                    </div>
                    <button id="open-cart-button"
                        style=" --tw-bg-opacity: 1;
                            background-color:#6A8EDE; --tw-text-opacity: 1;
                                 padding: 0.5rem;border: none;
                             border-radius: 9px; ">
                             Panier
                    </button>
                </div>
            </nav>
        </div>

    </header>
    <!-- end header section -->
