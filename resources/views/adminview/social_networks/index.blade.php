@extends('adminview.master')
@section('title','Admin | Social Networks')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">Counts</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('admin/social_networks')}}">
                Social Networks
            </a>
        </li>
        <li>
            <a href="{{url('admin/social_networks/create')}}">
                Add New Network
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card text-center border-primary">
        <!-- -->
        <div class="card-header bg-primary text-white">
            <div>Manage Your All Social Networks</div>
        </div>
        <div class="card-body">
            <!-- -->
            <!-- -->
            <div class="ul-widget5">
                <table class="table table-striped ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($social_networks) > 0)
                        @foreach ($social_networks as $in => $item)
                        <tr>
                            <td>{{ ++$in }}</td>

                            <td>{{ isset($item->name)? $item->name : '-'}}</td>
                            <td>
                                <a href="{{url($item->link)}}" target="_blank">
                                    {{-- <i class="nav-icon i-{{ucwords($item->name)}} fa-3x"></i> --}}
                                    <i class="fa fa-{{strtolower($item->name)}} fa-3x"></i>

                                </a>
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
                                    onclick='is_edit("{{ URL::to('admin/social_networks').'/'.$item->id.'/edit' }}", "Network");'
                                    class="btn btn-primary btn-sm btn-block m-1" type="button"><i
                                        class="nav-icon i-Pen-2 font-weight-bold"></i> Edit
                                </button>
                                <button
                                    onclick='is_delete("{{ URL::to('admin/social_networks').'/'.$item->id.'' }}", "Network");'
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