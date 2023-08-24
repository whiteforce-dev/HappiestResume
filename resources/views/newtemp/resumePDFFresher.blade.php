<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Resume</title>
<style style type="text/css" media="all">
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800;900&display=swap');

</style>
</head>
<?php
        $path = './public/resume_yellow/assets/imgs/back-img.jpg';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>

<body style=" font-size:18px; font-family: 'Montserrat', sans-serif;  padding:0; margin:0;">
<div style="width:900px; height:1272px;
background-image:url({{$base}}); background-repeat: repeat-y;  color:#fff; margin-left:-20px; margin-top:-20px  "> 
  <!--Left-bar-->
  <div style="width:350px; float:left"> 
    <!--profile photo-->
    <?php
        $path = $user_login->image ? $user_login->image : 'assets/resumeDesign/images/user.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    <div style="width:100%; display:block"> <img src="{{ $base64 }}" style="width:100%; display:block"/> </div>
    <div style="padding:10px 0; background: rgb(33,33,33);
background: linear-gradient(90deg, rgba(33,33,33,1) 0%, rgba(33,33,33,1) 70%, rgba(4,8,9,1) 70%); display:block"></div>
    <div style=" color:#000; padding:30px"> 
      <!--Name--> 
      @php
      $name = explode(" ",$user_name);
      $user_country = App\Country::where('country_id',$user_pro->user_country)->value('country_name');
      $user_state = App\State::where('state_id',$user_pro->user_state)->value('state_name');
      $user_city = App\City::where('city_id',$user_pro->user_city)->value('city_name');
      $title = App\UserWorkExp::where('user_id',$user_id)->where('work_exp_id',null)->first();
      @endphp
      <div style="line-height:45px">
      <h1 style="font-size:35px; margin:0; font-weight:800; text-transform:uppercase">{{ isset($name[0]) ? $name[0] : '' }}</h1>
        <h1 style="font-size:35px; margin:0; font-weight:800; text-transform:uppercase">{{ isset($name[1]) ? $name[1] : '' }} &nbsp; {{ isset($name[2]) ? $name[2] : ''  }}</h1>
        <p style="font-weight:light; text-transform:uppercase; letter-spacing:2px; margin-top:3px">{{ ($title->title) != '' ? $title->title : 'Fresher' }}</p>
      </div>
      
      <div style=" height:80px; width:100%; display:block"></div>
      
      <!--Contact-->
      <div>
        <h1 style="font-size:20px; margin:0; margin-bottom:15px; font-weight:800; text-transform:uppercase">CONTACT</h1>
        <ul style="padding:0; margin:0; line-height:35px; font-size:15px; padding-bottom:15px; list-style:none">
          <?php
        $path = './public/resume_yellow/assets/imgs/phone-call.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base641 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
          <li><img style="width:20px; margin-right:5px; position:relative; top:3px" src="{{ $base641 }}"/>{{ $user_login->contact }}</li>
          <?php
        $path = './public/resume_yellow/assets/imgs/email.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base642 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
          <li><img style="width:20px; margin-right:5px; position:relative; top:3px" src="{{ $base642 }}"/>{{ $user_email }}</li>
          <?php
        $path = './public/resume_yellow/assets/imgs/linkedin-logo.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base643 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
          <li><img style="width:20px; margin-right:5px; position:relative; top:3px" src="{{ $base643 }}"/>{{ $user_country ? $user_country : 'India' }},{{ $user_state ? $user_state : 'State'}}</li>
          <?php
        $path = './public/resume_yellow/assets/imgs/location-pin.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base644 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
          <li><img style="width:20px; margin-right:5px; position:relative; top:3px" src="{{ $base644 }}"/>{{ $user_pro->user_address ? $user_pro->user_address : 'Address' }},{{ $user_city ? $user_city : 'City' }}</li>
        </ul>
        <ul style="padding:0; margin:0; list-style:none">
          <?php
        $path = './public/resume_yellow/assets/imgs/linkedin.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base645 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
          <li style="display:inline-block"><a target="_blank" href="{{ $user_social->linkedin }}"><img style="width:35px; margin-right:5px" src="{{ $base645 }}"/></a></li>
          <?php
        $path = './public/resume_yellow/assets/imgs/twitter.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base646 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
          <li style="display:inline-block"><a target="_blank" href="{{ $user_social->twitter }}"><img style="width:35px; margin-right:5px" src="{{ $base646 }}"/></a></li>
          <?php
        $path = './public/resume_yellow/assets/imgs/facebook.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base647 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
          <li style="display:inline-block"><a target="_blank" href="{{ $user_social->fb }}"><img style="width:35px; margin-right:5px" src="{{ $base647 }}"/></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--Left-bar ends--> 
  
  <!--Right content-->
  <div style="width:550px; color:#fff; float:left;">
    <div style="padding:30px" > 
      <!--About-->
      <?php
        $path = './public/resume_yellow/assets/imgs/about.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base648 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
      <div style="width:400px; text-transform:uppercase; font-size:23px; font-weight:300">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" style="background:#040809;">
      <tr>
      <td><img src="{{   $base648 }}" style="display:inline-block; width:45px; "/></td>
      <td><p style="margin:0; width:265px; text-align:center;  line-height: 44px; ">Career Objective</p></td>
      </tr>
      
      </table>
      </div>
      <p style="font-size:14px; margin:20px 0 50px; line-height:22px">{{ $user_skill->career_obj ? $user_skill->career_obj : 'I want myself to be an employee of a well repudiated firm where I can improvise my skills of professionalism, adaptability and communication. My development should impact the development of the firm.'  }}</p>
      
      
      
      <!--Education-->
      <?php
        $path = './public/resume_yellow/assets/imgs/education.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base651 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
      <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{{ $base651 }}" style="display:inline-block; float:left; width:45px; "/>
        <p style="margin:0; width:265px; text-align:center;  line-height: 44px;">Education</p>
      </div>
      <div style="padding:20px 0 30px;">
      
      @if(isset($user_edu_X) || isset($user_edu_XII) || isset($user_edu_graduation) || isset($user_edu_post))
      @if(isset($user_edu_post))
      @if($user_edu_post->organization != '' || $user_edu_post->education_name != '' )
      
      <div style="display:flex; margin:0 -15px">
        <div style="width:30%; padding:0 15px"><strong>{{ $user_edu_post->year }}</strong></div>
        <div style="width:70%; padding:0 200px"><strong style="text-transform:uppercase; font-weight:700">MASTER'S DEGREE</strong>
          <p style="font-size:14px; margin:5px 0 30px; line-height:22px">{{ $user_edu_post->education_name }},{{ $user_edu_post->organization }},{{ $user_edu_post->location }}</p>
        </div>
      </div>
      @endif
      @endif
      @if(isset($user_edu_graduation))
      @if($user_edu_graduation->organization != '' || $user_edu_graduation->education_name != '' )
      <div style="display:flex; margin:0 -15px">
        <div style="width:30%; padding:0 15px"><strong>{{ $user_edu_graduation->year }}</strong></div>
        <div style="width:70%; padding:0 200px"><strong style="text-transform:uppercase; font-weight:700">BACHELORS'S DEGREE</strong>
          <p style="font-size:14px; margin:5px 0 30px; line-height:22px">{{ $user_edu_graduation->education_name }},{{ $user_edu_graduation->organization }},{{ $user_edu_graduation->location }}</p>
        </div>
      </div>
      @endif
      @endif
      @if(isset($user_edu_XII))
      @if($user_edu_XII->organization != '' || $user_edu_XII->education_name != '' )
      <div style="display:flex; margin:0 -15px">
        <div style="width:30%; padding:0 15px"><strong>{{ $user_edu_XII->year }}</strong></div>
        <div style="width:70%; padding:0 200px"><strong style="text-transform:uppercase; font-weight:700S">Higher Secondary</strong>
          <p style="font-size:14px; margin:5px 0 30px; line-height:22px">{{ $user_edu_XII->education_name }},{{ $user_edu_XII->organization }},{{ $user_edu_XII->location }}</p>
        </div>
      </div>
   @endif
    @endif
    @if($user_edu_X)
    @if($user_edu_X->organization != '' || $user_edu_X->education_name != '' )
    <div style="display:flex; margin:0 -15px">
      <div style="width:30%; padding:0 15px"><strong>{{ $user_edu_X->year }}</strong></div>
      <div style="width:70%; padding:0 200px"><strong style="text-transform:uppercase; font-weight:700S">High Secondary</strong>
        <p style="font-size:14px; margin:5px 0 30px; line-height:22px">{{ $user_edu_X->education_name }},{{ $user_edu_X->organization }},{{ $user_edu_X->location }}</p>
      </div>
    </div>
  @endif
  @endif 
        
   
      @else
   
    <div style="display:flex; margin:0 -15px">
          <div style="width:30%; padding:0 15px"><strong>2010 - 2020</strong></div>
          <div style="width:70%; padding:0 200px"><strong style="text-transform:uppercase; font-weight:700">MASTER'S DEGREE</strong>
            <p style="font-size:14px; margin:5px 0 30px; line-height:22px">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. </p>
          </div>
        </div>
        <div style="display:flex; margin:0 -15px">
          <div style="width:30%; padding:0 15px"><strong>2010 - 2020</strong></div>
          <div style="width:70%; padding:0 200px"><strong style="text-transform:uppercase; font-weight:700">Bachelors'S DEGREE</strong>
            <p style="font-size:14px; margin:5px 0 30px; line-height:22px">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. </p>
          </div>
        </div>
        <div style="display:flex; margin:0 -15px">
          <div style="width:30%; padding:0 15px"><strong>2010 - 2020</strong></div>
          <div style="width:70%; padding:0 200px"><strong style="text-transform:uppercase; font-weight:700S">Higher Secondarry</strong>
            <p style="font-size:14px; margin:5px 0 30px; line-height:22px">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. </p>
          </div>
        </div>
        <div style="display:flex; margin:0 -15px">
          <div style="width:30%; padding:0 15px"><strong>2010 - 2020</strong></div>
          <div style="width:70%; padding:0 200px"><strong style="text-transform:uppercase; font-weight:700S">High Secondarry</strong>
            <p style="font-size:14px; margin:5px 0 30px; line-height:22px">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. </p>
          </div>
        </div>
    @endif
    <?php
        $path = './public/resume_yellow/assets/imgs/language.jpg';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base655 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
      <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{{ $base655  }}" style="display:inline-block; float:left; width:45px; "/>
        <p style="margin:0; width:265px; text-align:center;  line-height: 44px;">Languages</p>
      </div>
      <div style="padding:20px 0;"><table width="100%" border="0">@php( $language = explode(',',$user_pro->language))
        @foreach($language as $lang)
        @if($lang != '"null"' && $lang != "null")
        @php($a = array("A2", "B1", "C2","B2","C1"))
        @php($random_keys = rand(0, 2))
        
  <tr>
    <td style="width:85%;"><p style="margin-top:0; font-weight:800;  text-transform:uppercase; border-bottom:2px #ffc813 solid; width:99%;"><span style="background:#212121; position: relative; top: 6px; margin-bottom:10px; padding-right: 5px;">{{ trim($lang,'"') }}</span></p></td>
    <td style="width:10%;"><p style="position: relative;margin-bottom:10px; margin-top:0; top: 6px;"><strong>{{ $a[$random_keys] }}</strong></p></td>
  </tr>
        @endif
        @endforeach</table>
        </div>
    
    </div>
    </div>
