<?php

namespace App\Http\Controllers;

use App\Lupon;
use Illuminate\Http\Request;

class LuponController extends MainController
{
    public function index(){
    	$lupons = Lupon::latest()->first();
    	return view('lupon.index',compact('lupons'));
    }
    public function print(){
    	return view('print.lupon');
    }

    public function store(){
    	$data = request()->validate([
    	    'lupon1'=>'nullable',
    	    'lupon2'=>'nullable',
    	    'lupon3'=>'nullable',
    	    'lupon4'=>'nullable',
    	    'lupon5'=>'nullable',
    	    'lupon6'=>'nullable',
    	    'lupon7'=>'nullable',
    	    'lupon8'=>'nullable',
    	    'lupon9'=>'nullable',
    	    'lupon10'=>'nullable',
    	    'lupon11'=>'nullable',
    	    'lupon12'=>'nullable',
    	    'lupon13'=>'nullable',
    	    'lupon14'=>'nullable',
    	    'lupon15'=>'nullable',
    	    'lupon16'=>'nullable',
    	    'lupon17'=>'nullable',
    	    'lupon18'=>'nullable',
    	    'lupon19'=>'nullable',
    	    'lupon20'=>'nullable',
    	    'lupon21'=>'nullable',
    	    'lupon22'=>'nullable',
    	    'lupon23'=>'nullable',
    	    'lupon24'=>'nullable',
    	    'lupon25'=>'nullable',

    	]);

    	Lupon::create($data);


    	toast('Record Successfully Saved!','success');
    	return redirect('/lupon');
    }

    public function update(){


    	$data = request()->validate([
    	    'lupon1'=>'nullable',
    	    'lupon2'=>'nullable',
    	    'lupon3'=>'nullable',
    	    'lupon4'=>'nullable',
    	    'lupon5'=>'nullable',
    	    'lupon6'=>'nullable',
    	    'lupon7'=>'nullable',
    	    'lupon8'=>'nullable',
    	    'lupon9'=>'nullable',
    	    'lupon10'=>'nullable',
    	    'lupon11'=>'nullable',
    	    'lupon12'=>'nullable',
    	    'lupon13'=>'nullable',
    	    'lupon14'=>'nullable',
    	    'lupon15'=>'nullable',
    	    'lupon16'=>'nullable',
    	    'lupon17'=>'nullable',
    	    'lupon18'=>'nullable',
    	    'lupon19'=>'nullable',
    	    'lupon20'=>'nullable',
    	    'lupon21'=>'nullable',
    	    'lupon22'=>'nullable',
    	    'lupon23'=>'nullable',
    	    'lupon24'=>'nullable',
    	    'lupon25'=>'nullable',

    	]);

        $lupon = Lupon::findOrFail(request()->lup_id);
    	$lupon->update($data);

        dd(request()->all);
    	toast('Record Successfully Updated!','success');
    	return redirect('/lupon');
    }
}
