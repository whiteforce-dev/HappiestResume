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
            <a href="{{url('blogMaster')}}">
                Blogs
            </a>
        </li>
       
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card text-center border-primary">
        <!-- -->
        <div class="card-header bg-primary text-white">
            <div>Manage Your All Comments of Blogs</div>
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
                            <th>Comment By</th>
                            <th>Comment</th>
                            <th>Comment Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($a = 1)
                      @foreach($comment as $comm)
                      @php($blog_for = App\Blog::where('id',$comm->blog_id)->value('blogs_for'))
                      @php($blog_title = App\Blog::where('id',$comm->blog_id)->value('title'))
                      <tr>
                           <td width="5%">{{ $a++ }}</td>
                           <td width="5%">{{ $blog_for }}</td>
                           <td width="20%">{{ $blog_title }}</td>
                           <td width="10%">{{ $comm->name }}</td>
                           <td>{{ $comm->comment }}</td>
                           <td width="10%">{{ date('d-m-Y',strtotime($comm->created_at)) }}</td>
                           <td width="10%">  
                               @if($comm->status == '1')
                                <h5><span class="badge badge-md badge-success">
                                    Approved
                                </span></h5>
                                @else
                                <h5><span class="badge badge-md badge-danger">
                                    Declined
                                </span></h5>
                                @endif</td>
                           <td width="15%">  
                           <!-- <button
                                    onclick='is_edit("{{ URL::to('admin/how_it_works').'/'.$comm->id.'/edit' }}", "Item from Blogs Section");'
                                    class="btn btn-primary btn-sm btn-block m-1" type="button"><i
                                        class="nav-icon i-Pen-2 font-weight-bold"></i> Approve
                                </button> -->
                                <a href="{{ url('comment/approve/'.$comm->id) }}" class="btn btn-primary btn-sm btn-block m-1"><i
                                        class="nav-icon i-Pen-2 font-weight-bold"></i>Approve</a>
                                <a href="{{ url('comment/decline/'.$comm->id) }}" class="btn btn-warning btn-sm btn-block m-1" style="color:white"><i
                                        class="nav-icon mdi mdi-star-off font-weight-bold"></i>Decline</a>
                                <button
                                    onclick='is_delete("{{ URL::to('comment/delete').'/'.$comm->id.'' }}", "Item from Blogs Section");'
                                    class="btn btn-danger btn-sm btn-block m-1" type="button"><i
                                        class="nav-icon i-Close-Window font-weight-bold"></i> Delete
                                </button></td>
                                
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