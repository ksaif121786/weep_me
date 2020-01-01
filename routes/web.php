<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/clear-cache',function(){
	Artisan::call('cache:clear');
	return "cache cleard";
});


Route::get('/',"LoginController@index");
Route::post('/login',"LoginController@login");
Route::get('/logout', 'LoginController@logout');

Route::get('/register',"RegisterController@index");
Route::post('/post-data',"RegisterController@post_data");


Route::group(['middleware'=>'auth_user'],function(){

Route::get('/dashboard','DashboardController@index');

Route::get('/bigpinboard','DashboardController@bigpinboard');

Route::post('/bigpin-msg','DashboardController@post_msg');

Route::get('/profile/{id}','ProfileController@profile');

Route::get('myprofile','ProfileController@myprofile');

Route::post('/post_profile_data','ProfileController@post_profile_data');

Route::post('/motto','ProfileController@motto');

Route::post('/friendrequest','FriendrequestController@friendrequest');

Route::post('uploadpf','ProfileController@profile_upload');

Route::get('/online','OnlineController@onlinepeep');

Route::get('/inbox-chat','InboxController@messages');

Route::get('/friend-list','FriendrequestController@friend_list');

Route::get('/send-message/{user_id}','FriendrequestController@send_message');

Route::post('send_message_user/{user_id}','FriendrequestController@send_message_user');

// Route::post('get-inbox-msg','FriendrequestController@get_inbox_msg');

Route::post('get_message','FriendrequestController@get_message');



 });
