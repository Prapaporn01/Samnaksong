<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directorypic extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'directory_pic_id';
	
    protected $table="directory_pic";
    protected $fillable=["directory_file_pic","directory_id"];
}
