<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'username'; 

    protected $table="admin";
    protected $fillable=["password"];
}
