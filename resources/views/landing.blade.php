@extends('landinglayout')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('landing/img/Rectangle 18.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 headingbox ">
                                    <h1 class="display-5 animated slideInDown heading ">You can Buy , Sell local items you want!!</h1>
                                    <button class="btn order_btn">Order Now</button>
                                    <div class="container menubox pt-5">
                                        <div class="row cardbox">
                                            <div class="col-sm col-xs-12 box1">
                                                <img class="icons" src="{{ asset('landing/img/GroupIcon1.png') }}"
                                                    alt="" width="30px">
                                                <h5>Choose a items</h5>
                                                <span class="text">Choose your desire menu</span>
                                            </div>
                                            <div class="col-sm col-xs-12 box1">
                                                <img class="icons" src="{{ asset('landing/img/GroupIcon2.png') }}"
                                                    alt="" width="30px">
                                                <h5>Place your Order</h5>
                                                <span class="text">Choose your desire menu</span>
                                            </div>
                                            <div class="col-sm col-xs-12">
                                                <img class="icons" src="{{ asset('landing/img/bi_emoji-smile.png') }}"
                                                    alt="" width="30px">
                                                <h5>Enjoy your Product</h5>
                                                <span class="text">Choose your desire menu</span>
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
        <!-- Carousel End -->


        <!-- About Start -->

        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xs-12 " id="aboutpara">
                    {{-- <h1 class="mb-4 text1 pt-3">Do you Love Homemade Food</h1> --}}
                    <h2 class="mb-3">
                        Do you Love Homemade Food
                        {{-- <img src="{{ asset('customer/img/after.png') }}" alt=""> --}}
                    </h2>
                    {{-- <hr class="hr1">
                    </hr>
                    <hr class="hr2">
                    </hr> --}}
                    <h4 class="mb-4 text2">Best Organic food</h4>
                    <p>Join us as a seller and start selling homemade items online.
                        women hub is a true home based business that empowers food passionate f
                        amilies by giving them an opportunity to sell homemade items on the internet.
                        Join women hub family today and start making money right from your
                        home.
                        <br />
                        <br />
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam placeat fuga doloribus rem
                        distinctio dolore
                        facere, similique officiis dolor vitae cumque aspernatur dicta sit tenetur. Sapiente corporis error
                        aliquam ut!
                    </p>
                </div>
                <div class="col-lg-6 col-xs-12" id="imgContainer">
                    <img src="{{ asset('landing/img/11-1.jpg') }}" alt="" width="100%" height="100%">
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Feature Start -->
        <div class="container-fluid bg-light mb-5 slider">
            <div class="container-fluid after">
                <h2 class="mb-3">
                    Today’s Special Offers
                    {{-- <img src="{{ asset('customer/img/after.png') }}" alt=""> --}}
                </h2>
                {{-- <h1 class="mb-3">Today’s Special Offers</h1> --}}
                {{-- <hr class="hr1">
                </hr>
                <hr class="hr2">
                </hr> --}}
                <!-- <div class="section-header text-start mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"> -->

            </div>
            <div class="owl-carousel testimonial-carousel-item wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-itembox position-relative bg-white  mt-4">
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 " src="{{ asset('landing/img/Rectangle 1152 (1).png') }}" alt="">
                        <div class="ms-3">
                            <!-- <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span> -->
                        </div>
                    </div>
                    <div class="p-2 text-center">
                        <h4>Chicken kadai </h4>
                        <h6 class="price_tag">Price : 150 RS</h6>
                        <p class="mb-2 para">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                        <button class="btn order_btn">Order Now</button>

                    </div>
                </div>
                <div class="testimonial-itembox position-relative bg-white mt-4">
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0" src="{{ asset('landing/img/Rectangle 1152 (2).png') }}" alt="">
                        <div class="ms-3">
                            <!-- <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span> -->
                        </div>
                    </div>
                    <div class="p-2 text-center">
                        <h4>Chicken kadai </h4>
                        <h6 class="price_tag">Price : 150 RS</h6>
                        <p class="mb-2 para">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                        <button class="btn order_btn">Order Now</button>

                    </div>
                </div>
                <div class="testimonial-itembox position-relative bg-white mt-4">
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 " src="{{ asset('landing/img/Rectangle 1152 (3).png') }}" alt="">
                        <div class="ms-3">
                            <!-- <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span> -->
                        </div>
                    </div>
                    <div class="p-2 text-center">
                        <h4>Chicken kadai </h4>
                        <h6 class="price_tag">Price : 150 RS</h6>
                        <p class="mb-2 para">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                        <button class="btn order_btn">Order Now</button>

                    </div>
                </div>
                <div class="testimonial-itembox position-relative bg-white mt-4">
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 " src="{{ asset('landing/img/Rectangle 1152.png') }}" alt="">
                        <div class="ms-3">
                            <!-- <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span> -->
                        </div>
                    </div>
                    <div class="p-2 text-center">
                        <h4>Chicken kadai </h4>
                        <h6 class="price_tag">Price : 150 RS</h6>
                        <p class="mb-2 para">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                        <button class="btn order_btn">Order Now</button>

                    </div>
                </div>
                <div class="testimonial-itembox position-relative bg-white mt-4">
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 " src="{{ asset('landing/img/Rectangle 1152 (3).png') }}"
                            alt="">
                        <div class="ms-3">
                            <!-- <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span> -->
                        </div>
                    </div>
                    <div class="p-2 text-center">
                        <h4>Chicken kadai </h4>
                        <h6 class="price_tag">Price : 150 RS</h6>
                        <p class="mb-2 para">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                        <button class="btn order_btn">Order Now</button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Start -->
    <div class="container-fluid py-4 mb-5 slider">
        <div class="container-fluid after">
            <h2 class="mb-3">
                Happy Customers
                {{-- <img src="{{ asset('customer/img/after.png') }}" alt=""> --}}
            </h2>
            {{-- <h1 class=" mb-3">Happy Customers</h1>
            <hr class="hr1">
            </hr>
            <hr class="hr2">
            </hr> --}}
            <!-- <div class="section-header text-start mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"> -->
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item position-relative bg-white py-5 px-3  mt-4">
                <i class="fa fa-quote-left fa-3x text-danger position-absolute top-0 start-0 mt-n4 ms-5"></i>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita
                    erat ipsum et lorem et sit.</p>
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 rounded-circle" src="{{ asset('landing/img/testimonial-1.jpg') }}"
                        alt="">
                    <div class="ms-3">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item position-relative bg-white py-5 px-3  mt-4">
                <i class="fa fa-quote-left fa-3x text-danger position-absolute top-0 start-0 mt-n4 ms-5"></i>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita
                    erat ipsum et lorem et sit.</p>
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 rounded-circle" src="{{ asset('landing/img/testimonial-2.jpg') }}"
                        alt="">
                    <div class="ms-3">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item position-relative bg-white py-5 px-3  mt-4">
                <i class="fa fa-quote-left fa-3x text-danger position-absolute top-0 start-0 mt-n4 ms-5"></i>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita
                    erat ipsum et lorem et sit.</p>
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 rounded-circle" src="{{ asset('landing/img/testimonial-3.jpg') }}"
                        alt="">
                    <div class="ms-3">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-item position-relative bg-white py-5 px-3  mt-4">
                <i class="fa fa-quote-left fa-3x text-danger position-absolute top-0 start-0 mt-n4 ms-5"></i>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita
                    erat ipsum et lorem et sit.</p>
                <div class="d-flex align-items-center">
                    <img class="flex-shrink-0 rounded-circle" src="{{ asset('landing/img/testimonial-4.jpg') }}"
                        alt="">
                    <div class="ms-3">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Testimonial End -->

    <!-- start your business -->
    <div class="container-fluid bg-light py-3 mb-5 slider">
        <div class="row  justify-content-between" style="align-items: center;">
            <div class="col-lg-6 col-md-12">
                <div class="yourbusiness">
                    <h2 class="mb-3">
                        Start Your Food Business
                        From Home
                        {{-- <img src="{{ asset('customer/img/after.png') }}" alt=""> --}}
                    </h2>
                    {{-- <h3 class="">Start Your Food Business
                        From Home</h3>
                    <hr class="hr1">
                    </hr>
                    <hr class="hr2">
                    </hr> --}}
                    {{-- <h6>Kitchen Run by Mom’s</h6> --}}
                    <p>Reference site about Lorem Ipsum,
                        giving information on its origins,
                        as well as a random Lipsum generator.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Autem voluptatem animi,nemo officiis vero unde at veritatis
                        sapiente provident molestiae rem minus aliquid delectus cumque

                    </p>
                    <a href="{{ route('register') }}"><button class="btn chef_btn">Seller Sign Up</button></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <img src="{{ asset('landing/img/a-01 1.png') }}" alt="" class="map" width="100%"
                    height="auto">
            </div>
        </div>
    </div>
    <!-- end start your business -->



    <!-- comming soon -->

    <div class="container-fluid  py-3 mb-5 slider">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-12 justify-content-center align-items-center">
                <img class="w-100" height="auto" src="{{ asset('landing/img/Group 34592.png') }}" alt="">
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="commingsoon">
                    <h2 class="mb-3">
                        The Best items Delivery App
                        {{-- <img src="{{ asset('customer/img/after.png') }}" alt=""> --}}
                    </h2>
                    {{-- <h3>The Best Food Delivery App</h3>
                    <hr class="hr1">
                    </hr>
                    <hr class="hr2">
                    </hr> --}}
                    {{-- <h6>Kitchen Run by Mom’s</h6> --}}
                    <p>giving information on its origins,
                        as well as a random Lipsum generator.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Autem voluptatem animi,nemo officiis vero unde at veritatis
                        sapiente provident molestiae rem minus aliquid delectus cumque
                        iste ab quo iusto quod! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <img src="{{ asset('landing/img/mob.png') }}" alt="img1">
                </div>
            </div>
        </div>
    </div>

    {{-- </div>
    </div> --}}
    <!-- end comming soon  -->
@endSection
