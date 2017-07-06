<?php

namespace SocialSoc;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','mobile','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function getSocietyUsers($i_society_id){
        $i_user_id = Auth::User()->id;
        return $this
            ->join('societies as s', 's.id', '=', 'users.society_id')
            ->select('users.id','s.name','users.name','users.profile_image','users.user_description')
            ->where('users.society_id','=',$i_society_id)
            ->where('is_active','=',1)
            ->where('users.id','<>',$i_user_id)
            ->get()->toArray();
    }
}
