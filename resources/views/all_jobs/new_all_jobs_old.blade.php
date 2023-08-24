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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        .fnc {
            /* you can add color names and their values here
     and then simply add classes like .m--blend-$colorName to .fnc-slide
     to apply specific color for mask blend mode */
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
            width: 100px;
            height: 50px;
            font-size: 14px;
            color: #fff;
            text-transform: uppercase;
            background: transparent;
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
        body {
            margin: 0;
        }

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
     /* //////////////////////////////////////////////////////// */
/* .tooltip {
  position: relative;
  display: inline-block;
  color: #4f5e64;
    font-size: 14px;
    font-weight: 500;
    font-family: "Plus Jakarta Sans", sans-serif;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 50px;
    box-shadow: 0 0 5px 5px #d4d9e7;
    background-color: white;
    color: #342f2f;
    text-align: left;
    border-radius: 6px;
    padding: 12px 10px 10px 10px;
    position: absolute;
    z-index: 700 !important;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
} */
/* ///////////////////////////////////////// */
   
/* .tooltips {
  position: relative;
  display: inline-block;
}

.tooltips .tooltipstext {
    visibility: hidden;
    width: 50px;
    background-color: #ed3131;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 7px 0;
    position: absolute;
    z-index: 700;
}

.tooltips:hover .tooltipstext {
  visibility: visible;
} */

.modal {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    visibility: hidden;
    transform: scale(1.1);
    transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
}

.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 24rem;
    border-radius: 0.5rem;
}

.close-button {
    float: right;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
    background-color: lightgray;
}

.close-button:hover {
    background-color: darkgray;
}

.show-modal {
    opacity: 1;
    visibility: visible;
    transform: scale(1.0);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
}

</style>
</head>

