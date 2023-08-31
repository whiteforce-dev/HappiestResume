<style>
    .listimage {
        border-radius: 80px;
        height: 50px;
    }
    </style>

@extends('adminview.master')
@section('title','Admin | Registered Users')
@section('head')

    
@endsection
@section('content')
    <!-- <div class="breadcrumb">
        <h1 class="mr-2">List Of Users ({{isset($registrations_count)?$registrations_count:'0'}})</h1>
        <ul>
            <li>
                <a href="{{ URL::to('dashboard') }}">
                    Dashboard
                </a>
            </li>
           
        </ul>
    </div> -->

    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script>
        $(function () {
            $("#start_date").datepicker({
                dateFormat: 'dd-mm-yy',
            });
            $("#end_date").datepicker({
                dateFormat: 'dd-mm-yy',
            });
        });
    </script>
<!----------------------------------------- Email Modal -------------------------------->
<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content ">
        <div class="modal-header">
           
           
            
          <h5 class="modal-title" id="exampleModalLabel">Email</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('sendBulkEmailToCandiate') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
            <input type="hidden" name="cand_id" id="cand_id" value="">

            {{-- <div class="form-group">
                <label for="">Template Description</label>
                <input type="text" class="form-control myeditor" name="templateDescription" placeholder="Enter Your Template Description">
            </div> --}}
            <label>Subject</label>
            <input type="text" name="email_subject" id="email_subject" class="form-control"><br>
            <label>Title</label>
            <input type="text" name="email_title" id="email_title" class="form-control"><br>
            <label>Description</label>
            <textarea name="email_body" id="email_body" class="form-control" rows="10"></textarea>
            <!-- <textarea  class='tiny-mce' id='editor1' name="tem_desc" required="required"></textarea> -->
           
              <!-- <input type="file" name="image" class="form-control"> -->
      </div>   
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Send Email</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color:white">Close</button>
        </div>
    </form>
      </div>
    </div>
</div>
<!---------------------------------------Email Modal Closed-------------------------------------->
<!---------------------------------------SMS Modal------------------------------------------>
<div class="modal fade" id="smsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content ">
        <div class="modal-header">
           
           
            
          <h5 class="modal-title" id="exampleModalLabel">Message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('sendBulkSMSCandiate') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
            <input type="hidden" name="cand_sms_id" id="cand_sms_id" value="">
             <label>Message</label>
            <textarea name="sms_body" id="sms_body" class="form-control" rows="10"></textarea>
        </div>   
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Send Message</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color:white">Close</button>
        </div>
    </form>
      </div>
    </div>
