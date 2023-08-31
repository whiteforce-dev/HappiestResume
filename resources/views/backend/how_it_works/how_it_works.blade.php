@extends('backend.master.master')
@section('title','How It Works')
@section('content')

<div class="panel mybg">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="panel-desc">Add Item (How It Works Section) </span>
        </h3>
    </div>
    <div class="panel-body">

        {{-- <form action="{{ url('testimonials/testimonials-store') }}" method="post" id="myid" autocomplete="off" --}}
        <form action="{{ url('admin/how_it_works') }}" method="post" id="myid" autocomplete="off"
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
                <div class="col-xl-6 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Description</label>
                        <div class="col-xl-12 col-md-9">
                            <textarea name="description" id="description" placeholder="Description..." rows="10"
                                class="form-control required"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-group form-material col-xl-12 text-right padding-top-m">
                    <button type="submit" class="btn btn-primary waves-effect waves-classic" id="validateButton1">Save Now
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="panel mybg">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="panel-desc">Manage Your All Items (How It Works Section) </span>
        </h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped ">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($how_it_works) > 0)
                @foreach ($how_it_works as $in => $item)
                <tr>
                    <td>{{ ++$in }}</td>
                    <td><img class="list_img" src="{{ url('').'/'.$item->icon }}" alt="Profile Picture"
                            style="width: 200px;" srcset=""></td>
                    <td>{{ isset($item->title)? $item->title : '-'}}</td>
                    <td>{{ isset($item->description)? $item->description : '-'}}</td>
                    <td>
                        {{-- <a href="{{ url('edit-testimonials').'/'.base64_encode($item->id) }}"> --}}
                        {{-- <a href="{{ url('testimonials').'/'.$item->id.'/edit' }}" onclick="get_confirmation();">
                        --}}
                        <a
                            onclick='is_edit("{{ url('admin/how_it_works').'/'.$item->id.'/edit' }}", "Item of How It Works Section");'>
                            <button class="btn btn-primary btn-sm">Edit </button>
                        </a>
                        {{-- <a href="{{ url('delete-testimonials').'/'.base64_encode($item->id) }}"> --}}
                        {{-- <a href="{{ url('testimonials').'/'.$item->id }}">
                        <button onclick="return confirm('Are you sure?');" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                        </a> --}}

                        <a class="btn btn-danger btn-sm"
                            onclick='is_delete("{{ url('admin/how_it_works').'/'.$item->id.'' }}", "Item of How It Works Section");'">
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