@extends('layouts.master')
<?php $title = 'Resident'; ?>
@section('title',$title)
@section('content')
<div class="row">
<form action="/resident/{{$resident->id}}" method="POST">
@csrf
@method('PUT')

<div class="col-md-12">
    <div class="card">
        <div class="card-header ">
            <h5 class="card-title float-left"><i class="fa fa-user"></i> Personal Information | Resident ID No. <i class="fa fa-question-circle" title="Resident ID is automatically generated"></i>: </h5>
            <h5 class="float-right"><input type="text" class="text-center form-control form-control-sm" name="residentid" placeholder="Household ID No." value="{{$resident->residentid}}" readonly></h5>
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>First Name <span class=req>*</span></strong>
                            <input required type="text" class="form-control" name="firstname" placeholder="Enter First Name" value="{{$resident->firstname}}" >
                        </div>
                        <div class="form-group">
                            <strong>Middle Name <span class=req>*</span></strong>
                            <input required type="text" class="form-control" name="middlename" placeholder="Enter Middle Name" value="{{$resident->middlename}}" >
                        </div>
                        <div class="form-group">
                            <strong>Last Name <span class=req>*</span></strong>
                            <input required type="text" class="form-control" name="lastname" placeholder="Enter Last Name" value="{{$resident->lastname}}" >
                        </div>
                        <div class="form-group">
                            <strong>Extension</strong>
                            <input type="text" class="form-control" name="extension" placeholder="Enter Sr.,Jr.III,etc" value="{{$resident->extension}}" >
                        </div>
                        <div class="form-group">
                            <strong>Date of Birth <span class=req>*</span></strong>
                            <input required type="date" class="form-control" name="dob" placeholder="" value="{{$resident->dob}}">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>Place of Birth <span class=req>*</span></strong>
                                    <input required type="text" class="form-control" name="pob" placeholder="Enter Place of Birth" value="{{$resident->pob}}" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>Nationality <span class=req>*</span></strong>
                                    <input required type="text" class="form-control" name="nationality" placeholder="Enter Nationality" value="{{$resident->nationality}}" >
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>Religion <span class=req>*</span></strong>
                                    <input required type="text" class="form-control" name="religion" placeholder="Enter Religion" value="{{$resident->religion}}" >
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
                                        <input @if($resident->gender == "Male") checked @endif type="radio" id="radioPrimary1" name="gender" value="Male">
                                        <label for="radioPrimary1">
                                            Male
                                        </label>
                                      </div>
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->gender == "Female") checked @endif type="radio" id="radioPrimary2" name="gender" value="Female">
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
                                          <input @if($resident->pwd) checked @endif type="checkbox" name="pwd"  id="checkprimary1">
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
                                          <input @if($resident->deceased) checked @endif type="checkbox" name="deceased"  id="checkprimary2">
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
                                                <option @if($resident->bloodtype == "A+") selected @endif>A+</option>
                                                <option @if($resident->bloodtype == "AB+") selected @endif >AB+</option>
                                                <option @if($resident->bloodtype == "B+") selected @endif >B+</option>
                                                <option @if($resident->bloodtype == "O+") selected @endif >O+</option>
                                        </select>
                                        
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>Height(cm)</strong>
                                        <input type="text" class="form-control" name="height" placeholder="... cm" value="{{$resident->height}}">
                                        
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <strong>Weight(kgs).</strong>
                                        <input type="text" class="form-control" name="weight" placeholder="... kgs." value="{{$resident->weight}}">
                                        
                                    
                                </div>
                            </div>
                        </div>

                    
                        <div class="form-group">
                            <strong>Civil Status <span class=req>*</span></strong>
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->civilstatus == "Single") checked @endif type="radio" id="cvstat" name="civilstatus" value="Single" >
                                        <label for="cvstat">
                                            Single
                                        </label>
                                      </div>
                                      <div class="icheck-primary d-inline">
                                        <input type="radio" @if($resident->civilstatus == "Seperated") checked @endif id="cvstat2" name="civilstatus" value="Seperated">
                                        <label for="cvstat2">
                                            Seperated
                                        </label>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="icheck-primary d-inline">
                                      <input type="radio" @if($resident->civilstatus == "Married") checked @endif id="cvstat3" name="civilstatus" value="Married">
                                      <label for="cvstat3">
                                          Married
                                      </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                      <input type="radio" @if($resident->civilstatus == "Annulled") checked @endif id="cvstat4" name="civilstatus" value="Annuled">
                                      <label for="cvstat4">
                                          Annulled
                                      </label>
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="icheck-primary d-inline">
                                      <input type="radio" @if($resident->civilstatus == "Co-habitation") checked @endif id="cvstat5" name="civilstatus" value="Co-habitation">
                                      <label for="cvstat5">
                                          Co-habitation
                                      </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                      <input type="radio" @if($resident->civilstatus == "Widow/Widower") checked @endif id="cvstat6" name="civilstatus" value="Widow/Widower">
                                      <label for="cvstat6">
                                          Widow/Widower
                                      </label>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="form-group @if($resident->spouse =='') hidden @endif" id="spouse">
                            <strong>Spouse</strong>
                                <input type="text" class="form-control" name="spouse" value="{{$resident->spouse}}" placeholder="Enter Spouse's Name">
                                
                        </div>
                        <div class="form-group">
                            <strong>Father's Name</strong>
                                <input type="text" class="form-control" name="father" value="{{$resident->father}}" placeholder="Enter Father's Name">
                                
                            
                        </div>
                        <div class="form-group">
                            <strong>Mother's Name</strong>
                                <input type="text" class="form-control" name="mother" value="{{$resident->mother}}" placeholder="Enter Mother's Name">
                                
                            
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


    <div class="card @if($resident->address->resident_id == '') collapsed-card @endif">
            <div class="card-header header-elements-inline ">
                <h5 class="card-title">Residential Address </h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                  
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Home Ownership <span class="req">*</span></strong>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->address->ownership == "Owned") checked @endif type="radio" id="ho1" name="ownership" value="Owned" >
                                        <label for="ho1">
                                            Owned
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->address->ownership == "Mortgaged") checked @endif type="radio" id="ho2" name="ownership" value="Mortgaged" >
                                        <label for="ho2">
                                            Mortgaged
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->address->ownership == "Rented") checked @endif type="radio" id="ho3" name="ownership" value="Rented" >
                                        <label for="ho3">
                                            Rented
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->address->ownership == "Living with parents") checked @endif type="radio" id="ho4" name="ownership" value="Living with parents" >
                                        <label for="ho4">
                                            Living with parents
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->address->ownership == "Other") checked @endif type="radio" id="ho5" name="ownership" value="Other" >
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
                                            <input type="text" class="form-control" value="{{$resident->address->houseno}}" name="houseno" placeholder="Enter House No./Block/Lot">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <strong>Street</strong>
                                            <input type="text" value="{{$resident->address->street}}" class="form-control" name="street" placeholder="Enter Street">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <strong>Purok <span class="req">*</span></strong>
                                            <input required type="text"value="{{$resident->address->purok}}" class="form-control" name="purok" placeholder="Enter Purok">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong>Barangay <span class="req">*</span></strong>
                                            <input type="text" value="{{$resident->address->barangay}}" class="form-control" name="barangay" placeholder="Enter Barangay" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong>City <span class="req">*</span></strong>
                                            <input type="text" value="{{$resident->address->city}}" class="form-control" name="city" placeholder="Enter City" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong>Province <span class="req">*</span></strong>
                                            <input type="text" value="{{$resident->address->province}}" class="form-control" name="province" placeholder="Enter Province" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong>Region <span class="req">*</span></strong>
                                            <input type="text" value="{{$resident->address->region}}" class="form-control" name="region" placeholder="Enter Region" >
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong>Zip Code <span class="req">*</span></strong>
                                            <input type="text" value="{{$resident->address->zipcode }}"class="form-control" name="zipcode" placeholder="Enter Zip Code" >
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
                                        <input type="text" value="{{$resident->address->contactno}}"  class="form-control" name="contactno" placeholder="Enter Contact Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Email Address </strong>
                                        <input type="text" value="{{$resident->address->emailadd}}" class="form-control" name="emailadd" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Household ID No. <span class="req">*</span></strong>
                                    <select name="household_id" required class="form-control select2bs4">
                                            
                                            @if(count($households))
                                                <option  disabled>Select</option>
                                                @foreach($households as $household)

                                                    <option @if($resident->address->household_id == '$household->id') selected @endif value="{{$household->id}}">{{$household->household_id}}</option>
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


    <div class="card @if($resident->additional->resident_id == '') collapsed-card @endif">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Additional Information</h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
                
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Educational Attainment</strong>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->additional->educational_attainment == "Elementary") checked @endif  type="radio" id="ea1" name="educational_attainment" value="Elementary" >
                                        <label for="ea1">
                                            Elementary
                                        </label>  
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->additional->educational_attainment == "College") checked @endif type="radio" id="ea2" name="educational_attainment" value="College" >
                                        <label for="ea2">
                                            College
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->additional->educational_attainment == "Vocational") checked @endif type="radio" id="ea3" name="educational_attainment" value="Vocational" >
                                        <label for="ea3">
                                            Vocational
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->additional->educational_attainment == "High School") checked @endif type="radio" id="ea4" name="educational_attainment" value="High School" >
                                        <label for="ea4">
                                            High School
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->additional->educational_attainment == "Post-graduated") checked @endif type="radio" id="ea5" name="educational_attainment" value="Post-graduate" >
                                        <label for="ea5">
                                            Post-graduated
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->additional->educational_attainment == "No Formal Education") checked @endif type="radio" id="ea6" name="educational_attainment" value="No Formal Education" >
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
                                        <input @if($resident->additional->employment == "Student") checked @endif type="radio" id="emp1" name="employment" value="Student" >
                                        <label for="emp1">
                                            Student
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->additional->employment == "Retired") checked @endif type="radio" id="emp2" name="employment" value="Retired" >
                                        <label for="emp2">
                                            Retired
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->additional->employment == "Un-employed") checked @endif type="radio" id="emp3" name="employment" value="Un-employed" >
                                        <label for="emp3">
                                            Un-employed
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->additional->employment == "Employed") checked @endif type="radio" id="emp4" name="employment" value="Employed" >
                                        <label for="emp4">
                                            Employed
                                        </label>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group clearfix">
                                      <div class="icheck-primary d-inline">
                                        <input @if($resident->additional->employment == "Unknown") checked @endif type="radio" id="emp5" name="employment" value="Unknown" >
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
                                          <input @if($resident->additional->dswd) checked @endif type="checkbox" name="dswd"  id="dswd">
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
                                          <input @if($resident->additional->forpeace) checked @endif  type="checkbox" name="forpeace"  id="forpeace">
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
                                    <input type="text" class="form-control" name="philhealthno" placeholder="Enter PhilHealth No." value="{{$resident->additional->philhealthno}}">
                            </div>

                            <div class="form-group">
                                <strong>PhilHealth Category </strong>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group clearfix">
                                          <div class="icheck-primary d-inline">
                                            <input @if($resident->additional->phcategory == 'FE-Private') checked @endif type="radio" id="phcategory1" name="phcategory" value="FE-Private" >
                                            <label for="phcategory1">
                                                FE-Private
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group clearfix">
                                          <div class="icheck-primary d-inline">
                                            <input @if($resident->additional->phcategory == 'FE-Government') checked @endif type="radio" id="phcategory2" name="phcategory" value="FE-Government" >
                                            <label for="phcategory2">
                                                FE-Government
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group clearfix">
                                          <div class="icheck-primary d-inline">
                                            <input @if($resident->additional->phcategory == 'IE') checked @endif type="radio" id="phcategory3" name="phcategory" value="IE" >
                                            <label for="phcategory3">
                                                IE
                                            </label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group clearfix">
                                          <div class="icheck-primary d-inline">
                                            <input @if($resident->additional->phcategory == 'Other') checked @endif type="radio" id="phcategory4" name="phcategory" value="Other" >
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
                                                  <input @if($resident->additional->pcb) checked @endif type="checkbox" name="pcb"  id="pcb">
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

<div class="col-md-12">
    <div class="form-group">
        <span class="float-right">
            <a href="/resident" class="btn btn-danger"><i class="icon-stack-cancel"></i> Cancel</a>
            <button type="submit" class="btn btn-primary"><i class="icon-check"></i> Update Record</button>
            
        </span>
    </div>
</div>
</form>
<div class="mt-3"></div>
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
@endsection