@extends('frontend.newfrontmaster')
@section('title','Home')
@section('newContent')

<!-- hero main -->
<section class="pb-4 pt-8 bg-white" id="home">
    <div class="container py-3 px-6">
        <div class="row align-items-center mt-md-0 pt-md-2 pt-lg-3">
            <div class="col-md-5 order-md-1 mb-5 mb-md-0">
                <h1 class="mb-4">
                    <span style="font-size: 12px; font-weight: 500; letter-spacing: 1px;">
                        ONLINE RESUME BUILDER <br>
                    </span>
                    Your success story begins with an impressive resume.
                </h1>
                <!-- <p class="my-4">Use professional field-tested resume templates that follow the exact ‘resume rules’
                    employers look for. Easy to use and done within minutes - try now for free!.</p> -->

                <!-- <p class="align-items-center">
                    <svg height="8" width="8" class="blinking">
                        <circle cx="4" cy="4" r="4" fill="#FF9900" />
                        Sorry, your browser does not support inline SVG.
                    </svg>
                    19,954 resumes created today
                </p> -->

                <div class="mt-4">
                    <a href="{{ url('resumeloginone') }}" class="btn btn-primary btn-lg">
                        Build My Resume Now
                    </a>
                </div>
            </div>
            <div class="col-md-2 order-md-1 mb-5 mb-md-0">
            </div>
            <div class="col-md-5 order-md-2 ">
                <img src="{{ url('assets/happiestNewAssets/img/resume/resume-other-bottom.webp') }}" class="rounded"
                    alt="">
            </div>
        </div>
    </div>
</section>

<!-- top companies hire ourr candidates -->
<section class="pb-4 pt-8 bg-white" >
    <div class="col-sm-6 col-md-6 col-lg-6 align-items-center mt-md-0 pt-md-2 pt-lg-3 pb-3 text-center mx-auto">
        <h2>Top Companies Hire Our Candidates!</h2>
        <p>We only work with Candidates who want to challenge their future!</p>
    </div>
    <!-- company promotion slider -->
    <div class="border-top border-bottom bg-grey p-0">
        <div class="row align-items-center mt-md-0 pt-md-2 pt-lg-3 pb-3">
            <div class="col-md-12 order-md-1 mb-5 mb-md-0">
                <div class="customer-logos slider">
                    <div class="slide"><img
                            src="{{ url('assets/happiestNewAssets/img/company-logo/Pepperfry_logo.png') }}">
                    </div>
                    <div class="slide"><img
                            src="{{ url('assets/happiestNewAssets/img/company-logo/flipkart-logo.png') }}">
                    </div>
                    <div class="slide"><img
                            src="{{ url('assets/happiestNewAssets/img/company-logo/honeywell-logo.png') }}">
                    </div>
                    <div class="slide"><img
                            src="{{ url('assets/happiestNewAssets/img/company-logo/hdfc-bank-logo.png') }}">
                    </div>
                    <div class="slide"><img
                            src="{{ url('assets/happiestNewAssets/img/company-logo/Walt-Disney-logo.png') }}">
                    </div>
                    <div class="slide"><img src="{{ url('assets/happiestNewAssets/img/company-logo/AT&T_logo.png') }}">
                    </div>

                    <!-- repeat -->
                    <div class="slide">  <img src="{{ url('assets').'/' }}images/clients/airtel-bank3.jpg">
                    </div>
                    <div class="slide"> <img src="{{ url('assets').'/' }}images/clients/ameri2.jpg">
                    </div>
                    <div class="slide"><img src="{{ url('assets').'/' }}images/clients/premier2.png">
                    </div>
                    <div class="slide"><img src="{{ url('assets').'/' }}images/clients/walmart2.png">
                    </div>
                    <div class="slide"><img src="{{ url('assets').'/' }}images/clients/cpi2.jpg">
                    </div>
                    <div class="slide"> <img src="{{ url('assets').'/' }}images/clients/cisco5.png">
                    </div>

                    <!-- repeat -->
                    <div class="slide"> <img src="{{ url('assets').'/' }}images/clients/new13.png">
                    </div>
                    <div class="slide"><img src="{{ url('assets').'/' }}images/clients/velan2.png">
                    </div>
                    <div class="slide"><img src="{{ url('assets').'/' }}images/clients/foodminar2.png">
                    </div>
                    <div class="slide"><img src="{{ url('assets/happiestNewAssets/img/company-logo/AT&T_logo.png') }}">
                    </div>
                    <div class="slide"><img src="{{ url('assets').'/' }}images/clients/fynd2.jpg">
                    </div>
                    <div class="slide"> <img src="{{ url('assets').'/' }}images/clients/sponsor9.jpg">
                    </div>

                    <div class="slide"> <img src="{{ url('assets').'/' }}images/clients/ryder3.png">
                    </div>
                    <div class="slide"><img src="{{ url('assets').'/' }}images/clients/ernst3.png">
                    </div>
                    <div class="slide"> <img src="{{ url('assets').'/' }}images/clients/fidelity2.png">
                    </div>
                    <div class="slide"><img src="{{ url('assets').'/' }}images/clients/ibm2.png">
                    </div>
                    <div class="slide"><img src="{{ url('assets').'/' }}images/clients/solar2.png">
                    </div>
                    <div class="slide"> <img src="{{ url('assets').'/' }}images/clients/bankofwest2.jpg">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about section -->
