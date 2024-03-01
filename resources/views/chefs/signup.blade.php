<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in Customer</title>
    <link rel="stylesheet" href="{{ asset('customer\css\style.css') }}">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="signup">
        <div class="container-lg">
            <div class="row px-0 w-100">

                <div class="col-lg-6 form d-flex flex-column justify-content-center align-items-center">
                    <img class="logo" src="{{ asset('customer/img/signin-logo.png') }}" alt="">
                    <h2 class="mb-0">Get Started With Mom’s Kitchen</h2>
                    <p>Create you account</p>
                    <div class="w-100 row">
                        <div class="col-lg-6">
                            <input class="w-100" type="text" placeholder="Full Name">
                        </div>
                        <div class="col-lg-6">
                            <input class="w-100" type="email" placeholder="Email">
                        </div>
                        <div class="col-lg-6">
                            <input class="w-100" type="password" placeholder="Password">
                        </div>
                        <div class="col-lg-6">
                            <input class="w-100" type="password" placeholder="Conform Password">
                        </div>
                        <div class="col-lg-12">
                            <input class="w-100" type="text" placeholder="Phone Number">
                        </div>
                        <div class="col-lg-12">
                            <input class="w-100" type="text" placeholder="Location">
                        </div>
                        {{-- <div class="col-lg-12">
                            <select class="w-100" placeholder="Subscription Type">
                                <option value="">Subscription Type</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                            </select>
                        </div> --}}
                        <div class="col-lg-12">
                            <button class="w-100">Log In</button>
                        </div>

                        <div class="col-lg-12 d-flex justify-content-center align-items-center">
                            <img style="width:130px;" src="{{ asset('customer/img/line.png') }}" alt="">
                            <span class="mx-3">Or continue with</span>
                            <img style="width:130px;" src="{{ asset('customer/img/line.png') }}" alt="">
                        </div>
                        <div class="col-lg-12">
                            <button class="google">
                                <img src="{{ asset('customer/img/google.png') }}" alt="">
                                Google
                            </button>
                        </div>
                        <div class="col-md-12">
                            <p class="text-center">Already have an account? <a style="color: #3bb814;" href="">Sign in</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <img class="w-100" src="{{ asset('customer/img/chef-img1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

</body>

</html>
