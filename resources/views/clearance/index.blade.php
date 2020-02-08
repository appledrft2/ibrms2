@extends('layouts.master')
<?php $title = 'Resident'; ?>
<?php $header = 'Resident Profile'; ?>
@section('title',$title)
@section('header',$header)
@section('content')
            <div class="box">
                <div class="box-body">
                	<div class="table-responsive">
                		<table id="dtt1" class="table table-hover table-striped table-bordered">
                			<thead>
                				<tr>
									<th>Resident ID No.</th>
									<th>Fullname</th>
									<th>Gender</th>
									<th>DOB</th>
									<th>Action</th>
								</tr>
                			</thead>
                			<tbody>
        				@if(count($residents))
        					@foreach($residents as $resident)
        						<tr>
        							<td width="15%">{{$resident->residentid}}</td>
        							<td>{{$resident->firstname}} {{$resident->middlename[0]}}. {{ $resident->lastname}}</td>
        							<td>{{$resident->gender}}</td>                	
                                    <td>{{date('M d, Y', strtotime($resident->dob))}}</td>
        							<td align="center" width="15%">        
									<a href="/resident/{{$resident->id}}/clearance" title="View Clearance" class="btn btn-success btn-sm "><i class="fa fa-search"></i> View Clearances</a>
	                                </td>
        						</tr>
        					@endforeach
        				@else

        				@endif
        			</tbody>
                		</table>
                	</div>
                </div>
            </div>
@endsection
