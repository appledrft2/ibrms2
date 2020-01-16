@extends('layouts.master')
<?php $title = 'Judicial'; ?>
@section('title',$title)
@section('content')
<div class="form-group">
    <a href="/judicial/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New Case</a>
</div>
            <div class="card">
                

                <div class="card-body">
                	<div class="table-responsive">
                		<table id="dtt1" class="table table-hover table-bordered">
                			<thead >
                				<tr>
                					
                                    <th>Case No.</th>
                					<th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                				</tr>
                			</thead>
                			<tbody>
                                @if(count($judicials))
                                    @foreach($judicials as $judicial)
                                    <tr>
                                        <td>{{$judicial->caseno}}</td>
                                        <td>{{$judicial->created_at->isoformat('Y-m-d')}}</td>
                                        <td>
                                            @if($judicial->status == 'resolved')
                                            <span class="badge badge-success">Resolved</span>
                                            @else
                                            <span class="badge badge-warning">On-going</span>
                                            @endif
                                        </td>
                                        <td class="text-center" width="15%">
                                            <div class="form-inline">
                                                <a href="/judicial/{{$judicial->id}}" class="btn mr-1 btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                                <a href="/judicial/{{$judicial->id}}/edit" class="btn mr-1  btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                <form id="form{{$judicial->id}}" method="POST" action="/judicial/{{$judicial->id}}" >
                                                            @csrf
                                                            @method('delete')
                                                        <button title="Delete Case" type="submit" id="{{$judicial->id}}" class="btn btn-danger btn-sm btn_delete"><i class="fa fa-trash"></i></button>
                                                  
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            </tbody>
                		</table>
                	</div>
                </div>
            </div>
@endsection