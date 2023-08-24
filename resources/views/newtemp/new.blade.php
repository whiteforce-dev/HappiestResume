<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<!-- Title-->
<title>Resume</title>
<!-- Meta Tag -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="CV, Portfolio, Resume">
<meta name="author" content="">
<!-- Favicon -->
<link rel="icon" href="{!! url('assets/resumeDesign/images/favicon.png') !!}">
<link rel="stylesheet"  type="text/css" sizes="72x72" href="{!! url('assets/resumeDesign/images/apple-icon-72x72.png') !!}">
<link rel="apple-touch-icon" sizes="76x76" href="{!! url('assets/resumeDesign/images/apple-icon-76x76.png') !!}">
<link rel="apple-touch-icon" sizes="114x114" href="{!! url('assets/resumeDesign/images/apple-icon-114x114.png') !!}">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{!! url('assets/resumeDesign/vendors/bootstrap/css/bootstrap.min.css') !!}" type="text/css">

<!--Font Awesome CSS-->
<link href="{!! url('assets/resumeDesign/icons/font-awesome-4-1-0/css/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">
<!-- Custom Style -->
<link href="{!! url('assets/resumeDesign/css/style.css') !!}" rel="stylesheet">
<link href="{!! url('assets/resumeDesign/css/style3.css') !!}" rel="stylesheet">
<!-- Responsive CSS-->
<link href="{!! url('assets/resumeDesign/css/responsive.css') !!}" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<style>
@media (min-width: 1200px){
.container {
    max-width: 841px !important;
}
}


hr {
    margin-top: 0rem;
    /* margin-bottom: 1rem; */
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
  }

  .badge-primary {
    color: #fff;
    background-color: #e6a615;
}
.badge {
    display: inline-block;
    padding: 0.50em .6em;
    font-size: 100%;
}
.image-mr
{
  -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
}
html{
  background: url(./assets/resumeDesign/images/body2.jpg) fixed;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 100%;
    overflow-x:hidden;
}
    </style>

</head>
<body >
 
<div style="margin-top: 20px;margin-left: 20px;"><a href="{{ url('build-resume') }}" class="btn btn-bubble"><i class="fa fa-arrow-left"></i>&nbsp; Back & Edit</a></div>
    <div ></br></br>
    <div style="margin-top: -48px;margin-right: 15%;" class="text-right"><a href="{{ url('/') }}" class="btn btn-bubble"><i class="fa fa-bars">&nbsp;</i>My Dashboard</a></div>
    <div >
        <div class="menu-button" data-toggle="tooltip" title="Download"><i class="fa fa-download"></i>
        <a href="#"  onclick="submitPDFform()"  data-toggle="tooltip" title="PDF Download"><i class="fa fa-file-pdf-o"></i></a>
        
          <a href="#" onclick="WhatsappShare()" data-toggle="tooltip" title="WhatsApp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
        </div>
    </div>
  
