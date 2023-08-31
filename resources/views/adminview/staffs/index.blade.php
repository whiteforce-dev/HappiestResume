@extends('adminview.master')
@section('title','Admin | Staffs')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">Staff / Client / Members</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('staffs')}}">
                Staff Members
            </a>
        </li>
        <li>
            <a href="{{url('staffs/create')}}">
                Add New Staff Member
            </a>
        </li>
        <li>
            <a href="{{url('staffUploadReport')}}">
               Staff Report
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card text-center border-primary">
        <!-- -->
        <div class="card-header bg-primary text-white">
            <div>Manage Your All Staff Member</div>
        </div>
        <div class="card-body">
            <!-- -->
            <!-- -->
            <div class="ul-widget5">
                <table class="table table-striped ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Registered On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($staffs) > 0)
                        @foreach ($staffs as $in => $item)
                        <tr style="{{Auth::user()->id == $item->id ?'background:orange':''}}">
                            <td>{{ ++$in }}</td>
                            <td>
                                @if(file_exists($item->logo))
                                <a href="{{ url($item->logo) }}" target="_blank">
                                    <img src="{{ url($item->logo) }}" style="max-height: 50px;"
                                        alt="{{ isset($item->name)? $item->name : '-'}}">
                                </a>
                                @endif
                            </td>

                            <td>{{ isset($item->name)? $item->name : '-'}}</td>
                            <td>{{ isset($item->email)? $item->email : '-'}}</td>
                            <td>{{ isset($item->role)? ucwords($item->role) : '-'}}</td>
                            <td>
                                {{ Carbon\Carbon::parse($item->created_at)->format('d-M-Y h:i A') }}
                            </td>
                            <td>
                                <button
                                    onclick='is_edit("{{ URL::to('staffs').'/'.$item->id.'/edit' }}", "Client/Staff");'
                                    class="btn btn-primary btn-sm btn-block m-1" type="button"><i
                                        class="nav-icon i-Pen-2 font-weight-bold"></i> Edit
                                </button>
                                @if(Auth::user()->id != $item->id)
                                <button onclick='is_delete("{{ URL::to('staffs').'/'.$item->id.'' }}", "Client/Staff");'
                                    class="btn btn-danger btn-sm btn-block m-1" type="button"><i
                                        class="nav-icon i-Close-Window font-weight-bold"></i> Delete
                                </button>
                                @endif
                            </td>
                        </tr>

                        @endforeach
                        @endif
                    </tbody>
                </table>
                {{ $staffs->links() }}
            </div>
        </div>
        <!-- -->
        <!-- -->
    </div>
</div>

@endsection
@section('scripts')
@stop