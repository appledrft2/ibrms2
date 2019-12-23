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
          <div class="text-value">7</div>
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
              
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              System Information
            </div>
            <div class="card-body">
              
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
          
        </div>
      </div>
    </div>

    
  </div>
@endsection