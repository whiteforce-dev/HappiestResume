@php
    $registerations = \App\Models\UserLogin_Model::where(['is_active' => 1])->orderBy('id', 'desc')->take(2)->get();
    $contactus = \App\Models\ContactModel::where(['is_del' => 0])->first();
    $aboutus = \App\Models\AboutUsModel::where(['is_del' => 0])->first();
@endphp
<footer class="footer_container" id="contact">
    <div class="section-wave">
        <svg x="0px" y="0px" viewBox="0 0 1920 45" width="1920" height="45px" preserveAspectRatio="none">
            <path d="M1920,0c-82.8,0-108.8,44.4-192,44.4c-78.8,0-116.5-43.7-192-43.7c-77.1,0-115.9,44.4-192,44.4c-78.2,0-114.6-44.4-192-44.4c-78.4,0-115.3,44.4-192,44.4C883.1,45,841,0.6,768,0.6C691,0.6,652.8,45,576,45C502.4,45,461.9,0.6,385,0.6C306.5,0.6,267.9,45,191,45C115.1,45,78,0.6,0,0.6V45h1920V0z">
            </path>
        </svg>
    </div>
    <div class="container">
        <div class="row">
            <link rel="stylesheet" href="https://happiestresume.com/public/front/css/style.css">
            <div class="col-lg-3 col-sm-6">
                <div class="link_box">
                    <div class="border-line small_border"></div>
                    <div class="footer_head">About Us</div>
                    <div class="footer_content">
                        {{isset($aboutus->description)?$aboutus->description:'Happiest Resume Pvt. Ltd. is a fastest growing ISO 9001:2008 certified'}}
                        <br>
                        <ul class="footer-contact list-unstyled">
                            @if(isset($contactus->address))
                                <li><i class="mdi mdi-map-marker"></i>
                                    <p>
                                        {{$contactus->address}}
                                    </p>
                                </li>
                            @endif
                            <li><i class="mdi mdi-email"></i>
                                <p>
                                    <a>
                                        {{isset($contactus->email)?$contactus->email:'saisuninfo@gmail.com'}}
                                    </a>
                                </p>
                            </li>

                            {{--<li><i class="mdi mdi-phone"></i>--}}
                            {{--<p>--}}
                            {{--{{isset($contactus->contact)?$contactus->contact:'+91-9981435702'}}--}}
                            {{--+49 30 47373795--}}
                            {{--</p>--}}
                            {{--</li>--}}
                        </ul>
                        {{--SaiSun Outsourcing Services Pvt. Ltd. is a fastest growing ISO 9001:2008 certified, human--}}
                        {{--resource outsourcing consulting and placement company in Jabalpur.--}}
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="link_box">
                    <div class="border-line small_border"></div>
                    <div class="footer_head">Quick Links</div>
                    <ul class="list-unstyled footer_ul">
                        <li><a class="page-scroll nav-link1" href="{{Request::is('/') ? " #about" : URL::to('/#about')}}">About Us</a></li>
                        <li><a class="page-scroll nav-link1" href="{{Request::is('/') ? " #about" : URL::to('/#about')}}">How It Works</a></li>
                        <li> <a class="page-scroll nav-link1" href="{{Request::is('/') ? " #templates" :
                            URL::to('/#templates')}}">
                            Templates
                        </a></li>
                        <li><a class="page-scroll nav-link1" href="{{Request::is('/') ? " #testimonial" : URL::to('/#testimonial')}}">Testimonial</a></li>
                        <li><a href="{{ url('term-Condition') }}">Terms & Conditions</a></li>
                        <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="border-line small_border"></div>
                <div class="footer_head">Social Media</div>
                <div class="footer_iconbox">
                    @php
                        $socialNetwork = App\Models\SocialNetwork::where('is_active', 1)->get();
                    @endphp

                    @if(count($socialNetwork))
                        @foreach ($socialNetwork as $item)

                            @if($item->name == 'Facebook' or $item->name == 'facebook')
                                <a target="_blank" href="{{ isset($item->link)?$item->link:'' }}" type="button"
                                   class="footer_social_btn color-fb">
                                    <i class="mdi mdi-facebook btn-fb btn-floating margin0"></i>
                                    Facebook
                                </a>
                            @endif

                            @if($item->name == 'Twitter' or $item->name == 'twitter')
                                <a target="_blank" href="{{ isset($item->link)?$item->link:'' }}" type="button"
                                   class="footer_social_btn color-tw">
                                    <i class="mdi mdi-twitter btn-tw btn-floating margin0"></i>
                                    Twitter
                                </a>
                            @endif

                            @if($item->name == 'Youtube' or $item->name == 'youtube')
                                <a target="_blank" href="{{ isset($item->link)?$item->link:'' }}" type="button"
                                   class="footer_social_btn color-youtube">
                                    <i class="mdi mdi-youtube btn-yt btn-floating margin0"></i>
                                    Youtube
                                </a>
                            @endif

                            @if($item->name == 'Linkedin' or $item->name == 'linkedin')
                                <a target="_blank" href="{{ isset($item->link)?$item->link:'' }}" type="button"
                                   class="footer_social_btn color-li">
                                    <i class="mdi mdi-linkedin btn-li btn-floating margin0"></i>
                                    Linkedin
                                </a>
                            @endif

                            @if($item->name == 'Instagram' or $item->name == 'instagram')
                                <a target="_blank" href="{{ isset($item->link)?$item->link:'' }}" type="button"
                                   class="footer_social_btn ins-ic">
                                    <i class="mdi mdi-instagram btn-ins btn-floating margin0"></i>
                                    Instagram
                                </a>
                            @endif

                        @endforeach
                    @endif
                </div>
            </div>
            {{--<div class="col-lg-3 col-sm-6">--}}
            {{--<div class="link_box">--}}
            {{--<div class="border-line small_border"></div>--}}
            {{--<div class="footer_head">Recent Registered</div>--}}
            {{--<div class="recent_post_block">--}}

            {{--@foreach($registerations as $registeration)--}}
            {{--<div class="recent_block">--}}
            {{--<img src="{{URL::to('public/front').'/'}}images/team1.jpg">--}}
            {{--@if(file_exists("public/$registeration->image") && !empty($registeration->image))--}}
            {{--<img src="{{URL::to("public/$registeration->image")}}">--}}
            {{--@else--}}
            {{--<img src="{{URL::to('public/images/d.png')}}">--}}
            {{--@endif--}}
            {{--<div class="post_content">--}}
            {{--<b>{{isset($registeration->name)?$registeration->name:'-'}}</b>--}}
            {{--<p>{{isset($registeration->created_date)?\Carbon\Carbon::parse($registeration->created_date)->format('d-M-Y h:i A'):'-'}}
            </p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--@endforeach--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            <script>
                function print_statement() {
                    var divToPrint = document.getElementById('append_resume');

                    var newWin = window.open('', 'Print-Window');

                    newWin.document.open();

                    newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');

                    newWin.document.close();

                    setTimeout(function () {
                        newWin.close();
                    }, 10);
                }
            </script>
              @php
            $industries= App\Models\Industry::get();

            @endphp
            <div class="col-lg-3 col-sm-6">
                <div class="link_box bottom_contact">
                    <div class="border-line small_border"></div>
                    <div class="footer_head">Contact Us</div>
                    <input type="text" class="form-control" name="name_q" id="name_q" placeholder="Enter Name" required>
                    <input type="text" class="form-control" name="email_q" id="email_q" placeholder="Enter Email" required>
                    <input type="number" class="form-control" name="contact_q" id="contact_q" placeholder="Enter Contact" required>

                    <select class="form-control" style="font-family: Gill Sans, sans-serif;"  aria-label="Default select example" name="industry" id="industry" required>
                      <option value="" selected>Open this select Industry</option>
                        @foreach($industries as $industry )
                        <option value="{{ $industry->industry_name }}">{{ $industry->industry_name }}</option>
                        @endforeach
                    </select>

                    <input type="text" class="form-control" name="message_q" id="message_q" placeholder="Enter Message" required>
                    <button class="btn btn-sm btn-warning" onclick="create_contact_query();">Send</button>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="footer_copy">
                    © {{ date('Y') }} Happiest Resume All Right Reserved
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
    function create_contact_query() {
        var name = $('#name_q').val();
        var email = $('#email_q').val();
        var contact = $('#contact_q').val();
        var industry = $('#industry').val();
        var message = $('#message_q').val();
        if (name.trim() == '') {
            $('#name_q').focus();
        } else if (email.trim() == '') {
            $('#email_q').focus();
        } else {
            $.post('{{URL::to('save_contact_query') }}', {
                    name: name,
                    email: email,
                    contact: contact,
                    industry: industry,
                    message: message,
                },
                function (data) {
                    $('#name_q').val('');
                    $('#email_q').val('');
                    $('#contact_q').val('');
                    $('#industry').val('');
                    $('#message_q').val('');
                    SnackBar({
                        message: "Your query has been sent w'll get back to you soon...!",
                        status: "success",
                        fixed: true,
                        timeout: 7000
                    });
                });
        }

    }
</script>
<div class="modal fade top" id="modal_resume_preview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     data-backdrop="true" style="display: none;" aria-hidden="true">
    <div class="modal-dialog resume_modal modal-full-height modal-top modal-notify modal-warning" role="document">
        <div class="modal-content">
            <div class="download_fixed">
                <div class="card">
                    <div class="card-share">
                        <div class="social-reveal" id="social_card_box">

                            <!--                                <a data-toggle="tooltip" data-placement="bottom" data-original-title="Word"-->
                            <!--                                   type="button" class="btn-floating btn-tw mt-0 mx-1 waves-effect waves-light"><i-->
                            <!--                                        class="mdi mdi-file-word"></i></a>-->
                            <!--                                <a data-toggle="tooltip" data-placement="bottom" data-original-title="Doc"-->
                            <!--                                   type="button" class="btn-floating btn-gplus mt-0 mx-1 waves-effect waves-light"><i-->
                            <!--                                        class="mdi mdi-file-document"></i></a>-->
                            {{-- <a data-toggle="tooltip" data-placement="bottom" href="resume_link.html" target="_blank" --}}
                            @if(session()->has('user'))
                                <a target="_blank"
                                   href="{{URL::to('generatePDF').'/'.base64_encode(session('user')->id)}}"
                                   data-toggle="tooltip" data-placement="bottom" data-original-title="Pdf" type="button"
                                   class="btn-floating btn-fb mt-0 mx-1 waves-effect waves-light"><i
                                            class="mdi mdi-file-pdf"></i></a>
                                @php
                                    $name = \App\Http\Controllers\UserTemplateController::slugify(session('user')->name);
                                @endphp
                                <a data-toggle="tooltip" data-placement="bottom"
                                   href="{{URL::to('resume')."/$name/".base64_encode(session('user')->id)}}"
                                   target="_blank" data-original-title="Link" type="button"
                                   class="btn-floating btn-whatsapp mt-0 mx-1 waves-effect waves-light">
                                    <i class="mdi mdi-earth"></i>
                                </a>
                            @else
                                <a data-toggle="tooltip" data-placement="bottom" href="#" target="_blank"
                                   data-original-title="Link" type="button"
                                   class="btn-floating btn-whatsapp mt-0 mx-1 waves-effect waves-light">
                                    <i class="mdi mdi-earth"></i>
                                </a>
                            @endif
                        </div>
                        <a data-toggle="tooltip" data-placement="left" data-original-title="Download"
                           class="btn-floating peach-gradient btn-action share-toggle indigo ml-auto mr-2 float-right waves-effect waves-light"
                           onclick="Downloadbtnclick(this);"><i class="mdi mdi-download-multiple"></i></a>
                    </div>
                </div>
            </div>
            <div class="close_modal">
                <a type="button" class="btn-sm btn btn-outline-warning waves-effect close_previewbtn"
                   data-dismiss="modal"><i class="mdi mdi-close"></i></a>
            </div>
            <div class="modal-body modal_resume_container">
                <div class="append_resume" onclick='return false;' contenteditable="false" id="resume_container">
                    {{--Resume data is appending here--}}
                </div>
            </div>
            <div class="preview_footerbtn">
                <!--                    <button type="button" class="btn btn-info waves-effect waves-light">Pdf<i-->
                <!--                            class="mdi mdi-file-pdf ml-1"></i></button>-->
                <!--                    <a type="button" href="resume_link.html" target="_blank"-->
                <!--                       class="btn btn-success waves-effect waves-light">Share Link<i class="mdi mdi-whatsapp ml-1"></i></a>-->
                <a type="button" class="btn btn-warning waves-effect waves-light" data-dismiss="modal"
                   onclick="ShowSuccessPopupMsg('Resume Created Successfully!');">Save &amp; Continue
                    <i class="mdi mdi-send ml-1"></i>
                </a>
                <a type="button" class="btn btn-outline-warning waves-effect" data-dismiss="modal">
                    Close<i class="mdi mdi-close ml-1"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-success modal_small" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="heading lead">Successfully Done</p>
                <!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                <!--                        <span aria-hidden="true" class="white-text">×</span>-->
                <!--                    </button>-->
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <i class="fas fa-check fa-4x mb-3 mdi mdi-check animated rotateIn"></i>
                    <p id="dynamic_success_popuptxt">Resume Created Successfully.</p>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                @if(session()->has('user'))
                    @php
                        $name = \App\Http\Controllers\UserTemplateController::slugify(session('user')->name);
                    @endphp
                    <a type="button" href="{{URL::to('resume')."/$name/".base64_encode(session('user')->id)}}"
                       class="btn btn-outline-success waves-effect">Ok Got it</a>
                @else
                    <a type="button" href="#" class="btn btn-outline-success waves-effect">Ok Got it</a>
                @endif
                {{-- <a type="button" href="resume_link.html" class="btn btn-outline-success waves-effect">Ok Got it</a> --}}
            </div>
        </div>
    </div>
</div>
<div class="modal fade show" id="ModalError" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-modal="true">
    <div class="modal-dialog modal-notify modal-danger modal_small" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="heading lead">Error Occured</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <i class="fas fa-check mdi mdi-close fa-4x mb-3 animated rotateIn"></i>
                    <p id="dynami_error_popuptxt">Do Not Enter More Than Education.</p>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Ok Got it</a>
            </div>
        </div>
    </div>
</div>


<script>
    (function () {
        var
            form = $('.form'),
            cache_width = form.width(),
            a4 = [595.28, 841.89]; // for a4 size paper width and height

        $('#create_pdf').on('click', function () {
            $('body').scrollTop(0);
            createPDF();
        });

        //create pdf
        function createPDF() {
            getCanvas().then(function (canvas) {
                var
                    img = canvas.toDataURL("image/png"),
                    doc = new jsPDF({
                        unit: 'px',
                        format: 'a4'
                    });
                //                var width = doc.internal.pageSize.getWidth();
                //                var height = doc.internal.pageSize.getHeight();
                doc.addImage(img, 'JPEG', 20, 200);

                doc.save('happiestresume_' + randomstring(5));
                form.width(cache_width);
            });
        }

        // create canvas object
        function getCanvas() {
            //            form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');
            return html2canvas(form, {
                imageTimeout: 2000,
                removeContainer: true
            });
        }

    }());

    function randomstring(L) {
        var s = '';
        var randomchar = function () {
            var n = Math.floor(Math.random() * 62);
            if (n < 10) return n; //1-10
            if (n < 36) return String.fromCharCode(n + 55); //A-Z
            return String.fromCharCode(n + 61); //a-z
        }
        while (s.length < L) s += randomchar();
        return s;
    }
</script>
<script>
    /*
     * jQuery helper plugin for examples and tests
     */
    (function ($) {
        $.fn.html2canvas = function (options) {
            var date = new Date(),
                $message = null,
                timeoutTimer = false,
                timer = date.getTime();
            html2canvas.logging = options && options.logging;
            html2canvas.Preload(this[0], $.extend({
                complete: function (images) {
                    var queue = html2canvas.Parse(this[0], images, options),
                        $canvas = $(html2canvas.Renderer(queue, options)),
                        finishTime = new Date();

                    $canvas.css({
                        position: 'absolute',
                        left: 0,
                        top: 0
                    }).appendTo(document.body);
                    $canvas.siblings().toggle();

                    $(window).click(function () {
                        if (!$canvas.is(':visible')) {
                            $canvas.toggle().siblings().toggle();
                            throwMessage("Canvas Render visible");
                        } else {
                            $canvas.siblings().toggle();
                            $canvas.toggle();
                            throwMessage("Canvas Render hidden");
                        }
                    });
                    throwMessage('Screenshot created in ' + ((finishTime.getTime() - timer) / 1000) + " seconds<br />", 4000);
                }
            }, options));

            function throwMessage(msg, duration) {
                window.clearTimeout(timeoutTimer);
                timeoutTimer = window.setTimeout(function () {
                    $message.fadeOut(function () {
                        $message.remove();
                    });
                }, duration || 2000);
                if ($message)
                    $message.remove();
                $message = $('<div ></div>').html(msg).css({
                    margin: 0,
                    padding: 10,
                    background: "#000",
                    opacity: 0.7,
                    position: "fixed",
                    top: 10,
                    right: 10,
                    fontFamily: 'Tahoma',
                    color: '#fff',
                    fontSize: 12,
                    borderRadius: 12,
                    width: 'auto',
                    height: 'auto',
                    textAlign: 'center',
                    textDecoration: 'none'
                }).hide().fadeIn().appendTo('body');
            }
        };
    })(jQuery);
</script>
<script type="text/javascript" src="{{URL::to('public/front').'/'}}js/validate.js"></script>
<script src="{{URL::to('public/front').'/'}}js/js-snackbar.js?v=1.1.0"></script>
{{--<script type="text/javascript" src="{{URL::to('public/front').'/'}}js/jquery-3.4.1.min.js"></script>--}}
<script type="text/javascript" src="{{URL::to('public/front').'/'}}js/popper.min.js"></script>
<script type="text/javascript" src="{{URL::to('public/front').'/'}}js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{URL::to('public/front').'/'}}js/mdb.min.js"></script>
<script type="text/javascript" src="{{URL::to('public/front').'/'}}js/master.js"></script>
<script type="text/javascript">
    function ShowSuccessPopupMsg(msg) {
        let getpercent = $(".resume_percent_txtbox .completed").length;
        if (getpercent > 5) {
            var getresume_html = $('#resume_body').html();
            /*Education*/
            var education_school = [];
            var education_school_board = [];
            var education_school_website = [];
            var education_type = [];
            var education_icon = [];
            $(".resu_education_txt_school").each(function () {
                if (education_type.indexOf($(this).attr('education_type')) === -1) education_type.push($(this).attr('education_type'));
                //                if (education_school.indexOf($(this).text().trim()) === -1) education_school.push($(this).text().trim());
                education_school.push($(this).text().trim());
                //if (education_icon.indexOf($(this).attr('education_icon')) === -1) education_icon.push($(this).attr('education_icon'));
                /*if (education_type.indexOf($(this).attr('education_type')) === -1)*/
                //education_type.push($(this).attr('education_type'));
                /*if (education_icon.indexOf($(this).attr('education_icon')) === -1)*/
                education_icon.push($(this).attr('education_icon'));
            });

            $(".resu_education_txt_school_board").each(function () {
                //if (education_school_board.indexOf($(this).text().trim()) === -1) education_school_board.push($(this).text().trim());

                education_school_board.push($(this).text().trim());
                //            if ($(this).text() != '') {
                //                if (education_school_board.indexOf($(this).text()) === -1) education_school_board.push($(this).text());
                //            } else {
                //                if (education_school_board.indexOf($(this).text()) === -1) education_school_board.push("-");
                //            }
            });

            $(".resu_education_txt_school_website").each(function () {
                education_school_website.push($(this).text().trim());
                //            if ($(this).text() != '') {
                //                if (education_school_website.indexOf($(this).text()) === -1) education_school_website.push($(this).text());
                //            } else {
                //                if (education_school_website.indexOf($(this).text()) === -1) education_school_website.push("-");
                //            }
            });
            /*Education*/

            /*acheivement*/
            var acheivement_image = [];
            var acheivement_title = [];
            var acheivement_content = [];
            //        education_schoool.push("Kiwi");
            $(".acheivement_title").each(function () {
                if (acheivement_title.indexOf($(this).text().trim()) === -1) acheivement_title.push($(this).text().trim());
            });
            $(".acheivement_image").each(function () {
                /*if (acheivement_image.indexOf($(this).attr('src')) === -1) */
                // acheivement_image.push($(this).attr('src'));
                acheivement_image.push($(this).attr('save_path'));
            });
            $(".acheivement_content").each(function () {
                /*if (acheivement_content.indexOf($(this).text()) === -1)*/
                acheivement_content.push($(this).text().trim());
            });
            /*acheivement*/

            /*Work Experience*/
            var we_company_name = [];
            var we_website = [];
            var we_designation = [];
            var start_month = [];
            var start_year = [];
            var end_month = [];
            var end_year = [];
            var we_is_current_working = [];
            var exp_company_details = [];
            //        education_schoool.push("Kiwi");
            $(".exp_company_name").each(function () {
                if (we_company_name.indexOf($(this).text().trim()) === -1) we_company_name.push($(this).text().trim());
            });

            $(".exp_company_website").each(function () {
                we_website.push($(this).text().trim());
            });

            $(".exp_company_desig").each(function () {
                we_designation.push($(this).text().trim());
            });
            $(".start_month").each(function () {
                start_month.push($(this).text().trim());
                //            var start_y = $(this).parent().find('.start_year').text().trim();
                start_year.push($(this).parent().find('.start_year').text().trim());
                end_month.push($(this).parent().find('.end_month').text().trim());
                end_year.push($(this).parent().find('.end_year').text().trim());
                var is_current = $(this).parent().find('.is_current_working').is(":checked");
                we_is_current_working.push(is_current == true ? 1 : 0);
            });

            //        $(".is_current_working").each(function () {
            //            var is_current = $(this).is(":checked");
            //            we_is_current_working.push(is_current == true ? 1 : 0);
            //        });

            $(".exp_company_details").each(function () {
                exp_company_details.push($(this).text());
            });

            //        alert(we_title);
            //        alert(start_month);
            //        alert(start_year);
            //        alert(end_month);
            //        alert(end_year);
            //        alert(we_is_current_working);
            /*Work Experience*/

            /*Key Skills*/
            //        alert(key_skills);
            var key_skills = $('#resu_html_skills').text().trim();

            /*Key Skills*/
            /*Head*/
            var profile_pic = $('#profile_pic').attr('src');
            var name = $('#resu_html_name').text().trim();
            var designation = $('#resu_html_designation').text().trim();
            var title = $('#title').text().trim();
            var contact = $('#resu_html_conno').text().trim();
            var email = $('#resu_html_email').text().trim();
            //        var linkedin = $('#linkedin').text().trim();
            var fb = $('#fb').attr('href');
            var linkedin = $('#linkedin').attr('href');

            /*Head*/

            /*Profile*/
            var willing_to_relocate_value = $('#willing_to_relocate').text().trim();
            var current_location = $('#current_location').text().trim();
            var current_ctc = $('#current_ctc').text().trim();
            var total_exp = $('#total_exp').text().trim();
            var notice_period = $('#notice_period').text().trim();
            var willing_to_relocate = willing_to_relocate_value != '' ? willing_to_relocate_value : "Yes";
            var age = $('#age').text().trim();
            var language = $('#language').text().trim();
            var gender = $('#gender').text().trim();
            var marital_status = $('#marital_status').text().trim();
            var interest_hobies = $('#interest_hobies').text().trim();
            var driving_licence = $('#driving_licence').text().trim();
            var communication_expertise = $('#communication_expertise').text().trim();

            var resume_date = $('#resume_date').text().trim();
            var resume_location = $('#resume_location').text().trim();
            /*Profile*/
            //        var is_current = $('#job-status').is(":checked");

            $.post('{{URL::to('get_resume_template') }}', {
                    getresume_html: getresume_html,
                    profile_complete_percent: getpercent,
                    profile_pic: profile_pic,
                    name: name,
                    designation: designation,
                    title: title,
                    contact: contact,
                    email: email,
                    linkedin: linkedin,
                    fb: fb,
                    education_school: education_school,
                    education_school_website: education_school_website,
                    education_school_board: education_school_board,
                    education_type: education_type,
                    education_icon: education_icon,
                    we_company_name: we_company_name,
                    we_website: we_website,
                    we_designation: we_designation,
                    start_month: start_month,
                    start_year: start_year,
                    end_month: end_month,
                    end_year: end_year,
                    we_is_current_working: we_is_current_working,
                    exp_company_details: exp_company_details,
                    acheivement_title: acheivement_title,
                    acheivement_image: acheivement_image,
                    acheivement_content: acheivement_content,
                    skills: key_skills,
                    current_location: current_location,
                    current_ctc: current_ctc,
                    total_exp: total_exp,
                    notice_period: notice_period,
                    willing_to_relocate: willing_to_relocate,
                    age: age,
                    language: language,
                    gender: gender,
                    marital_status: marital_status,
                    interest_hobies: interest_hobies,
                    driving_licence: driving_licence,
                    communication_expertise: communication_expertise,
                    resume_date: resume_date,
                    resume_location: resume_location,

                },
                function (data) {
                    // alert('Resume modification save successfully!');
                    // $("#resume_url").prop("href", "{{URL::to('user-resume-url').'/'}}" + data);
                    // $("#resume_pdf").prop("href", "{{URL::to('view_pdf_resume').'/'}}" + data);

                    // console.log(data);
                    $('#ModalSuccess').find('#dynamic_success_popuptxt').text(msg);
                    $('#ModalSuccess').modal('toggle');
                });
        } else {
            $('#resu_html_conno').focus();
            SnackBar({
                message: "Your profile is " + getpercent + "0% completed, please complete your profile first",
                status: "danger",
                fixed: true,
                timeout: 7000
            });
            //            $('#ModalSuccess').modal('toggle');
        }
    }

    function AchievementChangeSetImage(dis) {
        let sizefile = Number(dis.files[0].size);
        if (sizefile > 1048576) {
            let finalfilesize = parseFloat(dis.files[0].size / 1048576).toFixed(2);
            ShowErrorPopupMsg('Your file size ' + finalfilesize + ' MB. File size should not exceed 1 MB');
            $(dis).val("");
            return false;
        }
        let validfile = ["png", "jpg", "jpeg", "gif"];
        let source = $(dis).val();
        let ext = source.substring(source.lastIndexOf(".") + 1, source.length).toLowerCase();
        for (let i = 0; i < validfile.length; i++) {
            if (validfile[i] == ext) {
                break;
            }
        }
        if (i >= validfile.length) {
            alert('Only following file extention is allowed, png, jpg, jpeg, gif ');
            $(dis).val("");
            return false;
        } else {
            let input = dis;
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    $.post('{{URL::to('upload_achievement_image') }}', {
                            upload_img: e.target.result
                        },
                        function (data) {
                            var obj = jQuery.parseJSON(data);// '{ "name": "John" }'
                            if (obj.is_saved === 1) {
                                $(dis).parent().find('.global_img').attr('src', obj.img);
                                $(dis).parent().find('.global_img').attr('save_path', obj.save_path);
                                $('#resu_per_profile').addClass('completed');
                                changePercentgraph();
                            } else {
                                $(dis).parent().find('.global_img').attr('src', e.target.result);
                                $('#resu_per_profile').addClass('completed');
                                changePercentgraph();
                            }

                        });

                    /*Old*/
                    // $(dis).parent().find('.global_img').attr('src', e.target.result);
                    // $('#resu_per_profile').addClass('completed');
                    // changePercentgraph();
                    /*Old*/
                };
                reader.readAsDataURL(input.files[0]);
                return true;
            }
        }
    }

    function ShowErrorPopupMsg(msg) {
        $('#ModalError').find('#dynami_error_popuptxt').text(msg);
        $('#ModalError').modal('toggle');
    }

    function ShowConformationPopupMsg(msg) {
        $('#ModalConfirm').find('#dynami_confirm_popuptxt').text(msg);
        $('#ModalConfirm').addClass('show_popup');
    }
