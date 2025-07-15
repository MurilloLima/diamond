    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="">
                            {{-- <img src="{{ asset('home/img/logo.png') }}" alt=""> --}}
                            Logo
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="{{ route('home.pages.index') }}">Home</a></li>
                                <li><a href="">Categorias <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        @foreach ($cat as $item)
                                            <li><a href="">{{ $item->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="">Blog</a></li>
                                <li><a href="#" class="btn btn-danger">Anunciar</a></li>
                                <li><a href="#">Contatos</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="{{ route('home.pages.login.index') }}"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->
