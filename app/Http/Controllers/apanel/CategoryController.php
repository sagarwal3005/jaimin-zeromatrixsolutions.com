<?php

namespace SocialSoc\Http\Controllers\apanel;

use Illuminate\Http\Request;
use SocialSoc\Http\Controllers\Controller;
use SocialSoc\models\Category;

class CategoryController extends Controller
{
    function add(){
    	return view('apanel/category/add');
    }

    function edit($id){
    	$t_category_data = Category::where([['id','=',$id],['delete_status','!=',1]])->get()->toArray();
    	if(empty($t_category_data)){
    		return back();
    	}
    	return view('apanel/category/add',['t_category'=>$t_category_data]);
    }

    function index(){
    	$o_category = new Category;
    	$t_categories = $o_category -> getCategory();
    	return view('apanel/category/index',compact('t_categories'));
    }

    function create(Request $o_request,$id=''){
    	if(!empty($id)){
    		$o_category = Category::find($id);
    		if($o_category->delete_status == 1){
    			return back();
    			exit;
    		}
    	}else{
    		$o_category = new Category;
    	}

    	$file = '';
    	if ($o_request->file('category_image') != '') {
            $file = $this->uploadImage($o_request);
            $o_category->category_image = $file;
        }
        
        $o_category->title = $o_request->title;
        $o_category->description = $o_request->description;
        $o_category->ip_address = $_SERVER['REMOTE_ADDR'];
        $o_category->is_active = 1;
        if($o_category->save()){
            \Session::flash('s','Category Saved Successfully');
        }else{
            \Session::flash('e','Category Not Saved');
        }      
        
        return redirect('apanel/category/index');
    }

    public function delete($id){
    	$o_category = Category::find($id);
    	if(isset($o_category->id)){	
			$o_category->delete();
			return array('flag'=>true);
		}else{
			return array('flag'=>false);
		}		
    }

    private function uploadImage($oRequest){
    	$s_image_path = "category_".time().'.'.$oRequest->category_image->getClientOriginalExtension();
    	$path = public_path().'/images/category';
  		if (!is_dir($path)) {
		    mkdir($path,0777, true);
		}
		$oRequest->category_image->move(public_path('images/category'), $s_image_path);
  		return $s_image_path;
    }

    function checkCategoryTitle(){

    }
}
