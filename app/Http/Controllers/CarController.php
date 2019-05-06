<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Input, Redirect;
use\App\Cars;
use\App\Categories;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//$categories=Categories::all()->with('categories',$categories);
        $cars= Cars::all();
        return view('admin.index')->with('cars',$cars);
        
            }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'name'=>'required',
           'category'=>'required',
           'model'=>'required',
           'description'=>'required',
           'price'=>'required',
           'image'=>'required|image|mimes:jpeg,png,jpg,gif',


        ]);
        //$messages = $validator->errors();


          if ($request->hasFile('image')){
            $imageExt = $request->file('image')->getClientOriginalExtension();
            $imageName = time().'img.'.$imageExt;
            $request->file('image')->move(public_path('images'),$imageName);
        }

        $cars = new Cars;
        $cars->name  =$request->input('name');
        $cars->category_id =(int) $request->input('category');         
        $cars->model=$request->input('model');
        $cars->description=$request->input('description');
        $cars->price=$request->input('price');
        $cars->image=$imageName;
       $cars->save();
    //   dd($request->all());
     return redirect()->back();

            }
            

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cars=Cars::findall();
        return redirect('admin.index',compact('cars'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cars=Cars::find($id);
        return view('admin.cars.edit',compact('cars'));

    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           $request->validate([
           'name'=>'required',
           'category'=>'required',
           'model'=>'required',
           'description'=>'required',
           'price'=>'required',
           'image'=>'required|image|mimes:jpeg,png,jpg,gif',

        ]);
      /*  $imageName = time().'.'.request()->image->getClientOriginalExtension(); */

$cars=Cars::find($id);
 if ($request->hasFile('image')){
            $imageExt = $request->file('image')->getClientOriginalExtension();
            $imageName = time().'img.'.$imageExt;
            $request->file('image')->move(public_path('images'),$imageName);
        }
        $cars->name =$request->get('name');
        $cars->category_id =(int)$request->get('category');
        $cars->model =$request->get('model');
        $cars->description =$request->get('description');
        $cars->price =$request->get('price');
        $cars->image=$imageName;

              $cars->save();
          return redirect('cars');
//dd($request->get('category'));


        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $cars = Cars::find($id);
           $cars->delete();
         return redirect('cars');
    
    }
}
