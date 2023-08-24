<!-- Workexp Card -->
<div id="workExpSection" class="card">
    <div class="card-header">
        <h4 class="card-title">Work Experience</h4>
    </div>
    <form action="{{ url('checkdata') }}" method="post" id="checkdataForm" name="expform">
    {{ csrf_field() }}
    <div class="card-body" id="multiForm">
        @if(count($user_work_all))
        @foreach($user_work_all as $user_work)
        <div class="workExpCards_{{$user_work->id}} mb-4" id="workExpCards">
            <div class="card collapseCardWorkExp my-2 " id="collapseCardWorkExp1">
                <div class="card-header collapseCardHeader" id="headingOne">
                    <div class="mb-0 d-flex align-items-center collapseCardHeading">
                        <div class="collapseButtonTitle">
                            <a class="nav-link dropdown-toggle btn btn-link workExperiencehead" href="#workExpArrayItems_{{$user_work->id}}" role="button" data-bs-toggle="collapse" data-bs-target="#workExpArrayItems_{{$user_work->id}}" aria-expanded="false" aria-controls="workExpArrayItems1"> <span class="" id="workExpheading">{{ !empty($user_work->designation) ? $user_work->designation : 'Work Experience' }}</span></a>
                        </div>
                        <div class="collapseButtonsOth" id="workExpBtns">
                        <button type="button" class="collapse-delete-btn removeWorkExprow" id="{{$user_work->id}}"><i class="bi-trash3 nav-icon" id="delete1"></i></button>
                        </div>
                    </div>
                </div>
                <div id="workExpArrayItems_{{$user_work->id}}" class=" collapse workExperienceInfo" data-bs-parent="#workExpArrayItems1">
                    <div class="card-body">
                        <div class="row mb-4" id="workCompanyName">
                            <label for="companyNameLabel1" class="col-sm-3 col-form-label form-label">Company Name</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="" class="form-control" name="job_company[]" id="job_company"  value="{{ $user_work->company ?? '' }}">
                                <input type="hidden" name="ajaxId" id="ajaxId" value="{{ $user_id }}">
                                <input type="hidden" name="count" id="count" value="0">
                                <small class="form-text">Company Name according to your Work Experience</small>
                            </div>
                        </div>
                        <div class="row mb-4" id="workDesignation">
                            <label for="designationLabel1" class="col-sm-3 col-form-label form-label">Designation</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="" class="form-control" name="designation[]" id="designation" value="{{ $user_work->designation ?? ''}}" onchange="changeDesignation(this.value)">
                                <small class="form-text">Designation according to your Work Experience & company</small>
                            </div>
                        </div>
                        
                        <div class="row mb-4" id="workCountry">
                            <label for="countryLabel1" class="col-sm-3 col-form-label form-label">Jobs Description</label>
                            <div class="col-sm-9">
                                <textarea id="myeditablediv" class="form-control" rows="4"  name="job_desc[]" id="job_desc"><?php echo $user_work->description ?? ''; ?></textarea>
                                <small class="form-text">Enter the your jobs description</small>
                            </div>
                        </div>


                        <div class="row mb-4" id="workCountry">
                            <label for="countryLabel1" class="col-sm-3 col-form-label form-label">jobs period</label>
                            <div class="col-sm-4">
                                <input type="month" placeholder="" class="form-control" name="start_date[]" id="start_date" autocomplete="off" value="{{ $user_work->start_date ?? '-' }}" >
                                <small class="form-text">Start date</small>
                            </div>
                            <div class="col-sm-4">
                                <input type="month" placeholder="" class="form-control"
                                    name="end_date[]" id="end_date" autocomplete="off" value="{{ $user_work->end_date ?? '-' }}">
                                <small class="form-text">End date</small>
                            </div>
                        </div>
                        
                        <div class="row justify-content-end" id="workTimePeriodSwitch">
                            <div class="col-md-6 currentlyWorkHere" id="currentlyWorkHere">
                                <label class="row form-check form-switch mb-4" for="currentlyWorkHereSwitch">
                                    <span class="col-2" id="currentlyWorkHereInput">
                                        <input type="checkbox" class="form-check-input" name="isWorking[]" id="isWorking" class="form-control" value="0" chacked>
                                    </span>
                                    <span class="col-10" id="currentlyWorkHereText">
                                        <span class="d-block text-dark">I Currently Work Here!</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="workExpCards_{{$random_id}} mb-4" id="workExpCards">
            <div class="card collapseCardWorkExp my-2 " id="collapseCardWorkExp1">
                <div class="card-header collapseCardHeader" id="headingOne">
                    <div class="mb-0 d-flex align-items-center collapseCardHeading">
                        <div class="collapseButtonTitle">
                            <a class="nav-link dropdown-toggle btn btn-link workExperiencehead" href="#workExpArrayItems_{{$random_id}}" role="button" data-bs-toggle="collapse" data-bs-target="#workExpArrayItems_{{$random_id}}" aria-expanded="false" aria-controls="workExpArrayItems1"> <span class="" id="workExpheading">Work Experience</span> </a>
                        </div>
                        <div class="collapseButtonsOth" id="workExpBtns"> 
                        <button type="button" class="collapse-delete-btn removeWorkExprow" id="{{$random_id}}"><i class="bi-trash3 nav-icon" id="delete1"></i></button>
                        </div>
                    </div>
                </div>
                <div id="workExpArrayItems_{{$random_id}}" class="nav-collapse collapse workExperienceInfo
                " data-bs-parent="#workExpArrayItems1">
                    <div class="card-body">
                        <div class="row mb-4" id="workCompanyName">
                            <label for="companyNameLabel1" class="col-sm-3 col-form-label form-label">Company Name</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="" class="form-control" name="job_company[]" id="job_company"  value="" >
                                <input type="hidden" name="ajaxId" id="ajaxId" value="{{ $user_id }}">
                                <small class="form-text">Company Name according to your Work Experience</small>
                            </div>
                        </div>
                        <div class="row mb-4" id="workDesignation">
                            <label for="designationLabel1" class="col-sm-3 col-form-label form-label">Designation</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="" class="form-control" name="designation[]" id="designation" value="">
                                <small class="form-text">Designation according to your Work Experience & company</small>
                            </div>
                        </div>
                        
                        <div class="row mb-4" id="workCountry">
                            <label for="countryLabel1" class="col-sm-3 col-form-label form-label">Jobs Description</label>
                            <div class="col-sm-9">
                                <textarea id="myeditablediv" class="form-control" rows="4" name="job_desc[]" id="job_desc"></textarea>
                                <small class="form-text">Enter the your jobs description</small>
                            </div>
                        </div>


                        <div class="row mb-4" id="workCountry">
                            <label for="countryLabel1" class="col-sm-3 col-form-label form-label">jobs period</label>
                            <div class="col-sm-4">
                                <input type="month" placeholder="" class="form-control" name="start_date[]" id="start_date" autocomplete="off" value="">
                                <small class="form-text">Start date</small>
                            </div>
                            <div class="col-sm-4">
                                <input type="month" placeholder="" class="form-control" name="end_date[]" id="end_date" autocomplete="off" value="">
                                <small class="form-text">End date</small>
                            </div>
                        </div>
                        
                        <div class="row justify-content-end" id="workTimePeriodSwitch">
                            <div class="col-md-6 currentlyWorkHere" id="currentlyWorkHere">
                                <label class="row form-check form-switch mb-4" for="currentlyWorkHereSwitch">
                                    <span class="col-2" id="currentlyWorkHereInput">
                                        <input type="checkbox" class="form-check-input" name="isWorking[]" id="isWorking" class="form-control" onchange="ajaxFunWork()" value="0" chacked>
                                    </span>
                                    <span class="col-10" id="currentlyWorkHereText">
                                        <span class="d-block text-dark">I Currently Work Here!</span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- End Collapse -->
    <span type="button btn" class="btn add-education-btn col-md-12" name="add" value="Add more+" onclick="addnewworkexp()">Add More Work Experience</span>
    <div class="d-flex justify-content-end">
        <input class="btn btn-primary" type="submit" value="Save Work Experience"  style="margin-top: 15px;">
    </div>
    </form>
</div>

