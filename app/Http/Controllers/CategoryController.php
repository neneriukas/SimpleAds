<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
		public function index($categoryId){

			$ads = \App\Category::find($categoryId)->ads;
			$category = \App\Category::find($categoryId);
			$title = 'Apple Skelbimai | '.$category->name;
			return view('category', [
				'ads'=>$ads,
				'category'=>$category,
				'title'=>$title,
				]);
		}
}
