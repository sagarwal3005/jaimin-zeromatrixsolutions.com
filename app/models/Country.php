<?php

namespace SocialSoc\models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    function getCountryName($i_country_id){
    	return Country::select(['id','country_name'])->where('id','=',$i_country_id)->get()->toArray();
    }
}
