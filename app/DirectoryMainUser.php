<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DirectoryMainUser extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'directory_id'; 

    protected $table="directory";
    protected $fillable=["directory_name"];
}
