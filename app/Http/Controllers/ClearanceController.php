<?php

namespace App\Http\Controllers;

use App\Judicial;
use App\Resident;
use App\Clearance;
use App\Judicial_Respondent;
use Illuminate\Http\Request;
use App\Judicial_Complainant;

class ClearanceController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Resident $resident)
    {
        $judicial_comp = Judicial_Respondent::where('resident_id','=',$resident->id)->get();
        $judicials = '';
        $case = '';
        if($judicial_comp){
            foreach($judicial_comp as $jc){
                $judicials = Judicial::where('id','=',$jc->judicial_id)->where('status','=','On-going')->first();

                if($judicials)
                {
                    if($judicials->status == 'On-going'){
                            $case = $judicials;
                    }
                }
            }
        }

       
       
        
        
        return view('clearance.profile',compact('resident','judicials','case'));
    }
    public function list()
    {
        $residents = Resident::latest()->get();
        return view('clearance.index',compact('residents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Resident $resident)
    {
        $judicial_comp = Judicial_Respondent::where('resident_id','=',$resident->id)->get();
        $judicials = '';
        if($judicial_comp){
            foreach($judicial_comp as $jc){
                $judicials = Judicial::where('id','=',$jc->judicial_id)->where('status','=','On-going')->first();
            }
        }
        if($judicials){
            return redirect('/resident/'.$resident->id.'/clearance');
        }else{
            return view('clearance.create',compact('resident'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($resident_id,Request $request)
    {
        $data = request()->validate([
            'resident_id' => 'required',
            'clearance_no' => 'required',
            'ornum' => 'required',
            'date_issued' => 'required',
            'date_valid' => 'required',
            'purpose' => 'required'
        ]);



        Clearance::create($data);

        toast('Record Successfully Added!', 'success');
        return redirect('resident/' . $resident_id.'/clearance');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clearance  $clearance
     * @return \Illuminate\Http\Response
     */
    public function show(Resident $resident,Clearance $clearance)
    {
        return view('clearance.show',compact('resident','clearance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clearance  $clearance
     * @return \Illuminate\Http\Response
     */
    public function edit(Resident $resident,Clearance $clearance)
    {
        return view('clearance.edit',compact('resident','clearance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clearance  $clearance
     * @return \Illuminate\Http\Response
     */
    public function update(Resident $resident, Clearance $clearance)
    {

        $data = request()->validate([
            'resident_id' => 'required',
            'clearance_no' => 'required',
            'ornum' => 'required',
            'date_issued' => 'required',
            'date_valid' => 'required',
            'purpose' => 'required'
        ]);

        $clearance->update($data);

        toast('Record Successfully Updated!', 'info');
        return redirect('resident/' . $resident->id . '/clearance');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clearance  $clearance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resident $resident,Clearance $clearance)
    {
        $clearance = Clearance::findOrFail($clearance->id);
        $clearance->delete();
        toast('Record Successfully Deleted!', 'error');
        return redirect('resident/' . $resident->id.'/clearance');
    }
}
