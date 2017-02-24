<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newspic extends Model
{
    public $timestamps = false;
	
	protected $primaryKey = 'news_pic_id';
	
    protected $table="News_pic";
    protected $fillable=["news_file_pic","news_id"];
}
