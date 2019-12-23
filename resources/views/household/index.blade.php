@extends('layouts.master')
<?php $title = 'Household'; ?>
@section('title',$title)
@section('content')
<div class="form-group">
    <a href="/household/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> New Household</a>
</div>
            <div class="card">

                <div class="card-body">
                	<div class="table-responsive">
                		<table id="dtt1" class="table table-hover table-striped table-bordered">
                			<thead>
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
                                    		<a href="/household/{{$household->id}}/edit" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>
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
