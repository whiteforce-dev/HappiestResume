<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Happiest Resume | User Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://happiestresume.com/assets/images/logo-dark.png">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="{{ url('assets/happiestUserDashboard/assets/css/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/happiestUserDashboard/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ url('assets/happiestUserDashboard/assets/css/theme.minc619.css?v=1.0') }}">
    <link rel="preload" href="{{ url('assets/happiestUserDashboard/assets/css/theme.min.css') }}" data-hs-appearance="default" as="style">
    <link rel="preload" href="{{ url('assets/happiestUserDashboard/assets/css/theme-dark.min.css') }}" data-hs-appearance="dark" as="style">
    
    
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

   <style>
    
   </style>

</head>
<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">
<header id="header"
    class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
    <div class="navbar-nav-wrap">
        <!-- Logo -->
        <a class="navbar-brand" href={{ url('build-resume') }} aria-label="Front">
            <img class="navbar-brand-logo" src="https://happiestresume.com/assets/happiestNewAssets/img/logo.png"
                alt="Logo" data-hs-theme-appearance="dark">

            <img class="navbar-brand-logo-mini" src="https://happiestresume.com/assets/happiestNewAssets/img/logo.png"
                alt="Logo" data-hs-theme-appearance="default">

            <img class="navbar-brand-logo-mini" src="https://happiestresume.com/assets/happiestNewAssets/img/logo.png"
                alt="Logo" data-hs-theme-appearance="dark">
        </a>

        <!-- End Logo -->
        <div class="navbar-nav-wrap-content-start">
            <!-- Navbar Vertical Toggle -->
            <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">

                <i class="bi-arrow-bar-left navbar-toggler-short-align"
                    data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>

                <i class="bi-arrow-bar-right navbar-toggler-full-align"
                    data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>

            </button>
            <!-- End Navbar Vertical Toggle -->
            <!-- Search Form -->


            <!-- End Search Form -->
        </div>

        <div class="navbar-nav-wrap-content-end">
            <!-- Navbar -->
            <ul class="navbar-nav">

                <li class="nav-item d-none d-sm-inline-block">
                    <!-- Apps -->
                    <div class="dropdown">

                    </div>
                    <!-- End Apps -->
                </li>



                <li class="nav-item">
                    <!-- Account -->
                    <div class="dropdown">
                        <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"
                            data-bs-dropdown-animation>
                            <div class="avatar avatar-sm avatar-circle">
                                <img class="avatar-img" src="{{ $user_image }}" lt="Image Description">
                                <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account"
                            aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                            <div class="dropdown-item-text">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm avatar-circle">
                                        <img class="avatar-img"
                                            src="{{ $user_image }}" alt="Image Description">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-0">{{ $user_name ?? 'na' }}</h5>
                                        <p class="card-text text-body">{{ $user_email ?? 'Na' }}</p>
                                    </div>
                                </div>
                            </div>
                            <a class="dropdown-item" href="{{ url('user-logout') }}">Sign out</a>
                        </div>
                    </div>
                    <!-- End Account -->
                </li>
            </ul>
            <!-- End Navbar -->
        </div>
    </div>
</header>
<aside
        class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
        <div class="navbar-vertical-container">
            <div class="navbar-vertical-footer-offset">
                <!-- Logo -->
                <a class="navbar-brand" href="{{ url('build-resume') }}" aria-label="Front">
                    <img class="navbar-brand-logo" src="https://happiestresume.com/assets/happiestNewAssets/img/logo.png"
                        alt="Logo" data-hs-theme-appearance="dark">
                </a>

                <!-- End Logo -->

                <!-- Navbar Vertical Toggle -->
                <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
                    <i class="bi-arrow-bar-left navbar-toggler-short-align"
                        data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
                    <i class="bi-arrow-bar-right navbar-toggler-full-align"
                        data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
                </button>
                <!-- Content -->
                <div class="navbar-vertical-content">
                    <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
                        <!-- Collapse -->
                        <div class="nav-item">
                            <a class="nav-link" href={{ url('build-resume') }} role="button">
                                <i class="bi-house-door nav-icon"></i>
                                <span class="nav-link-title">Dashboards</span>
                            </a>
                        </div>
                        <!-- End Collapse -->

                        <span class="dropdown-header mt-4">Pages</span>
                        <small class="bi-three-dots nav-subtitle-replacer"></small>

                        <!-- Collapse -->
                        <div class="navbar-nav nav-compact">

                        </div>
                        <div id="navbarVerticalMenuPagesMenu">

                            <!-- Collapse -->
                            <div class="nav-item">
                                <a class="nav-link active" href="{{ url('account-settings') }}" role="button">
                                    <i class="bi-person-badge nav-icon"></i>
                                    <span class="nav-link-title">Resume</span>
                                </a>
                            </div>
                            <!-- End Collapse -->


                            <!-- Collapse -->
                            <div class="nav-item">
                                <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesUserProfileMenu"
                                    role="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarVerticalMenuPagesUserProfileMenu" aria-expanded="false"
                                    aria-controls="navbarVerticalMenuPagesUserProfileMenu">
                                    <i class="bi-person nav-icon"></i>
                                    <span class="nav-link-title">Jobs <span
                                            class="badge bg-primary rounded-pill ms-1">5</span></span>
                                </a>

                                <div id="navbarVerticalMenuPagesUserProfileMenu" class="nav-collapse collapse "
                                    data-bs-parent="#navbarVerticalMenuPagesMenu">
                                    <a class="nav-link " href="{{ url('appliedjobs') }}">View Jobs</a>
                                    <a class="nav-link " href="{{ url('appliedjobs') }}">Applied Jobs</a>
                                </div>
                            </div>
                            <!-- End Collapse -->
                        </div>
                    </div>
                </div>
                <!-- End Content -->

                <!-- Footer -->

                <!-- End Footer -->
            </div>
        </div>
    </aside>