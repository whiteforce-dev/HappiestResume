@extends('adminview.master')
@section('title','Admin | Companies')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card  border-primary">
        <!-- -->
        <div class="card-header bg-primary  text-white">
            <div>Add Company</div>
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
                <form class="needs-validation" novalidate="novalidate" method="post" id="myid"
                    action="{{ url('companies') }}" enctype="multipart/form-data">
                    @if(Auth::user()->role != 'admin')
                    <input type="hidden" name="created_by" id="created_by" value="{{Auth::user()->id}}">
                    @endif
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Company Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Enter Company Name"
                                name="name" required="required" value="{{old('name')}}">
                            <div class="valid-feedback">
                                Looks good!

                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="email">Email ID</label>
                            <input class="form-control" id="email" type="text" placeholder="Enter Company Email Address"
                                name="email" required="required" value="{{old('email')}}">
                            <div class="valid-feedback">
                                Looks good!

                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="contact">Company Start Year</label>
                            <input class="form-control" id="website" type="text" placeholder="Enter Company Start Year"
                                name="start_year" value="{{old('start_year')}}">
                            <div class="valid-feedback">
                                Looks good!

                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="contact">Company Contact</label>
                            <input class="form-control" id="contact" type="text" placeholder="Enter Company Contact"
                                name="contact" required="required" value="{{old('contact')}}">
                            <div class="valid-feedback">
                                Looks good!

                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="is_active">Status</label>
                            <select type="text" name="is_active" id="is_active" class="form-control required">
                                <option value="1">Active</option>
                                <option value="0">In-Active</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!

                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="contact">Company Website</label>
                            <input class="form-control" id="website" type="text" placeholder="Enter Company Website"
                                name="website" value="{{old('website')}}">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="image">Upload Company Logo</label>
                            <input class="form-control" id="image" type="file" title="Upload Company Logo" name="image">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustomUsername">About Company</label>

                            <textarea name="about" id="about" placeholder="Enter About Company..." rows="6"
                                class="form-control required" required="required">{{old('about')}}</textarea>
                            {{--<div class="invalid-feedback">--}}
                            {{--Please choose a username.--}}
                            {{--</div>--}}
                        </div>
                    </div>

                    <button class="btn btn-success" type="submit">Submit</button>
                </form>

            </div>
        </div>
        <!-- -->
        <!-- -->
    </div>
</div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card text-center border-primary">
        <!-- -->
        <div class="card-header bg-primary text-white">
            <div>Manage Your All Companies</div>
        </div>

        <div class="card-body">
            {{ $companies->links() }}
            <!-- -->
            <!-- -->
            <div class="ul-widget5">
                <table class="table table-striped " id="companies_table">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Created By</th>
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Website</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($companies) > 0)
                        @foreach ($companies as $in => $item)
                        <tr>
                            <td>{{ ++$in }}</td>
                            <td>
                                @if($item->created_by > 0)
                                {{ isset($item->user->name)?$item->user->name:'' }}
                                @else
                                Admin
                                @endif
                            </td>
                            <td>
                                {{-- @dd($item->image) --}}
                                {{--@if(file_exists($item->image))--}}
                                {{--<img src="{{ url($item->image) }}" alt="{{ isset($item->name)? $item->name : '-'}}"--}}
                                    {{--style="max-height: 150px;">--}}
                                {{--@endif--}}
                                @if(isset($item->hh_img))
                                    <img src="{{ url($item->hh_img) }}" style="max-width: 103px;"/>
                                @elseif(isset($item->image) && file_exists($item->image))
                                    <img src="{{ url($item->image) }}" style="max-width: 103px;"/>
                                @else
                                    <img src="{{url('public/images/company/white_force.png')}}"
                                         style="max-width: 150px;"/>
                                @endif
                            </td>
                            {{-- <td><img class="list_img" src="{{ url('').'/'.$item->image }}" alt="Profile Picture"
                            --}}
                            {{-- style="height: 100px;width: 100px;" srcset=""></td> --}}
                            <td>{{ isset($item->name)? $item->name : '-'}}</td>
                            <td>{{ isset($item->email)? $item->email : '-'}}</td>
                            <td>{{ isset($item->contact)? $item->contact : '-'}}</td>
                            <td>{{ isset($item->website)? $item->website : '-'}}</td>
                            <td>
                                <button
                                    onclick='is_edit("{{ URL::to('companies').'/'.$item->id.'/edit' }}", "Company");'
                                    class="btn btn-primary btn-sm btn-block m-1" type="button"><i
                                        class="nav-icon i-Pen-2 font-weight-bold"></i> Edit
                                </button>
                                <button onclick='is_delete("{{ URL::to('companies').'/'.$item->id.'' }}", "Company");'
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
            {{ $companies->links() }}
        </div>
        <!-- -->
        <!-- -->
    </div>
</div>

@endsection
@section('scripts')
@stop