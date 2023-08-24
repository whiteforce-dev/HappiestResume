<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happiest Resume</title>
    <link rel="stylesheet" href="{{ url('jobs_page /assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ url('jobs_page/assets/css/responsive.css') }}">

    <!-- Libs CSS -->
    <link href="{{ url('jobs_page/assets/fonts/feather/feather.css') }}" rel="stylesheet">
    <link href="{{ url('jobs_page/assets/libs/%40fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ url('jobs_page/assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ url('jobs_page/assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ url('jobs_page/assets/libs/tiny-slider/dist/tiny-slider.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('jobs_page/assets/css/theme.min.css') }}">

    {{-- this frontend.chatbot_script chatbot script --}}

    <style>
        .content {
            display: none
        }

        .content:first-of-type {
            display: block
        }

        a {
            display: inline-block;
            margin-right: 10px;
            padding: 5px 0;
        }

    </style>
    <style>
        #container {
            display: inline-block;
            margin: 20px;
            border: 1px solid black;
            overflow: hidden;
            border: 0;
            box-shadow: 0 1px 3px rgba(3, 0, 71, .09)
                /* clip the excess when child gets bigger than parent */
        }

        .card {
            border: 0;
            box-shadow: 0 1px 3px rgba(3, 0, 71, .09)
        }

        #container img {
            display: block;
            transition: transform .4s;
            /* smoother zoom */
        }

        #container:hover img {
            transform: scale(1.3);
            transform-origin: 50% 50%;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0; // remove the gap so it doesn't close
        }

    </style>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<body style="width:100% !important">

    <main>
        <section>
            <div class="" style="background: #F8E71C;">
                <div class="container">
                    <!-- Hero Section -->
                    <div class="row align-items-center g-0">
                        <div class="col-xl-7 col-lg-8 col-md-12">
                            <div class="py-5 py-lg-0">

                                <div id="cursor"></div>
                                <h1 class="text-black  fw-bold">Are you Looking for a <span id="text"
                                        style="color:red;"></span> Job?
                                </h1>
                                <p class="text-black mb-4 lead">
                                    We have more than 20,000+ Openings for Both Experienced & Freshers.
                                </p>
                                <div>
                                    <div class="col-sm-12">
                                        <a class="btn btn-white tab-link" onclick="changeText('fresher');"
                                            style="margin-right: 10px; " data-div="div-one">Fresher's Jobs
                                        </a>
                                        <a class="btn btn-outline-dark tab-link" onclick="changeText('female');"
                                            style="margin-right: 10px;" data-div="div-two">Female
                                            Jobs
                                        </a>


                                    </div>
                                    <div class="col-sm-8 offset-2" style="margin-top: 15px">
                                        <a class="btn btn-white tab-link" onclick="changeText('national');"
                                            style="margin-right: 10px;" data-div="div-three" id=job_category>National
                                            Jobs</a>
                                        <a class="btn btn-outline-dark tab-link" onclick="changeText('international');"
                                            data-div="div-four">International
                                            Jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-xl-5 col-lg-5 col-md-12 text-lg-end text-center div-one content"
                            style="display:block">
                            <img src="{{ url('assets/img/22.png') }}" height="320px" alt="" />
                        </div>
                        <div class=" col-xl-5 col-lg-5 col-md-12 text-lg-end text-center div-two content"
                            style="display:none">
                            <img src="{{ url('assets/img/7.png') }}" height="320px" alt="" />
                        </div>
                        <div class=" col-xl-5 col-lg-5 col-md-12 text-lg-end text-center div-four content"
                            style="display:none">
                            <img src="{{ url('assets/img/inter1.png') }}" width="600px" height="320px" alt="" />
                        </div>
                        <div class=" col-xl-5 col-lg-5 col-md-12 text-lg-end text-center div-three content"
                            style="display:none">
                            <img src="{{ url('assets/img/nati.png') }}" height="320px" width="500px" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="container"></div> --}}
            <div class="bg-white py-4 shadow-sm">
                <div class="container">
                    <form>
                        <div class="row align-items-center g-0">
                            <!-- Features -->
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                                <div class="d-flex align-items-center" id="location_list">
                                    <span
                                        class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4 ">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                    <div class="ms-3">
                                        <input class="banner-sertxt form-control"
                                            style="border: none;width: 250px;height: 48px;" type="text"
                                            placeholder="Search By Location.." name="job_location" id="location"
                                            value="{{ $location ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <!-- Features -->
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-4">
                                <div class="d-flex align-items-center">
                                    <span
                                        class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4 ">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                    <div class="ms-3">
                                        <input class="banner-sertxt form-control"
                                            style="border: none;width: 250px;height: 48px;" type="text"
                                            placeholder="Skills, Designations etc" name="designation"
                                            id="designation_company_sk" value="{{ $designation ?? '' }}">
                                        <input type="hidden" name="job_category" value="fresher" id="job-category">
                                    </div>
                                </div>
                            </div>
                            <!-- Features -->
                            <div class="col-xl-4 col-lg-4 col-md-12">
                                <div class="d-flex align-items-center">
                                    <span
                                        class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4 ">
                                        <i class="fa fa-search" aria-hidden="true"></i></span>
                                    <div class="ms-3">
                                        <div id="position_list">

                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" id="search"
                                            class="btn-bannersearch btn btn-outline-dark col-md-12"
                                            style="width:268px;">Find Jobs</button>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <p></p>


            {{-- ___________________________Fresher______________________ --}}

            <div class="div-one content" id="job_category"
                style="{{ $category == 'fresher' ? 'display:block;' : 'display:none;' }}">
                <div class="row jobs-cards">
                    <div class="col-sm-12">
                        <br>
                        <h1 style="text-align:center">Fresher</h1>
                    </div>
                    @foreach ($jobs as $job)
                        {{-- @if ($job->$nationality = 1 && ($experience = 2)) --}}
                        {{-- @elseif($job->experience_year_from == '0') --}}

                        <div class="col-sm-3 jobdescriptionscren" style="margin-bottom: 45px;">
                            <a href="{{ url('job-description', [$job->id]) }}" style="color: black">
                                <div class="card" style="min-height: 450px; max-height: 450px; overflow-x: scroll; overflow: hidden;  background: linear-gradient(
                                90deg, rgba(248, 231, 28, 0.17) 0%, rgba(255, 255, 255, 1) 100%);   ">

                                    <div class="image main-job">
                                        <div align="center">
                                            <h5 style="font-weight: 700 !important;">
                                                {{ isset($job->position) ? ucwords($job->position) : '' }}</h5>
                                        </div>

                                        <hr>
                                        <div align="left" class="points">
                                            <span class="mdi mdi-briefcase mymdi"
                                                style="font-size: 25px; font-weight: 700;"></span><span
                                                style="font-size: 16px; font-weight: 700"> |
                                                {{ $job->experience_year_from }}-{{ $job->experience_year_to }}
                                                Yrs
                                            </span>
                                        </div>

                                        <div align="left" class="points">
                                            <span class="mdi mdi-cash-100 mymdi"
                                                style="font-size: 25px; font-weight: 700;"></span><span
                                                style="font-size: 16px; font-weight: 700"> |
                                                @if ($job->salary_type == 'USD')
                                                    ${{ $job->package_offer_from }} To $
                                                    {{ $job->package_offer_to }} USD
                                                @else
                                                    ₹{{ $job->package_offer_from }} TO ₹
                                                    {{ $job->package_offer_to }} INR
                                                @endif
                                        </div>
                                        <div align="left" class="points">
                                            <span class="mdi mdi-map-marker mymdi"
                                                style="font-size: 25px; font-weight: 700;"></span><span
                                                style="font-size: 16px; font-weight: 700"> |
                                                {{ isset($job->job_location) && $job->job_location != ' ' ? ucwords($job->job_location) : 'Work From Home' }}</span>
                                        </div>
                                        <p></p>
                                        <div align="left" class="points">
                                            <b style="font-weight: 800 !important;">Job Description : </b>
                                            
                                            <span class="job-description">
                                                {{ $job->job_description }}
                                            </span>
                                            
                                            </>
                                        </div>

                                        @php
                                            $start = new \Carbon\Carbon("$job->created_at");
                                            $end = new \Carbon\Carbon();
                                        @endphp



                                        <div class="job-posted">Posted On -
                                            <b style="color:black;">{{ $start->diff($end)->format('%d') }}</b> Day(s)
                                            Ago
                                        </div>

                                    </div>
                                    <div class="details" style="padding: 15px 15px;text-align:center">
                                        {{-- @dd($job->company); --}}

                                        @if (file_exists($job->company->hh_img))
                                            <img style="height:50px;" class="img-fluid"
                                                src="{{ $job->company->hh_img }}" alt="image">

                                        @elseif(isset($job->company->image) && file_exists($job->company->image))

                                            <img style="height:50px;" class="img-fluid"
                                                src="{{ url($job->company->image) }}" alt="image">
                                        @else
                                            <img style="height:50px;" class="img-fluid"
                                                src="{{ url('public/images/company/white_force.png') }}" alt="image">
                                        @endif


                                        <p></p <h5 class="msh"
                                            style="font-weight: 700 !important; color:#000">
                                        {{-- {{ ucwords($job->company->name) }}</h5> --}}
                                        <p>Job id: {{ $job->id ?? 0 }}</p>
                                        <hr>



                                        <div align="center" class="points" style="margin-top: -26px">
                                            <small style="font-weight: 700 !important; font-size: 12px;">For More
                                                Jobs Contact Our
                                                Managers</small><br>
                                            <span class="msh"
                                                style="font-weight: 700 !important; color:#000">{!! isset($job->hr_name) ? ucwords($job->hr_name) : '-' !!}</span>
                                        </div>
                                        <div align="center" class="points">
                                            <span class="msh"
                                                style="font-weight: 700 !important; color:#000">{!! isset($job->hr_email) ? $job->hr_email : '-' !!}</span>
                                        </div>
                                        <div align="center" class="points">
                                            <span class="msh"
                                                style="font-weight: 700 !important; color:#000">{!! isset($job->hr_contact) ? $job->hr_contact : '-' !!}</span>
                                        </div>


                                        <p></p>

                                        <link rel="stylesheet"
                                            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                                        <hr>
                                        <div align="center" style="margin-top:0px">
                                            <a href="{{ url('job-description', [$job->id]) }}"
                                                class="col-md-12"><button
                                                    class="btn btn-primary btn-block btn-sm col-md-12">Click To
                                                    Apply</button></a>
                                        </div>
                                        <p></p>

                                        @php
                                            $page_url = url('job-description', [$job->id]);
                                            
                                        @endphp



                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                                <div class="flip-card-front">
                                                    <button
                                                        class="btn btn-danger btn-block btn-sm waves-effect waves-light col-md-12"
                                                        type="button">Refer to friend</button>
                                                </div>
                                                <div class="flip-card-back">


                                                    <div class="icon-bar row"
                                                        style="justify-content:center;margin-top:18px;">
                                                        <a href="
                                                        https://www.facebook.com/sharer/sharer.php?u={{ $page_url }}&title=Happiest+Jobs"
                                                            class="facebook"><i class="fa fa-facebook"></i>
                                                        </a>
                                                        <a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{ $page_url }}"
                                                            class="twitter"><i class="fa fa-twitter"></i></a>
                                                        <a href="https://wa.me/?text={{ $page_url }}"
                                                            class="google"><i class="fa fa-whatsapp"></i></a>
                                                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ $page_url }}&amp;title=my share text&amp;summary=dit is de linkedin summary"
                                                            class="linkedin"><i class="fa fa-linkedin"></i></a>
                                                        {{-- <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                    </div>
                                </div>
                            </a>

                        </div>
                    @endforeach
                </div>

            </div>
            {{-- ___________________________Female______________________ --}}
            <div class="div-two content" id="job_category"
                style="{{ $category == 'female' ? 'display:block;' : 'display:none;' }}">
                <div class="row jobs-cards">
                    <div class="col-sm-12">
                        <br>
                        <h1 style="text-align:center">Female</h1>
                    </div>
                    @foreach ($jobs1 as $job)
                        {{-- @dd($job); --}}
                        {{-- @if ($job->$nationality = 1 && ($experience = 2)) --}}
                        {{-- @elseif($job->experience_year_from == '0') --}}
                        <div class="col-sm-3 jobdescriptionscren" style="margin-bottom: 45px;">
                            <a href="{{ url('job-description', [$job->id]) }}" style="color: black">
                                <div class="card" style="min-height: 450px; max-height: 450px; overflow-x: scroll; overflow: hidden;  background: linear-gradient(
                                90deg, rgba(248, 231, 28, 0.17) 0%, rgba(255, 255, 255, 1) 100%);   ">

                                    <div class="image main-job">
                                        <div align="center">
                                            <h5 style="font-weight: 700 !important;">
                                                {{ isset($job->position) ? ucwords($job->position) : '' }}</h5>
                                        </div>

                                        <hr>
                                        <div align="left" class="points">
                                            <span class="mdi mdi-briefcase mymdi"
                                                style="font-size: 25px; font-weight: 700;"></span><span
                                                style="font-size: 16px; font-weight: 700"> |
                                                {{ $job->experience_year_from }}-{{ $job->experience_year_to }}
                                                Yrs
                                            </span>
                                        </div>

                                        <div align="left" class="points">
                                            <span class="mdi mdi-cash-100 mymdi"
                                                style="font-size: 25px; font-weight: 700;"></span><span
                                                style="font-size: 16px; font-weight: 700"> |
                                                @if ($job->salary_type == 'USD')
                                                    ${{ $job->package_offer_from }} To $
                                                    {{ $job->package_offer_to }} USD
                                                @else
                                                    ₹{{ $job->package_offer_from }} TO ₹
                                                    {{ $job->package_offer_to }} INR
                                                @endif
                                        </div>
                                        <div align="left" class="points">
                                            <span class="mdi mdi-map-marker mymdi"
                                                style="font-size: 25px; font-weight: 700;"></span><span
                                                style="font-size: 16px; font-weight: 700"> |
                                                {{ isset($job->job_location) && $job->job_location != ' ' ? ucwords($job->job_location) : 'Work From Home' }}</span>
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



                                        <div class="job-posted">Posted On -
                                            <b style="color:black;">{{ $start->diff($end)->format('%d') }}</b> Day(s)
                                            Ago
                                        </div>

                                    </div>
                                    <div class="details" style="padding: 15px 15px;text-align:center">

                                        @if (file_exists($job->company->hh_img))
                                            <img style="height:50px;" class="img-fluid"
                                                src="{{ $job->company->hh_img }}" alt="image">

                                        @elseif(isset($job->company->image) && file_exists($job->company->image))

                                            <img style="height:50px;" class="img-fluid"
                                                src="{{ url($job->company->image) }}" alt="image">
                                        @else
                                            <img style="height:50px;" class="img-fluid"
                                                src="{{ url('public/images/company/white_force.png') }}" alt="image">
                                        @endif


                                        <p></p <h5 class="msh"
                                            style="font-weight: 700 !important; color:#000">
                                        {{ ucwords($job->company->name) }}</h5>
                                        <p>Job id: {{ $job->id ?? 0 }}</p>
                                        <hr>



                                        <div align="center" class="points" style="margin-top: -26px">
                                            <small style="font-weight: 700 !important; font-size: 12px;">For More
                                                Jobs Contact Our
                                                Managers</small><br>
                                            <span class="msh"
                                                style="font-weight: 700 !important; color:#000">{!! isset($job->hr_name) ? ucwords($job->hr_name) : '-' !!}</span>
                                        </div>
                                        <div align="center" class="points">
                                            <span class="msh"
                                                style="font-weight: 700 !important; color:#000">{!! isset($job->hr_email) ? $job->hr_email : '-' !!}</span>
                                        </div>
                                        <div align="center" class="points">
                                            <span class="msh"
                                                style="font-weight: 700 !important; color:#000">{!! isset($job->hr_contact) ? $job->hr_contact : '-' !!}</span>
                                        </div>


                                        <p></p>

                                        <link rel="stylesheet"
                                            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                                        <hr>
                                        <div align="center" style="margin-top:0px">
                                            <a href="{{ url('job-description', [$job->id]) }}"
                                                class="col-md-12"><button
                                                    class="btn btn-primary btn-block btn-sm col-md-12">Click To
                                                    Apply</button></a>
                                        </div>
                                        <p></p>

                                        @php
                                            $page_url = url('job-description', [$job->id]);
                                            
                                        @endphp



                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                                <div class="flip-card-front">
                                                    <button
                                                        class="btn btn-danger btn-block btn-sm waves-effect waves-light col-md-12"
                                                        type="button">Refer to friend</button>
                                                </div>
                                                <div class="flip-card-back">


                                                    <div class="icon-bar row"
                                                        style="justify-content:center;margin-top:18px;">
                                                        <a href="
                                                        https://www.facebook.com/sharer/sharer.php?u={{ $page_url }}&title=Happiest+Jobs"
                                                            class="facebook"><i class="fa fa-facebook"></i>
                                                        </a>
                                                        <a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{ $page_url }}"
                                                            class="twitter"><i class="fa fa-twitter"></i></a>
                                                        <a href="https://wa.me/?text={{ $page_url }}"
                                                            class="google"><i class="fa fa-whatsapp"></i></a>
                                                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ $page_url }}&amp;title=my share text&amp;summary=dit is de linkedin summary"
                                                            class="linkedin"><i class="fa fa-linkedin"></i></a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                    </div>
                                </div>
                            </a>

                        </div>


                        {{-- @endif --}}
                    @endforeach
                </div>

            </div>

            {{-- ___________________________National______________________ --}}
            <div class="div-three content" id="job_category"
                style="{{ $category == 'national' ? 'display:block;' : 'display:none;' }}">
                <div class="row jobs-cards">
                    <div class="col-sm-12">
                        <br>
                        <h1 style="text-align:center">National</h1>
                    </div>
                    @foreach ($jobsNat as $job)
                        {{-- @if ($job->$nationality = 1 && ($experience = 2)) --}}
                        {{-- @elseif($job->experience_year_from == '0') --}}
                        <div class="col-sm-3 jobdescriptionscren" style="margin-bottom: 45px;">
                            <a href="{{ url('job-description', [$job->id]) }}" style="color: black">
                                <div class="card" style="min-height: 450px; max-height: 450px; overflow-x: scroll; overflow: hidden;  background: linear-gradient(
                            90deg, rgba(248, 231, 28, 0.17) 0%, rgba(255, 255, 255, 1) 100%);   ">

                                    <div class="image main-job">
                                        <div align="center">
                                            <h5 style="font-weight: 700 !important;">
                                                {{ isset($job->position) ? ucwords($job->position) : '' }}</h5>
                                        </div>

                                        <hr>
                                        <div align="left" class="points">
                                            <span class="mdi mdi-briefcase mymdi"
                                                style="font-size: 25px; font-weight: 700;"></span><span
                                                style="font-size: 16px; font-weight: 700"> |
                                                {{ $job->experience_year_from }}-{{ $job->experience_year_to }}
                                                Yrs
                                            </span>
                                        </div>

                                        <div align="left" class="points">
                                            <span class="mdi mdi-cash-100 mymdi"
                                                style="font-size: 25px; font-weight: 700;"></span><span
                                                style="font-size: 16px; font-weight: 700"> |
                                                @if ($job->salary_type == 'USD')
                                                    ${{ $job->package_offer_from }} To $
                                                    {{ $job->package_offer_to }} USD
                                                @else
                                                    ₹{{ $job->package_offer_from }} TO ₹
                                                    {{ $job->package_offer_to }} INR
                                                @endif
                                        </div>
                                        <div align="left" class="points">
                                            <span class="mdi mdi-map-marker mymdi"
                                                style="font-size: 25px; font-weight: 700;"></span><span
                                                style="font-size: 16px; font-weight: 700"> |
                                                {{ isset($job->job_location) && $job->job_location != ' ' ? ucwords($job->job_location) : 'Work From Home' }}</span>
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



                                        <div class="job-posted">Posted On -
                                            <b style="color:black;">{{ $start->diff($end)->format('%d') }}</b> Day(s)
                                            Ago
                                        </div>

                                    </div>
                                    <div class="details" style="padding: 15px 15px;text-align:center">

                                        @if (file_exists($job->company->hh_img))
                                            <img style="height:50px;" class="img-fluid"
                                                src="{{ $job->company->hh_img }}" alt="image">

                                        @elseif(isset($job->company->image) && file_exists($job->company->image))

                                            <img style="height:50px;" class="img-fluid"
                                                src="{{ url($job->company->image) }}" alt="image">
                                        @else
                                            <img style="height:50px;" class="img-fluid"
                                                src="{{ url('public/images/company/white_force.png') }}" alt="image">
                                        @endif


                                        <p></p <h5 class="msh"
                                            style="font-weight: 700 !important; color:#000">
                                        {{ ucwords($job->company->name) }}</h5>
                                        <p>Job id: {{ $job->id ?? 0 }}</p>
                                        <hr>


                                        <div align="center" class="points" style="margin-top: -26px">
                                            <small style="font-weight: 700 !important; font-size: 12px;">For More
                                                Jobs Contact Our
                                                Managers</small>
                                            <br>
                                            <span class="msh"
                                                style="font-weight: 700 !important; color:#000">{!! isset($job->hr_name) ? ucwords($job->hr_name) : '-' !!}</span>
                                        </div>
                                        <div align="center" class="points">
                                            <span class="msh"
                                                style="font-weight: 700 !important; color:#000">{!! isset($job->hr_email) ? $job->hr_email : '-' !!}</span>
                                        </div>
                                        <div align="center" class="points">
                                            <span class="msh"
                                                style="font-weight: 700 !important; color:#000">{!! isset($job->hr_contact) ? $job->hr_contact : '-' !!}</span>
                                        </div>


                                        <p></p>

                                        <link rel="stylesheet"
                                            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <style>
                                            / body {
                                                margin: 0;
                                                height: 2000px;
                                            }

                                            /

                                        </style>
                                        <hr>
                                        <div align="center" style="margin-top:0px">
                                            <a href="{{ url('job-description', [$job->id]) }}"
                                                class="col-md-12"><button
                                                    class="btn btn-primary btn-block btn-sm col-md-12">Click To
                                                    Apply</button></a>
                                        </div>
                                        <p></p>

                                        @php
                                            $page_url = url('job-description', [$job->id]);
                                            
                                        @endphp



                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                                <div class="flip-card-front">
                                                    <button
                                                        class="btn btn-danger btn-block btn-sm waves-effect waves-light col-md-12"
                                                        type="button">Refer to friend</button>
                                                </div>
                                                <div class="flip-card-back">


                                                    <div class="icon-bar row"
                                                        style="justify-content:center;margin-top:18px;">
                                                        <a href="
                                                        https://www.facebook.com/sharer/sharer.php?u={{ $page_url }}&title=Happiest+Jobs"
                                                            class="facebook"><i class="fa fa-facebook"></i>
                                                        </a>
                                                        <a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{ $page_url }}"
                                                            class="twitter"><i class="fa fa-twitter"></i></a>
                                                        <a href="https://wa.me/?text={{ $page_url }}"
                                                            class="google"><i class="fa fa-whatsapp"></i></a>
                                                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ $page_url }}&amp;title=my share text&amp;summary=dit is de linkedin summary"
                                                            class="linkedin"><i class="fa fa-linkedin"></i></a>
                                                        {{-- <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                    </div>
                                </div>
                            </a>

                        </div>


                        {{-- @endif --}}
                    @endforeach
                </div>

            </div>

            {{-- ___________________________InterNational______________________ --}}

            <div class="div-four content" id="job_category"
                style="{{ $category == 'international' ? 'display:block;' : 'display:none;' }}">

                <div class="company-section">

                    <div class="pt-lg-8 pb-lg-3 pt-8 pb-6">
                        <div class="" style="    width: 91%;
                        margin-left: 61px;">
                            <div class="row mb-4">
                                <div class="col">
                                    <h1 class="mb-0" style="text-align: center;font-family: ui-rounded" <i
                                        class="fas fa-font-awesome-flag "></i>Country wise Jobs</h1>

                                </div>

                            </div>


                            <div class="col-md-3"
                            style="display:flex; justify-content: center;width:400px; margin:0 auto">

                            <select name="country" id="dynamic_select" class="form-control"
                                style="display: block" onchange="showSearchBox();">
                                @foreach ($countries as $country)
                                
                                    <option value="{{ $country->countryname }}">{{ $country->countrywise }}
                                    </option>
                                @endforeach
                            </select>
                            <p></p>
                            <span
                                class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4 ">
                                <i class="fa fa-search" aria-hidden="true"></i></span>
                        </div>


                            <div class="position-relative">
                                <ul class="controls " id="sliderFirstControls">
                                    <li class="prev">
                                        <i class="fe fe-chevron-left"></i>
                                    </li>
                                    <li class="next">
                                        <i class="fe fe-chevron-right"></i>
                                    </li>
                                </ul>
                                <div class="sliderFirst" id="jobCountry">
                                    @foreach ($countries as $country)
                                        <div class="my_{{ $country->id }}">
                                            <!-- Card -->
                                            <div class="card  mb-4 card-hover" id="container"
                                                style="background-color:#e5e5e5">
                                                <a href="{{ url('country-jobs', [$country->countryname ?? '0']) }}"
                                                    class="card-img-top"><img id="image"
                                                        src="{{ url('assets/img' . '/' . $country->image) }}"
                                                        height="180px" alt="" class="rounded-top-md card-img-top"></a>
                                                <!-- Card Body -->
                                                <div class="card-body" style="text-align:center">
                                                    <h6 class="mb-2 text-truncate-line-2 "><a href="{{ url('country-jobs', [$country->countryname ?? '0']) }}"
                                                            class="text-inherit"><b
                                                                style="text-align:center;font-size: 20px;font-family: ui-rounded">{{ $country->countrywise }}</b>
                                                        </a></h6>
                                                    <!-- List -->

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>


                    </div>

                    {{-- IMP --}}
                    <div class="row jobs-cards">
                        <div class="col-sm-12">
                            <p>

                            </p>

                        </div>
                        @foreach ($jobsint as $job)
                            {{-- @if ($job->$nationality = 1 && ($experience = 2)) --}}
                            {{-- @elseif($job->experience_year_from == '0') --}}
                            <div class="col-sm-3 jobdescriptionscren" style="margin-bottom: 45px;">
                                <a href="{{ url('job-description', [$job->id]) }}" style="color: black">
                                    <div class="card" style="min-height: 450px; max-height: 450px; overflow-x: scroll; overflow: hidden;  background: linear-gradient(
                            90deg, rgba(248, 231, 28, 0.17) 0%, rgba(255, 255, 255, 1) 100%);   ">

                                        <div class="image main-job">
                                            <div align="center">
                                                <h5 style="font-weight: 700 !important;">
                                                    {{ isset($job->position) ? ucwords($job->position) : '' }}</h5>
                                            </div>

                                            <hr>
                                            <div align="left" class="points">
                                                <span class="mdi mdi-briefcase mymdi"
                                                    style="font-size: 25px; font-weight: 700;"></span><span
                                                    style="font-size: 16px; font-weight: 700"> |
                                                    {{ $job->experience_year_from }}-{{ $job->experience_year_to }}
                                                    Yrs
                                                </span>
                                            </div>

                                            <div align="left" class="points">
                                                <span class="mdi mdi-cash-100 mymdi"
                                                    style="font-size: 25px; font-weight: 700;"></span><span
                                                    style="font-size: 16px; font-weight: 700"> |
                                                    @if ($job->salary_type == 'USD')
                                                        ${{ $job->package_offer_from }} To $
                                                        {{ $job->package_offer_to }} USD
                                                    @else
                                                        ₹{{ $job->package_offer_from }} TO ₹
                                                        {{ $job->package_offer_to }} INR
                                                    @endif
                                            </div>
                                            <div align="left" class="points">
                                                <span class="mdi mdi-map-marker mymdi"
                                                    style="font-size: 25px; font-weight: 700;"></span><span
                                                    style="font-size: 16px; font-weight: 700"> |
                                                    {{ isset($job->job_location) && $job->job_location != ' ' ? ucwords($job->job_location) : 'Work From Home' }}</span>
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



                                            <div class="job-posted">Posted On -
                                                <b style="color:black;">{{ $start->diff($end)->format('%d') }}</b>
                                                Day(s)
                                                Ago
                                            </div>

                                        </div>
                                        <div class="details" style="padding: 15px 15px;text-align:center">

                                            @if (file_exists($job->company->hh_img))
                                                <img class="img-fluid" style="height:50px;"
                                                    src="{{ $job->company->hh_img }}" alt="image">

                                            @elseif(isset($job->company->image) && file_exists($job->company->image))

                                                <img style="height:50px;" class="img-fluid"
                                                    src="{{ url($job->company->image) }}" alt="image">
                                            @else
                                                <img style="height:50px;" class="img-fluid"
                                                    src="{{ url('images/company/white_force.png') }}"
                                                    alt="image">
                                            @endif


                                            <p></p <h5 class="msh"
                                                style="font-weight: 700 !important; color:#000">
                                            {{ ucwords($job->company->name) }}</h5>
                                            <p>Job id: {{ $job->id ?? 0 }}</p>
                                            <hr>


                                            <div align="center" class="points" style="margin-top: 0%">
                                                <small style="font-weight: 700 !important; font-size: 12px;">For More
                                                    Jobs Contact Our
                                                    Managers</small>
                                                <br>
                                                <span class="msh"
                                                    style="font-weight: 700 !important; color:#000">{!! isset($job->hr_name) ? ucwords($job->hr_name) : '-' !!}</span>
                                            </div>
                                            <div align="center" class="points">
                                                <span class="msh"
                                                    style="font-weight: 700 !important; color:#000">{!! isset($job->hr_email) ? $job->hr_email : '-' !!}</span>
                                            </div>
                                            <div align="center" class="points">
                                                <span class="msh"
                                                    style="font-weight: 700 !important; color:#000">{!! isset($job->hr_contact) ? $job->hr_contact : '-' !!}</span>
                                            </div>


                                            <p></p>

                                            <link rel="stylesheet"
                                                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                            <style>
                                                / body {
                                                    margin: 0;
                                                    height: 2000px;
                                                }

                                                /

                                            </style>
                                            <hr>
                                            <div align="center" style="margin-top: -26px;">
                                                <a href="{{ url('job-description', [$job->id]) }}"
                                                    class="col-md-12"><button
                                                        class="btn btn-primary btn-block btn-sm col-md-12">Click To
                                                        Apply</button></a>
                                            </div>
                                            <p></p>

                                            @php
                                                $page_url = url('job-description', [$job->id]);
                                                
                                            @endphp



                                            <div class="flip-card">
                                                <div class="flip-card-inner">
                                                    <div class="flip-card-front">
                                                        <button
                                                            class="btn btn-danger btn-block btn-sm waves-effect waves-light col-md-12"
                                                            type="button">Refer to friend</button>
                                                    </div>
                                                    <div class="flip-card-back">


                                                        <div class="icon-bar row"
                                                            style="justify-content:center;margin-top:18px;">
                                                            <a href="
                                                        https://www.facebook.com/sharer/sharer.php?u={{ $page_url }}&title=Happiest+Jobs"
                                                                class="facebook"><i class="fa fa-facebook"></i>
                                                            </a>
                                                            <a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{ $page_url }}"
                                                                class="twitter"><i
                                                                    class="fa fa-twitter"></i></a>
                                                            <a href="https://wa.me/?text={{ $page_url }}"
                                                                class="google"><i
                                                                    class="fa fa-whatsapp"></i></a>
                                                            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ $page_url }}&amp;title=my share text&amp;summary=dit is de linkedin summary"
                                                                class="linkedin"><i
                                                                    class="fa fa-linkedin"></i></a>
                                                            {{-- <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                        </div>
                                    </div>
                                </a>

                            </div>


                            {{-- @endif --}}
                        @endforeach


                    </div>







        </section>

    </main>


    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="{{ url('jobs_page') }}/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/odometer/odometer.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/flatpickr/dist/flatpickr.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/quill/dist/quill.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/file-upload-with-preview/dist/file-upload-with-preview.min.js">
    </script>
    <script src="{{ url('jobs_page') }}/assets/libs/dragula/dist/dragula.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/jQuery.print/jQuery.print.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/prismjs/prism.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/prismjs/components/prism-scss.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/%40yaireo/tagify/dist/tagify.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/typed.js/lib/typed.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/jsvectormap/dist/maps/world.js"></script>

    <script src="{{ url('jobs_page') }}/assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
    <script src="{{ url('jobs_page') }}/assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js">
    </script>

    <!-- Theme JS -->
    <script src="{{ url('jobs_page') }}/assets/js/theme.min.js"></script>
    <script>
        // List of sentences
        var _CONTENT = [
            "Fresher's",
            "Female",
            "National",
            "International"
        ];

        // Current sentence being processed
        var _PART = 0;

        // Character number of the current sentence being processed 
        var _PART_INDEX = 0;

        // Holds the handle returned from setInterval
        var _INTERVAL_VAL;

        // Element that holds the text
        var _ELEMENT = document.querySelector("#text");

        // Cursor element 
        var _CURSOR = document.querySelector("#cursor");

        // Implements typing effect
        function Type() {
            // Get substring with 1 characater added
            var text = _CONTENT[_PART].substring(0, _PART_INDEX + 1);
            _ELEMENT.innerHTML = text;
            _PART_INDEX++;

            // If full sentence has been displayed then start to delete the sentence after some time
            if (text === _CONTENT[_PART]) {
                // Hide the cursor
                _CURSOR.style.display = 'none';

                clearInterval(_INTERVAL_VAL);
                setTimeout(function() {
                    _INTERVAL_VAL = setInterval(Delete, 150);
                }, 1000);
            }
        }

        // Implements deleting effect
        function Delete() {
            // Get substring with 1 characater deleted
            var text = _CONTENT[_PART].substring(0, _PART_INDEX - 1);
            _ELEMENT.innerHTML = text;
            _PART_INDEX--;

            // If sentence has been deleted then start to display the next sentence
            if (text === 'text') {
                clearInterval(_INTERVAL_VAL);

                // If current sentence was last then display the first one, else move to the next
                if (_PART == (_CONTENT.length - 1))
                    _PART = 0;
                else
                    _PART++;

                _PART_INDEX = 0;

                // Start to display the next sentence after some time
                setTimeout(function() {
                    _CURSOR.style.display = 'none';
                    _INTERVAL_VAL = setInterval(Type, 140);
                }, 200);
            }
        }

        // Start the typing effect on load
        _INTERVAL_VAL = setInterval(Type, 100);
    </script>


    <script>
        $('.tab-link').click(function() {
            var contClass = $(this).data('div');
            $('.content').hide().filter('.' + contClass).show()
        })
    </script>

    {{-- Word typing script --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
    <script>
        $(document).ready(function() {

            $('#location').tokenfield({
                autocomplete: {
                    source: function(request, response) {
                        jQuery.get('{{ url('getlocationAutoJob') }}', {
                            str: request.term
                        }, function(data) {
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
        $(document).ready(function() {

            $('#designation_company_sk').tokenfield({
                autocomplete: {
                    source: function(request, response) {
                        jQuery.get('{{ url('getDesignationAutoJob') }}', {
                            str: request.term
                        }, function(data) {
                            data = JSON.parse(data);
                            response(data);
                        });
                    },
                    delay: 100
                }
            });



        });


        function changeText(value) {
            $('#job-category').val(value)
        }
    </script>
    <script>
        < script >
            $(function() {
                $('select[name=country]').change(function() {

                    var url = '{{ url('country') }}' + $(this).val() + '/states/';

                    $.get(url, function(data) {
                        var select = $('form select[name= state]');

                        select.empty();

                        $.each(data, function(key, value) {
                            select.append('<option value=' + value.id + '>' + value.name +
                                '</option>');
                        });
                    });
                });
            });
    </script>

    </script>
    <script>
        $(function() {
            $('select[name=country]').change(function() {

                var url = '{{ url('country') }}' + $(this).val() + '/states/';

                $.get(url, function(data) {
                    var select = $('form select[name= state]');

                    select.empty();

                    $.each(data, function(key, value) {
                        select.append('<option value=' + value.id + '>' + value.name +
                            '</option>');
                    });
                });
            });
        });

        function showSearchBox() {
            var value = $('#dynamic_select').val();
            window.location = "https://happiestresume.com/country-jobs/" + value;
        }
    </script>






</body>

</html>
