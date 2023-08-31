@extends('adminview.master')
@section('title','Admin | Benefits')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')

<div class="breadcrumb">
    <h1 class="mr-2">Benefits</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('benefits')}}">
                Benefits
            </a>
        </li>
        <li>
            <a href="{{url('benefits/create')}}">
                Add New Benefit
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card text-center border-primary">
        <!-- -->
        <div class="card-header bg-primary text-white">
            <div>Manage Your All Benefits</div>
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
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($benefits) > 0)
                        @foreach ($benefits as $in => $item)
                        <tr>
                            <td>{{ ++$in }}</td>

                            <td>
                                <i class="mdi {{ isset($item->icon)? $item->icon : ''}} fa-3x"></i>
                                <br>
                                <a href="{{url('https://cdn.materialdesignicons.com/4.5.95/')}}" style="color: red"
                                    target="_blank">
                                    {{ isset($item->icon)? $item->icon : ''}}
                                </a>
                            </td>
                            <td>{{ isset($item->title)? $item->title : '-'}}</td>
                            <td>
                                <div style="overflow:auto;max-width:400px;max-height:200px;">
                                    {!! $item->description !!}
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
                                <button onclick='is_edit("{{ URL::to('benefits').'/'.$item->id.'/edit' }}", "Benefit");'
                                    class="btn btn-primary btn-sm btn-block m-1" type="button"><i
                                        class="nav-icon i-Pen-2 font-weight-bold"></i> Edit
                                </button>
                                <button onclick='is_delete("{{ URL::to('benefits').'/'.$item->id.'' }}", "Benefit");'
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