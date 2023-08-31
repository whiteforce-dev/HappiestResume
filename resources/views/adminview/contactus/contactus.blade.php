@extends('adminview.master')
@section('title','Admin | Manage Testimonials')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')

<div class="breadcrumb">
    <h1 class="mr-2">List Of Testmonials</h1>
    <ul>
        <li>
            <a href="{{ URL::to('dashboard') }}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ URL::to('testimonials') }}">
                Testmonials
            </a>
        </li>
        <li class="">
            <a href="{{ URL::to('testimonials/create') }}">
                Add New Testmonial
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
<div class="col-lg-12 col-md-12 mt-4">
    <div class="card text-center border-primary">
        <!-- -->
        <div class="card-header bg-primary text-white">
            <div>Manage Your All Testmonials</div>
        </div>
        <div class="card-body">
            <div class="ul-widget5">
                <table class="table table-bordered ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Comments</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($testimonials) > 0)
                        @foreach ($testimonials as $in => $item)
                        <tr>
                            <td>{{ ++$in }}</td>
                            <td><img class="list_img" src="{{ url('').'/'.$item->image }}" alt="Profile Picture"
                                    style="height: 100px;width: 100px;" srcset=""></td>
                            <td>{{ isset($item->name)? $item->name : '-'}}</td>
                            <td>{{ isset($item->designation)? $item->designation : '-'}}</td>
                            <td>{{ isset($item->comment)? $item->comment : '-'}}</td>
                            <td>
                                {{-- <a href="{{ url('edit-testimonials').'/'.base64_encode($item->id) }}"> --}}
                                {{-- <a href="{{ url('testimonials').'/'.$item->id.'/edit' }}"
                                onclick="get_confirmation();">
                                --}}
                                <a onclick='is_edit("{{ url('testimonials').'/'.$item->id.'/edit' }}", "Testimonial");'>
                                    <button class="btn btn-primary btn-sm">Edit </button>
                                </a>
                                {{-- <a href="{{ url('delete-testimonials').'/'.base64_encode($item->id) }}"> --}}
                                {{-- <a href="{{ url('testimonials').'/'.$item->id }}">
                                <button onclick="return confirm('Are you sure?');" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                                </a> --}}

                                <a class="btn btn-danger btn-sm"
                                    onclick='is_delete("{{ url('testimonials').'/'.$item->id.'' }}", "Testimonial");'>
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
        <!-- -->
        <!-- -->
    </div>
</div>
@endsection
@section('scripts')
@stop