
@include('newtemp.header')
<main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-sm mb-2 mb-sm-0">
                        <h1 class="page-header-title">Create Resume</h1>
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-auto">
                        <a class="btn btn-primary" href="{{ url('myResume') }}">
                            <i class="bi-person-fill me-1"></i> Preview Resume
                        </a>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Page Header -->

            <div class="row">
                <div class="col-lg-3">
                    <!-- Navbar -->
                    <div class="navbar-expand-lg navbar-vertical mb-3 mb-lg-5">
                        <!-- Navbar Toggle -->
                        <div class="d-grid">
                            <button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse"
                                data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation"
                                aria-expanded="false" aria-controls="navbarVerticalNavMenu">
                                <span class="d-flex justify-content-between align-items-center">
                                    <span class="text-dark">Menu</span>
                                    <span class="navbar-toggler-default">
                                        <i class="bi-list"></i>
                                    </span>
                                    <span class="navbar-toggler-toggled">
                                        <i class="bi-x"></i>
                                    </span>
                                </span>
                            </button>
                        </div>
                        <!-- End Navbar Toggle -->

                        <!-- Navbar Collapse -->
                        <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
                            <ul id="navbarSettings"
                                class="js-sticky-block js-scrollspy card card-navbar-nav nav nav-tabs nav-lg nav-vertical"
                                data-hs-sticky-block-options=''style="position:fixed; width:18%;">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#basicInfoSection">
                                        <i class="bi-person nav-icon"></i> Basic information
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#educationSection">
                                        <i class="bi-key nav-icon"></i> Education
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#workExpSection">
                                        <i class="bi-gear nav-icon"></i> Work Experience
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#skillsSection">
                                        <i class="bi-shield-lock nav-icon"></i> Resume Summary
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#addskillsection">
                                        <i class="bi-phone nav-icon"></i> Skills
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#addtionalSection">
                                        <i class="bi-phone nav-icon"></i> Additional Section
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#socialAccountsSection">
                                        <i class="bi-instagram nav-icon"></i> Social accounts
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <div class="mt-4">
                                        <h5>Complete your profile</h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="progress flex-grow-1">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: {{ $user_login->profile_complete_percent }}%" aria-valuenow="82" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                </div>
                                            </div>
                                            <span class="ms-4">{{ $user_login->profile_complete_percent }} %</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- End Navbar Collapse -->
                    </div>
                    <!-- End Navbar -->
                </div>

                <div class="col-lg-9">
                    <div class="d-grid gap-3 gap-lg-5">
                        <!-- profile pic card  -->
                        <div class="card">
                            <div class="profile-cover">
                                <div class="profile-cover-img-wrapper">
                                    <img id="profileCoverImg" class="profile-cover-img" src="{{ url('assets/happiestUserDashboard/assets/img/1920x400/img2.jpg') }}" alt="Image Description">
                                    <form id="basicinformation">
                                        @csrf

                                </div>
                            </div>

                            <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar" for="editAvatarUploaderModal">
                                <img id="editAvatarImgModal" class="avatar-img" src="{{ $user_image }}" alt="Image Description">

                                <input type="file" class="js-file-attach avatar-uploader-input" onchange="img_pathUrl(this)" id="editAvatarUploaderModal" data-hs-file-attach-options=''>

                                <span class="avatar-uploader-trigger">
                                    <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
                                </span>
                            </label>

                            
                        </div>
                        <!-- profile pic card  -->

                        <!-- Basic Card -->
                        <div id="basicInfoSection" class="card">
                            <div class="card-header">
                                <h2 class="card-title h4">Basic information</h2>
                            </div>

                            <div class="card-body">
                                <form id="myform">
                                    @csrf
                                    <div class="row mb-4">
                                        <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Full
                                            name
                                            <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                                data-bs-placement="top"
                                                title="Displayed on public forums, such as Front."></i></label>

                                        <div class="col-sm-9">
                                            <div class="input-group input-group-sm-vertical">
                                                <input type="text" class="form-control" name="fname"
                                                    id="fname" placeholder="Your first name"
                                                    aria-label="Your first name" value="{{ $user_login->name }}"
                                                    onKeyUp="ajaxFunName()">
                                                <input type="hidden" name="ajaxId" id="ajaxId"
                                                    value="{{ $user_id }}">

                                                <input type="text" class="form-control" name="father_name"
                                                    id="father_name" placeholder="father name"
                                                    aria-label="Your last name" value="{{ $user_pro->father_name }}"
                                                    onkeyup="ajaxFunName()">
                                                <input type="hidden" name="father_name" id="father_name"
                                                    value="{{ $user_pro->father_name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Mobile</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="js-input-mask form-control" name="contact"
                                                id="contact" value="{{ $user_login->contact }}" autocomplete="off"
                                                onkeyup="ajaxFunName()" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="emailLabel"
                                            class="col-sm-3 col-form-label form-label">Email</label>

                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="email" iname="email"
                                                id="email" value="{{ $user_login->email }}" readonly
                                                placeholder="Email" aria-label="Email">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="careerObjectiveLabel"
                                            class="col-sm-3 col-form-label form-label">Choose Complete
                                            Address:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="address-input" name="address_address" autocomplete="off" cols="4"
                                                rows="5" value="Htmlstream" placeholder="" aria-label="Your Career Objective" value="">{{ $user_pro->user_address }}</textarea>
                                            <input type="hidden" name="address_latitude" id="address-latitude"
                                                value="{{ $user_login->lat ?? '' }}" />
                                            <input type="hidden" name="address_longitude" id="address-longitude"
                                                value="{{ $user_login->lng ?? '' }}" />
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="industryLabel" class="col-sm-3 col-form-label form-label">Job
                                            TItle:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="current_title"
                                                id="current_title" value="{{ $user_pro->current_title }}"
                                                onkeyup="ajaxFunName()" placeholder="Job TItle"
                                                aria-label="Your Industry">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="locationLabel" class="col-sm-3 col-form-label form-label">Resume
                                            Type:</label>
                                        <div class="col-sm-9">
                                            <div class="tom-select-custom mb-4">
                                                <select class="js-select form-select" name="candidate_type"
                                                    id="candidate_type">
                                                    <option value="">Select Any One</option>
                                                    <option value="0" <?php if ($user_login->candidate_type == '0') {
                                                        echo 'selected';
                                                    } ?>>Indian</option>
                                                    <option value="1" <?php if ($user_login->candidate_type == '1') {
                                                        echo 'selected';
                                                    } ?>>Abroad</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="locationLabel" class="col-sm-3 col-form-label form-label">Job Category</label>
                                        <div class="col-sm-9">
                                            <div class="tom-select-custom mb-4">
                                                <select class="js-select form-select" name="is_partTime"
                                                    id="is_partTime">
                                                    <option value="">Select Any One</option>
                                                    <option value="1" <?php if ($user_pro->is_partTime == '1') {
                                                        echo 'selected';
                                                    } ?>>Part Time</option>
                                                    <option value="0" <?php if ($user_pro->is_partTime == '0') {
                                                        echo 'selected';
                                                    } ?>>Full Time</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="zipCodeLabel" class="col-sm-3 col-form-label form-label">
                                            Do You Have Experience</label>

                                        <div class="col-sm-9">
                                            <input type="radio" checked="checked" name="ssn" value="no">
                                            <span>NO</span>

                                            <input type="radio" name="ssn" value="yes">
                                            <span>YES</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <input class="btn btn-primary" type="button" value="Save Basic Information"
                                            onclick="saveProTab()">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Basic Card -->

                        <!-- Education Card -->
                        @include('newtemp/education')
                        
                        <!-- Workexp Card -->
                        @include('newtemp/workExperience')

                        <!-- Card -->
                        <div id="skillsSection" class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0">Resume Summary</h4>
                                </div>
                            </div>

                            <!-- Body -->
                            <div class="card-body">
                                
                                <!-- Form -->
                                <div class="row mb-4">
                                    <label for="skillLabel" class="col-sm-3 col-form-label form-label">Resume
                                        Summary</label>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="resume_summry_user_id" id="resume_summry_user_id" value="{{ $user_id }}">
                                        <textarea class="form-control" name="user_career" id="user_career" autocomplete="off" cols="30"
                                            rows="10" value="Htmlstream" placeholder="Address" aria-label="Your Career Objective"
                                            onkeyup="ajaxFunName()">{{ !empty($user_skill->career_obj) ? $user_skill->career_obj : 'I want myself to be an employee of a well repudiated firm where I can improvise my skills of professionalism, adaptability and communication. My development should impact the development of the firm.' }}</textarea>
                                       
                                    </div>
                                </div>
                                <!-- End Form -->
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary" onclick="saveObjectiveTab();">Save Resume Summary</button>

                                </div>
                            </div>
                            <!-- End Body -->
                        </div>
                        <!-- End Card -->
                        <!--add skill -->
                        <div id="addskillsection" class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Skills</h4>
                            </div>
                            <!-- Body -->
                            <div class="card-body">
                                <form>
                                    <div class="list-group list-group-lg list-group-flush list-group-no-gutters">
                                        <div class="list-group-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">

                                                </div>

                                                <div class="flex-grow-1">
                                                    <div class="row align-items-center">
                                                        <label for="user_skill" class="col-sm-3 col-form-label form-label">Add Multiple Skills:</label>
                                                        <div class="col-sm-9">
                                                        <select class="form-select js-select js-example-tokenizer " name="user_skill[]" id="user_skill" multiple="multiple" style="width:100%;height:100px">
                                                            @if (!empty($user_skill->skills))
                                                                @php($skill = explode(',', $user_skill->skills))
                                                                @foreach ($skill as $sk)
                                                                    @php($sp = trim($sk, '"'))
                                                                    <option value="{{ $sp }}" selected>
                                                                        {{ $sp }}
                                                                    </option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        <small class="form-text">Please press ',' or ENTER to seperate an Skill.</small>
                                                        </div>
                                                       
                                                    </div>
                                                    <!-- End Row -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">

                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="row align-items-center">
                                                       
                                                        <label for="user_project" class="col-sm-3 col-form-label form-label">Enter Your Projects Name:</label>
                                                        <div class="col-sm-9">
                                                        <select class="form-select js-select js-example-tokenizer" name="user_project[]" id="user_project" multiple="multiple" style="width:100%;height:100px">
                                                            @if (!empty($user_skill->project))
                                                                @php($project = explode(',', $user_skill->project))

                                                                @foreach ($project as $pro)
                                                                    @php($proj = trim($pro, '"'))
                                                                    <option value="{{ $proj }}" selected>
                                                                        {{ $proj }}
                                                                    </option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                        <small class="form-text">Please press ',' or ENTER to seperate an Projects Name.</small>
                                                        </div>
                                                           
                                                        
                                                    </div>
                                                    <!-- End Row -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list-group-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">

                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="row align-items-center">
                                                       
                                                        <label for="achieve_title" class="col-sm-3 col-form-label form-label">Enter Your Achievements:</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-select js-select js-example-tokenizer" name="achieve_title[]" id="achieve_title" multiple="multiple" style="width:100%;height:100px">
                                                                @if ($user_achiev->title != '')
                                                                    @php($achieve = explode(',', $user_achiev->title))
                                                                    @foreach ($achieve as $achiev)
                                                                        @php($achie = trim($achiev, '"'))
                                                                        <option value="{{ $achie }}" selected>
                                                                            {{ $achie }}
                                                                        </option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                            <small class="form-text">Please press ',' or ENTER to seperate an Achievments Title.</small>
                                                        </div>
                                                        
                                                    </div>
                                                    <!-- End Row -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <input class="btn btn-primary" type="button" value="Save Skills, Projects & Achievements"
                                            onclick="saveSkillsTab();">
                                    </div>
                                </form>
                            </div>
                            <!-- End Body -->
                        </div>
                        <!--add skill -->
                        <!-- Card -->
                        <div id="addtionalSection" class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0">Additonal Section</h4>
                                </div>
                            </div>

                            <!-- Body -->
                            <div class="card-body">
                                

                                <form>
                                    <!-- Form -->
                                    <div class="row mb-4">
                                        <label for="currentLocationLabel"
                                            class="col-sm-3 col-form-label form-label">Current
                                            Location</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder=""
                                                name="curloction" id="curloction"
                                                value="{{ $user_pro->current_location }}" onKeyUp="ajaxFunName()">
                                            <!-- <small class="form-text">Please press ',' or ENTER to seperate an Skill.</small> -->
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="currentCTCLabel"
                                            class="col-sm-3 col-form-label form-label">Current
                                            CTC</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="curCTC" id="curCTC"
                                                value="{{ $user_pro->current_ctc }}">
                                            <!-- <small class="form-text">Please press ',' or ENTER to seperate an Skill.</small> -->
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="totalExpLabel" class="col-sm-3 col-form-label form-label">Total
                                            Experience</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="totExp" id="totExp"
                                                value="{{ $user_pro->total_exp }}">
                                            <!-- <small class="form-text">Please press ',' or ENTER to seperate an Skill.</small> -->
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="noticePeriodLabel"
                                            class="col-sm-3 col-form-label form-label">Notice Period</label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="notice" id="notice"
                                                value="{{ $user_pro->notice_period }}">
                                            <small class="form-text">Please enter your notice period in days.</small>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="relocationLabel"
                                            class="col-sm-3 col-form-label form-label">Willing To
                                            Relocate</label>

                                        <div class="col-sm-9">
                                            <select name="reloacate" id="reloacate" class="form-control">
                                                <option value="yes" <?php if ($user_pro->willing_to_relocate == 'yes') {
                                                    echo 'selected';
                                                } ?>>Yes</option>
                                                <option value="no" <?php if ($user_pro->willing_to_relocate == 'no') {
                                                    echo 'selected';
                                                } ?>>No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="prefferedLocationLabel"
                                            class="col-sm-3 col-form-label form-label">Preffered
                                            Location</label>

                                        <div class="col-sm-9">
                                            <input type="text" placeholder="Preffered Location"
                                                class="form-control" name="pref_location" id="preffered_location"
                                                value="{{ $user_pro->pref_location }}" onKeyUp="ajaxFunName()">

                                            <input type="hidden" name="pref_location" id="preffered_location"
                                                value="{{ $user_pro->pref_location }}">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="dateOfBirthLabel"
                                            class="col-sm-3 col-form-label form-label">Age</label>

                                        <div class="col-sm-9">
                                            <input type="number" placeholder="" class="form-control" name="age"
                                                id="age" value="{{ $user_pro->age }}" onKeyUp="ajaxFunName()">
                                            <!-- <small class="form-text">Please enter your notice period in days.</small> -->
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="genderLabel"
                                            class="col-sm-3 col-form-label form-label">Gender</label>

                                        <div class="col-sm-9">
                                            <select name="gender" id="gender" class="form-control"
                                                onChange="ajaxFunName()">

                                                <option value="Male" <?php if ($user_pro->gender == 'Male') {
                                                    echo 'selected';
                                                } ?>>Male</option>
                                                <option value="Female" <?php if ($user_pro->gender == 'Female') {
                                                    echo 'selected';
                                                } ?>>Female
                                                </option>
                                                <option value="Other" <?php if ($user_pro->gender == 'Other') {
                                                    echo 'selected';
                                                } ?>>Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="maritalStatusLabel" class="col-sm-3 col-form-label form-label">Marital Status</label>

                                        <div class="col-sm-9">
                                            <select name="marrital" id="marrital" class="form-control">
                                                <option value="Married" <?php if ($user_pro->marital_status == 'Married') {
                                                    echo 'selected';
                                                } ?>>Married</option>
                                                <option value="Unmarried" <?php if ($user_pro->marital_status == 'Unmarried') {
                                                    echo 'selected';
                                                } ?>>Unmarried</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="maritalStatusLabel" class="col-sm-3 col-form-label form-label">Hobbies</label>
                                        <div class="col-sm-9">
                                            <select class="form-select js-select js-example-tokenizer" name="hobbies[]" id="hobbies" multiple="multiple" style="width:100%;height:100px">
                                                @if (!empty($user_pro->interest_hobies))
                                                    @php($hobbies = explode(',', $user_pro->interest_hobies))
                                                    @foreach ($hobbies as $hobby)
                                                        @php($hobby = trim($hobby, '"'))
                                                        <option value="{{ $hobby }}" selected>
                                                            {{ $hobby }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                                <option value="sports">Sports</option>
                                                <option value="music">Music</option>
                                                <option value="reading">Reading Books</option>
                                                <option value="dancing">Dancing</option>
                                                <option value="art">Art Making</option>
                                                <option value="internet">Internet Surfing</option>
                                                <option value="technology">Technology</option>
                                                <option value="travelling">Travelling</option>
                                                <option value="writing">Writing</option>
                                                <option value="gardening">Gardening</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="maritalStatusLabel" class="col-sm-3 col-form-label form-label">Language</label>
                                        <div class="col-sm-9">
                                            <select class="form-select js-select js-example-tokenizer" name="language[]" id="language" multiple="multiple" style="width:100%;height:100px">
                                                @if (!empty($user_pro->language))
                                                    @php($languages = explode(',', $user_pro->language))
                                                    @foreach ($languages as $lang)
                                                        @php($lang = trim($lang, '"'))
                                                        <option value="{{ $lang }}" selected>
                                                            {{ $lang }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                                @php($language_list = \App\Language::get())
                                                @foreach($language_list as $lang)
                                                <option value="{{ $lang->language }}">{{$lang->language}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <input class="btn btn-primary" type="button" value="Save Additional Details"
                                            onclick="saveAdditionTab();">
                                    </div>
                            </div>
                        </div>
                        <!-- End Card -->


                        <!-- Card -->
                        <div id="socialAccountsSection" class="card">
                            <div class="card-header">
                                <h4 class="card-title">Social accounts</h4>
                            </div>

                            <!-- Body -->
                            <div class="card-body">
                                <form>
                                    <div class="list-group list-group-lg list-group-flush list-group-no-gutters">
                                        <!-- Item -->
                                        {{-- <div class="list-group-item">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="bi-twitter list-group-icon"></i>
                                                                </div>

                                                                <div class="flex-grow-1">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-sm mb-2 mb-sm-0">
                                                                            <h4 class="mb-0">Twitter</h4>
                                                                            <input type="text" class="form-control fs-5"
                                                                                placeholder="Enter Your Twitter Link"
                                                                                aria-label="Enter Your Twitter Link" name="fb_link"
                                                                                id="fb_link" value="{{ $user_social->fb }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                        <!-- End Item -->

                                        <!-- Item -->
                                        <div class="list-group-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <i class="bi-facebook list-group-icon"></i>
                                                </div>

                                                <div class="flex-grow-1">
                                                    <div class="row align-items-center">
                                                        <div class="col-sm mb-2 mb-sm-0">
                                                            <h4 class="mb-0">Facebook</h4>
                                                            <input type="text" class="form-control fs-5"
                                                                placeholder="Enter Your Facebook Link"
                                                                aria-label="Enter Your Facebook Link" name="fb_link"
                                                                id="fb_link" value="{{ $user_social->fb }}">
                                                        </div>
                                                    </div>
                                                    <!-- End Row -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->

                                        <!-- Item -->
                                        {{-- <div class="list-group-item">
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="bi-slack list-group-icon"></i>
                                                                </div>

                                                                <div class="flex-grow-1">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-sm mb-2 mb-sm-0">
                                                                            <h4 class="mb-0">Slack</h4>
                                                                            <input type="text" class="form-control fs-5" name="slack"
                                                                                id="slackLabel" placeholder="Enter Your Slack Link"
                                                                                aria-label="Enter Your Slack Link"
                                                                                value="www.slack.com/htmlstream">
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Row -->
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                        <!-- End Item -->

                                        <!-- Item -->
                                        <div class="list-group-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <i class="bi-linkedin list-group-icon"></i>
                                                </div>

                                                <div class="flex-grow-1">
                                                    <div class="row align-items-center">
                                                        <div class="col-sm mb-2 mb-sm-0">
                                                            <h4 class="mb-0">Linkedin</h4>
                                                            <input type="text" class="form-control fs-5"
                                                                placeholder="Enter Your Linkedin Link"
                                                                aria-label="Enter Your Linkedin Link" name="linkedin"
                                                                id="linkedin" value="{{ $user_social->linkedin }}">
                                                        </div>
                                                    </div>
                                                    <!-- End Row -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Item -->
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <input class="btn btn-primary" type="button" value="Save Social Links"
                                            onclick="saveAdditionTab();">
                                    </div>
                                </form>
                            </div>
                            <!-- End Body -->
                        </div>
                        <!-- End Card -->
                    </div>

                    <!-- Sticky Block End Point -->
                    <div id="stickyBlockEndPoint"></div>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Content -->

        <!-- Footer -->



        <!-- End Footer -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

   

    
    @include('newtemp.footer')
    