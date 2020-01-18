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
    public function index()
    {
        //
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
        return redirect('judicial/'.$judicial_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Judicial_Kp08  $judicial_Kp08
     * @return \Illuminate\Http\Response
     */
    public function show(Judicial_Kp08 $judicial_Kp08)
    {
        //
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
    public function destroy(Judicial_Kp08 $judicial_Kp08)
    {
        //
    }
}
