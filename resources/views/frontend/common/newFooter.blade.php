@php
$registerations = \App\Models\UserLogin_Model::where(['is_active' => 1])->orderBy('id', 'desc')->take(2)->get();
$contactus = \App\Models\ContactModel::where(['is_del' => 0])->first();
$aboutus = \App\Models\AboutUsModel::where(['is_del' => 0])->first();
@endphp

<style>
    input,
    select {
        font-size: 12px !important;
        margin-bottom: 5px;
        border: solid thin #e1e1e1;
    }
    .small_border {
        width: 50px !important;
        height: 3px !important;
    }
    .border-line {
        background: #6a82fb;
        background: -moz-linear-gradient(left, #6a82fb 0, #fc5c7c 100%);
        background: -webkit-gradient( left top, right top, color-stop(0, #6a82fb), color-stop(100%, #fc5c7c) );
        background: -webkit-linear-gradient(left, #6a82fb 0, #fc5c7c 100%);
        background: -o-linear-gradient(left, #6a82fb 0, #fc5c7c 100%);
        background: -ms-linear-gradient(left, #6a82fb 0, #fc5c7c 100%);
        background: linear-gradient(to right, #6a82fb 0, #fc5c7c 100%);
        width: 138px;
        height: 6px;
        margin-bottom: 10px;
    }
</style>
<footer class="">
    <div class="container py-3 px-6">
        <div class="row py-4">
            <div class="col-lg-3 col-md-3 mb-4 mb-lg-0 footer-div">
                <div class="border-line small_border"></div>
                <h6>About Us</h6>
                <p>{{isset($aboutus->description)?$aboutus->description:'Happiest Resume Pvt. Ltd. is a fastest growing ISO 9001:2008 certified'}}
                </p>
                <div class="row" style="color: #000;">

                    @if(isset($contactus->address))
                    <div class="col-md-2" style="width: 10% !important; color:#423f50;">
                        <i class="bi bi-envelope-fill"  target="_blank" ></i>
                    </div>
                    <div class="col-md-8 p-0 ">
                        <p style="color:#423f50;">{{$contactus->address}}</p>
                    </div>
                    @endif
                    <div class="col-md-2" style="width: 10% !important; color:#423f50;">
                        <i class="bi bi-envelope-fill"  target="_blank" ></i>
                    </div>
                    <div class="col-md-8 p-0 ">
                        <p><a href="mailto: {{isset($contactus->email)?$contactus->email:'info@happiestresume.com'}}"
                                style="color:#423f50;"  target="_blank" >{{isset($contactus->email)?$contactus->email:'info@happiestresume.com'}}</a>
                        </p>
                    </div>

                    @if(isset($contactus->contact))

                    <div class="col-md-8 p-0 ">
                        <p><a href="tel: {{--{{isset($contactus->contact)?$contactus->contact:'+91-9981435702'}}--}}"
                                style="color:#000;"  target="_blank" >{{--{{isset($contactus->contact)?$contactus->contact:'+91-9981435702'}}--}}</a>
                        </p>
                    </div>
                    @endif
                </div>
            </div>

            <div class="col-lg-3 col-md-3 mb-4 mb-lg-0 footer-div" style="color: #000; padding-left: 50px;">
                <div class="border-line small_border"></div>
                <h6>Quick Links</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <a href="{{Request::is('/') ? " #about" : URL::to('/#about')}}" style="color: #423f50;"  target="_blank" >About
                            Us</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{Request::is('/') ? " #how-it-works" : URL::to('/#how-it-works')}}"
                            style="color:#423f50;"  target="_blank" >How It Works</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{Request::is('/') ? " #templates" : URL::to('/#templates')}}"
                            style="color: #423f50;"  target="_blank" >Templates</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{Request::is('/') ? " #testimonial" : URL::to('/#testimonial')}}"
                            style="color: #423f50;"  target="_blank" >Testimonials</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ url('term-Condition') }}"  target="_blank"  style="color: #423f50;">Terms & Conditions</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ url('privacy-policy') }}"  target="_blank"  style="color:#423f50;">Privacy Policy</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 mb-4 mb-lg-0 footer-div" style="color: #000; padding-left: 50px;">
                <div class="border-line small_border"></div>
                <h6>Social Media</h6>
                <ul class="list-unstyled mb-0">
                    @php
                        $socialNetwork = App\Models\SocialNetwork::where('is_active', 1)->get();
                    @endphp
                    @if(count($socialNetwork))
                        @foreach ($socialNetwork as $item)
                            @if($item->name == 'Facebook' or $item->name == 'facebook')
                            <li class="mb-2">
                                <a href="{{ isset($item->link)?$item->link:'' }}" target="_blank" style="color: #1877F2;"><i class="bi bi-facebook"></i> &nbsp; Facebook</a>
                            </li>
                            @endif
                            @if($item->name == 'Youtube' or $item->name == 'youtube')
                            <li class="mb-2">
                                <a href="{{ isset($item->link)?$item->link:'' }}" target="_blank" style="color: #FF0000;"><i class="bi bi-youtube"></i> &nbsp; Youtube</a>
                            </li>
                            @endif
                            @if($item->name == 'Instagram' or $item->name == 'instagram')
                            <li class="mb-2">
                                <a href="{{ isset($item->link)?$item->link:'' }}" target="_blank" style="color: #F60B5A;"><i class="bi bi-instagram"></i> &nbsp; Instagram</a>
                            </li>
                            @endif
                            @if($item->name == 'Twitter' or $item->name == 'twitter')
                            <li class="mb-2">
                                <a href="{{ isset($item->link)?$item->link:'' }}" target="_blank" style="color: #1DA1F2;"><i class="bi bi-twitter"></i> &nbsp; Twitter</a>
                            </li>
                            @endif
                            @if($item->name == 'Linkedin' or $item->name == 'linkedin')
                            <li class="mb-2">
                                <a href="{{ isset($item->link)?$item->link:'' }}" target="_blank" style="color: #0070B1;"><i class="bi bi-linkedin"></i> &nbsp; LinkedIn</a>
                            </li>
                            @endif
                        @endforeach
                    @endif
                </ul>
            </div>
            @php
            $industries= App\Models\Industry::get();
            @endphp
           
            <div class="col-lg-3 col-sm-6">
                <div class="link_box bottom_contact">
                    <div class="border-line small_border"></div>
                    <h6>Contact Us</h6>
                    <input type="text" class="form-control" name="name_q" id="name_q" placeholder="Enter Name" required>
                    <input type="text" class="form-control" name="email_q" id="email_q" placeholder="Enter Email"
                        required>
                    <input type="number" class="form-control" name="contact_q" id="contact_q"
                        placeholder="Enter Contact" required>

                    <select class="form-control" style="font-family: Gill Sans, sans-serif;"
                        aria-label="Default select example" name="industry" id="industry" required>
                        <option value="" selected>Open this select Industry</option>
                        @foreach($industries as $industry )
                        <option value="{{ $industry->industry_name }}">{{ $industry->industry_name }}</option>
                        @endforeach
                    </select>
                    <input type="text" class="form-control" name="message_q" id="message_q" placeholder="Enter Message"
                        required>
                    <button class="btn btn-sm btn-warning col-md-12" type="button" onclick="contactUs()">Send</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyrights -->
    <div class="">
        <div class="container px-6">
            <hr style="background: #666;">
            <div class="row" style="color: #000;">
                <div class="col-lg-12 d-flex">
                    <p class="py-3 col-md-12 col-lg-12 text-center" style="font-size: 14px;">Copyright © {{ date('Y') }}
                        Happiest Resume. All
                        rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>

 function contactUs() {
//    alert('aaya');
        var name = document.getElementById('name_q').value;
           
        var email = $('#email_q').val();
        var contact = $('#contact_q').val();
        // alert(contact);
        var industry = $('#industry').val();
        var message = $('#message_q').val();
        
            $.ajax({
                url:"{{ url('save_contact_query') }}",
                type:"POST",
                data: {
                      name: name,
                      email: email,
                      contact: contact,
                      industry: industry,
                      message: message,
                      _token : "{{ csrf_token() }}",
                  },
                success:function(response){
                    console.log(response);
                    if(response==1){
                        alert('Your query has been sent wll get back to you soon...!');
                        location.reload();
                    }
                },
                error:function(error){
                    console.log(error);
                }
            });
        // }
    }
    function print_statement() {
        var divToPrint = document.getElementById('append_resume');

        var newWin = window.open('', 'Print-Window');

        newWin.document.open();

        newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');

        newWin.document.close();

        setTimeout(function () {
            newWin.close();
        }, 10);
    }
</script>