<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'activities_id';
	
    protected $table="Activities";
    protected $fillable=["activities_id","activities_name","activities_detail","activities_date","activitiesmain_pic"];
}
