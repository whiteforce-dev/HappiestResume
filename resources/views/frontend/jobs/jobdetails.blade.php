@extends('frontend.frontmaster')
@section('title', 'Happiest Resume : Jobs Descriptions')
@section('content')
    <style>
        .full_width_inner {
            position: static;
        }

        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        font,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td {
            background: transparent;
            border: 0;
            margin: 0;
            padding: 0;
            vertical-align: baseline;
            outline: 0;
        }

        div.section {
            position: relative;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .mpc-row {
            display: block;
        }

        .vc_row {
            margin-left: -15px;
            margin-right: -15px;
        }

        .wpb_row,
        .wpb_content_element,
        ul.wpb_thumbnails-fluid>li,
        .last_toggle_el_margin,
        .wpb_button {
            margin-bottom: 0 !important;
        }

        .container_inner,
        .boxed .section .section_inner,
        .grid_section .section_inner {
            width: 1140px;
        }

        .boxed .section .section_inner,
        .grid_section .section_inner {
            width: 1100px;
            margin: 0 auto;
            position: relative;
            z-index: 20;
        }

        .vc_column_container>.vc_column-inner {
            box-sizing: border-box;
            padding-left: 15px;
            padding-right: 15px;
            width: 100%;
        }

        .spacer-5efade61f3fd1 {
            height: 150px;
        }

        .wpb_button,
        .wpb_content_element,
        ul.wpb_thumbnails-fluid>li {
            margin-bottom: 35px;
        }

        .wpb_row,
        .wpb_content_element,
        ul.wpb_thumbnails-fluid>li,
        .last_toggle_el_margin,
        .wpb_button {
            margin-bottom: 0 !important;
        }

        #careers-detail-box {
            margin-top: 0px;
        }

        #content .wpb_alert p:last-child,
        #content .wpb_text_column :last-child,
        #content .wpb_text_column p:last-child,
        .vc_message_box>p:last-child,
        .wpb_alert p:last-child,
        .wpb_text_column :last-child,
        .wpb_text_column p:last-child {
            margin-bottom: 0;
        }

        #careers-detail-box .detail-title {
            text-align: center;
        }

        #careers-detail-box .career-detail {
            background: #fff;
            margin-top: 25px;
            padding: 40px 30px 0px;
            box-shadow: 0px 5px 30px 0 rgba(0, 0, 0, 0.30);
        }

        #careers-detail-box h1 {
            /* color: #252b33; */
            /* color: #ff8800; */
            color: #d04548;
            font-size: 43px;
            font-weight: 800;
        }

        #careers-detail-box .detail-title p,
        #careers-detail-box .exp-detail .left p,
        #careers-detail-box .exp-detail .right p {
            font-family: "Poppins", sans-serif;
            font-size: 14px;
            color: #323a45;
        }

        #careers-detail-box .career-detail {
            background: #fff;
            margin-top: 25px;
            padding: 40px 30px 0px;
            box-shadow: 0px 5px 30px 0 rgba(0, 0, 0, 0.30);
        }

        #careers-detail-box .career-detail {
            background: #fff;
            margin-top: 25px;
            padding: 40px 30px 0px;
            box-shadow: 0px 5px 30px 0 rgba(0, 0, 0, 0.30);
        }

        #careers-detail-box .career-detail ul li {
            background: url(https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2016/07/circle-black.png) no-repeat left 5px;
            list-style: none;
            /* width: 44%; */
            float: left;
            font-family: "Poppins", sans-serif;
            padding-left: 24px;
            margin-bottom: 15px;
            color: #323a45;
            font-size: 16px;
            margin-right: 30px;
            font-weight: 400 !important;
        }

        #careers-detail-box .exp-detail {
            width: 100%;
            padding: 30px 0px;
            overflow: hidden;
            border-top: 1px solid #e2e6e9;
        }

        #careers-detail-box .exp-detail .left {
            width: 50%;
            float: left;
        }

        #careers-detail-box .exp-detail .right {
            width: 50%;
            float: right;
        }




        .btn-1 {
            /* font-family: Hack, monospace; */
            background: #0F0F6D;
            color: #ffffff;
            cursor: pointer;
            font-size: 1.5em;
            padding: 0.8rem;
            border: 0;
            transition: all 0.5s;
            border-radius: 10px;
            width: 100%;
            position: relative;
            padding-right: 50px;
            padding-left: 50px;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .btn-1::after {
            /* content: "\f054"; */
            /* font-family: "Font Awesome 5 Pro"; */
            font-weight: 400;
            position: absolute;
            left: 85%;
            top: 31%;
            right: 5%;
            bottom: 0;
            opacity: 0;
        }

        .btn-1:hover {
            background: #2b2bff;
            transition: all 0.5s;
            border-radius: 10px;
            box-shadow: 0px 6px 15px #0000ff61;
            /* padding: 1.5rem 3.5rem 1.5rem 1.5rem; */
        }

        .btn-1:hover::after {
            opacity: 1;
            transition: all 0.5s;
        }

        .login-btn {
            font-family: Hack, monospace;
            background: #bbff00;
            color: #1d1d1d;
            cursor: pointer;
            font-size: 2em;
            padding: 1.5rem;
            border: 0;
            transition: all 0.5s;
            border-radius: 10px;
            width: auto;
            position: relative;
            min-width: 250px;
        }

        .login-btn::after {
            content: "\f2f6";
            font-family: "Font Awesome 5 Pro";
            font-weight: 400;
            position: absolute;
            left: 80%;
            top: 54%;
            right: 0;
            bottom: 0;
            opacity: 0;
            transform: translate(-50%, -50%);
        }

        .login-btn:hover {
            background: #2b2bff;
            transition: all 0.5s;
            border-radius: 10px;
            box-shadow: 0px 6px 15px #0000ff61;
            padding: 1.5rem 3rem 1.5rem 1.5rem;
            color: #ffffff;
        }

        .login-btn:hover::after {
            opacity: 1;
            transition: all 0.5s;
            color: #ffffff;
        }

        .logout-btn {
            font-family: Hack, monospace;
            background: #d3d3d3;
            color: #2c2c2c;
            cursor: pointer;
            font-size: 2em;
            padding: 1.5rem;
            border: 0;
            transition: all 0.5s;
            border-radius: 10px;
            width: auto;
            position: relative;
            min-width: 250px;
        }

        .logout-btn::after {
            content: "\f2f5";
            font-family: "Font Awesome 5 Pro";
            font-weight: 400;
            position: absolute;
            left: 80%;
            top: 54%;
            right: 0;
            bottom: 0;
            opacity: 0;
            transform: translate(-50%, -50%);
        }

        .logout-btn:hover {
            background: #2b2bff;
            transition: all 0.5s;
            border-radius: 10px;
            box-shadow: 0px 6px 15px #0000ff61;
            padding: 1.5rem 3rem 1.5rem 1.5rem;
            color: #ffffff;
        }

        .logout-btn:hover::after {
            opacity: 1;
            transition: all 0.5s;
            color: #ffffff;
        }

        .footer {
            position: absolute;
            font-size: 12px;
            bottom: 0;
            width: 100%;
            height: 60px;
            /* Set the fixed height of the footer here */
            background-color: #f5f5f5;
            text-align: center;
        }

        .footer a {
            text-decoration: none;
            color: inherit;
            border-bottom: 1px solid;
        }

        .footer a:hover {
            border-bottom: 1px transparent;
        }
    </style>
    <style>
        :after,
        :before {
            box-sizing: border-box
        }

        .clearfix:after,
        .clearfix:before {
            content: '';
            display: table
        }

        .clearfix:after {
            clear: both;
            display: block
        }

        a {
            color: inherit;
            text-decoration: none
        }

        .login-wrap {
            width: 100%;
            margin: auto;
            max-width: 525px;
            min-height: 731px;
            position: relative;


            box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
        }

        .login-html {
            width: 100%;
            height: 100%;
            position: absolute;
            padding: 16px 70px 50px 70px;
            background: #333d8214;
        }

        .login-html .sign-in-htm,
        .login-html .for-pwd-htm {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: all .4s linear;
            transition: all .4s linear;
        }

        .login-html .sign-in,
        .login-html .for-pwd,
        .login-form .group .check {
            display: none;
        }

        .login-html .tab,
        .login-form .group .label,
        .login-form .group .button {
            text-transform: uppercase;
        }

        .login-html .tab {
            color: white;
            font-size: 22px;
            margin-right: 15px;
            padding-bottom: 5px;
            margin: 0 15px 10px 0;
            display: inline-block;
            border-bottom: 2px solid transparent;
        }

        .login-html .sign-in:checked+.tab,
        .login-html .for-pwd:checked+.tab {
            color: #ff0;
            border-color: #1161ee;
        }

        .login-form {
            margin-top: 38px;
            min-height: 345px;
            position: relative;
            -webkit-perspective: 1000px;
            perspective: 1000px;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .login-form .group {
            margin-bottom: 15px;
        }

        .login-form .group .label,
        .login-form .group .input,
        .login-form .group .button {
            width: 100%;
            color: #fffdfd;
            font-weight: 600;
            display: block;
        }

        .login-form .group .input,
        .login-form .group .button {
            border: none;
            padding: 15px 20px;
            border-radius: 25px;

            background: rgb(255 255 255 / 54%);

        }

        .login-form .group input[data-type="password"] {
            text-security: circle;
            -webkit-text-security: circle;
        }

        .login-form .group .label {
            color: #efdd09;
            font-size: 14px;
            font-weight: 500;
        }

        .login-form .group .button {
            background: linear-gradient(to right, #f37407, #d1de11);
        }

        .login-form .group label .icon {
            width: 15px;
            height: 15px;
            border-radius: 2px;
            position: relative;
            display: inline-block;
            background: rgba(255, 255, 255, .1);
        }

        .login-form .group label .icon:before,
        .login-form .group label .icon:after {
            content: '';
            width: 10px;
            height: 2px;
            background: #fff;
            position: absolute;
            -webkit-transition: all .2s ease-in-out 0s;
            transition: all .2s ease-in-out 0s;
        }

        .login-form .group label .icon:before {
            left: 3px;
            width: 5px;
            bottom: 6px;
            -webkit-transform: scale(0) rotate(0);
            transform: scale(0) rotate(0);
        }

        .login-form .group label .icon:after {
            top: 6px;
            right: 0;
            -webkit-transform: scale(0) rotate(0);
            transform: scale(0) rotate(0);
        }

        .login-form .group .check:checked+label {
            color: #fff;
        }

        .login-form .group .check:checked+label .icon {
            background: #1161ee;
        }

        .login-form .group .check:checked+label .icon:before {
            -webkit-transform: scale(1) rotate(45deg);
            transform: scale(1) rotate(45deg);
        }

        .login-form .group .check:checked+label .icon:after {
            -webkit-transform: scale(1) rotate(-45deg);
            transform: scale(1) rotate(-45deg);
        }

        .login-html .sign-in:checked+.tab+.for-pwd+.tab+.login-form .sign-in-htm {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }

        .login-html .for-pwd:checked+.tab+.login-form .for-pwd-htm {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }

        .hr {
            height: 2px;
            margin: 60px 0 50px 0;
            background: rgba(255, 255, 255, .2);
        }

        .foot-lnk {
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* body {margin:0;height:2000px;} */

        .icon-bar {
            position: fixed;
            top: 50%;
            z-index: 9999;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .icon-bar a {
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 20px;
        }

        .icon-bar a:hover {
            background-color: #000;
        }

        .facebook {
            background: #3B5998;
            color: white;
        }

        .twitter {
            background: #55ACEE;
            color: white;
        }

        .google {
            background: #dd4b39;
            color: white;
        }

        .linkedin {
            background: #007bb5;
            color: white;
        }

        .youtube {
            background: #bb0000;
            color: white;
        }

        .content {
            margin-left: 75px;
            font-size: 30px;
        }

        .panel-front {
            background-image: url('../assets/images/g6.jpg');
            background-repeat: no-repeat;
            color: white;
            font-weight: bolder;

        }

        .panel-back {
            background-image: url('../assets/images/g10.png');
            background-repeat: no-repeat;

            color: white;
            transform: rotateY(180deg);
            font-weight: bolder;

            /* padding: 5px; */
        }

        .paneltg-fronttg {
            background-image: url('../assets/images/international-flag.jpg');
            background-repeat: no-repeat;
            color: white;
            font-weight: bolder;

        }

        .paneltg-backtg {
            background-image: url('../assets/images/g6.jpg');
            background-repeat: no-repeat;

            color: white;
            transform: rotateY(180deg);
            font-weight: bolder;

            /* padding: 5px; */
        }

        @media only screen and (max-width:768px) {

            .wpb_row,
            .wpb_content_element,
            ul.wpb_thumbnails-fluid>li,
            .last_toggle_el_margin,
            .wpb_button {
                width: 785px;
            }

            .btn-1 {
                padding-right: 10px;
                padding-left: 10px;
            }
        }

        @media only screen and (max-width:425px) {

            .wpb_row,
            .wpb_content_element,
            ul.wpb_thumbnails-fluid>li,
            .last_toggle_el_margin,
            .wpb_button {
                width: 438px;
            }

            .btn-1 {
                margin-left: 100px;
                padding-right: 10px;
                padding-left: 10px;
            }

            #careers-detail-box h1 {
                font-size: 34px;
            }
        }


        @media only screen and (max-width:375px) {

            .wpb_row,
            .wpb_content_element,
            ul.wpb_thumbnails-fluid>li,
            .last_toggle_el_margin,
            .wpb_button {
                width: 392px;
            }

            .btn-1 {
                margin-left: 100px;
                padding-right: 10px;
                padding-left: 10px;
            }

            #careers-detail-box h1 {
                font-size: 34px;
            }
        }


        @media only screen and (max-width:320px) {

            .wpb_row,
            .wpb_content_element,
            ul.wpb_thumbnails-fluid>li,
            .last_toggle_el_margin,
            .wpb_button {
                width: 335px;
            }

            .btn-1 {
                margin-left: 55px;
                padding-right: 10px;
                padding-left: 10px;
            }

            #careers-detail-box h1 {
                font-size: 26px;
            }
        }
    </style>



    @php
    $page_url = Request::fullUrl();

    @endphp

    <div class="icon-bar">
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $page_url }}&title=Happiest+Jobs" class="facebook"><i
                class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{ $page_url }}" class="twitter"><i
                class="fa fa-twitter"></i></a>
        <a href="https://wa.me/?text={{ $page_url }}" class="google"><i class="fa fa-whatsapp"></i></a>
        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ $page_url }}&amp;title=my share text&amp;summary=dit is de linkedin summary"
            class="linkedin"><i class="fa fa-linkedin"></i></a>
        {{-- <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> --}}
    </div>
    <div class="full_width">
        <div class="full_width_inner">
            {{-- <div class="vc_row wpb_row section vc_row-fluid  grid_section mpc-row"
            style="background-image:url('{{ url('public/careers-detail-banner.jpg') }}'); text-align:left;"> --}}
            <div class="vc_row wpb_row section vc_row-fluid  grid_section mpc-row" style="">
                <div class=" section_inner clearfix">
                    <div class="section_inner_margin clearfix">
                        <div class="wpb_column vc_column_container vc_col-sm-12 mpc-column"
                            data-column-id="mpc_column-805efade6201556">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="ult-spacer spacer-5efade61f3fd1" data-id="5efade61f3fd1" data-height="150"
                                        data-height-mobile="100" data-height-tab="100" data-height-tab-portrait=""
                                        data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">


                                            <div id="careers-detail-box">
                                                <div class="detail-title">
                                                    <h1>{{ strtoupper($job->position) }}</h1>
                                                    <p style="font-weight: 700;"><a
                                                            href="{!! isset($job->company->website) ? $job->company->website : '#' !!}">{!! isset($job->company->name) ? ucwords($job->company->name) : '-' !!}</a>
                                                        &nbsp;|&nbsp;&nbsp; {{ $job->job_location }} &nbsp;|&nbsp;&nbsp;
                                                        {!! isset($job->hh_id) ? "SS_JOB$job->hh_id" : "SS_JOB_$job->id" !!}</p>
                                                </div>


                                                <div style="margin-top:40px">
                                                    <img src="{{ asset('assets/img/office-5.jpg') }}"
                                                        style="background-size: cover;background-position: center center;
                                                background-repeat: no-repeat;">
                                                </div>




                                                <div class="career-detail">
                                                    <ul>
                                                        <li><b style="font-weight: 700;">Job Description :
                                                            </b><br>{!! $job->job_description !!}</li>

                                                    </ul>
                                                    <ul>
                                                        <li><b style="font-weight: 700;">About Company :
                                                            </b><br>{!! isset($job->company) ? $job->company->name : '' !!}</li>

                                                    </ul>

                                                    <ul>
                                                        <li><b style="font-weight: 700;">Education :
                                                            </b><br>{!! $job->education_required !!} </li>

                                                    </ul>
                                                    <ul>
                                                        <li><b style="font-weight: 700;">Required Skills :
                                                            </b><br>{!! $job->skills_required !!}</li>

                                                    </ul>


                                                    <div class="exp-detail">

                                                        <div class="left">
                                                            <ul>
                                                                <li><b style="font-weight: 700;">Experience : </b>
                                                                    {{ $job->experience_year_from }}
                                                                    To {{ $job->experience_year_to }} Years</li>

                                                            </ul>
                                                        </div>
                                                        <div class="right">
                                                            <ul>
                                                                <li><b style="font-weight: 700;">Package : </b>
                                                                    @if ($job->salary_type == 'USD')
                                                                        &nbsp;${{ $job->package_offer_from }} TO
                                                                        ${{ $job->package_offer_to }}
                                                                        <b style="font-weight: 500;">Per Annum </b>
                                                                </li>
                                                            @else
                                                                ₹ {{ $job->package_offer_from }} TO ₹
                                                                {{ $job->package_offer_to }} INR
                                                                <b style="font-weight: 500;">Per Annum </b></li>
                                                                @endif

                                                            </ul>
                                                        </div>
                                                        <div class="left">
                                                            <ul>
                                                                <li><b style="font-weight: 700;">Position Code :
                                                                    </b>{!! isset($job->hh_id) ? "SS_JOB$job->hh_id" : "SS_JOB_$job->id" !!} </li>

                                                            </ul>
                                                        </div>
                                                        {{-- <div class="right">
                                                        <ul>
                                                            <li><b style="font-weight: 700;">Industry Type : </b> &nbsp; {!! $job->industry_type !!}</li>

                                                        </ul>
                                                    </div>
                                                    <div class="left">
                                                        <ul>
                                                            <li><b style="font-weight: 700;">Position Code : </b>{!! isset($job->hh_id)?"SS_JOB$job->hh_id" : "SS_JOB_$job->id" !!} </li>

                                                        </ul>
                                                    </div> --}}
                                                        <div class="right">
                                                            <ul>
                                                                <li><b style="font-weight: 700;">Industry Type : </b> &nbsp;
                                                                    {!! $job->industry_type !!}</li>

                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="exp-detail">

                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <ul>
                                                                    <li><b style="font-weight: 700;">Manager Name :
                                                                        </b><br>{!! isset($job->hr_name) ? ucwords($job->hr_name) : '-' !!}</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <ul>
                                                                    <li><b style="font-weight: 700;">Manager Email :
                                                                        </b><br>{!! isset($job->hr_email) ? $job->hr_email : '-' !!} </li>

                                                                </ul>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <ul>
                                                                    <li><b style="font-weight: 700;">Manager Contact :
                                                                        </b><br>{!! isset($job->hr_contact) ? $job->hr_contact : '-' !!}</li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="exp-detail">
                                                        @php
                                                            $message = ' Hi, ' . $job->hr_name . '. I am Interested for ' . ucwords($job->position) . ' Job, Location(s) :' . $job->job_location . '. Kindly Share More Details And Similar Jobs.';
                                                            
                                                            $mobile = $job->hr_contact;
                                                            
                                                        @endphp
                                                        <!-- <div class="row">
                                                                            <div class="col-sm-8">
                                                                            <a target="_blank"
                                                            href="https://api.whatsapp.com/send?phone=91{{ $job->hr_contact }}&text={{ $message }}&source=&data=&app_absent="><span
                                                                class="btn btn-success"
                                                                style="background-color:#0d328d !important;">Connect With
                                                                Whatsapp</span></a>
                                                                            </div>

                                                                            <div class="col-sm-4">
                                                                                  @if ($is_user == 1)
    <button class="btn-1" onclick="jobApplyclick()">Click To Apply</button>