<section class="pb-4 pt-8 bg-white" id="about">
    <div class="container py-3 px-6" style="position: relative;">
        <div class="col-sm-6 col-md-6 col-lg-6 align-items-center mt-md-0 pt-md-2 pt-lg-3 pb-3 text-center mx-auto">
            <h2>Effortlessly make a job-worthy resume and cover letter that gets you hired faster</h2>
        </div>
        <div class="row">
            @if(count($howItWorks))
            @foreach ($howItWorks as $key=>$howItWork)
            <div class="card col-sm-3 col-md-3 col-lg-3 p-4 border-0" style="background: none;"
                data-aos="{{(++$key)%2 == 0?'fade-up-right':'fade-up-left' }}" data-aos-duration="1000">
                <div class="card-content">
                    @if(file_exists($howItWork->icon))
                    <img src="{{url($howItWork->icon)}}" style="width: 32px">
                    @else
                    <img src="{{url('public/front').'/'}}images/register.png" style="width: 32px">
                    @endif
                    <h6 style="margin-top:10px">{{ isset($howItWork->title)?$howItWork->title:'' }}</h6>
                    <p>{{ isset($howItWork->description)?$howItWork->description:'' }}</p>
                </div>
            </div>
            @endforeach
            @endif

        </div>
        <img src="{{ url('assets/happiestNewAssets/img/about-svg.svg') }}" alt=""
            style="position: absolute; left: 0; top: 65.6%;" class="about-section-img">
    </div>
</section>

<!-- Resume Templates -->
<section class="pb-4 pt-8 bg-white" id="templates">
    <div class="container py-3 resume-maker-guide">
        <div class="col-sm-6 col-md-6 col-lg-6 align-items-center mt-md-0 pt-md-2 pt-lg-3 pb-3 text-center mx-auto">
            <h2>HR-Approved Resume Templates</h2>
            <p>Our traditional and modern resume templates have helped thousands of job seekers land new jobs.</p>
        </div>
        <div class="resumes_templates js-flickity" style="height: 600px;"
            data-flickity='{ "wrapAround": true, "contain": true }'>
            @if(count($resumeSliderModel))
            @foreach ($resumeSliderModel as $key=>$item)
            <div class="resume-cell">
                <h6 class="text-center">{{isset($item->title)?$item->title:''}}</h6>
                @if(file_exists($item->image))
                <img src="{{url($item->image)}}" alt="{{isset($item->title)?$item->title:''}}" />
                @else
                <img src="{{url('public/front').'/'}}images/resume_1.jpg" />
                @endif

            </div>
            @endforeach
            @endif

            <div class="resume-cell">
                <h6 class="text-center">2022</h6>
                <img src="{{ url('assets/happiestNewAssets/img/resume/2022-Modern-Resume-Template-Homepage.webp') }}"
                    alt="">
            </div>

            <div class="resume-cell">
                <h6 class="text-center">Clean</h6>
                <img src="{{ url('assets/happiestNewAssets/img/resume/Clean-Modern-Resume-Template-Black-1.webp') }}"
                    alt="">
            </div>
            <div class="resume-cell">
                <h6 class="text-center">Corporate</h6>
                <img src="{{ url('assets/happiestNewAssets/img/resume/Corporate-Modern-Resume-Template-Blue-1.webp') }}"
                    alt="">
            </div>
            <div class="resume-cell">
                <h6 class="text-center">Minimalist</h6>
                <img src="{{ url('assets/happiestNewAssets/img/resume/Professional-Minimalist-Sea-Green.webp') }}"
                    alt="">
            </div>
        </div>
    </div>
