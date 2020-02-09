<?php

namespace App\Http\Controllers;

use App\Event;
use App\Purok;
use App\Barangay;
use App\Judicial;
use App\Resident;
use Illuminate\Http\Request;

class DashboardController extends MainController
{
    public function index()
    {
    	$resident = Resident::count('id');
    	$barangay = Barangay::first();
        $puroks = Purok::latest()->get();
    	$events = Event::latest()->get();
        $unresolved = Judicial::where('status','=','On-going')->count();
        return view('dashboard.index',compact('resident','barangay','events','unresolved','puroks'));
    }
    public function getfather(){
    	$lastname = request()->lastname;
    	$data = Resident::where('lastname','LIKE','%' . $lastname . '%')->where('gender','=','Male')->get();

    	return $data;
    }
    public function getmother(){
    	$lastname = request()->lastname;
    	$data = Resident::where('lastname','LIKE','%' . $lastname . '%')->where('gender','=','Female')->get();

    	return $data;
    }
}
