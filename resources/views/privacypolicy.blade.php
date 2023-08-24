<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Section</title>
    <link rel="stylesheet" href="{{ url('css/theme.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ url('assets/happiestNewAssets/css/bootstrap.min.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ url('assets/happiestNewAssets/css/theme.min.css') }}"> --}}
    <link rel="stylesheet" media="screen" href="{{url('vendor/boxicons/css/boxicons.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ url('vendor/swiper/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('css/blog.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,900&family=Rubik:wght@300;400;600;700&display=swap"
    rel="stylesheet"/>
    <!-- <link rel="stylesheet" media="screen" href="vendor/img-comparison-slider/dist/styles.css"/> -->
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



    <section class="container py-5 my-2 my-md-4 my-lg-5 main-blog">
        <div class="container" style="margin-top: 125px;margin-bottom: 60px">
            <p><strong><u>Privacy Policy</u></strong></p>
            <p>Last updated: April 02, 2021</p>
            <p>This Privacy Policy describes Our policies and procedures on the collection, use, and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>
            <p>We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of the Privacy Policy Generator.<br /> <br /> <strong><u>Interpretation and Definitions</u></strong></p>
            <p><strong>Interpretation</strong></p>
            <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in the plural.</p>
            <p><strong>Definitions</strong></p>
            <p>For the purposes of this Privacy Policy:</p>
            <ul>
            <li><strong>Account</strong> means a unique account created for You to access our Service or parts of our Service.</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where "control" means ownership of 50% or more of the shares, equity interest, or other securities entitled to vote for the election of directors or other managing authority.</li>
            </ul>
            <p><strong>&nbsp;</strong></p>
            <ul>
            <li><strong>Application</strong> means the software program provided by the Company downloaded by You on any electronic device, named Happiest Resume</li>
            </ul>
            <p><strong>&nbsp;</strong></p>
            <ul>
            <li><strong>Company</strong> (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to Happiest Resume, 240 Rajpal Tower New Delhi.</li>
            </ul>
            <p><strong>&nbsp;</strong></p>
            <ul>
            <li><strong>Cookies</strong> are small files that are placed on Your computer, mobile device, or any other device by a website, containing the details of Your browsing history on that website among its many uses.</li>
            </ul>
            <p><strong>&nbsp;</strong></p>
            <ul>
            <li><strong>Country</strong> refers to Delhi, India</li>
            </ul>
            <p><strong>&nbsp;</strong></p>
            <ul>
            <li><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone, or a digital tablet.</li>
            </ul>
            <p><strong>&nbsp;</strong></p>
            <ul>
            <li><strong>Personal Data</strong> is any information that relates to an identified or identifiable individual.</li>
            </ul>
            <p><strong>&nbsp;</strong></p>
            <ul>
            <li><strong>Service</strong> refers to the Application or the Website or both.</li>
            </ul>
            <p><strong>&nbsp;</strong></p>
            <ul>
            <li><strong>Service Provider</strong> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service, or to assist the Company in analyzing how the Service is used.</li>
            </ul>
            <p><strong>&nbsp;</strong></p>
            <ul>
            <li><strong>Third-party Social Media Service</strong> refers to any website or any social network website through which a user can log in or create an account to use the Service.</li>
            </ul>
            <p><strong>&nbsp;</strong></p>
            <ul>
            <li><strong>Usage Data</strong> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</li>
            </ul>
            <p><strong>&nbsp;</strong></p>
            <ul>
            <li><strong>Website</strong> refers to Happiest Resume, accessible from <a href="https://happiestresume.com/">https://happiestresume.com/</a></li>
            </ul>
            <p><strong>&nbsp;</strong></p>
            <ul>
            <li><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</li>
            </ul>
            <p>&nbsp;</p>
            <p>Collecting and Using Your Personal Data</p>
            <p><strong>Types of Data Collected</strong></p>
            <p><strong>Personal Data</strong></p>
            <p>While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You.</p>
            <p>Personally, identifiable information may include, but is not limited to:</p>
            <ul>
            <li>Email address</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li>First name and last name</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li>Phone number</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li>Address, State, Province, ZIP/Postal code, City</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li>Usage Data</li>
            </ul>
            <p><strong>&nbsp;</strong></p>
            <p><strong>Usage Data</strong></p>
            <p>Usage Data has collected automatically when using the Service.</p>
            <p>Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
            <p>When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.</p>
            <p>We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p>
            <p><strong>Information from Third-Party Social Media Services</strong></p>
            <p>The Company allows You to create an account and log in to use the Service through the following Third-party Social Media Services:</p>
            <ul>
            <li>Google</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li>Facebook</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li>Twitter</li>
            </ul>
            <p>If You decide to register through or otherwise grant us access to a Third-Party Social Media Service, We may collect Personal data that is already associated with Your Third-Party Social Media Service's account, such as Your name, Your email address, Your activities, or Your contact list associated with that account.</p>
            <p>You may also have the option of sharing additional information with the Company through Your Third-Party Social Media Service's account. If You choose to provide such information and Personal Data, during registration or otherwise, You are giving the Company permission to use, share, and store it in a manner consistent with this Privacy Policy.</p>
            <p><strong>Information Collected while Using the Application</strong></p>
            <p>While using Our Application, in order to provide features of Our Application, We may collect, with Your prior permission:</p>
            <ul>
            <li>Information regarding your location</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li>Information from your Device's phone book (contacts list)</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li>Pictures and other information from your Device's camera and photo library</li>
            </ul>
            <p>We use this information to provide features of Our Service, to improve and customize Our Service. The information may be uploaded to the Company's servers and/or a Service Provider's server or it may be simply stored on Your device.</p>
            <p>You can enable or disable access to this information at any time, through Your Device settings.</p>
            <p><strong>Tracking Technologies and Cookies</strong></p>
            <p>We use cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:</p>
            <ul>
            <li><strong>Cookies or Browser Cookies</strong>. A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse cookies, our Service may use Cookies.</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li><strong>Flash Cookies</strong>. Certain features of our Service may use local stored objects (or Flash cookies) to collect and store information about Your preferences or Your activity on our Service. Flash Cookies are not managed by the same browser settings as those used for Browser Cookies. For more information on how You can delete Flash Cookies, please read "Where can I change the settings for disabling, or deleting local shared objects?" available at <a href="https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_">https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_</a></li>
            </ul>
            <p><strong>&nbsp;</strong></p>
            <ul>
            <li><strong>Web Beacons</strong>. Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).</li>
            </ul>
            <p>Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. Learn more about cookies: Cookies: What Do They Do?.</p>
            <p>We use both Session and Persistent Cookies for the purposes set out below:</p>
            <ul>
            <li>Necessary / Essential Cookies</li>
            </ul>
            <p>Type: Session Cookies</p>
            <p>Administered by: Us<br /> Purpose: These cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
            <p>&nbsp;</p>
            <ul>
            <li>Cookies Policy / Notice Acceptance Cookies</li>
            </ul>
            <p>Type: Persistent Cookies</p>
            <p>Administered by: Us</p>
            <p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
            <p>&nbsp;</p>
            <ul>
            <li>Functionality Cookies</li>
            </ul>
            <p>Type: Persistent Cookies Administered by: Us</p>
            <p>Purpose: These cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
            <p>For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.</p>
            <p>&nbsp;</p>
            <p><strong><u>Use of Your Personal Data</u></strong></p>
            <p>The Company may use Personal Data for the following purposes:</p>
            <ul>
            <li><strong>To provide and maintain our Service</strong>, including monitoring the usage of our Service.</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li><strong>To manage Your Account:</strong> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li><strong>For the performance of a contract:</strong> the development, compliance, and undertaking of the purchase contract for the products, items, or services You have purchased or of any other contract with Us through the Service.</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li><strong>To contact You:</strong> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products, or contracted services, including the security updates, when necessary or reasonable for their implementation.</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li><strong>To provide You with news</strong>, special offers, and general information about other goods, services, and events that we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li><strong>To manage Your requests:</strong> To attend and manage Your requests to Us.</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li><strong>For business transfers:</strong> We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or another sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li><strong>For other purposes:</strong> We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns, and to evaluate and improve our Service, products, services, marketing, and experience.</li>
            </ul>
            <p>We may share Your personal information in the following situations:</p>
            <ul>
            <li><strong>With Service Providers:</strong> We may share Your personal information with Service Providers to monitor and analyze the use of our Service, to contact You.</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li><strong>For business transfers:</strong> We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of Our business to another company.</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li><strong>With Affiliates:</strong> We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners, or other companies that We control or that are under common control with Us.</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li><strong>With business partners:</strong> We may share Your information with Our business partners to offer You certain products, services, or promotions.</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li><strong>With other users:</strong> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside. If You interact with other users or register through a Third-Party Social Media Service, Your contacts on the Third-Party Social Media Service may see Your name, profile, pictures, and description of Your activity. Similarly, other users will be able to view descriptions of Your activity, communicate with You and view Your profile.</li>
            </ul>
            <p>&nbsp;</p>
            <ul>
            <li><strong>With Your Consent:</strong> We may disclose Your personal information for any other purpose with Your consent.</li>
            </ul>
            <p>&nbsp;</p>
            <p><strong><u>Retention of Your Personal Data</u></strong></p>
            <p>The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>
            <p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p>
            <p><strong><u>Transfer of Your Personal Data</u></strong></p>
            <p>Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to &mdash; and maintained on &mdash; computers located outside of Your state, province, country, or other governmental jurisdiction where the data protection laws may differ from those from Your jurisdiction.</p>
            <p>Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>
            <p>The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</p>
            <p><strong><u>Disclosure of Your Personal Data</u></strong></p>
            <p><strong>Business Transactions</strong></p>
            <p>If the Company is involved in a merger, acquisition, or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p>
            <p><strong>Law enforcement</strong></p>
            <p>Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>
            <p><strong>Other legal requirements</strong></p>
            <p>The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p>
            <ul>
            <li>Comply with a legal obligation</li>
            <li>Protect and defend the rights or property of the Company</li>
            <li>Prevent or investigate possible wrongdoing in connection with the Service</li>
            <li>Protect the personal safety of users of the Service or the public</li>
            <li>Protect against legal liability</li>
            </ul>
            <p><strong>&nbsp;</strong></p>
            <p><strong>Security of Your Personal Data</strong></p>
            <p>The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p>
            <p><strong><u>Children's Privacy</u></strong></p>
            <p>Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please Contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>
            <p>If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.</p>
            <p><strong><u>Links to Other Website</u></strong></p>
            <p>Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.</p>
            <p>We have no control over and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>
            <p><strong><u>Changes to this Privacy Policy</u></strong></p>
            <p>We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>
            <p>We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the "Last Updated" date at the top of this Privacy Policy.</p>
            <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>
            <p><strong><u>Contact Us</u></strong></p>
            <p>If you have any questions about this Privacy Policy, You can contact us:</p>
            <p>By email: <a href="mailto:info@happiestresume.com">info@happiestresume.com</a></p>
            <p>By visiting this page on our website: <a href="https://happiestresume.com/">https://happiestresume.com/</a></p>
            </div>
      </section>
     
      <section class="pb-4 pt-8 bg-white" id="contact">
        @include('frontend.common.footer')
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