</section>

<!-- resume maker guide -->
<section class="pb-4 pt-4 bg-white" id="how-it-works">
    <div class="container py-8 px-6 resume-maker-guide">
        <div class="col-sm-6 col-md-6 col-lg-6 align-items-center mt-md-0 pt-md-2 pt-lg-3 pb-3 text-center mx-auto">
            <h2>Using Happiest Resume is as simple as 1, 2, 3, 4</h2>
        </div>
        <div class="showcase__content ">
            <div
                class="order-md-2 showcase__videos swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                <div class="showcase__videos-list" style="transition-duration: 0ms;">
                    
                    <div class="showcase__video swiper-slide-active" data-video-duration="6.0"
                        data-swiper-autoplay="6000" data-swiper-slide-index="0"
                        style="width: 727px; transition-duration: 0ms; opacity: 1;">
                        <p style="display:none;">Easily edit online</p>
                        <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_z1ur1xvb.json"
                            background="transparent" speed="1" loop autoplay style="left: 25%; right:25%; width: 64%;"></lottie-player>
                    </div>

                    <div class="showcase__video" data-video-duration="6.0"
                        data-swiper-autoplay="6000" data-swiper-slide-index="0"
                        style="width: 727px; transition-duration: 0ms; opacity: 1;">
                        <p style="display:none;">Add pre-written phrases</p>
                        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_7GsS9T.json"
                            background="transparent" speed="1" loop autoplay style="left: 25%; right:25%; width: 64%;"></lottie-player>
                    </div>

                    <div class="showcase__video" data-video-duration="6.0"
                        data-swiper-autoplay="6000" data-swiper-slide-index="0"
                        style="width: 727px; transition-duration: 0ms; opacity: 1;">
                        <p style="display:none;">Automatic spell-checker</p>
                        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_cSOsEMxbwK.json"
                            background="transparent" speed="1" loop autoplay style="left: 25%; right:25%; width: 64%;"></lottie-player>
                    </div>

                    <div class="showcase__video" data-video-duration="6.0"
                        data-swiper-autoplay="6000" data-swiper-slide-index="0"
                        style="width: 727px; transition-duration: 0ms; opacity: 1;">
                        <p style="display:none;">Export to anything</p>
                        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_JOhM7l.json"
                            background="transparent" speed="1" loop autoplay style="left: 25%; right:25%; width: 64%;"></lottie-player>
                    </div>
                </div>
            </div>

            <div id="showcase__features" class="order-md-1 showcase__features">
                <div id="showcase__feature" class="showcase__feature showcase__feature--active" onClick="changevideo(event)">
                    <div class="showcase__feature-bar">
                        <div class="showcase__feature-bar-progress" style="animation-duration: 8000ms;"></div>
                    </div>
                    <div class="showcase__feature-title">Easily edit online</div>
                    <div class="description">
                        <div class="showcase__feature-subtitle subtitle--active" id="contentShow">
                            <div class="showcase__feature-subtitle-content">Creating the perfectly formatted, custom
                                tailored resume has never been easier.</div>
                        </div>
                    </div>
                </div>

                <div id="showcase__feature" class="showcase__feature" onClick="changevideo(event)">
                    <div class="showcase__feature-bar">
                        <div class="showcase__feature-bar-progress" style="animation-duration: 7000ms;"></div>
                    </div>
                    <div class="showcase__feature-title">Add pre-written phrases</div>
                    <div class="description">
                        <div class="showcase__feature-subtitle" id="contentShow">
                            <div class="showcase__feature-subtitle-content">Beat writer’s block with pre-written and
                                tested phrases that successfully communicate your experience and skills.</div>
                        </div>
                    </div>
                </div>

                <div id="showcase__feature" class="showcase__feature" onClick="changevideo(event)">
                    <div class="showcase__feature-bar">
                        <div class="showcase__feature-bar-progress" style="animation-duration: 8000ms;"></div>
                    </div>
                    <div class="showcase__feature-title">Automatic spell-checker</div>

                    <div class="description">
                        <div class="showcase__feature-subtitle" id="contentShow">
                            <div class="showcase__feature-subtitle-content">Our built-in spell-checker will protect
                                you
                                from mistakes and typos. Remove all the grammar anxiety from resume writing!</div>
                        </div>
                    </div>
                </div>

                <div id="showcase__feature" class="showcase__feature" onClick="changevideo(event)">
                    <div class="showcase__feature-bar">
                        <div class="showcase__feature-bar-progress" style="animation-duration: 7000ms;"></div>
                    </div>
                    <div class="showcase__feature-title">Export to anything</div>

                    <div class="description">
                        <div class="showcase__feature-subtitle" id="contentShow">
                            <div class="showcase__feature-subtitle-content">You’re in control of your resume, our
                                exports work perfectly with Word or any other app.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counts -->
