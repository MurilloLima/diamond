@extends('home.layouts.app')
@section('title', 'Login')
@section('content')
    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Acesso</h3>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="input__item">
                                <input type="text" name="email" placeholder="Email">
                                <span class="icon_mail"></span>
                                <x-input-error :messages="$errors->get('email')" style="color: #E53637;" class="mt-2" />
                            </div>
                            <div class="input__item">
                                <input type="password" name="password" placeholder="Password">
                                <span class="icon_lock"></span>
                                <x-input-error :messages="$errors->get('password')" style="color: #E53637;" class="mt-2" />

                            </div>
                            <button type="submit" class="site-btn">Entrar</button>
                        </form>
                        <a href="#" class="forget_pass">Esqueci sua senha?</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Não tem uma conta?</h3>
                        <a href="#" class="primary-btn">
                            Cadastre-se agor
                        </a>
                    </div>
                </div>
            </div>
            {{-- <div class="login__social">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="login__social__links">
                            <span>or</span>
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With
                                        Facebook</a></li>
                                <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a>
                                </li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Login Section End -->
@endsection
