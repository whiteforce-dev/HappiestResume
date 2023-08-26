<?php

namespace App\Http\Controllers;

use App\Models\AppliedJob;
use App\Models\Company;
use App\Models\Job;
use App\Models\JobType;
use App\Models\RegistrationModel;
use App\Models\ResumeSliderModel;
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
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index_home()
    {

        return view('frontend.dashboard');
    }

    public function index()
    {
        return view('backend.login');
        //        return view('backend.index');
    }

    public function logout(Request $request)
    {
        //        $request->session()->forget('admin');
        $request->session()->flush();
        return redirect('admin');
    }

    public function user_logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect('/');
    }

    public function get_error_log()
    {
        $errors = ErrorLog::orderBy('id', 'desc')->paginate(20);
        $i = count($errors);
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo $i . "<b>.  Error Msg: </b>" . $error->error_msg . "</br>" . "<b>Controller: </b>" . $error->controller_name . "</br>" . "<b>Function: </b>" . $error->function_name . "</br><b>Time: </b>" . $error->created_time . "</br>";
            }
        }
    }

    public function addMore()
    {
        return view("addmore");
    }

    public function addMorePost(Request $request)
    {
        $rules = [];

        foreach ($request->input('name') as $key => $value) {
            $rules["name.{$key}"] = 'required';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->passes()) {

            foreach ($request->input('name') as $key => $value) {
                TagList::create(['name' => $value]);
            }

            return response()->json(['success' => 'done']);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

   public function dashboard()
    {
       if (Auth::user()->role == 'admin') {
            $registrations = RegistrationModel::orderBy('id', 'desc')->take(5)->get();
            // $registrations_today = RegistrationModel::whereDate('created_at', '=', date('Y-m-d'))->count();
            $registrations_web = RegistrationModel::where(['register_from' => "website"])->count();
            $registrations_office = RegistrationModel::where(['register_from' => "office"])->count();
            $registrations_saisunhire = RegistrationModel::where(['register_from' => "saisun_hire"])->where('candidate_type',0)->count();
            $registrations_international = RegistrationModel::where(['register_from' => "saisun_hire"])->where('candidate_type',1)->count();
            $register_payPublish = RegistrationModel::where(['register_from' => "Publisher"])->orWhere(['register_from' => "payroll"])->count();
            $registrations_payroll = RegistrationModel::where(['register_from' => "payroll"])->count();
            $registrations_parser = RegistrationModel::where(['register_from' => "parser"])->count();
            $registrations_chatbot =  RegistrationModel::where(['register_from' => "Chatbot"])->count();

            $registrations_count = RegistrationModel::count();
            $jobs_count = Job::count();
            $companies_count = Company::count();
            $job_types_count = JobType::count();

            $yesterday = date("Y-m-d", strtotime( '-1 days' ) );
            $today_office_register = RegistrationModel::whereDate('created_at', '=' , date('Y-m-d'))->where('register_from' , '=' , "office")->count();
            
            $today_onrole_register = RegistrationModel::whereDate('created_at' , '=' , $yesterday)->where('register_from','=',"saisun_hire")->where('is_onrole', '=', 1)->where('candidate_type',0)->count();
            
            $today_offrole_register = RegistrationModel::whereDate('created_at' , '=' , $yesterday)->where('register_from','=',"saisun_hire")->where('is_onrole', '=', 0)->where('candidate_type',0)->count();

            $today_international_register = RegistrationModel::whereDate('created_at' , '=' , $yesterday)->where('register_from','=',"saisun_hire")->where('candidate_type',1)->count();

            $today_website_register = RegistrationModel::whereDate('created_at' , '=' , date('Y-m-d'))->where('register_from','=',"website")->count();

            $today_payroll_register = RegistrationModel::whereDate('created_at' , '=' , $yesterday)->where('register_from','=',"payroll")->count();

            $today_parser_register = RegistrationModel::whereDate('created_at' , '=' , $yesterday)->where('register_from','=',"parser")->count();

            $today_chatbot_register = RegistrationModel::whereDate('created_at' , '=' , $yesterday)->where('register_from','=',"Chatbot")->count();

            $registrations_today = $today_office_register +  $today_onrole_register +  $today_offrole_register + $today_website_register + $today_payroll_register + $today_parser_register + $today_chatbot_register + $today_international_register;

            $now = Carbon::now();
            $weekStartDate = $now->startOfWeek()->format('Y-m-d H:i');
            $weekEndDate = $now->endOfWeek()->format('Y-m-d H:i');
            
            $week_office_register = RegistrationModel::where('register_from','=',"office")->whereBetween('created_at', [$weekStartDate, $weekEndDate])->count();
            
            $week_website_register = RegistrationModel::where('register_from','=',"website")->whereBetween('created_at', [$weekStartDate, $weekEndDate])->count();

            $week_offrole_register = RegistrationModel::where('register_from','=',"saisun_hire")->where('is_onrole', '=', 0)->where('candidate_type',0)->whereBetween('created_at', [$weekStartDate, $weekEndDate])->count();

            $week_onrole_register = RegistrationModel::where('register_from','=',"saisun_hire")->where('is_onrole', '=', 1)->where('candidate_type',0)->whereBetween('created_at', [$weekStartDate, $weekEndDate])->count();
            
            $week_international_register = RegistrationModel::where('register_from','=',"saisun_hire")->where('candidate_type',1)->whereBetween('created_at', [$weekStartDate, $weekEndDate])->count();

            $week_parser_register = RegistrationModel::where('register_from','=',"parser")->whereBetween('created_at', [$weekStartDate, $weekEndDate])->count();

            $week_payroll_register = RegistrationModel::where('register_from','=',"payroll")->whereBetween('created_at', [$weekStartDate, $weekEndDate])->count();

            $week_chatbot_register = RegistrationModel::where('register_from','=',"Chatbot")->whereBetween('created_at', [$weekStartDate, $weekEndDate])->count();

            return view('adminview.home', compact('registrations', 'registrations_count', 'jobs_count', 'companies_count', 'job_types_count', 'registrations_today', 'registrations_web', 'registrations_office', 'registrations_saisunhire','today_office_register','today_onrole_register','today_offrole_register','today_website_register','week_office_register','week_website_register','week_offrole_register','week_onrole_register','register_payPublish','registrations_payroll','registrations_parser','today_parser_register','today_payroll_register' ,'today_chatbot_register','registrations_chatbot','week_parser_register','week_payroll_register','week_chatbot_register','week_international_register','today_international_register','registrations_international'));
        } elseif (Auth::user()->role == 'client' || Auth::user()->role == 'office staff') {

            $jobs_count = Job::where(['created_by' => Auth::user()->id, 'is_del' => 0])->count();
            $companies_count = Company::where(['created_by' => Auth::user()->id, 'is_del' => 0])->count();
            $total_candidate = RegistrationModel::count();
            return view('adminview.home', compact('jobs_count', 'companies_count','total_candidate'));
        }
    }

    public function clientjobs(Request $request, $client_id = null)
    {
        $designation_company_sk = request('designation_company_sk');
        $location = request('location');
        $experience = request('experience');
        $salary = request('salary');

        // $jobs = Job::where(['created_by' => $client_id, 'is_del' => 0, 'is_active' => 1]);

        $jobs = Job::where(['created_by' => $client_id, 'is_del' => 0, 'is_active' => 1]);
        // ->orderBy('id', 'desc');

        // $jobs = $jobs->whereis_active(1)->get();

        // $designation_company_sk = $request->query('designation_company_sk');
        if (!is_null($designation_company_sk)) {
            $jobs = $jobs->where('position', 'like', "%$designation_company_sk%")->orWhere('skills_required', 'like', "%$designation_company_sk%");
        }

        // $location = $request->query('location');
        if (!is_null($location)) {
            $jobs = $jobs->where('job_location', 'like', "%$location%");
        }

        // $experience = $request->query('experience');
        if (!is_null($experience)) {

            if ($experience <= 10) {
                $jobs->whereBetween('experience_year_from', [0, $experience])->orWhereBetween('experience_year_to', [0, $experience]);
            } elseif ($experience == 11) {
                // $jobs->where('experience_year_from', '>=', 10)->where('experience_year_to', '=<', 14);
                $jobs->whereBetween('experience_year_from', [10, 14])->orWhereBetween('experience_year_to', [10, 14]);
            } else {
                // $jobs->where('experience_year_from', '>=', preg_replace("/[^0-9]/", '', $experience))->where('experience_year_to', '=<', 50);

                $jobs->whereBetween('experience_year_from', [preg_replace("/[^0-9]/", '', $experience), 50])->orWhereBetween('experience_year_to', [preg_replace("/[^0-9]/", '', $experience), 50]);
            }
        }

        // $salary = $request->query('salary');
        if (!is_null($salary)) {
            if (request('salary') <= 11) {
                $jobs->whereBetween('package_offer_from', [0, $salary])->orWhereBetween('package_offer_to', [0, $salary]);

                // $jobs->where('package_offer_from', '>=', 0);
                // $jobs->where('package_offer_to', '=<', preg_replace("/[^0-9]/", '', $salary));
            } elseif (request('salary') == 12) {
                $jobs->whereBetween('package_offer_from', [11, 15])->orWhereBetween('package_offer_to', [11, 15]);

                // $jobs->where('package_offer_from', '>=', 11);
                // $jobs->where('package_offer_to', '=<', 15);
            } elseif (request('salary') == 16) {
                $jobs->whereBetween('package_offer_from', [15, 20])->orWhereBetween('package_offer_to', [15, 20]);

                // $jobs->where('package_offer_from', '>=', 15);
                // $jobs->where('package_offer_to', '=<', 20);
            } else {

                $jobs->whereBetween('package_offer_from', [preg_replace("/[^0-9]/", '', $salary), 100])->orWhereBetween('package_offer_to', [preg_replace("/[^0-9]/", '', $salary), 100]);

                // $jobs->where('package_offer_from', '>=', preg_replace("/[^0-9]/", '', $salary));
                // $jobs->where('package_offer_to', '=<', 100);
            }
        }

        // dd($jobs->where('created_by', $client_id)->get());
        $jobs = $jobs->where('created_by', $client_id)->orderBy('id', 'desc')->paginate(6);

        $job_types = JobType::where(['is_active' => 1])->get();
        $companies = Company::where(['is_active' => 1])->inRandomOrder()->take(7)->get();

        $companies = Company::where(['id' => $client_id, 'is_del' => 0, 'is_active' => 1])->inRandomOrder()->take(7)->first();


        if (!empty($designation_company_sk) or !empty($location) or !empty($experience) or !empty($salary)) {
            session()->put('designation_company_sk', $designation_company_sk);
            session()->put('location', $location);
            session()->put('experience', $experience);
            session()->put('salary', $salary);
            return view('frontend.jobs.clientjobs_html', compact('jobs', 'companies', 'job_types', 'designation_company_sk', 'location', 'experience', 'salary'));
        } else {
            return view('frontend.jobs.clientjobs_html', compact('jobs', 'companies', 'job_types', 'designation_company_sk', 'location', 'experience', 'salary'));
        }
    }
    public function user_dashboard(Request $request)
    {
        // dd(session()->all());
        $request->session()->forget('resume');
        $resume_slider = ResumeSliderModel::where(['is_del' => 0, 'is_active' => 1])->get();
        $user_templates = UserTemplateModel::where(['user_id' => session('user')->id, 'template_id' => $resume_slider[0]->id])->get();



        $resume = ResumeSliderModel::find($resume_slider[0]->id);
        session()->put('resume', $resume);

        $user = RegistrationModel::find(session('user')->id);
        // dd($user);
        $user_work_exp = UserWorkExp::getUserCurrentWorking(session('user')->id, 1);
        // dd('dfsdf');
        $user_social = UserSocial::getUserSocial(session('user')->id);
        $user_educations = UserEducation::getUserEducation(session('user')->id);
        $user_achievements = UserAchievementModel::getUserAchievement(session('user')->id);
        $user_skills = UserSkill::getUserSkill(session('user')->id);
        $user_work_exps = UserWorkExp::getUserWorkExps(session('user')->id);
        $user_profile = UserProfile::getUserProfile(session('user')->id);

        $name = UserTemplateController::slugify($user->name);

        $resume_slider_selected = ResumeSliderModel::where(['is_del' => 0, 'is_active' => 1, 'is_selected' => 1])->first();



        return view('frontend.dashboard.dashboard', compact('resume', 'user', 'user_work_exp', 'user_social', 'user_social', 'user_educations', 'user_achievements', 'user_skills', 'user_work_exps', 'user_profile', 'resume_slider', 'user_templates', 'name', 'resume_slider_selected'));

        //        return view('frontend.dashboard.dashboard', compact('resume_slider', 'user_templates'));
    }

    public function login_old(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|max:50|min:10',
            'password' => 'required|max:20',
        ]);

        $username = request('email');
        $password = request('password');

        $user = UserLogin_Model::where(['username' => $username, 'password' => $password, 'is_active' => 1])->first(); {
            if (isset($user)) {
                $luser = RegistrationModel::where(['login_id' => $user->id])->first();
                $request->session()->put('user', $luser);
              //  return redirect('build-resume');
              return redirect('select-resume');
                //                return view('frontend.dashboard.dashboard');
                //                return redirect()->back();
            } else {
                $request->session()->flash('flashError', 'Error in Login');
                return redirect()->back()->withErrors(['Username / Password Invalid']);
            }
        }
    }

    public function login(Request $request)
    {
    //   $user = Session()->user;
    //   0
        $validatedData = $request->validate([
            'email' => 'required|max:50|min:10',
            'password' => 'required|max:20',
        ]);
        
        $username = 'shivmehra50@gmail.com';
        $password = '12345678';

        $user = UserLogin_Model::where(['username' => $username, 'password' => $password, 'is_active' => 1])->first(); 
        // return $user;
        {
            if (isset($user)) {
                $luser = RegistrationModel::where(['login_id' => $user->id])->first();
                $request->session()->put('user', $luser);
              //  return redirect('build-resume');
              return redirect('build-resume'); 
                //                return view('frontend.dashboard.dashboard');
                //                return redirect()->back();
            } else {
                $request->session()->flash('flashError', 'Error in Login');
                return redirect()->back()->withErrors(['Username / Password Invalid']);
            }
        }
    }


    

    public function admin_login(Request $request)
    {
        $username = request('login_username');
        $password = request('login_password');
        $user = AdminModel::where(['email' => $username, 'password' => $password, 'is_active' => 1])->first(); {
            if (isset($user)) {
                $request->session()->put('admin', $user);
                return redirect('index');
            } else {
                return redirect()->back()->withErrors(['Username / Password Invalid']);
            }
        }
    }

    public function admin_logout(Request $request)
    {
        $request->session()->forget('admin');
        return redirect('/admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function appliedjobs()
    {
        $appliedjobs = AppliedJob::where(['user_id' => session('user')->id, 'is_active' => 1])->orderBy('id', 'desc')->get();

        return view('frontend.jobs.appliedjobs', compact('appliedjobs'));
        // return view('');
    }

}
