@extends('adminview.master')
@section('title','Admin | Registered Users')
@section('head')
    {{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
    {{--<!-- Chartist -->--}}
    {{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
    {{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
    <div class="breadcrumb">
        <h1 class="mr-2">List Of Users ({{isset($registrations_count)?$registrations_count:'0'}})</h1>
        <ul>
            <li>
                <a href="{{ URL::to('dashboard') }}">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ URL::to('registered-user') }}">
                    All Users
                </a>
            </li>
            <li>
                <a href="{{ URL::to('websiteregistration') }}">
                    Web Registration
                </a>
            </li>
            <li>
                <a href="{{ URL::to('officeregistration') }}">
                    Office Registration
                </a>
            </li>
            <li>
                <a href="{{ URL::to('saisun-hire-registration') }}">
                    Saisun Hire Registration
                </a>
            </li>
        </ul>
    </div>

    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script>
        $(function () {
            $("#start_date").datepicker({
                dateFormat: 'dd-mm-yy',
            });
            $("#end_date").datepicker({
                dateFormat: 'dd-mm-yy',
            });
        });
    </script>

    <div class="separator-breadcrumb border-top"></div>
    <div class="col-lg-12 col-md-12 mt-4">
        <div class="card text-center border-primary">
            <!-- -->
            <div class="card-header bg-primary text-white">
                <h3 class="float-left  card-title m-0 text-white">Manage All Users</h3>
                <div class="dropdown dropleft text-right">

                </div>
            </div>
            <div class="col-lg-12 col-md-12 mt-4">
                <div class="card  border-primary">
                    <!-- -->
                    <div class="card-header bg-primary  text-white">
                        <div>Resume Search By Fields</div>
                    </div>
                    <div class="card-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="ul-widget5">
                            <form class="needs-validation" novalidate="novalidate" id="myid">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom01">Start Date</label>
                                        <input class="form-control  ng-untouched ng-pristine ng-invalid"
                                               formcontrolname="start" name="start_date" id="start_date"
                                               value="{{ isset($start_date)?$start_date:'' }}" placeholder="Start Date" type="text"
                                               required>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom01">End Date</label>
                                        <input class="form-control  ng-pristine ng-valid ng-touched"
                                               formcontrolname="end" name="end_date" id="end_date" required placeholder="End Date"
                                               value="{{ isset($end_date)?$end_date:'' }}" type="text" autocomplete="off">
                                    </div>

                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom01">Location</label>
                                        <input type="text"
                                               class="form-control required"
                                               name="location"
                                               id="location" value="{{$location}}"
                                               placeholder="Enter Location"
                                               data-fv-field="github">
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom01">Skills</label>
                                        <input type="text"
                                               name="skills"
                                               id="skills" value="{{$skills}}"
                                               placeholder="Skills"
                                               class="form-control required">
                                    </div>
                                    {{--<div class="col-md-2 mb-2">--}}
                                        {{--<label for="validationCustom01">Minimum Experience(Year)</label>--}}
                                        {{--<select name="experience" class="form-control" id="">--}}
                                            {{--@for ($i = 0; $i < 15; $i++)--}}
                                                {{--<option {{$experience == $i ? 'selected':''}} value="{{$i}}">{{$i}} Years--}}
                                                {{--</option>--}}
                                            {{--@endfor--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom01">Designation</label>
                                        <input type="text"
                                               class="form-control required"
                                               name="designation"
                                               id="designation" value="{{$designation}}"
                                               placeholder="Enter Designation"
                                               data-fv-field="github">
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label for="validationCustom01">Education Qualification</label>
                                        <input type="text"
                                               name="education"
                                               id="education" value="{{$education}}"
                                               placeholder="Enter Educational Qualification..."
                                               class="form-control required">
                                    </div>
                                </div>
                                <div class="form-row">
                                <div class="col-md-2 mb-2">
                                        <label for="validationCustom01">Experience Level</label>
                                        <select class="form-control  ng-untouched ng-pristine ng-invalid"
                                                name="is_fresher" id="is_fresher" >
                                           <option value="all" <?php if($isFresher == "all"){ echo 'selected';}?>>All</option>
                                           <option value="1" <?php if($isFresher == "1"){ echo 'selected';}?>>Fresher</option>
                                           <option value="0" <?php if($isFresher == "0"){ echo 'selected';}?>>Experience</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                            <label for="">Register From</label>
                                            <select name="register_from" id="register_from" class="form-control" onchange="office_person(this.value)">
                                            <option value="all">All</option>
                                            <option value="website">Website</option>
                                            <option value="office">Office</option>
                                            <option value="saisun_hire">Saisun Hire</option>
                                            <option value="payroll">Payroll</option>
                                            <option value="Publisher">Publisher</option>
                                            <option value="Chatbot">Chatbot</option>
                                            </select>
                                    </div>
                                    <div class="separator-breadcrumb border-top"></div>
                          
                                    <div class="col-md-2 mb-2" style="display:none" id="uploadedPersone">

                                    <label for="">Uploaded Person</label>
                                    @if($page == 'office')
                                            <select name="register_user" id="register_user" class="form-control">
                                            <option value="Selected">Select User</option>
                                            @php 
                                            $userlist = App\User::where('id','4')->orWhere('id','5')->orWhere('id','6')->get();
                                            @endphp
                                            @foreach($userlist as $user)
                                            <option value="{{ $user->id }}" <?php if($user->id == $uploaded_by){ echo 'selected';}?>>{{ $user->name }}</option>
                                            @endforeach
                                            </select>
                                           @endif
                             </div> 
                                         </div>
                            <button type="submit" class="btn btn-success btn-hover btn-block btn-rounded">
                                    SEARCH
                                </button>
                            </form>
                        </div>
                    </div>
            </div>
           
            {{--<div class="card-header bg-primary text-white">--}}
                {{--<form class="mg-b-20" method="get" id="myform">--}}
                    {{-- <form class="mg-b-20" action="{{URL::to('candidatereport')}}" method="get" id="myform"> --}}
                    {{--<div class="row">--}}
                        {{--<div class="col-sm-2">--}}
                        {{--<select name="register_from"--}}
                        {{--class="form-control form-control-rounded ng-untouched ng-pristine ng-invalid"--}}
                        {{--id="register_from">--}}
                        {{--<option {{$register_from == ''?'selected':''}} value="">Select Register Type--}}
                        {{--</option>--}}
                        {{--<option {{$register_from == 'all'?'selected':''}} value="all">All</option>--}}
                        {{--<option {{$register_from == 'website'?'selected':''}} value="website">Website--}}
                        {{--</option>--}}
                        {{--<option {{$register_from == 'office'?'selected':''}} value="office">Office</option>--}}
                        {{--</select>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-2">--}}
                            {{--<select class="form-control form-control-rounded ng-untouched ng-pristine ng-invalid"--}}
                                    {{--name="register_from" id="register_from">--}}
                                {{--<option value="all">Register From</option>--}}
                                {{--<option value="website" {{ session('register_from') == 'website'?'selected':'' }}>--}}
                                    {{--Website--}}
                                {{--</option>--}}
                                {{--<option value="office" {{ session('register_from') == 'office'?'selected':'' }}>Office--}}
                                {{--</option>--}}
                                {{--<option value="saisun_hire"--}}
                                        {{--{{ session('register_from') == 'saisun_hire'?'selected':'' }}>Saisun Hire--}}
                                {{--</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-2">--}}
                            {{--<input class="form-control form-control-rounded ng-untouched ng-pristine ng-invalid"--}}
                                   {{--name="location" id="location" autocomplete="off"--}}
                                   {{--value="{{ isset($location)?$location:'' }}" placeholder="Location" type="text"--}}
                            {{-->--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-3">--}}
                            {{--<input class="form-control form-control-rounded ng-untouched ng-pristine ng-invalid"--}}
                                   {{--formcontrolname="start" name="start_date" id="start_date"--}}
                                   {{--value="{{ isset($start_date)?$start_date:'' }}" placeholder="Start Date" type="text"--}}
                                   {{--required>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-3">--}}

                            {{--<input class="form-control form-control-rounded ng-pristine ng-valid ng-touched"--}}
                                   {{--formcontrolname="end" name="end_date" id="end_date" required placeholder="End Date"--}}
                                   {{--value="{{ isset($end_date)?$end_date:'' }}" type="text" autocomplete="off">--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-2 text-left">--}}
                            {{--<button type="submit" class="btn btn-success btn-hover btn-block btn-rounded">--}}
                                {{--SEARCH--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
            <script>
                function change() {
                    document.getElementById("myform").submit();
                }
            </script>
            <div class="card-body">
                <div class="ul-widget5">

                    @if(count($registrations) > 0)

                        {{ $registrations->appends(Illuminate\Support\Facades\Input::except('page'))->links() }}
                        {{-- {!! $registrations->render() !!} --}}

                        @foreach ($registrations as $in => $item)
                            @php
                                $user_login = \App\UserLogin_Model::find($item->login_id);
                                $user_profile = \App\UserProfile::whereuser_id($item->id)->first();
                            @endphp
                            <div class="ul-widget-s5__item mb-5">
                                <div class="ul-widget-s5__content">
                                    <div class="ul-widget-s5__pic">
                                        @if(file_exists("public/$item->image") && isset($item->image))
                                            <img id="userDropdown" src="{{ URL::to("public/$item->image")}}" alt=""
                                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @else
                                            <img id="userDropdown" src="{{ URL::to('public/images/d.png')}}" alt=""
                                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @endif

                                    </div>
                                    <div class="ul-widget-s5__section"><a class="ul-widget4__title"
                                                                          href="#">{{ isset($item->name)? $item->name : '-'}}</a>
                                        <p class="ul-widget-s5__desc">{{ isset($item->email)? $item->email : '-'}}</p>
                                    </div>

                                </div>
                                <div class="ul-widget-s5__section"><a class="ul-widget4__title" href="#">Profile View
                                        Count
                                        : {{ $item->profile_view_count}}</a>
                                    <p class="ul-widget-s5__desc"><span class="badge badge-info">Created At :
                                            {{ \Carbon\Carbon::parse($item->created_at)->format('d-F-Y h:i
 A')}}</span><br><span
                                                class="badge badge-primary">Register From : {{ $item->register_from}}</span><br>
                                               
                                              
                                     
                                                <span
                                                class="badge badge-success">Current Location : {{ isset($item->user_profile->current_location)?$item->user_profile->current_location:'-' }}</span>

                                                @if($register_from == "office")
                                      
                                    
                                                <span
                                                class="badge badge-primary">Uploaded_by :{{ App\User::where('id',$item->uploaded_by)->value('name')}}</span>
                                     
                                      @endif
                                    </p>

                                </div>
                                <div class="ul-widget-s5__content">
                                    <div class="ul-widget-s5__progress">
                                        <div class="ul-widget-s5__stats">
                                <span>
                                    Profile Complete :
                                    <strong>
                                        {{$item->profile_complete_percent.'%'}}
                                    </strong>
                                </span>
                                            @if(\Carbon\Carbon::parse($item->created_at)->format('d-F-Y') ==
                                            \Carbon\Carbon::now()->format('d-F-Y'))
                                                <p class="ul-widget-s5__desc">
                                                    <small class="badge badge-danger">
                                                        Today's Registration
                                                    </small>
                                                </p>
                                            @endif

                                            <strong>
                                                {{$item->contact}}
                                            </strong>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                                                 role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                                 aria-valuenow="{{$item->profile_complete_percent}}"
                                                 style="width: {{$item->profile_complete_percent}}%;">
                                                {{$item->profile_complete_percent}}
                                                %
                                            </div>
                                        </div>
                                    </div>
                               
                                    <?php
                                     if($item->resumeCode_id != ''){
                                        $resume_code = App\ResumeCodeModel::where('id',$item->resumeCode_id)->value('user_code'); ?>
                                    <a target="_blank" href="{{ url('cv').'/'.$resume_code }}"
                                       class="btn btn-outline-primary btn-sm" type="button">View Resume</a>
                                   <?php  }
                                     else{
                                          $name = \App\Http\Controllers\UserTemplateController::slugify($item->name); ?>
                                            <a target="_blank" href="{{URL::to('resume')."/$name/".base64_encode($item->id)}}"
                                       class="btn btn-outline-primary btn-sm" type="button">View Resume</a>

                                  <?php   }
                                    ?>
                                   
                                </div>
                            </div>
                        @endforeach

                        {{ $registrations->appends(Illuminate\Support\Facades\Input::except('page'))->links() }}

                    @else
                        <div align="center">
                            < No Record Available >
                        </div>
                    @endif

                </div>
            </div>
            <!-- -->
            <!-- -->
        </div>
    </div>
    <script>
  function office_person(type){
 
   if(type == "office"){
    
    document.getElementById("uploadedPersone").style.display = "block";
   }
   else{
    document.getElementById("uploadedPersone").style.display = "None";
   }
  }

</script>
@endsection
@section('scripts')
@stop
