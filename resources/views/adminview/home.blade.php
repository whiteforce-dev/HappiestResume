@extends('adminview.master')
@section('title','Admin | Dashboard')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<style>
<style>
.dropbtn {

    background-color: transparent;
    border: none;
    font-size: 20px;
    font-weight: 600;
    margin-top: 13px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: relative;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}


</style>

</style>


<div class="breadcrumb">
    <h1 class="mr-2">Happiest Resume</h1>
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li>Menu</li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

@if(Auth::user()->role == 'admin')
<div class="modal fade" id="todayRegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#0033FF">
        <h2 class="modal-title" id="exampleModalLabel" style="color:white">Today's Registration</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-color:#FFDFDD">
      <table class="table table-stripped ">
          <tr>
             <td width="65%"><h4 style="color:purple">Candidate From Office</h4></td>
            <td width="10%"><h4 style="color:purple">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-primary" stlye="align:left">{{ $today_office_register ?? 0}}</span></h4></td>
          </tr>
          <tr>
             <td width="65%"><h4 style="color:green">Candidate From Onrole</h4></td>
            <td width="10%"><h4 style="color:green">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-success">{{ $today_onrole_register ?? 0}}</span></h4></td>
          </tr>
          <tr>
             <td width="65%"><h4 style="color:#000099">Candidate From Offrole</h4></td>
            <td width="10%"><h4 style="color:#000099">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-info">{{ $today_offrole_register ?? 0}}</span></h4></td>
          </tr>
          <tr>
             <td width="65%"><h4 style="color:purple">Candidate From Payroll</h4></td>
            <td width="10%"><h4 style="color:purple">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-primary">{{ $today_payroll_register ?? 0}}</span></h4></td>
          </tr>
          <h4>
          <tr>
             <td width="65%"><h4 style="color:green">Candidate From Resume Parser</h4></td>
            <td width="10%"><h4 style="color:green">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-success">{{ $today_parser_register??0 }}</span></h4></td>
          </tr>
          </h4>
          <tr>
             <td width="65%"><h4 style="color:red">Candidate From Website</h4></td>
            <td width="10%"><h4 style="color:red">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-danger" style="color:white">{{ $today_website_register??0 }}</span></h4></td>
          </tr>
          <tr>
             <td width="65%"><h4 style="color:#000099">Candidate From Chatbot</h4></td>
            <td width="10%"><h4 style="color:#000099">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-info">{{ $today_chatbot_register??0 }}</span></h4></td>
          </tr>
          <tr>
             <td width="65%"><h4 style="color:green">International Candidate</h4></td>
            <td width="10%"><h4 style="color:green">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-success">{{ $today_international_register??0 }}</span></h4></td>
          </tr>
       </table>

      </div>
      
    </div>
  </div>
</div>

<?php
$month_office_register = App\RegistrationModel::whereMonth('created_at', '=' , Carbon\Carbon::now()->month)->whereYear('created_at', '=' , date('Y'))->where('register_from' , '=' , "office")->count();
            
$month_onrole_register = App\RegistrationModel::whereMonth('created_at' , '=' , Carbon\Carbon::now()->month)->whereYear('created_at', '=' , date('Y'))->where('register_from','=',"saisun_hire")->where('is_onrole', '=', 1)->where('candidate_type', '=', 0)->count();

$month_offrole_register = App\RegistrationModel::whereMonth('created_at' , '=' , Carbon\Carbon::now()->month)->whereYear('created_at', '=' , date('Y'))->where('register_from','=',"saisun_hire")->where('is_onrole', '=', 0)->where('candidate_type', '=', 0)->count();

$month_international_register = App\RegistrationModel::whereMonth('created_at' , '=' , Carbon\Carbon::now()->month)->whereYear('created_at', '=' , date('Y'))->where('register_from','=',"saisun_hire")->where('candidate_type', '=', 1)->count();

$month_website_register = App\RegistrationModel::whereMonth('created_at' , '=' , Carbon\Carbon::now()->month)->whereYear('created_at', '=' , date('Y'))->where('register_from','=',"website")->count();

$month_payroll_register = App\RegistrationModel::whereMonth('created_at' , '=' , Carbon\Carbon::now()->month)->whereYear('created_at', '=' , date('Y'))->where('register_from','=',"payroll")->count();

$month_parser_register = App\RegistrationModel::whereMonth('created_at' , '=' , Carbon\Carbon::now()->month)->whereYear('created_at', '=' , date('Y'))->where('register_from','=',"parser")->count();

$month_chatbot_register = App\RegistrationModel::whereMonth('created_at' , '=' , Carbon\Carbon::now()->month)->whereYear('created_at', '=' , date('Y'))->where('register_from','=',"Chatbot")->count();


?>
<div class="modal fade" id="monthRegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#0033FF">
        <h2 class="modal-title" id="exampleModalLabel" style="color:white">This Month's Registrations</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-color:#FFDFDD">
      <table class="table table-stripped ">
      <tr>
             <td width="65%"><h4 style="color:purple">Candidate From Office</h4></td>
            <td width="10%"><h4 style="color:purple">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-primary" stlye="align:left">{{ $month_office_register ?? 0 }}</span></h4></td>
          </tr>
          <tr>
             <td width="65%"><h4 style="color:green">Candidate From Onrole</h4></td>
            <td width="10%"><h4 style="color:green">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-success">{{ $month_onrole_register ?? 0 }}</span></h4></td>
          </tr>
          <tr>
             <td width="65%"><h4 style="color:#000099">Candidate From Offrole</h4></td>
            <td width="10%"><h4 style="color:#000099">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-info">{{ $month_offrole_register ?? 0 }}</span></h4></td>
          </tr>
          <tr>
             <td width="65%"><h4 style="color:purple">Candidate From Payroll</h4></td>
            <td width="10%"><h4 style="color:purple">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-primary">{{ $month_payroll_register ?? 0 }}</span></h4></td>
          </tr>
          <h4>
          <tr>
             <td width="65%"><h4 style="color:green">Candidate From Resume Parser</h4></td>
            <td width="10%"><h4 style="color:green">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-success">{{ $month_parser_register ?? 0 }}</span></h4></td>
          </tr>
          </h4>
          <tr>
             <td width="65%"><h4 style="color:red">Candidate From Website</h4></td>
            <td width="10%"><h4 style="color:red">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-danger" style="color:white">{{ $month_website_register ?? 0}}</span></h4></td>
          </tr>
          <tr>
             <td width="65%"><h4 style="color:#000099">Candidate From Chatbot</h4></td>
            <td width="10%"><h4 style="color:#000099">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-info">{{ $month_chatbot_register ?? 0 }}</span></h4></td>
          </tr>
          <tr>
             <td width="65%"><h4 style="color:green">International Candidate</h4></td>
            <td width="10%"><h4 style="color:green">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-success">{{ $month_international_register ?? 0 }}</span></h4></td>
          </tr>
        </table> 
      </div>
      
    </div>
  </div>
</div>

<?php
$year_office_register = App\RegistrationModel::whereYear('created_at', '=' , date('Y'))->where('register_from' , '=' , "office")->count();
            
$year_onrole_register = App\RegistrationModel::whereYear('created_at' , '=' , date('Y'))->where('register_from','=',"saisun_hire")->where('is_onrole', '=', 1)->where('candidate_type', '=', 0)->count();

$year_offrole_register = App\RegistrationModel::whereYear('created_at' , '=' , date('Y'))->where('register_from','=',"saisun_hire")->where('is_onrole', '=', 0)->where('candidate_type', '=', 0)->count();

$year_international_register = App\RegistrationModel::whereYear('created_at' , '=' , date('Y'))->where('register_from','=',"saisun_hire")->where('candidate_type', '=', 1)->count();

$year_website_register = App\RegistrationModel::whereYear('created_at' , '=' , date('Y'))->where('register_from','=',"website")->count();

$year_payroll_register = App\RegistrationModel::whereYear('created_at' , '=' , date('Y'))->where('register_from','=',"payroll")->count();

$year_parser_register = App\RegistrationModel::whereYear('created_at' , '=' , date('Y'))->where('register_from','=',"parser")->count();

$year_chatbot_register = App\RegistrationModel::whereYear('created_at' , '=' , date('Y'))->where('register_from','=',"Chatbot")->count();
?>

<div class="modal fade" id="yearRegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#0033FF">
        <h2 class="modal-title" id="exampleModalLabel" style="color:white">This Year's Registration</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:white;">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-color:#FFDFDD">
      <table class="table table-stripped ">
      <tr>
             <td width="65%"><h4 style="color:purple">Candidate From Office</h4></td>
            <td width="10%"><h4 style="color:purple">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-primary" stlye="align:left">{{ $year_office_register ??0 }}</span></h4></td>
          </tr>
          <tr>
             <td width="65%"><h4 style="color:green">Candidate From Onrole</h4></td>
            <td width="10%"><h4 style="color:green">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-success">{{ $year_onrole_register ?? 0 }}</span></h4></td>
          </tr>
          <tr>
             <td width="65%"><h4 style="color:#000099">Candidate From Offrole</h4></td>
            <td width="10%"><h4 style="color:#000099">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-info">{{ $year_offrole_register ?? 0 }}</span></h4></td>
          </tr>
          <tr>
             <td width="65%"><h4 style="color:purple">Candidate From Payroll</h4></td>
            <td width="10%"><h4 style="color:purple">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-primary">{{ $year_payroll_register ??0 }}</span></h4></td>
          </tr>
          <h4>
          <tr>
             <td width="65%"><h4 style="color:green">Candidate From Resume Parser</h4></td>
            <td width="10%"><h4 style="color:green">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-success">{{ $year_parser_register ??0}}</span></h4></td>
          </tr>
          </h4>
          <tr>
             <td width="65%"><h4 style="color:red">Candidate From Website</h4></td>
            <td width="10%"><h4 style="color:red">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-danger" style="color:white">{{ $year_website_register ?? 0 }}</span></h4></td>
          </tr>
          <tr>
             <td width="65%"><h4 style="color:#000099">Candidate From Chatbot</h4></td>
            <td width="10%"><h4 style="color:#000099">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-info">{{ $year_chatbot_register ?? 0}}</span></h4></td>
          </tr>
          <tr>
             <td width="65%"><h4 style="color:green">International Candidate</h4></td>
            <td width="10%"><h4 style="color:green">:-</h4></td>
             <td widht="25%" style="padding-left: 23px;"><h4><span class="badge badge-pill badge-success">{{ $year_international_register ?? 0 }}</span></h4></td>
          </tr>
        </table> 
      </div>
      
    </div>
  </div>
