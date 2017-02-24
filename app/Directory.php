<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'directory_id';
	
    protected $table="Directory";
    protected $fillable=["directory_name","directory_name_fair","directory_time","directory_position"];
}
