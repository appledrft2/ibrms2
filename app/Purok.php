<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purok extends Model
{
    protected $fillable = ['purok_id_num','prk_president','prk_name','prk_vice_pres','prk_address','prk_secretary','prk_map','prk_treasurer'];
}
