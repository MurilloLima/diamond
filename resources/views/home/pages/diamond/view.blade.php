@extends('home.layouts.app')
@section('title', 'view')
@section('content')
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__title">
                        <h6>{{ $data->created_at }}<span></span></h6>
                        <h2>{{ $data->name }}</h2>
                        <div class="blog__details__social">
                            <a href="#" class="facebook"><i class="fa fa-facebook-square"></i> Facebook</a>
                            <a href="#" class="pinterest"><i class="fa fa-pinterest"></i> Pinterest</a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin-square"></i> Linkedin</a>
                            <a href="#" class="twitter"><i class="fa fa-twitter-square"></i> Twitter</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="blog__details__pic">
                        <img src="{{ asset('upload/' . $data->img) }}" width="600px" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__text">
                            <p>{{ $data->desc }}</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
