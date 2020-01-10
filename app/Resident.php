<?php

namespace App;

use App\Resident_Address;
use App\Resident_Additional;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $guarded = ['id'];

    public function address(){

        return $this->hasOne(Resident_Address::class);

    }
    public function getfath()
    {
        return $this->belongsTo('Resident', 'father_id');
    }
    public function getmoth()
    {
        return $this->belongsTo('Resident', 'mother_id');
    }

    public function additional(){

        return $this->hasOne(Resident_Additional::class);

    }
}
