@extends('home.layouts.app')
@section('title', 'Login')
@section('content')
    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Login</h2>
                        <p>Seja bem vindo!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Login</h3>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="input__item">
                                <input type="text" name="email" placeholder="Email address">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" name="password" placeholder="Password">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn">Entrar agora</button>
                        </form>
                        <a href="#" class="forget_pass">Esqueceu sua senha?</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>
                            Não tem uma conta?
                        </h3>
                        <a href="#" class="primary-btn">Cadastre-se agora</a>
                    </div>
                </div>
            </div>
            <div class="login__social">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="login__social__links">
                            <span>ou</span>
                            <ul>
                                <li>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With
                                        Facebook</a>
                                </li>
                                <li>
                                    <a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a>
                                </li>
                                <li>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->

@endsection
