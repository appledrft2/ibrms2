@extends('layouts.master')
<?php $title = 'Household'; ?>
@section('title',$title)
@section('content')

            <div class="card">
            	<div class="card-header">
            		<h5>Household Details: <i class="fa fa-question-circle mr-1" title="Household ID No. is automatically generated"></i></h5>
            	</div>
            	<form action="/household" method="POST">
            	@csrf
                <div class="card-body">

                	<div class="row">
                		<div class="col-md-6">
                			<div class="form-group">
                				<label>Household ID:</label>
                				<input type="text" readonly name="household_id" value="{{'HH-'.rand(10,99).'-'.rand(1111111111,9999999999)}}" class="form-control">
                			</div>
                		</div>
                		<div class="col-md-6">
                			<div class="form-group">
                				<label>Family Serial No. <span class="text-danger">*</span></label>
                				<input type="text"  name="family_serial" placeholder="Enter Family Serial No." class="form-control">
                			</div>
                		</div>
                	</div>
                   
                </div>
                
              
                </div>
                <span class="float-right">
                    <a href="/household" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-success">Add Record</button>
                </span>
            </form>
   
@endsection