</div>
</div>
<!--Right content ends-->
<div style="clear:both; margin:0; padding:0; width:100%"></div>
</div>
<div style="width:900px; height:1272px; position:relative; background: rgb(255,200,19);
background-image:url({{$base}}); color:#fff; margin:15px auto 0; padding-bottom:180px;  "> 
  <!--Left-bar-->
  <div style="width:350px; float:left">
    <div style=" color:#000; padding:30px"> 
      
      <!--Skills-->
      <div>
        <h1 style="font-size:20px; margin:0; margin-bottom:15px; font-weight:800; text-transform:uppercase">SKILLS</h1>
        @if($user_skill->skills == '"null"')
       
       <div style="margin:0 -15px 10px">
          <div style="width:28%; float:left; padding:0 15px">
            <p style="font-size:14px; margin:0">SEO / SEM</p>
          </div>
          <div style="width:52%; float:left; padding:0 15px">
            <div style="height:8px; position:relative; background:#000; width:100%; top:5px">
              <div style="width:15px; left:65%; height:15px; background:#ffc813; border:2px solid #000; border-radius:50%;  position:absolute; top:-6px"></div>
            </div>
          </div>
          <div style="clear:both"></div>
        </div>
        <div style="margin:0 -15px 10px">
          <div style="width:28%; float:left; padding:0 15px">
            <p style="font-size:14px; margin:0">MARKETING</p>
          </div>
          <div style="width:52%; float:left; padding:0 15px">
            <div style="height:8px; position:relative; background:#000; width:100%; top:5px">
              <div style="width:15px; left:80%; height:15px; background:#ffc813; border:2px solid #000; border-radius:50%;  position:absolute; top:-6px"></div>
            </div>
          </div>
          <div style="clear:both"></div>
        </div>
        <div style="margin:0 -15px 10px">
          <div style="width:28%; float:left; padding:0 15px">
            <p style="font-size:14px; margin:0">ACCOUNTING</p>
          </div>
          <div style="width:52%; float:left; padding:0 15px">
            <div style="height:8px; position:relative; background:#000; width:100%; top:5px">
              <div style="width:15px; left:75%; height:15px; background:#ffc813; border:2px solid #000; border-radius:50%;  position:absolute; top:-5px"></div>
            </div>
          </div>
          <div style="clear:both"></div>
        </div>
        <div style="margin:0 -15px 10px">
          <div style="width:28%; float:left; padding:0 15px">
            <p style="font-size:14px; margin:0">PLANNING</p>
          </div>
          <div style="width:52%; float:left; padding:0 15px">
            <div style="height:8px; position:relative; background:#000; width:100%; top:5px">
              <div style="width:15px; left:70%; height:15px; background:#ffc813; border:2px solid #000; border-radius:50%;  position:absolute; top:-6px"></div>
            </div>
          </div>
          <div style="clear:both"></div>
        </div>
       @else
        @php( $skill = explode(',',$user_skill->skills))
        @foreach( $skill as $sk)
        @php($a = array("50", "60", "70"))
        @php($random_keys = rand(0, 2))
        <div style="margin:0 -15px 10px">
          <div style="width:28%; float:left; ">
            <p style="font-size:14px; margin:0;">{{ trim($sk, '"') }}</p>
          </div>
          <div style="width:52%; float:left; padding:0 150px">
            <div style="height:8px; position:relative; background:#000; width:100%; top:5px">
              <div style="width:15px; left:{{ $a[$random_keys] }}%; height:15px; background:#ffc813; border:2px solid #000; border-radius:50%;  position:absolute; top:-6px"></div>
            </div>
          </div><br>
          <div style="clear:both"></div>
        </div>
        @endforeach 
        @endif
        </div>
      
      <!--Hobbies-->
      <div style="margin-top:40px">
      
        <h1 style="font-size:20px; margin:0; margin-bottom:15px; font-weight:800; text-transform:uppercase">HOBBIES</h1>
        @if($user_pro->interest_hobies == '"null"' || $user_pro->interest_hobies == null || $user_pro->interest_hobies == 'ul')
        <?php
        $path = './public/resume_yellow/assets/imgs/hobb-1.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $baseHob1 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
        <div style="width:50%; margin-top:15px; margin-bottom:15px; display:inline-block"> <img src="{{ $baseHob1 }}" style="display:block"  width="50"/>
          <p style="font-size:14px; text-transform:uppercase; margin-bottom:15px; margin-top:5px">GUITARIST</p>
        </div>
        <?php
        $path = './public/resume_yellow/assets/imgs/hobb-2.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $basehob2 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
        <div style="width:50%; margin-top:15px; margin-bottom:15px; display:inline-block"> <img src="{{ $basehob2 }}" style="display:block" width="50"/>
          <p style="font-size:14px; text-transform:uppercase; margin-bottom:15px;margin-top:5px">Music</p>
        </div>
        <div style="clear:both; margin:0; padding:0; width:100%"></div>
        <?php
        $path = './public/resume_yellow/assets/imgs/hobb-3.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $baseHob3 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
        <div style="width:50%; margin-top:15px; margin-bottom:15px; display:inline-block"> <img src="{{ $baseHob3 }}" style="display:block" width="50"/>
          <p style="font-size:14px; text-transform:uppercase; margin-bottom:15px;margin-top:5px">Gaming</p>
        </div>
        <?php
        $path = './public/resume_yellow/assets/imgs/hobb-4.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $baseHob4 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
        <div style="width:50%; margin-top:15px; margin-bottom:15px; display:inline-block"><img src="{{ $baseHob4 }}" style="display:block" width="50"/>
          <p style="font-size:14px; text-transform:uppercase; margin-bottom:15px;margin-top:5px">Biking</p>
        </div>
        <div style="clear:both; margin:0; padding:0; width:100%"></div>
        @else
        @php( $hobbies = explode(',',$user_pro->interest_hobies))
        @php($img_path = './public/resume_yellow/assets/imgs/sports.png' )
     
      
