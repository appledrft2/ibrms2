<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resident_additional extends Model
{
    protected $fillable = ['educational_attainment','employment','dswd','forpeace','philhealthno','phcategory','pcb'];

    public function resident(){

        return $this->belongsTo(Resident::class);

    }
}
