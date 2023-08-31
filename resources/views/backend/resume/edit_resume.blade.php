@extends('backend.master.master')
@section('title','Edit Resume')
@section('content')
    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
    <script src="{{URL::to('assets').'/' }}js/validate.js"></script>


    <div class="panel mybg">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Resume
                {{-- <span class="panel-desc">Manage Your All Category </span> --}}
            </h3>
        </div>
        <div class="panel-body">

            <form action="{{URL::to('resume-slider/update-resume-slider').'/'.base64_encode($data->id) }}" method="post" id="myid" autocomplete="off"
                  class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">
                @csrf
                <div class="container" align="center">
                    <div class="form-group row form-material">
                        {{-- <label class="col-xl-12 col-md-3 form-control-label">Category Name</label> --}}
                        <div class="col-xl-12 col-md-9">
                            <img style="height:150px ;width:auto;" src="{{URL::to('public').'/'.$data->image }}" alt="">
                            <input type="hidden" name="oldImage" id="oldImage" value="{{$data->image}}">
                        </div>
                    </div>
                </div>
                <div class="row row-lg">
                    <div class="col-xl-6 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Slider Title</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text"
                                       class="form-control required"
                                       name="title"
                                       id="title"
                                       value="{{isset($data->title)?$data->title:'-'}}"
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
                                          class="form-control required">{{isset($data->content)?$data->content:'-'}}</textarea>
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
                                <button onclick="window.history.back();"
                                        type="button"
                                        class="btn btn-default waves-effect waves-classic"
                                        id="validateButton1">Back
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>


@stop