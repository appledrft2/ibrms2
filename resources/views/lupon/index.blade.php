@extends('layouts.master')
<?php $title = 'Settings'; ?>
<?php $header = 'Lupon'; ?>
@section('title',$title)
@section('header',$header)
@section('content')
<div class="box">
  <div class="box-header">
    <div style="float:right !important">
      <button class="btn btn-default" @if(!$lupons) disabled @endif Onclick="printDiv('forPrint')"><i class="fa fa-print"></i> Print Lupon</button>
    </div>
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
    <input type="hidden" name="lup_id" value="{{$lupons->id}}">
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

  <div id="forPrint" style="display: none">

    <div class="heading" style="text-align: center;font-size: 23px">
      <p style="text-align: left !important;font-weight: 700">KP Form No. 1</p>

      Republic of the Philippines<br>

      Province of Negros Occidental<br>

      City of Cadiz<br>

      Barangay Zone 2<br>

      OFFICE OF THE PUNONG BARANGAY</p>

      

      <p style="text-align: center;font-size: 23px">{{date('F d,Y')}}</p>

      <p style="margin-top: 1rem;font-size: 23px"><strong>NOTICE TO CONSTITUTE THE LUPON</strong></p>

      <p style="font-size: 23px">To All Barangay Members and All Other Persons Concerned:</p>
    </div>

    <p style="text-align: justify;font-size: 23px">In compliance with Section (a), Chapter 7, Title One, Book 111, Local Government Code of 1991 (Republic Act No. 7160), of the Katarungang Pambarangay Law, notice is hereby given to constitute the Lupong Tagapamayapa of this barangay. The persons I am considering for appointment are the following:</p>

    <div style="display:flex;font-size: 23px">
      @if($lupons)
      <div style="flex:1">
        1. {{$lupons->lupon1}}</br>

        2. {{$lupons->lupon2}}</br>

        3. {{$lupons->lupon3}}</br>

        4. {{$lupons->lupon4}}</br>

        5. {{$lupons->lupon5}}</br>

        6. {{$lupons->lupon6}}</br>

        7. {{$lupons->lupon7}}</br>

        8. {{$lupons->lupon8}}</br>
        9. {{$lupons->lupon9}}</br>

        10.{{$lupons->lupon10}}</br>
      </div>
      <div style="flex:1">
        11. {{$lupons->lupon11}}</br>

        12. {{$lupons->lupon12}}</br>

        13. {{$lupons->lupon13}}</br>

        14. {{$lupons->lupon14}}</br>

        15. {{$lupons->lupon15}}</br>

        16. {{$lupons->lupon16}}</br>

        17. {{$lupons->lupon17}}</br>

        18. {{$lupons->lupon18}}</br>
        19. {{$lupons->lupon19}}</br>

        20.{{$lupons->lupon20}}</br>
      </div>
      <div style="flex:1">
        21. {{$lupons->lupon21}}</br>

        22. {{$lupons->lupon22}}</br>

        23. {{$lupons->lupon23}}</br>

        24. {{$lupons->lupon24}}</br>

        25. {{$lupons->lupon25}}</br>
        @endif
      </div>
    </div>

    <p style="margin-top:10px;text-align: justify;font-size: 23px">They have been chosen on the basis of their suitability for the task of conciliation considering their integrity, impartiality, independence of mind, sense of fairness and reputation for probity in view of their age, social standing in the community, tact, patience, resourcefulness, flexibility, open mindedness and other relevant factors. The law provides that only those actually residing or working in the barangay who are not expressly disqualified by law are qualified to be appointed as lupon members.</p>

    <p style="font-size: 23px">All persons are hereby enjoined to immediately inform me of their opposition to or endorsement of any or all of the proposed members or recommend to me other persons not included in the list not later than {{date('F d,Y')}} (the last day for posting this notice) </p>

    <div style="position:relative;left:80rem;margin-top: 10rem;font-size: 23px">
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$brgy->captain}}</p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Punong Barangay
    </div>

  </div>
@endsection
@section('script')
<script type="text/javascript">
  function printDiv(divName) {
       var printContents = document.getElementById(divName).innerHTML;
       var originalContents = document.body.innerHTML;

       document.body.innerHTML = printContents;

       window.print();

       document.body.innerHTML = originalContents;
  }
</script>
@endsection