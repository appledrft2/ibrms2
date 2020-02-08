@extends('layouts.master')
<?php $title = 'Judicial'; ?>
<?php $header = 'Update Case'; ?>
@section('title',$title)
@section('header',$header)
@section('content')
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<div class="box">
   <form action="/judicial/{{$judicial->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="box-header form-inline">
        <p>Case Details | Case No.: <input type="text" name="caseno" class="form-control"  readonly value="{{$judicial->caseno}}"> | KP Form No.: <input name="kpformno" type="text" class="form-control"  readonly value="{{$judicial->kpformno}}"></p>
    </div>
    <div class="box-body">
    	<div class="row">
           <div class="col-md-6">
                <div class="form-group">
                       <label >Complainant <span class="req">*</span></label>
                       @if(count($complainants) > 0)
                        @foreach($complainants as $comp)
                          <div id="cp{{$comp->id}}" class="form-group ">
                            <select required class="form-control select2" name="complainants[]">
                                <option>Select Complainants</option>
                                @if(count($residents))
                                 @foreach($residents as $res)
                                     <option @if($comp->resident_id == $res->id) selected @endif value="{{$res->id}}">{{$res->firstname}} {{$res->middlename[0]}}. {{$res->lastname}}</option>
                                 @endforeach
                                @endif
                            </select>
                              <button type="button" class="btn btn-danger btn-sm mt-1 remove_existing_comp" id="{{$comp->id}}">remove</button>
                          </div>
                        @endforeach
                       @endif
                </div>
                <div id="moreComplainants">
                 
                </div>

                <div class="">
                    <button type="button" class="btn btn-sm btn-primary" id="addmorec">Add Complainant</button>
                    <button type="button" class="btn btn-sm btn-danger hidden" id="removec">Remove</button>
                </div>

                   <div class="form-group">
                       <label>Respondent <span class="req">*</span></label>
                       @if(count($respondents) > 0)
                        @foreach($respondents as $resp)
                          <div id="rp{{$resp->id}}" class="form-group ">
                            <select required class="form-control select2" name="respondents[]">
                                <option>Select Repondents</option>
                                @if(count($residents))
                                 @foreach($residents as $res)
                                     <option @if($resp->resident_id == $res->id) selected @endif value="{{$res->id}}">{{$res->firstname}} {{$res->middlename[0]}}. {{$res->lastname}}</option>
                                 @endforeach
                                @endif
                            </select>
                              <button type="button" class="btn btn-danger btn-sm mt-1 remove_existing_resp" id="{{$resp->id}}">remove</button>
                          </div>
                        @endforeach
                       @endif
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
               <textarea class="form-control" required cols=5 rows=5 name="details" placeholder="Enter Details">{{$judicial->details}}</textarea>
           </div>

        </div>
    </div>
   
</div>
<div class="pull-right">
    <div class="form-group">
      <a href="/judicial" class="btn btn-danger">Cancel</a>
    <button type="submit" class="btn btn-primary"><i class="fa fa-gavel"></i> Update Case</button>
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
    });

    $(document).on('click','.remove_existing_resp',function(){
      var id = $(this).attr('id');
      
      $('#rp'+id).remove();
    });

    
</script>

<script type="text/javascript">
  var i = x= 0;
      $('#addmorec').click(function(){
          i++;
          x = i + 1;
          $('#moreComplainants').append('<div id="complainant'+i+'"><div class="form-group">                                              <select class="form-control select2" required name="complainants[]" required>                           <option>Select Complainants</option>                           @if(count($residents))                            @foreach($residents as $res)                                <option value="{{$res->id}}">{{$res->firstname}} {{$res->middlename[0]}}. {{$res->lastname}}</option>                            @endforeach                           @endif                       </select>                   </div></div>');
          $('#removec').removeClass('hidden');
          $('.select2').select2()

      });

      $('#removec').click(function(){
          
          if(i > 0){

              $('#complainant'+i).remove();
              i--;

              if(i == 0){
                  $('#removec').addClass('hidden');
              }
             
          }
      });


  $(document).on('click','.remove_existing_comp',function(){
    var id = $(this).attr('id');
    
    $('#cp'+id).remove();
 
  });
</script>
@endsection
