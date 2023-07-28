<style>

@media only screen and (max-width: 320px) {
   .showtg {
      display: block !important;
      margin-bottom:50px !important;
   }
}

@media only screen and (max-width: 360px) {
    .showtg {
      display: block !important;
      margin-bottom:50px !important;
   }
}

@media only screen and (max-width: 375px) {
    .showtg {
      display: block !important;
      margin-bottom:50px !important;
   }
}

@media only screen and (max-width: 411px) {
    .showtg {
      display: block !important;
      margin-bottom:50px !important;
   }
}

@media only screen and (max-width: 425px) {
    .showtg {
      display: block !important;
      margin-bottom:50px !important;
   }
}
</style>
<section class="testimonial_block" id="testimonial">
    <div class="about_title text-center" data-aos="fade-down" data-aos-duration="1000">
        <div class="border-line center_border"></div>
        <h2>Testimonials</h2>
        <p>What Our Users Say About Saisun Resume Builder</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="slider_carousal">
                <div id="testomonial_slider" class="carousel testimonial-carousel slide carousel-multi-item mb-5"
                     data-ride="carousel">
                    <div class="controls-top">
                        <a class="btn-floating light-blue darken-4 left_slider_arrow" href="#testomonial_slider"
                           data-slide="prev"><i class="mdi mdi-chevron-left"></i></a>
                        <a class="btn-floating light-blue darken-4 right_slider_arrow" href="#testomonial_slider"
                           data-slide="next"><i class="mdi mdi-chevron-right"></i></a>
                    </div>
                    <div class="carousel-inner" role="listbox">
                        @if(count($testimonials_active))
                            @foreach ($testimonials_active as $key => $testimonial)
                                @php
                                    ++$key;
                                @endphp
                              @if($key%4 == 0 || $key == 1)  <div class="carousel-item {{$key == 1?'active':''}}">  @endif
                                    <div class="col-md-4 clearfix d-none d-md-block showtg" title="{{++$key}}">
                                        <div class="testimonial">
                                            <div class="avatar mx-auto">
                                                @if(file_exists($testimonial->image))
                                                    <img src="{{url($testimonial->image)}}"
                                                         class="rounded-circle img-fluid">
                                                @else
                                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg"
                                                         class="rounded-circle img-fluid">
                                                @endif
                                            </div>
                                            <!--Content-->
                                            <h4 class="font-weight-bold mt-4">
                                                {{ isset($testimonial->name)?$testimonial->name:'' }}
                                            </h4>
                                            <h6 class="blue-text font-weight-bold my-3">
                                                {{ isset($testimonial->designation)?$testimonial->designation:'' }}
                                            </h6>
                                            <p class="font-weight-normal"><i class="mdi mdi-quote-left pr-2"></i>
                                                {{ isset($testimonial->comment)?$testimonial->comment:'' }}
                                            </p>
                                            <!--Review-->
                                            <div class="orange-text">
                                                <i class="mdi mdi-star"> </i>
                                                <i class="mdi mdi-star"> </i>
                                                <i class="mdi mdi-star"> </i>
                                                <i class="mdi mdi-star"> </i>
                                                <i class="mdi mdi-star-half-full"> </i>
                                            </div>
                                        </div>
                                    </div>
                                @if($key%4 == 0 || $key == 1) </div> @endif
                            @endforeach
                        @endif


                        {{-- <div class="col-md-4">
                                <div class="testimonial">
                                    <div class="avatar mx-auto">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg"
                                            class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold mt-4">Anna Deynah</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Web Designer</h6>
                                    <p class="font-weight-normal"><i class="mdi mdi-quote-left pr-2"></i>Lorem ipsum
                                        dolor
                                        sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur.
                                    </p>
                                    <!--Review-->
                                    <div class="orange-text">
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star-half-full"> </i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg"
                                            class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold mt-4">John Doe</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Web Developer</h6>
                                    <p class="font-weight-normal"><i class="mdi mdi-quote-left pr-2"></i>Ut enim ad
                                        minima
                                        veniam, quis nostrum exercitationem ullam corporis laboriosam.</p>
                                    <!--Review-->
                                    <div class="orange-text">
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                                            class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold mt-4">Abbey Clark</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Photographer</h6>
                                    <p class="font-weight-normal"><i class="mdi mdi-quote-left pr-2"></i>Quis autem
                                        vel
                                        eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.
                                    </p>
                                    <!--Review-->
                                    <div class="orange-text">
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star-o"> </i>
                                    </div>
                                </div>
                            </div> --}}
                    </div>
                    <!--First slide-->

                    <!--Second slide-->
                {{-- <div class="carousel-item"> --}}

                <!--Grid column-->
                {{-- <div class="col-md-4">
                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(4).jpg"
                                        class="rounded-circle img-fluid">
                                </div>
                                <!--Content-->
                                <h4 class="font-weight-bold mt-4">Blake Dabney</h4>
                                <h6 class="blue-text font-weight-bold my-3">Web Designer</h6>
                                <p class="font-weight-normal"><i class="mdi mdi-quote-left pr-2"></i>Ut enim ad
                                    minima
                                    veniam, quis nostrum exercitationem ullam corporis laboriosam.</p>
                                <!--Review-->
                                <div class="orange-text">
                                    <i class="mdi mdi-star"> </i>
                                    <i class="mdi mdi-star"> </i>
                                    <i class="mdi mdi-star"> </i>
                                    <i class="mdi mdi-star"> </i>
                                    <i class="mdi mdi-star-half-full"> </i>
                                </div>
                            </div>
                        </div> --}}
                <!--Grid column-->

                    <!--Grid column-->
                {{-- <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar mx-auto">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(6).jpg"
                                        class="rounded-circle img-fluid">
                                </div>
                                <!--Content-->
                                <h4 class="font-weight-bold mt-4">Andrea Clay</h4>
                                <h6 class="blue-text font-weight-bold my-3">Front-end developer</h6>
                                <p class="font-weight-normal"><i class="mdi mdi-quote-left pr-2"></i>Lorem ipsum
                                    dolor
                                    sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur
                                    quae.
                                </p>
                                <!--Review-->
                                <div class="orange-text">
                                    <i class="mdi mdi-star"> </i>
                                    <i class="mdi mdi-star"> </i>
                                    <i class="mdi mdi-star"> </i>
                                    <i class="mdi mdi-star"> </i>
                                    <i class="mdi mdi-star"> </i>
                                </div>
                            </div>
                        </div> --}}
                <!--Grid column-->

                    <!--Grid column-->
                    {{-- <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(7).jpg"
                                            class="rounded-circle img-fluid">
                                    </div>

                                    <h4 class="font-weight-bold mt-4">Cami Gosse</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Phtographer</h6>
                                    <p class="font-weight-normal"><i class="mdi mdi-quote-left pr-2"></i>At vero eos
                                        et
                                        accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>

                                    <div class="orange-text">
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star-o"> </i>
                                    </div>
                                </div>
                            </div> --}}
                    {{-- </div> --}}
                    {{-- <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="testimonial">
                                    <div class="avatar mx-auto">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg"
                                            class="rounded-circle img-fluid">
                                    </div>
                                    <h4 class="font-weight-bold mt-4">Bobby Haley</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Web Developer</h6>
                                    <p class="font-weight-normal"><i class="mdi mdi-quote-left pr-2"></i>Lorem ipsum
                                        dolor
                                        sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur
                                        quae.
                                    </p>

                                    <div class="orange-text">
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg"
                                            class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold mt-4">Elisa Janson</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Marketer</h6>
                                    <p class="font-weight-normal"><i class="mdi mdi-quote-left pr-2"></i>At vero eos
                                        et
                                        accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                                    <!--Review-->
                                    <div class="orange-text">
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star-half-full"> </i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="testimonial">
                                    <!--Avatar-->
                                    <div class="avatar mx-auto">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
                                            class="rounded-circle img-fluid">
                                    </div>
                                    <!--Content-->
                                    <h4 class="font-weight-bold mt-4">Rob Jacobs</h4>
                                    <h6 class="blue-text font-weight-bold my-3">Front-end developer</h6>
                                    <p class="font-weight-normal"><i class="mdi mdi-quote-left pr-2"></i>Ut enim ad
                                        minima
                                        veniam, quis nostrum exercitationem ullam corporis laboriosam.</p>

                                    <div class="orange-text">
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star"> </i>
                                        <i class="mdi mdi-star-o"> </i>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>
    </div>
    </div>
</section>