@extends('layouts.master')
<?php $title = 'Judicial'; ?>
@section('title',$title)
@section('content')
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<div class="card">
   <form action="/judicial/{{$judicial->id}}/kp09/{{$kp09->id}}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" name="judicial_id" value="{{$judicial->id}}">
    <div class="card-header form-inline">
        <p>Case Details | Case No.: <input type="text" name="caseno" class="form-control"  readonly value="{{$judicial->caseno}}"> | KP Form No.: <input name="kpformno" type="text" class="form-control"  readonly value="{{$kp09->kpformno}}"></p>
    </div>
    <div class="card-body">
    	<div class="row">
    		<div class="col-6">
    			<div class="form-group">
    				<label>Appearance Date <span class="req">*</span></label>
    				<input value="{{$kp09->hearing_date}}" type="date" class="form-control" name="hearing_date">
    			</div>
    			<div class="form-group">
                    <label>Appearance Time <span class="req">*</span></label>
                <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                    <input value="{{$kp09->hearing_time}}" type="text" name="hearing_time" class="form-control datetimepicker-input" data-target="#datetimepicker3"/>
                    <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-clock-o"></i></div>
                    </div>
                </div>
            </div>
    		</div>
    	</div>
    	
    	
    </div>
    <div class="card-footer">
        <div class="">
            <a href="/judicial/{{$judicial->id}}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Update Form</button>
        </div>
      </div>
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
