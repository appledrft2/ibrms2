@extends('layouts.master')
<?php $title = 'Judicial'; ?>
<?php $header = 'Update KP09'; ?>
@section('content')
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<div class="box">
   <form action="/judicial/{{$judicial->id}}/kp09/{{$kp09->id}}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" name="judicial_id" value="{{$judicial->id}}">
    <div class="box-header form-inline">
        <p>Case Details | Case No.: <input type="text" name="caseno" class="form-control"  readonly value="{{$judicial->caseno}}"> | KP Form No.: <input name="kpformno" type="text" class="form-control"  readonly value="{{$kp09->kpformno}}"></p>
    </div>
    <div class="box-body">
    	<div class="row">
    		<div class="col-md-6">
    			<div class="form-group">
    				<label>Appearance Date <span class="req">*</span></label>
    				<input value="{{$kp09->hearing_date}}" type="date" class="form-control" name="hearing_date">
    			</div>
    			<div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Hearing Time:</label>

                      <div class="input-group">
                        <input required name="hearing_time" type="text" value="{{$kp09->hearing_time}}" class="form-control timepicker">

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
        <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Update Form</button>
    </div>
</div>
@endsection
