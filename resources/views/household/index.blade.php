@extends('layouts.adminlte3')
@section('header','Manage Household')
@section('content')

            <div class="card">
                <div class="card-header">
                	<span class="float-left"><a href="/household/create" class="btn btn-success btn-sm"><i class="fa fa-plus-circle"></i> New Household</a></span>
                	<span class="float-right"><a class="btn btn-default"><i class="fa fa-print"></i> Print Record</a></span>
                </div>

                <div class="card-body">
                	<div class="table-responsive">
                		<table id="dtt1" class="table table-hover table-bordered">
                			<thead style="background-color: #343a40;color:white">
                				<tr>
                					<th>Household ID No.</th>
                					<th>Family Serial No.</th>
<!--                 					<th>Created at</th> -->
                					<th>Action</th>
                				</tr>
                			</thead>
                			<tbody>
                				@if(count($households))

                				@foreach($households as $household)
                				<tr>
	            					<td>{{$household->household_id}}</td>
	            					<td>{{$household->family_serial}}</td>
<!-- 	            					<td>{{$household->created_at->isoFormat('Y-M-D, h:mm:ss a')}}</td> -->
	            					<td align="center">        
                                    	<div class="form-inline">
                                    		<a href="/household/{{$household->id}}/edit" class="btn btn-info btn-sm mr-1"><i class="fa fa-edit"></i></a>
                                    		<form id="form{{$household->id}}" method="POST" action="/household/{{$household->id}}" >
                                    			@csrf
                                    			@method('delete')
                                			<button type="submit" id="{{$household->id}}" class="btn btn-danger btn-sm btn_delete"><i class="fa fa-trash"></i></button>
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
