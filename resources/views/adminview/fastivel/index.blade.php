@extends('adminview.master')
@section('title','Admin | Events')
@section('head')

@endsection
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">Events-List</h1>
    <ul>
        <li>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li>
            <a href="{{url('addfastival' )}}">
                Add Events
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
            <div>All Events List</div>
        </div>
        <div class="card-body">
            <!-- -->
            <!-- -->
            <div class="ul-widget5">
                <table class="table table-striped" id="myTable">
                    <thead class="thead-inverse">
                        <tr>
                            <th>S. No.</th>
                            <th>Events-Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    @foreach ($data  As $key =>  $item)
               <tr>
                <td>{{++$key}}</td>
                <td>{{$item['eventsname']}}</td>
                 <td><img class="list_img" src="{{ url('public/images/testimonials/').'/'.$item->image }}" height="100%" width="200"></td>
                       <td>{{$item['description']}}</td>
                    <td><a class="btn btn-primary" href="{{"fastivaledit/".$item['id']}}">Edit</a> 
                    <a class="btn btn-primary" href="{{"fastivaldelete/".$item['id']}}">Delete</a>
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
