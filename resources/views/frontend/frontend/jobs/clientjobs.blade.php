@extends('frontend.frontmaster')
@section('title','Happiest Resume : Hot Jobs')
@section('content')
<section class="job_ser_banner">
    <div class="container ">
        <div class="search_container">
            <div class="banner_search_box">
                <ul class="nav nav-tabs nav-justified md-tabs amber search_navigation" id="myTabJust" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link {{$search_job_type == 0 ? "active":''}}"
                            href="{{URL::to("hot-jobs?search_job_type=0")}}" role="tab" aria-controls="home-just"
                            aria-selected="true">All Jobs</a>
                    </li>
                    @foreach($job_types as $job_type)
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link {{$search_job_type == $job_type->id ? "active" : ''}}"
                            href="{{URL::to("hot-jobs?search_job_type=$job_type->id")}}" role="tab"
                            aria-controls="profile-just" aria-selected="false">{{$job_type->type}}</a>
                    </li>
                    @endforeach
                    {{--<li class="nav-item waves-effect waves-light">--}}
                    {{--<a class="nav-link" href="alljobs.html" role="tab" aria-controls="contact-just"--}}
                    {{--aria-selected="false">Contract Jobs</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item waves-effect waves-light">--}}
                    {{--<a class="nav-link" href="alljobs.html" role="tab" aria-controls="contact-just"--}}
                    {{--aria-selected="false">Walk-in Jobs</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item waves-effect waves-light">--}}
                    {{--<a class="nav-link" href="alljobs.html" role="tab" aria-controls="contact-just"--}}
                    {{--aria-selected="false">Fresher Jobs</a>--}}
                    {{--</li>--}}
                </ul>
                {{--<ul class="list-unstyled search_ul">--}}
                {{--<li><a href="#" target="_blank">All Jobs</a></li>--}}
                {{--@foreach($job_types as $job_type)--}}
                {{--<li class="nav-item waves-effect waves-light">--}}
                {{--<a class="nav-link" href="#" role="tab" aria-controls="profile-just"--}}
                {{--aria-selected="false">{{$job_type->type}}</a>--}}
                {{--</li>--}}
                {{--@endforeach--}}
                {{--<li><a href="alljobs.html" target="_blank">Govt Jobs</a></li>--}}
                {{--<li><a href="alljobs.html" target="_blank">Contract Jobs</a></li>--}}
                {{--<li><a href="alljobs.html" target="_blank">Walk-in Jobs</a></li>--}}
                {{--<li><a href="alljobs.html" target="_blank">Fresher Jobs</a></li>--}}
                {{--</ul>--}}
                <form>
                    <div class="banner_searchbox">
                        <div class="row">
                            <div class="col-md-3 ban_ser_block">
                                <div class="input-group">
                                    <i class="mdi mdi-magnify active"></i>
                                    <input type="text" value="{{$designation_company_sk}}" name="designation_company_sk"
                                        class="form-control br-1" placeholder="Skills, Designations etc"
                                        autocomplete="off">
                                </div>
                            </div>

                            <div class="col-md-3 ban_ser_block">
                                <div class="input-group">
                                    <i class="mdi mdi-map-marker-circle active"></i>
                                    <input type="text" name="location" value="{{$location}}" class="form-control br-1"
                                        placeholder="Search By Location..">
                                </div>
                            </div>

                            <div class="col-md-2 ban_ser_block">
                                <div class="input-group">
                                    <i class="mdi mdi-account-card-details"></i>
                                    <select name="experience" class="form-control" aria-hidden="true">
                                        <option value="">Experience</option>
                                        <option {{$experience == "0" ? "selected" : ''}} value="0">0 Year</option>
                                        <option {{$experience == "1" ? "selected" : ''}} value="1">1 Year</option>
                                        <option {{$experience == "2" ? "selected" : ''}} value="2">2 Year</option>
                                        <option {{$experience == "3" ? "selected" : ''}} value="3">3 Year</option>
                                        <option {{$experience == "4" ? "selected" : ''}} value="4">4 Year</option>
                                        <option {{$experience == "5" ? "selected" : ''}} value="5">5 Year</option>
                                        <option {{$experience == "6" ? "selected" : ''}} value="6">6 Year</option>
                                        <option {{$experience == "7" ? "selected" : ''}} value="7">7 Year</option>
                                        <option {{$experience == "8" ? "selected" : ''}} value="8">8 Year</option>
                                        <option {{$experience == "9" ? "selected" : ''}} value="9">9 Year</option>
                                        <option {{$experience == "10" ? "selected" : ''}} value="10">10 Year
                                        </option>
                                        <option {{$experience == "11" ? "selected" : ''}} value="11">10+ Year
                                        </option>
                                        <option {{$experience == "15" ? "selected" : ''}} value="15>">15+ Year
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 ban_ser_block">
                                <div class="input-group">
                                    <i class="mdi mdi-currency-inr"></i>
                                    <select name="salary" class="form-control" aria-hidden="true">
                                        <option value="">Salary</option>
                                        <option {{$salary == "1" ? "selected":''}} value="1"> &lt; 1 Lac</option>
                                        <option {{$salary == "2" ? "selected":''}} value="2">2</option>
                                        <option {{$salary == "3" ? "selected":''}} value="3">3</option>
                                        <option {{$salary == "4" ? "selected":''}} value="4">4</option>
                                        <option {{$salary == "5" ? "selected":''}} value="5">5</option>
                                        <option {{$salary == "6" ? "selected":''}} value="6">6</option>
                                        <option {{$salary == "7" ? "selected":''}} value="7">7</option>
                                        <option {{$salary == "8" ? "selected":''}} value="8">8</option>
                                        <option {{$salary == "9" ? "selected":''}} value="9">9</option>
                                        <option {{$salary == "10" ? "selected":''}} value="10">10</option>
                                        <option {{$salary == "11" ? "selected":''}} value="11">11</option>
                                        <option {{$salary == "12" ? "selected":''}} value="12">11 to 15</option>
                                        <option {{$salary == "16" ? "selected":''}} value="16">16 to 20</option>
                                        <option {{$salary == "20" ? "selected":''}} value="20">20 Above</option>
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
        <div class="card job_vancancies">
            <div class="card-header">
                <h5 class="margin0">Find job vacancies by company
                    {{--<a type="button"
                           class="text-white btn btn-sm pull-right blue-gradient waves-effect waves-light more_btn margin0"><i
                                    class="mdi mdi-eye pr-1 basic_icon_margin"></i>View All</a>--}}</h5>
            </div>
            <div class="">
                <div class="registered_company_block">
                    <div class="">
                        @foreach($companies as $company)
                        <div class="card regis_comblock">
                            <div class="card-body">
                                @if(isset($company->image))
                                <img src="{{URL::to('html/images/company_logo/company_logo1.png')}}"
                                    alt="{{$company->name}}" class="">
                                @else
                                <img src="{{url("http://13.126.237.21/00_saisun/company_images/white_force.png")}}"
                                    alt="{{$company->name}}" class="">
                                @endif
                                <div class="content">
                                    <h4>{{$company->name}}</h4>
                                    <p>United States, San Diego</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-sm-12 text-center center_more_btn">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-8 pull-left">
                <div class="row">
                    @foreach($jobs as $job)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="job-featured">
                            <a target="_blank" href="{{URL::to('job-description').'/'.base64_encode($job->id)}}">
                                <div class="job_content">
                                    <h5>{{$job->position}}</h5>
                                    <div class="job-desc">
                                        <div class="jd-title"><i class="mdi mdi-briefcase "></i> Experience :
                                            <span style="font-weight: 500"> {{$job->experience_year_from}}
                                                - {{$job->experience_year_to}} Years</span></div>
                                    </div>
                                    <div class="job-desc">
                                        <div class="jd-title"><i class="mdi mdi-currency-inr"></i> Package :
                                            <span style="font-weight: 500"> {{$job->package_offer_from}}
                                                - {{$job->package_offer_to}} LPA</span></div>
                                    </div>
                                    <div class="job-desc">
                                        <div class="jd-title"><i class="mdi mdi-map-marker "></i> Experience :
                                            <span style="font-weight: 500"> {{$job->job_location}}</span></div>
                                    </div>
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

                    {{-- @foreach($jobs as $job)
                    <div class="col-md-6 col-sm-12 col-xs-12 md-clearfix">
                        <div class="job-list job-list_1 post-436 job_listing type-job_listing status-publish has-post-thumbnail hentry job_listing_category-media-news job_listing_type-full-time job_listing_region-virginia job_listing_tag-call-center job_listing_tag-design job_listing_tag-it-company job-type-full-time"
                            data-longitude="36.8116966" data-latitude="-76.0544015">
                            <div class="job-content-wrapper media">
                                <div class="media-left media-middle">
                                    <a href="{{URL::to('job-description').'/'.base64_encode($job->id)}}">
                                        <img class="company_logo"
                                            src="https://demoapus.com/entaro/wp-content/uploads/2017/12/c3.jpg"
                                            alt="Pay Walt"> </a>
                                </div>
                                <div class="media-body media-middle">
                                    <div class="position">
                                        <h3 class="title-job-list"><a
                                                href="{{URL::to('job-description').'/'.base64_encode($job->id)}}">
                                                {{$job->position}}
                                            </a>
                                        </h3>
                                        <div class="company">
                                            <a href="{{URL::to('job-description').'/'.base64_encode($job->id)}}">
                                                <strong class="text-theme">
                                                    Pay Walt
                                                </strong>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="job-metas">
                                        <div class="job-salary">
                                            <i class="text-second fa fa-money" aria-hidden="true"></i>
                                            {{$job->package_offer_from}}
                                            - {{$job->package_offer_to}} LPA
                                        </div>
                                        <div class="location">
                                            <i class="text-second fa fa-map-marker" aria-hidden="true"></i>
                                            {{$job->job_location}}
                                        </div>
                                    </div>
                                    <div class="job-metas">
                                        <div class="job-salary">
                                            <i class="text-second fa fa-money" aria-hidden="true"></i>
                                            {{$job->experience_year_from}}
                                            - {{$job->experience_year_to}} year experience
                                        </div>
                                        <div class="location">
                                            <i class="text-second fa fa-map-marker" aria-hidden="true"></i>
                                            {{$job->job_location}}
                                        </div>
                                    </div>
                                </div>
                                <div class="media-right media-middle">
                                    <div class="job-favorite">
                                        <a href="#apus-favorite-not-login" class="apus-favorite-not-login" data-id="436"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="favorite">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i><span class="hidden">
                                                Add to
                                                favorites
                                            </span>
                                        </a>
                                    </div>
                                    <div class="left-content">
                                        <a class="btn-sm-list btn-list-second" data-toggle="modal"
                                            data-target="#modal_registration">
                                            Apply
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach --}}
                    {{-- {!! $jobs->render() !!} --}}

                </div>
            </div>
            <div class="col-sm-12 col-lg-4 pull-right">
                @if(!session()->has('user'))
                <div class="card new_regis_card">

                    <p class="head-title">New to Happiest Jobs ?</p>
                    <div>
                        <button data-toggle="modal" data-target="#modal_registration"
                            class="margin0 btn btn-warning waves-effect waves-light">Register With us
                        </button>
                    </div>
                    <hr>
                    <p>We will consider your Profile for future Jobs. </p>
                    <div>
                        <button data-toggle="modal" data-target="#modal_registration"
                            class="margin0 btn btn-success waves-effect waves-light">Apply Now
                        </button>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
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
                        <input type="password" name="password" id="materialRegisterFormPassword" class="form-control"
                            aria-describedby="materialRegisterFormPasswordHelpBlock">
                        <label for="materialRegisterFormPassword" class="">Password</label>
                    </div>
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