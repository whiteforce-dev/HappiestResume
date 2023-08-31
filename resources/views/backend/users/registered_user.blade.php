@extends('backend.master.master')
@section('title','Registered Users')
@section('content')
    {{--<div class="panel mybg">--}}
    {{--<div class="panel-heading">--}}
    {{--<h3 class="panel-title">--}}
    {{--<span class="panel-desc">Add Testimonials </span>--}}
    {{--</h3>--}}
    {{--</div>--}}
    {{--<div class="panel-body">--}}

    {{--<form action="{{ url('testimonials/testimonials-store') }}" method="post" id="myid" autocomplete="off"--}}
    {{--class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">--}}
    {{--@csrf--}}
    {{--<div class="row row-lg">--}}
    {{--<div class="col-xl-6 form-horizontal">--}}
    {{--<div class="form-group form-material">--}}
    {{--<label class="col-xl-12 col-md-3 form-control-label">Associate Name</label>--}}
    {{--<div class="col-xl-12 col-md-9">--}}
    {{--<input type="text"--}}
    {{--class="form-control required"--}}
    {{--name="name"--}}
    {{--id="name"--}}
    {{--placeholder="Enter Associate Name"--}}
    {{--data-fv-field="github">--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group form-material">--}}
    {{--<label class="col-xl-12 col-md-3 form-control-label">Designation</label>--}}
    {{--<div class="col-xl-12 col-md-9">--}}
    {{--<input type="text"--}}
    {{--name="designation"--}}
    {{--id="designation"--}}
    {{--placeholder="Designation of our associate"--}}
    {{--class="form-control required">--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--<div class="col-xl-6 form-horizontal">--}}
    {{--<div class="form-group form-material">--}}
    {{--<label class="col-xl-12 col-md-3 form-control-label">Comments</label>--}}
    {{--<div class="col-xl-12 col-md-9">--}}
    {{--<input type="text"--}}
    {{--name="comment"--}}
    {{--id="comment"--}}
    {{--placeholder="Associate Comments Here..."--}}
    {{--class="form-control required">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group form-material">--}}
    {{--<label class="col-xl-12 col-md-3 form-control-label">Profile Picture</label>--}}
    {{--<div class="col-xl-12 col-md-9">--}}
    {{--<input type="file"--}}
    {{--name="image"--}}
    {{--id="image"--}}
    {{--class="form-control required">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group form-material col-xl-12 text-right padding-top-m">--}}
    {{--<button type="submit" class="btn btn-primary waves-effect waves-classic"--}}
    {{--id="validateButton1">Submit--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    <div class="panel mybg">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="panel-desc">Registered Users Count ({{$registrations_count}})</span>
            </h3>
            {{--<input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Search By Name">--}}
        </div>
        <div class="panel-body">
            <table class="table table-striped ">
                <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Username</th>
                    <th>Password</th>
                    {{--<th>Action</th>--}}
                </tr>
                </thead>
                <tbody>
                @if(count($registrations) > 0)
                    @foreach ($registrations as $in => $item)
                        @php
                            $user_login = \App\UserLogin_Model::find($item->login_id);
                        @endphp
                        <tr>
                            <td>{{ ++$in }}</td>
                            <td>
                                @if(file_exists($item->image))
                                    <img class="list_img" src="{{ URL::to('public').'/'.$item->image }}"
                                         alt="Profile Picture"
                                         style="height: 80px;width: 80px;" srcset="">
                                @else
                                    <img class="list_img" src="{{ URL::to('public/images/d.png')}}"
                                         alt="Profile Picture"
                                         style="height: 80px;width: 80px;" srcset="">

                                @endif
                            </td>
                            <td>{{ isset($item->name)? $item->name : '-'}}</td>
                            <td>{{ isset($item->contact)? $item->contact : '-'}}</td>
                            <td>{{ isset($user_login->username)? $user_login->username : '-'}}</td>
                            <td>{{ isset($user_login->password)? $user_login->password : '-'}}</td>
                            {{--<td>--}}
                            {{--<a href="{{ url('edit-testimonials').'/'.base64_encode($item->id) }}">--}}
                            {{--<button class="btn btn-primary btn-sm">Edit</button>--}}
                            {{--</a>--}}
                            {{--<a href="{{ url('delete-testimonials').'/'.base64_encode($item->id) }}">--}}
                            {{--<button onclick="return confirm('Are you sure?');" class="btn btn-danger btn-sm">--}}
                            {{--Delete--}}
                            {{--</button>--}}
                            {{--</a>--}}
                            {{--</td>--}}
                        </tr>
                    @endforeach
                    {!! $registrations->render() !!}
{{--                    {!! $registrations->appends(Input::all())->render() !!}--}}
                @endif
                </tbody>
            </table>

        </div>
    </div>
@stop