<?php

namespace App\Http\Controllers;

use App\Models\AboutUsModel;
use App\Models\Benefit;
use App\Models\Company;
use App\Models\ContactModel;
use App\Models\ContactQuery;
use App\Models\Count;
use App\Models\CountryCode;
use App\Models\HowItWork;
use App\Models\Job;
use App\Models\RegistrationModel;
use App\Models\ResumeCodeModel;
use App\Models\ResumeSliderModel;
use App\Models\TestimonialsModel;
use App\Models\UserLogin_Model;
use App\Models\WebsiteVisitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    public function home()
    {

        #visitors code 

        //  $websiteurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        //  $ip= $_SERVER['REMOTE_ADDR'];

        //  $Ipadress= $ip;
        // function isMobileDevice() {
        //     return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
        // }
        // if(isMobileDevice()){
        //    // echo "It is a mobile device";
        //   $device="mobile device";
        // }
        // else {
        //   $device="Desktop device";
        //    // echo "It is desktop or computer device";
        // }
        // $useragent = $_SERVER['HTTP_USER_AGENT'];

        // $referer = $_SERVER['HTTP_REFERER'] ?? null;
        // $url = "http://white-force.com/chatbot_admin/api/visitordata";
        // $data=['ipaddress'=>$Ipadress,
        // 'device'=>$device,
        // 'useragent'=>$useragent,
        // 'refferer_url'=>$referer,
        // 'websiteurl'=>$websiteurl
        // ];
        // $curl = curl_init($url);

        // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // curl_setopt($curl, CURLOPT_POST, true);

        // curl_setopt($curl, CURLOPT_POSTFIELDS,($data));

        // $response = curl_exec($curl);

        // echo $response;

        // curl_close($curl);

        if (session('user')) {
            return redirect('user-dashboard');
        } else {
            $contactus = ContactModel::where(['is_del' => 0])->first();
            $aboutus = AboutUsModel::where(['is_del' => 0])->first();
            $registerations = UserLogin_Model::where(['is_active' => 1])->orderBy('id', 'desc')->take(2)->get();
            $counts = Count::where(['is_active' => 1])->limit(4)->get();
            $howItWorks = HowItWork::where(['is_active' => 1])->orderBy('id', 'desc')->limit(4)->get();

            $resumeSliderModel = ResumeSliderModel::where(['is_del' => 0, 'is_active' => 1])->get();

            $benefits = Benefit::where('is_active', 1)->get();

            $testimonials_active = TestimonialsModel::where(['is_active' => 1])->orderBy('id', 'desc')->take(6)->get();

            $total_jobs = Job::count();
            $tjobs = 10000 + $total_jobs;

            $total_register = RegistrationModel::count();
            $tregister = 100000 + $total_register;

            $total_company = Company::count();
            $tcompany = 1000 + $total_company;

            $visitor = WebsiteVisitor::where('date', date('Y-m-d'))->first();
            if ($visitor != '') {
                $visitor->count = $visitor->count + 1;
                $visitor->save();
            } else {
                $visit = new WebsiteVisitor();
                $visit->count = 1;
                $visit->date = date('Y-m-d');
                $visit->save();
            }
            //dd($testimonials_active);
            return view('frontend.newHome')->with([
                'registerations' => $registerations,
                'contactus' => $contactus,
                'aboutus' => $aboutus,
                'testimonials_active' => $testimonials_active,
                'counts' => $counts,
                'howItWorks' => $howItWorks,
                'resumeSliderModel' => $resumeSliderModel,
                'benefits' => $benefits,
                'total_jobs' => $tjobs,
                'total_register' => $tregister,
                'total_company' => $tcompany,
            ]);
        }
    }









    public function sign_up(Request $request)
    {
        

        $data = (object) [
            'page' => 'simple',
            'jid' => '0',

        ];
        $request->session()->put('redirect-user', $data);
        $country_code = CountryCode::get();
 
       return view('auth.signup', compact('country_code'));
    }
    public function getResumeCodeForCandiate($name)
    {
        $nam = trim($name);
        $split = explode(" ", $nam);

        $resume_code = '';
        $increment = '';
        $resume = ResumeCodeModel::orderBy('id', 'desc')->limit(1)->first();
        if ($resume != null) {
            $lastCode = $resume->increment_code;
            $increment = $lastCode + 1;
            $resume_code = strtolower($split[0]) . '-' . $increment;
        } else {
            $resume_code = strtolower($split[0]) . '-' . 1001;
            $increment = 1001;
        }
        return array('resume_code' => $resume_code, 'increment' => $increment);
    }
    public function registration(Request $request)
    {
        // return $request;

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
        $arr = $this->getResumeCodeForCandiate($candidate_name);
        $increment = $arr['increment'];
        $resume_code = $arr['resume_code'];
        $regiter_code->increment_code = $increment;
        $regiter_code->user_code = $resume_code;
        $regiter_code->save();

        $lastname = !empty(request('last_name')) ? ' '.request('last_name') : '';
        $registration = new RegistrationModel();
        $registration->name = request('name') . '' . $lastname;
        $registration->email = request('reg_email');

        $registration->country_code = request('countryCode');

        $registration->contact = request('contact');
        $registration->resumeCode_id = $regiter_code->id;
        $registration->register_from = 'website';
        //$registration->is_fresher = request('is_fresher');
        $registration->candidate_type = request('candidate_type');
        $registration->industry = request('industry');
        $registration->save();
        
        $user = new UserLogin_Model();
        $user->name = request('name') . '' . $lastname;
        $user->email = request('reg_email');
        $user->contact = request('contact');
        $user->password = Hash::make(request('password'));
        $user->save();
        // return 'registration successful'; 
        
        
        
        
        return view('dashboard');

    }
    public function forgotpassword()
    {
        return view('auth.forgotpassword');
    }
    public function updatepassword(Request $request)
    {
    // return $request;
    $request->validate([

        'reg_email' => 'required|max:50',

        'contact' => 'required|max:10|min:10',

        'password' => 'required|max:20|min:6',
        'cpassword' => 'required|max:20|min:6',
    ]);
    // return $request;
    $emailid=$request->reg_email;
    // return $emailid;
    $contact = $request->contact;
    // $password = $request->password;
    $password = Hash::make($request->password);

    $user = UserLogin_Model::where(['email' => $emailid, 'contact' => $contact])->first();

    if($user) {
        // return 1;
        $user->password = $password;
        $user->save();
        // return $user;
        //  return 1;


        return view('auth.login')->with('message', 'Password has been changed successfully');
    } else {
        // return 'else';
        return view('auth.forgotpassword')->with('message', 'Invalid Mobile Number and Email Id');
    }
}
public function save_contact_query(Request $request )
    {
        // return $request;
        $contact = new ContactQuery();
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->contact = request('contact');
        $contact->industry = request('industry');
        $contact->message = request('message');
        $contact->save();
        // $industries= Industry::get();
        // $job = Job::orderBy('id', 'desc')->where('industry_type', $contact->industry)->get();

        // $content = [
        //     'name' => request('name'),
        //     'email' => request('email'),
        //     'job' => $job
        // ];

        //dispatch(new Sendshortlist($content));
// return  $contact;
        return 1;
    }
}
