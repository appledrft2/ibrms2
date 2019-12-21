<?php

namespace App;

use App\Resident;
use Illuminate\Database\Eloquent\Model;

class Resident_Address extends Model
{
    protected $guarded = [''];

    public function resident(){

        return $this->belongsTo(Resident::class);

    }
}
