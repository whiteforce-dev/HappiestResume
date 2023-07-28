<style>

.responsive {
  width: 100%;
  height: auto;
}

.login_btn_google_plus {
    background: #dd4b39;
}

.login_btn {
    position: relative;
    overflow: hidden;
    -moz-border-radius: 400px;
    -webkit-border-radius: 400px;
    border-radius: 400px;
    height: 48px;
    font-size: 14px;
    line-height: 48px;
    width: 48%;
    display: inline-block;
    color: #fff;
    text-align: center;
    -o-transition: all .3s;
    -moz-transition: all .3s;
    -webkit-transition: all .3s;
    -ms-transition: all .3s;
    transition: all .3s;
}

.login_btn_facebook {
    background: #4862a3;
   
}
a.waves-effect, a.waves-light {
    display: inline-block;
}
.waves-effect {
    position: relative;
    cursor: pointer;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
}
.or_border {
    width: 100px;
    margin: 0px auto;
    text-align: center;
    color: #0c0c0c;;
    position: relative;
    font-weight:bold;
}

</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet" href="{{url('public/front').'/'}}css/newlogin.css" type="text/css" />
<link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/js-snackbar.css?v=2.0.0" />
<link rel="stylesheet" href="{{url('public/front').'/'}}css/materialdesignicons.css" type="text/css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="{{URL::to('public/front').'/'}}js/js-snackbar.js?v=1.1.0"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>




<meta name="viewport" content="width=device-width, initial-scale=1">


<html>
<head>
<link rel="shortcut icon" href="https://happiestresume.com/public/front/jobsearch/images/logo1.png"/>
<title>Happiest Resume | Login</title>
</head>
<body>

    
<div class="modal fade " id="forgot_password" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content m_login">
            <div class="modal-header m_header">
                <h5 class="modal-title"><b>Forgot Password ?</b></h5>
                <button type="button" class="close m_close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ url('candidate/recoverPassword') }}" method="post">
                    @csrf
                    <div class="md-form mt-3">
                        <input type="text" name="username" maxlength="50" minlength="10" id="forgotEmail" required
                            class="form-control" autocomplete="off">
                        <label for="forgotEmail" class="">Provide valid email or contact no.</label>
                    </div>
                    <button id="btnsubmit_forgot" type="submit"
                        class="btn btn-primary btn-lg btn-block req_btn text-white">Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">

   <section id="formHolder">

      <div class="row">

         <!-- Brand Box -->
         <div class="col-sm-6 brand">
            <a href="#" class="logo"><img class="top_logoblack" src="https://happiestresume.com/public/front/jobsearch/images/logo1.png" alt="Happiest Logo"> </a>

            <div class="heading">
               <!-- <h2>Happiest Resume</h2>
               <p>Your Right Choice</p> -->
               <img src="{{url('public/front').'/'}}images/HAPPIEST-RESUME.png" alt="" class="responsive" width="600" height="400">
            </div>

            <div class="success-msg">
               <p>Great! You are one of our members now</p>
               <a href="#" class="profile">Your Profile</a>
            </div>
         </div>

       
         <!-- Form Box -->
         <div class="col-sm-6 form">
         
            <!-- Login Form -->
            <div class="login form-peice switched">
            <!-- <h3 style="margin-left: 27%;margin-top: 0;font-weight:bold;color:black">Login</h3> -->
               <form class="login-form" action="{{url('loginJobApply')}}" method="post">
               @csrf
            
              <!--  <div class="form-group">
                        <a  href="{{url('redirect/facebook')}}"
                            class="waves-effect waves-light login_btn_facebook login_btn" style="text-decoration: none;color: white;">
                            <i class="mdi mdi-facebook"></i>
                            | Log in with Facebook
                        </a>
                        <a  href="{{url('redirect/google')}}" style="text-decoration: none;color: white;"
                            class="login_btn_google_plus login_btn waves-effect waves-light" >
                            <i class="mdi mdi-google" ></i>
                            | Log in with Google
                        </a>
                </div>   -->  
                 <div class="form-group" style="display: flex;justify-content: center;">
                  
                        <a  href="{{url('redirect/google')}}" style="text-decoration: none;color: white;display: flex;justify-content: center;width: 106%;"
                            class="login_btn_google_plus login_btn waves-effect waves-light" >
                            <i class="mdi mdi-google" ></i>
                            | Log in with Google
                        </a>
                </div> 
                <div class="form-group">
                        <div class="or_border">OR</div>
                    </div>   
                  <div class="form-group">
                     <label for="loginemail">Email Adderss</label>
                     <input type="email" name="email" id="materialRegisterFormEmail" required autocomplete="off">
                  </div>

                  <div class="form-group">
                     <label for="loginPassword">Password</label>
                     <input type="password" name="password" id="materialRegisterFormPassword" required autocomplete="off">
                  </div>

                  <div class="CTA">
                     <input type="submit" value="Login">
                     <a href="#" class="switch btn btn-info btn-rounded" style="text-decoration:none;color:white;border-radius: 30px;padding: 5px 30px;    border: none;">Create New Account</a>
                     <!-- <a class="forgot_txt" onclick="frogetModal()" style="color: black;font-size:17px;margin-top: 14px;margin-left: 3px;" ><b>Forgot Password?</b></a> -->
                     <a  href="#" data-toggle="modal"
                        data-target="#forgot_password" style="color: black;font-size:17px;margin-top: 14px;margin-left: 3px;">Forgot Password?</a>
                  </div>
                
               </form>
               
            </div><!-- End Login Form -->

           
            <!-- Signup Form -->
            <div class="signup form-peice">
            
               <form class="signup-form" action="{{url('registrationJobApply'.'/'.$jid.'/'.$portal)}}" method="post" >
                   @csrf
                 
                  <div class="form-group">
                     <label for="name">Full Name</label>
                     <input type="text" name="name" id="name" class="name" autocomplete="off" required>
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="email">Email Adderss</label>
                     <input type="email" name="reg_email" id="reg_email" class="email" autocomplete="off" required>
                     <small id="email_error" style="color:red"></small>
                  </div>

                  <div class="form-group">
                     <label for="phone">Phone Number</label>
                     <input type="text" name="contact" id="reg_contact" autocomplete="off" minlength="10" maxlength="10"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            class="input" required>
                            <small id="contact_error" style="color:red"></small>
                  </div>

                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password" class="pass" autocomplete="off" required>
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="passwordCon">Confirm Password</label>
                     <input type="password" name="cpassword" id="cpassword" class="passConfirm" autocomplete="off" required>
                     <span class="error"></span>
                  </div>
                 
                  <div class="form-group mt-3">
                    
                    <select name="candidate_type" id="candidate_type" class="form-control" required>
                        <option value="" >Resume Type</option>
                        <option value="0">Indian</option>
                        <option value="1">Abroad</option>
                    </select>
                  </div>
                
                  <div class="CTA">
                     <input type="submit" value="Signup Now" id="submit">
                     <a href="#" class="switch  btn btn-info btn-rounded" style="text-decoration:none;color:white;border: none;border-radius: 30px;padding: 5px 30px;">I have an account</a>
                  </div>
                
               </form>
            </div><!-- End Signup Form -->
         </div>
      </div>

   </section>


   <footer>
      <!-- <p>
         Form made by: <a href="http://mohmdhasan.tk" target="_blank">Mohmdhasan.tk</a>
      </p> -->
   </footer>

