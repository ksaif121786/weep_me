<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frequest extends Model
{
    //
    protected $table = 'friend';
    protected $fillable = ['requester','requestee','status'];
}
