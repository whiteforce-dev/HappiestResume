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
    body{
        overflow-x: hidden !important;
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
        <div class="preloader">

            <lottie-player src="{{ url('assets/happiestNewAssets/loader/lottie-anim.json') }}" background="transparent"
                speed="1" style="width: 600px; height: 600px;" loop autoplay></lottie-player>
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
            container.forEach(function (node) {
                if (event.target.innerText === node.innerText) {
                    node.classList.add('showcase__feature--active')
                    const childItem = node.getElementsByClassName("showcase__feature-subtitle");
                    childItem[0].classList.add("subtitle--active");

                    // video
                    videoContainer.forEach(function (node) {
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
</body>

</html>
