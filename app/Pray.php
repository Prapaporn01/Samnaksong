<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pray extends Model
{
	public $timestamps = false;
	
	protected $primaryKey = 'pray_id';
	
    protected $table="pray";
    protected $fillable=["pray_title","pray_detail","pray_sound"];
}
