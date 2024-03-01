<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Women Kitchen.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('landing/favicon.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('landing/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">
</head>

<body>

    @section('header')
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
       <!-- Topbar Start -->
    <div class="top-bar container-fluid bg-success py-3 px-0 d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-12 px-5 text-center">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small>Become a Seller?
                      <a href="{{ route('register') }}">Seller Sign Up</a>
                      {{-- <a href="{{ route('register') }}"><button class="btn top_btn" >Chef Sign Up</button></a> --}}
                    </small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top:0px">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0 d-flex align-items-center">
                <img src="{{ asset('landing/img/1-01.png') }}" alt="">
                <span style="color: #30fec3; font-weight:700; font-size:18px;">kitchen</span>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="" class="nav-item nav-link onscroll">Home</a>
                    <a href="" class="nav-item nav-link onscroll">About Us</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link onscroll">Contact</a>
                    <a href="{{ route('login') }}" class="nav-item nav-link "><button class="btn login_btn onscroll" >Login</button></a>
                    <a href="{{ route('customer.register') }}" class="nav-item nav-link "> <button class="btn reg_btn onscroll" >Register </button></a>

                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @show

<!-- CONTENT DEFINE START -->
<div class="content">
                   @section('content')
                   @show
               </div>
               <!-- CONTENT DEFINE END -->
@section('footer')
   <!-- Footer Start -->
   <div class="container-fluid bg-dark footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center">
                        <img height="65" class="pb-2" src="{{ asset('landing/img/1-01-b.png') }}" alt=""><span style="color: #30fec3; font-weight:700; font-size:18px;">kitchen</span>
                    </div>
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p><i class="fa fa-map-marker-alt me-3"></i>KIU Gilgit</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+92311-5815204</p>
                    <p><i class="fa fa-envelope me-3"></i>womenkitchen.@gmail.com</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">Home</a>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                </div>
                {{-- <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div> --}}
            </div>
        </div>
    <!-- Footer End -->
    @show


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-lg-square rounded-circle back-to-top" style="background: #30fec3"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('landing/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landing/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('landing/js/main.js') }}"></script>
</body>

</html>
