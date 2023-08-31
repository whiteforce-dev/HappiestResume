@extends('backend.master.master')
@section('title','Registered Users')
@section('content')
    <style>
        .divrow {
            padding: 15px 25px;
            background-color: white;
            margin-top: 20px;
        }

        .font-bold {
            font-weight: 700;
        }

        .date {
            font-size: 12px !important;
            font-weight: 600 !important;
            color: #98A0B4 !important;
            position: relative !important;
            line-height: 1 !important;
            margin-right: 10px !important;
            padding-right: 10px !important;
        }

        .btn-sm {
            border-radius: 0 !important;
        }

        .mt-10 {
            margin-top: 10px !important;
        }

        .heading {
            cursor: pointer !important;
            color: #29bbb0 !important;
            font-weight: 500 !important;
        }

        .spanclass {
            font-size: 20px !important;
            color: green !important;
        }

        .smallClass {
            background-color: #e9ebf0;
            padding: 5px 20px;
            margin: 0px 8px;
        }

        .btn-secondary {
            background-color: green !important;
            border-color: green;
        }

        .mydiv {
            background-color: #e5e5e561;
            padding: 20px 25px;
        }

        .form-control {
            font-size: 0.9rem;
            font-weight: 500;
            line-height: 1.5;
            display: block;
            width: 100%;
            height: calc(2.1rem + 2px);
            padding: 0.375rem 0.75rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            color: #2e384d;
            border: 1px solid #dce4ec;
            /*/ border-radius: 0.25rem; /*/
            background-color: #fff;
            background-clip: padding-box;
        }
    </style>
    <div class="panel mybg">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="panel-desc">Search By Fields</span>
            </h3>
        </div>
        <div class="panel-body">
            <form method="get" id="myid" autocomplete="off"
                  class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">
                {{--@csrf--}}
                <div class="row row-lg">
                    <div class="col-xl-6 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Designation</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text"
                                       class="form-control required"
                                       name="designation"
                                       id="designation" value="{{$designation}}"
                                       placeholder="Enter Designation"
                                       data-fv-field="github">
                            </div>
                        </div>
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Location</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text"
                                       class="form-control required"
                                       name="location"
                                       id="location" value="{{$location}}"
                                       placeholder="Enter Location"
                                       data-fv-field="github">
                            </div>
                        </div>


                    </div>
                    <div class="col-xl-6 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Skills</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text"
                                       name="skills"
                                       id="skills" value="{{$skills}}"
                                       placeholder="Skills"
                                       class="form-control required">
                            </div>
                        </div>
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Min Experience(Years)</label>
                            <div class="col-xl-12 col-md-9">
                                <select name="experience" class="form-control" id="">
                                    @for ($i = 0; $i < 15; $i++)
                                        <option {{$experience == $i ? 'selected':''}} value="{{$i}}">{{$i}} Years
                                        </option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-6 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Educational Qualification</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text"
                                       name="education"
                                       id="education" value="{{$education}}"
                                       placeholder="Enter Educational Qualification..."
                                       class="form-control required">
                            </div>
                        </div>


                    </div>
                    <div class="col-xl-6 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Notice Period(Days)</label>
                            <div class="col-xl-12 col-md-9">
                                <select name="notice_period" class="form-control" id="">
                                    <option value="0">Immediate Joining</option>
                                    @for ($i = 1; $i <= 90; $i++)
                                        <option {{$notice_period == $i ? 'selected':''}} value="{{$i}}">{{$i}} Days
                                        </option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    {{--<div class="col-xl-6 form-horizontal">--}}
                    {{--<div class="form-group form-material">--}}
                    {{--<label class="col-xl-12 col-md-3 form-control-label">Max Salary Range (INR)</label>--}}
                    {{--<div class="col-xl-12 col-md-9">--}}
                    {{--<input type="text"--}}
                    {{--name="max_sal"--}}
                    {{--id="max_sal"--}}
                    {{--placeholder="Enter Max Salary Range (INR)"--}}
                    {{--class="form-control required">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="form-group form-material col-xl-12 text-right padding-top-m">
                        <button type="submit" class="btn btn-primary waves-effect waves-classic"
                                id="validateButton1">Search Resume
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel mybg">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="panel-desc">Result Users </span>
            </h3>
        </div>
        <div class="panel-body">
            {{--<table class="table table-striped ">--}}
            {{--<thead class="thead-inverse">--}}
            {{--<tr>--}}
            {{--<th>#</th>--}}
            {{--<th>Image</th>--}}
            {{--<th>Name</th>--}}
            {{--<th>Contact</th>--}}
            {{--<th>Email</th>--}}
            {{--<th>Profile View</th>--}}
            {{--<th>Action</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            @if(count($registrations) > 0)
                @foreach ($registrations as $in => $obj)
                    <div class="divrow">
                        <div class="dropdown">
                            <button type="button" class="btn btn-outline-secondary btn-sm float-right "
                                    data-toggle="dropdown">
                                <span class="feather icon-settings"></span>
                            </button>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" target="_blank"
                                   href="{{ URL::to('resume')."/$obj->name/".base64_encode($obj->id) }}">View
                                    Resume</a>

                                {{--<a class="dropdown-item" onclick="candidate_batchHeader({{ $obj->id }})"--}}
                                {{--href="javascript:void(0);">Batch Header</a>--}}
                                {{--<div class="dropdown-divider"></div>--}}
                                {{--<a class="dropdown-item" onclick="candidate_edit({{ $obj->id }})"--}}
                                {{--href="javascript:void(0);">Edit</a>--}}
                                {{--<a class="dropdown-item" onclick="candidate_delete({{ $obj->id }})"--}}
                                {{--href="javascript:void(0);">Delete</a>--}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                @php
                                    $single = substr("$obj->name", 0, 1);
                                    $percent = 0;
                                 $des_ids = DB::selectOne("SELECT user_id from user_work_exp uw where uw.designation like '%$designation%' and uw.user_id = $obj->id");
                                 $loc_ids = DB::selectOne("SELECT user_id from user_profile up where up.current_location like '%$location%' and up.user_id = $obj->id");
                                 $experience_ids = DB::selectOne("SELECT user_id from user_profile up where up.total_exp <= '$experience' and up.user_id = $obj->id");
                                 $notice_period_ids = DB::selectOne("SELECT user_id from user_profile up where up.notice_period <= '$notice_period' and up.user_id = $obj->id");
                                 $skills_ids = DB::selectOne("SELECT user_id from user_skill us where us.skills like '%$skills%' and us.user_id = $obj->id");
                                 $education_ids = DB::selectOne("SELECT user_id from user_education ue where ue.education_name like '%$education%' and ue.user_id = $obj->id");
                                if(isset($des_ids)){
                                       $percent += 16.66;
                                }
                                if(isset($loc_ids)){
                                       $percent += 16.66;
                                }
                                if(isset($experience_ids)){
                                       $percent += 16.66;
                                }
                                if(isset($notice_period_ids)){
                                       $percent += 16.66;
                                }
                                if(isset($skills_ids)){
                                       $percent += 16.66;
                                }
                                if(isset($education_ids)){
                                       $percent += 16.66;
                                }
                                @endphp

                                <h5 class="heading">
                                    @if(file_exists("public/$obj->image") && isset($obj->image))
                                        <img class="listimage" id="profile_pic"
                                             src="{{URL::to('public').'/'.$obj->image}}" alt="image"
                                             style="border: solid 5px #249991;border-radius: 50%;padding: 5px;margin-top: 10px;width: 100px;height: 100px;">
                                    @else
                                        <img class="listimage"
                                             src="https://via.placeholder.com/100x100?text={{ ucwords($single) }}">
                                    @endif

                                    &nbsp;
                                    {{ ucwords($obj->name) }} |
                                    {{--<small class="blackfont">View Candidate</small>--}}
                                    <a class="blackfont" target="_blank"
                                       href="{{ URL::to('resume')."/$obj->name/".base64_encode($obj->id) }}">View
                                        Resume</a>
                                    |
                                    Profile Match : @if($percent < 50) <b style="color: red;">{{round($percent)}}%</b> @else  <b style="color: green;">{{round($percent)}}%</b> @endif

                                </h5>
                                <hr>
                                <div class="row">
                                    @php
                                        $user_education = $obj->user_education;
                                        if(count($user_education) > 1){
                                         $highest_education = $user_education[count($user_education)-1];
                                        }
                                    @endphp
                                    <div class="col-sm-6">
                                        <small class="font-bold fontsizec">Mobile -</small>
                                        <p class="pc">{{ $obj->contact }}</p>
                                        <small class="font-bold fontsizec">Highest Qualification -</small>
                                        @if(isset($highest_education->education_name))
                                            <img src="{{$highest_education->icon}}" style="width: 25px;" alt="">
                                            <p class="pc"> {{ $highest_education->education_name }}</p>
                                        @else
                                            <p class="pc">-</p>
                                        @endif

                                    </div>
                                    <div class="col-sm-6">
                                        <small class="font-bold fontsizec">Email -</small>
                                        <p class="pc">{{ $obj->email }}</p>
                                        <small class="font-bold fontsizec">Preferred Location -</small>
                                        <p class="pc">{{ isset($obj->user_profile->current_location)?$obj->user_profile->current_location:'-' }}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <small class="font-bold fontsizec">Age : -</small>
                                        <p class="pc">{{ isset($obj->user_profile->age)?$obj->user_profile->age .' Years':'-'}}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <small class="font-bold fontsizec">Gender : -</small>
                                        <p class="pc">{{ isset($obj->user_profile->gender)?$obj->user_profile->gender:'-'}}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <small class="font-bold fontsizec">Interest : -</small>
                                        <p class="pc">{{ isset($obj->user_profile->interest_hobies)?$obj->user_profile->interest_hobies:'-'}}</p>
                                    </div>

                                </div>

                            </div>
                            <div class="col-sm-6">

                                <div class="row mydiv">

                                    <div class="col-sm-6">
                                        <small class="font-bold fontsizec">Company -</small>
                                        <p class="pc">@if(count($obj->user_work_experience)>0) @foreach($obj->user_work_experience as $item) @if($item->is_current_working == 1) {{$item->company}} @endif @endforeach @else
                                                - @endif</p>
                                    </div>
                                    <div class="col-sm-6">
                                        @php
                                            $user_work_experience = json_decode($obj->user_work_experience);
                                        @endphp
                                        <small class="font-bold fontsizec">Designation -</small>
                                        <p class="pc">@if(count($obj->user_work_experience)>0) @foreach($obj->user_work_experience as $item) @if($item->is_current_working == 1) {{$item->designation}} @endif @endforeach @else
                                                - @endif</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <small class="font-bold fontsizec">Current Location -</small>
                                        <p class="pc">{{ isset($obj->user_profile->current_location)?$obj->user_profile->current_location:'-' }}</p>
                                    </div>
                                    <hr>
                                    <div class="col-sm-6">
                                        <small class="font-bold fontsizec">Total Experience -</small>
                                        <p class="pc">{{ isset($obj->user_profile->total_exp)?$obj->user_profile->total_exp:'-' }}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <small class="font-bold fontsizec">Current Salary -</small>
                                        <p class="pc">{{ isset($obj->user_profile->current_ctc)?$obj->user_profile->current_ctc:'-' }}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <small class="font-bold fontsizec">Expected Salary -</small>
                                        <p class="pc">{{ isset($obj->user_profile->current_ctc)?$obj->user_profile->current_ctc:'-' }}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <small class="font-bold fontsizec">Notice Period -</small>
                                        <p class="pc">{{ isset($obj->user_profile->notice_period)?$obj->user_profile->notice_period.' Days':'-' }}</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <small class="font-bold fontsizec">Key Skills -</small>
                                        {{-- <p>{{ isset($obj->skills) ?  $obj->skills : ''}}</p> --}}
                                        <p class="pc">{{ !empty($obj->user_skills->skills) ? $obj->user_skills->skills : ''}}</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <hr>
                        <small class="date">
                            Created at : <span class="mdi mdi-calendar"></span> {{ $obj->changeDate($obj->created_at) }}
                            |
                            Updated at
                            : <span class="mdi mdi-calendar"></span> {{ $obj->changeDate($obj->updated_at) }}</small>

                        <small class="float-right date">Status - Active
                            <button class="btn btn-warning"></button>
                        </small>
                    </div>
                    {{--<tr>--}}
                    {{--<td>{{ ++$in }}</td>--}}
                    {{--<td>--}}
                    {{--@if(file_exists("public/$item->image") && isset($item->image))--}}
                    {{--<img class="global_img" id="profile_pic"--}}
                    {{--src="{{URL::to('public').'/'.$item->image}}" alt="image"--}}
                    {{--style="border: solid 5px #249991;border-radius: 50%;padding: 5px;margin-top: 10px;width: 100px;height: 100px;">--}}
                    {{--@else--}}
                    {{--<img class="global_img" id="profile_pic"--}}
                    {{--src="{{URL::to('public/front').'/'}}images/default-pic.png"--}}
                    {{--alt="image"--}}
                    {{--style="border: solid 5px #249991;border-radius: 50%;padding: 5px;margin-top: 10px;width: 100px;height: 100px;">--}}
                    {{--@endif--}}
                    {{--</td>--}}
                    {{--<td>{{ isset($item->name)? $item->name : '-'}}</td>--}}
                    {{--<td>{{ isset($item->contact)? $item->contact : '-'}}</td>--}}
                    {{--<td>{{ isset($item->email)? $item->email : '-'}}</td>--}}
                    {{--<td>{{ $item->profile_view_count}}</td>--}}
                    {{--                            <td>{{ isset($item->password)? $item->password : '-'}}</td>--}}
                    {{--<td>--}}
                    {{--<a target="_blank"--}}
                    {{--href="{{ URL::to('resume')."/$item->name/".base64_encode($item->id) }}">--}}
                    {{--<button class="btn btn-primary btn-sm">View Resume</button>--}}
                    {{--</a>--}}
                    {{--<a href="{{ url('delete-testimonials').'/'.base64_encode($item->id) }}">--}}
                    {{--<button onclick="return confirm('Are you sure?');" class="btn btn-danger btn-sm">--}}
                    {{--Delete--}}
                    {{--</button>--}}
                    {{--</a>--}}
                    {{--</td>--}}
                    {{--</tr>--}}
                @endforeach
            @endif
            {{--</tbody>--}}
            {{--</table>--}}

        </div>
    </div>
@stop