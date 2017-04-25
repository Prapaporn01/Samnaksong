<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'gallery_id'; 

    protected $table="Gallery";
    protected $fillable=["gallery_file_pic","gallery_detail"];
}
