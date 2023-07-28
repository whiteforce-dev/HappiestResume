@extends('frontend.newfrontmaster')
@section('title','Home')
@section('content')
<style>

:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:770px;
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

.wrapper1{
    width: 100vw;
    height: 30vh;
    margin-top: 25px;
    display: flex;
    flex-direction: row;
    align-items: center;
}

.slider1 {
    width: 1100px;
    height: 150px;
    position: relative;
    display:flex;
    overflow:hidden;
}

.slide1{
    height:131px;
    display:flex;
    align-items:center;
    animation: slideshow 40s linear infinite;
}

.slide1 img {
    height:100px;
    padding-top:0px;
    padding-right:30px;
    padding-bottom:20px;
    padding-left:30px;
}


.client-imgbox img {
    margin-top:18px;
    transition: .5s all;
    height:80px;
}

.client-imgbox:hover img {
    transform: scale(1.1);
}

.client-imgbox {
    width: 245px;
    text-align: center;
    margin: 20px;
    height: 105px;
    display: inline-block;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, .12);
    transition: .5s all;
    cursor: pointer;
    border-radius: 13px 50px;
    transition: .5s all;
    background: #ffffff;
}

@keyframes slideshow {
    0% {transform: translateX(0);}
    100% {transform: translateX(-100%);}
}

.slider1::before, .slider1::after {
    height:133px;
    width:270px;
    position:absolute;
    content: "";
    z-index: 2;
}

.slider1::before {
    left:0;
    top:0;
}

.slider1::after {
    right:0;
    top:0;
    transform: rotateZ(180deg);
}

