<style>
    @import url('https://fonts.googleapis.com/css2?family=Share:ital,wght@0,700;1,700&display=swap');

    .containerrr {
        /* margin: auto; */
        /* width: 1000px; */

        justify-content: center;
        display: flex;
        flex-wrap: nowrap;
    }

    .panel {
        background-color: transparent;
        width: 60px;
        height: 30px;
        display: inline-block;
    }

    .panel-inner {
        position: relative;
        width: 117%%;
        height: 110%;
        text-align: center;
        /* transition: transform 0.75s; */
        transform-style: preserve-3d;
        animation: flip 4s linear forwards infinite;
        animation-direction: normal;
    }

    .panel-front,
    .panel-back {
        position: absolute;
        width: 140%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: 5px;
    }

    .panel-front {
        background-image: url('assets/images/g766.jpg');
        background-repeat: no-repeat;
        color: white;
        font-weight: bolder;

    }

    .panel-back {
        background-image: url('assets/images/g788.jpg');
        background-repeat: no-repeat;

        color: white;
        transform: rotateY(180deg);
        font-weight: bolder;

        /* padding: 5px; */
    }

    .panel-front img {
        width: 300px;
        height: 300px;
    }

    @keyframes flip {
        from {
            transform: rotateY(0deg);
        }

        to {
            transform: rotateY(360deg);
        }
    }


    .hamburger {
        display: none;
    }

    .bar {
        display: block;
        width: 25px;
        height: 3px;
        margin: 5px auto;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        background-color: #101010;
    }


    .navmenu {

        font-weight: 400;
        color: #475569;
    }

    .top_menu_ul li {
        text-align: center;
        display: inline-block;
        text-transform: uppercase;
        font-size: 16px;
    }

    .top_menu_ul li:after {
        content: "|";
        display: inline-block;
        margin: 0px 16px;
        color: #000;
    }

    .top_menu_ul li a {
        color: #000000;
        font-weight: 500;
    }

    .home_sectionleft {
        margin-right: 38px;
    }

    .national_sectionleft {
        margin-right: 14px;
    }


    @media only screen and (max-width: 768px) {

        .containerrrtarun {
            justify-content: center;
            display: flex;
        }


        .home_sectionleft {
            margin-right: 0px;
        }

        .national_sectionleft {
            margin-right: 0px;
        }

        .nav-menu {
            position: fixed;
            left: -100%;
            top: 5rem;
            flex-direction: column;
            background-color: #fff;
            width: 100%;
            border-radius: 10px;
            text-align: center;
            transition: 0.3s;
            box-shadow:
                0 10px 27px rgba(0, 0, 0, 0.05);
        }

        .nav-menu.active {
            left: 0;
        }

        .hamburger {
            margin-top: 5px;
            display: block;
            position: absolute;
            cursor: pointer;
            margin-left: 660px;
            top: 26px;
        }

        .hamburger.active .bar:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger.active .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        .top_menu_ul li:after {
            content: "|";
            display: inline-block;
            margin: 0px 16px;
            color: #fff;
        }

    }

    @media only screen and (max-width:425px) {

        .containerrrtarun {
            justify-content: center;
            display: flex;
        }

        .national_sectionleft {
            margin-right: 0px;
        }

        .sign_button {
            justify-content: center;
            display: flex;
        }

        .nav-menu {
            position: fixed;
            left: -100%;
            top: 5rem;
            flex-direction: column;
            background-color: #fff;
            width: 100%;
            border-radius: 10px;
            text-align: center;
            transition: 0.3s;
            box-shadow:
                0 10px 27px rgba(0, 0, 0, 0.05);
        }

        .nav-menu.active {
            left: 0;
        }

        .hamburger.active .bar:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger.active .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        .top_menu_ul li:after {
            content: "|";
            display: inline-block;
            margin: 0px 16px;
            color: #fff;
        }

        .logo.main img {
            width: 165px;
        }

        #sign {
            width: 85px;
        }

        .hamburger {
            margin-top: 5px;
            display: block;
            position: absolute;
            cursor: pointer;
            margin-left: 335px;
            top: 26px;
        }
    }

    @media only screen and (max-width:375px) {

        .containerrrtarun {
            justify-content: center;
            display: flex;
        }

        .national_sectionleft {
            margin-right: 0px;
        }

        .sign_button {
            justify-content: center;
            display: flex;
        }

        .nav-menu {
            position: fixed;
            left: -100%;
            top: 5rem;
            flex-direction: column;
            background-color: #fff;
            width: 100%;
            border-radius: 10px;
            text-align: center;
            transition: 0.3s;
            box-shadow:
                0 10px 27px rgba(0, 0, 0, 0.05);
        }

        .nav-menu.active {
            left: 0;
        }

        .hamburger {
            margin-top: 5px;
            display: block;
            position: absolute;
            cursor: pointer;
            margin-left: 222px;
        }

        .hamburger.active .bar:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger.active .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        .top_menu_ul li:after {
            content: "|";
            display: inline-block;
            margin: 0px 16px;
            color: #fff;
        }

        #sign {
            width: 80px;
        }

        .logo.main img {
            width: 160px;
            position: absolute;
            top: 6px;
            left: 0px;
        }
    }

    @media only screen and (max-width:320px) {

        .containerrrtarun {
            justify-content: center;
            display: flex;
        }

        .national_sectionleft {
            margin-right: 0px;
        }

        .sign_button {
            justify-content: center;
            display: flex;
        }

        .nav-menu {
            position: fixed;
            left: -100%;
            top: 5rem;
            flex-direction: column;
            background-color: #fff;
            width: 100%;
            border-radius: 10px;
            text-align: center;
            transition: 0.3s;
            box-shadow:
                0 10px 27px rgba(0, 0, 0, 0.05);
        }

        .nav-menu.active {
            left: 0;
        }

        .hamburger {
            margin-top: 18px;
            display: block;
            position: absolute;
            cursor: pointer;
            margin-left: 165px;
        }

        .hamburger.active .bar:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .hamburger.active .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        .top_menu_ul li:after {
            content: "|";
            display: inline-block;
            margin: 0px 16px;
            color: #fff;
        }

        #sign {
            width: 80px;
        }

    }


    .header {
        width: 100%;
        height: 80px;
        display: block;
        background-color: transparent;
    }

    .inner_header {
        width: 100%;
        height: 100%;
        display: block;
        margin: 0 auto;
        background-color: transparent;
        display: inline-block !important;
    }

    .logo_container {
        height: 100%;
        display: table;
        float: left;
    }

    .logo_container_img {
        display: table-cell;
        vertical-align: middle;
    }

    .navigatecon {
        float: right;
        height: 100%;
    }

    .navigatecon a {
        height: 100%;
        display: table;
        float: left;
        padding: 0 20px;
        font-size: 16px;
        font-weight: 500;
    }

    .navigatecon a li {
        display: table-cell;
        vertical-align: middle;
        height: 100%;
    }

    .containerrrtarun {
        justify-content: center;
        display: flex;
    }

    .paneltg {
        background-color: transparent;
        width: 50px;
        height: 30px;
        display: inline-block;
    }

    .paneltg-innertg {
        position: relative;
        width: 168%;
        height: 110%;
        text-align: center;
        /* transition: transform 0.75s; */
        transform-style: preserve-3d;
        animation: flip 4s linear forwards infinite;
        animation-direction: normal;
    }

    .paneltg-fronttg,
    .paneltg-backtg {
        position: absolute;
        width: 140%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: 5px;
    }

    .paneltg-fronttg {
        background-image: url('assets/images/international-flag2.jpg');
        background-repeat: no-repeat;
        color: white;
        font-weight: bolder;

    }

    .paneltg-backtg {
        background-image: url('assets/images/international-flagbg.jpg');
        background-repeat: no-repeat;

        color: white;
        transform: rotateY(180deg);
        font-weight: bolder;

        /* padding: 5px; */
    }

    .paneltg-fronttg img {
        width: 300px;
        height: 300px;
    }

    @keyframes flip {
        from {
            transform: rotateY(0deg);
        }

        to {
            transform: rotateY(360deg);
        }
    }

    @font-face {
        font-family: "ubuntu";
        font-style: italic;
        font-weight: 300;
        src: local("Lato Light Italic"), local("Lato-LightItalic"), url(https://fonts.gstatic.com/s/ubuntucondensed/v8/u-4k0rCzjgs5J7oXnJcM_0kACGMtT-Dfqw.woff2) format("woff2");
    }



    a {
        text-decoration: none;
        color: #9ca0b1;
    }

    .wrapper {
        text-align: center;
    }

    /* .wrapper h6 {
        color: #fff;
        /* font-size: 92px; */
        /* text-transform: uppercase;
        font-weight: 700;
        font-family: "Josefin Sans", sans-serif;
        background: linear-gradient(to right, #ffffffa6 10%, #080505 50%, red 60%);
        background-size: auto auto;
        background-clip: border-box;
        background-size: 200% auto;
        color: #fff;
        background-clip: text;
        text-fill-color: transparent;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: textclip 1.5s linear infinite;
        display: inline-block; */
    /* } */ 

    .wrapper h6 {
    color: #fff;
    /* font-size: 92px; */
    text-transform: uppercase;
    font-weight: 700;
    font-family: "Josefin Sans", sans-serif;
    background: linear-gradient(to right, #c1a1a1a6 10%, #01057a 50%, #22061d 60%);
    background-size: auto auto;
    background-clip: border-box;
    background-size: 200% auto;
    color: #000;
    background-clip: text;
    text-fill-color: transparent;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textclip 1.5s linear infinite;
    display: inline-block;
}

    @keyframes textclip {
        to {
            background-position: 200% center;
        }
    }





    .text {
  position: absolute;
  width: 450px;
  left: 50%;
  margin-left: -225px;
  height: 40px;
  top: 50%;
  margin-top: -20px;
}

p {
  display: inline-block;
  vertical-align: top;
  margin: 0;
}

.word {
  position: absolute;
  width: 220px;
  opacity: 0;
}

.letter {
  display: inline-block;
  position: relative;
  float: left;
  transform: translateZ(25px);
  transform-origin: 50% 50% 25px;
}

.letter.out {
  transform: rotateX(90deg);
  transition: transform 0.32s cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.letter.behind {
  transform: rotateX(-90deg);
}

.letter.in {
  transform: rotateX(0deg);
  transition: transform 0.38s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.wisteria {
  color: #8e44ad;
}

.belize {
  color: #2980b9;
}

.pomegranate {
  color: #c0392b;
}

.green {
  color: #16a085;
}

.midnight {
  color: #2c3e50;
}
</style>


<div class="container header">
    <div class="row inner_header">
        <div class="">
            <div class="logo main" style="    position: absolute;
            top: 8px;
            left: 5%;">
                <a href="{{url('/')}}">
                    <img class="top_logowhite" src="{{url('front/jobsearch/images/logo1.png')}}"
                        alt="Happiest Logo">
                    <img class="top_logoblack" src="{{url('front/jobsearch/images/logo1.png')}}"
                        alt="Happiest Logo">
                </a>
            </div>
        </div>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <div class="pull-right">
            <nav class="text-right main-menu">
                <div class="res_menu_btn" onclick="ResponsiveMenu();">
                    <i class="mdi mdi-menu"></i>
                </div>
                <ul class="top_menu_ul list-unstyled nav-menu" id="res_menucontainer" >
                    {{-- style="display: flex;
                align-items: center;
                justify-content: end; width:90% !important; margin-top:8px !important;" --}}
                    {{-- <li class="containerrrtarun home_sectionleft">
                        <a class="pagetg-scrolltg" target="_blank" href="{{URL::to('hot-jobs-fresher')}}">
                            <div class="paneltg">
                                <div class="paneltg-innertg">
                                    <div class="paneltg-fronttg">
                                        <p style="margin-top: 7px;">Fresher</p>
                                    </div>
                                    <div class="paneltg-backtg">
                                        <p style="margin-top: 7px;">JOBS</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="containerrr national_sectionleft">
                        <a class="page-scroll" target="_blank" href="{{URL::to('hot-jobs')}}">
                            <div class="panel">
                                <div class="panel-inner">
                                    <div class="panel-front">
                                        <p style="margin-top: 7px;">National</p>
                                    </div>
                                    <div class="panel-back">
                                        <p style="margin-top: 7px;">JOBS</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="containerrrtarun home_sectionleft">
                        <a class="pagetg-scrolltg" target="_blank" href="{{URL::to('hot-jobs-international')}}">
                            <div class="paneltg">
                                <div class="paneltg-innertg">
                                    <div class="paneltg-fronttg">
                                        <p style="margin-top: 7px;">International</p>
                                    </div>
                                    <div class="paneltg-backtg">
                                        <p style="margin-top: 7px;">JOBS</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li> --}}


                    @if(session()->has('user'))
                    <li>
                        <a class="page-scroll nav-link1" href="{{Request::is('/') ? " #home" : URL::to('/#home')}}">
                            My Dashboard
                        </a>
                    </li>

                    @else

                    <li>
                        <a class="page-scroll nav-link1" href="{{Request::is('/') ? " #home" : URL::to('/#home')}}">
                            HOME
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll nav-link1 wrapper" href="{{URL::to('exclusive-jobs')}}">
                            <h6 style="font-size: 15px; padding-bottom:-5px !important;"><u>Exclusive Jobs</u></h6>
                        </a>
                    </li>
                    @endif

                    <li>
                        <a class="page-scroll nav-link1" href="{{Request::is('/') ? " #about" : URL::to('/#about')}}">
                            About
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll nav-link1" href="{{Request::is('/') ? " #templates" :
                            URL::to('/#templates')}}">
                            Templates
                        </a>
                    </li>

                    <li>
                        <a class="page-scroll nav-link1" href="{{Request::is('/') ? " #contact" :
                            URL::to('/#contact')}}">
                            contact
                        </a>
                    </li>
                    <li>
                        <a class="page-scroll nav-link1" href="{{URL::to('blog')}}">
                            Blogs
                        </a>
                    </li>
                    <span class="sign_button">
                        @if(session()->has('user'))
                        <button type="button"
                            class="text-white btn btn-danger nav_button btn-sm margin-right0 waves-effect waves-light theam_btn"
                            data-target="#modal_logout" data-toggle="modal">LOGOUT
                        </button>
                        @else


                        <a href="{{ url('login') }}" id="sign" class="text-white btn btn-primary nav_button  waves-effect
                          waves-light theam_btn change" style="background-color: #4285f4 !important; color:white"> SIGN IN</a>
                        @endif
                    </span>



                </ul>
            </nav>
        </div>
    </div>
</div>
<!--
<div class="header">
    <div class="inner_header">
        <div class="logo_container">
          <div class="logo_container_img">
            <img class="" src="{{url('public/front/jobsearch').'/'}}images/logo1.png"  alt="Happiest Logo">
          </div>
        </div>
        <ul class="navigatecon">
            <a href=""><li>Home</li></a>

            <a class="page-scroll" target="_blank" href="{{URL::to('hot-jobs')}}">
               <li>
               <div class="panel">
                    <div class="panel-inner">
                        <div class="panel-front">
                            <p style="margin-top: 7px;">HOT</p>
                        </div>
                        <div class="panel-back">
                            <p style="margin-top: 7px;">JOBS</p>
                        </div>
                    </div>
                </div>
               </li>
            </a>

            <a class="page-scroll" target="_blank" href="{{URL::to('hot-jobs')}}">
               <li>
               <div class="paneltg">
                    <div class="paneltg-innertg">
                        <div class="paneltg-fronttg">
                            <p style="margin-top: 7px;">International</p>
                        </div>
                        <div class="paneltg-backtg">
                            <p style="margin-top: 7px;">JOBS</p>
                        </div>
                    </div>
                </div>
               </li>
            </a>

            <a href="" style="margin-left:30px;"><li>About</li></a>
            <a href=""><li>Template</li></a>
            <a href=""><li>Contact</li></a>
            <a href=""><li>Blogs</li></a>
            <div class="before_login" style="margin-top:20px;">
                    @if(session()->has('user'))
                    <button type="button"
                        class="text-white btn btn-danger nav_button btn-sm margin-right0 waves-effect waves-light theam_btn"
                        data-target="#modal_logout" data-toggle="modal">LOGOUT
                    </button>
                    @else


                    <a href="{{ url('resumelogin') }}" id="sign"
                    class="text-white btn btn-primary nav_button mr-1 btn-sm waves-effect
                     waves-light theam_btn change"> SIGN IN</a>


                    @endif
                </div>
        </ul>
    </div>
</div> -->

<script>
    const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link1");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}
</script>
