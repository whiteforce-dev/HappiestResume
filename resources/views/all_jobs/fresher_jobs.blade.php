@extends('all_jobs.master')
@section('body')

{{-- <div class="demo-cont">
    <!-- slider start -->
    <div class="fnc-slider example-slider">
        <div class="fnc-slider__slides">
            <!-- slide start -->
            <div class="fnc-slide m--blend-green m--active-slide">
                <div class="fnc-slide__inner">
                    <div class="fnc-slide__mask">
                        <div class="fnc-slide__mask-inner"></div>
                    </div>
                    <div class="fnc-slide__content">
                        <h2 class="fnc-slide__heading">
                            <div class="fnc-slide__heading-line">
                                <span>Fresher's Jobs</span>
                            </div>
                            <!-- <div class="fnc-slide__heading-line">
                                <span>Jobs</span>
                            </div> -->
                        </h2>
                        <a href="#scrolling" >
                            <button type="button" class="fnc-slide__action-btn">
                                Click me!
                                <span data-text="Click me!"> Click me!</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- slide end -->
            <!-- slide start -->
            <div class="fnc-slide m--blend-dark">
                <div class="fnc-slide__inner">
                    <div class="fnc-slide__mask">
                        <div class="fnc-slide__mask-inner"></div>
                    </div>
                    <div class="fnc-slide__content">
                        <h2 class="fnc-slide__heading">
                            <div class="fnc-slide__heading-line">
                                <span>Female Jobs</span>
                            </div>
                            <!-- <div class="fnc-slide__heading-line">
                                <span>Jobs</span>
                            </div> -->
                        </h2>
                        <a href="{{ url('female-jobs') }}">
                            <button type="button" class="fnc-slide__action-btn">
                                Click me!
                                <span data-text="Click me!"> Click me!</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- slide end -->
            <!-- slide start -->
            <div class="fnc-slide m--blend-red">
                <div class="fnc-slide__inner">
                    <div class="fnc-slide__mask">
                        <div class="fnc-slide__mask-inner"></div>
                    </div>
                    <div class="fnc-slide__content">
                        <h2 class="fnc-slide__heading">
                            <div class="fnc-slide__heading-line">
                                <span>National Jobs</span>
                            </div>
                            <!-- <div class="fnc-slide__heading-line">
                                <span>Jobs</span>
                            </div> -->
                        </h2>
                        <a href="NationalJobs.html#nationalscrolling">
                            <button type="button" class="fnc-slide__action-btn">
                                Click me!
                                <span data-text="Click me!"> Click me!</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- slide end -->
            <!-- slide start -->
            <div class="fnc-slide m--blend-blue">
                <div class="fnc-slide__inner">
                    <div class="fnc-slide__mask">
                        <div class="fnc-slide__mask-inner"></div>
                    </div>
                    <div class="fnc-slide__content">
                        <h2 class="fnc-slide__heading">
                            <div class="fnc-slide__heading-line">
                                <span>International Jobs</span>
                            </div>
                            <!-- <div class="fnc-slide__heading-line">
                                <span>Jobs</span>
                            </div> -->
                        </h2>
                        <a href="InternationalJobs.html#Internationalscrolling">
                            <button type="button" class="fnc-slide__action-btn">
                                Click me!
                                <span data-text="Click me!"> Click me!</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- slide end -->
        </div>
        <nav class="fnc-nav">
            <div class="fnc-nav__bgs">
                <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
                <div class="fnc-nav__bg m--navbg-dark"></div>
                <div class="fnc-nav__bg m--navbg-red"></div>
                <div class="fnc-nav__bg m--navbg-blue"></div>
            </div>
            <div class="fnc-nav__controls" style="display: none;">
                <button class="fnc-nav__control">
                    Fresher'Jobs
                    <span class="fnc-nav__control-progress"></span>
                </button>
                <button class="fnc-nav__control">
                    Female Jobs
                    <span class="fnc-nav__control-progress"></span>
                </button>
                <button class="fnc-nav__control">
                    National Jobs
                    <span class="fnc-nav__control-progress"></span>
                </button>
                <button class="fnc-nav__control">
                    International Jobs
                    <span class="fnc-nav__control-progress"></span>
                </button>
            </div>
        </nav>
    </div>
    <!-- slider end -->
    <!-- <div class="demo-cont__credits">
      <div class="demo-cont__credits-close"></div>
      <h2 class="demo-cont__credits-heading">Made by</h2>
      <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="demo-cont__credits-img" />
      <h3 class="demo-cont__credits-name">Nikolay Talanov</h3>
      <a href="https://codepen.io/suez/" target="_blank" class="demo-cont__credits-link">My codepen</a>
      <a href="https://twitter.com/NikolayTalanov" target="_blank" class="demo-cont__credits-link">My twitter</a>
      <h2 class="demo-cont__credits-heading">Based on</h2>
      <a href="https://dribbble.com/shots/2375246-Fashion-Butique-slider-animation" target="_blank" class="demo-cont__credits-link">Concept by Kreativa Studio</a>
      <h4 class="demo-cont__credits-blend">Global Blend Mode</h4>
      <div class="colorful-switch">
        <input type="checkbox" class="colorful-switch__checkbox js-activate-global-blending" id="colorful-switch-cb" />
        <label class="colorful-switch__label" for="colorful-switch-cb">
          <span class="colorful-switch__bg"></span>
          <span class="colorful-switch__dot"></span>
          <span class="colorful-switch__on">
            <span class="colorful-switch__on__inner"></span>
          </span>
          <span class="colorful-switch__off"></span>
        </label>
      </div>
    </div> -->
</div> --}}

