@extends('layouts.master')
<?php $title = 'Judicial'; ?>
@section('title',$title)
@section('content')
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<div class="card">
   <form action="/judicial" method="POST" >
        @csrf
    <div class="card-header form-inline">
        <p>Case Details | Case No.: <input type="text" name="caseno" class="form-control"  readonly value="BCN-{{rand(10,99)}}-{{rand(1111111111,9999999999)}}"> | KP Form No.: <input name="kpformno" type="text" class="form-control"  readonly value="PK07-{{rand(10,99)}}-{{rand(1111111111,9999999999)}}"></p>
    </div>
    <div class="card-body">
     
    	<div class="row">
           <div class="col-6">
                <div class="form-group">
                       <label>Complainant <span class="req">*</span></label>
                       <select class="form-control select2" required name="resident_id">
                           <option>Select Complainant</option>
                           @if(count($residents))
                            @foreach($residents as $res)
                                <option value="{{$res->id}}">{{$res->firstname}} {{$res->middlename[0]}}. {{$res->lastname}}</option>
                            @endforeach
                           @endif
                       </select>
                   </div>

                   <div class="form-group">
                       <label>Respondent <span class="req">*</span></label>
                       <select required class="form-control select2"  name="respondents[]">
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
                       <button type="button" class="btn btn-primary" id="addmore">Add Respondent</button>
                       <button type="button" class="btn btn-danger hidden" id="remove">Remove</button>
                   </div>

           </div>
           <div class="col-6">
               <label>Complainant Details <span class="req">*</span></label>
               <textarea class="form-control" required cols=5 rows=5 name="details" placeholder="Enter Details"></textarea>
           </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="float-right">
            <a href="/judicial" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-success"><i class="fa fa-gavel"></i> Add Case</button>
        </div>
      </div>
    </div>
</div>
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
    });
</script>
@endsection