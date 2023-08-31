@extends('adminview.master')
@section('title','Admin | Job Search')
@section('head')
    {{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
    {{--<!-- Chartist -->--}}
    {{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
    {{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
    <style>
        .divrow {
            padding: 15px 25px;
            background-color: white;
            margin-top: 20px;
        }

        .font-bold {
            font-weight: 700;
        }

        .date {
            font-size: 12px !important;
            font-weight: 600 !important;
            color: #98A0B4 !important;
            position: relative !important;
            line-height: 1 !important;
            margin-right: 10px !important;
            padding-right: 10px !important;
        }

        .btn-sm {
            border-radius: 0 !important;
        }

        .mt-10 {
            margin-top: 10px !important;
        }

        .heading {
            cursor: pointer !important;
            color: #29bbb0 !important;
            font-weight: 500 !important;
        }

        .spanclass {
            font-size: 20px !important;
            color: green !important;
        }

        .smallClass {
            background-color: #e9ebf0;
            padding: 5px 20px;
            margin: 0px 8px;
        }

        .btn-secondary {
            background-color: green !important;
            border-color: green;
        }

        .mydiv {
            background-color: #e5e5e561;
            padding: 20px 25px;
        }

        .form-control {
            font-size: 0.9rem;
            font-weight: 500;
            line-height: 1.5;
            display: block;
            width: 100%;
            height: calc(2.1rem + 2px);
            padding: 0.375rem 0.75rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            color: #2e384d;
            border: 1px solid #dce4ec;
            /*/ border-radius: 0.25rem; /*/
            background-color: #fff;
            background-clip: padding-box;
        }
    </style>
@endsection
@section('content')
    <div class="col-lg-12 col-md-12 mt-4">
        <div class="card  border-primary">
            <!-- -->
            <div class="card-header bg-primary  text-white">
                <div>Resume Search By Fields</div>
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
                    <form action="{{ url('search-by-jd') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Required Key Skills</label>
                                <input type="text"
                                       class="form-control " 
                                       name="key_skills"
                                       id="key_skills" value=""
                                       placeholder="Enter Key Skills"
                                       data-fv-field="github">
                            </div>
                            
                           
                        </div>
                  
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Job Description</label><br>
                               <textarea name="jd" id="jd" cols="153" rows="10" class="form-control"></textarea>
                            </div>
                          
                           
                        </div>
                       
                        <div class="col-lg-12">
                       
                        <button class="btn btn-success btn-block" type="submit">Submit</button>
                 
                        </div>
                    </form>
                </div>
            </div>
            <!-- -->
            <!-- -->
        </div>
    </div>

    
@stop