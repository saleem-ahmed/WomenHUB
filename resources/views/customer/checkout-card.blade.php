@extends ('customer.layout')

@section('content')

<div class="customer-card">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Cart Dishes</h2>
                </div>
            </div>
            <div class="row">
               
               @foreach($cartDishes as $dish)             
                
                <div class="col-lg-4 col-md-12">
                    <div class="card w-100 d-flex flex-row h-90">
                        <img height="" src="{{ asset('uploads/dishImages') }}/{{ $dish->image }}" alt="">
                        <div class="card-body">
                            <h6> {{ $dish->dish_name }} </h6>
                            <span>Price : {{ $dish->price }} RS</span>
                        </div>
                        <i class="bi bi-x"></i>
                    </div>
                </div>
                @endforeach

                <div class="col-12 mt-3 d-flex align-items-center">
                    <span class="text-end" style="width:77px;">Subtotal </span>
                    <img style="width:85%" class="mx-3" src="{{ asset('customer/img/Line 28.png') }}" alt="">
                    <span>Rs {{ $total }}</span>
                </div>
                <div class="col-12 d-flex align-items-end">
                    <span class="text-end" style="width:77px;">Discount</span>
                    <img style="width:85%" class="mx-3" src="{{ asset('customer/img/Line 28.png') }}" alt="">
                    <span> 0%   </span>
                </div>
                <div class="col-12 d-flex align-items-center">
                    <span class="bold text-end" style="width:77px;">Total</span>
                    <img style="width:85%" class="mx-3" src="{{ asset('customer/img/Line 28.png') }}" alt="">
                    <span class="bold">Rs {{ $total }}</span>
                </div>
                <div class="col-12 mt-3 d-flex justify-content-end">
                    <a href="{{ url('/customer/dishes/cart/proceed-heckout') }}"><button>Proceed to Checkout</button></a>
                </div>
            </div>
        </div>
    </div>

    @endSection