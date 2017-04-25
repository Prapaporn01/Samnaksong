<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kingpintype extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'kingpintype_id'; 

    protected $table="kingpin_type";
    protected $fillable=["kingpintype_name"];
}