</div>
<!---------------------------------------SMS Modal Closed----------------------------------->
    <div class="separator-breadcrumb border-top"></div>
    <div class="col-lg-12 col-md-12 mt-4">
        <div class="card text-center border-primary">
            <!-- -->
            <div class="card-header bg-primary text-white">
              
                
            </div>
            <div class="col-lg-12 col-md-12 mt-4">
                <div class="card  border-primary">
                    <!-- -->
                    <div class="card-header bg-primary  text-white">
                        <div>Resume Search By Fields</div>
                    </div>
                </div>
            </div>      
                   
            
            <script>
                function change() {
                    document.getElementById("myform").submit();
                }
            </script>
            <div class="card-body">
                <div class="ul-widget5">
               
                    @if(count($registrationss) > 0)
                    <p style="font-size: 20px;font-weight: 700;color: darkgoldenrod;">Total Available Candiate According To Your Search :- &nbsp;&nbsp;&nbsp;<span class="badge badge-success" style="padding-left: 20px;padding-right: 20px;padding-top: 10px;padding-bottom: 10px;">{{ $registrations_count}}</span></p>
                    <div class="row" style="margin-left: 79px;">
                  <button type="button" id="uncheckall"  class="btn btn-danger">Uncheck All</button>&nbsp;
                <button type="button" id="checkall" class="btn btn-primary">Check All</button>&nbsp;
                <button type="button" id="send_email" class="btn btn-success">Send Email</button>&nbsp;
                <button type="button" id="send_sms" class="btn btn-info">Send Message</button>

                  </div>
                  <br>
                        @foreach ($registrations as $in => $item)
                            @php
                                   
                                $registration = \App\RegistrationModel::where('id',$item->id)->first();
                                $user_login = \App\UserLogin_Model::find($registration->login_id);
                                $user_profile = \App\UserProfile::whereuser_id($registration->id)->first();
                                $user_work = \App\UserWorkExp::whereuser_id($registration->id)->first();
                                $user_skill = \App\UserSkill::whereuser_id($registration->id)->first();
                                $user_education = \App\UserEducation::whereuser_id($registration->id)->first();
                                $single = substr("$registration->name", 0, 1);
                                if($registration->resumeCode_id != ''){
                                    $user_code = \App\ResumeCodeModel::find($registration->resumeCode_id);
                                    $resumeCode = $user_code->user_code ;
                                }
                                else{
                                    $resumeCode = 1000;
                                }
                            @endphp
                    <div class="row ">
                    <div class="col-md-1">
                    <h5><input type="checkbox" name="conditions[]" class="checkmark" value="{{ $registration->id }}"> </h5>
                    </div>
                        <div class=" card  col-md-3" style="border-radius:0px;    background-color: cadetblue;">
                     
                        <div style="padding-top: 14px;">
                        <img class="listimage" src="https://via.placeholder.com/150/000000/FFFFFF/?text={{ ucfirst($single) }}"><br>
                        </div>
                        <div style="padding-top: 30px;">
                        <a class="ul-widget4__title" href="#" style="color:orange;font-size: 20px;" >{{ isset($registration->name)? $registration->name : '-'}}</a>
                        <p style="color:white">{{ isset($registration->email)? $registration->email : '-' }}</p> 
                        <p style="color:white;line-height: 0;">{{ isset($registration->contact)? $registration->contact : '-' }}</p> 
                        </div>
                   
                         <div style="padding-bottom: 10px">
                           <!-- <a href="https://localhost/happiest_resume/cv/{{ $resumeCode }}" class="btn btn-warning" style="color:white">View Resume</a><br> -->
                           <a href="https://happiestresume.com/cv/{{$resumeCode}}" target="_blank" class="btn btn-warning" style="color:white">View Resume</a><br>
                         </div>              
                        </div>
                        <div class="card col-md-7">
                        <br>
                            
                            <div class="row">
                               
                               <div class="col-md-4">
                               <h5 align="left"><b>Current Location</b></h5>
                                 <p align="left">{{ isset($user_profile->current_location)?$user_profile->current_location:'-' }}</p> 
                                 <h5 align="left"><b>Designation</b></h5>
                                 <p align="left">{{ isset($user_work->designation)? $user_work->designation : '-' }}</p> 
                               </div>
                               <div class="col-md-4">
                                 <h5 align="left"><b>Education</b></h5>
                                 <p align="left">{{ isset($user_education->type)? $user_education->type : '-' }}</p> 
                                 <h5 align="left"><b>Total Experience</b></h5>
                                 <p align="left">{{ isset($user_profile->total_exp)? $user_profile->total_exp : '-' }}</p> 
                               </div>
                               <div class="col-md-4">
                                 <h5 align="left"><b>Age</b></h5>
                                 <p align="left">{{ isset($user_profile->age)? $user_profile->age : '-' }}</p> 
                                 <h5 align="left"><b>Gender</b></h5>
                                 <p align="left">{{ isset($user_profile->gender)? $user_profile->gender : '-' }}</p> 
                               </div>
                               <div class="col-md-12">
                               <h5 align="left"><b>Skills</b></h5>
                                 <p align="left">{{ isset($user_skill->skills)?$user_skill->skills:'-' }}</p> 
                               </div>
                            </div>
                        </div>
                      
                    </div></br>
                        @endforeach

                      

                    @else
                        <div align="center">
                            < No Record Available >
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                        {{ $registrations->appends(Illuminate\Support\Facades\Input::except('page'))->links() }}
                        </div>
                        @if(count($registrationss) > 0)
                        <div class="col-md-6">
                        <p>Showing 10 candidate from {{ $registrations_count }}</p>
                        </div>
                    
                        @endif
                    </div>
                 
                </div>
            </div>
            <!-- -->
            <!-- -->
        </div>
    </div>
    <script>
    $(document).ready(function(){
$("#checkall").click(function () {
     $('input:checkbox').prop('checked', true);
 });
$("#uncheckall").click(function () {
    // alert();
     $('input:checkbox').prop('checked', false);
 });
});

$(function(){
      $('#send_email').click(function(){
        var allids = [];
        $(':checkbox:checked').each(function(i){
          allids[i] = $(this).val();
          i++;
         

          $('#emailModal').modal('show');
         
        });
        var htmlids = allids.toString();
        $('#cand_id').val(htmlids);
      });
    });
    $(function(){
      $('#send_sms').click(function(){
        var allids = [];
        $(':checkbox:checked').each(function(i){
          allids[i] = $(this).val();
          i++;
         

          $('#smsModal').modal('show');
         
        });
        var htmlids = allids.toString();
        $('#cand_sms_id').val(htmlids);
      });
    });    
    </script>
@endsection
@section('scripts')
@stop