</div>
<?php
$edited = App\RegistrationModel::where('is_edited',1)->count();
$neet_to_edited = App\RegistrationModel::where('is_edited',0)->count();
?>
<div class="row">
    <!-- no 13 chart-->
    <div class="col-md-4 col-lg-4">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart9"></div>
                    <a href="{{URL::to('registered-user')}}" class="ul-widget__content-v2">
                        <h4 class="heading mt-3">{{$registrations_count ?? 0}}</h4>
                        <div class="dropdown">
                          <button class="dropbtn" style="background-color: transparent;border: none;color: #70657b !important;font-size:14px;">Total User</button>
                           <div class="dropdown-content">
                                <p style="font-size:14px;color:#21d2d2;font-weight: 900;">Edited Resume:</p><p class="badge badge-pill badge-primary" style="font-size:14px">{{ $edited ?? 0 }}</p>
                                <p style="font-size:14px;color:#21d2d2;font-weight: 900;">Need to Edit:</p><p class="badge badge-pill badge-primary" style="font-size:14px">{{ $neet_to_edited ?? 0 }}</p>
                          </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- no 14 chart-->
    <div class="col-md-4 col-lg-4">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart14"></div>
                    <a href="{{URL::to('jobs')}}" class="ul-widget__content-v2">
                        <h4 class="heading mt-3">{{$jobs_count ?? 0}}</h4>
                        <p class="text-muted m-0">Total Jobs</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- no 15 chart-->
    <div class="col-md-4 col-lg-4">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart15"></div>
                    <a href="{{URL::to('companies')}}" class="ul-widget__content-v2">
                        <h4 class="heading mt-3">{{$companies_count ?? 0}}</h4>
                        <p class="text-muted m-0">Total Companies</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- no 16 chart-->
    <div class="col-md-4 col-lg-4">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart10"></div>
                    <a href="{{URL::to('websiteregistration')}}" class="ul-widget__content-v2">
                        <h4 class="heading mt-3">{{$registrations_web ?? 0}}</h4>
                        <div class="dropdown">
                          <button class="dropbtn" style="background-color: transparent;border: none;color: #70657b !important;font-size:14px;">Website Register</button>
                           <div class="dropdown-content">
                                <p style="font-size:14px;color:#21d2d2;font-weight: 900;">Website Registration In This Week:</p><p class="badge badge-pill badge-primary" style="font-size:14px">{{ $week_website_register ?? 0 }}</p>
                           </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart11"></div>
                    <a href="{{URL::to('officeregistration')}}" class="ul-widget__content-v2">
                        <h4 class="heading mt-3">{{$registrations_office ?? 0}}</h4>
                        <div class="dropdown">
                          <button class="dropbtn" style="background-color: transparent;border: none;color: #70657b !important;font-size:14px;">Office Register</button>
                           <div class="dropdown-content">
                                <p style="font-size:14px;color:#21d2d2;font-weight: 900;">Office Registration In This Week:</p><p class="badge badge-pill badge-primary" style="font-size:14px">{{ $week_office_register ?? 0 }}</p>
                           </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    

    <div class="col-md-4 col-lg-4">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart12"></div>
                    <a href="{{URL::to('saisun-hire-registration')}}" class="ul-widget__content-v2">
                        <h4 class="heading mt-3 myDIV">{{$registrations_saisunhire ?? 0}}</h4>
                        <div class="dropdown">
                          <button class="dropbtn" style="background-color: transparent;border: none;color: #70657b !important;font-size:14px;">Saisun Hire</button>
                           <div class="dropdown-content">
                                <p style="font-size:14px;color:#21d2d2;font-weight: 900;">Onrole Registration In this Week:</p><p class="badge badge-pill badge-primary" style="font-size:14px">{{ $week_onrole_register ?? 0}}</p>
                                <p style="font-size:14px;color:#21d2d2;font-weight: 900;">Offrole Registration In this Week:</p><p class="badge badge-pill badge-primary" style="font-size:14px">{{ $week_offrole_register ?? 0}}</p>
                          </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-lg-3">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart21"></div>
                    <div id="apexcharts4ujxmfka" class="apexcharts-canvas apexcharts4ujxmfka light" style="width: 160.3px; height: 100px;"><svg id="SvgjsSvg1633" width="160.3" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1635" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1634"><linearGradient id="SvgjsLinearGradient1638" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1639" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1640" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1641" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask4ujxmfka"><rect id="SvgjsRect1644" width="160.3" height="100" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask4ujxmfka"><rect id="SvgjsRect1645" width="200.3" height="140" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine1643" x1="0" y1="0" x2="0" y2="100" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="url(#SvgjsLinearGradient1638)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG1666" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1667" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1670" class="apexcharts-grid"><line id="SvgjsLine1672" x1="0" y1="100" x2="160.3" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1671" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1647" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1648" class="apexcharts-series seriesx1" rel="1" data:realIndex="0"><path id="apexcharts-bar-area-0" d="M 3.5065625000000002 100L 3.5065625000000002 92.85714285714286L 6.5121875000000005 92.85714285714286L 6.5121875000000005 100L 3.5065625000000002 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 3.5065625000000002 100L 3.5065625000000002 92.85714285714286L 6.5121875000000005 92.85714285714286L 6.5121875000000005 100L 3.5065625000000002 100" pathFrom="M 3.5065625000000002 100L 3.5065625000000002 100L 6.5121875000000005 100L 6.5121875000000005 100L 3.5065625000000002 100" cy="92.85714285714286" cx="13.525312500000002" j="0" val="5" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 13.525312500000002 100L 13.525312500000002 78.57142857142857L 16.5309375 78.57142857142857L 16.5309375 100L 13.525312500000002 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 13.525312500000002 100L 13.525312500000002 78.57142857142857L 16.5309375 78.57142857142857L 16.5309375 100L 13.525312500000002 100" pathFrom="M 13.525312500000002 100L 13.525312500000002 100L 16.5309375 100L 16.5309375 100L 13.525312500000002 100" cy="78.57142857142857" cx="23.544062500000003" j="1" val="15" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 23.544062500000003 100L 23.544062500000003 64.28571428571428L 26.549687500000005 64.28571428571428L 26.549687500000005 100L 23.544062500000003 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 23.544062500000003 100L 23.544062500000003 64.28571428571428L 26.549687500000005 64.28571428571428L 26.549687500000005 100L 23.544062500000003 100" pathFrom="M 23.544062500000003 100L 23.544062500000003 100L 26.549687500000005 100L 26.549687500000005 100L 23.544062500000003 100" cy="64.28571428571428" cx="33.56281250000001" j="2" val="25" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 33.56281250000001 100L 33.56281250000001 50L 36.56843750000001 50L 36.56843750000001 100L 33.56281250000001 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 33.56281250000001 100L 33.56281250000001 50L 36.56843750000001 50L 36.56843750000001 100L 33.56281250000001 100" pathFrom="M 33.56281250000001 100L 33.56281250000001 100L 36.56843750000001 100L 36.56843750000001 100L 33.56281250000001 100" cy="50" cx="43.581562500000004" j="3" val="35" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 43.581562500000004 100L 43.581562500000004 64.28571428571428L 46.587187500000006 64.28571428571428L 46.587187500000006 100L 43.581562500000004 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 43.581562500000004 100L 43.581562500000004 64.28571428571428L 46.587187500000006 64.28571428571428L 46.587187500000006 100L 43.581562500000004 100" pathFrom="M 43.581562500000004 100L 43.581562500000004 100L 46.587187500000006 100L 46.587187500000006 100L 43.581562500000004 100" cy="64.28571428571428" cx="53.6003125" j="4" val="25" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 53.6003125 100L 53.6003125 78.57142857142857L 56.6059375 78.57142857142857L 56.6059375 100L 53.6003125 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 53.6003125 100L 53.6003125 78.57142857142857L 56.6059375 78.57142857142857L 56.6059375 100L 53.6003125 100" pathFrom="M 53.6003125 100L 53.6003125 100L 56.6059375 100L 56.6059375 100L 53.6003125 100" cy="78.57142857142857" cx="63.6190625" j="5" val="15" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 63.6190625 100L 63.6190625 92.85714285714286L 66.6246875 92.85714285714286L 66.6246875 100L 63.6190625 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 63.6190625 100L 63.6190625 92.85714285714286L 66.6246875 92.85714285714286L 66.6246875 100L 63.6190625 100" pathFrom="M 63.6190625 100L 63.6190625 100L 66.6246875 100L 66.6246875 100L 63.6190625 100" cy="92.85714285714286" cx="73.6378125" j="6" val="5" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 73.6378125 100L 73.6378125 85.71428571428571L 76.64343749999999 85.71428571428571L 76.64343749999999 100L 73.6378125 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 73.6378125 100L 73.6378125 85.71428571428571L 76.64343749999999 85.71428571428571L 76.64343749999999 100L 73.6378125 100" pathFrom="M 73.6378125 100L 73.6378125 100L 76.64343749999999 100L 76.64343749999999 100L 73.6378125 100" cy="85.71428571428571" cx="83.65656249999999" j="7" val="10" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 83.65656249999999 100L 83.65656249999999 71.42857142857143L 86.66218749999999 71.42857142857143L 86.66218749999999 100L 83.65656249999999 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 83.65656249999999 100L 83.65656249999999 71.42857142857143L 86.66218749999999 71.42857142857143L 86.66218749999999 100L 83.65656249999999 100" pathFrom="M 83.65656249999999 100L 83.65656249999999 100L 86.66218749999999 100L 86.66218749999999 100L 83.65656249999999 100" cy="71.42857142857143" cx="93.67531249999999" j="8" val="20" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 93.67531249999999 100L 93.67531249999999 57.14285714285714L 96.68093749999998 57.14285714285714L 96.68093749999998 100L 93.67531249999999 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 93.67531249999999 100L 93.67531249999999 57.14285714285714L 96.68093749999998 57.14285714285714L 96.68093749999998 100L 93.67531249999999 100" pathFrom="M 93.67531249999999 100L 93.67531249999999 100L 96.68093749999998 100L 96.68093749999998 100L 93.67531249999999 100" cy="57.14285714285714" cx="103.69406249999999" j="9" val="30" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 103.69406249999999 100L 103.69406249999999 35.71428571428571L 106.69968749999998 35.71428571428571L 106.69968749999998 100L 103.69406249999999 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 103.69406249999999 100L 103.69406249999999 35.71428571428571L 106.69968749999998 35.71428571428571L 106.69968749999998 100L 103.69406249999999 100" pathFrom="M 103.69406249999999 100L 103.69406249999999 100L 106.69968749999998 100L 106.69968749999998 100L 103.69406249999999 100" cy="35.71428571428571" cx="113.71281249999998" j="10" val="45" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 113.71281249999998 100L 113.71281249999998 7.142857142857139L 116.71843749999998 7.142857142857139L 116.71843749999998 100L 113.71281249999998 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 113.71281249999998 100L 113.71281249999998 7.142857142857139L 116.71843749999998 7.142857142857139L 116.71843749999998 100L 113.71281249999998 100" pathFrom="M 113.71281249999998 100L 113.71281249999998 100L 116.71843749999998 100L 116.71843749999998 100L 113.71281249999998 100" cy="7.142857142857139" cx="123.73156249999998" j="11" val="65" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 123.73156249999998 100L 123.73156249999998 35.71428571428571L 126.73718749999998 35.71428571428571L 126.73718749999998 100L 123.73156249999998 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 123.73156249999998 100L 123.73156249999998 35.71428571428571L 126.73718749999998 35.71428571428571L 126.73718749999998 100L 123.73156249999998 100" pathFrom="M 123.73156249999998 100L 123.73156249999998 100L 126.73718749999998 100L 126.73718749999998 100L 123.73156249999998 100" cy="35.71428571428571" cx="133.75031249999998" j="12" val="45" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 133.75031249999998 100L 133.75031249999998 57.14285714285714L 136.7559375 57.14285714285714L 136.7559375 100L 133.75031249999998 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 133.75031249999998 100L 133.75031249999998 57.14285714285714L 136.7559375 57.14285714285714L 136.7559375 100L 133.75031249999998 100" pathFrom="M 133.75031249999998 100L 133.75031249999998 100L 136.7559375 100L 136.7559375 100L 133.75031249999998 100" cy="57.14285714285714" cx="143.7690625" j="13" val="30" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 143.7690625 100L 143.7690625 71.42857142857143L 146.7746875 71.42857142857143L 146.7746875 100L 143.7690625 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 143.7690625 100L 143.7690625 71.42857142857143L 146.7746875 71.42857142857143L 146.7746875 100L 143.7690625 100" pathFrom="M 143.7690625 100L 143.7690625 100L 146.7746875 100L 146.7746875 100L 143.7690625 100" cy="71.42857142857143" cx="153.7878125" j="14" val="20" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 153.7878125 100L 153.7878125 85.71428571428571L 156.7934375 85.71428571428571L 156.7934375 100L 153.7878125 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 153.7878125 100L 153.7878125 85.71428571428571L 156.7934375 85.71428571428571L 156.7934375 100L 153.7878125 100" pathFrom="M 153.7878125 100L 153.7878125 100L 156.7934375 100L 156.7934375 100L 153.7878125 100" cy="85.71428571428571" cx="163.8065625" j="15" val="10" barWidth="3.005625"></path><g id="SvgjsG1649" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1673" x1="0" y1="0" x2="160.3" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1674" x1="0" y1="0" x2="160.3" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1675" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1676" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1677" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1642" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1668" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1669" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(230, 175, 75);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div>
                    </div>
                    <a href="{{URL::to('parser_registration')}}" class="ul-widget__content-v2">
                        <h4 class="heading mt-3">{{$registrations_parser ?? 0}}</h4>
                        <div class="dropdown">
                          <button class="dropbtn" style="background-color: transparent;border: none;color: #70657b !important;font-size:14px;">Resume Parser</button>
                           <div class="dropdown-content">
                                <p style="font-size:14px;color:#21d2d2;font-weight: 900;">Resume Parser Registration In This Week:</p><p class="badge badge-pill badge-primary" style="font-size:14px">{{ $week_parser_register ?? 0}}</p>
                           </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-lg-3">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart25"></div>
                   <div id="apexchartsx0lj32do" class="apexcharts-canvas apexchartsx0lj32do light" style="width: 171.75px; height: 100px;"><svg id="SvgjsSvg2367" width="171.75" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2369" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2368"><linearGradient id="SvgjsLinearGradient2372" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2373" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop2374" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop2375" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskx0lj32do"><rect id="SvgjsRect2378" width="171.75" height="100" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskx0lj32do"><rect id="SvgjsRect2379" width="211.75" height="140" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine2377" x1="32.27021202674279" y1="0" x2="32.27021202674279" y2="100" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="32.27021202674279" y="0" width="1" height="100" fill="url(#SvgjsLinearGradient2372)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG2397" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2398" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG2401" class="apexcharts-grid"><line id="SvgjsLine2403" x1="0" y1="100" x2="171.75" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2402" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2381" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG2382" class="apexcharts-series seriesx1" rel="1" data:realIndex="0"><path id="apexcharts-bar-area-0" d="M 4.624038461538461 100L 4.624038461538461 95L 8.5875 95L 8.5875 100L 4.624038461538461 100" fill="rgba(245,95,69,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskx0lj32do)" pathTo="M 4.624038461538461 100L 4.624038461538461 95L 8.5875 95L 8.5875 100L 4.624038461538461 100" pathFrom="M 4.624038461538461 100L 4.624038461538461 100L 8.5875 100L 8.5875 100L 4.624038461538461 100" cy="95" cx="17.83557692307692" j="0" val="5" barWidth="3.9634615384615386"></path><path id="apexcharts-bar-area-0" d="M 17.83557692307692 100L 17.83557692307692 85L 21.79903846153846 85L 21.79903846153846 100L 17.83557692307692 100" fill="rgba(245,95,69,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskx0lj32do)" pathTo="M 17.83557692307692 100L 17.83557692307692 85L 21.79903846153846 85L 21.79903846153846 100L 17.83557692307692 100" pathFrom="M 17.83557692307692 100L 17.83557692307692 100L 21.79903846153846 100L 21.79903846153846 100L 17.83557692307692 100" cy="85" cx="31.04711538461538" j="1" val="15" barWidth="3.9634615384615386"></path><path id="apexcharts-bar-area-0" d="M 31.04711538461538 100L 31.04711538461538 85L 35.01057692307692 85L 35.01057692307692 100L 31.04711538461538 100" fill="rgba(245,95,69,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskx0lj32do)" pathTo="M 31.04711538461538 100L 31.04711538461538 85L 35.01057692307692 85L 35.01057692307692 100L 31.04711538461538 100" pathFrom="M 31.04711538461538 100L 31.04711538461538 100L 35.01057692307692 100L 35.01057692307692 100L 31.04711538461538 100" cy="85" cx="44.25865384615384" j="2" val="15" barWidth="3.9634615384615386"></path><path id="apexcharts-bar-area-0" d="M 44.25865384615384 100L 44.25865384615384 65L 48.22211538461538 65L 48.22211538461538 100L 44.25865384615384 100" fill="rgba(245,95,69,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskx0lj32do)" pathTo="M 44.25865384615384 100L 44.25865384615384 65L 48.22211538461538 65L 48.22211538461538 100L 44.25865384615384 100" pathFrom="M 44.25865384615384 100L 44.25865384615384 100L 48.22211538461538 100L 48.22211538461538 100L 44.25865384615384 100" cy="65" cx="57.4701923076923" j="3" val="35" barWidth="3.9634615384615386"></path><path id="apexcharts-bar-area-0" d="M 57.4701923076923 100L 57.4701923076923 65L 61.43365384615384 65L 61.43365384615384 100L 57.4701923076923 100" fill="rgba(245,95,69,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskx0lj32do)" pathTo="M 57.4701923076923 100L 57.4701923076923 65L 61.43365384615384 65L 61.43365384615384 100L 57.4701923076923 100" pathFrom="M 57.4701923076923 100L 57.4701923076923 100L 61.43365384615384 100L 61.43365384615384 100L 57.4701923076923 100" cy="65" cx="70.68173076923077" j="4" val="35" barWidth="3.9634615384615386"></path><path id="apexcharts-bar-area-0" d="M 70.68173076923077 100L 70.68173076923077 25L 74.64519230769231 25L 74.64519230769231 100L 70.68173076923077 100" fill="rgba(245,95,69,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskx0lj32do)" pathTo="M 70.68173076923077 100L 70.68173076923077 25L 74.64519230769231 25L 74.64519230769231 100L 70.68173076923077 100" pathFrom="M 70.68173076923077 100L 70.68173076923077 100L 74.64519230769231 100L 74.64519230769231 100L 70.68173076923077 100" cy="25" cx="83.89326923076923" j="5" val="75" barWidth="3.9634615384615386"></path><path id="apexcharts-bar-area-0" d="M 83.89326923076923 100L 83.89326923076923 10L 87.85673076923078 10L 87.85673076923078 100L 83.89326923076923 100" fill="rgba(245,95,69,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskx0lj32do)" pathTo="M 83.89326923076923 100L 83.89326923076923 10L 87.85673076923078 10L 87.85673076923078 100L 83.89326923076923 100" pathFrom="M 83.89326923076923 100L 83.89326923076923 100L 87.85673076923078 100L 87.85673076923078 100L 83.89326923076923 100" cy="10" cx="97.1048076923077" j="6" val="90" barWidth="3.9634615384615386"></path><path id="apexcharts-bar-area-0" d="M 97.1048076923077 100L 97.1048076923077 25L 101.06826923076925 25L 101.06826923076925 100L 97.1048076923077 100" fill="rgba(245,95,69,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskx0lj32do)" pathTo="M 97.1048076923077 100L 97.1048076923077 25L 101.06826923076925 25L 101.06826923076925 100L 97.1048076923077 100" pathFrom="M 97.1048076923077 100L 97.1048076923077 100L 101.06826923076925 100L 101.06826923076925 100L 97.1048076923077 100" cy="25" cx="110.31634615384617" j="7" val="75" barWidth="3.9634615384615386"></path><path id="apexcharts-bar-area-0" d="M 110.31634615384617 100L 110.31634615384617 65L 114.27980769230771 65L 114.27980769230771 100L 110.31634615384617 100" fill="rgba(245,95,69,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskx0lj32do)" pathTo="M 110.31634615384617 100L 110.31634615384617 65L 114.27980769230771 65L 114.27980769230771 100L 110.31634615384617 100" pathFrom="M 110.31634615384617 100L 110.31634615384617 100L 114.27980769230771 100L 114.27980769230771 100L 110.31634615384617 100" cy="65" cx="123.52788461538464" j="8" val="35" barWidth="3.9634615384615386"></path><path id="apexcharts-bar-area-0" d="M 123.52788461538464 100L 123.52788461538464 65L 127.49134615384618 65L 127.49134615384618 100L 123.52788461538464 100" fill="rgba(245,95,69,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskx0lj32do)" pathTo="M 123.52788461538464 100L 123.52788461538464 65L 127.49134615384618 65L 127.49134615384618 100L 123.52788461538464 100" pathFrom="M 123.52788461538464 100L 123.52788461538464 100L 127.49134615384618 100L 127.49134615384618 100L 123.52788461538464 100" cy="65" cx="136.7394230769231" j="9" val="35" barWidth="3.9634615384615386"></path><path id="apexcharts-bar-area-0" d="M 136.7394230769231 100L 136.7394230769231 85L 140.70288461538462 85L 140.70288461538462 100L 136.7394230769231 100" fill="rgba(245,95,69,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskx0lj32do)" pathTo="M 136.7394230769231 100L 136.7394230769231 85L 140.70288461538462 85L 140.70288461538462 100L 136.7394230769231 100" pathFrom="M 136.7394230769231 100L 136.7394230769231 100L 140.70288461538462 100L 140.70288461538462 100L 136.7394230769231 100" cy="85" cx="149.95096153846154" j="10" val="15" barWidth="3.9634615384615386"></path><path id="apexcharts-bar-area-0" d="M 149.95096153846154 100L 149.95096153846154 85L 153.91442307692307 85L 153.91442307692307 100L 149.95096153846154 100" fill="rgba(245,95,69,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskx0lj32do)" pathTo="M 149.95096153846154 100L 149.95096153846154 85L 153.91442307692307 85L 153.91442307692307 100L 149.95096153846154 100" pathFrom="M 149.95096153846154 100L 149.95096153846154 100L 153.91442307692307 100L 153.91442307692307 100L 149.95096153846154 100" cy="85" cx="163.1625" j="11" val="15" barWidth="3.9634615384615386"></path><path id="apexcharts-bar-area-0" d="M 163.1625 100L 163.1625 95L 167.12596153846152 95L 167.12596153846152 100L 163.1625 100" fill="rgba(245,95,69,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskx0lj32do)" pathTo="M 163.1625 100L 163.1625 95L 167.12596153846152 95L 167.12596153846152 100L 163.1625 100" pathFrom="M 163.1625 100L 163.1625 100L 167.12596153846152 100L 167.12596153846152 100L 163.1625 100" cy="95" cx="176.37403846153845" j="12" val="5" barWidth="3.9634615384615386"></path><g id="SvgjsG2383" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine2404" x1="0" y1="0" x2="171.75" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2405" x1="0" y1="0" x2="171.75" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2406" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2407" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2408" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2376" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG2399" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG2400" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light" style="left: 32.7702px; top: 64px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(245, 95, 69); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value">15</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div>
                   <a href="{{URL::to('payroll_registration')}}" class="ul-widget__content-v2">
                        <h4 class="heading mt-3">{{$registrations_payroll ?? 0}}</h4>
                        <div class="dropdown">
                          <button class="dropbtn" style="background-color: transparent;border: none;color: #70657b !important;font-size:14px;">Payroll</button>
                           <div class="dropdown-content">
                                <p style="font-size:14px;color:#21d2d2;font-weight: 900;">Payroll Registration In This Week:</p><p class="badge badge-pill badge-primary" style="font-size:14px">{{ $week_payroll_register ?? 0 }}</p>
                           </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-lg-3">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart21"></div>
                  <div id="apexcharts7whe859t" class="apexcharts-canvas apexcharts7whe859t light" style="width: 160.3px; height: 100px;"><svg id="SvgjsSvg1453" width="160.3" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1455" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1454"><linearGradient id="SvgjsLinearGradient1458" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1459" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1460" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1461" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask7whe859t"><rect id="SvgjsRect1464" width="160.3" height="100" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask7whe859t"><rect id="SvgjsRect1465" width="200.3" height="140" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><filter id="SvgjsFilter1880" filterUnits="userSpaceOnUse"><feComponentTransfer id="SvgjsFeComponentTransfer1881" result="SvgjsFeComponentTransfer1881Out" in="SourceGraphic"><feFuncR id="SvgjsFeFuncR1882" type="linear" slope="0.65"></feFuncR><feFuncG id="SvgjsFeFuncG1883" type="linear" slope="0.65"></feFuncG><feFuncB id="SvgjsFeFuncB1884" type="linear" slope="0.65"></feFuncB><feFuncA id="SvgjsFeFuncA1885" type="identity"></feFuncA></feComponentTransfer></filter></defs><line id="SvgjsLine1463" x1="91.01884014423077" y1="0" x2="91.01884014423077" y2="100" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="91.01884014423077" y="0" width="1" height="100" fill="url(#SvgjsLinearGradient1458)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG1483" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1484" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1487" class="apexcharts-grid"><line id="SvgjsLine1489" x1="0" y1="100" x2="160.3" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1488" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1467" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1468" class="apexcharts-series seriesx1" rel="1" data:realIndex="0"><path id="apexcharts-bar-area-0" d="M 4.315769230769231 100L 4.315769230769231 95L 8.015 95L 8.015 100L 4.315769230769231 100" fill="rgba(196,50,53,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7whe859t)" pathTo="M 4.315769230769231 100L 4.315769230769231 95L 8.015 95L 8.015 100L 4.315769230769231 100" pathFrom="M 4.315769230769231 100L 4.315769230769231 100L 8.015 100L 8.015 100L 4.315769230769231 100" cy="95" cx="16.646538461538462" j="0" val="5" barWidth="3.6992307692307698"></path><path id="apexcharts-bar-area-0" d="M 16.646538461538462 100L 16.646538461538462 85L 20.345769230769232 85L 20.345769230769232 100L 16.646538461538462 100" fill="rgba(196,50,53,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7whe859t)" pathTo="M 16.646538461538462 100L 16.646538461538462 85L 20.345769230769232 85L 20.345769230769232 100L 16.646538461538462 100" pathFrom="M 16.646538461538462 100L 16.646538461538462 100L 20.345769230769232 100L 20.345769230769232 100L 16.646538461538462 100" cy="85" cx="28.977307692307694" j="1" val="15" barWidth="3.6992307692307698"></path><path id="apexcharts-bar-area-0" d="M 28.977307692307694 100L 28.977307692307694 75L 32.67653846153846 75L 32.67653846153846 100L 28.977307692307694 100" fill="rgba(196,50,53,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7whe859t)" pathTo="M 28.977307692307694 100L 28.977307692307694 75L 32.67653846153846 75L 32.67653846153846 100L 28.977307692307694 100" pathFrom="M 28.977307692307694 100L 28.977307692307694 100L 32.67653846153846 100L 32.67653846153846 100L 28.977307692307694 100" cy="75" cx="41.308076923076925" j="2" val="25" barWidth="3.6992307692307698"></path><path id="apexcharts-bar-area-0" d="M 41.308076923076925 100L 41.308076923076925 65L 45.00730769230769 65L 45.00730769230769 100L 41.308076923076925 100" fill="rgba(196,50,53,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7whe859t)" pathTo="M 41.308076923076925 100L 41.308076923076925 65L 45.00730769230769 65L 45.00730769230769 100L 41.308076923076925 100" pathFrom="M 41.308076923076925 100L 41.308076923076925 100L 45.00730769230769 100L 45.00730769230769 100L 41.308076923076925 100" cy="65" cx="53.63884615384616" j="3" val="35" barWidth="3.6992307692307698"></path><path id="apexcharts-bar-area-0" d="M 53.63884615384616 100L 53.63884615384616 45L 57.338076923076926 45L 57.338076923076926 100L 53.63884615384616 100" fill="rgba(196,50,53,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7whe859t)" pathTo="M 53.63884615384616 100L 53.63884615384616 45L 57.338076923076926 45L 57.338076923076926 100L 53.63884615384616 100" pathFrom="M 53.63884615384616 100L 53.63884615384616 100L 57.338076923076926 100L 57.338076923076926 100L 53.63884615384616 100" cy="45" cx="65.9696153846154" j="4" val="55" barWidth="3.6992307692307698"></path><path id="apexcharts-bar-area-0" d="M 65.9696153846154 100L 65.9696153846154 25L 69.66884615384616 25L 69.66884615384616 100L 65.9696153846154 100" fill="rgba(196,50,53,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7whe859t)" pathTo="M 65.9696153846154 100L 65.9696153846154 25L 69.66884615384616 25L 69.66884615384616 100L 65.9696153846154 100" pathFrom="M 65.9696153846154 100L 65.9696153846154 100L 69.66884615384616 100L 69.66884615384616 100L 65.9696153846154 100" cy="25" cx="78.30038461538463" j="5" val="75" barWidth="3.6992307692307698"></path><path id="apexcharts-bar-area-0" d="M 78.30038461538463 100L 78.30038461538463 0L 81.9996153846154 0L 81.9996153846154 100L 78.30038461538463 100" fill="rgba(196,50,53,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7whe859t)" pathTo="M 78.30038461538463 100L 78.30038461538463 0L 81.9996153846154 0L 81.9996153846154 100L 78.30038461538463 100" pathFrom="M 78.30038461538463 100L 78.30038461538463 100L 81.9996153846154 100L 81.9996153846154 100L 78.30038461538463 100" cy="0" cx="90.63115384615386" j="6" val="100" barWidth="3.6992307692307698"></path><path id="apexcharts-bar-area-0" d="M 90.63115384615386 100L 90.63115384615386 25L 94.33038461538463 25L 94.33038461538463 100L 90.63115384615386 100" fill="rgba(196,50,53,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7whe859t)" pathTo="M 90.63115384615386 100L 90.63115384615386 25L 94.33038461538463 25L 94.33038461538463 100L 90.63115384615386 100" pathFrom="M 90.63115384615386 100L 90.63115384615386 100L 94.33038461538463 100L 94.33038461538463 100L 90.63115384615386 100" cy="25" cx="102.9619230769231" j="7" val="75" barWidth="3.6992307692307698" selected="true" filter="url(#SvgjsFilter1880)"></path><path id="apexcharts-bar-area-0" d="M 102.9619230769231 100L 102.9619230769231 45L 106.66115384615387 45L 106.66115384615387 100L 102.9619230769231 100" fill="rgba(196,50,53,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7whe859t)" pathTo="M 102.9619230769231 100L 102.9619230769231 45L 106.66115384615387 45L 106.66115384615387 100L 102.9619230769231 100" pathFrom="M 102.9619230769231 100L 102.9619230769231 100L 106.66115384615387 100L 106.66115384615387 100L 102.9619230769231 100" cy="45" cx="115.29269230769233" j="8" val="55" barWidth="3.6992307692307698"></path><path id="apexcharts-bar-area-0" d="M 115.29269230769233 100L 115.29269230769233 65L 118.9919230769231 65L 118.9919230769231 100L 115.29269230769233 100" fill="rgba(196,50,53,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7whe859t)" pathTo="M 115.29269230769233 100L 115.29269230769233 65L 118.9919230769231 65L 118.9919230769231 100L 115.29269230769233 100" pathFrom="M 115.29269230769233 100L 115.29269230769233 100L 118.9919230769231 100L 118.9919230769231 100L 115.29269230769233 100" cy="65" cx="127.62346153846157" j="9" val="35" barWidth="3.6992307692307698"></path><path id="apexcharts-bar-area-0" d="M 127.62346153846157 100L 127.62346153846157 75L 131.32269230769234 75L 131.32269230769234 100L 127.62346153846157 100" fill="rgba(196,50,53,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7whe859t)" pathTo="M 127.62346153846157 100L 127.62346153846157 75L 131.32269230769234 75L 131.32269230769234 100L 127.62346153846157 100" pathFrom="M 127.62346153846157 100L 127.62346153846157 100L 131.32269230769234 100L 131.32269230769234 100L 127.62346153846157 100" cy="75" cx="139.9542307692308" j="10" val="25" barWidth="3.6992307692307698"></path><path id="apexcharts-bar-area-0" d="M 139.9542307692308 100L 139.9542307692308 85L 143.65346153846158 85L 143.65346153846158 100L 139.9542307692308 100" fill="rgba(196,50,53,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7whe859t)" pathTo="M 139.9542307692308 100L 139.9542307692308 85L 143.65346153846158 85L 143.65346153846158 100L 139.9542307692308 100" pathFrom="M 139.9542307692308 100L 139.9542307692308 100L 143.65346153846158 100L 143.65346153846158 100L 139.9542307692308 100" cy="85" cx="152.28500000000003" j="11" val="15" barWidth="3.6992307692307698"></path><path id="apexcharts-bar-area-0" d="M 152.28500000000003 100L 152.28500000000003 95L 155.9842307692308 95L 155.9842307692308 100L 152.28500000000003 100" fill="rgba(196,50,53,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7whe859t)" pathTo="M 152.28500000000003 100L 152.28500000000003 95L 155.9842307692308 95L 155.9842307692308 100L 152.28500000000003 100" pathFrom="M 152.28500000000003 100L 152.28500000000003 100L 155.9842307692308 100L 155.9842307692308 100L 152.28500000000003 100" cy="95" cx="164.61576923076925" j="12" val="5" barWidth="3.6992307692307698"></path><g id="SvgjsG1469" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1490" x1="0" y1="0" x2="160.3" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1491" x1="0" y1="0" x2="160.3" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1492" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1493" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1494" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1462" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1485" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1486" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light" style="left: 91.5188px; top: 7px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(196, 50, 53); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value">75</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div>
                  <a href="{{URL::to('chatbot_registration')}}" class="ul-widget__content-v2">
                        <h4 class="heading mt-3">{{$registrations_chatbot ?? 0}}</h4>
                        <div class="dropdown">
                          <button class="dropbtn" style="background-color: transparent;border: none;color: #70657b !important;font-size:14px;">Chatbot</button>
                           <div class="dropdown-content">
                                <p style="font-size:14px;color:#21d2d2;font-weight: 900;">Chatbot Registration In This Week:</p><p class="badge badge-pill badge-primary" style="font-size:14px">{{ $week_chatbot_register ?? 0 }}</p>
                           </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-lg-3">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart21"></div>
                    <div id="apexcharts4ujxmfka" class="apexcharts-canvas apexcharts4ujxmfka light" style="width: 160.3px; height: 100px;"><svg id="SvgjsSvg1633" width="160.3" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1635" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1634"><linearGradient id="SvgjsLinearGradient1638" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1639" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1640" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1641" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask4ujxmfka"><rect id="SvgjsRect1644" width="160.3" height="100" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask4ujxmfka"><rect id="SvgjsRect1645" width="200.3" height="140" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine1643" x1="0" y1="0" x2="0" y2="100" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="url(#SvgjsLinearGradient1638)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG1666" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1667" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1670" class="apexcharts-grid"><line id="SvgjsLine1672" x1="0" y1="100" x2="160.3" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1671" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1647" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1648" class="apexcharts-series seriesx1" rel="1" data:realIndex="0"><path id="apexcharts-bar-area-0" d="M 3.5065625000000002 100L 3.5065625000000002 92.85714285714286L 6.5121875000000005 92.85714285714286L 6.5121875000000005 100L 3.5065625000000002 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 3.5065625000000002 100L 3.5065625000000002 92.85714285714286L 6.5121875000000005 92.85714285714286L 6.5121875000000005 100L 3.5065625000000002 100" pathFrom="M 3.5065625000000002 100L 3.5065625000000002 100L 6.5121875000000005 100L 6.5121875000000005 100L 3.5065625000000002 100" cy="92.85714285714286" cx="13.525312500000002" j="0" val="5" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 13.525312500000002 100L 13.525312500000002 78.57142857142857L 16.5309375 78.57142857142857L 16.5309375 100L 13.525312500000002 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 13.525312500000002 100L 13.525312500000002 78.57142857142857L 16.5309375 78.57142857142857L 16.5309375 100L 13.525312500000002 100" pathFrom="M 13.525312500000002 100L 13.525312500000002 100L 16.5309375 100L 16.5309375 100L 13.525312500000002 100" cy="78.57142857142857" cx="23.544062500000003" j="1" val="15" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 23.544062500000003 100L 23.544062500000003 64.28571428571428L 26.549687500000005 64.28571428571428L 26.549687500000005 100L 23.544062500000003 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 23.544062500000003 100L 23.544062500000003 64.28571428571428L 26.549687500000005 64.28571428571428L 26.549687500000005 100L 23.544062500000003 100" pathFrom="M 23.544062500000003 100L 23.544062500000003 100L 26.549687500000005 100L 26.549687500000005 100L 23.544062500000003 100" cy="64.28571428571428" cx="33.56281250000001" j="2" val="25" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 33.56281250000001 100L 33.56281250000001 50L 36.56843750000001 50L 36.56843750000001 100L 33.56281250000001 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 33.56281250000001 100L 33.56281250000001 50L 36.56843750000001 50L 36.56843750000001 100L 33.56281250000001 100" pathFrom="M 33.56281250000001 100L 33.56281250000001 100L 36.56843750000001 100L 36.56843750000001 100L 33.56281250000001 100" cy="50" cx="43.581562500000004" j="3" val="35" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 43.581562500000004 100L 43.581562500000004 64.28571428571428L 46.587187500000006 64.28571428571428L 46.587187500000006 100L 43.581562500000004 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 43.581562500000004 100L 43.581562500000004 64.28571428571428L 46.587187500000006 64.28571428571428L 46.587187500000006 100L 43.581562500000004 100" pathFrom="M 43.581562500000004 100L 43.581562500000004 100L 46.587187500000006 100L 46.587187500000006 100L 43.581562500000004 100" cy="64.28571428571428" cx="53.6003125" j="4" val="25" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 53.6003125 100L 53.6003125 78.57142857142857L 56.6059375 78.57142857142857L 56.6059375 100L 53.6003125 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 53.6003125 100L 53.6003125 78.57142857142857L 56.6059375 78.57142857142857L 56.6059375 100L 53.6003125 100" pathFrom="M 53.6003125 100L 53.6003125 100L 56.6059375 100L 56.6059375 100L 53.6003125 100" cy="78.57142857142857" cx="63.6190625" j="5" val="15" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 63.6190625 100L 63.6190625 92.85714285714286L 66.6246875 92.85714285714286L 66.6246875 100L 63.6190625 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 63.6190625 100L 63.6190625 92.85714285714286L 66.6246875 92.85714285714286L 66.6246875 100L 63.6190625 100" pathFrom="M 63.6190625 100L 63.6190625 100L 66.6246875 100L 66.6246875 100L 63.6190625 100" cy="92.85714285714286" cx="73.6378125" j="6" val="5" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 73.6378125 100L 73.6378125 85.71428571428571L 76.64343749999999 85.71428571428571L 76.64343749999999 100L 73.6378125 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 73.6378125 100L 73.6378125 85.71428571428571L 76.64343749999999 85.71428571428571L 76.64343749999999 100L 73.6378125 100" pathFrom="M 73.6378125 100L 73.6378125 100L 76.64343749999999 100L 76.64343749999999 100L 73.6378125 100" cy="85.71428571428571" cx="83.65656249999999" j="7" val="10" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 83.65656249999999 100L 83.65656249999999 71.42857142857143L 86.66218749999999 71.42857142857143L 86.66218749999999 100L 83.65656249999999 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 83.65656249999999 100L 83.65656249999999 71.42857142857143L 86.66218749999999 71.42857142857143L 86.66218749999999 100L 83.65656249999999 100" pathFrom="M 83.65656249999999 100L 83.65656249999999 100L 86.66218749999999 100L 86.66218749999999 100L 83.65656249999999 100" cy="71.42857142857143" cx="93.67531249999999" j="8" val="20" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 93.67531249999999 100L 93.67531249999999 57.14285714285714L 96.68093749999998 57.14285714285714L 96.68093749999998 100L 93.67531249999999 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 93.67531249999999 100L 93.67531249999999 57.14285714285714L 96.68093749999998 57.14285714285714L 96.68093749999998 100L 93.67531249999999 100" pathFrom="M 93.67531249999999 100L 93.67531249999999 100L 96.68093749999998 100L 96.68093749999998 100L 93.67531249999999 100" cy="57.14285714285714" cx="103.69406249999999" j="9" val="30" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 103.69406249999999 100L 103.69406249999999 35.71428571428571L 106.69968749999998 35.71428571428571L 106.69968749999998 100L 103.69406249999999 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 103.69406249999999 100L 103.69406249999999 35.71428571428571L 106.69968749999998 35.71428571428571L 106.69968749999998 100L 103.69406249999999 100" pathFrom="M 103.69406249999999 100L 103.69406249999999 100L 106.69968749999998 100L 106.69968749999998 100L 103.69406249999999 100" cy="35.71428571428571" cx="113.71281249999998" j="10" val="45" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 113.71281249999998 100L 113.71281249999998 7.142857142857139L 116.71843749999998 7.142857142857139L 116.71843749999998 100L 113.71281249999998 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 113.71281249999998 100L 113.71281249999998 7.142857142857139L 116.71843749999998 7.142857142857139L 116.71843749999998 100L 113.71281249999998 100" pathFrom="M 113.71281249999998 100L 113.71281249999998 100L 116.71843749999998 100L 116.71843749999998 100L 113.71281249999998 100" cy="7.142857142857139" cx="123.73156249999998" j="11" val="65" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 123.73156249999998 100L 123.73156249999998 35.71428571428571L 126.73718749999998 35.71428571428571L 126.73718749999998 100L 123.73156249999998 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 123.73156249999998 100L 123.73156249999998 35.71428571428571L 126.73718749999998 35.71428571428571L 126.73718749999998 100L 123.73156249999998 100" pathFrom="M 123.73156249999998 100L 123.73156249999998 100L 126.73718749999998 100L 126.73718749999998 100L 123.73156249999998 100" cy="35.71428571428571" cx="133.75031249999998" j="12" val="45" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 133.75031249999998 100L 133.75031249999998 57.14285714285714L 136.7559375 57.14285714285714L 136.7559375 100L 133.75031249999998 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 133.75031249999998 100L 133.75031249999998 57.14285714285714L 136.7559375 57.14285714285714L 136.7559375 100L 133.75031249999998 100" pathFrom="M 133.75031249999998 100L 133.75031249999998 100L 136.7559375 100L 136.7559375 100L 133.75031249999998 100" cy="57.14285714285714" cx="143.7690625" j="13" val="30" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 143.7690625 100L 143.7690625 71.42857142857143L 146.7746875 71.42857142857143L 146.7746875 100L 143.7690625 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 143.7690625 100L 143.7690625 71.42857142857143L 146.7746875 71.42857142857143L 146.7746875 100L 143.7690625 100" pathFrom="M 143.7690625 100L 143.7690625 100L 146.7746875 100L 146.7746875 100L 143.7690625 100" cy="71.42857142857143" cx="153.7878125" j="14" val="20" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 153.7878125 100L 153.7878125 85.71428571428571L 156.7934375 85.71428571428571L 156.7934375 100L 153.7878125 100" fill="rgba(230,175,75,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask4ujxmfka)" pathTo="M 153.7878125 100L 153.7878125 85.71428571428571L 156.7934375 85.71428571428571L 156.7934375 100L 153.7878125 100" pathFrom="M 153.7878125 100L 153.7878125 100L 156.7934375 100L 156.7934375 100L 153.7878125 100" cy="85.71428571428571" cx="163.8065625" j="15" val="10" barWidth="3.005625"></path><g id="SvgjsG1649" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1673" x1="0" y1="0" x2="160.3" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1674" x1="0" y1="0" x2="160.3" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1675" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1676" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1677" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1642" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1668" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1669" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(230, 175, 75);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div>
                    </div>
                    <a href="{{URL::to('international_registration')}}" class="ul-widget__content-v2">
                        <h4 class="heading mt-3">{{$registrations_international ?? 0}}</h4>
                        <div class="dropdown">
                          <button class="dropbtn" style="background-color: transparent;border: none;color: #70657b !important;font-size:14px;">International Registration</button>
                           <div class="dropdown-content">
                                <p style="font-size:14px;color:#21d2d2;font-weight: 900;">International Registration In This Week:</p><p class="badge badge-pill badge-primary" style="font-size:14px">{{ $week_international_register ?? 0 }}</p>
                           </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 col-lg-4">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart16"></div>
                    <a href="#todayRegisterModal" data-toggle="modal"  class="ul-widget__content-v2">
                        <h4 class="heading mt-3">{{$registrations_today ?? 0}}</h4>
                        <p class="text-muted m-0">Today Register</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php 
    $month_total_register = $month_office_register + $month_onrole_register + $month_offrole_register + $month_website_register + $month_payroll_register + $month_parser_register + $month_chatbot_register;
?>
  <div class="col-md-4 col-lg-4">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart21"></div>
                   <div id="apexchartskr9o188fh" class="apexcharts-canvas apexchartskr9o188fh light" style="width: 160.3px; height: 100px;"><svg id="SvgjsSvg1688" width="160.3" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1690" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1689"><linearGradient id="SvgjsLinearGradient1693" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1694" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1695" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1696" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskkr9o188fh"><rect id="SvgjsRect1699" width="160.3" height="100" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskkr9o188fh"><rect id="SvgjsRect1700" width="200.3" height="140" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine1698" x1="3.9840576171874993" y1="0" x2="3.9840576171874993" y2="100" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="3.9840576171874993" y="0" width="1" height="100" fill="url(#SvgjsLinearGradient1693)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG1721" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1722" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1725" class="apexcharts-grid"><line id="SvgjsLine1727" x1="0" y1="100" x2="160.3" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1726" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1702" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1703" class="apexcharts-series seriesx1" rel="1" data:realIndex="0"><path id="apexcharts-bar-area-0" d="M 3.5065625000000002 100L 3.5065625000000002 0L 6.5121875000000005 0L 6.5121875000000005 100L 3.5065625000000002 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 3.5065625000000002 100L 3.5065625000000002 0L 6.5121875000000005 0L 6.5121875000000005 100L 3.5065625000000002 100" pathFrom="M 3.5065625000000002 100L 3.5065625000000002 100L 6.5121875000000005 100L 6.5121875000000005 100L 3.5065625000000002 100" cy="0" cx="13.525312500000002" j="0" val="100" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 13.525312500000002 100L 13.525312500000002 15L 16.5309375 15L 16.5309375 100L 13.525312500000002 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 13.525312500000002 100L 13.525312500000002 15L 16.5309375 15L 16.5309375 100L 13.525312500000002 100" pathFrom="M 13.525312500000002 100L 13.525312500000002 100L 16.5309375 100L 16.5309375 100L 13.525312500000002 100" cy="15" cx="23.544062500000003" j="1" val="85" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 23.544062500000003 100L 23.544062500000003 25L 26.549687500000005 25L 26.549687500000005 100L 23.544062500000003 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 23.544062500000003 100L 23.544062500000003 25L 26.549687500000005 25L 26.549687500000005 100L 23.544062500000003 100" pathFrom="M 23.544062500000003 100L 23.544062500000003 100L 26.549687500000005 100L 26.549687500000005 100L 23.544062500000003 100" cy="25" cx="33.56281250000001" j="2" val="75" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 33.56281250000001 100L 33.56281250000001 45L 36.56843750000001 45L 36.56843750000001 100L 33.56281250000001 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 33.56281250000001 100L 33.56281250000001 45L 36.56843750000001 45L 36.56843750000001 100L 33.56281250000001 100" pathFrom="M 33.56281250000001 100L 33.56281250000001 100L 36.56843750000001 100L 36.56843750000001 100L 33.56281250000001 100" cy="45" cx="43.581562500000004" j="3" val="55" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 43.581562500000004 100L 43.581562500000004 65L 46.587187500000006 65L 46.587187500000006 100L 43.581562500000004 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 43.581562500000004 100L 43.581562500000004 65L 46.587187500000006 65L 46.587187500000006 100L 43.581562500000004 100" pathFrom="M 43.581562500000004 100L 43.581562500000004 100L 46.587187500000006 100L 46.587187500000006 100L 43.581562500000004 100" cy="65" cx="53.6003125" j="4" val="35" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 53.6003125 100L 53.6003125 75L 56.6059375 75L 56.6059375 100L 53.6003125 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 53.6003125 100L 53.6003125 75L 56.6059375 75L 56.6059375 100L 53.6003125 100" pathFrom="M 53.6003125 100L 53.6003125 100L 56.6059375 100L 56.6059375 100L 53.6003125 100" cy="75" cx="63.6190625" j="5" val="25" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 63.6190625 100L 63.6190625 85L 66.6246875 85L 66.6246875 100L 63.6190625 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 63.6190625 100L 63.6190625 85L 66.6246875 85L 66.6246875 100L 63.6190625 100" pathFrom="M 63.6190625 100L 63.6190625 100L 66.6246875 100L 66.6246875 100L 63.6190625 100" cy="85" cx="73.6378125" j="6" val="15" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 73.6378125 100L 73.6378125 95L 76.64343749999999 95L 76.64343749999999 100L 73.6378125 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 73.6378125 100L 73.6378125 95L 76.64343749999999 95L 76.64343749999999 100L 73.6378125 100" pathFrom="M 73.6378125 100L 73.6378125 100L 76.64343749999999 100L 76.64343749999999 100L 73.6378125 100" cy="95" cx="83.65656249999999" j="7" val="5" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 83.65656249999999 100L 83.65656249999999 85L 86.66218749999999 85L 86.66218749999999 100L 83.65656249999999 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 83.65656249999999 100L 83.65656249999999 85L 86.66218749999999 85L 86.66218749999999 100L 83.65656249999999 100" pathFrom="M 83.65656249999999 100L 83.65656249999999 100L 86.66218749999999 100L 86.66218749999999 100L 83.65656249999999 100" cy="85" cx="93.67531249999999" j="8" val="15" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 93.67531249999999 100L 93.67531249999999 75L 96.68093749999998 75L 96.68093749999998 100L 93.67531249999999 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 93.67531249999999 100L 93.67531249999999 75L 96.68093749999998 75L 96.68093749999998 100L 93.67531249999999 100" pathFrom="M 93.67531249999999 100L 93.67531249999999 100L 96.68093749999998 100L 96.68093749999998 100L 93.67531249999999 100" cy="75" cx="103.69406249999999" j="9" val="25" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 103.69406249999999 100L 103.69406249999999 65L 106.69968749999998 65L 106.69968749999998 100L 103.69406249999999 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 103.69406249999999 100L 103.69406249999999 65L 106.69968749999998 65L 106.69968749999998 100L 103.69406249999999 100" pathFrom="M 103.69406249999999 100L 103.69406249999999 100L 106.69968749999998 100L 106.69968749999998 100L 103.69406249999999 100" cy="65" cx="113.71281249999998" j="10" val="35" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 113.71281249999998 100L 113.71281249999998 45L 116.71843749999998 45L 116.71843749999998 100L 113.71281249999998 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 113.71281249999998 100L 113.71281249999998 45L 116.71843749999998 45L 116.71843749999998 100L 113.71281249999998 100" pathFrom="M 113.71281249999998 100L 113.71281249999998 100L 116.71843749999998 100L 116.71843749999998 100L 113.71281249999998 100" cy="45" cx="123.73156249999998" j="11" val="55" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 123.73156249999998 100L 123.73156249999998 25L 126.73718749999998 25L 126.73718749999998 100L 123.73156249999998 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 123.73156249999998 100L 123.73156249999998 25L 126.73718749999998 25L 126.73718749999998 100L 123.73156249999998 100" pathFrom="M 123.73156249999998 100L 123.73156249999998 100L 126.73718749999998 100L 126.73718749999998 100L 123.73156249999998 100" cy="25" cx="133.75031249999998" j="12" val="75" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 133.75031249999998 100L 133.75031249999998 15L 136.7559375 15L 136.7559375 100L 133.75031249999998 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 133.75031249999998 100L 133.75031249999998 15L 136.7559375 15L 136.7559375 100L 133.75031249999998 100" pathFrom="M 133.75031249999998 100L 133.75031249999998 100L 136.7559375 100L 136.7559375 100L 133.75031249999998 100" cy="15" cx="143.7690625" j="13" val="85" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 143.7690625 100L 143.7690625 10L 146.7746875 10L 146.7746875 100L 143.7690625 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 143.7690625 100L 143.7690625 10L 146.7746875 10L 146.7746875 100L 143.7690625 100" pathFrom="M 143.7690625 100L 143.7690625 100L 146.7746875 100L 146.7746875 100L 143.7690625 100" cy="10" cx="153.7878125" j="14" val="90" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 153.7878125 100L 153.7878125 0L 156.7934375 0L 156.7934375 100L 153.7878125 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 153.7878125 100L 153.7878125 0L 156.7934375 0L 156.7934375 100L 153.7878125 100" pathFrom="M 153.7878125 100L 153.7878125 100L 156.7934375 100L 156.7934375 100L 153.7878125 100" cy="0" cx="163.8065625" j="15" val="100" barWidth="3.005625"></path><g id="SvgjsG1704" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1728" x1="0" y1="0" x2="160.3" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1729" x1="0" y1="0" x2="160.3" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1730" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1731" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1732" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1697" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1723" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1724" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light" style="left: 4.48406px; top: -18px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(37, 155, 36); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value">100</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div>
                    <a href="#monthRegisterModal" data-toggle="modal"  class="ul-widget__content-v2">
                        <h4 class="heading mt-3">{{$month_total_register ?? 0}}</h4>
                        <p class="text-muted m-0">Month's Register</p>
                    </a>
                </div>
            </div>
        </div>
    </div>  
<?php
$year_total_register = $year_office_register + $year_onrole_register + $year_offrole_register + $year_website_register + $year_payroll_register + $year_parser_register + $year_chatbot_register + $year_chatbot_register;
?> 
 <div class="col-md-4 col-lg-4">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart25"></div>
                  <div id="apexchartskr9o188fh" class="apexcharts-canvas apexchartskr9o188fh light" style="width: 160.3px; height: 100px;"><svg id="SvgjsSvg1688" width="160.3" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1690" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1689"><linearGradient id="SvgjsLinearGradient1693" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1694" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1695" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1696" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskkr9o188fh"><rect id="SvgjsRect1699" width="160.3" height="100" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskkr9o188fh"><rect id="SvgjsRect1700" width="200.3" height="140" x="-20" y="-20" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine1698" x1="3.9840576171874993" y1="0" x2="3.9840576171874993" y2="100" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="3.9840576171874993" y="0" width="1" height="100" fill="url(#SvgjsLinearGradient1693)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG1721" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1722" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1725" class="apexcharts-grid"><line id="SvgjsLine1727" x1="0" y1="100" x2="160.3" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1726" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1702" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1703" class="apexcharts-series seriesx1" rel="1" data:realIndex="0"><path id="apexcharts-bar-area-0" d="M 3.5065625000000002 100L 3.5065625000000002 0L 6.5121875000000005 0L 6.5121875000000005 100L 3.5065625000000002 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 3.5065625000000002 100L 3.5065625000000002 0L 6.5121875000000005 0L 6.5121875000000005 100L 3.5065625000000002 100" pathFrom="M 3.5065625000000002 100L 3.5065625000000002 100L 6.5121875000000005 100L 6.5121875000000005 100L 3.5065625000000002 100" cy="0" cx="13.525312500000002" j="0" val="100" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 13.525312500000002 100L 13.525312500000002 15L 16.5309375 15L 16.5309375 100L 13.525312500000002 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 13.525312500000002 100L 13.525312500000002 15L 16.5309375 15L 16.5309375 100L 13.525312500000002 100" pathFrom="M 13.525312500000002 100L 13.525312500000002 100L 16.5309375 100L 16.5309375 100L 13.525312500000002 100" cy="15" cx="23.544062500000003" j="1" val="85" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 23.544062500000003 100L 23.544062500000003 25L 26.549687500000005 25L 26.549687500000005 100L 23.544062500000003 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 23.544062500000003 100L 23.544062500000003 25L 26.549687500000005 25L 26.549687500000005 100L 23.544062500000003 100" pathFrom="M 23.544062500000003 100L 23.544062500000003 100L 26.549687500000005 100L 26.549687500000005 100L 23.544062500000003 100" cy="25" cx="33.56281250000001" j="2" val="75" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 33.56281250000001 100L 33.56281250000001 45L 36.56843750000001 45L 36.56843750000001 100L 33.56281250000001 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 33.56281250000001 100L 33.56281250000001 45L 36.56843750000001 45L 36.56843750000001 100L 33.56281250000001 100" pathFrom="M 33.56281250000001 100L 33.56281250000001 100L 36.56843750000001 100L 36.56843750000001 100L 33.56281250000001 100" cy="45" cx="43.581562500000004" j="3" val="55" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 43.581562500000004 100L 43.581562500000004 65L 46.587187500000006 65L 46.587187500000006 100L 43.581562500000004 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 43.581562500000004 100L 43.581562500000004 65L 46.587187500000006 65L 46.587187500000006 100L 43.581562500000004 100" pathFrom="M 43.581562500000004 100L 43.581562500000004 100L 46.587187500000006 100L 46.587187500000006 100L 43.581562500000004 100" cy="65" cx="53.6003125" j="4" val="35" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 53.6003125 100L 53.6003125 75L 56.6059375 75L 56.6059375 100L 53.6003125 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 53.6003125 100L 53.6003125 75L 56.6059375 75L 56.6059375 100L 53.6003125 100" pathFrom="M 53.6003125 100L 53.6003125 100L 56.6059375 100L 56.6059375 100L 53.6003125 100" cy="75" cx="63.6190625" j="5" val="25" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 63.6190625 100L 63.6190625 85L 66.6246875 85L 66.6246875 100L 63.6190625 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 63.6190625 100L 63.6190625 85L 66.6246875 85L 66.6246875 100L 63.6190625 100" pathFrom="M 63.6190625 100L 63.6190625 100L 66.6246875 100L 66.6246875 100L 63.6190625 100" cy="85" cx="73.6378125" j="6" val="15" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 73.6378125 100L 73.6378125 95L 76.64343749999999 95L 76.64343749999999 100L 73.6378125 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 73.6378125 100L 73.6378125 95L 76.64343749999999 95L 76.64343749999999 100L 73.6378125 100" pathFrom="M 73.6378125 100L 73.6378125 100L 76.64343749999999 100L 76.64343749999999 100L 73.6378125 100" cy="95" cx="83.65656249999999" j="7" val="5" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 83.65656249999999 100L 83.65656249999999 85L 86.66218749999999 85L 86.66218749999999 100L 83.65656249999999 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 83.65656249999999 100L 83.65656249999999 85L 86.66218749999999 85L 86.66218749999999 100L 83.65656249999999 100" pathFrom="M 83.65656249999999 100L 83.65656249999999 100L 86.66218749999999 100L 86.66218749999999 100L 83.65656249999999 100" cy="85" cx="93.67531249999999" j="8" val="15" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 93.67531249999999 100L 93.67531249999999 75L 96.68093749999998 75L 96.68093749999998 100L 93.67531249999999 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 93.67531249999999 100L 93.67531249999999 75L 96.68093749999998 75L 96.68093749999998 100L 93.67531249999999 100" pathFrom="M 93.67531249999999 100L 93.67531249999999 100L 96.68093749999998 100L 96.68093749999998 100L 93.67531249999999 100" cy="75" cx="103.69406249999999" j="9" val="25" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 103.69406249999999 100L 103.69406249999999 65L 106.69968749999998 65L 106.69968749999998 100L 103.69406249999999 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 103.69406249999999 100L 103.69406249999999 65L 106.69968749999998 65L 106.69968749999998 100L 103.69406249999999 100" pathFrom="M 103.69406249999999 100L 103.69406249999999 100L 106.69968749999998 100L 106.69968749999998 100L 103.69406249999999 100" cy="65" cx="113.71281249999998" j="10" val="35" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 113.71281249999998 100L 113.71281249999998 45L 116.71843749999998 45L 116.71843749999998 100L 113.71281249999998 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 113.71281249999998 100L 113.71281249999998 45L 116.71843749999998 45L 116.71843749999998 100L 113.71281249999998 100" pathFrom="M 113.71281249999998 100L 113.71281249999998 100L 116.71843749999998 100L 116.71843749999998 100L 113.71281249999998 100" cy="45" cx="123.73156249999998" j="11" val="55" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 123.73156249999998 100L 123.73156249999998 25L 126.73718749999998 25L 126.73718749999998 100L 123.73156249999998 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 123.73156249999998 100L 123.73156249999998 25L 126.73718749999998 25L 126.73718749999998 100L 123.73156249999998 100" pathFrom="M 123.73156249999998 100L 123.73156249999998 100L 126.73718749999998 100L 126.73718749999998 100L 123.73156249999998 100" cy="25" cx="133.75031249999998" j="12" val="75" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 133.75031249999998 100L 133.75031249999998 15L 136.7559375 15L 136.7559375 100L 133.75031249999998 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 133.75031249999998 100L 133.75031249999998 15L 136.7559375 15L 136.7559375 100L 133.75031249999998 100" pathFrom="M 133.75031249999998 100L 133.75031249999998 100L 136.7559375 100L 136.7559375 100L 133.75031249999998 100" cy="15" cx="143.7690625" j="13" val="85" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 143.7690625 100L 143.7690625 10L 146.7746875 10L 146.7746875 100L 143.7690625 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 143.7690625 100L 143.7690625 10L 146.7746875 10L 146.7746875 100L 143.7690625 100" pathFrom="M 143.7690625 100L 143.7690625 100L 146.7746875 100L 146.7746875 100L 143.7690625 100" cy="10" cx="153.7878125" j="14" val="90" barWidth="3.005625"></path><path id="apexcharts-bar-area-0" d="M 153.7878125 100L 153.7878125 0L 156.7934375 0L 156.7934375 100L 153.7878125 100" fill="rgba(37,155,36,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskkr9o188fh)" pathTo="M 153.7878125 100L 153.7878125 0L 156.7934375 0L 156.7934375 100L 153.7878125 100" pathFrom="M 153.7878125 100L 153.7878125 100L 156.7934375 100L 156.7934375 100L 153.7878125 100" cy="0" cx="163.8065625" j="15" val="100" barWidth="3.005625"></path><g id="SvgjsG1704" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1728" x1="0" y1="0" x2="160.3" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1729" x1="0" y1="0" x2="160.3" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1730" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1731" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1732" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1697" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1723" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1724" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light" style="left: 4.48406px; top: -18px;"><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(37, 155, 36); display: none;"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value">100</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div>
                   <a href="#yearRegisterModal" data-toggle="modal"  class="ul-widget__content-v2">
                        <h4 class="heading mt-3">{{$year_total_register ?? 0}}</h4>
                        <p class="text-muted m-0">Year's Register</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- right-side-->
    <div class="col-lg-7 col-md-12 mt-4">
        <div class="card text-center border-primary">
            <!-- -->
            <div class="card-header bg-primary text-white">
                <div>Manage Recent Users</div>
            </div>
            <div class="card-body">
                <div class="ul-widget5">
                    @if(count($registrations) > 0)
                    @foreach ($registrations as $in => $item)
                    @php
                    $user_login = \App\UserLogin_Model::find($item->login_id);
                    $user_profile = \App\UserProfile::whereuser_id($item->id)->first();
                    @endphp
                    <div class="ul-widget-s5__item mb-5">
                        <div class="ul-widget-s5__content">

                            <div class="ul-widget-s5__section">
                                {{--<div class="ul-widget-s5__pic">--}}
                                {{--@if(file_exists("public/$item->image") && isset($item->image))--}}
                                {{--<img id="userDropdown"--}}
                                {{--src="{{ URL::to("public/$item->image")}}"--}}
                                {{--alt="" data-toggle="dropdown"--}}
                                {{--aria-haspopup="true"--}}
                                {{--aria-expanded="false">--}}
                                {{--@else--}}
                                {{--<img id="userDropdown"--}}
                                {{--src="{{ URL::to('public/images/d.png')}}"--}}
                                {{--alt="" data-toggle="dropdown"--}}
                                {{--aria-haspopup="true"--}}
                                {{--aria-expanded="false">--}}
                                {{--@endif--}}

                                {{--</div>--}}
                                <a class="ul-widget4__title" href="#">
                                    @if(file_exists("public/$item->image") && isset($item->image))
                                    <img id="userDropdown" src="{{ URL::to("public/$item->image")}}" style="width: 80px"
                                        alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @else
                                    <img id="userDropdown" src="{{ URL::to('public/images/d.png')}}" style="width: 80px"
                                        alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @endif
                                    <br>
                                </a>
                                <p class="ul-widget-s5__desc">Profile View Count
                                    : {{ $item->profile_view_count ?? 0}}</p>
                            </div>

                        </div>
                        <div class="ul-widget-s5__section"><a class="ul-widget4__title"
                                href="#">{{ isset($item->name)? $item->name : '-'}}
                                <br>{{$item->contact}}<br>{{ isset($item->email)? $item->email : '-'}}</a>
                            <p class="ul-widget-s5__desc"><strong></strong> <span class="badge badge-info">
                                    Created At :
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y h:i A')}}</span><br><span
                                    class="badge badge-primary">
                                    Register From : {{ strtoupper($item->register_from)}}
                                </span>
                            </p>
                        </div>
                        <div class="ul-widget-s5__content">
                            <div class="ul-widget-s5__progress">
                                <div class="ul-widget-s5__stats"><span>Profile Complete :
                                        <strong>{{$item->profile_complete_percent ?? 0}}
                                            %</strong></span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                                        role="progressbar" aria-valuemin="0" aria-valuemax="100"
                                        aria-valuenow="{{$item->profile_complete_percent}}"
                                        style="width: {{$item->profile_complete_percent}}%;">
                                        {{$item->profile_complete_percent ?? 0}}
                                        %
                                    </div>
                                </div>
                            </div>
                            <?php
                                     if($item->resumeCode_id != ''){
                                        $resume_code = App\ResumeCodeModel::where('id',$item->resumeCode_id)->value('user_code'); ?>
                                    <a target="_blank" href="{{ url('cv').'/'.$resume_code }}"
                                       class="btn btn-outline-primary btn-sm" type="button">View Resume</a>
                                   <?php  }
                                     else{
                                          $name = \App\Http\Controllers\UserTemplateController::slugify($item->name); ?>
                                            <a target="_blank" href="{{URL::to('resume')."/$name/".base64_encode($item->id)}}"
                                       class="btn btn-outline-primary btn-sm" type="button">View Resume</a>

                                  <?php   }
                                    ?>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="ul-widget5">
                    <a href="{{ url('registered-user') }}">
                        See All
                        <i class="fa fa-hand-o-right"></i>
                    </a>
                </div>
            </div>
            <!-- -->
            <!-- -->
        </div>
    </div>
    <div class="col-lg-5 col-md-12 mt-4">
        <div class="card text-center border-primary">
            <!-- -->
            <div class="card-header bg-primary text-white">
                <div>Basic chart</div>
            </div>
            <div class="card-body">
                <div class="ul-widget5">
                    <div id="basicColumn-chart"></div>
                </div>
            </div>
            <!-- -->
            <!-- -->
        </div>
    </div>
</div>
@elseif(Auth::user()->role == 'client' || Auth::user()->role == 'office staff')
<div class="row">
    <!-- no 13 chart-->
    <div class="col-md-6 col-lg-4">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart9"></div>
                    <a href="{{URL::to('companies/#companies_table')}}" class="ul-widget__content-v2">
                        <h4 class="heading mt-3">{{$companies_count ?? 0}}</h4>
                        <p class="text-muted m-0">Total Companies
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- no 14 chart-->
    <div class="col-md-6 col-lg-4">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart14"></div>
                    <a href="{{URL::to('jobs')}}" class="ul-widget__content-v2">
                        <h4 class="heading mt-3">{{$jobs_count ?? 0}}</h4>
                        <p class="text-muted m-0">Total Jobs</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- no 15 chart-->
    <div class="col-md-6 col-lg-4">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart15"></div>
                    <a href="{{URL::to('candidate-Search')}}" class="ul-widget__content-v2">
                        <h4 class="heading mt-3">{{$total_candidate ?? 0}}</h4>
                        <p class="text-muted m-0">Total Candidates</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif



@endsection
@section('scripts')
@stop