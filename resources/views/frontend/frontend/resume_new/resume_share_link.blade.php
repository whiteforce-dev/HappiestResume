<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ucwords($user->name)}} Resume | Happiest</title>
    <link rel="shortcut icon" href="{{ URL::to('public/front').'/' }}images/favicon.png" type="image/x-icon"/>
    <link href="{{ URL::to('public/front').'/' }}css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::to('public/front').'/' }}css/mdb.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::to('public/front').'/' }}css/materialdesignicons.css" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::to('public/front').'/' }}css/additional.css" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::to('public/front').'/' }}css/editor/color-picker.css"/>
    <link rel="stylesheet" href="{{ URL::to('public/front').'/' }}css/editor/editor-tools.css" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::to('public/front').'/' }}css/editor/enjoyhint.css" type="text/css"/>
    <link href="{{ URL::to('public/front').'/' }}css/style.css" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::to('public/front').'/' }}css/media.css" rel="stylesheet" type="text/css"/>
    <link rel='stylesheet' id='nd_options_font_family_h-css'
          href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C700&#038;ver=4.9.4' type='text/css'
          media='all'/>
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet"/>
    <style type="text/css">
        .pencil_hoverthis {
            cursor: pointer;
        }

        .preview_container .decleartion_checkbox:before {
            border: none !important;
            width: 10px !important;
            border-top: 2px solid transparent !important;
            border-left: 2px solid transparent !important;
            border-right: 2px solid #1a7fd0 !important;
            border-bottom: 2px solid #1a7fd0 !important;
            transform: rotate(40deg) !important;
            transform-origin: 100% 100% !important;
        }

        .resume_preview_section {
            background-image: url('{{URL::to('public/front/images/resume-link-bg2.jpg')}}');
        }
    </style>
</head>

