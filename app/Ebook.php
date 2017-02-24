<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
	public $timestamps = false;
	
	protected $primaryKey = 'ebook_id'; 

    protected $table="Ebook";
    protected $fillable=["ebook_name","ebook_file"];
}
