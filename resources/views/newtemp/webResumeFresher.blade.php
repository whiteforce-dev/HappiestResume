<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<!-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> -->
<title>Happiest Resume</title>
<link rel="shortcut icon" href="https://happiestresume.com/public/front/images/logo1.png" type="image/x-icon">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
html{
  background:linear-gradient(to right, #ffeeee, #ddefbb);
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 100%;
    overflow-x:hidden;
}
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800;900&display=swap');
</style>
</head>

<body style=" font-size:18px; font-family: 'Montserrat', sans-serif;  padding:0; margin:0;    margin-top: 38px;">
<div style="width:900px; background: rgb(255,200,19); height:1272px;
background: linear-gradient(90deg, rgba(255,200,19,1) 0%, rgba(255,200,19,1) 350px, rgba(33,33,33,1) 350px); color:#fff; margin:0 auto;">
<!--Left-bar-->
<div style="width:350px; float:left">
    <!--profile photo-->
    <div style="width:100%; display:block">
    <?php
    $user_login_type = App\UserLogin_Model::where('id',$user_login->login_id)->value('social_login_type');
    if($user_login->image != null){
      if($user_login_type == ''){ ?>
        <img src="../{{ $user_login->image }}" style="width:100%; display:block"/> 
     <?php }
      else{ ?>
        <img src="{{ $user_login->image }}" style="width:100%; display:block"/> 
      <?php }
    }
    else{ ?>
      <img src="{{ url('assets/resumeDesign/images/user.png') }}" style="width:100%; display:block"/> 
  <?php  } ?>
     
    
    </div>
    
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
      
      <div style="padding:40px 0; display:block"></div>
      
      <!--Contact-->
      <div>
        <h1 style="font-size:20px; margin:0; margin-bottom:15px; font-weight:800; text-transform:uppercase">CONTACT</h1>
        <ul style="padding:0; margin:0; line-height:35px; font-size:15px; padding-bottom:15px; list-style:none">
          <li><img style="width:20px; margin-right:5px; position:relative; top:3px" src="{!! asset('public/resume_yellow/assets/imgs/phone-call.png') !!}"/>{{ $user_login->contact }}</li>
          <li><img style="width:20px; margin-right:5px; position:relative; top:3px" src="{!! asset('public/resume_yellow/assets/imgs/email.png') !!}"/>{{ $user_email }}</li>
          <li><img style="width:20px; margin-right:5px; position:relative; top:3px" src="{!! asset('public/resume_yellow/assets/imgs/linkedin-logo.png') !!}"/>{{ $user_country ? $user_country : 'India' }},{{ $user_state ? $user_state : 'State'}}</li>
          <li><img style="width:20px; margin-right:5px; position:relative; top:3px" src="{!! asset('public/resume_yellow/assets/imgs/location-pin.png') !!}"/>{{ $user_pro->user_address ? $user_pro->user_address : 'Address' }},{{ $user_city ? $user_city : 'City' }}</li>
        </ul>
        <ul style="padding:0; margin:0; list-style:none">
          <li style="display:inline-block"><a target="_blank" href="{{ $user_social->linkedin }}"><img style="width:35px; margin-right:5px" src="{!! asset('public/resume_yellow/assets/imgs/linkedin.png') !!}"/></a></li>
          <li style="display:inline-block"><a target="_blank" href="{{ $user_social->twitter }}"><img style="width:35px; margin-right:5px" src="{!! asset('public/resume_yellow/assets/imgs/twitter.png') !!}"/></a></li>
          <li style="display:inline-block"><a target="_blank" href="{{ $user_social->fb }}"><img style="width:35px; margin-right:5px" src="{!! asset('public/resume_yellow/assets/imgs/facebook.png') !!}"/></a></li>
        </ul>
      </div>
      
    </div>
  </div>
<!--Left-bar ends-->  
  
<!--Right content-->
<div style="width:550px; color:#fff; float:left;">
    <div style="padding:30px;padding-top: 43px;" >
    <!--About-->
      <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{!! asset('public/resume_yellow/assets/imgs/about.png') !!}" style="display:inline-block; float:left; width:45px; "/>
        <p style="margin:0; width:265px; padding:0 20px;     line-height: 44px;display:inline-block; ">Career Objective</p>
      </div>
      <p style="font-size:16px; margin:20px 0 50px; line-height:22px">{{ $user_skill->career_obj ? $user_skill->career_obj : 'I want myself to be an employee of a well repudiated firm where I can improvise my skills of professionalism, adaptability and communication. My development should impact the development of the firm. '  }}</p>

     
      
      
      <!--Education-->
      <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{!! asset('public/resume_yellow/assets/imgs/education.png') !!}" style="display:inline-block; float:left; width:45px; "/>
        <p style="margin:0; width:265px; padding:0 20px;     line-height: 44px;display:inline-block; ">Education</p>
      </div>
      <div style="padding:40px 0; ">
      @if(isset($user_edu_X) || isset($user_edu_XII) || isset($user_edu_graduation) || isset($user_edu_post))
      @if(isset($user_edu_post))
      @if($user_edu_post->organization != '' || $user_edu_post->education_name != '' )
      
      <div style="display:flex; margin:0 -15px">
        <div style="width:30%; padding:0 15px"><strong>{{ $user_edu_post->year  }}</strong></div>
        <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700">MASTER'S DEGREE</strong>
        @if(is_numeric($user_edu_post->education_name ))
        @php($education_name = App\Degrees::where('id',$user_edu_post->education_name)->value('degree_name'))
        @else
        @php($education_name = $user_edu_post->education_name )
        @endif
          <p style="font-size:14px; margin:5px 0 30px; line-height:22px">{{ $education_name }},{{ $user_edu_post->organization }},{{ $user_edu_post->location }}</p>
        </div>
      </div>
      
      @endif
      @endif
      @if(isset($user_edu_graduation))
      @if($user_edu_graduation->organization != '' || $user_edu_graduation->education_name != '' )
      <div style="display:flex; margin:0 -15px">
        <div style="width:30%; padding:0 15px"><strong>{{ $user_edu_graduation->year }}</strong></div>
        <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700">BACHELORS'S DEGREE</strong>
        @if(is_numeric($user_edu_graduation->education_name ))
        @php($education_name = App\Degrees::where('id',$user_edu_graduation->education_name)->value('degree_name'))
        @else
        @php($education_name = $user_edu_graduation->education_name )
        @endif
          <p style="font-size:14px; margin:5px 0 30px; line-height:22px">{{ $education_name }},{{ $user_edu_graduation->organization }},{{ $user_edu_graduation->location }}</p>
        </div>
      </div>
      @endif
      @endif
      @if(isset($user_edu_XII))
      @if($user_edu_XII->organization != '' || $user_edu_XII->education_name != '' )
      <div style="display:flex; margin:0 -15px">
        <div style="width:30%; padding:0 15px"><strong>{{ $user_edu_XII->year }}</strong></div>
        <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700S">Higher Secondary</strong>
        @if(is_numeric($user_edu_XII->education_name ))
        @php($education_name = App\Degrees::where('id',$user_edu_XII->education_name)->value('degree_name'))
        @else
        @php($education_name = $user_edu_XII->education_name )
        @endif
          <p style="font-size:14px; margin:5px 0 30px; line-height:22px">{{ $education_name }},{{ $user_edu_XII->organization }},{{ $user_edu_XII->location }}</p>
        </div>
      </div>
    </div>
    @endif
    @endif
    @if(isset($user_edu_X))
    @if($user_edu_X->organization != '' || $user_edu_X->education_name != '' )
    <div style="display:flex; margin:0 -15px">
        <div style="width:30%; padding:0 15px"><strong>{{ $user_edu_X->year }}</strong></div>
        <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700S">High Secondary</strong>
        @if(is_numeric($user_edu_X->education_name ))
        @php($education_name = App\Degrees::where('id',$user_edu_X->education_name)->value('degree_name'))
        @else
        @php($education_name = $user_edu_X->education_name )
        @endif
          <p style="font-size:14px; margin:5px 0 30px; line-height:22px">{{ $education_name }},{{ $user_edu_X->organization }},{{ $user_edu_X->location }}</p>
        </div>
      </div>

    @endif
     @endif
      
     
   
      @else

      <div style="display:flex; margin:0 -15px">
          <div style="width:30%; padding:0 15px"><strong>2010 - 2020</strong></div>
          <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700">MASTER'S DEGREE</strong>
            <p style="font-size:14px; margin:5px 0 20px; line-height:22px">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. </p>
          </div>
        </div>
        <div style="display:flex; margin:0 -15px">
          <div style="width:30%; padding:0 15px"><strong>2010 - 2020</strong></div>
          <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700">Bachelors'S DEGREE</strong>
            <p style="font-size:14px; margin:5px 0 20px; line-height:22px">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. </p>
          </div>
        </div>
        <div style="display:flex; margin:0 -15px">
          <div style="width:30%; padding:0 15px"><strong>2010 - 2020</strong></div>
          <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700S">Higher Secondarry</strong>
            <p style="font-size:14px; margin:5px 0 20px; line-height:22px">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. </p>
          </div>
        </div>
        <div style="display:flex; margin:0 -15px">
          <div style="width:30%; padding:0 15px"><strong>2010 - 2020</strong></div>
          <div style="width:70%; padding:0 15px"><strong style="text-transform:uppercase; font-weight:700S">High Secondarry</strong>
            <p style="font-size:14px; margin:5px 0 20px; line-height:22px">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. </p>
          </div>
        </div>
   
    @endif
    
   
    
  	<br>
           <!--Languages-->
           <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{!! asset('public/resume_yellow/assets/imgs/language.jpg') !!}" style="display:inline-block; float:left; width:45px; "/>
            <p style="margin:0; width:265px; padding:0 20px;line-height:44px;display:inline-block; ">Languages</p>
        </div>
        <div style="padding:40px 0;">
        @if($user_pro->language == '"null"' || $user_pro->language == null || $user_pro->language == 'ul')
        <div style="width:90%; float:left;">
            <p style="margin-top:0; font-weight:800;  text-transform:uppercase; border-bottom:2px #ffc813 solid; width:99%;"><span style="background:#212121; position: relative; top: 6px; margin-bottom:10px; padding-right: 5px;">English</span></p>
            </div>
            <div style="width:10%; float:left; ">
            <p style="position: relative;margin-bottom:10px; margin-top:0; top: 6px;"><strong>B2</strong></p>
            </div>
            
            <div style="clear:both; margin:0; padding:0; width:100%"></div>
            <br>
            <div style="width:90%; float:left;">
            <p style="margin-top:0;font-weight:800;text-transform:uppercase; border-bottom:2px #ffc813 solid; width:99%;"><span style="background:#212121; position: relative; top: 6px; margin-bottom:10px;padding-right: 5px;">Hindi</span></p>
            </div>
            <!-- <div style="width:10%; float:left; ">
            <p style="position: relative; margin-bottom:10px;margin-top:0; top: 6px;"><strong>C1</strong></p>
            </div>
            <div style="clear:both; margin:0; padding:0; width:100%"></div>
            <div style="width:90%; float:left;">
            <p style="margin-top:0;font-weight:800;text-transform:uppercase; border-bottom:2px #ffc813 solid; width:99%;"><span style="background:#212121; position: relative; top: 6px;margin-bottom:10px; padding-right: 5px;">PORTUGUESE</span></p>
            </div> -->
            <div style="width:10%; float:left; ">
            <p style="position: relative;margin-bottom:10px; margin-top:0; top: 6px;"><strong>A2</strong></p>
            </div>
            <div style="clear:both; margin:0; padding:0; width:100%"></div>
        @else
        @php( $language = explode(',',$user_pro->language))
        @foreach($language as $lang)
        @if($lang != '"null"' && $lang != "null")
        @php($a = array("A2", "B1", "C2","B2","C1"))
        @php($random_keys = rand(0, 2))
            <div style="width:90%; float:left;">
            <p style="margin-top:0; font-weight:800;  text-transform:uppercase; border-bottom:2px #ffc813 solid; width:99%;"><span style="background:#212121; position: relative; top: 6px; margin-bottom:10px; padding-right: 5px;">{{ trim($lang,'"') }}</span></p>
            </div>
            <div style="width:10%; float:left; ">
            <p style="position: relative;margin-bottom:10px; margin-top:0; top: 6px;"><strong>{{ $a[$random_keys] }}</strong></p>
            </div>
            <div style="clear:both; margin:0; padding:0; width:100%"></div>
            <br>
            @endif
        @endforeach 
        @endif
      </div>
    </div>
    </div>
  </div>
  
<!--Right content ends-->   
  <div style="clear:both; margin:0; padding:0; width:100%"></div>
 
</div>
<div style="width:900px; height:993px; position:relative; background: rgb(255,200,19);
background: linear-gradient(90deg, rgba(255,200,19,1) 0%, rgba(255,200,19,1) 350px, rgba(33,33,33,1) 350px); color:#fff; margin:15px auto 0; padding-bottom:180px;  ">
<!--Left-bar-->
<div style="width:350px; float:left;margin-top:40px">
    
    
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
          <div style="width:28%; float:left; padding:0 15px">
            <p style="font-size:14px; margin:0">{{ trim($sk, '"') }}</p>
          </div>
          <div style="width:52%; float:left; padding:0 15px">
            <div style="height:8px; position:relative; background:#000; width:100%; top:5px">
              <div style="width:15px; left:{{ $a[$random_keys] }}%; height:15px; background:#ffc813; border:2px solid #000; border-radius:50%;  position:absolute; top:-6px"></div>
            </div>
          </div>
          <div style="clear:both"></div>
        </div>
       @endforeach
       @endif
      </div>
      
       <!--Hobbies-->
       <div style="margin-top:40px">
      
      <h1 style="font-size:20px; margin:0; margin-bottom:15px; font-weight:800; text-transform:uppercase">HOBBIES</h1>
      @if($user_pro->interest_hobies == '"null"' || $user_pro->interest_hobies == null || $user_pro->interest_hobies == 'ul')
      <div style="width:50%; float:left"> <img src="{!! asset('public/resume_yellow/assets/imgs/hobb-1.png') !!}" style="display:block" width="50"/>
        <p style="font-size:14px; text-transform:uppercase; margin-bottom:15px; margin-top:5px">GUITARIST</p>
      </div>
      <div style="width:50%; float:left"> <img src="{!! asset('public/resume_yellow/assets/imgs/hobb-2.png') !!}" style="display:block" width="50"/>
        <p style="font-size:14px; text-transform:uppercase; margin-bottom:15px;margin-top:5px">Music</p>
      </div>
      <div style="clear:both; margin:0; padding:0; width:100%"></div>
      <div style="width:50%; float:left"> <img src="{!! asset('public/resume_yellow/assets/imgs/hobb-3.png') !!}" style="display:block" width="50"/>
        <p style="font-size:14px; text-transform:uppercase; margin-bottom:15px;margin-top:5px">Gaming</p>
      </div>
      <div style="width:50%; float:left"> <img src="{!! asset('public/resume_yellow/assets/imgs/hobb-4.png') !!}" style="display:block" width="50"/>
        <p style="font-size:14px; text-transform:uppercase; margin-bottom:15px;margin-top:5px">Biking</p>
      </div>
      <div style="clear:both; margin:0; padding:0; width:100%"></div>
      @else
      @php( $hobbies = explode(',',$user_pro->interest_hobies))
    @foreach( $hobbies as $hobby)
   
    @if($hobby != '"null"' && $hobby != "null")
  
    @php($hob = trim($hobby,'"'))
      <div style="width:50%; float:left"> 
      @if( $hob == 'sports')
      <img src="{!! asset('public/resume_yellow/assets/imgs/sports.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'music')
      <img src="{!! asset('public/resume_yellow/assets/imgs/music.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'reading')
      <img src="{!! asset('public/resume_yellow/assets/imgs/reading.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'dancing')
      <img src="{!! asset('public/resume_yellow/assets/imgs/dance.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'art')
      <img src="{!! asset('public/resume_yellow/assets/imgs/art.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'internet')
      <img src="{!! asset('public/resume_yellow/assets/imgs/internet.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'technology')
      <img src="{!! asset('public/resume_yellow/assets/imgs/technology.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'travelling')
      <img src="{!! asset('public/resume_yellow/assets/imgs/airplane.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'writing')
      <img src="{!! asset('public/resume_yellow/assets/imgs/writting.png') !!}" style="display:block" width="50"/>
      @elseif( $hob == 'gardening' )
      <img src="{!! asset('public/resume_yellow/assets/imgs/gardening.png') !!}" style="display:block" width="50"/>
      @endif
        <p style="font-size:14px; text-transform:uppercase; margin-bottom:15px; margin-top:5px">{{ trim($hobby,'"') }}</p>
      </div>
      @endif
      @endforeach
      @endif
      <div style="clear:both; margin:0; padding:0; width:100%"></div>
    </div>
  </div>
</div>
<!--Left-bar ends-->  
  
<!--Right content-->

<div style="width:550px; color:#fff; float:left;margin-top:40px">
    <div style="padding:30px" >
    @if($user_skill->project != '"null"' && $user_skill->project != null  && $user_skill->project != 'ul' &&  $user_skill->project != "null")
     <!--Projects-->
     <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{!! asset('public/resume_yellow/assets/imgs/projects.jpg') !!}" style="display:inline-block; float:left; width:45px; "/>
        <p style="margin:0; width:265px; padding:0 20px;     line-height: 44px;display:inline-block; ">Projects</p>
      </div>
      <div style="padding:20px 0; ">
      
      @php( $project = explode(',',$user_skill->project))
        @foreach( $project as $pro)
        @php($proj = trim($pro, '"'))
        <p style="margin-top:5px;"><a href="{{ $proj }}" style="color:#fff; text-decoration:none; ">{{ ucwords(strtolower($proj)) }}</a></p>
        @endforeach
            </div>
      <br>
     @endif
     @if($user_achiev->title != '"null"'  && $user_achiev->title != 'ul'   && $user_achiev->title != null && $user_achiev->title != "null" )

      <!--Achivement -->
      <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{!! asset('public/resume_yellow/assets/imgs/projects.jpg') !!}" style="display:inline-block; float:left; width:45px; "/>
        <p style="margin:0; width:265px; padding:0 20px;     line-height: 44px;display:inline-block; ">Achivements </p>
      </div>
      <div style="padding:20px 0; ">
      
      @php( $achivement = explode(',',$user_achiev->title))
        @foreach( $achivement as $achive)
        @php($achiv = trim($achive, '"'))
        <p style="margin-top:5px;"><a href="{{ $achiv }}" style="color:#fff; text-decoration:none; ">{{ ucwords(strtolower($achiv)) }}</a></p>
        @endforeach
            </div>
       @endif  
    <!--------Personal Details---------------> 
     
    <div style="background:#040809; width:400px; text-transform:uppercase; font-size:23px; font-weight:300"> <img src="{!! asset('public/resume_yellow/assets/imgs/about.png') !!}" style="display:inline-block; float:left; width:45px; "/>
        <p style="margin:0; width:265px; padding:0 20px;     line-height: 44px;display:inline-block; ">Personal Details </p>
      </div>
        <div style="padding:20px 0; ">

          <div style="display:flex; margin:0 -15px">
            <div style="width:30%; padding:0 15px"><strong style="font-size:16px">Current Location</strong></div>
            <div style="width:70%; padding:0 15px"><p style="font-size:16px;margin-top: inherit;">{{ $user_pro->current_location }}</p></div>
          </div>
          <div style="display:flex; margin:0 -15px">
            <div style="width:30%; padding:0 15px"><strong style="font-size:16px">Address</strong></div>
            <div style="width:70%; padding:0 15px"><p style="font-size:16px;margin-top: inherit;">{{ $user_pro->user_address }}</p></div>
          </div>
          <div style="display:flex; margin:0 -15px">
            <div style="width:30%; padding:0 15px"><strong style="font-size:16px">Age</strong></div>
            <div style="width:70%; padding:0 15px"><p style="font-size:16px;margin-top: inherit;">{{ $user_pro->age }}</p></div>
          </div>
          <div style="display:flex; margin:0 -15px">
            <div style="width:30%; padding:0 15px"><strong style="font-size:16px">Gender</strong></div>
            <div style="width:70%; padding:0 15px"><p style="font-size:16px;margin-top: inherit;">{{ $user_pro->gender }}</p></div>
          </div>
          <div style="display:flex; margin:0 -15px">
            <div style="width:30%; padding:0 15px"><strong style="font-size:16px">Marital Status</strong></div>
            <div style="width:70%; padding:0 15px"><p style="font-size:16px;margin-top: inherit;">{{ $user_pro->marital_status }}</p></div>
          </div>
        </div>
 
      <!--Bottom Part-->
        <hr style="opacity:0.2;">
        <p style="font-size:18px; line-height:35px">I Assure you that the above information regarding me is true. And I am qualiﬁed with above all the education. Hoping for your regards.</p>
        
        <div style="padding:10px 0; display:block"></div>
        
    </div>
  </div>
  
<!--Right content ends-->  
  <div style="clear:both; margin:0; padding:0; width:100%"></div>
  
<div style="padding: 20px 0 0; position: absolute; width: 900px; bottom: 0;">  <h1 style="letter-spacing:15px; text-align:center; font-weight:900; font-size:65px; margin-top:0; margin-bottom:20px; padding:0 0 10px 0;  -webkit-text-stroke-width: 0.1px;
            -webkit-text-stroke-color: white; text-shadow:-5px 4px 11px #000; color:#ffc813">THANK YOU</h1>
  <div style="background:#ffc813; border-top:2px solid #000; text-align:center; padding:15px 10px 20px">
          <h3 style="margin:0 0 10px 0; color:#000; font-size:30px; line-height:25px; text-transform:uppercase ">The best way to predict the future is to Create it.</h3>
          <a href="https://www.happiestresume.com/" style="color:#000; font-weight:600; text-decoration:none" 
          target="_blank">www.happiestresume.com</a></div></div>

          
</div>
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


</body>

</html>



