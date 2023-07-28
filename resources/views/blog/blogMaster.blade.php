@extends('adminview.master')
@section('title','Admin | Blogs')
@section('head')
{{--<link href="{{url('public').'/'}}plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">--}}
{{--<!-- Chartist -->--}}
{{--<link rel="stylesheet" href={{url('public').'/'}}plugins/chartist/css/chartist.min.css">--}}
{{--<link rel="stylesheet" href="{{url('public').'/'}}plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">--}}
@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">BLOGS</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('commentMaster')}}">
               Manage Comments
            </a>
        </li>

        <li>
            <a href="{{url('blog-Add')}}">
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
            <div>Manage Your All Items of Blogs Section</div>
        </div>
        <div class="card-body">
            <!-- -->
            <!-- -->
            <div class="ul-widget5">
                <table class="table table-striped ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>S.No.</th>
                            <th>Blog For</th>
                            <th>Title</th>
                            <th>Image</th>
                           
                            <th>Publish Date</th>
                            <th>Author Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($a = 1)
                      @foreach($blog as $bl)
                      
                      <tr>
                           <td width="5%">{{ $a++ }}</td>
                           <td width="10%">{{ $bl->blogs_for }}</td>
                           <td width="25%">{{ $bl->title }}</td>
                         @if($bl->image != '')
                           <td><img src="{{ url($bl->image) }}" alt="image" style="width:70%;" height="110"></td>
                           @else
                           <td><img src="" alt="image" style="width:70%;" height="110"></td>
                        @endif
                           <td width="10%">{{ date('d-m-Y',strtotime($bl->publish_date)) }}</td>
                           <td width="15%">{{ $bl->author_name }}</td>
                           <td width="10%">  
                               @if($bl->status == '1')
                                <span class="badge badge-sm badge-success">
                                    Active
                                </span>
                                @else
                                <span class="badge badge-sm badge-danger">
                                    In Active
                                </span>
                                @endif</td>
                                <td width="10%">
                                    <a href="{{url('edit-blogs/'.$bl->id)}}" class="btn btn-primary btn-sm btn-block m-1" role="button"><i
                                    class="nav-icon i-Pen-2 font-weight-bold"></i>Edit</a>
                                    <a href="{{url('delete-blogs/'.$bl->id)}}" class="btn btn-danger btn-sm btn-block m-1" role="button"><i
                                        class="nav-icon i-Close-Window font-weight-bold"></i>Delete</a>
                           <!-- <td width="10%">  <button
                                    onclick='is_edit("{{ URL::to('admin/how_it_works').'/edit'.'/'.$bl->id }}", "Item from Blogs Section");'
                                    class="btn btn-primary btn-sm btn-block m-1" type="button"><i
                                        class="nav-icon i-Pen-2 font-weight-bold"></i> Edit
                                </button> -->
                                <!-- <button
                                    onclick='is_delete("{{ URL::to('admin/how_it_works').'/'.$bl->id.'' }}", "Item from Blogs Section");'
                                    class="btn btn-danger btn-sm btn-block m-1" type="button"><i
                                        class="nav-icon i-Close-Window font-weight-bold"></i> Delete
                                </button> -->
                            </td>
                                
                      </tr>

                      @endforeach
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