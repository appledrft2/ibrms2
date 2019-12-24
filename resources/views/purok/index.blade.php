@extends('layouts.master')
<?php $title = 'Purok'; ?>
@section('title',$title)
@section('content')
<div class="form-group">
    <a href="/purok/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> New Purok</a>
</div>
            <div class="card">

                <div class="card-body">
                	<div class="table-responsive">
                		<table id="dtt1" class="table table-hover table-striped table-bordered">
                			<thead>
                				<tr>
                					<th>Purok Name</th>
                					<th>Address</th>
                					<th>Officials</th>
                					<th>Action</th>
                				</tr>
                			</thead>
                			<tbody>
                				
                			</tbody>
                		</table>
                	</div>
                </div>
            </div>
@endsection
