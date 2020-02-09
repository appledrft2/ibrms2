@extends('layouts.master')
<?php $title = 'Resident'; ?>
<?php $header = 'View Clearance'; ?>
@section('title',$title)
@section('header',$header)
@section('content')
	Resident ID :{{$resident->id}} <br>
	Clearance ID :{{$clearance->id}} 
@endsection