<div class="container p-2">
 

  <div class="card p-3" style="border: 5px solid #103892;">
  
    <div class="row m-0">
  
      <div class="col-md-12 p-0 bg-custom">
         <div class="row">
              <div class="col-md-3">
                  <div class="img-container">
                  @if($user_login->image != null) 
                  <img src="{{ $user_login->image }}" class="img-fluid"/> 
                  @else
                  <img src="{{ url('assets/resumeDesign/images/user.png') }}" class="img-fluid"/> 
                  @endif
                  </div>
              </div>
              <div class="col-md-5">
                <div class="resume-header text-center">
                  <h1>{{ $user_login->name }}</h1>
                  <h3>{{ $user_work->title ? $user_work->title : 'Job Title' }}</h3>
                </div>
              </div>
              <div class="col-md-4" style="padding-top: 37px;color: white;padding-left: 36px;">
                <p><i class="fa fa-phone mr-2"></i>{{ $user_login->contact }}</p>
                <p><i class="fa fa-envelope mr-2"></i>{{ $user_login->email }}</p>
                  @php( $city = \App\City::where('city_id',$user_pro->user_city)->value('city_name')) 
                  @php( $state = \App\State::where('state_id',$user_pro->user_state)->value('state_name'))     
                  @php( $country = \App\Country::where('country_id',$user_pro->user_country)->value('country_name'))        
                <p><i class="fa fa-map-marker mr-2"></i>{{ $city ? $city : 'City' }},{{ $state ? $state : 'State' }},{{ $country ? $country : 'Country'}}</p>
              </div>
         </div>

            
          <div class="specifications">
            <div class="card p-3">
             <h4> Profile</h4>
              <p>{{ $user_skill->career_obj }}</p>
            
            </div>
 </div>
            <div class="specifications">
            <div class="card p-3">
              <h4>Education</h4>
              @if($user_edu_post->organization != '' || $user_edu_post->education_name != '' )
              <div class="specification-tabs">
                <h5>Post Graduation</h5>
                <div class="meta">
                  <ul>
                    <li>{{ $user_edu_post->organization }}</li>
                    <li>{{ $user_edu_post->education_name }}</li>
                    <li>{{ $user_edu_post->location }}</li>
                    <li>{{ $user_edu_post->year}}</li>
                  </ul>
                </div>
                
              </div>
              <hr>
              @endif
              @if($user_edu_graduation->organization != '' || $user_edu_graduation->education_name != '' )
              <div class="specification-tabs">
                <h5>Graduation</h5>
                <div class="meta">
                  <ul>
                    <li>{{ $user_edu_graduation->organization }}</li>
                    <li>{{ $user_edu_graduation->education_name }}</li>
                    <li>{{ $user_edu_graduation->location }}</li>
                    <li>{{ $user_edu_graduation->year}}</li>
                  </ul>
                </div>
                
              </div>
              <hr>
              @endif
              @if($user_edu_XII->organization != '' || $user_edu_XII->education_name != '' )
              <div class="specification-tabs">
                <h5>XII'th</h5>
                <div class="meta">
                  <ul>
                    <li>{{ $user_edu_XII->organization }}</li>
                    <li>{{ $user_edu_XII->education_name }}</li>
                    <li>{{ $user_edu_XII->location }}</li>
                    <li>{{ $user_edu_XII->year}}</li>
                  </ul>
                </div>
                
              </div>
              <hr>
              @endif
              @if($user_edu_X->organization != '' || $user_edu_X->education_name != '' )
              <div class="specification-tabs">
                <h5>X'th</h5>
                <div class="meta">
                  <ul>
                    <li>{{ $user_edu_X->organization }}</li>
                    <li>{{ $user_edu_X->education_name }}</li>
                    <li>{{ $user_edu_X->location }}</li>
                    <li>{{ $user_edu_X->year}}</li>
                  </ul>
                </div>
                
              </div>
              <hr>
              @endif

           
            
            </div>
    @php( $city = \App\City::where('city_id',$user_work->job_city)->value('city_name')) 
    @php( $state = \App\State::where('state_id',$user_work->job_state)->value('state_name'))
     @php( $country = \App\Country::where('country_id',$user_work->job_country)->value('country_name')) 
             
            <div class="card p-3">
              <h4>Professional Experience</h4>
              @if( $user_work->title != '' || $user_work->company != '' )
              <div class="specification-tabs">
                <h5>{{ $user_work->title}}</h5>
                <div class="meta">
                  <ul>
                    <li>{{ $user_work->company }}</li>
                    <li>{{ $city ? $city : 'City' }},{{ $state ? $state : 'State' }},{{ $country ? $country : 'Country' }}</li>
                    <li>{{ $user_work->start_date }} - {{ ($user_work->end_date) ? $user_work->end_date : 'Current' }}</li>
                  </ul>
                </div>
                
              </div>
              <hr>
              @endif
            </div>
  </div>
  @php( $skill = explode(',',$user_skill->skills))
            <div class="specifications">
                <div class="card p-3">
                  <h4>Key Skills</h4>
                  <div>
                  @foreach( $skill as $sk)
                  <span class="badge badge-primary">{{ $sk }}</span>
                 @endforeach
                  </div>
                </div>
            </div>

            <div class="specifications">
            <div class="card p-3">
              <h4>Achievement</h4>
              <h5>{{ $user_achiev->title }}</h5>
              <p>{{ $user_achiev->content}}</p>
            </div>
          </div>
          
          
         <div class="specifications" >
            <div class="card p-3">
              <h4>Personal Details</h4>
              <table class="table table-striped table-bordered">
                <tr>
                  <td width="30%">Complete Adderss</td>
                  <td>{{ $user_pro->user_address }}</td>
                </tr>
                <tr>
                  <td>Pin Code</td>
                  <td>{{ $user_pro->user_pincode }}</td>
                </tr>
                <tr>
                  <td>Total Experience</td>
                  <td>{{ $user_pro->total_exp }}</td>
                </tr>
                <tr>
                  <td>Age</td>
                  <td>{{ $user_pro->age }}</td>
                </tr>
                <tr>
                  <td>Communication Expertise</td>
                  <td>{{ $user_pro->language }}</td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td>{{ $user_pro->gender }}</td>
                </tr>
                <tr>
                  <td>Marital Status</td>
                  <td>{{ $user_pro->marital_status }}</td>
                </tr>
                <tr>
                  <td>Hobbies</td>
                  <td>{{ $user_pro->interest_hobies }}</td>
                </tr>
              </table>
      
            <p></p>
            
            </div>
            </div>

            <div class="specifications">
            <div class="card p-3">
              <h4>Declaration</h4>
             
              <p style="font-size:18px"><i class="fa fa-check-square-o"></i>&nbsp;&nbsp;I hereby declare that the above information is true to best of my knowledge.</p>
              <div class="row">
                <div class="col-md-6">
                <p style="padding-top: 11px;font-weight:bold">Date:</p>{{ date('d-m-Y') }}
                </div>
                <div class="col-md-6">
                <p style="padding-top: 11px;font-weight:bold;padding-left: 235px;">Place:</p><p style="padding-left: 235px;">{{ $user_pro->current_location }}</p>
                </div>
              </div>
              
            </div>
          </div>
          <h5 style="color: white;font-weight: 600;font-family: ui-monospace;text-align: center;font-size: 22px;">The best way to predict the future is to create it.</h5>

          </div>
      </div>
      <!--Right Ends-->
    </div>
    
   </div>
  
  </div> 
   <form action="{{  url('downloadpdf') }}" method="post">
        @csrf
        <input type="hidden" value="{{ $user_id }}" name="user_id">
     <input type="submit" name="sunmitPDFBtn" id="sunmitPDFBtn" style="display:none">
      </form>

    
</div>

<!-- Jquery core js--> 
<script src="{!! url('assets/resumeDesign/js/jquery.min.js') !!}"></script> 
<script src="{!! url('assets/resumeDesign/vendors/bootstrap/js/bootstrap.min.js') !!}"></script> 

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script>
  function submitPDFform(){
    $('#sunmitPDFBtn').click();
  }

  function WhatsappShare() {
        if (/Android|webOS|iPhone|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            var sUrl = '{{URL::to('myResume')."/"}}';
            var whatsapp_url = "whatsapp://send?text=" + sUrl;
            window.open(whatsapp_url, "_blank");
        }
        else {
            var sUrl = '{{URL::to('myResume')."/"}}';
            var whatsapp_url = "https://web.whatsapp.com/send?text=" + sUrl;
            window.open(whatsapp_url, "_blank");
        }
    }
</script>
</body>
</html>