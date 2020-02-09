<?php

namespace App\Http\Controllers;

use App\Judicial;
use App\Resident;
use App\Judicial_Kp08;
use App\Judicial_Kp09;
use App\Judicial_Respondent;
use Illuminate\Http\Request;
use App\Judicial_Complainant;

class JudicialController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judicials = Judicial::latest()->get();
        return view('judicial.index',compact('judicials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $residents = Resident::latest()->get();
        return view('judicial.create',compact('residents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'caseno'=>'required',
            'kpformno'=>'required',
            'details'=>'required',
            'status'=>'required',

        ]);

        $judicial = Judicial::create($data);

        $comps = $request->complainants;
        $x = 0;
        if(count($comps) != 1){
            for($i = 0;$i < count($comps);$i++){
                $complainants = new Judicial_Complainant;

                $complainants->judicial_id = $judicial->id;
                $complainants->resident_id = $comps[$x];
                $x++;
                $complainants->save();
            }
        }else{
            $complainants = new Judicial_Complainant;
            $complainants->judicial_id = $judicial->id;
            $complainants->resident_id = $comps[0];

            $complainants->save();
        }

        $resp = $request->respondents;
        $x = 0;
        if(count($resp) != 1){
            for($i = 0;$i < count($resp);$i++){
                $respondent = new Judicial_Respondent;

                $respondent->judicial_id = $judicial->id;
                $respondent->resident_id = $resp[$x];
                $x++;
                $respondent->save();
            }
        }else{
            $respondent = new Judicial_Respondent;
            $respondent->judicial_id = $judicial->id;
            $respondent->resident_id = $resp[0];

            $respondent->save();
        }
        
        toast('Record Successfully Added!','success');
        return redirect('judicial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Judicial  $judicial
     * @return \Illuminate\Http\Response
     */
    public function show(Judicial $judicial)
    {
       $respondents = Judicial_Respondent::where('judicial_id','=',$judicial->id)->get();
       $complainants = Judicial_Complainant::where('judicial_id','=',$judicial->id)->get();
       $kp08s = Judicial_Kp08::OrderBy('created_at','ASC')->where('judicial_id','=',$judicial->id)->get();
       $kp09s = Judicial_Kp09::OrderBy('created_at','ASC')->where('judicial_id','=',$judicial->id)->get();
        return view('judicial.show',compact('judicial','respondents','kp08s','kp09s','complainants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Judicial  $judicial
     * @return \Illuminate\Http\Response
     */
    public function edit(Judicial $judicial)
    {
        $residents = Resident::latest()->get();
        $complainants = Judicial_Complainant::where('judicial_id','=',$judicial->id)->get();
        $respondents = Judicial_Respondent::where('judicial_id','=',$judicial->id)->get();

        return view('judicial.edit',compact('judicial','respondents','residents','complainants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Judicial  $judicial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Judicial $judicial)
    {
        $data = request()->validate([
            'caseno'=>'required',
            'kpformno'=>'required',
            'details'=>'required',
            'status'=>'required'
        ]);

        $judicial->update($data);

        Judicial_Respondent::where('judicial_id','=',$judicial->id)->delete();
        Judicial_Complainant::where('judicial_id','=',$judicial->id)->delete();

        $comp = $request->complainants;
        $x = 0;
        if(count($comp) != 1){
            for($i = 0;$i < count($comp);$i++){
                $complainant = new Judicial_Complainant;

                $complainant->judicial_id = $judicial->id;
                $complainant->resident_id = $comp[$x];
                $x++;
                $complainant->save();
            }
        }else{
            $complainant = new Judicial_Complainant;
            $complainant->judicial_id = $judicial->id;
            $complainant->resident_id = $comp[0];

            $complainant->save();
        }

        $resp = $request->respondents;
        $x = 0;
        if(count($resp) != 1){
            for($i = 0;$i < count($resp);$i++){
                $respondent = new Judicial_Respondent;

                $respondent->judicial_id = $judicial->id;
                $respondent->resident_id = $resp[$x];
                $x++;
                $respondent->save();
            }
        }else{
            $respondent = new Judicial_Respondent;
            $respondent->judicial_id = $judicial->id;
            $respondent->resident_id = $resp[0];

            $respondent->save();
        }
        
        toast('Record Successfully Updated!','info');
        return redirect('judicial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Judicial  $judicial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Judicial $judicial)
    {
        $judicial->delete();
        toast('Record Successfully Deleted!','error');
        return redirect('judicial');
    }
    public function updateStatus(Request $request){
        
        
        $data = request()->validate([
            'status'=>'required'
        ]);
        $judicial = Judicial::findOrFail($request->id);
        $judicial->update($data);
        toast('Status Successfully Updated!','success');
        return redirect('judicial/'.$judicial->id);
    }
}
