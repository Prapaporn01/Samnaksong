<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsMainUser extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'news_id'; 

    protected $table="news";
    protected $fillable=["news_title"];
}
