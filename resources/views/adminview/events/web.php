<?php

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

//Route::get('/', function () {
//    return view('frontend.dashboard');
//});
//Route::get('/admin', function () {
//    return view('backend.index');
//});

//Route::fallback(function () {
//    return view('error.404');
//});


use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route; 

set_time_limit(0);


Route::view('demo-demo', 'facebook');
Route::get('sendmailuser', 'SendMailController@sendMail');
Route::get('sendmailtest', 'SendMailController@sendMailtest');
Route::get('/', 'FrontendController@home');
Route::any('save_contact_query', 'FrontendController@save_contact_query');
// Route::get('hot-jobs', 'FrontendController@hot_jobs');
Route::post('hot-jobs', 'FrontendController@hot_jobs');
// Route::get('job-description/{id}', 'FrontendController@job_description');
Route::any('check_reg_email', 'FrontendController@check_reg_email');
Route::any('check_reg_contact', 'FrontendController@check_reg_contact');
Route::post('/registration', 'FrontendController@registration');

Route::get('searchJobsByNationExp/{nationality}/{experience}','FrontendController@searchJobsByNationExp');
Route::get('searchJobsByNationExpAd/{nationality}/{fresher}','FrontendController@searchJobsByNationExpAd');
// Socialite Package Route Starts
Route::any('/callback/{service}', 'SocialController@callback');
Route::any('/redirect/{service}', 'SocialController@redirect');

// Socialite Package Route Ends

Route::get('/admin', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::post('/user-login', 'LoginController@login');
Route::post('/admin-login', 'LoginController@admin_login');
Route::get('/admin-logout', 'LoginController@admin_logout');
Route::any('/user-logout', 'LoginController@user_logout');
// Route::get('/logout', 'LoginController@logout');
Route::any('error', 'LoginController@get_error_log');


Route::prefix('candidate')->group(function () {
Route::post('recoverPassword', 'CandidateCommonController@recoverPassword')->name('candidate/recoverPassword');
});

Route::get("addmore", "LoginController@addMore");
Route::post("addmore", "LoginController@addMorePost");

Route::any('/user-resume-url/{id}', 'UserTemplateController@user_resume_url');
Route::any('resume/{slug}/{uid}', 'UserTemplateController@resume_link');
Route::get('generatePDF/{uid}', 'UserTemplateController@generatePDF');
Route::get('generatePDFDownload/{uid}', 'UserTemplateController@generatePDFDownload');
//Route::any('/user-resume-url/{id}', 'UserTemplateController@user_resume_url');
Route::group(['middleware' => 'user'], function () {
    Route::any('/user-dashboards', 'LoginController@user_dashboard');
    Route::any('appliedjobs', 'LoginController@appliedjobs');

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
});


// Route::group(['middleware' => 'auth'], function () {
Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', 'LoginController@dashboard');
    Route::any('clientjobs/{client_id?}', 'LoginController@clientjobs');
    Route::get('user-profile', 'UserProfile@user_profile');

    Route::resource('staffs', 'UserController');

    //Users
    Route::any('registered-user', 'RegisteredUserController@registered_user');
    Route::any('merge_hh_user', 'RegisteredUserController@merge_hh_user');
    Route::any('officeregistration', 'RegisteredUserController@officeregistration');
    Route::any('websiteregistration', 'RegisteredUserController@websiteregistration');
    Route::any('saisun-hire-registration', 'RegisteredUserController@saisunhireregistration');
    Route::any('publisher_registration', 'RegisteredUserController@publisher_registration');
    Route::any('payroll_registration', 'RegisteredUserController@payroll_registration');
    Route::any('chatbot_registration', 'RegisteredUserController@chatbot_registration');
    Route::any('international_registration', 'RegisteredUserController@international_registration');
    Route::any('parser_registration', 'RegisteredUserController@parser_registration');
    Route::any('resume_parsed_data/{user_id}', 'RegisteredUserController@resume_parsed_data');


    // Reports
    Route::any('candidatereport', 'ReportsController@candidatereport');


    Route::any('jdsearch', 'RegisteredUserController@jdsearch');

    Route::get('import_users', 'RegisteredUserController@import_users');
    Route::post('store_import_users', 'RegisteredUserController@store_import_products');


    Route::resource('companies', 'CompanyController');
    Route::get('contact_queries/{website}', 'CompanyController@contact_queries');
    Route::get('contact_queries_happiest','CompanyController@happiest');
    Route::get('contact_query_option',function(){
      return view('adminview.contact_query.contact_query_option');
    });

    // Route::any('testimonials', 'TestimonialsController@index');
    //    Route::any('add-testimonials', 'TestimonialsController@index');
    Route::any('testimonials/testimonials-store', 'TestimonialsController@store');
    Route::any('edit-testimonials/{id}', 'TestimonialsController@edit');
    Route::any('update-testimonials/{id}', 'TestimonialsController@update');
    Route::any('delete-testimonials/{id}', 'TestimonialsController@destroy');

    Route::resource('jobtypes', 'JobTypeController');

    Route::any('jobs/relatedCandidates/{id}', 'JobController@relatedCandidates');
    Route::resource('jobs', 'JobController');

    Route::resource('testimonials', 'TestimonialController');
    Route::resource('contactus', 'ContactUsController');


    //Contacts
    Route::any('contact/contact-us', 'ContactController@index');
    //    Route::any('add-contact', 'ContactController@index');
    Route::any('contact/contact-store', 'ContactController@store');
    Route::any('edit-contact/{id}', 'ContactController@edit');
    Route::any('update-contact/{id}', 'ContactController@update');
    Route::any('delete-contact/{id}', 'ContactController@destroy');

    //About
    Route::any('about/about-us', 'AboutController@index');
    //    Route::any('add-contact', 'AboutController@index');
    Route::any('about/about-store', 'AboutController@store');
    Route::any('edit-about/{id}', 'AboutController@edit');
    Route::any('update-about/{id}', 'AboutController@update');
    Route::any('delete-about/{id}', 'AboutController@destroy');


    Route::resource('resume-slider', 'ResumeSliderController');
    Route::resource('benefits', 'BenefitController');

    //Resume Slider
    // Route::any('resume-slider', 'ResumeSliderController@index');
    // Route::any('resume-slider/store-resume-slider', 'ResumeSliderController@store');
    // Route::any('resume-slider/edit-resume-slider/{id}', 'ResumeSliderController@edit');
    // Route::any('resume-slider/update-resume-slider/{id}', 'ResumeSliderController@update');
    // Route::any('resume-slider/delete-resume-slider/{id}', 'ResumeSliderController@destroy');


    Route::prefix('admin')->group(function () {
        Route::resource('how_it_works', 'HowItWorkController');
        Route::resource('counts', 'CountController');
        Route::resource('social_networks', 'SocialNetworkController');
    });
});

