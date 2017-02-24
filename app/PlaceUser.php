<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaceUser extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'place_id'; 

    protected $table="place";
    protected $fillable=["place_name","place_url","place_facebook","place_description","place_pic"];
}
