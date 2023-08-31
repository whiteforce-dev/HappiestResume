@extends('adminview.master')
@section('title','Admin | Add New Item in How It Works Section')
@section('head')

@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">Degree Master</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('degree_master')}}">
                Degrees
            </a>
        </li>
        <li>
            <a href="{{url('degree_master/create')}}">
                Add New Degree
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card  border-primary">
        <!-- -->
        <div class="card-header bg-primary  text-white">
            <div>Add Item (Degree)</div>
        </div>
        <div class="card-body">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="ul-widget5">
                <form class="needs-validation" novalidate="novalidate" method="post" id="myid"
                    action="{{ url('degree_master/store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="name">Degree Name</label>
                            <input class="form-control" id="degree_name" type="text" placeholder="Enter Degree Name" name="degree_name"
                                required="required" value="{{isset($degree->degree_name) ? $degree->degree_name : old('degree_name')}}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-row">
                        <div class="col-md-4 mb-3 offset-4">
                            @if(isset($degree->id))
                            <input type="hidden" name="degree_id" id="degree_id" value="{{ $degree->id }}">
                            @endif
                            <button class="btn btn-success float-right btn-block" type="submit">
                                Save Item
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!-- -->
        <!-- -->
    </div>
</div>
@endsection
@section('scripts')
@stop