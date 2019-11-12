<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinboard extends Model
{
     protected $table = 'pinboard_msg';

     protected $fillable = ['user_id','name','msg','deleted'];

     protected $guarded = ['report'];

    
}
