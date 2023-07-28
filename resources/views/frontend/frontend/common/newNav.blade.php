<header class="navbar navbar-expand-lg fixed-top py-4" data-scroll-header>
    <div class="container p-0">
        <a class="navbar-brand me-0 me-xl-4" href="#">
            <img src="{{ url('assets/happiestNewAssets/img/logo.png') }}" alt="Happiest Resume" style="width: 132px;" loading="lazy">
        </a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <div id="nav-icon4">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>

        <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem;">
                <!-- Menu items-->
                @if(session()->has('user'))    
                    <li class="nav-item active">
                        <a class="nav-link " href="{{Request::is('/') ? " #home" : URL::to('/#home')}}" role="button" aria-expanded="false">My Dashboard
                        </a>
                    </li>
                @else
                <li class="nav-item active">
                    <a class="nav-link " href="{{Request::is('/') ? " #home" : URL::to('/#home')}}" role="button" aria-expanded="false">Home
                    </a>
                </li>
                @endif
                
                <li class="nav-item">
                    <a class="nav-link"  href="{{URL::to('exclusive-jobs')}}" role="button" aria-expanded="false">Jobs
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{Request::is('/') ? " #about" : URL::to('/#about')}}" role="button" aria-expanded="false">About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Request::is('/') ? " #templates" : URL::to('/#templates')}}" role="button" aria-expanded="false">Templates
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('blog')}}" role="button" aria-expanded="false">Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{Request::is('/') ? " #contact" :
                    URL::to('/#contact')}}" role="button" aria-expanded="false">Contact
                    </a>
                </li>
            </ul>

            <div>
                @if(session()->has('user'))
                <a class="btn btn-primary btn-sm ms-2" href="sign-in.html"  data-target="#modal_logout" data-toggle="modal">
                    Logout
                </a>
                @else
                <a class="btn btn-primary btn-sm ms-2" href="{{ url('resumeloginone') }}">
                    Sign In
                </a>
                @endif
            </div>
        </div>
    </div>
</header>