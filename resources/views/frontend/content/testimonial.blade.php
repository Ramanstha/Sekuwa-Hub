@extends('frontend.master')
@section('title','Testimonial')
@section('content')
<div class="container-xxl position-relative p-0">
    <div class="container-xxl py-5 bg-dark hero-header">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonial</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{route('Home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('service')}}">Service</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h3 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h3>
            <h1 class="mb-5">Our Clients Say!!!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            @foreach ($client as $client)
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>{{$client->description}}</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle"
                        src="{{asset('storage/client/'.$client->image)}}" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">{{$client->name}}</h5>
                        <small>{{$client->title}}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection