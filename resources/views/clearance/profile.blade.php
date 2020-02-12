@extends('layouts.master')
<?php $title = 'Resident'; ?>
<?php $header = 'Resident Profile'; ?>
@section('title',$title)
@section('header',$header)
@section('content')

    <div class="box">
        <div class="box-header">
            <div class="pull-left">
                Resident Profile | ID Number: {{$resident->residentid}}
            </div>
            <div class="pull-right">
                <a href="/resident" class="btn btn-default">Go Back </a> 
            </div>
        </div>
        <div class="box-body mb-3">
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

    <div class="box">
          <div class="box-body">
            @if($case)
              <div class="form-group">
                  <div class="alert alert-danger" role="alert">
                    <i class="fa fa-warning"></i> This resident has an existing judicial case! Clearance Issuance has been disabled for this resident.<br> Case ID: {{$case->caseno}} . <u><a href="/judicial/{{$case->id}}">Visit</a></u>
                  </div>
              </div>  
            @endif
            <div class="form-group mt-1">
                <a href="/resident/{{$resident->id}}/clearance/create"><button  @if($case) disabled @endif class="btn btn-success"><i class="fa fa-plus-circle"></i> Issue Clearance</button></a>
            </div>

            
            <div class="table-responsive mt-3">
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
                                            <td>        
                                                <form id="form{{$clearance->id}}" method="POST" action="/resident/{{$resident->id}}/clearance/{{$clearance->id}}" >
                                                        @csrf
                                                        @method('delete')
                                                    <a title="Edit Resident" href="/resident/{{$resident->id}}/clearance/{{$clearance->id}}" class="btn btn-success btn-sm mr-1"><i class="fa fa-print"></i></a>
                                                    <a title="Edit Resident" href="/resident/{{$resident->id}}/clearance/{{$clearance->id}}/edit" class="btn btn-primary btn-sm mr-1"><i class="fa fa-edit"></i></a>
                                                    <button title="Delete Clearance" type="submit" id="{{$clearance->id}}" class="btn btn-danger btn-sm btn_delete"><i class="fa fa-trash"></i></button>
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
          </div>
           
        </div>

@endsection
