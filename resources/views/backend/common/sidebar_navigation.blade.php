<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Navigation</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu active pcoded-trigger">
                <a href="{{url('dashboard')}}">
                    {{--<span class="pcoded-micon"><i class="feather icon-home"></i></span>--}}
                    <span class="pcoded-mtext">Dashboard</span>
                </a>
            </li>

            <div class="pcoded-navigatio-lavel">Menus</div>
            <ul class="pcoded-item ">
                <li class="pcoded-hasmenu {{Request::is('testimonials')?'active pcoded-trigger':''}}  
                {{Request::is('contact/companies')?'active pcoded-trigger':''}} 
                {{Request::is('contact/contact-us')?'active pcoded-trigger':''}} 
                {{Request::is('about/about-us')?'active pcoded-trigger':''}} 
                {{Request::is('admin/how_it_works')?'active pcoded-trigger':''}}
                 {{Request::is('admin/counts')?'active pcoded-trigger':''}} 
                 {{Request::is('jobtypes')?'active pcoded-trigger':''}}
                 {{Request::is('admin/counts')?'active pcoded-trigger':''}} 
                 {{Request::is('jobs')?'active pcoded-trigger':''}}
                 {{Request::is('jobs/create')?'active pcoded-trigger':''}}
                 {{Request::is('jobs/*/edit')?'active pcoded-trigger':''}}
                 {{Request::is('companies')?'active pcoded-trigger':''}}">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon">
                            <i class="feather icon-file-plus"></i>
                        </span>
                        <span class="pcoded-mtext">Settings (Web)</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{Request::is('companies')?'active':''}}">
                            <a href="{{ url('companies') }}">
                                <span class="pcoded-mtext">Companies</span>
                            </a>
                        </li>
                        <li class="{{Request::is('jobtypes')?'active':''}}">
                            <a href="{{ url('jobtypes') }}">
                                <span class="pcoded-mtext">Job types</span>
                            </a>
                        </li>
                        <li class="{{Request::is('jobs')?'active':''}}{{Request::is('jobs/create')?'active':''}}{{Request::is('jobs/*/edit')?'active':''}}">
                            <a href="{{ url('jobs') }}">
                                <span class="pcoded-mtext">Jobs</span>
                            </a>
                        </li>
                        <li class="{{Request::is('testimonials')?'active':''}}">
                            <a href="{{ url('testimonials') }}">
                                <span class="pcoded-mtext">Testimonial</span>
                            </a>
                        </li>
                        <li class="{{Request::is('contact/contact-us')?'active':''}}">
                            <a href="{{ url('contact/contact-us') }}">
                                <span class="pcoded-mtext">Contact us</span>
                            </a>
                        </li>
                        <li class="{{Request::is('about/about-us')?'active':''}}">
                            <a href="{{ url('about/about-us') }}">
                                <span class="pcoded-mtext">About Us</span>
                            </a>
                        </li>
                        <li class="{{Request::is('admin/how_it_works')?'active':''}}">
                            <a href="{{ url('admin/how_it_works') }}">
                                <span class="pcoded-mtext">How It Works</span>
                            </a>
                        </li>
                        <li class="{{Request::is('admin/counts')?'active':''}}">
                            <a href="{{ url('admin/counts') }}">
                                <span class="pcoded-mtext">Counts</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ url('admin/social_networks') }}">
                                <span class="pcoded-mtext">Social Networks</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu {{Request::is('resume-slider')?'active pcoded-trigger':''}} ">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon">
                            <i class="feather icon-file-plus"></i>
                        </span>
                        <span class="pcoded-mtext">Resume Settings</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{Request::is('resume-slider')?'active':''}}">
                            <a href="{{ url('resume-slider') }}">
                                <span class="pcoded-mtext">Resume Slider</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="{{Request::is('registered-user')?'active':''}}">
                    <a href="{{url('registered-user')}}">
                        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                        <span class="pcoded-mtext">Users</span>
                    </a>
                </li>
                <li class="{{Request::is('jdsearch')?'active':''}}">
                    <a href="{{url('jdsearch')}}">
                        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                        <span class="pcoded-mtext">JD Search</span>
                    </a>
                </li>
            </ul>
            {{--<ul class="pcoded-item pcoded-left-item">--}}
            {{--<li class="pcoded-hasmenu ">--}}
            {{--<a href="javascript:void(0)">--}}
            {{--<span class="pcoded-micon">--}}
            {{--<i class="feather icon-user"></i>--}}
            {{--</span>--}}
            {{--<span class="pcoded-mtext">Volunteers</span>--}}
            {{--</a>--}}
            {{--<ul class="pcoded-submenu">--}}
            {{--<li class="">--}}
            {{--<a href="{{url('volunteers-list')}}">--}}
            {{--<span class="pcoded-mtext">Volunteers List</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="">--}}
            {{--<a href="{{url('add-volunteer')}}">--}}
            {{--<span class="pcoded-mtext">Add Volunteers</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--<ul class="pcoded-item pcoded-left-item">--}}
            {{--<li class="pcoded-hasmenu ">--}}
            {{--<a href="javascript:void(0)">--}}
            {{--<span class="pcoded-micon">--}}
            {{--<i class="feather icon-book"></i>--}}
            {{--</span>--}}
            {{--<span class="pcoded-mtext">Books</span>--}}
            {{--</a>--}}
            {{--<ul class="pcoded-submenu">--}}
            {{--<li class="">--}}
            {{--<a href="{{url('books')}}">--}}
            {{--<span class="pcoded-mtext">Add Book</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--<ul class="pcoded-item pcoded-left-item">--}}
            {{--<li class="pcoded-hasmenu ">--}}
            {{--<a href="javascript:void(0)">--}}
            {{--<span class="pcoded-micon">--}}
            {{--<i class="feather icon-file-minus"></i>--}}
            {{--<i class="icofont icofont-blood-drop"></i>--}}
            {{--</span>--}}
            {{--<span class="pcoded-mtext">Blood Donors</span>--}}
            {{--</a>--}}
            {{--<ul class="pcoded-submenu">--}}
            {{--<li class="">--}}
            {{--<a href="{{url('add-blood-donor')}}">--}}
            {{--<span class="pcoded-mtext">Add Donor</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="">--}}
            {{--<a href="{{url('blood-donor-list')}}">--}}
            {{--<span class="pcoded-mtext">Donor's List</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="">--}}
            {{--<a href="invoice-summary.html">--}}
            {{--<span class="pcoded-mtext">Donor's History</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--<li class="pcoded-hasmenu ">--}}
            {{--<a href="javascript:void(0)">--}}
            {{--<span class="pcoded-micon"><i class="feather icon-calendar"></i></span>--}}
            {{--<span class="pcoded-mtext">Event Calendar</span>--}}
            {{--</a>--}}
            {{--<ul class="pcoded-submenu">--}}
            {{--<li class="">--}}
            {{--<a href="event-full-calender.html">--}}
            {{--<span class="pcoded-mtext">Full Calendar</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="">--}}
            {{--<a href="event-clndr.html">--}}
            {{--<span class="pcoded-mtext">CLNDER</span>--}}
            {{--<span class="pcoded-badge label label-info">NEW</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="">--}}
            {{--<a href="image-crop.html">--}}
            {{--<span class="pcoded-micon"><i class="feather icon-scissors"></i></span>--}}
            {{--<span class="pcoded-mtext">Image Cropper</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="">--}}
            {{--<a href="file-upload.html">--}}
            {{--<span class="pcoded-micon"><i class="feather icon-upload-cloud"></i></span>--}}
            {{--<span class="pcoded-mtext">File Upload</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--<li class="">--}}
            {{--<a href="change-loges.html">--}}
            {{--<span class="pcoded-micon"><i class="feather icon-briefcase"></i><b>CL</b></span>--}}
            {{--<span class="pcoded-mtext">Change Loges</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
        </ul>
    </div>
</nav>