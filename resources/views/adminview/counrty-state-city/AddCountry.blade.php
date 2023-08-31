@extends('adminview.master')
@section('title','Admin | AddCountry')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}'
<!-- {{--<link rel="stylesheet" href={{url('public).'/'}}plugins/chartist/css/chartist.min.css">--}} -->
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">AddCountry</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        
    
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card  border-primary">
        <!-- -->
        <div class="card-header bg-primary  text-white">
            <div>Add Item </div>
        </div>
        <div class="card-body">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="ul-widget5">
                <form class="needs-validation" novalidate="novalidate" method="post" 
                    action="Addcountry">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="name">Add Country</label>
                            <input type="hidden" name="country_id">
                            <input class="form-control"  type="text" placeholder="Enter Country name" name="country_name">
                             <div class="valid-feedback">
                               
                            </div>
                        </div>                  
                         </div>
                         <div class="form-row">
                        <div class="col-md-4 mb-3 offset-4">
                            <button class="btn btn-success float-right btn-block" type="submit">
                                Save Item
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!-- -->
        <!-- -->
    </div>
</div>

<script>
    function getStates(id) {
        $.ajax({
        type: "POST",
        url: '/order.html',
        data: id,
        success: function(data) {
            // Run the code here that needs
            //    to access the data returned
            return data;
        },
        error: function() {
            alert('Error occured');
        }
    });
    }
</script>
@if(session()->has('Success'))
    <div class="alert alert-success">
        {{ session()->get('Success') }}
    </div>
@endif


@endsection
@section('scripts')
@stop