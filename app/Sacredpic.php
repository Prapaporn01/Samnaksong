<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Sacredpic extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'sacred_pic_id';
    protected $table="sacred_pic";
    protected $fillable=["sacred_file_pic","sacred_id"];


   
}
