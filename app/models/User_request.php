<?php

namespace SocialSoc\models;

use Illuminate\Database\Eloquent\Model;

class User_request extends Model
{
    //


    function getRequestList($i_user_id){
    	 return $this
            ->join('users as u', 'u.id', '=', 'user_requests.user_id')
            ->select('u.id as user_id','user_requests.id','u.name','u.profile_image','u.user_description')
            ->where('user_requests.receiver_user_id','=',$i_user_id)
            ->where('u.is_active','=',1)
            ->where('user_requests.status','=',0)
            ->where('u.id','<>',$i_user_id)
            ->get()->toArray();
    }
}
