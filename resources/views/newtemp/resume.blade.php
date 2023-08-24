@extends('frontend.master.front_master')
@section('title', 'Dashboard')
@section('content')
    
<link rel="shortcut icon" href="{!! url('assets/images/favicon.png') !!}">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{!! url('assets/css/bootstrap.min.css') !!}" type="text/css">

<!--Material Icon -->
<link rel="stylesheet" type="text/css" href="{!! url('assets/css/materialdesignicons.min.css') !!}" />

<link rel="stylesheet" type="text/css" href="{!! url('assets/css/fontawesome.css') !!}" />

<!-- Custom  Css -->
<link rel="stylesheet" type="text/css" href="{!! url('assets/css/style.css') !!}" />
<link rel="stylesheet" type="text/css" href="{!! url('assets/css/style-inner.css') !!}" /> 
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-0 pb-1">
                        <h4 class="title title-line pb-5">BUIDING A PERFECT RESUME HAS NEVER BEEN THIS EASY</h4>
                        <p class="text-muted mb-1">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="container-small three-circles">
			<div class="row text-center mb-4 line-after">
                <div class="col-lg-4 circle-container col-md-6 mt-3 pt-2">
                    <div class="dashed-circle">
					<img src="{!! url('assets/images/icons/icon-a.png') !!}"/>
					</div>
					<p>Choose a professional<br>Resume Template</p>
                </div>
				
				   <div class="col-lg-4 circle-container col-md-6 mt-3 pt-2">
                    <div class="dashed-circle">
					<img src="{!! url('assets/images/icons/icon-c.png') !!}"/>
					</div>
					<p>Build your resume using our<br> pre-written examples</p>
                </div>
				
				   <div class="col-lg-4 circle-container col-md-6 mt-3 pt-2">
                    <div class="dashed-circle">
					<img src="{!! url('assets/images/icons/icon-b.png') !!}"/>
					</div>
					<p>Download your resume &amp;<br> start impressing employers</p>
                </div>
            
			
			
				
            </div>
            
			<div class="text-center"><a href="{{ url('build-resume') }}" class="btn btn-primary mb-3">Build My Resume <i class="mdi mdi-chevron-right"></i></a>
			<p>By clicking "build my resume", you agree to<br>
our Terms of Use and Privacy Policy.</p>
			</div>
			</div>

            <div class="row justify-content-center">
                <div class="col-12 text-center mt-4 pt-2">
                    
                </div>
            </div>
        </div>
    </section>
    <!-- popular category end -->



   <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{!! url('assets/js/jquery.min.js') !!}"></script>
    <script src="{!! url('assets/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! url('assets/js/jquery.easing.min.js') !!}"></script>
    <script src="{!! url('assets/js/plugins.js') !!}"></script>
    <script src="{!! url('assets/js/counter.int.js') !!}"></script>

    <!-- selectize js -->
    <script src="{!! url('assets/js/selectize.min.js') !!}"></script>
    <script src="{!! url('assets/js/jquery.nice-select.min.js') !!}"></script>

    <script src="{!! url('assets/js/owl.carousel.min.js') !!}"></script>

    <script src="{!! url('assets/js/app.js') !!}"></script>
    <script src="{!! url('assets/js/home.js') !!}"></script>

    @endsection