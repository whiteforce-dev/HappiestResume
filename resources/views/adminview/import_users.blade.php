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
            <h1>Import Users</h1>
            <ul>
                <li><a href="{{URL::to('dashboard')}}">Home</a></li>
                <li><a href="{{URL::to('import_users')}}">Import Users</a></li>
            
                <li><a href="{{URL::to('public/Sample_Candiate_Excel.xlsx')}}">Download Template</a></li>
                <li><a href="{{ url('dailyRegistrations') }}">Download Daily Report</a></li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card o-hidden mb-4">
                    <div class="card-header d-flex align-items-center border-0">
                        <h3 class="w-50 float-left card-title m-0">Import Users</h3>
                        
                    </div>
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <form class="needs-validation" novalidate="novalidate"
                                      action="{{url('store_import_users')}}"
                                      method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom011">Select Import Users</label>
                                            <input class="form-control" required="required" id="validationCustom011"
                                                   type="file"
                                                   name="file"
                                                   placeholder="Select File.."/>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="separator-breadcrumb border-top"></div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card o-hidden mb-4">
                    <div class="card-header d-flex align-items-center border-0">
                        <h3 class="w-50 float-left card-title m-0">Imported Users List</h3>
                      
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table text-center" id="user_table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <td scope="col">Total Users</td>
                                    <td scope="col">Successfully Uploaded</td>
                                    <td scope="col">Failed</td>
                                    <td scope="col">Status</td>
                                    <td scope="col">Uploaded By</td>
                                    <td scope="col">Created At</td>
                                    <th scope="col">Action</th>
                                    <th scope="col">Resume Link</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($product_bulk_uploads))
                                    @foreach($product_bulk_uploads as $key=>$bulk_upload)
                                    @php($auth_name = \App\User::where('id',$bulk_upload->uploaded_by)->value('name') )
                                        <tr>
                                            <th scope="row">{{++$key}}</th>
                                            <td>{{$bulk_upload->total_users}}</td>
                                            <td>
                                                <a
                                                        href="{{--{{URL::to('imported_users').'/success/'.base64_encode($bulk_upload->id)}}--}}#">{{$bulk_upload->success_users}}</a>
                                            </td>
                                            <td><a href="#" onclick="failedExcel({{ $bulk_upload->id }})">{{$bulk_upload->failed_users}}</a>
                                            </td>
                                            <td>
                                                @if($bulk_upload->status == 'Processing')
                                                    <span class="badge badge-warning">InProgress</span>
                                                @elseif($bulk_upload->status == 'Uploaded')
                                                    <span class="badge badge-success">Uploaded</span>
                                                @else
                                                    <span class="badge badge-danger">Failed</span>
                                                @endif
                                            </td>
                                            <td>{{ $auth_name }}</td>
                                            <td>{{date('d-M-Y h:i A',strtotime($bulk_upload->created_at))}}</td>
                                            <td><a class="text-success mr-2"
                                                   href="{{URL::to("$bulk_upload->file_path")}}" target="_blank"><i
                                                            class="nav-icon i-Eye font-weight-bold"></i> View File</a>
                                            </td>
                                            <td><a class="text-danger mr-2"  href="#" onclick="linkExcel({{ $bulk_upload->id }})"><i class="nav-icon i-Download font-weight-bold"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6"> < No Users Imported ></td>
                                    </tr>
                                @endif
                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <form action="{{ url('failedUploadsExport') }}" method="post">
    @csrf
        <input type="hidden" name="bulk_id" id="bulk_id">
       <input type="submit" name="failedExcelbtn" id="failedExcelbtn" style="display:none">
    </form>
    <form action="{{ url('candidateLinkExport') }}" method="post">
    @csrf
        <input type="hidden" name="bulkId" id="bulkId">
       <input type="submit" name="linkExcelbtn" id="linkExcelbtn" style="display:none">
    </form>  
<script>
   function failedExcel(bulk_id){
       $('#bulk_id').val(bulk_id);
       $('#failedExcelbtn').click();
   }
   function linkExcel(bulk_id){
    $('#bulkId').val(bulk_id);
    $('#linkExcelbtn').click();
   }
</script>
@endsection

@section('scripts')

@stop
