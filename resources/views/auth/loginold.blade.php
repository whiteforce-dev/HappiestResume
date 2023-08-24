@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body"> --}}
                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                     
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happiest Resume</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="/asset/js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="/asset/js/slick.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/js/custom.js"></script>

</head>

{{-- <body style=" background: #e7e6d8;"> --}}

    <section class="p-2 sign-in-section">
        <div class="container rounded-3 main-container" style="background: #fff;">
            <div class="row py-4 m-0">
                <div class="col-sm-4 col-md-4 col-lg-4 rounded-3 info-container">
                    <div class="container px-4 py-6 sidebar-container">
                        <div class="logo-container">
                            <h6 class="" style="font-weight: 500;">
                                <a href="index.html" class="logo"> <img src="https://happiestresume.com/assets/images/logo-light.png" alt="" class="logo-light" style="padding-top: 20px;"></a>
                            </h6>
                        </div>
                        <div class="content-container my-8 py-4">
                            <h2 class="" style="font-weight: 500;">Start your <br>journey with us.</h2>
                            <p style="color: #333;">Discover the world's best community <br> of National &
                                International Jobs with <br> a Quality Approved Resume.</p>
                        </div>

                        <div class="review-container p-4 rounded-3" style="background: #ffa217;">
                            <div class="card bg-none border-0">
                                <p style="font-size: 14px; color: #000;">I feel myself becoming the fearless person I
                                    have dreamt of being. Have I arrived? No. But I'm constantly evolving and
                                    challenging myself to be unafraid to make mistakes.</p>

                            </div>
                            <div class="card bg-none border-0">
                                <p style="font-size: 14px; color: #000;">You can learn new things at any time in your
                                    life if you're willing to be a beginner. If you actually learn to like being a
                                    beginner, the whole world opens up to you.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-8 sign-in-main">
                    <div class=" container py-7">
                        <h2 style="font-weight: 600;">
                            Sign In
                        </h2>

                        <form class="col-sm-12 col-md-10 col-lg-10 sign-in-form" action="{{ url('dashboard') }}"
                            method="post">
                            @csrf
                            <!-- mail id -->
                            <div class="col-sm-12 col-md-12 col-lg-12 py-2">
                                <label class="pb-2 sign-in-email-label" for="email">Email</label>
                                <input type="email" class="form-control" id="Email" name="email"
                                    placeholder="Enter your email" required autocomplete="off" />
                            </div>

                            <!-- Password -->
                            <div class="col-sm-12 col-md-12 col-lg-12 py-2">
                                <label class="pb-2 sign-in-password-label" for="password">Password</label>

                                <input type="password" class="form-control" id="Password"
                                    name="password" placeholder="Enter your password" required autocomplete="off" />
                            </div>
                            {{-- <div class="form-group mb-4"> --}}
                                <input type="checkbox" onclick="myFunction()">&nbsp;<label style="margin-right:133px" for="showpassword">Show Password</label>
                              
                               <small style="float:right !important;" ><a href="{{ url('forgotpassword') }}" style="font-weight: 700;">
                                    Forgot Password</a></small>
                            {{-- </div> --}}
                            <div class="row py-3 align-items-center">
                            
                                
                            </div>

                            <div class="py-2"> <input type="submit" value="Login"
                                    class="btn btn-primary col-sm-12 col-lg-12 col-md-12 sign-in-button "
                                    style="font-weight: 500;">


                                <div class="row or align-items-center px-3 pt-3">
                                    <hr class="col-md-5 col-lg-5">
                                    <p class="col-md-2 col-lg-2 p-0 m-0 text-center">or</p>
                                    <hr class="col-md-5 col-lg-5">
                                </div>



                                <a href="{{ url('redirect/google') }}"
                                    class="btn btn-outline col-sm-12 col-lg-12 col-md-12 my-2 sign-in-with-google align-items-center"
                                    style="font-weight: 500;">
                                    <img src="./assets/img/auth-page/google-auth.svg"
                                        style="width: 28px; vertical-align: middle;" alt="">
                                    Log in with Google</a>

                                <!-- <button type="button"
                                    class="btn btn-outline col-sm-12 col-lg-12 col-md-12 my-2 sign-in-with-google align-items-center"
                                    style="font-weight: 500;">
                                    <img src="./assets/img/auth-page/linkedin-auth.svg"
                                        style="width: 28px; vertical-align: middle;" alt="">
                                    Sign in with linkedIn
                                </button>

                                <a type="button"
                                    class="btn btn-outline col-sm-12 col-lg-12 col-md-12 my-2 sign-in-with-google align-items-center"
                                    style="font-weight: 500;">
                                    <img src="./assets/img/auth-page/apple-auth.svg"
                                        style="width: 28px; vertical-align: middle;" alt="">
                                    Sign in with Apple
                                </a> -->

                                <div class="sign-up text-center pt-3">
                                    <p>Don't have an Account<a href="{{ url('sign-up') }}" style="font-weight: 700;">
                                            Sign-up</a> &nbsp;
                                    {{-- <a href="{{ url('forgotpassword') }}" style="font-weight: 700;">
                                        Forgot Password</a> --}}
                                    </p>
                                </div>
                                <div class="sign-up text-center pt-3">
                                    
                                </div>
                            </div>
                        </form>
                    {{-- </div>
                </div>
            </div>
        </div> --}}
   





















                        {{-- <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $( document ).ready(function() {
        $('#Password').focus();
        $('#Email').focus();
    });
    </script>
    <script>
        function myFunction() {
          var x = document.getElementById("Password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        </script>
@endsection
