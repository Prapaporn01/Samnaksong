<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guestbook extends Model

{
	public $timestamps = false;
	
	protected $primaryKey = 'guest_id';
	
    protected $table="Guestbook";
    protected $fillable=["guest_id","guest_name","guest_detail","guest_date"];
}
