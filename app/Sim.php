<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sim extends Model
{
	protected $guarded = ['id','created_at','updated_at'];

	public function solutions(){
		return $this->hasMany('App\Solution');
	}
}
