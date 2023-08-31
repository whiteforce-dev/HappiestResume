@extends('adminview.master')
@section('title','Admin | Import Users')
@section('head')
@endsection
@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="main-content">

        <div class="breadcrumb">
            <h1>Download Registered Candidate</h1>
            <ul>
                <li><a href="{{URL::to('dashboard')}}">Home</a></li>
               <li><a href="{{ url('staffUploadReport') }}">Staff Report</a></li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card o-hidden mb-4">
                    <div class="card-header d-flex align-items-center border-0">
                        <h3 class="w-50 float-left card-title m-0">Download Registered Candidate</h3>
                        
                    </div>
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <form class="needs-validation" novalidate="novalidate"
                                      action="{{url('downloadRegistrationExcel')}}"
                                      method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="">From Date</label>
                                            <input type="date" name="from_date" id="from_date" onchange="changeFromDate()" class="form-control" required>
                                          
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">To Date</label>
                                            <input type="date" name="to_date" id="to_date" onchange="changeToDate()" class="form-control" required>
                                          
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">Register From</label>
                                            <select name="register_from" id="register_from" class="form-control" onchange="office_person(this.value)">
                                            <option value="all">All</option>
                                            <option value="office">Office</option>
                                            <option value="saisun_hire">Saisun Hire</option>
                                            <option value="payroll">Payroll</option>
                                            <option value="Publisher">Publisher</option>
                                            <option value="Chatbot">Chatbot</option>
                                            <option value="website">Website</option>

                                            </select>
                                          
                                        </div>
                                        
                                    </div>
                                    <div class="form-row" style="display:none" id="uploadedPersone">
                                        <div class="col-md-4 mb-3">
                                            <label for="">Uploaded Person</label>
                                            <select name="person" id="person" class="form-control">
                                            <option value="all">All</option>
                                            <option value="4">Happiest One</option>
                                            <option value="5">Happiest Two</option>
                                            <option value="6">Happiest Three</option>
                                            </select>
                                        </div>   
                                    </div>     
                                    <br>
                                    <div class="separator-breadcrumb border-top"></div>
                                    <button type="submit" class="btn btn-primary">Download</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
            </div>
        </div>

    </div>
<script>
  function office_person(type){
   if(type == "office"){
    document.getElementById("uploadedPersone").style.display = "block";
   }
   else{
    document.getElementById("uploadedPersone").style.display = "none";
   }
  }

  Date.prototype.addDays = function (days) {
    const date = new Date(this.valueOf());
    date.setDate(date.getDate() + days);
    return date;
};

Date.prototype.removeDays = function (days) {
    const date = new Date(this.valueOf());
    date.setDate(date.getDate() - days);
    return date;
};


  var days = 15
  function changeFromDate(){
    var fromDate = $('#from_date').val();
    const from = new Date(fromDate);
    var to = formatDate(from.addDays(days));
    $('#to_date').val(to);
  }

  function changeToDate(){
    var toDate = $('#to_date').val();
    const to = new Date(toDate);
    var from = formatDate(to.removeDays(days));
    $('#from_date').val(from);
  }

  function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    return [year, month, day].join('-');
}

</script>
@endsection

@section('scripts')

@stop
