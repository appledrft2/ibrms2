<?php

namespace App;

use App\Clearance;
use Illuminate\Database\Eloquent\Model;

class Clearance extends Model
{
    protected $gaurded = [];

    public function resident()
    {

        return $this->belongsTo(Resident::class);
    }
}
