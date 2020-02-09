<?php

namespace App\Http\Controllers;

use App\Barangay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{

    protected $brgy;

    public function __construct() 
    {

        $brgy = Barangay::latest()->first();
        View::share('brgy', $brgy);
    }

}
