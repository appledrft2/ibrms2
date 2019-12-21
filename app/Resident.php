<?php

namespace App;

use App\resident_address;
use App\resident_additional;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $guarded = ['id'];

    public function address(){

        return $this->hasOne(resident_address::class);

    }
    public function additional(){

        return $this->hasOne(resident_additional::class);

    }
}
