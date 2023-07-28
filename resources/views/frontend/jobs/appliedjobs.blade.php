@extends('frontend.newfrontmaster')
@section('title','Happiest Resume : Jobs Descriptions')
@section('content')
<section class="job_ser_banner">
    <div class="container ">
        <div class="search_container">
            <div class="banner_search_box">
                {{-- <ul class="nav nav-tabs nav-justified md-tabs amber search_navigation" id="myTabJust" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link active" role="tab" aria-controls="home-just" aria-selected="true">
                            All Jobs You have Applied
                        </a>
                    </li>
                </ul> --}}
            </div>
        </div>
    </div>
</section>

<section class="job_searchbox">
    <div class="container">
        <div class="card job_vancancies">
            <div class="card-header">
                <h5 class="margin0">
                    All The Applied Job Listed Below
                </h5>
            </div>
            <div class="">
                <div class="">
                    <table class="table table-striped table-inverse">
                        <thead class="thead-inverse">
                            <tr>
                                <th>S. No.</th>
                                <th>Position</th>
                                <th>Applied On</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($appliedjobs))
                            @foreach ($appliedjobs as $key=>$item)
                            <tr>
                                <td scope="row">
                                    {{ ++$key }}
                                </td>
                                <td scope="row">
                                    {{ isset($item->job->position)?$item->job->position:'' }}
                                </td>
                                <td scope="row">
                                    {{ isset($item->applied_date)?Carbon\Carbon::parse($item->applied_date)->format('d-M-Y'):'' }}
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    <div class="col-sm-12 text-center center_more_btn">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<script>
    $('#top_navigation_bar').addClass('logowithmenu_bar_fixed');
</script>

@include('frontend.common.newFooter')
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