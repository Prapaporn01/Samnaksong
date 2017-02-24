<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kingpin extends Model
{
	public $timestamps = false;
	
	protected $primaryKey = 'kingpin_id';

    protected $table="kingpin_state";
    protected $fillable=["kingpin_name","kingpin_detail","kingpin_type","kingpinmain_pic"];
}
