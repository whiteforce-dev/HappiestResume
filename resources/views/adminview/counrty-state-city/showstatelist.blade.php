@extends('adminview.master')
@section('title','Admin | State')
@section('head')

@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">State-List</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('addstate')}}">
                Add-State
            </a>
        </li>
        </ul>
</div>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card text-center border-primary">
        <!-- -->
        <div class="card-header bg-primary text-white">
            <div>All State List </div>
        </div>
        <div class="card-body">
            <!-- -->
            <!-- -->
            <div class="ul-widget5">
                <table class="table table-striped" id="myTable">
                    <thead class="thead-inverse">
                        <tr>
                            <th>S. No.</th>
                            <th>state Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    @foreach ($data  As $key =>  $item)
            
               <tr>
                <td>{{++$key}}</td>
                <td>{{$item['state_name']}}</td>
               
                 <td><a class="btn btn-primary" href="{{"editsatate/".$item['state_id']}}">Edit</a></td> 
                
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

function degree_delete(id){
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
 }).then((result) => {
  if (result.isConfirmed) {
    window.location = "{{ url('degree_master/delete') }}" + '/' + id;  
    Swal.fire(
      'Deleted!',
      'Your requested degree has been deleted.',
      'success'
    )
  }
 })
}
</script>
@endsection
@section('scripts')
@stop