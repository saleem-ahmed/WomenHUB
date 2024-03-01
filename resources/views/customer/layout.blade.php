<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Women Hub.</title>

     <!-- Favicon -->
     <link href="{{ asset('landing/favicon.png')}}" rel="icon">

    <link rel="stylesheet" href="{{ asset('customer/css/style.css') }}">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

     <!-- toastr -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
</head>

<body>

@section('header')
    <div class="navbar">
        <div class="container">
            <div class="row w-100">
                <div class="logo col-6 d-flex justify-content-start align-items-center">
                    <img src="{{ asset('customer/img/logo.png') }}" alt="">
                </div>

                <div class="user col-6 d-flex justify-content-end align-items-center">
                    <span>{{ Auth::user()->fullname }}</span>
                    <div class="btn-group">
                        <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="{{ asset('customer/img/user.png') }}" alt="">
                        </button>
                        <div class="dropdown-menu px-2">
                            <li><a href="" style="font-size: 16px !important"><i class="px-2 bi bi-person-circle"></i> Profile</a></li>
                            <li> <a href="" style="font-size: 16px !important"><i class="px-2 bi bi-gear"></i>Setting</a></li>
                            <li><a href="{{ route('logout') }}" style="font-size: 16px !important"><i class="px-2 bi bi-box-arrow-right"></i> Logout</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @show

<!-- CONTENT DEFINE START -->
<div class="content">
                   @section('content')
                   @show
               </div>
               <!-- CONTENT DEFINE END -->
@section('footer')

 <!-- Footer Start -->
 <div class="container-fluid bg-dark footer mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <img height="65" class="pb-2" src="{{ asset('landing/img/1-01-b.png') }}" alt="">
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
                    <p><i class="fa fa-envelope me-3"></i>womenhub.@gmail.com</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">Home</a>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                </div>
            </div>
        </div>
    <!-- Footer End -->
    @show


     <!-- Back to Top -->
     <a href="#" class="btn btn-lg btn-lg-square rounded-circle back-to-top" style="background: #e8e8e8"><i
            class="bi bi-arrow-up"></i></a>
    <script>
        // Back to top button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $('.back-to-top').fadeIn('slow');
            } else {
                $('.back-to-top').fadeOut('slow');
            }
        });
        $('.back-to-top').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 1500, 'easeInOutExpo');
            return false;
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

      <!-- toastr js -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 5000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });
    </script>

    </body>

</html> -->