@else
    <a href="{{ url('resumeloginJob/' . $jid) }}" class="btn-1">Click To Apply</a>
                                                                                  <!-- <button class="btn-1" data-target="#modal_registration" data-toggle="modal" >Click To Apply</button>  -->
                                                        <!--
    @endif -->

                                                        <!-- </div>
                                                                        </div>
                                                                    </div> -->
                                                        <div class="exp-detail">

                                                            <div style="justify-content: end; display: flex;">
                                                                <div class="col-sm-8"
                                                                    style="justify-content: start; display: flex;">
                                                                    <a target="_blank"
                                                                        href="https://api.whatsapp.com/send?phone={{ $job->hr_contact }}&text={{ $message }}&source=&data=&app_absent="><span
                                                                            class="btn btn-success" style="">Connect
                                                                            With
                                                                            Whatsapp</span></a>


                                                                    {{-- <a target="_blank" href="">
            <button class="btn-1"
                style="background-color:#0d328d !important;">
                Whatsapp</button>
        </a> --}}
                                                                </div>
                                                          <div class="col-sm-4"
                                                                    style="justify-content: end; display: flex;">
                                                                    @if ($is_user == 1)
                                                                 
                                                                        <button
                                                                            class="btn btn-success waves-effect waves-effect waves-light"
                                                                            style="background-color:#0d328d !important;"
                                                                            onclick="jobApplyclick()">Click To
                                                                            Apply</button>
                                                                    @elseif(request()->get('utm_source') == 'google_jobs_apply')
                                                                     @php( $portal = request()->get('utm_source'))

                                                                    <a href="{{ url('resumeloginJob/' . $jid . '/' . $portal) }}"
                                                                    class="btn btn-success waves-effect waves-effect waves-light"
                                                                    style="background-color:#0d328d !important;">Click
                                                                    To Apply</a>


                                                                    @else
                                                               
                                                                        <a href="{{ url('resumeloginJob/' . $jid . '/' . 'happiest') }}"
                                                                            class="btn btn-success waves-effect waves-effect waves-light"
                                                                            style="background-color:#0d328d !important;">Click
                                                                            To Apply</a>
                                                                        <!-- <button class="btn-1" data-target="#modal_registration" data-toggle="modal" >Click To Apply</button>  -->
                                                                    @endif

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                        <div class="ult-spacer spacer-5efade6201358" data-id="5efade6201358"
                                            data-height="150" data-height-mobile="100" data-height-tab="100"
                                            data-height-tab-portrait="" data-height-mobile-landscape=""
                                            style="clear:both;display:block;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="min-height: 100px;"></div>
                </div>


            </div>
        </div>
        <div style="min-height: 50px;"></div>
        <form action="{{ url('jobApplyStore') }}" method="post">
            @csrf
            <input type="hidden" name="job_id" id="job_id" value="{{ $jid }}">
            <input type="submit" name="jobApply" id="jobApply" style="display:none">
        </form>





        @include('frontend.common.footer')


        <div class="modal fade" id="modal_logout" role="dialog" aria-hidden="true">
            <form action="{{ url('user-logout') }}" method="post">
                @csrf
                <div class="modal-dialog">
                    <div class="modal-content m_login">
                        <div class="modal-header m_header">
                            {{-- <h5 class="modal-title"><b>Signoff</b></h5> --}}
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

        <div class="modal fade" id="forgot_password" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content m_login">
                    <div class="modal-header m_header">
                        <h5 class="modal-title"><b>Forgot Password ?</b></h5>
                        <button type="button" class="close m_close" data-dismiss="modal"
                            onclick="forgetReload()">×</button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('candidate/recoverPassword') }}" method="post">
                            @csrf
                            <div class="md-form mt-3">
                                <input type="text" name="username" maxlength="50" minlength="10" id="forgotEmail"
                                    required class="form-control" autocomplete="off">
                                <label for="forgotEmail" class="">Provide valid email or contact no.</label>
                            </div>
                            <button id="btnsubmit_forgot" type="submit"
                                class="btn btn-primary btn-lg btn-block req_btn text-white">Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <style>
            video.bg {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -100;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            video {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
                object-fit: cover;/ combined with 'absolute',
                works like background-size,
                but for DOM elements /
            }
        </style>

        <div class="modal fade" id="modal_registration" role="dialog" aria-hidden="true">


            <div class="login-wrap">


                <div class="videobg">
                    <video autoplay loop muted>
                        <source src="../public/resume_yellow/assets/video/video2.mp4" type="video/mp4">

                    </video>
                </div>

                <div class="login-html">


                    <button data-dismiss="modal" type="button"
                        style="color: #f7f3f3;margin-right: -69px;margin-top: -14px;height: 55px;font-weight: 900;width: 8px;float: right;font-size: 17px;"
                        class="hide btn">x</button>
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                        class="tab">Log In</label>
                    <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2"
                        class="tab">Register</label>

                    <div class="login-form">

                        <form action="{{ url('loginJobApply/' . $jid) }}" method="post">
                            @csrf
                            <div class="sign-in-htm">
                                <div class="form-group login_social_btnbox">

                                    <a target="_blank" href="{{ url('redirect/facebook') }}"
                                        class="waves-effect waves-light login_btn_facebook login_btn">
                                        <i class="mdi mdi-facebook"></i>
                                        Log in with Facebook
                                    </a>
                                    <a target="_blank" href="{{ url('redirect/google') }}"
                                        class="login_btn_google_plus login_btn waves-effect waves-light">
                                        <i class="mdi mdi-google"></i>
                                        Log in with Google
                                    </a>
                                    {{-- <a target="_blank" href="{{url('redirect/linkedin')}}"
                        class="login_btn_facebook login_btn waves-effect waves-light">
                        <i class="mdi mdi-linkedin"></i>
                        Log in with Linkedin
                        </a> --}}
                                </div>
                                <div class="form-group">
                                    <div class="or_border">OR</div>
                                </div>
                                <div class="group">
                                    <label for="email" class="label">Username or Email</label>
                                    <input id="materialRegisterFormEmail" name="email" type="email" class="input">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="materialRegisterFormPassword" minlength="4" maxlength="20"
                                        type="password" name="password" class="input" data-type="password">
                                </div>

                                <div class="group" style="margin-top: 56px;">
                                    <input type="submit" class="button" value="Sign In">
                                </div>
                                <div class="hr"></div>
                                <div class="foot-lnk">
                                    <!-- <a class="forgot_txt" data-dismiss="modal" href="#" data-toggle="modal"
                                            data-target="#forgot_password">Forgot Password?</a> -->
                                    <a class="forgot_txt" onclick="frogetModal()" style="color: white;">Forgot
                                        Password?</a>
                                </div>
                            </div>
                        </form>
                        <form action="{{ url('registrationJobApply/' . $jid) }}" method="post">
                            @csrf
                            <div class="for-pwd-htm">
                                <div class="group">
                                    <label for="name" class="label">Name</label>
                                    <input id="name" name="name" autocomplete="off" type="text"
                                        class="input" required>
                                </div>
                                <div class="group">
                                    <label for="email" class="label">Email</label>
                                    <input type="email" name="reg_email" id="reg_email" autocomplete="off"
                                        class="input" required>
                                    <small id="email_error" style="color:red"></small>
                                </div>

                                <div class="group">
                                    <label for="contact" class="label">Contact Number</label>
                                    <input type="text" name="contact" id="reg_contact" autocomplete="off"
                                        minlength="10" maxlength="10"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        class="input" required>
                                    <small id="contact_error" style="color:red"></small>
                                </div>
                                <div class="group">
                                    <label for="password" class="label">Password</label>
                                    <input type="password" name="password" id="password" autocomplete="off"
                                        class="input" required>
                                </div>
                                <div class="group">
                                    <label for="cpassword" class="label">Confirm Password</label>
                                    <input type="password" name="cpassword" id="cpassword" autocomplete="off"
                                        class="input" required>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Register" style="margin-top: 54px;">
                                </div>
                                <div class="hr"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>


        <script>
            $(document).ready(function() {

                $(".hide").click(function() {

                    $('#modal_registration').modal().hide();
                    location.reload();
                });
            })

            function frogetModal() {
                $('#modal_registration').modal().hide();
                $('#forgot_password').modal().show();
            }

            function forgetReload() {
                location.reload();
            }

            function jobApplyclick() {
                $('#jobApply').click();
            }

            $('#top_navigation_bar').addClass('logowithmenu_bar_fixed');
        </script>
        <?php
        $description = $job->job_description;
        $position = $job->position;
        $location = $job->job_location;
        
        // dd($job);
        $date_posted = \Carbon\Carbon::parse($job->created_at)->format('Y-m-d');
        $date_exp = \Carbon\Carbon::parse($date_posted)
            ->addDays(15)
            ->format('Y-m-d');
        $date_exp.='T00:00';
        // dd($date_exp);
        ?>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org/",
                "@type": "JobPosting",
                "title": "<?php echo $position; ?>",
                "description": "<p><?php echo $description; ?></p>",
                "identifier": {
                    "@type": "PropertyValue",
                    "name": "Google",
                    "value": "1234567"
                },
                "datePosted": "<?php echo $date_posted; ?>",
                "validThrough": "<?php echo $date_exp; ?>",
                "employmentType": "FULL_TIME",
                "hiringOrganization": {
                    "@type": "Organization",
                    "name": "Happy Sqaure Pvt. Ltd",
                    "sameAs": "https://happiestresume.com/",
                    "logo": "https://happiestresume.com/public/front/jobsearch/images/logo1.png"
                },
                "jobLocation": {
                    "@type": "Place",
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "Rajpal Tower",
                        "addressLocality": "Jabalpur",
                        "addressRegion": "India",
                        "postalCode": "482003",
                        "addressCountry": "India"
                    }
                },
                "baseSalary": {
                    "@type": "MonetaryAmount",
                    "currency": "INR",
                    "value": {
                        "@type": "QuantitativeValue",
                        "minValue": 100000,
                        "maxValue": 500000,
                        "unitText": "YEAR"
                    }
                }
            }
        </script>
    @stop
