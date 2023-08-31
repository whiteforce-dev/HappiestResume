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
    <h1 class="mr-2">List Of Users ({{$registrations_count}})</h1>
    <ul>
        <li>
            <a href="{{ URL::to('dashboard') }}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ URL::to('registered-user') }}"
                class="{{ $page == 'all'?'badge badge-sm badge-primary text-white':'' }}">
                All Users
            </a>
        </li>
        <li>
            <a href="{{ URL::to('websiteregistration') }}"
                class="{{ $page == 'website'?'badge badge-sm badge-primary text-white':'' }}">
                Web Registration
            </a>
        </li>
        <li>
            <a href="{{ URL::to('officeregistration') }}"
                class="{{ $page == 'office'?'badge badge-sm badge-primary text-white':'' }}">
                Office Registration
            </a>
        </li>
        <li>
            <a href="{{ URL::to('saisun-hire-registration') }}"
                class="{{ $page == 'saisun_hire'?'badge badge-sm badge-primary text-white':'' }}">
                Saisun Hire Registration
            </a>
        </li>
        <li>
            <a href="{{ URL::to('payroll_registration') }}"
                class="{{ $page == 'Payroll'?'badge badge-sm badge-primary text-white':'' }}">
                Payroll
            </a>
        </li>
        <li>
            <a href="{{ URL::to('parser_registration') }}"
                class="{{ $page == 'parser'?'badge badge-sm badge-primary text-white':'' }}">
                Resume Parser
            </a>
        </li>
        <li>
            <a href="{{ URL::to('chatbot_registration') }}"
                class="{{ $page == 'Chatbot'?'badge badge-sm badge-primary text-white':'' }}">
               Chatbot
            </a>
        </li>
        <li>
            <a href="{{ URL::to('international_registration') }}"
                class="{{ $page == 'international_registration'?'badge badge-sm badge-primary text-white':'' }}">
               International Registration
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
<div class="col-lg-12 col-md-12 mt-4">
    <div class="card text-center border-primary">
        <!-- -->
        <div class="card-header bg-primary text-white">
            @if($page == 'office')
            <div>Manage All Office Registered Users</div>
            @elseif($page == 'website')
            <div>Manage All Website Registered Users</div>
            @elseif($page == 'saisun_hire')
            <div>Manage All Saisun Hire Registered Users</div>
            @elseif($page == 'Payroll')
            <div>Manage All Payroll Registered Users</div>
            @elseif($page == 'parser')
            <div>Manage All Resume Parser Registered Users</div>
            @elseif($page == 'Chatbot')
            <div>Manage All Chatbot Registered Users</div>
            @else
            <div>Manage All Users</div>
            @endif

         
    </div>
    <script>
        function change() {
                    document.getElementById("myform").submit();
                }
    </script>
    <div class="card-body">
        <div class="ul-widget5">
        <form action="" method="get">
                <div class="row">
                    <div class="col-md-3">
                        <label for="">From Date</label>
                        <input type="date" name="from_date" id="from_date" class="form-control" value="{{ $from_date }}">
                    </div>
                    <div class="col-md-3">
                        <label for="">To Date</label>
                        <input type="date" name="to_date" id="to_date" class="form-control" value="{{ $to_date }}">
                    </div>
                    @if($page == 'parser')
                    <div class="col-md-3">
                        <label for="">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $email }}">
                    </div>
                    @endif
                    @if($page == 'office')
                    <div class="col-md-3">
                        <label for="">Candidate Registered By</label>
                    <select name="register_user" id="register_user" class="form-control">
                    <option value="">Select User</option>
                    @php 
                    $userlist = App\User::where('id','4')->orWhere('id','5')->orWhere('id','6')->get();
                    @endphp
                    @foreach($userlist as $user)
                    <option value="{{ $user->id }}" <?php if($user->id == $uploaded_by){ echo 'selected';}?>>{{ $user->name }}</option>
                    @endforeach
                    </select>
                    </div>
                    @endif
                    <div class="col-md-3" style="margin-top: 30px;">
                        <input type="submit" class="btn btn-info col-md-12" value="Search">
                    </div>
                </div>
               
            </form>
            <br>
            <br>
            {!! $registrations->appends(\Illuminate\Support\Facades\Input::except('page'))->links() !!}
          
         
            
            @if(count($registrations) > 0)
            @foreach ($registrations as $in => $item)
            @php
            $user_login = \App\UserLogin_Model::find($item->login_id);
            $user_profile = \App\UserProfile::whereuser_id($item->id)->first();
            @endphp
            <div class="ul-widget-s5__item mb-5">
                <div class="ul-widget-s5__content">
                    <div class="ul-widget-s5__pic">
                        @if(file_exists("public/$item->image") && isset($item->image))
                        <img id="userDropdown" src="{{ URL::to("public/$item->image")}}" alt="" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        @else
                        <img id="userDropdown" src="{{ URL::to('public/images/d.png')}}" alt="" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
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
                    <p class="ul-widget-s5__desc">
                            <span class="badge badge-info">Created At :{{ \Carbon\Carbon::parse($item->created_at)->format('d-F-Y h:i A')}}</span><br>
                            <span class="badge badge-primary">Register From : {{ $item->register_from}}</span><br>
                            @if($page == 'office')
                            <span class="badge badge-info" style="background: linear-gradient(to right, #780206, #061161);">Uploaded By : {{ isset($item->uploadedBy->name) ? $item->uploadedBy->name : '' }}</span>
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
                                        class="btn btn-outline-primary btn-sm" type="button">View Resume</a> &nbsp;&nbsp;
                                    <?php  } else{
                                          $name = \App\Http\Controllers\UserTemplateController::slugify($item->name); ?>
                                          <a target="_blank" href="{{URL::to('resume')."/$name/".base64_encode($item->id)}}" class="btn btn-outline-primary btn-sm" type="button">View Resume</a>&nbsp;&nbsp;
                                    <?php   } ?>
                                    @if($page == 'parser')
                                    <a target="_blank" href="{{ url('resume_parsed_data').'/'. $item->id }}" class="btn btn-outline-success btn-sm" type="button">Parsed Data</a>
                                    @endif
                </div>
            </div>
            @endforeach

            @endif
        </div>
    </div>
    <!-- -->
    <!-- -->
</div>
</div>
@endsection
@section('scripts')
@stop