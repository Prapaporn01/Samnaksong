<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KingpinmainUser extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'kingpin_id'; 

    protected $table="kingpin_state";
    protected $fillable=["kingpin_name"];
}
