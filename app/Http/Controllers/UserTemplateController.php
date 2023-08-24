<?php

namespace App\Http\Controllers;

use App\Models\AppliedJob;
use App\Models\Job;
use App\Models\RegistrationModel;
use App\Models\ResumeSliderModel;
use App\Models\UserAchievementModel;
use App\Models\UserEducation;
use App\Models\UserProfile;
use App\Models\UserSkill;
use App\Models\UserSocial;
use App\Models\UserTemplateModel;
use App\Models\UserWorkExp;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PDF;
class UserTemplateController extends Controller
{
    public function resume_selected(Request $request, $id)
    {
        $resume = ResumeSliderModel::find(base64_decode($id));
        session()->put('resume', $resume);
        $user = RegistrationModel::find(session('user')->id);
        $user_work_exp = UserWorkExp::getUserCurrentWorking(session('user')->id, 1);
        $user_social = UserSocial::getUserSocial(session('user')->id);
        $user_educations = UserEducation::getUserEducation(session('user')->id);
        //        dd($user_educations);
        $user_achievements = UserAchievementModel::getUserAchievement(session('user')->id);
        $user_skills = UserSkill::getUserSkill(session('user')->id);
        $user_work_exps = UserWorkExp::getUserWorkExps(session('user')->id);
        $user_profile = UserProfile::getUserProfile(session('user')->id);
        //        return view('frontend.resume_new.resume_editor')->with(['resume' => $resume, 'user' => $user, 'user_work_exp' => $user_work_exp, 'user_social' => $user_social, 'user_education' => $user_education]);
        return view('frontend.resume_new.resume_editor', compact('resume', 'user', 'user_work_exp', 'user_social', 'user_social', 'user_educations', 'user_achievements', 'user_skills', 'user_work_exps', 'user_profile'));

        //        return view('frontend.resume.edit_resume')->with(['resume' => $resume]);
    }

    public static function slugify($slug)
    {

        // replace non letter or digits by -
        $slug = preg_replace('~[^\pL\d]+~u', '-', $slug);

        // transliterate
        if (function_exists('iconv')) {
            $slug = iconv('utf-8', 'us-ascii//TRANSLIT', $slug);
        }

        // remove unwanted characters
        $slug = preg_replace('~[^-\w]+~', '', $slug);

        // trim
        $slug = trim($slug, '-');

        // remove duplicate -
        $slug = preg_replace('~-+~', '-', $slug);

        // lowercase
        $slug = strtolower($slug);

        if (empty($slug)) {
            return 'n-a';
        }

        return $slug;
    }

    public function resume_link(Request $request, $slug, $uid)
    {
        //        $ipAddress = request()->ip();
        //        dd($ipAddress);
        $user = RegistrationModel::find(base64_decode($uid));
        if (isset($user)) {
            $user->profile_view_count += 1;
            $user->save();
            $resume = UserTemplateModel::where(['user_id' => $user->id])->first();
            session()->put('resume', $resume);
            $user_work_exp = UserWorkExp::getUserCurrentWorking($user->id, 1);
            $user_social = UserSocial::getUserSocial($user->id);
            $user_educations = UserEducation::getUserEducation($user->id);
            $user_achievements = UserAchievementModel::getUserAchievement($user->id);
            $user_skills = UserSkill::getUserSkill($user->id);
            $user_work_exps = UserWorkExp::getUserWorkExps($user->id);
            $user_profile = UserProfile::getUserProfile($user->id);
            $name = UserTemplateController::slugify($user->name);
            return view('frontend.resume_new.resume_share_link', compact('resume', 'user', 'user_work_exp', 'user_social', 'user_social', 'user_educations', 'user_achievements', 'user_skills', 'user_work_exps', 'user_profile', 'name', 'uid'));
        } else {
            return view('error.404');
        }

        //        return view('frontend.resume.edit_resume')->with(['resume' => $resume]);
    }

    public function view_pdf_resume(Request $request, $id)
    {

        //        $data = UserTemplateModel::find(base64_decode(base64_decode($id)));
        //        if (isset($data)) {
        //            return view('frontend.user_resume.user_resume_url')->with(['resume' => $data]);
        //        } else {
        //            return 'Route is invalid!';
        //        }

        $resume = UserTemplateModel::find(base64_decode(base64_decode($id)));
        if (isset($resume)) {
            session_start();
            //            dd($resume->template_html);
            //            $r_time = time();
            $pdf = App::make('dompdf.wrapper');
            $pdf->loadHTML('<h4>hellow</h4>');
            return $pdf->stream();
            //            $pdf = App::make('dompdf.wrapper');
            //            $pdf->loadHTML('<h4>hi</h4>');
            ////            $_SESSION['user_resume'] = $resume->template_html;
            ////            $pdf = PDF::loadView('frontend.resume.view_resume_test'); //Experience Page
            //            return $pdf->stream();
            ////            $resume_data = Resume::find($resume->id);
            //            $pdf = PDF::loadView('frontend.resume.resume_pdf'); //Experience Page
            ////            return $pdf->stream();
            //            return $pdf->download('invoice.pdf');
            //            $pdf->save("pdf/onepdf/$r_time.pdf");  //$resume_data->name_$resume_data->id.pdf
            //            chmod("uploads/onepdf/$r_time.pdf", 0777);
        }
    }

    public function edit_resume_selected(Request $request, $id)
    {
        //        $user_resume = UserTemplateModel::where(['user_id' => session('user')->id, 'template_id' => base64_decode($id)])->first();
        $resume = ResumeSliderModel::find(base64_decode($id));
        session()->put('resume', $resume);
        $user = RegistrationModel::find(session('user')->id);
        $user_work_exp = UserWorkExp::getUserCurrentWorking(session('user')->id, 1);
        $user_social = UserSocial::getUserSocial(session('user')->id);
        $user_educations = UserEducation::getUserEducation(session('user')->id);
        $user_achievements = UserAchievementModel::getUserAchievement(session('user')->id);
        $user_skills = UserSkill::getUserSkill(session('user')->id);
        $user_work_exps = UserWorkExp::getUserWorkExps(session('user')->id);
        $user_profile = UserProfile::getUserProfile(session('user')->id);
        //        dd(session('user')->id);
        //        return view('frontend.resume_new.resume_editor')->with(['resume' => $resume, 'user' => $user, 'user_work_exp' => $user_work_exp, 'user_social' => $user_social, 'user_education' => $user_education]);
        return view('frontend.resume_new.edit_resume_editor', compact('resume', 'user', 'user_work_exp', 'user_social', 'user_social', 'user_educations', 'user_achievements', 'user_skills', 'user_work_exps', 'user_profile'));
        //        return view('frontend.resume_new.edit_resume_editor')->with(['user_resume' => $user_resume]);
    }


