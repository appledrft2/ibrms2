@extends('layouts.master')
<?php $title = 'Judicial'; ?>
<?php $header = 'Update KP08'; ?>
@section('title',$title)
@section('header',$header)
@section('content')
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<div class="box">
   <form action="/judicial/{{$judicial->id}}/kp08/{{$kp08->id}}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" name="judicial_id" value="{{$judicial->id}}">
    <div class="box-header form-inline">
        <p>Case Details | Case No.: <input type="text" name="caseno" class="form-control"  readonly value="{{$judicial->caseno}}"> | KP Form No.: <input name="kpformno" type="text" class="form-control"  readonly value="{{$kp08->kpformno}}"></p>
    </div>
    <div class="box-body">
    	<div class="row">
    		<div class="col-md-6">
    			<div class="form-group">
    				<label>Hearing Date <span class="req">*</span></label>
    				<input value="{{$kp08->hearing_date}}" type="date" class="form-control" name="hearing_date">
    			</div>
        			<div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Hearing Time:</label>

                      <div class="input-group">
                        <input required name="hearing_time" type="text" value="{{$kp08->hearing_time}}" class="form-control timepicker">

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
        <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Update KP08</button>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
@endsection
