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

    function getUserCategories($i_user_id){
    	return $this 
            
            ->leftJoin('user_categories as uc', function($q) use ($i_user_id){
                $q->on('uc.category_id', '=', 'categories.id');
                $q->where('uc.user_id', '=', $i_user_id, 'and');
            })
            ->leftjoin('users as u', 'uc.user_id', '=', 'u.id')

            ->select('categories.id','categories.title','categories.category_image','u.id as user_id')
            ->where('categories.is_active','=',1)
            ->get()->toArray();
    }

    function getUserNeighbours($i_user_id){
        return $this 
            
            ->leftJoin('user_neighbours as uc', function($q) use ($i_user_id){
                $q->on('uc.category_id', '=', 'categories.id');
                $q->where('uc.user_id', '=', $i_user_id, 'and');
            })
            ->leftjoin('users as u', 'uc.user_id', '=', 'u.id')

            ->select('categories.id','categories.title','categories.category_image','u.id as user_id')
            ->where('categories.is_active','=',1)
            ->get()->toArray();
    }
}
