@extends('layouts.adminlte3')
@section('header','Manage Resident')
@section('content')

            <div class="card">
                <div class="card-header">
                	<span class="float-left"><a href="/resident/create" class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i> New Resident</a></span>
                	<span class="float-right"><a class="btn btn-default"><i class="fa fa-print"></i> Print Record</a></span>
                </div>

                <div class="card-body">
                	<div class="table-responsive">
                		<table id="dtt1" class="table table-hover table-bordered">
                			<thead style="background-color: #343a40;color:white">
                				<tr>
                					<th>Resident ID No.</th>
                					<th>Fullname</th>
                					<th>Gender</th>
                

                					<th>Contact</th>
                                    <th>Street</th>
                                    <th>Purok</th>
                					<th>Action</th>
                				</tr>
                			</thead>
                			<tbody>
                				@if(count($residents))
                					@foreach($residents as $resident)
                						<tr>
                							<td width="15%">{{$resident->residentid}}</td>
                							<td>{{$resident->firstname}}</td>
                							<td>{{$resident->gender}}</td>                	
                							<td>{{$resident->address->contactno}}</td>
                                            <td>{{$resident->address->street}}</td>
                                            <td>{{$resident->address->purok}}</td>

                							<td align="center">        
		                                    	<div class="form-inline">
		                                    		<a href="/resident/{{$resident->id}}/edit" class="btn btn-info btn-sm mr-1"><i class="fa fa-edit"></i></a>
		                                    		<form id="form{{$resident->id}}" method="POST" action="/resident/{{$resident->id}}" >
		                                    			@csrf
		                                    			@method('delete')
		                                			<button type="submit" id="{{$resident->id}}" class="btn btn-danger btn-sm btn_delete"><i class="fa fa-trash"></i></button>
		                                    	</div>
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
