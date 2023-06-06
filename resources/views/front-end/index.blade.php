@extends('front-end.starter.master')
@section('active')
<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="{{route('index')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                    <a href="{{route('services')}}" class="nav-item nav-link">Service</a>
                    <a href="{{route('home.menu')}}" class="nav-item nav-link">Menu</a>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    <a href="{{route('clients')}}" class="nav-item nav-link">Testimonials</a>
                    @guest()
                    <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
                    @endguest
                    @auth
                    <a class="nav-item nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                @endauth
                </div>
                @endsection()
@section('header')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('front/img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">We Have Been Serving</h2>
                        <h1 class="display-1 text-white m-0">COFFEE</h1>
                        <h2 class="text-white m-0">* SINCE 1950 *</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('front/img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">We Have Been Serving</h2>
                        <h1 class="display-1 text-white m-0">COFFEE</h1>
                        <h2 class="text-white m-0">* SINCE 1950 *</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('front/img/carousel-3.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">We Have Been Serving</h2>
                        <h1 class="display-1 text-white m-0">COFFEE</h1>
                        <h2 class="text-white m-0">* SINCE 1950 *</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('front/img/carousel-4.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">We Have Been Serving</h2>
                        <h1 class="display-1 text-white m-0">COFFEE</h1>
                        <h2 class="text-white m-0">* SINCE 1950 *</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
@endsection()
@section('content')
<div>
    <div class="container-fluid pt-5">
        <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5">
            <h1 class="display-4">Our products</h1>
            </div>
            <div class="row"  style='margin-top:60px;'>
                <div class="col-lg-6">
                    <h1 class="mb-5">Hot Coffee</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('front/img/menu-1.jpg')}}" alt="">
                            <h5 class="menu-price">$5</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Black Coffee</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor
                            <div>
                                    <a class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Request Now</a>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('front/img/menu-5.jpg')}}" alt="">
                            <h5 class="menu-price">$5</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Espresso coffee </h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor
                            <div>
                                    <a class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Request Now</a>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('front/img/menu-4.jpg')}}" alt="">
                            <h5 class="menu-price">$5</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Dark roasts coffee</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor
                            <div>
                                    <a class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Request Now</a>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('front/img/menu-2.jpg')}}" alt="">
                            <h5 class="menu-price">$7</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Chocolete Coffee</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor 
                            <div>
                                    <a class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Request Now</a>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('front/img/menu-3.jpg')}}" alt="">
                            <h5 class="menu-price">$9</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Coffee With Milk</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor
                            <div>
                                    <a class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Request Now</a>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5">Cold Coffee</h1>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('front/img/menu-1.jpg')}}" alt="">
                            <h5 class="menu-price">$5</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Black Coffee</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor
                            <div>
                                    <a class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Request Now</a>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('front/img/menu-5.jpg')}}" alt="">
                            <h5 class="menu-price">$5</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Espresso coffee </h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor
                            <div>
                                    <a class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Request Now</a>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('front/img/menu-4.jpg')}}" alt="">
                            <h5 class="menu-price">$5</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Dark roasts coffee</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor
                            <div>
                                    <a class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Request Now</a>
                                </div>
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('front/img/menu-2.jpg')}}" alt="">
                            <h5 class="menu-price">$7</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Chocolete Coffee</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor
                            <div>
                                    <a class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Request Now</a>
                                </div>
                            </p>
                        </div>
                    </div>
                    
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{asset('front/img/menu-3.jpg')}}" alt="">
                            <h5 class="menu-price">$9</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Coffee With Milk</h4>
                            <p class="m-0">Sit lorem ipsum et diam elitr est dolor sed duo guberg sea et et lorem dolor
                            <div>
                                    <a class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Request Now</a>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection()