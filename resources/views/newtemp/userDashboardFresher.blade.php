<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8">
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<title>Happiest Resume</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<link rel="shortcut icon" href="https://happiestresume.com/public/front/images/logo1.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" sizes="72x72" href="{!! url('assets/resumeDesign/images/apple-icon-72x72.png') !!}">
<link rel="apple-touch-icon" sizes="76x76" href="{!! url('assets/resumeDesign/images/apple-icon-76x76.png') !!}">
<link rel="apple-touch-icon" sizes="114x114" href="{!! url('assets/resumeDesign/images/apple-icon-114x114.png') !!}">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{!! url('assets/resumeDesign/vendors/bootstrap/css/bootstrap.min.css') !!}" type="text/css">

<!--Font Awesome CSS-->
<link href="{!! url('assets/resumeDesign/icons/font-awesome-4-1-0/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
<!-- Custom Style -->


<link href="{!! url('assets/resumeDesign/css/style.css') !!}" rel="stylesheet">
<link href="{!! url('assets/resumeDesign/css/style3.css') !!}" rel="stylesheet">
<link href="{!! url('assets/resumeDesign/css/responsive.css') !!}" rel="stylesheet">

<!-- Responsive CSS-->
<link href="{!! url('assets/resumeDesign/css/responsive.css') !!}" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Share:ital,wght@0,700;1,700&display=swap');
.containerrr {
  /* margin: auto; */
  /* width: 1000px; */
  display: flex;
  justify-content: center;
  flex-wrap: nowrap;
  
}

.panel {
  background-color: transparent;
  width: 54px;
  height: 28px;
  display: inline-block;

}

.panel-inner {
  position: relative;
  width: 117%%;
  height: 110%;
  text-align: center;
  /* transition: transform 0.75s; */
  transform-style: preserve-3d;
  animation: flip 4s linear forwards infinite;
  animation-direction: normal;
  margin-top: 4px;
}

.panel-front,
.panel-back {
  position: absolute;
  width: 119%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.panel-front {
    background-image: url('assets/images/g6.jpg');
  background-repeat: no-repeat;
  color: white;
  font-weight : bolder;
  
}

.panel-back {
  background-image: url('assets/images/g10.png');
  background-repeat: no-repeat;
 
  color: white;
  transform: rotateY(180deg);
  font-weight : bolder;
  
  /* padding: 5px; */
}

.panel-front img {
  width: 300px;
  height: 300px;
}

@keyframes flip {
  from {
    transform: rotateY(0deg);
  }
  to {
    transform: rotateY(360deg);
  }
}
</style>
<style>

@media (min-width: 1200px){
.container {
    max-width: 1140px !important;
}
}

.navigation-menu{padding-bottom:15px!important;}

hr {
    margin-top: 0rem;
    /* margin-bottom: 1rem; */
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
  }

  .badge-primary {
    color: #fff;
    background-color: #e6a615;
}
.badge {
    display: inline-block;
    padding: 0.50em .6em;
    font-size: 100%;
}
.image-mr
{
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}
html{
  background: linear-gradient(to right, #ffeeee, #ddefbb);
   
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 100%;
    overflow-x:hidden;
}

.hover_content{
    position: absolute;
    top: calc(50% - 25px);
    width: 100%;
    transition: .5s all;
   
}
.img-circle {
    border-radius: 50%;
}
.app-download {
  display: flex;
  justify-content: space-around;
  align-items: center;
  direction: rtl;
  background-color: #3c3939;
  top: 0;
  position: fixed;
  flex-direction: column;
  z-index: 100;
  left: 2rem;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
  
  padding: 1rem;
}
.app-download:focus {
  outline: none;
}
.app-download label {
  margin-top: 0.5rem;
  margin-bottom: 0.5rem;
  color: #fff;
  cursor: pointer;
}
.app-download label#first-title {
  font-size: 1rem;
}
.app-download label#second-title {
  font-size: 0.8rem;
}
.app-download .mdi-counter {
  color: #fff;
  font-size: 2.5rem;
  width: 45px;
  height: 45px;
  display: flex;
  border: 2px dotted #fff;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  margin: 0.5rem 0;
  cursor: pointer;
}
.app-download .close-download-app {
  color: #fff;
  margin-top: 0.5rem;
  font-size: 0.7rem;
  cursor: pointer;
}

.bounce {
  animation: bounce 0.5s;
  animation-direction: alternate;
  animation-timing-function: cubic-bezier(0.5, 0.05, 1, 0.5);
  animation-iteration-count: infinite;
  -webkit-animation-name: bounce;
  -webkit-animation-duration: 0.5s;
  -webkit-animation-direction: alternate;
  -webkit-animation-timing-function: cubic-bezier(0.5, 0.05, 1, 0.5);
  -webkit-animation-iteration-count: infinite;
}

