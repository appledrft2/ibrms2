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
                				@if(count($puroks) >= 0)
                                    @foreach($puroks as $purok)

                                        <tr>
                                            <td>{{$purok->prk_name}}</td>
                                            <td>{{$purok->prk_address}}</td>
                                            <td>
                                                <b>President:</b> {{$purok->prk_president}}<br>
                                                <b>V-President:</b> {{$purok->prk_vice_pres}}<br>
                                                <b>Secretary:</b> {{$purok->prk_secretary}}<br>
                                                <b>Treasurer:</b> {{$purok->prk_treasurer}}<br>
                                            </td>
                                            <td align="center">        
                                                <div class="form-inline">
                                                    <a href="/purok/{{$purok->id}}/edit" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>
                                                    <form id="form{{$purok->id}}" method="POST" action="/purok/{{$purok->id}}" >
                                                        @csrf
                                                        @method('delete')
                                                    <button type="submit" id="{{$purok->id}}" class="btn btn-danger btn-sm btn_delete"><i class="fa fa-trash"></i></button>
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
