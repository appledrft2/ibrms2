<?php

namespace App;

use App\Resident;
use Illuminate\Database\Eloquent\Model;

class resident_address extends Model
{
    protected $guarded = [''];

    public function resident(){

        return $this->belongsTo(Resident::class);

    }
}
