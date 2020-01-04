@extends('layouts.master')
<?php $title = 'Resident'; ?>
@section('title',$title)
@section('content')
<div class="form-group">
    <a href="/resident" class="btn btn-secondary">Go Back</a>
</div>
<div class="card">
    <div class="card-header">
        Resident Profile | ID Number: {{$resident->residentid}}
    </div>
    <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        Fullname:<br>
                        <b>{{$resident->firstname}} {{$resident->middlename[0]}}. {{$resident->lastname}} {{$resident->extension}}</b>
                    </div>
                    <div class="form-group">
                        Gender:<br>
                        <b>{{$resident->gender}}</b>
                    </div>
                    <div class="form-group">
                        Date of Birth:<br>
                        <b>{{$resident->dob}}</b>
                    </div>
                </div>
                <div class="col-md-3">
                    
                    <div class="form-group">
                        Contact No:<br>
                        <b>{{$resident->address->contactno}}</b>
                    </div>
                    <div class="form-group">
                        Civil Status:<br>
                        <b>{{$resident->civilstatus}}</b>
                    </div>
                    @if($resident->spouse)
                    <div class="form-group">
                        Spouse:<br>
                        <b>{{$resident->spouse}}</b>
                    </div>
                    @endif
                    
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        House No:<br>
                        <b>{{$resident->address->houseno}}</b>
                    </div>
                    <div class="form-group">
                        Street:<br>
                        <b>{{$resident->address->street}}</b>
                    </div>
                    <div class="form-group">
                        Purok:<br>
                        <b>{{$resident->address->purok}}</b>
                    </div>
                </div>
                <div class="col-md-3">
                    @if($resident->img)
                        <div class="form-group">
                            <div class="col-md-12">
                                <img src="{{asset('storage/' . $resident->img)}}" class="img-thumbnail" style="width:180px;height:180px;">
                            </div>
                        </div>
                    @endif
                    
                </div>
            </div>
     
    </div>
    <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home4" role="tab" aria-controls="home">
    <i class="fa fa-list"></i> Clearance
<!--     <span class="badge badge-success">New</span> -->
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile">
    <i class="icon-basket-loaded"></i> Permit

    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#messages4" role="tab" aria-controls="messages">
    <i class="icon-pie-chart"></i> Charts</a>
    </li>
    </ul>
    <div class="tab-content">
    <div class="tab-pane active" id="home4" role="tabpanel">
        <div class="form-group">
            <button class="btn btn-success">Issue Clearance</button>
        </div>
        <div class="form-group">

            <div class="table-responsive">
                <table id="dtt1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Reason</th>
                            <th>Date Issued</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Barangay Clearance</td>
                            <td>Apply for job</td>
                            <td>{{date('Y-m-d')}}</td>
                            <td>
                                <button class="btn btn-sm btn-success"><i class="fa fa-print"></i></button>
                                <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="tab-pane" id="profile4" role="tabpanel">2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
    <div class="tab-pane" id="messages4" role="tabpanel">3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
    </div>
</div>
@endsection
