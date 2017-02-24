<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activitypic extends Model
{
     public $timestamps = false;
	
	protected $primaryKey = 'activities_pic_id';
	
    protected $table="activities_pic";
    protected $fillable=["activities_file_pic","activities_id"];
}
