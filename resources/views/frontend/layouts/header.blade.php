<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        @if (!empty($sitesetting))
        <a href="{{route('Home')}}" class="navbar-brand d-flex p-0">
            <h1 class="ff-secondary text-primary m-0"><i class="fa fa-utensils me-3"></i>{{$sitesetting->name}}</h1>
            {{-- <img src="{{asset('storage/sitesetting/'.$sitesetting->logo)}}" class="ml-3" alt="Logo"> --}}
        </a>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{route('Home')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('about.us')}}" class="nav-item nav-link">About</a>
                <a href="{{route('service')}}" class="nav-item nav-link">Service</a>
                <a href="{{route('menu')}}" class="nav-item nav-link">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="#" class="dropdown-item">Gallery</a>
                        <a href="{{route('special')}}" class="dropdown-item">Our Special</a>
                        <a href="{{route('testimonial')}}" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
</div>