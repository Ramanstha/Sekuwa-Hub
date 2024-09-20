@extends('frontend.master')
@section('title','About-us')
@section('content')
<div class="container-xxl position-relative p-0">
    <div class="container-xxl py-5 bg-dark hero-header">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About-Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{route('Home')}}">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Aboutus</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="section-title ff-secondary text-center text-primary fw-normal">About-Us</h3>
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li>Mission /</li>
                <li>Vision</li>
            </ol>
        </div>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                    src="{{asset('frontend/img/about-1.jpg')}}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                    src="{{asset('frontend/img/about-2.jpg')}}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                    src="{{asset('frontend/img/about-3.jpg')}}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="{{asset('frontend/img/about-4.jpg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        @if (!empty($sitesetting))
                        {{-- <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5> --}}
                        {{-- <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>{{$sitesetting->name}}</h1> --}}
                        <p>{{$sitesetting->description}}</p>
                        {{-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> --}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection