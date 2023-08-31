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
            <a href="{{ URL::to('jobs') }}">
                All Jobs
            </a>
        </li>
    </ul>
</div>

<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script>
    $(function() {
       $( "#start_date" ).datepicker({
        dateFormat: 'dd-mm-yy', 
       });
       $( "#end_date" ).datepicker({
        dateFormat: 'dd-mm-yy', 
       });
    });
</script>

<div class="separator-breadcrumb border-top"></div>
<div class="col-lg-12 col-md-12 mt-4">
    <div class="card text-center border-primary">
        <!-- -->
        <div class="card-header bg-primary text-white">
            <h3 class="text-white">Manage All Candidates</h3>
            <h6 class="text-white">
                ({{$job->position}})
            </h6>
            {{-- <div class="dropdown dropleft text-right w-50 float-right">
                <form class="mg-b-20" action="{{URL::to('candidatereport')}}" method="get" id="myform">
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-4">
                    <input class="form-control form-control-rounded ng-untouched ng-pristine ng-invalid"
                        formcontrolname="start" name="start_date" id="start_date"
                        value="{{ isset($start_date)?$start_date:'' }}" placeholder="Start Date" type="text" required>
                </div>
                <div class="col-sm-4">

                    <input class="form-control form-control-rounded ng-pristine ng-valid ng-touched"
                        formcontrolname="end" name="end_date" id="end_date" required placeholder="End Date"
                        value="{{ isset($end_date)?$end_date:'' }}" type="text" autocomplete="off">
                </div>
                <div class="col-sm-3 text-left">
                    <button type="submit" class="btn btn-success btn-hover btn-block btn-rounded">SEARCH</button>
                </div>
            </div>
            </form>
        </div> --}}
    </div>
    <script>
        function change(){
                    document.getElementById("myform").submit();
                }
    </script>
    <div class="card-body">
        <div class="ul-widget5">
            {{-- {!! $registrations->render() !!} --}}
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
                <div class="ul-widget-s5__section"><a class="ul-widget4__title" href="#">Profile View Count
                        : {{ $item->profile_view_count}}</a>
                    <p class="ul-widget-s5__desc"><span class="badge badge-info">Created At :
                            {{ \Carbon\Carbon::parse($item->created_at)->format('d-F-Y h:i A')}}</span>
                    </p>

                </div>
                <div class="ul-widget-s5__content">
                    <div class="ul-widget-s5__progress">
                        <div class="ul-widget-s5__stats"><span>Profile Complete :
                                <strong>{{$item->profile_complete_percent}}
                                    %</strong></span><strong>{{$item->contact}}</strong>
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
                    @php
                    $name = \App\Http\Controllers\UserTemplateController::slugify($item->name);
                    @endphp
                    <a target="_blank" href="{{URL::to('resume')."/$name/".base64_encode($item->id)}}"
                        class="btn btn-outline-primary btn-sm" type="button">View Resume</a>
                </div>
            </div>
            @endforeach
            @else
            <div class="container">
                No Records Found !!
            </div>
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