<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<!-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> -->
<title>Happiest Resume</title>
<link rel="shortcut icon" href="https://happiestresume.com/public/front/images/logo1.png" type="image/x-icon">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="{!! url('assets/resumeDesign/css/style3.css') !!}" rel="stylesheet">
<style>



</style>
@if($resume_id == 1)
  <style>
  html{
    background: linear-gradient(to right, #ffeeee, #ddefbb);
  }
  </style>
  @elseif($resume_id == 2)
  <style>
    html{
      background: linear-gradient(to right,#e6f7ee, #faffd1);
  }
    </style>
  @endif
</head>

<body >


<?php echo $resume_template;?>
<style>
.btn{

  display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 10px 28px;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0px;
   
}
</style>
<form action="{{  url('downloadpdf') }}" method="post">
        @csrf
        <input type="hidden" value="{{ $user_id }}" name="user_id">
     <input type="submit" name="sunmitPDFBtn" id="sunmitPDFBtn" style="display:none">
      </form>
      <br>
<div class="container text-center bottom-sec" style="text-align:center">

  
   
   <a href="{{ url('resume/create') }}" class="btn " style="background-color:#35322e;color:#fff;    text-decoration: none;">Back & Edit</a>
   
   <a href="#"  onclick="WhatsappShare()" class="btn " style="background-color:#00c851;color:#fff;    text-decoration: none;">WhatsApp </a>
   <a href="#"  onclick="submitPDFform()" class="btn " style="background-color:#00d0ff;color:#fff;    text-decoration: none;">Download PDF </a>
   <a href="#"  onclick="mailLink()" class="btn " style="background-color:#b51c1c;color:#fff;text-decoration: none;">Mail</a>
   <a href="{{url('web-view/'.$user_code)}}" target="_blank" class="btn " style="background-color:#ff7300;color:#fff;text-decoration: none;">Web View</a>


</div>
<a href="{{ url('build-resume') }}" class="btn btn-bubble btn-sm btn" style="padding: 1em 1em;background-color:#000;color: #fff;position: fixed;bottom: 8px;right: 13px;text-decoration:none">My Dashboard</a>

</div>
</body>

</html>

<script>
function submitPDFform(){
    $('#sunmitPDFBtn').click();
  }

  function WhatsappShare() {
    
        if (/Android|webOS|iPhone|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            var sUrl = '{{URL::to('cv')."/$user_code"}}';
            var whatsapp_url = "whatsapp://send?text=" + sUrl;
            window.open(whatsapp_url, "_blank");
        }
        else {
            
           var sUrl = '{{URL::to('cv')."/$user_code"}}';
          
            var whatsapp_url = "https://web.whatsapp.com/send?text=" + sUrl;
            window.open(whatsapp_url, "_blank");
        }
    }
   
   function mailLink(){
     var subject = 'Resume';
     var body = '{{URL::to('cv')."/$user_code"}}';
     var mail_url = "mailto:" + '' + "?subject=" + subject + "&body=" + body;
     window.open(mail_url,"_blank");
   }
</script>


<script>


</script>