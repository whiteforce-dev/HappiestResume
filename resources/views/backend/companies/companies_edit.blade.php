@extends('backend.master.master')
@section('title','Edit Company')
@section('content')
<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
<script src="{{ url('assets').'/' }}js/validate.js"></script>
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Edit Company</h4>
                    <span>You can update an company details below: </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="{{ url('dashboard') }}"> <i class="feather icon-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('companies') }}">
                            Companies
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('companies/create') }}">
                            Add New Company
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="panel mybg">
    <div class="panel-heading">
        <h3 class="panel-title">Update Company Details
            {{-- <span class="panel-desc">Manage Your All Category </span> --}}
        </h3>
    </div>
    <div class="panel-body">
        <form action="{{ url('companies').'/'.$company->id }}" method="post" id="myid" autocomplete="off"
            class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row row-lg">
                <div class="col-xl-6 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Company Name</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" class="form-control required" name="name" id="name"
                                value="{{ isset($company->name)?$company->name:'' }}" placeholder="Enter Company Name"
                                data-fv-field="github">
                        </div>
                    </div>

                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Email ID</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="email" name="email" id="email" placeholder="Company Email Address"
                                value="{{ isset($company->email)?$company->email:'' }}" class="form-control required">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Contact</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" name="contact" id="contact" placeholder="Company Contact"
                                value="{{ isset($company->contact)?$company->contact:'' }}"
                                class="form-control required">
                        </div>
                    </div>
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Status</label>
                        <div class="col-xl-12 col-md-9">
                            <select type="text" name="is_active" id="is_active" class="form-control required">
                                <option value="1" {{ $company->is_active == '1'?'selected':'' }}>Active</option>
                                <option value="0" {{ $company->is_active == '0'?'selected':'' }}>In-Active</option>
                            </select>
                        </div>
                    </div>
                    {{-- <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Comments</label>
                        <div class="col-xl-12 col-md-9">
                            <textarea name="comment" id="comment" placeholder="Associate Comments Here..." rows="5"
                                class="form-control required"></textarea>
                        </div>
                    </div> --}}

                </div>

                <div class="form-group form-material col-xl-12 text-right padding-top-m">
                    <button type="submit" class="btn btn-primary waves-effect waves-classic" id="validateButton1">
                        Update Company Details
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


@stop