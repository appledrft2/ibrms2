@extends('layouts.master')
<?php $title = 'Dashboard'; ?>
<?php $header = 'Dashboard'; ?>
@section('title',$title)
@section('header',$header)
@section('content')
  <div class="row">

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Total Resident</span>
          <span class="info-box-number">{{$resident}}</span>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fa-gavel"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Unresolved Cases</span>
          <span class="info-box-number">{{$unresolved}}</span>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-plus-square"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Medical Cases</span>
          <span class="info-box-number">{{$resident}}</span>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-umbrella"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Disaster Cases</span>
          <span class="info-box-number">{{$resident}}</span>
        </div>
      </div>
    </div>

  </div>

  <div class="row">

    <div class="col-md-4">
       <div class="box">
        
        <div class="box-body">
          <h4>Barangay Officals</h4>
          @if($brgy)
          <div class="form-group">
            <label>Barangay Captain:</label>
            <p>Mr/Mrs. {{$brgy->captain}}</p>
          </div>
          <div class="form-group">
            <label>Barangay Secretary:</label>
            <p>Mr/Mrs. {{$brgy->secretary}}</p>
          </div>
          <div class="form-group">
            <label>Barangay Treasurer:</label>
            <p>Mr/Mrs. {{$brgy->treasurer}}</p>
          </div>
          @else
          <div class="form-group">
                <p class="text-center">There are no officials yet.</p>
          </div>
          @endif
        </div>
      </div>
      <div class="box">
       
        <div class="box-body">
          <h4>Purok/Areas</h4>
          <div class="table-responsive">
            <table class="table table-bordered" id="dtt3">
              <thead>
                <tr>
                  <th>Area name</th>
                  <th>Population</th>
                </tr>
              </thead>
              <tbody>
                @if($puroks)
                  @foreach($puroks as $prk)
                    <tr>
                      <td>Prk. {{$prk->prk_name}}</td>
                      <td>{{$prk->resi_address->count()}}</td>
                    </tr>
                  @endforeach
                @endif
              </tbody>
            </table>
          </div>
          
        </div>
      </div>

     

      <div class="box">
        <div class="box-header">
          System Information
        </div>
        <div class="box-body">
          <div class="text-center text-sm">
          IBRMS-Ver 2.2 <br>
          Integrated Barangay Records <br> Management System <br>
          @if($barangay != null)
          For Brgy. {{$barangay->name}},{{$barangay->city}} City,{{$barangay->province}}
          @endif
          </div>
        </div>
      </div>

    </div>

    <div class="col-md-8">
      <div class="box">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12 mb-1">
                <div class="box-body">
                  <div id='calendar'></div>
                </div>
            </div>
            <div class="col-md-12">
              <div class="box">
                <div class="box-body">
                  <div class="form-group">
                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-warning text-white "> New Event</button>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped" id="dtt1">
                      <thead>
                        <tr>
                          <th>Event Name</th>
                          <th>Date</th>
                          <th width="15%">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($events as $event)
                        <tr>
                          <td>{{$event->name}}</td>
                          <td>{{$event->date}}</td>
                          <td>
                              <form id="form{{$event->id}}" action="/event/{{$event->id}}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-sm btn-primary btn_edit" id="{{$event}}"><i class="fa fa-edit"></i></button>
                                <button type="submit" id="{{$event->id}}" class="btn btn-sm btn-danger btn_delete"><i class="fa fa-trash"></i> </button>
                              </form>
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
    </div>

  </div>
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
@endsection

@section('script')
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
      height: 'parent',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      defaultView: 'dayGridMonth',
      navLinks: false, // can click day/week names to navigate views
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
