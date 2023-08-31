<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login To Happiest Resume </title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">

    {{--    <link rel="icon" href="{{URL::to('public/files/assets/images/favicon.ico')}}" type="image/x-icon">--}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{URL::to('public/files/bower_components/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::to('public/files/assets/icon/themify-icons/themify-icons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::to('public/files/assets/icon/icofont/css/icofont.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::to('public/files/assets/css/style.css')}}">
</head>

<body class="fix-menu">

    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>

    <section class="login-block">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    {{-- <form class="md-float-material form-material" action="{{url('admin-login')}}" method="post"
                    enctype="multipart/form-data"> --}}
                    <form class="md-float-material form-material " action="{{ route('login') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="text-center">
                            <img src="{{URL::to('public/front/images/logo1.png')}}" alt="logo.png">
                            {{--<img src="../files/assets/images/logo.png" alt="logo.png">--}}
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Sign In</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="email" name="email" id="email"
                                        class="form-control @error('email') is-invalid @enderror" required=""
                                        placeholder="Your Username">
                                    <span class="form-bar"></span>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" id="password"
                                        class="form-control @error('password') is-invalid @enderror" required=""
                                        placeholder="Password">
                                    <span class="form-bar"></span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{--<div class="row m-t-25 text-left">--}}
                                {{--<div class="col-12">--}}
                                {{--<div class="checkbox-fade fade-in-primary d-">--}}
                                {{--<label>--}}
                                {{--<input type="checkbox" name="remember_me" id="remember_me" value="">--}}
                                {{--<span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>--}}
                                {{--<span class="text-inverse">Remember me</span>--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                {{--<div class="forgot-phone text-right f-right">--}}
                                {{--<a href="{{url('#')}}" class="text-right f-w-600"> Forgot Password?</a>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign
                                            in</button>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                                <hr />
                                <div class="clear text-center pt-10">

                                    @if( count($errors) > 0)
                                    @foreach($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                        <span class="sr-only">{{ trans('labels.Error') }}:</span>
                                        {{ $error }}
                                    </div>
                                    @endforeach
                                    @endif

                                    @if(Session::has('loginError'))
                                    <div class="alert alert-danger" role="alert">
                                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                        <span class="sr-only">{{ trans('labels.Error') }}:</span>
                                        {!! session('loginError') !!}
                                    </div>
                                    @endif
                                    {{--<a class="btn btn-dark btn-lg btn-block no-border mt-15 mb-15" href="#"--}}
                                    {{--data-bg-color="#3b5998">Login with facebook</a>--}}
                                    {{--<a class="btn btn-dark btn-lg btn-block no-border" href="#"--}}
                                    {{--data-bg-color="#00acee">Login with twitter</a>--}}
                                </div>
                                {{--<div class="row">--}}
                                {{--<div class="col-md-10">--}}
                                {{--<p class="text-inverse text-left m-b-0">Thank you.</p>--}}
                                {{--<p class="text-inverse text-left"><a href="index.html"><b class="f-w-600">Back to website</b></a></p>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-2">--}}
                                {{--<img src="../files/assets/images/auth/Logo-small-bottom.png" alt="small-logo.png">--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>


    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="{{URL::to('public/files/assets/images/browser/chrome.png')}}" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="{{URL::to('public/files/assets/images/browser/firefox.png')}}" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="{{URL::to('public/files/assets/images/browser/opera.png')}}" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="{{URL::to('public/files/assets/images/browser/safari.png')}}" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="{{URL::to('public/files/assets/images/browser/ie.png')}}" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


    <script type="4c9764a87d9c6d931a183e80-text/javascript"
        src="{{URL::to('public/files/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="4c9764a87d9c6d931a183e80-text/javascript"
        src="{{URL::to('public/files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="4c9764a87d9c6d931a183e80-text/javascript"
        src="{{URL::to('public/files/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script type="4c9764a87d9c6d931a183e80-text/javascript"
        src="{{URL::to('public/files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>

    <script type="4c9764a87d9c6d931a183e80-text/javascript"
        src="{{URL::to('public/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>

    <script type="4c9764a87d9c6d931a183e80-text/javascript"
        src="{{URL::to('public/files/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script type="4c9764a87d9c6d931a183e80-text/javascript"
        src="{{URL::to('public/files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

    <script type="4c9764a87d9c6d931a183e80-text/javascript"
        src="{{URL::to('public/files/bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="4c9764a87d9c6d931a183e80-text/javascript"
        src="{{URL::to('public/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    {{--<script type="4c9764a87d9c6d931a183e80-text/javascript"--}}
        {{--src="../files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js">--}}
    {{--</script>--}}
    <script type="4c9764a87d9c6d931a183e80-text/javascript"
        src="{{URL::to('public/files/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    <script type="4c9764a87d9c6d931a183e80-text/javascript" src="{{URL::to('public/files/assets/js/common-pages.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
        type="4c9764a87d9c6d931a183e80-text/javascript"></script>
    <script type="4c9764a87d9c6d931a183e80-text/javascript">
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
    </script>
    <script src="{{url('https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js')}}"
        data-cf-settings="4c9764a87d9c6d931a183e80-|49" defer=""></script>
</body>

</html>