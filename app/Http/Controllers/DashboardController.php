<?php

namespace App\Http\Controllers;

use App\Event;
use App\Barangay;
use App\Resident;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	$resident = Resident::count('id');
    	$barangay = barangay::first();
    	$events = Event::latest()->get();
        return view('dashboard.index',compact('resident','barangay','events'));
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
