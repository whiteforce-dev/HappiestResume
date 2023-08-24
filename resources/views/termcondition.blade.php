<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Term & Conditions</title>
    <link rel="stylesheet" href="{{ url('css/theme.min.css') }}">
   
    <link rel="stylesheet" media="screen" href="{{url('vendor/boxicons/css/boxicons.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ url('vendor/swiper/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('css/blog.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,900&family=Rubik:wght@300;400;600;700&display=swap"
    rel="stylesheet"/>
    
    <style>
      div#navbarNav.active-header ul li a {
            color: black;
            font-size: 0.9rem;
        }
        .first-black:hover{
          color: orange !important;
        }
        .blogtap {
            color: orange !important;
        }

        .nav-link {
            font-weight: 500;
            color: #000000;
            font-size: 0.9rem;
        }

        .fixed-top {
            height: 72px;
        }

        .fixed-top{
            box-shadow: 0 0 2px 2px #b9c2d7;
        }
        .back-btn:hover {
    background-color: #fd390e !important;
    border-color: #fd390e !important;
    color: #fff;
    box-shadow: 0 0.25rem 0.25rem 0.125rem rgba(253, 86, 49, .1), 0 0.375rem 0.75rem -0.125rem rgba(253, 86, 49, .4);
}
.mb-2 a{
text-decoration: none;

}
.list-unstyled li a{
  font-size: 0.9rem !important;
    font-weight: 500 !important;
    /* color: #423f50 !important; */
}
.btn-warning{
  background-color:  orange !important;
  font-size: 0.9rem;
}
.btn-warning:hover{
  background-color:  orange !important;
  background-color: #fd390e !important;
    border-color: #fd390e !important;
    color: #fff;
    box-shadow: 0 0.25rem 0.25rem 0.125rem rgba(253, 86, 49, .1), 0 0.375rem 0.75rem -0.125rem rgba(253, 86, 49, .4);
}
.small_border p{
font-size: 0.9rem !important;
}
.p-0{
  padding-left: 11px !important;
  width: 91%;
}
.px-6{
  max-width: 84%;
}
    </style>
</head>
<body style="font-family: Poppins, sans-serif;">


  <nav >
    <header id="" class="navbar navbar-expand-lg fixed-top py-4" data-scroll-header="" style="background-color: white;">
        <div class="container p-0" style="width: 90%;">
            <a class="navbar-brand me-0 me-xl-4" href="#">
                <img src="http://127.0.0.1:8000/assets/happiestNewAssets/img/logo.png" alt="Happiest Resume"
                    style="width: 110px;" loading="lazy">
            </a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <div id="nav-icon4">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>

            <div class="collapse navbar-collapse order-lg-2" id="navbarNav" style="justify-content: end;">
                <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem; width: 50%;">
                    <!-- Menu items-->
                    <li class="nav-item">
                      <li class="nav-item active">
                        <a class="nav-link " href="{{Request::is('/') ? " #home" : URL::to('/#home')}}" role="button" aria-expanded="false">Home
                        </a>
                    </li>
                    </li>

                    <li class="nav-item">
                      <li class="nav-item">
                        <a class="nav-link"  href="{{URL::to('exclusive-jobs')}}" role="button" aria-expanded="false">Jobs
                        </a>
                    </li>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="{{Request::is('/') ? " #about" : URL::to('/#about')}}" role="button" aria-expanded="false">About
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{Request::is('/') ? " #templates" : URL::to('/#templates')}}" role="button" aria-expanded="false">Templates
                      </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link first-black blogtap" href="{{ url('blog') }}" role="button"
                            aria-expanded="false">Blog
                        </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link"  href="{{Request::is('/') ? " #contact" :
                      URL::to('/#contact')}}" role="button" aria-expanded="false">Contact
                      </a>
                    </li>
                </ul>

                <div>
                    <a style="    background-color: #FF9900;
                    border-color: #FF9900;padding: 0.425rem 1rem;
    font-size: 0.875rem;
    border-radius: 0.375rem; width:91px;" class="btn btn-primary btn-sm ms-2 back-btn" href="{{ url('/') }}">
                    Back
                    </a>
                </div>
            </div>
        </div>
    </header>

