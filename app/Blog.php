<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $table = 'Blog';  
	protected $primaryKey = 'idBlog';
    //


    public function comments()
    {
        return $this->hasMany('App\Comment', 'idBlog');
    }

}
