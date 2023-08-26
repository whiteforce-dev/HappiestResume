@extends('layouts.app')

@section('content')
   

        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Login</title>

            <link
                href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,900&family=Rubik:wght@300;400;600;700&display=swap"
                rel="stylesheet" />
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
            <link rel="stylesheet" href="{{ url('css/happiest.css') }}" />
            <style>
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
                <div class="login" style="position: relative">
                    <div class="logo">
                        <img src="{{ asset('assets/image/logo (3).png') }}" alt="" width="110px" />
                    </div>
                
                    <div class="main-loader submitModal" style="margin-top:-20px !important; z-index: 300;">
                        <div class="loader-line application">
                          <div class="head-loader">
                            <h1>Sign Up</h1>
                            <p>Start your journey with us.</p>
                          </div>
                        </div>
                        <form action="{{ url('/registration') }}"method="post"   style="width: 100%;">
                            @csrf
                       
                        <div class="name-loader">
                          <div class="name">
                            <label for="f-name">First Name</label>
                            <input onkeyup="getUsername();" class="col-sm no-padding click click-courier" type="text" name="name"
                              id="f-name" />
                          </div>
                          <div class="name">
                            <label for="S-name">Last Name</label>
                            <input onkeyup="getUserPassword();" class="col-sm no-padding click click-vendor" type="text" name="last_name"
                              id="f-name" />
                          </div>
                        </div>
                        <div class="name-loader">
                          <div class="name">
                            <label for="e-mail">Email Address</label>
                            <input onkeyup="getUsername();" class="col-sm no-padding click click-courier" type="email" name="reg_email"
                              id="f-name" />
                          </div>
                          <div class="name">
                            <label for="n-number">Phone</label>
                            <input onkeyup="getUserPassword();" class="col-sm no-padding click click-vendor" type="number" name="contact" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" minlength="10" maxlength="10"
                              id="n-number" />
                          </div>
                        </div>
                        <div class="headline-loader">
                          <div class="password-star">
                            <div class="name">
                                <label for="n-number">Password</label>
                                <input onkeyup="getUsername();" class="col-sm no-padding click click-courier" type="password" name="password" 
                                  id="n-number" autocomplete="off" />
                              </div>
                          
                            <div class="name">
                              <label for="n-number">Confirm Password</label>
                              <input onkeyup="getUserPassword();" class="col-sm no-padding click click-vendor" type="password" name="cpassword"
                                id="n-number" autocomplete="off"/>
                            </div>
                          </div>
                          {{-- <div class="col-sm-12 col-md-12 col-lg-12 py-2">
                            <label class="pb-4 sign-up-password-label" for="password">Resume Type</label>
                            <select name="candidate_type" id="candidate_type" class="form-control" required>
                                <option value="">Resume Type</option>
                                <option value="0">Indian</option>
                                <option value="1">Abroad</option>
                            </select>

                        </div> --}}
                       
                        </div>
                
                
                     
                            <div class="submit-btn" style="margin-top: 30px">
                          <button type="submit">Sign Up</button>
                          
                          <button class="sub-mit" id="form-cancel">Cancel</button>
                    
                        </div>
                        <div class="btn" style=" width: 80%; margin: 10px auto !important; margin-left: 20px !important;">
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
                        </form>
                          <p>
                           Have an Account
                            <button id="applyBtn"><a href="{{ url('login') }}">Sign-In</a></button>
                          </p>
                        </div>
                      </div>
                   
                    <div class="container-plus"
                        style="
                                    position: absolute;
                                    bottom: 8%;
                                    left: -1%;
                                    transform: scaleX(-1);
                                    transform: rotate(168deg);
                                    overflow: hidden;
                                             ">
                        <div class="row" style="transform: scaleY(-1)">


                            <div class="col-sm">
                                <div id="div-dance-holder" class="go-vendor">
                                    <div id="orange-001-holder" class="z-index-3">
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
                                <!-- end div dance holder -->
                            </div>
                            <!-- end col-sm -->

                            <!-- end col -->
                        </div>
                        <!-- end row -->
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
                                    <p
                                        style="font-family: Poppins, sans-serif; width: 100%; font-size: 0.9rem; margin-bottom: 10px;">
                                        "Happiest Resume has improved our hiring process from the
                                        get-go. We can now free up time to focus on the things that
                                        matter, the people."
                                    </p>
                                    <div class="name-star">
                                        <p
                                            style="
                                              font-family: Poppins, sans-serif;
                                              width: 86%;
                                              margin-left: auto;
                                              text-align: right;
                                              font-size: 0.85rem;
                                            ">
                                            <span style="font-weight: 700; font-size:0.85rem">John Doe</span> &mdash;
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

                        <div
                            style="
                                      position: absolute;
                                      z-index: 1;
                                      top: 54%;
                                      right: -10%;
                                      width: 70%;
                                      line-height: 14px;
                                    ">
                            <h3
                                style="color: #191d1f; margin-bottom: 30px; font-weight: 600;  font-family: Poppins, sans-serif; font-size: 1.1rem;">
                                Hey <span style="color: #fa8e12;">!!!!</span> Welcome Back
                            </h3>
                            <div style="display: flex; align-items: center; justify-content: start">
                                <i class="fa-solid fa-user"
                                    style="
                                          font-size: 0.9rem;
                                          margin-top: 8px;
                                          margin-right: 10px;
                                          color: #e99c0c;
                                        "></i>
                                <h1 id="username-preview"
                                    style="
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
                                <i class="fa-solid fa-key"
                                    style="
                                          margin-top: 20px;
                                          font-size: 0.9rem;
                                          margin-right: 12px;
                                          color: #e99c0c;
                                        "></i>
                                <div id="password-preview" class="hidePass">**********</div>
                            </div>
                        </div>
                    </div>
                    <div class="auto-img"><img src="{{ url('assets/image/Grey Clean CV Resume Photo.jpg') }}"></div>
                </div>

            </section>

            {{-- <script>
                function getUsername() {
                    var username = $("#username").val();
                    $("#username-preview").text(username);
                }

                function getUserPassword() {
                    var password = $("#password").val();
                    $("#password-preview").text(password);
                }
            </script> --}}



            <script src="https://kit.fontawesome.com/66f2518709.js" crossorigin="anonymous"></script>
            <script src="{{ asset('public/js/happiest.js') }}"></script>
        </body>

        <script>
            $(".go").click(function() {
                $(".go-vendor").toggleClass("go-courier");
            });
            $(".click-vendor").click(function() {
                if ($(".text-slider-unit").hasClass("vendor-active")) {} else {
                    $(".text-slider-unit").toggleClass("vendor-active courier-active");
                    $(".go-vendor").removeClass("go-courier");
                }
            });
            $(".click-courier").click(function() {
                if ($(".text-slider-unit").hasClass("courier-active")) {} else {
                    $(".text-slider-unit").toggleClass("vendor-active courier-active");
                    $(".go-vendor").addClass("go-courier");
                }
            });
        </script>
    @endsection
