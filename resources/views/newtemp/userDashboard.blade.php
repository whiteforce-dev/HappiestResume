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
<link rel="stylesheet"  type="text/css" sizes="72x72" href="{!! url('assets/resumeDesign/images/apple-icon-72x72.png') !!}">
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
* {
   font-family: none;
}
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
    @if($resume_id == 1)
  <style>
  html{
    background: linear-gradient(to right, #ffeeee, #ddefbb);
  }
  </style>
  @elseif($resume_id == 2)
  <style>
    html{
      background: linear-gradient(to right,#e6f7ee, #faffd1);
  }
    </style>
  @endif
  <style>
    .animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
  font-family: none;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
} 
  </style>
</head>


<body>
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
                    <a class="page-scroll" target="_blank" href="{{URL::to('exclusive-jobs')}}">
                      <h6 class="animate-charcter"><b>Exclusive Jobs</b></h6>
                    </a>
                    </li>               

        <li class="has-submenu"> <a href="javascript:void(0)" style="color: black;font-weight: 600;">{{ $user_name }} <i class="mdi mdi-chevron-down"></i>&nbsp;&nbsp;<img class="img-circle" width="50"  height="50" src="{!! $user_image != '' ? url($user_image) : url('assets/resumeDesign/images/user.png')  !!}"/> </a>
          <ul class="submenu">
            <li><a href="{{ url('exclusive-jobs') }}">Exclusive Jobs</a></li>
            <li><a href="{{ url('/signout') }}">Sign Out</a></li>
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
<div style="margin-top: 135px;font-family: none;line-height: 1;">
        <?php echo $resume_template;?>
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
  


<a href="{{ url('build-resume').'/'.$resume_id }}" class="btn btn-bubble btn-sm btn" style="padding: 1em 1em;background-color:#212121;color: #fff;position: fixed;bottom: 8px;right: 13px;text-decoration:none">Edit My Resume</a>
</div>


   
</section>

<footer class="footer footer-bar">
  <div class="container text-center">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="">
          <p class="mb-0">© {{ date('Y') }} Happiest Resume. All Right Reserved.</p>
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

<script>

$(function() {
      $('div.app-download').toggle(screen.width > 850);
});
</script>

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