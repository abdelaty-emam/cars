<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
class RegisterationController extends Controller
{
    public function create(){

    	return view('Auth.register');
    }
    public function store(Request$request){

$user=new User;
$user->name=$request->name;
$user->email=$request->email;
$user->password=$request->passsword;
$user->save();
//login

auth()->login($user);

return redirect('/home');


    }
}
