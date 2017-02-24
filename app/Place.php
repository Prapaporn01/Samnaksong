<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
	public $timestamps = false;
	
	protected $primaryKey = 'place_id';
	
    protected $table="Place";
    protected $fillable=["place_name","place_url","place_facebook","place_description"];

}