<table width="100%" border="0">
  <tr>
  @php($count = 1)
  @foreach( $hobbies as $hobby)
  @if($hobby != '"null"' && $hobby != "null")
      @php($hob = trim($hobby,'"'))
    <td style="width:50%; display:inline-block;">
        @if( $hob == 'sports')
        @php($img_path = './public/resume_yellow/assets/imgs/sports.png')
        @elseif( $hob == 'music')
        @php($img_path = './public/resume_yellow/assets/imgs/music.png')
        @elseif( $hob == 'reading')
        @php($img_path = './public/resume_yellow/assets/imgs/reading.png')
        @elseif( $hob == 'dancing')
        @php($img_path = './public/resume_yellow/assets/imgs/dance.png')
        @elseif( $hob == 'art')
        @php($img_path = './public/resume_yellow/assets/imgs/art.png')
        @elseif( $hob == 'internet')
        @php($img_path = './public/resume_yellow/assets/imgs/internet.png')
        @elseif( $hob == 'technology')
        @php($img_path = './public/resume_yellow/assets/imgs/technology.png')
        @elseif( $hob == 'travelling')
        @php($img_path = './public/resume_yellow/assets/imgs/airplane.png')
        @elseif( $hob == 'writing')
        @php($img_path = './public/resume_yellow/assets/imgs/writting.png')
        @elseif( $hob == 'gardening' )
        @php($img_path = './public/resume_yellow/assets/imgs/gardening.png')
        @endif

        <?php
        $path = $img_path;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base652 = 'data:image/' . $type . ';base64,' . base64_encode($data);
       ?>
        <img src="{{ $base652 }}" style="display:block" width="50"/>
          <p style="font-size:14px; text-transform:uppercase; margin-bottom:15px; margin-top:5px">{{ $hob }}</p>
        
      </td>
      @if($count%2==0)
      <div style="clear:both; margin:0; padding:0; width:100%"></div>
     @endif
        
      
      <?php $count++?>
      @endif
        @endforeach
  </tr>
