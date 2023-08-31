@extends('adminview.master')
@section('title','Admin | Degree')
@section('head')

@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">Degree Master</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('degree_master')}}">
                Degrees
            </a>
        </li>
        <li>
            <a href="{{url('degree_master/create')}}">
                Add New Degree
            </a>
        </li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="col-lg-12 col-md-12 mt-4">
    <div class="card text-center border-primary">
        <!-- -->
        <div class="card-header bg-primary text-white">
            <div>Manage All Degree</div>
        </div>
        <div class="card-body">
            <!-- -->
            <!-- -->
            <div class="ul-widget5">
                <table class="table table-striped" id="myTable">
                    <thead class="thead-inverse">
                        <tr>
                            <th>S. No.</th>
                            <th>Degree Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($degrees) > 0)
                        @foreach ($degrees as $in => $item)
                        <tr>
                            <td>{{ ++$in }}</td>
                            <td>{{ isset($item->degree_name)? $item->degree_name : '-'}}</td>
                            <td>
                                <button
                                    onclick='is_edit("{{ URL::to('degree_master/edit').'/'.$item->id }}", "Item from degree Section");'
                                    class="btn btn-primary btn-sm btn-block m-1" type="button"><i
                                        class="nav-icon i-Pen-2 font-weight-bold"></i> Edit
                                </button>
                                <!-- <button
                                    onclick="degree_delete({{ $item->id }})"
                                    class="btn btn-danger btn-sm btn-block m-1" type="button"><i
                                        class="nav-icon i-Close-Window font-weight-bold"></i> Delete
                                </button> -->
                            </td>
                        </tr>
                        @endforeach
                        @endif
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