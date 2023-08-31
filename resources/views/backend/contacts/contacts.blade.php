@extends('backend.master.master')
@section('title','Dashboard')
@section('content')
    <div class="panel mybg">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="panel-desc">Manage Your Contact Detail Here...</span>
            </h3>
        </div>
        <div class="panel-body">

            <form action="{{ url('contact/contact-store') }}" method="post" id="myid" autocomplete="off"
                  class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="contact_id" id="contact_id" value="{{base64_encode($contact->id)}}">
                <div class="row row-lg">
                    <div class="col-xl-6 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Address</label>
                            <div class="col-xl-12 col-md-9">
                                <textarea name="address"
                                          class="form-control required"
                                          id="address"
                                          maxlength="144"
                                          placeholder="Enter Full Address Here..."
                                          style="resize: none"
                                          cols="30"
                                          rows="6">{{$contact->address}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Email Address</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text"
                                       name="email"
                                       id="email"
                                       value="{{$contact->email}}"
                                       placeholder="Enter Email ID"
                                       maxlength="30"
                                       class="form-control required">
                            </div>
                        </div>
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Contact / Telephone</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text"
                                       name="contact"
                                       id="contact"
                                       value="{{$contact->contact}}"
                                       placeholder="Enter Contact No."
                                       maxlength="15"
                                       class="form-control required">
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-material col-xl-12 text-right padding-top-m">
                        <button type="submit" class="btn btn-primary waves-effect waves-classic"
                                id="validateButton1">Update Contact Detail
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{--<div class="panel mybg">--}}
        {{--<div class="panel-heading">--}}
            {{--<h3 class="panel-title">Testimonials--}}
                {{--<span class="panel-desc">Manage Your All Testimonials </span>--}}
            {{--</h3>--}}
        {{--</div>--}}
        {{--<div class="panel-body">--}}
            {{--<table class="table table-striped ">--}}
                {{--<thead class="thead-inverse">--}}
                {{--<tr>--}}
                    {{--<th>#</th>--}}
                    {{--<th>Image</th>--}}
                    {{--<th>Name</th>--}}
                    {{--<th>Designation</th>--}}
                    {{--<th>Comments</th>--}}
                    {{--<th class="float-right">Action</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}
                {{--@if(count($testimonials) > 0)--}}
                    {{--@foreach ($testimonials as $in => $item)--}}
                        {{--<tr>--}}
                            {{--<td>{{ ++$in }}</td>--}}
                            {{--<td><img class="list_img" src="{{ url('').'/'.$item->image }}" alt="" srcset=""></td>--}}
                            {{--<td>{{ isset($item->name)? $item->name : '-'}}</td>--}}
                            {{--<td>{{ isset($item->designation)? $item->designation : '-'}}</td>--}}
                            {{--<td>{{ isset($item->comment)? $item->comment : '-'}}</td>--}}
                            {{--<td align="right">--}}
                                {{--<a href="{{ url('edit-testimonials').'/'.base64_encode($item->id) }}">--}}
                                    {{--<button class="btn btn-primary btn-sm">Edit </button>--}}
                                {{--</a>--}}
                                {{--<a href="{{ url('delete-testimonials').'/'.base64_encode($item->id) }}">--}}
                                    {{--<button onclick="return confirm('Are you sure?');" class="btn btn-danger btn-sm">--}}
                                        {{--Delete--}}
                                    {{--</button>--}}
                                {{--</a></td>--}}
                        {{--</tr>--}}
                    {{--@endforeach--}}
                {{--@endif--}}
                {{--</tbody>--}}
            {{--</table>--}}

        {{--</div>--}}
    {{--</div>--}}
@stop