</div>

</body>
</html>

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

// // Form validation
// $('input').blur(function () {

//     // User Name
//     if ($(this).hasClass('name')) {
//         if ($(this).val().length === 0) {
//             $(this).siblings('span.error').text('Please type your full name').fadeIn().parent('.form-group').addClass('hasError');
//             usernameError = true;
//         } else if ($(this).val().length > 1 && $(this).val().length <= 6) {
//             $(this).siblings('span.error').text('Please type at least 6 characters').fadeIn().parent('.form-group').addClass('hasError');
//             usernameError = true;
//         } else {
//             $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
//             usernameError = false;
//         }
//     }
//     // Email
//     if ($(this).hasClass('email')) {
//         if ($(this).val().length == '') {
//             $(this).siblings('span.error').text('Please type your email address').fadeIn().parent('.form-group').addClass('hasError');
//             emailError = true;
//         } else {
//             $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
//             emailError = false;
//         }
//     }

//     // PassWord
//     if ($(this).hasClass('pass')) {
//         if ($(this).val().length < 8) {
//             $(this).siblings('span.error').text('Please type at least 8 charcters').fadeIn().parent('.form-group').addClass('hasError');
//             passwordError = true;
//         } else {
//             $(this).siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
//             passwordError = false;
//         }
//     }

//     // PassWord confirmation
//     if ($('.pass').val() !== $('.passConfirm').val()) {
//         $('.passConfirm').siblings('.error').text('Passwords don\'t match').fadeIn().parent('.form-group').addClass('hasError');
//         passConfirm = false;
//     } else {
//         $('.passConfirm').siblings('.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
//         passConfirm = false;
//     }

//     // label effect
//     if ($(this).val().length > 0) {
//         $(this).siblings('label').addClass('active');
//     } else {
//         $(this).siblings('label').removeClass('active');
//     }
// });


// form switch
$('a.switch').click(function (e) {
    $(this).toggleClass('active');
    e.preventDefault();

    if ($('a.switch').hasClass('active')) {
        $(this).parents('.form-peice').addClass('switched').siblings('.form-peice').removeClass('switched');
    } else {
        $(this).parents('.form-peice').removeClass('switched').siblings('.form-peice').addClass('switched');
    }
});


// Form submit
// $('form.signup-form').submit(function (event) {
//     event.preventDefault();

//     if (usernameError == true || emailError == true || passwordError == true || passConfirm == true) {
//         $('.name, .email, .pass, .passConfirm').blur();
        
//     } else {
//         $('.signup, .login').addClass('switched');

//         setTimeout(function () { $('.signup, .login').hide(); }, 700);
//         setTimeout(function () { $('.brand').addClass('active'); }, 300);
//         setTimeout(function () { $('.heading').addClass('active'); }, 600);
//         setTimeout(function () { $('.success-msg p').addClass('active'); }, 900);
//         setTimeout(function () { $('.success-msg a').addClass('active'); }, 1050);
//         setTimeout(function () { $('.form').hide(); }, 700);
//     }
// });

// Reload page
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