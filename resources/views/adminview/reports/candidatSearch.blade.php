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
    <div class="breadcrumb">
        <h1 class="mr-2">Advance Search</h1>
        <ul>
            <li>
                <a href="{{ URL::to('dashboard') }}">
                    Dashboard
                </a>
            </li>
           
        </ul>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
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

    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
    <div class="col-md-1"></div>
    <div class="col-lg-10 col-md-12 mt-4" >
        <div class="card text-center border-primary">
           <form action="{{ url('searchByFeilds') }}" autocomplete="off" method="post">
           @csrf
            <div class="col-lg-12 col-md-12 mt-4">
           
                    <div class="card-header bg-primary">
                        <div><h3 class="text-white"><b>Resume Search By Fields</b></h3></div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <h5 align="left" style="color: #2328c3;"><b>Requirement You Are Hiring For-</b></h5>
                            <input type="text" id="position"  name="position" placeholder="" autocomplete="off" class="form-control">
                    </div>
                    <div id="position_list"></div>                    
            
                     
                      <br>
                      <br>
                       <div class="col-md-12">
                        <h5 align="left"  style="color: #2328c3;"><b>Current Location-</b></h5>
                        <input type="text" name="location" id="location" placeholder="" autocomplete="off" class="form-control">
                    
                    <div id="location_list"></div>       
                       </div> 
                       <br>
                       <br>  
                        
                       <div class="col-md-12">
                         <h5 align="left"  style="color: #2328c3;"><b>Total Experience-</b></h5>
                            <div class="row">
                            <div class="col-md-1" style="padding-top: 5px;">From</div>
                                <div class="col-md-4">
                                <input type="number" name="fromExp" class="form-control" id="fromExp" placeholder="Min Experience"></span>
                                </div>
                                <div class="col-md-1" style="padding-top: 5px;">To</div>
                                <div class="col-md-4">
                                    <input type="number" name="toExp" class="form-control" id="toExp" placeholder="Max Experience">
                                </div>
                                <div class="col-md-2" style="padding-top: 5px;">In Years</div>
                            </div>
                        </div> 
                       <br>
                       <br>  

                       <div class="col-md-12">
                         <h5 align="left"  style="color: #2328c3;"><b>Annual Salary-</b></h5>
                            <div class="row">
                            <div class="col-md-1" style="padding-top: 5px;">From</div>
                                <div class="col-md-4">
                                <input type="text" name="fromCtc" class="form-control" id="fromCtc" placeholder="Min CTC"></span>
                                </div>
                                <div class="col-md-1" style="padding-top: 5px;">To</div>
                                <div class="col-md-4">
                                    <input type="text" name="toCtc" class="form-control" id="toCtc" placeholder="Max CTC">
                                </div>
                                <div class="col-md-2" style="padding-top: 5px;">In Rs</div>
                            </div>
                        </div> 
                       <br>
                       <br>  

                       <div class="col-md-12">
                        <h5 align="left"  style="color: #2328c3;"><b>Job Category-</b></h5>
                          <select name="job_category" id="job_category" class="form-control">
                             <option value="">Select Job Category</option>
                             <option value="1">Part Time</option>
                             <option value="0">Full Time</option>
                          </select>
                       </div> 
                       <br>
                       <br> 

                       <div class="col-md-12">
                        <h5 align="left"  style="color: #2328c3;"><b>Education Required-</b></h5>
                          <select name="education" id="education" class="form-control">
                             <option value="">Select Required Education</option>
                             <option value="Х’th">X'th</option>
                             <option value="ХII’th">XII'th</option>
                             <option value="graduation">Graduation</option>
                             <option value="post graduation">Post Graduation</option>
                          </select>
                       </div> 
                       <br>
                       <br>  
                       

                       <div class="col-md-12 row">
                          
                            <div class="col-md-3">
                                <h5 align="left"  style="color: #2328c3;"><b>Divercity-</b></h5>
                            </div>
                            <div class="col-md-9">
                                <div class="text-left">
                                    <input type="radio" id="gender" name="gender" value="other">
                                    <label for="other" style="font-size:15px">All Candidate</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="gender" name="gender" value="male">
                                    <label for="male" style="font-size:15px">Male Candidate</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" id="gender" name="gender" value="female">
                                    <label for="female" style="font-size:15px">Female Candidate</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                            </div>
                        </div> 
                       <br>
                       <br>  

                       <div class="col-md-12 row">
                            <div class="col-md-3" style="padding-top: 8px;">
                             <h5 align="left"  style="color: #2328c3;"><b>Candidate Age-</b></h5>
                            </div>
                            <div class="col-md-9 row">
                                <div class="col-md-6">
                                    <input type="text" name="minAge" class="form-control" id="minAge" placeholder="Min Age"></span>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <input type="text" name="maxAge" class="form-control" id="maxAge" placeholder="Max Age">
                                    </div>
                            </div>
                       </div> 
                       <br>
                       <br>  
                       
                       <div class="col-md-12 row">
                            <div class="col-md-3" style="padding-top: 8px;">
                             <h5 align="left"  style="color: #2328c3;"><b>Key Skills-</b></h5>
                            </div>
                            <div class="col-md-9 row" style="padding-left: 29px;">
                                <input type="text" name="skills" id="skills" class="form-control" placeholder="Required Key Skills">
                            </div>
                       </div> 
                       <br>
                       <br>  

                       <div class="col-md-12 row">
                            <div class="col-md-3" style="padding-top: 8px;">
                             <h5 align="left"  style="color: #2328c3;"><b>Notice Period Time-</b></h5>
                            </div>
                            <div class="col-md-9 row" style="padding-left: 29px;">
                                <input type="text" name="notice" id="notice" class="form-control" placeholder="Required Notice Period Time">
                            </div>
                       </div> 
                       <br>
                       <br>  

                    </div>
                    
            </div>  
            <div class="card" style="position: sticky;bottom: 0;">
                <div class="col-lg-12 col-md-12 mt-4" >
                       <button class="btn btn-success btn-block" style="margin-bottom: 18px;"><i class="fa fa-search mr-2"></i>Search</button>
                 </div>           
            </div>   
         </div>   
    <div class="col-md-1"></div>
    </div>
    </form>
    <script>
  $(document).ready(function(){
      
    $('#position').tokenfield({
        autocomplete :{
            source: function(request, response)
            {
                jQuery.get('{{ url('getDesignationAuto') }}', {
                    str : request.term
                }, function(data){
                    data = JSON.parse(data);
                    response(data);
                });
            },
            delay: 100
        }
    });

   

  });
