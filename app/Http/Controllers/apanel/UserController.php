<?php

namespace SocialSoc\Http\Controllers\apanel;

use Illuminate\Http\Request;
use SocialSoc\Http\Controllers\Controller;
use SocialSoc\User;
use SocialSoc\models\Admin;


class UserController extends Controller
{
   
    public function index(){        
        $t_users = User::all()->toArray();
        return view('apanel/user/index',compact(['t_users']));
    }

    function changeStatus(Request $o_request){
    	if(isset($o_request->id) && !empty($o_request->id)){
    		$o_user = New User;
    		$o_user = User::find($o_request->id);
            $o_user->is_active = $o_request->is_active;
            if($o_user->save()){
            	return  json_encode(array('status'=>1));
            }
    	}
    	return  json_encode(array('status'=>0));    		
    }

    function logout(){
        \Session::forget('admin_id');
        return redirect('apanel/login');
    }

    function changePassword(){
        return view('apanel/user/change_password');
    }

    function updatePassword(Request $o_request){
        $i_admin_id = \Session::get('admin_id');
        $o_admin = Admin::find($i_admin_id);
        if(isset($o_admin) && !empty($o_admin)){
            
            if($o_admin->password == md5($o_request->old_password)){
                    $o_admin->password = md5($o_request->password);
                    if($o_admin->save()){
                        \Session::flash('s','Password Change Successfully');
                    }
            }else{
                \Session::flash('e','Old Password is Wrong');
                //Session::put('msg', "Old Password is Wrong");
            }
        }else{
           //Session::put('msg', "Password Not Change.Please Try Again!");
            \Session::flash('e','Password Not Change.Please Try Again!');
        }
        return redirect('apanel/changePassword');
    }
}
