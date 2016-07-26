<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public function ads(){
		return $this->hasMany('App\Ad');
	}

	public function getCategoryNames(){
		$categories = $this->all();
		$categoryNames = array();

		foreach($categories as $category){
			$categoryNames[$category->id] = $category->name;
		}

		return $categoryNames;
	}
}