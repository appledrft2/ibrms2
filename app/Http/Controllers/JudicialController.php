<?php

namespace App\Http\Controllers;

use App\Judicial;
use App\Resident;
use App\Judicial_Respondent;
use Illuminate\Http\Request;

class JudicialController extends Controller
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
            'resident_id'=>'required',
            'details'=>'required',
            'status'=>'required'
        ]);

        $judicial = Judicial::create($data);

        
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

        return view('judicial.show',compact('judicial','respondents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Judicial  $judicial
     * @return \Illuminate\Http\Response
     */
    public function edit(Judicial $judicial)
    {
        //
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
        //
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
}
