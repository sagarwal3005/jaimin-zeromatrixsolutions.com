<?php

namespace SocialSoc\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	protected $softDelete = true;
	// enable soft deleting
    use SoftDeletes;

    function getCategory(){
    	return Category::where([['delete_status','=', '0']])->orderBy('id','desc')->get()->toArray();
    }
}