<body>
<main class="main_block">
    <div id="loader-overlay" class="loader_overlay">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>
    <section class="resume_preview_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 res_small_padd">

                    <div class="preview_container" id="preview_html">

                        <div class="blank_resumebox card" contenteditable="false">
                            <div class="card-body" id="resume_html" contenteditable="false">
                                {{--<div class="res_link_logo_center">--}}
                                {{--<a href="{{URL::to('/')}}">--}}
                                {{--<img class="top_logowhite" src="{{URL::to('public/front/images/logo1.png')}}"--}}
                                {{--alt="Happiest Logo"></a>--}}
                                {{--</div>--}}
                                <div class="main_resume_container"
                                     style="font-family:Calisto MT;width: 100%;background-color: #ffffff;text-align: center;margin: 0px auto;position: relative;"
                                     id="resume_body" contenteditable="false">
                                    <table style="width: 100%;text-align: left;table-layout: fixed;">
                                        <tbody>
                                        <tr style="height: 15px;margin-bottom: 20px;width: 100%;">
                                            <td class="top-color" style="background: #f8e71c;width: 20%;"
                                                colspan="1"></td>
                                            <td class="top-color" style="background: #4285f4;width: 20%;"
                                                colspan="1"></td>
                                            <td class="top-color" style=" background: #ff8800;width: 20%;"
                                                colspan="1"></td>
                                            <td class="top-color" style="background: #4285f4;width: 20%;"
                                                colspan="1"></td>
                                            <td class="top-color" style="background: #f8e71c;width: 20%;"
                                                colspan="1"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="1" class="photo" style="width: 150px;">
                                                <div class="user_picblock" id="tour_user_picblock"
                                                     style="width: 100%;position: relative;max-width: 125px;">
                                                    @if(file_exists("public/$user->image") &&
                                                    isset($user->image))
                                                        <img class="global_img" id="profile_pic"
                                                             src="{{URL::to('public').'/'.$user->image}}" alt="image"
                                                             style="border: solid 5px #249991;border-radius: 50%;padding: 5px;margin-top: 10px;width: 125px;height: 125px;">
                                                    @else
                                                        <img class="global_img" id="profile_pic"
                                                             src="{{URL::to('public/front').'/'}}images/default-pic.png"
                                                             alt="image"
                                                             style="border: solid 5px #249991;border-radius: 50%;padding: 5px;margin-top: 10px;width: 125px;height: 125px;">
                                                    @endif
                                                    <input class="file_upload" type="file"
                                                           onchange="ChangeSetImage(this)"/>
                                                </div>
                                            </td>
                                            <td colspan="4">
                                                <div class="pencil_hoverthis" id="tour_user_name">
                                                    <h2>
                                                        <div style="color: #3b658a;outline: none"
                                                             contentEditable=true data-text="Enter Your Name"
                                                             class="resu_name textWithSpace required"
                                                             onkeyup="Focusoutsection();"
                                                             onfocus="Focussection('resu_per_name');"
                                                             id="resu_html_name">
                                                            @if(isset($user->name)) {{$user->name}} @else Enter
                                                            Your
                                                            Name @endif
                                                        </div>
                                                    </h2>
                                                </div>
                                                <div class="pencil_hoverthis" id="tour_user_designation">
                                                    <h6 class="editable"
                                                        style="position: relative;margin-top: 0px;outline: none;"
                                                        spellcheck="false">
                                                        <b>
                                                            <div contentEditable=true
                                                                 data-text="Enter Your Designation"
                                                                 style="outline: none;"
                                                                 class="resu_designation textWithSpace required"
                                                                 onkeyup="Focusoutsection();"
                                                                 onfocus="Focussection('resu_per_designation');"
                                                                 id="resu_html_designation">
                                                                @if(isset($user_work_exp->designation))
                                                                    {{$user_work_exp->designation}} @endif</div>
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
                                                                <p contentEditable=true
                                                                   data-text="Enter your title here"
                                                                   class="textWithSpace required" id="title"
                                                                   style="font-size: 14px;margin: 0px; outline: none;">
                                                                    @if(isset($user_work_exp->title))
                                                                        {{$user_work_exp->title}} @endif</p>
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
                                                       onfocus="Focussection('resu_per_contact');"
                                                       contentEditable=true data-text="Enter your contact no."
                                                       class="numberOnly required contact"
                                                       style="outline: none;">@if(isset($user->contact))
                                                            {{$user->contact}} @endif
                                                    </p>
                                                    <h5 class="resu_subheading" contenteditable="false"
                                                        unselectable="on"
                                                        style="font-family: Calibri;font-size: 22px;font-weight: bold;padding-bottom: 3px;border-bottom: solid thin #cccccc;margin-bottom: 5px;">
                                                        <font color="#3b658a">Email Id</font>
                                                    </h5>
                                                    <p id="resu_html_email" onkeyup="Focusoutsection();"
                                                       onfocus="Focussection('resu_per_email');"
                                                       contentEditable=true class="required"
                                                       data-text="Enter your email id" style="outline: none;">
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
                                                                       data-text="Enter linkedin page link"
                                                                       class="social_linktxt" unselectable="on"
                                                                       contenteditable="true" id="linkedin"
                                                                       href="@if(isset($user_social->linkedin)) {{$user_social->linkedin}} @else {{"https://www.linkedin.com/login"}} @endif">@if(isset($user_social->linkedin))
                                                                            {{$user_social->linkedin}}@endif</a>
                                                                    <button type="button" contenteditable="false"
                                                                            unselectable="on"
                                                                            class="btn-changeimg btn btn-danger social_delete waves-effect waves-light"
                                                                            onclick="removesocial_block(this);"
                                                                            data-toggle="tooltip" title=""
                                                                            data-original-title="Delete"
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
                                                                       data-text="Enter facebook page link"
                                                                       class="social_linktxt" unselectable="on"
                                                                       contenteditable="true" id="fb"
                                                                       href="@if(isset($user_social->fb)) {{$user_social->fb}} @else {{"https://www.facebook.com"}} @endif">@if(isset($user_social->fb))
                                                                            {{$user_social->fb}}@endif</a>
                                                                    <button type="button" contenteditable="false"
                                                                            unselectable="on"
                                                                            class="btn-changeimg btn btn-danger social_delete waves-effect waves-light"
                                                                            onclick="removesocial_block(this);"
                                                                            data-toggle="tooltip" title=""
                                                                            data-original-title="Delete"
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
                                                            <li @if($index> 1)
                                                                onclick="selectedrow_timeline(this);" @endif>
                                                                <div style="display: inline-block;position: relative;width: 100%;"
                                                                     id="tour_user_education_10">
                                                                    <div class="timeline_circle"
                                                                         style="width: 15%;float: left;z-index: 10;text-align: center;position: relative;">
                                                                        <span
                                                                                class="circle blue darken-2 z-depth-1-half"
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
                                                                            @if(file_exists($education->icon))
                                                                                <img src="{{URL::to($education->icon)}}"
                                                                                     style="width: 15px;"/>
                                                                            @else
                                                                                <i class="mdi mdi-tie"
                                                                                   aria-hidden="true"></i>
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
                                                                                   unselectable="on"
                                                                                   contentEditable="true"
                                                                                   style="outline: none;color:#07d !important;"
                                                                                   class="resu_education_txt_school_website"
                                                                                   data-text="www.entercollegewebsite.com"
                                                                                   target="_blank">@if(isset($education->website))
                                                                                        {{$education->website}}
                                                                                    @endif</a></b>
                                                                            {{--@endif--}}
                                                                            <p onkeyup="Focusoutsection();"
                                                                               onfocus="Focussection('resu_per_education');"
                                                                               class="resu_education_txt resu_education_txt_school_board"
                                                                               id="resu_html_education10_txt"
                                                                               unselectable="on" contentEditable=true
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
                                                                     id="tour_user_education_15plus">
                                                                    <div class="timeline_circle"
                                                                         style="width: 15%;float: left;z-index: 10;text-align: center;position: relative;">
                                                                            <span
                                                                                    class="circle blue darken-2 z-depth-1-half"
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
                                                                                {{$education->education_name}} @endif
                                                                        </h3>
                                                                        <div class="resu_line"
                                                                             style="padding: 15px;color: #666666;"><b
                                                                                    style="outline:none;margin: 0px 0px 5px 0px;display: inline-block;width: 100%;">
                                                                                <a onkeyup="SetLink(this);"
                                                                                   class="resu_education_txt_school_website"
                                                                                   href="@if(isset($education->website)) {{$education->website}} @endif"
                                                                                   unselectable="on"
                                                                                   contentEditable="true"
                                                                                   style="outline: none;color:#07d !important;"
                                                                                   data-text="www.entercollegewebsite.com"
                                                                                   target="_blank">@if(isset($education->website))
                                                                                        {{$education->website}}
                                                                                    @endif</a></b>

                                                                            <p onkeyup="Focusoutsection();"
                                                                               onfocus="Focussection('resu_per_education');"
                                                                               class="resu_education_txt resu_education_txt_school_board"
                                                                               id="resu_html_education10_txt"
                                                                               unselectable="on"
                                                                               contentEditable=true
                                                                               data-text="Enter {{$education->type}} college/Enter board name"
                                                                               style="outline: none;margin-bottom: 0px;">
                                                                                @if(isset($education->organization))
                                                                                    {{$education->organization}} @endif
                                                                            </p>
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
                                                    <div class="resu_archivement_fileblock"
                                                         id="tour_user_achivement_img"
                                                         style="width: 100%;margin-right:2%;/* float:left; */position: relative;display: inline-block;margin: 0px auto;max-width: 300px;">
                                                        @if(file_exists("public/$user_achievemt->image") &&
                                                        isset($user_achievemt->image))
                                                            <img class="global_img acheivement_image"
                                                                 src="{{URL::to('public').'/'.$user_achievemt->image}}"
                                                                 style="width: 100%;float:left;margin-bottom: 15px;"
                                                                 align="left">
                                                        @else
                                                            <img class="global_img acheivement_image"
                                                                 src="{{URL::to('public/front').'/'}}images/add-achiveiment.jpg"
                                                                 style="width: 100%;float:left;margin-bottom: 15px;"
                                                                 align="left">
                                                        @endif
                                                        <input class="file_upload" type="file"
                                                               onchange="ChangeSetImage(this)">
                                                    </div>
                                                    <div class="archivement_editblock pencil_hoverthis"
                                                         id="tour_user_achivement_txt"
                                                         style="width: 100%;float: left;background-color:#f5f5f5;font-family: Calibri;padding: 15px;position: relative;outline: none;text-align: left;">
                                                        <h3 style="outline:none;margin-bottom: 5px;"
                                                            contenteditable="true" unselectable="on"
                                                            class="acheivement_title"
                                                            data-text="@if(isset($user_achievemt->title)) {{$user_achievemt->title}} @else Give the achievement title  @endif">
                                                            @if(isset($user_achievemt->title))
                                                                {{$user_achievemt->title}} @endif</h3>

                                                        <span class="number_bullet_container">
                                                                <p onkeyup="Focusoutsection();"
                                                                   onfocus="Focussection('resu_per_experiance');"
                                                                   class="exp_company_details1 acheivement_content"
                                                                   contentEditable="true" unselectable="on"
                                                                   style="margin: 0px;outline: none;"
                                                                   data-text="@if(isset($user_achievemt->content)) {{$user_achievemt->content}} @else Enter achievement content here @endif">
                                                                    @if(isset($user_achievemt->content))
                                                                        {{$user_achievemt->content}} @endif</p>
                                                            </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr onclick="selectedrow(this);" class="">
                                            <td colspan="5">
                                                <h3 class="resu_mainheading"
                                                    style="text-align:center;font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 15px 0px 25px 0px;">
                                                    <sub class="saprate_line_card_left"></sub>Work
                                                    Experience<sub class="saprate_line_card_right"></sub></h3>
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
                                                            @if(isset($user_work_exp->company))
                                                                {{$user_work_exp->company}} @endif</h5>
                                                        <b
                                                                style="display: inline-block;width: 100%;margin: 8px 0px 3px 0px;">
                                                            <a style="outline: none;color:#07d !important;"
                                                               onkeyup="SetLink(this);" target="_blank"
                                                               data-text="Enter company website Eg: www.companywebsite.com"
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
                                                               data-text="Position / Title"
                                                               class="exp_company_desig" contenteditable="true"
                                                               unselectable="on"
                                                               style="outline:none;display: inline-block;padding-bottom: 5px;width:100%">@if(isset($user_work_exp->designation))
                                                                    {{$user_work_exp->designation}} @endif</b>
                                                            <div style="width: 100%;display: inline-block;">
                                                                <div contentEditable="true"
                                                                     onfocus="Focussection('resu_per_experiance');"
                                                                     data-text="mm"
                                                                     required-message="Enter Start Month"
                                                                     maxlength="2"
                                                                     class="start_month validateLength required2"
                                                                     style="overflow: hidden;outline: none;border:none;width: 30px;height: 20px;float: left;background: transparent;text-align: center;font-family: initial;font-weight: bold;padding: 0px;color: #666666;">
                                                                    @if($user_work_exp->start_date)
                                                                        {{date('m',strtotime($user_work_exp->start_date))}}
                                                                    @endif</div>
                                                                <span
                                                                        style="display: inline-block;margin: 0px 8px;color: #d0cfcf;font-family: cursive;float: left;font-weight: bold;">/</span>
                                                                <div contentEditable="true"
                                                                     required-message="Enter Start Year"
                                                                     onfocus="Focussection('resu_per_experiance');"
                                                                     data-text="yyyy" maxlength="4"
                                                                     class="start_year validateLength required2"
                                                                     style="overflow: hidden;outline: none;border: none;width: 45px;height: 20px;float: left;background: transparent;text-align: center;font-family: inherit;font-weight: bold;padding: 0px;margin: 0px;color: #666666;">
                                                                    @if($user_work_exp->start_date)
                                                                        {{date('Y',strtotime($user_work_exp->start_date))}}
                                                                    @endif</div>
                                                                <span
                                                                        style="display: inline-block;margin: 0px 10px;color: #666666;float: left;font-size: 22px;line-height: 20px;">-</span>

                                                                <div contentEditable="true"
                                                                     required-message="Enter End Month"
                                                                     class="hidepresent end_month validateLength required2"
                                                                     onfocus="Focussection('resu_per_experiance');"
                                                                     data-text="mm" maxlength="2"
                                                                     style="overflow: hidden;outline: none;border: none;width: 30px;height: 20px;float: left;background: transparent;text-align: center;font-family: initial;font-weight: bold;padding: 0px;color: #666666;@if($user_work_exp->is_current_working == 1) display: none; @endif">
                                                                    @if($user_work_exp->end_date)
                                                                        {{date('m',strtotime($user_work_exp->end_date))}}
                                                                    @endif</div>
                                                                <span class="hidepresent"
                                                                      style="margin: 0px 8px;color: #d0cfcf;font-family: cursive;float: left;font-weight: bold; @if($user_work_exp->is_current_working == 1) display: none; @endif">/</span>
                                                                <div contentEditable="true"
                                                                     class="hidepresent end_year validateLength required2"
                                                                     onfocus="Focussection('resu_per_experiance');"
                                                                     required-message="Enter End Year"
                                                                     data-text="yyyy" maxlength="4"
                                                                     style="overflow: hidden;outline: none;border: none;width: 45px;height: 20px;float: left;background: transparent;text-align: center;font-family: inherit;font-weight: bold;padding: 0px;margin: 0px;color: #666666;margin-right: 10px;@if($user_work_exp->is_current_working == 1) display: none; @endif">
                                                                    @if($user_work_exp->end_date)
                                                                        {{date('Y',strtotime($user_work_exp->end_date))}}
                                                                    @endif</div>
                                                                @if($user_work_exp->is_current_working == 1)
                                                                    <div id="checkbox-present-box"
                                                                         style="float: left;margin-left: 10px;font-weight: bold;">
                                                                        {{--<input type="checkbox"--}}
                                                                        {{--checked--}}
                                                                        {{----}}
                                                                        {{--class="form-check-input is_current_working present_chk"--}}
                                                                        {{--id="job-status" onchange="CheckCurrent(this);">--}}
                                                                        <label
                                                                                class="form-check-label decleartion_checkbox present_for"
                                                                                for="job-status"
                                                                                id="present-checkbox-sign"
                                                                                style="float: left;padding-left: 25px;"></label>
                                                                        <p
                                                                                style="margin: 0px;display: inline-block;margin-top: 0px;float: left;">
                                                                            Present</p>
                                                                    </div>
                                                                @endif
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
                                                                   onfocus="Focussection('resu_per_skills');"
                                                                   id="resu_html_skills"
                                                                   style="margin:0px;outline: none;"
                                                                   contentEditable="true"
                                                                   required-message="Please enter your skills"
                                                                   class="resu_html_skills required2"
                                                                   data-text="Enter skills Eg: Open-Mindedness, Empathy, Respect, Listening, Delegating, Positivity, Public Speaking, Teamwork, Time Management.">
                                                                    @if(isset($user_skills->skills)){{$user_skills->skills}}
                                                                    @endif</p>
                                                            </span>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan="5">
                                                <h3 class="resu_mainheading"
                                                    style="text-align:center;font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 15px 0px 25px 0px;">
                                                    <sub class="saprate_line_card_left"></sub>Personal
                                                    Details<sub class="saprate_line_card_right"></sub></h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" id="tour_user_personal">
                                                <table class="personal_table"
                                                       style="width: 100%;position: relative;border: solid thin #e1e1e1;outline: none;">
                                                    <tbody>
                                                    <tr id="tour_user_location"
                                                        onclick="personal_rowclick(this);">
                                                        <td
                                                                style="font-family: Calibri;width: 30%;padding:10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Current Location
                                                        </td>
                                                        <td contenteditable="true"
                                                            onkeyup="Focusoutsection();"
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
                                                                    onclick="removeblock_per(this);"
                                                                    data-toggle="tooltip" title="Delete"><i
                                                                        class="mdi mdi-delete"> </i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr id="tour_user_ctc"
                                                        onclick="personal_rowclick(this);">
                                                        <td
                                                                style="font-family: Calibri;width: 30%;padding:10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Current CTC (LPA)
                                                        </td>
                                                        <td contenteditable="true"
                                                            onkeyup="Focusoutsection();"
                                                            onfocus="Focussection('resu_per_personal');"
                                                            unselectable="on" class="edit_perblock"
                                                            id="current_ctc"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                            {{$user_profile->current_ctc}}
                                                        </td>
                                                        <td
                                                                style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    data-toggle="tooltip" title="Delete"><i
                                                                        class="mdi mdi-delete"> </i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr id="tour_user_experiance"
                                                        onclick="personal_rowclick(this);">
                                                        <td
                                                                style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Total Experience(Years)
                                                        </td>
                                                        <td contenteditable="true"
                                                            onkeyup="Focusoutsection();"
                                                            onfocus="Focussection('resu_per_personal');"
                                                            unselectable="on" class="edit_perblock"
                                                            id="total_exp"
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
                                                                    onclick="removeblock_per(this);"
                                                                    data-toggle="tooltip" title="Delete"><i
                                                                        class="mdi mdi-delete"> </i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr id="tour_user_notice"
                                                        onclick="personal_rowclick(this);">
                                                        <td
                                                                style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Notice Period(Days)
                                                        </td>
                                                        <td contenteditable="true"
                                                            onkeyup="Focusoutsection();"
                                                            onfocus="Focussection('resu_per_personal');"
                                                            unselectable="on" class="edit_perblock"
                                                            id="notice_period"
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
                                                                    onclick="removeblock_per(this);"
                                                                    data-toggle="tooltip" title="Delete"><i
                                                                        class="mdi mdi-delete"> </i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr id="tour_user_relocate"
                                                        onclick="personal_rowclick(this);" class="">
                                                        <td
                                                                style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Willing to Relocate
                                                        </td>
                                                        <td contenteditable="true"
                                                            onkeyup="Focusoutsection();"
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
                                                                    onclick="removeblock_per(this);"
                                                                    data-toggle="tooltip" title="Delete"><i
                                                                        class="mdi mdi-delete"> </i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr id="tour_user_age"
                                                        onclick="personal_rowclick(this);" class="">
                                                        <td
                                                                style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Age(Years)
                                                        </td>
                                                        <td contenteditable="true"
                                                            onkeyup="Focusoutsection();"
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
                                                                    onclick="removeblock_per(this);"
                                                                    data-toggle="tooltip" title="Delete"><i
                                                                        class="mdi mdi-delete"> </i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr id="tour_user_language"
                                                        onclick="personal_rowclick(this);">
                                                        <td
                                                                style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Language
                                                        </td>
                                                        <td contenteditable="true"
                                                            onkeyup="Focusoutsection();"
                                                            onfocus="Focussection('resu_per_personal');"
                                                            unselectable="on" class="edit_perblock"
                                                            id="language"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                            {{$user_profile->language}}
                                                        </td>
                                                        <td
                                                                style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    data-toggle="tooltip" title="Delete"><i
                                                                        class="mdi mdi-delete"> </i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr id="tour_user_gender"
                                                        onclick="personal_rowclick(this);">
                                                        <td
                                                                style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Gender
                                                        </td>
                                                        <td contenteditable="true"
                                                            onkeyup="Focusoutsection();"
                                                            onfocus="Focussection('resu_per_personal');"
                                                            unselectable="on" class="edit_perblock"
                                                            id="gender"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none">
                                                            {{$user_profile->gender}}
                                                        </td>
                                                        <td style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;
