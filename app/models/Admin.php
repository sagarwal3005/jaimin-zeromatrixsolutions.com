<?php

namespace SocialSoc\models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    function checkLogin($user,$password){
    	return Admin::where([['email','=', $user],['password', '=', $password]])->get()->toArray();
    }
}
