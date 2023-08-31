@extends('adminview.master')
@section('title','Admin | Import Users')
@section('head')
@endsection
@section('content')
<style>
th{
    font-size:16px;
    font-weight:800;
}
</style>
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="main-content">

    <div class="breadcrumb">
    <h1 class="mr-2">Staff Report</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        
        <li>
            <a href="{{url('dailyRegistrations')}}">
                Download Regsitered Candidate
            </a>
        </li>
      

    </ul>
</div >
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card o-hidden mb-4">
                    <div class="card-header d-flex align-items-center border-0 bg-primary">
                        <h3 class="w-50 float-left card-title m-0 text-white" style="font-weight: 800;">Serach For Uploaded Candidate Count</h3>
                     
                    </div>
                    <div>
                        <div class="card">
                            <div class="card-body">
                            <div class="row col-md-12">
    
                            <div class="col-md-4">
                                <label for="">From Date</label>
                                <input type="date" class="form-control" name="from_date" id="from_date" required>
                            </div>
                            <div class="col-md-4">
                                <label for="">To Date</label>
                                <input type="date" class="form-control" name="to_date" id="to_date" required>
                            </div>
                            <div class="col-md-3" style="padding-top:28px">
                            <input type="button" class="btn btn-success" value="Search" onclick="searchStaffReport()" style="padding-left: 150px;padding-right: 150px;">
                            </div>

                             </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"  id="user_table">
            <div class="col-md-12">
                <div class="card o-hidden mb-4">
                    <div class="card-header d-flex align-items-center border-0 bg-primary">
                        <h3 class="float-left card-title m-0 text-white" style="font-weight: 800;font-size:20px" >Today's Count Of Uploaded Candidate</h3>
                       
                    </div>
                    <div>
                        <div class="table-responsive" >
                            <table class="table text-center">
                                <thead>
                                <tr>
                                    <th scope="col" width="10%">S. No.</th>
                                    <th scope="col" width="30%">Report Of</th>
                                    <th scope="col" width="20%">Total Uploaded Resumes</th>
                                    <th scope="col" width="20%">Successfully Uploaded</th>
                                    <th scope="col" width="20%">Failed</th>
                                   
                                </tr>
                                </thead>
                                <tbody >
                                <tr>
                                    @php 
                                    $today_admin_total = App\TempBulkParsedResume::whereDate('created_at', '=' , date('Y-m-d'))->where('uploaded_by','=', 1)->count();
                                    $today_admin_success = App\TempBulkParsedResume::whereDate('created_at', '=' , date('Y-m-d'))->where('status',1)->where('uploaded_by','=', 1)->count();
                                    $today_admin_failed = App\TempBulkParsedResume::whereDate('created_at', '=' , date('Y-m-d'))->where('status',2)->where('uploaded_by','=', 1)->count();
                                    @endphp
                                    <td>1</td>
                                    <td style="color: darkblue;font-weight: 700;font-size: 17px;">Admin</td>                       
                                    <td><p class="badge badge-warning" style="font-size: 16px;font-weight: 900;color:white">{{ $today_admin_total }}</p></td>   
                                    <td><p class="badge badge-success" style="font-size: 16px;font-weight: 900;color:white">{{ $today_admin_success }}</p></td>
                                    <td><p class="badge badge-danger" style="font-size: 16px;font-weight: 900;color:white">{{ $today_admin_failed }}</p></td>
                                   </tr>
                                   <tr>
                                        @php 
                                        $today_h1_total = App\TempBulkParsedResume::whereDate('created_at', '=' , date('Y-m-d'))->where('uploaded_by','=', 4)->count();
                                        $today_h1_success = App\TempBulkParsedResume::whereDate('created_at', '=' , date('Y-m-d'))->where('status',1)->where('uploaded_by','=', 4)->count();
                                        $today_h1_failed = App\TempBulkParsedResume::whereDate('created_at', '=' , date('Y-m-d'))->where('status',2)->where('uploaded_by','=', 4)->count();
                                        @endphp   
                                        <td>2</td>
                                        <td style="color: darkblue;font-weight: 700;font-size: 17px;">Happiest One</td>                       
                                        <td><p class="badge badge-warning" style="font-size: 16px;font-weight: 900;color:white">{{ $today_h1_total }}</p></td>
                                        <td><p class="badge badge-success" style="font-size: 16px;font-weight: 900;color:white">{{ $today_h1_success }}</p></td>
                                        <td><p class="badge badge-danger" style="font-size: 16px;font-weight: 900;color:white">{{ $today_h1_failed }}</p></td>
                                    </tr>

                                    <tr>
                                        @php 
                                        $today_h2_total = App\TempBulkParsedResume::whereDate('created_at', '=' , date('Y-m-d'))->where('uploaded_by','=', 5)->count();
                                        $today_h2_success = App\TempBulkParsedResume::whereDate('created_at', '=' , date('Y-m-d'))->where('status',1)->where('uploaded_by','=', 5)->count();
                                        $today_h2_failed = App\TempBulkParsedResume::whereDate('created_at', '=' , date('Y-m-d'))->where('status',2)->where('uploaded_by','=', 5)->count();
                                        @endphp   
                                        <td>3</td>
                                        <td style="color: darkblue;font-weight: 700;font-size: 17px;">Happiest Two</td>                       
                                        <td><p class="badge badge-warning" style="font-size: 16px;font-weight: 900;color:white">{{ $today_h2_total }}</p></td>
                                        <td><p class="badge badge-success" style="font-size: 16px;font-weight: 900;color:white">{{$today_h2_success }}</p></td>
                                        <td><p class="badge badge-danger" style="font-size: 16px;font-weight: 900;color:white">{{ $today_h2_failed }}</p></td>
                                    </tr>
                                    <tr>
                                    @php 
                                    $today_h3_total = App\TempBulkParsedResume::whereDate('created_at', '=' , date('Y-m-d'))->where('uploaded_by','=', 6)->count();
                                    $today_h3_success = App\TempBulkParsedResume::whereDate('created_at', '=' , date('Y-m-d'))->where('status',1)->where('uploaded_by','=', 6)->count();
                                    $today_h3_failed = App\TempBulkParsedResume::whereDate('created_at', '=' , date('Y-m-d'))->where('status',2)->where('uploaded_by','=', 6)->count();
                                    @endphp    
                                        <td>4</td>
                                        <td style="color: darkblue;font-weight: 700;font-size: 17px;">Happiest Three</td>                       
                                        <td><p class="badge badge-warning" style="font-size: 16px;font-weight: 900;color:white">{{ $today_h3_total }}</p></td>
                                        <td><p class="badge badge-success" style="font-size: 16px;font-weight: 900;color:white">{{$today_h3_success }}</p></td>
                                        <td><p class="badge badge-danger" style="font-size: 16px;font-weight: 900;color:white">{{ $today_h3_failed }}</p></td>
                                    </tr>
                                    <!-- <tr>
                                    @php 
                                    $today_total = App\TempBulkParsedResume::whereDate('created_at', '=' , date('Y-m-d'))->count();
                                    $today_success = App\TempBulkParsedResume::whereDate('created_at', '=' , date('Y-m-d'))->count();
                                    $today_failed = App\TempBulkParsedResume::whereDate('created_at', '=' , date('Y-m-d'))->count();
                                    @endphp
                                      <td></td>
                                      <td>Total</td>
                                      <td><p class="badge badge-warning" style="font-size: 16px;font-weight: 900;color:white">{{ $today_total }}</p></td>
                                        <td><p class="badge badge-success" style="font-size: 16px;font-weight: 900;color:white">{{$today_success }}</p></td>
                                        <td><p class="badge badge-danger" style="font-size: 16px;font-weight: 900;color:white">{{ $today_failed }}</p></td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
   

@endsection

@section('scripts')
   

@stop
<script>
function searchStaffReport(){
    
    var from_date = $('#from_date').val();
   
    var to_date = $('#to_date').val();

    $.get({
        url : '{{url('staffSearch')}}',
    
        data : {
            from_date : from_date,
            to_date : to_date
        },
        success:function(response){
          
            $('#user_table').html(response);
           
        }
    });
}
</script>