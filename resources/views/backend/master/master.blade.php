<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>

    <script src="{{url('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script src="{{url('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    {{-- <link rel="icon" href="{{url('https://colorlib.com//polygon/adminty/files/assets/images/favicon.ico')}}" --}}
    <link rel="icon" href="{{URL::to('public/front/images/logo1.png')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="{{url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,800')}}" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css"
          href="{{URL::to('public/files/bower_components/bootstrap/css/bootstrap.min.css')}}">

    <!-- jquery file upload Frame work -->
    <link href="{{URL::to('public/files/assets/pages/jquery.filer/css/jquery.filer.css')}}" type="text/css"
          rel="stylesheet"/>
    <link href="{{URL::to('public/files/assets/pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}"
          type="text/css" rel="stylesheet"/>
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/files/assets/icon/feather/css/feather.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/files/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/files/assets/css/jquery.mCustomScrollbar.css')}}">

    <link rel="stylesheet" type="text/css"
          href="{{URL::to('public/files/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/files/assets/icon/icofont/css/icofont.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/files/assets/icon/feather/css/feather.css')}}">
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css"
          href="{{URL::to('public/files/assets/pages/advance-elements/css/bootstrap-datetimepicker.css')}}">
    <!-- Date-range picker css  -->
{{-- <link rel="stylesheet" type="text/css" --}}
{{-- href="{{URL::to('public/files/bower_components/bootstrap-daterangepicker/css/daterangepicker.css" ')}}" /> --}}
<!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css"
          href="{{URL::to('public/files/bower_components/datedropper/css/datedropper.min.css')}}"/>
    <!-- Color Picker css -->
    <link rel="stylesheet" type="text/css"
          href="{{URL::to('public/files/bower_components/spectrum/css/spectrum.css')}}"/>
    <!-- Mini-color css -->
    <link rel="stylesheet" type="text/css"
          href="{{URL::to('public/files/bower_components/jquery-minicolors/css/jquery.minicolors.css')}}"/>
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/files/assets/css/style.css')}}">


    <link rel="stylesheet" type="text/css" href="{{URL::to('public/files/assets/css/jquery.mCustomScrollbar.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    
      

</head>

<body>
<!-- Pre-loader start -->
@include('backend.common.pre_loader')
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            <div class="navbar-wrapper">

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="{{'admin'}}">
                        {{--<img class="img-fluid" src="{{URL::to('public/files/assets/images/logo.png')}}"
                        alt="Theme-Logo"/>--}}
                        <img class="img-fluid" src="{{URL::to('public/front/images/logo1.png')}}" alt="Theme-Logo"
                             style="max-width: 70%;"/>
                    </a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li class="header-search">
                            <div class="main-search morphsearch-search">
                                <div class="input-group">
                                        <span class="input-group-addon search-close"><i
                                                    class="feather icon-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i
                                                class="feather icon-search"></i></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#!"
                               onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()"
                               data-cf-modified-cc8ae795eb9f292c2b01b020-="">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        {{-- <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-bell"></i>
                                    <span class="badge bg-c-pink">5</span>
                                </div>
                                <ul class="show-notification notification-view dropdown-menu"
                                    data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="{{URL::to('public/files/assets/images/avatar-4.jpg')}}"
                        alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="notification-user">John Doe</h5>
                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                elit.</p>
                            <span class="notification-time">30 minutes ago</span>
                        </div>
                </div>
                </li>
                <li>
                    <div class="media">
                        <img class="d-flex align-self-center img-radius"
                            src="{{URL::to('public/files/assets/images/avatar-3.jpg')}}" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="notification-user">Joseph William</h5>
                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                elit.</p>
                            <span class="notification-time">30 minutes ago</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <img class="d-flex align-self-center img-radius"
                            src="{{URL::to('public/files/assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="notification-user">Sara Soudein</h5>
                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                elit.</p>
                            <span class="notification-time">30 minutes ago</span>
                        </div>
                    </div>
                </li>
                </ul>
            </div>
            </li> --}}
                        {{--chat--}}
                        {{--<li class="header-notification">--}}
                        {{--<div class="dropdown-primary dropdown">--}}
                        {{--<div class="displayChatbox dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="feather icon-message-square"></i>--}}
                        {{--<span class="badge bg-c-green">3</span>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</li>--}}
                        {{--chat--}}

                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{URL::to('public/files/assets/images/avatar-4.jpg')}}" class="img-radius"
                                         alt="User-Profile-Image">
                                    {{-- <span>{{ session('admin')->username}}</span> --}}
                                    <span>{{ Auth::user()->name }}</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu"
                                    data-dropdown-in="fadeIn"
                                    data-dropdown-out="fadeOut">
                                    <li>
                                        <a href="#!">
                                            <i class="feather icon-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('user-profile')}}">
                                            <i class="feather icon-user"></i>
                                            Profile
                                        </a>
                                    </li>
                                    {{--<li>--}}
                                    {{--<a href="#">--}}
                                    {{--<i class="feather icon-mail"></i> My Messages--}}
                                    {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                    {{--<a href="auth-lock-screen.html">--}}
                                    {{--<i class="feather icon-lock"></i> Lock Screen--}}
                                    {{--</a>--}}
                                    {{--</li>--}}
                                    {{-- <li>
                                        <a href="{{ url('admin-logout')}}">
                                    <i class="feather icon-log-out"></i>
                                    Logout
                                    </a>
                        </li> --}}
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                            <i class=" feather icon-log-out"></i>
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sidebar chat start -->
    {{--    @include('backend.common.sidebar_chat')--}}
    <!-- Sidebar inner chat start-->
    {{--<div class="showChat_inner">
        <div class="media chat-inner-header">
            <a class="back_chatBox">
                <i class="feather icon-chevron-left"></i> Josephin Doe
            </a>
        </div>
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-radius img-radius m-t-5" src="{{URL::to('public/files/assets/images/avatar-3.jpg')}}"
    alt="Generic placeholder image">
    </a>
    <div class="media-body chat-menu-content">
        <div class="">
            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
            <p class="chat-time">8:20 a.m.</p>
        </div>
    </div>
    </div>
    <div class="media chat-messages">
        <div class="media-body chat-menu-reply">
            <div class="">
                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
        <div class="media-right photo-table">
            <a href="#!">
                <img class="media-object img-radius img-radius m-t-5" src="{{URL::to('public/files/assets/images/avatar-4.jpg')}}"
                    alt="Generic placeholder image">
            </a>
        </div>
    </div>
    <div class="chat-reply-box p-b-20">
        <div class="right-icon-control">
            <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
            <div class="form-icon">
                <i class="feather icon-navigation"></i>
            </div>
        </div>
    </div>
    </div>--}}
    <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

                {{-- Start Side Navigation--}}
                @include('backend.common.sidebar_navigation')
                {{-- End Side Navigation--}}
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    {{--Start Content --}}
                                    @yield('content')
                                    {{--                                    @include('backend.common.dashboard')--}}
                                    {{--End Content--}}
                                </div>
                            </div>

                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="cc8ae795eb9f292c2b01b020-text/javascript"
        src="{{URL::to('public/files/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="cc8ae795eb9f292c2b01b020-text/javascript"
        src="{{URL::to('public/files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="cc8ae795eb9f292c2b01b020-text/javascript"
        src="{{URL::to('public/files/bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="cc8ae795eb9f292c2b01b020-text/javascript"
        src="{{URL::to('public/files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="cc8ae795eb9f292c2b01b020-text/javascript"
        src="{{URL::to('public/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="cc8ae795eb9f292c2b01b020-text/javascript"
        src="{{URL::to('public/files/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="cc8ae795eb9f292c2b01b020-text/javascript"
        src="{{URL::to('public/files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
<!-- Chart js -->
<script type="cc8ae795eb9f292c2b01b020-text/javascript"
        src="{{URL::to('public/files/bower_components/chart.js/js/Chart.js')}}"></script>
<!-- Bootstrap date-time-picker js -->
<script type="52f5cfcd4346aed4b57d03f6-text/javascript"
        src="{{URL::to('public/files/assets/pages/advance-elements/moment-with-locales.min.js')}}"></script>
<script type="52f5cfcd4346aed4b57d03f6-text/javascript"
        src="{{URL::to('public/files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script type="52f5cfcd4346aed4b57d03f6-text/javascript"
        src="{{URL::to('public/files/assets/pages/advance-elements/bootstrap-datetimepicker.min.js')}}"></script>
<!-- Date-range picker js -->
<script type="52f5cfcd4346aed4b57d03f6-text/javascript"
        src="{{URL::to('public/files/bower_components/bootstrap-daterangepicker/js/daterangepicker.js')}}"></script>
<!-- Date-dropper js -->
<script type="52f5cfcd4346aed4b57d03f6-text/javascript"
        src="{{URL::to('public/files/bower_components/datedropper/js/datedropper.min.js')}}"></script>
<!-- amchart js -->
<script src="{{URL::to('public/files/assets/pages/widget/amchart/amcharts.js')}}"
        type="cc8ae795eb9f292c2b01b020-text/javascript"></script>
<script src="{{URL::to('public/files/assets/pages/widget/amchart/serial.js')}}"
        type="cc8ae795eb9f292c2b01b020-text/javascript"></script>
<script src="{{URL::to('public/files/assets/pages/widget/amchart/light.js')}}"
        type="cc8ae795eb9f292c2b01b020-text/javascript">
</script>

<!-- jquery file upload js -->
<script src="{{URL::to('public/files/assets/pages/jquery.filer/js/jquery.filer.min.js')}}"
        type="bc37ec102f2500ab7685a4d4-text/javascript"></script>
<script src="{{URL::to('public/files/assets/pages/filer/custom-filer.js')}}"
        type="bc37ec102f2500ab7685a4d4-text/javascript">
</script>
<script src="{{URL::to('public/files/assets/pages/filer/jquery.fileuploads.init.js')}}"
        type="bc37ec102f2500ab7685a4d4-text/javascript"></script>

<!-- Custom js -->
<script type="cc8ae795eb9f292c2b01b020-text/javascript"
        src="{{URL::to('public/files/assets/js/SmoothScroll.js')}}"></script>
<script src="{{URL::to('public/files/assets/js/pcoded.min.js')}}"
        type="cc8ae795eb9f292c2b01b020-text/javascript"></script>
<script src="{{URL::to('public/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"
        type="cc8ae795eb9f292c2b01b020-text/javascript"></script>
<script src="{{URL::to('public/files/assets/js/vartical-layout.min.js')}}"
        type="cc8ae795eb9f292c2b01b020-text/javascript">
</script>
<script type="cc8ae795eb9f292c2b01b020-text/javascript"
        src="{{URL::to('public/files/assets/pages/dashboard/analytic-dashboard.min.js')}}"></script>
<script type="cc8ae795eb9f292c2b01b020-text/javascript" src="{{URL::to('public/files/assets/js/script.js')}}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="{{url('https://www.googletagmanager.com/gtag/js?id=UA-23581568-13')}}"
        type="cc8ae795eb9f292c2b01b020-text/javascript"></script>

<!-- Color picker js -->
<script type="52f5cfcd4346aed4b57d03f6-text/javascript"
        src="{{URL::to('public/files/bower_components/spectrum/js/spectrum.js')}}"></script>
<script type="52f5cfcd4346aed4b57d03f6-text/javascript"
        src="{{URL::to('public/files/bower_components/jscolor/js/jscolor.js')}}"></script>
<!-- Mini-color js -->
<script type="52f5cfcd4346aed4b57d03f6-text/javascript"
        src="{{URL::to('public/files/bower_components/jquery-minicolors/js/jquery.minicolors.min.js')}}"></script>
<!-- i18next.min.js -->
<script type="52f5cfcd4346aed4b57d03f6-text/javascript"
        src="{{URL::to('public/files/bower_components/i18next/js/i18next.min.js')}}"></script>
<script type="52f5cfcd4346aed4b57d03f6-text/javascript"
        src="{{URL::to('public/files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="52f5cfcd4346aed4b57d03f6-text/javascript"
        src="{{URL::to('public/files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}">
</script>
<script type="52f5cfcd4346aed4b57d03f6-text/javascript"
        src="{{URL::to('public/files/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
<!-- Custom js -->

<script type="52f5cfcd4346aed4b57d03f6-text/javascript"
        src="{{URL::to('public/files/assets/pages/advance-elements/custom-picker.js')}}"></script>
<script src="{{URL::to('public/files/assets/js/pcoded.min.js')}}"
        type="52f5cfcd4346aed4b57d03f6-text/javascript"></script>
<script src="{{URL::to('public/files/assets/js/vartical-layout.min.js')}}"
        type="52f5cfcd4346aed4b57d03f6-text/javascript">
</script>
<script src="{{URL::to('public/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"
        type="52f5cfcd4346aed4b57d03f6-text/javascript"></script>
<script type="52f5cfcd4346aed4b57d03f6-text/javascript" src="{{URL::to('public/files/assets/js/script.js')}}"></script>
<script src="{{URL::to('public/files/rocket-loader.min.js')}}" data-cf-settings="cc8ae795eb9f292c2b01b020-|49" defer="">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/tinymce.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/jquery.tinymce.min.js"></script>

<script type="ac676ce000f998437dbbb3a0-text/javascript" src="{{  url('/').'/' }}files/assets/pages/icon-modal.js">
</script>
<script>
    $(document).ready(function () {
        tinymce.init({
            selector: 'textarea',
            height: 200,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
            ],
            toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
            image_advtab: true
        });
    });
</script>

@include('backend.manipulation.edit')
@include('backend.manipulation.delete')
</body>

</html>