<?php

namespace App;

use App\Purok;
use App\Resident;
use Illuminate\Database\Eloquent\Model;

class Resident_Address extends Model
{
    protected $guarded = [''];

    public function resident(){

        return $this->belongsTo(Resident::class);

    }

    public function purok()
    {

        return $this->belongsTo(Purok::class);
    }

 
}
