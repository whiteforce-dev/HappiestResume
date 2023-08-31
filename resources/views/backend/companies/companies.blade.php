@extends('backend.master.master')
@section('title','Manage Companies')
@section('content')

<div class="panel mybg">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="panel-desc">Companies </span>
        </h3>
    </div>
    <div class="panel-body">

        {{-- <form action="{{ url('testimonials/testimonials-store') }}" method="post" id="myid" autocomplete="off" --}}
        <form action="{{ url('companies') }}" method="post" id="myid" autocomplete="off"
            class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">
            @csrf
            <div class="row row-lg">
                <div class="col-xl-6 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Company Name</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" class="form-control required" name="name" id="name"
                                placeholder="Enter Company Name" data-fv-field="github">
                        </div>
                    </div>

                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Email ID</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" name="email" id="email" placeholder="Company Email Address"
                                class="form-control required">
                        </div>
                    </div>

                    {{-- <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Profile Picture</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="file" name="image" id="image" class="form-control required">
                        </div>
                    </div> --}}

                </div>
                <div class="col-xl-6 form-horizontal">
                    <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Contact</label>
                        <div class="col-xl-12 col-md-9">
                            <input type="text" name="contact" id="contact" placeholder="Company Contact"
                                class="form-control required">
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
                    {{-- <div class="form-group form-material">
                        <label class="col-xl-12 col-md-3 form-control-label">Comments</label>
                        <div class="col-xl-12 col-md-9">
                            <textarea name="comment" id="comment" placeholder="Associate Comments Here..." rows="5"
                                class="form-control required"></textarea>
                        </div>
                    </div> --}}

                </div>

                <div class="form-group form-material col-xl-12 text-right padding-top-m">
                    <button type="submit" class="btn btn-primary waves-effect waves-classic" id="validateButton1">Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="panel mybg">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="panel-desc">Manage Your All Testimonials </span>
        </h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped ">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($companies) > 0)
                @foreach ($companies as $in => $item)
                <tr>
                    <td>{{ ++$in }}</td>
                    {{-- <td><img class="list_img" src="{{ url('').'/'.$item->image }}" alt="Profile Picture" --}}
                    {{-- style="height: 100px;width: 100px;" srcset=""></td> --}}
                    <td>{{ isset($item->name)? $item->name : '-'}}</td>
                    <td>{{ isset($item->email)? $item->email : '-'}}</td>
                    <td>{{ isset($item->contact)? $item->contact : '-'}}</td>
                    <td>
                        {{-- <a href="{{ url('edit-testimonials').'/'.base64_encode($item->id) }}"> --}}
                        {{-- <a href="{{ url('testimonials').'/'.$item->id.'/edit' }}" onclick="get_confirmation();">
                        --}}
                        <a onclick='is_edit("{{ url('companies').'/'.$item->id.'/edit' }}", "Company");'>
                            <button class="btn btn-primary btn-sm">Edit </button>
                        </a>
                        {{-- <a href="{{ url('delete-testimonials').'/'.base64_encode($item->id) }}"> --}}
                        {{-- <a href="{{ url('testimonials').'/'.$item->id }}">
                        <button onclick="return confirm('Are you sure?');" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                        </a> --}}

                        <a class="btn btn-danger btn-sm"
                            onclick='is_delete("{{ url('companies').'/'.$item->id.'' }}", "Company");'">
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