Route::any('edit-blogs/{id}', 'BlogController@EditBlogs');
Route::any('update-blog/{id}', 'BlogController@UpdateBlogs');
Route::any('delete-blogs/{id}', 'BlogController@DeleteBlogs');

Route::post('authenticate', 'Auth\LoginController@authenticate')->name('authenticate');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('testurl', 'FrontendController@testurl');

/**********************************Staff Report******************************************/
Route::any('staffUploadReport', 'UserController@staffReport');
Route::any('staffSearch','UserController@staffSearch');
/**********************************Staff Report******************************************/
Route::get('/clear-cache', function () {
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    return ['success'=>true,'message'=>'Cache Cleared Successfuly'];
});

/************************************Vrinda*********************************************/
Route::any('failedUploadsExport','RegisteredUserController@failedUploadsExport');
/************************************Vrinda*********************************************/
 
Route::any('candidateLinkExport','RegisteredUserController@candidateLinkExport');


Route::any('term-Condition',function(){
    return view('termCondition');
});

Route::any('privacy-policy',function(){
    return view('privacyPolicy');
});

Route::get('degree-list','ApiWebPageController@getDegreeList');


/***************************BLOGS*********************************/
Route::get('blog','BlogController@blog');
Route::get('blogMaster','BlogController@blogmaster');
Route::get('blog-Add','BlogController@blogAdd');
Route::post('blogStore','BlogController@blogStore');
Route::any('read-more/{id}','BlogController@readMoreBlogs');
Route::post('addComment/{id}','BlogController@addComment');
Route::get('commentMaster','BlogController@commentMaster');
Route::any('comment/approve/{id}','BlogController@commentApprove');
Route::any('comment/decline/{id}','BlogController@commentDecline');
Route::any('comment/delete/{id}','BlogController@commentDelete');
/***************************BLOGS*********************************/

