@include('newtemp.headerLink')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="mydiv{{ $count }}">
    <div class="workExpCards mb-4" id="multiForm">
        <div class="card collapseCardWorkExp my-2 " id="collapseCardWorkExp1">
            <div class="card-header collapseCardHeader" id="headingOne">
                <div class="mb-0 d-flex align-items-center collapseCardHeading">
                    <div class="collapseButtonTitle">
                        <a class="nav-link dropdown-toggle btn btn-link" href="#workExpArrayItems{{ $count }}"
                            role="button" data-bs-toggle="collapse"
                            data-bs-target="#workExpArrayItems{{ $count }}" aria-expanded="false"
                            aria-controls="workExpArrayItems{{ $count }}">
                            <span class="nav-link-title">Work Experience-{{ $count }}</span>
                        </a>
                    </div>
                    <div class="collapseButtonsOth d-none" id="workExp{{ $count }}">
                        <button type="btn button" class="collapse-list-btn">
                            <i class="bi-bookshelf nav-icon"></i></button>
                        <span type="btn button" class="close w3-button w3-red">
                            <i class="bi-trash3 nav-icon"></i></span>
                    </div>
                    <span type="btn button" class="collapse-delete-btn"><i class="bi-trash3 nav-icon"
                            style="font-size:17px;color:red" id="removeBtn"></i></span>

                </div>
            </div>
            <div id="workExpArrayItems{{ $count }}" class="nav-collapse collapse"
                data-bs-parent="#workExpArrayItems{{ $count }}">
                <div class="card-body">
                    <!-- Form -->
                    <div class="row mb-4" id="workCompanyName">
                        <label for="companyNameLabel1" class="col-sm-3 col-form-label form-label">Company
                            Name</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="job_company[]"
                                id="job_company" value="" onkeyup="ajaxFunWork();javaWorkShowBlock(this.value);">
                            <small class="form-text">Company Name according to your
                                Work
                                Experience</small>
                        </div>
                    </div>

                    <div class="row mb-4" id="workDesignation">
                        <label for="designationLabel1" class="col-sm-3 col-form-label form-label">Designation</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" class="form-control" name="designation[]"
                                id="designation" value="" onkeyup="ajaxFunWork()">
                            <small class="form-text">Designation according to your
                                Work
                                Experience & company</small>
                        </div>
                    </div>

                    <div class="row mb-4" id="workCountry">
                        <label for="countryLabel1" class="col-sm-3 col-form-label form-label">Country</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="job_country[]"
                                onchange="selectState($(this).val(),{{ $state }})">
                                <option value="">Select Country</option>
                                @foreach ($countries1 as $st)
                                    <option value="{{ $st->country_id }}">{{ $st->country_name }}</option>
                                @endforeach
                                </option>
                            </select>
                            <small class="form-text">Enter the Country for the company
                                you
                                have worked for</small>
                        </div>
                    </div>

                    <div class="row mb-4" id="workState">
                        <label for="stateLabel1" class="col-sm-3 col-form-label form-label">State</label>
                        <div class="col-sm-9">
                            <select class="form-control add-state" name="job_state[]"
                                onchange="selectCity($(this).val(),{{ $city }})">
                                <option value="">Select State</option>
                            </select>
                            <small class="form-text">Enter the State for the company
                                you
                                have worked for</small>
                        </div>
                    </div>

                    <div class="row mb-4" id="workCity">
                        <label for="cityLabel1" class="col-sm-3 col-form-label form-label">City</label>
                        <div class="col-sm-9">
                            <select class="form-control add-city" name="job_city[]" id="job_city">

                            </select>
                            <small class="form-text">Enter the City for the company
                                you
                                have worked for</small>
                        </div>
                    </div>

                    <div class="row mb-4" id="workCountry">
                        <label for="countryLabel1" class="col-sm-3 col-form-label form-label">Jobs
                            Description</label>
                        <div class="col-sm-9">
                            <textarea id="myeditablediv" class="form-control" rows="4" onkeyup="ajaxFunWork()" name="job_desc[]"><?php echo $user_work->description ?? 'na'; ?></textarea>
                            <small class="form-text">Enter the your jobs
                                description</small>
                        </div>
                    </div>

                    <div class="row mb-4" id="workCountry">
                        <label for="countryLabel1" class="col-sm-3 col-form-label form-label">jobs
                            period</label>
                        <div class="col-sm-4">
                            <input type="month" placeholder="" class="inputsm4 form-control" name="start_date[]"
                                id="start_date" autocomplete="off" value="" onchange="ajaxFunWork()">
                        </div>
                        <div class="col-sm-4">
                            <input type="month" placeholder="" class="inputsm4 form-control" name="end_date[]"
                                id="end_date" autocomplete="off" value="" onchange="ajaxFunWork()">
                            <small class="form-text">End date</small>
                        </div>

                        <div class="col-sm" id="workTimePeriod">
                            <!-- Form -->
                            <div class="row justify-content-end" id="workTimePeriodSwitch">
                                <div class="col-md-6 currentlyWorkHere" id="currentlyWorkHere">
                                    <label class="row form-check form-switch mb-4" for="currentlyWorkHereSwitch">
                                        <span class="col-2" id="currentlyWorkHereInput">
                                            <input type="checkbox" class="form-check-input" name="isWorking[]"
                                                id="isWorking" class="form-control" onchange="ajaxFunWork()"
                                                value="0" chacked>
                                        </span>
                                        <span class="col-10" id="currentlyWorkHereText">
                                            <span class="d-block text-dark">I Currently
                                                Work
                                                Here!</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>

        document.getElementById("removeBtn").addEventListener("click", function() {
            var div = document.getElementById("mydiv1");
            div.remove();
        });
        document.getElementById("removeBtn").addEventListener("click", function() {
            var div = document.getElementById("mydiv2");
            div.remove();
        });
        document.getElementById("removeBtn").addEventListener("click", function() {
            var div = document.getElementById("mydiv3");
            div.remove();
        });
        document.getElementById("removeBtn").addEventListener("click", function() {
            var div = document.getElementById("mydiv4");
            div.remove();
        });
        document.getElementById("removeBtn").addEventListener("click", function() {
            var div = document.getElementById("mydiv5");
            div.remove();
        });
        document.getElementById("removeBtn").addEventListener("click", function() {
            var div = document.getElementById("mydiv6");
            div.remove();
        });
        document.getElementById("removeBtn").addEventListener("click", function() {
            var div = document.getElementById("mydiv7");
            div.remove();
        });
        document.getElementById("removeBtn").addEventListener("click", function() {
            var div = document.getElementById("mydiv8");
            div.remove();
        });
        document.getElementById("removeBtn").addEventListener("click", function() {
            var div = document.getElementById("mydiv9");
            div.remove();
        });
        document.getElementById("removeBtn").addEventListener("click", function() {
            var div = document.getElementById("mydiv10");
            div.remove();
        });
    </script>

    <script type="text/javascript">
        tinymce.init({
            selector: '.myeditablediv_js',
            //selector: "textarea",
            height: 500,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            setup: function(editor) {
                editor.on('init', function() {
                    this.setContent(editor.value);
                });
            }
        });

        function getJobState(id) {
            var countryId = $('#job_country1' + id).val();

            if (countryId != '')
                $.ajax({
                    url: "{{ url('getState1') }}",
                    data: {
                        country: countryId
                    },
                    success: function(response) {

                        $('#job_state').html(response);
                    }
                });
            else
                $('#job_state').html('<option value="">--Select City---</option>');
        }

        function getJobCity(state) {

            if (state != '')
                $.ajax({
                    url: "{{ url('getCity1') }}",
                    data: {
                        state: state
                    },
                    success: function(response) {
                        $('#job_city').html(response);
                    }
                });
            else
                $('#job_city').html('<option value="">--Select City---</option>');
        }

        function getJobState(id) {
            var countryId = $('#job_country' + id).val();

            if (countryId != '')
                $.ajax({
                    url: "{{ url('add-new-experience') }}",
                    data: {
                        country: countryId
                    },
                    success: function(response) {

                        $('#job_state').html(response);
                    }
                });
            else
                $('#job_state').html('<option value="">--Select City---</option>');
        }

        function getJobCity(state) {

            if (state != '')
                $.ajax({
                    url: "{{ url('add-new-experience') }}",
                    data: {
                        state: state
                    },
                    success: function(response) {
                        $('#job_city').html(response);
                    }
                });
            else
                $('#job_city').html('<option value="">--Select City---</option>');
        }
    </script>
    <script>
        function selectState(country_id, state) {
            $('.add-state').html(`<option value="">Select State</option>`)
            state.forEach(function(item, index) {
                if (country_id == item.country_id)
                    $('.add-state').append(`<option value="${item.state_id}">${item.state_name}</option>`)
            });
        }

        function selectCity(state_id, city) {
            $('.add-city').html(`<option value="">Select City</option>`)
            city.forEach(function(item, index) {
                if (state_id == item.state_id)
                    $('.add-city').append(`<option value="${item.city_id}">${item.city_name}</option>`)
            });
        }
        $(document).ready(function() {
            $(".remove").click(function() {
                $(".exrince").remove();
                alert('You want to delete this Experience');

            });
        });
    </script>
