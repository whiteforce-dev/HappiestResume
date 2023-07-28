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
    <!-- Custom CSS  videoURL:'F_7ZoAQ3aJM',-->
    <link rel="stylesheet" href="{{ url('public/resumelogin/css/style.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>

<body>

    <section class="fxt-template-animation fxt-template-layout24"
        data-bg-image="{{ url('public/resumelogin/img/figure/bg24-l.jpg') }}">
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
                    containment:'.fxt-video-background'}">
                </div>
            </div>

        </div>

        <!-- Video Area Start Here -->
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-3 col-12">
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
                <div class="col-lg-6 col-12">
                    <div class="fxt-content">
                        <h2>Register for new account</h2>
                        <div class="fxt-form">
                            <form method="POST" action="{{url('registration')}}">
                                @csrf
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input type="text" id="name" class="form-control" name="name"
                                            placeholder="Full Name" autocomplete="off" required>
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input type="email" class="form-control" name="reg_email" id="reg_email"
                                            placeholder="Email Address" autocomplete="off" required>
                                        <small id="email_error" style="color:red"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input type="text" name="contact" id="reg_contact" autocomplete="off"
                                            minlength="10" maxlength="10"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                            class="form-control"  placeholder="Phone Number" required>
                                        <small id="contact_error" style="color:red"></small>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-2">
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Password" autocomplete="off" required>
                                        <i toggle="#password" class="fas fa-eye toggle-password field-icon"></i>
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                                        <input type="password" name="cpassword" id="cpassword" class="form-control"
                                            placeholder="Confirm Password" autocomplete="off" required>
                                        <i toggle="#cpassword" class="fas fa-eye toggle-password field-icon"></i>
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                  <label for="">Work Experience</label>
                     <select name="is_fresher" id="is_fresher" class="form-control" style="padding-top: 38px;" required>
                     <option value="" style="color:black">Select Any One</option>
                      <option value="1" style="color:black">Fresher</option>
                      <option value="0" style="color:black">Experienced</option>
                     </select>
                  </div> -->
                                <div class="form-group mt-3">

                                    <select name="candidate_type" id="candidate_type" class="form-control" required>
                                        <option style="color:#010102" value="">Resume Type</option>
                                        <option style="color:#010102" value="0">Indian</option>
                                        <option style="color:#010102" value="1">Abroad</option>
                                    </select>
                                </div>

                                @php
                                $industries= App\Industry::get();

                                @endphp
                                <div class="form-group mt-3">

                                    <select name="industry" id="industry" required class="form-control" required>
                                        <option style="color:#010102" value="" selected>Looking For</option>
                                        @foreach($industries as $industry )
                                        <option value="{{ $industry->industry_name }}" style="color:#010102">{{
                                            $industry->industry_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                                        <input type="submit" value="Signup Now" id="submit" class="fxt-btn-fill">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="fxt-footer">
                            <div class="fxt-transformY-50 fxt-transition-delay-9">
                                <p>Already have an account?
                                    <a href="{{ url('happiestresumelogin') }}" class="switcher-text2 inline-text">Log
                                        in</a>
                                </p>
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

    <script>
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
});

/*global $, document, window, setTimeout, navigator, console, location*/
$(document).ready(function () {

'use strict';

var usernameError = true,
    emailError    = true,
    passwordError = true,
    passConfirm   = true;

// Detect browser for css purpose
if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
    $('.form form label').addClass('fontSwitch');
}

// Label effect
$('input').focus(function () {

    $(this).siblings('label').addClass('active');
});


$('a.switch').click(function (e) {
    $(this).toggleClass('active');
    e.preventDefault();

    if ($('a.switch').hasClass('active')) {
       // document.getElementById("log_reg").innerHTML = "Login";
        $(this).parents('.form-peice').addClass('switched').siblings('.form-peice').removeClass('switched');
       
    } else {
        //document.getElementById("log_reg").innerHTML = "Registrer";
        $(this).parents('.form-peice').removeClass('switched').siblings('.form-peice').addClass('switched');
        
    }
});


$('a.profile').on('click', function () {
    location.reload(true);
});


});
    </script>


@if ($errors->any())
    @foreach ($errors->all() as $error)
    <script>
        $(function(){
            SnackBar({
                    message: "{{ $error }}",
                    status: "success",
                    fixed: true,
                    timeout: 7000
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
                    timeout: 7000
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
                    timeout: 7000
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
                    timeout: 7000
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
                    timeout: 7000
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
                    timeout: 7000
                });
        });
    </script>
    
    <script>
   $(document).on('show.bs.modal', '.modal', function () {
    var zIndex = 1040 + (10 * $('.modal:visible').length);
    $(this).css('z-index', zIndex);
    setTimeout(function() {
        $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
    }, 0);
});
    </script>
    @endif
</body>

</html>