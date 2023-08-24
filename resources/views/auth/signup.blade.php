<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="{{ url('css/happiest.css') }}" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,900&family=Rubik:wght@300;400;600;700&display=swap"
    rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Exo;
    }

    #orange-001 {
      width: 60px;
      display: none;
      height: 58px;
      border-radius: 50%;
      background: #ff9505;
      position: absolute;
      left: 0px;
      top: 0px;
    }

    .grey-grad {
      display: none;
      width: 190px;
      height: 190px;
      position: absolute;
      border-radius: 50%;
      background: linear-gradient(to right, #f0f0f0, #ffffff);
    }
  </style>
</head>

<body>





  <section class="happy">
    <div class="login" style="position: relative; z-index: 200;">

      <div class="logo">
        <img src="{{ url('assets/image/logo (3).png') }}" alt="" width="110px" />
      </div>

      <div class="main-loader submitModal" style="margin-top: 20px;">
        <div class="loader-line application">
          <div class="head-loader">
            <h1>Sign Up</h1>
            <p>Start your journey with us.</p>
          </div>
        </div>

        <div class="name-loader">
          <div class="name">
            <label for="f-name">First Name</label>
            <input onkeyup="getUsername();" class="col-sm no-padding click click-courier" type="text" name="f-name"
              id="f-name" />
          </div>
          <div class="name">
            <label for="S-name">Last Name</label>
            <input onkeyup="getUserPassword();" class="col-sm no-padding click click-vendor" type="text" name="S-name"
              id="f-name" />
          </div>
        </div>
        <div class="name-loader">
          <div class="name">
            <label for="e-mail">Email Address</label>
            <input onkeyup="getUsername();" class="col-sm no-padding click click-courier" type="email" name="e-mail"
              id="f-name" />
          </div>
          <div class="name">
            <label for="n-number">Phone</label>
            <input onkeyup="getUserPassword();" class="col-sm no-padding click click-vendor" type="number" name=""
              id="n-number" />
          </div>
        </div>
        <div class="headline-loader">
          <div class="password-star">
            <div class="name">
              <label for="n-number">Password</label>
              <input onkeyup="getUsername();" class="col-sm no-padding click click-courier" type="password" name=""
                id="n-number" />
            </div>
            <div class="name">
              <label for="n-number">Confirm Password</label>
              <input onkeyup="getUserPassword();" class="col-sm no-padding click click-vendor" type="password" name=""
                id="n-number" />
            </div>
          </div>
          <!-- <div class="gh-widget-tip" style="
                  display: flex;
                  flex-direction: column;
                  align-items: start;
                  justify-content: center;
                  width: 100%;
                  margin-top: 20px;
                ">
            <label class="pb-2 sign-up-password-label" for="password">Resume Type</label>
            <select name="candidate_type" id="candidate_type" class="form-control" required="">
              <option value="">Resume Type</option>
              <option value="0">Indian</option>
              <option value="1">Abroad</option>
            </select>
          </div> -->
        </div>








        <!-- <div class="gh-form-box">
                    <label for="cover_letter">Cover Letter</label>
                    <textarea name="cover_letter" class="ng-valid-letter"></textarea>
                </div> -->
        <!-- <div class="resume-upload" style="margin-top: 25px">
              <label for="resume">CV / Resume</label>
              <input
              
                      
              id="attach"
                type="file"
                style="display: none"
                accept=".pdf,.doc,.docx,.rtf,.jpg,.jpeg"
              />
              <label for="attach" class="gh-widget-upload">
                <i class="fa-solid fa-upload"></i>
                Attach CV/Resume</label
              >
                        
              <div class="gh-widget-tip">
                <p _ngcontent-rbq-c153="">
                  <strong>Tip: </strong>Allowed file types; pdf, doc, docx, rtf,
                  jpg, jpeg. No larger than 10mb.
                </p>
              </div>
            </div> -->




        <div class="submit-btn  " style="margin-top: 30px">
          <button>Sign Up</button>
          <button class="sub-mit" id="form-cancel">Cancel</button>
        </div>
        <div class="btn" style=" width: 70%; margin:7px auto; margin-left: 10px !important;">
          <div _ngcontent-c3="" class="login__form-title-wrapper">
            <div _ngcontent-c3="" class="login__form-title">OR</div>
          </div>
          <button class="g-button" style="width: 60%;">
            <img
              src="{{ url('assets/image/google-auth.svg') }}"
              alt=""
              width="25
              px"
              style="margin-right: 5px"
            />
            Log in with Google
          </button>
          <p>
           Have an Account
            <a href="./signup.html"><button id="applyBtn">Sign-up</button></a>
          </p>
        </div>
      </div>
      <div class="container-plus" style="
        position: absolute;
        bottom: 0%;
        right: -37%;
        transform: scaleX(-1);
        transform: rotate(175deg);
    /* overflow: hidden; */
      ">
        <div class="row" style="">
          <div class="col-sm">
            <div id="div-dance-holder" class="go-vendor">
              <div id="orange-001-holder" class="z-index-3" style="display:none;">
                <div id="orange-001"></div>
              </div>
              <div id="yellow-001-holder" class="z-index-3">
                <div id="yellow-001"></div>
              </div>
              <div id="orange-grad-001-holder" class="z-index-3">
                <div id="orange-grad-001"></div>
              </div>
              <div id="vendor-2-001-holder" class="z-index-3">
                <div id="vendor-2-001"></div>
              </div>
              <div id="grad-1-001" class="grey-grad z-index-2"></div>
              <div id="grad-2-001" class="grey-grad z-index-2"></div>
              <div id="grad-3-001" class="grey-grad z-index-1"></div>
              <div id="swing-holder" class="z-index-3">
                <div class="blue-swing">
                  <div class="inner-img"></div>
                </div>
                <div class="orange-swing">
                  <div class="inner-img"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- end container -->
    </div>


    <div class="here">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffd700" fill-opacity="1"
          d="M0,224L60,202.7C120,181,240,139,360,149.3C480,160,600,224,720,250.7C840,277,960,267,1080,234.7C1200,203,1320,149,1380,122.7L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
        </path>
      </svg>



      <div class="resume-heading" style="width: 85%;">
        <div id="content" style="">
          <div class="testimonial">
            <blockquote style="position: relative">
              <p style="font-family: Poppins, sans-serif; width: 100%; font-size: 0.9rem; margin-bottom: 10px;">
                "Happiest Resume has improved our hiring process from the
                get-go. We can now free up time to focus on the things that
                matter, the people."
              </p>
              <div class="name-star">
                <p style="
                    font-family: Poppins, sans-serif;
                    width: 86%;
                    margin-left: auto;
                    text-align: right;
                    font-size: 0.9rem;
                  ">
                  <span style="font-weight: 700;   font-family: Poppins, sans-serif;">John Doe</span> &mdash;
                  Worcestershire, UK
                </p>
                <p style="width: 30%">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </p>
              </div>
            </blockquote>
          </div>
        </div>

        <div style="
            position: absolute;
            z-index: 1;
            top: 370px;
            right: 150px;
            width: 36%;
            line-height: 14px;
          ">
          <h3
            style="color: #191d1f; margin-bottom: 30px; font-weight: 600;  font-family: Poppins, sans-serif; font-size: 1.1rem;">
            Hey <span style="color: #fa8e12;">!!!!</span> Welcome Back
          </h3>
          <div style="display: flex; align-items: center; justify-content: start">
            <i class="fa-solid fa-user" style="
                font-size: 0.9rem;
                margin-top: 8px;
                margin-right: 10px;
                color: #e99c0c;
              "></i>
            <h1 id="username-preview" style="
                font-size: 16px;
                font-family: 'Poppins', sans-serif;
                /* color: #38393b; */
                color: #1a2024;
                margin-top: 10px;
                font-weight: 500;
              ">
              user@happiest.com
            </h1>
          </div>
          <div style="display: flex; align-items: center; justify-content: start">
            <i class="fa-solid fa-key" style="
                margin-top: 20px;
                font-size: 0.9rem;
                margin-right: 12px;
                color: #e99c0c;
              "></i>
            <div id="password-preview" class="hidePass">**********</div>
          </div>
        </div>
      </div>
      <div class="auto-img"><img src="{{ url('assets/image/Grey Clean CV Resume Photo.jpg')}}"  alt= ""></div>
    </div>


    <!-- <div class="here" style="position: relative;">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffd700" fill-opacity="1"
          d="M0,224L60,202.7C120,181,240,139,360,149.3C480,160,600,224,720,250.7C840,277,960,267,1080,234.7C1200,203,1320,149,1380,122.7L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
        </path>
      </svg>



      <div class="resume-heading" style="width: 85%;">
        <div id="content" style="">
          <div class="testimonial">
            <blockquote style="position: relative">
              <p style="font-family: Poppins, sans-serif; width: 100%; font-size: 0.9rem; margin-bottom: 10px;">
                "Happiest Resume has improved our hiring process from the
                get-go. We can now free up time to focus on the things that
                matter, the people."
              </p>
              <div class="name-star">
                <p style="
                    font-family: Poppins, sans-serif;
                    width: 86%;
                    margin-left: auto;
                    text-align: right;
                    font-size: 0.9rem;
                  ">
                  <span style="font-weight: 700">John Doe</span> &mdash;
                  Worcestershire, UK
                </p>
                <p style="width: 30%">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </p>
              </div>
            </blockquote>
          </div>
        </div>
      </div>


<div class="yellow-resume">
  <img src="./image/Capture-z.png" alt="">
</div>


   

  </section>
  <script></script>
-->

    <script src="https://kit.fontawesome.com/66f2518709.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/happiest.js') }}"></script>
    <script>
      function getUsername() {
        var username = $("#username").val();
        $("#username-preview").text(username);
      }

      function getUserPassword() {
        var password = $("#password").val();
        $("#password-preview").text(password);
      }
    </script>
</body>

</html>



















{{-- <!DOCTYPE html>
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
                        <h2 style="font-weight: 600;">
                            Sign Up
                        </h2>

                        <form class="col-sm-12 col-md-10 col-lg-10 sign-up-form" action="{{ url('registration') }}"
                            method="post">
                            @csrf
                            <!-- name -->
                            <div class="row my-2">
                                <div class="col-md-6">
                                    <label class="pb-2 sign-up-email-label" for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="First Name" autocomplete="off" required>
                                    <span class="error"></span>
                                </div>
                                <div class="col-md-6">
                                    <label class="pb-2 sign-up-email-label" for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        placeholder="Last Name" />
                                </div>
                            </div>

                            <!-- number -->
                            <div class="row my-2 mt-3">
                                <label class="pb-2 sign-up-email-label" for="country_code">Phone Number</label>
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

                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="reg_contact" name="contact"
                                        placeholder="Phone Number" autocomplete="off" minlength="10" maxlength="10"
                                        placeholder="Phone Number"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        class="input" required> <small id="contact_error" style="color:red"></small>



                                </div>
                            </div>

                            <!-- mail id -->
                            <div class="col-sm-12 col-md-12 col-lg-12 py-2">
                                <label class="pb-2 sign-up-email-label" for="email">Email</label>
                                <input type="email" class="form-control" id="reg_email" name="reg_email"
                                    placeholder="Enter your email" autocomplete="off" required>
                                <small id="email_error" style="color:red"></small>
                            </div>

                            <!-- Password -->
                            <div class="col-sm-12 col-md-12 col-lg-12 py-2">
                                <label class="pb-2 sign-up-password-label" for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter your password" autocomplete="off" required>
                                <span class="error"></span>

                            </div>


                            <!-- Confirm Password -->
                            <div class="col-sm-12 col-md-12 col-lg-12 py-2">
                                <label class="pb-2 sign-up-password-label" for="confirm_password">Confirm
                                    Password</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword"
                                    placeholder="Enter your password as filled above" autocomplete="off" required>
                                <span class="error"></span>

                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12 py-2">
                                <label class="pb-2 sign-up-password-label" for="password">Resume Type</label>
                                <select name="candidate_type" id="candidate_type" class="form-control" required>
                                    <option value="">Resume Type</option>
                                    <option value="0">Indian</option>
                                    <option value="1">Abroad</option>
                                </select>

                            </div>

                            <div class="py-2">

                                <input type="submit" value="Signup Now" id="submit"
                                    class="btn btn-primary col-sm-12 col-lg-12 col-md-12 sign-up-button "
                                    style="font-weight: 500;">

                                <div class="row or align-items-center px-3 pt-3">
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
                                </button>

                               

                                <div class="sign-up text-center pt-3">
                                    <p>Have an Account<a href="{{ url('login') }}" style="font-weight: 700;">
                                            Sign-In</a></p>
                                </div>
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

      
        $(document).ready(function() {

            'use strict';

            var usernameError = true,
                emailError = true,
                passwordError = true,
                passConfirm = true;

         
            if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
                $('.form form label').addClass('fontSwitch');
            }

           
            $('input').focus(function() {

                $(this).siblings('label').addClass('active');
            });




         
            $('a.switch').click(function(e) {
                $(this).toggleClass('active');
                e.preventDefault();

                if ($('a.switch').hasClass('active')) {
                   
                    $(this).parents('.form-peice').addClass('switched').siblings('.form-peice').removeClass(
                        'switched');

                } else {
                  
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

</html> --}}