.border-line1{
    background: linear-gradient(to right, #6a82fb 0, #fc5c7c 100%);
    width: 138px;
    height: 6px;
    margin-bottom:13px;
    margin-left: 432px;
    text-align: center;
    margin-top:20px;
}

.border-line2{
    background: linear-gradient(to right, #6a82fb 0, #fc5c7c 100%);
    width: 138px;
    height: 6px;
    margin-bottom: 8px;
    text-align: center;
    margin-left: 426px;
}
</style>
<div class="main_banner_section" id="home">
    <div class="mainbanner-caption update_center">
        <span class="animated fadeInDown">Welcome to</span>
        <h1 class="h3-responsive animated fadeInDown">
            Happiest Resume<br> Builder
        </h1>
        <p class="animated fadeInUp">Create beautiful, professional resumes in minutes</p>
        <!-- <button type="button" class="btn btn-primary animated fadeInUp waves-effect waves-light" data-toggle="modal"
            data-target="#modal_registration">Get Started for Free
        </button> -->
        <a href="{{ url('resumeloginone') }}" class="btn btn-primary animated fadeInUp waves-effect waves-light">Get Started for Free</a>
    </div>
    <div class="background gradient">
        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <a href="#"  class="banner_resumebox card hide_resume"
        id="resume_banner">
        <img src="{{url('public/front').'/'}}images/resume_ab.jpg">
    </a>
</div>
<!--    <section class="banner_section" id="home" style="display: none;">-->
<!--        <div class="video-container">-->
<!--            <video id="mainVid" preload="none" muted="" playsinline="" loop="">-->
<!--                <source src="{{url('public/front').'/'}}images/saisun-video.mp4">-->
<!--                <source src="{{url('public/front').'/'}}images/saisun-video.mp4">-->
<!--            </video>-->
<!--        </div>-->
<!--        <div class="mainbanner-caption">-->
<!--            <span class="animated fadeInDown">Welcome to</span>-->
<!--            <h1 class="h3-responsive animated fadeInDown">-->
<!--                Saisun Online Resume Builder-->
<!--            </h1>-->
<!--            <p class="animated fadeInUp">Create beautiful, professional resumes in minutes</p>-->
<!--            <button class="btn btn-primary animated fadeInUp">Get Started for Free</button>-->
<!--        </div>-->
<!--    </section>-->
<section class="about_section" id="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-6" data-aos="zoom-in" data-aos-duration="1200">
                <div class="about_txt">
                    <img src="{{url('public/front').'/'}}images/resume_ab.jpg">
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="about_content">
                    <div class="about_title" data-aos="fade-down" data-aos-duration="1000">
                        <div class="border-line"></div>
                        <h2>How it works</h2>
                        <p>Creating a Professional Resume</p>
                    </div>
                    <div class="row mt-40">
                        @if(count($howItWorks))
                        @foreach ($howItWorks as $key=>$howItWork)
                        <div class="col-md-6 col-xs-12" data-aos="{{(++$key)%2 == 0?'fade-up-right':'fade-up-left' }}"
                            data-aos-duration="1000">
                            <div class="feature-box">
                                @if(file_exists($howItWork->icon))
                                <img src="{{url($howItWork->icon)}}">
                                @else
                                <img src="{{url('public/front').'/'}}images/register.png">
                                @endif
                                <h3>
                                    {{ isset($howItWork->title)?$howItWork->title:'' }}
                                </h3>
                                <p>
                                    {{ isset($howItWork->description)?$howItWork->description:'' }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @endif

                        {{-- <div class="col-md-6 col-xs-12" data-aos="fade-up-right" data-aos-duration="1000">
                                    <div class="feature-box">
                                        <img src="{{url('public/front').'/'}}images/register.png">
                        <h3>Register in Happiest</h3>
                        <p>It only takes a couple of seconds to start using our online resume builder. The
                            resume creator is offered completely through our website, meaning there is no
                            software to download.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12" data-aos="fade-up-left" data-aos-duration="1000">
                    <div class="feature-box">
                        <img src="{{url('public/front').'/'}}images/content.png">
                        <h3>Choose a Resume Layout</h3>
                        <p>You get to choose between several design options with our selection of free
                            resume templates. This helps you match your resume to the type of company and
                            position you want.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12" data-aos="fade-right" data-aos-duration="1000">
                    <div class="feature-box">
                        <img src="{{url('public/front').'/'}}images/resume.png">
                        <h3>Optimize Your Content</h3>
                        <p>Each resume template is organized into major content sections. And adding or
                            removing a specific section based on your needs.</p>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12" data-aos="fade-left" data-aos-duration="1000">
                    <div class="feature-box">
                        <img src="{{url('public/front').'/'}}images/export.png">
                        <h3>Export and Send</h3>
                        <p>Once your content is finished, you can export your resume in PDF from the free
                            resume builder. Your latest version is saved and you can always go back to make
                            edits.</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<section>
<div class="container client">
    <div class="border-line1"></div>

<h2 style="text-align: center;
    
    font-size:32px;
    margin-top: 7px;">National Clients</h2>

<div class="wrapper1">
<div class="slider1">

<div class="slide1">
<div class="client-imgbox">

<img src="{{ url('assets').'/' }}images/clients/reliance14.jpg">

</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/byjus11.png">
 
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/whitehat4.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/meesho2.png">

</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/bigbasket2.jpg">

</div>

<div class="client-imgbox">
 <img src="{{ url('assets').'/' }}images/clients/pagarbook2.jpg">
</div>
 
<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/honeywell5.png">

</div>
 
<div class="client-imgbox">
 <img src="{{ url('assets').'/' }}images/clients/connectindia2.jpg">

</div>

<div class="client-imgbox">
 <img src="{{ url('assets').'/' }}images/clients/Ambit2.png"> 
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/ciber2.png"> 
</div>
                        
<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/ruloan2.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/Pepperfry4.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/multicoreware2.png">
</div>

<div class="client-imgbox">
  <img src="{{ url('assets').'/' }}images/clients/foodminar2.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/velan2.png">
</div>
  
<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/hello2.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/fynd2.jpg">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/sponsor9.jpg">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/airtel-bank3.jpg">
</div>

</div><!-----slide-------->


<div class="slide1">
<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/reliance14.jpg">

</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/byjus11.png">
 
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/whitehat4.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/meesho2.png">

</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/bigbasket2.jpg">

</div>

<div class="client-imgbox">
 <img src="{{ url('assets').'/' }}images/clients/pagarbook2.jpg">
</div>
 
<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/honeywell5.png">

</div>
 
<div class="client-imgbox">
 <img src="{{ url('assets').'/' }}images/clients/connectindia2.jpg">

</div>

<div class="client-imgbox">
 <img src="{{ url('assets').'/' }}images/clients/Ambit2.png"> 
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/ciber2.png"> 
</div>
                        
<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/ruloan2.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/Pepperfry4.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/multicoreware2.png">
</div>

<div class="client-imgbox">
  <img src="{{ url('assets').'/' }}images/clients/foodminar2.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/velan2.png">
</div>
  
<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/hello2.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/fynd2.jpg">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/sponsor9.jpg">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/airtel-bank3.jpg">
</div>

</div><!-----slide-------->

</div><!-----slider-------->
</div><!----wrapper-------->

<div class="border-line2"></div>
<h2 style="text-align: center;
    font-size:32px;margin-left: 56px;
    margin-top: 7px;">International Clients</h2>
<div class="wrapper1">
<div class="slider1">

<div class="slide1">

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/utah12.png" style="height: 105px;width: 226px;">

</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/ameri2.jpg">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/premier2.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/walmart2.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/cpi2.jpg">
</div>

<div class="client-imgbox"> 
<img src="{{ url('assets').'/' }}images/clients/cisco5.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/new13.png">
</div>  

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/ryder3.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/ernst3.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/fidelity2.png">
</div>

<div class="client-imgbox"> 
<img src="{{ url('assets').'/' }}images/clients/ibm2.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/solar2.png">
</div>

<div class="client-imgbox"> 
<img src="{{ url('assets').'/' }}images/clients/abbvie2.jpg">
</div>

<div class="client-imgbox">  
<img src="{{ url('assets').'/' }}images/clients/at&t2.png">
</div>

<div class="client-imgbox"> 
<img src="{{ url('assets').'/' }}images/clients/bankofwest2.jpg">
</div>

<div class="client-imgbox">
 <img src="{{ url('assets').'/' }}images/clients/ford2.png">
</div>

<div class="client-imgbox"> 
  <img src="{{ url('assets').'/' }}images/clients/disney2.jpg">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/charter5.png">
</div>

<div class="client-imgbox"> 
 <img src="{{ url('assets').'/' }}images/clients/cryoport2.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/hub2.jpg">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/experis2.png">
</div>

</div><!----slide1---------->

<div class="slide1">

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/utah12.png" style="height: 105px;width: 226px;">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/ameri2.jpg">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/premier2.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/walmart2.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/cpi2.jpg">
</div>

<div class="client-imgbox"> 
<img src="{{ url('assets').'/' }}images/clients/cisco5.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/new13.png">
</div>  

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/ryder3.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/ernst3.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/fidelity2.png">
</div>

<div class="client-imgbox"> 
<img src="{{ url('assets').'/' }}images/clients/ibm2.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/solar2.png">
</div>

<div class="client-imgbox"> 
<img src="{{ url('assets').'/' }}images/clients/abbvie2.jpg">
</div>

<div class="client-imgbox">  
<img src="{{ url('assets').'/' }}images/clients/at&t2.png">
</div>

<div class="client-imgbox"> 
<img src="{{ url('assets').'/' }}images/clients/bankofwest2.jpg">
</div>

<div class="client-imgbox">
 <img src="{{ url('assets').'/' }}images/clients/ford2.png">
</div>

<div class="client-imgbox"> 
  <img src="{{ url('assets').'/' }}images/clients/disney2.jpg">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/charter5.png">
</div>

<div class="client-imgbox"> 
 <img src="{{ url('assets').'/' }}images/clients/cryoport2.png">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/hub2.jpg">
</div>

<div class="client-imgbox">
<img src="{{ url('assets').'/' }}images/clients/experis2.png">
</div>

</div><!----slide1---------->

</div><!----slider--------->
</div><!----wrapper------->

</div>-<!---container client--------->
</section>

<section class="resume_templatebox heading_before templates" id="templates">
    <div class="container">
        <div class="about_title text-center" data-aos="fade-down" data-aos-duration="1000">
            <div class="border-line center_border"></div>
            <h2>PROFESSIONAL RESUME TEMPLATES</h2>
            <p>Choose from 20+ tailored-built templates that have landed thousands of people like you the jobs they
                were
                dreaming of.</p>
        </div>
        <div id="templates_slider" class="carousel slide carousel-multi-item margin0" data-ride="carousel">
            {{-- <div class="controls-top mb-3">
                    <a class="btn-floating left_slider_arrow" href="#templates_slider" data-slide="prev">
                        <i class="mdi mdi-chevron-left"></i>
                    </a>
                    <a class="btn-floating right_slider_arrow" href="#templates_slider" data-slide="next">
                        <i class="mdi mdi-chevron-right"></i>
                    </a>
                </div> --}}
            <div class="controls-top mb-3">
                <a class="btn-floating oneway_arrow waves-effect waves-light" href="#templates_slider"
                    data-slide="prev">
                    <svg class="oneway_arrow_svg" viewBox="0 0 18 17" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g id="prev"
                            transform="translate(8.500000, 8.500000) scale(-1, 1) translate(-8.500000, -8.500000)">
                            <polygon class="arrow"
                                points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596">
                            </polygon>
                            <polygon class="arrow-fixed"
                                points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596">
                            </polygon>
                            <path
                                d="M-1.48029737e-15,0.56157424 L-1.48029737e-15,16.1929159 L9.708,8.33860465 L-2.66453526e-15,0.56157424 L-1.48029737e-15,0.56157424 Z M1.33333333,3.30246869 L7.62533333,8.34246869 L1.33333333,13.4327013 L1.33333333,3.30246869 L1.33333333,3.30246869 Z">
                            </path>
                        </g>
                    </svg>
                </a>
                <a class="btn-floating oneway_arrow slider_arrow_right waves-effect waves-light"
                    href="#templates_slider" data-slide="next">
                    <svg class="oneway_arrow_svg" viewBox="-1 0 18 17" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <polygon class="arrow"
                                points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596">
                            </polygon>
                            <polygon class="arrow-fixed"
                                points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596">
                            </polygon>
                            <path
                                d="M-4.58892184e-16,0.56157424 L-4.58892184e-16,16.1929159 L9.708,8.33860465 L-1.64313008e-15,0.56157424 L-4.58892184e-16,0.56157424 Z M1.33333333,3.30246869 L7.62533333,8.34246869 L1.33333333,13.4327013 L1.33333333,3.30246869 L1.33333333,3.30246869 Z">
                            </path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="carousel-inner">
                @if(count($resumeSliderModel))
                @foreach ($resumeSliderModel as $key=>$item)
                <div class="carousel-item {{++$key == 1?'active':''}}">
                    <div class="card templates_block">
                        @if(file_exists($item->image))
                        <img src="{{url($item->image)}}" alt="{{isset($item->title)?$item->title:''}}"
                            title="{{isset($item->title)?$item->title:''}}" />
                        @else
                        <img src="{{url('public/front').'/'}}images/resume_1.jpg" />
                        @endif
                        <div class="hover_content">
                            <!-- <button
                                class="{{$item->is_selected==1?'btn btn-success':'btn btn-primary'}} waves-effect waves-light"
                                data-target="#modal_registration" data-toggle="modal">
                                {{-- </button>data-target="#modal_registration" data-toggle="modal"> --}}
                                @if($item->is_selected == 1) Selected @else Coming Soon @endif
                            </button> -->
                            <a href="{{ url('resumeloginone') }}" class="{{$item->is_selected==1?'btn btn-success':'btn btn-primary'}} waves-effect waves-light">@if($item->is_selected == 1) Select @else Coming Soon @endif</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
<section class="fixed_clients">
    <div class="container">
        <div class="row">


            <!-- @if(count($counts))

            @php
            $stt = ['fade-up-right', 'fade-down', 'fade-up', 'fade-up-left'];
            @endphp
            @foreach ($counts as $key=>$count)
            <div class="col-md-3 col-sm-6 aos-init aos-animate" data-aos="{{$stt[$key]}}" data-aos-duration="1000">
                <div class="counter-wrap card">
                    <h2>{{ isset($count->count)?$count->count:''}}</h2>
                    <h3>{{ isset($count->title)?$count->title:''}}</h3>
                    {{--<div class="">--}}
                    {{-- counter_imgbox --}}
                    {{--@if(file_exists($count->icon))--}}
                    {{--<img src="{{url($count->icon)}}" style="max-height: 50px;">--}}
                    {{--@else--}}
                    {{--<img src="{{url('public/front').'/'}}images/register.png">--}}
                    {{--@endif--}}
                    {{-- <div></div> --}}
                    {{--</div>--}}
                </div>
            </div>
            @if(++$key == count($counts))
            @php
            $key = 0;
            @endphp
            @endif

            @endforeach
            @endif -->

             <div class="col-md-3 col-sm-6 aos-init aos-animate" data-aos="fade-up-right" data-aos-duration="1000">
                    <div class="counter-wrap card">
                        <h2 style="text-align:center">{{ $total_register }}</h2>
                        <h3 style="text-align:center;font-weight:bold">Registered</h3>
                        <div class="counter_imgbox">
                            <img src="{{url('public/front').'/'}}images/register.png">
            <div></div>
        </div>
    </div>
    </div> 

     <div class="col-md-3 col-sm-6 aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
                            <div class="counter-wrap card">
                                <h2 style="text-align:center"><span>7500</span></h2>
                                <h3 style="text-align:center;font-weight:bold">Saved Cv's</h3>
                                <div class="counter_imgbox">
                                    <img src="{{url('public/front').'/'}}images/save-cv.png">
    <div></div>
    </div>
    </div>
    </div> 
     <div class="col-md-3 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                            <div class="counter-wrap card">
                                <h2 style="text-align:center"><span>{{ $total_jobs }}</span></h2>
                                <h3 style="text-align:center;font-weight:bold">Jobs</h3>
                                <div class="counter_imgbox">
                                    <img src="{{url('public/front').'/'}}images/download.png">
    <div></div>
    </div>
    </div>
    </div> 
     <div class="col-md-3 col-sm-6 aos-init aos-animate" data-aos="fade-up-left" data-aos-duration="1000">
                            <div class="counter-wrap card" >
                                <h2 style="text-align:center"><span>{{ $total_company }}</span></h2>
                                <h3 style="text-align:center;font-weight:bold">Happy Clients</h3>
                                <div class="counter_imgbox">
                                    <img src="{{url('public/front').'/'}}images/happy-client.png">
    <div></div>
    </div>
    </div>
    </div> 
    </div>
    </div>
</section>
<section class="resume_templatebox heading_before banifits" id="banifits">
    <div class="container">
        <div class="about_title text-center" data-aos="fade-down" data-aos-duration="1000">
            <div class="border-line center_border"></div>
            <h2>Benefits of using a happiest resume builder</h2>
            <p>
                A creative, professional layout can grab a recruiter's attention. Our resume layout optimizer makes
                sure
                all your content is aligned and organized so your resume looks like a work of art.
            </p>
        </div>
        <div class="row mt-3 mb-5">
            @if(count($benefits))
            @foreach ($benefits as $key => $item)
            <div class="col-12 col-lg-4 col-md-4 col-sm-6" data-aos="fade-down" data-aos-duration="1000">
                <div class="demo-icon-feature text-center">
                    <div class="line"></div>
                    <div class="icon">
                        <span class="mdi {{ isset($item->icon)?$item->icon:'' }}"></span>
                    </div>
                    <div class="desc">
                        {{ isset($item->title)?$item->title:'' }}
                    </div>
                    <p>{!! $item->description !!}</p>
                </div>
            </div>
            @endforeach
            @endif
            {{-- <div class="col-12 col-lg-4 col-md-4 col-sm-6" data-aos="fade-down" data-aos-duration="1000">
                    <div class="demo-icon-feature text-center">
                        <div class="line"></div>
                        <div class="icon">
                            <span class="mdi mdi-currency-inr"></span>
                        </div>
                        <div class="desc">Free Beautiful Resume Templates</div>
                        <p>Use the Basic/Free account to create a modern resume.</p>
                    </div>
                </div> --}}
            {{-- <div class="col-12 col-lg-4 col-md-4 col-sm-6" data-aos="fade-down" data-aos-duration="1000">
                    <div class="demo-icon-feature text-center">
                        <div class="line"></div>
                        <div class="icon">
                            <span class="mdi mdi-qrcode-edit"></span>
                        </div>
                        <div class="desc">Design and Functionality</div>
                        <p>Easily change or add design elements to your resume, including colors and fonts, to give it a
                            creative edge.</p>
                    </div>
                </div> --}}
            {{-- <div class="col-12 col-lg-4 col-md-4 col-sm-6" data-aos="fade-down" data-aos-duration="1000">
                    <div class="demo-icon-feature text-center">
                        <div class="line"></div>
                        <div class="icon">
                            <span class="mdi mdi-cloud-sync"></span>
                        </div>
                        <div class="desc">Online Access and Synchronization</div>
                        <p>Your resume is saved in your online account for you to access and update anytime, from
                            anywhere.</p>
                    </div>
                </div> --}}
            {{-- <div class="col-12 col-lg-4 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="demo-icon-feature text-center">
                        <div class="line"></div>
                        <div class="icon">
                            <span class="mdi mdi-calendar-clock"></span>
                        </div>
                        <div class="desc">Save Time and Money</div>
                        <p>When you use the free resume maker, you save yourself the trouble of creating a resume from
                            scratch.</p>
                    </div>
                </div> --}}
            {{-- <div class="col-12 col-lg-4 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="demo-icon-feature text-center">
                        <div class="line"></div>
                        <div class="icon">
                            <span class="mdi mdi-database-lock"></span>
                        </div>
                        <div class="desc">Data Protection</div>
                        <p>All of your personal information and saved resumes are protected with high online security
                            measures.</p>
                    </div>
                </div> --}}

            {{-- <div class="col-12 col-lg-4 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="demo-icon-feature text-center">
                        <div class="line"></div>
                        <div class="icon">
                            <span class="mdi mdi-xbox-controller-view"></span>
                        </div>
                        <div class="desc">Live View Mode</div>
                        <p>You can see how your complete resume looks as you fill in the content sections, giving you
                            the full picture all the time.</p>
                    </div>
                </div> --}}

        </div>
    </div>
</section>
<div class="bottom-banner-section">
    <div class="row-shape-wrap shape_top" style="">
        <svg width="100%" height="80px">
            <defs>
                <pattern id="flexishape-5d2dbd438d952" preserveAspectRatio="none" patternUnits="userSpaceOnUse" x="0"
                    y="0" width="100%" height="800px" viewBox="0 0 100 1000">
                    <polygon fill="#ffffff" points="100,0 50,100 0,0  "></polygon>
                </pattern>
            </defs>
            <rect x="0" y="0" width="100%" height="80px" fill="url(#flexishape-5d2dbd438d952)"></rect>
        </svg>
    </div>
    <div class="row-shape-wrap shape_bottom">
        <svg width="100%" height="80px">
            <defs>
                <pattern id="flexishape-5d2dbd438db00" preserveAspectRatio="none" patternUnits="userSpaceOnUse" x="0"
                    y="0" width="100%" height="800px" viewBox="0 0 100 1000">
                    <polygon fill="#f6f9ff" points="100,100 50,0 0,100  "></polygon>
                </pattern>
            </defs>
            <rect x="0" y="0" width="100%" height="80px" fill="url(#flexishape-5d2dbd438db00)"></rect>
        </svg>
    </div>
    <img src="{{url('public/front').'/'}}images/homepage.png" alt="" class="bottom-banner-img" data-aos="fade-up-left"
        data-aos-duration="1000">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6" data-aos="fade-up-right" data-aos-duration="1000">
                <div class="bottom-banner-content">
                    <p>Happiest Resume Builder</p>
                    <h2>Create beautiful, professional resumes in minutes</h2>
                    <a href="{{ url('resumelogin') }}" class="btn btn-primary animated fadeInUp waves-effect waves-light">Get Started for Free</a>
                    <!-- <button type="button" class="btn btn-primary animated fadeInUp waves-effect waves-light"
                        data-toggle="modal" data-target="#modal_registration">Get Started for Free
                    </button> -->
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.common.testimonials')
@include('frontend.common.footer')
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
<!-- <div class="modal fade" id="modal_registration" role="dialog" aria-hidden="true">
    <form action="{{url('registration')}}" method="post" autocomplete="off">
        <div class="modal-dialog">
            <div class="modal-content m_login">
                <div class="modal-header m_header">
                    <h5 class="modal-title"><b>Registration</b></h5>
                    <button type="button" class="close m_close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">

                    @csrf
                    <div class="md-form mt-0">
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control"
                            maxlength="50" autocomplete="off" required>
                        <label for="name" class="">Name</label>
                    </div>
                    <div class="md-form mt-0">
                        <input type="email" name="reg_email" value="{{ old('reg_email') }}" id="reg_email"
                            class="form-control" autocomplete="new-password" minlength="10" maxlength="50" required>
                        <label for="email" class="">Email Address</label>
                        <small id="email_error" style="color:red"></small>
                    </div>
                    <div class="md-form mt-0">
                        <input type="text" name="contact" value="{{ old('contact') }}" id="reg_contact"
                            class="form-control" autocomplete="off" minlength="10" maxlength="10"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            required>
                        <label for="contact" class="">Contact no.</label>
                        <small id="contact_error" style="color:red"></small>
                    </div>
                    <div class="md-form mt-0">
                        <input type="password" name="password" id="password" class="form-control" autocomplete="off"
                            minlength="6" maxlength="20" required>
                        <label for="password" class="">Password</label>
                    </div>
                    <div class="md-form mt-0">
                        <input type="password" name="cpassword" id="cpassword" class="form-control" autocomplete="off"
                            minlength="6" maxlength="20" required>
                        <label for="cpassword" class="">Confirm Password</label>
                    </div>
                    <button typeof="submit" id="btnsubmit_regis1"
                        class="btn btn_login btn-primary btn-lg btn-block req_btn text-white waves-effect waves-light">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </form>
</div> -->

<div class="modal fade" id="modal_logout" role="dialog" aria-hidden="true">
    <form action="{{url('user-logout')}}" method="post">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content m_login">
                <div class="modal-header m_header">
                    {{--<h5 class="modal-title"><b>Signoff</b></h5>--}}
                    <button type="button" class="close m_close " data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <h5 align="center">Are Sure You Want To Logout?</h5>
                    <br>
                    <button typeof="submit" id="btnsubmit_regis"
                        class="btn btn_login btn-primary btn-xs btn-block req_btn text-white waves-effect waves-light">
                        Logout Now
                    </button>
                </div>
            </div>
        </div>
    </form>
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

<!-- <div class="modal fade right" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    data-backdrop="true" style="display: none;" aria-hidden="true">
    <form action="{{url('user-login')}}" method="post">
        @csrf
        <div class="modal-dialog modal-full-height modal-right modal-notify login_modal" role="document">
            <div class="modal-content m_login">
                <div class="modal-header m_header">
                    <h5 class="modal-title">
                        <b>
                            Login Panel
                        </b>
                    </h5>
                    <button type="button" class="close login_close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fas fa-check mdi mdi-check fa-4x mb-3 animated rotateIn"></i>
                    </div>
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
                    <div class="md-form mt-0">
                        <input type="email" name="email" id="materialRegisterFormEmail" maxlength="50" min="10" required
                            class="form-control">
                        <label for="materialRegisterFormEmail" class="">Username / Email ID</label>
                    </div>
                    <div class="md-form">
                        <input type="password" name="password" id="materialRegisterFormPassword" class="form-control"
                            required minlength="4" maxlength="20"
                            aria-describedby="materialRegisterFormPasswordHelpBlock">
                        <label for="materialRegisterFormPassword" class="">Password</label>
                    </div>
                    <a class="forgot_txt" data-dismiss="modal" href="#" data-toggle="modal"
                        data-target="#forgot_password">Forgot Password?</a>
                    <button id="btnlogin" type="submit"
                        class="mt-3 btn btn_login btn-primary btn-lg btn-block req_btn text-white waves-effect waves-light">
                        Login
                    </button>

                    <br>
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
                </div>

                <div class="modal-footer">
                    <p>Don’t have an account?
                        <a data-dismiss="modal" href="#" class="modal_footer_a" data-toggle="modal"
                            data-target="#modal_registration">Sign up</a></p>
                </div>
            </div>
        </div>
    </form>
</div> -->
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
                <a class="forgot_txt" onclick="frogetModal()" style="color: white;font-size:17px">Forgot Password?</a>
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
					<label for="workExp" class="label">Work Experience</label>
                     <select name="is_fresher" id="is_fresher" class="input" required>
                      <option value="" style="color:black">Select Any One</option>
                      <option value="1" style="color:black">Fresher</option>
                      <option value="0" style="color:black">Experienced</option>
                     </select>
                </div>
				<div class="group">
					<input type="submit" class="button" value="Register" style="margin-top: 40px;">
				</div>
				<div class="hr"></div>
			</div>
            </form>
		</div>
	</div>
 </div>


</div>
<script type="text/javascript">
    window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 180 || document.documentElement.scrollTop > 20) {
                $('#top_navigation_bar').addClass('logowithmenu_bar_fixed');
            } else {
                $('#top_navigation_bar').removeClass('logowithmenu_bar_fixed');
            }
        }
</script>
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

@stop


