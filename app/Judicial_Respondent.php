<?php

namespace App;

use App\Judicial;
use App\Resident;
use Illuminate\Database\Eloquent\Model;

class Judicial_Respondent extends Model
{
    protected $guarded = [];

    public function judicial(){
    	return $this->belongsTo(Judicial::class);
    }

    public function resident(){
    	return $this->belongsTo(Resident::class);
    }
}