<body style="font-family: Poppins, sans-serif;">
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
                                <!-- <div class="fnc-slide__heading-line">
                                    <span>Jobs</span>
                                </div> -->
                            </h2>
                            <a onclick="changeText('fresher');"data-div="div-one">
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
                            <a onclick="changeText('female');" data-div="div-two">
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
                            <a onclick="changeText('national');"data-div="div-three" id=job_category>
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
                            <a onclick="changeText('international');" data-div="div-four">
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
                <div class="fnc-nav__controls" style="display: none;">
                    <button class="fnc-nav__control">
                        Fresher'Jobs
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                    <button class="fnc-nav__control">
                        Female Jobs
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                    <button class="fnc-nav__control">
                        National Jobs
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                    <button class="fnc-nav__control">
                        International Jobs
                        <span class="fnc-nav__control-progress"></span>
                    </button>
                </div>
            </nav>
        </div>

    </div>

    <section class="heading">

        <div class="input-sec">
            <div class="what">
                <label for="">What</label>
                <div class="position-relative left-icon">
                    <input type="text" class="form-control" name="designation"
                        placeholder="Job title,designation,skill or company">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <div class="where">
                <label for="">Where</label>
                <div class="position-relative left-icon">
                    <input type="text" class="form-control location-input" name="job_location"
                        placeholder="Town, city or postcode" value="{{ $location ?? '' }}">
                    <i class="far fa-compass"></i>

                </div>
            </div>
            <div class="find-btn">
                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-search"></i> Find
                    Jobs</button>
            </div>
        </div>
    </section>

    <section class="keep-card" style="margin-top: 20px;">
        <h1>
            Fresher's J<i class="fas fa-search" style="color: rgb(255, 153, 0); font-size: 19px;"></i>bs</h1>
        <div class="div-one content" id="job_category"
            style="{{ $category == 'fresher' ? 'display:block;' : 'display:none;' }}">

            <div class="container-card" style="margin-top: 60px;">
                @foreach ($jobs as $job)
                    <div class="box-card">
                        <div class="top-box">
                            <div class="left-top">
                                @php
                                    $str_path = str_replace('public/', ' ', $job->company->image);
                                    // dd($str_path)
                                @endphp
                                @if (file_exists($job->company->hh_img))
                                    <img class="img-fluid" src="{{ $job->company->hh_img }}" alt="image">

                                @elseif(isset($job->company->image) && file_exists($job->company->image))
                                    <img style="height:50px;width:70px" class="img-fluid"
                                        src="{{ url($str_path) }}"alt="image">
                                @else
                                    {{-- {{ url($str_path) }}   --}}
                                    <img class="img-fluid" src="{{ url('images/company/white_force.png') }}"
                                        alt="image">
                                @endif
                                
                                <div class="card-name-first">
                                    <p class="tooltips">{{ substr($job->company->name ,0 , 14) }}
                                      {{-- <span class="tooltipstext">{{ $job->company->name }}</span> --}}
                                    </p>
                                    <span>
                                        <i class="fa-solid fa-location-dot"></i>
                                        {{ isset($job->job_location) && $job->job_location != ' ' ? ucwords($job->job_location) : 'Work From Home' }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="mid-box">
                            <h2> {{ isset($job->position) ? ucwords($job->position) : '' }}</h2>
                            @php
                                $start = new \Carbon\Carbon("$job->created_at");
                                $end = new \Carbon\Carbon();
                            @endphp
                            <div class="right-top">
                                <span><i class="fa-solid fa-briefcase"></i>
                                    {{ $job->experience_year_from }}-{{ $job->experience_year_to }}
                                    Yrs</span>
                                <p>
                                    <i class="fa-solid fa-location-dot"></i> {{ $start->diff($end)->format('%d') }}
                                    Day(s)
                                    Ago
                                </p>
                            </div>
                        </div>
                        <div class="w-full">
                            <p>
                                {{substr( $job->job_description,0,160) }} ... <div class="trigger">Read more

                                  <div class="modal">
                                    <div class="modal-content">
                                        <span class="close-button">×</span>
                                        <h1>Hello, I am a modal!</h1>
                                    </div>
                                </div>
                                  {{-- <span class="tooltiptext">{{ $job->job_description }}</span> --}}
                                </div>
                            </p>
                        </div>


                        <div class="applied">
                            <div class="amount">
                                <span class="price">
                                    @if ($job->salary_type == 'USD')
                                        ${{ $job->package_offer_from }} - <br> $
                                        {{ $job->package_offer_to }} USD
                                    @else
                                        ₹{{ $job->package_offer_from }} - <br> ₹
                                        {{ $job->package_offer_to }} 
                                    @endif
                                </span><span class="muted">/ Month</span>
                            </div>
                            <div class="app-bttn">
                                <a href="{{ url('job-description', [$job->id]) }}">
                                    <button>Apply Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
       
        </div>


        {{-- <div class="box-card">
            <div class="top-box">
                <div class="left-top">
                    <img src="{{ url('assets/job-img/pic1.png') }}" alt="" />
                    <div class="card-name-first">
                        <p>Microsoft</p>
                        <span>
                            <i class="fa-solid fa-location-dot"></i> Jabalpur MP
                        </span>
                    </div>
                </div>
            </div>
            <div class="mid-box">
                <h2>Web Designer/Developer</h2>

                <div class="right-top">
                    <span><i class="fa-solid fa-briefcase"></i>Full-Time</span>
                    <p>
                        <i class="fa-solid fa-location-dot"></i> Posted 4 months ago
                    </p>
                </div>
            </div>
            <div class="w-full">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Recusandae architecto eveniet, dolor quo repellendus pariatur.
                </p>
            </div>


            <div class="applied">
                <div class="amount">
                    <span class="price">$500</span><span class="muted">/ Month</span>
                </div>
                <div class="app-bttn">
                    <a href="./apply.html">
                        <button>Apply Now</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="box-card">
            <div class="top-box">
                <div class="left-top">
                    <img src="{{ url('assets/job-img/pic4.png') }}" alt="" />
                    <div class="card-name-first">
                        <p>Google</p>
                        <span>
                            <i class="fa-solid fa-location-dot"></i> Jabalpur MP
                        </span>
                    </div>
                </div>
            </div>
            <div class="mid-box">
                <h2>Web Designer/Developer</h2>

                <div class="right-top">
                    <span><i class="fa-solid fa-briefcase"></i>Full-Time</span>
                    <p>
                        <i class="fa-solid fa-location-dot"></i> Posted 4 months ago
                    </p>
                </div>
            </div>
            <div class="w-full">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Recusandae architecto eveniet, dolor quo repellendus pariatur.
                </p>
            </div>


            <div class="applied">
                <div class="amount">
                    <span class="price">$500</span><span class="muted">/ Month</span>
                </div>
                <div class="app-bttn">
                    <a href="./apply.html">
                        <button>Apply Now</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="box-card">
            <div class="top-box">
                <div class="left-top">
                    <img src="{{ url('assets/job-img/pic3.png') }}" alt="" />
                    <div class="card-name-first">
                        <p>GitHub</p>
                        <span>
                            <i class="fa-solid fa-location-dot"></i> Jabalpur MP
                        </span>
                    </div>
                </div>
            </div>
            <div class="mid-box">
                <h2>Web Designer/Developer</h2>

                <div class="right-top">
                    <span><i class="fa-solid fa-briefcase"></i>Full-Time</span>
                    <p>
                        <i class="fa-solid fa-location-dot"></i> Posted 4 months ago
                    </p>
                </div>
            </div>
            <div class="w-full">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Recusandae architecto eveniet, dolor quo repellendus pariatur.
                </p>
            </div>


            <div class="applied">
                <div class="amount">
                    <span class="price">$500</span><span class="muted">/ Month</span>
                </div>
                <div class="app-bttn">
                    <a href="./apply.html">
                        <button>Apply Now</button>
                    </a>
                </div>
            </div>
        </div>


        <div class="box-card">
            <div class="top-box">
                <div class="left-top">
                    <img src="{{ url('assets/job-img/ibm.png') }}" alt="" style=" width:55px !important;">
                    <div class="card-name-first">
                        <p>IBM</p>
                        <span>
                            <i class="fa-solid fa-location-dot"></i> Jabalpur MP
                        </span>
                    </div>
                </div>
            </div>
            <div class="mid-box">
                <h2>Web Designer/Developer</h2>

                <div class="right-top">
                    <span><i class="fa-solid fa-briefcase"></i>Full-Time</span>
                    <p>
                        <i class="fa-solid fa-location-dot"></i> Posted 4 months ago
                    </p>
                </div>
            </div>
            <div class="w-full">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Recusandae architecto eveniet, dolor quo repellendus pariatur.
                </p>
            </div>


            <div class="applied">
                <div class="amount">
                    <span class="price">$500</span><span class="muted">/ Month</span>
                </div>
                <div class="app-bttn">
                    <a href="./apply.html">
                        <button>Apply Now</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="box-card">
            <div class="top-box">
                <div class="left-top">
                    <img src="{{ url('assets/job-img/linkdin.png') }}" alt="" />
                    <div class="card-name-first">
                        <p>LinkedIn Corporation</p>
                        <span>
                            <i class="fa-solid fa-location-dot"></i> Jabalpur MP
                        </span>
                    </div>
                </div>
            </div>
            <div class="mid-box">
                <h2>Web Designer/Developer</h2>

                <div class="right-top">
                    <span><i class="fa-solid fa-briefcase"></i>Full-Time</span>
                    <p>
                        <i class="fa-solid fa-location-dot"></i> Posted 4 months ago
                    </p>
                </div>
            </div>
            <div class="w-full">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Recusandae architecto eveniet, dolor quo repellendus pariatur.
                </p>
            </div>


            <div class="applied">
                <div class="amount">
                    <span class="price">$500</span><span class="muted">/ Month</span>
                </div>
                <div class="app-bttn">
                    <a href="./apply.html">
                        <button>Apply Now</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="box-card">
            <div class="top-box">
                <div class="left-top">
                    <img src="{{ url('assets/job-img/download.png') }}" alt="" />
                    <div class="card-name-first">
                        <p>Meta</p>
                        <span>
                            <i class="fa-solid fa-location-dot"></i> Jabalpur MP
                        </span>
                    </div>
                </div>
            </div>
            <div class="mid-box">
                <h2>Web Designer/Developer</h2>

                <div class="right-top">
                    <span><i class="fa-solid fa-briefcase"></i>Full-Time</span>
                    <p>
                        <i class="fa-solid fa-location-dot"></i> Posted 4 months ago
                    </p>
                </div>
            </div>
            <div class="w-full">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Recusandae architecto eveniet, dolor quo repellendus pariatur.
                </p>
            </div>


            <div class="applied">
                <div class="amount">
                    <span class="price">$500</span><span class="muted">/ Month</span>
                </div>
                <div class="app-bttn">
                    <a href="./apply.html">
                        <button>Apply Now</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="box-card">
            <div class="top-box">
                <div class="left-top">
                    <img src="{{ url('assets/job-img/wipro.jpg') }}" alt="" style="width: 90px;">
                    <div class="card-name-first">
                        <p>Wipro</p>
                        <span>
                            <i class="fa-solid fa-location-dot"></i> Jabalpur MP
                        </span>
                    </div>
                </div>
            </div>
            <div class="mid-box">
                <h2>Web Designer/Developer</h2>

                <div class="right-top">
                    <span><i class="fa-solid fa-briefcase"></i>Full-Time</span>
                    <p>
                        <i class="fa-solid fa-location-dot"></i> Posted 4 months ago
                    </p>
                </div>
            </div>
            <div class="w-full">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Recusandae architecto eveniet, dolor quo repellendus pariatur.
                </p>
            </div>
            <!-- <div class="apps">
              <span class="grey-small" href="https://"> App </span>
              <span class="grey-small" href="https://"> Figma </span>
              <span class="grey-small" href="https://"> PSD </span>
            </div> -->

            <div class="applied">
                <div class="amount">
                    <span class="price">$500</span><span class="muted">/ Month</span>
                </div>
                <div class="app-bttn">
                    <a href="./apply.html">
                        <button>Apply Now</button>
                    </a>
                </div>
            </div>
        </div>



        <div class="box-card">
            <div class="top-box">
                <div class="left-top">
                    <img src="{{ url('assets/job-img/itc.jpg') }}" alt="" />
                    <div class="card-name-first">
                        <p>ITC Limited</p>
                        <span>
                            <i class="fa-solid fa-location-dot"></i> Jabalpur MP
                        </span>
                    </div>
                </div>
            </div>
            <div class="mid-box">
                <h2>Web Designer/Developer</h2>

                <div class="right-top">
                    <span><i class="fa-solid fa-briefcase"></i>Full-Time</span>
                    <p>
                        <i class="fa-solid fa-location-dot"></i> Posted 4 months ago
                    </p>
                </div>
            </div>
            <div class="w-full">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Recusandae architecto eveniet, dolor quo repellendus pariatur.
                </p>
            </div>

            <div class="applied">
                <div class="amount">
                    <span class="price">$500</span><span class="muted">/ Month</span>
                </div>
                <div class="app-bttn">
                    <a href="./apply.html">
                        <button>Apply Now</button>
                    </a>
                </div>
            </div>
        </div> --}}









        {{-- <div class="box-card">
          <div class="top-box">
            <div class="left-top">
              <img src="{{url('assets/job-img/pic1.png') }}" alt="" />
              <div class="card-name-first">
                <p>Microsoft</p>
                <span>
                  <i class="fa-solid fa-location-dot"></i> Jabalpur MP
                </span>
              </div>
            </div>
          </div>
          <div class="mid-box">
            <h2>Web Designer/Developer</h2>

            <div class="right-top">
              <span><i class="fa-solid fa-briefcase"></i>Full-Time</span>
              <p>
                <i class="fa-solid fa-location-dot"></i> Posted 4 months ago
              </p>
            </div>
          </div>
          <div class="w-full">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Recusandae architecto eveniet, dolor quo repellendus pariatur.
            </p>
          </div>


          <div class="applied">
            <div class="amount">
              <span class="price">$500</span><span class="muted">/ Month</span>
            </div>
            <div class="app-bttn">
              <a href="./apply.html">
                <button>Apply Now</button>
              </a>
            </div>
          </div>
        </div>
        <div class="box-card">
          <div class="top-box">
            <div class="left-top">
              <img src="{{ url('assets/job-img/pic4.png') }}" alt="" />
              <div class="card-name-first">
                <p>Google</p>
                <span>
                  <i class="fa-solid fa-location-dot"></i> Jabalpur MP
                </span>
              </div>
            </div>
          </div>
          <div class="mid-box">
            <h2>Web Designer/Developer</h2>

            <div class="right-top">
              <span><i class="fa-solid fa-briefcase"></i>Full-Time</span>
              <p>
                <i class="fa-solid fa-location-dot"></i> Posted 4 months ago
              </p>
            </div>
          </div>
          <div class="w-full">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Recusandae architecto eveniet, dolor quo repellendus pariatur.
            </p>
          </div>


          <div class="applied">
            <div class="amount">
              <span class="price">$500</span><span class="muted">/ Month</span>
            </div>
            <div class="app-bttn">
              <a href="./apply.html">
                <button>Apply Now</button>
              </a>
            </div>
          </div>
        </div>
        <div class="box-card">
          <div class="top-box">
            <div class="left-top">
              <img src="{{ url('assets/job-img/pic3.png') }}" alt="" />
              <div class="card-name-first">
                <p>GitHub</p>
                <span>
                  <i class="fa-solid fa-location-dot"></i> Jabalpur MP
                </span>
              </div>
            </div>
          </div>
          <div class="mid-box">
            <h2>Web Designer/Developer</h2>

            <div class="right-top">
              <span><i class="fa-solid fa-briefcase"></i>Full-Time</span>
              <p>
                <i class="fa-solid fa-location-dot"></i> Posted 4 months ago
              </p>
            </div>
          </div>
          <div class="w-full">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Recusandae architecto eveniet, dolor quo repellendus pariatur.
            </p>
          </div>


          <div class="applied">
            <div class="amount">
              <span class="price">$500</span><span class="muted">/ Month</span>
            </div>
            <div class="app-bttn">
              <a href="./apply.html">
                <button>Apply Now</button>
              </a>
            </div>
          </div>
        </div> --}}
        </div>
    </section>
<script>
  const modal = document.querySelector(".modal");
const trigger = document.querySelector(".trigger");
const closeButton = document.querySelector(".close-button");

function toggleModal() {
    modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/66f2518709.js" crossorigin="anonymous"></script>
    <script src="{{ url('js/job.js') }}"></script>
</body>

</html>
