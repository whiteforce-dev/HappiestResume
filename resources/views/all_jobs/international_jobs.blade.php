@extends('all_jobs.master')
@section('body')
    {{-- <link href="{{ url('jobs_page/assets/libs/tiny-slider/dist/tiny-slider.css') }}" rel="stylesheet"> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <style>
        .countryfirst {
            /* margin-right: 30px; */
            border: 1px solid rgb(240, 142, 14);
            border-bottom-left-radius: 20px;
            border-top-left-radius: 20px;
            padding-left: 20px;
            font-weight: 500;
            width: 81%;
            height: 39px;
            border-right: none;
            color: #66789C;
            font-weight: 400;
            font-size: 0.95rem;
            appearance: none;
        }

        .countryfirst:focus {
            outline: 0;
        }

        .fontdesign {
            border: 1px solid #e79515;
            border-bottom-right-radius: 50%;
            border-top-right-radius: 50%;
            /* background-color: #fff8f2; */
            width: 39px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-left: none;
        }

        .fontdesign i {
            font-size: 1.4rem;
        }

        /* slider css */
        .slider {
            position: relative;
        }

        .slider__container {
            cursor: grab;
            display: flex;
            overflow: hidden;
            scroll-behavior: smooth;
            width: 90%;
            margin: 0 auto;
        }

        .slider__container.dragging {
            scroll-behavior: auto;
            cursor: grabbing;
        }

        .slider__item {
            padding: 16px 8px;
            flex: 0 0 auto;
            width: calc(100% / 5);
        }

        .slider__container[data-step="4"] .slider__item {
            width: calc(100% / 4);
        }

        .slider__container[data-step="3"] .slider__item {
            width: calc(100% / 3);
        }

        .slider__container[data-step="2"] .slider__item {
            width: calc(100% / 2);
        }

        .slider__container[data-step="1"] .slider__item {
            width: calc(100% / 1);
        }

        @media screen and (max-width: 1024px) {

            .slider__item,
            .slider__container[data-step="4"] .slider__item {
                width: calc(100% / 3);
            }
        }

        @media screen and (max-width: 768px) {

            .slider__item,
            .slider__container[data-step="4"] .slider__item,
            .slider__container[data-step="3"] .slider__item {
                width: calc(100% / 2);
            }
        }

        @media screen and (max-width: 480px) {

            .slider__item,
            .slider__container[data-step="4"] .slider__item,
            .slider__container[data-step="3"] .slider__item,
            .slider__container[data-step="2"] .slider__item {
                width: calc(100% / 1);
            }
        }

        .slider__control {
            font-size: 16px;
            border: 2px solid #d97106;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            color: #d97106;
            background: #fff;
            cursor: pointer;
            transition: all .3s;
        }

        .slider__control.prev {
            left: 16px;
        }

        .slider__control.next {
            right: 16px;
        }

        .slider__control:hover {
            opacity: 1;
            transform: translateY(-50%) scale(1.2);
        }

        .slider__item img {
            -webkit-user-drag: none;
            -khtml-user-drag: none;
            -moz-user-drag: none;
            -o-user-drag: none;
            user-select: none;
        }
    </style>

    <section class="heading" id="internationalscrolling">
     
            <section class="location">
                <div class="up-location" style="">
                    <h1>J<i class="fas fa-search" style="color: rgb(255, 153, 0); font-size: 1.7rem;"></i>bs By location
                    </h1>
                    <hr
                        style="background-color:  rgb(245, 160, 34); height: 4px; border: none; width: 27%; margin: 0 auto;">
                    <p style="margin-top: 11px;">Find your favourite jobs and get the benefits of yourself

                    </p>
                    <div class="col-md-3"
                        style="display:flex; justify-content: center;
                    width: 34%;
                    margin: 0 auto;
                    margin-top: 28px !important;">
                        <select name="country" class="countryfirst" id="dynamic_select" style="display: block">

                            @foreach ($countries as $country)
                                <option value="{{ $country->countryname }}">{{ $country->countrywise }}
                                </option>
                            @endforeach
                        </select>
                        <div class="fontdesign">
                            <i class="fa-solid fa-location-dot" style="color:#e7812f;;"></i>
                        </div>

                        {{-- &nbsp;&nbsp;&nbsp;&nbsp; --}}
                        {{-- <span class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4 ">
                          <i class="fa fa-search" aria-hidden="true"></i>
                      </span> --}}
                        {{-- @endforeach --}}
                    </div>
                </div>



                {{-- <div class="lower-location">
                    <div class="lower-one">
                        <div class="denmark">
                            <a href="{{ url('country-jobs', ['fr' ?? '0']) }}" class="card-img-top"
                                style="text-decoration:none !important;"> <img
                                    src="{{ url('assets/international-img/denmark.svg') }}" alt="">
                                <div class="country">
                                    <h3>Jobs in France</h3>
                                </div>
                            </a>

                        </div>


                        <div class="france">
                            <a href="{{ url('country-jobs', ['ca' ?? '0']) }}" class="card-img-top"
                                style="text-decoration:none !important;"> <img
                                    src="{{ url('assets/international-img/france.svg') }}" alt="">
                                <div class="country">

                                    <h3>Jobs in Canada</h3>
                                </div>
                            </a>

                        </div>

                        <div class="germany">
                            <a href="{{ url('country-jobs', ['us' ?? '0']) }}" class="card-img-top"
                                style="text-decoration:none;">

                                <img src="{{ url('assets/international-img/germany.svg') }}" alt="">
                                <div class="country">
                                    <h3>Jobs in USA</h3>
                                </div>
                            </a>
                            <div class="companies">
                                <p>2 Vacancies</p>
                                <span>2 Companies</span>
                            </div>
                        </div>
                    </div>
                    <div class="lower-two">
                        <div class="Holland">
                            <a href="{{ url('country-jobs', ['nl' ?? '0']) }}" class="card-img-top"
                                style="text-decoration:none !important;"><img
                                    src="{{ url('assets/international-img/holland.svg') }}" alt="">
                                <div class="country">
                                    <h3> Jobs in Netherlands</h3>
                                </div>
                            </a>
                            <div class="companies">
                                <p>2 Vacancies</p>
                                <span>2 Companies</span>
                            </div>
                        </div>
                        <div class="London">
                            <a href="{{ url('country-jobs', ['uk' ?? '0']) }}" class="card-img-top"
                                style="text-decoration:none !important;"><img
                                    src="{{ url('assets/international-img/london.svg') }}" alt="">
                                <div class="country">
                                    <h3>Jobs in UK</h3>
                                </div>
                            </a>
                            <div class="companies">
                                <p>2 Vacancies</p>
                                <span>2 Companies</span>
                            </div>
                        </div>
                        <div class="usa">
                            <a href="{{ url('country-jobs', ['de' ?? '0']) }}" class="card-img-top"
                                style="text-decoration:none !important;"> <img
                                    src="{{ url('assets/international-img/usa.svg') }}" alt="">
                                <div class="country">
                                    <h3>Jobs in Germany</h3>
                                </div>
                            </a>
                            <div class="companies">
                                <p>2 Vacancies</p>
                                <span>2 Companies</span>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </section>

            {{-- Slider Start  --}}

            <section class="slider">
                <button class="slider__control prev"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="slider__control next"><i class="fa-solid fa-chevron-right"></i></button>
                <div class="slider__container" data-multislide="false" data-step="4">
                    <div class="slider__item">
                        {{-- slider start  --}}
                        <div class="lower-location">
                            <div class="lower-one">
                                {{-- <div class="denmark">
                    <img src="{{ ('assets/international-img/denmark.svg') }}" alt="">
                    <div class="country">
                      <h3>Denmark</h3>
                      <div class="companies">
                        <p>2 Vacancies</p>
                        <span>2 Companies</span>
                      </div>
                    </div>
                </div> --}}
                                <div class="france">
                                    <img src="{{ 'assets/international-img/denmark.svg' }}" alt="">
                                    <div class="country">
                                        <h3>France</h3>
                                        <div class="companies">
                                            <p>2 Vacancies</p>
                                            <span>2 Companies</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                        {{-- slider end  --}}
                    </div>
                    <div class="slider__item">
                        <div class="lower-location">
                            <div class="lower-one">
                                {{-- <div class="denmark">
                    <img src="{{ ('assets/international-img/denmark.svg') }}" alt="">
                    <div class="country">
                      <h3>Denmark</h3>
                      <div class="companies">
                        <p>2 Vacancies</p>
                        <span>2 Companies</span>
                      </div>
                    </div>
                </div> --}}
                                <div class="france">
                                    <img src="{{ 'assets/international-img/denmark.svg' }}" alt="">
                                    <div class="country">
                                        <h3>France</h3>
                                        <div class="companies">
                                            <p>2 Vacancies</p>
                                            <span>2 Companies</span>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="lower-location">
                            <div class="lower-one">
                                {{-- <div class="denmark">
                    <img src="{{ ('assets/international-img/france.svg') }}" alt="">
                    <div class="country">
                      <h3>Denmark</h3>
                      <div class="companies">
                        <p>2 Vacancies</p>
                        <span>2 Companies</span>
                      </div>
                    </div>
                </div> --}}
                                <div class="france">
                                    <img src="{{ 'assets/international-img/denmark.svg' }}" alt="">
                                    <div class="country">
                                        <h3>France</h3>
                                        <div class="companies">
                                            <p>2 Vacancies</p>
                                            <span>2 Companies</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="lower-location">
                            <div class="lower-one">
                                {{-- <div class="denmark">
                    <img src="{{ ('assets/international-img/germany.svg') }}" alt="">
                    <div class="country">
                      <h3>Denmark</h3>
                      <div class="companies">
                        <p>2 Vacancies</p>
                        <span>2 Companies</span>
                      </div>
                    </div>
                </div> --}}
                                <div class="france">
                                    <img src="{{ 'assets/international-img/denmark.svg' }}" alt="">
                                    <div class="country">
                                        <h3>France</h3>
                                        <div class="companies">
                                            <p>2 Vacancies</p>
                                            <span>2 Companies</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="lower-location">
                            <div class="lower-one">
                                {{-- <div class="denmark">
                    <img src="{{ ('assets/international-img/denmark.svg') }}" alt="">
                    <div class="country">
                      <h3>Denmark</h3>
                      <div class="companies">
                        <p>2 Vacancies</p>
                        <span>2 Companies</span>
                      </div>
                    </div>
                </div> --}}
                                <div class="france">
                                    <img src="{{ 'assets/international-img/denmark.svg' }}" alt="">
                                    <div class="country">
                                        <h3>France</h3>
                                        <div class="companies">
                                            <p>2 Vacancies</p>
                                            <span>2 Companies</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="lower-location">
                            <div class="lower-one">
                                {{-- <div class="denmark">
                    <img src="{{ ('assets/international-img/germany.svg') }}" alt="">
                    <div class="country">
                      <h3>Denmark</h3>
                      <div class="companies">
                        <p>2 Vacancies</p>
                        <span>2 Companies</span>
                      </div>
                    </div>
                </div> --}}
                                <div class="france">
                                    <img src="{{ 'assets/international-img/denmark.svg' }}" alt="">
                                    <div class="country">
                                        <h3>France</h3>
                                        <div class="companies">
                                            <p>2 Vacancies</p>
                                            <span>2 Companies</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="lower-location">
                            <div class="lower-one">
                                {{-- <div class="denmark">
                    <img src="{{ ('assets/international-img/holland.svg') }}" alt="">
                    <div class="country">
                      <h3>Denmark</h3>
                      <div class="companies">
                        <p>2 Vacancies</p>
                        <span>2 Companies</span>
                      </div>
                    </div>
                </div> --}}
                                <div class="france">
                                    <img src="{{ 'assets/international-img/denmark.svg' }}" alt="">
                                    <div class="country">
                                        <h3>France</h3>
                                        <div class="companies">
                                            <p>2 Vacancies</p>
                                            <span>2 Companies</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="lower-location">
                            <div class="lower-one">
                                {{-- <div class="denmark">
                    <img src="{{ ('assets/international-img/london.svg') }}" alt="">
                    <div class="country">
                      <h3>Denmark</h3>
                      <div class="companies">
                        <p>2 Vacancies</p>
                        <span>2 Companies</span>
                      </div>
                    </div>
                </div> --}}
                                <div class="france">
                                    <img src="{{ 'assets/international-img/denmark.svg' }}" alt="">
                                    <div class="country">
                                        <h3>France</h3>
                                        <div class="companies">
                                            <p>2 Vacancies</p>
                                            <span>2 Companies</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="lower-location">
                            <div class="lower-one">
                                {{-- <div class="denmark">
                    <img src="{{ ('assets/international-img/denmark.svg') }}" alt="">
                    <div class="country">
                      <h3>Denmark</h3>
                      <div class="companies">
                        <p>2 Vacancies</p>
                        <span>2 Companies</span>
                      </div>
                    </div>
                </div> --}}
                                <div class="france">
                                    <img src="{{ 'assets/international-img/denmark.svg' }}" alt="">
                                    <div class="country">
                                        <h3>France</h3>
                                        <div class="companies">
                                            <p>2 Vacancies</p>
                                            <span>2 Companies</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="lower-location">
                            <div class="lower-one">
                                {{-- <div class="denmark">
                    <img src="{{ ('assets/international-img/usa.svg') }}" alt="">
                    <div class="country">
                      <h3>Denmark</h3>
                      <div class="companies">
                        <p>2 Vacancies</p>
                        <span>2 Companies</span>
                      </div>
                    </div>
                </div> --}}
                                <img src="{{ 'assets/international-img/denmark.svg' }}" alt="">

                            </div>

                        </div>
                    </div>
                </div>
            </section>

            {{-- Slider End  --}}


   <form>

            <div class="input-sec">
                <div class="what">
                    <label for="">What</label>
                    <div class="left-icon">
                        <input type="text" class="text-holder" name="designation"
                            placeholder="Job title or designation" value="{{ $designation ?? '' }}">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <div class="where">
                    <label for="">Where</label>
                    <div class="left-icon">
                        <input type="text" class="text-holder location-input" name="job_location"
                            placeholder="Town or city " value="{{ $location ?? '' }}">
                        <i class="far fa-compass"></i>

                    </div>
                    <input type="hidden" name="job_category" value="international" id="">
                </div>
                <div class="find-btn">
                    <button type="submit" class="find-boost"><i class="fas fa-search"></i> Find Jobs</button>
                </div>
            </div>
        </form>


    </section>

    <section class="keep-card" style="margin-top: 20px;">
        <h1>
            International J<i class="fas fa-search" style="color: rgb(255, 153, 0); font-size: 19px;"></i>bs</h1>
        <div class="container-card" style="margin-top: 60px;">
            @foreach ($jobs as $job)
                <div class="box-card">
                    <div class="top-box">
                        <div class="left-top">
                            {{-- @php
                                $str_path = str_replace('public/', ' ', $job->company->image);
                            @endphp --}}
                            @if (file_exists($job->company->hh_img))
                                <img class="img-fluid" src="{{ $job->company->hh_img }}" alt="image">
                            @elseif(isset($job->company->image) && file_exists($job->company->image))
                                <img style="height:50px;width:70px" class="img-fluid"
                                    src="{{ url($str_path) }}"alt="image">
                            @else
                                <img class="img-fluid" src="{{ url('images/company/white_force.png') }}" alt="image">
                            @endif
                            <div class="card-name-first">
                                <p>{{ ucwords(substr($job->company->name, 0, 14)) }}

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
                    </div>
                    <div class="mid-box">
                        @php
                            $job_position = substr($job->position, 0, 25);
                        @endphp
                        <h2> {{ isset($job->position) ? ucwords($job_position) : '' }}..</h2>
                        @php
                            $start = new \Carbon\Carbon("$job->created_at");
                            $end = new \Carbon\Carbon();
                        @endphp

                        <div class="right-top">
                            <span><i class="fa-solid fa-briefcase"></i>
                                {{ $job->experience_year_from }}-{{ $job->experience_year_to }}
                                Yrs</span>
                            <p>
                                <i class="fa-solid fa-location-dot"></i> {{ $start->diff($end)->format('%d') }}
                                Day(s) Ago
                            </p>
                        </div>
                    </div>
                    <div class="w-full">
                        <p>
                            {!! substr($job->job_description, 0, 80) !!}...
                            <a style="text-decoration: none;" href={{ url('job-description', [$job->id]) }}>
                                <span class="trigger"
                                    style=" color: #1d1d22; font-weight: 600; font-size: 0.9rem; margin: 0; padding: 0; box-sizing: border-box;">
                                    Read more
                                </span>
                            </a>
                        </p>
                    </div>
                    <div class="applied">

                        <div class="app-bttn" style="">
                            <a href="{{ url('job-description', [$job->id]) }}">
                                <button>Apply Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <script>
        $('select[name=country]').change(function() {
            // const url = "https://happiestresume.com/country-jobs/" + $(this).val();
            const url = "country-jobs/" + $(this).val();

            console.log(url);
            window.location.href = url;
        })
    </script>
    <script>
        const sliders = [...document.querySelectorAll(".slider__container")];
        const sliderControlPrev = [...document.querySelectorAll(".slider__control.prev")];
        const sliderControlNext = [...document.querySelectorAll(".slider__control.next")];

        sliders.forEach((slider, i) => {
            let isDragStart = false,
                isDragging = false,
                isSlide = false,
                prevPageX,
                prevScrollLeft,
                positionDiff;

            const sliderItem = slider.querySelector(".slider__item");
            var isMultislide = (slider.dataset.multislide === 'true');

            sliderControlPrev[i].addEventListener('click', () => {
                if (isSlide) return;
                isSlide = true;
                let slideWidth = isMultislide ? slider.clientWidth : sliderItem.clientWidth;
                slider.scrollLeft += -slideWidth;
                setTimeout(function() {
                    isSlide = false;
                }, 700);
            });

            sliderControlNext[i].addEventListener('click', () => {
                if (isSlide) return;
                isSlide = true;
                let slideWidth = isMultislide ? slider.clientWidth : sliderItem.clientWidth;
                slider.scrollLeft += slideWidth;
                setTimeout(function() {
                    isSlide = false;
                }, 700);
            });

            function autoSlide() {
                if (slider.scrollLeft - (slider.scrollWidth - slider.clientWidth) > -1 || slider.scrollLeft <= 0)
                    return;
                positionDiff = Math.abs(positionDiff);
                let slideWidth = isMultislide ? slider.clientWidth : sliderItem.clientWidth;
                let valDifference = slideWidth - positionDiff;
                if (slider.scrollLeft > prevScrollLeft) {
                    return slider.scrollLeft += positionDiff > slideWidth / 5 ? valDifference : -positionDiff;
                }
                slider.scrollLeft -= positionDiff > slideWidth / 5 ? valDifference : -positionDiff;
            }

            function dragStart(e) {
                if (isSlide) return;
                isSlide = true;
                isDragStart = true;
                prevPageX = e.pageX || e.touches[0].pageX;
                prevScrollLeft = slider.scrollLeft;
                setTimeout(function() {
                    isSlide = false;
                }, 700);
            }

            function dragging(e) {
                if (!isDragStart) return;
                e.preventDefault();
                isDragging = true;
                slider.classList.add("dragging");
                positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
                slider.scrollLeft = prevScrollLeft - positionDiff;
            }

            function dragStop() {
                isDragStart = false;
                slider.classList.remove("dragging");
                if (!isDragging) return;
                isDragging = false;
                autoSlide();
            }

            addEventListener("resize", autoSlide);
            slider.addEventListener("mousedown", dragStart);
            slider.addEventListener("touchstart", dragStart);
            slider.addEventListener("mousemove", dragging);
            slider.addEventListener("touchmove", dragging);
            slider.addEventListener("mouseup", dragStop);
            slider.addEventListener("touchend", dragStop);
            slider.addEventListener("mouseleave", dragStop);
        });
    </script>
    {{-- <script src="{{ url('jobs_page/assets/libs/tiny-slider/dist/min/tiny-slider.js') }}"></script> --}}
@endsection
