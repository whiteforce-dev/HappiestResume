<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item" data-item="dashboard">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">
                        Dashboard
                    </span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="jobs">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">
                        Jobs
                    </span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="sessions">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Administrator"></i>
                    <span class="nav-text">
                        Users
                    </span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="sessions">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Administrator"></i>
                    <span class="nav-text">
                        Web Settings
                    </span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item" data-item="resume_settings">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Administrator"></i>
                    <span class="nav-text">
                        Resume Settings
                    </span>
                </a>
                <div class="triangle"></div>
            </li>
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
            <li class="nav-item">
                <a href="{{ url('jdsearch') }}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">
                        Job Description Search
                    </span></a>
            </li>
        </ul>
        <ul class="childNav" data-parent="sessions">
            <li class="nav-item">
                <a href="{{ url('registered-user') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Registered User
                    </span>
                </a>
            </li>
            {{-- <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/signup.html"><i
                        class="nav-icon i-Add-User"></i><span class="item-name">Sign up</span></a></li>
            <li class="nav-item"><a href="http://demos.ui-lib.com/gull/html/sessions/forgot.html"><i
                        class="nav-icon i-Find-User"></i><span class="item-name">Forgot</span></a></li> --}}
        </ul>

        <ul class="childNav" data-parent="sessions">
            <li class="nav-item">
                <a href="{{ url('companies') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Companies
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('jobtypes') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Job Types
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('jobs') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Jobs
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('testimonials') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Testimonials
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('contact/contact-us') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Contact Us
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('about/about-us') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        About-Us
                    </span>
                </a>
            </li>
            <li class="nav-item">
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
        </ul>

        <ul class="childNav" data-parent="resume_settings">
            <li class="nav-item">
                <a href="{{ url('resume-slider') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Resume Slider
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>