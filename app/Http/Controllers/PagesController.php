<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Categories;
use\App\Cars;

class PagesController extends Controller
{

	public function view_category($id){   

 $category =Categories::find($id);
	      $cars = $category->car;

	      return view('front.view_category')->with(['cars'=>$cars,'category'=>$category]);


	 }

public function cars(){

	        $cars= Cars::all();
        return view('front.index')->with('cars',$cars);
}

}