text-align: right;
">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    data-toggle="tooltip" title="Delete"><i
                                                                        class="mdi mdi-delete"> </i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr id="tour_user_status"
                                                        onclick="personal_rowclick(this);">
                                                        <td
                                                                style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Married Status
                                                        </td>
                                                        <td contenteditable="true"
                                                            onkeyup="Focusoutsection();"
                                                            onfocus="Focussection('resu_per_personal');"
                                                            unselectable="on" class="edit_perblock"
                                                            id="marital_status"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                            {{$user_profile->marital_status}}
                                                        </td>
                                                        <td
                                                                style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    data-toggle="tooltip" title="Delete"><i
                                                                        class="mdi mdi-delete"> </i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr id="tour_user_hobby"
                                                        onclick="personal_rowclick(this);" class="">
                                                        <td
                                                                style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Hobby / Interest
                                                        </td>
                                                        <td contenteditable="true"
                                                            onkeyup="Focusoutsection();"
                                                            onfocus="Focussection('resu_per_personal');"
                                                            unselectable="on" class="edit_perblock"
                                                            id="interest_hobies"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                            {{$user_profile->interest_hobies}}
                                                        </td>
                                                        <td
                                                                style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    data-toggle="tooltip" title="Delete"><i
                                                                        class="mdi mdi-delete"> </i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr id="tour_user_communication_expertise"
                                                        onclick="personal_rowclick(this);" class="">
                                                        <td
                                                                style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                            Communication Expertise
                                                        </td>
                                                        <td contenteditable="true"
                                                            onkeyup="Focusoutsection();"
                                                            onfocus="Focussection('resu_per_personal');"
                                                            unselectable="on" class="edit_perblock"
                                                            id="communication_expertise"
                                                            style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                            {{$user_profile->communication_expertise}}
                                                        </td>
                                                        <td
                                                                style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                            <button type="button" contenteditable="false"
                                                                    unselectable="on"
                                                                    class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                    onclick="removeblock_per(this);"
                                                                    data-toggle="tooltip" title="Delete"><i
                                                                        class="mdi mdi-delete"> </i>
                                                            </button>
                                                        </td>
                                                    </tr>

                                                    @if(isset($user_profile->driving_licence))
                                                        <tr id="tour_user_driving"
                                                            onclick="personal_rowclick(this);" class="">
                                                            <td
                                                                    style="font-family: Calibri;width: 30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold;">
                                                                Driving Licence No. / Aadhaar No.
                                                            </td>
                                                            <td contenteditable="true"
                                                                onkeyup="Focusoutsection();"
                                                                onfocus="Focussection('resu_per_personal');"
                                                                unselectable="on" class="edit_perblock"
                                                                id="driving_licence"
                                                                style="border-bottom: solid thin #e1e1e1;padding: 10px 15px;outline: none;">
                                                                {{$user_profile->driving_licence}}
                                                            </td>
                                                            <td
                                                                    style="border-bottom: solid thin #e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right;">
                                                                <button type="button" contenteditable="false"
                                                                        unselectable="on"
                                                                        class="btn-changeimg btn btn-danger per_delete waves-effect waves-light"
                                                                        onclick="removeblock_per(this);"
                                                                        data-toggle="tooltip" title="Delete"><i
                                                                            class="mdi mdi-delete"> </i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endif
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
                                                <div class="pencil_hoverthis" contenteditable="true"
                                                     unselectable="on"
                                                     style="padding: 10px 15px;background: #f5f5f5;display: inline-block;position: relative;z-index: 5;outline: none;width: 100%;margin-bottom: 10px;">
                                                    <input type="checkbox" checked
                                                           class="form-check-input is_current_working present_chk"
                                                           id="job-status" onchange="CheckCurrent(this);">
                                                    <label
                                                            class="form-check-label decleartion_checkbox present_for"
                                                            for="job-status" id="present-checkbox-sign"
                                                            style="float: left;padding-left: 25px;"></label>
                                                    <p contentEditable="false"
                                                       style="margin: 0px;display: inline-block;margin-top: 0px;float: left;">
                                                        I hereby declare that the above information is true to
                                                        best of
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
                                            <td colspan="2"
                                                style="text-align: left;max-width: 100px !important;"><b
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
                                                <div contenteditable="true"
                                                     style="display: inline-block;outline: none;"
                                                     id="resume_location">
                                                    <!-- Jabalpur -->
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <h5
                                                        style="text-align: center;margin-top: 10px;padding: 10px 0px;border:solid thin #e1e1e1;background:#f5f5f5;font-size: 20px;">
                                                    <b>The best way to predict the future is to create
                                                        it.</b><br>
                                                    <a style="text-align: center;font-size: 15px;"
                                                       target="_blank"
                                                       href="https://www.happiestresume.com">www.happiestresume.com</a>
                                                </h5>

                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="resu_link_button">
                        <a href="{{ url('generatePDF/'.$uid) }}" target="_blank"
                           class="btn btn-info waves-effect waves-light">
                            Download Pdf
                            <i class="mdi mdi-file-pdf ml-1" style="font-size:18px"></i>
                        </a>
                        <a type="button" onclick="WhatsappShare();"
                           class="btn btn-success waves-effect waves-light">WhatsApp
                            Resume<i class="mdi mdi-whatsapp ml-1" style="font-size:18px"></i></a>
                    </div>
                    <div class="resu_link_advertise">
                        <span class="share_txt">you want to make your resume click us</span>
                        <a type="button" href="{{URL::to('/')}}" target="_blank"
                           class="btn btn-primary waves-effect waves-light"><i
                                    class="mdi mdi-pencil mr-1"></i>Create My
                            Resume</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script type="text/javascript" src="{{ URL::to('public/front').'/' }}js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="{{ URL::to('public/front').'/' }}js/popper.min.js"></script>
