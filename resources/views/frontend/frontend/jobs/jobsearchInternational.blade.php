<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="title" content="https://happiestresume.com/">
    <meta name="description" content="PROFESSIONAL RESUME TEMPLATES">
    <meta name="keywords" content="resume creation, best resume website, 100free">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English"> 
    <title>Happiest Resume : Hot Jobs</title>
    <link rel="shortcut icon" href="{{url('public/front/images/logo1.png') }}" type="image/x-icon" />
    <link href="{{url('public/front/jobsearch').'/'}}css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="{{url('public/front/jobsearch').'/'}}css/mdb.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('public/front/jobsearch').'/'}}css/materialdesignicons.css" type="text/css" />
    <link rel="stylesheet" href="{{url('public/front/jobsearch').'/'}}css/additional.css" type="text/css" />
    <link href="{{url('public/front/jobsearch').'/'}}css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('public/front/jobsearch').'/'}}css/media.css" />
    <link rel='stylesheet' id='nd_options_font_family_h-css'
        href='http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C700&#038;ver=4.9.4' type='text/css'
        media='all' />
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet" />
    {{-- this frontend.chatbot_script chatbot script   --}}
    @include('frontend.chatbot_script')
    <style type="text/css">
      .new-ser-banner {
            display: inline-block;
            width: 100%;
             /* background:#F8E71C;  */
            background:url('https://happiestresume.com/assets/images/background1.png');
            background-size: cover;
            overflow: hidden;
            display: inline-block;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            position: relative;
            background-attachment: fixed;
            min-height: 185vh; 
        }

        .search-banner-container {
            width: 860px;
            position: absolute;
            bottom: 146px;
            left: 27px;
        }

        .banner-search-title h1 {
            font-size: 52px;
            font-weight: bold;
            text-shadow: 1px 1px #fdfdfd;
            line-height: 52px;
        }

        .search-txt-container {
            position: relative;
            width: 100%;
            padding: 5px 3px 5px 5px;
            border-radius: 3px;
            background: #ffffff;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
            margin: 20px 0px;
            float: left;
        }

        .search-txtblock {
            display: inline-block;
            width: 50%;
            padding: 10px 0px 10px 30px;
            position: relative;
            float: left;
        }

        .search-txtblock i {
            color: #4285f4;
            font-size: 20px;
            position: absolute;
            left: 10px;
            top: 18px;
        }

        .banner-sertxt {
            border: none;
            padding: 12px 5px 12px 8px;
            outline: none;
            width: 100%;
        }

        .search-txtblock-location {
            display: inline-block;
            width: 48%;
            padding: 10px 0px 10px 30px;
            position: relative;
            border-left: solid thin #e1e1e1;
            float: left;
        }

        .search-txtblock-location i {
            color: #4285f4;
            font-size: 20px;
            position: absolute;
            left: 10px;
            top: 18px;
        }

        .banner-sertxt {
            border: none;
            padding: 12px 5px 12px 8px;
            outline: none;
            width: 100%;
        }
        .form-control {
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            /* color: #495057; */
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #fdfeff;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
        .btn-bannersearch {
            width: 100%;
            display: inline-block;
            /* float: left; */
            margin: 0px;
            background-color: #4285f4;
            position: absolute;
            /* right: 182px; */
            left: 0px;
            height: calc(79% - 17px);
            font-size: 16px;
            border: none;
            color: #ffffff;
            font-weight: 500;
            text-transform: uppercase;
        }

        .search-banner-img {
            position: absolute;
            right: -100px;
            transition: .5s all;
            bottom: 0px;
            z-index: 3;
        }

        .search-banner-dot-left {
            position: absolute;
            top: 50px;
            left: 0px;
            width: 200px;
        }

        .search-banner-dot-top {
            position: absolute;
            top: 0px;
            right: 0px;
        }

        .search-banner-dot-bottom {
            position: absolute;
            bottom: -70px;
            right: 15%;
            z-index: 1;
            height: 200px;
        }

        /*----Job Search Page-----*/
        .new-search-jobs {
            width: 100%;
            padding: 50px;
            text-align: center;
        }

        .new-search-block {
            background: #ffffff;
            position: relative;
            display: block;
            border-radius: 8px;
            margin-top: 30px;
            box-shadow: 0 0 20px 0 rgba(62, 28, 131, 0.1);
            -webkit-box-shadow: 0 0 20px 0 rgba(62, 28, 131, 0.1);
            -moz-box-shadow: 0 0 20px 0 rgba(62, 28, 131, 0.1);
            padding: 10px;
            float: left;
        }

        .top-jobtype {
            float: right;
            padding: 4px 15px;
            line-height: 1.4;
            font-size: 12px;
            border-radius: 2px 0 0 2px;
        }

        .job-com-logo {
            width: 100%;
            float: left;
            margin: 10px 0px;
            height: 100px;
            overflow: hidden;
        }

        .job-title {
            float: left;
            width: 100%;
            color: #272f46;
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            display: inline-block;
            margin-bottom: 5px;
        }

        .job-description {
            margin-bottom: 5px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            float: left;
            font-family: 'Muli', sans-serif;
            position: relative;
            font-size: 15px;
            color: #667488;
            width: 90%;
            margin: 10px 5%;
            min-height: 44px;
        }

        .job-details {
            width: 100%;
            float: left;
            margin: 10px 0px 15px 0px;
        }

        .job-payamt {
            color: #ff8b00;
            float: left;
            font-size: 15px;
        }

        .job-open {
            float: right;
            display: inline-block;
            padding: 4px 14px;
            background: #f1f4fb;
            border-radius: 50px;
            color: #8b91a0;
            font-size: 14px;
        }

        .job-detbtn {
            float: left;
            margin: 5px 0px;
            padding: 8px !important;
            width: 90px;
        }

        .job-appbtn {
            margin-right: 0px;
            float: right;
            margin: 5px 0px;
            padding: 8px !important;
            width: 90px;
        }

        .freelancer {
            background: rgba(38, 169, 225, 0.1);
            color: #26a9e1;
        }

        .fulltime {
            background: rgba(3, 165, 4, 0.1);
            color: #03a504;
        }

        .parttime {
            background: rgba(246, 147, 30, 0.1);
            color: #f6931e;
        }

        .intern {
            background: rgba(210, 0, 1, 0.1);
            color: #d20001;
        }

        .top_menu_ul li a {
            color: #000000 !important;
            font-weight: 700 !important;
            font-size: 14px !important;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">

    <style>
@media screen and (max-width: 992px) {
    .jobdescriptionscren{
      width: 72%;
    }
}
.flip-card {
                background-color: transparent;
                /* width: 200px;
                height: 300px; */
                perspective: 1000px;
            }

            .flip-card-inner {
                position: relative;
                width: 100%;
                height: 36px;
                text-align: center;
                transition: transform 0.6s;
                transform-style: preserve-3d;
            }

            .flip-card:hover .flip-card-inner {
                transform: rotateX(180deg);
            }

            .flip-card-front,
            .flip-card-back {
                position: absolute;
                width: 100%;
                height: 36px;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
            }

            .flip-card-front {
                color: black;
            }

            .flip-card-back {
                background-color: #fff;
                color: white;
                transform: rotateX(180deg);

            }

            / body {margin:0;height:2000px;} /

            .socialiconsrefer:hover {}

            .icon-bar {

                z-index: 9999;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);

            }

            .icon-bar a {
                display: block;
                text-align: center;

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
                border-radius: 50%;
                width: 30px;
                height: 30px;
                margin: 5px;
            }

            .twitter {
                background: #55ACEE;
                color: white;
                border-radius: 50%;
                width: 30px;
                height: 30px;
                margin: 5px;
            }

            .google {
                background: #dd4b39;
                color: white;
                border-radius: 50%;
                width: 30px;
                height: 30px;
                margin: 5px;
            }

            .linkedin {
                background: #007bb5;
                color: white;
                border-radius: 50%;
                width: 30px;
                height: 30px;
                margin: 5px;
            }

            .youtube {
                background: #bb0000;
                color: white;
                border-radius: 50%;
                width: 30px;
                height: 30px;
                margin: 5px;
            }



            .panel-front {
    background-image: url('../assets/images/g766.jpg');
  background-repeat: no-repeat;
  color: white;
  font-weight : bolder;
  
}

.panel-back {
  background-image: url('../assets/images/g788.jpg');
  background-repeat: no-repeat;
 
  color: white;
  transform: rotateY(180deg);
  font-weight : bolder;
  
  /* padding: 5px; */
}

            .tooltip-wrap {
                position: relative;
            }

            .tooltip-wrap .tooltip-content {
                display: none;

            }

            .tooltip-wrap:hover .tooltip-content {
                display: block;
                justify-content: center;
                display: flex;
                margin: 20px;
            }
                                                    
        .card .image {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }



        .card .image img {
            width: 100%;
            transition: .5s;
        }

        .card:hover .image img {
            opacity: .5;
            transform: translateX(30%);
            /*100%*/
        }

        .card .details {
            position: absolute;
            top: 0;
            left: -6%;
            width: 102%;
            /*100%*/
            height: 100%;
            /* background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(8,115,238,1) 100%); */
            background: rgb(255, 255, 255);
            /* background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(248, 231, 28, 1) 100%, rgba(157, 254, 127, 1) 100%, rgba(248, 231, 28, 1) 100%, rgba(42, 221, 72, 1) 100%, rgba(197, 214, 57, 1) 100%); */
            background: linear-gradient(90deg, rgb(248, 231, 28) 0%, rgb(241, 232, 124) 100%, rgb(255, 255, 255) 100%, rgb(255, 255, 255) 100%, rgb(255, 255, 255) 100%, rgb(255, 255, 255) 100%);

            transition: .5s;
            transform-origin: left;
            transform: perspective(2000px) rotateY(-90deg);
        }

        .card:hover .details {
            transform: perspective(2000px) rotateY(0deg);
        }

        .card .details .center {
            padding: 20px;
            text-align: center;
            background: #fff;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .card .details .center h1 {
            margin: 0;
            padding: 0;
            color: #ff3636;
            line-height: 20px;
            font-size: 20px;
            text-transform: uppercase;
        }

        .card .details .center h1 span {
            font-size: 14px;
            color: #262626;
        }

        .card .details .center p {
            margin: 10px 0;
            padding: 0;
            color: #262626;
        }

        .card .details .center ul {
            margin: 10px auto 0;
            padding: 0;
            display: table;
        }

        .card .details .center ul li {
            list-style: none;
            margin: 0 5px;
            float: left;
        }

        .card .details .center ul li a {
            display: block;
            background: #262626;
            color: #fff;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            transform: .5s;
        }

        .card .details .center ul li a:hover {
            background: #ff3636;
        }

        .main-job {
            min-height: 350px !important;
            background: linear-gradient(90deg, rgba(248, 231, 28, 0.17) 0%, rgba(255, 255, 255, 1) 100%);
            /* background: #f5f5f5 !important; */
            padding: 20px 25px;
        }

        ul.keywords {
            list-style-type: none !important;
            font-size: 13px !important;
            color: #6a6969 !important;
            line-height: 20px !important;
            padding-left: 8px !important;
            margin-bottom: 8px !important;
        }

        .points {
            line-height: 20px !important;
        }

        .job-posted {
           
            font-size: 10px !important;
            font-weight: 500 !important;
            display: inline-block !important;
            padding: 5px 15px !important;
            border-radius: 50px !important;
            text-transform: uppercase !important;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        .job-posted {
            color: #000000 !important;
            font-weight: 700 !important;
            background: #f7e61c !important;
        }

        .candiate-applied {
            
            font-size: 10px !important;
            font-weight: 500 !important;
            display: inline-block !important;
            padding: 5px 15px !important;
            border-radius: 50px !important;
            text-transform: uppercase !important;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out; 
        }

        .candiate-applied {
            color: #000000 !important;
            font-weight: 700 !important;
            background: #f7e61c !important;
        }
        .circle-icon {
            background: #fff;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            text-align: center;
            line-height: 100px;
            vertical-align: middle;
            padding: 30px;
        }

        figure {
            display: block;
            /* width: 50px;
            height: 50px;
            border-radius: 50px; */
            font-size: 25px;
            text-align: center;
            margin-right: 10px;
            background: #fff;
            line-height: 1.7em;
            height: 100px;
            width: 100px;
            border-radius: 70%;
        }

        figure img {
            display: inline-block;
            width: 70px;
            height: auto;
            margin-top: 28%;
        }

        .msh {
            text-shadow: 2px 2px 3px #fff !important;
        }

        .job-posted-center {
            color: #eb0e85;
            background: #ffb5dd;
        }

        .job-posted-center {
            /* float: right; */
            font-size: 10px;
            font-weight: 500;
            display: inline-block;
            padding: 5px 15px;
            border-radius: 50px;
            text-transform: uppercase;
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        .mymdi {
            color: orangered !important;
            /* color: #ff8800 !important; */
        }

        .job-description {
            margin-bottom: 5px;
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            float: left;
            font-family: 'Muli', sans-serif;
            position: relative;
            font-size: 15px;
            color: #000;
            width: 90%;
            margin: 10px 5%;
            min-height: 44px;
        }
        .select_dropdown_block {
                display: flex;
                align-items: center;
            }

            .left_text {
                width: 300px;
            }

            .ddl_select {
                width: 260px;
                border: 2px solid rgb(189, 187, 187);
            }

            .activeTab {
                background: linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);
                color: black;
                font-weight: 400;
            }

 @media only screen and (max-width:1024px){

    .search-banner-img {
    position: absolute;
    right: -100px;
    transition: .5s all;
    bottom: 0px;
    width: 489px;
    z-index: 3;
}

.search-txt-container {
    position: relative;
    width: 80%;
}
}


@media only screen and (max-width:768px){
    .search-banner-container {
    width: 877px;
    position: absolute;
    bottom: 273px;
    }

.banner-search-title h1 {
    font-size: 44px;
}

.search-banner-img {
    position: absolute;
    right: -31px;
    width: 394px;
    bottom: 96px;
}
.search-txt-container {
    position: absolute;
    width: 88%;
    margin-left: -29px;
    margin-top: 172px;
}
}
        

@media only screen and (max-width:425px){
    .search-banner-container {
    width: 860px;
    position: absolute;
    bottom: 322px;
}
.banner-search-title h1 {
    font-size: 30px;
    line-height: 33px;
}
.search-banner-img {
    position: absolute;
    right: 118px;
    width: 239px;
    bottom: 105px;
}
.search-txt-container {
    position: absolute;
    width: 50%;
    margin-left: -29px;
    margin-top: 218px;
}
.new-search-jobs {
   padding: 37px;
}
.title{
    padding-top:0px;
}
.big-container{
    height: 89px;
}
}
  
@media only screen and (max-width:375px){
    .banner-search-title h1 {
    font-size: 26px;
    line-height: 28px;
}
.search-txt-container {
    position: absolute;
    width: 45%;
    margin-left: -29px;
    margin-top: 218px;
}
.main-job {
            min-height: 350px !important;
            background: linear-gradient(90deg, rgba(248, 231, 28, 0.17) 0%, rgba(255, 255, 255, 1) 100%);
           width:300px;
            padding: 20px 25px;
        }

        .card .image {
    width:300px;
    height: 100%;
    overflow: hidden;
}
/* 
.hamburger {
    margin-top: 5px;
    display: block;
    position: absolute;
    cursor: pointer;
    margin-left: 219px;
} */
}

  
@media only screen and (max-width:320px){
    .banner-search-title h1 {
    font-size: 23px;
    line-height: 28px;
}
.search-txt-container {
    position: absolute;
    width: 37%;
    margin-left: -24px;
}
.search-banner-container {
    width: 860px;
    position: absolute;
    bottom: 351px;
}
.search-banner-img {
    position: absolute;
    right: 60px;
    width: 239px;
    bottom: 134px;
}

#sign {
    width: 80px;
    margin-top: 20px;
}

.main-job {
            min-height: 350px !important;
            background: linear-gradient(90deg, rgba(248, 231, 28, 0.17) 0%, rgba(255, 255, 255, 1) 100%);
           width:282px;
            padding: 20px 25px;
        }

        .card .image {
    width:282px;
    height: 100%;
    overflow: hidden;
}
}
/* Tarun Css */
video{
    position: absolute !important;
    filter: opacity(0.18);
    z-index:1;
}

.allnewcontainertg{
    text-align: center;
}
.allnewheading{
    justify-content:center;
    display:flex;
}
.asiamiddleeast{
   
    justify-content:center;
    display:flex;
}
.europeheading{
    
    justify-content:center;
    display:flex;
}
.Oceaniaheading{
    
    justify-content:center;
    display:flex;
}

.Africaheading{
    
    justify-content:center;
    display:flex;
}

.americaandsouth{
   
    justify-content:center;
    display:flex;
}

.asiamiddleeastimg{
  
    justify-content:center;
    display:flex;
}

.europeheadingimg {
    justify-content:center;
    display:flex;
}
.Oceaniaimg{
    left:60px;
    justify-content:center;
    display:flex;
}

.Africaimg{
    left:60px;
    justify-content:center;
    display:flex;
}

.namesnimgamerica{
    margin: 8px;
    padding: 5px;
}

.namesnimgasia{
    margin: 8px;
    padding: 5px;
}

.europe{
    margin: 8px;
    padding: 5px;
}

.Oceaniadetails{
    margin: 8px;
    padding: 5px;
}

.Africadetails{
    margin: 8px;
    padding: 5px;
}
.countryhover:hover{
    font-weight:bold;
    color:red;
}

.topmargin{
    top:90px;
}

@media only screen and (max-width: 600px) {
    .new-ser-banner {
       display: inline-block;
       width: 100%;
       / background:#F8E71C; /
       / background:url('assets/images/background1.png'); /
       background-size: cover;
       overflow: hidden;
       display: inline-block;
       background-position: center;
       background-size: cover;
       background-attachment: fixed;
       position: relative;
       background-attachment: fixed;
       min-height: 408vh; 
    }

    .allnewheading{
      justify-content:center;
      display:flex;
    }
    
    .americaandsouth{
      justify-content:center;
      display:flex;
    }
    
    .namesnimgamerica{
        margin: 8px;
        padding: 5px;
        justify-content:start;
        display:flex
    }

    .asiamiddleeast{
       justify-content:center;
       display:flex;
    }
    
    .asiamiddleeastimg{
      
        justify-content:center;
        display:flex;
    }

    .namesnimgasia{
        margin: 8px;
        padding: 5px;
        justify-content:start;
        display:flex
    }

    .europeheading{
      
      justify-content:center;
      display:flex;
    }
    
    .europeheadingimg {
     
        justify-content:center;
        display:flex;
    }
    
    .europe{
        margin: 8px;
        padding: 5px;
        justify-content:start;
        display:flex;
    }

    .Oceaniaheading{
     
      justify-content:center;
      display:flex;
    }

    .Oceaniaimg{
      left:0;
      justify-content:center;
      display:flex;
    }

    .Oceaniadetails{
      margin: 8px;
      padding: 5px;
      justify-content:start;
      display:flex;
    }

    .Africaheading{
     
      justify-content:center;
      display:flex;
    }

    .Africaimg{
       left:0;
       justify-content:center;
       display:flex;
    }

    .Africadetails{
      margin: 8px;
      padding: 5px;
      justify-content:start;
      display:flex;
    }
    
.topmargin{
    top:90px;
}
}

    </style>

</head>



{{-- <body style="font-family: 'Balsamiq Sans', cursive !important;"> --}}

<body style="font-family: Roboto,Arial,Times,serif !important;">
    <main class="main_block">
        <div id="loader-overlay" class="loader_overlay">
            <div class="loader">
                <div class="loader-inner"></div>
            </div>
        </div>
        <nav>
            <div class="logowithmenu_bar" id="top_navigation_bar">
                @include('frontend.common.nav')
            </div>
        </nav>
 <style>
 
      .panel-front {
    background-image: url('../../assets/images/g766.jpg');
  background-repeat: no-repeat;
  color: white;
 
  
}
.panel-front p {
    font-weight : bolder;
}
.panel-back {
  background-image: url('../../assets/images/g788.jpg');
  background-repeat: no-repeat;
 
  color: white;
  transform: rotateY(180deg);

  
  /* padding: 5px; */
}
.panel-back p {
    font-weight : bolder;
}

.paneltg-fronttg {
    background-image: url('../../assets/images/international-flag2.jpg');
  background-repeat: no-repeat;
  color: white;
  font-weight : bolder;
  
}

.paneltg-backtg {
  background-image: url('../../assets/images/international-flagbg.jpg');
  background-repeat: no-repeat;
 
  color: white;
  transform: rotateY(180deg);
  font-weight : bolder;
  
  /* padding: 5px; */
}
</style>
 </style>       
 <section class="new-ser-banner">
           <!-- <video autoplay muted loop id="myVideo">
            <source src="{{ url('assets/images/videobackground1.mp4') }}" type="video/mp4">
             Your browser does not support HTML5 video.
           </video> -->
            <!-- North & South America -->
            <div class="col-sm-12 topmargin">
                <div class="allnewheading col-sm-12">
                    <h3 style="font-weight:bold; margin-top:20px;">North & South America</h3>
                </div>
                <div class="row col-sm-12 americaandsouth">
                    <div class="col-sm-2 namesnimgamerica">
                        <a href="https://us.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/USA.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px; color:#000">Jobs in USA</span>
                        </a>
                    </div>
                    <div class="col-sm-2 namesnimgamerica">
                        <a href="https://ar.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/Argentina.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Argentina</span>
                        </a>
                    </div>
                    <div class="col-sm-2 namesnimgamerica">
                        <a href="https://mx.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/Mexico.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Mexico</span>
                        </a>
                    </div>
                    <div class="col-sm-2 namesnimgamerica">
                        <a href="https://cl.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/chile.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Chile</span>
                        </a>
                    </div>
                    <div class="col-sm-2 namesnimgamerica">
                        <a href="https://pe.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/Peru.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Peru</span>
                        </a>
                    </div>
                    <div class="col-sm-2 namesnimgamerica">
                       <a href="https://br.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/Brazil.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Brazil</span>
                       </a>
                    </div>
                    <div class="col-sm-2 namesnimgamerica" >
                        <a href="https://ca.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/Canada Flag.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Canada</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- ASia & Middle East -->
            <div class="col-sm-12 topmargin">
                <div class="asiamiddleeast col-sm-12">
                    <h3 style="font-weight:bold; margin-top:20px;">Asia & Middle East</h3>
                </div>
                <div class="row col-sm-12 asiamiddleeastimg" style="margin-top:16px;">
                    <div class="col-sm-2 namesnimgasia">
                        <a href="https://kz.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/asiamiddle/Kazakhstan.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Kazakhstan</span>
                        </a>
                    </div>
                    <div class="col-sm-2 namesnimgasia">
                        <a href="https://in.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/asiamiddle/India.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in India</span>
                        </a>
                    </div>
                    <div class="col-sm-2 namesnimgasia">
                        <a href="https://ae.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/asiamiddle/USA.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in UAE</span>
                        </a>
                    </div>
                    <div class="col-sm-2 namesnimgasia">
                        <a href="https://my.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/asiamiddle/Malaysia.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Malaysia</span>
                        </a>
                    </div>
                    <div class="col-sm-2 namesnimgasia">
                       <a href="https://ph.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/asiamiddle/Philippines.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Phillippies</span>
                       </a>
                    </div>
                    <div class="col-sm-2 namesnimgasia">
                        <a href="https://tw.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/asiamiddle/china.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in China</span>
                        </a>
                    </div>
                    <div class="col-sm-2 namesnimgasia">
                        <a href="https://sg.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/asiamiddle/singapore.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Singapore</span>
                        </a>
                    </div>
                    <div class="col-sm-2 namesnimgasia">
                        <a href="https://jp.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/asiamiddle/Japan.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in Japan</span>
                        </a>
                    </div>
                </div>
            </div>

             <!-- europe -->
            <div class="col-sm-12 topmargin">
                <div class="europeheading col-sm-12">
                    <h3 style="font-weight:bold; margin-top:20px;">Europe</h3>
                </div>
                <div class="row col-sm-12 europeheadingimg" style="margin-top:16px;">
                    <div class="col-sm-2 europe">
                        <a href="https://ua.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/Europe/Ukraine.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Ukraine</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://by.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/Europe/Belarus.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Belarus</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://ru.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/Europe/Russia.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Russia</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://pl.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/Europe/Poland.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Poland</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                       <a href="https://uk.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/Europe/UK.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in UK</span>
                       </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://de.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/Europe/Germany.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in Germany</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://at.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/Europe/Austria.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Austria</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://es.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/Europe/Spain.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in Spain</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://fr.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/Europe/France.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in France</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://nl.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/Europe/Netherland.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in Netherland</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://be.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/Europe/Belgium.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in Belgium</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://tr.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/Europe/Turkey.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in Turkey</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://it.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/Europe/Italy.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in Italy</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://pt.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/Europe/portugal.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in Portugal</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://hu.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/Europe/Hungary.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in Hungary</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://se.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/Europe/Sweden.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in Sweden</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://fi.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/Europe/Finland.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in Finland</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://ch.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/Europe/Switzerland.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in Switzerland</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://cz.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/Europe/Czechia.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in Czechia</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://ro.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/Europe/Romania.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in Romania</span>
                        </a>
                    </div>
                    <div class="col-sm-2 europe">
                        <a href="https://bg.jobsora.com/" target="_blank"  class="countryhover">
                           <img src="{{ url('assets/images/flags/Europe/Bulgaria.jpg') }}" height="30px" width="60px" alt="">
                           <span style="font-size:16px;">Jobs in Bulgaria</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Oceania -->
            <div class="col-sm-12 topmargin">
                <div class="Oceaniaheading col-sm-12">
                    <h3 style="font-weight:bold; margin-top:20px;">Oceania</h3>
                </div>
                <div class="row col-sm-12 Oceaniaimg" style="margin-top:16px;">
                    <div class="col-sm-3 Oceaniadetails">
                        <a href="https://nz.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/NewZealand.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in New Zealand</span>
                        </a>
                    </div>
                    <div class="col-sm-3 Oceaniadetails">
                        <a href="https://au.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/Australia.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Australia</span>
                        </a>
                    </div>
                </div>
            </div>


            <!-- Africa -->
            <div class="col-sm-12 topmargin">
                <div class="Africaheading col-sm-12">
                    <h3 style="font-weight:bold; margin-top:20px;">Africa</h3>
                </div>
                <div class="row col-sm-12 Africaimg" style="margin-top:16px;">
                    <div class="col-sm-3 Africadetails">
                        <a href="https://za.jobsora.com/" target="_blank" class="countryhover">
                          <img src="{{ url('assets/images/flags/Southafrica.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in South Africa</span>
                        </a>
                    </div>
                    <div class="col-sm-3 Africadetails">
                        <a href="https://ng.jobsora.com/" target="_blank"  class="countryhover">
                          <img src="{{ url('assets/images/flags/Nigeria.jpg') }}" height="30px" width="60px" alt="">
                          <span style="font-size:16px;">Jobs in Nigeria</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="new-search-jobs">
            <div class="overall-searchjob-container">


                <div class="row">
               
               
                    <div class="col-sm-12 title experiorfresher">
                        <div class="col-sm-6">
                            @if($jobs->currentPage() == 1)
                           <h4 class="text-left">Showing 1 to @if($jobs->total() <= 16*$jobs->currentPage())
                                {{$jobs->total()}}
                                @else {{16*$jobs->currentPage()}} @endif of {{ $jobs->total() }}
                                hot jobs</h4>
                          @elseif($jobs->currentPage() > 1)
                           <h4 class="text-left">Showing {{(16*($jobs->currentPage()-1))+1}} to @if($jobs->total() <=
                                16*$jobs->
                                currentPage()) {{$jobs->total()}} @else {{16*$jobs->currentPage()}} @endif
                                of {{ $jobs->total() }}
                                hot jobs</h4>
                            @else
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 allnewexperiece">
                        <div class="select_dropdown_block"
                            style="background:linear-gradient(120deg, #fdcd3b 30%, #ffed4b 60%); width: auto; height:50px;  box-shadow: 3px 3px 5px 3px #ddd2d2;   border: 1px solid rgb(194, 188, 188);">
                            <div class="left_text">
                                <h4 style="font-family: 'Arial, sans-serif"><b>Select Category-</b></h4>
                            </div>
                            {{-- @dump($experience) --}}
                            <select onchange="searchByExperience();" name="experience" id="experience"
                                class="form-control ddl_select">
                                <option value="all" <?php if ($experience == 0) { echo 'selected'; } ?>>All</option>
                                <option value="fresher" <?php if ($experience == 2) { echo 'selected'; } ?>>Fresher</option>
                                <option value="experience" <?php if ($experience == 1) { echo 'selected'; } ?>>Experience</option>
                            </select>
                        </div>
                    </div>
                    @if(session()->has('user'))
                    @if(session()->has('is_related'))
                    @if(session('is_related') == 1)
                    <div class="col-sm-4">
                        <form action="{{ url('hot-jobs') }}" method="post">
                            @csrf
                            <input type="hidden" value="0" name="is_related">
                            <button type="submit" class="btn btn-sm btn-primary float-right">
                                Get All Jobs
                            </button>
                        </form>
                    </div>
                    @else
                    <div class="col-sm-4">
                        <form action="{{ url('hot-jobs') }}" method="post">
                            @csrf
                            <input type="hidden" value="1" name="is_related">
                            <button type="submit" class="btn btn-sm btn-primary float-right">
                                Get Related Jobs
                            </button>
                        </form>
                    </div>
                    @endif
                    @else
                    <div class="col-sm-4">
                        <form action="{{ url('hot-jobs') }}" method="post">
                            @csrf
                            <input type="hidden" value="1" name="is_related">
                            <button type="submit" class="btn btn-sm btn-primary float-right">
                                Get Related Jobs
                            </button>
                        </form>
                    </div>
                    @endif



                    {{-- End session user  --}}
                    @endif

                    <!-- <div class="row col-sm-6" style="background: linear-gradient(to right, #e9d362, #333333);">
                  <div class="col-md-6" style="padding-bottom: 11px;">
                  <label for="" style="float: left;font-size: 14px;font-weight: 900;color:white">Select Zone</label>
                        <select name="nationality" id="nationality" class="form-control" onchange="searchForJobs()">
                                <option value="0" <?php //if( $nationality == 0){ echo 'selected';}?>>All</option>
                                <option value="1" <?php //if( $nationality == 1){ echo 'selected';}?>>National</option>
                                <option value="2" <?php //if( $nationality == 2){ echo 'selected';}?>>International</option>
                        </select>
                  </div>
                  <div class="col-md-6 big-container">
                  <label for="" style="float: left;font-size: 14px;font-weight: 900;color:white">Select Category</label>
                        <select name="experience" id="experience" class="form-control" onchange="searchForJobs()">
                                <option value="0" <?php ///if( $experience == 0){ echo 'selected';}?>>All</option>
                                <option value="2" <?php //if( $experience == 2){ echo 'selected';}?>>Fresher</option>
                                <option value="1" <?php // if( $experience == 1){ echo 'selected';}?>>Experience</option>
                        </select>
                  </div>
                </div>  -->

                    <div class="row">
                        <div class="col-sm-12">
                            <br>
                        </div>
                        @foreach($jobs as $job)
                        <div class="col-sm-3 jobdescriptionscren" style="margin-bottom: 45px;">
                            <a href="{{ url('job-description',[$job->id]) }}" style="color: black">
                                <div class="card" style="min-height: 400px; max-height: 400px; overflow-x: scroll; overflow: hidden;">

                                    <div class="image main-job">
                                        <div align="left">
                                            <h5 style="font-weight: 700 !important;">
                                                {{ isset($job->position)?ucwords($job->position):'' }}</h5>
                                        </div>
                                        <hr>
                                        <div align="left" class="points">
                                            <span class="mdi mdi-briefcase mymdi"
                                                style="font-size: 25px; font-weight: 700;"></span><span
                                                style="font-size: 18px; font-weight: 700"> | 2 - 4 Yrs</span>
                                        </div>
                                       
                                        <div align="left" class="points">
                                                    <span class="mdi mdi-cash-100 mymdi"
                                                        style="font-size: 25px; font-weight: 700;"></span><span
                                                        style="font-size: 18px; font-weight: 700"> | 
                                                        @if($job->salary_type=='USD') 
                                                       
                                                        ${{ ($job->package_offer_from) }} To $
                                                        {{ ($job->package_offer_to) }} USD
                                                   @else 
                                                   ₹{{ ($job->package_offer_from) }} TO ₹
                                                        {{ ($job->package_offer_to) }} INR
                                                   
                                                   @endif
                                                </div>
                                        <div align="left" class="points">
                                            <span class="mdi mdi-map-marker mymdi"
                                                style="font-size: 25px; font-weight: 700;"></span><span
                                                style="font-size: 18px; font-weight: 700"> |
                                                {{ isset($job->job_location) && $job->job_location != " " ? ucwords($job->job_location) : "Work From Home" }}</span>
                                        </div>
                                        <p></p>
                                        <div align="left" class="points">
                                            <b style="font-weight: 800 !important;">Job Description : </b>
                                            {{-- @php
                                               $mystring = strip_tags($job->job_description);
                                                @endphp --}}
                                            <span class="job-description">
                                                {{ $job->job_description }}
                                            </span>
                                            {{-- {{ substr("$mystring",6) }} --}}
                                            </>
                                        </div>

                                        @php
                                        $start = new \Carbon\Carbon("$job->created_at");
                                        $end = new \Carbon\Carbon();
                                        @endphp
                                      
                                        
                                        
                                            <div class="job-posted" >Posted On - 
                                            <b style="color:black;">{{ $start->diff($end)->format('%d') }}</b> Day(s)
                                                Ago
                                            </div>
                                       
                                        
                                       
                                      
                                       
                                        

                                
                                        


                                    </div>
                                    <div class="details" style="padding: 20px 20px;">
                                       
                                        @if(file_exists($job->company->hh_img))
                                        <img width="100"  class="img-fluid" src="{{ $job->company->hh_img }}" alt="image">

                                        @elseif(isset($job->company->image) && file_exists($job->company->image))

                                        <img width="100"  class="img-fluid" src="{{ url($job->company->image) }}" alt="image">
                                        @else
                                        <img  width="100" class="img-fluid" src="{{url('public/images/company/white_force.png')}}"
                                            alt="image">
                                        @endif


                                        <p></p


                                        <h5 class="msh" style="font-weight: 700 !important; color:#000">{{ ucwords($job->company->name) }}</h5>
                                        <hr>
                                        <small style="font-weight: 700 !important; font-size: 12px;">For More
                                            Jobs Contact Our
                                            Managers</small>
                                        <p></p>
                                  
                                    <div align="center" class="points">
                                            <span class="msh" style="font-weight: 700 !important; color:#000">{!! isset($job->hr_name)?ucwords($job->hr_name):'-' !!}</span>
                                        </div>
                                        <div align="center" class="points">
                                            <span class="msh"
                                                style="font-weight: 700 !important; color:#000">{!! isset($job->hr_email)?$job->hr_email:'-' !!}</span>
                                        </div>
                                        <div align="center" class="points">
                                            <span class="msh"
                                                style="font-weight: 700 !important; color:#000">{!! isset($job->hr_contact)?$job->hr_contact:'-' !!}</span>
                                        </div>
                                  
                                        
                                        <p></p>

                                           <link rel="stylesheet"
                                                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                                <style>
                                                    / body {margin:0;height:2000px;} /

                                                  

                                                </style>  
                                        <hr>
                                                <div style="margin-top:0px">
                                                    <a href="{{ url('job-description', [$job->id]) }}"><button
                                                            class="btn btn-primary btn-block btn-sm">Click To
                                                            Apply</button></a>
                                                </div>
                                                <p></p>

                                                @php
                                                    $page_url = url('job-description', [$job->id]);

                                                @endphp



                                                       <div class="flip-card">
                                                    <div class="flip-card-inner">
                                                        <div class="flip-card-front">
                                                            <button
                                                                class="btn btn-danger btn-block btn-sm waves-effect waves-light"
                                                                type="button">Refer to friend</button>
                                                        </div>
                                                        <div class="flip-card-back">

                                                          
                                                            <div class="icon-bar row"
                                                                style="justify-content:center;margin-top:18px;">
                                                                <a href="
                                                                https://www.facebook.com/sharer/sharer.php?u={{ $page_url }}&title=Happiest+Jobs"
                                                                    class="facebook"><i
                                                                        class="fa fa-facebook"></i>
                                                                </a>
                                                                <a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{ $page_url }}"
                                                                    class="twitter"><i
                                                                        class="fa fa-twitter"></i></a>
                                                                <a href="https://wa.me/?text={{ $page_url }}"
                                                                    class="google"><i
                                                                        class="fa fa-whatsapp"></i></a>
                                                                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ $page_url }}&amp;title=my share text&amp;summary=dit is de linkedin summary"
                                                                    class="linkedin"><i
                                                                        class="fa fa-linkedin"></i></a>
                                                                {{-- <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>
                                       
                                    </div>
                                </div>
                            </a>

                        </div>

                        @endforeach
                    </div>


                </div>

                <br>
                {{-- {{ $jobs->appends(Illuminate\Support\Facades\Input::except('page'))->links() }} --}}
            </div>
        </section>

        @include('frontend.common.footer')
        @include('frontend.common.modal')

    </main>


    <script type="text/javascript" src="{{url('public/front/jobsearch').'/'}}js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="{{url('public/front/jobsearch').'/'}}js/popper.min.js"></script>
    <script type="text/javascript" src="{{url('public/front/jobsearch').'/'}}js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url('public/front/jobsearch').'/'}}js/mdb.min.js"></script>
    <script type="text/javascript" src="{{url('public/front/jobsearch').'/'}}js/master.js"></script>
    <script type="text/javascript">
        window.onload = function (e) {
        setTimeout(function () {
            $('#loader-overlay').addClass('scale0');
        }, 2000);
    }
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 180 || document.documentElement.scrollTop > 20) {
            $('#top_navigation_bar').addClass('logowithmenu_bar_fixed');
        } else {
            $('#top_navigation_bar').removeClass('logowithmenu_bar_fixed');
        }
    }

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
    </script>

    <script>
        function getDescription(url) {
        alert(url);
        window.location.href = url;
    }
    </script>

    <script type="text/javascript">
        function apply_jobs(job_id, user_id) {
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
      <script>
    function searchForJobs(){
       
        var nationality = $('#nationality').val();
        var experience = $('#experience').val();
        window.location.href = "{{ url('searchJobsByNationExp').'/' }}"+nationality+ '/' + experience ;
    }
    </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
       <script>
  $(document).ready(function(){
      
    $('#designation_company_sk').tokenfield({
        autocomplete :{
            source: function(request, response)
            {
                jQuery.get('{{ url('getDesignationAutoJob') }}', {
                    str : request.term
                }, function(data){
                    data = JSON.parse(data);
                    response(data);
                });
            },
            delay: 100
        }
    });

   

  });
</script>
<script>
  $(document).ready(function(){
      
    $('#location').tokenfield({
        autocomplete :{
            source: function(request, response)
            {
                jQuery.get('{{ url('getlocationAutoJob') }}', {
                    str : request.term
                }, function(data){
                    data = JSON.parse(data);
                    response(data);
                });
            },
            delay: 100
        }
    });

   

  });
</script>
    <script>
          function searchJobsByCategory(value) {
            var nationality = value;
            var experience = $('#experience').val();
            window.location.href = "{{ url('hot-jobs') . '/' }}" + nationality + '/' + experience;
        }

        function searchByExperience() {
            var nationality = '{{ $nationality }}';
            var experience = $('#experience').val();
            window.location.href = "{{ url('hot-jobs') . '/' }}" + nationality + '/' + experience;

        }
    </script>
</body>

</html>
