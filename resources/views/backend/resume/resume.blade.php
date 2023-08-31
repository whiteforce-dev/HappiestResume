@extends('backend.master.master')
@section('title','Resume')
@section('content')
    <div class="panel mybg">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="panel-desc">Manage Resume</span>
            </h3>
        </div>
        <div class="panel-body">

            <form action="{{ url('resume-slider/store-resume-slider') }}" method="post" id="myid" autocomplete="off"
                  class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">
                @csrf
                <div class="row row-lg">
                    <div class="col-xl-6 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Slider Title</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text"
                                       class="form-control required"
                                       name="title"
                                       id="title"
                                       placeholder="Enter Slider Title"
                                       data-fv-field="github">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Profile Picture</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="file"
                                       name="image"
                                       id="image"
                                       class="form-control required">
                            </div>
                        </div>

                    </div>


                </div>
                <div class="row row-lg">
                    <div class="col-xl-12 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Resume Content</label>
                            <div class="col-xl-12 col-md-9">
                                <textarea name="content"
                                          id="content"
                                          cols="30"
                                          rows="10"
                                          style="resize: none"
                                          placeholder="Start Writing Resume Content From Here..."
                                          class="form-control required"></textarea>
                                {{--<input type="text"--}}
                                {{--name="comment"--}}
                                {{--id="comment"--}}
                                {{--placeholder="Associate Comments Here..."--}}
                                {{--class="form-control required">--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-lg">
                    <div class="col-xl-12 form-horizontal">
                        <div class="form-group form-material">
                            <div class="form-group form-material col-xl-12 text-right padding-top-m">
                                <button type="submit" class="btn btn-primary waves-effect waves-classic"
                                        id="validateButton1">Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel mybg">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="panel-desc">Manage Your All Resume Slider Images & Content </span>
            </h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped ">
                <thead class="thead-inverse">
                <tr>
                    <th>#</th>

                    <th>Image</th>
                    <th>Status</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Added On</th>

                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($resumes) > 0)
                    @foreach ($resumes as $in => $item)
                        <tr>
                            <td>{{ ++$in }}</td>

                            <td>
                                <img class="list_img" src="{{ url($item->image)}}" alt="Resume Slider Image"
                                     style="height: 100px;width: 90px;" srcset="">
                            </td>

                            <td>
                                @if($item->is_del == 0)
                                    <span class="badge badge-pill badge-success">
                                        Active
                                    </span>
                                @else
                                    <span class="badge badge-pill badge-danger">
                                        Active
                                    </span>
                                @endif
                            </td>
                            <td>{{ isset($item->title)? $item->title : '-'}}</td>
                            <td>{{ isset($item->content)? $item->content : '-'}}</td>
                            <td>{{ isset($item->created_at)? \Carbon\Carbon::parse($item->created_at)->format('d-M-Y') : '-'}}</td>

                            <td>
                                <a href="{{ url('resume-slider/edit-resume-slider').'/'.base64_encode($item->id) }}">
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                </a>
                                <a href="{{ url('resume-slider/delete-resume-slider/').'/'.base64_encode($item->id) }}">
                                    <button onclick="return confirm('Are you sure?');" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>

        </div>
    </div>
@stop