    function user_resume_url($id)
    {
        $data = UserTemplateModel::find(base64_decode(base64_decode($id)));
        if (isset($data)) {
            return view('frontend.user_resume.user_resume_url')->with(['resume' => $data]);
        } else {
            return 'Route is invalid!';
        }
    }

    public function upload_achievement_image()
    {
        $myimage = request('upload_img');
        $char_count = strlen($myimage);
        if ($myimage != "" && $char_count > 500) {
            $path = 'public/achievement';
            list($type, $myimage) = explode(';', $myimage);
            list(, $myimage) = explode(',', $myimage);
            $data = base64_decode($myimage);
            $image_name = time() . '.png';
            $path = $path . '/' . $image_name;
            file_put_contents($path, $data);
            $data = ['is_saved' => 1, 'img' => url('/') . "/$path", 'save_path' => "achievement/$image_name"];
            return json_encode($data);
        } else {
            $data = ['is_saved' => 1, 'img' => url('public/front/images/add-achiveiment.jpg'), 'save_path' => "achievement/add-achiveiment.jpg"];
            return json_encode($data);
        }
    }


    public function get_resume_template()
    {
        //        $education_type = request('education_type');
        //        $education_icon = request('education_icon');
        //        return $_REQUEST;
        //        $education_school = request('education_school');
        //        $education_school_email = request('education_school_email');
        //        $education_school_board = request('education_school_board');
        //        return ($education_school);
        //        $education_school = explode(',', $education_school);
        $user_id = session('user')->id;

        $template_id = !empty(session('resume')->id) ? session('resume')->id : 1;
        //        $reqdata = request('getresume_html');
        //return $_REQUEST;

        if (isset($user_id) and isset($template_id)) {
            //            return 'ashish';
            $data = UserTemplateModel::where(['user_id' => $user_id, 'template_id' => $template_id])->first();

            if (isset($data)) {
                // dd('ashish');

                //                $data->template_html = $reqdata;
                $data->resume_date = request('resume_date');
                $data->resume_location = request('resume_location');
                $data->updated_at = Carbon::now('Asia/Kolkata')->format('Y-m-d H:i:s');
                //                $data->template_text = strip_tags($reqdata);
                $data->save();
                $user_login = RegistrationModel::find($user_id);
                if (isset($user_login)) {
                    $myimage = request('profile_pic');
                    $char_count = strlen($myimage);
                    if ($myimage != "" && $char_count > 500) {
                        $path = 'public/photos/';
                        list($type, $myimage) = explode(';', $myimage);
                        list(, $myimage) = explode(',', $myimage);
                        $data = base64_decode($myimage);
                        $image_name = time() . '.png';
                        $path = $path . '/' . $image_name;
                        file_put_contents($path, $data);
                        $user_login->image = "photos/$image_name";
                        $user_login->save();
                    }
                }
                $user_login->profile_complete_percent = request('profile_complete_percent') . "0";
                $user_login->save();

                UserEducation::save_education($user_id);
                UserAchievementModel::save_achievement($user_id);
                UserWorkExp::save_work_experience($user_id);
                //                $UserCurrentWorking = UserWorkExp::where(['user_id' => $user_id, 'is_current_working' => 1])->first();
                //                if (isset($UserCurrentWorking)) {
                //                    $UserCurrentWorking->designation = request('designation');
                //                    $UserCurrentWorking->title = request('title');
                //                    $UserCurrentWorking->save();
                //                }

                $UserSocial = UserSocial::where(['user_id' => $user_id])->first();
                if (isset($UserSocial)) {
                    $UserSocial->fb = request('fb');
                    $UserSocial->linkedin = request('linkedin');
                    $UserSocial->save();
                }

                $UserSkill = UserSkill::where(['user_id' => $user_id])->first();
                if (isset($UserSkill)) {
                    $UserSkill->skills = request('skills');
                    $UserSkill->save();
                }
                $user_profile = UserProfile::where(['user_id' => $user_id])->first();
                if (isset($user_profile)) {
                    $user_profile->current_location = request('current_location');
                    $user_profile->current_ctc = request('current_ctc');
                    $user_profile->total_exp = preg_replace('/[^0-9]/', '', request('total_exp')) == true ? floatval(preg_replace("/[^-0-9\.]/", "", request('total_exp'))) : 0;
                    $user_profile->notice_period = preg_replace('/[^0-9]/', '', request('notice_period')) == true ? preg_replace("/[^-0-9\.]/", "", request('notice_period')) : 0;
                    $user_profile->willing_to_relocate = request('willing_to_relocate');
                    $user_profile->age = request('age');
                    $user_profile->language = request('language');
                    $user_profile->gender = request('gender');
                    $user_profile->marital_status = request('marital_status');
                    $user_profile->interest_hobies = request('interest_hobies');
                    $user_profile->driving_licence = request('driving_licence');
                    $user_profile->communication_expertise = request('communication_expertise');    //17032020 AP
                    $user_profile->profile_complete_percent = request('profile_complete_percent') . "0";
                    $user_profile->save();
                }

                //                $user_social = UserSocial::getUserSocial(session('user')->id);
                //                $user_skills = UserSkill::getUserSkill(session('user')->id);
                //                $user_work_exps = UserWorkExp::getUserWorkExps(session('user')->id);
                //                $user_profile = UserProfile::getUserProfile(session('user')->id);

                session()->put('resume_id', $template_id);
                return base64_encode(base64_encode($template_id));
            } else {
                $data = new UserTemplateModel();
                $data->user_id = $user_id;
                $data->template_id = $template_id;
                //                $data->template_html = $reqdata;
                //                $data->resume_url = "$user_id.'/'.$template_id";

                //        $data->template_text = strip_tags($reqdata);
                $data->save();

                session()->put('resume_id', $data->id);
                return base64_encode(base64_encode($data->id));
            }
        }
    }

