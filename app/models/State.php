<?php

namespace SocialSoc\models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
     function getStateName($i_state_id){
    	return State::select(['id','state_name'])->where('id','=',$i_state_id)->get()->toArray();
    }
}
