<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SacredTypeUser extends Model
{
     public $timestamps = false;
	
	protected $primaryKey = 'sacred_id'; 

    protected $table="sacred_object";
    protected $fillable=["sacred_type"];
}
