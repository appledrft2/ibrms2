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
          <a href="/judicial/{{$judicial->id}}/edit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
        </div>
    </div>
    <div class="card-body">
    	<div class="row">
           <div class="col-6">
                <div class="form-group">
                       <label>Complainant <span class="req">*</span></label>
                       <input type="text" readonly class="form-control" name="" value="{{$judicial->resident->firstname}} {{$judicial->resident->middlename[0]}}. {{$judicial->resident->lastname}}">
                   </div>

                   <div class="form-group">
                       <label>Respondents <span class="req">*</span></label>
                   
                       <ul>
                        @foreach($respondents as $res)
                          <li>{{$res->resident->firstname}} {{$res->resident->middlename[0]}}. {{$res->resident->lastname}}</li>
                        @endforeach
                      </ul>
                       
                   </div>


           </div>
           <div class="col-6">
               <label>Complainant Details <span class="req">*</span></label>
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
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">KP07</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">KP08</a>
      </li>
 
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
      
    </div>
</div>
@endsection

