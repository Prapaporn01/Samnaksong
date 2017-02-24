<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worshippic extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'worship_pic_id';
    protected $table="worship_pic";
    protected $fillable=["worship_file_pic","worship_id"];
}
