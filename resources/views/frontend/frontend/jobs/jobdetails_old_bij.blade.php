@extends('frontend.frontmaster')
@section('title','Happiest Resume : Jobs Descriptions')
@section('content')
<section class="job_ser_banner">
    <div class="container ">
        <div class="search_container">
            <div class="banner_search_box">
                <ul class="nav nav-tabs nav-justified md-tabs amber search_navigation" id="myTabJust" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link active" href="{{URL::to("hot-jobs?search_job_type=0")}}" role="tab"
                            aria-controls="home-just" aria-selected="true">All Jobs</a>
                    </li>
                    @foreach($job_types as $job_type)
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link" href="{{URL::to("hot-jobs?search_job_type=$job_type->id")}}" role="tab"
                            aria-controls="profile-just" aria-selected="false">{{$job_type->type}}</a>
                    </li>
                    @endforeach
                </ul>
                <form action="{{URL::to('hot-jobs')}}" method="get">
                    <div class="banner_searchbox">
                        <div class="row">
                            <div class="col-md-3 ban_ser_block">
                                <div class="input-group">
                                    <i class="mdi mdi-magnify active"></i>
                                    <input type="text" name="designation_company_sk" class="form-control br-1"
                                        placeholder="Skills, Designations etc" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-3 ban_ser_block">
                                <div class="input-group">
                                    <i class="mdi mdi-map-marker-circle active"></i>
                                    <input type="text" name="location" class="form-control br-1"
                                        placeholder="Search By Location..">
                                </div>
                            </div>

                            <div class="col-md-2 ban_ser_block">
                                <div class="input-group">
                                    <i class="mdi mdi-account-card-details"></i>
                                    <select name="experience" class="form-control" aria-hidden="true">
                                        <option value="">Experience</option>
                                        <option value="0">0 Year</option>
                                        <option value="1">1 Year</option>
                                        <option value="2">2 Year</option>
                                        <option value="3">3 Year</option>
                                        <option value="4">4 Year</option>
                                        <option value="5">5 Year</option>
                                        <option value="6">6 Year</option>
                                        <option value="7">7 Year</option>
                                        <option value="8">8 Year</option>
                                        <option value="9">9 Year</option>
                                        <option value="10">10 Year
                                        </option>
                                        <option value="11">10+ Year
                                        </option>
                                        <option value="15>">15+ Year
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 ban_ser_block">
                                <div class="input-group">
                                    <i class="mdi mdi-currency-inr"></i>
                                    <select name="salary" class="form-control" aria-hidden="true">
                                        <option value="">Salary</option>
                                        <option value="1"> &lt; 1 Lac</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">11 to 15</option>
                                        <option value="16">16 to 20</option>
                                        <option value="20">20 Above</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 ban_ser_btnbox">
                                <div class="input-group">
                                    <button type="submit" class="btn btn-primary banner_search_btn ban_serbtn">Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<section class="job_searchbox">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-8 pull-left">
                <div class="jobs-details">
                    <div class="job-featured">
                        <div class="job_content">
                            <h5>{{$job->position}}</h5>
                            <ul class="keywords mb-2">
                                <li>
                                    <span><i class="mdi mdi-briefcase "></i></span>{{$job->experience_year_from}}
                                    - {{$job->experience_year_to}} Years
                                </li>
                                <li>
                                    <span> <i class="mdi mdi-currency-inr"></i></span>{{$job->package_offer_from}}
                                    - {{$job->package_offer_to}} LPA
                                </li>
                                <li><span> <i class="mdi mdi-map-marker"></i></span>{{ ($job->job_location) }}
                                </li>
                            </ul>

                            @php
                            $start = new \Carbon\Carbon("$job->created_at");
                            $end = new \Carbon\Carbon();
                            @endphp
                            <div class="job-posted bg-success float-left">Posted
                                <b>{{$start->diff($end)->format('%d')}}
                                    days</b> Ago
                            </div>
                        </div>
                    </div>
                    <div class="job-featured">
                        <div class="job_content">
                            <div class="job-description">
                                <div class="jd-title">Job Description :</div>
                                {!! $job->job_description !!}
                            </div>
                        </div>
                    </div>
                    <div class="job-featured">
                        <div class="job_content">
                            <div class="job-desc">
                                <div class="jd-title">Job Details :</div>
                                <ul class="list-unstyled jobs-details-ul">
                                    <li>Position Code</li>
                                    <li>{!! isset($job->hh_id)?"SS_JOB$job->hh_id" : "SS_JOB_$job->id" !!}</li>
                                    <li>Role</li>
                                    <li>{!! $job->role !!}</li>

                                    @if(isset($job->industry_type))
                                    <li>Industry Type</li>
                                    <li>{!! $job->industry_type !!}</li>
                                    @endif

                                    @if(isset($job->functional_area))
                                    <li>Functional Area</li>
                                    <li>{!! $job->functional_area !!}</li>
                                    @endif


                                    @if(isset($job->employment_type))
                                    <li>Employment Type</li>
                                    <li>{!! $job->employment_type !!}</li>
                                    @endif

                                    @if(isset($job->role_category))
                                    <li>Role Category</li>
                                    <li>{!! $job->role_category !!}</li>
                                    @endif

                                    @if(isset($job->education_required))
                                    <li>Education</li>
                                    <li>{!! $job->education_required !!}</li>
                                    @endif

                                    @if(isset($job->skills_required))
                                    <li>Required Skills</li>
                                    <li>{!! $job->skills_required !!}</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="job-featured">
                        <div class="job_content">
                            <div class="job-description">
                                <div class="jd-title">About Company :</div>
                                {!! isset($job->company->about)?$job->company->about:'-' !!}
                                <div class="jd-title mt-3">Company Info :</div>
                                <ul class="list-unstyled jobs-details-ul">
                                    <li>Website</li>
                                    <li>
                                        <a target="_blank"
                                            href="{!! isset($job->company->website)?$job->company->website:'#' !!}"> {!!
                                            isset($job->company->website)?$job->company->website:'-' !!}
                                        </a></li>
                                    <li>Stabled</li>
                                    <li>{!! isset($job->company->start_year)?$job->company->start_year:'-' !!}</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="job-featured">
                        <div class="job_content">
                            <div class="job-description">
                                <div class="jd-title">HR Information :</div>
                                <ul class="list-unstyled jobs-details-ul">
                                    <li>Name</li>
                                    <li>{!! isset($job->hr_name)?$job->hr_name:'-' !!}</li>
                                    <li>Email</li>
                                    <li>{!! isset($job->hr_email)?$job->hr_email:'-' !!}</li>
                                    <li>Contact</li>
                                    <li>{!! isset($job->hr_contact)?$job->hr_contact:'-' !!}</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 pull-right">
                <div class="card new_regis_card">
                    @if(!session()->has('user'))
                    <p class="head-title">New to Happiest Jobs ?</p>
                    <div>
                        <button data-toggle="modal" data-target="#modal_registration"
                            class="margin0 btn btn-warning waves-effect waves-light">Register With us
                        </button>
                    </div>
                    <hr>
                    <p>We will consider your Profile for future Jobs. </p>
                    <div>
                        <button data-toggle="modal" data-target="#modal_registration" type="button"
                            class="margin0 btn btn-success waves-effect waves-light">Apply
                            Now
                        </button>
                    </div>
                    @else
                    @php
                    $check_applied = \App\AppliedJob::where(['job_id' => $job->id, 'user_id' =>
                    session('user')->id])->first();
                    @endphp
                    <p>We will consider your Profile for future Jobs. </p>
                    <div>
                        <button onclick="apply_jobs('{{$job->id}}','{{session('user')->id}}')" id="{{$job->id}}"
                            type="button"
                            class="margin0 btn btn-success waves-effect waves-light">@if(isset($check_applied))
                            Applied @else Apply Job @endif
                        </button>
                    </div>
                    @endif

                </div>
                <script type="text/javascript">
                    function apply_jobs(job_id, user_id) {
//                            debugger;
                            $.get('{{ URL::to('apply_job') }}', {job_id: job_id, user_id: user_id}, function (data) {
                                console.log(data);
                                if (data == 'applied') {
                                    SnackBar({
                                        message: "You have successful applied for this job",
                                        status: "success",
                                        fixed: true,
                                        timeout: 7000
                                    });
                                    $("#" + job_id).attr("disabled", true);
                                    $("#" + job_id).html("Applied");
                                } else {
                                    SnackBar({
                                        message: "You have already applied for this job",
                                        status: "danger",
                                        fixed: true,
                                        timeout: 7000
                                    });
                                }
                            });
                        }
                </script>
                <div class="card new_regis_card mt-4">
                    <p class="head-title mb-0">Share this job for social media</p>
                    <hr>
                    <div class="share-btn-box">
                        @php
                        $page_url = Request::fullUrl();
                        @endphp
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{$page_url}}&title=Happiest+Jobs"
                            target="_blank" class="btn-floating btn-sm btn-fb waves-effect waves-light" type="button"
                            role="button"><i class="mdi mdi-facebook"></i></a>
                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{$page_url}}&amp;title=my share text&amp;summary=dit is de linkedin summary"
                            target="_blank" class="btn-floating btn-sm btn-li waves-effect waves-light" type="button"
                            role="button"><i class="mdi mdi-linkedin"></i></a>
                        <a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{$page_url}}"
                            target="_blank" class="btn-floating btn-sm btn-tw waves-effect waves-light" type="button"
                            role="button"><i class="mdi mdi-twitter"></i></a>
                        <a href="https://wa.me/?text={{$page_url}}" target="_blank"
                            class="btn-floating btn-sm btn-sm btn-whatsapp waves-effect waves-light" type="button"
                            role="button"><i class="mdi mdi-whatsapp"></i></a></div>
                </div>
            </div>
            @if(count($related_jobs)>0)
            <div class="col-sm-12">
                <div class="card job_vancancies">
                    <div class="card-header">
                        <h5 class="margin0">Similar Jobs<a href="{{URL::to('hot-jobs')}}" type="button"
                                class="text-white btn btn-sm pull-right blue-gradient waves-effect waves-light more_btn margin0"><i
                                    class="mdi mdi-eye pr-1 basic_icon_margin"></i>View All</a></h5>
                    </div>
                    <div class="">
                        <div class="similor_jobs_block ">
                            <div class="row">
                                @foreach($related_jobs as $job)
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="job-featured">
                                        <a target="_blank"
                                            href="{{URL::to('job-description').'/'.base64_encode($job->id)}}">
                                            <div class="job_content">
                                                <h5>{{$job->position}}</h5>
                                                <ul class="keywords">
                                                    <li>
                                                        <span><i
                                                                class="mdi mdi-briefcase "></i></span>{{$job->experience_year_from}}
                                                        - {{$job->experience_year_to}} Years
                                                    </li>
                                                    <li>
                                                        <span> <i
                                                                class="mdi mdi-currency-inr"></i></span>{{$job->package_offer_from}}
                                                        - {{$job->package_offer_to}} LPA
                                                    </li>
                                                    <li>
                                                        <span> <i class="mdi mdi-map-marker"></i></span>{!!
                                                        $job->job_location !!}
                                                    </li>
                                                </ul>
                                                <div class="job-desc">
                                                    <div class="jd-title">Job Description :</div>
                                                    <p>{!! substr("$job->job_description",50) !!}</p>
                                                </div>
                                                @php
                                                $start = new \Carbon\Carbon("$job->created_at");
                                                $end = new \Carbon\Carbon();
                                                @endphp
                                                <div class="job-posted bg-success">Posted
                                                    <b>{{$start->diff($end)->format('%d')}} days</b> Ago
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
                                {{--<div class="job-featured">--}}
                                {{--<a href="#">--}}
                                {{--<div class="job_content">--}}
                                {{--<h5>Sr. Physical Design Engineer</h5>--}}
                                {{--<ul class="keywords">--}}
                                {{--<li><span><i class="mdi mdi-briefcase "></i></span>3 - 8--}}
                                {{--Years--}}
                                {{--</li>--}}
                                {{--<li><span> <i class="mdi mdi-currency-inr"></i></span>7--}}
                                {{-----}}
                                {{--Lacs--}}
                                {{--</li>--}}
                                {{--<li><span> <i class="mdi mdi-map-marker"></i></span>Kodihalli--}}
                                {{--</li>--}}
                                {{--</ul>--}}
                                {{--<div class="job-desc">--}}
                                {{--<div class="jd-title">Job Description :</div>--}}
                                {{--<p>ABC Company Inc. seeks a full-time mid-level software--}}
                                {{--engineer to develop--}}
                                {{--in-house tools.</p>--}}
                                {{--</div>--}}
                                {{--<div class="job-posted bg-success">Posted <b>130 days</b>--}}
                                {{--Ago--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</a>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
<script>
    $('#top_navigation_bar').addClass('logowithmenu_bar_fixed');
</script>

@include('frontend.common.footer')
<div class="modal fade" id="modal_login2" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content m_login">
            <div class="modal-header m_header">
                <h5 class="modal-title"><b>log in</b></h5>
                <button type="button" class="close login_close" data-dismiss="modal">×</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_registration" role="dialog" aria-hidden="true">
    <form action="{{url('registration')}}" method="post" autocomplete="off">
        <div class="modal-dialog">
            <div class="modal-content m_login">
                <div class="modal-header m_header">
                    <h5 class="modal-title"><b>Registration</b></h5>
                    <button type="button" class="close m_close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">

                    @csrf
                    <div class="md-form mt-0">
                        <input type="text" name="name" id="name" class="form-control" autocomplete="off" required>
                        <label for="name" class="">Name</label>
                    </div>
                    <div class="md-form mt-0">
                        <input type="email" name="reg_email" id="reg_email" class="form-control"
                            autocomplete="new-password" required>
                        <label for="email" class="">Email Address</label>
                    </div>
                    <div class="md-form mt-0">
                        <input type="text" name="contact" id="contact" class="form-control" autocomplete="off" required>
                        <label for="contact" class="">Contact no.</label>
                    </div>
                    <div class="md-form mt-0">
                        <input type="password" name="password" id="password" class="form-control" autocomplete="off"
                            required>
                        <label for="password" class="">Password</label>
                    </div>
                    <div class="md-form mt-0">
                        <input type="password" name="cpassword" id="cpassword" class="form-control" autocomplete="off"
                            required>
                        <label for="cpassword" class="">Confirm Password</label>
                    </div>
                    <button typeof="submit" id="btnsubmit_regis1"
                        class="btn btn_login btn-primary btn-lg btn-block req_btn text-white waves-effect waves-light">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal fade" id="modal_logout" role="dialog" aria-hidden="true">
    <form action="{{url('user-logout')}}" method="post">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content m_login">
                <div class="modal-header m_header">
                    {{--<h5 class="modal-title"><b>Signoff</b></h5>--}}
                    <button type="button" class="close m_close " data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <h5 align="center">Are Sure You Want To Logout?</h5>
                    <br>
                    <button typeof="submit" id="btnsubmit_regis"
                        class="btn btn_login btn-primary btn-xs btn-block req_btn text-white waves-effect waves-light">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="modal fade" id="forgot_password" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content m_login">
            <div class="modal-header m_header">
                <h5 class="modal-title"><b>Forgot Password ?</b></h5>
                <button type="button" class="close m_close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <div class="md-form mt-3">
                    <input type="email" name="email" id="forgotEmail" class="form-control">
                    <label for="forgotEmail" class="">enter e-mail</label>
                </div>
                <button id="btnsubmit_forgot" type="button"
                    class="btn btn-primary btn-lg btn-block req_btn text-white">Submit
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade right" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    data-backdrop="true" style="display: none;" aria-hidden="true">
    <form action="{{url('user-login')}}" method="post">
        @csrf
        <div class="modal-dialog modal-full-height modal-right modal-notify login_modal" role="document">
            <div class="modal-content m_login">
                <div class="modal-header m_header">
                    <h5 class="modal-title">
                        <b>
                            Login Panel
                        </b>
                    </h5>
                    <button type="button" class="close login_close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <i class="fas fa-check mdi mdi-check fa-4x mb-3 animated rotateIn"></i>
                    </div>
                    <div class="form-group login_social_btnbox">

                        <a target="_blank" href="{{url('redirect/facebook')}}"
                            class="waves-effect waves-light login_btn_facebook login_btn">
                            <i class="mdi mdi-facebook"></i>
                            Log in with Facebook
                        </a>
                        <a target="_blank" href="{{url('redirect/google')}}"
                            class="login_btn_google_plus login_btn waves-effect waves-light">
                            <i class="mdi mdi-google-plus"></i>
                            Log in with Google+
                        </a>
                        {{--<a target="_blank" href="{{url('redirect/linkedin')}}"--}}
                        {{--class="login_btn_facebook login_btn waves-effect waves-light">--}}
                        {{--<i class="mdi mdi-linkedin"></i>--}}
                        {{--Log in with Linkedin--}}
                        {{--</a>--}}
                    </div>
                    <div class="form-group">
                        <div class="or_border">OR</div>
                    </div>
                    <div class="md-form mt-0">
                        <input type="email" name="email" id="materialRegisterFormEmail" class="form-control">
                        <label for="materialRegisterFormEmail" class="">Username / Email ID</label>
                    </div>
                    <div class="md-form">
                        <input type="password" name="password" id="materialRegisterFormPassword11" class="form-control"
                            aria-describedby="materialRegisterFormPasswordHelpBlock">
                        <label for="materialRegisterFormPassword" class="">Password</label>
                    </div>
                    {{--<a class="forgot_txt" data-dismiss="modal" href="#" data-toggle="modal"--}}
                    {{--data-target="#forgot_password">Forgot Password?</a>--}}
                    <button id="btnlogin" type="submit"
                        class="mt-3 btn btn_login btn-primary btn-lg btn-block req_btn text-white waves-effect waves-light">
                        Login
                    </button>

                    <br>
                    <div class="clear text-center pt-10">

                        @if( count($errors) > 0)
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">{{ trans('labels.Error') }}:</span>
                            {{ $error }}
                        </div>
                        @endforeach
                        @endif

                        @if(Session::has('loginError'))
                        <div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">{{ trans('labels.Error') }}:</span>
                            {!! session('loginError') !!}
                        </div>
                        @endif
                        {{--<a class="btn btn-dark btn-lg btn-block no-border mt-15 mb-15" href="#"--}}
                        {{--data-bg-color="#3b5998">Login with facebook</a>--}}
                        {{--<a class="btn btn-dark btn-lg btn-block no-border" href="#"--}}
                        {{--data-bg-color="#00acee">Login with twitter</a>--}}
                    </div>
                </div>

                <div class="modal-footer">
                    <p>Don’t have an account?
                        <a data-dismiss="modal" href="#" class="modal_footer_a" data-toggle="modal"
                            data-target="#modal_registration">Sign up</a></p>
                </div>
            </div>
        </div>
    </form>
</div>
@stop