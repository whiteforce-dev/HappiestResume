<!-- End Welcome Message Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- JS Implementing Plugins -->
    <!-- Welcome Message Modal -->
    <div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Header -->
                <div class="modal-close">
                    <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="bi-x-lg"></i>
                    </button>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="modal-body p-sm-5">
                    <div class="text-center">
                        <div class="w-75 w-sm-50 mx-auto mb-4">
                            
                        </div>

                        <h4 class="h1">Welcome to Front</h4>

                        <p>We're happy to see you in our community.</p>
                    </div>
                </div>
                <!-- End Body -->

                <!-- Footer -->
                
                <!-- End Footer -->
            </div>
        </div>
    </div>
    <!-- <script src="{{ url('assets/happiestUserDashboard/assets/js/hs.theme-appearance.js') }}"></script> -->
    <script src="{{ url('assets/happiestUserDashboard/assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js') }}"></script>
    <script src="{{ url('assets/happiestUserDashboard/assets/js/vendor.min.js') }}"></script>
    

    <!-- JS Front -->
    <script src="{{ url('assets/happiestUserDashboard/assets/js/theme.min.js') }}"></script>
    <script src="{{ url('assets/happiestUserDashboard/assets/js/custom.js') }}"></script>

    <script src="{{ url('assets1/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('assets1/js/popper.min.js') }}"></script>
    <script src="{{ url('assets1/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets1/js/slick.min.js') }}"></script>
    <!-- <script src="{{ url('assets1/js/main.js') }}"></script> -->
    <script src="{{ url('assets1/js/switch.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ url('assets/js/plugins.js') }}"></script>
    

    <!-- selectize js -->
    <script src="{{ url('assets/js/selectize.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/vendors/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>
    <script src="{{ url('assets/js/home.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(".js-example-tokenizer").select2({
            tags: true,
            tokenSeparators: [',']
        })
    </script>
    <script>
        function getCity(state) {
            if (state != '')
                $.ajax({
                    url: '{{ url('getcity') }}/',
                    data: {
                        state: state
                    },
                    success: function(response) {
                        $('#city').html(response);
                    }
                });
            else
                $('#city').html('<option value="">--Select City---</option>');
        }
    </script>
    <script>
        function getJobCity(state) {
            if (state != '')
                $.ajax({
                    url: '{{ url('getcity') }}/',
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

        function getJobCitytwo(state) {

            if (state != '')
                $.ajax({
                    url: '{{ url('getcity') }}/',
                    data: {
                        state: state
                    },
                    success: function(response) {
                        $('#job_city2').html(response);
                    }
                });
            else
                $('#job_city2').html('<option value="">--Select City---</option>');
        }

        function getJobCitythree(state) {

            if (state != '')
                $.ajax({
                    url: '{{ url('getcity') }}/',
                    data: {
                        state: state
                    },
                    success: function(response) {
                        $('#job_city3').html(response);
                    }
                });
            else
                $('#job_city3').html('<option value="">--Select City---</option>');
        }

        function getJobCityfour(state) {

            if (state != '')
                $.ajax({
                    url: '{{ url('getcity') }}/',
                    data: {
                        state: state
                    },
                    success: function(response) {
                        $('#job_city4').html(response);
                    }
                });
            else
                $('#job_city4').html('<option value="">--Select City---</option>');
        }

        function getState(country) {
            if (country != '')
                $.ajax({
                    url: '{{ url('getState') }}/',
                    data: {
                        country: country
                    },
                    success: function(response) {

                        $('#state').html(response);
                    }
                });
            else
                $('#state').html('<option value="">--Select City---</option>');
        }

        function getcountry(country) {
            $.ajax({
                url: '{{ url('getcountry') }}/',
                data: {
                    country: country
                },
                success: function(response) {

                    document.getElementById("countryAjax").innerHTML = response;
                }
            });
        }

        function getStateName(state) {
            $.ajax({
                url: '{{ url('getStateName') }}/',
                data: {
                    state: state
                },
                success: function(response) {

                    document.getElementById("stateAjax").innerHTML = response;
                }
            });
        }

        function getCityName(city) {

            $.ajax({
                url: '{{ url('getCityName') }}/',
                data: {
                    city: city
                },
                success: function(response) {

                    document.getElementById("cityAjax").innerHTML = response;
                }
            });
        }


        function getJobState(country) {
            if (country != '')
                $.ajax({
                    url: '{{ url('getState') }}/',
                    data: {
                        country: country
                    },
                    success: function(response) {

                        $('#job_state').html(response);
                    }
                });
            else
                $('#job_state').html('<option value="">--Select City---</option>');
        }

        function getJobStatetwo(country) {
            if (country != '')
                $.ajax({
                    url: '{{ url('getState') }}/',
                    data: {
                        country: country
                    },
                    success: function(response) {

                        $('#job_state2').html(response);
                    }
                });
            else
                $('#job_state2').html('<option value="">--Select City---</option>');
        }

        function getJobStatethree(country) {
            if (country != '')
                $.ajax({
                    url: '{{ url('getState') }}/',
                    data: {
                        country: country
                    },
                    success: function(response) {

                        $('#job_state3').html(response);
                    }
                });
            else
                $('#job_state3').html('<option value="">--Select City---</option>');
        }

        function getJobStatefour(country) {
            if (country != '')
                $.ajax({
                    url: '{{ url('getState') }}/',
                    data: {
                        country: country
                    },
                    success: function(response) {

                        $('#job_state4').html(response);
                    }
                });
            else
                $('#job_state4').html('<option value="">--Select City---</option>');
        }
    </script>

    <script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }

       
    </script>
    
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script>
        $(function() {
            $(".js-example-basic-multiple").select2();
        });
    </script>
    <script>
        function NextPreviousOpen(active_dis) {
            $('.tab-pane').removeClass('active in');
            $('#' + active_dis).addClass('active in');
        }

        function saveProTab() {
            var user_id = $('#ajaxId').val();
            var fname = $('#fname').val();
            var father_name = $('#father_name').val();

            var address = $('#address-input').val();
            var lat = $('#address-latitude').val();
            var long = $('#address-longitude').val();

            var current_title = $('#current_title').val();
            var is_partTime = $('#is_partTime').val();
            var country_code = $('#country_code').val();
            var contact = $('#contact').val();
            var is_experience = $('#is_experience').val();
            var candidate_type = $('#candidate_type').val();

            $.ajax({
                url: "{{ url('saveProfileData') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    user_id: user_id,
                    fname: fname,
                    father_name: father_name,
                    country_code: country_code,
                    contact: contact,
                    address: address,
                    lat: lat,
                    long: long,
                    current_title: current_title,
                    is_partTime: is_partTime,
                    is_experience: is_experience,
                    candidate_type: candidate_type
                },
                cache: false,
                success: function(response) {
                    Swal.fire({
                        html: response.message,
                        imageUrl: response.image,
                        imageHeight: 200,
                        imageWidth: 200,
                        width: '650px',
                        showConfirmButton: true,
                    });
                }

            });

        }

        function get(ele) {
            var user_id = $('#ajaxId').val();
            var job_company = ele;
            alert(job_company);
        }



        function saveExperienceTab(ele) {
            var user_id = $('#ajaxId').val();
            var job_company = $('#job_company').val();
            var designation = $('#designation').val();
            var job_country = $('#job_country').val();
            var job_state = $('#job_state').val();
            var job_city = $('#job_city').val();
            var start_date = $('#start_date').val();
            var start_month = $('#start_month').val();
            var end_month = $('#end_month').val();
            var end_date = $('#end_date').val();
            var isWorking = $('#isWorking').val();
            var job_desc = $('#job_desc').val();

            var job_company2 = $('#job_company2').val();
            var designation2 = $('#designation2').val();
            var job_country2 = $('#job_country2').val();
            var job_state2 = $('#job_state2').val();
            var job_city2 = $('#job_city2').val();
            var start_date2 = $('#start_date2').val();
            var end_date2 = $('#end_date2').val();
            var isWorking2 = $('#isWorking2').val();
            var job_desc2 = $('#job_desc2').val();

            var job_company3 = $('#job_company3').val();
            var designation3 = $('#designation3').val();
            var job_country3 = $('#job_country3').val();
            var job_state3 = $('#job_state3').val();
            var job_city3 = $('#job_city3').val();
            var start_date3 = $('#start_date3').val();
            var end_date3 = $('#end_date3').val();
            var isWorking3 = $('#isWorking3').val();
            var job_desc3 = $('#job_desc3').val();

            var job_company4 = $('#job_company4').val();
            var designation4 = $('#designation4').val();
            var job_country4 = $('#job_country4').val();
            var job_state4 = $('#job_state4').val();
            var job_city4 = $('#job_city4').val();
            var start_date4 = $('#start_date4').val();
            var end_date4 = $('#end_date4').val();
            var isWorking4 = $('#isWorking4').val();
            var job_desc4 = $('#job_desc4').val();

            $.ajax({
                url: "{{ url('saveExperienceData') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    user_id: user_id,

                    job_company: job_company,
                    designation: designation,
                    job_country: job_country,
                    job_state: job_state,
                    job_city: job_city,
                    start_date: start_date,
                    start_month: start_month,
                    end_month: end_month,
                    end_date: end_date,
                    isWorking: isWorking,
                    job_desc: job_desc,

                    job_company2: job_company2,
                    designation2: designation2,
                    job_country2: job_country2,
                    job_state2: job_state2,
                    job_city2: job_city2,
                    start_date2: start_date2,
                    end_date2: end_date2,
                    isWorking2: isWorking2,
                    job_desc2: job_desc2,

                    job_company3: job_company3,
                    designation3: designation3,
                    job_country3: job_country3,
                    job_state3: job_state3,
                    job_city3: job_city3,
                    start_date3: start_date3,
                    end_date3: end_date3,
                    isWorking3: isWorking3,
                    job_desc3: job_desc3,

                    job_company4: job_company4,
                    designation4: designation4,
                    job_country4: job_country4,
                    job_state4: job_state4,
                    job_city4: job_city4,
                    start_date4: start_date4,
                    end_date4: end_date4,
                    isWorking4: isWorking4,
                    job_desc4: job_desc4,
                },
                cache: false,
                success: function(response) {}
            });
        }

        function saveEducationTab() {
            var user_id = $('#ajaxId').val();

            var nameOther = $('#nameOther').val();
            var boardOther = $('#boardOther').val();
            var passYearOther = $('#passYearOther').val();
            var locationOther = $('#locationOther').val();

            var postname = $('#postname').val();
            var postboard = $('#postboard').val();
            var postyear = $('#postyear').val();
            var postlocation = $('#postlocation').val();
            //var postweb = $('#postweb').val();

            var graduateName = $('#graduateName').val();
            var graduateboard = $('#graduateboard').val();
            var graduateyear = $('#graduateyear').val();
            var graduatelocat = $('#graduatelocat').val();
            //var graduateweb = $('#graduateweb').val();

            var nameXII = $('#nameXII').val();
            var boardXII = $('#boardXII').val();
            var passYearXII = $('#passYearXII').val();
            var locationXII = $('#locationXII').val();
            //var websiteXII = $('#websiteXII').val();

            var nameX = $('#nameX').val();
            var boardX = $('#boardX').val();
            var passYearX = $('#passYearX').val();
            var locationX = $('#locationX').val();
            // var websiteX = $('#websiteX').val();

            $.ajax({
                url: "{{ url('saveEducationData') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    user_id: user_id,

                    nameOther: nameOther,
                    boardOther: boardOther,
                    passYearOther: passYearOther,
                    locationOther: locationOther,

                    postname: postname,
                    postboard: postboard,
                    postyear: postyear,
                    postlocation: postlocation,
                    // postweb : postweb,

                    graduateName: graduateName,
                    graduateboard: graduateboard,
                    graduateyear: graduateyear,
                    graduatelocat: graduatelocat,
                    //  graduateweb : graduateweb,

                    nameXII: nameXII,
                    boardXII: boardXII,
                    passYearXII: passYearXII,
                    locationXII: locationXII,
                    //    websiteXII : websiteXII,

                    nameX: nameX,
                    boardX: boardX,
                    passYearX: passYearX,
                    locationX: locationX,
                    //  websiteX : websiteX

                },
                cache: false,
                success: function(response) {
                    Swal.fire({
                        html: response.message,
                        imageUrl: response.image,
                        imageHeight: 200,
                        imageWidth: 200,
                        width: '650px',
                        showConfirmButton: true,
                    });
                }

            });
        }

        function saveAdditionTab() {
            var user_id = $('#ajaxId').val();
            var curloction = $('#curloction').val();
            var curCTC = $('#curCTC').val();
            var totExp = $('#totExp').val();
            var notice = $('#notice').val();
            var pref_location = $('#preffered_location').val();
            var reloacate = $('#reloacate').val();



            var age = $('#age').val();
            var gender = $('#gender').val();
            var marrital = $('#marrital').val();
            var language = $('#language').val();
            var adhar = $('#adhar').val();
            var hobbies = $('#hobbies').val();
            var fb_link = $('#fb_link').val();
            var linkedin = $('#linkedin').val();
            var twitter_link = $('#twitter_link').val();

            $.ajax({
                url: "{{ url('saveAdditionalData') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    user_id: user_id,
                    curloction: curloction,
                    curCTC: curCTC,
                    totExp: totExp,
                    notice: notice,
                    pref_location: pref_location,
                    reloacate: reloacate,

                    age: age,
                    gender: gender,
                    marrital: marrital,
                    language: language,
                    adhar: adhar,
                    hobbies: hobbies,
                    fb_link: fb_link,
                    linkedin: linkedin,
                    twitter_link: twitter_link

                },

                cache: false,
                success: function(response) {
                    Swal.fire({
                        html: response.message,
                        imageUrl: response.image,
                        imageHeight: 200,
                        imageWidth: 200,
                        width: '650px',
                        showConfirmButton: true,
                    });
                }

            });

        }

        function saveSkillsTab() {
            var user_id = $('#ajaxId').val();
            var user_skill = $('#user_skill').val();
            var user_project = $('#user_project').val();
            var achieve_title = $('#achieve_title').val();
            console.log(user_skill)
            $.ajax({
                url: "{{ url('saveSkilsData') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    user_id: user_id,
                    user_skill: user_skill,
                    user_project: user_project,
                    achieve_title: achieve_title

                },
                cache: false,
                success: function(response) {
                    Swal.fire({
                        html: response.message,
                        imageUrl: response.image,
                        imageHeight: 200,
                        imageWidth: 200,
                        width: '650px',
                        showConfirmButton: true,
                    });
                }

            });
        }

        function saveObjectiveTab() {
            var user_id = $('#resume_summry_user_id').val();

            var user_career = $('#user_career').val();


            $.ajax({
                url: "{{ url('saveObjectiveData') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    user_id: user_id,
                    user_career: user_career
                },
                cache: false,
                success: function(data) {
                    Swal.fire({
                        html: data.message,
                        imageUrl: data.image,
                        imageHeight: 200,
                        imageWidth: 200,
                        width: '650px',
                        showConfirmButton: true,
                    });
                }

            });
        }

        function ajaxFunSkills() {
            var user_skill = $('#user_skill').val();
            document.getElementById("javaSkill").innerHTML = '';
            user_skill.forEach(mySkillFunction);
        }

        function mySkillFunction(item, index) {
            document.getElementById("javaSkill").innerHTML +=
                '<div style="margin:0 -15px 10px" class="added"><div style="width:28%; float:left;padding:0 15px"><p style="font-size:11px; margin:0">' +
                item +
                '</p></div><div style="width:72%; float:left; padding:0 15px"><div style="height:8px; position:relative; background:#000; width:67%; top:1px"><div style="width:10px; left:60%; height:10px; background:#ffc813; border:2px solid #000; border-radius:50%;  position:absolute; top:-1px"></div></div></div> <div style="clear:both"></div></div>';

        }

        function ajaxFunProject() {
            var user_project = $('#user_project').val();
            document.getElementById("javaProject").innerHTML = '';
            user_project.forEach(myProjectFunction);
        }

        function myProjectFunction(item, index) {
            document.getElementById("javaProject").innerHTML +=
                '<p style="margin-top:5px;    font-size: 12px;"><a href="#" style="color:#fff; text-decoration:none; ">' +
                item + '</a></p>';
        }


        function ajaxFunAchieve() {
            var user_achieve = $('#achieve_title').val();
            document.getElementById("javaAchieve").innerHTML = '';
            user_achieve.forEach(myAchieveFunction);

        }

        function myAchieveFunction(item, index) {
            document.getElementById("javaAchieve").innerHTML +=
                '<p style="margin-top:5px;font-size: 12px;"><a href="#" style="color:#fff; text-decoration:none; ">' +
                item + '</a></p>'
        }

        function ajaxFunLanguage() {
            var user_language = $('#language').val();
            document.getElementById("javaLanguage").innerHTML = '';
            user_language.forEach(myLanguageFunction);

        }

        function myLanguageFunction(item, index) {
            document.getElementById("javaLanguage").innerHTML +=
                '<div style="width:90%; float:left;"><p style="margin-top:0; font-weight:800; font-size: 12px; text-transform:uppercase; border-bottom:2px #ffc813 solid; width:99%;"><span style="background:#212121; position: relative; top: 6px; margin-bottom:10px; padding-right: 5px;">' +
                item +
                '</span></p></div><div style="width:10%; float:left; "><p style="position: relative;margin-bottom:10px;font-size: 12px; margin-top:0; top: 6px;"><strong>A1</strong></p></div><div style="clear:both; margin:0; padding:0; width:100%"></div>'
        }

        function javaHobbyFunc() {
            var hobbies = $('#hobbies').val();
            document.getElementById("javaHobby").innerHTML = '';
            hobbies.forEach(myHobbyFunction);
        }

        function myHobbyFunction(item, index) {
            if (item == 'sports')
                var imgSrc = "{!! asset('public/resume_yellow/assets/imgs/sports.png') !!}"
            else if (item == 'music')
                var imgSrc = "{!! asset('public/resume_yellow/assets/imgs/music.png') !!}"
            else if (item == 'reading')
                var imgSrc = "{!! asset('public/resume_yellow/assets/imgs/reading.png') !!}"
            else if (item == 'dancing')
                var imgSrc = "{!! asset('public/resume_yellow/assets/imgs/dance.png') !!}"
            else if (item == 'art')
                var imgSrc = "{!! asset('public/resume_yellow/assets/imgs/art.png') !!}"
            else if (item == 'internet')
                var imgSrc = "{!! asset('public/resume_yellow/assets/imgs/internet.png') !!}"
            else if (item == 'technology')
                var imgSrc = "{!! asset('public/resume_yellow/assets/imgs/technology.png') !!}"
            else if (item == 'travelling')
                var imgSrc = "{!! asset('public/resume_yellow/assets/imgs/airplane.png') !!}"
            else if (item == 'writing')
                var imgSrc = "{!! asset('public/resume_yellow/assets/imgs/writting.png') !!}"
            else if (item == 'gardening')
                var imgSrc = "{!! asset('public/resume_yellow/assets/imgs/gardening.png') !!}"

            document.getElementById("javaHobby").innerHTML += '<div style="width:49%; float:left"><img src="' + imgSrc +
                '" width="30"/><p style="font-size:10px; text-transform:uppercase; margin-bottom:15px;margin-top:5px">' +
                item + '</p></div>'

        }

        

        function img_pathUrl(input) {
            $('#editAvatarImgModal')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
        }

        function javaWorkShowBlock(company) {
            if (company != '') {
                document.getElementById("work_experience").style.display = "block";
            } else {
                document.getElementById("work_experience").style.display = "none";
            }
        }
    </script>

    <script>
        $(document).on('change', '#editAvatarUploaderModal', function() {
            var user_id = $('#ajaxId').val();

            var postData = new FormData();
            postData.append('image', this.files[0]);
            postData.append('user_id', user_id);
            

            var url = "{{ url('saveProImage') }}";
            
            $.ajax({

                type: "post",
                url: url,
                data: postData,

                contentType: false,
                processData: false,

                success: function(response) {
                    Swal.fire({
                        html: response.message,
                        imageUrl: response.image,
                        imageHeight: 200,
                        imageWidth: 200,
                        width: '650px',
                        showConfirmButton: true,
                    });
                }


            });
        });
    </script>

    <script>
        $(document).ready(function() {

            <?php if ($user_login_type != '') {?>

            $('#contact').prop("readonly", false);
            $('#contact').prop("required", true);
            <?php } else { ?>
            $('#contact').prop("readonly", true);
            <?php } ?>
        });
    </script>

    <script>
        $(document).ready(function() {

        });
    </script>
    
    
    


    <script>
        function addnewworkexp(){
            var html = $("#workExpCards").clone();
            let i = Math.random().toString(36).substring(7);
           
            var childId = "workExpArrayItems_" + i;
            html.find(".workExperienceInfo").attr("id", childId);
            childId = "#workExpArrayItems_" + i;
            html.find(".workExperiencehead").attr("href", childId);
            html.find(".workExperiencehead").attr("data-bs-target", childId);
            
            html.find("#workExpheading").html("Work Experience");
            html.find("#job_company").val("");
            html.find("#designation").val("");
            html.find("#job_desc").html("");
            html.find("#start_date").val("");
            html.find("#end_date").val("");
            $("#multiForm").append(html);
        }

        function addEducation(){
            var html = $("#educationCards").clone();
            let i = Math.random().toString(36).substring(7);
            var childId = "educationArrayItems_" + i;
            html.find(".educationAddInfo").attr("id", childId);
            childId = "#educationArrayItems_" + i;
            html.find(".educationAddhead").attr("href", childId);
            html.find(".educationAddhead").attr("data-bs-target", childId);
           
            html.find("#educationheading").html("Education");
            html.find("#education_type").val("");
            html.find("#education_name").val("");
            html.find("#education_organization").val("");
            html.find("#education_location").val("");
           
            $("#multiFormEducation").append(html);
        }

        $(document).on("click", ".removeEducationrow", function() {
            var id = $(this).attr('id');
            $(this).parents(".educationCards_"+id).remove();
        });

        $(document).on("click", ".removeWorkExprow", function() {
            var id = $(this).attr('id');
            $(this).parents(".workExpCards_"+id).remove();
        });


    </script>


    <script>
        $(document).ready(function() {

            $(function() {
                    $("#myForm").submit(function(event) {
                            event.preventDefault();
                            $.ajaxSetup({
                                headers: {
                                    'x-csrf-token': $('meta[name="_token"]').attr('content')
                                }
                            });
                            $.ajax({
                                method: 'POST',
                                url: "{{ url('checkdata') }}",
                                dataType: "json",

                                contentType: "application/json",
                                data: $('#myForm').serialize(),
                                success: function(response) {

                                },
                                error: function(xhr, desc, err) {

                                }


                            });
                        });
                    });
            });
        
    </script>
    <script>
        $(document).ready(function() {
            $('#checkdataForm').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action') || window.location.pathname,
                    type: "post",
                    data: $(this).serialize(),
                    success: function(data) {
                        Swal.fire({
                            html: data.message,
                            imageUrl: data.image,
                            imageHeight: 200,
                            imageWidth: 200,
                            width: '650px',
                            showConfirmButton: true,
                        });
                        $("#form_output").html(data);
                    },
                    error: function(jXHR, textStatus, errorThrown) {
                        alert(errorThrown);
                    }
                });
            });
        });

        $('#educationForm').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action') || window.location.pathname,
                type: "post",
                data: $(this).serialize(),
                success: function(data) {
                    Swal.fire({
                        html: data.message,
                        imageUrl: data.image,
                        imageHeight: 200,
                        imageWidth: 200,
                        width: '650px',
                        showConfirmButton: true,
                    });
                },
                error: function(jXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        });
       
    </script>
    
    <script src="{{ url('assets/js/mapInput.js') }}"></script>


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

   
    <script src="{{ url('assets/js/mapInput.js') }}"></script>
    <script>
        

        function run() {
            var educationType = document.querySelector("#nameOther");
            var educationNameLabel = document.querySelector("#boardOther");
            //educationNameLabel.value = educationType.value;
        }

        function run1() {
            var educationType = document.querySelector("#nameX");
            var educationNameLabel = document.querySelector("#boardX");
            //educationNameLabel.value = educationType.value;
        }

        function run2() {
            var educationType = document.querySelector("#nameXII");
            var educationNameLabel = document.querySelector("#boardXII");
            //educationNameLabel.value = educationType.value;
        }

        function run3() {
            var educationType = document.querySelector("#graduateName");
            var educationNameLabel = document.querySelector("#graduateboard");
            //educationNameLabel.value = educationType.value;
        }

        function run4() {
            var educationType = document.querySelector("#postname");
            var educationNameLabel = document.querySelector("#postboard");
            //postboard.value = postname.value;
        }

        function run5() {
            var educationType = document.querySelector("#Edu_type");
            var educationNameLabel = document.querySelector("#Edu_board");
            //postboard.value = postname.value;
        }

        function run6() {
            var educationType = document.querySelector("#Edu_type2");
            var educationNameLabel = document.querySelector("#Edu_board2");
            //postboard.value = postname.value;
        }

        function run7() {
            var educationType = document.querySelector("#Edu_type3");
            var educationNameLabel = document.querySelector("#Edu_board3");
            //postboard.value = postname.value;
        }

        function run8() {
            var educationType = document.querySelector("#Edu_type4");
            var educationNameLabel = document.querySelector("#Edu_board4");
            //postboard.value = postname.value;
        }

        function run9() {
            var educationType = document.querySelector("#Edu_type5");
            var educationNameLabel = document.querySelector("#Edu_board5");
            // postboard.value = postname.value;
        }

        function run10() {
            var educationType = document.querySelector("#Edu_type6");
            var educationNameLabel = document.querySelector("#Edu_board6");
            //postboard.value = postname.value;
        }

       
    </script>

   

   

</body>

</html>