    public function generatePDF($uid)
    {
        $user = RegistrationModel::find(base64_decode($uid));
        if (isset($user)) {
            $resume = UserTemplateModel::where(['user_id' => $user->id])->first();
            session()->put('resume', $resume);
            $user_work_exp = UserWorkExp::getUserCurrentWorking($user->id, 1);
            $user_social = UserSocial::getUserSocial($user->id);
            $user_educations = UserEducation::getUserEducation($user->id);
            $user_achievements = UserAchievementModel::getUserAchievement($user->id);
            $user_skills = UserSkill::getUserSkill($user->id);
            $user_work_exps = UserWorkExp::getUserWorkExps($user->id);
            $user_profile = UserProfile::getUserProfile($user->id);
            $name = UserTemplateController::slugify($user->name);
            //            $data = ['user' => $user, 'user_work_exp' => $user_work_exp, 'user_social' => $user_social, 'user_educations' => $user_educations, 'user_achievements' => $user_achievements, 'user_skills' => $user_skills, 'user_work_exps' => $user_work_exps, 'user_profile' => $user_profile, 'name' => $name];
            $my_pdf_path_for_example = "$name" . '_' . rand(1000, 9999) . '.pdf';
            // inhibit DOMPDF's auto-loader

            //include the DOMPDF config file (required)
            //            $pdf = App::make('snappy.pdf.wrapper');
            //            $pdf->loadHTML('<h1>Test</h1>');
            //            return $pdf->inline();
            //            $pdf = PDF::loadView('pdf.invoice', $data);
            //            $pdf = PDF::loadView('frontend.resume_new.resume_pdf', compact('resume', 'user', 'user_work_exp', 'user_social', 'user_social', 'user_educations', 'user_achievements', 'user_skills', 'user_work_exps', 'user_profile'));
            //            return $pdf->stream($my_pdf_path_for_example);

            $pdf = App::make('dompdf.wrapper');
            //            $pdf->loadHTML('<h1>Test</h1>');
            //            return $pdf->stream();
            //            $client = new PDFModel();
            //            $client->convertHtml('https://happiestresume.com/resume/nimish-khandelwal/MjY=', 'example.pdf');
            //            return PDF::loadFile(public_path().'/resume_link.html')->stream('download.pdf');
            //            return view('frontend.resume_new.resume_pdf', compact('resume', 'user', 'user_work_exp', 'user_social', 'user_social', 'user_educations', 'user_achievements', 'user_skills', 'user_work_exps', 'user_profile'));

            $pdf = PDF::loadView('frontend.resume_new.resume_pdf', compact('resume', 'user', 'user_work_exp', 'user_social', 'user_social', 'user_educations', 'user_achievements', 'user_skills', 'user_work_exps', 'user_profile'));
            //            $pdf->set_options('tempDir','/home/admin/web/happiestresume.com/public_html:/home/admin/tmp');
            //            $pdf->save('public/_filename.pdf');

            //            $pdf->setLogOutputFile(storage_path('tmp/'). "log.htm");

            return $pdf->stream($my_pdf_path_for_example);
        } else {
        }
    }

    public function generatePDFDownload($uid)
    {
        $user = RegistrationModel::find(base64_decode($uid));
        if (isset($user)) {
            $resume = UserTemplateModel::where(['user_id' => $user->id])->first();
            session()->put('resume', $resume);
            $user_work_exp = UserWorkExp::getUserCurrentWorking($user->id, 1);
            $user_social = UserSocial::getUserSocial($user->id);
            $user_educations = UserEducation::getUserEducation($user->id);
            $user_achievements = UserAchievementModel::getUserAchievement($user->id);
            $user_skills = UserSkill::getUserSkill($user->id);
            $user_work_exps = UserWorkExp::getUserWorkExps($user->id);
            $user_profile = UserProfile::getUserProfile($user->id);
            $name = UserTemplateController::slugify($user->name);
            //            $data = ['user' => $user, 'user_work_exp' => $user_work_exp, 'user_social' => $user_social, 'user_educations' => $user_educations, 'user_achievements' => $user_achievements, 'user_skills' => $user_skills, 'user_work_exps' => $user_work_exps, 'user_profile' => $user_profile, 'name' => $name];
            $my_pdf_path_for_example = "$name" . '_' . rand(1000, 9999) . '.pdf';
            // inhibit DOMPDF's auto-loader

            //include the DOMPDF config file (required)
            //            $pdf = App::make('snappy.pdf.wrapper');
            //            $pdf->loadHTML('<h1>Test</h1>');
            //            return $pdf->inline();
            //            $pdf = PDF::loadView('pdf.invoice', $data);
            $pdf = App::make('dompdf.wrapper');
            //            $pdf->render();
            $pdf = PDF::loadView('frontend.resume_new.resume_pdf', compact('resume', 'user', 'user_work_exp', 'user_social', 'user_social', 'user_educations', 'user_achievements', 'user_skills', 'user_work_exps', 'user_profile'));
            //            return $pdf->stream($my_pdf_path_for_example);
            //            $pdf = \PDF::setOptions([
            //                'logOutputFile' => storage_path('logs/log.htm'),
            //                'tempDir' => storage_path('logs/')
            //            ])->loadView('orders.pdf.order', compact('order'));
            //            $pdf = PDF::setOptions([
            //                'logOutputFile' => storage_path('logs/log.htm'),
            //                'tempDir' => storage_path('logs/')
            //            ])->loadView('frontend.resume_new.resume_pdf', compact('resume', 'user', 'user_work_exp', 'user_social', 'user_social', 'user_educations', 'user_achievements', 'user_skills', 'user_work_exps', 'user_profile'));
            //            $pdf->render();
            return $pdf->stream($my_pdf_path_for_example);
            $pdf = App::make('dompdf.wrapper');
            //            $pdf->loadHTML('<h1>Test</h1>');
            //            return $pdf->stream();
            //            $client = new PDFModel();
            //            $client->convertHtml('https://happiestresume.com/resume/nimish-khandelwal/MjY=', 'example.pdf');
            //            return PDF::loadFile(public_path().'/resume_link.html')->stream('download.pdf');
            //            return view('frontend.resume_new.resume_pdf', compact('resume', 'user', 'user_work_exp', 'user_social', 'user_social', 'user_educations', 'user_achievements', 'user_skills', 'user_work_exps', 'user_profile'));

            $pdf = PDF::loadView('frontend.resume_new.resume_pdf', compact('resume', 'user', 'user_work_exp', 'user_social', 'user_social', 'user_educations', 'user_achievements', 'user_skills', 'user_work_exps', 'user_profile'));
            //            $pdf->set_options('tempDir','/home/admin/web/happiestresume.com/public_html:/home/admin/tmp');
            //            $pdf->save('public/_filename.pdf');

            //            $pdf->setLogOutputFile(storage_path('tmp/'). "log.htm");

            return $pdf->stream($my_pdf_path_for_example);
        } else {
        }
    }

