    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <span>Logo marca</span>
                        {{-- <a href="./index.html">
                            <img src="{{ asset('home/img/logo.png') }}" alt="">
                        </a> --}}
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{ route('home.pages.diamond.index') }}">Home</a></li>
                                <li>
                                    <a href="">Categorias <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="">Free Fire</a></li>
                                        {{-- <li><a href="./anime-details.html">Anime Details</a></li> --}}
                                        {{-- <li><a href="./anime-watching.html">Anime Watching</a></li> --}}
                                        {{-- <li><a href="./blog-details.html">Blog</a></li> --}}
                                        {{-- <li><a href="./signup.html">Sign Up</a></li> --}}
                                        {{-- <li><a href="{{ route('login') }}">Login</a></li> --}}
                                    </ul>
                                </li>
                                <li><a href="">Blog</a></li>
                                <li><a href="" style="background-color: #892225;">Anunciar</a></li>
                                <li><a href="#">Contatos</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="{{ route('login') }}"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
