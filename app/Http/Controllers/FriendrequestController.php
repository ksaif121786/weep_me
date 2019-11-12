<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fRequest;
use Auth;

class FriendrequestController extends Controller
{
    //
    public function friendrequest(Request $request)
    {
      $user_data = [
      	'requester'=>$request->requesterId,
      	'requestee'=>$request->requesteeId,
      	'status'=>$request->status,
      ];
        // print_r($user_data); die;
      if($request->status==0)
      {
        // echo "work 3";
      	 $user =Frequest::where('requestee',$request->requesteeId)
          ->delete($user_data);

      	 return  response()->json($user);
      }
      if($request->status==4)
      {
        // echo "work 4"; die;
      	 $user =Frequest::create($user_data);
      	 return response()->json($user);
      }
     
     

    }
}
