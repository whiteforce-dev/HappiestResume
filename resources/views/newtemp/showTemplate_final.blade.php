<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Resume</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{{ url('assets/template/css/normalize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/template/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/template/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/template/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/template/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/template/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/template/css/style2.css') }}">
    <link rel="stylesheet" href="{{ url('assets/template/responsive.css') }}">
    <script src="{{ url('assets/template/js/modernizr.custom.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* ::-webkit-scrollbar {
      display: none;
    } */
        ::marker {
            font-size: 18px;
        }

        #more {
            display: none;
        }

        @media screen and (min-width: 360px) and (max-width: 560px) {
            .personal_details {
                width: 100%;
            }

            #rex-experience-slider {
                padding-left: 0;
            }

            .timeline-item {
                padding: 16px 0 16px 12px;
            }

            .experience-date {
                padding: 26px;
            }

            .experience .list-description {
                padding: 8%;
            }

            .list-img,
            .list-description {
                padding: 24px;
            }

            .education .list-img {
                text-align: center;
            }

            .education .listing-content {
                margin-bottom: 36px;
            }
        }
    </style>
</head>

<body class="page">

    <div class="lm-animated-bg"></div>

    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="preloader-spinner">
            </div>
        </div>
    </div>
    <!-- /Loading animation -->

    <!-- Scroll To Top Button -->
    <div class="lmpixels-scroll-to-top"><i class="lnr lnr-chevron-up"></i></div>
    <!-- /Scroll To Top Button -->

    <div class="page-scroll">
        <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

            <div id="main" class="site-main">
                <div id="main-content" class="single-page-content">
                    <div id="primary" class="content-area">
                        <div id="" class="page-content site-content single-post" role="main">
                            <!-- Home Page Top Part -->
                            <div class="container card-box">
                                <div class="row" style="justify-content: center; align-items: center;">
                                    <div class="col-sm-4 card-box-img">

                                        @if (isset($user_image))
                                        <img src='{{ asset("{$user_image}") }}' height="30px" width="30px" />
                                        <!-- <img src="{{ $user_image }}" alt="" /> -->
                                        @else
                                        <img src="{{ url('assets/resumeDesign/images/user.png') }}" alt="" />

                                        @endif

                                    </div>
                                    <div class="col-sm-8 card-box-content">
                                        <div class="profile-preword"><span>Hello</span></div>
                                        <div class="card-box-content-name">
                                            <h1><span>I'm </span>{{ $user_login->name }}</h1>
                                        </div>
                                        <div class="card-box-content-designation">
                                            <h4>
                                                {{ $user_pro->current_title }}
                                            </h4>
                                        </div>
                                        <hr>
                                        <div class="row card-content-basic-details">
                                            <div class="col-sm-12 card-content-basic-details-heading">
                                                @if (!empty($user_skill->career_obj))
                                                <p>{{ $user_skill->career_obj }}</p>
                                                @else
                                                <p>I want myself to be an employee of a well repudiated firm where I
                                                    can improvise my skills of professionalism, adaptability and
                                                    communication. My development should impact the development of
                                                    the firm.</p>
                                                @endif

                                                <div class="row">
                                                    <h6>Email:&nbsp;<a href="mailto:{{ $user_login->email }}" {{
                                                            $user_login->email }}
                                                            style="font-size: 14px;"> {{ $user_login->email }}</a>
                                                    </h6>
                                                    <h6>Phone:&nbsp;<a href="tel:{{ $user_login->contact }}" {{
                                                            $user_login->contact }}
                                                            style="font-size: 14px;"> +{{ $user_login->country_code}}-{{
                                                            $user_login->contact }}</a>
                                                    </h6>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-content-basic-details-social">
                                        <ul class="social">
                                            <li><a class="ripple-centered" href="{{ $user_social->fb }}"
                                                    target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="ripple-centered" href="{{ $user_social->twitter }}"
                                                    target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="ripple-centered" href="{{ $user_social->linkedin }}"
                                                    target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Home Page Top Part -->


                            <div id="content" class="page-content site-content single-post" role="main">
                                <div class="row" id="personal_details" #personal_details>
                                    @if (isset($user_edu_X) || isset($user_edu_XII) || isset($user_edu_graduation) ||
                                    isset($user_edu_post))
                                    <div class=" col-xs-12 col-sm-12 mt-4">
                                        <div class="block-title">

                                            <h2><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp; Education
                                            </h2>
                                        </div>


                                        <div id="timeline_1" class="timeline clearfix">
                                            <div class="timeline-item clearfix ">
                                                <div class="col-md-12 education"
                                                    style="margin-left: -16px; padding: 0;">
                                                    <div id="rex-education-slider">

                                                        @foreach ($user_edu_post as $post)
                                                        @if (!empty($post->education_name))
                                                        <div class="listing-content col-md-12"
                                                            style="padding: 0 !important;">
                                                            <div class="col-md-2 list-img" style="background: #F1EFF0;">
                                                                <img src="{!! url('assets/template/img/education/education-img1.jpg') !!}"
                                                                    alt="">
                                                            </div>
                                                            @if (is_numeric($post->education_name))
                                                            @php($education_name = App\Degrees::where('id',
                                                            $post->education_name)->value('degree_name'))
                                                            @else
                                                            @php($education_name = $post->education_name)
                                                            @endif
                                                            <div class="col-md-10 list-description" style="padding:20px;">
                                                                <h6>{{ $post->organization }}</h6>
                                                                <span>{{ $education_name }}</span>
                                                                <p style="margin-top: 6px; margin-bottom: 6px;">
                                                                    Location : {{ $post->location }}</p>
                                                                <p class="">Year of passing : {{ $post->year }}</p>
                                                            </div>
                                                        </div>
                                                        @else
                                                        @endif
                                                        @endforeach

                                                        @foreach ($user_edu_graduation as $post)
                                                        @if (!empty($post->education_name))
                                                        <div class="listing-content col-md-12"
                                                            style="padding: 0 !important;">
                                                            <div class="col-md-2 list-img" style="background: #F1EFF0;">
                                                                <img src="{!! url('assets/template/img/education/education-img2.jpg') !!}"
                                                                    alt="">
                                                            </div>
                                                            @if (is_numeric($post->education_name))
                                                            @php($education_name = App\Degrees::where('id',
                                                            $post->education_name)->value('degree_name'))
                                                            @else
                                                            @php($education_name = $post->education_name)
                                                            @endif
                                                            <div class="col-md-10 list-description"  style="padding:20px;">
                                                                <h6>{{ $post->organization }}</h6>
                                                                <span>{{ $education_name }}</span>
                                                                <p style="margin-top: 6px; margin-bottom: 6px;">
                                                                    Location : {{ $post->location }}</p>
                                                                <p class="">Year of passing : {{ $post->year }}</p>

                                                            </div>
                                                        </div>
                                                        @else
                                                        @endif
                                                        @endforeach


                                                        @foreach ($user_edu_XII as $post)
                                                        @if (!empty($post->organization || $post->education_name))
                                                        <div class="listing-content col-md-12"
                                                            style="padding: 0 !important;">
                                                            <div class="col-md-2 list-img" style="background: #F1EFF0;">
                                                                <img src="{!! url('assets/template/img/education/education-img3.jpg') !!}"
                                                                    alt="">
                                                            </div>
                                                            @if (is_numeric($post->education_name))
                                                            @php($education_name = App\Degrees::where('id',
                                                            $post->education_name)->value('degree_name'))
                                                            @else
                                                            @php($education_name = $post->education_name)
                                                            @endif
                                                            <div class="col-md-10 list-description"  style="padding:20px;">
                                                                <h6>{{ $post->organization }}</h6>
                                                                <span>{{ $education_name }}</span>
                                                                <p style="margin-top: 6px; margin-bottom: 6px;">
                                                                    Location : {{ $post->location }}</p>
                                                                <p class="">Year of passing : {{ $post->year }}</p>

                                                            </div>
                                                        </div>
                                                        @else
                                                        @endif
                                                        @endforeach

                                                        @foreach ($user_edu_X as $post)
                                                        @if (!empty($post->organization || $post->education_name))
                                                        <div class="listing-content col-md-12"
                                                            style="padding: 0 !important;">
                                                            <div class="col-md-2 list-img" style="background: #F1EFF0;">
                                                                <img src="{!! url('assets/template/img/education/education-img3.jpg') !!}"
                                                                    alt="">
                                                            </div>
                                                            @if (is_numeric($post->education_name))
                                                            @php($education_name = App\Degrees::where('id',
                                                            $post->education_name)->value('degree_name'))
                                                            @else
                                                            @php($education_name = $post->education_name)
                                                            @endif
                                                            <div class="col-md-10 list-description"  style="padding:20px;">
                                                                <h6>{{ $post->organization }}</h6>
                                                                <span>{{ $education_name }}</span>
                                                                <p style="margin-top: 6px; margin-bottom: 6px;">
                                                                    Location : {{ $post->location }}</p>
                                                                <p class="">Year of passing : {{ $post->year }}</p>

                                                            </div>
                                                        </div>
                                                        @else
                                                        @endif
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @else

                                    @endif
                                    @if($user_login->experience == 'yes')
                                    @if(isset($user_work))

                                    <div class="col-xs-12 col-sm-12 mt-4" id="exp">

                                        <div class="block-title">
                                            <h2><i class="fa fa-suitcase" aria-hidden="true"></i>&nbsp; Experience</h2>
                                        </div>

                                        <div id="timeline_1" class="timeline clearfix">
                                            <div id="experience" class="active-section timeline-item clearfix">
                                                <div class="experience">
                                                    <div class="row">
                                                        <div id="rex-experience-slider" class="col-md-12">

                                                            @foreach ($user_work as $key => $post)
                                                            @if (!empty($post->company))
                                                            <div class="listing-content">
                                                                <div class="col-md-2 list-img">

                                                                    <div class="experience-date">
                                                                        <h6>{{
                                                                            \Carbon\Carbon::parse($post->start_date)->format('M
                                                                            Y') ?? '' }}
                                                                            - <br>
                                                                            @if($post->end_date == "" &&
                                                                            $post->is_current_working == 1)
                                                                            Present
                                                                            @else
                                                                            {{
                                                                            \Carbon\Carbon::parse($post->end_date)->format('M
                                                                            Y') }}
                                                                            @endif
                                                                        </h6>
                                                                    </div>
                                                                    <span class="angle"></span>
                                                                </div>

                                                                <div class="col-md-10 list-description">
                                                                    <h6>
                                                                        {{ $post->designation }}<span>-
                                                                            {{ $post->company ?? '' }}</span>
                                                                    </h6>
                                                                    <p>
                                                                    <div id="half_{{$key}}" style="color:black !important;">
                                                                        
                                                                            {!!str_limit($post->description,200,'...  ')!!}
                                                                        
                                                                        @if(str_word_count($post->description) >= 25)
                                                                        <a class="" href="javascript:void(0);" style="color: black;"
                                                                            id="myBtn{{$key}}"
                                                                            onclick='viewMore("{{ $key }}");'>&nbsp;&nbsp;Read
                                                                            More</a>
                                                                        @endif
                                                                    </div>

                                                                    <div id="full_{{$key}}" style="display: none; color:black !important;">
                                                                        {!! $post->description !!}
                                                                        @if(isset($post->description))
                                                                        <a class="" href="javascript:void(0);" style="color: black;"
                                                                            id="myBtn{{$key}}"
                                                                            onclick='showLess("{{ $key }}");'>Read
                                                                            Less</a>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            @else
                                                            @endif
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    @else

                                    @endif
                                    @endif


                                </div>

                                <div class="row  mt-4">

                                    <div class=" col-xs-12 col-sm-12">
                                        @if($user_pro->language == '"null"' || $user_pro->language == null ||
                                        $user_pro->language == 'ul')

                                        @else
                                        <div class="block-title">
                                            <h2><i class="fa fa-language" aria-hidden="true"></i>&nbsp; Language</h2>
                                        </div>
                                        <div id="skills_1" class="skills-info skills-first-style row">

                                            @foreach($language as $lang)
                                            @php($a = array("30","50","60","70","80", "100"))
                                            @php($random_keys = rand(0, 3))

                                            <div class="col-sm-6">
                                                <!-- Language 1 -->
                                                <div class="clearfix">
                                                    <h4>{{ ucwords(trim($lang, '"')) }}</h4>
                                                    <div class="skill-value">{{ $a[$random_keys] }}%</div>
                                                </div>

                                                <div id="skill_1" data-value="{{ $a[$random_keys] }}"
                                                    class="skill-container">
                                                    <div class="skill-percentage"></div>
                                                </div>
                                                <!-- /Language 1 -->
                                            </div>
                                            @endforeach

                                        </div>
                                        @endif
                                    </div>


                                    @if($user_achiev->title != '"null"' && $user_achiev->title != 'ul' &&
                                    $user_achiev->title != null && $user_achiev->title != "null" )
                                    <div class=" col-xs-12 col-sm-12">
                                        <div class="block-title">
                                            <h2><i class="fa fa-shield" aria-hidden="true"></i>&nbsp; Achievements
                                            </h2>
                                        </div>

                                        <div id="achievements_1" class="skills-info skills-first-style row">
                                            <ul class="row">
                                                @if($user_achiev->title != '"null"' && $user_achiev->title != 'ul' &&
                                                $user_achiev->title != null && $user_achiev->title != "null" )


                                                @php( $achivement = explode(',',$user_achiev->title))

                                                @foreach( $achivement as $achive)
                                                @php($achiv = trim($achive, '"'))

                                                <li class="col-xs-12 col-sm-12">
                                                    <p>
                                                        <?php echo ucwords(preg_replace('/[^A-Za-z0-9\-]/', "\${1} ", $achiv)); ?>
                                                    </p>
                                                </li>
                                                @endforeach
                                                @endif
                                            </ul>
                                        </div>

                                    </div>
                                    @else

                                    @endif

                                    <div class=" col-xs-12 col-sm-12 ">
                                        @if($user_skill['skills'] == '"null"' || $user_skill['skills'] == null ||
                                        $user_skill['skills'] == 'ul')

                                        @else
                                        <div class="block-title">
                                            <h2><i class="fa fa-trophy" aria-hidden="true"></i>&nbsp; Skills</h2>
                                        </div>


                                        <div id="skills_2" class="skills-info skills-first-style row">
                                            @foreach($skill as $sk)
                                            @php($a = array("50","60","70","80", "100"))
                                            @php($random_keys = rand(0, 3))
                                            <div class="col-sm-6">
                                                <!-- Skill 1 -->
                                                <div class="clearfix">
                                                    @php($sk_trim = trim($sk, '"'))
                                                    <h4> <?php echo ucwords(preg_replace('/[^A-Za-z0-9\-]/', "\${1} ", $sk_trim)); ?></h4>
                                                    <div class="skill-value">{{ $a[$random_keys] }}%</div>
                                                </div>

                                                <div id="skill_1" data-value="{{ $a[$random_keys] }}"
                                                    class="skill-container">
                                                    <div class="skill-percentage"></div>
                                                </div>
                                                <!-- /Skill 1 -->
                                            </div>
                                            @endforeach
                                        </div>
                                        @endif
                                    </div>

                                    <div class=" col-xs-12 col-sm-12 mt-4">
                                        <div class="block-title">
                                            <h2><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp; Personal
                                                Details</h2>
                                        </div>

                                        <div class="row">
                                            <div id="timeline_1" class="timeline clearfix col-xs-12 col-sm-12 row">
                                                @if(!empty($user_pro->father_name))
                                                <div class="timeline-item clearfix personal_details">
                                                    <div class="title-date">
                                                        <h4 class="item-title">Father's Name <span
                                                                class="item-company"></span></h4>
                                                    </div>
                                                    <p>Mr. {{ ucwords($user_pro->father_name) }}</p>
                                                </div>
                                                @endif
                                                @if(!empty($user_pro->age))
                                                <div class="timeline-item clearfix personal_details">
                                                    <div class="title-date">
                                                        <h4 class="item-title">Age<span class="item-company"></span>
                                                        </h4>
                                                    </div>
                                                    <p>{{ $user_pro->age }}<small>&nbsp; years</small></p>
                                                </div>
                                                @endif
                                                @if(!empty($user_pro->gender))
                                                <div class="timeline-item clearfix personal_details">
                                                    <div class="title-date" style>
                                                        <h4 class="item-title">Gender<span class="item-company"></span>
                                                        </h4>
                                                    </div>
                                                    <p>{{ $user_pro->gender }}</p>
                                                </div>
                                                @endif

                                                @if(!empty($user_pro->pref_location))
                                                <div class="timeline-item clearfix personal_details">
                                                    <div class="title-date" style>
                                                        <h4 class="item-title">Preffered Location<span
                                                                class="item-company"></span>
                                                        </h4>
                                                    </div>
                                                    <div class="row">
                                                        <p class="item-period ">{{ ucwords($user_pro->pref_location) }}
                                                        </p>

                                                    </div>
                                                </div>
                                                @endif

                                                @if(!empty($user_pro->user_address))
                                                <div class="timeline-item clearfix personal_details">
                                                    <div class="title-date" style>
                                                        <h4 class="item-title">Address<span class="item-company"></span>
                                                        </h4>
                                                    </div>
                                                    <p>{{ $user_pro->user_address }}</p>
                                                </div>
                                                @endif

                                                @if(!empty($user_pro->total_exp))
                                                <div class="timeline-item clearfix personal_details">
                                                    <div class="title-date" style>
                                                        <h4 class="item-title">Total Experience<span
                                                                class="item-company"> in Year</span>
                                                        </h4>
                                                    </div>
                                                    <p>{{ $user_pro->total_exp }}</p>
                                                </div>
                                                @endif
                                                @if(!empty($user_pro->willing_to_relocate))
                                                <div class="timeline-item clearfix personal_details">
                                                    <div class="title-date" style>
                                                        <h4 class="item-title">Willing to Relocate<span
                                                                class="item-company"></span>
                                                        </h4>
                                                    </div>
                                                    <p>{{ $user_pro->willing_to_relocate }}</p>
                                                </div>
                                                @endif
                                                @if(!empty($user_pro->notice_period))
                                                <div class="timeline-item clearfix personal_details">
                                                    <div class="title-date" style>
                                                        <h4 class="item-title">Notice Period<span class="item-company">
                                                                in Days</span>
                                                        </h4>
                                                    </div>
                                                    <p>{{ $user_pro->notice_period }}</p>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Footer -->
                                <footer class="site-footer clearfix">
                                    <div class="footer-copyrights">
                                        <h2>Thank You!</h2>
                                        <h3>Strive not to be a success, but rather to be of value</h3>
                                        <p>© 2020 All rights reserved. <a href="https://happiestresume.com/"
                                                target="_blank">Happiest
                                                Resume</a> .</p>
                                    </div>
                                </footer>
                                <!-- /Footer -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('assets/template/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ url('assets/template/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/template/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/template/js/jquery.shuffle.min.js') }}"></script>
    <script src="{{ url('assets/template/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
    <script src="{{ url('assets/template/js/jquery.googlemap.js') }}"></script>
    <script src="{{ url('assets/template/js/validator.js') }}"></script>
    <script src="{{ url('assets/template/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

    <script>
        $(document).ready(function () {
            $(".job-description-more").hide();
            $(".show_hide").on("click", function () {
                var txt = $(".job-description-more").is(':visible') ? 'Read More' : 'Read Less';
                $(".show_hide").text(txt);
                $(this).prev('.job-description-more').slideToggle(200);
            });


        });

        function viewMore(key){
            $('#half_'+key).hide();
            $('#full_'+key).show();
        }
        function showLess(key){
            $('#half_'+key).show();
            $('#full_'+key).hide();
        }

    </script>
</body>

</html>