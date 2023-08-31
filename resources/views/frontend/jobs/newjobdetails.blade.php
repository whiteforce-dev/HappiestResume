<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apply Form</title>
    <link rel="stylesheet" href="{{ url('css/apply.css') }}" />
    <link rel="stylesheet" href="{{ url('asset/css/theme.min.css') }}" />
    <!-- <link rel="stylesheet" href="portal.css"> -->
    <!-- <link rel="stylesheet" href="jobportal.css"> -->
    <link rel="stylesheet" href="{{ url('css/applyresponsive.css') }}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500&family=Heebo:wght@400;500&family=Inter:wght@400;500&family=Mukta:wght@400;500&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Roboto+Condensed:ital@1&display=swap"
        rel="stylesheet" />


    <style>
        .modalContainer.show .main-loader.submitModal {
            right: 0;
        }

        .modalContainer .main-loader.submitModal .application {
            position: sticky;
            top: 0;
            background-color: white;
        }

        .modalContainer .main-loader.submitModal {
            position: fixed;
            top: 0;
            right: -150%;
            background: white;
            margin: 0;
            width: 750px;
            max-width: 90vw;
            height: 100vh;
            overflow-y: auto;
            z-index: 56;
            transition: all 0.5s ease-in-out;
        }

        .modalContainer.show .overlay {
            display: block;
        }

        .modalContainer .overlay {
            display: none;
            position: fixed;
            inset: 0;
            background-color: #00000075;
            z-index: 55;
        }

        div#navbarNav.active-header ul li a {
            color: black;
        }

        div#navbarNav.active-header ul li.active a {
            color: orange;
        }

        .nav-link {
            font-weight: 600;
            color: #fffefd;
        }

        .fixed-top {
            background: transparent;
            height: 65px;

        }

        .fixed-top:has(#navbarNav.active-header) {
            box-shadow: 0 0 2px 2px #b9c2d7;
        }

        .back-image {
            /* url("{{ url('assets/job-img/1.jpg') }}"); */
            /* background: url(./home-image/hiring.webp); */
            background: url("{{ url('assets/home-image/1.jpg') }}") no-repeat top center;
            background-blend-mode: darken;
            background-size: cover;
            /* background-size: contain; */
            /* resize: both; */
            /* opacity: 0.9; */
            height: 410px;
            width: 100%;
            margin-top: -10px;
            display: flex;
            border-bottom-left-radius: 30px;
            border-bottom-right-radius: 30px;
            align-items: center;
            justify-content: center;
            /* background-color: rgba(3, 38, 32, 0.7) !important; */
        }

        #top-nav {
            transition: all 600ms ease;
        }

        .black-bg {
            background-color: white;
        }

        .first-header {
            color: black
        }
    </style>
</head>

