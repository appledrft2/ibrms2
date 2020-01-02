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
              <a href="/resident/create" class="btn btn-warning text-white btn-block"> New Event</a>
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
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2020-01-01',
        }
      ]
    });

    calendar.render();
  });

</script>
@endsection