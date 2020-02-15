@extends('layouts.master')
<?php $title = 'User Profile'; ?>
<?php $header = 'User Profile'; ?>
@section('title',$title)
@section('header',$header)
@section('content')
    <div class="box">
        <div class="box-header">User Information</div>
        <div class="box-body">
                <div class="row">
      <div class="col-md-6">
        <div class="card">
          
          <div class="card-body">
            <form method="POST" action="/dashboard/profile/{{Auth::user()->id}}" enctype="multipart/form-data">
              @method("PATCH")
              @csrf
              <div class="form-group">
                <label>Full name</label>
                <input type="text" class="form-control form-control-sm" name="name" value="{{Auth::user()->name}}">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control form-control-sm" name="email" value="{{Auth::user()->email}}">
              </div>
              <div class="form-group">
                <button class="btn btn-default"><i class="fa fa-save"></i> Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div class='alert alert-info' role='alert'><i class='fa fa-key'></i> Leave the password field empty if you don't want to change.</div>
            <form method="POST" action="/dashboard/profile/{{Auth::user()->id}}/password">
              @method("PATCH")
              @csrf
              <div class="form-group">
                <label>New Password</label>
                <input type="password" class="form-control form-control-sm" name="password" value="">
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control form-control-sm" name="password_confirmation" value="">
              </div>
              <div class="form-group">
                <button class="btn btn-default"><i class="fa fa-save"></i> Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

        </div>
    </div>
@endsection
