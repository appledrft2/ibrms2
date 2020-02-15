@extends('layouts.master')
<?php $title = 'Resident'; ?>
<?php $header = 'New Residents'; ?>
@section('title',$title)
@section('header',$header)
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('autocomplete/easy-autocomplete.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('autocomplete/easy-autocomplete.themes.min.css')}}">
@endsection
@if($errors->any())
    <div class="alert alert-danger">{{ implode('', $errors->all(':message')) }}</div>
@endif
@section('content')
<div class="row">
<form action="/resident" autocomplete="off" method="POST" enctype="multipart/form-data">
    @csrf
<div class="col-md-12">
    <div class="box">
        <div class="box-header ">
            <h5 class="box-title "><div class="form-inline">
                <i class="fa fa-user"></i> &nbsp;Personal Information | Resident ID No. <i class="fa fa-question-circle" title="Resident ID is automatically generated"></i>:&nbsp;
                            <input type="text" class="text-center form-control form-control-sm" name="residentid" placeholder="Household ID No." value="{{date('y').'-'.date('mdHis')}}" readonly>
            </div></h5>
        </div>
        <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Upload Photo (optional)</strong>
                            <input  type="file" class="form-control-file" name="img" >
                        </div>
                        <div class="form-group">
                            <strong>First Name <span class=req>*</span></strong>
                            <input required type="text" class="form-control" name="firstname" placeholder="Enter First Name" value="" >
                        </div>
                        <div class="form-group">
                            <strong>Middle Name <span class=req>*</span></strong>
                            <input required type="text" class="form-control" name="middlename" placeholder="Enter Middle Name" value="" >
                        </div>
                        <div class="form-group">
                            <strong>Last Name <span class=req>*</span></strong>
                            <input required type="text" class="form-control" name="lastname" placeholder="Enter Last Name" value="" >
                        </div>
                        <div class="form-group">
                            <strong>Extension</strong>
                            <input type="text" class="form-control" name="extension" placeholder="Enter Sr.,Jr.III,etc" value="" >
                        </div>
                        <div class="form-group">
                            <strong>Date of Birth <span class=req>*</span></strong>
                            <input required type="date" class="form-control" name="dob" placeholder="" value="" >
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>Place of Birth <span class=req>*</span></strong>
                                    <input required type="text" class="form-control" name="pob" placeholder="Enter Place of Birth" value="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>Nationality <span class=req>*</span></strong>
                                    <input required type="text" class="form-control" name="nationality" placeholder="Enter Nationality" value="" >
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>Religion <span class=req>*</span></strong>
                                    <input required type="text" class="form-control" name="religion" placeholder="Enter Religion" value="" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>Gender <span class=req>*</span></strong>
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary1" name="gender" value="Male">
                                        <label for="radioPrimary1">
                                            Male
                                        </label>
                                      </div>
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary2" name="gender" value="Female">
                                        <label for="radioPrimary2">
                                            Female
                                        </label>
                                      </div>
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <strong>PWD?</strong>
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                          <input type="checkbox" name="pwd"  id="checkprimary1">
                                          <label for="checkprimary1">
                                          </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group ">
                                    <strong>Deceased?</strong>
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                          <input type="checkbox" name="deceased"  id="checkprimary2">
                                          <label for="checkprimary2">
                                          </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>Bloodtype <span class=req>*</span></strong>
                                        <select required name="bloodtype" class="select2bs4 form-control">
                                                <option selected disabled value="">Select</option>
                                                <option>A+</option>
                                                <option>AB+</option>
                                                <option>B+</option>
                                                <option>O+</option>
                                        </select>
                                        
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>Height(cm)</strong>
                                        <input type="text" class="form-control" name="height" placeholder="... cm">
                                        
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>Weight(kgs).</strong>
                                        <input type="text" class="form-control" name="weight" placeholder="... kgs.">
                                        
                                    
                                </div>
                            </div>
                        </div>

                    
                        <div class="form-group">
                            <strong>Civil Status <span class=req>*</span></strong>
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="cvstat" name="civilstatus" value="Single" >
                                        <label for="cvstat">
                                            Single
                                        </label>
                                      </div>
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="cvstat2" name="civilstatus" value="Seperated">
                                        <label for="cvstat2">
                                            Seperated
                                        </label>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="icheck-primary d-inline">
                                      <input type="radio" id="cvstat3" name="civilstatus" value="Married">
                                      <label for="cvstat3">
                                          Married
                                      </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                      <input type="radio" id="cvstat4" name="civilstatus" value="Annuled">
                                      <label for="cvstat4">
                                          Annulled
                                      </label>
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="icheck-primary d-inline">
                                      <input type="radio" id="cvstat5" name="civilstatus" value="Co-habitation">
                                      <label for="cvstat5">
                                          Co-habitation
                                      </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                      <input type="radio" id="cvstat6" name="civilstatus" value="Widow/Widower">
                                      <label for="cvstat6">
                                          Widow/Widower
                                      </label>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="form-group hidden" id="spouse">
                            <strong>Spouse</strong>
                                <input type="text" class="form-control" name="spouse" placeholder="Enter Spouse's Name">
                                
                        </div>
                        <div id="parents">
                            <div class="form-group">
                                <strong>Father's Name</strong>
                                   
                                        <input type="text" id="father" class="form-control" name="father" placeholder="Enter Father's Name">
                                   
                                    
                                
                            </div>
                            <div class="form-group">
                                <strong>Mother's Name</strong>
                                    <input type="text" class="form-control" id="mother" name="mother" placeholder="Enter Mother's Name">
                                    
                                
                            </div>
                            
                        </div>

                       <!--  <div class="form-group">
                            <strong>Upload Photo</strong>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="photo" id="customFile">
                                  <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                
                        </div> -->
                    </div>
                </div>  
        </div>
    </div>


    <div class="box ">
            <div class="box-header">
                <h5 class="box-title">Residential Address </h5>
                
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Home Ownership <span class="req">*</span></strong>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="ho1" name="ownership" value="Owned" >
                                        <label for="ho1">
                                            Owned
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="ho2" name="ownership" value="Mortgaged" >
                                        <label for="ho2">
                                            Mortgaged
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="ho3" name="ownership" value="Rented" >
                                        <label for="ho3">
                                            Rented
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="ho4" name="ownership" value="Living with parents" >
                                        <label for="ho4">
                                            Living with parents
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="ho5" name="ownership" value="Other" >
                                        <label for="ho5">
                                            Other
                                        </label>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <strong>House No./Block/Lot</strong>
                                            <input type="text" class="form-control" name="houseno" placeholder="Enter House No./Block/Lot">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <strong>Street</strong>
                                            <input type="text" class="form-control" name="street" placeholder="Enter Street">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <strong>Purok <span class="req">*</span></strong>
                                            <select name="purok" required class="form-control select2bs4">
                                            
                                            @if(count($puroks))
                                                <option selected disabled>Select</option>
                                                @foreach($puroks as $purok)

                                                    <option value="{{$purok->id}}">{{$purok->prk_name}}</option>
                                                @endforeach

                                            @else
                                            <option value="" selected disabled>No records found.</option>
                                            @endif
                                            
                                    </select>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong>Barangay <span class="req">*</span></strong>
                                            <input readonly type="text" value="{{$barangay->name}}" class="form-control" name="barangay" placeholder="Enter Barangay" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong>City <span class="req">*</span></strong>
                                            <input readonly type="text" value="{{$barangay->city}}" class="form-control" name="city" placeholder="Enter City" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong>Province <span class="req">*</span></strong>
                                            <input readonly type="text" value="{{$barangay->province}}" class="form-control" name="province" placeholder="Enter Province" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong>Region <span class="req">*</span></strong>
                                            <input readonly type="text" value="{{$barangay->region}}" class="form-control" name="region" placeholder="Enter Region" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong>Zip Code <span class="req">*</span></strong>
                                            <input readonly type="text" value="{{$barangay->zipcode}}" class="form-control" name="zipcode" placeholder="Enter Zip Code" >
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Contact Number </strong>
                                        <input type="text" class="form-control" name="contactno" placeholder="Enter Contact Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Email Address </strong>
                                        <input type="text" class="form-control" name="emailadd" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Household ID No. <span class="req">*</span></strong>
                                    <select name="household_id" required class="form-control select2bs4">
                                            
                                            @if(count($households))
                                                <option selected disabled>Select</option>
                                                @foreach($households as $household)

                                                    <option value="{{$household->id}}">{{$household->household_id}}</option>
                                                @endforeach

                                            @else
                                            <option value="" selected disabled>No records found.</option>
                                            @endif
                                            
                                    </select>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>


    <div class="box">
            <div class="box-header">
                <h5 class="box-title">Additional Information</h5>
                
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Educational Attainment</strong>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="ea1" name="educational_attainment" value="Elementary" >
                                        <label for="ea1">
                                            Elementary
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="ea2" name="educational_attainment" value="College" >
                                        <label for="ea2">
                                            College
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="ea3" name="educational_attainment" value="Vocational" >
                                        <label for="ea3">
                                            Vocational
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="ea4" name="educational_attainment" value="High School" >
                                        <label for="ea4">
                                            High School
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="ea5" name="educational_attainment" value="Post-graduate" >
                                        <label for="ea5">
                                            Post-graduated
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="ea6" name="educational_attainment" value="No Formal Education" >
                                        <label for="ea6">
                                            No Formal Education
                                        </label>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <strong>Employment Status </strong>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="emp1" name="employment" value="Student" >
                                        <label for="emp1">
                                            Student
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="emp2" name="employment" value="Retired" >
                                        <label for="emp2">
                                            Retired
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="emp3" name="employment" value="Un-employed" >
                                        <label for="emp3">
                                            Un-employed
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="emp4" name="employment" value="Employed" >
                                        <label for="emp4">
                                            Employed
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" id="emp5" name="employment" value="Unknown" >
                                        <label for="emp5">
                                            Unknown
                                        </label>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <strong>DSWD NHTS?</strong>
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                          <input type="checkbox" name="dswd"  id="dswd">
                                          <label for="dswd">
                                            Yes
                                          </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <strong>4Ps Memeber?</strong>
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                          <input type="checkbox" name="forpeace"  id="forpeace">
                                          <label for="forpeace">
                                            Yes
                                          </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                    
                            <div class="form-group">
                                <strong>PhilHealth No.</strong>
                                    <input type="text" class="form-control" name="philhealthno" placeholder="Enter PhilHealth No.">
                            </div>

                            <div class="form-group">
                                <strong>PhilHealth Category </strong>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group clearfix">
                                          <div class="icheck-primary d-inline">
                                            <input type="radio" id="phcategory1" name="phcategory" value="FE-Private" >
                                            <label for="phcategory1">
                                                FE-Private
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group clearfix">
                                          <div class="icheck-primary d-inline">
                                            <input type="radio" id="phcategory2" name="phcategory" value="FE-Government" >
                                            <label for="phcategory2">
                                                FE-Government
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group clearfix">
                                          <div class="icheck-primary d-inline">
                                            <input type="radio" id="phcategory3" name="phcategory" value="IE" >
                                            <label for="phcategory3">
                                                IE
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group clearfix">
                                          <div class="icheck-primary d-inline">
                                            <input type="radio" id="phcategory4" name="phcategory" value="Other" >
                                            <label for="phcategory4">
                                                Other
                                            </label>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group ">
                                            <strong>Primary Care Benefit (PCB) Member?</strong>
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                  <input type="checkbox" name="pcb"  id="pcb">
                                                  <label for="pcb">
                                                    Yes
                                                  </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                </div>
                            </div>

                        
                    </div>
                </div>
            </div>
    </div>
</div>
        <span class="pull-right">
            <div class="col-md-12">
                <div class="form-group">
                    <a href="/resident" class="btn btn-danger"><i class="icon-stack-cancel"></i> Cancel</a>
                    <button type="submit" class="btn btn-success"><i class="icon-check"></i> Add Record</button>
                </div>
            </div>
        </span>
</form>
</div>
  
@endsection

@section('script')
<script type="text/javascript">
    $('input[name=civilstatus]').click(function(e){
        var data = $(this).val();
        if(data == 'Married'){
            $('#spouse').removeClass('hidden');
        }else{
            $('#spouse').addClass('hidden');

        }
    });

</script>

<script type="text/javascript" src="{{asset('autocomplete/jquery.easy-autocomplete.min.js')}}"></script>
<script type="text/javascript">
   

    $(document).on('keyup','input[name=lastname]',function(){
        var val = $(this).val();

        $.ajax({
            url:'/getfather',
            method:'POST',
            data: {
            "_token": "{{ csrf_token() }}",
            "lastname": val
            },
            success:function(response){
              
                var data = {
                    data: response,
                    getValue: function(element) {
                        return element.firstname+' '+element.middlename[0]+'. '+element.lastname;
                    },
                  template: {
                        type: "custom",
                        method: function(value, item) {
                            return item.firstname +' '+item.middlename[0]+'. '+ item.lastname+' - DOB ('+item.dob+') ';
                        }
                    }

                       
                }
                $("#father").easyAutocomplete(data);

                

                
            }
        });
        $.ajax({
            url:'/getmother',
            method:'POST',
            data: {
            "_token": "{{ csrf_token() }}",
            "lastname": val
            },
            success:function(response2){
              
                var data = {
                    data: response2,
                    getValue: function(element2) {
                        return element2.firstname+' '+element2.middlename[0]+'. '+element2.lastname;
                    },
                  template: {
                        type: "custom",
                        method: function(value2, item2) {
                            return item2.firstname +' '+item2.middlename[0]+'. '+ item2.lastname+' - DOB ('+item2.dob+') ';
                        }
                    }

                       
                }

                $("#mother").easyAutocomplete(data);
                
            }
        });
    });

</script>
@endsection