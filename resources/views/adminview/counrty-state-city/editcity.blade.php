@extends('adminview.master')
@section('title','Admin | editcity')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}'
<!-- {{--<link rel="stylesheet" href={{url('public).'/'}}plugins/chartist/css/chartist.min.css">--}} -->
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">AddCity</h1>
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
                    action="{{ url ('editcity/'.$citydata['city_id'])}}">
                    @csrf
                    <input type="hidden" name="city_id" value="{{$citydata['city_id']}}">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label class="label">Country Name</label>
                            <select name="country_id" id="country_id" class="js-example-basic-single form-control" onchange="getState(this)">
                                <option value="">Select Country </option>
                                @php($con=\App\Country::orderBy('country_name', 'asc')->get())
                                @foreach($con as $cons)
                                <option value="{{$cons->country_id}}">{{$cons->country_name}}</option>
                                @endforeach
                            </select>
                        </div>
                         <div class="col-md-12 mb-3">
                            <label class="label">State Name</label>
                            <select class="form-control form-select-lg mb-3" name="state_name" id="state_name" onchange="getCity(this)">
                                <option value="" selected disabled>Select One</option>
                            </select>
                        </div> 
                        <div class="col-md-12 mb-3">
                            <label for="name">Edit City</label>
                            <!-- <input class="form-control" type="text" placeholder="Ente state name"
                                value="{{ $citydata['city_name'] }}" name="city_name"> -->
                            <input class="form-control" list="city_names" name="city_name" id="city_name" autocomplete="off" value="{{$citydata['city_name']}}">
                            <datalist id="city_names"></datalist>
                           
                            <div class="valid-feedback">
                               
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3 offset-4">
                            <button class="btn btn-success float-right btn-block" type="submit">
                                Update Item
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    
    // setting up country default/edit value

    function setCountry(val) {
        const country = document.getElementById('country_id');
        country.value= val;
        const id = {
            value: val
        }
        getState(id)
    }

    const $countryId="{{$findCountry[0]->country_id}}";

    setCountry($countryId);

     // setting up state default/edit value
     function setState(val) {
        const state = document.getElementById('state_name');
        state.value= val;
        console.log(state);
        const id = {
            value: val
        }
        getCity(id)
    }

    const $stateId = "{{$findState[0]->state_id}}"

    

    function getState(id) {
        const country_id = id.value;
        console.log(country_id);
        $.ajax({
           type:'POST',
           url:"select-state/"+country_id,
           data:{"_token": "{{ csrf_token() }}", "id": country_id},
            success:function(data){
                if(data) {
                    $('#state_name').prop("disabled", false);
                    $('#state_name').empty()
                    
                    if(data.length !== 0) {
                        data.forEach(myFunction)
                        function myFunction(data) {
                            if(data.country_id == country_id) {
                                setState($stateId)
                                $('#state_name').append(`<option value="${data.state_id}">${data.state_name}</option>`);
                            }
                        }
                    } else {
                        // alert('No State Found')
                    }
                }
            },
            error: function() {
                // alert("You cannot select this option");
            }
        });
    }


   

    function getCity(id) {
        const state_id = id.value;
        console.log(state_id);
        $.ajax({
           type:'POST',
           url:"select-city/"+state_id,
           data:{"_token": "{{ csrf_token() }}", "id": state_id},
            success:function(data){
                if(data) {
                    $('#city_name').prop("disabled", false);
                    $('#city_names').empty()
                    if(data.length !== 0) {
                        data.forEach(myFunction)
                        function myFunction(data) {
                            if(data.state_id == state_id) {
                                $('#city_names').append(`<option value="${data.city_name}">`);
                            }
                        }
                    } else {
                        console.log('No City Found')
                    }
                }
            },
            error: function(err) {
                console.log(err);
            }
        });
    }
</script>


<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

@endsection
@section('scripts')
@stop