    public function update_user_resume()
    {
        //        print_r($_REQUEST);
        $user_id = ((request('uid')));
        $template_id = (request('rid'));
        $reqdata = request('getresume_html');

        //        print_r($user_id);
        //        print_r(base64_decode($template_id));
        //        if (isset($user_id) and isset($template_id)) {
        //            return 'ashish';
        $data = UserTemplateModel::where(['id' => $user_id, 'template_id' => $template_id])->first();
        //        print_r($data);
        if (isset($data)) {
            $data->template_html = $reqdata;
            //            print_r($template_id);
            $data->updated_at = Carbon::now()->format('Y-m-d H:i:s');
            $data->save();

            session()->put('resume_id', $data->id);
            //            print_r(session('resume_id'));
            return base64_encode(base64_encode($data->id));
        }
        //        }
    }

    //

    function resume_print()
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_customer_data_to_html());
        return $pdf->stream();
    }

    function convert_customer_data_to_html()
    {
        //        $customer_data = $this->get_customer_data();
        $output = "<div style= 'font-family:Calisto MT;width: 100%;background-color: #ffffff;text-align: center;margin: 0px
auto;position: relative; ' class= 'email_innerbody ' id= 'resume_body '> <table style= 'width: 100%;text-align:
left;display: inline-block;table-layout: fixed; '> <tbody> <tr style= 'height: 15px;margin-bottom: 20px;width:
100%; '> <td class= 'top-color ' style= 'background: #f8e71c;width: 20%; ' colspan= '1 '></td> <td class= 'topcolor ' style= 'background: #4285f4;width: 20%; ' colspan= '1 '></td> <td class= 'top-color ' style= '
background: #ff8800;width: 20%; ' colspan= '1 '></td> <td class= 'top-color ' style= 'background:
#4285f4;width: 20%; ' colspan= '1 '></td> <td class= 'top-color ' style= 'background: #f8e71c;width: 20%; '
                                           colspan= '1 '></td> </tr> <tr> <td colspan= '1 ' class= 'photo ' style= 'width: 150px; '> <div style= 'width:
100%;position: relative;max-width: 125px; '> <img class= 'global_img ' id= 'profile_pic '
                                                 src= 'http://localhost:8000/images/d.png ' alt= 'image ' style= 'border: solid 5px #249991;border-radius:
50%;padding: 5px;margin-top: 10px;width: 125px;height: 125px; '> <input class= 'file_upload ' type= 'file '
                                                                       onchange= 'ChangeSetImage(this) '> </div> </td> <td colspan= '3 '> <div><h2 contenteditable= 'true '
                                                                                                                                               style= 'color: #3b658a;outline: none '> <font style= 'font-size: 30px; '> Admin </font> </h2> </div>
                <div><h6 class= 'editable ' contenteditable= 'true ' style= 'position: relative;margin-top: 0px;outline: none; '
                         spellcheck= 'false '><b>Sr. UI/UX Developer</b></h6></div> </td> <td colspan= '1 '></td> <!-- <td
colspan= '1 ' style= 'text-align: right; '><b class= 'bold '--> <!-- style= 'width: 100%;display: inlineblock; '>Email--> <!-- : </b>--> <!-- <b class= 'bold '>Mobile : </b>--> <!-- </td>--> <!-- <td colspan= '1 '
style= 'padding-left: 15px; '>--> <!-- <span contenteditable= 'true ' style= 'width: 100%;display: inlineblock; '>pinkukesharwani89@gmail.com</span>--> <!-- <span contenteditable= 'true ' style= 'width:
100%;display: inline-block; '>6263626505</span>--> <!-- </td>--> </tr> <tr> <td colspan= '5 '> <hr> </td>
        </tr> <tr onclick= 'selectedrow(this); ' class= ' '> <td colspan= '5 '> <div class= 'pencil_hoverthis '
                                                                               contenteditable= 'true ' unselectable= 'on ' style= 'padding: 15px;background: #f5f5f5;display: inlineblock;position: relative;z-index: 5;outline: none;margin-bottom: 15px;width: 100%; '> <span
                            class= 'number_bullet_container '> <p style= 'font-size: 14px;margin: 0px '>I am a highly competent IT
professional with a proven track record in designing websites, networking and managing databases. I have
strong technical skills as well as excellent interpersonal skills, enabling me to interact with a wide range of
clients.</p> </span> </div> </td> </tr> <tr> <td colspan= '5 '> <h3 style= 'font-family: Calibri;texttransform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 15px 0px 25px 0px; '>
                    Profile</h3> </td> </tr> <tr class= ' '> <td colspan= '5 '> <div contenteditable= 'true '
                                                                                 class= 'pencil_hoverthis ' unselectable= 'on ' style= 'padding: 15px;background: #f5f5f5;position: relative;zindex: 5;outline: none; '> <h5 style= 'font-family: Calibri;font-size: 22px;font-weight: bold;padding-bottom:
3px;border-bottom: solid thin #cccccc;margin-bottom: 5px; ' contenteditable= 'false '><font
                                color= '#3b658a '>WhatsApp/Contact No.</font></h5> <p>6263626505</p> <h5 contenteditable= 'false '
                                                                                                       style= 'font-family: Calibri;font-size: 22px;font-weight: bold;padding-bottom: 3px;border-bottom: solid thin
#cccccc;margin-bottom: 5px; '> <font color= '#3b658a '>Email Id</font></h5> <p> admin@saisun.com
                    </p> <h5 contenteditable= 'false ' style= 'font-family: Calibri;font-size: 22px;font-weight: bold;paddingbottom: 3px;border-bottom: solid thin #cccccc; '> <font color= '#3b658a '>Find Me On</font></h5> </div>
            </td> </tr> <tr> <td colspan= '5 '> <div style= 'background: #f5f5f5;margin-top:-5px;margin-bottom:
20px; '> <ul class= 'ul-social-media ' id= 'icon_social ' onclick= 'OpenSocialtab(); '> <li datawhichone= 'facebook ' style= 'display:inline-block;list-style:none; '><a href= 'javascript:void(); '><img
                                        src= 'http://saisunjobs.com/webresume/images/editor/facebook.png ' style= 'width:35px '></a></li> <li datawhichone= 'twitter ' style= 'display:inline-block;list-style:none; '><a href= 'javascript:void(); '><img
                                        src= 'http://saisunjobs.com/webresume/images/editor/twitter.png ' style= 'width:35px '></a></li> <li datawhichone= 'linkedin ' style= 'display:inline-block;list-style:none; '><a href= 'javascript:void(); '><img
                                        src= 'http://saisunjobs.com/webresume/images/editor/linkedin.png ' style= 'width:35px '></a></li> </ul>
                </div> </td> </tr> <tr onclick= 'selectedrow(this); ' class= ' '> <td colspan= '5 '> <h3 style= 'font-family:
Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 15px 0px 10px
0px; '> Education </h3> </td> </tr> <tr> <td colspan= '5 '> <ul class= 'timeline ' style= 'display: inlineblock;width: 90%;list-style: none;padding: 0px;margin: 20px 0px 0px 5%; '> <li
                            onclick= 'selectedrow_timeline(this); ' class= ' '> <div style= 'display: inline-block;position: relative;width:
100%; '> <div style= 'width: 15%;float: left;z-index: 10;text-align: center;position: relative; '> <span
                                        class= 'circle blue darken-2 z-depth-1-half ' style= ' color: #ffffff; border-radius: 50%; z-index: 10; width:
50px; height: 50px; display: inline-block; line-height: 50px; font-size: 28px; background: #1a7fd0
!important;  '> <i class= 'mdi mdi-tie ' aria-hidden= 'true ' style= '  '></i></span> </div> <div
                                    class= 'editable_container pencil_hoverthis ' contenteditable= 'true ' unselectable= 'on ' style= 'marginbottom: 20px;width: 80%;float: left;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0
rgba(0,0,0,.12)!important;outline: none; '> <h3 style= 'font-family: corbel; color: rgb(255, 255, 255);
padding: 10px; background: rgb(255, 136, 0); '> Hitkarini Higher Secondary School-2004</h3> <p
                                        style= 'padding: 15px;color: #666666; '> ?’th from Hitkarini Higher Sec. School Jabalpur in 2004 from MP
                                    Board.</p> </div> <div style= 'position: absolute;width: 2px;z-index: 1;left: 7.5%;height:
100%;background: #1a7fd0;top: 20px;-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0
rgba(0, 0, 0, .15);box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15); '></div>
                        </div> </li> <li onclick= 'selectedrow_timeline(this); ' class= ' '> <div style= 'display: inline-block;position:
