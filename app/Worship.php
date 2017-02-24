<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worship extends Model
{
	public $timestamps = false;
	
	protected $primaryKey = 'worship_id';

    protected $table="Worship";
    protected $fillable=["worship_name","worship_detail","worshipmain_pic"];
}
