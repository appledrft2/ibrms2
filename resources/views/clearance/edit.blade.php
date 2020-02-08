@extends('layouts.master')
<?php $title = 'Resident'; ?>
<?php $header = 'Update Clearance'; ?>
@section('title',$title)
@section('header',$header)
@section('content')
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif

<div class="box">
<form action="/resident/{{$resident->id}}/clearance/{{$clearance->id}}" method="POST" >
        @csrf
        @method('PUT')
        <input type="hidden" name="resident_id" value="{{$resident->id}}">
    <div class="box-header form-inline">
        <p>Clearance Details | Resident Clearance ID No.: <input type="text" name="clearance_no" class="form-control"  readonly value="RBC-{{date('y').'-'.date('mdHis')}}"></p>
    </div>
    <div class="box-body">
    	<div class="row">
    		<div class="col-md-6">
    			<div class="form-group">
    				<label>Resident Name <span class="req">*</span></label>
                    <input readonly type="text" class="form-control" name="resident_name" value="{{$resident->firstname}} {{$resident->middlename[0]}}. {{$resident->lastname}}">
    			</div>
    			<div class="form-group">
                    <?php
                            $now = date('Y');
                            $dob = date('Y', strtotime($resident->dob));
                            $age = $now - $dob;
                    ?>  
    				<label>Age <span class="req">*</span></label>
                    <input readonly type="number" class="form-control" name="age" value="{{$age}}">
                </div>
                <div class="form-group">
    				<label>Address <span class="req">*</span></label>
                <textarea class="form-control" name="address" cols="5" rows="5" name="address" readonly>{{$resident->address->street}} Street, Prk. {{$resident->address->purok->prk_name}} , {{$resident->address->city}} City</textarea>    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
    				<label>Purpose <span class="req">*</span></label>
                    <textarea class="form-control" name="purpose" cols="5" rows="5" name="purpose" placeholder="Enter Purpose" >{{$clearance->purpose}}</textarea>    
                </div>
                <div class="form-group">
    				<label>O.R. Number <span class="req">*</span></label>
                    <input  type="text" class="form-control" name="ornum" value="{{$clearance->ornum}}" placeholder="Enter O.R. Number">
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Date Issued <span class="req">*</span></label>
                        <input  type="date" class="form-control" name="date_issued" readonly value="{{$clearance->date_issued}}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                       
                        <div class="form-group">
                        <label>Valid Until <span class="req">*</span></label>
                        <input  type="date" class="form-control" name="date_valid" value="{{$clearance->date_valid}}"  readonly>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    	
    	
    </div>
</div>
    <div class="pull-right">
        <a href="/resident/{{$resident->id}}/clearance" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Clearance</button>
    </div>
</div>
</form>
@endsection
