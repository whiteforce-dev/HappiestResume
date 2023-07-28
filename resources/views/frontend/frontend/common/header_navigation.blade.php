<nav>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="mh">Modal Header</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="mb">
                    <p>Some text in the modal.</p>
                </div>
                {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                {{--</div>--}}
            </div>

        </div>
    </div>
    <div class="logowithmenu_bar logowithmenu_bar_fixed">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo main">
                        <a href="{{URL::to('user-dashboard')}}">
                            <img class="top_logowhite" src="{{URL::to('public/front').'/'}}images/logo1.png"
                                alt="Happiest Logo">
                            <img class="top_logoblack" src="{{URL::to('public/front').'/'}}images/logo1.png"
                                alt="Happiest Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 pull-right">
                    <nav class="text-right main-menu">
                        <ul class="top_menu_ul list-unstyled">
                            <li>
                                <a class="page-scroll" href="{{URL::to('/user-dashboard')}}">
                                    HOME
                                </a>
                            </li>
                            <li>
                                <a class="page-scroll" href="{{URL::to('appliedjobs')}}">
                                    Applied Jobs
                                </a>
                            </li>
                            {{--<li><a class="page-scroll" href="index.html">About</a></li>--}}
                            {{--<li><a class="page-scroll" href="index.html">Templates</a></li>--}}
                            {{--<li><a class="page-scroll" href="index.html">Testimonial</a></li>--}}
                            {{--<li id="nav_contact"><a class="page-scroll" href="index.html">CONTACT</a></li>--}}
                        </ul>
                        <div class="before_login" style="display: none;">
                            <button type="button"
                                class="text-white btn btn-primary nav_button mr-1 btn-sm waves-effect waves-light theam_btn"
                                data-toggle="modal" data-target="#modal_registration">SIGNUP
                            </button>
                            <button type="button"
                                class="text-white btn btn-warning nav_button btn-sm margin-right0 waves-effect waves-light theam_btn"
                                data-target="#modal_login" data-toggle="modal">LOGIN
                            </button>
                        </div>

                        <div class="after_login">
                            <div class="user-info glo_menuclick" id="User_info_block">
                                @php
                                $user = \App\RegistrationModel::find(session('user')->id);
                                @endphp
                                {{--<img id="user_image" src="{{URL::to('public/front').'/'}}images/default-pic.png"/>--}}
                                {{--                                @if(file_exists('public').'/'.session('user')->image)--}}
                                @if(file_exists("public/$user->image") && isset($user->image))
                                <img id="user_image" src="{{URL::to('public').'/'.$user->image}}" />
                                @else
                                <img id="user_image" src="{{URL::to('public/front/images/default-pic.png')}}" />
                                @endif
                                <span id="user_name">
                                    {{isset(session('user')->name)?ucfirst(session('user')->name):(isset(session('user')['name'])?session('user')['name']:'-')}}
                                </span>
                                <span class="caret"></span>
                                <div class="menu_basic_popup user_submenu scale0">
                                    <div class="menu_popup_containner padding0">
                                        <div class="menu_popup_settingrow effect">
                                            <a href="{{URL::to('/user-dashboard')}}" class="menu_setting_row">
                                                <i class="mdi mdi-monitor-dashboard"></i>Dashboard</a>
                                        </div>
                                        {{--<div class="menu_popup_settingrow effect">--}}
                                        {{--<a href="" class="menu_setting_row">--}}
                                        {{--<i class="mdi mdi-account-edit"></i>Job Search</a>--}}
                                        {{--</div>--}}
                                        {{--<div class="menu_popup_settingrow">--}}
                                        {{--<a href="#" class="menu_setting_row">--}}
                                        {{--<i class="mdi mdi-information-outline"></i>Knowledge Center</a>--}}
                                        {{--</div>--}}
                                        <div class="menu_popup_settingrow">
                                            <a class="menu_setting_row" target="_blank" href="{{URL::to('hot-jobs')}}">
                                                <i class="mdi mdi-lock-open-outline"></i>Jobs</a>
                                        </div>
                                        <div class="menu_popup_settingrow">
                                            <a class="menu_setting_row" onclick="change_password();" data-toggle="modal"
                                                data-target="#myModal">
                                                <i class="mdi mdi-lock-open-outline"></i>Change Password</a>
                                        </div>
                                        {{--<button type="button" class="btn btn-info btn-lg" >Open Modal</button>--}}
                                        <div class="menu_popup_settingrow">
                                            <a href="{{URL::to('/user-logout')}}" class="menu_setting_row">
                                                <i class="mdi mdi-logout"></i>Logout
                                            </a>
                                        </div>

                                        <script>
                                            function change_password() {
//                                                alert('Ashish');
//                                                debugger;
                                                var uid = 1;

                                                $.get('{{URL::to('change-password')}}', {uid: uid},
                                                    function (response) {
                                                        $('#myModal').modal('show');
                                                        $('#mh').html('Change Password');
                                                        $('#mb').html(response);
                                                    });
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</nav>
