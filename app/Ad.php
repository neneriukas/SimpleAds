<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
	protected $fillable = [
		'title',
		'description',
		'price',
		'category_id'
	];
	
	public function getUser($id){
		$user = \App\User::find($id);
		return $user;
	}
}
