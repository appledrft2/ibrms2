<?php

namespace App\Http\Controllers;

use App\Judicial;
use App\Judicial_Kp08;
use Illuminate\Http\Request;

class JudicialKp08Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($judicial_id)
    {
         return redirect('judicial/'.$judicial_id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($judicial_id)
    {
        $judicial = Judicial::findOrFail($judicial_id);
        return view('judicial_kp08.create',compact('judicial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($judicial_id,Request $request)
    {
        $data = request()->validate([
            'hearing_date'=>'required',
            'hearing_time'=>'required',
            'judicial_id' => 'required'
        ]);

        

        Judicial_Kp08::create($data);

        toast('Record Successfully Added!','success');
        return redirect('judicial/'.$judicial_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Judicial_Kp08  $judicial_Kp08
     * @return \Illuminate\Http\Response
     */
    public function show($judicial_id,$judicial_Kp08)
    {
        
        $judicial_Kp08 = Judicial_Kp08::findOrFail($judicial_Kp08);
        return view('judicial_kp08.show',compact('judicial_Kp08'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Judicial_Kp08  $judicial_Kp08
     * @return \Illuminate\Http\Response
     */
    public function edit(Judicial_Kp08 $judicial_Kp08)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Judicial_Kp08  $judicial_Kp08
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Judicial_Kp08 $judicial_Kp08)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Judicial_Kp08  $judicial_Kp08
     * @return \Illuminate\Http\Response
     */
    public function destroy($judicial_id)
    {
        $judicial_Kp08 = Judicial_Kp08::findOrFail(request()->kpid);
        $judicial_Kp08->delete();
        toast('Record Successfully Deleted!','error');
        return redirect('judicial/'.$judicial_id);
    }
}