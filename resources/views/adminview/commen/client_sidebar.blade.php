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
            @if(Auth::user()->id == 12)
                <li class="nav-item {{ Request::is('contact_queries') ? 'active' : '' }}{{ Request::is('testimonials') ? 'active' : '' }}{{ Request::is('about/about-us') ? 'active' : '' }}" data-item="resume_settings">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Settings-Window"></i>
                        <span class="nav-text">
                            Web Settings
                        </span>
                    </a>
                    <div class="triangle"></div>
                </li>
            @else
            <li class="nav-item {{ Request::is('candidate-Search') ? 'active' : '' }}" data-item="reports">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Statistic"></i>
                    <span class="nav-text">
                        Reports
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
            @if(Auth::user()->role == 'client')
                <li class="nav-item {{ Request::is('client-settings') ? 'active' : '' }}" data-item="settings">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Statistic"></i>
                        <span class="nav-text">
                            Settings
                        </span>
                    </a>
                    <div class="triangle"></div>
                </li>
                @endif
            @endif
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
        @if(Auth::user()->id == 12)
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
            <li class="nav-item {{ Request::is('contact_queries') ? 'active_menu' : '' }}">
                <a href="{{ url('contact_queries') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Website Queries
                    </span>
                </a>
            </li>
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
                <a href="{{ url('commentMaster') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                        Comments
                    </span>
                </a>
            </li>
        </ul>
        @else
        <ul class="childNav" data-parent="reports">
            <li class="nav-item {{ Request::is('candidate-Search') ? 'active_menu' : '' }}">
                <a href="{{ url('candidate-Search') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Candidate Report
                    </span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('jd-search') ? 'active_menu' : '' }}">
                <a href="{{ url('jd-search') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                     JD Search
                    </span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="settings">
            <li class="nav-item ">
                <a href="{{ url('client-settings') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                      Career Page Setting
                    </span>
                </a>
            </li>
            @php($id = Auth::user()->id)    
            <li class="nav-item {{ Request::is('career-site') ? 'active_menu' : '' }}">
                <a href="{{ url('career-site/'.$id) }}" target="_blank" style="background-color:#0ce8ca">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name"><b>Career Site</b></span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="sessions">
            <li class="nav-item {{Request::is('parser_registration'?'active_menu':'')}}">
                <a href="{{ url('parser_registration') }}">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">
                       Parser Registration
                    </span>
                </a>
            </li>
            <li class="nav-item {{ Request::is('upload_bulk_resume') ? 'active_menu' : '' }}">
                <a href="{{ url('upload_bulk_resume') }}">
                    <i class="nav-icon i-Checked-User"></i><span class="item-name">
                        Resume Parser
                    </span>
                </a>
            </li>
        </ul>
        @endif
    </div>
    <div class="sidebar-overlay"></div>
</div>