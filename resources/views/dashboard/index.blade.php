@extends('layouts.master')
<?php $title = 'Dashboard'; ?>
@section('title',$title)
@section('content')
  <div class="row">
    <div class="col-sm-6 col-lg-3">
      <div class="card text-white bg-info">
        <div class="card-body pb-0">
          <button class="btn btn-transparent p-0 float-right" type="button">
            <i class="icon-location-pin"></i>
          </button>
          <div class="text-value">9.823</div>
          <div>Members online</div>
        </div>
        <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
          <canvas class="chart" id="card-chart2" height="70"></canvas>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-3">
      <div class="card text-white bg-warning">
        <div class="card-body pb-0">
          <button class="btn btn-transparent p-0 float-right" type="button">
            <i class="icon-location-pin"></i>
          </button>
          <div class="text-value">9.823</div>
          <div>Members online</div>
        </div>
        <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
          <canvas class="chart" id="card-chart2" height="70"></canvas>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-3">
      <div class="card text-white bg-success">
        <div class="card-body pb-0">
          <button class="btn btn-transparent p-0 float-right" type="button">
            <i class="icon-location-pin"></i>
          </button>
          <div class="text-value">9.823</div>
          <div>Members online</div>
        </div>
        <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
          <canvas class="chart" id="card-chart2" height="70"></canvas>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-3">
      <div class="card text-white bg-danger">
        <div class="card-body pb-0">
          <button class="btn btn-transparent p-0 float-right" type="button">
            <i class="icon-location-pin"></i>
          </button>
          <div class="text-value">9.823</div>
          <div>Members online</div>
        </div>
        <div class="chart-wrapper mt-3 mx-3" style="height:70px;">
          <canvas class="chart" id="card-chart2" height="70"></canvas>
        </div>
      </div>
    </div>

    
  </div>
@endsection