<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Page</title>
    <link rel="stylesheet" href="{{ url('css/job.css') }}">
    <link rel="stylesheet" href="{{ url('css/jobstyle.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,900&family=Rubik:wght@300;400;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('css/jobportal.css') }}">
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }




        .fnc-slider {
            overflow: hidden;
            box-sizing: border-box;
            position: relative;
            height: 100vh;
        }

        .fnc-slider *,
        .fnc-slider *:before,
        .fnc-slider *:after {
            box-sizing: border-box;
        }

        .fnc-slider__slides {
            position: relative;
            height: 100%;
            transition: transform 1s 0.6666666667s;
        }

        .fnc-slider .m--blend-dark .fnc-slide__inner {
            background-color: #f5b11e;
        }

        .fnc-slider .m--blend-dark .fnc-slide__mask-inner {
            background-color: #f59a12;
        }

        .fnc-slider .m--navbg-dark {
            background-color: #fab31a;
        }

        .fnc-slider .m--blend-green .fnc-slide__inner {
            background-color: #f5a40e;
        }

        .fnc-slider .m--blend-green .fnc-slide__mask-inner {
            background-color: #f5b70e;
        }

        .fnc-slider .m--navbg-green {
            background-color: #f5ac0e;
        }

        .fnc-slider .m--blend-red .fnc-slide__inner {
            background-color: #ecc410;
        }

        .fnc-slider .m--blend-red .fnc-slide__mask-inner {
            background-color: #f7a610;
        }

        .fnc-slider .m--navbg-red {
            background-color: #f3d00b;
        }

        .fnc-slider .m--blend-blue .fnc-slide__inner {
            background-color: #f5f107;
        }

        .fnc-slider .m--blend-blue .fnc-slide__mask-inner {
            background-color: #f15c06;
        }

        .fnc-slider .m--navbg-blue {
            background-color: #f15c06;
        }

        .fnc-slide {
            overflow: hidden;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            transform: translate3d(0, 0, 0);
        }

        .fnc-slide.m--before-sliding {
            z-index: 2 !important;
            transform: translate3d(100%, 0, 0);
        }

        .fnc-slide.m--active-slide {
            z-index: 1;
            transition: transform 1s 0.6666666667s ease-in-out;
            transform: translate3d(0, 0, 0);
        }

        .fnc-slide__inner {
            position: relative;
            height: 100%;
            background-size: cover;
            background-position: center top;
            transform: translate3d(0, 0, 0);
        }

        .m--global-blending-active .fnc-slide__inner,
        .m--blend-bg-active .fnc-slide__inner {
            background-blend-mode: luminosity;
        }

        .m--before-sliding .fnc-slide__inner {
            transform: translate3d(-100%, 0, 0);
        }

        .m--active-slide .fnc-slide__inner {
            transition: transform 1s 0.6666666667s ease-in-out;
            transform: translate3d(0, 0, 0);
        }

        .fnc-slide__mask {
            overflow: hidden;
            z-index: 1;
            position: absolute;
            right: 60%;
            top: 15%;
            /* top: 1%; */
            width: 50.25vh;
            height: 67vh;
            margin-right: -90px;
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 0 0, 6vh 0, 6vh 61vh, 44vh 61vh, 44vh 6vh, 6vh 6vh);
            transform-origin: 50% 0;
            transition-timing-function: ease-in-out;
        }

        .m--before-sliding .fnc-slide__mask {
            transform: rotate(-10deg) translate3d(200px, 0, 0);
            opacity: 0;
        }

        .m--active-slide .fnc-slide__mask {
            transition: transform 0.7s 1.2222222222s, opacity 0.35s 1.2222222222s;
            transform: translate3d(0, 0, 0);
            opacity: 1;
        }

        .m--previous-slide .fnc-slide__mask {
            transition: transform 0.7s 0.3333333333s, opacity 0.35s 0.6833333333s;
            transform: rotate(10deg) translate3d(-200px, 0, 0);
            opacity: 0;
        }

        .fnc-slide__mask-inner {
            z-index: -1;
            position: absolute;
            left: 50%;
            top: 50%;
            width: 100vw;
            height: 100vh;
            margin-left: -50vw;
            margin-top: -50vh;
            background-size: cover;
            background-position: center center;
            background-blend-mode: luminosity;
            transform-origin: 50% 16.5vh;
            transition-timing-function: ease-in-out;
        }

        .m--before-sliding .fnc-slide__mask-inner {
            transform: translateY(0) rotate(10deg) translateX(-200px) translateZ(0);
        }

        .m--active-slide .fnc-slide__mask-inner {
            transition: transform 0.7s 1.2222222222s;
            transform: translateX(0);
        }

        .m--previous-slide .fnc-slide__mask-inner {
            transition: transform 0.7s 0.3333333333s;
            transform: translateY(0) rotate(-10deg) translateX(200px) translateZ(0);
        }

        .fnc-slide__content {
            z-index: 2;
            position: absolute;
            left: 40%;
            top: 40%;
        }

        .fnc-slide__heading {
            margin-bottom: 10px;
            /* text-transform: uppercase; */
        }

        .fnc-slide__heading-line {
            overflow: hidden;
            position: relative;
            padding-right: 20px;
            font-size: 70px;
            color: #fff;
            word-spacing: 10px;
        }

        .fnc-slide__heading-line:nth-child(2) {
            padding-left: 30px;
        }

        .m--before-sliding .fnc-slide__heading-line {
            transform: translateY(100%);
        }

        .m--active-slide .fnc-slide__heading-line {
            transition: transform 1.5s 1s;
            transform: translateY(0);
        }

        .m--previous-slide .fnc-slide__heading-line {
            transition: transform 1.5s;
            transform: translateY(-100%);
        }

        .fnc-slide__heading-line span {
            display: block;
        }

        .m--before-sliding .fnc-slide__heading-line span {
            transform: translateY(-100%);
        }

        .m--active-slide .fnc-slide__heading-line span {
            transition: transform 1.5s 1s;
            transform: translateY(0);
        }

        .m--previous-slide .fnc-slide__heading-line span {
            transition: transform 1.5s;
            transform: translateY(100%);
        }

        .fnc-slide__action-btn {
            position: relative;
            margin-left: 200px;
            padding: 5px 15px;
            font-size: 20px;
            line-height: 1;
            color: transparent;
            border: none;
            /* text-transform: uppercase; */
            background: transparent;
            cursor: pointer;
            text-align: center;
            outline: none;
        }

        .fnc-slide__action-btn span {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            perspective: 1000px;
            transform-style: preserve-3d;
            transition: transform 0.3s;
            transform-origin: 50% 0;
            line-height: 30px;
            color: #fff;
        }

        .fnc-slide__action-btn span:before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            border: 2px solid #fff;
            border-top: none;
            border-bottom: none;
        }

        .fnc-slide__action-btn span:after {
            content: attr(data-text);
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            line-height: 30px;
            background: #fcbc0d;
            opacity: 0;
            transform-origin: 50% 0;
            transform: translateY(100%) rotateX(-90deg);
            transition: opacity 0.15s 0.15s;
        }

        .fnc-slide__action-btn:hover span {
            transform: rotateX(90deg);
        }

        .fnc-slide__action-btn:hover span:after {
            opacity: 1;
            transition: opacity 0.15s;
        }

        .fnc-nav {
            width: 33%;
            z-index: 5;
            position: absolute;
            right: 0;
            bottom: 0;
        }

        .fnc-nav__bgs {
            z-index: -1;
            overflow: hidden;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

        .fnc-nav__bg {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

        .fnc-nav__bg.m--nav-bg-before {
            z-index: 2 !important;
            transform: translateX(100%);
        }

        .fnc-nav__bg.m--active-nav-bg {
            z-index: 1;
            transition: transform 1s 0.6666666667s;
            transform: translateX(0);
        }

        .fnc-nav__controls {
            font-size: 0;
        }

        .fnc-nav__control {
            overflow: hidden;
            position: relative;
            display: inline-block;
            vertical-align: top;
            width: 110px;
            height: 32px;
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
            /* background: transparent; */
            border: none;
            outline: none;
            cursor: pointer;
            transition: background-color 0.5s;
        }

        .fnc-nav__control.m--active-control {
            background: #1F2833;
        }

        .fnc-nav__control-progress {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: #fff;
            transform-origin: 0 50%;
            transform: scaleX(0);
            transition-timing-function: linear !important;
        }

        .m--with-autosliding .m--active-control .fnc-nav__control-progress {
            transform: scaleX(1);
        }

        .m--prev-control .fnc-nav__control-progress {
            transform: translateX(100%);
            transition: transform 0.5s !important;
        }

        .m--reset-progress .fnc-nav__control-progress {
            transform: scaleX(0);
            transition: transform 0s 0s !important;
        }

        .m--autosliding-blocked .fnc-nav__control-progress {
            transition: all 0s 0s !important;
            transform: scaleX(0) !important;
        }

        /* NOT PART OF COMMON SLIDER STYLES */

        .demo-cont {
            overflow: hidden;
            position: relative;
            height: 100vh;
            perspective: 1500px;
            background: #000;
        }

        .demo-cont__credits {
            box-sizing: border-box;
            overflow-y: auto;
            z-index: 1;
            position: absolute;
            right: 0;
            top: 0;
            width: 400px;
            height: 100%;
            padding: 20px 10px 30px;
            background: #303030;
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
            color: #fff;
            text-align: center;
            transition: transform 0.7s;
            transform: translate3d(100%, 0, 0) rotateY(-45deg);
            will-change: transform;
        }

        .credits-active .demo-cont__credits {
            transition: transform 0.7s 0.2333333333s;
            transform: translate3d(0, 0, 0);
        }

        .demo-cont__credits *,
        .demo-cont__credits *:before,
        .demo-cont__credits *:after {
            box-sizing: border-box;
        }

        .demo-cont__credits-close {
            position: absolute;
            right: 20px;
            top: 20px;
            width: 28px;
            height: 28px;
            cursor: pointer;
        }

        .demo-cont__credits-close:before,
        .demo-cont__credits-close:after {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 2px;
            margin-top: -1px;
            background: #fff;
        }

        .demo-cont__credits-close:before {
            transform: rotate(45deg);
        }

        .demo-cont__credits-close:after {
            transform: rotate(-45deg);
        }

        .demo-cont__credits-heading {
            text-transform: uppercase;
            font-size: 40px;
            margin-bottom: 20px;
        }

        .demo-cont__credits-img {
            display: block;
            width: 60%;
            margin: 0 auto 30px;
            border-radius: 10px;
        }

        .demo-cont__credits-name {
            margin-bottom: 20px;
            font-size: 30px;
        }

        .demo-cont__credits-link {
            display: block;
            margin-bottom: 10px;
            font-size: 24px;
            color: #fff;
        }

        .demo-cont__credits-blend {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .example-slider {
            z-index: 2;
            transform: translate3d(0, 0, 0);
            transition: transform 0.7s;
        }

        .credits-active .example-slider {
            transform: translate3d(-400px, 0, 0) rotateY(10deg) scale(0.9);
        }

        .example-slider .fnc-slide-1 .fnc-slide__inner,
        .example-slider .fnc-slide-1 .fnc-slide__mask-inner {

            background-image: url("{{ url('assets/job-img/4.jpg') }}");
        }

        .example-slider .fnc-slide-2 .fnc-slide__inner,
        .example-slider .fnc-slide-2 .fnc-slide__mask-inner {
            background-image: url("{{ url('assets/job-img/3.jpg') }}");
        }

        .example-slider .fnc-slide-3 .fnc-slide__inner,
        .example-slider .fnc-slide-3 .fnc-slide__mask-inner {
            background-image: url("{{ url('assets/job-img/2.jpg') }}");
        }

        .example-slider .fnc-slide-3 .fnc-slide__inner:before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
        }

        .example-slider .fnc-slide-4 .fnc-slide__inner,
        .example-slider .fnc-slide-4 .fnc-slide__mask-inner {
            /* background-image: url('./job-img/01.jpg'); */
            background-image: url("{{ url('assets/job-img/1.jpg') }}");
        }

        .example-slider .fnc-slide-4 .fnc-slide__inner:before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
        }

        .example-slider .fnc-slide__heading,
        .example-slider .fnc-slide__action-btn,
        .example-slider .fnc-nav__control {
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
        }

        /* COLORFUL SWITCH STYLES
 ORIGINAL DEMO - https://codepen.io/suez/pen/WQjwOb */
        .colorful-switch {
            position: relative;
            width: 180px;
            height: 77.1428571429px;
            margin: 0 auto;
            border-radius: 32.1428571429px;
            background: #cfcfcf;
        }

        .colorful-switch:before {
            content: "";
            z-index: -1;
            position: absolute;
            left: -5px;
            top: -5px;
            width: 190px;
            height: 87.1428571429px;
            border-radius: 37.1428571429px;
            background: #314239;
            transition: background-color 0.3s;
        }

        .colorful-switch:hover:before {
            background: #4C735F;
        }

        .colorful-switch__checkbox {
            z-index: -10;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

        .colorful-switch__label {
            z-index: 1;
            overflow: hidden;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            border-radius: 32.1428571429px;
            cursor: pointer;
        }

        .colorful-switch__bg {
            position: absolute;
            left: 0;
            top: 0;
            width: 540px;
            height: 100%;
            background: linear-gradient(90deg, #14DCD6 0, #10E7BD 180px, #EF9C29 360px, #E76339 100%);
            transition: transform 0.5s;
            transform: translate3d(-360px, 0, 0);
        }

        .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__bg {
            transform: translate3d(0, 0, 0);
        }

        .colorful-switch__dot {
            position: absolute;
            left: 131.1428571429px;
            top: 50%;
            width: 5.1428571429px;
            height: 5.1428571429px;
            margin-left: -2.5714285714px;
            margin-top: -2.5714285714px;
            border-radius: 50%;
            background: #fff;
            transition: transform 0.5s;
            transform: translate3d(0, 0, 0);
        }

        .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__dot {
            transform: translate3d(-80.3571428571px, 0, 0);
        }

        .colorful-switch__on {
            position: absolute;
            left: 104.1428571429px;
            top: 22.5px;
            width: 19.2857142857px;
            height: 36px;
            transition: transform 0.5s;
            transform: translate3d(0, 0, 0);
        }

        .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__on {
            transform: translate3d(-80.3571428571px, 0, 0);
        }

        .colorful-switch__on__inner {
            position: absolute;
            width: 100%;
            height: 100%;
            transition: transform 0.25s 0s cubic-bezier(0.52, -0.96, 0.51, 1.28);
            transform-origin: 100% 50%;
            transform: rotate(45deg) scale(0) translateZ(0);
        }

        .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__on__inner {
            transition: transform 0.25s 0.25s cubic-bezier(0.67, -0.16, 0.47, 1.61);
            transform: rotate(45deg) scale(1) translateZ(0);
        }

        .colorful-switch__on__inner:before,
        .colorful-switch__on__inner:after {
            content: "";
            position: absolute;
            border-radius: 2.5714285714px;
            background: #fff;
        }

        .colorful-switch__on__inner:before {
            left: 0;
            bottom: 0;
            width: 100%;
            height: 6.1428571429px;
        }

        .colorful-switch__on__inner:after {
            right: 0;
            top: 0;
            width: 6.1428571429px;
            height: 100%;
        }

        .colorful-switch__off {
            position: absolute;
            left: 131.1428571429px;
            top: 50%;
            width: 41.1428571429px;
            height: 41.1428571429px;
            margin-left: -20.5714285714px;
            margin-top: -20.5714285714px;
            transition: transform 0.5s;
            transform: translate3d(0, 0, 0);
        }

        .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__off {
            transform: translate3d(-80.3571428571px, 0, 0);
        }

        .colorful-switch__off:before,
        .colorful-switch__off:after {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 5.1428571429px;
            margin-top: -2.5714285714px;
            border-radius: 2.5714285714px;
            background: #fff;
            transition: transform 0.25s 0.25s;
        }

        .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__off:before,
        .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__off:after {
            transition-delay: 0s;
        }

        .colorful-switch__off:before {
            transform: rotate(45deg) scaleX(1) translateZ(0);
        }

        .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__off:before {
            transform: rotate(45deg) scaleX(0) translateZ(0);
        }

        .colorful-switch__off:after {
            transition-timing-function: cubic-bezier(0.67, -0.16, 0.47, 1.61);
            transform: rotate(-45deg) scaleX(1) translateZ(0);
        }

        .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__off:after {
            transition-timing-function: ease;
            transform: rotate(-45deg) scaleX(0) translateZ(0);
        }

        /* Header Start */

        div#navbarNav.active-header ul li a {
            color: black;
            font-size: 0.9rem;
        }

        div#navbarNav.active-header ul li.active a {
            color: orange;
        }

        .nav-link {
            font-weight: 500;
            color: #fffefd;
            font-size: 0.9rem;
        }

        .fixed-top {
            background: transparent;
            height: 65px;

        }

        .fixed-top:has(#navbarNav.active-header) {
            box-shadow: 0 0 2px 2px #b9c2d7;
        }

        #top-nav {
            transition: all 600ms ease;
        }

        .black-bg {
            background-color: white;
        }

        .first-header {
            color: black
        }

        .nav-item {
            margin: 0 auto
        }

        .search-box-one {
            width: 90%
        }

        /* .navbar-nav-scroll li a{
      font-size: 875rem;
      color: black;
      font-weight: 600;
        } */

        /* Header End  */
    </style>
