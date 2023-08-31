@extends('backend.master.master')
@section('title','Manage Job Types')
@section('content')

    <div class="panel mybg">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="panel-desc">Add Job Types </span>
            </h3>
        </div>
        <div class="panel-body">
            @if (count($errors) > 0)
                <div class = "alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- <form action="{{ url('Job Types/Job Types-store') }}" method="post" id="myid" autocomplete="off" --}}
            <form action="{{ url('jobtypes') }}" method="post" id="myid" autocomplete="off"
                  class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">
                @csrf
                <div class="row row-lg">
                    <div class="col-xl-6 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Job Type</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text" class="form-control required" name="type" id="type"
                                       placeholder="Enter Job Type" value="{{old('type')}}" data-fv-field="github">
                            </div>
                        </div>

                        {{--<div class="form-group form-material">--}}
                            {{--<label class="col-xl-12 col-md-3 form-control-label">Designation</label>--}}
                            {{--<div class="col-xl-12 col-md-9">--}}
                                {{--<input type="text" name="designation" id="designation"--}}
                                       {{--placeholder="Designation of our associate" class="form-control required">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group form-material">--}}
                            {{--<label class="col-xl-12 col-md-3 form-control-label">Status</label>--}}
                            {{--<div class="col-xl-12 col-md-9">--}}
                                {{--<select type="text" name="is_active" id="is_active" class="form-control required">--}}
                                    {{--<option value="1">Active</option>--}}
                                    {{--<option value="0">In-Active</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group form-material">--}}
                            {{--<label class="col-xl-12 col-md-3 form-control-label">Profile Picture</label>--}}
                            {{--<div class="col-xl-12 col-md-9">--}}
                                {{--<input type="file" name="image" id="image" class="form-control required">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </div>
                    {{--<div class="col-xl-6 form-horizontal">--}}
                        {{--<div class="form-group form-material">--}}
                            {{--<label class="col-xl-12 col-md-3 form-control-label">Comments</label>--}}
                            {{--<div class="col-xl-12 col-md-9">--}}
                            {{--<textarea name="comment" id="comment" placeholder="Associate Comments Here..." rows="5"--}}
                                      {{--class="form-control required"></textarea>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                    <div class="form-group form-material col-xl-12 text-right padding-top-m">
                        <button type="submit" class="btn btn-primary waves-effect waves-classic" id="validateButton1">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel mybg">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="panel-desc">Manage Your All Job Types </span>
            </h3>
        </div>
        <div class="panel-body">
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
                                {{-- <a href="{{ url('edit-jobtypes').'/'.base64_encode($item->id) }}"> --}}
                                {{-- <a href="{{ url('jobtypes').'/'.$item->id.'/edit' }}" onclick="get_confirmation();">
                                --}}
                                <a onclick='is_edit("{{ url('jobtypes').'/'.$item->id.'/edit' }}", "Job Type");'>
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                </a>
                                {{-- <a href="{{ url('delete-jobtypes').'/'.base64_encode($item->id) }}"> --}}
                                {{-- <a href="{{ url('jobtypes').'/'.$item->id }}">
                                <button onclick="return confirm('Are you sure?');" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                                </a> --}}

                                <a class="btn btn-danger btn-sm"
                                   onclick='is_delete("{{ url('jobtypes').'/'.$item->id.'' }}", "Job Type");'>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop