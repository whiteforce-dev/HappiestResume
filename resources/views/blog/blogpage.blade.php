<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Section</title>
    <link rel="stylesheet" href="{{ url('css/theme.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ url('assets/happiestNewAssets/css/bootstrap.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ url('assets/happiestNewAssets/css/theme.min.css') }}"> --}}
    <link rel="stylesheet" media="screen" href="{{url('vendor/boxicons/css/boxicons.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ url('vendor/swiper/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('css/blog.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,900&family=Rubik:wght@300;400;600;700&display=swap"
    rel="stylesheet"/>
    <!-- <link rel="stylesheet" media="screen" href="vendor/img-comparison-slider/dist/styles.css"/> -->
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
<body style="font-family: Poppins, sans-serif;">


  <nav >
    <header id="" class="navbar navbar-expand-lg fixed-top py-4" data-scroll-header="" style="background-color: white;">
        <div class="container p-0" style="width: 90%;">
            <a class="navbar-brand me-0 me-xl-4" href="#">
                <img src="http://127.0.0.1:8000/assets/happiestNewAssets/img/logo.png" alt="Happiest Resume"
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
                <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem; width: 50%;">
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
                    <a style="    background-color: #FF9900;
                    border-color: #FF9900;padding: 0.425rem 1rem;
    font-size: 0.875rem;
    border-radius: 0.375rem; width:91px;" class="btn btn-primary btn-sm ms-2 back-btn" href="{{ url('/') }}">
                    Back
                    </a>
                </div>
            </div>
        </div>
    </header>

