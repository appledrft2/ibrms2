<?php

namespace App\Http\Controllers;

use App\Purok;
use App\Barangay;
use App\Resident;
use App\Household;
use App\Resident_Address;
use App\Resident_Additional;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $residents = Resident::latest()->get();
        
        return view('resident.index',compact('residents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

        $households = Household::latest()->get(); 
        $barangay = Barangay::first();
        $puroks = Purok::latest()->get();
        return view('resident.create',compact('households','barangay','puroks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        // Resident Info
        $resident = new Resident;
        $resident->residentid = $request->residentid;
        $resident->firstname = $request->firstname;
        $resident->middlename = $request->middlename;
        $resident->lastname = $request->lastname;
        $resident->extension = $request->extension;
        $resident->dob = $request->dob;
        $resident->pob = $request->pob;
        $resident->nationality = $request->nationality;
        $resident->religion = $request->religion;
        $resident->gender = $request->gender;
        $resident->pwd = $request->pwd;
        $resident->deceased = $request->deceased;
        $resident->bloodtype = $request->bloodtype;
        $resident->height = $request->height;
        $resident->weight  = $request->weight;
        $resident->civilstatus  = $request->civilstatus;
        $resident->spouse  = $request->spouse;
        $resident->father  = $request->father;
        $resident->mother  = $request->mother;
        if($request->father != null || $request->mother != null)
        {
        $fname = substr($request->father, 0, 4);
        $mname = substr($request->mother, 0, 4);
        // dd($mname);
         $father = Resident::where('firstname','LIKE',$fname.'%')->where('lastname','=',$request->lastname)->first();
         $mother = Resident::where('firstname','LIKE',$mname.'%')->where('lastname','=',$request->lastname)->first();
         // dd($father->id);
         $resident->father_id  = $father->id;
         $resident->mother_id  = $mother->id;

        }
        
        
        
        $resident->save();
        // Residential Address
        $address = new Resident_Address;
        $address->resident_id = $resident->id;
        $address->ownership = $request->ownership;
        $address->houseno = $request->houseno;
        $address->street = $request->street;
        $address->purok_id = $request->purok;
        $address->barangay = $request->barangay;
        $address->city = $request->city;
        $address->province = $request->province;
        $address->region = $request->region;
        $address->zipcode = $request->zipcode;
        $address->contactno = $request->contactno;
        $address->emailadd = $request->emailadd;
        $address->household_id = $request->household_id;
        $address->save();

        $additional = new Resident_Additional;
        $additional->resident_id = $resident->id;
        $additional->educational_attainment = $request->educational_attainment;
        $additional->employment = $request->employment;
        $additional->dswd = $request->dswd;
        $additional->forpeace = $request->forpeace;
        $additional->philhealthno = $request->philhealthno;
        $additional->phcategory = $request->phcategory;
        $additional->pcb = $request->pcb;
        $additional->save();

        if(request()->hasFile('img')){
            request()->validate([
                'img' => 'file|image|max:5000',
            ]);

            $res = Resident::find($resident->id);

            $res->update([
                'img' => request()->img->store('uploads','public'),
            ]);
        }

        toast('Record Successfully Added!','success');
        return redirect('resident');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function show(Resident $resident)
    {
        return view('resident.show',compact('resident'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function edit(Resident $resident)
    {
        $households = Household::latest()->get(); 
        $father = Resident::find($resident->father_id);
        $mother = Resident::find($resident->mother_id);
        $puroks = Purok::latest()->get();

        if($father == null && $mother == null){
            $father = '';
            $mother = '';
        }

        
        return view('resident.edit',compact('households','resident','father','mother','puroks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resident $resident)
    {

        // Resident Info
        $data = request()->validate([
            'residentid'=>'nullable',
            'firstname'=>'nullable',
            'middlename'=>'nullable',
            'lastname'=>'nullable',
            'extension'=>'nullable',
            'dob'=>'nullable',
            'pob'=>'nullable',
            'nationality'=>'nullable',
            'religion'=>'nullable',
            'gender'=>'nullable',
            'pwd'=>'nullable',
            'deceased'=>'nullable',
            'bloodtype'=>'nullable',
            'height'=>'nullable',
            'weight'=>'nullable',
            'civilstatus'=>'nullable',
            'spouse'=>'nullable',
            'mother'=>'nullable',
            'father'=>'nullable',
        ]);

        if($request->father != null || $request->mother != null)
        {
        $fname = substr($request->father, 0, 4);
        $mname = substr($request->mother, 0, 4);
        // dd($mname);
         $father = Resident::where('firstname','LIKE',$fname.'%')->where('lastname','=',$request->lastname)->first();
         $mother = Resident::where('firstname','LIKE',$mname.'%')->where('lastname','=',$request->lastname)->first();
         // dd($father->id);
         $resident->father_id  = $father->id;
         $resident->mother_id  = $mother->id;

        }

        $resident->update($data);

        $address = Resident_Address::where('resident_id',$resident->id)->first();
        // Resident Address
        $data2 = request()->validate([
            'ownership'=>'nullable',
            'houseno'=>'nullable',
            'street'=>'nullable',
            'purok_id'=>'nullable',
            'barangay'=>'nullable',
            'city'=>'nullable',
            'province'=>'nullable',
            'region'=>'nullable',
            'zipcode'=>'nullable',
            'contactno'=>'nullable',
            'emailadd'=>'nullable',
            'household_id'=>'nullable',
        ]);

        $address->update($data2);

        $additional = Resident_Additional::where('resident_id',$resident->id)->first();
        // Resident Address
        $data3 = request()->validate([
            'educational_attainment'=>'nullable',
            'employment'=>'nullable',
            'dswd'=>'nullable',
            'forpeace'=>'nullable',
            'philhealthno'=>'nullable',
            'phcategory'=>'nullable',
            'pcb'=>'nullable',
       
        ]);

        $additional->update($data3);

        if(request()->hasFile('img')){
            request()->validate([
                'img' => 'file|image|max:5000',
            ]);

            $res = Resident::find($resident->id);

            $res->update([
                'img' => request()->img->store('uploads','public'),
            ]);
        }


        toast('Record Successfully Updated!','info');
        return redirect('resident');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resident $resident)
    {
        $resident->delete();
        toast('Record Successfully Deleted!','error');
        return redirect('resident');
    }
}
