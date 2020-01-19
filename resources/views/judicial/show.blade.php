@extends('layouts.master')
<?php $title = 'Judicial'; ?>
@section('title',$title)
@section('content')

<div class="card">
    <div class="card-header">
        <div class="float-left form-inline">
          <p>Case Details | Case No.: <input readonly class="form-control" type="text" value="{{$judicial->caseno}}"> | KP Form No.: <input readonly class="form-control" type="text" value="{{$judicial->kpformno}}"></p>
        </div>
        <div class="float-right">
          <a href="/judicial/{{$judicial->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Case</a>
        </div>
    </div>
    <div class="card-body">
    	<div class="row">
           <div class="col-6">
                <div class="form-group">
                       <label>Complainant </label>
                       <input type="text" readonly class="form-control" name="" value="{{$judicial->resident->firstname}} {{$judicial->resident->middlename[0]}}. {{$judicial->resident->lastname}}">
                   </div>

                   <div class="form-group">
                       <label>Respondents </label>
                   
                       <ul>
                        @foreach($respondents as $res)
                          <li>{{$res->resident->firstname}} {{$res->resident->middlename[0]}}. {{$res->resident->lastname}}</li>
                        @endforeach
                      </ul>
                       
                   </div>


           </div>
           <div class="col-6">
               <label>Complainant Details </label>
               <textarea class="form-control" cols=5 rows=5 readonly placeholder="Enter Details">{{$judicial->details}}</textarea>
               <div class="form-group">
                 <label>Status</label>
                 <form action="/judicial/{{$judicial->id}}/status" method="POST">
                   @csrf
                   @method('put')
                   <input type="hidden" name="id" value="{{$judicial->id}}">
                   <select onchange="submit()" name="status" class='select2 form-control'>
                     <option>Select Status</option>
                     <option @if($judicial->status == 'On-going') selected @endif>On-going</option>
                     <option @if($judicial->status == 'Resolved') selected @endif>Resolved</option>
                   </select>
                 </form>
               </div>
           </div>
        </div>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#kp08" role="tab" aria-controls="home" aria-selected="true">KP08</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#kp09" role="tab" aria-controls="profile" aria-selected="false">KP09</a>
      </li>
 
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="kp08" role="tabpanel" aria-labelledby="home-tab">
      <div class="table table-responsive">
        <div class="form-group">
          <span class="float-right mb-3">
            <a href="/judicial/{{$judicial->id}}/kp08/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> New Form</a>
          </span>
        </div>
        <table class="table table-bordered table-striped" id="dtt1">
          <thead>
            <tr>
              <th>KP Form No.</th>
              <th>Hearing Date</th>
              <th>Hearing Time</th>
              <th>Date/Time Created and Filed</th>
              <th >Action</th>
            </tr>
          </thead>
          <tbody>
            @if(count($kp08s))
              @foreach($kp08s as $kp08)
              <tr>
                <td>{{$kp08->kpformno}}</td>
                <td>{{$kp08->hearing_date}}</td>
                <td>{{$kp08->hearing_time}}</td>
                <td width="15%">{{$kp08->created_at}}</td>
                <td class="text-center" width="15%">
                  <div class="form-inline">
                        <a href="/judicial/{{$judicial->id}}/kp08/{{$kp08->id}}" class="btn mr-1 btn-sm btn-success"><i class="fa fa-print"></i></a>
                        <a href="/judicial/{{$judicial->id}}/kp08/{{$kp08->id}}/edit" class="btn mr-1  btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <form id="formkp8{{$kp08->id}}" method="POST" action="/judicial/{{$judicial->id}}/kp08/{{$kp08->id}}" >
                                    @csrf
                                    @method('delete')
                                  
                                    <input type="hidden" name="kpid" value="{{$kp08->id}}">
                                <button title="Delete Case" type="submit" id="formkp8{{$kp08->id}}" class="btn btn-danger btn-sm btn_deletekp"><i class="fa fa-trash"></i></button>
                          
                        </form>
                    </div>
                </td>
              </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
      <div class="tab-pane fade" id="kp09" role="tabpanel" aria-labelledby="profile-tab">
      <div class="table table-responsive">
        <div class="form-group">
          <span class="float-right mb-3">
            <a href="/judicial/{{$judicial->id}}/kp09/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> New Form</a>
          </span>
        </div>
        <table class="table table-bordered table-striped" id="dtt2">
          <thead>
            <tr>
              <th>KP Form No.</th>
              <th>Appearance Date</th>
              <th>Appearance Time</th>
              <th>Date/Time Created and Filed</th>
              <th >Action</th>
            </tr>
          </thead>
          <tbody>
            @if(count($kp09s))
              @foreach($kp09s as $kp09)
              <tr>
                <td>{{$kp09->kpformno}}</td>
                <td>{{$kp09->hearing_date}}</td>
                <td>{{$kp09->hearing_time}}</td>
                <td width="15%">{{$kp09->created_at}}</td>
                <td class="text-center" width="15%">
                  <div class="form-inline">
                        <a href="/judicial/{{$judicial->id}}/kp09/{{$kp09->id}}" class="btn mr-1 btn-sm btn-success"><i class="fa fa-print"></i></a>
                        <a href="/judicial/{{$judicial->id}}/kp09/{{$kp09->id}}/edit" class="btn mr-1  btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        <form id="formkp9{{$kp09->id}}" method="POST" action="/judicial/{{$judicial->id}}/kp09/{{$kp09->id}}" >
                                    @csrf
                                    @method('delete')
                                  
                                    <input type="hidden" name="kpid2" value="{{$kp09->id}}">
                                <button title="Delete Case" type="submit" id="formkp9{{$kp09->id}}" class="btn btn-danger btn-sm btn_deletekp"><i class="fa fa-trash"></i></button>
                          
                        </form>
                    </div>
                </td>
              </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
      
    </div>
</div>
@endsection

