@extends('home.layouts.app')
@section('title', $data->name)
@section('content')
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{ asset('upload/' . $data->img) }}" alt="" width="440">
                        {{-- <div class="anime__details__pic set-bg" data-setbg="{{ asset('upload/' . $data->img) }}"
                            style="background-image: url({{ asset('upload/' . $data->img) }});">
                        </div> --}}

                    </div>
                    <div class="col-lg-7">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>{{ $data->name }}</h3>
                                {{-- <span>フェイト／ステイナイト, Feito／sutei naito</span> --}}
                                <div class="view" style="color: #FFF; font-size: 12px">
                                    Vendidos {{ $data->vendidos }} |
                                    Disponiveis {{ $data->disponiveis }}
                                </div>
                                <div class="comment">
                                </div>
                            </div>

                            <p>{{ $data->desc }}</p>

                            <div class="anime__details__btn">
                                <a href="#" class="follow-btn"><i class="fa fa-heart-o"></i> ENTREGA AUTOMÁTICA</a>
                                <a href="#" class="watch-btn"><span>COMPRAR</span> <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>PERGUNTAS</h5>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="{{ asset('home/img/anime/review-1.jpg') }}" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Chris Curry - <span>1 Hour ago</span></h6>
                                <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                    "demons" LOL</p>
                            </div>
                        </div>

                    </div>
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>Deixe a sua pergunta</h5>
                        </div>
                        <form action="#">
                            <textarea placeholder="Sua pergunta"></textarea>
                            <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="anime__details__sidebar">
                        <div class="section-title">
                            <h5>Você pode gostar...</h5>
                        </div>
                        @foreach ($random as $item)
                            <div class="product__sidebar__view__item set-bg">
                                <a href="{{ route('home.pages.diamond.view', [$item->slug]) }}"
                                    data-setbg="{{ asset('upload/' . $item->img) }}"
                                    style="background-image: url({{ asset('upload/' . $item->img) }});">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    {{-- <h5><a href="#">{{ $item->name }}</a></h5> --}}
                                </a>
                                <img src="{{ asset('upload/' . $item->img) }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
