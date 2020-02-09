@extends('layouts.master')
<?php $title = 'Judicial'; ?>
<?php $header = 'View KP08'; ?>
@section('title',$title)
@section('header',$header)
@section('content')
	{{$judicial_Kp08->id}} id - jid
	{{$judicial_Kp08->judicial_id}} print
@endsection
