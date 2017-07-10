<?php

namespace SocialSoc\models;

use Illuminate\Database\Eloquent\Model;

class User_notification extends Model
{
    function getUserNotifications($i_user_id){
    		return $this
            ->join('user_requests as ur', 'ur.id', '=', 'user_notifications.user_request_id')
            ->select('user_notifications.user_id','user_notifications.id','user_notifications.notification','user_notifications.user_request_id','user_notifications.receiver_user_id','user_notifications.created_at','ur.status as request_status')
            ->where('user_notifications.receiver_user_id','=',$i_user_id)
            ->orderBy('user_notifications.id','desc')
	            ->get()->toArray();
    }
}
