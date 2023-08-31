@extends('adminview.master')
@section('title','Admin | About Us')
@section('head')
    {{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
    {{--<!-- Chartist -->--}}
    {{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
    {{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<div class="panel mybg">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="panel-desc">Manage Your About Detail Below :</span>
        </h3>
    </div>
    <div class="panel-body">
        <form action="{{ url('about/about-store') }}" method="post" id="myid" autocomplete="off"
            class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="aboutus_id" id="contact_id" value="{{base64_encode($about->id)}}">
            <div class="row row-lg">
                <div class="col-xl-12 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Company Description</label>
                        <div class="col-xl-12 col-md-9">
                            <textarea name="description" id="description" class="form-control required" maxlength="144"
                                placeholder="Enter Full Description Here..." style="resize: none" cols="30"
                                rows="3">{{$about->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Company Vision</label>
                        <div class="col-xl-12 col-md-9">
                            <textarea name="vision" id="vision" class="form-control required" maxlength="144"
                                placeholder="Company's Vision..." style="resize: none" cols="30"
                                rows="3">{{$about->vision}}</textarea>
                        </div>
                    </div>
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Company Mission</label>
                        <div class="col-xl-12 col-md-9">
                            <textarea name="mission" id="mission" class="form-control required" maxlength="144"
                                placeholder="Company Mission..." style="resize: none" cols="30"
                                rows="3">{{$about->mission}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Slogan</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" name="slogan" id="slogan" value="{{$about->slogan}}"
                                placeholder="Enter Email ID" maxlength="200" class="form-control required">
                        </div>
                    </div>
                </div>

                <div class="form-group form-material col-xl-12 text-right padding-top-m">
                    <button type="submit" class="btn btn-primary waves-effect waves-classic" id="validateButton1">
                        Update Detail
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop