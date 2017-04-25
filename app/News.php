<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'news_id';
	protected $dates = ['news_datetime'];
	
    protected $table="News";
    protected $fillable=["news_title","news_detail","news_datetime","newsmain_pic","news_description","news_file"];
}