</nav>



    {{-- <section class="container py-5 my-2 my-md-4 my-lg-5 main-blog"> --}}
        <style>
            .logowithmenu_bar {
                width: 100%;
                padding: 0px;
                transition: .5s all;
                position: fixed;
                z-index: 1000;
                top: 0px;
                min-height: 77px;
                background-color: white;
            }
            </style>
            <div class="container">
            <p style='margin-top:1.2in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><u><span style='font-size:27px;font-family:"Arial Black",sans-serif;color:#202124;'>Terms and Conditions</span></u><span style="font-size:19px;color:#202124;"><br> Welcome to Happiest resume!<br> <br>&nbsp;These terms and conditions outline the rules and regulations for the use of Rajpal Group&apos;s Website, located at&nbsp;</span><a href="https://happiestresume.com/"><span style="font-size:19px;color:blue;">https://happiestresume.com/ter</span></a><span style="font-size:19px;color:#202124;">.<br> <br> By accessing this website we assume you accept these terms and conditions. Do not continue to use Happiest resume if you do not agree to take all of the terms and conditions stated on this page.<br> <br> The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: &quot;Client&quot;, &quot;You&quot; and &quot;Your&quot; refers to you, the person log on this website and compliant to the Company&rsquo;s terms and conditions. &quot;The Company&quot;, &quot;Ourselves&quot;, &quot;We&quot;, &quot;Our&quot; and &quot;Us&quot;, refers to our Company. &quot;Party&quot;, &quot;Parties&quot;, or &quot;Us&quot;, refers to both the Client and ourselves. All terms refer to the offer, acceptance, and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client&rsquo;s needs in respect of the provision of the Company&rsquo;s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.<br> <br>&nbsp;</span><u><span style='font-size:24px;font-family:"Arial Black",sans-serif;color:#202124;'>Cookies</span></u><span style="font-size:19px;color:#202124;"><br> We employ the use of cookies. By accessing Happiest resume, you agreed to use cookies in agreement with the Rajpal Group&apos;s Privacy Policy.<br> <br> Most interactive websites use cookies to let us retrieve the user&rsquo;s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.<br> <br>&nbsp;</span><u><span style='font-size:24px;font-family:"Arial Black",sans-serif;color:#202124;'>License<br>&nbsp;</span></u><span style="font-size:19px;color:#202124;">Unless otherwise stated, Rajpal Group and/or its licensors own the intellectual property rights for all material on Happiest resume. All intellectual property rights are reserved. You may access this from Happiest resume for your own personal use subjected to restrictions set in these terms and conditions.<br> <br> <strong><u>You must not:</u></strong></span></p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:.5in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;">&nbsp;</span></p>
            <ul style="list-style-type: disc;">
                <li><span style="font-size:14.0pt;">Republish material from Happiest resume</span></li>
                <li><span style="font-size:14.0pt;">Sell, rent, or sub-license material from Happiest resume</span></li>
                <li><span style="font-size:14.0pt;">Reproduce, duplicate or copy material from Happiest resume</span></li>
                <li><span style="font-size:14.0pt;">Redistribute content from Happiest resume</span></li>
            </ul>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:.5in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;">&nbsp;</span></p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:.5in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;">Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Rajpal Group does not filter, edit, publish, or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Rajpal Group, its agents, and/or affiliates. Comments reflect the views and opinions of the person who posts their views and opinions. To the extent permitted by applicable laws, Rajpal Group shall not be liable for the Comments or for any liability, damages, or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.<br> <br> Rajpal Group reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive, or causes breach of these Terms and Conditions.<br> <br> <strong><u>You warrant and represent that:</u></strong><br>&nbsp;</span></p>
            <ul style="list-style-type: disc;">
                <li><span style="font-size:14.0pt;">You are entitled to post the Comments on our website and have all necessary licenses and consents to do so.&nbsp;</span></li>
                <li><span style="font-size:14.0pt;">The Comments do not invade any intellectual property right, including without limitation copyright, patent, or trademark of any third party.</span></li>
                <li><span style="font-size:14.0pt;">The Comments do not contain any defamatory, libelous, offensive, indecent, or otherwise unlawful material which is an invasion of privacy.</span></li>
                <li><span style="font-size:14.0pt;">Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.<br> <br>&nbsp;</span></li>
            </ul>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;">You hereby grant Rajpal Group a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce, and edit any of your Comments in any and all forms, formats, or media.<br> <br> <strong><u>Hyperlinking to our Content</u></strong></span></p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;">The following organizations may link to our Website without prior written approval:</span></p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:.5in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;">&nbsp;</span></p>
            <ul style="list-style-type: disc;">
                <li><span style="font-size:14.0pt;">Government agencies;</span></li>
                <li><span style="font-size:14.0pt;">Search engines;</span></li>
                <li><span style="font-size:14.0pt;">News organizations;</span></li>
                <li><span style="font-size:14.0pt;">Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses;&nbsp;</span></li>
                <li><span style="font-size:14.0pt;">System-wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.<br> <br>&nbsp;</span></li>
            </ul>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;">&nbsp;</span></p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;">These organizations may link to our home page, to publications, or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement, or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party&rsquo;s site.<br> <br>&nbsp;We may consider and approve other link requests from the following types of organizations:</span></p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:.5in;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;line-height:115%;color:#202124;">&nbsp;</span></p>
            <ul style="list-style-type: disc;">
                <li><span style="font-size:14.0pt;">commonly-known consumer and/or business information sources;<br>&nbsp;</span><a href="http://dot.com/"><span style="font-size:14.0pt;">dot.com</span></a><span style="font-family:Calibri;color:#202124;">&nbsp;community sites;</span></li>
                <li><span style="font-size:14.0pt;">associations or other groups representing charities;</span></li>
                <li><span style="font-size:14.0pt;">online directory distributors;</span></li>
                <li><span style="font-size:14.0pt;">internet portals;</span></li>
                <li><span style="font-size:14.0pt;">accounting, law, and consulting firms;&nbsp;</span></li>
                <li><span style="font-size:14.0pt;">educational institutions and trade associations.<br> <br>&nbsp;</span></li>
            </ul>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;">We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of Rajpal Group, and (d) the link is in the context of general resource information.<br> <br> These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement, or approval of the linking party and its products or services; and (c) fits within the context of the linking party&rsquo;s site.<br> <br> If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Rajpal Group. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.<br> <br>&nbsp;Approved organizations may hyperlink to our Website as follows:</span></p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:.5in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;">&nbsp;</span></p>
            <ul style="list-style-type: disc;">
                <li><span style="font-size:14.0pt;">By use of our corporate name;&nbsp;</span></li>
                <li><span style="font-size:14.0pt;">By use of the uniform resource locator being linked to;&nbsp;</span></li>
                <li><span style="font-size:14.0pt;">By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party&rsquo;s site.<br> <br>&nbsp;</span></li>
            </ul>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;">No use of Rajpal Group&apos;s logo or other artwork will be allowed for linking absent a trademark license agreement.<br> <br>&nbsp;</span><strong><u><span style='font-size:24px;font-family:"Arial Black",sans-serif;color:#202124;'>iFrames</span></u></strong></p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;"><br> Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.<br> <br>&nbsp;</span><strong><u><span style='font-size:24px;font-family:"Arial Black",sans-serif;color:#202124;'>Content Liability</span></u></strong></p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong><u><span style='font-size:24px;font-family:"Arial Black",sans-serif;color:#202124;'><br>&nbsp;</span></u></strong><span style="font-size:19px;color:#202124;">We shall not be held responsible for any content that appears on your Website. You agree to protect and defend us against all claims that, we are rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.<br> <br>&nbsp;</span><strong><u><span style='font-size:24px;font-family:"Arial Black",sans-serif;color:#202124;'>Your Privacy</span></u></strong><span style="font-size:19px;color:#202124;"><br>&nbsp;</span></p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;">Please read Privacy Policy<br> <br>&nbsp;</span><strong><u><span style='font-size:24px;font-family:"Arial Black",sans-serif;color:#202124;'>Reservation of Rights</span></u></strong></p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;"><br> We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amend these terms and conditions and its linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.<br> <br>&nbsp;</span><strong><u><span style='font-size:24px;font-family:"Arial Black",sans-serif;color:#202124;'>Removal of links from our website</span></u></strong></p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;"><br> If you find any link on our Website that is offensive for any reason, you are free to contact and inform us at any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.<br> <br> We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.<br> <br>&nbsp;</span><strong><u><span style='font-size:24px;font-family:"Arial Black",sans-serif;color:#202124;'>Disclaimer</span></u></strong></p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;">To the maximum extent permitted by applicable law, we exclude all representations, warranties, and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</span></p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;">&nbsp;</span></p>
            <ul style="list-style-type: disc;">
                <li><span style="font-size:14.0pt;">limit or exclude our or your liability for death or personal injury;</span></li>
                <li><span style="font-size:14.0pt;">limit or exclude our or your liability for fraud or fraudulent misrepresentation;</span></li>
                <li><span style="font-size:14.0pt;">limit any of our or your liabilities in any way that is not permitted under applicable law;&nbsp;</span></li>
                <li><span style="font-size:14.0pt;">exclude any of our or your liabilities that may not be excluded under applicable law.<br> <br>&nbsp;</span></li>
            </ul>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:0in;margin-left:0in;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><span style="font-size:19px;color:#202124;">The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort, and for breach of statutory duty.<br> <br>&nbsp;As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</span></p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            <p style='margin-top:0in;margin-right:0in;margin-bottom:10.0pt;margin-left:0in;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>&nbsp;</p>
            </div>
      {{-- </section> --}}
     
      <section class="pb-4 pt-8 bg-white" id="contact">
        @include('frontend.common.NewFooter')
        </section>

      <!-- <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
      <script src="{{ url('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
      <!-- <script src="vendor/vanilla-tilt/dist/vanilla-tilt.min.js"></script> -->
      <!-- <script src="vendor/rellax/rellax.min.js"></script> -->
      <script src="{{ url('vendor/swiper/swiper-bundle.min.js') }}"></script>
      <!-- <script src="vendor/img-comparison-slider/dist/index.js"></script> -->

      <script src="{{ url('js/theme.min.js') }}"></script>
      <script src="https://kit.fontawesome.com/66f2518709.js" crossorigin="anonymous"></script>

</body>
</html>
