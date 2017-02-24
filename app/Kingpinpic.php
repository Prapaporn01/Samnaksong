<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kingpinpic extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'kingpin_pic_id';
	
    protected $table="kingpin_pic";
    protected $fillable=["kingpin_file_pic","kingpin_id"];
}
