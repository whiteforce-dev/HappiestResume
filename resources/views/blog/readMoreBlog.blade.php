@extends('frontend.frontmaster')
@section('title','Blog')
@section('content')
<head>
  {{-- <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Privacy Policy</title>
  <link rel="stylesheet" href="{{ url('css/theme.min.css') }}">
  
  <link rel="stylesheet" href="https://happiestresume.com/public/front/css/style.css">
  <link rel="stylesheet" media="screen" href="{{url('vendor/boxicons/css/boxicons.min.css') }}"/>
  <link rel="stylesheet" media="screen" href="{{ url('vendor/swiper/swiper-bundle.min.css') }}"/>
  <link rel="stylesheet" href="{{ url('css/blog.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,900&family=Rubik:wght@300;400;600;700&display=swap"
  rel="stylesheet"/> --}}
  <style>
    div#navbarNav.active-header ul li a {
          color: black;
          font-size: 0.9rem;
      }
      .first-black:hover{
        color: orange !important;
      }
      .blogtap {
          color: orange !important;
      }

      .nav-link {
          font-weight: 500;
          color: #000000;
          font-size: 0.9rem;
      }

      .fixed-top {
          height: 72px;
      }

      .fixed-top{
          box-shadow: 0 0 2px 2px #b9c2d7;
      }
      .back-btn:hover {
  background-color: #fd390e !important;
  border-color: #fd390e !important;
  color: #fff;
  box-shadow: 0 0.25rem 0.25rem 0.125rem rgba(253, 86, 49, .1), 0 0.375rem 0.75rem -0.125rem rgba(253, 86, 49, .4);
}
.mb-2 a{
text-decoration: none;

}
.list-unstyled li a{
font-size: 0.9rem !important;
  font-weight: 500 !important;
  /* color: #423f50 !important; */
}
.btn-warning{
background-color:  orange !important;
font-size: 0.9rem;
}
.btn-warning:hover{
background-color:  orange !important;
background-color: #fd390e !important;
  border-color: #fd390e !important;
  color: #fff;
  box-shadow: 0 0.25rem 0.25rem 0.125rem rgba(253, 86, 49, .1), 0 0.375rem 0.75rem -0.125rem rgba(253, 86, 49, .4);
}
.small_border p{
font-size: 0.9rem !important;
}
.p-0{
padding-left: 11px !important;
width: 91%;
}
.px-6{
max-width: 84%;
}
  </style>
</head>
<style>
#top_navigation_bar{
    background: white;

}
.footer_container{
    margin-top: 50px;
    
}
:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}



.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}


blockquote, .blockquote {
  overflow: hidden;
  background-color: #fafafa;
  padding: 50px !important;
  position: relative;
  text-align: center;
  z-index: 1;
  margin-bottom: 20px;
  margin-top: 20px;
}

blockquote p, .blockquote p {
  color: #343b4e;
  line-height: 1.6;
  margin-bottom: 0;
  font-style: italic;
  font-weight: 500;
  font-size: 22px !important;
}

blockquote cite, .blockquote cite {
  display: none;
}

blockquote::before, .blockquote::before {
  color: #efefef;
  content: "\f10e";
  position: absolute;
  left: 50px;
  top: -50px;
  z-index: -1;
  font-family: "Font Awesome 5 Free";
  font-size: 140px;
  font-weight: 900;
}

blockquote::after, .blockquote::after {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 3px;
  background-color: #ffbf00;
  margin-top: 20px;
  margin-bottom: 20px;
}
p{
   
    font-size: 15px;
    font-family: ;
    font-family: "Open Sans", ui-sans-serif;
    font-weight: 500;
}
.panel-front {
    background-image: url('../assets/images/g766.jpg');
  background-repeat: no-repeat;
  color: white;
 
  
}
.panel-front p {
    font-weight : bolder;
}
.panel-back {
  background-image: url('../assets/images/g788.jpg');
  background-repeat: no-repeat;
 
  color: white;
  transform: rotateY(180deg);
  font-weight : bolder;
  
  /* padding: 5px; */
}
.panel-back p {
    font-weight : bolder;
}
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px
}

.card .img-top {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 99;
    }
    .card:hover .img-top {
        display: inline;
    }
    .paneltg-fronttg {
    background-image: url('../../assets/images/international-flag2.jpg');
  background-repeat: no-repeat;
  color: white;
  font-weight : bolder;
  
}

