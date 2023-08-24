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
    </style>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<body>

    <main>
        <section>
            {{-- @foreach ($countries as $country) --}}



            <div class="background-image" style='background: url("{{ url('public/assets/img/'. $country->image) }}")'>
                <div class="">
                    <div class="">
                    </div>
                </div>
            </div>

            </div>
            {{-- @endforeach --}}

            <div class="text-center text-bold text" style="background-color:#9268BC;font-family:Times New Roman">
                <b>
                    <div id="cursor"></div>

                    <span id="text" style="font-size:200%;color:#FFFFFF;"></span>
                </b>
            </div>

            <div class="row" style="padding:30px">
                <div class="col-sm-12">

                </div>
                @if(count($jobsint))
                @foreach ($jobsint as $job)
                <div class="col-sm-3 jobdescriptionscren" style="margin-bottom: 45px;">
                    <a href="https://happiestresume.com/job-description/3842" style="color: black"></a>
                    <div class="card" style="overflow-x: scroll; overflow: hidden;height:320px">
                        <a href="https://happiestresume.com/job-description/3842" style="color: black">

                            <div class="image main-job" style="background:#fff">
                                <div align="left">
                                    <h5 style="font-weight: 700 !important;text-align:center;font-size:18px"> {{
                                        $job->position }}</h5>
                                </div>
                                <hr>
                                <div align="left" class="points" style="margin:10px">
                                    <span class="mdi mdi-briefcase mymdi suitcase"></span>
                                    <span class="years1" style="font-size:20px">|- N/A</span>
                                </div>

                                <div align="left" class="points" style="margin:10px">
                                    <span class="mdi mdi-cash-100 mymdi dollar"></span>
                                    <span class="number" style="font-size:20px"> | {{ $job->package_offer_from }} -{{
                                        $job->package_offer_to }}
                                        Negotiable
                                    </span>
                                </div>
                                <div align="left" class="points" style="margin:10px">
                                    <span class="mdi mdi-map-marker mymdi loc-res"></span>
                                    <span class="text1" style="font-size:20px">|- {{ $job->country }}</span>
                                </div>
                                <p></p>

                                @php
                                $start = new \Carbon\Carbon("$job->created_at");
                                $end = new \Carbon\Carbon();
                                @endphp


                                <div class="job-posted" style="margin:30px">Posted On - <b
                                        style="color:black;font-size:10px">{{ $start->diff($end)->format('%d') }}</b>
                                    Day(s) Ago
                                </div>
                            </div>
                        </a>
                        <div class="details" style="padding: 20px 20px;text-align:center">
                            <a href="https://happiestresume.com/job-description/3842" style="color: black">
                                <img width="100" class="img-fluid"
                                    src="https://happiestresume.com/public/images/company/onrole/2768.png" alt="image">
                                <p></p>
                                <span style="font-size:17px;font-weight:bold">{{ strtoupper($job->form_job) }} </span>

                                <p></p>
                                <link rel="stylesheet"
                                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                            </a>
                            <div style="margin-top:0px">
                                <a href="https://happiestresume.com/job-description/3842" style="color: black"></a>
                                <a href="https://happiestresume.com/job-description/3842">
                                    <button class="btn btn-primary btn-block btn-sm waves-effect waves-light">
                                        Click
                                        To Apply</button></a>
                            </div>
                            <p></p>

                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <button class="btn btn-danger btn-block btn-sm waves-effect waves-light"
                                            type="button">Refer to friend
                                        </button>
                                    </div>
                                    <div class="flip-card-back">
                                        <div class="icon-bar row" style="justify-content:center;margin-top:18px;">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://happiestresume.com/job-description/3842&amp;title=Happiest+Jobs"
                                                class="facebook" style="font-size: 16px;">
                                                <i class="fa fa-facebook" style="margin: -6px !important;"></i>
                                            </a>
                                            <a href="https://twitter.com/intent/tweet?text=my share text&amp;url=https://happiestresume.com/job-description/3842"
                                                class="twitter" style="font-size: 16px;"><i class="fa fa-twitter"
                                                    style="margin: -6px !important;"></i>
                                            </a>
                                            <a href="https://wa.me/?text=https://happiestresume.com/job-description/3842"
                                                class="google" style="font-size: 16px;">
                                                <i class="fa fa-whatsapp" style="margin: -6px !important;"></i></a>
                                            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://happiestresume.com/job-description/3842&amp;title=my share text&amp;summary=dit is de linkedin summary"
                                                class="linkedin" style="font-size: 16px;"><i class="fa fa-linkedin"
                                                    style="margin: -6px !important;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                @endforeach

                @if ($jobsint->count())
                {{ $jobsint->links() }}
                @endif

            </div>

            @else
            <iframe height="800px" width="800px" src="{{ $country->url }}">
            </iframe>

            @endif

            <hr>

            </div>
            </div>


            </div>



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
            "{{ $country-> countrywise }}"
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
            if (text === '') {
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





</body>

</html>