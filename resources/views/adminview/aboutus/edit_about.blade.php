@extends('adminview.master')
@section('title','Admin | Dashboard')
@section('head')
    {{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
    {{--<!-- Chartist -->--}}
    {{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
    {{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
    <script src="{{ url('assets').'/' }}js/validate.js"></script>
@endsection
@section('content')



    <div class="panel mybg">
        <div class="panel-heading">
            <h3 class="panel-title">Edit Testimonial
                {{-- <span class="panel-desc">Manage Your All Category </span> --}}
            </h3>
        </div>
        <div class="panel-body">

            <form action="{{ url('update-testimonials').'/'.base64_encode($data->id) }}" method="post" id="myid" autocomplete="off"
                  class="fv-form fv-form-bootstrap4" enctype="multipart/form-data">
                @csrf
                <div class="container" align="center">
                    <div class="form-group row form-material">
                        {{-- <label class="col-xl-12 col-md-3 form-control-label">Category Name</label> --}}
                        <div class="col-xl-12 col-md-9">
                            <img style="height:150px ;width:auto;" src="{{ url('').'/'.$data->image }}" alt="">
                            <input type="hidden" name="oldImage" id="oldImage" value="{{$data->image}}">
                        </div>
                    </div>
                </div>
                <div class="row row-lg">

                    <div class="col-xl-6 form-horizontal">


                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Associate Name</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text"
                                       class="form-control required"
                                       name="name"
                                       id="name"
                                       value="{{$data->name}}"
                                       placeholder="Enter Associate Name"
                                       data-fv-field="github">
                            </div>
                        </div>

                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Designation</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text"
                                       name="designation"
                                       id="designation"
                                       value="{{$data->designation}}"
                                       placeholder="Designation of our associate"
                                       class="form-control required">
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-6 form-horizontal">
                        <div class="form-group form-material">
                            <label class="col-xl-12 col-md-3 form-control-label">Comments</label>
                            <div class="col-xl-12 col-md-9">
                                <input type="text"
                                       name="comment"
                                       id="comment"
                                       value="{{$data->comment}}"
                                       placeholder="Associate Comments Here..."
                                       class="form-control required">
                            </div>
                        </div>
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

                    <div class="form-group form-material col-xl-12 text-right padding-top-m">
                        <button type="submit" class="btn btn-primary waves-effect waves-classic"
                                id="validateButton1">Submit
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>


@stop