.paneltg-backtg {
  background-image: url('../../assets/images/international-flagbg.jpg');
  background-repeat: no-repeat;
 
  color: white;
  transform: rotateY(180deg);
  font-weight : bolder;
  
  /* padding: 5px; */
}
</style>
<nav >
  <header id="" class="navbar navbar-expand-lg fixed-top py-4" data-scroll-header="" style="background-color: white;">
      <div class="container p-0" style="width: 90%;">
          <a class="navbar-brand me-0 me-xl-4" href="#">
              <img src="{{ url('assets/happiestNewAssets/img/logo.png') }}" alt="Happiest Resume"
                  style="width: 110px;" loading="lazy">
          </a>
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
              <div id="nav-icon4">
                  <span></span>
                  <span></span>
                  <span></span>
              </div>
          </button>

          <div class="collapse navbar-collapse order-lg-2" id="navbarNav" style="justify-content: end;">
              <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem; width: 40% !important;">
                  <!-- Menu items-->
                  <li class="nav-item">
                    <li class="nav-item active">
                      <a class="nav-link " href="{{Request::is('/') ? " #home" : URL::to('/#home')}}" role="button" aria-expanded="false">Home
                      </a>
                  </li>
                  </li>

                  <li class="nav-item">
                    <li class="nav-item">
                      <a class="nav-link"  href="{{URL::to('exclusive-jobs')}}" role="button" aria-expanded="false">Jobs
                      </a>
                  </li>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="{{Request::is('/') ? " #about" : URL::to('/#about')}}" role="button" aria-expanded="false">About
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{Request::is('/') ? " #templates" : URL::to('/#templates')}}" role="button" aria-expanded="false">Templates
                    </a>
                  </li>
                  <li class="nav-item ">
                      <a class="nav-link first-black blogtap" href="{{ url('blog') }}" role="button"
                          aria-expanded="false">Blog
                      </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="{{Request::is('/') ? " #contact" :
                    URL::to('/#contact')}}" role="button" aria-expanded="false">Contact
                    </a>
                  </li>
              </ul>

              <div>
                  <a style="background-color: #FF9900 !important;
                  border-color: #FF9900 !important;padding: 0.425rem 1rem;
  font-size: 0.875rem;
  border-radius: 0.375rem; width:84px;" class="btn btn-primary btn-sm ms-2 back-btn" href="{{ url('/') }}">
                  Back
                  </a>
              </div>
          </div>
      </div>
  </header>

</nav>
<section class="blog-details-area ptb-100" style="margin-top:111px">
<div class="container">
    <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="blog-details-desc">
                    <div class="article-image">
                    <img src="{{ url($blog->image) }}" alt="image" style="width:100%" height="300">
                    </div>
                    <div class="article-content">
                        <div class="entry-meta">
                            <ul style="float:right">
                            <li>
                            <span>Posted On:</span>
                            <a href="#">{{ date('d-m-Y',strtotime($blog->publish_date)) }}</a>
                            </li>
                            <li>
                            <span>Posted By:</span>
                            <a href="#">{{ $blog->author_name }}</a>
                            </li>
                            </ul>
                        </div>
                    <br>
                    <br>
                    <h3>{{ $blog->title }}</h3>
                    <br>
                    {!! $blog->description !!}
                    <!-- <blockquote class="wp-block-quote">
                    <p >{{ $blog->last_line }}
                    </p>

                    </blockquote> -->


                    </div>
                </div>


            </div>
        </div>
        <br>
        <br>
   
            <div class="col-lg-9 col-md-9">
                <div class="">
                <h5 style="text-align:center"> Comments</h5>
                <br>
                @foreach($comment as $com)
                  <div class="row">
                       <div class="col-md-3" style="text-align-last: end;">
                       <img src="{{url('public/front').'/'}}images/bloguser.jpg" alt="" class="img-rounded" height="100px">
                       </div>
                       <div class="col-md-9">
                       <h6>{{ $com->name }}</h6>
                        <p>{{ date('d-M-Y',strtotime($com->created_at)) }}</p>
                        <div>{{ $com->comment }}</div>
                       
                       </div>

                  </div>
                  <hr>
                @endforeach  
              
                </div>
            </div>
         
         <br>
       
       
            <div class="col-lg-9 col-md-9">
                <div class="blog-details-desc">
                <h5 style="text-align:center">Write A Comment</h5>
                <br>
                <form action="{{ url('addComment/'. $blog->id) }}" method="post">
                @csrf
                  <div class="row">
                     <div class="col-md-4">
                     <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                     </div>
                     <div class="col-md-4">
                     <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
                     </div>
                     <div class="col-md-4">
                     <input type="text" name="website" id="website" class="form-control" placeholder="Your Website" >
                     </div>
                     <br>
