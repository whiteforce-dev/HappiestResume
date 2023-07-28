@extends('frontend.master.front_master')
@section('title', 'Edit Resume')
@section('content')
    {{-- @dd(session('resume')->id) --}}
    <link rel="shortcut icon" href="{{URL::to('public/front').'/'}}images/favicon.png" type="image/x-icon"/>
    <link href="{{URL::to('public/front').'/'}}css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="{{URL::to('public/front').'/'}}css/mdb.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/materialdesignicons.css" type="text/css"/>
    <link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/additional.css" type="text/css"/>
    <link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/editor/color-picker.css"/>
    <link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/editor/editor-tools.css" type="text/css"/>
    <link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/editor/enjoyhint.css" type="text/css"/>
    <link href="{{URL::to('public/front').'/'}}css/style.css" rel="stylesheet" type="text/css"/>
    <link href="{{URL::to('public/front').'/'}}css/media.css" rel="stylesheet" type="text/css"/>
    {{--<link rel='stylesheet' id='nd_options_font_family_h-css'--}}
    {{--href='http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C700&#038;ver=4.9.4' type='text/css'--}}
    {{--media='all'/>--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet"/>--}}
    <section class="resume_editor_section">
        <div class="container-fluid">
            <div class="row">
                <!--                <div class="res-editor_fixed card">-->
                <!--                    <button type="button" onclick="EditorOpen();"-->
                <!--                            class="btn btn-primary btn-sm waves-effect waves-light">-->
                <!--                        <i class="mdi mdi-pencil mr-2"></i>Editor-->
                <!--                    </button>-->
                <!--                    <button type="button" onclick="PreviewResume();"-->
                <!--                            class="btn btn-warning btn-sm waves-effect waves-light">-->
                <!--                        <i class="mdi mdi-eye mr-2"></i>Preview-->
                <!--                    </button>-->
                <!--                </div>-->
                <div class="col-sm-12 col-lg-4 pr-1" id="profile_status_block">
                    <div class="resume_percent_sticky card">
                        <div class="card-body resume_completion_box">
                            <div class="fields_items resume_percent_txtbox">
                                <div class="field_block completed" id="resu_per_name">
                                    <img src="{{URL::to('public/front').'/'}}images/profile-name.png">
                                    <span class="details">Name</span>
                                </div>
                                <div class="field_block color_2 completed" id="resu_per_email">
                                    <img src="{{URL::to('public/front').'/'}}images/profile-email.png">
                                    <span class="details">Email</span>
                                </div>
                                <div class="field_block color_3 completed" id="resu_per_contact">
                                    <img src="{{URL::to('public/front').'/'}}images/profile-contact.png">
                                    <span class="details">Contact</span>
                                </div>
                                <div class="field_block color_4 @if(file_exists("public/$user->image") && isset($user->image)) completed @endif field_active"
                                     id="resu_per_profile">
                                    <img src="{{URL::to('public/front').'/'}}images/profile-pic.png">
                                    <span class="details">Profile</span>
                                </div>
                                <div class="field_block color_5" id="resu_per_designation">
                                    <img src="{{URL::to('public/front').'/'}}images/profile-designation.png">
                                    <span class="details">Designation</span>
                                </div>
                                <div class="field_block color_6" id="resu_per_social">
                                    <img src="{{URL::to('public/front').'/'}}images/profile-social.png">
                                    <span class="details">Social</span>
                                </div>
                                <div class="field_block color_7" id="resu_per_education">
                                    <img src="{{URL::to('public/front').'/'}}images/profile-education.png">
                                    <span class="details">Education</span>
                                </div>
                                <div class="field_block color_8" id="resu_per_experiance">
                                    <img src="{{URL::to('public/front').'/'}}images/profile-experiance.png">
                                    <span class="details">Experience</span>
                                </div>
                                <div class="field_block color_9" id="resu_per_skills">
                                    <img src="{{URL::to('public/front').'/'}}images/profile-skills.png">
                                    <span class="details">Skills</span>
                                </div>
                                <div class="field_block color_10" id="resu_per_personal">
                                    <img src="{{URL::to('public/front').'/'}}images/profile-jobcategory.png">
                                    <span class="details">Personal</span>
                                </div>
                            </div>
                            <div class="resume_percent_imgblock">
                                <div class="percentage_block">
                                    <div class="progress" data-percentage="30" id="dynamic_percent">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                                        <span class="progress-right">
                                        <span class="progress-bar"></span></span>
                                        <div class="progress-value">
                                            <text class="counter_text" id="counter_text">30%</text>
                                            <span>completed</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="resume_percent_imgbox" id="percent_imgcontainer">
                                    <img id="resu_per_status_img1"
                                         src="{{URL::to('public/front').'/'}}{{--images/resume-point-noted.png--}}images/resume-point-noted5.png"
                                         style="opacity: 1;width: 135px;right: 0px;left: initial;">
                                    <img id="resu_per_status_img2"
                                         src="{{URL::to('public/front').'/'}}{{--images/resume-point-good.png--}}images/resume-point-noted5.png"
                                         style="opacity: 1;width: 135px;right: 0px;left: initial;">
                                    <img id="resu_per_status_img3"
                                         src="{{URL::to('public/front').'/'}}images/resume-point-noted5.png"
                                         style="opacity: 1;width: 135px;right: 0px;left: initial;">
                                </div>
                            </div>
                            <div class="resume_editor_btnbox">
                                <button onclick="RestartResume();" type="button"
                                        class="btn btn-success waves-effect waves-light">Start Tour
                                </button>
                                <button type="button" onclick="SaveSocialurl()"
                                        class="btn btn-primary waves-effect waves-light" style="margin-right: 5px;">
                                    Preview
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-8 res_smallpad">
                    <div class="blank_resumebox card">
                        <div class="card-body" id="resume_html">
                            <div style="font-family:Calisto MT;width: 100%;background-color: #ffffff;text-align: center;margin: 0px auto;position: relative;"
                                 class="email_innerbody" id="resume_body">
                                <table style="width: 100%;text-align: left;table-layout: fixed;">
                                    <tbody>
                                    <tr style="height: 15px;margin-bottom: 20px;width: 100%;">
                                        <td class="top-color" style="background: #f8e71c;width: 20%;" colspan="1"></td>
                                        <td class="top-color" style="background: #4285f4;width: 20%;" colspan="1"></td>
                                        <td class="top-color" style=" background: #ff8800;width: 20%;" colspan="1"></td>
                                        <td class="top-color" style="background: #4285f4;width: 20%;" colspan="1"></td>
                                        <td class="top-color" style="background: #f8e71c;width: 20%;" colspan="1"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="photo" style="width: 150px;">
                                            <div class="user_picblock" id="tour_user_picblock"
                                                 style="width: 100%;position: relative;max-width: 125px;">
                                                @if(file_exists("public/$user->image") && isset($user->image))
                                                    <img class="global_img" id="profile_pic"
                                                         src="{{URL::to('public').'/'.$user->image}}" alt="image"
                                                         style="border: solid 5px #249991;border-radius: 50%;padding: 5px;margin-top: 10px;width: 150px;height: 150px;">
                                                @else
                                                    <img class="global_img" id="profile_pic"
                                                         src="{{URL::to('public/front').'/'}}images/default-pic.png"
                                                         alt="image"
                                                         style="border: solid 5px #249991;border-radius: 50%;padding: 5px;margin-top: 10px;width: 150px;height: 150px;">
                                                @endif
                                                <input class="file_upload" type="file"
                                                       onchange="ChangeSetImage(this)"/>
                                            </div>
                                        </td>
                                        <td colspan="4">
                                            <div class="pencil_hoverthis" id="tour_user_name">
                                                <h2>
                                                    <div style="color: #3b658a;outline: none" contentEditable=true
                                                         data-text="Enter Your Name"
                                                         class="resu_name textWithSpace required"
                                                         onkeyup="Focusoutsection();"
                                                         onfocus="Focussection('resu_per_name');" id="resu_html_name">
                                                        @if(isset($user->name)) {{$user->name}} @else Enter Your
                                                        Name @endif
                                                    </div>
                                                </h2>
                                            </div>
                                            <div class="pencil_hoverthis" id="tour_user_designation">
                                                <h6 class="editable"
                                                    style="position: relative;margin-top: 0px;outline: none;"
                                                    spellcheck="false">
                                                    <b>
                                                        <div contentEditable=true data-text="Enter Your Designation"
                                                             style="outline: none;"
                                                             class="resu_designation textWithSpace required"
                                                             onkeyup="Focusoutsection();"
                                                             onfocus="Focussection('resu_per_designation');"
                                                             id="resu_html_designation">@if(isset($user_work_exp->designation)) {{$user_work_exp->designation}} @endif</div>
                                                    </b></h6>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <hr>
                                        </td>
                                    </tr>
                                    <tr onclick="selectedrow(this);" class="selectedrow">
                                        <td colspan="5">
                                            <div class="pencil_hoverthis res_margin0" unselectable="on"
                                                 id="tour_tagline"
                                                 style="padding: 15px;background: #f5f5f5;display: inline-block;position: relative;z-index: 5;outline: none;margin-bottom: 15px;width: 100%;">
                                                <span class="number_bullet_container">
                                                    <p contentEditable=true data-text="Enter your job title"
                                                       class="textWithSpace required" id="title"
                                                       style="font-size: 14px;margin: 0px; outline: none;">
                                                        @if(isset($user_work_exp->title)) {{$user_work_exp->title}}
                                                        @endif</p>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <h3 class="resu_mainheading"
                                                style="text-align:center;font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 15px 0px 25px 0px;">
                                                <sub class="saprate_line_card_left"></sub>Profile<sub
                                                        class="saprate_line_card_right"></sub>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <div class="pencil_hoverthis"
                                                 style="padding: 15px 15px 5px 15px;background: #f5f5f5;position: relative;z-index: 5;outline: none;">
                                                <h5 class="resu_subheading"
                                                    style="font-family: Calibri;font-size: 22px;font-weight: bold;padding-bottom: 3px;border-bottom: solid thin #cccccc;margin-bottom: 5px;"
                                                    contenteditable="false">
                                                    <font color="#3b658a">WhatsApp/Contact
                                                        No.</font>
                                                </h5>
                                                <p id="resu_html_conno" onkeyup="Focusoutsection();"
                                                   onfocus="Focussection('resu_per_contact');" contentEditable=true
                                                   data-text="Enter your contact no."
                                                   class="numberOnly required contact" style="outline: none;">
                                                    @if(isset($user->contact)) {{$user->contact}} @endif
                                                </p>
                                                <h5 class="resu_subheading" contenteditable="false" unselectable="on"
                                                    style="font-family: Calibri;font-size: 22px;font-weight: bold;padding-bottom: 3px;border-bottom: solid thin #cccccc;margin-bottom: 5px;">
                                                    <font color="#3b658a">Email Id</font>
                                                </h5>
                                                <p id="resu_html_email" onkeyup="Focusoutsection();"
                                                   onfocus="Focussection('resu_per_email');" contentEditable=true
                                                   class="required" data-text="Enter your email id"
                                                   style="outline: none;">
                                                    @if(isset($user->email)) {{$user->email}} @endif</p>
                                                <h5 class="resu_subheading" contenteditable="false"
                                                    style="font-family: Calibri;font-size: 22px;font-weight: bold;padding-bottom: 3px;border-bottom: solid thin #cccccc;">
                                                    <font color="#3b658a">Find Me On</font>
                                                </h5>
                                                <p style="margin: 10px 0px;" id="resu_html_social">
                                                    <span class="social_link_block"
                                                          style="background: #ffffff;display: inline-block;padding: 5px 5px 0px 5px;border-radius: 5px;box-shadow: 0px 0px 5px #ccc;-moz-box-shadow: 0px 0px 5px #ccc;-webkit-box-shadow: 0px 0px 5px #ccc;margin-right: 10px;">
                                                        <img src="{{URL::to('public/front').'/'}}images/linkedin.png"
                                                             style="width: 30px;vertical-align: top;">
                                                        <a style="outline: none;border-right: solid thin #e1e1e1;border-left: solid thin #e1e1e1;padding: 5px 5px 2px 5px;margin: 0px 5px;color: #666666 !important;width: 175px;display: inline-block;text-decoration: none;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;line-height: 21px;"
                                                           onkeyup="Setsociallink(this);" target="_blank"
                                                           data-text="Enter linkedin page link" class="social_linktxt"
                                                           unselectable="on" contenteditable="true" id="linkedin"
                                                           href="@if(isset($user_social->linkedin)) {{$user_social->linkedin}} @else {{"https://www.linkedin.com/login"}} @endif">@if(isset($user_social->linkedin))
                                                                {{$user_social->linkedin}}@endif</a>
                                                        <button type="button" contenteditable="false" unselectable="on"
                                                                class="btn-changeimg btn btn-danger social_delete waves-effect waves-light"
                                                                onclick="removesocial_block(this);"
                                                                data-toggle="tooltip"
                                                                title="" data-original-title="Delete"
                                                                aria-describedby="tooltip744762"><i
                                                                    class="mdi mdi-delete">
                                                            </i></button>
                                                    </span>
                                                    <span class="social_link_block"
                                                          style="background: #ffffff;display: inline-block;padding: 5px 5px 0px 5px;border-radius: 5px;box-shadow: 0px 0px 5px #ccc;-moz-box-shadow: 0px 0px 5px #ccc;-webkit-box-shadow: 0px 0px 5px #ccc;align-items: top;">
                                                        <img src="{{URL::to('public/front').'/'}}images/facebook.png"
                                                             style="width: 30px;vertical-align: top;">
                                                        <a style="outline: none;border-right: solid thin #e1e1e1;border-left: solid thin #e1e1e1;padding: 5px 5px 2px 5px;margin: 0px 5px;color: #666666 !important;width: 175px;display: inline-block;text-decoration: none;text-overflow: ellipsis;overflow: hidden;white-space: nowrap;line-height: 21px;"
                                                           onkeyup="Setsociallink(this);" target="_blank"
                                                           data-text="Enter facebook page link" class="social_linktxt"
                                                           unselectable="on" contenteditable="true" id="fb"
                                                           href="@if(isset($user_social->fb)) {{$user_social->fb}} @else {{"https://www.facebook.com"}} @endif">@if(isset($user_social->fb))
                                                                {{$user_social->fb}}@endif</a>
                                                        <button type="button" contenteditable="false" unselectable="on"
                                                                class="btn-changeimg btn btn-danger social_delete waves-effect waves-light"
                                                                onclick="removesocial_block(this);"
                                                                data-toggle="tooltip"
                                                                title="" data-original-title="Delete"
                                                                aria-describedby="tooltip696580"><i
                                                                    class="mdi mdi-delete">
                                                            </i></button>
                                                    </span>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td colspan="5">
                                            <h3 class="resu_mainheading"
                                                style="text-align:center;font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 15px 0px 10px 0px;">
                                                <sub class="saprate_line_card_left"></sub>Education<sub
                                                        class="saprate_line_card_right"></sub></h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <ul class="timeline"
                                                style="display: inline-block;width: 90%;list-style: none;padding: 0px;margin: 20px 0px 0px 5%;">
                                                @foreach($user_educations as $index=> $education)
                                                    @if($index < 3)
                                                        <li @if($index> 1) onclick="selectedrow_timeline(this);"
                                                                @endif>
                                                            <div style="display: inline-block;position: relative;width: 100%;"
                                                                 id="tour_user_education_{{$index}}">
                                                                <div class="timeline_circle"
                                                                     style="width: 15%;float: left;z-index: 10;text-align: center;position: relative;">
                                                            <span class="circle blue darken-2 z-depth-1-half" style="
                                                            color: #ffffff;
                                                            border-radius: 50%;
                                                            z-index: 10;
                                                            width: 50px;
                                                            height: 50px;
                                                            display: inline-block;
                                                            line-height: 50px;
                                                            font-size: 28px;
                                                            background: #1a7fd0 !important;
                                                            ">
                                                                {{--<i class="{{$education->icon}}"
                                                                aria-hidden="true"></i>--}}
                                                                @if(file_exists($education->icon))
                                                                    <img src="{{URL::to($education->icon)}}"
                                                                         style="width: 15px;"/>
                                                                @else
                                                                    <i class="mdi mdi-tie" aria-hidden="true"></i>
                                                                @endif
                                                            </span>
                                                                </div>
                                                                <div class="editable_container pencil_hoverthis timeline_editblock"
                                                                     style="margin-bottom: 20px;width: 80%;float: left;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;outline: none;">
                                                                    <h3 onkeyup="Focusoutsection();"
                                                                        onfocus="Focussection('resu_per_education');"
                                                                        education_icon="{{$education->icon}}"
                                                                        class="resu_education_txt_school"
                                                                        education_type="{{$education->type}}"
                                                                        id="resu_html_education10" unselectable="on"
                                                                        contentEditable=true
                                                                        data-text="Enter your {{$education->type}} @if($index < 2) school @else college @endif name - Year"
                                                                        style="font-family: corbel;color: rgb(255, 255, 255);padding: 10px;background: rgb(255, 136, 0);font-size: 24px;">
                                                                        @if(isset($education->education_name))
                                                                            {{$education->education_name}} @endif</h3>
                                                                    <div style="padding: 15px;color: #666666;">
                                                                        {{--@if($index == 2)--}}
                                                                        <b
                                                                                style="outline:none;margin: 0px 0px 5px 0px;display: inline-block;width: 100%;">
                                                                            <a onkeyup="SetLink(this);"
                                                                               href="@if(isset($education->website)) {{$education->website}} @endif"
                                                                               unselectable="on" contentEditable="true"
                                                                               style="outline: none;color:#07d !important;"
                                                                               class="resu_education_txt_school_website"
                                                                               data-text="www.entercollegewebsite.com"
                                                                               target="_blank">@if(isset($education->website))
                                                                                    {{$education->website}} @endif</a></b>
                                                                        {{--@endif--}}
                                                                        <p onkeyup="Focusoutsection();"
                                                                           onfocus="Focussection('resu_per_education');"
                                                                           class="resu_education_txt resu_education_txt_school_board"
                                                                           id="resu_html_education10_txt"
                                                                           unselectable="on"
                                                                           contentEditable=true
                                                                           data-text="Enter {{$education->type}} @if($index < 2) school @else college @endif/Enter board name"
                                                                           style="outline: none;margin-bottom: 0px;">
                                                                            @if(isset($education->organization))
                                                                                {{$education->organization}} @endif</p>
                                                                    </div>
                                                                </div>
                                                                <div class="resu_line"
                                                                     style="position: absolute;width: 2px;z-index: 1;left: 7.5%;height: 100%;background: #1a7fd0;top: 20px;-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @else
                                                        <li class="">
                                                            <div style="display: inline-block;position: relative;width: 100%;"
                                                                 id="tour_user_education_{{$index}}">
                                                                <div class="timeline_circle"
                                                                     style="width: 15%;float: left;z-index: 10;text-align: center;position: relative;">
                                                                <span class="circle blue darken-2 z-depth-1-half"
                                                                      style="
                                                            color: #ffffff;
                                                            border-radius: 50%;
                                                            z-index: 10;
                                                            width: 50px;
                                                            height: 50px;
                                                            display: inline-block;
                                                            line-height: 50px;
                                                            font-size: 28px;
                                                            background: #1a7fd0 !important;
                                                            ">
                                                                    {{--<i class="{{$education->icon}}"
                                                                    aria-hidden="true"></i>--}}
                                                                    {{--<img src="{{URL::to($education->icon)}}"--}}
                                                                    {{--style="width: 35px;"/></span>--}}
                                                                    @if(file_exists($education->icon))
                                                                        <img src="{{URL::to($education->icon)}}"
                                                                             style="width: 25px;"/>
                                                                    @else
                                                                        <i class="mdi mdi-school"
                                                                           aria-hidden="true"></i>
                                                                    @endif
                                                                </span>
                                                                </div>
                                                                <div class="editable_container pencil_hoverthis timeline_editblock"
                                                                     style="margin-bottom: 5px;width: 80%;float: left;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;outline: none;">
                                                                    <h3 onkeyup="Focusoutsection();"
                                                                        onfocus="Focussection('resu_per_education');"
                                                                        education_type="{{$education->type}}"
                                                                        education_icon="{{$education->icon}}"
                                                                        unselectable="on"
                                                                        class="resu_education_txt_school"
                                                                        contentEditable=true
                                                                        data-text="Enter your {{$education->type}} college name- Year"
                                                                        style="font-family: corbel;padding: 10px;margin: 0px;color: #ffffff;background: #ff8800;/* background: #666666; */font-size: 24px;">
                                                                        @if(isset($education->education_name))
                                                                            {{$education->education_name}} @endif</h3>
                                                                    <div class="resu_line"
                                                                         style="padding: 15px;color: #666666;"><b
                                                                                style="outline:none;margin: 0px 0px 5px 0px;display: inline-block;width: 100%;">
                                                                            <a onkeyup="SetLink(this);"
                                                                               class="resu_education_txt_school_website"
                                                                               href="@if(isset($education->website)) {{$education->website}} @endif"
                                                                               unselectable="on" contentEditable="true"
                                                                               style="outline: none;color:#07d !important;"
                                                                               data-text="www.entercollegewebsite.com"
                                                                               target="_blank">@if(isset($education->website))
                                                                                    {{$education->website}} @endif</a></b>

                                                                        <p onkeyup="Focusoutsection();"
                                                                           onfocus="Focussection('resu_per_education');"
                                                                           class="resu_education_txt resu_education_txt_school_board"
                                                                           id="resu_html_education10_txt"
                                                                           unselectable="on"
                                                                           contentEditable=true
                                                                           data-text="Enter {{$education->type}} college/Enter board name"
                                                                           style="outline: none;margin-bottom: 0px;">
                                                                            @if(isset($education->organization))
                                                                                {{$education->organization}} @endif</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr onclick="selectedrow(this);" class="">
                                        <td colspan="5">
                                            <h3 class="resu_mainheading"
                                                style="text-align:center;font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 25px 0px;">
                                                <sub class="saprate_line_card_left"></sub>Achievement<sub
                                                        class="saprate_line_card_right"></sub></h3>
                                        </td>
                                    </tr>
                                    @foreach($user_achievements as $user_achievemt)
                                        <tr onclick="selectedrow(this);" class="">
                                            <td valign="top" colspan="5" style="text-align: center;">
                                                <div class="resu_archivement_fileblock" id="tour_user_achivement_img"
                                                     style="width: 100%;margin-right:2%;/* float:left; */position: relative;display: inline-block;margin: 0px auto;max-width: 300px;">

                                                    @if(file_exists("public/$user_achievemt->image") &&
                                                    isset($user_achievemt->image))
                                                        <img class="global_img acheivement_image"
                                                             save_path="{{"$user_achievemt->image"}}"
                                                             src="{{URL::to('public').'/'.$user_achievemt->image}}"
                                                             style="width: 100%;float:left;margin-bottom: 15px;"
                                                             align="left">
                                                    @else
                                                        <img class="global_img acheivement_image"
                                                             save_path="achievement/add-achiveiment.jpg"
                                                             src="{{URL::to('public/front').'/'}}images/add-achiveiment.jpg"
                                                             style="width: 100%;float:left;margin-bottom: 15px;"
                                                             align="left">
                                                    @endif
                                                    <input class="file_upload" type="file"
                                                           onchange="AchievementChangeSetImage(this)">
                                                </div>
                                                <div class="archivement_editblock pencil_hoverthis"
                                                     id="tour_user_achivement_txt"
                                                     style="width: 100%;float: left;background-color:#f5f5f5;font-family: Calibri;padding: 15px;position: relative;outline: none;text-align: left;">
                                                    <h3 style="outline:none;margin-bottom: 5px;" contenteditable="true"
                                                        unselectable="on" class="acheivement_title"
                                                        data-text="{{ isset($user_achievemt->title)?$user_achievemt->title:'Give an achievement title'}}">
                                                        {{ isset($user_achievemt->title)?$user_achievemt->title:'Give an achievement title'}}
                                                    </h3>

                                                    <span class="number_bullet_container">
                                                    <p onkeyup="Focusoutsection();"
                                                       onfocus="Focussection('resu_per_experiance');"
                                                       class="exp_company_details1 acheivement_content"
                                                       contentEditable="true" unselectable="on"
                                                       style="margin: 0px;outline: none;"
                                                       data-text="{{ isset($user_achievemt->content)?$user_achievemt->content:'Describe achievement content here'}}">
                                                        {{ isset($user_achievemt->content)?$user_achievemt->content:'Describe achievement content here'}}
                                                    </p>
                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr onclick="selectedrow(this);" class="">
                                        <td colspan="5">
                                            <h3 class="resu_mainheading"
                                                style="text-align:center;font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 15px 0px 25px 0px;">
                                                <sub class="saprate_line_card_left"></sub>Work Experience<sub
                                                        class="saprate_line_card_right"></sub></h3>
                                        </td>
                                    </tr>
                                    @foreach($user_work_exps as $user_work_exp)
                                        <tr onclick="selectedrow(this);" class="">
                                            <td colspan="5" id="tour_user_workexperience">
                                                <div class="pencil_hoverthis experiance_editblock res_margin0"
                                                     style="padding: 15px;background: #f5f5f5;display: inline-block;position: relative;z-index: 5;outline: none;margin-bottom: 15px;width: 100%;">
                                                    <h5 onkeyup="Focusoutsection();"
                                                        onfocus="Focussection('resu_per_experiance');"
                                                        id="resu_html_experiance" class="exp_company_name"
                                                        contenteditable="true" unselectable="on"
                                                        data-text="Enter your company name"
                                                        style="outline:none;font-family: Calibri;font-size: 26px;font-weight: bold;border-bottom: solid thin #cccccc;padding-bottom: 5px;">
                                                        @if(isset($user_work_exp->company)) {{$user_work_exp->company}}
                                                        @endif</h5>
                                                    <b style="display: inline-block;width: 100%;margin: 8px 0px 3px 0px;">
                                                        <a style="outline: none;color:#07d !important;"
                                                           onkeyup="SetLink(this);" target="_blank"
                                                           data-text="@if(!isset($user_work_exp->website)) Enter company website Eg: www.companywebsite.com @endif"
                                                           unselectable="on" class="exp_company_website"
                                                           contenteditable="true"
                                                           href="@if(isset($user_work_exp->website)) {{$user_work_exp->website}} @endif">@if(isset($user_work_exp->website))
                                                                {{$user_work_exp->website}} @endif</a></b>
                                                    {{--<b style="display: inline-block;width: 100%;margin: 8px 0px 3px 0px;">--}}
                                                    {{--<a style="outline: none;color:#07d !important;"--}}
                                                    {{--onkeyup="SetLink(this);" target="_blank"--}}
                                                    {{--data-text="www.companywebsite.com" unselectable="on"--}}
                                                    {{--contenteditable="true"--}}
                                                    {{--href="http://margin: 0px 8px;    color: #a2a2a2;    font-family: cursive;    float: left;    font-weight: bold;"></a></b>--}}

                                                    {{--<b onkeyup="Focusoutsection();"--}}
                                                    {{--onfocus="Focussection('resu_per_experiance');"--}}
                                                    {{--class="exp_company_desig" contenteditable="true"--}}
                                                    {{--unselectable="on"--}}
                                                    {{--data-text="Enter designation Eg: Sr. Web Designer - June 2019 - Current"--}}
                                                    {{--style="outline:none;display: inline-block;padding-bottom: 5px;">@if(isset($user_work_exp->designation)) {{$user_work_exp->designation." - ". date('M-Y',strtotime($user_work_exp->start_date))." - ".($user_work_exp->is_current_working == 1 ? "current":date('M-Y',strtotime($user_work_exp->end_date)))}}
                                                    @endif</b>--}}


                                                    <div style="width: 100%;display: inline-block;">
                                                        <b onfocus="Focussection('resu_per_experiance');"
                                                           data-text="Position / Title" class="exp_company_desig"
                                                           contenteditable="true" unselectable="on"
                                                           style="outline:none;display: inline-block;padding-bottom: 5px;width:100%">@if(isset($user_work_exp->designation) && !empty($user_work_exp->designation)) {{$user_work_exp->designation}} @endif</b>
                                                        <div style="width: 100%;display: inline-block;">
                                                            <div contentEditable="true"
                                                                 onfocus="Focussection('resu_per_experiance');"
                                                                 data-text="mm" required-message="Enter Start Month"
                                                                 maxlength="2"
                                                                 class="start_month validateLength required2"
                                                                 style="overflow: hidden;outline: none;border:none;border-bottom: dashed 2px #d0cfcf;width: 30px;height: 20px;float: left;background: transparent;text-align: center;font-family: initial;font-weight: bold;padding: 0px;color: #666666;">
                                                                @if($user_work_exp->start_date)
                                                                    {{date('m',strtotime($user_work_exp->start_date))}} @endif
                                                            </div>
                                                            <span
                                                                    style="display: inline-block;margin: 0px 8px;color: #d0cfcf;font-family: cursive;float: left;font-weight: bold;">/</span>
                                                            <div contentEditable="true"
                                                                 required-message="Enter Start Year"
                                                                 onfocus="Focussection('resu_per_experiance');"
                                                                 data-text="yyyy" maxlength="4"
                                                                 class="start_year validateLength required2"
                                                                 style="overflow: hidden;outline: none;border: none;border-bottom: dashed 2px #d0cfcf;width: 45px;height: 20px;float: left;background: transparent;text-align: center;font-family: inherit;font-weight: bold;padding: 0px;margin: 0px;color: #666666;">
                                                                @if($user_work_exp->start_date)
                                                                    {{date('Y',strtotime($user_work_exp->start_date))}} @endif
                                                            </div>
                                                            <span
                                                                    style="display: inline-block;margin: 0px 10px;color: #666666;float: left;font-size: 22px;line-height: 20px;">-</span>

                                                            <div contentEditable="true"
                                                                 required-message="Enter End Month"
                                                                 class="hidepresent end_month validateLength required2"
                                                                 onfocus="Focussection('resu_per_experiance');"
                                                                 data-text="mm" maxlength="2"
                                                                 style="overflow: hidden;outline: none;border: none;border-bottom: dashed 2px #d0cfcf;width: 30px;height: 20px;float: left;background: transparent;text-align: center;font-family: initial;font-weight: bold;padding: 0px;color: #666666;@if($user_work_exp->is_current_working == 1) display: none; @endif">
                                                                @if($user_work_exp->end_date)
                                                                    {{date('m',strtotime($user_work_exp->end_date))}} @endif
                                                            </div>
                                                            <span class="hidepresent"
                                                                  style="margin: 0px 8px;color: #d0cfcf;font-family: cursive;float: left;font-weight: bold; @if($user_work_exp->is_current_working == 1) display: none; @endif">/</span>
                                                            <div contentEditable="true"
                                                                 class="hidepresent end_year validateLength required2"
                                                                 onfocus="Focussection('resu_per_experiance');"
                                                                 required-message="Enter End Year" data-text="yyyy"
                                                                 maxlength="4"
                                                                 style="overflow: hidden;outline: none;border: none;border-bottom: dashed 2px #d0cfcf;width: 45px;height: 20px;float: left;background: transparent;text-align: center;font-family: inherit;font-weight: bold;padding: 0px;margin: 0px;color: #666666;margin-right: 10px;@if($user_work_exp->is_current_working == 1) display: none; @endif">
                                                                @if($user_work_exp->end_date)
                                                                    {{date('Y',strtotime($user_work_exp->end_date))}} @endif
                                                            </div>

                                                            <div id="checkbox-present-box"
                                                                 style="float: left;margin-left: 10px;font-weight: bold;">
                                                                <input type="checkbox"
                                                                       @if($user_work_exp->is_current_working == 1) checked
                                                                       @endif
                                                                       class="form-check-input is_current_working present_chk"
                                                                       id="job-status" onchange="CheckCurrent(this);">
                                                                <label
                                                                        class="form-check-label decleartion_checkbox present_for"
                                                                        for="job-status" id="present-checkbox-sign"
                                                                        style="float: left;padding-left: 25px;"></label>
                                                                <p
                                                                        style="margin: 0px;display: inline-block;margin-top: 0px;float: left;">
                                                                    Present</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="number_bullet_container">
                                                    <p onkeyup="Focusoutsection();"
                                                       onfocus="Focussection('resu_per_experiance');"
                                                       class="exp_company_details" contentEditable="true"
                                                       unselectable="on" style="margin: 0px;outline: none;"
                                                       data-text="Describe your job Responsibilities.">
                                                        @if(isset($user_work_exp->description))
                                                            {{$user_work_exp->description}} @endif</p>
                                                </span>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5">
                                            <h3 class="resu_mainheading"
                                                style="font-family: Calibri;text-align:center;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 15px 0px 25px 0px;">
                                                <sub class="saprate_line_card_left"></sub>Key Skills<sub
                                                        class="saprate_line_card_right"></sub></h3>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="5" id="tour_user_skills">
                                            <div class="pencil_hoverthis resu_skillblock res_margin0"
                                                 style="padding: 15px;background: #f5f5f5;display: inline-block;position: relative;z-index: 5;outline: none;margin-bottom: 15px;width: 100%;">
                                                <h5
                                                        style="outline:none;font-family: Calibri;font-size: 26px;margin-bottom: 8px; font-weight: bold;padding-bottom: 10px;border-bottom: solid thin #cccccc;">
                                                    Skills</h5>
                                                <span class="number_bullet_container">
                                                    <p contenteditable="true" unselectable="on"
                                                       onkeyup="Focusoutsection();"
                                                       onfocus="Focussection('resu_per_skills');" id="resu_html_skills"
                                                       style="margin:0px;outline: none;" contentEditable="true"
                                                       required-message="Please enter your skills"
                                                       class="resu_html_skills required2"
                                                       data-text="Enter skills Eg: Open-Mindedness, Empathy, Respect, Listening, Delegating, Positivity, Public Speaking, Teamwork, Time Management.">
                                                        @if(isset($user_skills->skills)){{$user_skills->skills}} @endif
                                                    </p>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="5">
                                            <h3 class="resu_mainheading"
                                                style="text-align:center;font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 15px 0px 25px 0px;">
                                                <sub class="saprate_line_card_left"></sub>Personal Details<sub
                                                        class="saprate_line_card_right"></sub></h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" id="tour_user_personal">
                                            <table class="personal_table"
                                                   style="width: 100%;position: relative;border: solid thin #e1e1e1;outline: none;">
                                                <tbody>
                                                <tr id="tour_user_location" onclick="personal_rowclick(this);">
                                                    <td
                                                            style="font-family: Calibri;width: 30%;padding:10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                        Current Location
                                                    </td>
                                                    <td contenteditable="true" onkeyup="Focusoutsection();"
                                                        onfocus="Focussection('resu_per_personal');"
                                                        unselectable="on" class="edit_perblock"
                                                        id="current_location"
                                                        style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        {{$user_profile->current_location}}
                                                    </td>
                                                    <td
                                                            style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                        <button type="button" contenteditable="false"
                                                                unselectable="on"
                                                                class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                onclick="removeblock_per(this);" data-toggle="tooltip"
                                                                title="Delete"><i class="mdi mdi-delete"> </i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr id="tour_user_ctc" onclick="personal_rowclick(this);">
                                                    <td
                                                            style="font-family: Calibri;width: 30%;padding:10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                        Current CTC (LPA)
                                                    </td>
                                                    <td contenteditable="true" onkeyup="Focusoutsection();"
                                                        onfocus="Focussection('resu_per_personal');"
                                                        unselectable="on" class="edit_perblock" id="current_ctc"
                                                        style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        {{$user_profile->current_ctc}}
                                                    </td>
                                                    <td
                                                            style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                        <button type="button" contenteditable="false"
                                                                unselectable="on"
                                                                class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                onclick="removeblock_per(this);" data-toggle="tooltip"
                                                                title="Delete"><i class="mdi mdi-delete"> </i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr id="tour_user_experiance" onclick="personal_rowclick(this);">
                                                    <td
                                                            style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                        Total Experience(Year)
                                                    </td>
                                                    <td contenteditable="true" onkeyup="Focusoutsection();"
                                                        onfocus="Focussection('resu_per_personal');"
                                                        unselectable="on" class="edit_perblock" id="total_exp"
                                                        style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        {{$user_profile->total_exp}}
                                                    </td>
                                                    <td style="
border-bottom: solid thin #e1e1e1;
padding: 5px 10px 0px 0px;
width: 40px;
text-align: right;
">
                                                        <button type="button" contenteditable="false"
                                                                unselectable="on"
                                                                class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                onclick="removeblock_per(this);" data-toggle="tooltip"
                                                                title="Delete"><i class="mdi mdi-delete"> </i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr id="tour_user_notice" onclick="personal_rowclick(this);">
                                                    <td
                                                            style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                        Notice Period(Days)
                                                    </td>
                                                    <td contenteditable="true" onkeyup="Focusoutsection();"
                                                        onfocus="Focussection('resu_per_personal');"
                                                        unselectable="on" class="edit_perblock" id="notice_period"
                                                        style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        {{$user_profile->notice_period}}
                                                    </td>
                                                    <td style="
border-bottom: solid thin #e1e1e1;
padding: 5px 10px 0px 0px;
width: 40px;
text-align: right;
">
                                                        <button type="button" contenteditable="false"
                                                                unselectable="on"
                                                                class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                onclick="removeblock_per(this);" data-toggle="tooltip"
                                                                title="Delete"><i class="mdi mdi-delete"> </i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr id="tour_user_relocate" onclick="personal_rowclick(this);"
                                                    class="">
                                                    <td
                                                            style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                        Willing to Relocate
                                                    </td>
                                                    <td contenteditable="true" onkeyup="Focusoutsection();"
                                                        onfocus="Focussection('resu_per_personal');"
                                                        unselectable="on" class="edit_perblock"
                                                        id="willing_to_relocate"
                                                        style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        {{$user_profile->willing_to_relocate == "Yes" ? "Yes": "No"}}
                                                    </td>
                                                    <td style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;
">
                                                        <button type="button" contenteditable="false"
                                                                unselectable="on"
                                                                class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                onclick="removeblock_per(this);" data-toggle="tooltip"
                                                                title="Delete"><i class="mdi mdi-delete"> </i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr id="tour_user_age" onclick="personal_rowclick(this);" class="">
                                                    <td
                                                            style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                        Age
                                                    </td>
                                                    <td contenteditable="true" onkeyup="Focusoutsection();"
                                                        onfocus="Focussection('resu_per_personal');"
                                                        unselectable="on" class="edit_perblock" id="age"
                                                        style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        {{$user_profile->age}}
                                                    </td>
                                                    <td
                                                            style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                        <button type="button" contenteditable="false"
                                                                unselectable="on"
                                                                class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                onclick="removeblock_per(this);" data-toggle="tooltip"
                                                                title="Delete"><i class="mdi mdi-delete"> </i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr id="tour_user_language" onclick="personal_rowclick(this);">
                                                    <td
                                                            style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                        Language
                                                    </td>
                                                    <td contenteditable="true" onkeyup="Focusoutsection();"
                                                        onfocus="Focussection('resu_per_personal');"
                                                        unselectable="on" class="edit_perblock" id="language"
                                                        style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        {{$user_profile->language}}
                                                    </td>
                                                    <td
                                                            style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                        <button type="button" contenteditable="false"
                                                                unselectable="on"
                                                                class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                onclick="removeblock_per(this);" data-toggle="tooltip"
                                                                title="Delete"><i class="mdi mdi-delete"> </i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr id="tour_user_gender" onclick="personal_rowclick(this);">
                                                    <td
                                                            style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                        Gender
                                                    </td>
                                                    <td contenteditable="true" onkeyup="Focusoutsection();"
                                                        onfocus="Focussection('resu_per_personal');"
                                                        unselectable="on" class="edit_perblock" id="gender"
                                                        style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none">
                                                        {{$user_profile->gender}}
                                                    </td>
                                                    <td style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;
text-align: right;
">
                                                        <button type="button" contenteditable="false"
                                                                unselectable="on"
                                                                class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                onclick="removeblock_per(this);" data-toggle="tooltip"
                                                                title="Delete"><i class="mdi mdi-delete"> </i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr id="tour_user_status" onclick="personal_rowclick(this);">
                                                    <td
                                                            style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                        Married Status
                                                    </td>
                                                    <td contenteditable="true" onkeyup="Focusoutsection();"
                                                        onfocus="Focussection('resu_per_personal');"
                                                        unselectable="on" class="edit_perblock" id="marital_status"
                                                        style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        {{$user_profile->marital_status}}
                                                    </td>
                                                    <td
                                                            style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                        <button type="button" contenteditable="false"
                                                                unselectable="on"
                                                                class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                onclick="removeblock_per(this);" data-toggle="tooltip"
                                                                title="Delete"><i class="mdi mdi-delete"> </i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr id="tour_user_hobby" onclick="personal_rowclick(this);"
                                                    class="">
                                                    <td
                                                            style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                        Hobby / Interest
                                                    </td>
                                                    <td contenteditable="true" onkeyup="Focusoutsection();"
                                                        onfocus="Focussection('resu_per_personal');"
                                                        unselectable="on" class="edit_perblock" id="interest_hobies"
                                                        style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        {{$user_profile->interest_hobies}}
                                                    </td>
                                                    <td
                                                            style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                        <button type="button" contenteditable="false"
                                                                unselectable="on"
                                                                class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                onclick="removeblock_per(this);" data-toggle="tooltip"
                                                                title="Delete"><i class="mdi mdi-delete"> </i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr id="tour_user_communication_expertise"
                                                    onclick="personal_rowclick(this);" class="">
                                                    <td
                                                            style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                        Communication Expertise
                                                    </td>
                                                    <td contenteditable="true" onkeyup="Focusoutsection();"
                                                        onfocus="Focussection('resu_per_personal');"
                                                        unselectable="on" class="edit_perblock"
                                                        id="communication_expertise"
                                                        style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;"
                                                        title="Excellent/Good/Average/Poor">
                                                        {{ isset($user_profile->communication_expertise)?$user_profile->communication_expertise:''}}
                                                    </td>
                                                    <td
                                                            style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                        <button type="button" contenteditable="false"
                                                                unselectable="on"
                                                                class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                onclick="removeblock_per(this);" data-toggle="tooltip"
                                                                title="Delete"><i class="mdi mdi-delete"> </i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr id="tour_user_driving" onclick="personal_rowclick(this);"
                                                    class="">
                                                    <td
                                                            style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                        Driving Licence No. / Aadhaar No.
                                                    </td>
                                                    <td contenteditable="true" onkeyup="Focusoutsection();"
                                                        onfocus="Focussection('resu_per_personal');"
                                                        unselectable="on" class="edit_perblock" id="driving_licence"
                                                        style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                        {{$user_profile->driving_licence}}
                                                    </td>
                                                    <td
                                                            style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                        <button type="button" contenteditable="false"
                                                                unselectable="on"
                                                                class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                onclick="removeblock_per(this);" data-toggle="tooltip"
                                                                title="Delete"><i class="mdi mdi-delete"> </i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <h3 class="resu_mainheading"
                                                style="text-align:center;font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 20px 0px;">
                                                <sub class="saprate_line_card_left"></sub>Declaration<sub
                                                        class="saprate_line_card_right"></sub></h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" id="tour_user_declaration">
                                            <div class="pencil_hoverthis" contenteditable="true" unselectable="on"
                                                 style="padding: 10px 15px;background: #f5f5f5;display: inline-block;position: relative;z-index: 5;outline: none;width: 100%;margin-bottom: 10px;">
                                                <input type="checkbox" checked
                                                       class="form-check-input is_current_working present_chk"
                                                       id="job-status" onchange="CheckCurrent(this);">
                                                <label class="form-check-label decleartion_checkbox " for="job-status"
                                                       id="present-checkbox-sign1"
                                                       style="float: left;padding-left: 25px;"></label>
                                                <p contentEditable="false"
                                                   style="margin: 0px;display: inline-block;margin-top: 0px;float: left;">
                                                    I hereby declare that the above information is true to best of
                                                    my knowledge.</p>
                                                {{--<div class="form-check" style="padding: 0px;">--}}
                                                {{--<input type="checkbox" class="form-check-input"--}}
                                                {{--id="materialUnchecked" checked>--}}
                                                {{--<label class="form-check-label decleartion_checkbox"--}}
                                                {{--for="materialUnchecked" style="float: left;"></label>--}}
                                                {{--<p--}}
                                                {{--style="margin: 0px;display: inline-block;margin-top: 0px;float: left;">--}}
                                                {{--I hereby declare that the above information is true to best of--}}
                                                {{--my--}}
                                                {{--knowledge.</p>--}}
                                                {{--</div>--}}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align: left;max-width: 100px !important;"><b
                                                    class="bold"
                                                    style="font-family: Calibri;display: inline-block;margin-right: 10px;">Date
                                                :</b>
                                            <div style="/* width: 100%; */display: inline-block;outline: none;"
                                                 contenteditable="true" id="resume_date">
                                                {{\Carbon\Carbon::now()->format('d-M-Y')}}
                                            </div>
                                        </td>
                                        <td colspan="3" id="tour_user_place" style="padding-left: 15px;">
                                            <b class="bold"
                                               style="font-family: Calibri;display: inline-block;margin-right: 10px;">Place
                                                : </b>
                                            <div contenteditable="true" style="display: inline-block;outline: none;"
                                                 id="resume_location">
                                                {{-- Jabalpur --}}
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <h5
                                                    style="text-align: center;margin-top: 10px;padding: 10px 0px;border:solid thin #e1e1e1;background:#f5f5f5;font-size: 20px;">
                                                <b onclick="print_statement();">The best way to predict the future is to
                                                    create it.</b>
                                            </h5>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="center_btnbox">
                        <button type="button" id="tour_user_preview" onclick="PreviewResume();"
                                class="btn btn-primary waves-effect waves-light">Resume Preview
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="copydiv" class="display-none"></div>
    <script type="text/javascript">
        //        $(document).ready(function () {
        //            CheckResumeContent();
        //            changePercentgraph();
        //            RestartResume();
        //        });
        $(document).ready(function () {
            let $window = $(window);

            function checkWidth() {
                let windowsize = $window.width();
                let getpercent = $(".resume_percent_txtbox .completed").length;
                if (windowsize > 720 && getpercent < 6) {
                    RestartResume();
                }
            }

            CheckResumeContent();
            changePercentgraph();
            // Execute on load
            checkWidth();
            // Bind event listener
            $(window).resize(checkWidth);
        });

        // function removesocial_block(dis) {
        //     let checksociallength = $('.social_link_block').length;
        //     if(checksociallength > 1){
        //         $(dis).parent().remove();
        //         $('.tooltip').remove();
        //         ShowSuccessPopupMsg('Social Connectivity deleted successfully!');
        //     }else {
        //         $('.tooltip').remove();
        //         ShowErrorPopupMsg('Do not delete all social connectivity.');
        //     }
        // }

        function Setsociallink(dis) {
            let InputText = $.trim($(dis).text());
            if (InputText != "") {
                if (InputText && !InputText.match(/^http([s]?):\/\/.*/)) {
                    InputText = 'https://' + InputText;
                }
                $(dis).attr("href", InputText);
            }
            CheckResumeContent();
        }

        function SetLink(dis) {
            let InputText = $.trim($(dis).text());
            if (InputText != "") {
                if (InputText && !InputText.match(/^http([s]?):\/\/.*/)) {
                    InputText = 'https://' + InputText;
                }
                $(dis).attr("href", InputText);
            }
        }

        function Focussection(active_id) {

            $('.field_block').removeClass('field_active');
            $('#' + active_id).addClass('field_active');
            CheckResumeContent();
        }

        function Focusoutsection() {
            $('.field_block').removeClass('field_active');
            CheckResumeContent();
        }

        function CheckResumeContent() {
            changePercentgraph();
            let resu_name = $('#resu_html_name').text();
            if (resu_name != "") {
                $('#resu_per_name').addClass('completed');
            } else {
                $('#resu_per_name').removeClass('completed')
            }
            let resu_email = $('#resu_html_email').text();
            if (resu_email != "") {
                $('#resu_per_email').addClass('completed');
            } else {
                $('#resu_per_email').removeClass('completed');
            }
            let resu_social = $('.social_linktxt').text();
            if (resu_social != "") {
                $('#resu_per_social').addClass('completed');
            } else {
                $('#resu_per_social').removeClass('completed');
            }
            let resu_contact = $('#resu_html_conno').text();
            if (resu_contact != "") {
                $('#resu_per_contact').addClass('completed');
            } else {
                $('#resu_per_contact').removeClass('completed');
            }
            let resu_desig = $('#resu_html_designation').text();
            if (resu_desig != "") {
                $('#resu_per_designation').addClass('completed');
            } else {
                $('#resu_per_designation').removeClass('completed');
            }
            let resu_education = $('.resu_education_txt').text();
            if (resu_education != "") {
                $('#resu_per_education').addClass('completed');
            } else {
                $('#resu_per_education').removeClass('completed');
            }
            let resu_experiance = $('#resu_html_experiance').text();
            if (resu_experiance != "") {
                $('#resu_per_experiance').addClass('completed');
            } else {
                $('#resu_per_experiance').removeClass('completed');
            }
            let resu_skills = $('#resu_html_skills').text();
            if (resu_skills != "") {
                $('#resu_per_skills').addClass('completed');
            } else {
                $('#resu_per_skills').removeClass('completed');
            }
            //let resu_personale = $('.edit_perblock').text();
            let resu_personale = ($.trim($('.edit_perblock').text()));
            let chackanyblank = true;
            $('.edit_perblock').each(function () {
                let checkthistxt = $.trim($(this).text());
                if (checkthistxt == "") {
                    chackanyblank = false;
                    return false;
                }
            });
            if (chackanyblank) {
                $('#resu_per_personal').addClass('completed');
            } else {
                $('#resu_per_personal').removeClass('completed');
            }
        }

        function changePercentgraph() {
            let getpercent = $(".resume_percent_txtbox .completed").length;
            $("#counter_text").text("");
            $('#percent_imgcontainer img').css('opacity', 0);
            $('#resu_per_status_img1').css('opacity', 1);
            switch (getpercent) {
                case 1:
                    $("#counter_text").text("10%");
                    $("#dynamic_percent").attr("data-percentage", 10);
                    $(".resume_percent_txtbox .completed").attr("data-percent", 10);
                    break;
                case 2:
                    $("#counter_text").text("20%");
                    $("#dynamic_percent").attr("data-percentage", 20);
                    $(".resume_percent_txtbox .completed").attr("data-percent", 20);
                    break;
                case 3:
                    $("#counter_text").text("30%");
                    $("#dynamic_percent").attr("data-percentage", 30);
                    $(".resume_percent_txtbox .completed").attr("data-percent", 30);
                    break;
                case 4:
                    $("#counter_text").text("40%");
                    $("#dynamic_percent").attr("data-percentage", 40);
                    break;
                case 5:
                    $("#counter_text").text("50%");
                    $("#dynamic_percent").attr("data-percentage", 50);
                    break;
                case 6:
                    $("#counter_text").text("60%");
                    $("#dynamic_percent").attr("data-percentage", 60);
                    break;
                case 7:
                    $("#counter_text").text("70%");
                    $("#dynamic_percent").attr("data-percentage", 70);
                    break;
                case 8:
                    $('#percent_imgcontainer img').css('opacity', 0);
                    $('#resu_per_status_img2').css('opacity', 1);
                    $("#counter_text").text("80%");
                    $("#dynamic_percent").attr("data-percentage", 80);
                    break;
                case 9:
                    $('#percent_imgcontainer img').css('opacity', 0);
                    $('#resu_per_status_img2').css('opacity', 1);
                    $("#counter_text").text("90%");
                    $("#dynamic_percent").attr("data-percentage", 90);
                    break;
                case 10:
                    $('#percent_imgcontainer img').css('opacity', 0);
                    $('#resu_per_status_img3').css('opacity', 1);
                    $("#counter_text").text("100%");
                    $("#dynamic_percent").attr("data-percentage", 100);
                    break;
                default:
                    $(".resume_percent_txtbox .completed").attr("data-percent", 30);
                    break;
            }
        }

        function RestartResume() {
            $('#profile_status_block').css('z-index', '1015');
            window.scrollTo(0, 0);
            let enjoyhint_instance = new EnjoyHint({});
            let enjoyhint_script_steps = [
                {
                    "next #tour_user_picblock": 'Hello, you can change your pic',
                    shape: 'circle'
                },
                {
                    "next #tour_user_name": "Fill your resume name<br>"
                },
                {
                    "next #tour_user_designation": "Enter current designation in your company<br>"
                },
                {
                    "next #tour_tagline": "Describe your self<br>" +
                    "<text style='color: #2bff3c'>enter your career objective</text> <br>" +
                    "<text style='color: #ffeb00'>Why recruiter hire you?</text><br>",
                },
                {
                    "next #resu_html_conno": "you can enter multiple contact no.<br>" +
                    "<text style='color: #ffeb00'>With comma separation</text><br>",
                },
                {
                    "next #resu_html_email": "you can enter personal<br>" +
                    "<text style='color: #ffeb00'>and professional email ids</text><br>",
                },
                {
                    "next #resu_html_social": "Enter your Social media link<br>" +
                    "<text style='color: #ffeb00'>You can easily connect your social medias</text><br>",
                },
                {
                    "next #tour_user_education_0": "Enter your 10'th school name with passing year<br>",
                },
                {
                    "next #tour_user_education_1": "Enter your 12'th school name with passing year<br>",
                },
                {
                    "next #tour_user_education_2": "Enter your college name with passing year<br>" +
                    "<text style='color: #ffeb00'>you can enter your college website</text> <br>",
                },
                {
                    "next #tour_user_education_3": "Enter post graduation college name<br>" +
                    "<text style='color: #ffeb00'>With passing year</text> <br>",
                },
                {
                    "next #tour_user_achivement_img": "You can upload archivement Image<br>",
                },
                {
                    "next #tour_user_achivement_txt": "<text style='color: #ffeb00'>Describe your archivement details</text><br>",
                },
                {
                    "next #tour_user_workexperience": "You can enter multiple work experience<br>" +
                    "<text style='color: #ffeb00'>Name, Website, Role, Designation</text><br>",
                },
                {
                    "next #tour_user_skills": "Enter your skills<br>" +
                    "<text style='color: #ffeb00'>Describe your expertise</text><br>",
                },
                {
                    "next #tour_user_location": "<text style='color: #2bff3c'>Enter current location</text> <br>",
                },
                {
                    "next #tour_user_ctc": "<text style='color: #2bff3c'>Enter current ctc</text> <br>",
                },
                {
                    "next #tour_user_experiance": "<text style='color: #2bff3c'>Enter total experiance count</text> <br>",
                },
                {
                    "next #tour_user_notice": "<text style='color: #ffeb00'>Company notice period in month</text> <br>",
                },
                {
                    "next #tour_user_relocate": "<text style='color: #2bff3c'>Relocate Yes / No</text> <br>",
                },
                {
                    "next #tour_user_age": "<text style='color: #ffeb00'>Total age count</text> <br>",
                },
                {
                    "next #tour_user_language": "<text style='color: #2bff3c'>Language understanding</text> <br>" +
                    "<text style='color: #ffeb00'>Like English, Hindi .....</text> <br>",
                },
                {
                    "next #tour_user_gender": "<text style='color: #ffeb00'>Enter your gender</text> <br>",
                },
                {
                    "next #tour_user_status": "<text style='color: #2bff3c'>Enter marital status</text> <br>",
                },
                {
                    "next #tour_user_hobby": "<text style='color: #2bff3c'>Explain your hobbies and interest</text> <br>",
                },
                {
                    "next #tour_user_communication_expertise": "<text style='color: #2bff3c'>Your communication expertise Expert, Good, Average or Poor</text> <br>",
                },
                {
                    "next #tour_user_driving": "<text style='color: #2bff3c'>Enter Driving Licence Number or Aadhar Card Number</text> <br>",
                },
                {
                    "next #tour_user_declaration": "Please checked checkbox for<br>" +
                    "<text style='color: #ffeb00'>Your information is correct</text> <br>",
                },
                {
                    "next #tour_user_place": "Enter current working city<br>",
                },
                {
                    "click #tour_user_preview": "Preview Your Resume <br>" +
                    "<text style='color: #ffeb00'>Create WhatsApp Link, PDF, DOC</text> <br>",
                }
            ];
            enjoyhint_instance.set(enjoyhint_script_steps);
            enjoyhint_instance.run();
            $('.enjoyhint_skip_btn').click(function () {
                $('#profile_status_block').css('z-index', '1');
            });
            $('.enjoyhint_close_btn').click(function () {
                $(".enjoyhint").remove(), $body.css({overflow: "auto"});
                $('#profile_status_block').css('z-index', '1');
            });
        }
    </script>
    {{--    <script type="text/javascript" src="{{URL::to('public/front').'/'}}js/editor/color-picker.js"></script>--}}
    <script type="text/javascript" src="{{URL::to('public/front').'/'}}js/editor/editor-tools.js"></script>
    <script type="text/javascript" src="{{URL::to('public/front').'/'}}js/enjoyhint.min.js"></script>

    <script>
        $(function () {
            $('#resume_location').html("{{$user_profile->current_location}}");

        });
        $('#current_location').on('keyup', function () {
            $('#resume_location').html($('#current_location').html());
        });
    </script>
@endsection