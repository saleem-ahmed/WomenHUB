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

    <div class="signin">
        <div class="container">
            <div class="row px-0 w-100">
                <div class="col-lg-6 form d-flex flex-column justify-content-center align-items-center">
                    <img class="logo" src="{{ asset('customer/img/signin-logo.png') }}" alt="">
                    <h2>Welcome Back</h2>
                    <p>Login into your account</p>
                    <input class="w-100" type="email" placeholder="Email">
                    <input class="w-100" type="password" placeholder="Password">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div>
                            <img style="width: 40px;" src="{{ asset('customer/img/remember.png') }}" alt="">
                            <a href="">
                                Remember me
                            </a>
                        </div>
                        <a style="color: #D93F21;" href="">Recover Password</a>
                    </div>
                    <button class="w-100">Log In</button>
                    <div class="d-flex align-items-center">
                        <img style="width:130px;" src="{{ asset('customer/img/line.png') }}" alt="">
                        <span class="mx-3">Or continue with</span>
                        <img style="width:130px;" src="{{ asset('customer/img/line.png') }}" alt="">
                    </div>
                    <button class="google">
                        <img src="{{ asset('customer/img/google.png') }}" alt="">
                        Google
                    </button>
                    <p>Don’t have an account? <a style="color: #3bb814;" href="">Sign up</a></p>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <img class="w-100" src="{{ asset('customer/img/signin-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

</body>

</html>
