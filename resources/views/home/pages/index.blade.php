@extends('home.layouts.app')
@section('title', 'Home')

@section('content')
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('home.layouts.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img
                            src="{{ asset('home/assets/images/logo-mini.svg') }}" alt="logo"></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Pesquisar">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown d-none d-lg-block">
                            <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown"
                                data-toggle="dropdown" aria-expanded="false" href="#">+ Criar conta</a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="createbuttonDropdown">
                                <h6 class="p-3 mb-0">Projects</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-file-outline text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Software Development</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-web text-info"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">UI Development</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-layers text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Software Testing</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all projects</p>
                            </div>
                        </li>
                        {{-- <li class="nav-item nav-settings d-none d-lg-block">
                            <a class="nav-link" href="#">
                                Vender conta
                            </a>
                        </li> --}}
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                                data-toggle="dropdown" aria-expanded="false">
                                Vender conta
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="messageDropdown">
                                {{-- <h6 class="p-3 mb-0">Vender</h6> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('home/assets/images/icon/steam_icon.png') }}" alt="image"
                                            class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Vapor</p>
                                        {{-- <p class="text-muted mb-0"> 1 Minutes ago </p> --}}
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('home/assets/images/icon/discord.png') }}" alt="image"
                                            class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Discórdia</p>
                                        {{-- <p class="text-muted mb-0"> 15 Minutes ago </p> --}}
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('home/assets/images/icon/Telegram_logo.svg.webp') }}"
                                            alt="image" class="rounded-circle profile-pic">
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Telegram</p>
                                        {{-- <p class="text-muted mb-0"> 18 Minutes ago </p> --}}
                                    </div>
                                </a>
                                {{-- <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">4 new messages</p> --}}
                            </div>
                        </li>
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                                data-toggle="dropdown">
                                Inundação em massa
                                {{-- <span class="count bg-danger"></span> --}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="notificationDropdown">
                                {{-- <h6 class="p-3 mb-0">Notifications</h6> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <img src="{{ asset('home/assets/images/icon/steam_icon.png') }}" alt="image"
                                                class="rounded-circle profile-pic">
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Vapor</p>
                                        {{-- <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today --}}
                                        </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <img src="{{ asset('home/assets/images/icon/discord.png') }}" alt="image"
                                                class="rounded-circle profile-pic">
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Discórdia</p>
                                        {{-- <p class="text-muted ellipsis mb-0"> Update dashboard </p> --}}
                                    </div>
                                </a>
                                {{-- <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-link-variant text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Launch Admin</p>
                                        <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all notifications</p> --}}
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            @if (auth()->user() === true)
                                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                    <div class="navbar-profile">
                                        <img class="img-xs rounded-circle"
                                            src="{{ asset('home/assets/images/faces/face15.jpg') }}" alt="">
                                        <p class="mb-0 d-none d-sm-block navbar-profile-name">
                                            Marcio Kein
                                        </p>
                                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                    aria-labelledby="profileDropdown">
                                    <h6 class="p-3 mb-0">Profile</h6>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-dark rounded-circle">
                                                <i class="mdi mdi-settings text-success"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject mb-1">Settings</p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-dark rounded-circle">
                                                <i class="mdi mdi-logout text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject mb-1">Log out</p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <p class="p-3 mb-0 text-center">Advanced settings</p>
                                </div>
                            @else
                                <a href="" style="color: #FFF; text-decoration:none;">Entrar</a>
                            @endif

                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card corona-gradient-card" style="margin-top: 50px">
                                <div class="card-body py-0 px-0 px-sm-3">
                                    <div class="row align-items-center">
                                        <div class="col-5 col-sm-7 col-xl-12 p-3">
                                            <table class="table">

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="" style="padding: 10px">
                                                                <img src="{{ asset('home/assets/images/icon/riot.png') }}"
                                                                    width="30" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="" style="padding: 10px">
                                                                <img src="{{ asset('home/assets/images/icon/Telegram_logo.svg.webp') }}"
                                                                    width="30" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="" style="font-weight: bold; color: #191C24">
                                                                <img src="{{ asset('home/assets/images/icon/steam_icon.png') }}"
                                                                    width="30" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href=""
                                                                style="padding: 10px; font-weight: bold; color: #191C24">
                                                                <img src="{{ asset('home/assets/images/icon/fortnite.png') }}"
                                                                    width="30" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="" style="padding: 10px">
                                                                <img src="{{ asset('home/assets/images/icon/Minecraft_Bedrock_2023.webp') }}"
                                                                    width="30" alt="">
                                                            </a>
                                                        </td>


                                                    </tr>
                                                    <tr>

                                                        <td>53275532</td>
                                                        <td>15 May 2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td>John</td>
                                                        <td>53275533</td>
                                                        <td>14 May 2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Peter</td>
                                                        <td>53275534</td>
                                                        <td>16 May 2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dave</td>
                                                        <td>53275535</td>
                                                        <td>20 May 2017</td>
                                                    </tr>
                                                </tbody>
                                            </table>




                                            {{-- <h4 class="mb-1 mb-sm-0">Want even more features?</h4> --}}





                                            <a href="" style="padding: 10px">
                                                <img src="{{ asset('home/assets/images/icon/discord.png') }}"
                                                    width="30" alt="">
                                            </a>
                                            <a href="" style="padding: 10px">
                                                <img src="{{ asset('home/assets/images/icon/12222588.png') }}"
                                                    width="30" alt="">
                                            </a>

                                            <a href="" style="padding: 10px">
                                                <img src="{{ asset('home/assets/images/icon/uplay.png') }}"
                                                    width="30" alt="">
                                                <a href="" style="padding: 10px">
                                                    <img src="{{ asset('home/assets/images/icon/tiktok.svg.png') }}"
                                                        width="30" alt="">
                                                </a>
                                                <a href="" style="padding: 10px">
                                                    <img src="{{ asset('home/assets/images/icon/rob.svg.png') }}"
                                                        width="30" alt="">
                                                </a>
                                                <a href="" style="padding: 10px">
                                                    <img src="{{ asset('home/assets/images/icon/origin.webp') }}"
                                                        width="30" alt="">
                                                </a>
                                                <a href="" style="padding: 10px">
                                                    <img src="{{ asset('home/assets/images/icon/rockset.png') }}"
                                                        width="30" alt="">
                                                </a>
                                                <a href="" style="padding: 10px">
                                                    <img src="{{ asset('home/assets/images/icon/wot_squircle-512.webp') }}"
                                                        width="30" alt="">
                                                </a>
                                                <a href="" style="padding: 10px">
                                                    <img src="{{ asset('home/assets/images/icon/3209955.png') }}"
                                                        width="30" alt="">
                                                </a>
                                                <a href="" style="padding: 10px">
                                                    <img src="{{ asset('home/assets/images/icon/004.png') }}"
                                                        width="30" alt="">
                                                </a>
                                                <a href="" style="padding: 10px">
                                                    <img src="{{ asset('home/assets/images/icon/warface_squircle-512.webp') }}"
                                                        width="30" alt="">
                                                </a>
                                                <a href="" style="padding: 10px">
                                                    <img src="{{ asset('home/assets/images/icon/war-thunder.png') }}"
                                                        width="30" alt="">
                                                </a>
                                                <a href="" style="padding: 0px">
                                                    <img src="{{ asset('home/assets/images/icon/Electronic-Arts-Logo.svg.png') }}"
                                                        width="30" alt="">
                                                </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row justify-content-between">
                                        <img src="{{ asset('home/images/icon/telegram.png') }}" width="50"
                                            alt="">
                                        <h4 class="card-title mb-1">Telegrama | ****** | pesca</h4>
                                        <p class="text-muted mb-1">300</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="preview-list">
                                                <div class="preview-item border-bottom">
                                                    <a href="">Acesso ao correio (autoreg)</a>
                                                </div>
                                                <div class="preview-item">
                                                    <div class="preview-thumbnail">
                                                        <div class="preview-icon bg-warning">
                                                            <i class="mdi mdi-chart-pie"></i>
                                                        </div>
                                                    </div>
                                                    <div class="preview-item-content d-sm-flex flex-grow">
                                                        <div class="flex-grow">
                                                            <h6 class="preview-subject">UI Design</h6>
                                                            <p class="text-muted mb-0">New application planning</p>
                                                        </div>
                                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                            <p class="text-muted">50 minutes ago</p>
                                                            <p class="text-muted mb-0">27 tasks, 4 issues </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('home.layouts.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
