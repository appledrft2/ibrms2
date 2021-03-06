@extends('layouts.master')
<?php $title = 'Judicial'; ?>
<?php $header = 'New Case'; ?>
@section('title',$title)
@section('header',$header)
@section('content')
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<div class="box">
   <form action="/judicial" method="POST" >
        @csrf
    <div class="box-header form-inline">
        <p>Case Details | Case No.: <input type="text" name="caseno" class="form-control"  readonly value="BCN-{{date('y').'-'.date('mdHis')}}"> | KP Form No.: <input name="kpformno" type="text" class="form-control"  readonly value="KP07-{{date('y').'-'.date('mdHis')}}"></p>
    </div>
    <div class="box-body">
     
    	<div class="row">
           <div class="col-md-6">
                <div class="form-group">
                       <label>Complainant <span class="req">*</span></label>
                       <select class="form-control select2" name="complainants[]" required >
                           <option>Select Complainant</option>
                           @if(count($residents))
                            @foreach($residents as $res)
                                <option value="{{$res->id}}">{{$res->firstname}} {{$res->middlename[0]}}. {{$res->lastname}}</option>
                            @endforeach
                           @endif
                       </select>
                   </div>
                   <div id="moreComplainants">
                    
                   </div>
                   <div class="">
                       <button type="button" class="btn btn-sm btn-primary" id="addmorec">Add Complainant</button>
                       <button type="button" class="btn btn-sm btn-danger hidden" id="removec">Remove</button>
                   </div>

                   <div class="form-group">
                       <label>Respondent <span class="req">*</span></label>
                       <select  class="form-control select2"  name="respondents[]" required >
                           <option>Select Repondents</option>
                           @if(count($residents))
                            @foreach($residents as $res)
                                <option value="{{$res->id}}">{{$res->firstname}} {{$res->middlename[0]}}. {{$res->lastname}}</option>
                            @endforeach
                           @endif
                       </select>
                   </div>
                   <input type="hidden" name="status" value="On-going">
                   <div id="moreRespondents">
                    
                   </div>
                   <div class="">
                       <button type="button" class="btn btn-sm btn-primary" id="addmore">Add Respondent</button>
                       <button type="button" class="btn btn-sm btn-danger hidden" id="remove">Remove</button>
                   </div>

           </div>
           <div class="col-md-6">
               <label>Complainant Details <span class="req">*</span></label>
               <textarea class="form-control" required cols=5 rows=5 name="details" placeholder="Enter Case Details"></textarea>
           </div>
        </div>
    </div>
    
    </div>
    <div class="pull-right">
        <a href="/judicial" class="btn btn-danger">Cancel</a>
        <button type="submit" class="btn btn-success"><i class="fa fa-gavel"></i> Add Case</button>
    </div>
</div>
</form>
@endsection
@section('script')

<script type="text/javascript">
    $(document).ready(function(){
        var i = x= 0;
        $('#addmore').click(function(){
            i++;
            x = i + 1;
            $('#moreRespondents').append('<div id="respondent'+i+'"><div class="form-group">                                              <select class="form-control select2" required name="respondents[]" required>                           <option>Select Repondents</option>                           @if(count($residents))                            @foreach($residents as $res)                                <option value="{{$res->id}}">{{$res->firstname}} {{$res->middlename[0]}}. {{$res->lastname}}</option>                            @endforeach                           @endif                       </select>                   </div></div>');
            $('#remove').removeClass('hidden');
            $('.select2').select2()

        });
        $('#remove').click(function(){
            
            if(i > 0){

                $('#respondent'+i).remove();
                i--;

                if(i == 0){
                    $('#remove').addClass('hidden');
                }
               
            }
        });

        var ii = xx= 0;
        $('#addmorec').click(function(){
            ii++;
            xx = ii + 1;
            $('#moreComplainants').append('<div id="complainant'+ii+'"><div class="form-group">                                              <select class="form-control select2" required name="complainants[]" required>                           <option>Select Complainant</option>                           @if(count($residents))                            @foreach($residents as $res)                                <option value="{{$res->id}}">{{$res->firstname}} {{$res->middlename[0]}}. {{$res->lastname}}</option>                            @endforeach                           @endif                       </select>                   </div></div>');
            $('#removec').removeClass('hidden');
            $('.select2').select2()

        });
        $('#removec').click(function(){
            
            if(ii > 0){

                $('#complainant'+ii).remove();
                ii--;

                if(ii == 0){
                    $('#removec').addClass('hidden');
                }
               
            }
        });
    });
</script>
@endsection
