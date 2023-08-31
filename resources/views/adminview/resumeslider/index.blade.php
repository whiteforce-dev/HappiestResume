@extends('adminview.master')
@section('title','Admin | Resume Slider')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">Resume Slider</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('resume-slider')}}">
                Resume Slider
            </a>
        </li>
        <li>
            <a href="{{url('resume-slider/create')}}">
                Add New Slider
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card text-center border-primary">
        <!-- -->
        <div class="card-header bg-primary text-white">
            <div>Manage Your All Resume Slider</div>
        </div>
        <div class="card-body">
            <!-- -->
            <!-- -->
            <div class="ul-widget5">
                <table class="table table-striped ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Content</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($resumes) > 0)
                        @foreach ($resumes as $in => $item)
                        <tr>
                            <td>{{ ++$in }}</td>

                            <td>{{ isset($item->title)? $item->title : '-'}}</td>
                            <td>
                                @if(file_exists($item->image))
                                <a href="{{ url($item->image) }}" target="_blank">
                                    <img src="{{ url($item->image) }}" style="max-height: 100px;"
                                        alt="Slider Image {{ $in }}">
                                </a>
                                @else
                                <span style="color: red">
                                    Upload Slider Image
                                </span>
                                @endif
                            </td>
                            <td>
                                <div style="overflow:auto;max-width:400px;max-height:200px;">
                                    {!! $item->content !!}
                                </div>
                            </td>

                            <td>
                                @if($item->is_active == '1')
                                <span class="badge badge-sm badge-success">
                                    Active
                                </span>
                                @else
                                <span class="badge badge-sm badge-danger">
                                    In Active
                                </span>
                                @endif
                            </td>
                            <td>
                                <button
                                    onclick='is_edit("{{ URL::to('resume-slider').'/'.$item->id.'/edit' }}", "Resume Slider");'
                                    class="btn btn-primary btn-sm btn-block m-1" type="button"><i
                                        class="nav-icon i-Pen-2 font-weight-bold"></i> Edit
                                </button>
                                <button
                                    onclick='is_delete("{{ URL::to('resume-slider').'/'.$item->id.'' }}", "Resume Slider");'
                                    class="btn btn-danger btn-sm btn-block m-1" type="button"><i
                                        class="nav-icon i-Close-Window font-weight-bold"></i> Delete
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <!-- -->
        <!-- -->
    </div>
</div>

@endsection
@section('scripts')
@stop