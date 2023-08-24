<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Happy Resume</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <link rel="shortcut icon" href="{!! url('assets/images/favicon.png') !!}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{!! url('assets/css/bootstrap.min.css') !!}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{!! url('assets/css/materialdesignicons.min.css') !!}" />

    <link rel="stylesheet" type="text/css" href="{!! url('assets/css/fontawesome.css') !!}" />


    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{!! url('assets/css/style.css') !!}" />
	<link rel="stylesheet" type="text/css" href="{!! url('assets/css/style-inner.css') !!}" />
<link rel="stylesheet" type="text/css" href="{!! url('assets/vendors/mixitup/mixitup.css') !!}" />
<script  src="{!! url('assets/vendors/mixitup/jquery.mixitup.min.js') !!}"></script>
<div class="modal fade" id="modal_registration" role="dialog" aria-hidden="true">
    <form action="{{url('registration')}}" method="post" autocomplete="off">
        <div class="modal-dialog">
            <div class="modal-content m_login">
                <div class="modal-header m_header">
                    <h5 class="modal-title"><b>Registration</b></h5>
                    <button type="button" class="close m_close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">

                    @csrf
                    <div class="md-form mt-0">
                    <label for="name" class="">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control"
                            maxlength="50" autocomplete="off" required>
                        
                    </div>
                    <div class="md-form mt-0">
                    <label for="email" class="">Email Address</label>
                        <input type="email" name="reg_email" value="{{ old('reg_email') }}" id="reg_email"
                            class="form-control" autocomplete="new-password" minlength="10" maxlength="50" required>
                       
                        <small id="email_error" style="color:red"></small>
                    </div>
                    <div class="md-form mt-0">
                    <label for="contact" class="">Contact no.</label>
                        <input type="text" name="contact" value="{{ old('contact') }}" id="reg_contact"
                            class="form-control" autocomplete="off" minlength="10" maxlength="10"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                            required>
                       
                        <small id="contact_error" style="color:red"></small>
                    </div>
                    <div class="md-form mt-0">
                    <label for="password" class="">Password</label>
                        <input type="password" name="password" id="password" class="form-control" autocomplete="off"
                            minlength="6" maxlength="20" required>
                       
                    </div>
                    <div class="md-form mt-0">
                    <label for="cpassword" class="">Confirm Password</label>
                        <input type="password" name="cpassword" id="cpassword" class="form-control" autocomplete="off"
                            minlength="6" maxlength="20" required>
                       
                    </div>
                    <br>
                    <button typeof="submit" id="btnsubmit_regis1"
                        class="btn btn_login btn-primary btn-lg btn-block req_btn text-white waves-effect waves-light">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        
        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="index.html" class="logo">
                    <img src="{!! url('assets/images/logo-light.png') !!}" alt="" class="logo-light" />
                    <img src="{!! url('assets/images/logo-dark.png') !!}" alt="" class="logo-dark" />
                </a>
            </div>                 
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
    
            <div id="navigation">
                <!-- Navigation Menu-->   
                <ul class="navigation-menu">
                    <li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('resume') }}">Resume</a></li>
                    <!-- <li><a href="page-2.html">About</a></li> -->
                    <li><a href="">Template</a></li>
                    <li><a href="page-4.html">Testimonial</a></li>
                    <li><a href="page-5.html">contact</a></li>
                    <li><a href="{{ url('hot-jobs') }}">Job</a></li>   
                    <li class="has-submenu">
                        <!-- <a href="javascript:void(0)"><img class="large-icon"  src="{!! url('assets/images/icons/user.png') !!}"/> John Doe <i class="mdi mdi-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="#">My Account</a></li>
							<li><a href="#">Sign Out</a></li> -->
                        </ul>
                    </li>		
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
        <!--end end-->
    </header><!--end header-->
    <!-- Navbar End -->

 
    <!-- popular category start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-0 pb-1">
                        <h4 class="title title-line pb-5">CHOOSE YOUR RESUME TEMPLATE</h4>
                        <p class="text-muted mb-1">Select a template. Remember you can always change your template design later on</p>
                    </div>
                </div>
            </div>
			
			
			<ul id="filters" class="clearfix montserrat">
        <li><span class="filter " data-filter=".simple, .modern, .professional, .functional, .creative, .executive, .oldschool">All</span></li>
        <li><span class="filter" data-filter=".simple">Simple</span></li>
        <li><span class="filter" data-filter=".modern">Modern </span></li>
        <li><span class="filter" data-filter=".professional">Professional</span></li>
        <li><span class="filter" data-filter=".functional">Functional</span></li>
        <li><span class="filter" data-filter=".creative">Creative</span></li>
        <li><span class="filter" data-filter=".executive">Extecutive</span></li>
        <li><span class="filter" data-filter=".oldschool">Old School</span></li>
      </ul>
	  <div id="portfoliolist">
          <div class="portfolio simple modern functional" data-cat="simple">
              <div class="img-container">
					<div class="link-container"><a class="bg-warning" href="">Coming Soon</a></div>
					<img src="{!! url('assets/images/resumes/1.png') !!}" class="img-fluid">
					</div>
          </div>
		  
		    <div class="portfolio oldschool professional creative" data-cat="simple">
              <div class="img-container">
					<div class="link-container"><a class="bg-warning" href="">Coming Soon</a></div>
					<img src="{!! url('assets/images/resumes/2.png') !!}" class="img-fluid">
					</div>
          </div>
		  
		    <div class="portfolio executive modern simple" data-cat="simple">
              <div class="img-container">
					<div class="link-container"><a class="bg-warning" href="">Coming Soon</a></div>
					<img src="{!! url('assets/images/resumes/3.png') !!}" class="img-fluid">
					</div>
          </div>
		  
		    <div class="portfolio creative executive professional" data-cat="simple">
              <div class="img-container">
					<div class="link-container"><a class="bg-warning" href="">Coming Soon</a></div>
					<img src="{!! url('assets/images/resumes/4.png') !!}" class="img-fluid">
					</div>
          </div>
        
		
		 <div class="portfolio simple modern functional" data-cat="simple">
              <div class="img-container">
					<div class="link-container"><a class="bg-warning" href="">Coming Soon</a></div>
					<img src="{!! url('assets/images/resumes/5.png') !!}" class="img-fluid">
					</div>
          </div>
		  
		    <div class="portfolio oldschool professional creative" data-cat="simple">
              <div class="img-container">
					<div class="link-container"><a class="bg-warning" href="">Coming Soon</a></div>
					<img src="{!! url('assets/images/resumes/6.png') !!}" class="img-fluid">
					</div>
          </div>
		  
		    <div class="portfolio executive modern simple" data-cat="simple">
              <div class="img-container">
					<div class="link-container"><a class="bg-warning" href="">Coming Soon</a></div>
					<img src="{!! url('assets/images/resumes/7.png') !!}" class="img-fluid">
					</div>
          </div>
		  
		    <div class="portfolio creative executive professional" data-cat="simple">
              <div class="img-container">
					<div class="link-container"><a class="bg-warning" href="">Coming Soon</a></div>
					<img src="{!! url('assets/images/resumes/8.png') !!}" class="img-fluid">
					</div>
          </div>
        
		
		 <div class="portfolio simple modern functional" data-cat="simple">
              <div class="img-container">
					<div class="link-container"><a class="bg-warning" href="">Coming Soon</a></div>
					<img src="{!! url('assets/images/resumes/9.png') !!}" class="img-fluid">
					</div>
          </div>
		  
		    <div class="portfolio oldschool professional creative" data-cat="simple">
              <div class="img-container">
					<div class="link-container"><a class="bg-warning" href="">Coming Soon</a></div>
					<img src="{!! url('assets/images/resumes/10.png') !!}" class="img-fluid">
					</div>
          </div>
		  
		    <div class="portfolio executive modern simple" data-cat="simple">
              <div class="img-container">
					<div class="link-container"><a class="bg-warning" href="">Coming Soon</a></div>
					<img src="{!! url('assets/images/resumes/11.png') !!}" class="img-fluid">
					</div>
          </div>
		  
		    <div class="portfolio creative executive professional" data-cat="simple">
              <div class="img-container">
					<div class="link-container"><a class="bg-warning" href="">Coming Soon</a></div>
					<img src="{!! url('assets/images/resumes/12.png') !!}" class="img-fluid">
					</div>
          </div>
        
		
		
		</div>
			
		<div class="clearfix"></div>
		
		<div class="row justify-content-center">
                <div class="col-12 text-center mt-4 pt-2">
                    <!-- <a href="{{ url('build-resume') }}" class="btn btn-warning">Start Building Resume</a> -->
                    <button type="button" class="btn btn-warning animated fadeInUp waves-effect waves-light" data-toggle="modal"
            data-target="#modal_registration">Start Building Resume
        </button>
                </div>
            </div>
		</div>
    </section>
    <!-- popular category end -->



    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="">
                        <p class="mb-0">© 2020 Happiest Resume. All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div><!--end container-->
    </footer><!--end footer-->
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

    <script src="{!! url('assets/js/app.js') !!}"></script>
    <script src="{!! url('assets/js/home.js') !!}"></script>
	<script  src="{!! url('assets/vendors/mixitup/jquery.mixitup.min.js') !!}"></script>

	<script>
	
	// Portfolio JavaScript Document
