<?php

namespace App\Http\Controllers;

use App\Barangay;
use Illuminate\Http\Request;

class BarangayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangays = Barangay::latest()->first();

        return view('barangay.index',compact('barangays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'nullable',
            'secretary'=>'nullable',
            'captain'=>'nullable',
            'treasurer'=>'nullable',
            'address'=>'nullable',
            'city'=>'nullable',
            'province'=>'nullable',
            'region'=>'nullable',
            'zipcode'=>'nullable',
            'kg1'=>'nullable',
            'kg2'=>'nullable',
            'kg3'=>'nullable',
            'kg4'=>'nullable',
            'kg5'=>'nullable',
            'kg6'=>'nullable',
            'kg7'=>'nullable',

        ]);
        $brgy = Barangay::create($data);

        if(request()->hasFile('logo')){
            request()->validate([
                'logo' => 'file|image|max:5000',
            ]);

            $res = Barangay::find($brgy->id);

            $res->update([
                'logo' => request()->logo->store('uploads','public'),
            ]);
        }

        toast('Record Successfully Saved!','success');
        return redirect('/barangay');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function show(Barangay $barangay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function edit(Barangay $barangay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barangay $barangay)
    {
        $data = request()->validate([
            'name'=>'nullable',
            'secretary'=>'nullable',
            'captain'=>'nullable',
            'treasurer'=>'nullable',
            'address'=>'nullable',
            'city'=>'nullable',
            'province'=>'nullable',
            'region'=>'nullable',
            'zipcode'=>'nullable',
            'kg1'=>'nullable',
            'kg2'=>'nullable',
            'kg3'=>'nullable',
            'kg4'=>'nullable',
            'kg5'=>'nullable',
            'kg6'=>'nullable',
            'kg7'=>'nullable',

        ]);
        $barangay->update($data);

        if(request()->hasFile('logo')){
            request()->validate([
                'logo' => 'file|image|max:5000',
            ]);

            $res = Barangay::find($barangay->id);

            $res->update([
                'logo' => request()->logo->store('uploads','public'),
            ]);
        }

        toast('Record Successfully Updated!','info');
        return redirect('/barangay');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barangay $barangay)
    {
        //
    }
}
