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
           



            <div class="background-image"
                style=' background-image: url("{{ url('public/assets/img/' . $country->image) }}")'>
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
            <div></div>



            <div class="row" style="">

                <div class="container_sm">

                    <div class="row" style="display:flex;flex-direction:row">
                        <div class="container_sm" style="padding:0px">
                            <div class="row" style="display:flex;flex-direction:row">
                                @if (count($jobsint))
                                {{$jobsint->links()}}
                                @foreach ($jobsint as $job)
                                <div class="col-md-4"">
                                    <ul class="cards">
                                        <li class="card cards__item">
                                            <div class="card__frame">
                                                <div>
                                                    <div class="logo" style="text-align: center;">
                                                        <img class="img-fluid" style="height:40px;"
                                                        src="{{ $job->company->hh_img ?? '' }}" alt="image">
                                                    </div>
                                                </div>
                                                <div style="margin-top: 20px;
                                                width:308px;">
                                                    <div
                                                        style="font-size:16px;font-weight: bold;font-family: var(--bs-body-font-family);">
                                                       {{ $job->position }}
                                                    </div>
                                                    <br>
                                                    <div style="margin-bottom:9px;font-size: 16px;font-weight: 700;">   
                                                        @if ($job->salary_type == 'USD')
                                                        ${{ $job->package_offer_from }} To $
                                                        {{ $job->package_offer_to }} USD
                                                       
                                                    @elseif($job->salary_type == 'Pounds')
                                                  
                                                    £{{ $job->package_offer_from }} TO £
                                                        {{ $job->package_offer_to }} Pounds
                                                        
                                                     
                                                    @endif
                                              
                                                        </div>
                                                </div>
            
                                                <div style="text-align: center;margin-bottom:10px;margin-top:30px;">
                                                    <a href="{{url('job-description',[$job->id])}}">
                                                        <button class="btn btn-primary"
                                                            style="text-transform: uppercase;padding:10px;width:178px">
                                                            CLICK TO APPLY !</button>
                                                    </a>
                                                </div>
            
                                                <div class="flip-card">
                                                    <div class="flip-card-inner">
                                                        <div class="flip-card-front">
                                                            Refer A Friend
                                                        </div>
                                                        <div class="flip-card-back"
                                                            style="padding:10px;display: flex;flex-direction: row;justify-content: space-between;">
                                                            <a href="https://www.facebook.com/sharer/sharer.php?u"
                                                                style="color:#000">
                                                                <i class="fab fa-facebook" style="font-size:24px"></i>
                                                            </a>
                                                            <a href="https://twitter.com/intent/tweet?text=my" style="color:#000">
                                                                <i class="fab fa-twitter" style="font-size:24px"></i>
                                                            </a>
                                                            <a href="https://wa.me/?text=" style="color:#000">
                                                                <i class="fab fa-whatsapp" style="font-size:24px"></i>
                                                            </a>
                                                            <a href="http://www.linkedin.com/shareArticle?mini=true"
                                                                style="color:#000">
                                                                <i class="fab fa-linkedin" style="font-size:24px"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-----card__frame-------------->
                                            <div class="card__overlay"></div>
                                            <div class="card__content">
                                                <div
                                                    style="text-align: center;width:300px;font-weight: bold;font-family: 'Muli', sans-serif;height: 32px">
                                                    <div style="font-weight: bold;
                                                    font-size: 14px;
                                                    padding-top: 15px;">
                                                        <u>{{ $job->position }}</u>
                                                    </div>
                                                </div>
            
                                                <div
                                                    style="display: flex;width: 333px;flex-direction: row;margin-top: 20px;">
            
                                                    <div style="display:flex;flex-direction:column;margin-top: -5px;">
                                                        <i class="fas fa-briefcase" style="margin:5px;font-size:18px"></i>
                                                        <i class="far fa-money-bill-alt" style="margin:5px;font-size:18px"></i>
                                                        <i class="fas fa-map-marker-alt" style="margin:5px;font-size:18px"></i>
                                                    </div>
                                                    <div class="dash" style="display: flex;flex-direction: column;margin-left:8px;">
                                                        <div style="margin-bottom: 7px;font-size: 16px;">|</div>
                                                        <div style="margin-bottom: 7px;font-size: 16px;">|</div>
                                                        <div style="margin-bottom: 7px;font-size: 16px;">|</div>
                                                    </div>
            
                                                    <div style="margin-left:12px">
                                                        <div style="margin-bottom:8px;font-size: 14px;font-weight: 700;">
                                                            <div style="text-align:left">As Per Company Norms</div>
                                                        </div>
                                                        <div style="margin-bottom:9px;font-size: 14px;font-weight: 700;"> <i
                                                                ></i>
                                                                @if ($job->country == 'USD')
                                                                ${{ $job->package_offer_from }} To $
                                                                {{ $job->package_offer_to }} USD
                                                               
                                                                @elseif($job->salary_type == 'Pounds')
                                                  
                                                                £{{ $job->package_offer_from }} TO £
                                                                    {{ $job->package_offer_to }} Pounds
                                                                    @else
                                                                    N/A
                                                                    
                                                                 
                                                                @endif
                                                               </div>
                                                        <div
                                                            style="margin-bottom:12px;font-size: 14px;font-weight: 700;text-align:left">
                                                            {{ $job->country }}
            
                                                        </div>
                                                    </div>
                                                </div>
                                                  <div style="text-align: left">
                                                    <div
                                                        style="font-size: 13px;margin-bottom: 10px;margin-left: 20px;
                                                        font-weight: bold;font-family: var(--bs-body-font-family)">
                                                        <u>Job Description</u>
                                                    </div>
                                                    <div
                                                        style="width: 257px;
                                                        overflow: hidden;text-overflow: ellipsis; 
                                                        font-size: 13px;font-weight:bold;
                                                        margin-left:20px;font-family: 'Muli', sans-serif;
                                                        word-wrap: break-word;
                                                        height:180px">
                                                        {!! str_limit ($job->job_description, 350 )!!}
                                                    </div>
                                                </div>

                                                @php
                                                $start = new \Carbon\Carbon("$job->created_at");
                                                $end = new \Carbon\Carbon();
                                            @endphp
            
                                                <div
                                                    style="font-size: 16px;margin-top:3px;margin-left:20px;font-weight: bold;font-family: 'Muli', sans-serif;">
                                                    <u> Posted on - {{ $start->diff($end)->format('%d') }} days ago</u>
                                                </div>
                                            </div>
                                            <!------card__content------------>
                                        </li>
                                    </ul>
                                    
                                </div>
                               
                                @endforeach

                            </div>
                        </div>
                    </div>
                    
                </div>
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
    <scrip src="{{ url('jobs_page') }}/assets/js/theme.min.js">
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
