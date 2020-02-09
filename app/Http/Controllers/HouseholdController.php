<?php

namespace App\Http\Controllers;

use App\Household;
use Illuminate\Http\Request;

class HouseholdController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $households = Household::latest()->get();
        return view('household.index',compact('households'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('household.create');
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
            'household_id'=>'required',
            'family_serial'=>'required'
        ]);

        $status = Household::create($data);
        toast('Record Successfully Added!','success');
        return redirect('household');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Household  $household
     * @return \Illuminate\Http\Response
     */
    public function show(Household $household)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Household  $household
     * @return \Illuminate\Http\Response
     */
    public function edit(Household $household)
    {
        return view('household.edit',compact('household'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Household  $household
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Household $household)
    {
        $data = request()->validate([
            'household_id'=>'required',
            'family_serial'=>'required'
        ]);

        $household->update($data);
        toast('Record Successfully Updated!','info');
        return redirect('household');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Household  $household
     * @return \Illuminate\Http\Response
     */
    public function destroy(Household $household)
    {
        $household->delete();
        toast('Record Successfully Deleted!','error');
        return redirect('household');
    }
}