<section class="pb-4 pt-4 bg-white">
    <div class="home-letters">
        <div class="home-letters__card home-letters__card--1">
            <div class="home-letters__card-main"></div>
        </div>

        <div class="home-letters__card home-letters__card--2">
            <div class="home-letters__card-main"></div>
        </div>

        <div class="home-letters__card home-letters__card--3">
            <div class="home-letters__card-main"></div>
        </div>

        <div class="home-letters__card home-letters__card--4">
            <div class="home-letters__card-main"></div>
        </div>

        <div class="home-letters__card home-letters__card--5">
            <div class="home-letters__card-main"></div>
        </div>

        <div class="home-letters__card home-letters__card--6">
            <div class="home-letters__card-main"></div>
        </div>

        <div class="home-letters__card home-letters__card--7">
            <div class="home-letters__card-main"></div>
        </div>

        <div class="home-letters__card home-letters__card--8">
            <div class="home-letters__card-main"></div>
        </div>

        <div class="home-letters__card home-letters__card--9">
            <div class="home-letters__card-main"></div>
        </div>

        <div class="home-letters__card home-letters__card--10">
            <div class="home-letters__card-main"></div>
        </div>

        <div class="home-letters__card home-letters__card--11">
            <div class="home-letters__card-main"></div>
        </div>

        <div class="home-letters__card home-letters__card--12">
            <div class="home-letters__card-main"></div>
        </div>

        <div class="home-letters__card home-letters__card--13">
            <div class="home-letters__card-main"></div>
        </div>

        <div class="home-letters__card home-letters__card--14">
            <div class="home-letters__card-main"></div>
        </div>
        <div class="container py-0 px-6">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-8 col-lg-6 card bg-none border-0">
                    <!-- Heading -->
                    <h2 class="mb-4">
                        We work hard to support our candidates <span class="text-underline-warning">every
                            day</span>.
                    </h2>
                    <!-- Text -->
                    <p>
                        Good People knows our company doesn't thrive without our <br> candidates. You will always be
                        the
                        priority for us.
                    </p>
                    <!-- Stats -->
                    <div class="row mx-md-n6 mb-8 mb-md-0 mx-auto">
                        <div class="col-auto px-md-6 border-end mx-2 count-happiest">
                            <!-- Heading -->
                            <div class="h3 mb-0 " style="transition: all 1s;">
                                <span id="registered" style="transition: all 1s;">{{ $total_register }}</span>
                            </div>
                            <div class="text-muted mt-n1">
                                Registered
                            </div>
                        </div>
                        <div class="col-auto px-md-6 border-end mx-2 count-happiest">
                            <!-- Heading -->
                            <div class="h3 mb-0" style="transition: all 1s;">
                                <span id="jobs" style="transition: all 1s;">{{ $total_jobs }}</span>
                            </div>
                            <div class="text-muted mt-n1">
                                Jobs
                            </div>
                        </div>
                        <div class="col-auto px-md-6 mx-2 count-happiest">
                            <!-- Heading -->
                            <div class="h3 mb-0" style="transition: all 1s;">
                                <span id="happyclients" style="transition: all 1s;">{{ $total_company }}</span>
                            </div>
                            <div class="text-muted mt-n1">
                                Happy Clients
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-6">
                    <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_ievyiwog.json"
                        background="transparent" speed="1" loop autoplay></lottie-player>
                </div>
            </div>
        </div>
    </div>

