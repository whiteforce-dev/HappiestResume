<style>

:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:731px;
	position:relative;
	

	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:16px 70px 50px 70px;
	background:#333d8214;
}
.login-html .sign-in-htm,
.login-html .for-pwd-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	-webkit-transform:rotateY(180deg);
	        transform:rotateY(180deg);
	-webkit-backface-visibility:hidden;
	        backface-visibility:hidden;
	-webkit-transition:all .4s linear;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .for-pwd,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
    color: white;
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .for-pwd:checked + .tab{
	color:#ff0;
	border-color:#1161ee;
}
.login-form{
    margin-top: 38px;
	min-height:345px;
	position:relative;
	-webkit-perspective:1000px;
	        perspective:1000px;
	-webkit-transform-style:preserve-3d;
	        transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
    width: 100%;
    color: #fffdfd;
    font-weight: 600;
    display: block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
    
	background:rgb(255 255 255 / 54%);

}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
    color: #efdd09;
    font-size: 14px;
    font-weight: 500;
}
.login-form .group .button{
    background: linear-gradient(to right, #f37407, #d1de11);
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	-webkit-transition:all .2s ease-in-out 0s;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	-webkit-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	-webkit-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	-webkit-transform:scale(1) rotate(45deg);
	        transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	-webkit-transform:scale(1) rotate(-45deg);
	        transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .for-pwd + .tab + .login-form .sign-in-htm{
	-webkit-transform:rotate(0);
	        transform:rotate(0);
}
.login-html .for-pwd:checked + .tab + .login-form .for-pwd-htm{
	-webkit-transform:rotate(0);
	        transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}
</style>

<div class="modal fade" id="modal_login2" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content m_login">
            <div class="modal-header m_header">
                <h5 class="modal-title"><b>log in</b></h5>
                <button type="button" class="close login_close" data-dismiss="modal">×</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="forgot_password" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content m_login">
            <div class="modal-header m_header">
                <h5 class="modal-title"><b>Forgot Password ?</b></h5>
                <button type="button" class="close m_close" data-dismiss="modal" onclick="forgetReload()">×</button>
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
<style>
        video.bg {
            position: absolute;
            top: 0;
            left: 0;
            z-index: -100;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            object-fit: cover; / combined with 'absolute', works like background-size, but for DOM elements /
        }

    </style>

<div class="modal fade" id="modal_registration" role="dialog" aria-hidden="true">


    <div class="login-wrap">
 
   
    <div class="videobg">
    <video autoplay loop muted>
        <source src="public/resume_yellow/assets/video/video2.mp4" type="video/mp4">

    </video>
    </div>
                
    <div class="login-html">
 
                       
    <button data-dismiss="modal" type = "button" style="color: #f7f3f3;margin-right: -69px;margin-top: -14px;height: 55px;font-weight: 900;width: 8px;float: right;font-size: 17px;" class="hide btn">x</button>
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log In</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Register</label>
		
        <div class="login-form">
        
        <form action="{{url('user-login')}}" method="post">
        @csrf
			<div class="sign-in-htm">
            <div class="form-group login_social_btnbox">

                        <a target="_blank" href="{{url('redirect/facebook')}}"
                            class="waves-effect waves-light login_btn_facebook login_btn">
                            <i class="mdi mdi-facebook"></i>
                            Log in with Facebook
                        </a>
                        <a target="_blank" href="{{url('redirect/google')}}"
                            class="login_btn_google_plus login_btn waves-effect waves-light">
                            <i class="mdi mdi-google"></i>
                            Log in with Google
                        </a>
                        {{-- <a target="_blank" href="{{url('redirect/linkedin')}}"
                        class="login_btn_facebook login_btn waves-effect waves-light">
                        <i class="mdi mdi-linkedin"></i>
                        Log in with Linkedin
                        </a> --}}
                    </div>
                    <div class="form-group">
                        <div class="or_border">OR</div>
                    </div>
				<div class="group">
					<label for="email" class="label">Username or Email</label>
					<input id="materialRegisterFormEmail" name="email"  type="email" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="materialRegisterFormPassword" minlength="4" maxlength="20" type="password" name="password" class="input" data-type="password">
				</div>
				
				<div class="group" style="margin-top: 56px;">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
                <!-- <a class="forgot_txt" data-dismiss="modal" href="#" data-toggle="modal"
                        data-target="#forgot_password">Forgot Password?</a> -->
                <a class="forgot_txt" onclick="frogetModal()" style="color: white;">Forgot Password?</a>
				</div>
			</div>
            </form>
            <form action="{{url('registration')}}" method="post">
            @csrf
			<div class="for-pwd-htm">
				<div class="group">
					<label for="name" class="label">Name</label>
					<input id="name" name="name" autocomplete="off" type="text" class="input" required>
				</div>
                <div class="group">
					<label for="email" class="label">Email</label>
					<input type="email" name="reg_email" id="reg_email" autocomplete="off" class="input" required>
                    <small id="email_error" style="color:red"></small>
				</div>
                
                <div class="group">
					<label for="contact" class="label">Contact Number</label>
					<input type="text" name="contact" id="reg_contact" autocomplete="off" minlength="10" maxlength="10"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            class="input" required>
                    <small id="contact_error" style="color:red"></small>
				</div>
                <div class="group">
					<label for="password" class="label">Password</label>
					<input type="password" name="password" id="password" autocomplete="off" class="input" required>
				</div>
                <div class="group">
					<label for="cpassword" class="label">Confirm Password</label>
					<input type="password" name="cpassword" id="cpassword" autocomplete="off" class="input" required>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Register" style="margin-top: 54px;">
				</div>
				<div class="hr"></div>
			</div>
            </form>
		</div>
	</div>
 </div>

    
</div>

<script>
$(document).ready(function(){

  $(".hide").click(function(){

    $('#modal_registration').modal().hide();
    location.reload(); 
  });
})
</script>

<script>
function frogetModal(){
    $('#modal_registration').modal().hide();
    $('#forgot_password').modal().show();
}

function forgetReload(){
    location.reload(); 
}
</script>