@extends('front-end.starter.master')
@section('header')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Services</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="{{route('index')}}">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Services</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

@endsection()

@section('content')
    <!-- Service Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Services</h4>
                <h1 class="display-4">Services we provide</h1>
            </div>
            <div class="row">
            @forelse($services as $service)
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{asset($service->image)}}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4>{{$service->title}}</h4>
                            <p class="m-0">{{$service->description}}</p>
                        </div>
                    </div>
                </div>

                @empty

                @endforelse
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection()