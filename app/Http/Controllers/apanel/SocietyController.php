<?php

namespace SocialSoc\Http\Controllers\apanel;

use Illuminate\Http\Request;
use SocialSoc\Http\Controllers\Controller;
use SocialSoc\models\Society;
use SocialSoc\models\City;
use SocialSoc\models\Country;
use SocialSoc\models\State;

class SocietyController extends Controller
{
    function add(){
    	return view('apanel/society/add',['t_countries'=>$this->getCountry()]);
    }

    function edit($id){
    	$t_society_data = Society::where([['id','=',$id]])->get()->toArray();
    	if(empty($t_society_data)){
    		return back();
    	}
    	return view('apanel/society/add',['t_society'=>$t_society_data,'t_countries'=>$this->getCountry()]);
    }

    function index(){
    	$o_society = new Society;
    	$t_society = $o_society -> getSociety();
    	return view('apanel/society/index',['t_societies'=>$t_society]);
    }

    function create(Request $o_request,$id=''){	
    	if(!empty($id)){
    		$o_society = Society::find($id);
    		if($o_society->delete_status == 1){
    			return back();
    			exit;
    		}
    	}else{
    		$o_society = new Society;
    	}
    	unset($o_request->all()['_token']);
    	$t_array = $o_request->all();
    	if ($o_request->file('society_image1') != '') {
            $s_image = $this->uploadImage($o_request);
            $t_array['society_image'] = $s_image;
        }
        // echo '<pre>';
        // print_r($t_array);exit;
        $address = $t_array['name']." ,".trim($t_array['address_line_1'].", ".$t_array['address_line_2']);
        $o_country = New Country;
        $o_state = New State;
        $o_city = New City;

        $t_country = $o_country->getCountryName($t_array['country_id']);
        $t_state = $o_state->getStateName($t_array['state_id']);
        $t_city = $o_city->getCityName($t_array['city_id']);
        // if(!empty($t_country[0]['country_name'])){
        // 	$address .=' ,'.$t_country[0]['country_name'];
        // }
       
        if(!empty($t_city[0]['city_name'])){
        	$address .=' ,'.$t_city[0]['city_name'];
        }
         if(!empty($t_state[0]['state_name'])){
        	$address .=' ,'.$t_state[0]['state_name'];
        }
        $address .=' ,'.$t_array['pin'];
        
    	$t_latlon = $this -> getLatLon($address);
    	if(!empty($t_latlon)){
    		$t_array['latitude'] = $t_latlon[0];
    		$t_array['longitude'] = $t_latlon[1];
    	}else{
    		$t_array['latitude'] = '';
    		$t_array['longitude'] = '';
    	}
    	
        
        if($o_society->fill($t_array)->save()){
            \Session::flash('s','Society Saved Successfully');
        }else{
            \Session::flash('e','Society Not Saved');
        }  
        return redirect('apanel/society/index');
    }

    private function getLatLon($address){
    	//$address = $dlocation; // Google HQ
        // $prepAddr = str_replace(' ','+',$address);
        // $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
        // $output= json_decode($geocode);
        // $latitude = $output->results[0]->geometry->location->lat;
        // $longitude = $output->results[0]->geometry->location->lng;
        // return array($latitude,$longitude);

        //$address = 'BTM 2nd Stage, Bengaluru, Karnataka 560076';
		$geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address).'&sensor=false');
		$geo = json_decode($geo, true);

		if ($geo['status'] == 'OK') {
		  // Get Lat & Long
		  $latitude = $geo['results'][0]['geometry']['location']['lat'];
		  $longitude = $geo['results'][0]['geometry']['location']['lng'];
		  return array($latitude,$longitude);
		}
		return false;
    }

     private function uploadImage($oRequest){
    	$s_image_path = "society_".time().'.'.$oRequest->society_image1->getClientOriginalExtension();
    	$path = public_path().'/images/society';
  		if (!is_dir($path)) {
		    mkdir($path,0777, true);
		}
		$oRequest->society_image1->move(public_path('images/society'), $s_image_path);
  		return $s_image_path;
    }


    public function delete($id){
    	$o_society = Society::find($id);
    	if(isset($o_society->id)){	
			$o_society->delete();
			return array('flag'=>true);
		}else{
			return array('flag'=>false);
		}		
    }

    public function getStates(Request $request){
    	$t_request = $request->all();
    	if(isset($t_request['country_id']) && !empty($t_request['country_id'])){
    		$state_data = State::where([['delete_status','!=',1],['country_id','=',$t_request['country_id']]])->select(['id','state_name'])->get();
    		return ['flag'=>true,'states'=>$state_data];
    	}
    	return ['flag'=>false];
    }

    public function getCities(Request $request){
    	$t_request = $request->all();
    	if(isset($t_request['state_id']) && !empty($t_request['state_id'])){
    		$state_data = City::where([['delete_status','!=',1],['state_id','=',$t_request['state_id']]])->select(['id','city_name'])->get();
    		return ['flag'=>true,'cities'=>$state_data];
    	}
    	return ['flag'=>false];
    }

    private function getCountry(){
    	return Country::select(['id','country_name'])->get();
    }


}
