<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;
use Validator;

class locationController extends Controller
{
    
	public function locationManager(Request $request){
		$id=$request->id;
		$code=$request->code;
		$area=$request->area;
        $city=$request->city;
		$type=$request->type;
		if(!isset($code)){
			$result=array('status'=>false,'message'=> 'code is required.');
		}else{
			$date = date("Y-m-d h:i:s", time());
			if($type=='add_location'){
				$rules = array(
					'code'=>'required',			
					'city'=>'required',
				);
				$validation = Validator::make($request->all(), $rules);
				if($validation->passes()) { 

					$data = ['code'=>$code,'area_name'=>$area,'city'=>$city,'created_at'=>$date, 'updated_at'=>$date];
					$addloction =DB::table('locations')->insert($data);
					if($addloction){
						$result=array('status'=>true,'message'=> 'Location added successfully.');
					}else{
						$result=array('status'=>false,'message'=> 'Something went wrong. Please try again.');
					}
				}else {
					$errors = $validation->errors()->all();
					$result=array('status'=>false,'errors'=>$errors);
				}
			}
			if($type=='edit_location'){
				$checklocation =DB::table('locations')->where('id',$id)->first();
				$errors = array();
                if($checklocation){
						$data = [ 'code'=>$code ? $code : $checklocation->code,'area_name'=>$area ? $area : $checklocation->area_name,'city' => $city ? $city : $checklocation->city,'updated_at'=>$date];
						$updatelocation = DB::table('locations')->where('id',$id)->update($data);
						if($updatelocation){
							$result=array('status'=>true,'message'=> 'Location updated successfully.');
						}else{
							$result=array('status'=>false,'message'=> 'Something went wrong. Please try again.');
						}
					}else{
						$result=array('status'=>false,'message'=> 'Locationn not found in system');
					}
				
			}
		}
		echo json_encode($result);
    }
	public function locationAdd(){
       
        return view('locations.addLocation');
    }
	/*public function customertList(){
        $customertList =DB::table('customers')->orderBy('id', 'DESC')->get();
        return view('customer.allCustomers', compact('customertList'));
    }*/

    public function locationList() {
     $locationList = DB::table('locations')->orderBy('id', 'DESC')->get();
     return view('locations.allLocation', compact('locationList'));
    }

    public function fetch_data(Request $request)  {
	    if($request->ajax())   {
	    	$sort_by = $request->get('sortby');
	    	$sort_type = $request->get('sorttype');
        	$query = $request->get('query');
        	$query = str_replace(" ", "%", $query);
	      	$customertList = DB::table('customers')
	                    ->where('id', 'like', '%'.$query.'%')
	                    ->orWhere('name', 'like', '%'.$query.'%')
	                    ->orWhere('email', 'like', '%'.$query.'%')
	                    ->orWhere('phone', 'like', '%'.$query.'%')
	                    ->orderBy($sort_by, $sort_type)
	                    ->get();
	      return view('customer.pagination_data', compact('customertList'))->render();
	     }
    }

	public function getLocationEditData($id){
        $getLocation =DB::table('locations')->where('id', $id)->first();
        return view('locations.editLocation', compact('getLocation'));
    }
}
