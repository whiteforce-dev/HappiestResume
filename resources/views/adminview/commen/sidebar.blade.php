<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}" {{--data-item="dashboard"--}}>
                <a class="nav-item-hold" href="{{ URL::to('dashboard') }}">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">
                        Dashboard
                    </span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ Request::is('jobtypes') ? 'active' : '' }} {{ Request::is('jobs') ? 'active' : '' }} {{ Request::is('jobs/create') ? 'active' : '' }}{{ Request::is('jobs/*/edit') ? 'active' : '' }}{{ Request::is('jobs/*') ? 'active' : '' }}{{ Request::is('jdsearch') ? 'active' : '' }}"
                data-item="jobs">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">
                        Jobs
                    </span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{Request::is('registered-user')?'active':''}}{{Request::is('officeregistration')?'active':''}}{{Request::is('websiteregistration')?'active':''}} {{Request::is('saisun-hire-registration')?'active':''}} {{ Request::is('companies') ? 'active' : '' }}{{ Request::is('companies/*/edit') ? 'active' : '' }}  {{Request::is('import_users')?'active':''}}"
                data-item="sessions">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Administrator"></i>
                    <span class="nav-text">
                        Users
                    </span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ Request::is('contact_queries') ? 'active' : '' }}{{ Request::is('testimonials') ? 'active' : '' }}{{ Request::is('about/about-us') ? 'active' : '' }}"
                data-item="resume_settings">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Settings-Window"></i>
                    <span class="nav-text">
                        Web Settings
                    </span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ Request::is('candidatereport') ? 'active' : '' }}" data-item="reports">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Statistic"></i>
                    <span class="nav-text">
                        Reports
                    </span>
                </a>
                <div class="triangle"></div>
            </li>

            {{--<li class="nav-item" data-item="resume_settings">--}}
            {{--<a class="nav-item-hold" href="#">--}}
            {{--<i class="nav-icon i-Administrator"></i>--}}
            {{--<span class="nav-text">--}}
            {{--Resume Settings--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--<div class="triangle"></div>--}}
            {{--</li>--}}
        </ul>
    </div>
    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <!-- Submenu Dashboards-->
        <ul class="childNav" data-parent="dashboard">
            <li class="nav-item">
                <a href="{{ url('dashboard') }}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">
                        Dashboard
                    </span></a>
            </li>
        </ul>

        <ul class="childNav" data-parent="jobs">
            <li class="nav-item {{ Request::is('jobtypes') ? 'active_menu' : '' }}">
                <a href="{{ url('jobtypes') }}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">
                        Job Type
                    </span></a>
            </li>
            <li class="nav-item {{ Request::is('jobs') ? 'active_menu' : '' }}{{ Request::is('jobs/*') ? 'active_menu' : '' }}">
                <a href="{{ url('jobs') }}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">
                        Jobs
                    </span></a>
            </li>
            <!-- <li class="nav-item {{ Request::is('jdsearch') ? 'active_menu' : '' }}">
                <a href="{{ url('jdsearch') }}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">
                        JD Search
                    </span></a>
            </li> -->
        </ul>
        <ul class="childNav" data-parent="sessions">
            <li class="nav-item {{Request::is('websiteregistration'?'active_menu':'')}}">
                <a href="{{ url('websiteregistration') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                        Website Registration
                    </span>
                </a>
            </li>
            <li class="nav-item {{Request::is('officeregistration'?'active_menu':'')}}">
                <a href="{{ url('officeregistration') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                        Office Registration
                    </span>
                </a>
            </li>
            <li class="nav-item {{Request::is('saisun-hire-registration'?'active_menu':'')}}">
                <a href="{{ url('saisun-hire-registration') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                       Saisun Hire Registration
                    </span>
                </a>
            </li>
            <li class="nav-item {{Request::is('payroll_registration'?'active_menu':'')}}">
                <a href="{{ url('payroll_registration') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                       Payroll Registration
                    </span>
                </a>
            </li>
            <li class="nav-item {{Request::is('parser_registration'?'active_menu':'')}}">
                <a href="{{ url('parser_registration') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                       Parser Registration
                    </span>
                </a>
            </li>
            <li class="nav-item {{Request::is('chatbot_registration'?'active_menu':'')}}">
                <a href="{{ url('chatbot_registration') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                       Chatbot Registration
                    </span>
                </a>
            </li>
            <li class="nav-item {{Request::is('international_registration'?'active_menu':'')}}">
                <a href="{{ url('international_registration') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                       International Registration
                    </span>
                </a>
            </li>
            <!-- <li class="nav-item {{ Request::is('import_users') ? 'active_menu' : '' }}">
                <a href="{{ url('import_users') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Import Users
                    </span>
                </a>
            </li> -->
            <li class="nav-item {{ Request::is('upload_bulk_resume') ? 'active_menu' : '' }}">
                <a href="{{ url('upload_bulk_resume') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Resume Parser
                    </span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('companies') ? 'active_menu' : '' }}">
                <a href="{{ url('companies') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Companies
                    </span>
                </a>
            </li>
            {{-- @if(Auth::User()->id == 1) --}}
            <li class="nav-item {{ Request::is('staffs') ? 'active_menu' : '' }}">
                <a href="{{ url('staffs') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Staff / Client / Members
                    </span>
                </a>
            </li>
            {{-- @endif --}}
            {{-- <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/signup.html"><i
                        class="nav-icon i-Add-User"></i><span class="item-name">Sign up</span></a></li>
            <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/forgot.html"><i
                        class="nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li> --}}
        </ul>

        <ul class="childNav" data-parent="sessions">


        </ul>

        <ul class="childNav" data-parent="reports">
            <li class="nav-item {{ Request::is('candidatereport') ? 'active_menu' : '' }}">
                <a href="{{ url('candidatereport') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Candidate Report
                    </span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('staffUploadReport') ? 'active_menu' : '' }}">
                <a href="{{ url('staffUploadReport') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Staff Report
                    </span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('dailyRegistrations') ? 'active_menu' : '' }}">
                <a href="{{ url('dailyRegistrations') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                       Download Registerd Candidate
                    </span>
                </a>
            </li>
        </ul>

        <ul class="childNav" data-parent="resume_settings">

            <li class="nav-item {{ Request::is('testimonials') ? 'active_menu' : '' }}">
                <a href="{{ url('testimonials') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Testimonials
                    </span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('about/about-us') ? 'active_menu' : '' }}">
                <a href="{{ url('about/about-us') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        About-Us
                    </span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('contact_query_option') ? 'active_menu' : '' }}">
                <a href="{{ url('contact_query_option') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Website Queries
                    </span>
                </a>
            </li>

            {{--<li class="nav-item  {{ Request::is('contactus') ? 'active_menu' : '' }}">--}}
            {{--<a href="{{ url('contactus') }}">--}}
            {{--<i class="nav-icon i-Checked-User"></i><span class="item-name">--}}
            {{--Contact Us--}}
            {{--</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            <li class="nav-item {{ Request::is('admin/how_it_works') ? 'active_menu' : '' }}">
                <a href="{{ url('admin/how_it_works') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        How It Works
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/counts') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Counts (Milestones)
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/social_networks') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Social Networks
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('resume-slider') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                        Resume Slider
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('benefits') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                        Benefits
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('blogMaster') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                        Blogs
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('resumeTemplate') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                        Resume Templates
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('degree_master') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                       Degrees
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('showcounrtylist') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                       CountryList
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('showstatelist') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                       Statelist
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('ShowCityList') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                       Citylist
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('nationalclient') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                       NationalClientlist
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('teammember') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                        Team member
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('addevents') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                    Festival
                    </span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('fastival') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                      Events 
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('achivement') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                    Achievement
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>