</head>

<body style="font-family: Poppins, sans-serif;">

    <nav>
        <header id="top-nav" class="navbar navbar-expand-lg fixed-top py-4" data-scroll-header="">
            <div class="container p-0">
                <a class="navbar-brand me-0 me-xl-4" href="#">
                    <img src="http://127.0.0.1:8000/assets/happiestNewAssets/img/logo.png" alt="Happiest Resume"
                        style="width: 110px;" loading="lazy">
                </a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <div id="nav-icon4">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>

                <div class="collapse navbar-collapse order-lg-2" id="navbarNav" style="justify-content: end;">
                    <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem; width: 50%;">
                        <!-- Menu items-->
                        <li class="nav-item">
                        <li class="nav-item active">
                            <a class="nav-link " href="{{ Request::is('/') ? ' #home' : URL::to('/#home') }}"
                                role="button" aria-expanded="false">Home
                            </a>
                        </li>
                        </li>

                        <li class="nav-item active">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to('exclusive-jobs') }}" role="button"
                                aria-expanded="false">Jobs
                            </a>
                        </li>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ Request::is('/') ? ' #about' : URL::to('/#about') }}"
                                role="button" aria-expanded="false">About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Request::is('/') ? ' #templates' : URL::to('/#templates') }}"
                                role="button" aria-expanded="false">Templates
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link first-black" href="{{ url('blog') }}" role="button"
                                aria-expanded="false">Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Request::is('/') ? ' #contact' : URL::to('/#contact') }}"
                                role="button" aria-expanded="false">Contact
                            </a>
                        </li>
                    </ul>

                    <div>
                        <a style="    background-color: #FF9900;
                    border-color: #FF9900;padding: 0.425rem 1rem;
    font-size: 0.875rem;
    border-radius: 0.375rem;"
                            class="btn btn-primary btn-sm ms-2" href="{{ url('/') }}">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </header>

    </nav>
    <div class="demo-cont">
        <!-- slider start -->
        <div class="fnc-slider example-slider">
            <div class="fnc-slider__slides">
                <!-- slide start -->
                <div class="fnc-slide m--blend-green m--active-slide">
                    <div class="fnc-slide__inner">
                        <div class="fnc-slide__mask">
                            <div class="fnc-slide__mask-inner"></div>
                        </div>
                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    <span>Fresher's Jobs</span>
                                </div>

                            </h2>
                            <a href="{{ url('exclusive-jobs') }}#fresherscrolling">
                                <button type="button" class="fnc-slide__action-btn">
                                    Click me!
                                    <span data-text="Click me!"> Click me!</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- slide end -->
                <!-- slide start -->
                <div class="fnc-slide m--blend-dark">
                    <div class="fnc-slide__inner">
                        <div class="fnc-slide__mask">
                            <div class="fnc-slide__mask-inner"></div>
                        </div>
                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    <span>Female Jobs</span>
                                </div>
                                <!-- <div class="fnc-slide__heading-line">
                                <span>Jobs</span>
                            </div> -->
                            </h2>
                            <a href="{{ url('female-jobs') }}#femalescrolling">
                                <button type="button" class="fnc-slide__action-btn">
                                    Click me!
                                    <span data-text="Click me!"> Click me!</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- slide end -->
                <!-- slide start -->
                <div class="fnc-slide m--blend-red">
                    <div class="fnc-slide__inner">
                        <div class="fnc-slide__mask">
                            <div class="fnc-slide__mask-inner"></div>
                        </div>
                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    <span>National Jobs</span>
                                </div>
                                <!-- <div class="fnc-slide__heading-line">
                                <span>Jobs</span>
                            </div> -->
                            </h2>
                            {{-- <a href=""> --}}
                            <a href="{{ url('national-jobs') }}#nationalscrolling ">
                                <button type="button" class="fnc-slide__action-btn">
                                    Click me!
                                    <span data-text="Click me!"> Click me!</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- slide end -->
                <!-- slide start -->
                <div class="fnc-slide m--blend-blue">
                    <div class="fnc-slide__inner">
                        <div class="fnc-slide__mask">
                            <div class="fnc-slide__mask-inner"></div>
                        </div>
                        <div class="fnc-slide__content">
                            <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    <span>International Jobs</span>
                                </div>
                                <!-- <div class="fnc-slide__heading-line">
                                <span>Jobs</span>
                            </div> -->
                            </h2>
                            <a href="{{ url('international-jobs') }}#internationalscrolling">
                                <button type="button" class="fnc-slide__action-btn">
                                    Click me!
                                    <span data-text="Click me!"> Click me!</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- slide end -->
            </div>
            <nav class="fnc-nav">
                <div class="fnc-nav__bgs">
                    <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
                    <div class="fnc-nav__bg m--navbg-dark"></div>
                    <div class="fnc-nav__bg m--navbg-red"></div>
                    <div class="fnc-nav__bg m--navbg-blue"></div>
                </div>
                <div class="fnc-nav__controls" style="background-color:#ff8a00 !important;">
                    <a href="{{ url('exclusive-jobs') }}#fresherscrolling" style="text-decoration:none">
                        <button class="fnc-nav__control">
                            Fresher
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                    </a>
                    <a href="{{ url('female-jobs') }}#femalescrolling"style="text-decoration:none">
                        <button class="fnc-nav__control">
                            Female
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                    </a>
                    <a href="{{ url('national-jobs') }}#nationalscrolling"style="text-decoration:none"> <button
                            class="fnc-nav__control">
                            National
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                    </a>
                    <a href="{{ url('international-jobs') }}#internationalscrolling"style="text-decoration:none">
                        <button class="fnc-nav__control">
                            International
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                    </a>
                </div>
            </nav>
        </div>

    </div>
    @yield('body')


    <script>
        window.addEventListener(`scroll`, function() {
            let nav = document.getElementById("top-nav")
            if (window.scrollY > 5)
                nav.classList.add("black-bg")

            else
                nav.classList.remove("black-bg");
        })
    </script>
    <script>
        window.addEventListener(`scroll`, function() {
            let master = document.querySelector("#navbarNav")
            if (window.scrollY > 5)
                master.classList.add("active-header")

            else
                master.classList.remove("active-header");
        })
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/66f2518709.js" crossorigin="anonymous"></script>
    <script src="{{ url('js/job.js') }}"></script>
</body>

</html>