/***************************Degree*********************************/
Route::get('degree_master','DegreeController@degree_master');
Route::get('degree_master/create','DegreeController@degree_create');
Route::get('degree_master/edit/{id}','DegreeController@degree_edit');
Route::post('degree_master/store','DegreeController@degree_store');
Route::get('degree_master/delete/{id}','DegreeController@degree_delete');
/***************************Degree*********************************/


Route::get('dailyRegistrations','RegisteredUserController@dailyRegistrations');
Route::any('downloadRegistrationExcel','RegisteredUserController@downloadRegistrationExcel');

Route::post('/store-chatbot-data','ChatbotController@storeChatBotData');
Route::any('mergecandidate',function(){
    Artisan::call("merge:candidates");
});
Route::any('merge_candidate_offrole','APIController@merge_candidate_offrole');

/**********************************Auto Complete Search******************************************/
Route::any('getDesignationAuto','ReportsController@getDesignationAuto');
Route::any('getlocationAuto','ReportsController@getlocationAuto');
Route::any('getDesignationAutoJob','ReportsController@getDesignationAutoJob');
Route::any('getlocationAutoJob','ReportsController@getlocationAutoJob');
/**********************************Auto Complete Search******************************************/


Route::any('saveProfileData','BuildResumeController@saveProfileData');
Route::any('saveAdditionalData','BuildResumeController@saveAdditionalData');
Route::any('saveSkilsData','BuildResumeController@saveSkilsData');
Route::any('saveObjectiveData','BuildResumeController@saveObjectiveData');
Route::any('saveEducationData','BuildResumeController@saveEducationData');
Route::any('saveExperienceData','BuildResumeController@saveExperienceData');
Route::any('saveProImage','BuildResumeController@saveProImage');

Route::any('checkdata','BuildResumeController@checkdata');
route::any('add-new-experience/{count}', 'ResumeSliderController@addNewExperience');
Route::any('getState1','ResumeSliderController@getState1');
Route::any('getCity1','ResumeSliderController@getCity1');



/****************************Client Dasboard*****************************/
Route::any('career-site/{id}','ClientController@careerSite');
Route::any('job-detail','ClientController@jobdetail');

Route::get('candidate-Search', 'ReportsController@candidateSearch');
Route::any('searchByFeilds', 'ReportsController@searchByFeilds');

Route::any('client-settings','ClientController@cleintSetting');
Route::any('settingsStore','ClientController@settingsStore');

Route::any('sendBulkEmailToCandiate','ReportsController@sendBulkEmailToCandiate');
Route::any('sendBulkSMSCandiate','ReportsController@sendBulkSMSCandiate');

Route::any('jd-search','CandidateSearchController@jdSeach');
Route::any('search-by-jd','CandidateSearchController@searchByJd');
/****************************Client Dasboard*****************************/

Route::any('notifyCanddiate',function(){
    Artisan::call("notify:candidate");
});

Route::get('applieid-candidate',function(){
 return view('emails/appliedjobs/appliedCandiate');
});

Route::get('applieid-HR',function(){
    return view('emails/appliedjobs/appliedjobHR');
   });

Route::any('send-mail/{name}/{email}/{password}/{profile}/{code}','SendMailController@sendMail');   

/*********************************Multiple Template*****************************************/
Route::any('resumeTemplate','ResumeTemplateController@templateMaster');
Route::any('add-new-template','ResumeTemplateController@addNewTemplate');
Route::any('resumeTemplateStore','ResumeTemplateController@storeTemplates');
Route::any('blob-resume','ResumeTemplateController@blobresume');
Route::any('edit-resume-template/{id}','ResumeTemplateController@editResumeTemplate');
Route::any('resumeTemplateUpdate','ResumeTemplateController@updateTemplates');
Route::any('activeInactiveResume/{id}','ResumeTemplateController@activeInactiveResume');
Route::any('viewResumeTemplate/{id}','ResumeTemplateController@viewResumeTemplate');
Route::any('select-resume','ResumeTemplateController@selectResume');

