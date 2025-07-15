@extends('home.layouts.app')
@section('title', 'Home')
@section('content')

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="{{ asset('home/img/hero/hero-1.jpg') }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                {{-- <div class="label">Adventure</div> --}}
                                <h2>comprar e vender</h2>
                                <p>contas, jogos, gift cards, gold, itens digitais e mais!</p>
                                <a href="{{ route('home.pages.func.index') }}">
                                    <span>COMO FUNCIONA</span> <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->



    <div class="row">
        <div class="col-lg-8">
            <div class="trending__product">
                <div class="row" style="margin-top: 20px">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="section-title">
                            <h4>Tendências</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="btn__all">
                            <a href="#" class="primary-btn">Vizualizar todos <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($data as $item)
                        <a href="{{ route('home.pages.diamond.view', [$item->slug]) }}">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ asset('upload/' . $item->img) }}">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Disponíveis {{ $item->disponiveis }}</li>
                                            <li>Vendidos {{ $item->vendidos }}</li>
                                        </ul>
                                        <h5><a href="#">{{ $item->name }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
            <div class="popular__product">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="section-title">
                            <h4>Populares Show</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="btn__all">
                            <a href="#" class="primary-btn">Vizualizar todos <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($populares as $item)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <a href="{{ route('home.pages.diamond.view', [$item->slug]) }}">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ asset('upload/' . $item->img) }}">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="product__sidebar" style="margin-top: 20px">
                <div class="product__sidebar__view">
                    <div class="section-title">
                        <h5>Top Views</h5>
                    </div>
                    <ul class="filter__controls">
                        {{-- <li class="active" data-filter="*">Day</li>
                        <li data-filter=".week">Week</li>
                        <li data-filter=".month">Month</li>
                        <li data-filter=".years">Years</li> --}}
                    </ul>
                    <div class="filter__gallery">
                        @foreach ($random as $item)
                            <a href="{{ route('home.pages.diamond.view', [$item->slug]) }}">
                                <div class="product__sidebar__view__item set-bg mix day years"
                                    data-setbg="{{ asset('upload/' . $item->slug) }}">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5>{{ $item->name }}</h5>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
                <div class="product__sidebar__comment">
                    <div class="section-title">
                        <h5>Novos comentários</h5>
                    </div>
                    <div class="product__sidebar__comment__item">
                        <div class="product__sidebar__comment__item__pic">
                            <img src="{{ asset('home/img/sidebar/comment-1.jpg') }}" alt="">
                        </div>
                        <div class="product__sidebar__comment__item__text">
                            <ul>
                                <li>Active</li>
                                <li>Movie</li>
                            </ul>
                            <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                            <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                        </div>
                    </div>

                </div>

                <!-- Product Section End -->



                <!-- Search model Begin -->
                <div class="search-model">
                    <div class="h-100 d-flex align-items-center justify-content-center">
                        <div class="search-close-switch"><i class="icon_close"></i></div>
                        <form class="search-model-form">
                            <input type="text" id="search-input" placeholder="Search here.....">
                        </form>
                    </div>
                </div>
                <!-- Search model end -->
            </div>
        </div>
    </div>

@endsection
