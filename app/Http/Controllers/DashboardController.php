<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pinboard;

class DashboardController extends Controller
{
    //
    public function index()
    {
      return view('user/dashboard');
    }

    
    public function bigpinboard()
    {  
    	$data = Pinboard::orderBy('id','desc')->paginate(20);
    	return view('user.bigpinboard.board',compact('data'));
    }

    public function post_msg(Request $request)
    {
        $user_data = [
                     'user_id'=>Auth::id(),
                     'name'=>Auth::user()->name,
                     'msg'=>$request->msg,
                     'deleted'=>0
        ];

      
       $msg = Pinboard::Create($user_data);

       $data = $msg->orderBy('id','DESC')->get();
       $html ='';
       foreach($data as $row)
       {
        $html.= '<div class="col-sm-12" >
                  <div class="card bg-light"  style="margin-left:-10px;">
                   <strong>
                   <a href="profile/'.$row->user_id.'">'.$row->name.'</a>
                   </strong>'.$row->msg.'
                  </div>
                </div>';
       }
        
       echo json_encode($html);

    }

}
