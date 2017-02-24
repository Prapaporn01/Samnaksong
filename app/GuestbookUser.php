<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuestbookUser extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'guest_id'; 

    protected $table="guestbook";
    protected $fillable=["guest_name","guest_detail","guest_date"];
}