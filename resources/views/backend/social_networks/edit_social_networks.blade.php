@extends('backend.master.master')
@section('title','Edit Social Network')
@section('content')
<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
<script src="{{ url('assets').'/' }}js/validate.js"></script>
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Edit Social Network</h4>
                    <span>You can update an associate's testimonial below: </span>
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
                        <a href="{{ url('admin/social_networks') }}">
                            Social Networks
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#!">
                            Edit Social Network
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="panel mybg">
    <div class="panel-heading">
        <h3 class="panel-title">Update Social Network
            {{-- <span class="panel-desc">Manage Your All Category </span> --}}
        </h3>
    </div>
    <div class="panel-body">

        <form action="{{ url('admin/social_networks').'/'.$socialNetwork->id }}" method="post" id="myid"
            autocomplete="off" class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container" align="center">
                <div class="form-group row form-material">
                    {{-- <label class="col-xl-12 col-md-3 form-control-label">Category Name</label> --}}
                    <div class="col-xl-12 col-md-9">
                        <img style="height:150px ;width:auto;" src="{{ url('').'/'.$socialNetwork->image }}" alt="">
                        <input type="hidden" name="oldImage" id="oldImage" value="{{ $socialNetwork->image }}">
                    </div>
                </div>
            </div>
            <div class="row row-lg">

                <div class="col-xl-4 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Network Name</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" class="form-control required" name="name" id="name"
                                value="{{ isset($socialNetwork->name)?$socialNetwork->name:'' }}"
                                placeholder="Enter Social Network Name" data-fv-field="github">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Network Link / URL </label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" name="link" id="link" placeholder="Designation of our associate"
                                value="{{ isset($socialNetwork->link)?$socialNetwork->link:'' }}"
                                class="form-control required">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Status</label>
                        <div class="col-xl-12 col-md-9">
                            <select type="text" name="is_active" id="is_active" class="form-control required">
                                <option value="1" {{ $socialNetwork->is_active == '1'?'selected':'' }}>Active</option>
                                <option value="0" {{ $socialNetwork->is_active == '0'?'selected':'' }}>In-Active
                                </option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-group form-material col-xl-12 text-right padding-top-m">
                <button type="submit" class="btn btn-primary waves-effect waves-classic" id="validateButton1">Update
                    Social Network
                </button>
            </div>
    </div>
    </form>

</div>
</div>


@stop