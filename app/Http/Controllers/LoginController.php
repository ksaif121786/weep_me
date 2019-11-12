<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;



class LoginController extends Controller
{
    //
 
   public function index()
   {
    if(Auth::check()) {
         return redirect('/dashboard');
    }

      return view('welcome');
   }


    public function login(Request $request)
    {

      if(Auth::check()) {
         return redirect('/dashboard');
      }
      
       $request->validate(['email'=>'required|email','password'=>'required']);
       $credentials = $request->only(['email','password']);
       if(Auth::attempt($credentials))
       {
          return redirect('dashboard');
       }else{
       	  return redirect('/')->with('success',"Please check email and password");
       }
    }

    public function logout()
    {
      Auth::logout();
      return redirect('/');
    }
}
