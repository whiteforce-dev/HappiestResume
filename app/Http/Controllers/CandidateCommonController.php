<?php

namespace App\Http\Controllers;

use App\Models\SendSMS;
use App\Models\UserLogin_Model;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CandidateCommonController extends Controller
{
    public function recoverPassword()
    {
        // return $request;
       $username = request('username');


        if (is_numeric($username)) {
            $user = UserLogin_Model::where(['contact' => $username, 'is_active' => 1])->first();

            if (isset($user)) {
                try {
                    $user->password = Str::random(8);
                    $user->save();


                    $sms = new SendSMS();

                    $str = "Your password has been reset for happiestresume.com, please use $user->password password for login.";

                    $sms->send_sms($user->contact, $str);
                    return redirect()->back()->with('message', 'Your Password has been reset, please check your provided email or phone for newly generated password !!');
                } catch (Exception $e) {
                    ErrorLog::store_error($e->getMessage(), 'AdminController', 'store_import_products');
                    return redirect()->back()->with('error', "Sorry your password can not reset right now, Please try again later !!");
                }
            } else {

                return redirect()->back()->with('error', 'Your Email or Contact No. Do Not Exists or Blocked in Our System, Please Create New Account !!');
            }
        } else {
            $user = UserLogin_Model::where(['email' => $username, 'is_active' => 1])->first();
            // return $user->name;
            if (isset($user)) {
                try {
                    $user->password = Str::random(8);
                    $user->save();
                    $data = [];

                    // $sms = new SendSMS();

                    $str = "Your password has been reset for happiestresume.com, please use $user->password password for login.";

                    // $sms->send_sms($user->contact, $str);
                    // Mail::send(['text' => $str], $data, function ($message) {
                    //     $message->to('abc@gmail.com', 'Tutorials Point')->subject('Laravel Basic Testing Mail');
                    //     $message->from('xyz@gmail.com', 'Virat Gandhi');
                    // });

                    Mail::raw($str, function ($message) use ($user) {
                        $message->to($user->email, $user->name)->subject('Happiest Resume Reset Password');
                    });

                    return redirect()->back()->with('message', 'Your Password has been reset, please check your provided email or phone for newly generated password!!');
                } catch (Exception $e) {
                    return redirect()->back()->with('warning', 'Sorry your password can not reset right now, Please try again later !!');
                }
            } else {
                return redirect()->back()->with('error', 'Your Email or Contact No. Do Not Exists in Our System, Please Create New Account !!');
            }
        }
    }
}