</script>
<script type="text/javascript">
    //    function EditorOpen() {
    //        let checkclass = $('#editor_block').attr('class');
    //        if (checkclass == "txt-tools") {
    //            $('#editor_block').addClass('txt-tools-active');
    //        } else {
    //            $('#editor_block').removeClass('txt-tools-active');
    //        }
    //    }

    function Downloadbtnclick(dis) {
        var get_class = $('#social_card_box').attr('class');
        if (get_class == "social-reveal") {
            $('#social_card_box').addClass('social-reveal-active');
            $(dis).addClass('share-expanded');
        } else {
            $('#social_card_box').removeClass('social-reveal-active');
            $(dis).removeClass('share-expanded');
        }
    }

    function PreviewResume() {
        $('.edit-contols').remove();
        $('.personal_table tr').removeClass('selectedrow');
        $('#profile_status_block').css('z-index', '1');
        $('.field_block').removeClass('field_active');
        let getresume_html = $('#resume_html').html();
        $('#resume_container').html('');
        $('#resume_container').html(getresume_html);
        $('#modal_resume_preview').modal();
        $('#modal_resume_preview').find('.social_delete').hide();


        $('#modal_resume_preview').find('button').remove();
        $('#modal_resume_preview').find('.file_upload').remove();
        $('#modal_resume_preview').find('.tooltip').remove();

        if ($("#declearation_checkbox").prop("checked") == true) {
            $('#modal_resume_preview').find('#declearation_checkbox').attr('checked', true);
        }

        let chkpresent = $('#modal_resume_preview').find('.hidepresent').css('display');
        if (chkpresent == 'block') {
            $('#modal_resume_preview').find('#checkbox-present-box').hide();
        } else {
            $('#modal_resume_preview').find('#present-checkbox-sign').hide();
        }
        $('#resume_container').find('div').attr('contenteditable', 'false');
        $('#resume_container').find('table tr td').attr('contenteditable', 'false');
    }

    function CheckCurrent(dis) {
        if ($(dis).is(":checked")) {
            $(dis).parent().parent().find('.hidepresent').hide();
        } else {
            //            $('.hidepresent').show();
            $(dis).parent().parent().find('.hidepresent').show();
        }
    }

    /*--------editor Js-----*/
    function ChangeSetImage(dis) {
        let sizefile = Number(dis.files[0].size);
        if (sizefile > 1048576) {
            let finalfilesize = parseFloat(dis.files[0].size / 1048576).toFixed(2);
            ShowErrorPopupMsg('Your file size ' + finalfilesize + ' MB. File size should not exceed 1 MB');
            $(dis).val("");
            return false;
        }
        let validfile = ["png", "jpg", "jpeg", "gif"];
        let source = $(dis).val();
        let ext = source.substring(source.lastIndexOf(".") + 1, source.length).toLowerCase();
        for (let i = 0; i < validfile.length; i++) {
            if (validfile[i] == ext) {
                break;
            }
        }
        if (i >= validfile.length) {
            alert('Only following file extention is allowed, png, jpg, jpeg, gif ');
            $(dis).val("");
            return false;
        } else {
            let input = dis;
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    {{--$.post('{{URL::to('upload_achievement_image') }}', {--}}
                            {{--upload_img: e.target.result--}}
                        {{--},--}}
                        {{--function (data) {--}}
                            {{--var obj = jQuery.parseJSON(data);// '{ "name": "John" }'--}}
                            {{--if (obj.is_saved === 1) {--}}
                                {{--$(dis).parent().find('.global_img').attr('src', obj.img);--}}
                                {{--$('#resu_per_profile').addClass('completed');--}}
                                {{--changePercentgraph();--}}
                            {{--} else {--}}
                                {{--$(dis).parent().find('.global_img').attr('src', e.target.result);--}}
                                {{--$('#resu_per_profile').addClass('completed');--}}
                                {{--changePercentgraph();--}}
                            {{--}--}}

                        {{--});--}}

                    /*Old*/
                    $(dis).parent().find('.global_img').attr('src', e.target.result);
                    $('#resu_per_profile').addClass('completed');
                    changePercentgraph();
                    /*Old*/
                };
                reader.readAsDataURL(input.files[0]);
                return true;
            }
        }
    }


    function ShowColorsBlock(dis) {
        $(dis).next.slideToggle();
    }

    window.onload = function (e) {
        setTimeout(function () {
            $('#loader-overlay').addClass('scale0');
        }, 2000);
    }
    window.onscroll = function () {
        // scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 180 || document.documentElement.scrollTop > 20) {
            $('#top_navigation_bar').addClass('logowithmenu_bar_fixed');
        } else {
            $('#top_navigation_bar').removeClass('logowithmenu_bar_fixed');
        }
    }

    //    function InitTextColor() {
    //        const pickr4 = new Pickr({
    //            el: '#text-color-picker',
    //            default: "cccccc",
    //            useAsButton: true,
    //            components: {
    //                preview: true,
    //                opacity: true,
    //                hue: true,
    //                interaction: {
    //                    hex: true,
    //                    rgba: true,
    //                    hsla: true,
    //                    hsva: true,
    //                    cmyk: true,
    //                    input: true,
    //                    clear: true,
    //                    save: true
    //                }
    //            },
    //            onChange(hsva, instance) {
    //                document.execCommand('ForeColor', false, hsva.toRGBA().toString());
    //            }
    //        });
    //        pickr4.show();
    //    }

    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('.glo_menuclick').click(function (e) {
            var chkopen = $(this).find('.menu_basic_popup').attr('class');
            if (chkopen != 'menu_basic_popup effect') {
                if (chkopen != 'menu_basic_popup menu_popup_setting effect') {
                    $('.menu_basic_popup').addClass('scale0');
                    $(this).find('.menu_basic_popup').removeClass('scale0');
                    $('#User_info_block').addClass('add_color');
                } else {
                    $('.menu_basic_popup').addClass('scale0');
                    $('#User_info_block').removeClass('add_color');
                }
            } else {
                $('.menu_basic_popup').addClass('scale0');
                $('#User_info_block').removeClass('add_color');
            }
            e.stopPropagation();
        });
        $(document).click(function (e) {
            $('.menu_basic_popup').addClass('scale0');
            $('#User_info_block').removeClass('add_color');
            $('#font-family-popup').addClass('scale0');
            e.stopPropagation();
        });
    });
</script>