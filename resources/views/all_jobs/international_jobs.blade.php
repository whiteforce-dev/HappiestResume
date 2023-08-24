@extends('all_jobs.master')
@section('body')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<section class="heading" id="scrolling">
<form>
    <section class="location">
        <div class="up-location">
            <h1>J<i class="fas fa-search" style="color: rgb(255, 153, 0); font-size: 1.7rem;"></i>bs By location</h1>
            <hr style="background-color:  rgb(245, 160, 34); height: 4px; border: none; width: 27%; margin: 0 auto;">
            <p style="margin-top: 11px;">Find your favourite jobs and get the benefits of yourself</p>
        </div>
       
        <div class="col-md-3"
                            style="display:flex; justify-content: center;width:400px; margin:0 auto">
        <select name="country" id="dynamic_select" 
        style="display: block" onchange="showSearchBox();">
        @foreach ($countries as $country)
        
            <option value="{{ $country->countryname }}">{{ $country->countrywise }}
            </option>
       @endforeach
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;
                          <span
                                class="icon-sahpe icon-lg bg-light-warning rounded-circle text-center text-dark-warning fs-4 " >
                                <i class="fa fa-search" aria-hidden="true"></i>
                          </span>
                                {{-- @endforeach --}}
</div>
        <div class="lower-location">
            <div class="lower-one">
                <div class="denmark">
                  <a href="{{ url('country-jobs', ['fr' ?? '0']) }}"
                  class="card-img-top" style="text-decoration:none !important;"> <img src="{{ url('assets/international-img/denmark.svg') }}" alt="">
                    <div class="country">
                     <h3>Jobs in France</h3></a>
                      <div class="companies">
                        {{-- <p>2 Vacancies</p>
                        <span>2 Companies</span> --}}
                      </div>
                    </div>
                </div>
                <div class="france">
                  <a href="{{ url('country-jobs', ['ca' ?? '0']) }}"
                  class="card-img-top" style="text-decoration:none !important;"> <img src="{{ url('assets/international-img/france.svg') }}" alt="">
                    <div class="country">

                      <h3>Jobs in Canada</h3></a>


                      
                      {{-- <div class="companies">
                        <p>2 Vacancies</p>
                        <span>2 Companies</span>
                      </div> --}}
                    </div>
                </div>
                <div class="germany">
                  <a href="{{ url('country-jobs', ['de' ?? '0']) }}"
                  class="card-img-top" style="text-decoration:none !important;"> <img src="{{ url('assets/international-img/germany.svg') }}" alt="">
                    <div class="country">
                      <h3>Jobs in Germany</h3></a>
                      <div class="companies">
                        {{-- <p>2 Vacancies</p>
                        <span>2 Companies</span> --}}
                      </div>
                    </div>
                </div>
            </div>
            <div class="lower-two">
                <div class="Holland">
                  <a href="{{ url('country-jobs', ['nl' ?? '0']) }}"
                  class="card-img-top" style="text-decoration:none !important;"><img src="{{ url('assets/international-img/holland.svg') }}" alt="">
                    <div class="country">
                     <h3> Jobs in Netherlands</h3></a>
                      <div class="companies">
                        {{-- <p>2 Vacancies</p>
                        <span>2 Companies</span> --}}
                      </div>
                    </div>
                </div>
                <div class="London">
                  <a href="{{ url('country-jobs', ['uk' ?? '0']) }}"
                  class="card-img-top" style="text-decoration:none !important;"><img src="{{ url('assets/international-img/london.svg') }}" alt="">
                    <div class="country">
                      <h3>Jobs in UK</h3></a>
                      <div class="companies">
                        {{-- <p>2 Vacancies</p>
                        <span>2 Companies</span> --}}
                      </div>
                    </div>
                </div>
                <div class="usa">
                  <a href="{{ url('country-jobs', ['us' ?? '0']) }}"
                  class="card-img-top" style="text-decoration:none;"> <img src="{{ url('assets/international-img/usa.svg') }}" alt="">
                    <div class="country">
                      <h3>Jobs in USA</h3></a>
                      <div class="companies">
                        {{-- <p>2 Vacancies</p>
                        <span>2 Companies</span> --}}
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    {{-- <div class="div-one content search-box-one" id="job_category"
    style="{{ $category == 'international' ? 'display:block;' : 'display:none;' }}"> --}}
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
              <p class="tooltips">{{ ucwords(substr($job->company->name ,0 , 14)) }}
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
  {{-- </div> --}}
 
  {{-- </div> --}}


</section>
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
    alert '1';
    window.location = "https://happiestresume.com/country-jobs/" + value;
}
</script>
@endsection