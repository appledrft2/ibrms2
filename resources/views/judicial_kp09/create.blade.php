@extends('layouts.master')
<?php $title = 'Judicial'; ?>
<?php $header = 'New KP09'; ?>
@section('title',$title)
@section('header',$header)
@section('content')
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<div class="box">
   <form action="/judicial/{{$judicial->id}}/kp09" method="POST" >
        @csrf
        <input type="hidden" name="judicial_id" value="{{$judicial->id}}">
    <div class="box-header form-inline">
        <p>Case Details | Case No.: <input type="text" name="caseno" class="form-control"  readonly value="{{$judicial->caseno}}"> | KP Form No.: <input name="kpformno" type="text" class="form-control"  readonly value="KP09-{{date('y').'-'.date('mdHis')}}"></p>
    </div>
    <div class="box-body">
    	<div class="row">
    		<div class="col-md-6">
    			<div class="form-group">
    				<label>Appearance Date <span class="req">*</span></label>
    				<input type="date" class="form-control" name="hearing_date">
    			</div>
    			 <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Appearance Time:</label>

                      <div class="input-group">
                        <input required name="hearing_time" type="text" class="form-control timepicker">

                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                  </div>
    		</div>
    	</div>
    	
    	
    </div>
   
    </div>
    <div class="pull-right">
        <a href="/judicial/{{$judicial->id}}" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add KP09</button>
    </div>
</div>
@endsection
    