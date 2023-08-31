@extends('adminview.master')
@section('title','Admin | Job Types')
@section('head')
    {{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
    {{--<!-- Chartist -->--}}
    {{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
    {{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
    {{--<div class="panel mybg card">--}}
    <div class="col-lg-12 col-md-12 mt-4">
        <div class="card  border-primary">
            <!-- -->
            <div class="card-header bg-primary  text-white">
                <div>Add Job Types</div>
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
                    <form class="needs-validation" novalidate="novalidate" method="post" id="myid" action="{{ url('jobtypes') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Job Type</label>
                                <input class="form-control" id="validationCustom01" type="text" placeholder="Enter Job Type" name="type"  required="required" value="{{old('type')}}">
                                <div class="valid-feedback">
                                    Looks good!

                                </div>
                            </div>
                            {{--<div class="col-md-4 mb-3">--}}
                                {{--<label for="validationCustom02">Last name</label>--}}
                                {{--<input class="form-control" id="validationCustom02" type="text" placeholder="Last name" value="Otto" required="required">--}}
                                {{--<div class="valid-feedback">--}}
                                    {{--Looks good!--}}

                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4 mb-3">--}}
                                {{--<label for="validationCustomUsername">Username</label>--}}
                                {{--<div class="input-group">--}}
                                    {{--<div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend">@</span></div>--}}
                                    {{--<input class="form-control" id="validationCustomUsername" type="text" placeholder="Username" aria-describedby="inputGroupPrepend" required="required">--}}
                                    {{--<div class="invalid-feedback">--}}
                                        {{--Please choose a username.--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        {{--<div class="form-row">--}}
                            {{--<div class="col-md-6 mb-3">--}}
                                {{--<label for="validationCustom03">City</label>--}}
                                {{--<input class="form-control" id="validationCustom03" type="text" placeholder="City" required="required">--}}
                                {{--<div class="invalid-feedback">--}}
                                    {{--Please provide a valid city.--}}

                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-3 mb-3">--}}
                                {{--<label for="validationCustom04">State</label>--}}
                                {{--<input class="form-control" id="validationCustom04" type="text" placeholder="State" required="required">--}}
                                {{--<div class="invalid-feedback">--}}
                                    {{--Please provide a valid state.--}}

                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-3 mb-3">--}}
                                {{--<label for="validationCustom05">Zip</label>--}}
                                {{--<input class="form-control" id="validationCustom05" type="text" placeholder="Zip" required="required">--}}
                                {{--<div class="invalid-feedback">--}}
                                    {{--Please provide a valid zip.--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<div class="form-check">--}}
                                {{--<input class="form-check-input" id="invalidCheck" type="checkbox" required="required">--}}
                                {{--<label class="form-check-label" for="invalidCheck">--}}
                                    {{--Agree to terms and conditions--}}

                                {{--</label>--}}
                                {{--<div class="invalid-feedback">--}}
                                    {{--You must agree before submitting.--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <button class="btn btn-success" type="submit">Submit</button>
                    </form>
                    {{--<form action="{{ url('jobtypes') }}" method="post" id="myid" autocomplete="off"--}}
                          {{--class="fv-form fv-form-bootstrap4 needs-validation"--}}
                          {{--enctype="multipart/form-data">--}}
                        {{--@csrf--}}
                        {{--<div class="row row-lg">--}}
                            {{--<div class="col-xl-6 form-horizontal">--}}
                                {{--<div class="form-group form-material">--}}
                                    {{--<label class="col-xl-12 col-md-3 form-control-label">Job Type</label>--}}
                                    {{--<div class="col-xl-12 col-md-9">--}}
                                        {{--<input type="text" class="form-control required" name="type" id="type"--}}
                                        {{--placeholder="Enter Job Type" value="{{old('type')}}"--}}
                                        {{--data-fv-field="github">--}}
                                        {{--<input class="form-control" id="validationCustom01" type="text"--}}
                                               {{--placeholder="Enter Job Type" name="type" required="required"--}}
                                               {{--value="{{old('type')}}">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 form-horizontal">--}}
                                {{--<div class="form-group form-material">--}}
                                    {{--<label class="col-xl-12 col-md-3 form-control-label"></label>--}}
                                    {{--<button type="submit" class="btn btn-primary waves-effect waves-classic"--}}
                                            {{--id="validateButton1">--}}
                                        {{--Submit--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-xl-6 form-horizontal">--}}
                            {{--<div class="form-group form-material">--}}
                            {{--<label class="col-xl-12 col-md-3 form-control-label">Comments</label>--}}
                            {{--<div class="col-xl-12 col-md-9">--}}
                            {{--<textarea name="comment" id="comment" placeholder="Associate Comments Here..." rows="5"--}}
                            {{--class="form-control required"></textarea>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="form-group form-material col-xl-12 padding-top-m">--}}
                            {{--<button type="submit" class="btn btn-primary waves-effect waves-classic"--}}
                            {{--id="validateButton1">--}}
                            {{--Submit--}}
                            {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                </div>
            </div>
            <!-- -->
            <!-- -->
        </div>
    </div>

    <div class="col-lg-12 col-md-12 mt-4">
        <div class="card text-center border-primary">
            <!-- -->
            <div class="card-header bg-primary text-white">
                <div>Manage Your All Job Types</div>
            </div>
            <div class="card-body">
                <!-- -->
                <!-- -->
                <div class="ul-widget5">
                    <table class="table table-striped ">
                        <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($jobtypes) > 0)
                            @foreach ($jobtypes as $in => $item)
                                <tr>
                                    <td>{{ ++$in }}</td>
                                    <td>{{ isset($item->type)? $item->type : '-'}}</td>
                                    <td>
                                        <button onclick='is_edit("{{ URL::to('jobtypes').'/'.$item->id.'/edit' }}", "Job Type");'  class="btn btn-primary btn-sm btn-rounded m-1" type="button"><i class="nav-icon i-Pen-2 font-weight-bold"></i> Edit</button>
                                        <button onclick='is_delete("{{ URL::to('jobtypes').'/'.$item->id.'' }}", "Job Type");'  class="btn btn-danger btn-sm btn-rounded m-1" type="button">
                                            <i class="nav-icon i-Close-Window font-weight-bold"></i> Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- -->
            <!-- -->
        </div>
    </div>
@endsection
@section('scripts')
@stop