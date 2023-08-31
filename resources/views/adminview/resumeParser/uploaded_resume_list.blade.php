@extends('adminview.master')
@section('title','Admin | Resume Parser')
@section('head')
@endsection
@section('content')
<style>
    .badge {
    font-weight: 700px;
    padding: 0.5em 1.4em;
}
</style>
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="main-content">

        <div class="breadcrumb">
            <h1>Resume Parser</h1>
            <ul>
                <li><a href="{{URL::to('dashboard')}}">Home</a></li>
                <li><a href="{{URL::to('upload_bulk_resume')}}" target="_blank">Upload Resume</a></li>
                @if(Auth::user()->role == 'admin')
                <li style="margin-bottom: -7px;"><a href="https://white-force.com/email_sync/save_attachments" class="btn btn-success btn-sm" style="color:white">Sync Email Attachment</a></li>
                @endif
            </ul>
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card o-hidden mb-4">
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for=""><b>From Date</b></label>
                                            <input type="date" name="from_date" id="from_date" value="{{ !empty($input['from_date']) ? $input['from_date'] : '' }}" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label for=""><b>To Date</b></label>
                                            <input type="date" name="to_date" id="to_date" class="form-control" value="{{ !empty($input['to_date']) ? $input['to_date'] : '' }}">
                                        </div>
                                        <div class="col-md-2">
                                            <label for=""><b>Status</b></label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="">All</option>
                                                <option value="1" {{ (!empty($input['status']) && $input['status'] == 1) ? "selected" : '' }}>Success</option>
                                                <option value="0" {{ (isset($input['status']) && $input['status'] == 0) ? "selected" : '' }}>Pending</option>
                                                <option value="2" {{ (!empty($input['status']) && $input['status'] == 2) ? "selected" : '' }}>Failed</option>
                                                <option value="3" {{ (!empty($input['status']) && $input['status'] == 3) ? "selected" : '' }}>Send To Queue</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for=""><b>Type</b></label>
                                            <select name="type" id="type" class="form-control">
                                                <option value="">All</option>
                                                <option value="bulk" {{ (!empty($input['type']) && $input['type'] == "bulk") ? "selected" : '' }}>Bulk</option>
                                                <option value="single" {{ (!empty($input['type']) && $input['type'] == "single") ? "selected" : '' }}>Single</option>
                                                <option value="email" {{ (!empty($input['type']) && $input['type'] == "email") ? "selected" : '' }}>Email</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for=""><b>Uploaded By</b></label>
                                            <select name="uploaded_by" id="uploaded_by" class="form-control">
                                                <option value="">All</option>
                                                <option value="4" {{ (!empty($input['uploaded_by']) && $input['uploaded_by'] == 4) ? "selected" : '' }}>Happiest One</option>
                                                <option value="5" {{ (!empty($input['uploaded_by']) && $input['uploaded_by'] == 5) ? "selected" : '' }}>Happiest Two</option>
                                                <option value="6" {{ (!empty($input['uploaded_by']) && $input['uploaded_by'] == 6) ? "selected" : '' }}>Happiest Three </option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">.</label>
                                            <button class="btn btn-info col-md-12" type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card o-hidden mb-4">
                    <div class="card-header d-flex align-items-center border-0">
                        <h3 class="w-50 float-left card-title m-0">Uploaded Resume List : <span class="badge badge-primary" style="background: radial-gradient(#24f0d8, #50eac8);"><b>{{ $all_resume_file_count }}</b></span></h3>
                      
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table text-center" id="user_table">
                                <thead>
                                <tr>
                                    <th style="width:10%">S. No.</th>
                                    <th style="width:5%">Upload Type</th>
                                    <th style="width:5%">Upload By</th>
                                    <th style="width:20%">Resume File Name</th>
                                    <th style="width:20%">Status</th>
                                    <th style="width:20%">Response</th>
                                    <th style="width:20%">Uploaded Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                  @php($a = 1)
                                  @if(count($all_resume_file))
                                  @foreach($all_resume_file as $resume_file)
                                  <tr>
                                    <td style="width:10%">{{ $a++ }}</td>
                                    <td style="width:5%"><span class="badge badge-info">{{ ucwords(strtolower($resume_file->upload_type)) }}</span></td>
                                    @php($uploaded_by = \App\User::where('id',$resume_file->uploaded_by)->value('name'))
                                    <td style="width:5%"><span class="badge badge-primary">{{ ucwords(strtolower($uploaded_by)) }}</span></td>
                                    <td style="width:20%"><a href="{{ $resume_file->link }}" target="_blank">{{$resume_file->file_name}}</a></td>
                                    <td style="width:20%">
                                        @if($resume_file->status == 0)
                                        <span class="badge badge-warning">Pending</span>
                                        @elseif($resume_file->status == 1)
                                        <span class="badge badge-success">Success</span>
                                        @elseif($resume_file->status == 2)
                                        <span class="badge badge-danger">Failed</span>
                                        @elseif($resume_file->status == 3)
                                        <span class="badge badge-danger" style="background: #51475a;">Send To Queue</span>
                                        @endif
                                    </td>
                                    @php ($response = json_decode($resume_file->response))
                                    @if(!empty($response) && ($response->status == false))
                                    <td style="width:25%">{{ $response->message }}</td>
                                    @elseif(!empty($response) && ($response->status == true))
                                    <td style="width:25%">
                                        <a target="_blank" href="{{ str_replace('"','',stripslashes(json_encode($response->data->resume_link))) }}" class="btn btn-outline-primary btn-sm" type="button">View Resume</a>&nbsp;&nbsp;
                                        <a target="_blank" href="https://happiestresume.com/candidate_edit_form/#/edit/candidateentrybyId?id={{ $response->data->token }}" class="btn btn-outline-success btn-sm" type="button">Edit Resume</a>
                                    </td>
                                    @else
                                    <td style="width:25%">-</td>
                                    @endif
                                    
                                    <td style="width:20%">{{date('d-m-Y h:i:s',strtotime($resume_file->created_at))}}</td>
                                  </tr>
                                  @endforeach
                                  @else
                                    <tr>
                                        <td colspan="6"> < No Resume File Imported ></td>
                                    </tr>
                                  @endif
                              
                                </tbody>
                            </table>
                            {{$all_resume_file->appends($_GET)->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@stop
