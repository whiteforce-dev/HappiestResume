@extends('all_jobs.master')
@section('body')



<section class="heading" id="scrolling">
<form>
    <div class="input-sec">
        <div class="what">
            <label for="">What</label>
            <div class="left-icon">
                <input type="text" class="text-holder" name="designation" placeholder="Job title or designation" value="{{ $designation ?? '' }}">
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
            <input type="hidden" name="job_category" value="national" id="">
        </div>
        <div class="find-btn">
            <button type="submit" class="find-boost"><i class="fas fa-search"></i> Find Jobs</button>
        </div>
    </div>
</form>
</section>

<section class="keep-card" style="margin-top: 20px;">
   <h1>
    National J<i class="fas fa-search" style="color: rgb(255, 153, 0); font-size: 19px;"></i>bs</h1>
    <div class="div-one content search-box-one" id="job_category"
    style="{{ $category == 'national' ? 'display:block;' : 'display:none;' }}">
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
                $job_location = substr($job->job_location , 0 , 8);
                @endphp
                <i class="fa-solid fa-location-dot"></i>  {{ isset($job->job_location) && $job->job_location != ' ' ? ucwords($job_location) : 'Work From Home' }}
              </span>
            </div>
          </div>
        </div>
        <div class="mid-box">
            @php
            $job_position = substr($job->position ,0 ,25);
            @endphp
          <h2> {{ isset($job->position) ? ucwords($job_position) : '' }}..</h2>
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
            {!! substr( $job->job_description,0,80) !!}... <a style="text-decoration: none;" href={{ url('job-description', [$job->id]) }}><span class="trigger" style=" 
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