relative;width: 100%; '> <div style= 'width: 15%;float: left;z-index: 10;text-align: center;position: relative; '>
<span class= 'circle blue darken-2 z-depth-1-half ' style= ' color: #ffffff; border-radius: 50%; z-index: 10;
width: 50px; height: 50px; display: inline-block; line-height: 50px; font-size: 28px; background: #1a7fd0
!important;  '> <i class= 'mdi mdi-tie ' aria-hidden= 'true ' style= '  '></i></span> </div> <div
                                    class= 'editable_container pencil_hoverthis ' contenteditable= 'true ' unselectable= 'on ' style= 'marginbottom: 20px;width: 80%;float: left;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0
rgba(0,0,0,.12)!important;outline: none; '> <h3 style= 'font-family: corbel;padding: 10px;margin: 0px;color:
#ffffff;background: #ff8800;/* background: #666666; */ '> Hitkarini Higher Secondary School-2006</h3>
                                <p style= 'padding: 15px;color: #666666; '><span style= 'color: rgb(33, 37, 41); font-size: 14.4px; '>XII’th
from Hitkarini Higher Sec. School Jabalpur in 2006 from MP Board.</span><br> </p> </div> <div
                                    style= 'position: absolute;width: 2px;z-index: 1;left: 7.5%;height: 100%;background: #1a7fd0;top: 20px;-
webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);box-shadow: 0 5px 11px
0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15); '></div> </div> </li> <li
                            onclick= 'selectedrow_timeline(this); ' class= 'selectedrow_timeline '> <div style= 'display: inlineblock;position: relative;width: 100%; '> <div style= 'width: 15%;float: left;z-index: 10;text-align:
center;position: relative; '> <span class= 'circle blue darken-2 z-depth-1-half ' style= ' color: #ffffff; borderradius: 50%; z-index: 10; width: 50px; height: 50px; display: inline-block; line-height: 50px; font-size:
28px; background: #1a7fd0 !important;  '> <!-- <i class= 'mdi mdi-certificate ' aria-hidden= 'true '--> <!--
style= ' '></i>--> <img src= 'http://localhost:8000/front/images/degree-education.png ' style= 'width: 40px; '>
</span> </div> <div class= 'editable_container pencil_hoverthis ' contenteditable= 'true ' unselectable= 'on '
                    style= 'margin-bottom: 20px;width: 80%;float: left;box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0
rgba(0,0,0,.12)!important;outline: none; '> <h3 style= 'font-family: corbel;padding: 10px;margin: 0px;color:
#ffffff;background: #ff8800;/* background: #666666; */ '> Collage Of Computer &amp; Science -
                                    2009</h3> <p style= 'padding: 15px;color: #666666; '><b style= 'margin: 0px 0px 5px 0px;display: inlineblock;width: 100%; '><a href= 'http:// '>www.collagewebsite.com</a></b> <span style= 'color: rgb(33, 37,
