<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="title" content="https://happiestresume.com/">
    <meta name="description" content="PROFESSIONAL RESUME TEMPLATES">
    <meta name="keywords" content="resume creation, best resume website, 100free">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">

    <meta name="google-site-verification" content="IBFKnk_Oczv_iFKi07sv7O2wFa92GrWnSWJjZHS0ayc" />
    <title>Happiest Resume:  @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('/front/images/logo1.png') }}" type="image/x-icon" />
    {{-- <link rel="shortcut icon" href="{{url('public/front').'/'}}images/favicon.png" type="image/x-icon" /> --}}
    <link href="{{ url('/front/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('/front/css/mdb.min.css') }}"rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('front/css/materialdesignicons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{url('public/front/css/additional.css')}}" type="text/css" />
    <link href="{{url('public/front').'/'}}css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{url('public/front').'/'}}css/animation-scroll.css" rel="stylesheet" type="text/css" />


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/js-snackbar.css?v=2.0.0" />

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
                    
        {{-- <script type='text/javascript'>
            (function(I, L, T, i, c, k, s) {if(I.iticks) return;I.iticks = {host:c, settings:s, clientId:k, cdn:L, queue:[]};var h = T.head || T.documentElement;var e = T.createElement(i);var l = I.location;e.async = true;e.src = (L||c)+'/client/inject-v2.min.js';h.insertBefore(e, h.firstChild);I.iticks.call = function(a, b) {I.iticks.queue.push([a, b]);};})(window, 'https://cdn.intelliticks.com/prod/common', document, 'script', 'https://app.intelliticks.com', 'kSBQqkH3sHt87Kqxv_c', {});
    </script> --}}
    @include('frontend.chatbot_script')        
    <style type="text/css">
        main {
            width: 100%;
            overflow-x: hidden;
        }

        .res_menu_btn {
            display: none;
        }

        .menu_overlay {
            width: 100%;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 120;
            display: none;
            overflow: hidden;
            -webkit-overflow-scrolling: touch;
            outline: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        @media (min-width: 320px) and (max-width: 992px) {
            .res_menu_btn {
                display: block;
                font-size: 30px;
                cursor: pointer;
                left: 0px;
                float: right;
            }

            .top_menu_ul {
                position: absolute;
                width: 170px;
                right: -300px;
                height: 100vh;
                top: 55px;
                background: #ffffff;
                color: #666666;
                padding: 0px;
                transition: .5s all;
                margin: 0px;
            }

            .top_menu_ul li:after {
                display: none;
            }

            .menu_box_show {
                right: -25px;
            }

            .top_menu_ul li a {
                width: 100%;
                padding: 10px;
                text-shadow: 1px 1px #dcdcdc21;
                border-bottom: solid thin #e1e1e18a;
                display: inline-block;
            }

            .top_menu_ul li {
                width: 100%;
            }

            .logowithmenu_bar {
                -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
                background: #ffffff;
            }

            .banner_resumebox {
                display: none;
            }

            .mainbanner-caption {
                width: 100%;
                top: 100px;
            }

        }

        @media (min-width: 320px) and (max-width: 767px) {
            .logo.main img {
                width: 150px;
            }

            .main-menu {
                margin-top: 10px;
            }

            .logowithmenu_bar {
                min-height: 65px;
            }

            .top_menu_ul {
                top: 55px !important;
            }

            .menu_box_show {
                right: -0px !important;
            }

            .about_txt {
                padding-right: 0px;
            }

            .resume_templatebox {
                padding: 10px 0px;
            }

            .about_title h2 {
                font-size: 24px;
            }

            .oneway_arrow {
                left: 40%;
                margin: 0px 0px 0px -30px;
                top: 0px;
            }

            .slider_arrow_right {
                left: initial !important;
                right: 40% !important;
            }

            .templates_block {
                width: 100%;
                margin: 10px 0px;
                display: none;
            }

            #templates_slider .carousel-item .templates_block:nth-child(1) {
                display: block;
            }

            .about_title {
                padding: 30px 0px 0px 0px;
            }

            .counter-wrap {
                margin: 10px 0px;
            }

            .demo-icon-feature {
                padding: 10px 0px;
                margin-top: 15px;
            }

            .bottom-banner-content {
                text-align: left;
                margin-top: 30px;
            }

            .bottom-banner-img {
                position: relative;
                top: 0px;
                margin: 0px auto;
                height: 350px;
            }

            .login_modal .modal-body {
                padding: 15px 10px !important;
            }

            .login_modal {
                width: 96% !important;
            }

            .login_social_btnbox {
                text-align: center;
            }

            .login_btn {
                width: 100%;
                max-width: 300px;
                margin: 0px;
            }
        }

        @media (min-width: 320px) and (max-width: 576px) {
            .main-menu {
                margin-top: 10px;
            }

            .top_menu_ul {
                top: 65px !important;
            }

            .footer_copy {
                margin-top: 0px;
            }

            .mainbanner-caption h1 {
                font-size: 30px;
                margin: 5px 0px;
            }

            .mainbanner-caption p {
                font-size: 16px;
            }

            .main_banner_section {
                height: 80vh;
            }

            .about_section {
                padding: 30px 0px 20px 0px;
            }

            .bottom-banner-img {
                width: 100%;
                height: auto;
                left: 0px;
            }

            .bottom-banner-section {
                padding: 120px 15px;
            }

            .left_slider_arrow {
                left: 0px;
            }

            .right_slider_arrow {
                right: 0px;
            }

            .testimonial_block {
                padding: 10px 0px 15px 0px;
            }
        }

        @media (min-width: 577px) and (max-width: 767px) {
            .main-menu {
                margin-top: 15px;
            }
        }

        @media (min-width: 320px) and (max-width: 360px) {
            .logo.main img {
                width: 95px;
            }

            .main-menu {
                margin-top: 3px;
            }

            .logowithmenu_bar {
                min-height: 50px;
            }

            .top_menu_ul {
                top: 50px !important;
            }
        }

        @media (min-width: 768px) and (max-width: 992px) {
            .top_menu_ul {
                top: 77px !important;
            }

            .main-menu {
                margin-top: 15px;
            }

            .footer_container {
                padding: 20px 0px 0px 0px;
            }

            .about_title {
                padding: 30px 0px 0px 0px;
            }

            .about_txt {
                padding-right: 0px;
            }

            .oneway_arrow {
                left: -50px;
            }

            .slider_arrow_right {
                right: -50px !important;
            }

            .resume_templatebox {
                padding: 30px 0px;
            }

            .counter-wrap {
                margin: 10px 0px;
            }

            .banifits {
                padding-bottom: 0px;
            }

            .bottom-banner-section {
                text-align: center;
            }

            .bottom-banner-img {
                position: relative;
                top: 0px;
                margin: 0px auto;
                height: 350px;
            }

            .bottom-banner-content {
                text-align: left;
                margin-top: 30px;
            }
        }

        @media (min-width: 993px) and (max-width: 1199px) {
            .top_menu_ul li:after {
                margin: 0px 12px;
            }

            .counter-wrap h3 {
                font-size: 16px;
            }

            .bottom-banner-img {
                top: 130px;
                height: 350px;
            }
        }

        @media (min-width: 1200px) and (max-width: 1360px) {}
    </style>
    <link rel="stylesheet" href="{{url('public/front').'/'}}css/media.css" />
    <link rel='stylesheet' id='nd_options_font_family_h-css'
        href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C700&#038;ver=4.9.4' type='text/css'
        media='all' />
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet" />
    <script type="text/javascript" src="{{url('public/front').'/'}}js/jquery-3.4.1.min.js"></script>
    {{--<link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/js-snackbar.css?v=2.0.0" />--}}
</head>

<body>
    <main class="main_block">
        <div id="loader-overlay" class="loader_overlay">
            <div class="loader">
                <div class="loader-inner"></div>
            </div>
        </div>
        <nav>
            <div class="logowithmenu_bar {{Request::is('job-description/*')?"logowithmenu_bar_fixed":''}}{{Request::is('hot-jobs')?"logowithmenu_bar_fixed":''}}"
                id="top_navigation_bar">
                @include('frontend.common.nav')
                {{-- <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo main">
                                <a href="{{URL::to('/')}}">
                <img class="top_logowhite" src="{{URL::to('public/front').'/'}}images/logo1.png" alt="Happiest Logo">
                <img class="top_logoblack" src="{{URL::to('public/front').'/'}}images/logo1.png" alt="Happiest Logo">
                </a>
            </div>
            </div>
            <div class="col-lg-9 pull-right">
                <nav class="text-right main-menu">
                    <div class="res_menu_btn" onclick="ResponsiveMenu();">
                        <i class="mdi mdi-menu"></i>
                    </div>
                    <ul class="top_menu_ul list-unstyled" id="res_menucontainer">
                        <li><a class="page-scroll" href="{{Request::is('/') ? "#home" : URL::to('/#home')}}">HOME</a>
                        </li>
                        <li><a class="page-scroll" href="{{Request::is('/') ? "#about" : URL::to('/#about')}}">About</a>
                        </li>
                        <li><a class="page-scroll"
                                href="{{Request::is('/') ? "#templates" : URL::to('/#templates')}}">Templates</a>
                        </li>
                        <li><a class="page-scroll"
                                href="{{Request::is('/') ? "#testimonial" : URL::to('/#testimonial')}}">Testimonial</a>
                        </li>
                        <li><a class="page-scroll"
                                href="{{Request::is('/') ? "#contact" : URL::to('/#contact')}}">contact</a>
                        </li>
                        <li><a class="page-scroll" target="_blank" href="{{URL::to('hot-jobs')}}">Jobs</a>
                        </li>
                    </ul>
                    <div class="before_login">
                        @if(session()->has('user'))
                        <button type="button"
                            class="text-white btn btn-danger nav_button btn-sm margin-right0 waves-effect waves-light theam_btn"
                            data-target="#modal_logout" data-toggle="modal">LOGOUT
                        </button>
                        @else
                        <button type="button"
                            class="text-white btn btn-primary nav_button mr-1 btn-sm waves-effect waves-light theam_btn"
                            data-toggle="modal" data-target="#modal_registration">SIGNUP
                        </button>
                        <button type="button"
                            class="text-white btn btn-warning nav_button btn-sm margin-right0 waves-effect waves-light theam_btn"
                            data-target="#modal_login" id="login_btn" data-toggle="modal">LOGIN
                        </button>
                        @endif
                    </div>

                </nav>
            </div>
            </div>
            </div> --}}
            </div>
        </nav>
        @yield('content')
        @if(session()->has('flashError'))
        <script type="text/javascript">
            $(window).on('load', function () {
                $('#modal_login').modal('show');
            });
        </script>
        @endif

        <div class="menu_overlay" id="menu_overlay_div" onclick="ResponsiveMenu();"></div>
    </main>

    <script type="text/javascript" src="{{URL::to('public/front').'/'}}js/popper.min.js"></script>
    <script src="{{URL::to('public/front').'/'}}js/js-snackbar.js?v=1.1.0"></script>
    <script type="text/javascript" src="{{URL::to('public/front').'/'}}js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{URL::to('public/front').'/'}}js/mdb.min.js"></script>
    <script type="text/javascript" src="{{URL::to('public/front').'/'}}js/master.js"></script>
    <script type="text/javascript" src="{{URL::to('public/front').'/'}}js/animate-scroll.js"></script>
    <script type="text/javascript">
        {{--$(document).on("focusout", "#reg_email", function () {--}}
    {{--var reg_email = $(this).val();--}}
    {{--if (reg_email != '') {--}}
    {{--$.get('{{ URL::to('check_reg_email') }}', {reg_email: reg_email}, function (data) {--}}
    {{--console.log(data);--}}
    {{--if (data == 'already') {--}}
    {{--$('#reg_email').val('');--}}
    {{--alert("Email already exist");--}}
    {{--//                    SnackBar({--}}
    {{--//                        message: "Email already exist",--}}
    {{--//                        status: "danger",--}}
    {{--//                        fixed: true,--}}
    {{--//                        timeout: 7000--}}
    {{--//                    });--}}
    {{--}--}}
    {{--});--}}
    {{--}--}}
    {{--});--}}


    </script>
    <script type="text/javascript">
        function ResponsiveMenu() {
        let get_class = $('#res_menucontainer').attr('class');
        if (get_class == 'top_menu_ul list-unstyled') {
            $('#res_menucontainer').addClass('menu_box_show');
            $('#menu_overlay_div').show();
        } else {
            $('#menu_overlay_div').hide();
            $('#res_menucontainer').removeClass('menu_box_show');
        }
    }
    // function loadVideo() {
    //     var windowWidth = document.documentElement.clientWidth;
    //     var video = $('#mainVid');
    //     var source = $('<source>');
    //     if (windowWidth <= 1400) {
    //         source.attr('src', 'images/saisun-video.mp4')
    //     } else {
    //         source.attr('src', 'images/saisun-video.mp4')
    //     }
    //     video.append(source);
    //     video[0].play();
    // }
    $('#reg_email').val('');


    window.onload = function (e) {
        $('#reg_email').val('');
        setTimeout(function () {
            $('#loader-overlay').addClass('scale0');
        }, 2000);
        setTimeout(function () {
            $('#resume_banner').removeClass('hide_resume');
            $('#reg_email').val('');
        }, 1000);
    };


    $(document).ready(function () {
        @if(empty(session('user')))
        $("#reg_email").on('keyup',function () {
            var reg_email = $.trim($(this).val());
            if (reg_email.trim() !== '') {
                $.get('{{ URL::to('check_reg_email') }}', {reg_email: reg_email}, function (data) {
                    console.log(data);
                    if (data == 'already') {
                        $('#reg_email').val('');
                        $('#email_error').html(reg_email+' email already exists, please login !!')
                    }
                    else
                    {
                        $('#email_error').html('');
                    }
                });
            }
        });

        $("#reg_contact").on('keyup',function () {
            var reg_contact = $.trim($(this).val());
            if (reg_contact.trim() !== '') {
                $.post('{{ URL::to('check_reg_contact') }}',
                {
                    reg_contact: reg_contact,
                    _token: "{{ csrf_token() }}",
                    _method: 'POST'
                }, function (data) {
                    if (data != 1) {
                        $('#contact_error').html('');
                    }
                    else
                    {
                        var str = $("#reg_contact").val();
                        $('#contact_error').html(str+' contact already exists, please login !!')
                        $("#reg_contact").val(str.slice(0, -1));
                    }
                });
            }
        });
        @endif

        AOS.init({
            easing: 'ease-in-out-sine'
        });
        //loadVideo();
        wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: true,
            live: true
        });
        wow.init();

        $('#templates_slider .carousel-item').each(function () {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
            for (var i = 0; i < 1; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        });
        $('#loader-overlay').addClass('scale0');
    });
    !function (a) {
        //"use strict";
        a(".page-scroll").bind("click", function (b) {
            var c = a(this);
            a("html, body").stop().animate({
                scrollTop: a(c.attr("href")).offset().top - 50
            }, 1000, "easeInOutExpo"), b.preventDefault();
        }), a("body").scrollspy({
            target: ".main-menu",
            offset: 51
        }), a(".navbar-collapse ul li a").click(function () {
            a(".navbar-toggle:visible").click();
        });
    }(jQuery);
    </script>


    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <script>
        $(function(){
            SnackBar({
                    message: "{{ $error }}",
                    status: "success",
                    fixed: true,
                    timeout: 9000
                });
        });
    </script>
    @endforeach
    @endif


    @if(session()->has('message'))
    <script>
        $(function(){
            SnackBar({
                    message: "{{ session()->get('message') }}",
                    status: "success",
                    fixed: true,
                    timeout: 9000
                });
        });
    </script>
    @endif

    @if ($message = Session::get('success'))
    <script>
        $(function(){
            SnackBar({
                    message: "{{ $message }}",
                    status: "success",
                    fixed: true,
                    timeout: 9000
                });
        });
    </script>
    @endif


    {{-- @dd(Session::get('error')) --}}
    @if ($message = Session::get('error'))
    <script>
        $(function(){
            SnackBar({
                    message: "{{ $message }}",
                    status: "error",
                    fixed: true,
                    timeout: 9000
                });
        });
    </script>
    @endif


    @if ($message = Session::get('warning'))
    <script>
        $(function(){
            SnackBar({
                    message: "{{ $message }}",
                    status: "warning",
                    fixed: true,
                    timeout: 9000
                });
        });
    </script>
    @endif


    @if ($message = Session::get('info'))
    <script>
        $(function(){
            SnackBar({
                    message: "{{ $message }}",
                    status: "alert",
                    fixed: true,
                    timeout: 9000
                });
        });
    </script>
    @endif



</body>

</html>
