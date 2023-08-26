<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happiest Resume</title>
    <link rel="stylesheet" href="{{ url('jobs_page') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('jobs_page') }}/assets/css/responsive.css">

    <!-- Libs CSS -->
    <link href="{{ url('jobs_page') }}/assets/fonts/feather/feather.css" rel="stylesheet">
    <link href="{{ url('jobs_page') }}/assets/libs/%40fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ url('jobs_page') }}/assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ url('jobs_page') }}/assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="{{ url('jobs_page') }}/assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('jobs_page') }}/assets/css/theme.min.css">
    <link rel="stylesheet" href="{{ url('jobs_page') }}/assets/css/custom.css">
    <link rel="stylesheet" href="{{ url('jobs_page') }}/assets/css/custom1.css">

    {{-- this frontend.chatbot_script chatbot script --}}
    {{-- <style>
        .cards__item {
            height: 380px;
            width: 300px;
        }

        .cardn {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #000;
            border-radius: 25px;
        }

        .cardn::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            z-index: 20;
            width: 50%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.1);
            pointer-events: none;
        }

        .cardn:nth-child(1) {
            background: linear-gradient(90deg, rgb(248, 231, 28) 0%, rgb(241, 232, 124) 100%, rgb(255, 255, 255) 100%, rgb(255, 255, 255) 100%, rgb(255, 255, 255) 100%, rgb(255, 255, 255) 100%);
        }

        .card__frame {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-radius: 20px;
        }

        .card__picture {
            margin-bottom: 12px;
            filter: invert(1);
        }

        .card__picture img {
            display: block;
            max-width: 100%;
            height: auto;
        }

        .card__title {
            margin: 0;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .card__overlay {
            position: absolute;
            bottom: 20px;
            right: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 52px;
            height: 52px;
            background-color: #fff;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            transition: 0.5s;
            cursor: pointer;
        }

        .card__overlay::before {
            content: "Read";
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 500;
            letter-spacing: 0.02em;
        }

        .card__overlay:hover,
        .card__overlay:focus {
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            box-shadow: none;
            border-radius: 25px;
        }

        .card__overlay:hover::before,
        .card__overlay:focus::before {
            content: none;
            background: linear-gradient(90deg, rgba(248, 231, 28, 0.17) 0%, rgba(255, 255, 255, 1) 100%);
        }

        .cardn:nth-child(1) .card__overlay {
            background: #F7F1B9;
            border: 1px solid #343434;
        }

        .card__content {
            z-index: 1;
            line-height: 1.4;
            opacity: 0;
            visibility: hidden;
            box-sizing: border-box;
            pointer-events: none;
            transition: 0s;
        }

        .card__overlay:hover~.card__content {
            opacity: 1;
            visibility: visible;
            transition: 0.2s 0.3s;
        }

        .card__content h2 {
            margin: 0;
            margin-bottom: 16px;
        }

        .flip-box {
            background-color: transparent;
            width: 175px;
            height: 50px;
            perspective: 1000px;
        }

        .flip-box-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .flip-box:hover .flip-box-inner {
            transform: rotateX(180deg);
        }

        .flip-box-front,
        .flip-box-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-box-front {
            /* background-color: red; */
            /* background-color: red */
            color: #fff;
        }

        .flip-box-back {
            background-color: #fff;
            color: white;
            transform: rotateX(180deg);
            justify-content: space-around;
            display: flex;
            flex-direction: row;
            padding-top: 8px
        }

        .job_position {
            text-align: center;
            font-weight: bold;
            word-wrap: break-word
        }

        .experience {
            padding-top: 15px;
            padding-bottom: 7px;
            font-weight: bold
        }

        .job_title {
            word-wrap: break-word;
            padding: 5px;
            font-size: 14px;
            font-weight: bold
        }

        .job_desc {
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
            width: 96%;
            margin: 8px 4%;
            min-height: 44px;
        }

        .posted {
            word-wrap: break-word;
            font-size: 13px;
            font-weight: bold;
        }
    </style>
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
        img {
            object-fit: cover;
            height: 48px;
        }

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

        ::-webkit-scrollbar {
            display: none;

            .top-container {
                background-color: #f1f1f1;
                padding: 30px;
                text-align: center;
            }

            .header {
                padding: 10px 16px;
                background: #555;
                color: #f1f1f1;
            }

            .content {
                padding: 16px;
            }

            .sticky {
                position: fixed;
                top: 0;
                width: 100%;
            }

            .sticky+.content {
                padding-top: 102px;
            }
        }
    </style> --}}

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Page</title>
    <link rel="stylesheet" href="{{ url('css/job.css') }}">
    <link rel="stylesheet" href="{{ url('css/jobstyle.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,900&family=Rubik:wght@300;400;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('css/jobportal.css') }}">
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
{{-- <style>
    .background-image::after {
    position: absolute;
    content: "";
    inset:0;
    background: #00000042;
}
</style> --}}
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<body >

    <main>
        <section>




            <div class="background-image"
                style='width:100%; background-image: url("{{ url('../assets/img/' . $country->image) }}")'>
                <div class="">
                    <div class="">
                    </div>
                </div>
            </div>

            </div>
            {{-- @endforeach --}}

            {{-- <div class="text-center text-bold text" style="background-color:#9268BC;font-family:Times New Roman">
                <b>
                    <div id="cursor"></div>
                    <span id="text" style="font-size:200%;color:#FFFFFF;"></span>
                </b>
            </div>
            <div></div> --}}

            <div id="cursor"></div>
            <h1 id="text" style="border-bottom: 4px solid rgb(255, 153, 0);
            color: #212529;
            font-weight: 600;
            font-size: 2.1rem; width:22%;margin:40px auto; text-align:center;">
                </h1>
{{-- <h1> J<i class="fas fa-search" style="color: rgb(255, 153, 0); font-size: 2rem;" aria-hidden="true"></i>bs in Canada</h1> --}}

                {{-- <div class="container_sm"> --}}
                <div class="container-card" style="margin-top: 60px;">
                    {{-- {{ $jobsint->links() }} --}}
                    @if (count($jobsint))
                        @foreach ($jobsint as $job)
                        {{-- @dump($job->company->hh_img ?? '') --}}
                            <div class="box-card">
                                <div class="top-box">
                                    <div class="left-top">
                                        @php
                                            $str_path = str_replace('public/', ' ', $job->company->image ?? '' );
                                            // dd($str_path)
                                        @endphp 
                                       @if (file_exists($job->company->hh_img ?? ''))
                                        
                                            <img class="img-fluid" src="{{ $job->company->hh_img ?? ''}}" alt="image">
                                        @elseif(isset($job->company->image ) && file_exists($job->company->image))
                                       
                                            <img  class="img-fluid"
                                                src="{{ url($str_path) }}"alt="image">
                                        @else
                                     
                                        
                                            <img class="img-fluid" src="{{ url('images/company/white_force.png') }}"
                                                alt="image">
                                        @endif
                                        <div class="card-name-first">
                                            <p class="">{{ substr($job->company->name ?? '', 0, 14) }}

                                            </p>
                                            <span>
                                                @php
                                                    $job_location = substr($job->job_location, 0, 8);
                                                @endphp
                                                <i class="fa-solid fa-location-dot"></i>
                                                {{ isset($job->job_location) && $job->job_location != ' ' ? ucwords($job_location) : 'Work From Home' }}
                                            </span>
                                        </div>
                                    </div>
                                    {{-- {{ $job->id }} --}}
                                </div>
                                <div class="mid-box">
                                    {{-- @php
                                        $job_position = substr($job->position, 0, 25);
                                    @endphp --}}
                                    {{-- <h2> {{$job->id}}</h2> --}}
                                    <h2> {{ isset($job->position) ? ucwords($job->position) : 'Not Specified' }}</h2>
                                    @php
                                        $start = new \Carbon\Carbon("$job->created_at");
                                        $end = new \Carbon\Carbon();
                                    @endphp

                                    <div class="right-top">
                                        <span><i class="fa-solid fa-briefcase"></i>
                                            {{ $job->experience_year_from }}-{{ $job->experience_year_to }}
                                            Yrs</span>
                                        <p>
                                            <i class="fa-solid fa-location-dot"></i>
                                            {{ $start->diff($end)->format('%d') }}
                                            Day(s)
                                            Ago
                                        </p>
                                    </div>
                                </div>
                                <div class="w-full">
                                    @php 
                                    $job_description = strip_tags($job->job_description);
                                    
                                    
                                    @endphp
                                    <p>
                                       {{ substr($job_description, 0, 75) }} ... <a style="text-decoration: none;"
                                            href={{ url('job-description', [$job->id]) }}><span class="trigger"
                                                style=" 
                                color: #1d1d22;
                                font-weight: 600;
                                font-size: 0.9rem;
                                margin: 0;
                                padding: 0;
                                box-sizing: border-box;
                            ">Read
                                                more


                                            </span></a>
                                    </p>
                                </div>


                                <div class="applied">
                                    {{-- <div class="amount">
                              <span class="price"> Upto @if ($job->salary_type == 'USD')
                                ${{ $job->package_offer_from }} - <br>
                                 $
                                {{ $job->package_offer_to }} USD
                            @else
                                ₹{{ $job->package_offer_from }} - <br>
                                ₹
                                {{ $job->package_offer_to }} 
                            @endif</span><span class="muted"></span>
                            </div>  --}}
                                    <div class="app-bttn" style="">
                                        <a href="{{ url('job-description', [$job->id]) }}">
                                            <button>Apply Now</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                </div>
                {{-- <div class="row" style="display:flex;flex-direction:row">
                        <div class="container_sm" style="padding:0px">
                            <div class="row" style="display:flex;flex-direction:row">
                                @if (count($jobsint))
                                    {{ $jobsint->links() }}
                                    @foreach ($jobsint as $job)
                                        <div class="col-sm-4">
                                            <div class="cards">
                                                <div class="cardn cards__item">
                                                    <div class="card__frame">
                                                        <div>
                                                            <img class="img-fluid" style="height:40px;"
                                                                src="{{ $job->company->hh_img ?? 'https://happiestresume.com/public/images/company/stepstone1.svg' }}" alt="image">
                                                        </div>

                                                        <div>
                                                            <a href="">
                                                                <button class="btn btn-primary"
                                                                    style="margin-bottom:10px;margin-top:30px;
                                                                    text-transform: uppercase;padding:10px;
                                                  width:178px;background-color: #6343d8;
                                                  border-color: #5e3fcb;color: #fff;">
                                                                    CLICK TO APPLY !
                                                                </button>
                                                            </a>
                                                        </div>

                                                        <div class="flip-box">
                                                            <div class="flip-box-inner">
                                                                <div class="flip-box-front">

                                                                    <button class="btn btn-primary"
                                                                    style="margin-bottom:10px;margin-top:5px;
                                                                    text-transform: uppercase;padding:10px;
                                                  width:170px;background-color:red;
                                                  border-color:red;color: #fff;">
                                                                    REFER A FRIEND !
                                                                </button>


                                                                </div>
                                                                <div class="flip-box-back">
                                                                    <a href="https://www.facebook.com/sharer/sharer.php?u"
                                                                        style="color:#000">
                                                                        <i class="fab fa-facebook"
                                                                            style="font-size:24px;padding:5px"></i>
                                                                    </a>
                                                                    <a href="https://twitter.com/intent/tweet?text=my"
                                                                        style="color:#000">
                                                                        <i class="fab fa-twitter"
                                                                            style="font-size:24px;padding:5px"></i>
                                                                    </a>
                                                                    <a href="https://wa.me/?text=" style="color:#000">
                                                                        <i class="fab fa-whatsapp"
                                                                            style="font-size:24px;padding:5px"></i>
                                                                    </a>
                                                                    <a href="http://www.linkedin.com/shareArticle?mini=true"
                                                                        style="color:#000">
                                                                        <i class="fab fa-linkedin"
                                                                            style="font-size:24px;padding:5px"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card__overlay"></div>
                                                    <div class="card__content"
                                                        style="width:240px;word-wrap:break-word">
                                                        <div class="job_position">
                                                            {{ $job->position }}
                                                        </div>
                                                        <hr style="color:black">
                                                        <div class="experience">
                                                            <div style="display: flex;flex-direction: row">
                                                                <span><i class="fas fa-briefcase"
                                                                        style="font-size:21px;"></i> | 0 to 5
                                                                    years</span>
                                                            </div>

                                                            

                                                            <div style="display: flex;flex-direction: row">
                                                                <span><i class="far fa-money-bill-alt"
                                                                        style="font-size:17px;"></i> | 
                                                                        @if ($job->country == 'USD')
                                                                        ${{ $job->package_offer_from }} To $
                                                                        {{ $job->package_offer_to }} USD
                                                                    @elseif($job->salary_type == 'Pounds')
                                                                        £{{ $job->package_offer_from }} TO £
                                                                        {{ $job->package_offer_to }} Pounds
                                                                    @else
                                                                        N/A
                                                                    @endif
                                                                    </span>
                                                            </div>

                                                            <div style="display: flex;flex-direction: row;">
                                                                <span><i class="fas fa-map-marker-alt"
                                                                        style="font-size:22px;"></i>
                                                                    <span>|{{ $job->country }} </span>
                                                            </div>
                                                        </div>
                                                        <div class="job_title">
                                                            Job Description</div>
                                                        <div class="job_desc">
                                                          {{ strip_tags($job->job_description) }}
                                                        </div>
                                                        <hr style=color:black>
                                                        @php
                                                        $start = new \Carbon\Carbon("$job->created_at");
                                                        $end = new \Carbon\Carbon();
                                                    @endphp
                                                        <div
                                                        style="font-size: 16px;margin-top:3px;margin-left:20px;font-weight: bold;font-family: 'Muli', sans-serif;">
                                                        <u>
                                                            <br><br>
                                                             Posted on -
                                                            {{ $start->diff($end)->format('%d') }}
                                                            days
                                                            ago</u>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                            </div>
                        </div>
                    </div> --}}

                {{-- </div> --}}
        @else
            <iframe height="800px" width="100%" src="{{ $country->url }}">
            </iframe>

            @endif

            <hr>

            </div>
            </div>


            </div>



            </div>




        </section>

    </main>

    <script src="https://kit.fontawesome.com/66f2518709.js" crossorigin="anonymous"></script>
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
        // List of sentences
        var _CONTENT = [
            "{{ $country->countrywise }}"
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
        // function Delete() {
        //     // Get substring with 1 characater deleted
        //     var text = _CONTENT[_PART].substring(0, _PART_INDEX - 1);
        //     _ELEMENT.innerHTML = text;
        //     _PART_INDEX--;

        //     // If sentence has been deleted then start to display the next sentence
        //     if (text === '') {
        //         clearInterval(_INTERVAL_VAL);

        //         // If current sentence was last then display the first one, else move to the next
        //         if (_PART == (_CONTENT.length - 1))
        //             _PART = 0;
        //         else
        //             _PART++;

        //         _PART_INDEX = 0;

        //         // Start to display the next sentence after some time
        //         setTimeout(function() {
        //             _CURSOR.style.display = 'none';
        //             _INTERVAL_VAL = setInterval(Type, 140);
        //         }, 200);
        //     }
        // }

        // Start the typing effect on load
        _INTERVAL_VAL = setInterval(Type, 100);
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>




</body>

</html>
