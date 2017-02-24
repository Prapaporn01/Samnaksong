<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorshipMainUser extends Model
{
  	public $timestamps = false;
	
	protected $primaryKey = 'worship_id'; 

    protected $table="worship";
    protected $fillable=["worship_name"];
}
