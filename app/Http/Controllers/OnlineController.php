<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class OnlineController extends Controller
{
    
     public function onlinepeep(Request $request)
     {
     	$onlinepeep = User::all()->random(5);
     	// print_r($onlinepeep); die;

     	return view('user.online.onlineuser',compact('onlinepeep'));
     }
}
