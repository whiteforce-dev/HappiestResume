<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Happiestresume | Login and Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/resumelogin/img/logo1.png') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ url('public/resumelogin/css/bootstrap.min.css') }}">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ url('public/resumelogin/css/fontawesome-all.min.css') }}">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="{{ url('public/resumelogin/css/flaticon.css') }}">
        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ url('public/resumelogin/css/style.css') }}">
    </head>
    

<body>
    <!--[if lt IE 8]>videoURL:'F_7ZoAQ3aJM', 
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    <section class="fxt-template-animation fxt-template-layout24" data-bg-image="{{ url('public/resumelogin/img/figure/bg24-l.jpg') }}">
        <!-- Video Area Start Here -->
        <div class="fxt-video-background">
            <div class="fxt-video">
                <div id="fxtVideo" data-property="{
                    videoURL:'QjYw8X1Y67A', 
                    autoPlay:true, 
                    mute:true, 
                    loop:true, 
                    startAt:0, 
                    opacity:1, 
                    quality:'default', 
                    showControls:false, 
                    optimizeDisplay:true,
                    containment:'.fxt-video-background'
                }">
                </div>
            </div>
        </div>
        <!-- Video Area Start Here -->
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-3">
                    <div class="fxt-header">
                     
                       
                        <img src="{{ url('public/resumelogin/img/logo1.png') }}" alt="Logo" style="margin-top: -245px;">
                    
                 
                        <div style="font-weight: bold;
                        font-size: 35px;
                        margin-top: -65px;
                        color: #fff;">Welcome</div>  

                        <p style="font-size: 16px;
                        color: #fff;
                    
                        margin-top: 30px;">YOU ARE 30 SECONDS AWAY FROM CREATING YOU PROFESSIONAL RESUME.</p>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="fxt-content">
                        <h2>Recover your password</h2>
                        <div class="fxt-form">
                            <form action="{{ url('candidate/recoverPassword') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input type="email" name="username" maxlength="50" minlength="10" id="forgotEmail" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                                        <button id="btnsubmit_forgot" type="submit" class="fxt-btn-fill">Send Me Email</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="fxt-footer">
                            <div class="fxt-transformY-50 fxt-transition-delay-9">
                                <p>Don't have an account?<a href="{{ url('resume-register') }}" class="switcher-text2 inline-text">Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="{{ url('public/resumelogin/js/jquery-3.5.0.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ url('public/resumelogin/js/bootstrap.min.js') }}"></script>
    <!-- Imagesloaded js -->
    <script src="{{ url('public/resumelogin/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- YouTube js -->
    <script src="{{ url('public/resumelogin/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Validator js -->
    <script src="{{ url('public/resumelogin/js/validator.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ url('public/resumelogin/js/main.js') }}"></script>

</body>

</html>