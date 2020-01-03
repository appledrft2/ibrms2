@extends('layouts.master')
<?php $title = 'Dashboard'; ?>
@section('title',$title)
@section('content')
  <div class="row">
    <div class="col-sm-6 col-lg-3">
      <div class="card text-white bg-info">
        <div class="card-body pb-0">
          <span class=" p-0 float-right mb-5">
            <i class="fa fa-users" style="font-size: 5em;"></i>
          </span>
          <div class="text-value">{{$resident}}</div>
          <div>Total Residents</div>
        </div>
       
      </div>
    </div>
    <div class="col-sm-6 col-lg-3">
      <div class="card text-white bg-warning">
        <div class="card-body pb-0">
          <span class=" p-0 float-right mb-5">
            <i class="fa fa-gavel" style="font-size: 5em;"></i>
          </span>
          <div class="text-value">2</div>
          <div>Unresolved Cases</div>
        </div>

      </div>
    </div>
    <div class="col-sm-6 col-lg-3">
      <div class="card text-white bg-danger">
        <div class="card-body pb-0">
          <span class=" p-0 float-right mb-5">
            <i class="fa fa-plus-square" style="font-size: 5em;"></i>
          </span>
          <div class="text-value">3</div>
          <div>Medical Cases</div>
        </div>
       
      </div>
    </div>
    <div class="col-sm-6 col-lg-3">
      <div class="card text-white bg-success">
        <div class="card-body pb-0">
          <span class=" p-0 float-right mb-5">
            <i class="fa fa-umbrella" style="font-size: 5em;"></i>
          </span>
          <div class="text-value">2</div>
          <div>Disaster Cases</div>
        </div>
       
      </div>
    </div>

    <div class="col-4">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              Quick Links
            </div>
            <div class="card-body">
              <a href="/resident/create" class="btn btn-primary btn-block"> Add New Resident</a>
              <a href="/resident/create" class="btn btn-success btn-block"> Issue Resident Clearance</a>
              <a href="/resident/create" class="btn btn-danger btn-block"> Issue Business Clearance</a>
              <button data-toggle="modal" data-target="#exampleModal" class="btn btn-warning text-white btn-block"> New Event</button>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              System Information
            </div>
            <div class="card-body">
              <div class="text-center text-sm">
          		IBRMS-Ver 2.2 <br>
          		Integrated Barangay Records <br> Management System <br>
          		For Brgy. {{$barangay->name}},{{$barangay->city}} City,{{$barangay->province}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-8">
      <div class="card">
        <div class="card-header">
          Upcoming Events
        </div>
        <div class="card-body">
          <div class="row">
          	<div class="col-12 mb-1">
          		<div id='calendar'></div>
          	</div>
          	<div class="col-12 mt-1">

          		<div class="table-responsive">
          			<table class="table table-bordered table-striped" id="dtt1">
          				<thead>
          					<tr>
          						<th>Event Name</th>
          						<th>Date</th>
          						<th>Actions</th>
          					</tr>
          				</thead>
          				<tbody>
          					@foreach($events as $event)
          					<tr>
          						<td>{{$event->name}}</td>
          						<td>{{$event->date}}</td>
          						<td class="text-center">
          							<div class="form-inline">
          								<button class="btn btn-primary btn_edit mr-1" id="{{$event}}"><i class="fa fa-edit"></i></button>
          								<form id="form{{$event->id}}" style="padding: 0px;margin: 0px;" action="/event/{{$event->id}}" method="POST" >
          									@csrf
          									@method('DELETE')

          									<button type="submit" id="{{$event->id}}" class="btn btn-danger btn_delete"><i class="fa fa-trash"></i> </button>
          								</form>
          							</div>
          						</td>
          					</tr>
          					@endforeach
          					
          				</tbody>
          			</table>
          		</div>
          	</div>
          </div>
          
        </div>

      </div>
    </div>

    
  </div>
@endsection
<!-- Add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="POST" action="/event">
      		@csrf
        <div class="form-group">
        	<label>Event Name</label>
        	<input type="text" class="form-control" name="name" placeholder="Enter Name">
        </div>
        <div class="form-group">
        	<label>Date</label>
        	<input type="date" class="form-control" name="date">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Add Event</button>
    	</form>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="edit_field">
      	
      </div>
    </div>
  </div>
</div>
@section('script')
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      height: 'parent',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      defaultView: 'dayGridMonth',
      navLinks: true, // can click day/week names to navigate views
      editable: false,
      eventLimit: true,
      events: [
        @foreach($events as $event)
        	        {
        	        title: '{{$event->name}}',
        	        start: '{{$event->date}}',
        			// end            : '2020-01-01',
        			allDay         : true,
        			textColor: 'white',
        			backgroundColor: '#4dbd74',
        			borderColor    : '#4dbd74',
        	        },
        @endforeach
      ]
    });

    calendar.render();
  });

  $(document).on('click','.btn_edit',function(){
  	let data = $(this).attr('id');
  	data = JSON.parse(data);
  	$('#edit_field').html('<div class="modal-body"><form method="POST" action="/event/'+data.id+'" id="editForm">@csrf @method("PUT")<div class="form-group"><label>Event Name</label><input type="text" class="form-control" name="name" value="'+data.name+'" placeholder="Enter Name"></div><div class="form-group"><label>Date</label><input type="date" value="'+data.date+'" class="form-control" name="date"></div></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="submit" class="btn btn-primary btn_update">Update Event</button> </div></form>');
  	$('#editModal').modal('show');
  });

   $(document).on('click','.btn_update',function(){
   	$('#editForm').submit();
   });
</script>
@endsection


      		