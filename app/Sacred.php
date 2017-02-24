<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sacred extends Model
{
	public $timestamps = false;
	
	protected $primaryKey = 'sacred_id';
	
    protected $table="sacred_object";
    protected $fillable=["sacred_id","sacred_name","sacred_detail","sacred_type","sacredmain_pic"];

  

}