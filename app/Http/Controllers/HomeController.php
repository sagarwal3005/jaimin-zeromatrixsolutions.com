<?php

namespace SocialSoc\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use SocialSoc\models\Category;
use SocialSoc\models\Society;
use SocialSoc\User;
use SocialSoc\models\User_category;
use SocialSoc\models\User_request;
use SocialSoc\models\User_notification;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        $t_user = Auth::User()->toArray();
        $o_category = new Category;
        $t_categories = $o_category -> getUserCategories(Auth::User()->id);
        $t_societies = Society::all()->toArray();
        return view('home',compact(['t_categories'],['t_societies'],['t_user']));
    }

    function saveUserDetails(Request $o_request){
        
        $i_user_id = Auth::User()->id;
        $o_user = User::find($i_user_id);
        $o_user->user_description = $o_request->user_description;
        $o_user->society_id = $o_request->society_id;
        $o_user->save();      
        
        User_category::where('user_id', $i_user_id)->delete();
        if(isset($o_request->category_ids) && !empty($o_request->category_ids)){
            foreach ($o_request->category_ids as $key => $t_category) {
                $o_user_category = New User_category;
                $o_user_category->user_id = $i_user_id;
                $o_user_category->ip_address= $_SERVER['REMOTE_ADDR'];
                $o_user_category->category_id = $t_category;
                $o_user_category->save();
            }           
        }
        return redirect('profile');       

    }
    function profile(){
        $i_user_id = Auth::User()->id;
        $t_user = User::find($i_user_id)->toArray();
        $t_near_society_members = array();
        $t_notifications = array();
        if(!empty($t_user)){
            $i_society_id = $t_user['society_id'];
            $o_user = New User;
            $t_near_society_members = $o_user->getSocietyUsers($i_society_id);
            $t_notifications = User_notification::where([['receiver_user_id','=',$i_user_id]])->orderBy('id','desc')->get()->toArray();
        }
        return view('profile',compact(['t_near_society_members'],['t_user'],['t_notifications']));

    }

    function checkRequest(Request $o_request){
        $i_user_id = Auth::User()->id;
        $i_receiver_user_id = $o_request->receiver_user_id;

        $t_user_request = User_request::where([['user_id','=',$i_user_id],['receiver_user_id','=',$i_receiver_user_id]])->get()->toArray();

        if(!empty($t_user_request )){
            return json_encode(array('status'=>$t_user_request[0]['status'])); // view profile
        }else{
            return json_encode(array('status'=>3)); // send request
        }

    }

    function sendRequest(Request $o_request){
       if(isset($o_request->receiver_user_id) && !empty($o_request->receiver_user_id)){
            $o_user_request = new User_request;
            $o_user_request->user_id = Auth::User()->id;
            $o_user_request->receiver_user_id = $o_request->receiver_user_id;
            $o_user_request->ip_address = $_SERVER['REMOTE_ADDR'];
            //$o_user_request->status = 0;
            if($o_user_request->save()){
                $s_notification = Auth::User()->name .' has sent you Request';
                $i_receiver_user_id=$o_request->receiver_user_id;
                $i_user_id = Auth::User()->id;
                $this -> saveNotifications($i_receiver_user_id,$s_notification,$i_user_id);
                
                 return json_encode(array('status'=>1)); // send request
            }          
       }
       return json_encode(array('status'=>0)); // send request
       

    }

    private function saveNotifications($i_receiver_user_id,$s_notification,$i_user_id){
         $o_user_notification = new User_notification;
         $o_user_notification->user_id=$i_user_id;
         $o_user_notification->receiver_user_id=$i_receiver_user_id;
         $o_user_notification->ip_address= $_SERVER['REMOTE_ADDR'];
         $o_user_notification->notification = $s_notification;
         $o_user_notification->save();
    }

     function viewProfile($i_receiver_user_id){
        $i_user_id = Auth::User()->id;
         $t_user_request = User_request::where([['user_id','=',$i_user_id],['receiver_user_id','=',$i_receiver_user_id],['status','=',1]])->get()->toArray();
         if(!empty($t_user_request)){
             $t_user = User::find($i_receiver_user_id)->toArray();
             return view('view_profile',compact(['t_user']));
         }
         return back();
    }

    function actionRequest(Request $o_request){
       if(!empty($o_request->id)){
            $o_user_request = User_request::find($o_request->id);
            $o_user_request->status = $o_request->status;
            if($o_user_request->save()){
                if($o_request->status==1){
                    $s_notification = Auth::User()->name .' has accepted your Request';
                }else if($o_request->status==2){
                    $s_notification = Auth::User()->name .' has rejected your Request';
                }
                $i_user_id = Auth::User()->id;
                $i_receiver_user_id=$o_request->receiver_user_id;
                $this -> saveNotifications($i_receiver_user_id,$s_notification,$i_user_id);

                return json_encode(array('status'=>1)); 
            } 
       }
       return json_encode(array('status'=>0));
    }

    function requestList(){
        $i_user_id = Auth::User()->id;
        $o_user_request = new User_request;
        $t_user_requests = $o_user_request -> getRequestList($i_user_id);
        return view('request_list',compact(['t_user_requests']));
    }

    function uploadProfileImage(Request $o_request){
        if ($o_request->file('profile_image') != '') {

            $file = $this->uploadImage($o_request);
            $i_user_id = Auth::User()->id;
            $o_user = User::find($i_user_id);
            $o_user->profile_image = $file;
            if($o_user->save()){
                return json_encode(array('status'=>1,'image_path'=>$file)); 
            }
        }
        return json_encode(array('status'=>0)); 
    }

    private function uploadImage($oRequest){
        $s_image_path = "profile_".time().'.'.$oRequest->profile_image->getClientOriginalExtension();
        $path = public_path().'/images/profile';
        if (!is_dir($path)) {
            mkdir($path,0777, true);
        }
        $oRequest->profile_image->move(public_path('images/profile'), $s_image_path);
        return $s_image_path;
    }


}