/**********************************NEW TEMPLATE******************************************/
Route::get('build-resume','BuildResumeController@buildResume');
Route::any('build-resume/{resumeid}','BuildResumeController@buildResume');
Route::post('build-resume','BuildResumeController@storeResume');
Route::any('getcity','BuildResumeController@getCity');
Route::any('getState','BuildResumeController@getState');
Route::any('myResume','BuildResumeController@myResume');
Route::any('myResume/{resumeid}','BuildResumeController@myResume');

Route::post('downloadpdf','BuildResumeController@downloadpdf');
Route::any('cv/{code}','BuildResumeController@resumeWithCode');
Route::any('user-dashboard','BuildResumeController@userDashboard');
Route::get('resume/workExpDelete/{id}','BuildResumeController@workExpDelete');
Route::any('appcv/{code}','BuildResumeController@resumeWithCodeApp');
/**********************************NEW TEMPLATE******************************************/

Route::any('sendToJobsVertise','IntegrationController@sendToJobsVertise');
Route::any('sendToCVLibrary','IntegrationController@sendToCVLibrary');
Route::any('encodedResume/{id}','IntegrationController@getReusmeFileEncoded');

/*******************Download PDF************************/
Route::any('htmlToPDF',function(){
    return view('adminview/htmlToPDF');
});
Route::any('convertToPDF','IntegrationController@convertToPDF');
/*******************Download PDF************************/

Route::any('apihit','APIController@apihit');
Route::any('merge_jobs','APIController@merge_jobs');
Route::any('merge_candidate_onrole','APIController@merge_candidate_onrole');


Route::any('convertToPDF1','IntegrationController@convertToPDF1');

Route::get('hot-jobs', function () {
    return redirect('hot-jobs/national/all');
});
Route::get('hot-jobs-international', function () {
    return redirect('hot-jobs/international/all');
});

Route::get('hot-jobs-fresher', function () {
    return redirect('hot-jobs/national/fresher');
});

// Route::post('hot-jobs', 'FrontendController@hot_jobs');
Route::get('job-description/{id}', 'FrontendController@job_description');
Route::any('check_reg_email', 'FrontendController@check_reg_email');
Route::any('check_reg_contact', 'FrontendController@check_reg_contact');
Route::post('/registration', 'FrontendController@registration');

//Route::get('searchJobsByNationExp/{nationality}/{experience}', 'FrontendController@searchJobsByNationExp');
Route::get('hot-jobs/{nationality}/{experience}', 'FrontendController@searchJobsByAditya');

Route::any('getReusmeFileEncoded/{id}','IntegrationController@getReusmeFileEncoded');




Route::get('sendtohelper', 'GoogleJobPostingController@sendtohelper');
Route::get('sendtoadzuna', 'GoogleJobPostingController@sendtoadzuna');

Route::get('resumeloginone', 'FrontendController@resumelogin');

Route::get('resume-register', 'FrontendController@happiestResumeRegister');

Route::get('happiestresumelogin', 'FrontendController@happiestResumeLogin');

Route::get('resume-forget-password', 'FrontendController@happiestForgetPassword');

/**********************************Job Apply******************************************/
Route::get('resumeloginJob/{jid}/{portal}','JobResponseController@resumeloginJob');
Route::post('registrationJobApply/{jid}/{portal}', 'JobResponseController@registrationJobApply');
Route::post('/loginJobApply', 'JobResponseController@loginJobApply');
Route::post('jobApplyStore', 'JobResponseController@jobApplyStore');

Route::get('job-description/{id}/{portal}/{from?}', 'JobResponseController@job_description_portal');
/**********************************Job Apply******************************************/
Route::any('wrong-register','FrontendController@wrongRegistration');
Route::any('test_resume_post_new','APIController@test_resume_post_new');
Route::any('test-resume',function(){
    return view('resumeparse');
});


Route::any('activeInactive-enquiry/{id}','CompanyController@activeInactiveenquiry');

Route::any('update_international_candidate','APIController@update_international_candidate');

Route::any('sendSMSTest','APIController@sendSMSTest');

Route::any('activeInactiveenquiryhappiest/{id}','CompanyController@activeInactiveenquiryhappiest');

Route::get('sendToClickIndia','IntegrationController@sendToClickIndia');

