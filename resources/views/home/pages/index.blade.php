@extends('home.layouts.app')
@section('title', 'Home')

@section('content')
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('home.layouts.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('home.layouts.nav2')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card corona-gradient-card">
                                <div class="card-body py-0 px-0 px-sm-3">
                                    <div class="row align-items-center">
                                        <div class="col-5 col-sm-7 col-xl-12 p-3">
                                            {{-- <h4 class="mb-1 mb-sm-0">Want even more features?</h4> --}}
                                            <a href="" style="font-weight: bold; color: #191C24">
                                                <img src="{{ asset('home/assets/images/icon/steam_icon.png') }}"
                                                    width="30" alt="">
                                            </a>
                                            <a href="" style="padding: 10px; font-weight: bold; color: #191C24">
                                                <img src="{{ asset('home/assets/images/icon/fortnite.png') }}"
                                                    width="30" alt="">
                                            </a>
                                            <a href="" style="padding: 10px">
                                                <img src="{{ asset('home/assets/images/icon/Minecraft_Bedrock_2023.webp') }}"
                                                    width="30" alt="">
                                            </a>
                                            <a href="" style="padding: 10px">
                                                <img src="{{ asset('home/assets/images/icon/riot.png') }}" width="30"
                                                    alt="">
                                            </a>
                                            <a href="" style="padding: 10px">
                                                <img src="{{ asset('home/assets/images/icon/Telegram_logo.svg.webp') }}"
                                                    width="30" alt="">
                                            </a>
                                            <a href="" style="padding: 10px">
                                                <img src="{{ asset('home/assets/images/icon/discord.png') }}" width="30"
                                                    alt="">
                                            </a>
                                            <a href="" style="padding: 10px">
                                                <img src="{{ asset('home/assets/images/icon/12222588.png') }}"
                                                    width="30" alt="">
                                            </a>

                                            <a href="" style="padding: 10px">
                                                <img src="{{ asset('home/assets/images/icon/uplay.png') }}" width="30"
                                                    alt="">
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
                                        <h4 class="card-title mb-1">Open Projects</h4>
                                        <p class="text-muted mb-1">Your data status</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="preview-list">
                                                <div class="preview-item border-bottom">
                                                    <div class="preview-thumbnail">
                                                        <div class="preview-icon bg-primary">
                                                            <i class="mdi mdi-file-document"></i>
                                                        </div>
                                                    </div>
                                                    <div class="preview-item-content d-sm-flex flex-grow">
                                                        <div class="flex-grow">
                                                            <h6 class="preview-subject">Admin dashboard design</h6>
                                                            <p class="text-muted mb-0">Broadcast web app mockup</p>
                                                        </div>
                                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                            <p class="text-muted">15 minutes ago</p>
                                                            <p class="text-muted mb-0">30 tasks, 5 issues </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="preview-item border-bottom">
                                                    <div class="preview-thumbnail">
                                                        <div class="preview-icon bg-success">
                                                            <i class="mdi mdi-cloud-download"></i>
                                                        </div>
                                                    </div>
                                                    <div class="preview-item-content d-sm-flex flex-grow">
                                                        <div class="flex-grow">
                                                            <h6 class="preview-subject">Wordpress Development</h6>
                                                            <p class="text-muted mb-0">Upload new design</p>
                                                        </div>
                                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                            <p class="text-muted">1 hour ago</p>
                                                            <p class="text-muted mb-0">23 tasks, 5 issues </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="preview-item border-bottom">
                                                    <div class="preview-thumbnail">
                                                        <div class="preview-icon bg-info">
                                                            <i class="mdi mdi-clock"></i>
                                                        </div>
                                                    </div>
                                                    <div class="preview-item-content d-sm-flex flex-grow">
                                                        <div class="flex-grow">
                                                            <h6 class="preview-subject">Project meeting</h6>
                                                            <p class="text-muted mb-0">New project discussion</p>
                                                        </div>
                                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                            <p class="text-muted">35 minutes ago</p>
                                                            <p class="text-muted mb-0">15 tasks, 2 issues</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="preview-item border-bottom">
                                                    <div class="preview-thumbnail">
                                                        <div class="preview-icon bg-danger">
                                                            <i class="mdi mdi-email-open"></i>
                                                        </div>
                                                    </div>
                                                    <div class="preview-item-content d-sm-flex flex-grow">
                                                        <div class="flex-grow">
                                                            <h6 class="preview-subject">Broadcast Mail</h6>
                                                            <p class="text-muted mb-0">Sent release details to team</p>
                                                        </div>
                                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                            <p class="text-muted">55 minutes ago</p>
                                                            <p class="text-muted mb-0">35 tasks, 7 issues </p>
                                                        </div>
                                                    </div>
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
