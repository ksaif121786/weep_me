<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function index()
    {
     return view('partials.register');
    }

    public function post_data(Request $request)
    {
     $request->validate([
                      'name'=>'required|max:25',
                       'gender'=>'required',
                      'email' =>'required|email|unique:users',
                      'password' =>'required|min:6'
     ]);

     $user_data = [
                    'name'=>$request->name,
                    'gender'=>$request->gender,
                    'email'=>$request->email,
                    'password'=>bcrypt($request->password),
                    'status'=>0,
                    'fake'=>0
     ];
     
     $user=User::create($user_data);
     if($user)
     {
     	return redirect('/')->with('success',"You are successfully register please login here");
     }else {
     	return redirect('/register')->with('success',"try againt server problem");
     }



    }
}
