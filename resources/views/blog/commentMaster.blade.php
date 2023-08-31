@extends('master.master')
@section('title', 'Blogs')

@section('content')
<div class="col-lg-8 col-md-8 "style="margin-left:250px !important;margin-top:80px !important">
    <div class="card  border-primary">
        <!-- -->
        <div class="card-header bg-primary  text-white">
            <div>Manage Your All Comments of Blogs</div>
        </div>
        <div class="card-body">
            <table class="table table-striped" style="overflow:scroll !important;">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Blog For</th>
                    <th>Title</th>
                    <th style="width:150px" >Comment By</th>
                    <th style="width:150px">Comment</th>
                    <th style="width:150px">Comment Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php($a = 1)
                      @foreach($comment as $comm)
                      @php($blog_for = App\Models\Blog::where('id',$comm->blog_id)->value('blogs_for'))
                      @php($blog_title = App\Models\Blog::where('id',$comm->blog_id)->value('title'))
                  <tr>
                    <th>{{ $a++ }}</th>
                    <td>{{ $blog_for }}</td>
                    <td>{{ $blog_title }}</td>
                    <td style="word-break: break-all;
                    max-width: 180px !important;">{{ $comm->name }}</td>
                    <td  style="word-break: break-all;
                    max-width: 200px !important;">{{ $comm->comment }}</td>
                    <td>{{ date('d-m-Y',strtotime($comm->created_at)) }}</td>
                    <td>  
                        @if($comm->status == '1')
                         <h5><span class="badge badge-md badge-success">
                             Approved
                         </span></h5>
                         @else
                         <h5><span class="badge badge-md badge-danger">
                             Declined
                         </span></h5>
                         @endif
                        </td>
                    <td>  
                    
                         <a href="{{ url('comment/approve/'.$comm->id) }}" class="btn btn-primary btn-sm btn-block m-1"><i
                                 class="nav-icon i-Pen-2 font-weight-bold"></i>Approve</a>
                         <a href="{{ url('comment/decline/'.$comm->id) }}" class="btn btn-warning btn-sm btn-block m-1" style="color:white"><i
                                 class="nav-icon mdi mdi-star-off font-weight-bold"></i>Decline</a>
                         <a href="{{ url('comment/delete',[$comm->id]) }}"><button 
                           
                             class="btn btn-danger btn-sm btn-block m-1" type="button"><i
                                 class="nav-icon i-Close-Window font-weight-bold"></i> Delete
                         </button></a>
                     </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        </div>
        </div>
        
   
</div>

@endsection
@section('scripts')
@stop