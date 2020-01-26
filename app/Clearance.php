<?php

namespace App;

use App\Clearance;
use Illuminate\Database\Eloquent\Model;

class Clearance extends Model
{
    protected $fillable = ['resident_id','ornum','date_valid','date_issued','purpose','clearance_no'];

    public function resident()
    {

        return $this->belongsTo(Resident::class);
    }
}
