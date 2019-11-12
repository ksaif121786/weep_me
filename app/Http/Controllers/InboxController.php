<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function messages()
    {
    	return view('user.inbox');
    }
}
