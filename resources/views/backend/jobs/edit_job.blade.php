@extends('backend.master.master')
@section('title','Edit Jobs')
@section('content')
    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
    <script src="{{ url('assets').'/' }}js/validate.js"></script>
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Edit Jobs</h4>
                        <span>You can edit an associate's job below: </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ url('dashboard') }}"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ url('dashboard') }}">
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ url('jobs') }}">
                                Jobs
                            </a>
                        </li>
                        {{-- <li class="breadcrumb-item">
                             <a href="#!">
                                 Edit Testimonial
                             </a>
                         </li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="panel mybg">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Job
                {{-- <span class="panel-desc">Manage Your All Category </span> --}}
            </h3>
        </div>
        <div class="panel-body">

            <form action="{{ url('jobs').'/'.$job->id }}" method="post" id="myid" autocomplete="off"
                  class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{--<div class="container" align="center">--}}
                {{--<div class="form-group row form-material">--}}
                {{-- <label class="col-xl-12 col-md-3 form-control-label">Category Name</label> --}}
                {{--<div class="col-xl-12 col-md-9">--}}
                {{--<img style="height:150px ;width:auto;" src="{{ url('').'/'.$jobtype->image }}" alt="">--}}
                {{--<input type="hidden" name="oldImage" id="oldImage" value="{{$jobtype->image}}">--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="row row-lg">

                    <div class="col-xl-6 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Job Types</label>
                            <div class="col-xl-12 col-md-9">
                                <select name="job_type_id" class="form-control" id="job_type_id">
                                    @foreach($job_types as $job_type)
                                        <option value="{{$job_type->id}}">{{$job_type->type}}</option>
                                    @endforeach

                                </select>

                            </div>
                        </div>

                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Experience From</label>
                            <div class="col-xl-12 col-md-9">
                                {{--<input type="text" class="form-control required" name="experience_year_from"--}}
                                {{--id="experience_year_from"--}}
                                {{--placeholder="Enter Experience From"--}}
                                {{--data-fv-field="github">--}}
                                @php
                                    $already_selected_value = isset($job->experience_year_from)?$job->experience_year_from:"0";
                                    $earliest_year = 20;
                                    print '<select name="experience_year_from" class="form-control">';
                                    foreach (range(0, $earliest_year) as $x) {
                                    print '<option value="'.$x.'"'.($x == $already_selected_value ? ' selected' : '').'>'.$x.'</option>';
                                    }
                                    print '</select>';

                                @endphp
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 form-horizontal">

                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Position</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text" class="form-control required" name="position" id="position"
                                       placeholder="Enter Position" value="{{$job->position}}"
                                       data-fv-field="github">
                            </div>
                        </div>
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Experience To</label>
                            <div class="col-xl-12 col-md-9">
                                {{--<input type="text" class="form-control required" name="experience_year_to"--}}
                                {{--id="experience_year_to"--}}
                                {{--placeholder="Enter Experience From"--}}
                                {{--data-fv-field="github">--}}
                                {{--<div class="form-group">--}}
                                {{--<label for="exampleInputEmail3">Year</label>--}}
                                @php
                                    $already_selected_value = isset($job->experience_year_to)?$job->experience_year_to:"0";
                                    $earliest_year = 20;
                                    print '<select name="experience_year_to" class="form-control">';
                                    foreach (range(0, $earliest_year) as $x) {
                                    print '<option value="'.$x.'"'.($x == $already_selected_value ? ' selected' : '').'>'.$x.'</option>';
                                    }
                                    print '</select>';

                                @endphp
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Role</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text" class="form-control required" value="{{$job->role}}" name="role"
                                       id="role"
                                       placeholder="Enter Role"
                                       data-fv-field="github">
                            </div>
                        </div>

                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">CTC From(LPA)</label>
                            <div class="col-xl-12 col-md-9">
                                {{--<input type="text" class="form-control required" name="package_offer_from"--}}
                                {{--id="package_offer_from"--}}
                                {{--placeholder="Enter CTC Start From"--}}
                                {{--data-fv-field="github">--}}
                                @php
                                    $already_selected_value = isset($job->package_offer_from)?$job->package_offer_from:"2019";
                                    $earliest_year = 80;
                                    print '<select name="package_offer_from" class="form-control">';
                                    foreach (range(0, $earliest_year) as $x) {
                                    print '<option value="'.$x.'"'.($x == $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
                                    }
                                    print '</select>';

                                @endphp
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 form-horizontal">

                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Job Location</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text" class="form-control required" name="job_location" id="job_location"
                                       placeholder="Enter Job Location" value="{{$job->job_location}}"
                                       data-fv-field="github">
                            </div>
                        </div>
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">CTC UpTo(LPA)</label>
                            <div class="col-xl-12 col-md-9">
                                {{--<input type="text" class="form-control required" name="package_offer_to"--}}
                                {{--id="package_offer_to"--}}
                                {{--placeholder="Enter CTC End To"--}}
                                {{--data-fv-field="github">--}}
                                @php
                                    $already_selected_value = isset($job->package_offer_to)?$job->package_offer_to:"2019";
                                    $earliest_year = 80;
                                    print '<select name="package_offer_to" class="form-control">';
                                    foreach (range(0, $earliest_year) as $x) {
                                    print '<option value="'.$x.'"'.($x == $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
                                    }
                                    print '</select>';

                                @endphp
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 form-horizontal">

                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Company</label>
                            <div class="col-xl-12 col-md-9">
                                <select name="company_id" class="form-control" id="company_id">
                                    @foreach($companies as $job_type)
                                        <option {{$job->id == $job->company_id ? 'selected':''}} value="{{$job_type->id}}">{{$job_type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Employment Type</label>
                            <div class="col-xl-12 col-md-9">
                                <select name="employment_type" class="form-control" id="employment_type">
                                    <option {{$job->employment_type == 'Full Time' ? 'selected':''}} value="Full Time">Full Time</option>
                                    <option {{$job->employment_type == 'Part Time' ? 'selected':''}} value="Part Time">Part Time</option>
                                    <option {{$job->employment_type == 'Permanent' ? 'selected':''}} value="Permanent">Permanent</option>
                                    <option {{$job->employment_type == 'Fixed term and contract' ? 'selected':''}} value="Fixed term and contract">Fixed term and contract</option>
                                    <option {{$job->employment_type == 'Apprentices and trainees' ? 'selected':''}} value="Apprentices and trainees">Apprentices and trainees</option>
                                    <option {{$job->employment_type == 'Commission and piece rate' ? 'selected':''}} value="Commission and piece rate">Commission and piece rate</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 form-horizontal">

                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Education Required</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text" class="form-control required" name="education_required"
                                       id="education_required" value="{{$job->education_required}}"
                                       placeholder="Enter Education Required"
                                       data-fv-field="github">
                            </div>
                        </div>
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Skills Required</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text" class="form-control required" name="skills_required"
                                       id="skills_required" value="{{$job->skills_required}}"
                                       placeholder="Enter Skills Required"
                                       data-fv-field="github">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Job Descriptions</label>
                            <div class="col-xl-12 col-md-9">
                    <textarea name="job_description" id="job_description" placeholder="Enter Job Descriptions..."
                              rows="6"
                              class="form-control required">{!! $job->job_description !!}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Functional Area</label>
                            <div class="col-xl-12 col-md-9">
                    <textarea name="functional_area" id="functional_area" placeholder="Enter Functional Area..."
                              rows="6"
                              class="form-control required">{!! $job->functional_area !!}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-material col-xl-12 text-right padding-top-m">
                        <button type="submit" class="btn btn-primary waves-effect waves-classic" id="validateButton1">
                            Submit
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>


@stop