@extends('frontend.master')
@section('title','Home')
@section('content')
<div class="container-xxl position-relative p-0">
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                @if (!empty($banner))
                <div class="col-lg-6 text-center text-lg-start">
                    <h2 class="display-5 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h2>
                    <h1 class="display-2 text-white animated slideInLeft text-capitalize mb-4 pb-2">{{$banner->title}}
                    </h1>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid" src="{{asset('storage/banner/'.$banner->image)}}" alt="">
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- About Start -->
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
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>{{$sitesetting->name}}</h1>
                <p class="mb-4">{!!Str::limit($sitesetting->description,350)!!}</p>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Gallery Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Gallary</h5>
            <h1 class="mb-5">Some Clicks</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-transparent border p-4">
                    <img class="" src="{{asset('frontend/img/about-1.jpg')}}" alt="Gallery Images" width="100%">
                </div>
                <div class="testimonial-item bg-transparent border p-4">
                    <img class="" src="{{asset('frontend/img/about-2.jpg')}}" alt="Gallery Images" width="100%">
                </div>
                <div class="testimonial-item bg-transparent border p-4">
                    <img class="" src="{{asset('frontend/img/about-3.jpg')}}" alt="Gallery Images" width="100%">
                </div>
                <div class="testimonial-item bg-transparent border p-4">
                    <img class="" src="{{asset('frontend/img/about-4.jpg')}}" alt="Gallery Images" width="100%">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- gallery End -->

<!-- Menu Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
            <h1 class="mb-5">Most Popular Items</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                        href="#tab-1">
                        <i class="fa fa-coffee fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Popular</small>
                            <h6 class="mt-n1 mb-0">Breakfast</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                        <i class="fa fa-hamburger fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Special</small>
                            <h6 class="mt-n1 mb-0">Launch</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <i class="fa fa-utensils fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Lovely</small>
                            <h6 class="mt-n1 mb-0">Dinner</h6>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($menu as $menu)
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                {{-- <img class="flex-shrink-0 img-fluid rounded" src="{{asset('frontend/img/menu-1.jpg')}}"
                                alt=""
                                style="width: 80px;"> --}}
                                <div class="w-100 d-flex flex-column text-start ps-4 mb-5">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span class="text-capitalize">{{$menu->name}}</span>
                                        <span class="text-primary">{{$menu->price}} per</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->
{{-- <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Reservation Start -->

<!-- Top selling Start -->
<div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Top Selling</h5>
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
<!-- selling End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
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