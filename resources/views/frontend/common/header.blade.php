<?php 
session_start();
$session_id=session_id();
 $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 $ip= $_SERVER['REMOTE_ADDR'];
 
$Ipadress=$ip;

 function isMobileDevice() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
if(isMobileDevice()){
   // echo "It is a mobile device";
  $device="mobile device";
}
else {
  $device="Desktop device";
   // echo "It is desktop or computer device";
}
$useragent = $_SERVER['HTTP_USER_AGENT'];


?>
<head>
    {{--<meta charset="UTF-8">--}}
    <title>@yield('title') | Happiest</title>
    {{--<meta name="viewport" content="width=device-width,initial-scale=1">--}}
    {{--<meta http-equiv="x-ua-compatible" content="ie=edge">--}}
    {{--<link rel="shortcut icon" href="{{URL::to('public/front').'/'}}images/favicon.png" type="image/x-icon"/>--}}
    {{--<link href="{{URL::to('public/front').'/'}}css/bootstrap.css" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="{{URL::to('public/front').'/'}}css/mdb.min.css" rel="stylesheet" type="text/css"/>--}}
    {{--<link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/materialdesignicons.css" type="text/css"/>--}}
    {{--<link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/additional.css" type="text/css"/>--}}
    {{--<link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/editor/editor-tools.css" type="text/css"/>--}}
    {{--<link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/editor/color-picker.css"/>--}}
    {{--<link href="{{URL::to('public/front').'/'}}css/style.css" rel="stylesheet" type="text/css"/>--}}
    {{--<link rel='stylesheet' id='nd_options_font_family_h-css'--}}
          {{--href='http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C700&#038;ver=4.9.4' type='text/css'--}}
          {{--media='all'/>--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet"/>--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet"/>--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
    {{--<style type="text/css">--}}

    {{--</style>--}}
    <script type="text/javascript" src="{{URL::to('public/front').'/'}}js/jquery-3.4.1.min.js"></script>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{URL::to('public/front').'/'}}images/favicon.png" type="image/x-icon"/>
    <link href="{{URL::to('public/front').'/'}}css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="{{URL::to('public/front').'/'}}css/mdb.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/materialdesignicons.css" type="text/css"/>
    <link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/additional.css" type="text/css"/>
    <link href="{{URL::to('public/front').'/'}}css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/media.css"/>
    <link rel='stylesheet' id='nd_options_font_family_h-css'
          href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C700&#038;ver=4.9.4' type='text/css'
          media='all'/>
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{URL::to('public/front').'/'}}css/js-snackbar.css?v=2.0.0" />
    <style>
        .errorClass {
            border: 1px solid red !important;
        }
    </style>
    {{--<style type="text/css">--}}
        {{--.field_block {--}}
            {{--width: 100%;--}}
            {{--position: relative;--}}
            {{--margin-bottom: 10px;--}}
            {{--padding: 10px 10px 10px 35px;--}}
            {{---webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);--}}
            {{--box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);--}}
            {{--border: 0;--}}
            {{--font-weight: 400;--}}
        {{--}--}}

        {{--.field_block:before {--}}
            {{--content: '';--}}
            {{--width: 0;--}}
            {{--height: 0;--}}
            {{--border-style: solid;--}}
            {{--border-width: 34px 34px 0 0;--}}
            {{--border-color: #ff8800 transparent transparent transparent;--}}
            {{--left: 0px;--}}
            {{--top: 0px;--}}
            {{--position: absolute;--}}
        {{--}--}}

        {{--.field_block img {--}}
            {{--width: 30px;--}}
        {{--}--}}

        {{--.details {--}}
            {{--display: inline-block;--}}
            {{--width: calc(100% - 70px);--}}
            {{--margin-left: 15px;--}}
            {{--font-size: 14px;--}}
            {{--color: #666666;--}}
            {{--font-weight: bold;--}}
        {{--}--}}

        {{--.completed:after {--}}
            {{--position: absolute;--}}
            {{--color: #ffffff;--}}
            {{--font-weight: 600;--}}
            {{--display: inline-block;--}}
            {{--font: normal normal normal 24px/1 "Material Design Icons";--}}
            {{--font-size: inherit;--}}
            {{--text-rendering: auto;--}}
            {{--line-height: inherit;--}}
            {{---webkit-font-smoothing: antialiased;--}}
            {{---moz-osx-font-smoothing: grayscale;--}}
            {{--content: "\F12C";--}}
            {{--left: 2px;--}}
            {{--top: -3px;--}}
            {{--font-size: 18px;--}}
        {{--}--}}

        {{--.color_2:before {--}}
            {{--border-color: #4285f4 transparent transparent transparent;--}}
        {{--}--}}

        {{--.color_3:before {--}}
            {{--border-color: #9d28b1 transparent transparent transparent;--}}
        {{--}--}}

        {{--.color_4:before {--}}
            {{--border-color: #00BCD4 transparent transparent transparent;--}}
        {{--}--}}

        {{--.color_5:before {--}}
            {{--border-color: #03A9F4 transparent transparent transparent;--}}
        {{--}--}}

        {{--.color_6:before {--}}
            {{--border-color: #4CAF50 transparent transparent transparent;--}}
        {{--}--}}

        {{--.color_7:before {--}}
            {{--border-color: #FF5722 transparent transparent transparent;--}}
        {{--}--}}

        {{--.edit-profilebtn {--}}
            {{--margin: 10px 0px 0px 0px;--}}
            {{--width: 100%;--}}
        {{--}--}}

        {{--.details_profile {--}}
            {{--padding-top: 10px;--}}
            {{--border-top: solid thin #e6e6e6;--}}
            {{--margin-top: 10px;--}}
            {{--color: #848484;--}}
        {{--}--}}
    {{--</style>--}}
</head>