</section>

{{-- app download --}}
<section class="pb-4 pt-8 bg-white app-download">
    <!-- hero main -->
    <div class="container py-3 px-6 ">
        <div class="row col-md-10 justify-content-center mx-auto pt-6 px-4 align-items-center"
            style="background:#FEFAF3; border-radius: 30px;">
            <div class="col-md-4 order-md-1 mb-5 mb-md-0">
                <h3 class="mb-4">
                    <span style="font-size: 12px; font-weight: 500; letter-spacing: 1px;">
                        RESUME BUILDER & FIND BEST JOBS<br>
                    </span>
                    For more Convenience Download Our App
                </h3>

                <div class="mt-4">
                    <a href="https://play.google.com/store/apps/details?id=com.happiestresume.resume&hl=en&gl=US"
                        target="_blank" class="btn btn-primary p-0">
                        <img src="{{ url('assets/happiestNewAssets/img/Google_Play.png') }}" alt="" width="160px">
                    </a>
                </div>
            </div>
            <div class="col-md-6 order-md-2 p-0">
                <img src="{{ url('assets/happiestNewAssets/img/mockup-app.png') }}" class="rounded" alt="">
            </div>
        </div>
    </div>
</section>


@include('frontend.common.newTestimonials')
@include('frontend.common.newFooter')

<div class="modal fade" id="modal_logout" role="dialog" aria-hidden="true">
    <form action="{{url('user-logout')}}" method="post">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content m_login">
                <div class="modal-header m_header">
                    {{--<h5 class="modal-title"><b>Signoff</b></h5>--}}
                    <button type="button" class="close m_close " data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <h5 align="center">Are Sure You Want To Logout?</h5>
                    <br>
                    <button typeof="submit" id="btnsubmit_regis"
                        class="btn btn_login btn-primary btn-xs btn-block req_btn text-white waves-effect waves-light">
                        Logout Now
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="modal fade" id="forgot_password" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content m_login">
            <div class="modal-header m_header">
                <h5 class="modal-title"><b>Forgot Password ?</b></h5>
                <button type="button" class="close m_close" data-dismiss="modal" onclick="forgetReload()">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ url('candidate/recoverPassword') }}" method="post">
                    @csrf
                    <div class="md-form mt-3">
                        <input type="text" name="username" maxlength="50" minlength="10" id="forgotEmail" required
                            class="form-control" autocomplete="off">
                        <label for="forgotEmail" class="">Provide valid email or contact no.</label>
                    </div>
                    <button id="btnsubmit_forgot" type="submit"
                        class="btn btn-primary btn-lg btn-block req_btn text-white">Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    video.bg {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -100;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        object-fit: cover;/ combined with 'absolute',
        works like background-size,
        but for DOM elements /
    }
