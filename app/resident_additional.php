<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident_Additional extends Model
{
    protected $fillable = ['educational_attainment','employment','dswd','forpeace','philhealthno','phcategory','pcb'];

    public function resident(){

        return $this->belongsTo(Resident::class);

    }
}
