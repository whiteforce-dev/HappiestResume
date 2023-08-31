@extends('adminview.master')
@section('title','Admin | Team-Member')
@section('head')

@endsection
@section('content')
<div class="breadcrumb">
   <h1 class="mr-2">Team-Member-List</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('addteam')}}">
                Add Team Member
            </a>
        </li>
        </ul>
</div>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@if(session()->has('status'))
    <div class="alert alert-success">
        {{ session()->get('status') }}
    </div>
@endif
<div class="separator-breadcrumb border-top"></div>
<div class="col-lg-12 col-md-12 mt-4">
    <div class="card text-center border-primary">
        <!-- -->
        <div class="card-header bg-primary text-white">
              <div>All Team-Member List </div>
        </div>
        <div class="card-body">
            <!-- -->
            <!-- -->
            <div class="ul-widget5">
                <table class="table table-striped" id="myTable">
                    <thead class="thead-inverse">
                       
                           <tr>
                            <th>S. No.</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    
                    @foreach ($data  As $key =>  $item)
    
               <tr>
                <td>{{++$key}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['desigation']}}</td>
                 <th><img class="list_img" src="{{ url('public/images/testimonials/').'/'.$item->image }}" height="100%" width="200"></td>
                    <td><a class="btn btn-primary" href="{{"edit-team/".$item['id']}}">Edit</a> 
                    <a class="btn btn-primary" href="{{"deletedata/".$item['id']}}">Delete</a>
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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );


</script>
@endsection
@section('scripts')
@stop