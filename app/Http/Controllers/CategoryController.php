<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
class CategoryController extends Controller
{
    public function index(){

      return view('admin.category.add category');

    }

  public function store(Request $request){
  $category =  new Categories;
  $category->name=$request->input('name');
$category->description=$request->input('description'); 
  //dd($request->input('description'));

 $category->save();
 return back();

  }

  public function edit($id){
   $category=Categories::find($id);
   return view('admin.category.edit category',compact('category'));


  }

  


}
