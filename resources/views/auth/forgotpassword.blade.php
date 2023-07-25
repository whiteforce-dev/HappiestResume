<!DOCTYPE html>
<html lang="en">

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

    <script src="./asset/js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./asset/js/slick.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="./asset/js/custom.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body style="background: #e7e6d8;">

    <section class="p-2 sign-up-section">
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
                            <p style="color: #333;">will help you to discover the world's <br> best national &
                                international jobs
                                <br>and a quality resume.
                            </p>
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
               
               
           

                <div class="col-sm-12 col-md-8 col-lg-8 sign-up-main">
                    <div class=" container py-7">

                        <div>
                            @if(Session::has('message'))
    {{Session::get('message')}}
@endif
                        </div>
                        <h2 style="font-weight: 600;">
                            Forgot Password
                        </h2>
                       
                        <form class="col-sm-12 col-md-10 col-lg-10 sign-up-form" action="{{ url('updatepassword') }}"
                            method="post">
                            @csrf
                           
                            <!-- name -->
                            <div class="row my-2">
                                {{-- <div class="col-md-6">
                                    <label class="pb-2 sign-up-email-label" for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="First Name" autocomplete="off" required>
                                    <span class="error"></span>
                                </div> --}}
                                {{-- <div class="col-md-6">
                                    <label class="pb-2 sign-up-email-label" for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        placeholder="Last Name" />
                                </div> --}}
                            </div>

                            <!-- number -->
                            <div class="row my-2 mt-3">
                                {{-- <label class="pb-2 sign-up-email-label" for="country_code">Phone Number</label>
                                <div class="col-md-3">
                                    <select name="countryCode" id="countryCode" class="form-control">
                                        <option value="" disabled>Country Code</option>
                                        <option value="91" selected>+91</option>
                                        @foreach ($country_code as $st)
                                            <option value="{{ $st->phone_code }}"
                                                {{ $st->id == '103' ? 'selected' : '' }}>
                                                +{{ $st->phone_code }}&nbsp;{{ $st->country_name }}</option>
                                        @endforeach
                                    </select>

                                </div> --}}
                                
                                    
                                <div class="col-md-12">
                                    <label class="pb-2 sign-up-email-label" for="mobile"> Registered Mobile Number</label>
                                    <input type="text" class="form-control" id="reg_contact" name="contact"
                                        placeholder="Registered Mobile Number" autocomplete="off" minlength="10" maxlength="10"
                                        placeholder="Phone Number"
                                        class="input" required> 



                                </div>
                                @error('contact')
                                {{ $message }}
                                @enderror
                            </div>

                            <!-- mail id -->
                            <div class="col-sm-12 col-md-12 col-lg-12 py-2">
                                <label class="pb-2 sign-up-email-label" for="email">Email</label>
                                <input type="email" class="form-control" id="reg_email" name="reg_email"
                                    placeholder="Enter your email" autocomplete="off" required>
                               @error('reg_email')
                               {{ $message }}
                               @enderror
                            </div>

                            <!-- Password -->
                            <div class="col-sm-12 col-md-12 col-lg-12 py-2">
                                <label class="pb-2 sign-up-password-label" for="password">New Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter your password" autocomplete="off" required>
                                <span class="error"></span>

                            </div>
                            @error('password')
                            {{ $message }}
                            @enderror

                            <!-- Confirm Password -->
                            <div class="col-sm-12 col-md-12 col-lg-12 py-2">
                                <label class="pb-2 sign-up-password-label" for="confirm_password">Confirm
                                    Password</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword"
                                    placeholder="Enter your password as filled above" autocomplete="off" required>
                                <span class="error"></span>

                            </div>
                            @error('cpassword')
                            {{ $message }}
                            @enderror
                            {{-- <div class="col-sm-12 col-md-12 col-lg-12 py-2">
                                <label class="pb-2 sign-up-password-label" for="password">Resume Type</label>
                                <select name="candidate_type" id="candidate_type" class="form-control" required>
                                    <option value="">Resume Type</option>
                                    <option value="0">Indian</option>
                                    <option value="1">Abroad</option>
                                </select>

                            </div> --}}

                            <div class="py-2">

                                <input type="submit" value="Change Password" id="submit"
                                    class="btn btn-primary col-sm-12 col-lg-12 col-md-12 sign-up-button "
                                    style="font-weight: 500;">

                                {{-- <div class="row or align-items-center px-3 pt-3">
                                    <hr class="col-md-5 col-lg-5">
                                    <p class="col-md-2 col-lg-2 p-0 m-0 text-center">or</p>
                                    <hr class="col-md-5 col-lg-5">
                                </div>
                                <button type="button"
                                    class="btn btn-outline col-sm-12 col-lg-12 col-md-12 my-2 sign-up-with-google align-items-center"
                                    style="font-weight: 500;">
                                    <img src="./assets/img/auth-page/google-auth.svg"
                                        style="width: 28px; vertical-align: middle;" alt="">
                                    Sign up with Google
                                </button> --}}

                                <!-- <button type="button"
                                    class="btn btn-outline col-sm-12 col-lg-12 col-md-12 my-2 sign-up-with-google align-items-center"
                                    style="font-weight: 500;">
                                    <img src="./assets/img/auth-page/linkedin-auth.svg"
                                        style="width: 28px; vertical-align: middle;" alt="">
                                    Sign up with linkedIn
                                </button>

                                <a type="button"
                                    class="btn btn-outline col-sm-12 col-lg-12 col-md-12 my-2 sign-up-with-google align-items-center"
                                    style="font-weight: 500;">
                                    <img src="./assets/img/auth-page/apple-auth.svg"
                                        style="width: 28px; vertical-align: middle;" alt="">
                                    Sign up with Apple
                                </a> -->

                                <div class="sign-up text-center pt-3">
                                    <p>Have an Account<a href="{{ url('login') }}" style="font-weight: 700;">
                                            Sign-In</a></p>
                                </div>

                                @if(Session::has('message'))
                                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            @if (empty(session('user')))
                $("#reg_email").on('keyup', function() {
                    var reg_email = $.trim($(this).val());
                    if (reg_email.trim() !== '') {
                        $.get('{{ URL::to('check_reg_email') }}', {
                            reg_email: reg_email
                        }, function(data) {
                            console.log(data);
                            if (data == 'already') {
                                $('#reg_email').val('');
                                $('#email_error').html(reg_email +
                                    ' email already exists, please login !!')
                            } else {
                                $('#email_error').html('');
                            }
                        });
                    }
                });
                $("#reg_contact").on('keyup', function() {
                    var reg_contact = $.trim($(this).val());
                    if (reg_contact.trim() !== '') {
                        $.post('{{ URL::to('check_reg_contact') }}', {
                            reg_contact: reg_contact,
                            _token: "{{ csrf_token() }}",
                            _method: 'POST'
                        }, function(data) {
                            if (data != 1) {
                                $('#contact_error').html('');
                            } else {
                                var str = $("#reg_contact").val();
                                $('#contact_error').html(str +
                                    ' contact already exists, please login !!')
                                $("#reg_contact").val(str.slice(0, -1));
                            }
                        });
                    }
                });
            @endif
        });

        /*global $, document, window, setTimeout, navigator, console, location*/
        $(document).ready(function() {

            'use strict';

            var usernameError = true,
                emailError = true,
                passwordError = true,
                passConfirm = true;

            // Detect browser for css purpose
            if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
                $('.form form label').addClass('fontSwitch');
            }

            // Label effect
            $('input').focus(function() {

                $(this).siblings('label').addClass('active');
            });




            // form switch
            $('a.switch').click(function(e) {
                $(this).toggleClass('active');
                e.preventDefault();

                if ($('a.switch').hasClass('active')) {
                    // document.getElementById("log_reg").innerHTML = "Login";
                    $(this).parents('.form-peice').addClass('switched').siblings('.form-peice').removeClass(
                        'switched');

                } else {
                    //document.getElementById("log_reg").innerHTML = "Registrer";
                    $(this).parents('.form-peice').removeClass('switched').siblings('.form-peice').addClass(
                        'switched');

                }
            });



            $('a.profile').on('click', function() {
                location.reload(true);
            });


        });
    </script>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                $(function() {
                    SnackBar({
                        message: "{{ $error }}",
                        status: "success",
                        fixed: true,
                        timeout: 7000
                    });
                });
            </script>
        @endforeach
    @endif


    @if (session()->has('message'))
        <script>
            $(function() {
                SnackBar({
                    message: "{{ session()->get('message') }}",
                    status: "success",
                    fixed: true,
                    timeout: 7000
                });
            });
        </script>
    @endif

    @if ($message = Session::get('success'))
        <script>
            $(function() {
                SnackBar({
                    message: "{{ $message }}",
                    status: "success",
                    fixed: true,
                    timeout: 7000
                });
            });
        </script>
    @endif


    {{-- @dd(Session::get('error')) --}}
    @if ($message = Session::get('error'))
        <script>
            $(function() {
                SnackBar({
                    message: "{{ $message }}",
                    status: "error",
                    fixed: true,
                    timeout: 7000
                });
            });
        </script>
    @endif


    @if ($message = Session::get('warning'))
        <script>
            $(function() {
                SnackBar({
                    message: "{{ $message }}",
                    status: "warning",
                    fixed: true,
                    timeout: 7000
                });
            });
        </script>
    @endif


    @if ($message = Session::get('info'))
        <script>
            $(function() {
                SnackBar({
                    message: "{{ $message }}",
                    status: "alert",
                    fixed: true,
                    timeout: 7000
                });
            });
        </script>

        <script>
            $(document).on('show.bs.modal', '.modal', function() {
                var zIndex = 1040 + (10 * $('.modal:visible').length);
                $(this).css('z-index', zIndex);
                setTimeout(function() {
                    $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
                }, 0);
            });
        </script>
    @endif
</body>

</html>