</style>
<div class="modal fade" id="modal_registration" role="dialog" aria-hidden="true">


    <div class="login-wrap">


        <div class="videobg">
            <video autoplay loop muted>
                <source src="public/resume_yellow/assets/video/video2.mp4" type="video/mp4">

            </video>
        </div>

        <div class="login-html">


            <button data-dismiss="modal" type="button"
                style="color: #f7f3f3;margin-right: -69px;margin-top: -14px;height: 55px;font-weight: 900;width: 8px;float: right;font-size: 17px;"
                class="hide btn">x</button>
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log
                In</label>
            <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Register</label>

            <div class="login-form">

                <form action="{{url('user-login')}}" method="post">
                    @csrf
                    <div class="sign-in-htm">
                        <div class="form-group login_social_btnbox">

                            <a target="_blank" href="{{url('redirect/facebook')}}"
                                class="waves-effect waves-light login_btn_facebook login_btn">
                                <i class="mdi mdi-facebook"></i>
                                Log in with Facebook
                            </a>
                            <a target="_blank" href="{{url('redirect/google')}}"
                                class="login_btn_google_plus login_btn waves-effect waves-light">
                                <i class="mdi mdi-google"></i>
                                Log in with Google
                            </a>
                            {{-- <a target="_blank" href="{{url('redirect/linkedin')}}"
                            class="login_btn_facebook login_btn waves-effect waves-light">
                            <i class="mdi mdi-linkedin"></i>
                            Log in with Linkedin
                            </a> --}}
                        </div>
                        <div class="form-group">
                            <div class="or_border">OR</div>
                        </div>
                        <div class="group">
                            <label for="email" class="label">Username or Email</label>
                            <input id="materialRegisterFormEmail" name="email" type="email" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="materialRegisterFormPassword" minlength="4" maxlength="20" type="password"
                                name="password" class="input" data-type="password">
                        </div>

                        <div class="group" style="margin-top: 56px;">
                            <input type="submit" class="button" value="Sign In">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <!-- <a class="forgot_txt" data-dismiss="modal" href="#" data-toggle="modal"
                        data-target="#forgot_password">Forgot Password?</a> -->
                            <a class="forgot_txt" onclick="frogetModal()" style="color: white;font-size:17px">Forgot
                                Password?</a>
                        </div>
                    </div>
                </form>
                <form action="{{url('registration')}}" method="post">
                    @csrf
                    <div class="for-pwd-htm">
                        <div class="group">
                            <label for="name" class="label">Name</label>
                            <input id="name" name="name" autocomplete="off" type="text" class="input" required>
                        </div>
                        <div class="group">
                            <label for="email" class="label">Email</label>
                            <input type="email" name="reg_email" id="reg_email" autocomplete="off" class="input"
                                required>
                            <small id="email_error" style="color:red"></small>
                        </div>

                        <div class="group">
                            <label for="contact" class="label">Contact Number</label>
                            <input type="text" name="contact" id="reg_contact" autocomplete="off" minlength="10"
                                maxlength="10"
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                class="input" required>
                            <small id="contact_error" style="color:red"></small>
                        </div>
                        <div class="group">
                            <label for="password" class="label">Password</label>
                            <input type="password" name="password" id="password" autocomplete="off" class="input"
                                required>
                        </div>
                        <div class="group">
                            <label for="cpassword" class="label">Confirm Password</label>
                            <input type="password" name="cpassword" id="cpassword" autocomplete="off" class="input"
                                required>
                        </div>
                        <div class="group">
                            <label for="workExp" class="label">Work Experience</label>
                            <select name="is_fresher" id="is_fresher" class="input" required>
                                <option value="" style="color:black">Select Any One</option>
                                <option value="1" style="color:black">Fresher</option>
                                <option value="0" style="color:black">Experienced</option>
                            </select>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Register" style="margin-top: 40px;">
                        </div>
                        <div class="hr"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
<script type="text/javascript">
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 180 || document.documentElement.scrollTop > 20) {
            $('#top_navigation_bar').addClass('logowithmenu_bar_fixed');
        } else {
            $('#top_navigation_bar').removeClass('logowithmenu_bar_fixed');
        }
    }
</script>
<script>
    $(document).ready(function () {

        $(".hide").click(function () {

            $('#modal_registration').modal().hide();
            location.reload();
        });
    })
</script>

<script>
    function frogetModal() {
        $('#modal_registration').modal().hide();
        $('#forgot_password').modal().show();
    }

    function forgetReload() {
        location.reload();
    }
</script>

@stop
