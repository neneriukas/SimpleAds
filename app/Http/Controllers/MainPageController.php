<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class MainPageController extends Controller
{
	public function login()
		{
			$this->middleware('auth');
		}

	public function index(){
		$title = 'Apple Skelbimai | Main';
		$categories = \App\Category::all();

		return view('index', [
			'title' => $title,
			'categories'=>$categories
				]);
	}
}