</nav>



    <section class="container py-5 my-2 my-md-4 my-lg-5 main-blog">
        <div class="row pt-2 py-xl-3 sub-blog">
          <div class="col-lg-3 col-md-4">
            <!-- <h2 class="h1 text-center text-md-start mx-auto mx-md-0 pt-md-2">Blog</h2> -->

            <!-- Slider controls (Prev / next buttons) -->
            <div class="d-flex justify-content-end justify-content-md-start pb-4 mb-2 pt-2 pt-md-4 mt-md-5">
              <button type="button" id="prev-testimonial" class="btn btn-prev btn-icon btn-sm me-2">
                <i class="bx bx-chevron-left"></i>
              </button>
              <button type="button" id="next-testimonial" class="btn btn-next btn-icon btn-sm ms-2">
                <i class="bx bx-chevron-right"></i>
              </button>
            </div>
          </div>
          <div class="col-lg-9 col-md-8">
            <div class="swiper mx-n2" data-swiper-options='{
              "slidesPerView": 1,
              "spaceBetween": 8,
              "loop": true,
              "navigation": {
                "prevEl": "#prev-testimonial",
                "nextEl": "#next-testimonial"
              },
              "breakpoints": {
                "500": {
                  "slidesPerView": 2
                },
                "1000": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }'>
              <div class="swiper-wrapper">
  
                <!-- Item -->
   @if(count($blog))
      @foreach ($blog as $key => $item)
      {{-- @dd($item) --}}
       <div class="swiper-slide h-auto pt-4">
         <div class="only-img">
          <img src="{{$item->image}}" alt="">
          <div class="event">
            {{-- <button>Events</button>
            <button>Job Tips</button> --}}
          </div>
         </div>
         @php
         $description = substr($item->description,0,80);
         
         @endphp
         <div class="only-para">
          <h2>{{ $item->title }}</h2>
          {{-- substr($job_description, 0, 75) --}}
          <p>{{ strip_tags($description) }}</p>
          <div class="admin">
            <div class="profile">
              <img src="{{ url('assets/image/profile.png') }}" alt="" width="35" height="35">
            </div>
            <div class="month">
              <span>Administrator</span>
              <p> {{ date('d-m-Y',strtotime($item->publish_date)) }}</p>
            </div>
            <div class="time">
              
              <a href="{{ url('read-more').'/'.$item->id }}" style="float:right;font-size:16px"> 2 mins to read </a>
            </div>
          </div>
         </div>
       </div>
      @endforeach
  @endif
                <!-- Item -->
                {{-- <div class="swiper-slide h-auto pt-4">
                  <div class="only-img">
                   <img src="{{ url('assets/image/img-big1-403x257.png') }}" alt="">
                   <div class="event">
                     <button>Events</button>
                     <button>Job Tips</button>
                   </div>
                  </div>
                  <div class="only-para">
                   <h2>Email Example : How To Respond To Employer Interview Requests</h2>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus accusamus laboriosam, sint mollitia...</p>
                   <div class="admin">
                     <div class="profile">
                       <img src="{{ url ('assets/image/profile.png') }}" alt="" width="35" height="35">
                     </div>
                     <div class="month">
                       <span>Administrator</span>
                       <p>December 4, 2023</p>
                     </div>
                     <div class="time">2 mins to read</div>
                   </div>
                  </div>
              </div> --}}
  
                <!-- Item -->
                {{-- <div class="swiper-slide h-auto pt-4">
                  <div class="only-img">
                   <img src="{{ url('assets/image/img-single-403x257.png') }}" alt="">
                   <div class="event">
                     <button>Events</button>
                     <button>Job Tips</button>
                   </div>
                  </div>
                  <div class="only-para">
                   <h2>How To Write an Application Letter (With Examples) </h2>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus accusamus laboriosam, sint mollitia alias possimus  deserunt aspernatur rem explicabo...</p>
                   <div class="admin">
                     <div class="profile">
                       <img src="{{ url('assets/image/profile.png') }}" alt="" width="35" height="35">
                     </div>
                     <div class="month">
                       <span>Administrator</span>
                       <p>November 4, 2023</p>
                     </div>
                     <div class="time">2 mins to read</div>
                   </div>
                  </div>
                         </div> --}}
  
                <!-- Item -->
                {{-- <div class="swiper-slide h-auto pt-4">
                  <div class="only-img">
                   <img src="{{ url('assets/image/img8-403x257.png') }}" alt="">
                   <div class="event">
                     <button>Events</button>
                     <button>Job Tips</button>
                   </div>
                  </div>
                  <div class="only-para">
                   <h2>15 Important Tips : How To Write Organized Resume</h2>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus accusamus laboriosam, sint mollitia alias possimus  deserunt aspernatur rem explicabo...</p>
                   <div class="admin">
                     <div class="profile">
                       <img src="{{ url('assets/image/profile.png') }}" alt="" width="35" height="35">
                     </div>
                     <div class="month">
                       <span>Administrator</span>
                       <p>october 4, 2023</p>
                     </div>
                     <div class="time">2 mins to read</div>
                   </div>
                  </div>
              </div> --}}

                            {{-- <!-- Item -->
                <div class="swiper-slide h-auto pt-4">
                  <div class="only-img">
                   <img src="{{ ('assets/image/img-big2-403x257.png') }}" alt="">
                   <div class="event">
                     <button>Events</button>
                     <button>Job Tips</button>
                   </div>
                  </div>
                  <div class="only-para">
                   <h2>Recruiter and Land Your Dream Job Explore Nice Jobs</h2>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus accusamus laboriosam, sint mollitia alias possimus  deserunt aspernatur rem explicabo...</p>
                   <div class="admin">
                     <div class="profile">
                       <img src="{{ ('assets/image/profile.png') }}" alt="" width="35" height="35">
                     </div>
                     <div class="month">
                       <span>Administrator</span>
                       <p>September 4, 2023</p>
                     </div>
                     <div class="time">2 mins to read</div>
                   </div>
                  </div>
              </div> --}}
              </div>
            </div>
          </div>
        </div>
      </section>
      {{-- @include('frontend.common.footer') --}}
      {{-- <section class="pb-4 pt-8 bg-white" id="contact">
        @include('frontend.common.newFooter')
        </section> --}}

      <!-- <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
      <script src="{{ url('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
      <!-- <script src="vendor/vanilla-tilt/dist/vanilla-tilt.min.js"></script> -->
      <!-- <script src="vendor/rellax/rellax.min.js"></script> -->
      <script src="{{ url('vendor/swiper/swiper-bundle.min.js') }}"></script>
      <!-- <script src="vendor/img-comparison-slider/dist/index.js"></script> -->

      <script src="{{ url('js/theme.min.js') }}"></script>
      <script src="https://kit.fontawesome.com/66f2518709.js" crossorigin="anonymous"></script>

</body>
</html>