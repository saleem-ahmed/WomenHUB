@extends ('customer.layout')

@section('content')

    <!-- customr menu section start -->
    <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-12 col-xs-12 pt-3">
            <div class="profile_section1">
                <div class="d-flex justify-content-center">
                <img src="{{ asset('customer/chefmenu/Ellipse 1098.png')}}" alt="profile" width="150px">
                </div>
                <h2 class="pt-2 pb-2 text-center">{{ $chefs->fullname }}</h2>
                <p>Reference site about Lorem Ipsum, giving information on its origins, 
                   Reference site about Lorem Ipsum, giving information on its origins, 
                   Reference site about Lorem Ipsum, giving information on its origins, 
                   Reference site about Lorem Ipsum, giving information on its origins, 
                 </p>
                <img src="{{ asset('customer/chefmenu/stars.png') }}" alt="">
            </div>
            <div class="review">
             <h2 class="pt-4 pb-3">Customer Reviews</h2>
              <span>
                <p class="pt-3  names">Ali Ahmed</p>
                <p>Reference site about Lorem Ipsum, giving information on its </p>
                <img src="{{ asset('customer/chefmenu/stars.png') }}" alt="">
              </span>
              <span>
                <p class="pt-3 names">Ali Ahmed</p>
                <p>Reference site about Lorem Ipsum, giving information on its </p>
                <img src="{{ asset('customer/chefmenu/stars.png') }}" alt="">
              </span>
              <span>
                <p class="pt-3 names">Ali Ahmed</p>
                <p>Reference site about Lorem Ipsum, giving information on its </p>
                <img src="{{ asset('customer/chefmenu/stars.png') }}" alt="">
              </span>
              
            </div>
          </div>
          <div class=" col-lg-9 col-sm-12 col-xs-12 pt-3">
            <h1>Dishes</h1>
            <p>You will get 1 dish, 2 chapatis, and salad/raita delivered at your door step.</p>
            <p>Foods in Menu: {{ count($chefs->dish) }}</p>
            <div class="container menucontainer">
                <div class="row">
                    <div class="col-lg-4 col-xs-12">
                      <input class="input mb-3" type="text" placeholder="No of people">
                    </div>
                    <div class="col-lg-4 col-xs-12">
                     <input class="input mb-3" type="date">
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ url('customer/dishes/cart/checkout') }}"><button type="button" class="order mb-3">Order Now <i class="bi bi-cart-fill"></i> {{ $cartOrders }}</button></a>
                    </div>
                  </div>
                <!--  -->
                <div class="row">
                  @foreach($chefs->dish as $dish)
                    <div class="col-lg-4 col-sm-12 pb-3" >
                      <div class="card" style="">
                          <div class="card-body">
                            <img class="card-img-top" height="150px" src="{{ asset('uploads/dishImages') }}/{{ $dish->image }}" alt="Card image cap">
                            <div class="addtocard mt-3">
                              <div>
                                  <b class="text-dark title" >{{ $dish->dish_name }}</b>
                                  <p class="text-dark">Only {{ $dish->price }} RS</p>
                                </div>
                                <div>
                                  <a href="{{ url('/customer/dishes/add-to-cart') }}/{{ $dish->id }}"><button class=" btn btn-primary text-light">Add</button></a>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    @endforeach
                </div>
          </div>
        </div>

      </div>

@endSection

