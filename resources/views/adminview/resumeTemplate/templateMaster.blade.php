@extends('adminview.master')
@section('title','Admin | Blogs')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">Resume Template Master</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <!-- <li>
            <a href="{{url('blogMaster')}}">
                Blogs
            </a>
        </li> -->
        <li>
            <a href="{{url('add-new-template')}}">
                Add New Resume Template
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card text-center border-primary">
        <!-- -->
        <div class="card-header bg-primary text-white">
            <div>Manage Your All Resume Templates</div>
        </div>
        <div class="card-body">
            <!-- -->
            <!-- -->
            <div class="ul-widget5">
                <table class="table table-striped ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>S. No.</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php($a = 1)
                      @foreach($template as $temp)
                      <tr>
                         <td width="5%">{{ $a++}}</td>
                         <td width="10%">{{ $temp->title }}</td>
                         <td><img src="{{ $temp->image }}" alt="" height="150" width="120"></td>
                        <td width="10%">
                        
                        <a href="{{ url('edit-resume-template/'.$temp->id) }}" class="btn btn-primary btn-sm btn-block m-1" type="button"><i
                        class="nav-icon i-Pen-2 font-weight-bold"></i> Edit</a>
                        @if($temp->status == '1')
                        <a href="{{ url('activeInactiveResume/'.$temp->id) }}" class="btn btn-danger btn-sm btn-block m-1" type="button"><i
                        class="nav-icon  font-weight-bold"></i> Inactive</a>
                        @else
                        <a href="{{ url('activeInactiveResume/'.$temp->id) }}" class="btn btn-success btn-sm btn-block m-1" type="button"><i
                        class="nav-icon  font-weight-bold"></i> Active</a>
                        @endif
                        <a href="{{ url('viewResumeTemplate/'.$temp->id) }}" class="btn btn-info btn-sm btn-block m-1" type="button">View</a>
                        </td>
                        <td width="10%">
                        @if($temp->status == '1')
                            <h4><span class="badge badge-success">
                                Active
                            </span></h4>
                        @else
                            <h4><span class="badge badge-danger">
                                In Active
                            </span></h4>
                        @endif
                        </td>
                      </tr>
                      @endforeach
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