$(function () {
		'use strict';
		var filterList = {
			init: function () {
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: '.simple, .modern, .professional, .functional, .creative, .executive, .oldschool'  
      		}     
				});								
			
			}
		};
		// Run the show!
		filterList.init();
});	

	</script>
        <script>
 $(document).ready(function () {

    @if(empty(session('user')))
        $("#reg_email").on('keyup',function () {
            var reg_email = $.trim($(this).val());
            if (reg_email.trim() !== '') {
                $.get('{{ URL::to('check_reg_email') }}', {reg_email: reg_email}, function (data) {
                    console.log(data);
                    if (data == 'already') {
                        $('#reg_email').val('');
                        $('#email_error').html(reg_email+' email already exists, please login !!')
                    }
                    else
                    {
                        $('#email_error').html('');
                    }
                });
            }
        });

        $("#reg_contact").on('keyup',function () {
            var reg_contact = $.trim($(this).val());
            if (reg_contact.trim() !== '') {
                $.post('{{ URL::to('check_reg_contact') }}',
                {
                    reg_contact: reg_contact,
                    _token: "{{ csrf_token() }}",
                    _method: 'POST'
                }, function (data) {
                    if (data != 1) {
                        $('#contact_error').html('');
                    }
                    else
                    {
                        var str = $("#reg_contact").val();
                        $('#contact_error').html(str+' contact already exists, please login !!')
                        $("#reg_contact").val(str.slice(0, -1));
                    }
                });
            }
        });
        @endif
 });
        </script>

</body>
</html>