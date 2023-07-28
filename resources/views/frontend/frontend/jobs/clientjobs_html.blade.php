<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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
    <style type="text/css">
        .footer_social_btn i {
            font-size: 18px;
            width: 30px !important;
            height: 30px !important;
            text-align: center;
            margin-right: 10px !important;
            line-height: 30px;
        }

        .new-ser-banner {
            display: inline-block;
            width: 100%;
            min-height: 100vh;
            background: #f8e71c;
            overflow: hidden;
            position: relative;
        }

        .search-banner-container {
            width: 767px;
            position: absolute;
            bottom: 40px;
            left: 50px;
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
            padding: 5px 180px 5px 5px;
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
            width: 50%;
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

        .btn-bannersearch {
            width: 20%;
            display: inline-block;
            float: left;
            margin: 0px;
            background-color: #4285f4;
            position: absolute;
            right: 5px;
            height: calc(100% - 10px);
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
    </style>

    <style>
        footer#socket {
            text-align: center;
        }

        #socket {
            font-size: 14px;
            margin-top: -20px;
            z-index: 1;
        }

        #socket {
            background: #2F3336;
            color: #fff;
            font-size: 13px;
            font-weight: 400;
            z-index: 1;
        }
    </style>
</head>

<body>
    <main class="main_block">
        <div id="loader-overlay" class="loader_overlay">
            <div class="loader">
                <div class="loader-inner"></div>
            </div>
        </div>
        <nav>
            <div class="logowithmenu_bar" id="top_navigation_bar">
                {{-- @include('frontend.common.nav') --}}
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo main">
                                <a href="{{url('/')}}">
                                    @if(file_exists(Auth::user()->logo)).
                                    <img class="top_logowhite" src="{{url(Auth::user()->logo) }}"
                                        alt="{{ Auth::user()->name }}" style="height: 80px;width: auto">
                                    @else
                                    <img class="top_logowhite"
                                        src="{{url('public/front/jobsearch').'/'}}images/logo1.png"
                                        alt="{{ Auth::user()->name }}">
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <section class="new-ser-banner">
            <div class="search-banner-container">
                <div class="banner-search-title">
                    <h1 class="h3-responsive animated fadeInDown">Searching <span style="color: #4285f4;
                text-shadow: 1px 1px #0060ff;">for a job?</span></h1>
                    <h1>Find the job that fit your life</h1>
                </div>
                <form>
                    <div class="search-txt-container">
                        <div class="search-txtblock">
                            <i class="mdi mdi-pencil active"></i>
                            <input class="banner-sertxt" type="text" placeholder="Skills, Designations etc"
                                name="designation_company_sk" value="{{$designation_company_sk}}">
                        </div>
                        <div class="search-txtblock-location">
                            <i class="mdi mdi-map-marker active"></i>
                            <input class="banner-sertxt" type="text" placeholder="Search By Location.." name="location"
                                value="{{$location}}">
                        </div>
                        <button type="submit" class="btn-bannersearch">Find Jobs</button>
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

                {!! $jobs->render() !!}
                <div class="row">

                    @foreach($jobs as $job)
                    <div class="col-md-3 col-sm-6">
                        <div class="new-search-block">
                            <div class="top-jobtype freelancer">
                                {{ isset($job->job_location)?ucwords($job->job_location):'' }}
                            </div>
                            <div class="job-com-logo">
                                {{-- @dump($job->company->id) --}}
                                @if(isset($job->company->image))
                                @if(file_exists($job->company->image))
                                <img src="{{ url($job->company->image) }}" style="max-width: 103px;" />
                                @else
                                <img src="{{url('public/front/jobsearch').'/'}}images/company_logo/company_logo1.png" />
                                @endif
                                @else
                                <img src="{{url('public/front/jobsearch').'/'}}images/company_logo/company_logo1.png" />
                                @endif
                            </div>
                            <div class="job-title">
                                {{ isset($job->position)?$job->position:'' }}
                            </div>
                            <div class="job-description">
                                {{-- CSS3, HTML5, Javascript, Bootstrap, Jquery --}}
                                {!! substr("$job->job_description",50) !!}
                            </div>
                            <div class="job-details">
                                <div class="job-payamt">
                                    {{$job->package_offer_from}}
                                    - {{$job->package_offer_to}} LPA
                                </div>
                                <div class="job-open">
                                    {{$job->experience_year_from}}
                                    - {{$job->experience_year_to}} Years
                                </div>
                            </div>
                            <div class="job-details-btn">
                                <a type="button" href="{{ url('job-description/'.base64_encode($job->id))}}"
                                    target="_blank" class="job-detbtn btn-warning btn btn-sm">View Details</a>

                                <button data-toggle="modal" data-target="#modal_registration" type="button"
                                    class="job-appbtn btn-success btn btn-sm">
                                    Apply Now
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {!! $jobs->render() !!}
                </div>
            </div>
        </section>


        @include('frontend.common.modal')

    </main>
    <footer class="container_wrap socket_color" id="socket" role="contentinfo" itemscope="itemscope"
        itemtype="https://schema.org/WPFooter">
        <div class="container" style="padding: 10px 10px;">
            <span class="copyright">
                © Copyright - 7 Eye IT Solutions Pvt. Ltd.
            </span>
            <span class="poweredlogo"><br><span>Powered By </span>
                <a href="https://happiestresume.com" target="_blank" title="Naukri.com"
                    style="position: relative; overflow: hidden;">
                    <br>
                    <img src="{{url('public/front/jobsearch').'/'}}images/logo1.png" style="width: 100px;">
                    <span class="image-overlay overlay-type-extern">
                        <span class="image-overlay-inside"></span>
                    </span>
                </a>
            </span>

        </div>

        <!-- ####### END SOCKET CONTAINER ####### -->
    </footer>



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
        function getDescription(url)
        {
            alert(url);
            window.location.href = url;
        }
    </script>
</body>

</html>