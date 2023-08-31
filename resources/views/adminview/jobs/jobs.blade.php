@extends('adminview.master')
@section('title','Admin | Manage Jobs')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">List Of Jobs</h1>
    <ul>
        <li>
            <a href="{{ URL::to('dashboard') }}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{ URL::to('jobs') }}">
                Jobs
            </a>
        </li>
        <li class="">
            <a href="{{ URL::to('jobs/create') }}">
                Create New Job
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
<div class="col-lg-12 col-md-12 mt-4">
    <div class="card text-center border-primary">
        <!-- -->
        <div class="card-header bg-primary text-white">
            <div>Manage Your All Jobs</div>
        </div>
        <div class="card-body">
            <div class="ul-widget5">
                {{ $jobs->links() }}<br>
                <table class="table table-bordered ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Information</th>
                            <th>Other Information</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($jobs) > 0)
                        @foreach ($jobs as $in => $item)
                        <tr>
                            <td>{{ ++$in }}</td>
                            <td>
                                <strong>Position : </strong> {{ isset($item->position)? $item->position : '-' }}
                                <br>
                                <strong>Experience
                                    : </strong> {{ $item->experience_year_from ."-".$item->experience_year_to  }} Years
                                <br>
                                <strong>CTC: </strong> {{ $item->package_offer_from ."-".$item->package_offer_to}} LPA

                            </td>
                            <td>

                                <strong>Job Description: </strong> {!! $item->job_description !!}
                                <br>
                                <strong>Skills Required: </strong> {{ $item->skills_required}}
                                <br>
                                <strong>Location: </strong> {{ $item->job_location}}
                                <br>
                            </td>
                            <td>
                                {{-- <a href="{{ url('appliedjobs/'.$item->id) }}" --}}

                                {{--                                @if(Auth::user()->role == 'admin')--}}
                                <a href="{{ url('jobs/'.$item->id) }}" class="btn btn-warning btn-block m-1 btn-sm"
                                    type="button">
                                    <i class="nav-icon i-Checked-User font-weight-bold"></i>
                                    Applied Candidates
                                </a>

                                <!-- <a href="{{ url('jobs/relatedCandidates/'.$item->id) }}"
                                    class="btn btn-info btn-block m-1 btn-sm" type="button">
                                    <i class="nav-icon i-Find-User font-weight-bold"></i>
                                    Related Candidates
                                </a> -->
                                {{--@endif--}}

                                <button onclick='is_edit("{{ URL::to('jobs').'/'.$item->id.'/edit' }}", "Jobs");'
                                    class="btn btn-primary btn-block m-1 btn-sm" type="button"><i
                                        class="nav-icon i-Pen-2 font-weight-bold"></i>
                                    Edit
                                </button>

                                <button onclick='is_delete("{{ URL::to('jobs').'/'.$item->id.'' }}", "Jobs");'
                                    class="btn btn-danger btn-block m-1 btn-sm" type="button"><i
                                        class="nav-icon i-Close-Window font-weight-bold"></i> Delete
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                {{ $jobs->links() }}
            </div>
        </div>
        <!-- -->
        <!-- -->
    </div>
</div>
@endsection
@section('scripts')
@stop