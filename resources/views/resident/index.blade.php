@extends('layouts.master')
<?php $title = 'Resident'; ?>
<?php $header = 'Manage Residents'; ?>
@section('title',$title)
@section('header',$header)
@section('content')
    <div class="box">
        <div class="box-body">
            <div class="form-group">
                <a href="/resident/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> New Resident</a>
            </div>
        	<div class="table-responsive">
        		<table id="dtt1" class="table table-hover table-bordered">
        			<thead >
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
        							<td>        
                                    		<form id="form{{$resident->id}}" method="POST" action="/resident/{{$resident->id}}" >
                                    			@csrf
                                    			@method('delete')
                                            <a href="/resident/{{$resident->id}}/clearance" title="View Profile" class="btn btn-success btn-sm mr-1"><i class="fa fa-user"></i></a>
                                            <a title="Edit Resident" href="/resident/{{$resident->id}}/edit" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>
                                			<button title="Delete Resident" type="submit" id="{{$resident->id}}" class="btn btn-danger btn-sm btn_delete"><i class="fa fa-trash"></i></button>
                                    </form>
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
