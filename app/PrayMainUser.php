<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrayMainUser extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'pray_id'; 

    protected $table="pray";
    protected $fillable=["pray_title"];
}
