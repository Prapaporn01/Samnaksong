<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityMainUser extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'activities_id'; 

    protected $table="Activities";
    protected $fillable=["activities_name"];
}
