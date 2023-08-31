<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{url('admin/css/themes/lite-purple.min.css')}}" rel="stylesheet" />
    <link href="{{url('admin/css/plugins/perfect-scrollbar.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="{{url('admin/css/plugins/toastr.css')}}" >
    {{--<link rel="stylesheet" href="{{URL::to('public/admin/').'/'}}js/jquery-confirm.min.js"/>--}}

    <link href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    
    <style type="text/css">
        .active_menu {
            background-color: #e5e5e5;
        }
    </style>

    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">

        @include('adminview.commen.main_header')

        {{-- @if(Auth::user()->role == 'admin') --}}
        @include('adminview.commen.sidebar')

        {{-- @elseif(Auth::user()->role == 'client' || Auth::user()->role == 'office staff')
        @include('adminview.commen.client_sidebar')
        
        @endif --}}

        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                @yield('content')
                <!-- end of main-content -->
            </div><!-- Footer Start -->
            <div class="flex-grow-1"></div>
            <div class="app-footer">
                {{--n--}}
                <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
                    {{-- <a class="btn btn-primary text-white btn-rounded"
                    href="https://themeforest.net/item/gull-bootstrap-laravel-admin-dashboard-template/23101970"
                    target="_blank">Buy Gull HTML</a> --}}
                    <span class="flex-grow-1"></span>
                    <div class="d-flex align-items-center">
                        <img class="logo" src="{{URL::to('public/front/images/logo1.png')}}" alt="">
                        <div>
                            <p class="m-0">&copy; 2020 Happiest Resume</p>
                            <p class="m-0">All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fotter end -->
        </div>

        <div class="search-ui">
            <div class="search-header">
                <img src="../../dist-assets/images/logo.png" alt="" class="logo">
                <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                    <i class="i-Close-Window text-22 text-muted"></i>
                </button>
            </div>
            <input type="text" placeholder="Type here" class="search-input" autofocus>
            <div class="search-title">
                <span class="text-muted">Search results</span>
            </div>
            <div class="search-results list-horizontal">
                <div class="list-item col-md-12 p-0">
                    <div class="card o-hidden flex-row mb-4 d-flex">
                        <div class="list-thumb d-flex">
                            <!-- TUMBNAIL -->
                            <img src="../../dist-assets/images/products/headphone-1.jpg" alt="">
                        </div>
                        <div class="flex-grow-1 pl-2 d-flex">
                            <div
                                class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                                <!-- OTHER DATA -->
                                <a href="#" class="w-40 w-sm-100">
                                    <div class="item-title">Headphone 1</div>
                                </a>
                                <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                                <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                    <del class="text-secondary">$400</del>
                                </p>
                                <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                    <span class="badge badge-danger">Sale</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-item col-md-12 p-0">
                    <div class="card o-hidden flex-row mb-4 d-flex">
                        <div class="list-thumb d-flex">
                            <!-- TUMBNAIL -->
                            <img src="../../dist-assets/images/products/headphone-2.jpg" alt="">
                        </div>
                        <div class="flex-grow-1 pl-2 d-flex">
                            <div
                                class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                                <!-- OTHER DATA -->
                                <a href="#" class="w-40 w-sm-100">
                                    <div class="item-title">Headphone 1</div>
                                </a>
                                <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                                <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                    <del class="text-secondary">$400</del>
                                </p>
                                <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                    <span class="badge badge-primary">New</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-item col-md-12 p-0">
                    <div class="card o-hidden flex-row mb-4 d-flex">
                        <div class="list-thumb d-flex">
                            <!-- TUMBNAIL -->
                            <img src="../../dist-assets/images/products/headphone-3.jpg" alt="">
                        </div>
                        <div class="flex-grow-1 pl-2 d-flex">
                            <div
                                class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                                <!-- OTHER DATA -->
                                <a href="#" class="w-40 w-sm-100">
                                    <div class="item-title">Headphone 1</div>
                                </a>
                                <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                                <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                    <del class="text-secondary">$400</del>
                                </p>
                                <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                    <span class="badge badge-primary">New</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-item col-md-12 p-0">
                    <div class="card o-hidden flex-row mb-4 d-flex">
                        <div class="list-thumb d-flex">
                            <!-- TUMBNAIL -->
                            <img src="../../dist-assets/images/products/headphone-4.jpg" alt="">
                        </div>
                        <div class="flex-grow-1 pl-2 d-flex">
                            <div
                                class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                                <!-- OTHER DATA -->
                                <a href="#" class="w-40 w-sm-100">
                                    <div class="item-title">Headphone 1</div>
                                </a>
                                <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                                <p class="m-0 text-muted text-small w-15 w-sm-100">$300
                                    <del class="text-secondary">$400</del>
                                </p>
                                <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                    <span class="badge badge-primary">New</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGINATION CONTROL -->
            <div class="col-md-12 mt-5 text-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination d-inline-flex">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        @include('backend.manipulation.edit')
        <!-- ============ Search UI End ============= -->
        {{-- <script src="{{URL::to('public/admin/').'/'}}js/plugins/jquery-3.3.1.min.js"></script> --}}
        <script src="{{URL::to('public/admin/').'/'}}js/plugins/bootstrap.bundle.min.js"></script>
        <script src="{{URL::to('public/admin/').'/'}}js/plugins/perfect-scrollbar.min.js"></script>
        <script src="{{URL::to('public/admin/').'/'}}js/scripts/script.min.js"></script>
        <script src="{{URL::to('public/admin/').'/'}}js/scripts/sidebar.large.script.min.js"></script>
        <script src="{{URL::to('public/admin/').'/'}}js/plugins/apexcharts.min.js"></script>
        <script src="{{URL::to('public/admin/').'/'}}js/plugins/echarts.min.js"></script>
        <script src="{{URL::to('public/admin/').'/'}}js/scripts/echart.options.min.js"></script>
        {{--<script src="{{URL::to('public/admin/').'/'}}js/scripts/dashboard.v3.script.min.js"></script>--}}
        <script src="{{URL::to('public/admin/').'/'}}js/scripts/apexcharts.min.js"></script>
        <script src="{{URL::to('public/admin/').'/'}}js/scripts/card.metrics.script.min.js"></script>
        <script src="{{URL::to('public/admin/').'/'}}js/scripts/widgets-statistics.min.js"></script>
        <script src="{{URL::to('public/admin/').'/'}}js/scripts/apexColumnChart.script.min.js"></script>
        <script src="{{URL::to('public/admin/').'/'}}js/scripts/form.validation.script.min.js"></script>
        <script src="{{URL::to('public/admin/').'/'}}js/plugins/toastr.min.js"></script>
        <script src="{{URL::to('public/admin/').'/'}}js/scripts/toastr.script.min.js"></script>
        @if(session()->has('success'))
        <script type="text/javascript">
            {{--SnackBar({--}}
                    {{--message: "{{ session()->get('message') }}",--}}
                    {{--status: "success",--}}
                    {{--fixed: true,--}}
                    {{--timeout: 6000--}}
                    {{--});--}}
            $(document).ready(function () {
                toastr.success("{{ session()->get('success') }}", {
                    showMethod: "slideDown",
                    hideMethod: "slideUp",
                    timeOut: 2e3
                });
            });
        </script>
        @endif
        @if(session()->has('errmessage'))
        <script type="text/javascript">
            $(document).ready(function () {
                toastr.error("{{ session()->get('errmessage') }}", {
                    showMethod: "slideDown",
                    hideMethod: "slideUp",
                    timeOut: 2e3
                });
            });
            {{--SnackBar({--}}
            {{--message: "{{ session()->get('errmessage') }}",--}}
            {{--status: "danger",--}}
            {{--fixed: true,--}}
            {{--timeout: 5000--}}
            {{--});--}}
        </script>
        @endif
</body>

</html>