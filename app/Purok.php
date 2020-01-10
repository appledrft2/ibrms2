<?php

namespace App;

use App\Resident_Address;
use Illuminate\Database\Eloquent\Model;

class Purok extends Model
{
    protected $fillable = ['purok_id_num','prk_president','prk_name','prk_vice_pres','prk_address','prk_secretary','prk_map','prk_treasurer'];


    public function purok(){

        return $this->belongsTo(Resident_Address::class);

    }
}
