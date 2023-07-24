<style>
    .deznav .metismenu>li>a svg {
        color: #8c8c8c;

    }

    .deznav .metismenu>li.mm-active>a svg {
        color: var(--primary);

    }

    .liwithmargin {
        margin: 0px 10px;
    }

    .cnav-head{
        color: #eb8153 !important;
    }

</style>
<div class="deznav">
    <div class="deznav-scroll">
        <div class="main-profile">
            <div class="image-bx">
                <img src="" alt="">
                <a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
            </div>
            <h5 class="name"><span class="font-w400">Hello,</span><span style="color:rgb(243, 12, 12);"></span></h5>
            <p class="email"><span style="color:#00ada3;font-weight:600;"></span>
            </p>
        </div>
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li><a class="has-arrow ai-icon " href="javascript:void()" aria-expanded="false">
                    <i data-feather="home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <h6 class="dropdown-header cnav-head">Home Section </h6>

                    <li class="liwithmargin"><a href="{{ url('dashboard') }}">Dashboard</a></li>


                </ul>
            </li>
            <!-- Admin Specific -->
           
            <li class="nav-label">Target</li>
            <li class=""><a class="has-arrow ai-icon "
                    href="javascript:void()" aria-expanded="false">
                    <i data-feather="crosshair"></i>
                    <span class="nav-text">Target</span>
                </a>
                <ul aria-expanded="false">
                    <h6 class="dropdown-header cnav-head">Target Section </h6>
                    <li class="liwithmargin "><a href=""
                            class="">Monthly Target</span></a>
                    </li>

                </ul>
            </li>
           


            <li class="nav-label">Users</li>
            <li class=""><a class="has-arrow ai-icon "
                    href="javascript:void()" aria-expanded="false">
                    <i data-feather="users"></i>
                    <span class="nav-text">Users</span>
                </a>
                <ul aria-expanded="false">
                    <h6 class="dropdown-header cnav-head">Manage Team Section </h6>
                    <li class="liwithmargin"><a href=""
                            class="">My Teams</a></li>
                    <!-- Admin Specific -->
                   
                    <li class="liwithmargin"><a href="">Add New User</a></li>
                  
                </ul>
            </li>



            <li class="nav-label">Client Section</li>
            <li><a class="has-arrow ai-icon " href="javascript:void()" aria-expanded="false">
                    <i data-feather="briefcase"></i>
                    <span class="nav-text">Client Section</span>
                </a>
                <ul aria-expanded="false">
                    <h6 class="dropdown-header cnav-head">Client Section</h6>
                    <!-- Admin Specific -->
                    <li class="liwithmargin"><a href="">Client's List</a></li>
                    <li class="liwithmargin"><a href="">Add New Client</a></li>
                    <h6 class="dropdown-header cnav-head">HR Section </h6>
                    <li class="liwithmargin"><a href="">Client's HR List</a></li>
                    <li class="liwithmargin"><a href="">Add New HR</a></li>
                </ul>
            </li>
            <li class="nav-label">Positions Section</li>
            <li class=""><a class="has-arrow ai-icon "
                    href="javascript:void()" aria-expanded="false">
                    <i data-feather="layout"></i>
                    <span class="nav-text">Positions Section</span>
                </a>
                <ul aria-expanded="false">
                    <h6 class="dropdown-header cnav-head">Position Section</h6>
                    <li class="liwithmargin"><a href="">Position's List</a></li>
                    <li class="liwithmargin"><a href="">Add New Position</a></li>
                    <li class="liwithmargin"><a href="">Hold Positions</a></li>
                    <li class="liwithmargin"><a href="">Closed Positions</a></li>
                    <h6 class="dropdown-header cnav-head">Job Posting Section </h6>
                    <li class="liwithmargin"><a href="">Job Posting Report</span></a>
                    </li>
                    <li class="liwithmargin"><a href="">Job Template</span></a></li>
                </ul>
            </li>


            <li class="nav-label">Candidate Section</li>
            <li><a class="has-arrow ai-icon " href="javascript:void()" aria-expanded="false">
                    <i data-feather="user-plus"></i>

                    <span class="nav-text">Candidate Section</span>
                </a>
                <ul aria-expanded="false">
                    <h6 class="dropdown-header cnav-head">Candidate Section</h6>
                    <li class="liwithmargin"><a href="">Candidate's List</a></li>
                    <li class="liwithmargin"><a href="">Add Candidate</span></a>
                    </li>
                    <li class="liwithmargin"><a href="">Candidate's Revert</a></li>

                </ul>
            </li>


            <!-- Admin Specific -->
         
            <li class="nav-label">Investment Section</li>
            <li><a class="has-arrow ai-icon " href="javascript:void()" aria-expanded="false">
                    <i data-feather="dollar-sign"></i>

                    <span class="nav-text">Investment Section</span>
                </a>
                <ul aria-expanded="false">
                    <h6 class="dropdown-header cnav-head">HR Investment Section</h6>
                    <li class="liwithmargin"><a href="">Investment Report</a></li>
                    {{-- <li class="liwithmargin"><a href="{{ url('consolidated-investment') }}">Consolidate Report</a>
                    </li> --}}
                </ul>
            </li>
          

            <li class="nav-label">Sheet Section</li>
            <li><a class="has-arrow ai-icon " href="javascript:void()" aria-expanded="false">
                    <i data-feather="phone-call"></i>
                    <span class="nav-text">Sheet Section</span>
                </a>
                <ul aria-expanded="false">
                    <h6 class="dropdown-header cnav-head">Calling Report Section</h6>
                    <li class="liwithmargin"><a href="">Calling Sheet</a></li>
                </ul>
            </li>

            <li class="nav-label">Sheet Section</li>
            <li><a class="has-arrow ai-icon " href="javascript:void()" aria-expanded="false">
                    <i data-feather="folder-plus"></i>
                    <span class="nav-text">Report Section</span>
                </a>
                <ul aria-expanded="false">
                    <h6 class="dropdown-header cnav-head">Report Section</h6>
                    <li class="liwithmargin"><a href="">All Reports</a></li>
                </ul>
            </li>
            <!-- Admin Specific -->
            
            <li class="nav-label">Events Section</li>
            <li><a class="has-arrow ai-icon " href="javascript:void()" aria-expanded="false">
                    <i data-feather="gift"></i>
                    <span class="nav-text">Events Section</span>
                </a>
                <ul aria-expanded="false">
                    <h6 class="dropdown-header cnav-head">Events Section</h6>
                    <li class="liwithmargin"><a href="">Add Events</a></li>
                </ul>
            </li>
           
    </div>
</div>