41); font-size: 14.4px; '>BCA from CCSE. College Jabalpur in 2009 from MCRPV.</span><br> </p>
                            </div> <div style= 'position: absolute;width: 2px;z-index: 1;left: 7.5%;height: 100%;background:
#1a7fd0;top: 20px;-webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15);boxshadow: 0 5px 11px 0 rgba(0, 0, 0, .18), 0 4px 15px 0 rgba(0, 0, 0, .15); '></div> </div> </li> <li class= ' '>
                        <div style= 'display: inline-block;position: relative;width: 100%; '> <div style= 'width: 15%;float: left;zindex: 10;text-align: center;position: relative; '> <span class= 'circle blue darken-2 z-depth-1-half ' style= '
color: #ffffff; border-radius: 50%; z-index: 10; width: 50px; height: 50px; display: inline-block; line-height:
50px; font-size: 28px; background: #1a7fd0 !important;  '> <i class= 'mdi mdi-school ' ariahidden= 'true '></i></span> </div> <div class= 'editable_container pencil_hoverthis ' contenteditable= 'true '
                                                                                                                              unselectable= 'on ' style= 'margin-bottom: 5px;width: 80%;float: left;box-shadow: 0 2px 5px 0
rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12)!important;outline: none; '> <h3 style= 'font-family:
corbel;padding: 10px;margin: 0px;color: #ffffff;background: #ff8800;/* background: #666666; */ '> Gyan
                                    Ganga Collage Of Technology-2013</h3> <p style= 'padding: 15px;color: #666666; '><b style= 'margin:
0px 0px 5px 0px;display: inline-block;width: 100%; '><a
                                                href= 'http:// '>www.collagewebsite.com</a></b>&nbsp;MCA<span style= 'color: rgb(33, 37, 41); font-size:
14.4px; '>&nbsp;from Gyan Ganga Collage of Technology Jabalpur in 2013 from MP Board.</span><br>
                                </p> </div> </div> </li> </ul> </td> </tr> <tr onclick= 'selectedrow(this); ' class= ' '> <td colspan= '5 '> <h3
                        style= 'font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight: 700;font-size:
30px;margin: 25px 0px; '> Achievement </h3> </td> </tr> <tr onclick= 'selectedrow(this); ' class= ' '> <td
                    colspan= '1 '> <div style= 'width: 100%;position: relative;max-width: 150px;display: inline-block '> <img
                            class= 'global_img ' src= 'http://localhost:8000/front/images/add-achiveiment.jpg ' style= 'width:
150px;float:left;margin-bottom: 15px; ' align= 'left '> <input class= 'file_upload ' type= 'file '
                                                            onchange= 'ChangeSetImage(this) '> </div> </td> <td valign= 'top ' colspan= '4 '> <div
                        class= 'pencil_hoverthis ' contenteditable= 'true ' unselectable= 'on ' style= 'background-color:#f5f5f5;fontfamily: Calibri;padding: 15px;position: relative;outline: none; '> <h3 style= ' margin-bottom: 5px;  '> Give
                        the achievement title</h3> <span class= 'number_bullet_container '> <p style= ' margin: 0px;  '>Your
educational achievements should include any academic awards received at graduation, awards from or
participation in any clubs or organizations, leadership positions or scholarly works related to your major or
the job for which you are applying.</p> </span> </div> </td> </tr> <tr onclick= 'selectedrow(this); '
                                                                       class= ' '> <td colspan= '5 '> <h3 style= 'font-family: Calibri;text-transform: uppercase;color: #2a5479;fontweight: 700;font-size: 30px;margin: 15px 0px 25px 0px; '> Work Experience</h3> </td> </tr> <tr
                onclick= 'selectedrow(this); ' class= ' '> <td colspan= '5 '> <div class= 'pencil_hoverthis '
                                                                             contenteditable= 'true ' unselectable= 'on ' style= 'padding: 15px;background: #f5f5f5;display: inlineblock;position: relative;z-index: 5;outline: none;margin-bottom: 15px;width: 100%; '> <h5 style= 'fontfamily: Calibri;font-size: 26px;font-weight: bold;border-bottom: solid thin #cccccc;padding-bottom: 5px; '>
                        Enter your company name</h5> <b style= 'display: inline-block;width: 100%;margin: 8px 0px 3px
0px; '><a href= 'http:// '>www.companywebsite.com</a></b> <b style= 'display: inline-block;paddingbottom: 5px; '>Sr. Web Designer - June 2019 - Current</b> <span class= 'number_bullet_container '> <p
                                style= 'margin: 0px; '>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
galley of type and scrambled it to make a type specimen book.</p> </span> </div> </td> </tr> <tr> <td
                    colspan= '5 '> <h3 style= 'font-family: Calibri;text-transform: uppercase;color: #2a5479;font-weight:
700;font-size: 30px;margin: 15px 0px 25px 0px; '> Key Skills</h3> </td> </tr> <tr
                onclick= 'selectedrow(this); ' class= 'selectedrow '> <td colspan= '5 '> <div class= 'pencil_hoverthis '
                                                                                        contenteditable= 'true ' unselectable= 'on ' style= 'padding: 15px;background: #f5f5f5;display: inlineblock;position: relative;z-index: 5;outline: none;margin-bottom: 15px;width: 100%; '> <h5 style= 'fontfamily: Calibri;font-size: 26px;margin-bottom: 8px; font-weight: bold;padding-bottom: 10px;border-bottom:
solid thin #cccccc; '> Skills</h5> <span class= 'number_bullet_container '> <p style= 'margin:0px; '>OpenMindedness, Empathy, Respect, Listening, Delegating, Positivity, Public Speaking, Teamwork, Time
Management.</p> </span> </div> </td> </tr> <tr> <td colspan= '5 '> <h3 style= 'font-family: Calibri;texttransform: uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 15px 0px 25px 0px; '>
                    Personal Details</h3> </td> </tr> <tr> <td colspan= '5 '> <table class= 'personal_table ' style= 'width:
