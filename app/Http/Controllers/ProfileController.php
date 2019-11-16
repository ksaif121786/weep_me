<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Frequest;

class ProfileController extends Controller
{
    //
    public function profile($id)
    {
    	$user = User::where('id',$id)->first();
    
      $reqstatus = Frequest::where('requester',Auth::id())->where('requestee',$id)->get()->toArray();
      if(empty($reqstatus)){
        $reqstatus[0]['status'] =0;
      }
        
       // $status_data =$reqstatus[0];
        // print_r($reqstatus);die;


     
      
      return view('user.profile.userprofile',compact(['user','reqstatus']));
    }

    public function myprofile()
    {
        $userdetails = User::where('id',Auth::id())->first();


     return view('/user.profile.myprofile',compact('userdetails'));
    }

    public function post_profile_data(Request $request)
    {
       $user_data = [
                      'name'=>$request->name,
                      'gender'=>$request->gender,
                      // 'profile_img'=>$request->file,
                      'dob'=>$request->age,
                      'relationship'=>$request->relationship,
                      'language'=>$request->language,
                      'hobbies'=>$request->hobbies,
                      'myself'=>$request->myself,
       ];

      User::where('id',Auth::id())->update($user_data);
      return redirect('/myprofile');
    }

    public function motto(Request $request)
    {
        $userdata = ['motto'=>$request->motto];
        // print_r($userdata);die;
        User::where('id',Auth::id())->update($userdata);
        return redirect('/myprofile');
    }

    public function profile_upload(Request $request)
    {
      $file =$request->img->getClientOriginalName();
      $filename =time().'-'.$file;
      request()->img->move(public_path('images'),$filename);
      User::where('id',Auth::id())->update(['profile_img'=>$filename]);
      return redirect('/dashboard');
    }
}
