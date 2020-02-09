<?php

namespace App\Http\Controllers;

use App\Purok;
use Illuminate\Http\Request;

class PurokController extends MainController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puroks = Purok::latest()->get();
        return view('purok.index',compact('puroks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purok.create');
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
            'purok_id_num'=>'required',
            'prk_president'=>'required',
            'prk_name'=>'required',
            'prk_vice_pres'=>'required',
            'prk_address'=>'required',
            'prk_secretary'=>'required',
            'prk_map'=>'nullable',
            'prk_treasurer'=>'required',
        ]);

        $status = Purok::create($data);
        toast('Record Successfully Added!','success');
        return redirect('purok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purok  $purok
     * @return \Illuminate\Http\Response
     */
    public function show(Purok $purok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purok  $purok
     * @return \Illuminate\Http\Response
     */
    public function edit(Purok $purok)
    {
        return view('purok.edit',compact('purok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purok  $purok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purok $purok)
    {
         $data = request()->validate([
            'purok_id_num'=>'required',
            'prk_president'=>'required',
            'prk_name'=>'required',
            'prk_vice_pres'=>'required',
            'prk_address'=>'required',
            'prk_secretary'=>'required',
            'prk_map'=>'nullable',
            'prk_treasurer'=>'required',
        ]);

        $status = $purok->update($data);
        toast('Record Successfully Updated!','success');
        return redirect('purok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purok  $purok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purok $purok)
    {
        $purok->delete();
        toast('Record Successfully Deleted!','success');
        return redirect('purok');
    }
}
