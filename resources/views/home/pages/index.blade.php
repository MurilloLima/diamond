@extends('home.layouts.app')
@section('title', 'Home')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero__text" style="text-align: left">
                                <div class="label">Comprar e vender</div>
                                <p>contas, jogos, gift cards, gold, itens digitais e mais!</p>

                                {{-- <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p> --}}
                                <a href="{{ route('home.pages.func.index') }}">
                                    <span>Como funciona</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Categorias Populares</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">Vizualizar todos* <span
                                            class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($data as $item)
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <a href="{{ route('home.pages.diamond.view', $item->desc) }}">
                                            <div class="product__item__pic set-bg"
                                                data-setbg="{{ asset('upload/' . $item->img) }}">
                                                <div class="ep">${{ $item->valor }}</div>
                                                {{-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                            </div>
                                            <div class="product__item__text">
                                                <ul>
                                                    <li>Disponível {{ $item->dispo }}</li>
                                                    <li>Vendas {{ $item->venda }}</li>
                                                </ul>
                                                <h5>
                                                    <a href="{{ route('home.pages.diamond.view', [$item->name]) }}">
                                                        {{ $item->name }}
                                                    </a>
                                                </h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="live__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Fortnite</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">Visualizar todos <span
                                            class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ asset('home/img/hero/685cb13408e8a.jpg') }}">
                                        <div class="ep">99,90</div>
                                        {{-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Disponível 203</li>
                                            <li>Vendas 20</li>
                                        </ul>
                                        <h5>
                                            <a href="#">Marvel Rivals: Nova atualização pode acabar com os jogadores
                                                tóxicos
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ asset('home/img/hero/f62a68a6eca83b13a24eaf0ef6148b03.sm.webp') }}">
                                        <div class="ep">99,90</div>
                                        {{-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Disponível 203</li>
                                            <li>Vendas 20</li>
                                        </ul>
                                        <h5>
                                            <a href="#">Marvel Rivals: Nova atualização pode acabar com os jogadores
                                                tóxicos
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ asset('home/img/hero/685e076a957ad.jpg') }}">
                                        <div class="ep">99,90</div>
                                        {{-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Disponível 203</li>
                                            <li>Vendas 20</li>
                                        </ul>
                                        <h5>
                                            <a href="#">Marvel Rivals: Nova atualização pode acabar com os jogadores
                                                tóxicos
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="live__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Valorant</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">Visualizar todos<span
                                            class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ asset('home/img/hero/685cb13408e8a.jpg') }}">
                                        <div class="ep">99,90</div>
                                        {{-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Disponível 203</li>
                                            <li>Vendas 20</li>
                                        </ul>
                                        <h5>
                                            <a href="#">Marvel Rivals: Nova atualização pode acabar com os jogadores
                                                tóxicos
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ asset('home/img/hero/f62a68a6eca83b13a24eaf0ef6148b03.sm.webp') }}">
                                        <div class="ep">99,90</div>
                                        {{-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Disponível 203</li>
                                            <li>Vendas 20</li>
                                        </ul>
                                        <h5>
                                            <a href="#">Marvel Rivals: Nova atualização pode acabar com os jogadores
                                                tóxicos
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ asset('home/img/hero/685e076a957ad.jpg') }}">
                                        <div class="ep">99,90</div>
                                        {{-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Disponível 203</li>
                                            <li>Vendas 20</li>
                                        </ul>
                                        <h5>
                                            <a href="#">Marvel Rivals: Nova atualização pode acabar com os jogadores
                                                tóxicos
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="section-title">
                            <h4>Em destaque</h4>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="btn__all">
                            <a href="#" class="primary-btn">Vizualizar todos* <span class="arrow_right"></span></a>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('home/img/hero/685cb13408e8a.jpg') }}">
                                    <div class="ep">99,90</div>
                                    {{-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Disponível 203</li>
                                        <li>Vendas 20</li>
                                    </ul>
                                    <h5>
                                        <a href="#">Marvel Rivals: Nova atualização pode acabar com os jogadores
                                            tóxicos
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('home/img/hero/f62a68a6eca83b13a24eaf0ef6148b03.sm.webp') }}">
                                    <div class="ep">99,90</div>
                                    {{-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Disponível 203</li>
                                        <li>Vendas 20</li>
                                    </ul>
                                    <h5>
                                        <a href="#">Marvel Rivals: Nova atualização pode acabar com os jogadores
                                            tóxicos
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('home/img/hero/685e076a957ad.jpg') }}">
                                    <div class="ep">99,90</div>
                                    {{-- <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li>Disponível 203</li>
                                        <li>Vendas 20</li>
                                    </ul>
                                    <h5>
                                        <a href="#">Marvel Rivals: Nova atualização pode acabar com os jogadores
                                            tóxicos
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
