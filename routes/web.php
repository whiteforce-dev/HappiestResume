<?php

use App\Http\Controllers\ApiAppController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BuildResumeController;
use App\Http\Controllers\CandidateCommonController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobResponseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::any('privacy-policy',function(){
    return view('privacyPolicy');
});
Route::any('term-Condition',function(){
    return view('termcondition');
});
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/cv/{user}', function ($user) {
        if ($user === "dashboard" || $user === "resume"||$user === "jobs"||$user === "profile") {
            return view('index');
        }
    });
});

Route::get('sign-up', [App\Http\Controllers\FrontendController::class,'sign_up'])->name('sign-up');
Route::Any('/registration', [App\Http\Controllers\FrontendController::class,'registration']);
Route::Any('forgotpassword', [App\Http\Controllers\FrontendController::class,'forgotpassword']);
Route::Post('updatepassword', [App\Http\Controllers\FrontendController::class,'updatepassword']);
Route::get('/', [FrontendController::class,'home']);
Route::any('save_contact_query', [FrontendController::class,'save_contact_query']);
Route::get('exclusive-jobs', [FrontendController::class,'hotjobnew']);
Route::get('job-description/{id}', [FrontendController::class,'job_description']);

Route::get('/logout', [HomeController::class, 'logout']);
Route::get('female-jobs', [FrontendController::class,'femalejobs']);
Route::get('national-jobs', [FrontendController::class,'nationaljobs']);
Route::get('international-jobs', [FrontendController::class,'internationaljobs']);
Route::any('internationJobPage/{job_country}', [FrontendController::class,'internew']);
Route::get('country-jobs/{country}', [FrontendController::class,'internew']);
////////////////// //////////////////////Api ///////////////////////////////////////////
Route::get('get-Country', [ApiAppController::class, 'getCountry']);
Route::get('get-states', [ApiAppController::class, 'getState']);
Route::get('get-cities', [ApiAppController::class, 'getCity']);
// /////////////////////////////////////////////////////////////////////////////////////

///////////////////////////////////////BLOGS////////////////////////////////////////////
Route::get('blog', [BlogController::class,'blog']);
Route::get('blogMaster', [BlogController::class,'blogmaster']);
Route::get('blog-Add', [BlogController::class,'blogAdd']);
Route::post('blogStore', [BlogController::class,'blogStore']);
Route::any('read-more/{id}', [BlogController::class,'readMoreBlogs']);
Route::post('addComment/{id}', [BlogController::class,'addComment']);
Route::get('commentMaster', [BlogController::class,'commentMaster']);
Route::any('comment/approve/{id}', [BlogController::class,'commentApprove']);
Route::any('comment/decline/{id}', [BlogController::class,'commentDecline']);
Route::any('comment/delete/{id}', [BlogController::class,'commentDelete']);
/////////////////////////////////////////BLOGS///////////////////////////////////////////

Route::get('resumeloginJob/{jid}/{portal}', [JobResponseController::class,'resumeloginJob']);
Route::post('registrationJobApply/{jid}/{portal}', [JobResponseController::class,'registrationJobApply']);
Route::get('/loginJobApply', [JobResponseController::class,'loginJobApply']);
Route::post('jobApplyStore', [JobResponseController::class,'jobApplyStore']);

Route::get('job-description/{id}/{portal}/{from?}', [JobResponseController::class,'job_description_portal']);

Route::prefix('candidate')->group(function () {
    Route::post('recoverPassword', [CandidateCommonController::class,'recoverPassword'])->name('candidate/recoverPassword');
});
/**********************************NEW TEMPLATE******************************************/
Route::get('build-resume', [BuildResumeController::class,'buildResume']);
Route::any('build-resume/{resumeid}', [BuildResumeController::class,'buildResume']);
Route::post('build-resume', [BuildResumeController::class,'storeResume']);
Route::any('getcity', [BuildResumeController::class,'getCity']);
Route::any('getState', [BuildResumeController::class,'getState']);
Route::any('myResume', [BuildResumeController::class,'myResume']);
Route::any('myResume/{resumeid}', [BuildResumeController::class,'myResume']);

Route::post('downloadpdf', [BuildResumeController::class,'downloadpdf']);
Route::any('cv/{code}', [BuildResumeController::class,'resumeWithCode']);
Route::any('user-dashboard', [BuildResumeController::class,'userDashboard']);
Route::get('resume/workExpDelete/{id}', [BuildResumeController::class,'workExpDelete']);
Route::any('appcv/{code}', [BuildResumeController::class,'resumeWithCodeApp']);
Route::any('web-view/{code}', [BuildResumeController::class,'webView']);
Route::any('signout', [BuildResumeController::class,'signout']);

/**********************************NEW TEMPLATE******************************************/

Route::any('/user-dashboards', 'LoginController@user_dashboard');
Route::any('appliedjobs', [LoginController::class,'appliedjobs']);

Route::any('get_resume_template', 'UserTemplateController@get_resume_template');  ///saving resume
Route::post('upload_achievement_image', 'UserTemplateController@upload_achievement_image');  ///saving resume

Route::any('apply_job', 'UserTemplateController@apply_job');  ///saving resume

//Profile SettingsHow
Route::any('/change-password', 'ProfileController@changepassword')->name('changepassword');
Route::any('/password-update', 'ProfileController@passwordupdate')->name('passwordupdate');

Route::any('/resume-selected/{id}', 'UserTemplateController@resume_selected');
Route::any('view_pdf_resume/{id}', 'UserTemplateController@view_pdf_resume');
Route::any('/edit_resume_selected/{id}', 'UserTemplateController@edit_resume_selected');
Route::any('update_user_resume', 'UserTemplateController@update_user_resume');

Route::any('/resume-print', 'UserTemplateController@resume_print');
