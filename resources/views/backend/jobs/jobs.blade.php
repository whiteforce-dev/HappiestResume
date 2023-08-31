@extends('backend.master.master')
@section('title','Manage Jobs')
@section('content')

    {{--<div class="panel mybg">--}}
    {{--<div class="panel-heading">--}}
    {{--<h3 class="panel-title">--}}
    {{--<span class="panel-desc">Add Jobs </span>--}}
    {{--</h3>--}}
    {{--</div>--}}
    {{--<div class="panel-body">--}}
    {{--@if (count($errors) > 0)--}}
    {{--<div class = "alert alert-danger">--}}
    {{--<ul>--}}
    {{--@foreach ($errors->all() as $error)--}}
    {{--<li>{{ $error }}</li>--}}
    {{--@endforeach--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--@endif--}}
    {{-- <form action="{{ URL::to('Job Types/Job Types-store') }}" method="post" id="myid" autocomplete="off" --}}
    {{--<form action="{{ URL::to('jobtypes') }}" method="post" id="myid" autocomplete="off"--}}
    {{--class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">--}}
    {{--@csrf--}}
    {{--<div class="row row-lg">--}}
    {{--<div class="col-xl-6 form-horizontal">--}}
    {{--<div class="form-group form-material">--}}
    {{--<label class="col-xl-12 col-md-3 form-control-label">Job Type</label>--}}
    {{--<div class="col-xl-12 col-md-9">--}}
    {{--<input type="text" class="form-control required" name="type" id="type"--}}
    {{--placeholder="Enter Job Type" value="{{old('type')}}" data-fv-field="github">--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group form-material">--}}
    {{--<label class="col-xl-12 col-md-3 form-control-label">Designation</label>--}}
    {{--<div class="col-xl-12 col-md-9">--}}
    {{--<input type="text" name="designation" id="designation"--}}
    {{--placeholder="Designation of our associate" class="form-control required">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group form-material">--}}
    {{--<label class="col-xl-12 col-md-3 form-control-label">Status</label>--}}
    {{--<div class="col-xl-12 col-md-9">--}}
    {{--<select type="text" name="is_active" id="is_active" class="form-control required">--}}
    {{--<option value="1">Active</option>--}}
    {{--<option value="0">In-Active</option>--}}
    {{--</select>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group form-material">--}}
    {{--<label class="col-xl-12 col-md-3 form-control-label">Profile Picture</label>--}}
    {{--<div class="col-xl-12 col-md-9">--}}
    {{--<input type="file" name="image" id="image" class="form-control required">--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--<div class="col-xl-6 form-horizontal">--}}
    {{--<div class="form-group form-material">--}}
    {{--<label class="col-xl-12 col-md-3 form-control-label">Comments</label>--}}
    {{--<div class="col-xl-12 col-md-9">--}}
    {{--<textarea name="comment" id="comment" placeholder="Associate Comments Here..." rows="5"--}}
    {{--class="form-control required"></textarea>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}

    {{--<div class="form-group form-material col-xl-12 text-right padding-top-m">--}}
    {{--<button type="submit" class="btn btn-primary waves-effect waves-classic" id="validateButton1">--}}
    {{--Submit--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Jobs List</h4>
                        {{--<span>You can create an associate's job below: </span>--}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ URL::to('dashboard') }}"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ URL::to('dashboard') }}">
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ URL::to('jobs') }}">
                                Jobs
                            </a>
                        </li>
                         <li class="breadcrumb-item">
                             <a href="{{ URL::to('jobs/create') }}">
                                 Create New Job
                             </a>
                         </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="panel mybg">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="panel-desc">Manage Your All Jobs | <a href="{{URL::to('jobs/create')}}">Create Job</a></span>
            </h3>

        </div>
        <div class="panel-body">
            <table class="table table-striped ">
                <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Information</th>
                    <th>Other Information</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($jobs) > 0)
                    @foreach ($jobs as $in => $item)
                        <tr>
                            <td>{{ ++$in }}</td>
                            <td>
                                <strong>Position : </strong> {{ isset($item->position)? $item->position : '-' }}
                                <br>
                                <strong>Experience
                                    : </strong> {{ $item->experience_year_from ."-".$item->experience_year_to  }} Years
                                <br>
                                <strong>CTC: </strong> {{ $item->package_offer_from ."-".$item->package_offer_to}} LPA

                            </td>
                            <td>
                                <strong>Location: </strong> {{ $item->job_location}}
                                <br>
                                <strong>Job Description: </strong> {!! $item->job_description !!}
                                <br>
                                <strong>Skills Required: </strong> {{ $item->skills_required}}
                                <br>
                            </td>
                            <td>
                                {{-- <a href="{{ URL::to('edit-jobtypes').'/'.base64_encode($item->id) }}"> --}}
                                {{-- <a href="{{ URL::to('jobtypes').'/'.$item->id.'/edit' }}" onclick="get_confirmation();">
                                --}}
                                <a onclick='is_edit("{{ URL::to('jobs').'/'.$item->id.'/edit' }}", "Jobs");'>
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                </a>
                                {{-- <a href="{{ URL::to('delete-jobtypes').'/'.base64_encode($item->id) }}"> --}}
                                {{-- <a href="{{ URL::to('jobtypes').'/'.$item->id }}">
                                <button onclick="return confirm('Are you sure?');" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                                </a> --}}

                                <a class="btn btn-danger btn-sm"
                                   onclick='is_delete("{{ URL::to('jobs').'/'.$item->id.'' }}", "Jobs");'>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop