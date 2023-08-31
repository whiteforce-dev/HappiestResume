@extends('backend.master.master')
@section('title','Edit Counts')
@section('content')
<script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
<script src="{{ url('assets').'/' }}js/validate.js"></script>
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Edit Count</h4>
                    <span>You can update count below: </span>
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
                        <a href="{{ url('admin/counts') }}">
                            Counts
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#!">
                            Edit Count
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="panel mybg">
    <div class="panel-heading">
        <h3 class="panel-title">Update Count
            {{-- <span class="panel-desc">Manage Your All Category </span> --}}
        </h3>
    </div>
    <div class="panel-body">

        <form action="{{ url('admin/counts').'/'.$count->id }}" method="post" id="myid" autocomplete="off"
            class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container" align="center">

                <div class="form-group row form-material">
                    {{-- <label class="col-xl-12 col-md-3 form-control-label">Category Name</label> --}}
                    <div class="col-xl-12 col-md-9">
                        <img style="height:100px ;width:auto;" src="{{ url('').'/'.$count->icon }}" alt="">
                        <input type="hidden" name="oldImage" id="oldImage" value="{{$count->icon}}">
                    </div>
                </div>
            </div>
            <div class="row row-lg">
                <div class="col-xl-6 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Title</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" class="form-control required" name="title" id="title"
                                value="{{ isset($count->title)?$count->title:'' }}" placeholder="Enter Title"
                                data-fv-field="github">
                        </div>
                    </div>

                    {{-- <div class="form-group form-material">
                                <label class="col-xl-12 col-md-3 form-control-label">Designation</label>
                                <div class="col-xl-12 col-md-9">
                                    <input type="text" name="designation" id="designation"
                                        placeholder="Designation of our associate" class="form-control required">
                                </div>
                            </div> --}}
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Icon</label>
                        <div class="col-xl-12 col-md-9">
                            @if(file_exists($count->icon))
                            <input type="file" name="image" id="image" class="form-control">
                            @else
                            <input type="file" name="image" id="image" class="form-control required">
                            @endif
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Count</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" class="form-control required" name="count" id="count"
                                value="{{ isset($count->count)?$count->count:'' }}" placeholder="Provide Count"
                                data-fv-field="github">
                        </div>
                    </div>
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Status</label>
                        <div class="col-xl-12 col-md-9">
                            <select type="text" name="is_active" id="is_active" class="form-control required">
                                <option value="1" {{ $count->is_active == '1'?'selected':'' }}>Active</option>
                                <option value="0" {{ $count->is_active == '0'?'selected':'' }}>In-Active</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group form-material col-xl-12 text-right padding-top-m">
                    <button type="submit" class="btn btn-primary waves-effect waves-classic" id="validateButton1">Update
                        Count
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>


@stop