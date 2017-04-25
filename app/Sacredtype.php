<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sacredtype extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'sacredtype_id'; 

    protected $table="sacred_type";
    protected $fillable=["sacredtype_name"];
}
