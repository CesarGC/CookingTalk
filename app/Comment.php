<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $table = 'Comment';  
	protected $primaryKey = 'idComment';
    //


	public function user()
	{
		return $this->hasOne('App\Users', 'id');
	}

}
