@extends('customer.layout')

@section('content')

    <div class="customer-header d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <h1 class="text-center">Home made Products by Local Women</h1>
                    <p class="text-center">Local Food, local Experience</p>
                </div>
            </div>
        </div>
    </div>

    <div class="chefs">
        <div class="container">
            <div class="row w-100 mx-0 justify-content-between align-items-center">
                <div class="after col-lg-8 col-md-12 px-0">
                    <h2>
                        How Women Hub. Work
                        {{-- <img src="{{ asset('customer/img/after.png') }}" alt=""> --}}
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 my-4">
                    <div class="card-s">
                        <h2>Choose a Seller</h2>
                        <p>All Seller are food safety certified</p>
                    </div>
                </div>
                <div class="col-lg-4 my-4">
                    <div class="card-s">
                        <h2>Pick your Products
                        </h2>
                        <p>Order in advance so Seller can buy fresh items</p>
                    </div>
                </div>
                <div class="col-lg-4 my-4">
                    <div class="card-s">
                        <h2>Get your delivery
                        </h2>
                        <p>Dishes arrive refrigerated just heat, eat and repeat!</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="chefs">
        <div class="container">
            <div class="row w-100 mx-0 justify-content-between align-items-center">
                <div class="after col-lg-8 col-md-12 px-0">
                    <h2>
                        Trusted & Qualified Sellers
                        {{-- <img src="{{ asset('customer/img/after.png') }}" alt=""> --}}
                    </h2>
                </div>
                <div class="col-lg-4 col-md-12 mt-4 mt-md-0 d-flex justify-content-end align-items-center px-0">
                    <div class="input-group has-validation justify-content-end ">
                        <span class="input-group-text">
                            <i class="bi bi-search"></i>
                        </span>
                        <div class="form-floating is-invalid">
                            <input type="text" class="form-control is-invalid" id="floatingInputGroup2"
                                placeholder="Search" required>
                            <label for="floatingInputGroup2">Search</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($chefs as $chef)
                <div class="col-lg-4 my-4">
                    <div class="cards">
                        <div class="profile d-flex">
                            <img src="{{ asset('customer/img/chef-dp.png') }}" alt="">
                            <div class="description d-flex flex-column justify-content-center">
                                <h3>{{ $chef->fullname }}</h3>
                                <span>Food in Menu: {{ count($chef->dish) }}</span>
                            </div>
                        </div>
                        <p>Reference site about Lorem Ipsum, giving information on its origins, </p>
                        <div class="rate d-flex align-items-center">
                            <button><a href="{{ url('customer/chefs/detail') }}/{{ $chef->id }}">View</a></button>
                            <div class="star">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="see col-12 d-flex justify-content-center">
                    <button>See more</button>
                </div>
            </div>
        </div>

    </div>
    <div class="chefs">
        <div class="container">
            <div class="row w-100 m-0 justify-content-between">
                <div class="after col-lg-8 col-md-12 px-0">
                    <h2>
                        Popular Foods
                        {{-- <img src="{{ asset('customer/img/after.png') }}" alt=""> --}}
                    </h2>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row w-100 px-0" style="margin-right: 0% !imprtant">
                <div class="col-lg-3 my-3 .col-md-12">
                    <div class="card">
                        <img src="{{ asset('customer/img/popoular-img1.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body align-items-center">
                            <h5 class="card-title text-center">Price : Only 150 Rs</h5>
                            <p class="card-text text-center">Reference site about Lorem Ipsum,
                                giving information on its origins,
                                as well as a random.</p>
                            <div class="w-100 d-flex justify-content-center">
                                <button>
                                    order now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3 .col-md-12">
                    <div class="card">
                        <img src="{{ asset('customer/img/popoular-img2.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body align-items-center">
                            <h5 class="card-title text-center">Price : Only 150 Rs</h5>
                            <p class="card-text text-center">Reference site about Lorem Ipsum,
                                giving information on its origins,
                                as well as a random.</p>
                            <div class="w-100 d-flex justify-content-center">
                                <button>
                                    order now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3 .col-md-12">
                    <div class="card">
                        <img src="{{ asset('customer/img/popoular-img3.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body align-items-center">
                            <h5 class="card-title text-center">Price : Only 150 Rs</h5>
                            <p class="card-text text-center">Reference site about Lorem Ipsum,
                                giving information on its origins,
                                as well as a random.</p>
                            <div class="w-100 d-flex justify-content-center">
                                <button>
                                    order now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-3 .col-md-12">
                    <div class="card">
                        <img src="{{ asset('customer/img/popoular-img4.png') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body align-items-center">
                            <h5 class="card-title text-center">Price : Only 150 Rs</h5>
                            <p class="card-text text-center">Reference site about Lorem Ipsum,
                                giving information on its origins,
                                as well as a random.</p>
                            <div class="w-100 d-flex justify-content-center">
                                <button>
                                    order now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="row mt-5">
                <div class="see col-12 d-flex justify-content-center">
                    <button>See more</button>
                </div>
            </div>
        </div>

    </div>
    <div class="chefs">
        <div class="container">
            <div class="row w-100 mx-0 justify-content-between align-items-center">
                <div class="after col-lg-8 col-md-12 px-0">
                    <h2>
                        Why  Women Hub.?
                        {{-- <img src="{{ asset('customer/img/after.png') }}" alt=""> --}}
                    </h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 my-4">
                    <div class="card-s">
                        <h2>Support local cooks
                        </h2>
                        <p>Unlike restaurants, you know exactly who is preparing your food
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 my-4">
                    <div class="card-s">
                        <h2>Explore new cultures
                        </h2>
                        <p>Reconnect with your heritage or discover new cultures through traditional homemade dishes
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 my-4">
                    <div class="card-s">
                        <h2>Starting from 100RS
                        </h2>
                        <p>Enjoy Women hub's products at a reasonable price, without sacrificing
                            time</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    @endSection

