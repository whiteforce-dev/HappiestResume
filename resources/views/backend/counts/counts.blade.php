@extends('backend.master.master')
@section('title','Manage Counts')
@section('content')

<div class="panel mybg">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="panel-desc">Manage Counts </span>
        </h3>
    </div>
    <div class="panel-body">

        {{-- <form action="{{ url('testimonials/testimonials-store') }}" method="post" id="myid" autocomplete="off" --}}
        <form action="{{ url('admin/counts') }}" method="post" id="myid" autocomplete="off"
            class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">
            @csrf
            <div class="row row-lg">
                <div class="col-xl-6 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Title</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" class="form-control required" name="title" id="title"
                                placeholder="Enter Title" data-fv-field="github">
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
                            <input type="file" name="image" id="image" class="form-control required">
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Count</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" class="form-control required" name="count" id="count"
                                placeholder="Provide Count" data-fv-field="github">
                        </div>
                    </div>
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
                        Now
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="panel mybg">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="panel-desc">Manage Your All Counts </span>
        </h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped ">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Count</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($counts) > 0)
                @foreach ($counts as $in => $item)
                <tr>
                    <td>{{ ++$in }}</td>
                    <td>
                        @if(file_exists($item->icon))
                        <img class="list_img" src="{{ url($item->icon) }}" alt="Count Icon" style="width: 100px;"
                            srcset="">
                        @endif
                    </td>
                    <td>
                        {{ isset($item->title)? $item->title : '-'}}
                        <br>
                        <span class="badge badge-sm badge-warning">
                            {{ isset($item->count)? $item->count : '-'}}
                        </span>
                    </td>
                    <td>
                        @if($item->is_active == 1)
                        <span class="badge badge-sm badge-success">
                            Active
                        </span>
                        @else
                        <span class="badge badge-sm badge-danger">
                            In-Active
                        </span>
                        @endif
                    </td>
                    <td>
                        <a onclick='is_edit("{{ url('admin/counts').'/'.$item->id.'/edit' }}", "Count");'>
                            <button class="btn btn-primary btn-sm">Edit </button>
                        </a>
                        <a class="btn btn-danger btn-sm"
                            onclick='is_delete("{{ url('admin/counts').'/'.$item->id.'' }}", "Count");'">
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