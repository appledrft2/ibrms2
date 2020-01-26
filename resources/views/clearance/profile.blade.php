@extends('layouts.master')
<?php $title = 'Clearance'; ?>
@section('title',$title)
@section('content')
    <div class="card">
        <div class="card-header">
            Resident Profile | ID Number: {{$resident->residentid}}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <center>
                        <img src="http://localhost/coreui/img/avatars/male.png" alt="" width="100">
                    </center>
                </div>
                <div class="col-md-6">
                    <div class="mt-3">
                        {{$resident->firstname}}
                        {{$resident->middlename[0]}}.
                        {{$resident->lastname}}
                        <br>
                        {{$resident->dob}} , <?php
                            $now = date('Y');
                            $dob = date('Y', strtotime($resident->dob));
                            $age = $now - $dob;
                            echo $age.' Years old';
                        ?>  
                        <br>
                        {{$resident->address->street}} Street, Brgy. {{$resident->address->purok->prk_name}} , {{$resident->address->city}} City
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Resident Clearance Requests</div>
        <div class="card-body">
            <div class="form-group">
                <a href="/resident/{{$resident->id}}/clearance/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> Issue Clearance</a>
            </div>
            <div class="table-responsive">
                		<table id="dtt1" class="table table-hover table-striped table-bordered">
                			<thead>
                				<tr>
									<th>Clearance ID No.</th>
									<th>Purpose</th>
									<th>Date Issued</th>
									<th>Valid Until</th>
									<th>Action</th>
								</tr>
                			</thead>
                			<tbody>
                                @if(count($resident->clearances))
                                    @foreach($resident->clearances as $clearance)
                                        <tr>
                                            <td>{{$clearance->ornum}}</td>
                                            <td>{{$clearance->purpose}}</td>
                                            <td>{{$clearance->date_issued}}</td>
                                            <td>{{$clearance->date_valid}}</td>
                                            <td align="center" width="15%">        
                                                <div class="form-inline">
                                                    
                                                    <a title="Edit Resident" href="/resident/{{$resident->id}}/clearance/{{$clearance->id}}" class="btn btn-success btn-sm mr-1"><i class="fa fa-print"></i></a>
                                                    <a title="Edit Resident" href="/resident/{{$resident->id}}/clearance/{{$clearance->id}}/edit" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>
                                                <form id="form{{$clearance->id}}" method="POST" action="/resident/{{$resident->id}}/clearance/{{$clearance->id}}" >
                                                        @csrf
                                                        @method('delete')
                                                    <button title="Delete Clearance" type="submit" id="{{$clearance->id}}" class="btn btn-danger btn-sm btn_delete"><i class="fa fa-trash"></i></button>
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
