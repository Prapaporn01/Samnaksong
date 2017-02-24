<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonsUser extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'person_id'; 

    protected $table="related_persons";
    protected $fillable=["person_name","person_file_pic"];
}
