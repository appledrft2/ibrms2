@extends('layouts.master')
<?php $title = 'Settings'; ?>
<?php $header = 'Lupon'; ?>
@section('title',$title)
@section('header',$header)
@section('content')
<div class="box">
  <div class="box-header">
    @if($lupons == null)
    <form method="POST" action="/lupon" enctype="multipart/form-data">
      @csrf
    <button class="btn btn-success">Save Lupon</button>
    </div>

    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 1 </label>
            <input  type="text" class="form-control" name="lupon1" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 2 </label>
            <input  type="text" class="form-control" name="lupon2" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 3 </label>
            <input  type="text" class="form-control" name="lupon3" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 4 </label>
            <input  type="text" class="form-control" name="lupon4" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 5 </label>
            <input  type="text" class="form-control" name="lupon5" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 6 </label>
            <input  type="text" class="form-control" name="lupon6" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 7 </label>
            <input  type="text" class="form-control" name="lupon7" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 8 </label>
            <input  type="text" class="form-control" name="lupon8" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 9 </label>
            <input  type="text" class="form-control" name="lupon9" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 10 </label>
            <input  type="text" class="form-control" name="lupon10" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 11 </label>
            <input  type="text" class="form-control" name="lupon11" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 12 </label>
            <input  type="text" class="form-control" name="lupon12" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 13 </label>
            <input  type="text" class="form-control" name="lupon13" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 14 </label>
            <input  type="text" class="form-control" name="lupon14" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 15 </label>
            <input  type="text" class="form-control" name="lupon15" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 16 </label>
            <input  type="text" class="form-control" name="lupon16" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 17 </label>
            <input  type="text" class="form-control" name="lupon17" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 18 </label>
            <input  type="text" class="form-control" name="lupon18" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 19 </label>
            <input  type="text" class="form-control" name="lupon19" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 20 </label>
            <input  type="text" class="form-control" name="lupon20" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 21 </label>
            <input  type="text" class="form-control" name="lupon21" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 22 </label>
            <input  type="text" class="form-control" name="lupon22" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 23 </label>
            <input  type="text" class="form-control" name="lupon23" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 24 </label>
            <input  type="text" class="form-control" name="lupon24" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 25 </label>
            <input  type="text" class="form-control" name="lupon25" placeholder="Enter Name">
          </div>
        </div>
      
      </div>
    </div>

    </form>
    @else
    <form method="POST" action="/lupon/{{$lupons->id}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
    <button class="btn btn-success">Update Lupon</button>
    </div>

    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 1 </label>
            <input value="{{$lupons->lupon1}}"  type="text" class="form-control" name="lupon1" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 2 </label>
            <input value="{{$lupons->lupon2}}"  type="text" class="form-control" name="lupon2" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 3 </label>
            <input value="{{$lupons->lupon3}}"  type="text" class="form-control" name="lupon3" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 4 </label>
            <input value="{{$lupons->lupon4}}"  type="text" class="form-control" name="lupon4" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 5 </label>
            <input value="{{$lupons->lupon5}}"  type="text" class="form-control" name="lupon5" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 6 </label>
            <input value="{{$lupons->lupon6}}"  type="text" class="form-control" name="lupon6" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 7 </label>
            <input value="{{$lupons->lupon7}}"  type="text" class="form-control" name="lupon7" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 8 </label>
            <input value="{{$lupons->lupon8}}"  type="text" class="form-control" name="lupon8" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 9 </label>
            <input value="{{$lupons->lupon9}}"  type="text" class="form-control" name="lupon9" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 10 </label>
            <input value="{{$lupons->lupon10}}"  type="text" class="form-control" name="lupon10" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 11 </label>
            <input value="{{$lupons->lupon11}}"  type="text" class="form-control" name="lupon11" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 12 </label>
            <input value="{{$lupons->lupon12}}"  type="text" class="form-control" name="lupon12" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 13 </label>
            <input value="{{$lupons->lupon13}}"  type="text" class="form-control" name="lupon13" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 14 </label>
            <input value="{{$lupons->lupon14}}"  type="text" class="form-control" name="lupon14" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 15 </label>
            <input value="{{$lupons->lupon15}}"  type="text" class="form-control" name="lupon15" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 16 </label>
            <input value="{{$lupons->lupon16}}"  type="text" class="form-control" name="lupon16" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 17 </label>
            <input value="{{$lupons->lupon17}}"  type="text" class="form-control" name="lupon17" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 18 </label>
            <input value="{{$lupons->lupon18}}"  type="text" class="form-control" name="lupon18" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 19 </label>
            <input value="{{$lupons->lupon19}}"  type="text" class="form-control" name="lupon19" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 20 </label>
            <input value="{{$lupons->lupon20}}"  type="text" class="form-control" name="lupon20" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 21 </label>
            <input value="{{$lupons->lupon21}}"  type="text" class="form-control" name="lupon21" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 22 </label>
            <input value="{{$lupons->lupon22}}"  type="text" class="form-control" name="lupon22" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 23 </label>
            <input value="{{$lupons->lupon23}}"  type="text" class="form-control" name="lupon23" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 24 </label>
            <input value="{{$lupons->lupon24}}"  type="text" class="form-control" name="lupon24" placeholder="Enter Name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Lupon 25 </label>
            <input value="{{$lupons->lupon25}}"  type="text" class="form-control" name="lupon25" placeholder="Enter Name">
          </div>
        </div>
      
      </div>
    </div>

    </form>
    @endif
  </div>
@endsection