<section class="heading" id="scrolling">
<form>
    <div class="input-sec">
        <div class="what">
            <label for="">What</label>
            <div class="left-icon">
                <input type="text" class="text-holder" name="designation" placeholder="Job title or designation " value="{{ $designation ?? '' }}">
                <i class="fas fa-search"></i>
            </div>
        </div>
        <div class="where">
            <label for="">Where</label>
            <div class="left-icon">
                <input type="text" class="text-holder location-input" name="job_location"
                    placeholder="Town or city" value="{{ $location ?? '' }}">
                <i class="far fa-compass"></i>
              
            </div>
            <input type="hidden" name="job_category" value="fresher" id="">
        </div>
        <div class="find-btn">
            <button type="submit" class="find-boost"><i class="fas fa-search"></i> Find Jobs</button>
        </div>
    </div>
</form>
</section>

<section class="keep-card" style="margin-top: 20px;">
   <h1>
    Fresher's J<i class="fas fa-search" style="color: rgb(255, 153, 0); font-size: 19px;"></i>bs</h1>
    <div class="div-one content search-box-one" id="job_category"
    style="{{ $category == 'fresher' ? 'display:block;' : 'display:none;' }}">
    <div class="container-card" style="margin-top: 60px;">
      @foreach ($jobs as $job)
      <div class="box-card">
        <div class="top-box">
          <div class="left-top">
            @php
            $str_path = str_replace('public/', ' ', $job->company->image);
            // dd($str_path)
        @endphp
        @if (file_exists($job->company->hh_img))
            <img class="img-fluid" src="{{ $job->company->hh_img }}" alt="image">

        @elseif(isset($job->company->image) && file_exists($job->company->image))
            <img style="height:50px;width:70px" class="img-fluid"
                src="{{ url($str_path) }}"alt="image">
        @else
            {{-- {{ url($str_path) }}   --}}
            <img class="img-fluid" src="{{ url('images/company/white_force.png') }}"
                alt="image">
        @endif
            <div class="card-name-first">
              <p class="tooltips">{{ substr($job->company->name ,0 , 14) }}
                {{-- <span class="tooltipstext">{{ $job->company->name }}</span> --}}
              </p>
              <span>
                @php 
                $job_location = substr($job->job_location , 0 , 10);
                @endphp
                <i class="fa-solid fa-location-dot"></i>  {{ isset($job->job_location) && $job->job_location != ' ' ? ucwords($job_location) : 'Work From Home' }}
              </span>
            </div>
          </div>
        </div>
        <div class="mid-box">
          <h2> {{ isset($job->position) ? ucwords($job->position) : '' }}</h2>
                            @php
                                $start = new \Carbon\Carbon("$job->created_at");
                                $end = new \Carbon\Carbon();
                            @endphp

          <div class="right-top">
            <span><i class="fa-solid fa-briefcase"></i> {{ $job->experience_year_from }}-{{ $job->experience_year_to }}
              Yrs</span>
            <p>
              <i class="fa-solid fa-location-dot"></i> {{ $start->diff($end)->format('%d') }}
              Day(s)
              Ago
            </p>
          </div>
        </div>
        <div class="w-full">
          <p>
            {{substr( $job->job_description,0,80) }} ... <a style="text-decoration: none;" href={{ url('job-description', [$job->id]) }}><span class="trigger" style=" 
              color: #1d1d22;
              font-weight: 600;
              font-size: 0.9rem;
              margin: 0;
              padding: 0;
              box-sizing: border-box;
          ">Read more

         
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
  </div>
 
  </div>


</section>
@endsection