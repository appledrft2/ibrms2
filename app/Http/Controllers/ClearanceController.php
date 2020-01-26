<?php

namespace App\Http\Controllers;

use App\Clearance;
use App\Resident;
use Illuminate\Http\Request;

class ClearanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Resident $resident)
    {
        return view('clearance.profile',compact('resident'));
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
        return view('clearance.create',compact('resident'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clearance  $clearance
     * @return \Illuminate\Http\Response
     */
    public function show(Resident $resident,Clearance $clearance)
    {
        return 'print resident_id:'.$resident->id.' - clearance_id:'.$clearance->id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clearance  $clearance
     * @return \Illuminate\Http\Response
     */
    public function edit(Resident $resident,Clearance $clearance)
    {
        return $resident;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clearance  $clearance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clearance $clearance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clearance  $clearance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clearance $clearance)
    {
        //
    }
}
