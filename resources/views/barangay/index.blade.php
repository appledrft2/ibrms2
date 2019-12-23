@extends('layouts.master')
<?php $title = 'Barangay'; ?>
@section('title',$title)
@section('content')
  <div class="card">
  	<div class="card-header">
  		<button class="btn btn-success">Update Profile</button>
  	</div>
  	<div class="card-body">
  		<div class="row">
  			<div class="col-md-6">
  				<div class="form-group">
  					<label>Barangay Name <span class="req">*</span></label>
  					<input type="text" class="form-control" name="name" placeholder="Enter Name">
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="form-group">
  					<label>Barangay Secretary <span class="req">*</span></label>
  					<input type="text" class="form-control" name="secretary" placeholder="Enter Secretary">
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="form-group">
  					<label>Barangay Captain <span class="req">*</span></label>
  					<input type="text" class="form-control" name="captain" placeholder="Enter Captain">
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="form-group">
  					<label>Barangay Treasurer <span class="req">*</span></label>
  					<input type="text" class="form-control" name="treasurer" placeholder="Enter Treasurer">
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="form-group">
  					<label>Barangay Kagawad 1 <span class="req">*</span></label>
  					<input type="text" class="form-control" name="kg1" placeholder="Enter Name">
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="form-group">
  					<label>Barangay Address <span class="req">*</span></label>
  					<textarea class="form-control" cols="5" name="address" placeholder="Enter Address"></textarea>
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="form-group">
  					<label>Barangay Kagawad 2 <span class="req">*</span></label>
  					<input type="text" class="form-control" name="kg2" placeholder="Enter Name">
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="form-group">
  					<label>City <span class="req">*</span></label>
  					<input type="text" class="form-control" name="city" placeholder="Enter City">
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="form-group">
  					<label>Barangay Kagawad 3 <span class="req">*</span></label>
  					<input type="text" class="form-control" name="kg3" placeholder="Enter Name">
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="form-group">
  					<label>Province <span class="req">*</span></label>
  					<input type="text" class="form-control" name="province" placeholder="Enter Province">
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="form-group">
  					<label>Barangay Kagawad 4 <span class="req">*</span></label>
  					<input type="text" class="form-control" name="kg4" placeholder="Enter Name">
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="form-group">
  					<label>Region <span class="req">*</span></label>
  					<input type="text" class="form-control" name="region" placeholder="Enter Region">
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="form-group">
  					<label>Barangay Kagawad 5 <span class="req">*</span></label>
  					<input type="text" class="form-control" name="kg5" placeholder="Enter Name">
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="form-group">
  					<label>Zip Code <span class="req">*</span></label>
  					<input type="text" class="form-control" name="zipcode" placeholder="Enter Zip Code">
  				</div>
  			</div>
  			<div class="col-md-6">
  				<div class="row">
  					<div class="col-12">
  						<div class="form-group">
  							<label>Barangay Kagawad 6 <span class="req">*</span></label>
  							<input type="text" class="form-control" name="kg6" placeholder="Enter Name">
  						</div>
  					</div>
  					<div class="col-12">
  						<div class="form-group">
  							<label>Barangay Kagawad 7 <span class="req">*</span></label>
  							<input type="text" class="form-control" name="kg7" placeholder="Enter Name">
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
@endsection