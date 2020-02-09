@extends('layouts.master')
<?php $title = 'Judicial'; ?>
<?php $header = 'View KP09'; ?>
@section('title',$title)
@section('header',$header)
@section('content')
	{{$judicial_Kp09->id}} id - jid
	{{$judicial_Kp09->judicial_id}} print
@endsection
