<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'activities_id';
	protected $dates = ['activities_date'];
	
    protected $table="activities";
    protected $fillable=["activities_id","activities_name","activities_detail","activities_date","activitiesmain_pic","activities_description"];
}
