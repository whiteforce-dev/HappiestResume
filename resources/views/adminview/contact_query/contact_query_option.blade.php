@extends('adminview.master')
@section('title','Admin | Contact Queries')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">Choose Any One Website</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <!-- <li>
            <a href="{{url('staffs')}}">
                Staff Members
            </a>
        </li>
        <li>
            <a href="{{url('staffs/create')}}">
                Add New Staff Member
            </a>
        </li> -->
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12" style="margin-top: 64px;">
    <div class="card  border-primary">
        <!-- -->
        <!-- <div class="card-header bg-primary  text-white">
            <div>Choose Any One Website</div>
        </div> -->
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
        <div class="row col-md-12">

              <div class="card bg-success col-md-5" style="margin-left: 51px; background: linear-gradient(to right, #7f00ff, #e100ff);">
              <a href="{{ url('contact_queries'.'/'.'whiteforce') }}">
                <div class="card-body text-center" style="color:white;font-size: 20px;font-weight: bold;">
                  <p class="card-text" style="padding: 63px;">White force Queries</p>
                </div></a>
              </div>

              <div class="col-md-1"></div>

              <div class="card bg-success col-md-5" style="background: linear-gradient(to right, #ffc109, #fffdb7);">
                <a href="{{ url('contact_queries_happiest') }}">
                  <div class="card-body text-center" style="color:black;font-size: 20px;font-weight: bold;">
                      <p class="card-text" style="padding: 63px;">Happiest Resume Queries</p>
                  </div> </a>
                </div>
              <p></p>
              <div class="card bg-success col-md-5" style="background: linear-gradient(to right, #2ce936, #95ffac); margin-top: 20px; margin-left: 50px">
              <a href="{{ url('contact_queries'.'/'.'rajpalhomes') }}">
                <div class="card-body text-center" style="color:black;font-size: 20px;font-weight: bold;">
                    <p class="card-text" style="padding: 63px;">Rajpal Homes Queries</p>
                </div> </a>
              </div>
              <p></p>
              &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;
              <div class="card bg-success col-md-5" style="background: linear-gradient(to right, #ff5c5c, #4b84ff); margin-top: 20px;">
              <a href="{{ url('contact_queries'.'/'.'rajpalgroup') }}">
                <div class="card-body text-center" style="color:black;font-size: 20px;font-weight: bold;">
                    <p class="card-text" style="padding: 63px;">Rajpal Group Queries</p>
                </div> </a>
              </div>
              &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp;
              &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp;
              &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;   &nbsp;
              <div class="card bg-success col-md-5" style="  background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6); margin-top: 20px;">
              <a href="{{ url('contact_queries'.'/'.'payroll') }}">
                <div class="card-body text-center" style="color:black;font-size: 20px;font-weight: bold;">
                    <p class="card-text" style="padding: 63px;">Payroll Queries</p>
                </div> </a>
              </div>

              </div>
            </div>
        </div>
        <!-- -->
        <!-- -->
    </div>
</div>
@endsection
@section('scripts')
@stop