<script type="text/javascript" src="{{ URL::to('public/front').'/' }}js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ URL::to('public/front').'/' }}js/mdb.min.js"></script>
<script type="text/javascript" src="{{ URL::to('public/front').'/' }}js/master.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.glo_menuclick').click(function (e) {
            var chkopen = $(this).find('.menu_basic_popup').attr('class');
            //$('#setting_box_slide').removeClass('show_setting');
            if (chkopen != 'menu_basic_popup effect') {
                if (chkopen != 'menu_basic_popup menu_popup_setting effect') {
                    $('.menu_basic_popup').addClass('scale0');
                    $(this).find('.menu_basic_popup').removeClass('scale0');
                    $('#User_info_block').addClass('add_color');
                } else {
                    $('.menu_basic_popup').addClass('scale0');
                    $('#User_info_block').removeClass('add_color');
                }
            } else {
                $('.menu_basic_popup').addClass('scale0');
                $('#User_info_block').removeClass('add_color');
            }
            e.stopPropagation();
        });
        $(document).click(function (e) {
            $('.menu_basic_popup').addClass('scale0');
            $('#User_info_block').removeClass('add_color');
            e.stopPropagation();
        });
    });

    $(window).on('load', function () {
        $('#preview_html').find('div').attr('contenteditable', 'false');
        $('#preview_html').find('span').attr('contenteditable', 'false');
        $('#preview_html').find('a').attr('contenteditable', 'false');
        $('#preview_html').find('b').attr('contenteditable', 'false');
        $('#preview_html').find('p').attr('contenteditable', 'false');
        $('#preview_html').find('h5').attr('contenteditable', 'false');
        $('#preview_html').find('table tr td').attr('contenteditable', 'false');
        $('#preview_html').find('.social_delete').hide();
//        $('#loader-overlay').addClass('scale0');
        setTimeout(function () {
            $('#loader-overlay').addClass('scale0');
        }, 1000);
    });

    function WhatsappShare() {
        if (/Android|webOS|iPhone|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            var sUrl = '{{URL::to('resume')."/$name/".base64_encode($user->id)}}';
            var whatsapp_url = "whatsapp://send?text=" + sUrl;
            window.open(whatsapp_url, "_blank");
        }
        else {
            var sUrl = '{{URL::to('resume')."/$name/".base64_encode($user->id)}}';
            var whatsapp_url = "https://web.whatsapp.com/send?text=" + sUrl;
            window.open(whatsapp_url, "_blank");
        }
    }

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

    //        function Setsociallink(dis) {
    //            let InputText = $.trim($(dis).text());
    //            if (InputText != "") {
    //                if (InputText && !InputText.match(/^http([s]?):\/\/.*/)) {
    //                    InputText = 'http://' + InputText;
    //                }
    //                $(dis).attr("href", InputText);
    //            }
    //            CheckResumeContent();
    //        }

    //        function SetLink(dis) {
    //            let InputText = $.trim($(dis).text());
    //            if (InputText != "") {
    //                if (InputText && !InputText.match(/^http([s]?):\/\/.*/)) {
    //                    InputText = 'http://' + InputText;
    //                }
    //                $(dis).attr("href", InputText);
    //            }
    //        }

    function scrollFunction() {
        if (document.body.scrollTop > 180 || document.documentElement.scrollTop > 20) {
            $('#top_navigation_bar').addClass('logowithmenu_bar_fixed');
        } else {
            $('#top_navigation_bar').removeClass('logowithmenu_bar_fixed');
        }
    }

    function OpenSocialtab() {

    }

    function ResponsiveMenu() {
        let get_class = $('#res_menucontainer').attr('class');
        if (get_class == 'top_menu_ul list-unstyled') {
            $('#res_menucontainer').addClass('menu_box_show');
            $('#menu_overlay_div').show();
        } else {
            $('#menu_overlay_div').hide();
            $('#res_menucontainer').removeClass('menu_box_show');
        }
    }

    $(function () {
        $('#resume_location').html("{{$user_profile->current_location}}");

    });
</script>

</body>

</html>