100%;position: relative;border: solid thin #e1e1e1;outline: none; '> <tbody> <tr
                            onclick= 'personal_rowclick(this); '> <td style= 'font-family: Calibri;width: 30%;padding:10px;background:
#f7f7f7;border: solid thin #e1e1e1;font-weight: bold; '> Current Location </td> <td contenteditable= 'true '
                                                                                   unselectable= 'on ' class= 'edit_perblock ' style= 'border-bottom: solid thin #e1e1e1;padding: 10px
15px;outline: none; '> </td> <td style= ' border-bottom: solid thin #e1e1e1; padding: 5px 10px 0px 0px;
width: 40px; text-align: right;  '> <button type= 'button ' contenteditable= 'false ' unselectable= 'on '
                                           class= 'btn-changeimg btn btn-danger per_delete waves-effect waves-light '
                                           onclick= 'removeblock_per(this); ' title= 'Remove block '><i class= 'mdi mdi-delete '> </i></button> </td>
                    </tr> <tr onclick= 'personal_rowclick(this); '> <td style= 'font-family: Calibri;width:
30%;padding:10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold; '> Current CTC
                            (LPA) </td> <td contenteditable= 'true ' unselectable= 'on ' class= 'edit_perblock ' style= 'border-bottom:
solid thin #e1e1e1;padding: 10px 15px;outline: none; '> </td> <td style= 'border-bottom: solid thin
#e1e1e1;padding: 5px 10px 0px 0px;width: 40px;text-align: right; '> <button type= 'button '
                                                                           contenteditable= 'false ' unselectable= 'on ' class= 'btn-changeimg btn btn-danger per_delete waves-effect
waves-light ' onclick= 'removeblock_per(this); ' title= 'Remove block '><i class= 'mdi mdi-delete '>
                                </i></button> </td> </tr> <tr onclick= 'personal_rowclick(this); '> <td style= 'font-family: Calibri;width:
30%;padding: 10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold; '> Total Experience
                        </td> <td contenteditable= 'true ' unselectable= 'on ' class= 'edit_perblock ' style= 'border-bottom: solid thin
#e1e1e1;padding: 10px 15px;outline: none; '> </td> <td style= ' border-bottom: solid thin #e1e1e1; padding:
5px 10px 0px 0px; width: 40px; text-align: right;  '> <button type= 'button ' contenteditable= 'false '
                                                             unselectable= 'on ' class= 'btn-changeimg btn btn-danger per_delete waves-effect waves-light '
                                                             onclick= 'removeblock_per(this); ' title= 'Remove block '><i class= 'mdi mdi-delete '> </i></button> </td>
                    </tr> <tr onclick= 'personal_rowclick(this); '> <td style= 'font-family: Calibri;width: 30%;padding:
10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold; '> Notice Period </td> <td
                                contenteditable= 'true ' unselectable= 'on ' class= 'edit_perblock ' style= 'border-bottom: solid thin
#e1e1e1;padding: 10px 15px;outline: none; '> </td> <td style= ' border-bottom: solid thin #e1e1e1; padding:
5px 10px 0px 0px; width: 40px; text-align: right;  '> <button type= 'button ' contenteditable= 'false '
                                                             unselectable= 'on ' class= 'btn-changeimg btn btn-danger per_delete waves-effect waves-light '
                                                             onclick= 'removeblock_per(this); ' title= 'Remove block '><i class= 'mdi mdi-delete '> </i></button> </td>
                    </tr> <tr onclick= 'personal_rowclick(this); ' class= ' '> <td style= 'font-family: Calibri;width: 30%;padding:
10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold; '> Willing to Relocate </td> <td
                                contenteditable= 'true ' unselectable= 'on ' class= 'edit_perblock ' style= 'border-bottom: solid thin
#e1e1e1;padding: 10px 15px;outline: none; '> </td> <td style= ' border-bottom: solid thin #e1e1e1; padding:
5px 10px 0px 0px; width: 40px; text-align: right;  '> <button type= 'button ' contenteditable= 'false '
                                                             unselectable= 'on ' class= 'btn-changeimg btn btn-danger per_delete waves-effect waves-light '
                                                             onclick= 'removeblock_per(this); ' title= 'Remove block '><i class= 'mdi mdi-delete '> </i></button> </td>
                    </tr> <tr onclick= 'personal_rowclick(this); ' class= ' '> <td style= 'font-family: Calibri;width: 30%;padding:
10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold; '> Age </td> <td
                                contenteditable= 'true ' unselectable= 'on ' class= 'edit_perblock ' style= 'border-bottom: solid thin
#e1e1e1;padding: 10px 15px;outline: none; '> </td> <td style= ' border-bottom: solid thin #e1e1e1; padding:
5px 10px 0px 0px; width: 40px; text-align: right;  '> <button type= 'button ' contenteditable= 'false '
                                                             unselectable= 'on ' class= 'btn-changeimg btn btn-danger per_delete waves-effect waves-light '
                                                             onclick= 'removeblock_per(this); ' title= 'Remove block '><i class= 'mdi mdi-delete '> </i></button> </td>
                    </tr> <tr onclick= 'personal_rowclick(this); '> <td style= 'font-family: Calibri;width: 30%;padding:
10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold; '> Language </td> <td
                                contenteditable= 'true ' unselectable= 'on ' class= 'edit_perblock ' style= 'border-bottom: solid thin
#e1e1e1;padding: 10px 15px;outline: none; '> </td> <td style= ' border-bottom: solid thin #e1e1e1; padding:
5px 10px 0px 0px; width: 40px; text-align: right;  '> <button type= 'button ' contenteditable= 'false '
                                                             unselectable= 'on ' class= 'btn-changeimg btn btn-danger per_delete waves-effect waves-light '
                                                             onclick= 'removeblock_per(this); ' title= 'Remove block '><i class= 'mdi mdi-delete '> </i></button> </td>
                    </tr> <tr onclick= 'personal_rowclick(this); '> <td style= 'font-family: Calibri;width: 30%;padding:
10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold; '> Gender </td> <td
                                contenteditable= 'true ' unselectable= 'on ' class= 'edit_perblock ' style= 'border-bottom: solid thin
