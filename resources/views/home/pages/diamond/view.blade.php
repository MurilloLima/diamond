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
                        @foreach ($sms as $item)
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="{{ asset('home/img/anime/review-1.jpg') }}" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>{{ $item->name }} - <span>{{ $item->created_at }}</span></h6>
                                    <p>{{ $item->sms }}</p>
                                </div>
                            </div>
                        @endforeach


                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            @if ($errors->any())
                                <div class="alert alert-danger text-center" style="margin: 10px;">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li style="text-align: center">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('msg'))
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <div class="alert alert-success text-center" style="margin: 10px;">
                                            {{ session('msg') }}
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>

                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>Deixe a sua pergunta</h5>
                        </div>
                        <form action="{{ route('home.pages.sms.store') }}" method="POST">
                            @csrf
                            <input type="text" name="name" placeholder="Nome" class="form-control"> <br>
                            <input type="hidden" name="id_diamond" value="{{ $data->id }}">
                            <textarea name="sms" placeholder="Sua pergunta">

                            </textarea>
                            <button type="submit"><i class="fa fa-location-arrow"></i> Enviar</button>
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
