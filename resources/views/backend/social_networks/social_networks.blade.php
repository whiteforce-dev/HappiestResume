@extends('backend.master.master')
@section('title','Social Networks')
@section('content')

<div class="panel mybg">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="panel-desc">Add Social Network </span>
        </h3>
    </div>
    <div class="panel-body">

        {{-- <form action="{{ url('testimonials/testimonials-store') }}" method="post" id="myid" autocomplete="off" --}}
        <form action="{{ url('admin/social_networks') }}" method="post" id="myid" autocomplete="off"
            class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">
            @csrf
            <div class="row row-lg">
                <div class="col-xl-4 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Network Name</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" class="form-control required" name="name" id="name"
                                placeholder="Enter Social Network Name" data-fv-field="github">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Network Link / URL </label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" name="link" id="link" placeholder="Designation of our associate"
                                class="form-control required">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Status</label>
                        <div class="col-xl-12 col-md-9">
                            <select type="text" name="is_active" id="is_active" class="form-control required">
                                <option value="1">Active</option>
                                <option value="0">In-Active</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group form-material col-xl-12 text-right padding-top-m">
                    <button type="submit" class="btn btn-primary waves-effect waves-classic" id="validateButton1">Save
                        Social Network
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="panel mybg">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="panel-desc">Manage Your All Social Networks </span>
        </h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped ">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Social Network Name</th>
                    <th>Link / URL </th>
                    <th>Action</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if(count($social_networks) > 0)
                @foreach ($social_networks as $in => $item)
                <tr>
                    <td>{{ ++$in }}</td>

                    <td>{{ isset($item->name)? $item->name : '-'}}</td>
                    <td>
                        <a href="{{ $item->link }}" target="_blank">
                            <i class="fa fa-{{ isset($item->name)? Str::slug($item->name) : '-'}} fa-3x"></i>
                        </a>
                    </td>
                    <td>
                        @if($item->is_active == 1)
                        <span class="badge badge-sm badge-success">Active</span>
                        @else
                        <span class="badge badge-sm badge-danger">Active</span>
                        @endif
                    </td>
                    <td>
                        {{-- <a href="{{ url('edit-testimonials').'/'.base64_encode($item->id) }}"> --}}
                        {{-- <a href="{{ url('testimonials').'/'.$item->id.'/edit' }}" onclick="get_confirmation();">
                        --}}
                        <a
                            onclick='is_edit("{{ url('admin/social_networks').'/'.$item->id.'/edit' }}", "Social Neetwork");'>
                            <button class="btn btn-primary btn-sm">Edit </button>
                        </a>
                        {{-- <a href="{{ url('delete-testimonials').'/'.base64_encode($item->id) }}"> --}}
                        {{-- <a href="{{ url('testimonials').'/'.$item->id }}">
                        <button onclick="return confirm('Are you sure?');" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                        </a> --}}

                        <a class="btn btn-danger btn-sm"
                            onclick='is_delete("{{ url('admin/social_networks').'/'.$item->id.'' }}", "Social Neetwork");'">
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