////////////////////Get Job Integration//////////////
Route::get('whatjobs-india', 'GetJobXMLController@whatjobsIndia');
Route::get('whatjobs-us', 'GetJobXMLController@whatjobsUs');
Route::get('exclusive-jobs', 'FrontendController@hotjobnew');
Route::any('adzunaindia-xml', 'GetJobXMLController@adzunaindia');
Route::any('adzunaca-xml', 'GetJobXMLController@adzunaca');
Route::any('adzunaus-xml', 'GetJobXMLController@adzunaus');
Route::any('stepstoneTotalJobs', 'GetJobXMLController@StepstoneTotalJobs');
Route::any('stepstoneCatereJobs', 'GetJobXMLController@StepstoneCatereJobs');
Route::any('cvlibrary-jobs', 'GetJobXMLController@cvLibraryXml');
Route::any('adzunaCa-jobs', 'GetJobXMLController@adzunaca');
Route::any('clickindia-jobs', 'GetJobXMLController@clickindia');

Route::any('other-jobs/{from_portal}', 'GetJobXMLController@othersjobs');
Route::any('internationJobPage/{job_country}', 'FrontendController@internew');
Route::get('country-jobs/{country}', 'FrontendController@internew');

Route::get('/run-crone', function () {
    \Illuminate\Support\Facades\Artisan::call('schedule:run');
    return ['success'=>true,'message'=>'Cron run successfuly'];
});


Route::any('myResume/{resumeid}','BuildResumeController@myResume');
Route::any('showResumeTemplate','BuildResumeController@showResumeTemplate');
Route::any('web-view/{code}','BuildResumeController@webView');


// country controller..............//
Route::get('counrty-state-city','CounrtyController@index');
Route::get('showcounrtylist','CounrtyController@countrylist');
Route::get('addCounty','CounrtyController@create');
Route::post('Addcountry','CounrtyController@Countrystore');
Route::get('showcounrtylist','CounrtyController@CountyShow');
Route::get('edit/{country_id}','CounrtyController@Countyedit');
Route::post('editCounty/{id}','CounrtyController@Countyupdate');
// State Controller.................//
 Route::get('showstatelist','StateController@About');
 Route::get('addstate','StateController@create');
 Route::post('select-state/{id}','StateController@getState');
 Route::post('addnewstate','StateController@addData');
 Route::get('editsatate/{state_id}','StateController@editstate');
 Route::post('editsatate/{id}','StateController@stateupdate');
 Route::post('editsatate/select-state/{id}','StateController@getState');
// City Controller
 Route::get('ShowCityList','CityController@AboutCity');
 Route::get('addcity','CityController@create');
 Route::post('addnewcity','CityController@AddCity');
 Route::post('select-city/{id}','CityController@getCity');
 Route::get('editcity/{city_id}','CityController@editallcity');
 Route::post('editcity/select-state/{id}','StateController@getState');
 Route::post('editcity/select-city/{id}','CityController@getCity');
 Route::post('editcity/{id}','CityController@updatecity');
// -----------------------//
 Route::get('callParserAPI','ResumeParserController@callParserAPI');
 Route::get('upload_bulk_resume', 'ResumeParserController@upload_bulk_resume');
 Route::post('store_bulk_resume', 'ResumeParserController@store_bulk_resume');
// add national client 
 Route::get('nationalclient','nationalClientController@index');
 Route::get('addnewnationalclient','nationalClientController@nationalclientadd');
 Route::post('nationalclientadd','nationalClientController@nationaladd');
 Route::get('edit-client/{id}','nationalClientController@editnatinalclient');
 Route::get('delete/{id}','nationalClientController@deletenatinalclient');
 Route::post('/editclient','nationalClientController@updatenatinalclient');

// add national team member 

Route::get('teammember','TeammemberController@teamlist');
Route::get('addteam','TeammemberController@add');
Route::post('addteam','TeammemberController@store');
Route::get('edit-team/{id}','TeammemberController@editteamclient');
Route::get('delete/{id}','TeammemberController@deletteam');
Route::post('/editteam','TeammemberController@updated');
// add events  
Route::get('addevents','EventsController@eventlist');
Route::get('add','EventsController@addevents');
Route::post('eventadd','EventsController@store');
Route::get('delete/{id}','EventsController@deletevents');
Route::get('edit-events/{id}','EventsController@editevents');
Route::post('/editevents','EventsController@updated');





