</div>
                     
<!--------------------------------------------------------------------------------------------->
<div class="row">
<div class="col-md-4">
 <div class="card" style="position: relative; margin:auto;text-align:center; width:45px; margin-top:21px; 
 height:45px;border-radius: 50%; overflow: hidden; display:inline-block;  display: flex;
  flex-wrap: wrap;">


 <img style="position:absolute; top:0; left:0; width: 100%; height: 100%; object-fit:cover;" 
  src="https://happiestresume.com/public/front/images/emoji/happyW.png" alt="white-emoji" onclick="happy_emoji_change()">

  <img style="position:absolute; top:0; left:0; width: 100%; height: 100%; object-fit:cover;" 
  src="https://happiestresume.com/public/front/images/emoji/happyY.png" alt="yellow-emoji"
   class="img-top" id="happy_yellow" onclick="happy_emoji_change()">  
 </div><!--closed div of card--------------->

 

 <h5 style="font-size: 14px;text-transform: uppercase; margin-top: 10px;font-weight: bold; text-align:center;">HAPPY</h5>
    </div>
<!------------------------------------------------------------------------------------------->
<div class="col-md-4">
  <div class="card" style="position: relative; margin:auto; text-align:center;width:45px; margin-top:21px; 
 height:45px;border-radius: 50%; overflow: hidden; display:inline-block;  display: flex;
  flex-wrap: wrap;">


 <img style="position:absolute; top:0; left:0; width: 100%; height: 100%; object-fit:cover;" 
  src="https://happiestresume.com/public/front/images/emoji/nuetralW.png" alt="white-emoji" onclick="nutral_emoji_change()">

  <img style="position:absolute; top:0; left:0; width: 100%; height: 100%; object-fit:cover;" 
  src="https://happiestresume.com/public/front/images/emoji/nuetralY.png" alt="yellow-emoji"
   class="img-top" id="nutral_yellow" onclick="nutral_emoji_change()">

 </div>
 <h5 style="font-size: 14px;text-transform: uppercase; margin-top: 10px;font-weight: bold; text-align:center;">Neutral</h5>
    </div>
 <!---------------------------------------------------------------------------------------------->

<div class="col-md-4">
 <div class="card" style="position: relative;  margin:auto; text-align:center; width:45px; margin-top:21px; 
 height:45px;border-radius: 50%; overflow: hidden; display:inline-block;  display: flex;
  flex-wrap: wrap;">


 <img style="position:absolute; top:0; left:0; width: 100%; height: 100%; object-fit:cover;" 
  src="https://happiestresume.com/public/front/images/emoji/sadW.png" alt="white-emoji" onclick="sad_emoji_change()">

  <img style="position:absolute; top:0; left:0; width: 100%; height: 100%; object-fit:cover;" 
  src="https://happiestresume.com/public/front/images/emoji/sadY.png" alt="yellow-emoji"
   class="img-top" onclick="sad_emoji_change()" id="sad_yellow">
</div>
 
<h5 style="font-size: 14px;text-transform: uppercase; margin-top: 10px;font-weight: bold; text-align:center;">Sad</h5>
 </div>
 </div>
 

                      <div class="row">
                     <div class="col-md-12" style="margin-top: 23px;">
                     <textarea name="comment" id="comment" cols="155" rows="5" class="form-control" placeholder="Write Your Comment Here.... " ></textarea>
                     </div>
                       </div>
               
                  <div style="text-align:center;padding-top: 22px;">
                  <input type="submit" name="submit" class="btn btn-info" value="Post Comment">
                  </div>
                

                </form>
                </div>
            </div>
            
         </div>

   
</div>
</section>

@include('frontend.common.footer')

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
function sad_emoji_change(){
    document.getElementById("sad_yellow").style.display = "inline";
    document.getElementById("nutral_yellow").style.display = "none";
    document.getElementById("happy_yellow").style.display = "none";
    document.getElementById("emoji").value = 3;
  //  $('#post_comment').click();
   
}
function nutral_emoji_change(){
    document.getElementById("nutral_yellow").style.display = "inline";
    document.getElementById("happy_yellow").style.display = "none";
    document.getElementById("sad_yellow").style.display = "none";
    document.getElementById("emoji").value = 2;
   // $('#post_comment').click();

    
}
function happy_emoji_change(){
    document.getElementById("happy_yellow").style.display = "inline";
    document.getElementById("nutral_yellow").style.display = "none";
    document.getElementById("sad_yellow").style.display = "none";
    document.getElementById("emoji").value = 1;
   // $('#post_comment').click();

    
}
</script>
@stop