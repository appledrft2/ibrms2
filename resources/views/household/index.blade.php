@extends('layouts.master')
<?php $title = 'Household'; ?>
<?php $header = 'Manage Household'; ?>
@section('title',$title)
@section('header',$header)
@section('content')

            <div class="box">                
                <div class="box-body">
                    <div class="form-group">
                        <a href="/household/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> New Household</a>
                    </div>
                	<div class="table-responsive">
                		<table id="tablebtn" class="table table-hover table-striped table-bordered">
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
	            					<td >        
                                		
                                		<form id="form{{$household->id}}" method="POST" action="/household/{{$household->id}}" >
                                			@csrf
                                			@method('delete')
                                        <a href="/household/{{$household->id}}/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                            			<button type="submit" id="{{$household->id}}" class="btn btn-danger btn-sm btn_delete"><i class="fa fa-trash"></i></button>
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

@section('script')

<script type="text/javascript">
  // DataTable initialisation
  $('#tablebtn').DataTable({
      "dom": 'Bfrtilp',
      buttons: [
          {
            extend: 'copy',
            exportOptions: {
              columns: [ 0,1]
            }
          },
          {
            extend: 'excel',
            exportOptions: {
              columns: [ 0,1]
            }
          },
          {
            extend: 'csv',
            exportOptions: {
              columns: [ 0,1]
            }
          },
          {
            extend: 'pdf',
            exportOptions: {
              columns: [ 0,1]
            }
          },
          {
            extend: 'print',
            exportOptions: {
              columns: [ 0,1]
            }
          }

      ]


  });
</script>
@endsection