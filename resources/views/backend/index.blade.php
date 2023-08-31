<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from html.kodesolution.live/m/echarity/v2/demo/form-login-style2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 May 2019 20:21:09 GMT -->
<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="ThemeMascot"/>

    <!-- Page Title -->
    <title>Happiest Resume : Admin</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{url('public/images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{url('public/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{url('public/images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{url('public/images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{url('public/images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('css/css-plugin-collections.css')}}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{url('css/menuzord-skins/menuzord-boxed.css')}}" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{url('css/style-main.css')}}" rel="stylesheet" type="text/css">

    <!-- CSS | Theme Color -->

    <link href="{{url('css/colors/theme-skin-orange.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{url('css/preloader.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{url('css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{url('css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> --><!-- external javascripts -->
    <script src="{{url('js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{url('js/jquery-ui.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{url('js/jquery-plugin-collection.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{url('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="{{url('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
                        

            
</head>
<body>
<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <i class="flaticon-charity-shelter font-60 text-theme-colored floating"></i>
            <h5 class="line-height-50 font-18">Loading...</h5>
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- start main-content -->
    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider parallax fullscreen layer-overlay overlay-white-9"
                 data-bg-img="images/bg/bg1.jpg">
            <div class="display-table">

                <div class="display-table-cell">

                    <div class="container">

                        <div class="row">
                            <a href="#" class="">
                            </a>
                            <div class="col-md-6 col-md-push-3">

                                <div class="text-center mb-60">

                                </div>
                                {{--<h4 class="text-theme-colored mt-0 pt-5"> Login</h4>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consectetur elit.</p >--}}

                                <form name="login-form" class="form-transparent clearfix" action="{{url('login')}}">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="login_username">Username/Email</label>
                                            <input id="login_username" name="login_username"
                                                   class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="login_password">Password</label>
                                            <input id="login_password" name="login_password"
                                                   class="form-control"
                                                   type="password">
                                        </div>
                                    </div>
                                    <div class="checkbox pull-left mt-15">
                                        <label for="form_checkbox">
                                            <input id="login_checkbox" name="login_checkbox"
                                                   type="checkbox"
                                                   value="remember">
                                            Remember me </label>
                                    </div>
                                    <div class="form-group pull-right mt-10">
                                        <button type="submit" class="btn btn-dark btn-sm">Login</button>
                                    </div>
                                    <div class="clear text-center pt-10">
                                        <a class="text-theme-colored font-weight-600 font-12" href="#">Forgot Your
                                            Password?</a>
                                    </div>
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer text-center">
        <div class="container pt-15 pb-15">
            <div class="row">
                <div class="col-md-12">
                    <p class="mb-0">Copyright ©2015 Medinova. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{url('js/custom.js')}}"></script>

</body>

<!-- Mirrored from html.kodesolution.live/m/echarity/v2/demo/form-login-style2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 May 2019 20:21:09 GMT -->
</html>