@keyframes bounce {
  from {
    transform: translate3d(0, 0, 0);
  }
  to {
    transform: translate3d(0, 3px, 0);
  }
}
@-webkit-keyframes bounce {
  from {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  to {
    -webkit-transform: translate3d(0, 3px, 0);
    transform: translate3d(0, 3px, 0);
  }
}
body{overflow:hidden!important;}
.has-submenu a{padding-top:15px!important;}
.submenu li{list-style:none;}
    </style>
</head>


<body style=" font-size:18px; font-family: 'Montserrat', sans-serif;   width:90%;  overflow-x: hidden;  padding:0; margin:0 auto;    margin-top: 38px;">
<!-- Loader -->


<div id="">
  <div id="status">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
  </div>
</div>
<!-- Loader --> 
<!-- Navigation Bar-->
<header id="topnav" class="defaultscroll scroll-active"> 
  
  <!-- Menu Start -->
  <div class="container" style="min-width:100%;"> 
  <div class="row">
    <!-- Logo container-->
    <div class="col-md-4">
    <div> <a href="index.html" class="logo"> <img src="{{ url('assets/images/logo-light.png') }}" alt="" class="logo-light" style="padding-top: 20px;"/> <img src="{{ url('assets/images/logo-dark.png') }}" alt="" class="logo-dark" /> </a> </div>
    </div>
    <!-- End Logo container-->
   <div class="col-md-8">
   <div class="menu-extras" style="right:55px; position:relative;">
      <div class="menu-item"> 
        <!-- Mobile menu toggle--> 
        <a class="navbar-toggle">
        <div class="lines"> <span></span> <span></span> <span></span> </div>
        </a> 
        <!-- End mobile menu toggle--> 
      </div>
    </div>
   <div id="navigation" style="display:none;"> 
      <!-- Navigation Menu-->
      <ul class="navigation-menu" style="justify-content: flex-end;">
      <li><a href="{{ url('/') }}" style="color: black;font-weight: 600;">My Dashboard</a></li>
      <li><a href="{{ url('appliedjobs') }}" style="color: black;font-weight: 600;">Applied Jobs</a></li>
      <li class="containerrr">
                    <a class="page-scroll" target="_blank" href="{{URL::to('hot-jobs')}}">
                        <div class="panel">
                        <div class="panel-inner">
                            <div class="panel-front">
                            <p style="margin-top: 7px;font-weight: 600;">HOT</p>
                            </div>
                            <div class="panel-back">
                            <p style="margin-top: 7px;font-weight: 600;">JOBS</p>
                            </div>
                        </div>
                        </div>
                    </a>
                    </li>       

        <li class="has-submenu"> <a href="javascript:void(0)" style="color: black;font-weight: 600;">{{ $user_name }} <i class="mdi mdi-chevron-down"></i>&nbsp;&nbsp;<img class="img-circle" width="50"  height="50" src="{!! $user_image != '' ? url($user_image) : url('assets/resumeDesign/images/user.png')  !!}"/> </a>
          <ul class="submenu">
            <li><a href="{{ url('hot-jobs') }}">Jobs</a></li>
            <li><a href="{{ url('user-logout') }}">Sign Out</a></li>
          </ul>
        </li>
      </ul>
      <!--end navigation menu--> 
    </div>
   </div>
   </div>
    <!--end navigation--> 
  </div>
  <!--end container--> 
  <!--end end--> 
</header>
<!--end header--> 
<!-- Navbar End --> 


<section class="section">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="app-download" style="margin-top:101px">
    <label id="first-title">Profile View Count</label>
    <label id="second-title" style="font-size:55px">{{ $user_login->profile_view_count }}</label>
    <i class="mdi mdi-counter bounce" style="font-size: 34px;color: gold;margin-top: 14px;" ></i>
    <!-- <a class="close-download-app fa fa-close"></a> -->
</div>
<div>
        

        <div style="width:900px; background: rgb(255,200,19); height:1100px;
background: linear-gradient(90deg, rgba(255,200,19,1) 0%, rgba(255,200,19,1) 350px, rgba(33,33,33,1) 350px); color:#fff; margin:0 auto; margin-top: 71px; ">
  
<!--Left-bar-->
<div style="width:350px; float:left">
    <!--profile photo-->
    <div style="width:100%; display:block"> 
    @if($user_login->image != null)
    <img src="{{ $user_login->image }}" style="width:100%; display:block"/> 
    @else
      <img src="{{ url('assets/resumeDesign/images/user.png') }}" style="width:100%; display:block"/> 
    @endif
    </div>
    
    <div style="padding:10px 0; background: rgb(33,33,33);
background: linear-gradient(90deg, rgba(33,33,33,1) 0%, rgba(33,33,33,1) 70%, rgba(4,8,9,1) 70%); display:block"></div>
    <div style=" color:#000; padding:30px">
    <!--Name-->
    @php
    $name = explode(" ",$user_name);
    $user_country = App\Models\Country::where('country_id',$user_pro->user_country)->value('country_name');
    $user_state = App\Models\State::where('state_id',$user_pro->user_state)->value('state_name');
    $user_city = App\Models\City::where('city_id',$user_pro->user_city)->value('city_name');
    $title = App\Models\UserWorkExp::where('user_id',$user_id)->where('work_exp_id',null)->first();
    @endphp
      <div style="line-height:45px">
      
        <h1 style="font-size:35px; margin:0; font-weight:800; text-transform:uppercase">{{ isset($name[0]) ? $name[0] : ''}}</h1>
        <h1 style="font-size:35px; margin:0; font-weight:800; text-transform:uppercase">{{ isset($name[1]) ? $name[1] : '' }} &nbsp; {{ isset($name[2]) ? $name[2] : ''  }}</h1>
       
        <p style="font-weight:light; text-transform:uppercase; letter-spacing:2px; margin-top:3px">{{ ($title->title) != '' ? $title->title : 'Fresher' }}</p>
      </div>
      
      <div style="padding:40px 0; display:block"></div>
      
      <!--Contact-->
      <div>
        <h1 style="font-size:20px; margin:0; margin-bottom:15px; font-weight:800; text-transform:uppercase">CONTACT</h1>
        <ul style="padding:0; margin:0; line-height:35px; font-size:15px; padding-bottom:15px; list-style:none">
          <li><img style="width:20px; margin-right:5px; position:relative; top:3px" src="{!! asset('public/resume_yellow/assets/imgs/phone-call.png') !!}"/>{{ $user_login->contact }}</li>
          <li><img style="width:20px; margin-right:5px; position:relative; top:3px" src="{!! asset('public/resume_yellow/assets/imgs/email.png') !!}"/>{{ $user_email }}</li>
          <li><img style="width:20px; margin-right:5px; position:relative; top:3px" src="{!! asset('public/resume_yellow/assets/imgs/linkedin-logo.png') !!}"/>{{ $user_country ? $user_country : 'India' }},{{ $user_state ? $user_state : 'State'}}</li>
          <li><img style="width:20px; margin-right:5px; position:relative; top:3px" src="{!! asset('public/resume_yellow/assets/imgs/location-pin.png') !!}"/>{{ $user_pro->user_address ? $user_pro->user_address : 'Address' }},{{ $user_city ? $user_city : 'City' }}</li>
        </ul>
        <ul style="padding:0; margin:0; list-style:none">
          <li style="display:inline-block"><a target="_blank" href="{{ $user_social->linkedin }}"><img style="width:35px; margin-right:5px" src="{!! asset('public/resume_yellow/assets/imgs/linkedin.png') !!}"/></a></li>
          <li style="display:inline-block"><a target="_blank" href="{{ $user_social->twitter }}"><img style="width:35px; margin-right:5px" src="{!! asset('public/resume_yellow/assets/imgs/twitter.png') !!}"/></a></li>
          <li style="display:inline-block"><a target="_blank" href="{{ $user_social->fb }}"><img style="width:35px; margin-right:5px" src="{!! asset('public/resume_yellow/assets/imgs/facebook.png') !!}"/></a></li>
        </ul>
      </div>
      
    </div>
  </div>
<!--Left-bar ends-->  
  
<!--Right content-->
<div style="width:550px; color:#fff; float:left;">
    <div style="padding:30px;padding-top: 43px;" >
    <!--About-->
      <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{!! asset('resume_yellow/assets/imgs/about.png') !!}" style="display:inline-block; float:left; width:45px; "/>
        <p style="margin:0; width:265px; padding:0 20px;     line-height: 44px;display:inline-block; ">Career Objective</p>
      </div>
      <p style="font-size:16px; margin:20px 0 50px; line-height:22px">{{ $user_skill->career_obj ? $user_skill->career_obj : 'I want myself to be an employee of a well repudiated firm where I can improvise my skills of professionalism, adaptability and communication. My development should impact the development of the firm. '  }}</p>

     
      
      
       <!--Education-->
       <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{!! asset('public/resume_yellow/assets/imgs/education.png') !!}" style="display:inline-block; float:left; width:45px; "/>
        <p style="margin:0; width:265px; padding:0 20px;     line-height: 44px;display:inline-block; ">Education</p>
      </div>
      <div style="padding:40px 0; ">
      @if(isset($user_edu_X) || isset($user_edu_XII) || isset($user_edu_graduation) || isset($user_edu_post))
      @if(isset($user_edu_post))
      @if($user_edu_post->organization != '' || $user_edu_post->education_name != '' )
      
      <div style="display:flex; margin:0 -15px">
        <div style="width:30%; padding:0 15px"><strong>{{ $user_edu_post->year  }}</strong></div>
        <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700">MASTER'S DEGREE</strong>
        @if(is_numeric($user_edu_post->education_name ))
        @php($education_name = App\Models\Degrees::where('id',$user_edu_post->education_name)->value('degree_name'))
        @else
        @php($education_name = $user_edu_post->education_name )
        @endif
          <p style="font-size:14px; margin:5px 0 30px; line-height:22px">{{ $education_name }},{{ $user_edu_post->organization }},{{ $user_edu_post->location }}</p>
        </div>
      </div>
      
      @endif
      @endif
      @if(isset($user_edu_graduation))
      @if($user_edu_graduation->organization != '' || $user_edu_graduation->education_name != '' )
      <div style="display:flex; margin:0 -15px">
        <div style="width:30%; padding:0 15px"><strong>{{ $user_edu_graduation->year }}</strong></div>
        <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700">BACHELORS'S DEGREE</strong>
        @if(is_numeric($user_edu_graduation->education_name ))
        @php($education_name = App\Models\Degrees::where('id',$user_edu_graduation->education_name)->value('degree_name'))
        @else
        @php($education_name = $user_edu_graduation->education_name )
        @endif
          <p style="font-size:14px; margin:5px 0 30px; line-height:22px">{{ $education_name }},{{ $user_edu_graduation->organization }},{{ $user_edu_graduation->location }}</p>
        </div>
      </div>
      @endif
      @endif
      @if(isset($user_edu_XII))
      @if($user_edu_XII->organization != '' || $user_edu_XII->education_name != '' )
      <div style="display:flex; margin:0 -15px">
        <div style="width:30%; padding:0 15px"><strong>{{ $user_edu_XII->year }}</strong></div>
        <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700S">Higher Secondary</strong>
        @if(is_numeric($user_edu_XII->education_name ))
        @php($education_name = App\Models\Degrees::where('id',$user_edu_XII->education_name)->value('degree_name'))
        @else
        @php($education_name = $user_edu_XII->education_name )
        @endif
          <p style="font-size:14px; margin:5px 0 30px; line-height:22px">{{ $education_name }},{{ $user_edu_XII->organization }},{{ $user_edu_XII->location }}</p>
        </div>
      </div>
    </div>
    @endif
    @endif
    @if(isset($user_edu_X))
    @if($user_edu_X->organization != '' || $user_edu_X->education_name != '' )
    <div style="display:flex; margin:0 -15px">
        <div style="width:30%; padding:0 15px"><strong>{{ $user_edu_X->year }}</strong></div>
        <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700S">High Secondary</strong>
        @if(is_numeric($user_edu_X->education_name ))
        @php($education_name = App\Models\Degrees::where('id',$user_edu_X->education_name)->value('degree_name'))
        @else
        @php($education_name = $user_edu_X->education_name )
        @endif
          <p style="font-size:14px; margin:5px 0 30px; line-height:22px">{{ $education_name }},{{ $user_edu_X->organization }},{{ $user_edu_X->location }}</p>
        </div>
      </div>

    @endif
     @endif
      
     
   
      @else

      <div style="display:flex; margin:0 -15px">
          <div style="width:30%; padding:0 15px"><strong>2010 - 2020</strong></div>
          <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700">MASTER'S DEGREE</strong>
            <p style="font-size:14px; margin:5px 0 20px; line-height:22px">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. </p>
          </div>
        </div>
        <div style="display:flex; margin:0 -15px">
          <div style="width:30%; padding:0 15px"><strong>2010 - 2020</strong></div>
          <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700">Bachelors'S DEGREE</strong>
            <p style="font-size:14px; margin:5px 0 20px; line-height:22px">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. </p>
          </div>
        </div>
        <div style="display:flex; margin:0 -15px">
          <div style="width:30%; padding:0 15px"><strong>2010 - 2020</strong></div>
          <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700S">Higher Secondarry</strong>
            <p style="font-size:14px; margin:5px 0 20px; line-height:22px">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. </p>
          </div>
        </div>
        <div style="display:flex; margin:0 -15px">
          <div style="width:30%; padding:0 15px"><strong>2010 - 2020</strong></div>
          <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700S">High Secondarry</strong>
            <p style="font-size:14px; margin:5px 0 20px; line-height:22px">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. </p>
          </div>
        </div>
   
    @endif
    
   
    
    
   
    
  	<br>
          <!--Languages-->
            <!--Languages-->
            <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{!! asset('public/resume_yellow/assets/imgs/language.jpg') !!}" style="display:inline-block; float:left; width:45px; "/>
            <p style="margin:0; width:265px; padding:0 20px;line-height:44px;display:inline-block; ">Languages</p>
        </div>
        <div style="padding:40px 0;">
        @if($user_pro->language == '"null"' || $user_pro->language == null || $user_pro->language == 'ul')
        <div style="width:90%; float:left;">
            <p style="margin-top:0; font-weight:800;  text-transform:uppercase; border-bottom:2px #ffc813 solid; width:99%;"><span style="background:#212121; position: relative; top: 6px; margin-bottom:10px; padding-right: 5px;">English</span></p>
            </div>
            <div style="width:10%; float:left; ">
            <p style="position: relative;margin-bottom:10px; margin-top:0; top: 6px;"><strong>B2</strong></p>
            </div>
            
            <div style="clear:both; margin:0; padding:0; width:100%"></div>
            <br>
            <div style="width:90%; float:left;">
            <p style="margin-top:0;font-weight:800;text-transform:uppercase; border-bottom:2px #ffc813 solid; width:99%;"><span style="background:#212121; position: relative; top: 6px; margin-bottom:10px;padding-right: 5px;">Hindi</span></p>
            </div>
            <!-- <div style="width:10%; float:left; ">
            <p style="position: relative; margin-bottom:10px;margin-top:0; top: 6px;"><strong>C1</strong></p>
            </div>
            <div style="clear:both; margin:0; padding:0; width:100%"></div>
            <div style="width:90%; float:left;">
            <p style="margin-top:0;font-weight:800;text-transform:uppercase; border-bottom:2px #ffc813 solid; width:99%;"><span style="background:#212121; position: relative; top: 6px;margin-bottom:10px; padding-right: 5px;">PORTUGUESE</span></p>
            </div> -->
            <div style="width:10%; float:left; ">
            <p style="position: relative;margin-bottom:10px; margin-top:0; top: 6px;"><strong>A2</strong></p>
            </div>
            <div style="clear:both; margin:0; padding:0; width:100%"></div>
        @else
        @php( $language = explode(',',$user_pro->language))
        @foreach($language as $lang)
        @if($lang != '"null"' && $lang != "null")
        @php($a = array("A2", "B1", "C2","B2","C1"))
        @php($random_keys = rand(0, 2))
            <div style="width:90%; float:left;">
            <p style="margin-top:0; font-weight:800;  text-transform:uppercase; border-bottom:2px #ffc813 solid; width:99%;"><span style="background:#212121; position: relative; top: 6px; margin-bottom:10px; padding-right: 5px;">{{ trim($lang,'"') }}</span></p>
            </div>
            <div style="width:10%; float:left; ">
            <p style="position: relative;margin-bottom:10px; margin-top:0; top: 6px;"><strong>{{ $a[$random_keys] }}</strong></p>
            </div>
            <div style="clear:both; margin:0; padding:0; width:100%"></div>
            <br>
            @endif
        @endforeach 
        @endif
      </div>
    </div>
    </div>
  </div>
  
<!--Right content ends-->   
  <div style="clear:both; margin:0; padding:0; width:100%"></div>
 
</div>
<div style="width:900px; height:993px; position:relative; background: rgb(255,200,19);
background: linear-gradient(90deg, rgba(255,200,19,1) 0%, rgba(255,200,19,1) 350px, rgba(33,33,33,1) 350px); color:#fff; margin:15px auto 0; padding-bottom:180px;  ">
<!--Left-bar-->
<div style="width:350px; float:left;margin-top:40px">
    
    
    <div style=" color:#000; padding:30px">
     
      <!--Skills-->
      <div>
        <h1 style="font-size:20px; margin:0; margin-bottom:15px; font-weight:800; text-transform:uppercase">SKILLS</h1>
      
       @if($user_skill->skills == '"null"')
       
       <div style="margin:0 -15px 10px">
          <div style="width:28%; float:left; padding:0 15px">
            <p style="font-size:14px; margin:0">SEO / SEM</p>
          </div>
          <div style="width:52%; float:left; padding:0 15px">
            <div style="height:8px; position:relative; background:#000; width:100%; top:5px">
              <div style="width:15px; left:65%; height:15px; background:#ffc813; border:2px solid #000; border-radius:50%;  position:absolute; top:-6px"></div>
            </div>
          </div>
          <div style="clear:both"></div>
        </div>
        <div style="margin:0 -15px 10px">
          <div style="width:28%; float:left; padding:0 15px">
            <p style="font-size:14px; margin:0">MARKETING</p>
          </div>
          <div style="width:52%; float:left; padding:0 15px">
            <div style="height:8px; position:relative; background:#000; width:100%; top:5px">
              <div style="width:15px; left:80%; height:15px; background:#ffc813; border:2px solid #000; border-radius:50%;  position:absolute; top:-6px"></div>
            </div>
          </div>
          <div style="clear:both"></div>
        </div>
        <div style="margin:0 -15px 10px">
          <div style="width:28%; float:left; padding:0 15px">
            <p style="font-size:14px; margin:0">ACCOUNTING</p>
          </div>
          <div style="width:52%; float:left; padding:0 15px">
            <div style="height:8px; position:relative; background:#000; width:100%; top:5px">
              <div style="width:15px; left:75%; height:15px; background:#ffc813; border:2px solid #000; border-radius:50%;  position:absolute; top:-5px"></div>
            </div>
          </div>
          <div style="clear:both"></div>
        </div>
        <div style="margin:0 -15px 10px">
          <div style="width:28%; float:left; padding:0 15px">
            <p style="font-size:14px; margin:0">PLANNING</p>
          </div>
          <div style="width:52%; float:left; padding:0 15px">
            <div style="height:8px; position:relative; background:#000; width:100%; top:5px">
              <div style="width:15px; left:70%; height:15px; background:#ffc813; border:2px solid #000; border-radius:50%;  position:absolute; top:-6px"></div>
            </div>
          </div>
          <div style="clear:both"></div>
        </div>
       @else
        @php( $skill = explode(',',$user_skill->skills))
        @foreach( $skill as $sk)
        @php($a = array("50", "60", "70"))
        @php($random_keys = rand(0, 2))
        <div style="margin:0 -15px 10px">
          <div style="width:28%; float:left; padding:0 15px">
            <p style="font-size:14px; margin:0">{{ trim($sk, '"') }}</p>
          </div>
          <div style="width:52%; float:left; padding:0 15px">
            <div style="height:8px; position:relative; background:#000; width:100%; top:5px">
              <div style="width:15px; left:{{ $a[$random_keys] }}%; height:15px; background:#ffc813; border:2px solid #000; border-radius:50%;  position:absolute; top:-6px"></div>
            </div>
          </div>
          <div style="clear:both"></div>
        </div>
       @endforeach
       @endif
      </div>
      
       <!--Hobbies-->
       <div style="margin-top:40px">
      
      <h1 style="font-size:20px; margin:0; margin-bottom:15px; font-weight:800; text-transform:uppercase">HOBBIES</h1>
      @if($user_pro->interest_hobies == '"null"' || $user_pro->interest_hobies == null || $user_pro->interest_hobies == 'ul')
      <div style="width:50%; float:left"> <img src="{!! asset('public/resume_yellow/assets/imgs/hobb-1.png') !!}" style="display:block" width="50"/>
        <p style="font-size:14px; text-transform:uppercase; margin-bottom:15px; margin-top:5px">GUITARIST</p>
      </div>
      <div style="width:50%; float:left"> <img src="{!! asset('public/resume_yellow/assets/imgs/hobb-2.png') !!}" style="display:block" width="50"/>
        <p style="font-size:14px; text-transform:uppercase; margin-bottom:15px;margin-top:5px">Music</p>
      </div>
      <div style="clear:both; margin:0; padding:0; width:100%"></div>
      <div style="width:50%; float:left"> <img src="{!! asset('public/resume_yellow/assets/imgs/hobb-3.png') !!}" style="display:block" width="50"/>
        <p style="font-size:14px; text-transform:uppercase; margin-bottom:15px;margin-top:5px">Gaming</p>
      </div>
      <div style="width:50%; float:left"> <img src="{!! asset('public/resume_yellow/assets/imgs/hobb-4.png') !!}" style="display:block" width="50"/>
        <p style="font-size:14px; text-transform:uppercase; margin-bottom:15px;margin-top:5px">Biking</p>
      </div>
      <div style="clear:both; margin:0; padding:0; width:100%"></div>
      @else
      @php( $hobbies = explode(',',$user_pro->interest_hobies))
    @foreach( $hobbies as $hobby)
   
    @if($hobby != '"null"' && $hobby != "null")
  
    @php($hob = trim($hobby,'"'))
      <div style="width:50%; float:left"> 
      @if( $hob == 'sports')
      <img src="{!! asset('public/resume_yellow/assets/imgs/sports.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'music')
      <img src="{!! asset('public/resume_yellow/assets/imgs/music.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'reading')
      <img src="{!! asset('public/resume_yellow/assets/imgs/reading.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'dancing')
      <img src="{!! asset('public/resume_yellow/assets/imgs/dance.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'art')
      <img src="{!! asset('public/resume_yellow/assets/imgs/art.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'internet')
      <img src="{!! asset('public/resume_yellow/assets/imgs/internet.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'technology')
      <img src="{!! asset('public/resume_yellow/assets/imgs/technology.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'travelling')
      <img src="{!! asset('public/resume_yellow/assets/imgs/airplane.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'writing')
      <img src="{!! asset('public/resume_yellow/assets/imgs/writting.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'gardening' )
      <img src="{!! asset('public/resume_yellow/assets/imgs/gardening.png') !!}" style="display:block" width="50"/>
      @endif
        <p style="font-size:14px; text-transform:uppercase; margin-bottom:15px; margin-top:5px">{{ trim($hobby,'"') }}</p>
      </div>
      @endif
      @endforeach
      @endif
      <div style="clear:both; margin:0; padding:0; width:100%"></div>
    </div>
  </div>
</div>
<!--Left-bar ends-->  
  
<!--Right content-->

<div style="width:550px; color:#fff; float:left;margin-top:40px">
    <div style="padding:30px" >
    @if($user_skill->project != '"null"' && $user_skill->project != null  && $user_skill->project != 'ul' &&  $user_skill->project != "null")
     <!--Projects-->
     <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{!! asset('public/resume_yellow/assets/imgs/projects.jpg') !!}" style="display:inline-block; float:left; width:45px; "/>
        <p style="margin:0; width:265px; padding:0 20px;     line-height: 44px;display:inline-block; ">Projects</p>
      </div>
      <div style="padding:20px 0; ">
      
      @php( $project = explode(',',$user_skill->project))
        @foreach( $project as $pro)
        @php($proj = trim($pro, '"'))
        <p style="margin-top:5px;"><a href="{{ $proj }}" style="color:#fff; text-decoration:none; ">{{ ucwords(strtolower($proj)) }}</a></p>
        @endforeach
            </div>
      <br>
     @endif
     @if($user_achiev->title != '"null"'  && $user_achiev->title != 'ul'   && $user_achiev->title != null && $user_achiev->title != "null" )

      <!--Achivement -->
      <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{!! asset('public/resume_yellow/assets/imgs/projects.jpg') !!}" style="display:inline-block; float:left; width:45px; "/>
        <p style="margin:0; width:265px; padding:0 20px;     line-height: 44px;display:inline-block; ">Achivements </p>
      </div>
      <div style="padding:20px 0; ">
      
      @php( $achivement = explode(',',$user_achiev->title))
        @foreach( $achivement as $achive)
        @php($achiv = trim($achive, '"'))
        <p style="margin-top:5px;"><a href="{{ $achiv }}" style="color:#fff; text-decoration:none; ">{{ ucwords(strtolower($achiv)) }}</a></p>
        @endforeach
            </div>
       @endif  
    <!--------Personal Details---------------> 
     
    <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{!! asset('public/resume_yellow/assets/imgs/about.png') !!}" style="display:inline-block; float:left; width:45px; "/>
        <p style="margin:0; width:265px; padding:0 20px;     line-height: 44px;display:inline-block; ">Personal Details </p>
      </div>
        <div style="padding:20px 0; ">

          <div style="display:flex; margin:0 -15px">
            <div style="width:30%; padding:0 15px"><strong style="font-size:16px">Current Location</strong></div>
            <div style="width:70%; padding:0 15px"><p style="font-size:16px">{{ $user_pro->current_location }}</p></div>
          </div>
          <div style="display:flex; margin:0 -15px">
            <div style="width:30%; padding:0 15px"><strong style="font-size:16px">Address</strong></div>
            <div style="width:70%; padding:0 15px"><p style="font-size:16px">{{ $user_pro->user_address }}</p></div>
          </div>
          <div style="display:flex; margin:0 -15px">
            <div style="width:30%; padding:0 15px"><strong style="font-size:16px">Age</strong></div>
            <div style="width:70%; padding:0 15px"><p style="font-size:16px">{{ $user_pro->age }}</p></div>
          </div>
          <div style="display:flex; margin:0 -15px">
            <div style="width:30%; padding:0 15px"><strong style="font-size:16px">Gender</strong></div>
            <div style="width:70%; padding:0 15px"><p style="font-size:16px">{{ $user_pro->gender }}</p></div>
          </div>
          <div style="display:flex; margin:0 -15px">
            <div style="width:30%; padding:0 15px"><strong style="font-size:16px">Marital Status</strong></div>
            <div style="width:70%; padding:0 15px"><p style="font-size:16px">{{ $user_pro->marital_status }}</p></div>
          </div>
        </div>
 
      <!--Bottom Part-->
        <hr style="opacity:0.2;">
        <p style="font-size:18px; line-height:35px">I Assure you that the above information regarding me is true. And I am qualiﬁed with above all the education. Hoping for your regards.</p>
        
        <div style="padding:10px 0; display:block"></div>
        
    </div>
  </div>
  
<!--Right content ends-->  
  <div style="clear:both; margin:0; padding:0; width:100%"></div>
  
<div style="padding: 20px 0 0; position: absolute; width: 900px; bottom: 0;">  <h1 style="letter-spacing:15px; text-align:center; font-weight:900; font-size:65px; margin-top:0; margin-bottom:20px; padding:0 0 10px 0;  -webkit-text-stroke-width: 0.1px;
            -webkit-text-stroke-color: white; text-shadow:-5px 4px 11px #000; color:#ffc813">THANK YOU</h1>
  <div style="background:#ffc813; border-top:2px solid #000; text-align:center; padding:15px 10px 20px">
          <h3 style="margin:0 0 10px 0; color:#000; font-size:30px; line-height:25px; text-transform:uppercase ">The best way to predict the future is to Create it.</h3>
          <a href="https://www.happiestresume.com/" style="color:#000; font-weight:600; text-decoration:none" 
          target="_blank">www.happiestresume.com</a></div></div>

          
</div>
<style>
.btn{

  display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 10px 28px;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0px;
   
}
</style>
<form action="{{  url('downloadpdf') }}" method="post">
        @csrf
        <input type="hidden" value="{{ $user_id }}" name="user_id">
     <input type="submit" name="sunmitPDFBtn" id="sunmitPDFBtn" style="display:none">
      </form>
      <br>
<div class="container text-center bottom-sec">

  
   <a href="{{ url('myResume') }}" class="btn" style="background-color:#000;color:#fff;    text-decoration: none;">Preview</a>
   <a href="#"  onclick="WhatsappShare()" class="btn " style="background-color:#00c851;color:#fff;    text-decoration: none;">WhatsApp </a>
   <a href="#"  onclick="submitPDFform()" class="btn " style="background-color:#00d0ff;color:#fff;    text-decoration: none;">Download PDF </a>
   <a href="#"  onclick="mailLink()" class="btn " style="background-color:#b51c1c;color:#fff;text-decoration: none;">Mail</a>
  


<a href="{{ url('build-resume') }}" class="btn btn-bubble btn-sm btn" style="padding: 1em 1em;background-color:#212121;color: #fff;position: fixed;bottom: 8px;right: 13px;text-decoration:none">Edit My Resume</a>
</div>


   
</section>

<footer class="footer footer-bar">
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="">
          <p class="mb-0">© 2020 Happiest Resume. All Right Reserved.</p>
        </div>
      </div>
    </div>
  </div>
  <!--end container--> 
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script> 
<script src="{{ url('assets/js/jquery.easing.min.js') }}"></script> 
<script src="{{ url('assets/js/plugins.js') }}"></script> 
<script src="{{ url('assets/js/counter.int.js') }}"></script> 

<!-- selectize js --> 
<script src="{{ url('assets/js/selectize.min.js') }}"></script> 
<script src="{{ url('assets/js/jquery.nice-select.min.js') }}"></script> 
<script src="{{ url('assets/js/owl.carousel.min.js') }}"></script> 
<script src="{{ url('assets/vendors/fancybox/jquery.fancybox.min.js') }}"></script> 
<script src="{{ url('assets/js/app.js') }}"></script> 
<script src="{{ url('assets/js/home.js') }}"></script>

<script>
function submitPDFform(){
    $('#sunmitPDFBtn').click();
  }

  function WhatsappShare() {
    
        if (/Android|webOS|iPhone|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            var sUrl = '{{URL::to('cv')."/$user_code"}}';
            var whatsapp_url = "whatsapp://send?text=" + sUrl;
            window.open(whatsapp_url, "_blank");
        }
        else {
            var sUrl = '{{URL::to('cv')."/$user_code"}}';
            var whatsapp_url = "https://web.whatsapp.com/send?text=" + sUrl;
            window.open(whatsapp_url, "_blank");
        }
    }

    function mailLink(){
     var subject = 'Resume';
     var body = '{{URL::to('cv')."/$user_code"}}';
     var mail_url = "mailto:" + '' + "?subject=" + subject + "&body=" + body;
     window.open(mail_url,"_blank");
   }
</script>
</body>

</html>