<?php

namespace SocialSoc\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Society extends Model
{
    protected $softDelete = true;
	// enable soft deleting
    use SoftDeletes;

    protected $fillable = ['name', 'country_id', 'state_id', 'city_id','deleted_at','address_line_1','address_line_2','pin', 'created_at', 'updated_at','society_image','latitude','longitude'];

    function getSociety(){
    	return $this
    		->join('countries', 'societies.country_id', '=', 'countries.id')
    		->join('states', 'societies.state_id', '=', 'states.id')
    		->join('cities', 'societies.city_id', '=', 'cities.id')
            ->select('societies.id','societies.name','societies.address_line_2','societies.society_image','societies.address_line_1','societies.pin','countries.country_name','states.state_name','cities.city_name')
            ->orderBy('societies.id','desc')
            ->get();
    }


}