#e1e1e1;padding: 10px 15px;outline: none '> </td> <td style= 'border-bottom: solid thin #e1e1e1;padding:
5px 10px 0px 0px;width: 40px; text-align: right;  '> <button type= 'button ' contenteditable= 'false '
                                                            unselectable= 'on ' class= 'btn-changeimg btn btn-danger per_delete waves-effect waves-light '
                                                            onclick= 'removeblock_per(this); ' title= 'Remove block '><i class= 'mdi mdi-delete '> </i></button> </td>
                    </tr> <tr onclick= 'personal_rowclick(this); '> <td style= 'font-family: Calibri;width: 30%;padding:
10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold; '> Married Status </td> <td
                                contenteditable= 'true ' unselectable= 'on ' class= 'edit_perblock ' style= 'border-bottom: solid thin
#e1e1e1;padding: 10px 15px;outline: none; '> </td> <td style= ' border-bottom: solid thin #e1e1e1; padding:
5px 10px 0px 0px; width: 40px; text-align: right;  '> <button type= 'button ' contenteditable= 'false '
                                                             unselectable= 'on ' class= 'btn-changeimg btn btn-danger per_delete waves-effect waves-light '
                                                             onclick= 'removeblock_per(this); ' title= 'Remove block '><i class= 'mdi mdi-delete '> </i></button> </td>
                    </tr> <tr onclick= 'personal_rowclick(this); ' class= ' '> <td style= 'font-family: Calibri;width: 30%;padding:
10px;background: #f7f7f7;border: solid thin #e1e1e1;font-weight: bold; '> Hobby / Interest </td> <td
                                contenteditable= 'true ' unselectable= 'on ' class= 'edit_perblock ' style= 'border-bottom: solid thin
#e1e1e1;padding: 10px 15px;outline: none; '> </td> <td style= 'border-bottom: solid thin #e1e1e1;padding:
5px 10px 0px 0px;width: 40px;text-align: right; '> <button type= 'button ' contenteditable= 'false '
                                                          unselectable= 'on ' class= 'btn-changeimg btn btn-danger per_delete waves-effect waves-light '
                                                          onclick= 'removeblock_per(this); ' title= 'Remove block '><i class= 'mdi mdi-delete '> </i></button> </td>
                    </tr> </tbody> </table> </td> </tr> <tr> <td colspan= '5 '> <h3 style= 'font-family: Calibri;text-transform:
uppercase;color: #2a5479;font-weight: 700;font-size: 30px;margin: 20px 0px; '> Declaration</h3> </td>
        </tr> <tr> <td colspan= '5 '> <div class= 'pencil_hoverthis desclaration_div ' contenteditable= 'true '
                                         unselectable= 'on ' style= 'padding: 10px 15px;background: #f5f5f5;display: inline-block;position: relative;zindex: 5;outline: none;width: 100%;margin-bottom: 10px; ' autocomplete= 'off ' spellcheck= 'false '> <div
                            class= 'form-check ' style= 'padding: 0px; '> <input type= 'checkbox ' class= 'form-check-input
desclaration_checkbox ' id= 'materialUnchecked '> <label class= 'form-check-label '
                                                      for= 'materialUnchecked ' style= 'float: left; '></label> <p style= 'margin: 0px;display: inline-block;margintop: 0px;float: left; '> I hereby declare that the above information is true to best of my knowledge.</p>
                    </div> </div><grammarly-extension class= '_1KJtL ' style= 'position: absolute; top: 0px; left: 0px; pointerevents: none; z-index: 5; '><div data-grammarly-part= 'highlights ' class= 'u_fNK ' style= 'position: absolute;
top: 0px; left: 0px; '><div style= 'box-sizing: content-box; top: 2632px; left: 1px; width: 983px; height:
45px; position: relative; pointer-events: none; overflow: hidden; border: 0px; border-radius: 0px; padding:
0px; margin: 0px; '><div style= 'position: absolute; top: 0px; left: 0px; '><div style= 'height: 905px; width:
2608px; '></div><div style= 'position: absolute; top: 0px; left: 0px; height: 905px; width:
2608px; '></div></div></div></div><div data-grammarly-part= 'button ' class= 'u_fNK ' style= 'position:
absolute; top: 0px; left: 0px; '><div style= 'box-sizing: content-box; top: 2632px; left: 1px; width: 983px;
height: 45px; position: relative; pointer-events: none; overflow: hidden; border: 0px; border-radius: 0px;
padding: 0px; margin: 0px; '><div style= 'position: absolute; transform: translate(-100%, -100%); top: 35px;
left: 968px; width: auto; height: auto; pointer-events: all; '><div style= 'display: flex; flex-direction:
row; '><div style= 'position: relative; '></div><div><div class= '_5WizN _37oOc _1QzSN Vxw1H '><div
                                                    class= '_3YmQx '><div title= 'Protected by Grammarly '
                                                                        class= '_3QdKe '>&nbsp;</div></div></div></div></div></div></div></div></grammarly-extension>
            </td> </tr> <tr> <td colspan= '2 ' style= 'text-align: left;max-width: 100px !important; '><b class= 'bold '
                                                                                                      style= 'font-family: Calibri;display: inline-block;margin-right: 10px; '>Date :</b> <span
                        contenteditable= 'true ' style= '/* width: 100%; */display: inline-block;outline: none; '>12-08-2019</span>
            </td> <td colspan= '3 ' style= 'padding-left: 15px; '> <b class= 'bold ' style= 'font-family: Calibri;display:
inline-block;margin-right: 10px; '>Place : </b> <span contenteditable= 'true ' style= 'display: inlineblock;outline: none; '>Jabalpur</span> </td> </tr> </tbody> </table> </div>";
        return $output;
    }


    public function apply_job()
    {
        $job_id = request('job_id');
        $user_id = request('user_id');
        $job = Job::find($job_id);
        $check_applied = AppliedJob::where(['job_id' => $job_id, 'user_id' => $user_id])->first();
        if (isset($job) && !isset($check_applied)) {
            $apply_job = new AppliedJob();
            $apply_job->job_id = $job_id;
            $apply_job->user_id = $user_id;
            $apply_job->applied_date = Carbon::now('Asia/Kolkata');
            $apply_job->save();
            return "applied";
        } else {
            return "already";
        }
    }
}
