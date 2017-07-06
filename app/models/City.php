<?php

namespace SocialSoc\models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    function getCityName($i_city_id){
    	return City::select(['id','city_name'])->where('id','=',$i_city_id)->get()->toArray();
    }
}