</script>
<script>
  $(document).ready(function(){
      
    $('#location').tokenfield({
        autocomplete :{
            source: function(request, response)
            {
                jQuery.get('{{ url('getlocationAuto') }}', {
                    str : request.term
                }, function(data){
                    data = JSON.parse(data);
                    response(data);
                });
            },
            delay: 100
        }
    });

   

  });
</script>
    <script type="text/javascript">
            $(document).ready(function () {
             
                $('#position').on('keyup',function() {
                    var query = $(this).val(); 
                    $.ajax({
                       
                        url:"{{ url('getDesignationAuto') }}",
                  
                        type:"GET",
                       
                        data:{'position':query},
                       
                        success:function (data) {
                          
                            $('#position_list').html(data);
                        }
                    })
                    // end of ajax call
                });

                
                $(document).on('click', '#li1', function(){
                  
                    var value = $(this).text();
                    $('#position').val(value);
                    $('#position_list').html("");
                });

                

            });
        </script>
         <script type="text/javascript">
            $(document).ready(function () {
             
              $('#location').on('keyup',function() {
                    var query = $(this).val(); 
                    $.ajax({
                       
                        url:"{{ url('getlocationAuto') }}",
                  
                        type:"GET",
                       
                        data:{'location':query},
                       
                        success:function (data) {
                          
                            $('#location_list').html(data);
                        }
                    })
                    // end of ajax call
                });

                
                $(document).on('click', '#li2', function(){
                  
                    var value = $(this).text();
                    $('#location').val(value);
                    $('#location_list').html("");
                });

                

            });
        </script>
      
  
@endsection
@section('scripts')
@stop
