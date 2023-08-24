<?php

namespace App\Http\Controllers;

use App\Models\AppliedJob;
use App\Models\Company;
use App\Models\Job;
use App\Models\JobType;
use App\Models\RegistrationModel;
use App\Models\ResumeCodeModel;
use App\Models\UserAchievementModel;
use App\Models\UserEducation;
use App\Models\UserLogin_Model;
use App\Models\UserProfile;
use App\Models\UserSkill;
use App\Models\UserSocial;
use App\Models\UserTemplateModel;
use App\Models\UserWorkExp;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class JobResponseController extends Controller
{
    public function job_description_portal($jid,$portal,$from = null)
    {
        if (session()->has('user')) {
            $is_user = 1;
        }
        else{
            $is_user = 0;
        }      
        if($from == "onrole"){
            $job = Job::where('hh_id',$jid)->where('is_on_or_off',1)->first();
        }
        elseif($from == "offrole"){
            $job = Job::where('hh_id',$jid)->where('is_on_or_off',2)->first();
        }
        elseif($from == null){
            $job = Job::find($jid);
        }
       // dd($is_from);
       //
      
      // dd($job);
        if (isset($job)) {
            $job_types = JobType::where(['is_active' => 1])->get();
            $companies = Company::where(['is_active' => 1])->get();

            $related_jobs = Job::where(['is_active' => 1, 'position' => $job->position])->where('id', '!=', $job->id)->inRandomOrder()->take(2)->get();
            $jid = $job->id;
            return view('frontend.jobs.jobdetails_jobportal', compact('job', 'companies', 'job_types', 'related_jobs','is_user','jid','portal'));
           
        } else {
            return redirect('hot-jobs');
        }

    }


    public function resumeloginJob(Request $request,$jid,$portal){
        $data = (object) [
            'page' => 'jobs',
            'jid' => $jid,
            'portal' => $portal
        ];
        $request->session()->put('redirect-user', $data);
        return view('frontend.jobs.resumeloginJob')->with(compact('jid','portal'));
       } 
       
       public function registrationJobApply($jid ,$portal, Request $request)
       {
         
          
           $validate_reg = $request->validate([
               'reg_email' => 'required|max:50',
               'contact' => 'required|max:10|min:10',
               'name' => 'required|max:50',
               'password' => 'required|max:20|min:6',
               'cpassword' => 'required|max:20|min:6',
           ]);
   
           $email = request('reg_email');
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               return redirect()->back()->with('error', "$email Your email id already exists in our system, Please login or provide another emial id.")->withInput();
           }
           
           $candidate_name = request('name');
           $regiter_code = new ResumeCodeModel();
           $resumeCode = new FrontendController();
           $arr = $resumeCode->getResumeCodeForCandiate($candidate_name);
           $increment = $arr['increment'];
           $resume_code = $arr['resume_code'];
           $regiter_code->increment_code = $increment;
           $regiter_code->user_code = $resume_code;
           $regiter_code->save();
   
           $registration = new RegistrationModel();
           $registration->name = request('name');
           $registration->email = request('reg_email');
           $registration->contact = request('contact');
           $registration->resumeCode_id = $regiter_code->id;
           $registration->register_from = 'website';
           $registration->candidate_type = request('candidate_type');
           $registration->save();
   
           $user_edu = new UserEducation();
           $user_edu->user_id = $registration->id;
           $user_edu->type = 'Х’th';
           $user_edu->icon = 'public/icon/tie-education.png';
           $user_edu->save();
   
           $user_edu1 = new UserEducation();
           $user_edu1->user_id = $registration->id;
           $user_edu1->type = 'ХII’th';
           $user_edu1->icon = 'public/icon/tie-education.png';
           $user_edu1->save();
   
           $user_edu2 = new UserEducation();
           $user_edu2->user_id = $registration->id;
           $user_edu2->type = 'graduation';
           $user_edu2->icon = 'public/icon/degree-education.png';
           $user_edu2->save();
   
           $user_edu3 = new UserEducation();
           $user_edu3->user_id = $registration->id;
           $user_edu3->type = 'post graduation';
           $user_edu3->icon = 'public/icon/cap-education.png';
           $user_edu3->save();
   
           $user_ach = new UserAchievementModel();
           $user_ach->user_id = $registration->id;
           $user_ach->save();
   
           $user_we = new UserWorkExp();
           $user_we->user_id = $registration->id;
           $user_we->save();
   
           $user_sk = new UserSkill();
           $user_sk->user_id = $registration->id;
           $user_sk->save();
   
           $user_pro = new UserProfile();
           $user_pro->user_id = $registration->id;
           $user_pro->save();
   
           $user_pr = new UserSocial();
           $user_pr->user_id = $registration->id;
           $user_pr->save();
   
           $user_t = new UserTemplateModel();
           $user_t->user_id = $registration->id;
           $user_t->template_id = 1;
           $user_t->save();
   
           $user = new UserLogin_Model();
           $user->name = request('name');
           $user->email = request('reg_email');
           $user->contact = request('contact');
           $user->password = Hash::make($request->password);
   
           if ($user->save()) {
               $registration->login_id = $user->id;
               $registration->profile_complete_percent = 30;
             
               $registration->created_at = Carbon::now('Asia/Kolkata');
               $registration->save();
   
               $user_login = UserLogin_Model::where(['email' => $user->email, 'password' => $user->password, 'is_active' => 1])->first();
            //    if (isset($user_login)) {
            //        $luser = RegistrationModel::where(['login_id' => $user_login->id])->first();
            //        $request->session()->put('user', $luser);
                   
            //        $str = "Dear $user->name,
            //        Congrats! Your professional resume has been $registration->profile_complete_percent% developed by Happiest resume builder. To complete the details, kindly login to https://happiestresume.com & get your resume build by professionals.
            //        Login id:- $user->username
            //        password:- $user->password
            //        link :- https://happiestresume.com/cv/$resume_code 
            //        Thanks & Regards
            //        Team Happiest Resume";
            //        //Aditya
            //        return redirect('job-description/'.session('redirect-user')->jid.'/'.session('redirect-user')->portal);


            //        try {
            //            $sms = new SendSMS();
            //            $sms->send_sms($user->contact, $str);
   
            //            $send_mail = new SendMailController();
            //            $send_mail->sendMail(ucfirst($user->name), $user->username, $user->password, $registration->profile_complete_percent,$resume_code);
            //            return redirect('job-description/'.$jid);
            //        } catch (Exception $e) {
            //            ErrorLog::store_error($e->getMessage(), 'AdminController', 'registration');
            //            return redirect('job-description/'.session('redirect-user')->jid.'/'.session('redirect-user')->portal);
            //        }
            //    } else {
            //        $request->session()->flash('flashError', 'Error in Login');
            //        return redirect()->back()->withErrors(['Username / Password Invalid']);
            //    }
            return redirect('job-description/'.session('redirect-user')->jid.'/'.session('redirect-user')->portal);
           } else {
               return redirect()->back()->with('error', 'Registration can not be completed');
           }
       }

    public function loginJobApply(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'email' => 'required|max:50|min:10',
            'password' => 'required|max:20',
        ]);

        $username = request('email');
        $password = Hash::make(request('password'));

        $user = UserLogin_Model::where(['email' => 'priya@gmail.com', 'is_active' => 1])->first(); 
        // return $user;
        {

            if (isset($user)) {
                $luser = RegistrationModel::where(['login_id' => $user->id])->first();
                $request->session()->put('user', $luser);
                return redirect('job-description/'.session('redirect-user')->jid.'/'.session('redirect-user')->portal);
          
            } else {
                $request->session()->flash('flashError', 'Error in Login');
                return redirect()->back()->withErrors(['Username / Password Invalid']);
            }
        }
    }


    public function jobApplyStore(Request $request){
        
        $user_id = session('user')->id;
    
        $user_email = session('user')->email;
        $user_contact = session('user')->contact;
        $login_id = session('user')->login_id;
        $password = UserLogin_Model::where('id',$login_id)->value('password');
        $resume_code_id = session('user')->resumeCode_id;
        if($resume_code_id != ''){
            $user_code = ResumeCodeModel::where('id',$resume_code_id)->value('user_code');
        }
        else{
        $user_code = ''; 
        }

        $job_id = session('redirect-user')->jid;
       
        $job = Job::where('id',$job_id)->first();
        $position = $job->position;

        $applyJob = AppliedJob::where(['user_id' => $user_id,'job_id'=>session('redirect-user')->jid,'applied_from'=>session('redirect-user')->portal])->first();
     
        if($applyJob == ""){
            $applyJob = new AppliedJob();
        }
        $applyJob->job_id = session('redirect-user')->jid;
        $applyJob->applied_from = session('redirect-user')->portal;
     
        $applyJob->user_id = $user_id;
        $applyJob->applied_date = date('Y-m-d');
        $applyJob->save();
     
        if($job->is_on_or_off == 1){
            $submitLink = "https://white-force.com/onrole/api";
        }
        elseif($job->is_on_or_off == 2){
            $submitLink = "https://white-force.com/offrole/api";
        }
      $url = $submitLink.'/'.'happiestApplicationStore';
        $data=[
            'jobId'=>$job->hh_id,
            'publish_to'=>$applyJob->applied_from,
            'name'=>session('user')->name,
            'email'=>$user_email,
            'mobile'=>$user_contact,
            'resume'=>'https://happiestresume.com/cv/'.$user_code,
        ];
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS,($data));
        $response = curl_exec($curl);
       
        $res = json_decode($response);
       
        curl_close($curl);
       

        $details['phone'] = $user_contact;
        $details['name'] = session('user')->name;
        $details['email'] = $user_email;
        $details['password'] = $password ;
        $details['job_post'] = $position;
        $details['job_location'] = $job->job_location; 
        $details['subject'] = 'Applied Job';
      //  ApplyJobCandidateSMS::dispatchNow($details);
     //   ApplyJobCandidateEmail::dispatchNow($details);
        
        // $admin['phone'] = $job->hr_contact;
        // $admin['name'] = $job->hr_name;
        // $admin['email'] = $job->hr_email;
        // $admin['job_post'] = $position;
        // $admin['job_location'] = $job->job_location; 
        // $admin['cand_name'] = session('user')->name;
        // $admin['cand_phone'] = $user_contact;
        // $admin['cand_email'] = $user_email;
        // $admin['user_code']  = $user_code;
        // $admin['subject'] = 'New application for the post of'. $position ;
        // ApplyJobHRemail::dispatchNow($admin);
        $candidate = (object) [
            'id' => $res->data,
            'link' => $submitLink,
        ];
        $request->session()->put('candidate-data', $candidate);
        return redirect('build-resume/2');
    }


    public function sendProfileData($user_id){
       $register = RegistrationModel::where('id',$user_id)->first();
       $user_profile = UserProfile::where('user_id',$user_id)->first();
       $url = session('candidate-data')->link.'/sendProfileData';
       $data=[
        'candidate_id'=>session('candidate-data')->id,
        'name'=>$register->name,
        'email'=>$register->email,
        'mobile'=>$register->contact,
        'country'=>$user_profile->user_country,
        'state'=>$user_profile->user_state,
        'city'=>$user_profile->user_city,
        'address'=>$user_profile->user_address,
        'current_title'=>$user_profile->current_title,

        ];
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS,($data));
        $response = curl_exec($curl);
        $res = json_decode($response);
        curl_close($curl);
    }
}
