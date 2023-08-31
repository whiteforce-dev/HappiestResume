@extends('adminview.master')
@section('title','Admin | Resume Parser')
@section('head')
@endsection
@section('content')
<style>
    .badge {
    font-weight: 700px;
    padding: 0.5em 1.4em;
}
</style>
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="main-content">

        <div class="breadcrumb">
            <h1>Resume Parser</h1>
            <ul>
                <li><a href="{{URL::to('dashboard')}}">Home</a></li>
                <li><a href="{{URL::to('uploaded_resume_list')}}" target="_blank">Uploaded Resume List</a></li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-3">
                <div class="card o-hidden mb-4" style="background: radial-gradient(#76b2fe, #b69efe);">
                    <div class="card-header d-flex align-items-center border-0">
                        <h3 class="float-left card-title m-0"><b>Total Uploaded Resume</b></h3>
                    </div>
                    <div>
                        <div class="card" style="background: radial-gradient(#76b2fe, #e0d6fd);">
                            <div class="card-body">
                                <h6 style="font-weight: 800">Bulk Uploaded : {{ $total_bulk }}</h6><br>
                                <h6 style="font-weight: 800">Single Uploaded : {{ $total_single }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card o-hidden mb-4" style="background: radial-gradient(#60efbc, #58d5c9);">
                    <div class="card-header d-flex align-items-center border-0">
                        <h3 class="float-left card-title m-0"><b>Successfully Resumes</b></h3>
                    </div>
                    <div>
                        <div class="card" style="background: radial-gradient(#60efbc, #9eebe4);">
                            <div class="card-body">
                                <h6 style="font-weight: 800">Bulk Uploaded : {{ $success_bulk }}</h6><br>
                                <h6 style="font-weight: 800">Single Uploaded : {{ $success_single }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card o-hidden mb-4" style="background: radial-gradient(#fbc1cc, #fa99b2);">
                    <div class="card-header d-flex align-items-center border-0">
                        <h3 class="float-left card-title m-0"><b>Failed Resumes</b></h3>
                    </div>
                    <div>
                        <div class="card" style="background: radial-gradient(#f08da0, #f7dee4);">
                            <div class="card-body">
                                <h6 style="font-weight: 800">Bulk Uploaded : {{ $failed_bulk }}</h6><br>
                                <h6 style="font-weight: 800">Single Uploaded : {{ $failed_single }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card o-hidden mb-4" style="background: radial-gradient(#1fe4f5, #3fbafe);">
                    <div class="card-header d-flex align-items-center border-0">
                        <h3 class="float-left card-title m-0"><b>Pending Resumes</b></h3>
                    </div>
                    <div>
                        <div class="card" style="background: radial-gradient(#1fe4f5, #b4dbf1);">
                            <div class="card-body">
                                <h6 style="font-weight: 800">Bulk Uploaded : {{ $pending_bulk }}</h6><br>
                                <h6 style="font-weight: 800">Single Uploaded : {{ $pending_single }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <div class="card o-hidden mb-4">
                    <div class="card-header d-flex align-items-center border-0">
                        <h3 class="float-left card-title m-0">Upload Single Resume</h3>
                        
                    </div>
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <form class="needs-validation" novalidate="novalidate" action="{{url('store_single_resume')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom011">Select Single Resume</label>
                                            <input class="form-control" required="required" id="validationCustom011" type="file" name="single_resume_file" placeholder="Select File.."/>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="separator-breadcrumb border-top"></div>
                                    <button type="submit" class="btn btn-primary col-md-12">Store Single Resume</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card o-hidden mb-4">
                    <div class="card-header d-flex align-items-center border-0">
                        <h3 class="float-left card-title m-0">Upload Bulk Resume</h3>
                        
                    </div>
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <form class="needs-validation" novalidate="novalidate" action="{{url('store_bulk_resume')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom011">Select Bulk Resume</label>
                                            <input class="form-control" required="required" multiple id="validationCustom011" type="file" name="resume_file[]" placeholder="Select File.."/>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="separator-breadcrumb border-top"></div>
                                    <button type="submit" class="btn btn-success col-md-12"><b>Store Bulk Resume</b></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@stop
