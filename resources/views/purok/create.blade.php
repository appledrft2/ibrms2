@extends('layouts.master')
<?php $title = 'Settings'; ?>
<?php $header = 'New Purok'; ?>
@section('title',$title)
@section('header',$header)
@section('content')

            <div class="box">
            	<div class="box-header">
            		<h5>Purok Details: </h5>
            	</div>
            	<form action="/purok" method="POST">
            	@csrf
                <div class="box-body">

                	<div class="row">
                		<div class="col-md-6">
                			<div class="form-group">
                				<label>Purok ID Number:</label>
                				<input required type="text" readonly name="purok_id_num" value="{{'PRK-'.rand(10,99).'-'.rand(1111111111,9999999999)}}" class="form-control">
                			</div>
                		</div>
                		<div class="col-md-6">
                			<div class="form-group">
                				<label>Purok President <span class="text-danger">*</span></label>
                				<input required type="text"  name="prk_president" placeholder="Enter Purok President" class="form-control">
                			</div>
                		</div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purok Name <span class="text-danger">*</span></label>
                                <input required type="text"  name="prk_name" placeholder="Enter Purok Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purok Vice President <span class="text-danger">*</span></label>
                                <input required type="text"  name="prk_vice_pres" placeholder="Enter Purok Vice President" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purok Address <span class="text-danger">*</span></label>
                                <input required type="text"  name="prk_address" placeholder="Enter Purok Address" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purok Secretary <span class="text-danger">*</span></label>
                                <input required type="text"  name="prk_secretary" placeholder="Enter Purok Secretary" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Google Map </label>
                                <input  type="text"  name="prk_map" placeholder="Enter Purok Map" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purok Treasurer <span class="text-danger">*</span></label>
                                <input required type="text"  name="prk_treasurer" placeholder="Enter Purok Treasurer" class="form-control">
                            </div>
                        </div>
                	</div>
                   
                </div>
                
              
                </div>
                <div class="form-group pull-right">
                    <a href="/purok" class="btn btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-success">Add Record</button>
                </div>
            </form>
   
@endsection
