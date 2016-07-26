<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use \Illuminate\Support\Facades\Auth;
use \App\Category;
use \App\Ad;

class AdsController extends Controller
{

	public function createAd(){
		$title = 'Create new ad';
		$category = new Category;
		$categoryNames = $category->getCategoryNames();

		return view('createAd', [
			'title' => $title,
			'categoryNames' => $categoryNames,
				]);
	}
	
	public function yourAds(){
		$title = 'Ads uploaded by you, ' . Auth::user()->name;
		$ads = Ad::where('user_id', Auth::id())->get();
		
		return view('yourAds',[
				'title'=>$title,
				'ads'=>$ads
				]);
		
	}
	
	public function deleteAd($id){
		Ad::destroy($id);
		
		return redirect()->route('yourAds');
		
	}
	
	public function post(Request $request){
		$ad = new Ad;
		
		$ad->user_id = Auth::id();
		$ad->title = $request->title;
		$ad->description = $request->description;
		$ad->price = $request->price;
		$ad->category_id = $request->category;
		
		$ad->save();

		return redirect()->action("CategoryController@index", [$request->category]);
		
	}
}
