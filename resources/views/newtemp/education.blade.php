<!-- Education Card -->
<div id="educationSection" class="card">
    <div class="card-header">
        <h4 class="card-title">Education</h4>
    </div>
    <form id="educationForm" method="post" action="{{ url('saveEducationData') }}">
    {{ csrf_field() }}
        <div class="card-body" id="multiFormEducation">
            <input type="hidden" name="user_id" id="user_id" value="{{ $user_id }}">
            @if(count($user_education))
            @foreach($user_education as $education)
            <div class="educationCards_{{$education->id}} mb-4" id="educationCards">
                <div class="card collapseCardEducation my-2 " id="collapseCardEducation">
                    <div class="card-header collapseCardHeader" id="headingOne">
                        <div class="mb-0 d-flex align-items-center collapseCardHeading">
                            <div class="collapseButtonTitle">
                                <a class="nav-link dropdown-toggle btn btn-link educationAddhead" href="#educationArrayItems_{{$education->id}}" role="button" data-bs-toggle="collapse" data-bs-target="#educationArrayItems_{{$education->id}}" aria-expanded="false" aria-controls="educationArrayItems"><span class="" id="educationheading">{{ !empty($education->type) ? ucwords(strtolower($education->type)) : 'Select Education' }}</span> </a>
                            </div>
                            <div class="collapseButtonsOth" id="educationBtns">
                                <button type="button" class="collapse-delete-btn removeEducationrow" id="{{$education->id}}"><i class="bi-trash3 nav-icon" id="delete1"></i></button>
                            </div>
                        </div>
                    </div>

                    <div id="educationArrayItems_{{$education->id}}" class="collapse educationAddInfo" data-bs-parent="#educationArrayItems">
                        <div class="card-body">
                            <!-- Form -->
                            <div class="row mb-4">
                                <label for="educationType1" class="col-sm-3 col-form-label form-label">Education Type</label>
                                <div class="tom-select-custom col-sm-9">
                                    <select class="js-select form-select" name="education_type[]" id="education_type">
                                        <option value="">Select Education</option>
                                        <option value="Below10th" {{ ($education->type == 'Below10th') ? 'selected' : '' }}>Below 10th</option>
                                        <option value="10th" {{ ($education->type == '10th') ? 'selected' : '' }}>10th</option>
                                        <option value="12th" {{ ($education->type == '12th') ? 'selected' : '' }}>12th</option>
                                        <option value="diploma" {{ ($education->type == 'diploma') ? 'selected' : '' }}>Diploma</option>
                                        <option value="graduate" {{ ($education->type == 'graduate') ? 'selected' : '' }}>Graduate</option>
                                        <option value="post graduate" {{ ($education->type == 'post graduate') ? 'selected' : '' }}>Post Graduate</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="educationName" class="col-sm-3 col-form-label form-label">Education Name</label>
                                <div class="tom-select-custom col-sm-9">
                                    <input type="text" name="education_name[]" id="education_name" class="form-control" value="{{ $education->education_name }}">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="educationYear2" class="col-sm-3 col-form-label form-label">Education Year</label>
                                <div class="tom-select-custom col-sm-9">
                                    <select class="js-select form-select" name="education_year[]" id="education_year">
                                        <option value="">Select Year</option>
                                        @foreach ($current_years as $item)
                                            <option value="{{ $item->years }}"  data-option-template='<span class="d-flex align-items-center"><span>{{ $item->years }}</span></span>' {{ ($item->years == $education->year) ? 'selected' : '' }}>
                                                {{ $item->years }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="education_organization" class="col-sm-3 col-form-label form-label">Education Organization</label>
                                <div class="tom-select-custom col-sm-9">
                                    <input type="text" class="js-input-mask form-control" name="education_organization[]" id="education_organization" value="{{ $education->organization }}">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="educationLocation1" class="col-sm-3 col-form-label form-label">Education Location</label>
                                <div class="tom-select-custom col-sm-9">
                                    <input type="text" class="js-input-mask form-control" name="education_location[]" id="education_location" value="{{ $education->location }}">
                                </div>
                            </div>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="educationCards_{{ $random_id }} mb-4" id="educationCards">
                <div class="card collapseCardEducation my-2 " id="collapseCardEducation">
                    <div class="card-header collapseCardHeader" id="headingOne">
                        <div class="mb-0 d-flex align-items-center collapseCardHeading">
                            <div class="collapseButtonTitle">
                                <a class="nav-link dropdown-toggle btn btn-link educationAddhead" href="#educationArrayItems_{{ $random_id }}" role="button" data-bs-toggle="collapse" data-bs-target="#educationArrayItems_{{ $random_id }}" aria-expanded="false" aria-controls="educationArrayItems"><span class="">Select Education</span></a>
                            </div>
                            <div class="collapseButtonsOth" id="educationBtns">
                                <button type="button" class="collapse-delete-btn removeEducationrow" id="{{ $random_id }}"><i class="bi-trash3 nav-icon" id="delete1"></i></button>
                            </div>
                        </div>
                    </div>

                    <div id="educationArrayItems_{{ $random_id }}" class="collapse educationAddInfo" data-bs-parent="#educationArrayItems">
                        <div class="card-body">
                            <!-- Form -->
                            <div class="row mb-4">
                                <label for="educationType1" class="col-sm-3 col-form-label form-label">Education Type</label>
                                <div class="tom-select-custom col-sm-9">
                                    <select class="js-select form-select" name="education_type[]" id="education_type" onkeyup="ajaxFunEducation()" onclick="run();">
                                        <option value="">Select Education</option>
                                        <option value="Below10th" >Below 10th</option>
                                        <option value="10th">10th</option>
                                        <option value="12th">12th</option>
                                        <option value="diploma">Diploma</option>
                                        <option value="graduate">Graduate</option>
                                        <option value="post graduate">Post Graduate</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="educationName" class="col-sm-3 col-form-label form-label">Education Name</label>
                                <div class="tom-select-custom col-sm-9">
                                    <input type="text" name="education_name[]" id="education_name" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="educationYear2" class="col-sm-3 col-form-label form-label">Education Year</label>
                                <div class="tom-select-custom col-sm-9">
                                    <select class="js-select form-select" name="education_year[]" id="education_year">
                                        <option value="">Select Year</option>
                                        @foreach ($current_years as $item)
                                            <option value="{{ $item->years }}"
                                                data-option-template='<span class="d-flex align-items-center"><span>{{ $item->years }}</span></span>'>
                                                {{ $item->years }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="education_organization" class="col-sm-3 col-form-label form-label">Education Organization</label>
                                <div class="tom-select-custom col-sm-9">
                                    <input type="text" class="js-input-mask form-control" name="education_organization[]" id="education_organization" value="">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="educationLocation1" class="col-sm-3 col-form-label form-label">Education Location</label>
                                <div class="tom-select-custom col-sm-9">
                                    <input type="text" class="js-input-mask form-control" name="education_location[]" id="education_location" value="">
                                </div>
                            </div>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="col-md-12 mb-4">
            <button type="button" class="btn add-education-btn col-md-12" onclick="addEducation()">Add Education</button>
        </div>

        <div class="d-flex justify-content-end">
            <input class="btn btn-primary" type="submit" value="Save Education">
        </div>
    </form>
</div>