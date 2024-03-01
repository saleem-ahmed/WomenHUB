@extends('landingLayout')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0  wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('landing/img/Rectangle 18.png') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 headingbox">
                                    <h1 class="animated slideInDown heading ">Food like your mother cooked</h1>
                                    <button class="btn order_btn">Order Now</button>
                                    <div class="container menubox">
                                        <div class="row cardbox">
                                            <div class="col-sm box1">
                                                <img src="{{ asset('landing/img/Vector (1).png') }}" alt="">
                                                <h5>Choose a Menu</h5>
                                                <span class="text">Choose your kitchen menus</span>
                                            </div>
                                            <div class="col-sm box1">
                                                <img src="{{ asset('landing/img/Vector (2).png') }}" alt="">
                                                <h5>Place your Order</h5>
                                                <span class="text">Choose your kitchen menus</span>
                                            </div>
                                            <div class="col-sm">
                                                <img src="{{ asset('landing/img/bi_emoji-smile.png') }}" alt="">
                                                <h5>Enjoy your Food</h5>
                                                <span class="text">Choose your kitchen menus</span>
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

        <!-- Contact Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Stay In Touch</h1>
                    <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-5 justify-content-center">
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="text-white d-flex flex-column justify-content-center h-100 p-5" style="background: #30e3ca">
                            <h5 class="text-white">Call Us</h5>
                            <p class="mb-5"><i class="fa fa-phone-alt me-3"></i>+923 115 815204</p>
                            <h5 class="text-white">Email Us</h5>
                            <p class="mb-5"><i class="fa fa-envelope me-3"></i>info@womenhub.com</p>
                            <h5 class="text-white">Office Address</h5>
                            <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>Kiu Gilgit</p>
                            <h5 class="text-white">Follow Us</h5>
                            <div class="d-flex pt-2">
                                <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i
                                        class="fab fa-youtube"></i></a>
                                <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form
                            with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're
                            done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn rounded-pill py-3 px-5" style="background: #30e3ca;color :#ffffff " type="submit">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Google Map Start -->
        <div class="container-xxl p-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: -6px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6653142.195773982!2d66.07021361820601!3d35.48932590018342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e5d7ad872d80b5%3A0x9882624d9785f028!2sGilgit-Baltistan!5e0!3m2!1sen!2s!4v1670513512809!5m2!1sen!2s"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Google Map End -->
    @endSection
