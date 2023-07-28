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
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <script src="{{ url('assets/js/jquery-2.2.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>   
    <script src="{{ url('assets/js/slick.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
    
</head>