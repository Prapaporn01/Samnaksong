<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SacredObject extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'sacred_id';
	
    protected $table="sacred_object";
    protected $fillable=["sacred_id","sacred_name","sacred_detail","sacredtype_id","sacredmain_pic"];
}
