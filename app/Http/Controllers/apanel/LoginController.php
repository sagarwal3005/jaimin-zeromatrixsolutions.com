<?php

namespace SocialSoc\Http\Controllers\apanel;

use Illuminate\Http\Request;
use SocialSoc\Http\Controllers\Controller;
use SocialSoc\models\Admin;

class LoginController extends Controller
{
    function login(){
    	return view('apanel/login');
    }

    function index(){
    	//\Session::forget('admin_id');
    	return view('apanel/index');
    }

    function checkLogin(Request $o_request){
    	
    	$o_admin = new Admin;
    	$t_user = $o_admin -> checkLogin($o_request->username,md5($o_request->password));
    	if(!empty($t_user)){
    		echo $t_user[0]['id'];
    		session(['admin_id' => $t_user[0]['id']]);
    		return redirect('apanel/');
    	}else{
    		return redirect('apanel/login');
    	}
    }
}