<body style="font-family: 'Plus Jakarta Sans', sans-serif">

    <nav>
        <header id="top-nav" class="navbar navbar-expand-lg fixed-top py-4" data-scroll-header="">
            <div class="container p-0">
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

                <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
                    <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem;">
                        <!-- Menu items-->
                        <li class="nav-item">
                            <a class="nav-link  first-black" href=" #home" role="button" aria-expanded="false">Home
                            </a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link first-black" href="http://127.0.0.1:8000/exclusive-jobs" role="button"
                                aria-expanded="false">Jobs
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link first-black" href=" #about" role="button" aria-expanded="false">About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link first-black" href=" #templates" role="button"
                                aria-expanded="false">Templates
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link first-black" href="http://127.0.0.1:8000/blog" role="button"
                                aria-expanded="false">Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link first-black" href=" #contact" role="button"
                                aria-expanded="false">Contact
                            </a>
                        </li>
                    </ul>

                    <div>
                        <a class="btn btn-primary btn-sm ms-2" href="{{ url('exclusive-jobs') }}">
                        Back
                        </a>
                    </div>
                </div>
            </div>
        </header>

    </nav>


    <section class="apply">
        <div class="back-image">
            <div class="absolute inset-0 bg-emerald-900/90"></div>
            <div class="form-heading">
                <!-- <h1>Back - End Developer</h1> -->
                <!-- <p>Client Name - </p> -->
            </div>
            <div class="custom-shape-divider-bottom-1687513252">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path d="M0,0V7.23C0,65.52,268.63,112.77,600,112.77S1200,65.52,1200,7.23V0Z" class="shape-fill">
                    </path>
                </svg>
            </div>
        </div>
    </section>

    <section class="form">
        <div class="sub-form">
            <div class="information">
                <div class="job-info">
                    <h1>Job Information</h1>
                </div>
                <div class="employee">
                    <ul>
                        <li>
                            <i class="fa-solid fa-user"></i>
                            <div class="para">
                                <p>Employee Type:</p>
                                <span>{{ $job->employment_type ?? 'Full Time' }}</span>
                            </div>
                        </li>

                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <div class="para">
                                <p>Location:</p>
                                <span>{{ isset($job->job_location) && $job->job_location != ' ' ? ucwords($job->job_location) : 'Work From Home' }}</span>
                            </div>
                        </li>

                        <li>
                            <i class="fa-solid fa-address-card"></i>
                            <div>
                                <p>Job Position:</p>
                                <span>{{ isset($job->position) ? ucwords($job->position) : '' }}</span>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-suitcase"></i>
                            <div class="para">
                                <p>Experience</p>
                                <span>{{ $job->experience_year_from }}-{{ $job->experience_year_to }}
                                    Yrs</span>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-graduation-cap"></i>
                            <div class="para">
                                <p>Qualifications:</p>
                                <span>{{ $job->education_required }}</span>
                            </div>
                        </li>
                        <li>
                            <i class="fa-solid fa-indian-rupee-sign"></i>
                            <div class="para">
                                <p>Salary:</p>
                                <span>
                                    @if ($job->salary_type == 'USD')
                                        ${{ $job->package_offer_from }} - <br> $
                                        {{ $job->package_offer_to }} USD
                                    @else
                                        ₹{{ $job->package_offer_from }} - <br> ₹
                                        {{ $job->package_offer_to }}
                                    @endif
                                </span><span class="muted">/ Month</span>
                            </div>
                        </li>
                        @php
                            $start = new \Carbon\Carbon("$job->created_at");
                            $end = new \Carbon\Carbon();
                            $jobcreated = \Carbon\Carbon::parse($job->created_at)->format('d-m-Y');
                        @endphp
                        <li>
                            <i class="fa-regular fa-clock"></i>
                            <div class="para">
                                <p>Date posted:</p>
                                <span>{{ $jobcreated }}</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="description">
                <div class="position-name">
                    <!-- <div class="com-logo">
                        <div class="background-logo">
                            <img src="./home-image/sushma-group.png" alt="" style="filter: hue-rotate(400deg);">
                        </div>
                    </div> -->
                    <div class="com-name">
                        <h1> <span>{{ isset($job->position) ? ucwords($job->position) : '' }}</span></h1>
                        <div class="com-location">
                            <p style="margin-right: 15px">
                                <i class="fa-solid fa-building"
                                    style="margin-right: 5px; color: rgb(79, 144, 241)"></i>
                                {{ $job->company->name ?? 'Not Specified' }}
                            </p>
                            <p>
                                <i class="fa-solid fa-location-dot"
                                    style="margin-right: 5px; color: rgb(79, 144, 241)"></i>
                                <span>{{ isset($job->job_location) && $job->job_location != ' ' ? ucwords($job->job_location) : 'Work From Home' }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="long-para">
                    <h1>Job Description:</h1>
                    <div class="first-para">
                        <p>
                            {!! $job->job_description !!}
                        </p>

                    </div>
                </div>
                @if ($job->functional_area)
                    <div class="long-para">
                        <h1>Responsibilities and Duties:</h1>
                        <div class="first-para">
                            <p>
                                {{ $job->role ?? '' }}
                            </p>
                            <p>
                                {{ $job->functional_area ?? '' }}
                            </p>

                        </div>
                    </div>
                @endif
                @if ($job->skills_required || $job->functional_area)
                    <div class="long-para">
                        <h1>Required Experience, Skills and Qualifications:</h1>
                        <div class="first-para">
                            <p>
                                {{ $job->skills_required }}
                            </p>
                            <p class="para-line">
                                {{ $job->functional_area }}
                            </p>
                @endif
                {{-- <p class="para-line">
                            {{$job->functional_area}}
                        </p> --}}
                {{-- <p class="para-line">
                            <i class="fa-solid fa-right-long"></i> good understanding of SQL
                            and Relational Databases, specifically Microsoft SQL Server.
                        </p> --}}
                {{-- <p class="para-line">
                            <i class="fa-solid fa-right-long"></i> Experience designing,
                            developing and creating RESTful web services and APIs
                        </p>
                        <p class="para-line">
                            <i class="fa-solid fa-right-long"></i> Basic know how of Agile
                            process and practices
                        </p>
                        <p class="para-line">
                            <i class="fa-solid fa-right-long"></i> Good understanding of
                            object-oriented programming.
                        </p>
                        <p class="para-line">
                            <i class="fa-solid fa-right-long"></i> Good understanding of
                            concurrent programming.
                        </p>
                        <p class="para-line">
                            <i class="fa-solid fa-right-long"></i> Sound knowledge of
                            application architecture and design.
                        </p>
                        <p class="para-line">
                            <i class="fa-solid fa-right-long"></i> Excellent problem solving
                            and analytical skills
                        </p> --}}
           
                        <div class="apply-btn">
           
                            <a href="javascript:void(0)"><button onclick="redirectToLogin(`/cv/jobs`)" class="btn-one"> Apply Now</button></a>
                            <button>Apply Later</button>
                        </div>
                    </div>
        </div>
       
        </div>
        </div>
    </section>
    <script>
        function redirectToLogin(url) {
            localStorage.setItem("jobId", {{ $job->id }});
            location.href = url
        }
    </script>

    <div class="modalContainer">
        <div class="overlay"></div>
        <div class="main-loader submitModal">
            <div class="loader-line application">
                <div class="head-loader">
                    <h1>Application Developer</h1>
                    <p>Jabalpur, Madhya Pradesh</p>
                </div>
            </div>

            <div class="name-loader">
                <div class="name">
                    <label for="f-name">First Name</label>
                    <input type="text" name="f-name" id="f-name" />
                </div>
                <div class="name">
                    <label for="S-name">Last Name</label>
                    <input type="text" name="S-name" id="f-name" />
                </div>
            </div>
            <div class="name-loader">
                <div class="name">
                    <label for="e-mail">Email Address</label>
                    <input type="email" name="e-mail" id="f-name" />
                </div>
                <div class="name">
                    <label for="n-number">Phone</label>
                    <input type="number" name="" id="n-number" />
                </div>
            </div>
            <div class="headline-loader">
                <label for="text">Headline</label>
                <input type="text" name="headline" maxlength="64" class="touched" id="text" />
                <div class="gh-widget-tip">
                    <p>
                        <strong>Tip: </strong>Short description that describes what you
                        do, e.g. Graphic Designer.
                    </p>
                </div>
            </div>
            <!-- <div class="gh-form-box">
                <label for="cover_letter">Cover Letter</label>
                <textarea name="cover_letter" class="ng-valid-letter"></textarea>
            </div> -->
            <div class="resume-upload" style="margin-top: -0px">
                <label for="resume">CV / Resume</label>
                <input id="attach" type="file" style="display: none"
                    accept=".pdf,.doc,.docx,.rtf,.jpg,.jpeg" />
                <label for="attach" class="gh-widget-upload">
                    <i class="fa-solid fa-upload"></i>
                    Attach CV/Resume</label>
                <div class="gh-widget-tip">
                    <p _ngcontent-rbq-c153="">
                        <strong>Tip: </strong>Allowed file types; pdf, doc, docx, rtf,
                        jpg, jpeg. No larger than 10mb.
                    </p>
                </div>
            </div>
            <div class="submit-btn">
                <button>Submit</button>
                <button class="sub-mit" id="form-cancel">Cancel</button>
            </div>
        </div>
    </div>
    <script>
        // let modal = {
        //     show: flase,
        // }

        let applyBtn = document.querySelector("#applyBtn");
        let modalContainer = document.querySelector(".modalContainer");
        let overlay = document.querySelector(".overlay");

        applyBtn.onclick = overlay.onclick = () => {
            modalContainer.classList.toggle("show");
        };

        let formcancel = document.getElementById("form-cancel");
        formcancel.onclick = overlay.onclick = () => {
            modalContainer.classList.remove("show");
        };
    </script>
    <script src="./jobportal.js"></script>
    <script src="https://kit.fontawesome.com/66f2518709.js" crossorigin="anonymous"></script>

    <script>
        window.addEventListener(`scroll`, function() {
            let nav = document.getElementById("top-nav")
            if (window.scrollY > 5)
                nav.classList.add("black-bg")

            else
                nav.classList.remove("black-bg");
        })
    </script>
    <script>
        window.addEventListener(`scroll`, function() {
            let master = document.querySelector("#navbarNav")
            if (window.scrollY > 5)
                master.classList.add("active-header")

            else
                master.classList.remove("active-header");
        })
    </script>

</body>

</html>
