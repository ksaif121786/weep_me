<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fRequest;
use Auth;
use DB;

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


    public function friend_list()
    {

      $friends_status= \DB::table('friend')->where('requester',Auth::id())->where('status',1)->get()->toArray();
      if(!empty($friends_status)) {
        foreach ($friends_status as $key => $value) {
           $friends[]= \DB::table('users')->where('id',$value->requestee)->get()->toArray();
         
        }
    }
    else{

       // echo die("ok");
          $getfriends =\DB::table('friend')->where('requestee',Auth::id())->where('status',1)->get();
           foreach ($getfriends as $key => $value) {
           $friends[]= \DB::table('users')->where('id',$value->requester)->get()->toArray();
         
        }
    }

     
      return view('user.friend.friend-list',compact('friends'));
    }


    public function send_message($request)
    {
      $user_id = $request;
      // print_r($request); die;
      return view('user.friend.write-msg',compact('user_id'));
    }

    public function send_message_user(Request $request,$user_id)
    {
    
      $capsule_msg= [
                    'sender_id'=>Auth::id(),
                    'receiver_id'=>$user_id,
                    'message'=>$request->message_user_sended
      ];

      // print_r($capsule_msg); die;
      $exist = DB::table('message_chat')->where('sender_id',Auth::id())->where('receiver_id',$user_id)->count();
      if($exist==0)
      {
       $rslt = DB::table('message_chat')->insert($capsule_msg);
      }else{
       $rslt = DB::table('message_chat')->where('sender_id',Auth::id())->where('receiver_id',$user_id)->update($capsule_msg);
      }

      
      if(!empty($rslt))
      {
        return redirect("profile/$user_id")->with('success',"Your Message Has Been Send Successfully");
      }
    }

    public function get_message(Request $request)
    {
    // print_r($request->all());
       $rslt =  DB::table('message_chat')
       ->select('message_chat.*','users.name','users.profile_img')
       ->leftJoin('users','users.id','=','message_chat.sender_id')
       ->where('receiver_id',Auth::id())
       ->orderBy('updated_at','desc')
       ->get();

      return response()->json($rslt); 
    }


}