</table>
      
       
        @endif
        <!--<div style="clear:both; margin:0; padding:0; width:100%"></div>-->
      </div>
    </div>
  </div>
<!--Left-bar ends-->  
  
 <!--Right content-->
 <div style="width:550px; color:#fff; float:left;">
    <div style="padding:30px" >
      <?php
        $path = './public/resume_yellow/assets/imgs/projects.jpg';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base653 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
    @if($user_skill->project != '"null"' && $user_skill->project != null  && $user_skill->project != 'ul' &&  $user_skill->project != "null" && $user_skill->project != "ul")
      <!--Projects-->
      <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{{ $base653 }}" style="display:inline-block; float:left; width:45px; "/>
        <p style="margin:0; width:265px; text-align:center;  line-height: 44px;">Projects</p>
      </div>
      <div style="padding:20px 0; "> @php( $project = explode(',',$user_skill->project))
        @foreach( $project as $pro)
        @php($proj = trim($pro, '"'))
        <p style="margin-top:5px;"><a href="{{ $proj }}" style="color:#fff; text-decoration:none; ">{{ ucwords(strtolower($proj)) }}</a></p>
        @endforeach </div>
    @endif
    @if($user_achiev->title != '"null"'  && $user_achiev->title != 'ul'   && $user_achiev->title != null && $user_achiev->title != "null" && $user_achiev->title != "ul")
      <!--Achivement -->
      
      <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{{ $base653 }}" style="display:inline-block; float:left; width:45px; "/>
        <p style="margin:0; width:265px; text-align:center;  line-height: 44px;">Achivement </p>
      </div>
      <div style="padding:20px 0; "> @php( $achivement = explode(',',$user_achiev->title))
        @foreach( $achivement as $achive)
        @php($achiv = trim($achive, '"'))
        <p style="margin-top:5px;"><a href="{{ $achiv }}" style="color:#fff; text-decoration:none; ">{{ ucwords(strtolower($achiv)) }}</a></p>
        @endforeach </div>
      @endif 
      
      <!--------Personal Details---------------> 
      <?php
        $path = './public/resume_yellow/assets/imgs/about.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $basePer = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
      <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{{ $basePer }}" style="display:inline-block; float:left; width:45px; "/>
        <p style="margin:0px; padding-left:15px; width:265px; text-align:right;  line-height: 44px;">Personal Details</p>
      </div>
        <div style="padding:20px 0; ">

          <div style="display:flex; margin:0 -15px">
            <div style="width:30%; padding:0 15px"><strong style="font-size:16px">Current Location</strong></div>
            <div style="width:70%; padding:0 200px"><p style="font-size:16px;margin-top: inherit;">{{ $user_pro->current_location }}</p></div>
          </div>
          <div style="display:flex; margin:0 -15px">
            <div style="width:30%; padding:0 15px"><strong style="font-size:16px">Address</strong></div>
            <div style="width:70%; padding:0 200px"><p style="font-size:16px;margin-top: inherit;">{{ $user_pro->user_address }}</p></div>
          </div>
          <div style="display:flex; margin:0 -15px">
            <div style="width:30%; padding:0 15px"><strong style="font-size:16px">Age</strong></div>
            <div style="width:70%; padding:0 200px"><p style="font-size:16px;margin-top: inherit;">{{ $user_pro->age }}</p></div>
          </div>
          <div style="display:flex; margin:0 -15px">
            <div style="width:30%; padding:0 15px"><strong style="font-size:16px">Gender</strong></div>
            <div style="width:70%; padding:0 200px"><p style="font-size:16px;margin-top: inherit;">{{ $user_pro->gender }}</p></div>
          </div>
          <div style="display:flex; margin:0 -15px">
            <div style="width:30%; padding:0 15px"><strong style="font-size:16px">Marital Status</strong></div>
            <div style="width:70%; padding:0 200px"><p style="font-size:16px;margin-top: inherit;">{{ $user_pro->marital_status }}</p></div>
          </div>
        </div>
     
      
      <!--Bottom Part-->
      <hr style="opacity:0.2;">
      <p style="font-size:18px; line-height:35px">I Assure you that the above information regarding me is true. And I am qualiﬁed with above all the education. Hoping for your regards.</p>
      <div style="padding:10px 0; display:block"></div>
    </div>
  </div>
  <?php
        $path = './public/resume_yellow/assets/imgs/thanks.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base660 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    ?>
  <!--Right content ends-->
  <div style="clear:both; margin:0; padding:0; width:100%"></div>
  <div style="padding: 20px 0 0; position: fixed; width: 900px; bottom:150px;">
    <h1 style="letter-spacing:10px; text-align:center; font-weight:900; font-size:65px; margin-top:0; margin-bottom:20px; padding:0 0 10px 0;  -webkit-text-stroke-width: 2px;
            -webkit-text-stroke-color: white; text-shadow:-5px 4px 11px #000; color:#ffc813"><img src="{{ $base660  }}"  width="500"/></h1>
    <div style="background:#ffc813; border-top:2px solid #000; text-align:center; padding:15px 10px 20px">
      <h3 style="margin:0 0 10px 0; color:#000; line-height:25px; text-transform:uppercase ">The best way to predict the future is to Create it.</h3>
      <a href="https://www.happiestresume.com/" style="color:#000; font-weight:600; text-decoration:none" 
          target="_blank">www.happiestresume.com</a></div>
  </div>
</div>
</body>
</html>