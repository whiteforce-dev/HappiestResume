<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="title" content="https://happiestresume.com/">
    <meta name="description" content="PROFESSIONAL RESUME TEMPLATES">
    <meta name="keywords" content="resume creation, best resume website, 100free">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <title>Happiest Resume : Hot Jobs</title>
    <link rel="shortcut icon" href="{{url('public/front/images/logo1.png') }}" type="image/x-icon" />
    <link href="{{url('public/front/jobsearch').'/'}}css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="{{url('public/front/jobsearch').'/'}}css/mdb.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('public/front/jobsearch').'/'}}css/materialdesignicons.css" type="text/css" />
    <link rel="stylesheet" href="{{url('public/front/jobsearch').'/'}}css/additional.css" type="text/css" />
    <link href="{{url('public/front/jobsearch').'/'}}css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('public/front/jobsearch').'/'}}css/media.css" />
    <link rel='stylesheet' id='nd_options_font_family_h-css'
        href='http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C700&#038;ver=4.9.4' type='text/css'
        media='all' />
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet" />
    {{-- this frontend.chatbot_script chatbot script   --}}
    @include('frontend.chatbot_script')
    <style type="text/css">
        .new-ser-banner {
            display: inline-block;
            width: 100%;
            min-height: 100vh;
            background: #f8e71c;
            overflow: hidden;
            position: relative;
        }

        .search-banner-container {
            width: 860px;
            position: absolute;
            bottom: 146px;
            left: 27px;
        }

        .banner-search-title h1 {
            font-size: 52px;
            font-weight: bold;
            text-shadow: 1px 1px #fdfdfd;
            line-height: 52px;
        }

        .search-txt-container {
            position: relative;
            width: 100%;
            padding: 5px 3px 5px 5px;
            border-radius: 3px;
            background: #ffffff;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
            margin: 20px 0px;
            float: left;
        }

        .search-txtblock {
            display: inline-block;
            width: 50%;
            padding: 10px 0px 10px 30px;
            position: relative;
            float: left;
        }

        .search-txtblock i {
            color: #4285f4;
            font-size: 20px;
            position: absolute;
            left: 10px;
            top: 18px;
        }

        .banner-sertxt {
            border: none;
            padding: 12px 5px 12px 8px;
            outline: none;
            width: 100%;
        }

        .search-txtblock-location {
            display: inline-block;
            width: 48%;
            padding: 10px 0px 10px 30px;
            position: relative;
            border-left: solid thin #e1e1e1;
            float: left;
        }

        .search-txtblock-location i {
            color: #4285f4;
            font-size: 20px;
            position: absolute;
            left: 10px;
            top: 18px;
        }

        .banner-sertxt {
            border: none;
            padding: 12px 5px 12px 8px;
            outline: none;
            width: 100%;
        }
        .form-control {
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            /* color: #495057; */
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #fdfeff;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        .btn-bannersearch {
            width: 100%;
            display: inline-block;
            /* float: left; */
            margin: 0px;
            background-color: #4285f4;
            position: absolute;
            /* right: 182px; */
            left: 0px;
            height: calc(79% - 17px);
            font-size: 16px;
            border: none;
            color: #ffffff;
            font-weight: 500;
            text-transform: uppercase;
        }

        .search-banner-img {
            position: absolute;
            right: -100px;
            transition: .5s all;
            bottom: 0px;
            z-index: 3;
        }

        .search-banner-dot-left {
            position: absolute;
            top: 50px;
            left: 0px;
            width: 200px;
        }

        .search-banner-dot-top {
            position: absolute;
            top: 0px;
            right: 0px;
        }

        .search-banner-dot-bottom {
            position: absolute;
            bottom: -70px;
            right: 15%;
            z-index: 1;
            height: 200px;
        }

        /*----Job Search Page-----*/
        .new-search-jobs {
            width: 100%;
            padding: 50px;
            text-align: center;
        }

        .new-search-block {
            background: #ffffff;
            position: relative;
            display: block;
            border-radius: 8px;
            margin-top: 30px;
            box-shadow: 0 0 20px 0 rgba(62, 28, 131, 0.1);
            -webkit-box-shadow: 0 0 20px 0 rgba(62, 28, 131, 0.1);
            -moz-box-shadow: 0 0 20px 0 rgba(62, 28, 131, 0.1);
            padding: 10px;
            float: left;
        }

        .top-jobtype {
            float: right;
            padding: 4px 15px;
            line-height: 1.4;
            font-size: 12px;
            border-radius: 2px 0 0 2px;
        }

        .job-com-logo {
            width: 100%;
            float: left;
            margin: 10px 0px;
            height: 100px;
            overflow: hidden;
        }

        .job-title {
            float: left;
            width: 100%;
            color: #272f46;
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            display: inline-block;
            margin-bottom: 5px;
        }

        .job-description {
            margin-bottom: 5px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            float: left;
            font-family: 'Muli', sans-serif;
            position: relative;
            font-size: 15px;
            color: #667488;
            width: 90%;
            margin: 10px 5%;
            min-height: 44px;
        }

        .job-details {
            width: 100%;
            float: left;
            margin: 10px 0px 15px 0px;
        }

        .job-payamt {
            color: #ff8b00;
            float: left;
            font-size: 15px;
        }

        .job-open {
            float: right;
            display: inline-block;
            padding: 4px 14px;
            background: #f1f4fb;
            border-radius: 50px;
            color: #8b91a0;
            font-size: 14px;
        }

        .job-detbtn {
            float: left;
            margin: 5px 0px;
            padding: 8px !important;
            width: 90px;
        }

        .job-appbtn {
            margin-right: 0px;
            float: right;
            margin: 5px 0px;
            padding: 8px !important;
            width: 90px;
        }

        .freelancer {
            background: rgba(38, 169, 225, 0.1);
            color: #26a9e1;
        }

        .fulltime {
            background: rgba(3, 165, 4, 0.1);
            color: #03a504;
        }

        .parttime {
            background: rgba(246, 147, 30, 0.1);
            color: #f6931e;
        }

        .intern {
            background: rgba(210, 0, 1, 0.1);
            color: #d20001;
        }

        .top_menu_ul li a {
            color: #000000 !important;
            font-weight: 700 !important;
            font-size: 14px !important;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">

    <style>
        .card .image {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .card .image img {
            width: 100%;
            transition: .5s;
        }

        .card:hover .image img {
            opacity: .5;
            transform: translateX(30%);
            /*100%*/
        }

        .card .details {
            position: absolute;
            top: 0;
            left: -6%;
            width: 102%;
            /*100%*/
            height: 100%;
            /* background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(8,115,238,1) 100%); */
            background: rgb(255, 255, 255);
            /* background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(248, 231, 28, 1) 100%, rgba(157, 254, 127, 1) 100%, rgba(248, 231, 28, 1) 100%, rgba(42, 221, 72, 1) 100%, rgba(197, 214, 57, 1) 100%); */
            background: linear-gradient(90deg, rgb(248, 231, 28) 0%, rgb(241, 232, 124) 100%, rgb(255, 255, 255) 100%, rgb(255, 255, 255) 100%, rgb(255, 255, 255) 100%, rgb(255, 255, 255) 100%);

            transition: .5s;
            transform-origin: left;
            transform: perspective(2000px) rotateY(-90deg);
        }

        .card:hover .details {
            transform: perspective(2000px) rotateY(0deg);
        }

        .card .details .center {
            padding: 20px;
            text-align: center;
            background: #fff;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .card .details .center h1 {
            margin: 0;
            padding: 0;
            color: #ff3636;
            line-height: 20px;
            font-size: 20px;
            text-transform: uppercase;
        }

        .card .details .center h1 span {
            font-size: 14px;
            color: #262626;
        }

        .card .details .center p {
            margin: 10px 0;
            padding: 0;
            color: #262626;
        }

        .card .details .center ul {
            margin: 10px auto 0;
            padding: 0;
            display: table;
        }

        .card .details .center ul li {
            list-style: none;
            margin: 0 5px;
            float: left;
        }

        .card .details .center ul li a {
            display: block;
            background: #262626;
            color: #fff;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            transform: .5s;
        }

        .card .details .center ul li a:hover {
            background: #ff3636;
        }

        .main-job {
            min-height: 350px !important;
            background: linear-gradient(90deg, rgba(248, 231, 28, 0.17) 0%, rgba(255, 255, 255, 1) 100%);
            /* background: #f5f5f5 !important; */
            padding: 20px 25px;
        }

        ul.keywords {
            list-style-type: none !important;
            font-size: 13px !important;
            color: #6a6969 !important;
            line-height: 20px !important;
            padding-left: 8px !important;
            margin-bottom: 8px !important;
        }

        .points {
            line-height: 20px !important;
        }

        .job-posted {
           
            font-size: 10px !important;
            font-weight: 500 !important;
            display: inline-block !important;
            padding: 5px 15px !important;
            border-radius: 50px !important;
            text-transform: uppercase !important;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        .job-posted {
            color: #000000 !important;
            font-weight: 700 !important;
            background: #f7e61c !important;
        }

        .candiate-applied {
            
            font-size: 10px !important;
            font-weight: 500 !important;
            display: inline-block !important;
            padding: 5px 15px !important;
            border-radius: 50px !important;
            text-transform: uppercase !important;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out; 
        }

        .candiate-applied {
            color: #000000 !important;
            font-weight: 700 !important;
            background: #f7e61c !important;
        }
        .circle-icon {
            background: #fff;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            text-align: center;
            line-height: 100px;
            vertical-align: middle;
            padding: 30px;
        }

        figure {
            display: block;
            /* width: 50px;
            height: 50px;
            border-radius: 50px; */
            font-size: 25px;
            text-align: center;
            margin-right: 10px;
            background: #fff;
            line-height: 1.7em;
            height: 100px;
            width: 100px;
            border-radius: 70%;
        }

        figure img {
            display: inline-block;
            width: 70px;
            height: auto;
            margin-top: 28%;
        }

        .msh {
            text-shadow: 2px 2px 3px #fff !important;
        }

        .job-posted-center {
            color: #eb0e85;
            background: #ffb5dd;
        }

        .job-posted-center {
            /* float: right; */
            font-size: 10px;
            font-weight: 500;
            display: inline-block;
            padding: 5px 15px;
            border-radius: 50px;
            text-transform: uppercase;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        .mymdi {
            color: orangered !important;
            /* color: #ff8800 !important; */
        }

        .job-description {
            margin-bottom: 5px;
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            float: left;
            font-family: 'Muli', sans-serif;
            position: relative;
            font-size: 15px;
            color: #000;
            width: 90%;
            margin: 10px 5%;
            min-height: 44px;
        }
  
    </style>

</head>



{{-- <body style="font-family: 'Balsamiq Sans', cursive !important;"> --}}

<body style="font-family: Roboto,Arial,Times,serif !important;">
    <main class="main_block">
        <div id="loader-overlay" class="loader_overlay">
            <div class="loader">
                <div class="loader-inner"></div>
            </div>
        </div>
        <nav>
            <div class="logowithmenu_bar" id="top_navigation_bar">
                @include('frontend.common.nav')
            </div>
        </nav>
 <style>
 
      .panel-front {
    background-image: url('../../assets/images/g6.jpg');
  background-repeat: no-repeat;
  color: white;
 
  
}
.panel-front p {
    font-weight : bolder;
}
.panel-back {
  background-image: url('../../assets/images/g10.png');
  background-repeat: no-repeat;
 
  color: white;
  transform: rotateY(180deg);

  
  /* padding: 5px; */
}
.panel-back p {
    font-weight : bolder;
}
</style>
 </style>       
        <section class="new-ser-banner">
            <div class="search-banner-container">
                <div class="banner-search-title">
                    <h1 class="h3-responsive animated fadeInDown">Searching <span style="color: #4285f4;
                text-shadow: 1px 1px #0060ff;">for a job?</span></h1>
                    <h1>Find the job that fit your life</h1>
                </div>
                <form>
                    <div class="search-txt-container">
                  <div class="row">
                    <div class="search-txtblock">
                            <i class="mdi mdi-map-marker active"></i>
                            <input class="banner-sertxt" type="text" placeholder="Search By Location.." name="location" id="location"
                                value="{{$location}}">
                        </div>
                       <div id="location_list"></div>
                        <div class="search-txtblock-location">
                            <i class="mdi mdi-pencil active"></i>
                            <input class="banner-sertxt" type="text" placeholder="Skills, Designations etc"
                                name="designation_company_sk" id="designation_company_sk" value="{{$designation_company_sk}}">
                        </div>
                        <div id="position_list"></div>
                        </div>   
                   
                       <div class="row">
                        <button type="submit" class="btn-bannersearch">Find Jobs</button>
                        </div>
                    </div>
                  
                </form>
            </div>
            <img src="{{url('public/front/jobsearch').'/'}}images/search-boy-bg.png" class="search-banner-img"
                alt="Job Search">
            <img src="{{url('public/front/jobsearch').'/'}}images/dot-left.png" class="search-banner-dot-left"
                alt="Job Search">
            <img src="{{url('public/front/jobsearch').'/'}}images/dot-top.png" class="search-banner-dot-top"
                alt="Job Search">
            <img src="{{url('public/front/jobsearch').'/'}}images/dot-bottom.png" class="search-banner-dot-bottom"
                alt="Job Search">
        </section>
        <section class="new-search-jobs">
            <div class="overall-searchjob-container">


                <div class="row">
                    <div class="col-sm-6" style="padding-top: 29px;">
                        @if($jobs->currentPage() == 1)
                        <h4 class="text-left">Showing 1 to @if($jobs->total() <= 16*$jobs->currentPage())
                                {{$jobs->total()}}
                                @else {{16*$jobs->currentPage()}} @endif of {{ $jobs->total() }}
                                hot jobs</h4>
                        @elseif($jobs->currentPage() > 1)
                        <h4 class="text-left">Showing {{(16*($jobs->currentPage()-1))+1}} to @if($jobs->total() <=
                                16*$jobs->
                                currentPage()) {{$jobs->total()}} @else {{16*$jobs->currentPage()}} @endif
                                of {{ $jobs->total() }}
                                hot jobs</h4>
                        @else
                        @endif
                    </div>

                    @if(session()->has('user'))
                    @if(session()->has('is_related'))
                    @if(session('is_related') == 1)
                    <div class="col-sm-4">
                        <form action="{{ url('hot-jobs') }}" method="post">
                            @csrf
                            <input type="hidden" value="0" name="is_related">
                            <button type="submit" class="btn btn-sm btn-primary float-right">
                                Get All Jobs
                            </button>
                        </form>
                    </div>
                    @else
                    <div class="col-sm-4">
                        <form action="{{ url('hot-jobs') }}" method="post">
                            @csrf
                            <input type="hidden" value="1" name="is_related">
                            <button type="submit" class="btn btn-sm btn-primary float-right">
                                Get Related Jobs
                            </button>
                        </form>
                    </div>
                    @endif
                    @else
                    <div class="col-sm-4">
                        <form action="{{ url('hot-jobs') }}" method="post">
                            @csrf
                            <input type="hidden" value="1" name="is_related">
                            <button type="submit" class="btn btn-sm btn-primary float-right">
                                Get Related Jobs
                            </button>
                        </form>
                    </div>
                    @endif



                    {{-- End session user  --}}
                    @endif

                    <div class="row col-sm-6" style="background: linear-gradient(to right, #e9d362, #333333);">
                  <div class="col-md-6" style="padding-bottom: 11px;">
                  <label for="" style="float: left;font-size: 14px;font-weight: 900;color:white">Select Zone</label>
                        <select name="nationality" id="nationality" class="form-control" onchange="searchForJobs()">
                                <option value="0" <?php if( $nationality == 0){ echo 'selected';}?>>All</option>
                                <option value="1" <?php if( $nationality == 1){ echo 'selected';}?>>National</option>
                                <option value="2" <?php if( $nationality == 2){ echo 'selected';}?>>International</option>
                        </select>
                  </div>
                  <div class="col-md-6">
                  <label for="" style="float: left;font-size: 14px;font-weight: 900;color:white">Select Category</label>
                        <select name="experience" id="experience" class="form-control" onchange="searchForJobs()">
                                <option value="0" <?php if( $experience == 0){ echo 'selected';}?>>All</option>
                                <option value="2" <?php if( $experience == 2){ echo 'selected';}?>>Fresher</option>
                                <option value="1" <?php if( $experience == 1){ echo 'selected';}?>>Experience</option>
                        </select>
                  </div>
                </div> 

                    <div class="row">
                        <div class="col-sm-12">
                            <br>
                        </div>
                        @foreach($jobs as $job)
                        <div class="col-sm-3" style="margin-bottom: 45px;">
                            <a href="{{ url('job-description',[$job->id]) }}" style="color: black">
                                <div class="card">

                                    <div class="image main-job">
                                        <div align="left">
                                            <h5 style="font-weight: 700 !important;">
                                                {{ isset($job->position)?ucwords($job->position):'' }}</h5>
                                        </div>
                                        <hr>
                                        <div align="left" class="points">
                                            <span class="mdi mdi-briefcase mymdi"
                                                style="font-size: 25px; font-weight: 700;"></span><span
                                                style="font-size: 18px; font-weight: 700"> | 2 - 4 Yrs</span>
                                        </div>
                                        <div align="left" class="points">
                                            <span class="mdi mdi-cash-100 mymdi"
                                                style="font-size: 25px; font-weight: 700;"></span><span
                                                style="font-size: 18px; font-weight: 700"> | ₹
                                                {{ number_format($job->package_offer_from) }} To ₹
                                                {{ number_format($job->package_offer_to) }} INR</span>
                                        </div>
                                        <div align="left" class="points">
                                            <span class="mdi mdi-map-marker mymdi"
                                                style="font-size: 25px; font-weight: 700;"></span><span
                                                style="font-size: 18px; font-weight: 700"> |
                                                {{ isset($job->job_location)?ucwords($job->job_location):'' }}</span>
                                        </div>
                                        <p></p>
                                        <div align="left" class="points">
                                            <b style="font-weight: 800 !important;">Job Description : </b>
                                            {{-- @php
                                               $mystring = strip_tags($job->job_description);
                                                @endphp --}}
                                            <span class="job-description">
                                                {{ $job->job_description }}
                                            </span>
                                            {{-- {{ substr("$mystring",6) }} --}}
                                            </>
                                        </div>

                                        @php
                                        $start = new \Carbon\Carbon("$job->created_at");
                                        $end = new \Carbon\Carbon();
                                        @endphp
                                      
                                        
                                        
                                            <div class="job-posted" >Posted On - 
                                            <b style="color:black;">{{ $start->diff($end)->format('%d') }}</b> Day(s)
                                                Ago
                                            </div>
                                       
                                        
                                       
                                      
                                       
                                        

                                
                                        


                                    </div>
                                    <div class="details" style="padding: 20px 20px;">
                                       
                                        @if(file_exists($job->company->hh_img))
                                        <img width="100"  class="img-fluid" src="{{ $job->company->hh_img }}" alt="image">

                                        @elseif(isset($job->company->image) && file_exists($job->company->image))

                                        <img width="100"  class="img-fluid" src="{{ url($job->company->image) }}" alt="image">
                                        @else
                                        <img  width="100" class="img-fluid" src="{{url('public/images/company/white_force.png')}}"
                                            alt="image">
                                        @endif


                                        <p></p


                                        <h5 class="msh" style="font-weight: 700 !important; color:#000">{{ ucwords($job->company->name) }}</h5>
                                        <hr>
                                        <small style="font-weight: 700 !important; font-size: 12px;">For More
                                            Jobs Contact Our
                                            Managers</small>
                                        <p></p>
                                  
                                    <div align="center" class="points">
                                            <span class="msh" style="font-weight: 700 !important; color:#000">{!! isset($job->hr_name)?ucwords($job->hr_name):'-' !!}</span>
                                        </div>
                                        <div align="center" class="points">
                                            <span class="msh"
                                                style="font-weight: 700 !important; color:#000">{!! isset($job->hr_email)?$job->hr_email:'-' !!}</span>
                                        </div>
                                        <div align="center" class="points">
                                            <span class="msh"
                                                style="font-weight: 700 !important; color:#000">{!! isset($job->hr_contact)?$job->hr_contact:'-' !!}</span>
                                        </div>
                                  
                                        
                                        <p></p>
                                        <div style="bottom: 15px;position: absolute;margin-left: 7%;">
                                        <a href="{{ url('job-description',[$job->id]) }}"><button
                                                class="btn btn-primary btn-sm">Apply</button></a>
                                        <a href="{{ url('job-description',[$job->id]) }}"><button
                                                class="btn btn-info btn-sm">View Details</button></a>
                                        </div>
                                       
                                    </div>
                                </div>
                            </a>

                        </div>

                        @endforeach
                    </div>


                </div>

                <br>
                {{-- {{ $jobs->appends(Illuminate\Support\Facades\Input::except('page'))->links() }} --}}
            </div>
        </section>

        @include('frontend.common.footer')
        @include('frontend.common.modal')

    </main>


    <script type="text/javascript" src="{{url('public/front/jobsearch').'/'}}js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="{{url('public/front/jobsearch').'/'}}js/popper.min.js"></script>
    <script type="text/javascript" src="{{url('public/front/jobsearch').'/'}}js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url('public/front/jobsearch').'/'}}js/mdb.min.js"></script>
    <script type="text/javascript" src="{{url('public/front/jobsearch').'/'}}js/master.js"></script>
    <script type="text/javascript">
        window.onload = function (e) {
        setTimeout(function () {
            $('#loader-overlay').addClass('scale0');
        }, 2000);
    }
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

    $(document).ready(function () {
        $('.glo_menuclick').click(function (e) {
            var chkopen = $(this).find('.menu_basic_popup').attr('class');
            //$('#setting_box_slide').removeClass('show_setting');
            if (chkopen != 'menu_basic_popup effect') {
                if (chkopen != 'menu_basic_popup menu_popup_setting effect') {
                    $('.menu_basic_popup').addClass('scale0');
                    $(this).find('.menu_basic_popup').removeClass('scale0');
                    $('#User_info_block').addClass('add_color');
                } else {
                    $('.menu_basic_popup').addClass('scale0');
                    $('#User_info_block').removeClass('add_color');
                }
            } else {
                $('.menu_basic_popup').addClass('scale0');
                $('#User_info_block').removeClass('add_color');
            }
            e.stopPropagation();
        });
        $(document).click(function (e) {
            $('.menu_basic_popup').addClass('scale0');
            $('#User_info_block').removeClass('add_color');
            e.stopPropagation();
        });
    });
    </script>

    <script>
        function getDescription(url) {
        alert(url);
        window.location.href = url;
    }
    </script>

    <script type="text/javascript">
        function apply_jobs(job_id, user_id) {
        $.get('{{ URL::to('apply_job') }}', {job_id: job_id, user_id: user_id}, function (data) {
            console.log(data);
            if (data == 'applied') {
                SnackBar({
                    message: "You have successful applied for this job",
                    status: "success",
                    fixed: true,
                    timeout: 7000
                });
                $("#" + job_id).attr("disabled", true);
                $("#" + job_id).html("Applied");
            } else {
                SnackBar({
                    message: "You have already applied for this job",
                    status: "danger",
                    fixed: true,
                    timeout: 7000
                });
            }
        });
    }
    </script>
      <script>
    function searchForJobs(){
       
        var nationality = $('#nationality').val();
        var experience = $('#experience').val();
        window.location.href = "{{ url('searchJobsByNationExp').'/' }}"+nationality+ '/' + experience ;
    }
    </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
       <script>
  $(document).ready(function(){
      
    $('#designation_company_sk').tokenfield({
        autocomplete :{
            source: function(request, response)
            {
                jQuery.get('{{ url('getDesignationAutoJob') }}', {
                    str : request.term
                }, function(data){
                    data = JSON.parse(data);
                    response(data);
                });
            },
            delay: 100
        }
    });

   

  });
</script>
<script>
  $(document).ready(function(){
      
    $('#location').tokenfield({
        autocomplete :{
            source: function(request, response)
            {
                jQuery.get('{{ url('getlocationAutoJob') }}', {
                    str : request.term
                }, function(data){
                    data = JSON.parse(data);
                    response(data);
                });
            },
            delay: 100
        }
    });

   

  });
</script>
    
</body>

</html>
