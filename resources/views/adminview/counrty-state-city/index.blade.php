@extends('adminview.master')
@section('title','Admin | Countrystatecity')
@section('head')
<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">

<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">Country-State-City</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('addCounty')}}">
                Add New Country
        </li>
        <li>
            <a href="{{url('addnewstate')}}">
                Add New State
        </li>
        <li>
            <a href="{{url('addnewcity')}}">
                Add New City
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

@endsection
@section('scripts')
@stop
