<?php

namespace App\Http\Controllers;

use App\Purok;
use Illuminate\Http\Request;

class PurokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('purok.index');
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purok  $purok
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purok $purok)
    {
        //
    }
}
