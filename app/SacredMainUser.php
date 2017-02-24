<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SacredMainUser extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'sacred_id'; 

    protected $table="sacred_object";
    protected $fillable=["sacred_name"];
}
