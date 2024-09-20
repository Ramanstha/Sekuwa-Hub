@extends('frontend.master')
@section('title','Special')
@section('content')
<div class="container-xxl position-relative p-0">
    <div class="container-xxl py-5 bg-dark hero-header">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Our Special</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="{{route('Home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('menu')}}">Menu</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Our Special</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="section-title ff-secondary text-center text-primary fw-normal">Top Selling</h3>
            <h1 class="mb-5">All Time Favourites</h1>
        </div>
        <div class="row g-4">
            @foreach ($special as $special)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="{{asset('storage/special/'.$special->image)}}" alt="">
                    </div>
                    <h5 class="mb-0 text-capitalize">{{$special->name}}</h5>
                    <small>{{$special->description}}</small>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection