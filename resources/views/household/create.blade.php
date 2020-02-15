@extends('layouts.master')
<?php $title = 'Household'; ?>
<?php $header = 'New Household'; ?>
@section('title',$title)
@section('header',$header)
@section('content')
@if($errors->any())
    <div class="alert alert-danger">{{ implode('', $errors->all(':message')) }}</div>
@endif
            <div class="box">
            	<div class="box-header">
            		<h5>Household Details: <i class="fa fa-question-circle mr-1" title="Household ID No. is automatically generated"></i></h5>
            	</div>
            	<form action="/household" method="POST">
            	@csrf
                <div class="box-body">

                	<div class="row">
                		<div class="col-md-6">
                			<div class="form-group">
                				<label>Household ID:</label>
                				<input type="text" readonly name="household_id" value="HH-{{date('y').'-'.date('mdHis')}}" class="form-control">
                			</div>
                		</div>
                		<div class="col-md-6">
                			<div class="form-group">
                				<label>Family Serial No. <span class="text-danger">*</span></label>
                				<input type="text" required name="family_serial" placeholder="Enter Family Serial No." class="form-control">
                			</div>
                		</div>
                	</div>
                   
                </div>
                
              
                </div>
                <span class="pull-right">
                    <a href="/household" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-success">Add Record</button>
                </span>
            </form>
   
@endsection
