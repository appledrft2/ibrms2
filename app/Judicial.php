<?php

namespace App;

use App\Resident;
use App\Judicial_Respondent;
use Illuminate\Database\Eloquent\Model;

class Judicial extends Model
{
    protected $guarded = [];

    public function respondents(){
    	return $this->hasMany(Judicial_Respondent::class);
    }
	public function resident(){
    	return $this->belongsTo(Resident::class);
    }
}
