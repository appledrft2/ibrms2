<?php

namespace App\Http\Controllers;

use App\Judicial;
use App\Judicial_Kp09;
use Illuminate\Http\Request;

class JudicialKp09Controller extends MainController
{
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
        return view('judicial_kp09.create',compact('judicial'));
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
            'judicial_id' => 'required',
            'kpformno'=>'required'
        ]);

        

        Judicial_Kp09::create($data);

        toast('Record Successfully Added!','success');
        return redirect('judicial/'.$judicial_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Judicial_Kp09  $judicial_Kp09
     * @return \Illuminate\Http\Response
     */
    public function show($judicial_id,$judicial_Kp09)
    {
        
        $judicial_Kp09 = Judicial_Kp09::findOrFail($judicial_Kp09);
        return view('judicial_kp09.show',compact('judicial_Kp09'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Judicial_Kp09  $judicial_Kp09
     * @return \Illuminate\Http\Response
     */
    public function edit($judicial_id,$judicial_Kp09)
    {
        $judicial = Judicial::findOrFail($judicial_id);
        $kp09 = Judicial_Kp09::findOrFail($judicial_Kp09);
        return view('judicial_kp09.edit',compact('judicial','kp09'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Judicial_Kp09  $judicial_Kp09
     * @return \Illuminate\Http\Response
     */
    public function update($judicial_id,$judicial_Kp09)
    {
          $data = request()->validate([
            'hearing_date'=>'required',
            'hearing_time'=>'required',
            'judicial_id' => 'required'
        ]);

        
        $kp09 = Judicial_Kp09::findOrFail($judicial_Kp09);

        $kp09->update($data);

        toast('Record Successfully Updated!','info');
        return redirect('judicial/'.$judicial_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Judicial_Kp09  $judicial_Kp09
     * @return \Illuminate\Http\Response
     */
    public function destroy($judicial_id)
    {
        $judicial_Kp09 = Judicial_Kp09::findOrFail(request()->kpid2);
        $judicial_Kp09->delete();
        toast('Record Successfully Deleted!','error');
        return redirect('judicial/'.$judicial_id);
    }
}
