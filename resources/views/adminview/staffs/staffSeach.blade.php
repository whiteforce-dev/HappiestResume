<div class="col-md-12">
                <div class="card o-hidden ">
                    <div class="card-header d-flex align-items-center border-0 bg-primary" align = "center">
                        <h3 class="float-left card-title m-0 text-white" style="font-weight: 800;font-size:20px">Count Of Uploaded Candidate From <b style="color:yellow">{{date('d-m-Y',strtotime($from_date))}}</b> To <b style="color:yellow">{{date('d-m-Y',strtotime($to_date))}}</b></h3>
                       
                    </div>
                    <div>
                        <div class="table-responsive" >
                            <table class="table text-center">
                                <thead>
                                <tr>
                                    <th scope="col" width="10%">S. No.</th>
                                    <th scope="col" width="30%">Report Of</th>
                                    <th scope="col" width="20%">Total Uploaded Candidate</th>
                                    <th scope="col" width="20%">Successfully Uploaded</th>
                                    <th scope="col" width="20%">Failed</th>
                                   
                                </tr>
                                </thead>
                                <tbody >
                                <tr>
@php 

$today_admin_total = App\TempBulkParsedResume::whereBetween('created_at', array($from_date,$to_date))->where('uploaded_by','=', 1)->count();


$today_admin_success = App\TempBulkParsedResume::whereBetween('created_at', array($from_date,$to_date))->where('status',1)->where('uploaded_by','=', 1)->count();

$today_admin_failed = App\TempBulkParsedResume::whereBetween('created_at', array($from_date,$to_date))->where('status',2)->where('uploaded_by','=', 1)->count();

@endphp
<td>1</td>
<td style="color: darkblue;font-weight: 700;font-size: 17px;">Admin</td>                       
<td><p class="badge badge-warning" style="font-size: 16px;font-weight: 900;color:white">{{ $today_admin_total }}</p></td>   
<td><p class="badge badge-success" style="font-size: 16px;font-weight: 900;color:white">{{ $today_admin_success }}</p></td>
<td><p class="badge badge-danger" style="font-size: 16px;font-weight: 900;color:white">{{ $today_admin_failed }}</p></td>
</tr>
<tr>
@php 
$today_h1_total = App\TempBulkParsedResume::whereBetween('created_at', array($from_date,$to_date))->where('uploaded_by','=', 4)->count();
$today_h1_success = App\TempBulkParsedResume::whereBetween('created_at', array($from_date,$to_date))->where('status',1)->where('uploaded_by','=', 4)->count();
$today_h1_failed = App\TempBulkParsedResume::whereBetween('created_at', array($from_date,$to_date))->where('status',2)->where('uploaded_by','=', 4)->count();
@endphp    
    <td>2</td>
    <td style="color: darkblue;font-weight: 700;font-size: 17px;">Happiest One</td>                       
    <td><p class="badge badge-warning" style="font-size: 16px;font-weight: 900;color:white">{{ $today_h1_total }}</p></td>
    <td><p class="badge badge-success" style="font-size: 16px;font-weight: 900;color:white">{{ $today_h1_success }}</p></td>
    <td><p class="badge badge-danger" style="font-size: 16px;font-weight: 900;color:white">{{ $today_h1_failed }}</p></td>
</tr>

<tr>
@php 
$today_h2_total = App\TempBulkParsedResume::whereBetween('created_at', array($from_date,$to_date))->where('uploaded_by','=', 5)->count();
$today_h2_success = App\TempBulkParsedResume::whereBetween('created_at', array($from_date,$to_date))->where('status',1)->where('uploaded_by','=', 5)->count();
$today_h2_failed = App\TempBulkParsedResume::whereBetween('created_at', array($from_date,$to_date))->where('status',2)->where('uploaded_by','=', 5)->count();
@endphp 
    <td>3</td>
    <td style="color: darkblue;font-weight: 700;font-size: 17px;">Happiest Two</td>                       
    <td><p class="badge badge-warning" style="font-size: 16px;font-weight: 900;color:white">{{ $today_h2_total }}</p></td>
    <td><p class="badge badge-success" style="font-size: 16px;font-weight: 900;color:white">{{$today_h2_success }}</p></td>
    <td><p class="badge badge-danger" style="font-size: 16px;font-weight: 900;color:white">{{ $today_h2_failed }}</p></td>
</tr>
<tr>
@php 
$today_h3_total = App\TempBulkParsedResume::whereBetween('created_at', array($from_date,$to_date))->where('uploaded_by','=', 6)->count();
$today_h3_success = App\TempBulkParsedResume::whereBetween('created_at', array($from_date,$to_date))->where('status',1)->where('uploaded_by','=', 6)->count();
$today_h3_failed = App\TempBulkParsedResume::whereBetween('created_at', array($from_date,$to_date))->where('status',2)->where('uploaded_by','=', 6)->count();
@endphp     
    <td>4</td>
    <td style="color: darkblue;font-weight: 700;font-size: 17px;">Happiest Three</td>                       
    <td><p class="badge badge-warning" style="font-size: 16px;font-weight: 900;color:white">{{ $today_h3_total }}</p></td>
    <td><p class="badge badge-success" style="font-size: 16px;font-weight: 900;color:white">{{$today_h3_success }}</p></td>
    <td><p class="badge badge-danger" style="font-size: 16px;font-weight: 900;color:white">{{ $today_h3_failed }}</p></td>
</tr>
<!-- <tr>
@php 
$today_total = App\TempBulkParsedResume::whereDate('created_at', '=' , array($from_date,$to_date))->count();
$today_success = App\TempBulkParsedResume::whereDate('created_at', '=' , array($from_date,$to_date))->count();
$today_failed = App\TempBulkParsedResume::whereDate('created_at', '=' , array($from_date,$to_date))->count();
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