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
    <title>Happiest Resume: @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ url('assets/happiestNewAssets/img/logo.png') }}">
    <link rel="stylesheet" href="{{ url('assets/happiestNewAssets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/happiestNewAssets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/happiestNewAssets/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/happiestNewAssets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="{{ url('assets/happiestNewAssets/js/jquery-2.2.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/happiestNewAssets/js/slick.js') }}"></script>
    <script src="{{ url('assets/happiestNewAssets/js/custom.js') }}"></script>
    <script src="{{ url('assets/happiestNewAssets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>


</head>
<style>
    .preloader {
        align-items: center;
        background: #F8FAF9;
        display: flex;
        height: 100vh;
        justify-content: center;
        left: 0;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 9999;
    }

    body {
        overflow-x: hidden !important;
    }


    /* Loader Start  */

    body {
        overflow: hidden;
    }

    body:has(.wrap-loader.remove) {
        overflow: auto;
    }

    .wrap-loader.remove {
        display: none;
        z-index: -5;
        pointer-events: none
    }

    .wrap-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: #fff;
        z-index: 50000;
    }

    .loader {
        position: relative;
        width: 20rem;
        height: 20rem;
    }

    .loader::before {
        z-index: 1;
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 8.6956521739rem;
        height: 8.6956521739rem;
        background: #fff;
        border-radius: 50%;
    }

    .loader .box {
        position: absolute;
        width: 10rem;
        height: 10rem;
        overflow: hidden;
    }

    .loader .box::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        opacity: 0.1;
    }

    .loader .box:nth-child(1) {
        top: 0;
        left: 0;
    }

    .loader .box:nth-child(1)::before {
        top: 50%;
        left: 50%;
        background: #4185F3;
        -webkit-animation: lightMe1 4.4s ease-out infinite normal;
        animation: lightMe1 4.4s ease-out infinite normal;
    }

    .loader .box:nth-child(2) {
        top: 0;
        right: 0;
    }

    .loader .box:nth-child(2)::before {
        top: 50%;
        right: 50%;
        background: #33A753;
        -webkit-animation: lightMe2 4.4s ease-out infinite normal;
        animation: lightMe2 4.4s ease-out infinite normal;
    }

    .loader .box:nth-child(3) {
        bottom: 0;
        right: 0;
    }

    .loader .box:nth-child(3)::before {
        bottom: 50%;
        right: 50%;
        background: #FABB04;
        -webkit-animation: lightMe3 4.4s ease-out infinite normal;
        animation: lightMe3 4.4s ease-out infinite normal;
    }

    .loader .box:nth-child(4) {
        bottom: 0;
        left: 0;
    }

    .loader .box:nth-child(4)::before {
        bottom: 50%;
        left: 50%;
        background: #E94234;
        -webkit-animation: lightMe4 4.4s linear infinite normal;
        animation: lightMe4 4.4s linear infinite normal;
    }

    .loader .wrap-text {
        z-index: 2;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 40px;
        height: 40px;
        overflow: hidden;
    }

    .loader .text {
        position: relative;
        width: 40px;
        height: 40px;
        line-height: 40px;
        -webkit-animation: slider 4.4s ease-in infinite;
        animation: slider 4.4s ease-in infinite;
    }

    .loader .text span {
        display: block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        font-size: 2em;
        color: #000;
    }

    .loader-text {
        color: #000;
        transform: translateY(-2rem);
        letter-spacing: 6px;
        opacity: 0.2;
        -webkit-animation: blink 400ms ease-out infinite alternate;
        animation: blink 400ms ease-out infinite alternate;
    }

    @-webkit-keyframes lightMe1 {
        0% {
            opacity: 0.1;
        }

        25% {
            opacity: 1;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes lightMe1 {
        0% {
            opacity: 0.1;
        }

        25% {
            opacity: 1;
        }

        100% {
            opacity: 1;
        }
    }

    @-webkit-keyframes lightMe2 {
        0% {
            opacity: 0.1;
        }

        25% {
            opacity: 0.1;
        }

        50% {
            opacity: 1;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes lightMe2 {
        0% {
            opacity: 0.1;
        }

        25% {
            opacity: 0.1;
        }

        50% {
            opacity: 1;
        }

        100% {
            opacity: 1;
        }
    }

    @-webkit-keyframes lightMe3 {
        0% {
            opacity: 0.1;
        }

        50% {
            opacity: 0.1;
        }

        75% {
            opacity: 1;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes lightMe3 {
        0% {
            opacity: 0.1;
        }

        50% {
            opacity: 0.1;
        }

        75% {
            opacity: 1;
        }

        100% {
            opacity: 1;
        }
    }

    @-webkit-keyframes lightMe4 {
        0% {
            opacity: 0.1;
        }

        75% {
            opacity: 0.1;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes lightMe4 {
        0% {
            opacity: 0.1;
        }

        75% {
            opacity: 0.1;
        }

        100% {
            opacity: 1;
        }
    }

    @-webkit-keyframes slider {
        0% {
            transform: translateY(0);
        }

        10.5% {
            transform: translateY(0);
        }

        12.5% {
            transform: translateY(-40px);
        }

        23% {
            transform: translateY(-40px);
        }

        25% {
            transform: translateY(-80px);
        }

        35% {
            transform: translateY(-80px);
        }

        37.5% {
            transform: translateY(-120px);
        }

        47.5% {
            transform: translateY(-120px);
        }

        50% {
            transform: translateY(-160px);
        }

        60% {
            transform: translateY(-160px);
        }

        62.5% {
            transform: translateY(-200px);
        }

        72.5% {
            transform: translateY(-200px);
        }

        75% {
            transform: translateY(-240px);
        }

        85% {
            transform: translateY(-240px);
        }

        87.5% {
            transform: translateY(-280px);
        }

        100% {
            transform: translateY(-280px);
        }
    }

    @keyframes slider {
        0% {
            transform: translateY(0);
        }

        10.5% {
            transform: translateY(0);
        }

        12.5% {
            transform: translateY(-40px);
        }

        23% {
            transform: translateY(-40px);
        }

        25% {
            transform: translateY(-80px);
        }

        35% {
            transform: translateY(-80px);
        }

        37.5% {
            transform: translateY(-120px);
        }

        47.5% {
            transform: translateY(-120px);
        }

        50% {
            transform: translateY(-160px);
        }

        60% {
            transform: translateY(-160px);
        }

        62.5% {
            transform: translateY(-200px);
        }

        72.5% {
            transform: translateY(-200px);
        }

        75% {
            transform: translateY(-240px);
        }

        85% {
            transform: translateY(-240px);
        }

        87.5% {
            transform: translateY(-280px);
        }

        100% {
            transform: translateY(-280px);
        }
    }

    @-webkit-keyframes blink {
        from {
            opacity: 0.2;
        }

        to {
            opacity: 0.75;
        }
    }

    @keyframes blink {
        from {
            opacity: 0.2;
        }

        to {
            opacity: 0.75;
        }
    }
</style>

<body>
    @include('frontend.chatbot_script')
    <main class="main_block">
        {{-- <div id="loader-overlay" class="loader_overlay">
            <div class="loader">
                <div class="loader-inner"></div>
            </div>
        </div> --}}
        {{-- <div class="preloader">

            <lottie-player src="{{ url('assets/happiestNewAssets/loader/lottie-anim.json') }}" background="transparent"
                speed="1" style="width: 600px; height: 600px;" loop autoplay></lottie-player>
        </div> --}}


        <div class="wrap-loader">
            <div class="loader">
                <div class="box"></div>
                <div class="box"></div>
                <div class="box"></div>
                <div class="box"></div>
                <div class="wrap-text">
                    <div class="text">
                        {{-- <span>L</span><span>O</span><span>A</span><span>D</span><span>I</span><span>N</span><span>G</span><span><i class="fa-solid fa-face-smile-beam" style="color: #fa9e00;"></i></span> --}}

                        <span>H</span><span>A</span><span>P</span><span>P</span><span>I</span><span>E</span><span>S</span> <span>T</span> <span><i class="fa-solid fa-face-smile-beam" style="color: #fa9e00;"></i></span>
                    </div>
                </div>
            </div>
            <div class="loader-text">wait please</div>
        </div>


        <nav>
            @include('frontend.common.newNav')

            </div>
        </nav>
        @yield('newContent')
        @if (session()->has('flashError'))
            <script type="text/javascript">
                $(window).on('load', function() {
                    $('#modal_login').modal('show');
                });
            </script>
        @endif

        <div class="menu_overlay" id="menu_overlay_div" onclick="ResponsiveMenu();"></div>
    </main>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                $(function() {
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


    @if (session()->has('message'))
        <script>
            $(function() {
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
            $(function() {
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
            $(function() {
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
            $(function() {
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
            $(function() {
                SnackBar({
                    message: "{{ $message }}",
                    status: "alert",
                    fixed: true,
                    timeout: 9000
                });
            });
        </script>
    @endif

    <!-- slick js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- ✅ load Slick ✅ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- slick js -->


    <script>
        setTimeout(() => {
            console.log("is runnning");
            let wrapLoader = document.querySelector(".wrap-loader");
            wrapLoader.classList.add("remove");
        }, 4300);
        
    </script>
    <script>
        const preloader = document.querySelector('.preloader');
        const fadeEffect = setInterval(() => {
            // if we don't set opacity 1 in CSS, then
            // it will be equaled to "" -- that's why
            // we check it, and if so, set opacity to 1
            if (!preloader.style.opacity) {
                preloader.style.opacity = 1;
            }
            if (preloader.style.opacity > 0) {
                preloader.style.opacity = 0;
            } else {
                clearInterval(fadeEffect);
                preloader.style.display = 'none'
            }
        }, 5000);
    </script>
    <script>
        const container = document.querySelectorAll(".showcase__feature");
        const videoContainer = document.querySelectorAll(".showcase__video");

        function changevideo(event) {
            container.forEach(function(node) {
                if (event.target.innerText === node.innerText) {
                    node.classList.add('showcase__feature--active')
                    const childItem = node.getElementsByClassName("showcase__feature-subtitle");
                    childItem[0].classList.add("subtitle--active");

                    // video
                    videoContainer.forEach(function(node) {
                        const nodeText = node.innerText.trim();
                        if (event.target.innerText === nodeText) {
                            node.classList.add('swiper-slide-active')
                        } else {
                            node.classList.remove('swiper-slide-active')
                        }
                    })
                } else {
                    node.classList.remove('showcase__feature--active');
                    const childItem = node.getElementsByClassName("showcase__feature-subtitle");
                    childItem[0].classList.remove("subtitle--active");
                }
            })
        }



        function animateValue(obj, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                obj.innerHTML = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        const registered = document.getElementById("registered");
        animateValue(registered, 387910, 387944, 5000);

        const jobs = document.getElementById("jobs");
        animateValue(jobs, 19200, 19258, 5000);

        const happyclients = document.getElementById("happyclients");
        animateValue(happyclients, 2800, 2828, 5000);
    </script>

    <script>
        function onSubmit(token) {
            document.getElementById("contact-form-query").submit();
        }
    </script>
        <script
        src="https://kit.fontawesome.com/66f2518709.js"
        crossorigin="anonymous"
      ></script>
</body>

</html>
