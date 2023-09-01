@extends('adminview.master')
@section('title','Admin | Counts')
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
            <a href="{{url('admin/counts')}}">
                Counts
            </a>
        </li>
        <li>
            <a href="{{url('admin/counts/create')}}">
                Add New Item
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card text-center border-primary">
        <!-- -->
        <div class="card-header bg-primary text-white">
            <div>Manage Your All Items of Counts Section</div>
        </div>
        <div class="card-body">
            <!-- -->
            <!-- -->
            <div class="ul-widget5">
                <table class="table table-striped ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Counts</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($counts) > 0)
                        @foreach ($counts as $in => $item)
                        <tr>
                            <td>{{ ++$in }}</td>
                            <td>
                                @if(file_exists($item->icon))
                                <a href="{{ url($item->icon) }}" target="_blank">
                                    <img class="list_img" src="{{ url($item->icon) }}" alt="Profile Picture"
                                        style="max-height: 60px;" alt="{{ isset($item->title)? $item->title : '-'}}">
                                </a>
                                @else
                                <span style="color:red;">Upload Icon</span>
                                @endif
                            </td>
                            <td>{{ isset($item->title)? $item->title : '-'}}</td>
                            <td>{{ isset($item->count)? $item->count : '-'}}</td>
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
                                    onclick='is_edit("{{ URL::to('admin/counts').'/'.$item->id.'/edit' }}", "Item from Counts Section");'
                                    class="btn btn-primary btn-sm btn-block m-1" type="button"><i
                                        class="nav-icon i-Pen-2 font-weight-bold"></i> Edit
                                </button>
                                <button
                                    onclick='is_delete("{{ URL::to('admin/counts').'/'.$item->id.'' }}", "Item from Counts Section");'
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