<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Judicial_Complainant extends Model
{
    protected $guarded = [];
    
        public function judicial(){
    	return $this->belongsTo(Judicial::class);
    }

    public function resident(){
    	return $this->belongsTo(Resident::class);
    }
}
