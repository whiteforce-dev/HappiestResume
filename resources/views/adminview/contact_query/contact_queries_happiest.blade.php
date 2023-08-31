@extends('adminview.master')
@section('title', 'Admin | Queries List')
@section('head')
    {{-- <link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet"> --}}
    {{-- <!-- Chartist --> --}}
    {{-- <link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css"> --}}
    {{-- <link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css"> --}}
@endsection
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
{{-- ____________________________________________________________________________________________ --}}

{{-- ____________________________________________________________________________________________ --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>

$(document).ready(function () {
    //alert('hello')
$('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
});
</script>
@section('content')
    <div class="col-lg-12 col-md-12 mt-4">
        <div class="card text-center border-primary">
            <!-- -->
            <div class="card-header bg-primary text-white">
                <div>Manage Your All Queries</div>
            </div>
            <br>
            <section id="tabs" class="project-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab"
                                        href="#nav-profile" role="tab" aria-controls="nav-profile"
                                        aria-selected="false">Form Query</a>
                                    <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                        role="tab" aria-controls="nav-home" aria-selected="true">ChatBot Query</a>

                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" class=>
                                    <div class="ul-widget5">
                                        <table class="table table-striped table-sm table-responsive">
                                            <thead class="thead-inverse">
                                                <tr>
                                                    <th class="col-sm-2">S.No.</th>
                                                    <th class="col-sm-3">Contact</th>
                                                    <th class="col-sm-3">Person Type</th>
                                                    <th class="col-sm-3">totalExp</th>
                                                    <th class="col-sm-3">relocate</th>
                                                    <th class="col-sm-3">noticePeriod</th>
                                                    <th class="col-sm-3">noticePeriodSurving</th>
                                                    <th class="col-sm-3">Date</th>
                                                    <th class="col-sm-1">Status</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @if (count($companies) > 0) --}}
                                                 
                                                
                                                @foreach ($chatBotQuery as $in => $item)
                                                
                                                        <tr>
                                                            <td>{{ ++$in }}</td>
                                                            <td>
                                                                <ul>
                                                                    <li><b>Name: </b>
                                                                        {{ isset($item->person_name) ? $item->person_name : '-' }}</li>
                                                                    <li><b>Email: </b>
                                                                        {{ isset($item->person_email) ? $item->person_email : '-' }}
                                                                    </li>
                                                                    <li><b>Contact:
                                                                        </b>{{ isset($item->person_phone) ? $item->person_phone : '-' }}
                                                                    </li>
                                                                </ul>

                                                            </td>

                                                            <td>{{ isset($item->person_type) ? $item->person_type : '-' }}</td>
                                                            <td>{{ isset($item->totalExp) ? $item->totalExp : '-' }}</td>
                                                            <td>{{ isset($item->relocate) ? $item->relocate : '-' }}</td>
                                                            <td>{{ isset($item->noticePeriod) ? $item->noticePeriod : '-' }}</td>
                                                            <td>{{ isset($item->noticePeriodSurving) ? $item->noticePeriodSurving : '-' }}</td>
                                                            <td>{{ isset($item->created_at)
                                                                ? Carbon\Carbon::parse($item->created_at)->format('d F Y H:i
                                                                                                                                                                                                                                                                                                                                                                                                                                        A')
                                                                : '-' }}
                                                            </td>
                                                            <td>
                                                            @if ($item->status == '0')
                                                                <h4><span class="badge badge-warning">
                                                                       Pending
                                                                    </span></h4>
                                                            @else
                                                                <h4><span class="badge badge-success">
                                                                        Solved
                                                                    </span></h4>
                                                            @endif
                                                            </td>
            <td>
                @if ($item->status == '0')
                     <a href="{{url('activeInactiveenquiryhappiest/'.$item->id) }}"
                    class="btn btn-warning btn-sm btn-block m-1"
                    type="button"><i
                            class="nav-icon  font-weight-bold"></i>
                       <strong>Solve Query</strong></a>  
                  
                @else
               
                    
                    <a 
                        
                        
                        class="btn btn-disabled btn-sm btn-block m-1"
                        type="button" disabled><i
                            class="nav-icon  font-weight-bold"></i>
                            <b><strong>Solved</strong></b></a>
                @endif
            </td>
                                                            

                                                          

                                                        </tr>
                                                    @endforeach
                                                {{-- @endif --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade show active" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <table class="table table-striped table-sm" id="myTable">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th>S.no.</th>
                                                <th>Contact</th>
                                                <th>Message</th>
                                                <th>Date</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($query as $key => $item)
                                              
                                               <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>
                                                        <ul>
                                                            <li><b>Name: </b> {{ $item->name }}</li>
                                                            <li><b>Email: </b> {{ $item->email }}</li>
                                                            <li><b>Contact: </b>{{ $item->contact }}</li>
                                                        </ul>

                                                    </td>

                                                    <td>{{ $item->message }}</td>
                                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('d F Y H:i
                                                                                                                                                                                                                                                                                                                         A') }}
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    @endsection
    
    @section('scripts')
    $(document).on('keypress', function (e) {
    var tag = e.target.tagName.toLowerCase();
    if (e.which === 119 && tag != 'input' && tag != 'textarea')
        $('#forward').click();
    if (e.which === 115 && tag != 'input' && tag != 'textarea')
        $('#back').click();
    if (e.which === 97 && tag != 'input' && tag != 'textarea')
        $('#left').click();
    if (e.which === 100 && tag != 'input' && tag != 'textarea')
        $('#right').click();
    });
 
   


@stop
