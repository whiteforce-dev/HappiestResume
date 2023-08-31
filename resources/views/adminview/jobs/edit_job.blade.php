@extends('adminview.master')
@section('title','Admin | Manage Jobs')
@section('head')
    {{--    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>--}}
    {{--<script src="{{ url('assets').'/' }}js/validate.js"></script>--}}
@endsection
@section('content')

    <div class="breadcrumb">
        <h1 class="mr-2">Edit Job</h1>
        <ul>
            <li>
                <a href="{{ URL::to('dashboard') }}">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ URL::to('jobs') }}">
                    Jobs
                </a>
            </li>
            {{--<li class="">--}}
            {{--<a href="{{ URL::to('jobs/create') }}">--}}
            {{--Create New Job--}}
            {{--</a>--}}
            {{--</li>--}}
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="col-lg-12 col-md-12 mt-4">
        <div class="card  border-primary">
            <!-- -->
            <div class="card-header bg-primary  text-white">
                <div>Edit Job</div>
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
                    <form action="{{ url('jobs').'/'.$job->id }}" method="post" id="myid" autocomplete="off"
                          class="needs-validation" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Job Type</label>
                                <select name="job_type_id" class="form-control" id="job_type_id">
                                    @foreach($job_types as $job_type)
                                        <option value="{{$job_type->id}}">{{$job_type->type}}</option>
                                    @endforeach

                                </select>
                                <div class="valid-feedback">
                                    Looks good!

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Position</label>

                                <input type="text" class="form-control required" name="position" id="position"
                                       placeholder="Enter Position" value="{{$job->position}}"
                                       data-fv-field="github" required="required">
                                {{--<div class="invalid-feedback">--}}
                                {{--Please choose a username.--}}
                                {{--</div>--}}
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Role</label>
                                <input type="text" class="form-control required" value="{{$job->role}}" name="role"
                                       id="role"
                                       placeholder="Enter Role"
                                       data-fv-field="github" required="required">
                                <div class="valid-feedback">
                                    Looks good!

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Company</label>

                                <select name="company_id" class="form-control" id="company_id">
                                    @foreach($companies as $job_type)
                                        <option {{$job->id == $job->company_id ? 'selected':''}} value="{{$job_type->id}}">{{$job_type->name}}</option>
                                    @endforeach
                                </select>
                                {{--<div class="invalid-feedback">--}}
                                {{--Please choose a username.--}}
                                {{--</div>--}}
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Employment Type</label>

                                <select name="employment_type" class="form-control" id="employment_type">
                                    <option {{$job->employment_type == 'Full Time' ? 'selected':''}} value="Full Time">
                                        Full Time
                                    </option>
                                    <option {{$job->employment_type == 'Part Time' ? 'selected':''}} value="Part Time">
                                        Part Time
                                    </option>
                                    <option {{$job->employment_type == 'Permanent' ? 'selected':''}} value="Permanent">
                                        Permanent
                                    </option>
                                    <option {{$job->employment_type == 'Fixed term and contract' ? 'selected':''}} value="Fixed term and contract">
                                        Fixed term and contract
                                    </option>
                                    <option {{$job->employment_type == 'Apprentices and trainees' ? 'selected':''}} value="Apprentices and trainees">
                                        Apprentices and trainees
                                    </option>
                                    <option {{$job->employment_type == 'Commission and piece rate' ? 'selected':''}} value="Commission and piece rate">
                                        Commission and piece rate
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Job Location</label>
                                <input type="text" class="form-control required" name="job_location" id="job_location"
                                       placeholder="Enter Job Location" value="{{$job->job_location}}"
                                       data-fv-field="github" required="required">
                                <div class="valid-feedback">
                                    Looks good!

                                </div>
                            </div>




                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Experience From</label>
                                @php
                                    $already_selected_value = isset($job->experience_year_from)?$job->experience_year_from:"0";
                                    $earliest_year = 20;
                                    print '<select name="experience_year_from" class="form-control">';
                                    foreach (range(0, $earliest_year) as $x) {
                                    print '<option value="'.$x.'"'.($x == $already_selected_value ? ' selected' : '').'>'.$x.'</option>';
                                    }
                                    print '</select>';

                                @endphp
                                <div class="valid-feedback">
                                    Looks good!

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Experience To</label>
                                @php
                                    $already_selected_value = isset($job->experience_year_to)?$job->experience_year_to:"0";
                                    $earliest_year = 20;
                                    print '<select name="experience_year_to" class="form-control">';
                                    foreach (range(0, $earliest_year) as $x) {
                                    print '<option value="'.$x.'"'.($x == $already_selected_value ? ' selected' : '').'>'.$x.'</option>';
                                    }
                                    print '</select>';

                                @endphp
                                <div class="valid-feedback">
                                    Looks good!

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">CTC From(LPA)</label>
                                @php
                                    $already_selected_value = isset($job->package_offer_from)?$job->package_offer_from:"2019";
                                    $earliest_year = 80;
                                    print '<select name="package_offer_from" class="form-control">';
                                    foreach (range(0, $earliest_year) as $x) {
                                    print '<option value="'.$x.'"'.($x == $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
                                    }
                                    print '</select>';

                                @endphp
                                {{--<div class="invalid-feedback">--}}
                                {{--Please choose a username.--}}
                                {{--</div>--}}
                            </div>

                        </div>
                        <div class="form-row">

                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">CTC Upto(LPA)</label>
                                @php
                                    $already_selected_value = isset($job->package_offer_to)?$job->package_offer_to:"2019";
                                    $earliest_year = 80;
                                    print '<select name="package_offer_to" class="form-control">';
                                    foreach (range(0, $earliest_year) as $x) {
                                    print '<option value="'.$x.'"'.($x == $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
                                    }
                                    print '</select>';

                                @endphp
                                <div class="valid-feedback">
                                    Looks good!

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Education Required</label>

                                <input type="text" class="form-control required" name="education_required"
                                       id="education_required" value="{{$job->education_required}}"
                                       placeholder="Enter Education Required"
                                       data-fv-field="github" required="required">
                                {{--<div class="invalid-feedback">--}}
                                {{--Please choose a username.--}}
                                {{--</div>--}}
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Skills Required</label>

                                <input type="text" class="form-control required" name="skills_required"
                                       id="skills_required" value="{{$job->skills_required}}"
                                       placeholder="Enter Skills Required"
                                       data-fv-field="github" required="required">
                                {{--<div class="invalid-feedback">--}}
                                {{--Please choose a username.--}}
                                {{--</div>--}}
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustomUsername">Job Description</label>

                                <textarea name="job_description" id="job_description"
                                          placeholder="Enter Job Descriptions..."
                                          rows="6"
                                          class="form-control required" required="required">{!! $job->job_description !!}</textarea>
                                {{--<div class="invalid-feedback">--}}
                                {{--Please choose a username.--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustomUsername">Functional Area</label>

                                <textarea name="functional_area" id="functional_area"
                                          placeholder="Enter Job Descriptions..."
                                          rows="6"
                                          class="form-control required" required="required">{!! $job->functional_area !!}</textarea>
                                {{--<div class="invalid-feedback">--}}
                                {{--Please choose a username.--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <!-- -->
            <!-- -->
        </div>
    </div>
@stop