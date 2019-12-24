@extends('layouts.master')
<?php $title = 'Purok'; ?>
@section('title',$title)
@section('content')

            <div class="card">
            	<div class="card-header">
            		<h5>Purok Details: </h5>
            	</div>
            	<form action="/household" method="POST">
            	@csrf
                <div class="card-body">

                	<div class="row">
                		<div class="col-md-6">
                			<div class="form-group">
                				<label>Purok ID Number:</label>
                				<input type="text" readonly name="household_id" value="{{'PRK-'.rand(10,99).'-'.rand(1111111111,9999999999)}}" class="form-control">
                			</div>
                		</div>
                		<div class="col-md-6">
                			<div class="form-group">
                				<label>Purok President <span class="text-danger">*</span></label>
                				<input type="text"  name="family_serial" placeholder="Enter Purok President" class="form-control">
                			</div>
                		</div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purok Name <span class="text-danger">*</span></label>
                                <input type="text"  name="family_serial" placeholder="Enter Purok President" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purok Vice President <span class="text-danger">*</span></label>
                                <input type="text"  name="family_serial" placeholder="Enter Purok President" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purok Address <span class="text-danger">*</span></label>
                                <input type="text"  name="family_serial" placeholder="Enter Purok President" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purok Secretary <span class="text-danger">*</span></label>
                                <input type="text"  name="family_serial" placeholder="Enter Purok President" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Google Map <span class="text-danger">*</span></label>
                                <input type="text"  name="family_serial" placeholder="Enter Purok President" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purok Treasurer <span class="text-danger">*</span></label>
                                <input type="text"  name="family_serial" placeholder="Enter Purok President" class="form-control">
                            </div>
                        </div>
                	</div>
                   
                </div>
                
              
                </div>
                <div class="form-group float-right">
                    <a href="/purok" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-success">Add Record</button>
                </div>
            </form>
   
@endsection
