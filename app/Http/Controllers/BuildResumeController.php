<?php

namespace App\Http\Controllers;

use App\Models\AppliedJob;
use App\Models\Degrees;
use App\Models\RegistrationModel;
use App\Models\ResumeCodeModel;
use App\Models\ResumeTemplate;
use App\Models\UserAchievementModel;
use App\Models\UserEducation;
use App\Models\UserLogin_Model;
use App\Models\UserProfile;
use App\Models\UserSkill;
use App\Models\UserSocial;
use App\Models\UserWorkExp;
use Illuminate\Http\Request;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Auth;

class BuildResumeController extends Controller
{
  public function signout()
  {
    Auth::logout();
    return redirect('/');
  }
  public function buildResume(Request $request)
  {
    
    if (session()->has('user')) {
      $user_id = session('user')->id;
     
      $viewResumeCount = RegistrationModel::find($user_id)->total_view_count;
      $profile_view_count = RegistrationModel::find($user_id)->profile_view_count;
      $applied_jobs = AppliedJob::where('user_id', $user_id)->count();
      $user_pro = UserProfile::where('user_id', $user_id)->first();
      
      $user_login = RegistrationModel::find($user_id);
      
      if ($user_login->is_fresher == 0 || $user_IsWork->company != '' && $user_IsWork->designation != '') {
        $fresher = 0;
      } else {
        $fresher = 1;
      }

      $user_login_type = UserLogin_Model::where('id', $user_login->login_id)->value('social_login_type');
      $user_name = $user_login->name;
      $user_image = $user_login->image;

     
      $sels = $user_login->profile_complete_percent;

      if ($sels == '100') {
        $sweet_message = '<b style="font-size:17px;font-family: cursive;">Congratulations!! Your profile is <span style="color:#12e442;font-size: 20px;">' . $sels . '%</span> complete! You can now apply for 1000+ jobs through our "Hot Jobs" section.<br><br><p style="font-size:15px;color: brown">You can edit your profile from here. You can also mail it or send it to your whatsapp contacts. You can also download it in PDF Form from Happiest..</p></b>';
        $sweet_image =  "https://happiestresume.com/public/front/images/congratulations.gif";
      } else {
        $sweet_message = '<h3 style="font-weight: 800;font-family: cursive;color: #0a0a0a;">Keep Going...</h3><b style="font-size:17px;font-family: cursive">Your resume is <span style="color:#e60b0b;font-size: 20px;">' . $sels . '%</span> completed!! Please make it <span style="color:#12e442;font-size: 20px;">100%</span> to get access to 1000+ job openings & get  your dream job.</b>';
        $sweet_image = "https://happiestresume.com/public/front/images/keepGoing.gif";
      }
      return view('newtemp/buildResume')->with(compact( 'user_name', 'user_image', 'user_pro',  'user_login',  'user_id',  'user_login_type', 'sweet_message', 'sweet_image',  'viewResumeCount', 'applied_jobs', 'profile_view_count'));
    } else {
      return view('error.404');
    }
  }
    public function userDashboard()
  {
    if (session()->has('user')) {
      $user_image = session('user')->image;
      $user_id = session('user')->id;
      $user_code_id = session('user')->resumeCode_id;
      $user_code = ResumeCodeModel::where('id', $user_code_id)->value('user_code');

      $registration = RegistrationModel::find($user_id);
      $resume_template = ResumeTemplate::where('id', $registration->resume_id)->value('template');
      $resume_id = $registration->resume_id;
      /////////////////////////////////////////Registration/////////////////////////////////////////////
      $user_login = RegistrationModel::find($user_id);
      $user_name = $registration->name;
      $name = explode(" ", $user_name);
      $first_name = isset($name[0]) ? $name[0] : '';
      $last_name1 = isset($name[1]) ? $name[1] : '';
      $last_name2 = isset($name[2]) ? $name[2] : '';
      $last_name = $last_name1 . " " . $last_name2;
      $resume_template = str_replace('[FIRSTNAME]', $first_name, $resume_template);
      $resume_template = str_replace('[LASTNAME]', $last_name, $resume_template);
      $user_login_type = UserLogin_Model::where('id', $registration->login_id)->value('social_login_type');

      //////////////////////////////////////////////////Profile/////////////////////////////////////////////////
      $user_pro = UserProfile::where('user_id', $user_id)->first();
      $resume_template = str_replace('[CURJOBTITLE]', isset($user_pro->current_title) ? $user_pro->current_title : '', $resume_template);
      $resume_template = str_replace('[CONTACT]', $registration->contact, $resume_template);
      $resume_template = str_replace('[EMAIL]', $registration->email, $resume_template);
      $resume_template = str_replace('[STATE]', isset($user_pro->user_state) ? $user_pro->user_state : "State", $resume_template);
      $resume_template = str_replace('[COUNTRY]', isset($user_pro->user_country) ? $user_pro->user_country : "Country", $resume_template);
      $resume_template = str_replace('[ADDRESS]', isset($user_pro->user_address) ? $user_pro->user_address : "Address", $resume_template);
      $resume_template = str_replace('[CITY]', isset($user_pro->user_city) ? $user_pro->user_city : "City", $resume_template);
      $resume_template = str_replace('[CURRENTLOCATION]', isset($user_pro->current_location) ? $user_pro->current_location : "Current Location", $resume_template);
      $resume_template = str_replace('[CURRENTCTC]', isset($user_pro->current_ctc) ? $user_pro->current_ctc : "Current CTC", $resume_template);
      $resume_template = str_replace('[TOTALEXPERIENCE]', isset($user_pro->total_exp) ? $user_pro->total_exp : "Total Experience", $resume_template);
      $resume_template = str_replace('[NOTICEPERIOD]', isset($user_pro->notice_period) ? $user_pro->notice_period : "Notice Period", $resume_template);
      $resume_template = str_replace('[RELOCATE]', isset($user_pro->willing_to_relocate) ? $user_pro->willing_to_relocate : "Relocate", $resume_template);
      $resume_template = str_replace('[AGE]', isset($user_pro->age) ? $user_pro->age : "", $resume_template);
      $resume_template = str_replace('[GENDER]', isset($user_pro->gender) ? $user_pro->gender : "", $resume_template);
      $resume_template = str_replace('[MARRITALSTATUS]', isset($user_pro->marital_status) ? $user_pro->marital_status : "", $resume_template);
      $resume_template = str_replace('[COMMUNICATION]', isset($user_pro->communication_expertise) ? $user_pro->communication_expertise : "", $resume_template);

      if ($registration->image != "") {
        $imageType = explode("/", $registration->image);

        if ($imageType[0] == "public") {
          $image = "../" . $registration->image;
        } else {
          $image = $registration->image;
        }
      } else {
        if ($user_pro->gender) {
          if ($user_pro->gender == "male") {
            $image = "https://happiestresume.com/assets/resumeDesign/images/default_male.png";
          } elseif ($user_pro->gender == "female") {
            $image = "https://happiestresume.com/assets/resumeDesign/images/default_female.jpg";
          } else {
            $image = "https://happiestresume.com/assets/resumeDesign/images/user.png";
          }
        } else {
          $image = "https://happiestresume.com/assets/resumeDesign/images/user.png";
        }
      }

      $resume_template = str_replace('[USERIMAGE]', $image, $resume_template);


      if (isset($user_pro->language)) {
        $language = explode(',', $user_pro->language);
        $lang_count = count($language);
        $i = 1;
        foreach ($language as $lang) {
          $lng = trim($lang, '"');
          $resume_template = str_replace('[LANG' . $i . ']', ($lng != '') ? $lng : "", $resume_template);
          $i++;
        }
        $i = $i++;
        for ($a = $i; $a <= 15; $a++) {
          $resume_template = str_replace('[LANGSTYLE' . $a . ']', 'none', $resume_template);
        }
      }
      if (isset($user_pro->interest_hobies)) {


        $hobbies = explode(',', $user_pro->interest_hobies);
        $hobb_count = count($hobbies);
        $i = 1;

        if ($resume_id == 1) {
          $url = "https://happiestresume.com/public/resume_yellow/assets/imgs";
        } else {
          $url = "https://happiestresume.com/public/resume_emarald";
        }
        foreach ($hobbies as $hobby) {
          $hob = trim($hobby, '"');
          $resume_template = str_replace('[HOBB' . $i . ']', ($hob != '') ? $hob : "", $resume_template);
          if ($hob == 'sports') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/sports.png", $resume_template);
          } elseif ($hob == 'music') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/music.png", $resume_template);
          } elseif ($hob == 'reading') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/reading.png", $resume_template);
          } elseif ($hob == 'dancing') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/dance.png", $resume_template);
          } elseif ($hob == 'art') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/art.png", $resume_template);
          } elseif ($hob == 'internet') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/internet.png", $resume_template);
          } elseif ($hob == 'technology') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/technology.png", $resume_template);
          } elseif ($hob == 'travelling') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/airplane.png", $resume_template);
          } elseif ($hob == 'writing') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/writting.png", $resume_template);
          } elseif ($hob == 'gardening') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/gardening.png", $resume_template);
          }
          $i++;
        }
        $i = $i++;
        for ($a = $i; $a <= 10; $a++) {
          $resume_template = str_replace('[HOBBSTYLE' . $a . ']', 'none', $resume_template);
        }
      }
      ///////////////////////////////////////////Education/////////////////////////////////////////////////
      $user_educations = UserEducation::where('user_id', $user_id)->get();
      $user_edu_count = UserEducation::where('user_id', $user_id)->count();
      $i = 1;

      foreach ($user_educations as $user_edu) {
        if (isset($user_edu) &&  $user_edu->education_name != "") {
          $resume_template = str_replace('[EDUCATIONSTYLE' . $i . ']', 'flex', $resume_template);
        } else {
          $resume_template = str_replace('[EDUCATIONSTYLE' . $i . ']', 'none', $resume_template);
        }
        if ($user_edu->type == "Below10th" || $user_edu->type == "below 10th") {
          $education_degree = "Below Matriculation";
        } elseif ($user_edu->type == "Other" || $user_edu->type == "Other") {
          $education_degree = "DIPLOMA";
        } elseif ($user_edu->type == "Х’th" || $user_edu->type == "10th") {
          $education_degree = "HIGH SECONDARY";
        } elseif ($user_edu->type == "ХII’th" || $user_edu->type == "12th") {
          $education_degree = "HIGHER SECONDARY";
        } elseif ($user_edu->type == "graduation" || $user_edu->type == "graduate") {
          $education_degree = "BACHELOR DEGREE";
        } elseif ($user_edu->type == "post graduation" || $user_edu->type == "post graduate") {
          $education_degree = "MASTER DEGREE";
        } elseif ($user_edu->type == "professional qualification") {
          $education_degree = "PROFESSIONAL DEGREE";
        } elseif ($user_edu->type == "diploma") {
          $education_degree = "DIPLOMA";
        }
        $resume_template = str_replace('[EDUCATIONDEGREE' . $i . ']', isset($education_degree) && ($education_degree != "") ? $education_degree : "EDUCATION TYPE", $resume_template);
        $resume_template = str_replace('[EDUCATIONYEAR' . $i . ']', isset($user_edu->year) && ($user_edu->year != "") ? $user_edu->year : "2010", $resume_template);

        $resume_template = str_replace('[EDUCATIONORGAN' . $i . '],', isset($user_edu->organization) && ($user_edu->organization != "") ? $user_edu->organization : "", $resume_template);
        $resume_template = str_replace('[EDUCATIONLOCATION' . $i . ']', isset($user_edu->location) && ($user_edu->location != "") ? $user_edu->location : "", $resume_template);

        if (isset($user_edu->education_name)) {
          if ($user_edu->education_name != "" && is_numeric($user_edu->education_name)) {
            $education_name = Degrees::where('id', $user_edu->education_name)->value('degree_name');
          } else {
            $education_name = $user_edu->education_name;
          }
        }
        $resume_template = str_replace('[EDUCATIONNAME' . $i . ']', isset($user_edu->education_name) && ($user_edu->education_name != "") ? $education_name : "Education Name", $resume_template);
        $i++;
      }
      $i = $i++;
      for ($a = $i; $a <= 10; $a++) {
        $resume_template = str_replace('[EDUCATIONSTYLE' . $a . ']', 'none', $resume_template);
      }

      /////////////////////////////////////////////Skills/////////////////////////////////////////////////////
      $user_skill = UserSkill::where('user_id', $user_id)->first();
      if (!empty($user_skill)) {
        $skills = explode(',', $user_skill->skills);
        $skill_count = count($skills);
        $i = 1;
        foreach ($skills as $sk) {
          $skl = trim($sk, '"');
          $resume_template = str_replace('[SKILLS' . $i . ']', ($skl != '') ? $skl : "", $resume_template);
          $i++;
        }
        $i = $i++;
        for ($a = $i; $a <= 25; $a++) {
          $resume_template = str_replace('[SKILLSTYLE' . $a . ']', 'none', $resume_template);
        }
      } else {
        for ($a = 1; $a <= 25; $a++) {
          $resume_template = str_replace('[SKILLSTYLE' . $a . ']', 'none', $resume_template);
        }
      }
      $resume_template = str_replace('[CAREEROBJECTIVE]', !empty($user_skill->career_obj) ? $user_skill->career_obj : "I want myself to be an employee of a well repudiated firm where I can improvise my skills of professionalism, adaptability and communication. My development should impact the development of the firm.", $resume_template);

      ////////////////////////////////////////Work Experience///////////////////////////////////////////////
      $user_work = UserWorkExp::where('user_id', $user_id)->get();
      $user_work_count = UserWorkExp::where('user_id', $user_id)->count();
      $i = 1;
      foreach ($user_work as $work) {
        if ($work->company) {
          if ($work->end_date == "" && $work->is_current_working == 1) {
            $end_date = "Till Now";
          } else {
            //$end_date = $work->end_date;
            $end_date = $this->monthsName($work->end_date);
          }
          $starting_month_year = $this->monthsName($work->start_date);

          if ($registration->resume_id != 3) {
            $resume_template = str_replace('[EXPSTYLE' . $i . ']', 'flex', $resume_template);
          }

          $resume_template = str_replace('[STARTYEAR' . $i . ']', ($starting_month_year) ? $starting_month_year : "", $resume_template);

          $resume_template = str_replace('[ENDYEAR' . $i . ']', ($end_date) ? $end_date : "", $resume_template);
          $resume_template = str_replace('[JOBTITLE' . $i . ']', ($work->designation) ? $work->designation : "", $resume_template);
          $resume_template = str_replace('[COMPANYNAME' . $i . ']', ($work->company) ? $work->company : "", $resume_template);
          $resume_template = str_replace('[DESCRIPTION' . $i . ']', ($work->description) ? $work->description : "", $resume_template);
          $i++;
        }
      }
      $i = $i++;
      for ($a = $i; $a <= 20; $a++) {
        $resume_template = str_replace('[EXPSTYLE' . $a . ']', 'none', $resume_template);
        $resume_template = str_replace('[STARTYEAR' . $a . ']', '', $resume_template);
        $resume_template = str_replace('[ENDYEAR' . $a . ']', '', $resume_template);
        $resume_template = str_replace('[JOBTITLE' . $a . ']', '', $resume_template);
        $resume_template = str_replace('[DESCRIPTION' . $a . ']', '', $resume_template);
      }
      //////////////////////////////////////////////////Achievement///////////////////////////////////////////////
      $user_achiev = UserAchievementModel::where('user_id', $user_id)->value('title');
      $achivment = explode(",", $user_achiev);
      $achivment_count = count($achivment);
      $i = 1;
      foreach ($achivment as $ach) {
        $ac = trim($ach, '"');
        $resume_template = str_replace('[ACHIEVEMENTITLE' . $i . ']', ($ac != "") ? $ac : "", $resume_template);
        $i++;
      }
      $i = $i++;
      for ($a = $i; $a <= 20; $a++) {
        $resume_template = str_replace('[ACHHIEVSTYLE' . $a . ']', 'none', $resume_template);
      }
      /////////////////////////////////////Social/////////////////////////////////////
      $user_social = UserSocial::where('user_id', $user_id)->first();
      if (!empty($user_social)) {
        $resume_template = str_replace('[LINKDIN]', ($user_social->linkedin != "") ? $user_social->linkedin : "", $resume_template);
        $resume_template = str_replace('[FACEBOOK]', ($user_social->fb != "") ? $user_social->fb : "", $resume_template);
        $resume_template = str_replace('[TWITTER]', ($user_social->twitter != "") ? $user_social->twitter : "", $resume_template);
      }


      return view('newtemp/userDashboard')->with(compact('user_name', 'user_image', 'user_id', 'user_image', 'user_login', 'user_code', 'resume_template', 'resume_id'));
    } else {
      return view('error.404');
    }
  }
  
  public function myResume(Request $request)
  {

    if (session()->has('user')) {

      $user_id = session('user')->id;
      $resume_id = session('user')->resume_id;

      //aditya
      $user_code_id = session('user')->resumeCode_id;

      $registration = RegistrationModel::find($user_id);
      $registration->resume_id = $resume_id;
      $registration->save();

      $user_code = ResumeCodeModel::where('id', $user_code_id)->value('user_code');
      $user_IsWork = UserWorkExp::where('user_id', $user_id)->orderBy('id', 'asc')->first();

      $resume_template = ResumeTemplate::where('id', $resume_id)->value('template');
      // dd($resume_template);
      $resume_id = $resume_id;
      /////////////////////////////////////////Registration/////////////////////////////////////////////

      $user_name = $registration->name;
      $name = explode(" ", $user_name);
      $first_name = isset($name[0]) ? $name[0] : '';
      $last_name1 = isset($name[1]) ? $name[1] : '';
      $last_name2 = isset($name[2]) ? $name[2] : '';
      $last_name = $last_name1 . " " . $last_name2;
      $resume_template = str_replace('[FIRSTNAME]', $first_name, $resume_template);
      $resume_template = str_replace('[LASTNAME]', $last_name, $resume_template);
      $user_login_type = UserLogin_Model::where('id', $registration->login_id)->value('social_login_type');

      //////////////////////////////////////////////////Profile/////////////////////////////////////////////////
      $user_pro = UserProfile::where('user_id', $user_id)->first();
      $resume_template = str_replace('[CURJOBTITLE]', isset($user_pro->current_title) ? $user_pro->current_title : '', $resume_template);
      $resume_template = str_replace('[CONTACT]', $registration->contact, $resume_template);
      $resume_template = str_replace('[EMAIL]', $registration->email, $resume_template);
      $resume_template = str_replace('[STATE]', isset($user_pro->user_state) ? $user_pro->user_state : "State", $resume_template);
      $resume_template = str_replace('[COUNTRY]', isset($user_pro->user_country) ? $user_pro->user_country : "Country", $resume_template);
      $resume_template = str_replace('[ADDRESS]', isset($user_pro->user_address) ? $user_pro->user_address : "Address", $resume_template);
      $resume_template = str_replace('[CITY]', isset($user_pro->user_city) ? $user_pro->user_city : "City", $resume_template);
      $resume_template = str_replace('[CURRENTLOCATION]', isset($user_pro->current_location) ? $user_pro->current_location : "Current Location", $resume_template);
      $resume_template = str_replace('[CURRENTCTC]', isset($user_pro->current_ctc) ? $user_pro->current_ctc : "Current CTC", $resume_template);
      $resume_template = str_replace('[TOTALEXPERIENCE]', isset($user_pro->total_exp) ? $user_pro->total_exp : "Total Experience", $resume_template);
      $resume_template = str_replace('[NOTICEPERIOD]', isset($user_pro->notice_period) ? $user_pro->notice_period : "Notice Period", $resume_template);
      $resume_template = str_replace('[RELOCATE]', isset($user_pro->willing_to_relocate) ? $user_pro->willing_to_relocate : "Relocate", $resume_template);
      $resume_template = str_replace('[AGE]', isset($user_pro->age) ? $user_pro->age : "", $resume_template);
      $resume_template = str_replace('[GENDER]', isset($user_pro->gender) ? $user_pro->gender : "", $resume_template);
      $resume_template = str_replace('[MARRITALSTATUS]', isset($user_pro->marital_status) ? $user_pro->marital_status : "", $resume_template);
      $resume_template = str_replace('[COMMUNICATION]', isset($user_pro->communication_expertise) ? $user_pro->communication_expertise : "", $resume_template);

      if ($registration->image != "") {
        $imageType = explode("/", $registration->image);

        if ($imageType[0] == "public") {
          $image = "../" . $registration->image;
        } else {
          $image = $registration->image;
        }
      } else {
        if ($user_pro->gender) {
          if ($user_pro->gender == "male") {
            $image = "https://happiestresume.com/assets/resumeDesign/images/default_male.png";
          } elseif ($user_pro->gender == "female") {
            $image = "https://happiestresume.com/assets/resumeDesign/images/default_female.jpg";
          } else {
            $image = "https://happiestresume.com/assets/resumeDesign/images/user.png";
          }
        } else {
          $image = "https://happiestresume.com/assets/resumeDesign/images/user.png";
        }
      }

      $resume_template = str_replace('[USERIMAGE]', $image, $resume_template);


      if (isset($user_pro->language)) {
        $language = explode(',', $user_pro->language);
        $lang_count = count($language);
        $i = 1;
        foreach ($language as $lang) {
          $lng = trim($lang, '"');
          $resume_template = str_replace('[LANG' . $i . ']', ($lng != '') ? $lng : "", $resume_template);
          $i++;
        }
        $i = $i++;
        for ($a = $i; $a <= 15; $a++) {
          $resume_template = str_replace('[LANGSTYLE' . $a . ']', 'none', $resume_template);
        }
      }
      if (isset($user_pro->interest_hobies)) {


        $hobbies = explode(',', $user_pro->interest_hobies);
        $hobb_count = count($hobbies);
        $i = 1;

        if ($resume_id == 1) {
          $url = "https://happiestresume.com/public/resume_yellow/assets/imgs";
        } else {
          $url = "https://happiestresume.com/public/resume_emarald";
        }
        foreach ($hobbies as $hobby) {
          $hob = trim($hobby, '"');
          $resume_template = str_replace('[HOBB' . $i . ']', ($hob != '') ? $hob : "", $resume_template);
          if ($hob == 'sports') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/sports.png", $resume_template);
          } elseif ($hob == 'music') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/music.png", $resume_template);
          } elseif ($hob == 'reading') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/reading.png", $resume_template);
          } elseif ($hob == 'dancing') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/dance.png", $resume_template);
          } elseif ($hob == 'art') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/art.png", $resume_template);
          } elseif ($hob == 'internet') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/internet.png", $resume_template);
          } elseif ($hob == 'technology') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/technology.png", $resume_template);
          } elseif ($hob == 'travelling') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/airplane.png", $resume_template);
          } elseif ($hob == 'writing') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/writting.png", $resume_template);
          } elseif ($hob == 'gardening') {
            $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/gardening.png", $resume_template);
          }
          $i++;
        }
        $i = $i++;
        for ($a = $i; $a <= 10; $a++) {
          $resume_template = str_replace('[HOBBSTYLE' . $a . ']', 'none', $resume_template);
        }
      }
      ///////////////////////////////////////////Education/////////////////////////////////////////////////
      $user_educations = UserEducation::where('user_id', $user_id)->get();
      $user_edu_count = UserEducation::where('user_id', $user_id)->count();
      $i = 1;

      foreach ($user_educations as $user_edu) {
        if (isset($user_edu) &&  $user_edu->education_name != "") {
          $resume_template = str_replace('[EDUCATIONSTYLE' . $i . ']', 'flex', $resume_template);
        } else {
          $resume_template = str_replace('[EDUCATIONSTYLE' . $i . ']', 'none', $resume_template);
        }
        if ($user_edu->type == "Below10th" || $user_edu->type == "below 10th") {
          $education_degree = "Below Matriculation";
        } elseif ($user_edu->type == "Other" || $user_edu->type == "Other") {
          $education_degree = "DIPLOMA";
        } elseif ($user_edu->type == "Х’th" || $user_edu->type == "10th") {
          $education_degree = "HIGH SECONDARY";
        } elseif ($user_edu->type == "ХII’th" || $user_edu->type == "12th") {
          $education_degree = "HIGHER SECONDARY";
        } elseif ($user_edu->type == "graduation" || $user_edu->type == "graduate") {
          $education_degree = "BACHELOR DEGREE";
        } elseif ($user_edu->type == "post graduation" || $user_edu->type == "post graduate") {
          $education_degree = "MASTER DEGREE";
        } elseif ($user_edu->type == "professional qualification") {
          $education_degree = "PROFESSIONAL DEGREE";
        } elseif ($user_edu->type == "diploma") {
          $education_degree = "DIPLOMA";
        }
        $resume_template = str_replace('[EDUCATIONDEGREE' . $i . ']', isset($education_degree) && ($education_degree != "") ? $education_degree : "EDUCATION TYPE", $resume_template);
        $resume_template = str_replace('[EDUCATIONYEAR' . $i . ']', isset($user_edu->year) && ($user_edu->year != "") ? $user_edu->year : "2010", $resume_template);

        $resume_template = str_replace('[EDUCATIONORGAN' . $i . '],', isset($user_edu->organization) && ($user_edu->organization != "") ? $user_edu->organization : "", $resume_template);
        $resume_template = str_replace('[EDUCATIONLOCATION' . $i . ']', isset($user_edu->location) && ($user_edu->location != "") ? $user_edu->location : "", $resume_template);

        if (isset($user_edu->education_name)) {
          if ($user_edu->education_name != "" && is_numeric($user_edu->education_name)) {
            $education_name = Degrees::where('id', $user_edu->education_name)->value('degree_name');
          } else {
            $education_name = $user_edu->education_name;
          }
        }
        $resume_template = str_replace('[EDUCATIONNAME' . $i . ']', isset($user_edu->education_name) && ($user_edu->education_name != "") ? $education_name : "Education Name", $resume_template);
        $i++;
      }
      $i = $i++;
      for ($a = $i; $a <= 10; $a++) {
        $resume_template = str_replace('[EDUCATIONSTYLE' . $a . ']', 'none', $resume_template);
      }

      /////////////////////////////////////////////Skills/////////////////////////////////////////////////////
      $user_skill = UserSkill::where('user_id', $user_id)->first();
      if (!empty($user_skill)) {
        $skills = explode(',', $user_skill->skills);
        $skill_count = count($skills);
        $i = 1;
        foreach ($skills as $sk) {
          $skl = trim($sk, '"');
          $resume_template = str_replace('[SKILLS' . $i . ']', ($skl != '') ? $skl : "", $resume_template);
          $i++;
        }
        $i = $i++;
        for ($a = $i; $a <= 25; $a++) {
          $resume_template = str_replace('[SKILLSTYLE' . $a . ']', 'none', $resume_template);
        }
      } else {
        for ($a = 1; $a <= 25; $a++) {
          $resume_template = str_replace('[SKILLSTYLE' . $a . ']', 'none', $resume_template);
        }
      }
      $resume_template = str_replace('[CAREEROBJECTIVE]', !empty($user_skill->career_obj) ? $user_skill->career_obj : "I want myself to be an employee of a well repudiated firm where I can improvise my skills of professionalism, adaptability and communication. My development should impact the development of the firm.", $resume_template);

      ////////////////////////////////////////Work Experience///////////////////////////////////////////////
      $user_work = UserWorkExp::where('user_id', $user_id)->get();
      $user_work_count = UserWorkExp::where('user_id', $user_id)->count();
      $i = 1;
      foreach ($user_work as $work) {
        if ($work->company) {
          if ($work->end_date == "" && $work->is_current_working == 1) {
            $end_date = "Till Now";
          } else {
            //$end_date = $work->end_date;
            $end_date = $this->monthsName($work->end_date);
          }
          $starting_month_year = $this->monthsName($work->start_date);

          if ($registration->resume_id != 3) {
            $resume_template = str_replace('[EXPSTYLE' . $i . ']', 'flex', $resume_template);
          }

          $resume_template = str_replace('[STARTYEAR' . $i . ']', ($starting_month_year) ? $starting_month_year : "", $resume_template);

          $resume_template = str_replace('[ENDYEAR' . $i . ']', ($end_date) ? $end_date : "", $resume_template);
          $resume_template = str_replace('[JOBTITLE' . $i . ']', ($work->designation) ? $work->designation : "", $resume_template);
          $resume_template = str_replace('[COMPANYNAME' . $i . ']', ($work->company) ? $work->company : "", $resume_template);
          $resume_template = str_replace('[DESCRIPTION' . $i . ']', ($work->description) ? $work->description : "", $resume_template);
          $i++;
        }
      }
      $i = $i++;
      for ($a = $i; $a <= 20; $a++) {
        $resume_template = str_replace('[EXPSTYLE' . $a . ']', 'none', $resume_template);
        $resume_template = str_replace('[STARTYEAR' . $a . ']', '', $resume_template);
        $resume_template = str_replace('[ENDYEAR' . $a . ']', '', $resume_template);
        $resume_template = str_replace('[JOBTITLE' . $a . ']', '', $resume_template);
        $resume_template = str_replace('[DESCRIPTION' . $a . ']', '', $resume_template);
      }
      //////////////////////////////////////////////////Achievement///////////////////////////////////////////////
      $user_achiev = UserAchievementModel::where('user_id', $user_id)->value('title');
      $achivment = explode(",", $user_achiev);
      $achivment_count = count($achivment);
      $i = 1;
      foreach ($achivment as $ach) {
        $ac = trim($ach, '"');
        $resume_template = str_replace('[ACHIEVEMENTITLE' . $i . ']', ($ac != "") ? $ac : "", $resume_template);
        $i++;
      }
      $i = $i++;
      for ($a = $i; $a <= 20; $a++) {
        $resume_template = str_replace('[ACHHIEVSTYLE' . $a . ']', 'none', $resume_template);
      }
      /////////////////////////////////////Social/////////////////////////////////////
      $user_social = UserSocial::where('user_id', $user_id)->first();
      if (!empty($user_social)) {
        $resume_template = str_replace('[LINKDIN]', ($user_social->linkedin != "") ? $user_social->linkedin : "", $resume_template);
        $resume_template = str_replace('[FACEBOOK]', ($user_social->fb != "") ? $user_social->fb : "", $resume_template);
        $resume_template = str_replace('[TWITTER]', ($user_social->twitter != "") ? $user_social->twitter : "", $resume_template);
      }


      return view('newtemp/userResume')->with(compact('user_id', 'resume_template', 'resume_id', 'user_code'));
    } else {
      return view('error.404');
    }
  }

  public function downloadpdf()
  {
    if (session()->has('user')) {

      $user_id = session('user')->id;
      $user_code_id = session('user')->resumeCode_id;

      $registration = RegistrationModel::find($user_id);


      $user_code = ResumeCodeModel::where('id', $user_code_id)->value('user_code');
      $user_IsWork = UserWorkExp::where('user_id', $user_id)->orderBy('id', 'asc')->first();


      $resume_template = ResumeTemplate::where('id', $registration->resume_id)->value('template');
      $resume_id = $registration->resume_id;
      //////////////////////////////////////////////////////Registration/////////////////////////////////////////////
      $user_login = RegistrationModel::find($user_id);
      $user_name = $user_login->name;
      $name = explode(" ", $user_name);
      $first_name = isset($name[0]) ? $name[0] : '';
      $last_name1 = isset($name[1]) ? $name[1] : '';
      $last_name2 = isset($name[2]) ? $name[2] : '';
      $last_name = $last_name1 . " " . $last_name2;
      $resume_template = str_replace('[FIRSTNAME]', $first_name, $resume_template);
      $resume_template = str_replace('[LASTNAME]', $last_name, $resume_template);
      $resume_template = str_replace('[USERIMAGE]', ($user_login->image != "") ? $user_login->image : "https://happiestresume.com/assets/resumeDesign/images/user.png", $resume_template);

      //////////////////////////////////////////////////Profile/////////////////////////////////////////////////
      $user_pro = UserProfile::where('user_id', $user_id)->first();
      $resume_template = str_replace('[CURJOBTITLE]', $user_pro->current_title, $resume_template);
      $resume_template = str_replace('[CONTACT]', $registration->contact, $resume_template);
      $resume_template = str_replace('[EMAIL]', $registration->email, $resume_template);
      $resume_template = str_replace('[STATE]', ($user_pro->user_state != "") ? $user_pro->user_state : "State", $resume_template);
      $resume_template = str_replace('[COUNTRY]', ($user_pro->user_country) ? $user_pro->user_country : "Country", $resume_template);
      $resume_template = str_replace('[ADDRESS]', ($user_pro->user_address) ? $user_pro->user_address : "Address", $resume_template);
      $resume_template = str_replace('[CITY]', ($user_pro->user_city) ? $user_pro->user_city : "City", $resume_template);
      $resume_template = str_replace('[CURRENTLOCATION]', ($user_pro->current_location) ? $user_pro->current_location : "Current Location", $resume_template);
      $resume_template = str_replace('[CURRENTCTC]', ($user_pro->current_ctc) ? $user_pro->current_ctc : "Current CTC", $resume_template);
      $resume_template = str_replace('[TOTALEXPERIENCE]', ($user_pro->total_exp) ? $user_pro->total_exp : "Total Experience", $resume_template);
      $resume_template = str_replace('[NOTICEPERIOD]', ($user_pro->notice_period) ? $user_pro->notice_period : "Notice Period", $resume_template);
      $resume_template = str_replace('[RELOCATE]', ($user_pro->willing_to_relocate) ? $user_pro->willing_to_relocate : "Relocate", $resume_template);
      $resume_template = str_replace('[AGE]', ($user_pro->age) ? $user_pro->age : "", $resume_template);
      $resume_template = str_replace('[GENDER]', ($user_pro->gender) ? $user_pro->gender : "", $resume_template);
      $resume_template = str_replace('[MARRITALSTATUS]', ($user_pro->marital_status) ? $user_pro->marital_status : "", $resume_template);
      $resume_template = str_replace('[COMMUNICATION]', ($user_pro->communication_expertise) ? $user_pro->communication_expertise : "", $resume_template);

      $language = explode(',', $user_pro->language);
      $lang_count = count($language);
      $i = 1;
      foreach ($language as $lang) {
        $lng = trim($lang, '"');
        $resume_template = str_replace('[LANG' . $i . ']', ($lng != '') ? $lng : "", $resume_template);
        $i++;
      }
      $i = $i++;
      for ($a = $i; $a <= 15; $a++) {
        $resume_template = str_replace('[LANGSTYLE' . $a . ']', 'none', $resume_template);
      }

      $hobbies = explode(',', $user_pro->interest_hobies);
      $hobb_count = count($hobbies);
      $i = 1;
      if ($resume_id == 1) {
        $url = "https://happiestresume.com/public/resume_yellow/assets/imgs";
      } else {
        $url = "https://happiestresume.com/public/resume_emarald";
      }
      foreach ($hobbies as $hobby) {
        $hob = trim($hobby, '"');
        $resume_template = str_replace('[HOBB' . $i . ']', ($hob != '') ? $hob : "", $resume_template);
        if ($hob == 'sports') {
          $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/sports.png", $resume_template);
        } elseif ($hob == 'music') {
          $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/music.png", $resume_template);
        } elseif ($hob == 'reading') {
          $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/reading.png", $resume_template);
        } elseif ($hob == 'dancing') {
          $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/dance.png", $resume_template);
        } elseif ($hob == 'art') {
          $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/art.png", $resume_template);
        } elseif ($hob == 'internet') {
          $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/internet.png", $resume_template);
        } elseif ($hob == 'technology') {
          $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/technology.png", $resume_template);
        } elseif ($hob == 'travelling') {
          $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/airplane.png", $resume_template);
        } elseif ($hob == 'writing') {
          $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/writting.png", $resume_template);
        } elseif ($hob == 'gardening') {
          $resume_template = str_replace('[HOBBIMG' . $i . ']', $url . "/gardening.png", $resume_template);
        }
        $i++;
      }
      $i = $i++;
      for ($a = $i; $a <= 10; $a++) {
        $resume_template = str_replace('[HOBBSTYLE' . $a . ']', 'none', $resume_template);
      }
      ///////////////////////////////////////////Education/////////////////////////////////////////////////
      $user_edu_Other = UserEducation::where('user_id', $user_id)->where('type', 'Other')->orWhere('type', 'Other')->where('user_id', $user_id)->first();
      $resume_template = str_replace('[OTHERYEAR]', isset($user_edu_Other->year) && ($user_edu_Other->year != "") ? $user_edu_Other->year : "2010", $resume_template);
      $resume_template = str_replace('[OTHERNAME]', isset($user_edu_Other->education_name) && ($user_edu_Other->education_name != "") ? $user_edu_Other->education_name : "X education Name", $resume_template);
      $resume_template = str_replace('[OTHERORGAN]', isset($user_edu_Other->organization) && ($user_edu_Other->organization != "") ? $user_edu_Other->organization : "Organisation", $resume_template);
      $resume_template = str_replace('[OTHERLOCATION]', isset($user_edu_Other->location) && ($user_edu_Other->location != "") ? $user_edu_Other->location : "Location", $resume_template);

      $user_edu_X = UserEducation::where('user_id', $user_id)->where('type', 'Х’th')->orWhere('type', '10th')->where('user_id', $user_id)->first();
      $resume_template = str_replace('[XYEAR]', isset($user_edu_X->year) && ($user_edu_X->year != "") ? $user_edu_X->year : "2010", $resume_template);
      $resume_template = str_replace('[XNAME]', isset($user_edu_X->education_name) && ($user_edu_X->education_name != "") ? $user_edu_X->education_name : "X education Name", $resume_template);
      $resume_template = str_replace('[XORGAN]', isset($user_edu_X->organization) && ($user_edu_X->organization != "") ? $user_edu_X->organization : "Organisation", $resume_template);
      $resume_template = str_replace('[XLOCATION]', isset($user_edu_X->location) && ($user_edu_X->location != "") ? $user_edu_X->location : "Location", $resume_template);

      $user_edu_XII = UserEducation::where('user_id', $user_id)->where('type', 'ХII’th')->orWhere('type', '12th')->where('user_id', $user_id)->first();
      $resume_template = str_replace('[XIIYEAR]', isset($user_edu_XII->year) && ($user_edu_XII->year != "") ? $user_edu_XII->year : "2012", $resume_template);
      $resume_template = str_replace('[XIINAME]', isset($user_edu_XII->education_name) && ($user_edu_XII->education_name != "") ? $user_edu_XII->education_name : "XII Education Name", $resume_template);
      $resume_template = str_replace('[XIILOCATION]', isset($user_edu_XII->location) && ($user_edu_XII->location != "") ? $user_edu_XII->location : "Location", $resume_template);
      $resume_template = str_replace('[XIIORGAN]', isset($user_edu_XII->organization) && ($user_edu_XII->organization != "") ? $user_edu_XII->organization : "Organisation", $resume_template);

      $user_edu_graduation = UserEducation::where('user_id', $user_id)->where('type', 'graduation')->orWhere('type', 'graduate')->where('user_id', $user_id)->first();
      $resume_template = str_replace('[GRADUATIONYEAR]', isset($user_edu_graduation->year) && ($user_edu_graduation->year != "") ? $user_edu_graduation->year : "2015", $resume_template);
      $resume_template = str_replace('[GRADUATIONLOCATION]', isset($user_edu_graduation->location) && ($user_edu_graduation->location != "") ? $user_edu_graduation->location : "Location", $resume_template);
      $resume_template = str_replace('[GRADUATIONORGAN]', isset($user_edu_graduation->organization) && ($user_edu_graduation->organization != "") ? $user_edu_graduation->organization : "Organisation", $resume_template);
      if (isset($user_edu_graduation->education_name)) {
        if ($user_edu_graduation->education_name != "" && is_numeric($user_edu_graduation->education_name)) {
          $graduation_name = Degrees::where('id', $user_edu_graduation->education_name)->value('degree_name');
        } else {
          $graduation_name = $user_edu_graduation->education_name;
        }
      }
      $resume_template = str_replace('[GADUCATIONNAME]', isset($graduation_name) ? $graduation_name : "Graduation Name", $resume_template);

      $user_edu_post = UserEducation::where('user_id', $user_id)->where('type', 'post graduation')->orWhere('type', 'post graduate')->where('user_id', $user_id)->first();
      $resume_template = str_replace('[POSTYEAR]', isset($user_edu_post->year) && ($user_edu_post->year != "") ? $user_edu_post->year : "2020", $resume_template);
      $resume_template = str_replace('[POSTORGAN]', isset($user_edu_post->organization) && ($user_edu_post->organization != "") ? $user_edu_post->organization : "Organisation", $resume_template);
      $resume_template = str_replace('[POSTLOCATION]', isset($user_edu_post->location) && ($user_edu_post->location != "") ? $user_edu_post->location : "Location", $resume_template);
      if (isset($user_edu_post->education_name)) {
        if ($user_edu_post->education_name != "" && is_numeric($user_edu_post->education_name)) {
          $post_graduation_name = Degrees::where('id', $user_edu_post->education_name)->value('degree_name');
        } else {
          $post_graduation_name = $user_edu_post->education_name;
        }
      }
      $resume_template = str_replace('[POSTNAME]', isset($post_graduation_name) ? $post_graduation_name : "Post Graduation Name", $resume_template);

      /////////////////////////////////////////////////Skills//////////////////////////////////////////////////////////
      $user_skill = UserSkill::where('user_id', $user_id)->first();
      $skills = explode(',', $user_skill->skills);
      $skill_count = count($skills);
      $i = 1;
      foreach ($skills as $sk) {
        $skl = trim($sk, '"');
        $resume_template = str_replace('[SKILLS' . $i . ']', ($skl != '') ? $skl : "", $resume_template);
        $i++;
      }
      $i = $i++;
      for ($a = $i; $a <= 25; $a++) {
        $resume_template = str_replace('[SKILLSTYLE' . $a . ']', 'none', $resume_template);
      }
      $resume_template = str_replace('[CAREEROBJECTIVE]', ($user_skill->career_obj) ? $user_skill->career_obj : "I want myself to be an employee of a well repudiated firm where I can improvise my skills of professionalism, adaptability and communication. My development should impact the development of the firm.", $resume_template);

      //////////////////////////////////////////////////Work Experience///////////////////////////////////////////////
      $user_work = UserWorkExp::where('user_id', $user_id)->get();
      $user_work_count = UserWorkExp::where('user_id', $user_id)->count();
      $i = 1;
      foreach ($user_work as $work) {
        if ($work->end_date == "" && $work->is_current_working == 1) {
          $end_date = "Now";
        } else {
          $end_date = $work->end_date;
        }
        if ($registration->resume_id != 3) {
          $resume_template = str_replace('[EXPSTYLE' . $i . ']', 'flex', $resume_template);
        }

        $resume_template = str_replace('[STARTYEAR' . $i . ']-', ($work->start_date) ? $work->start_date . '-' : "", $resume_template);

        $resume_template = str_replace('[ENDYEAR' . $i . ']', ($end_date) ? $end_date : "", $resume_template);
        $resume_template = str_replace('[JOBTITLE' . $i . ']', ($work->designation) ? $work->designation : "", $resume_template);
        $resume_template = str_replace('[COMPANYNAME' . $i . ']', ($work->company) ? $work->company : "", $resume_template);
        $resume_template = str_replace('[DESCRIPTION' . $i . ']', ($work->description) ? $work->description : "", $resume_template);
        $i++;
      }
      $i = $i++;
      for ($a = $i; $a <= 20; $a++) {
        $resume_template = str_replace('[EXPSTYLE' . $a . ']', 'none', $resume_template);
        $resume_template = str_replace('[STARTYEAR' . $a . ']-', '', $resume_template);
        $resume_template = str_replace('[ENDYEAR' . $a . ']', '', $resume_template);
        $resume_template = str_replace('[JOBTITLE' . $a . ']', '', $resume_template);
        $resume_template = str_replace('[DESCRIPTION' . $a . ']', '', $resume_template);
      }
      //////////////////////////////////////////////////Achievement///////////////////////////////////////////////
      $user_achiev = UserAchievementModel::where('user_id', $user_id)->value('title');
      $achivment = explode(",", $user_achiev);
      $achivment_count = count($achivment);
      $i = 1;
      foreach ($achivment as $ach) {
        $ac = trim($ach, '"');
        $resume_template = str_replace('[ACHIEVEMENTITLE' . $i . ']', ($ac != "") ? $ac : "", $resume_template);
        $i++;
      }
      $i = $i++;
      for ($a = $i; $a <= 20; $a++) {
        $resume_template = str_replace('[ACHHIEVSTYLE' . $a . ']', 'none', $resume_template);
      }
      /////////////////////////////////////Social/////////////////////////////////////
      $user_social = UserSocial::where('user_id', $user_id)->first();
      $resume_template = str_replace('[LINKDIN]', ($user_social->linkedin != "") ? $user_social->linkedin : "", $resume_template);
      $resume_template = str_replace('[FACEBOOK]', ($user_social->fb != "") ? $user_social->fb : "", $resume_template);
      $resume_template = str_replace('[TWITTER]', ($user_social->twitter != "") ? $user_social->twitter : "", $resume_template);

      $options = new Options();
      $options->set([
        'logOutputFile' => storage_path('logs/log.htm'),
        'tempDir' => storage_path('logs/')
      ]);
      $options->setIsRemoteEnabled(true);

      $pdfInvoice = new Dompdf($options);
      $pdfInvoice->loadHtml('<style>@page {
        margin-top: 10px;
        margin-right: 10px;
        sheet-size: A4-P;
        font-size:13px;
       }</style>' . $resume_template);

      $pdfInvoice->render();

      return $pdfInvoice->stream("$first_name.pdf");
    } else {
      return view('error.404');
    }
  }
  public function webView($code)
  {
    $resume_id = ResumeCodeModel::where('user_code', $code)->first();

    if (isset($resume_id)) {
      $user_id = RegistrationModel::where('resumeCode_id', $resume_id->id)->value('id');

      if (isset($user_id)) {
        $user_login = RegistrationModel::find($user_id);
        $user_login->profile_view_count += 1;
        $user_login->save();



        $registration = RegistrationModel::find($user_id);
        $user_image = $registration->image;

        $user_login = RegistrationModel::find($user_id);

        $user_social = UserSocial::where('user_id', $user_id)->first();
        $user_skill = UserSkill::where('user_id', $user_id)->first();
        $skill = explode(',', $user_skill->skills);

        $user_pro = UserProfile::where('user_id', $user_id)->first();

        $language = explode(',', $user_pro->language);

        $user_edu_Other = UserEducation::where('user_id', $user_id)->where('type', 'Other')->orWhere('type', 'Other')->where('user_id', $user_id)->get();

        $user_edu_X = UserEducation::where('user_id', $user_id)->where('type', 'Х’th')->orWhere('type', '10th')->where('user_id', $user_id)->get();

        $user_edu_XII = UserEducation::where('user_id', $user_id)->where('type', 'ХII’th')->orWhere('type', '12th')->where('user_id', $user_id)->get();

        $user_edu_graduation = UserEducation::where('user_id', $user_id)->where('type', 'graduation')->orWhere('type', 'graduate')->where('user_id', $user_id)->get();

        $user_edu_post = UserEducation::where('user_id', $user_id)->where('type', 'post graduation')->orWhere('type', 'post graduate')->where('user_id', $user_id)->get();

        $user_work = UserWorkExp::where('user_id', $user_id)->get();

        $user_achiev = UserAchievementModel::where('user_id', $user_id)->first();

        return view('newtemp.showTemplate_final')->with(compact('user_id', 'user_image', 'registration', 'user_login', 'user_skill', 'user_social', 'user_pro', 'user_edu_X', 'user_edu_XII', 'user_edu_graduation', 'user_edu_post', 'user_work', 'user_achiev', 'skill', 'language'));
      } else {
        return view('error.404');
      }
    } else {
      return view('error.404');
    }
  }


}
