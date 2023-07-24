<?php

namespace App\Http\Controllers;

use App\Models\CountryCode;
use App\Models\RegistrationModel;
use App\Models\ResumeCodeModel;
use App\Models\UserLogin_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
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
}
