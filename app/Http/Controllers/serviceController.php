<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;
use Validator;

class serviceController extends Controller
{
    //
    public function serviceManager(Request $request){
		$id=$request->id;
		$service=$request->service;
		$charge=$request->charge;
		$type=$request->type;
		if(!isset($service)){
			$result=array('status'=>false,'message'=> 'service is required.');
		}else{
			$date = date("Y-m-d h:i:s", time());
			if($type=='add_service'){
				$rules = array(
					'service'=>'required',			
					'charge'=>'required',
				);
				$validation = Validator::make($request->all(), $rules);
				if($validation->passes()) { 

					$data = ['ser_name'=>$service,'charge'=>$charge,'created_at'=>$date, 'updated_at'=>$date];
					$addservice =DB::table('services')->insert($data);
					if($addservice){
						$result=array('status'=>true,'message'=> 'Service added successfully.');
					}else{
						$result=array('status'=>false,'message'=> 'Something went wrong. Please try again.');
					}
				}else {
					$errors = $validation->errors()->all();
					$result=array('status'=>false,'errors'=>$errors);
				}
			}
			if($type=='edit_service'){
				$checkservice =DB::table('services')->where('id',$id)->first();
				$errors = array();
                if($checkservice){
						$data = [ 'ser_name'=>$service ? $service : $checkservice->ser_name,'charge'=>$charge ? $charge : $checkservice->charge,'updated_at'=>$date];
						$updateservice = DB::table('services')->where('id',$id)->update($data);
						if($updateservice){
							$result=array('status'=>true,'message'=> 'Service updated successfully.');
						}else{
							$result=array('status'=>false,'message'=> 'Something went wrong. Please try again.');
						}
					}else{
						$result=array('status'=>false,'message'=> 'Service not found in system');
					}
				
			}
		}
		echo json_encode($result);
    }
	public function serviceAdd(){
       
        return view('service.addservice');
    }
	/*public function customertList(){
        $customertList =DB::table('customers')->orderBy('id', 'DESC')->get();
        return view('customer.allCustomers', compact('customertList'));
    }*/

    public function serviceList() {
     $serviceList = DB::table('services')->where('service_code',3)->orderBy('id', 'DESC')->get();
     return view('service.allService', compact('serviceList'));
    }
	public function subscriptionList() {
		$serviceList = DB::table('services')->where('service_code',1)->orderBy('id', 'DESC')->get();
		return view('service.allSub', compact('serviceList'));
	   }
	   public function taxList() {
		$serviceList = DB::table('services')->where('service_code',2)->orderBy('id', 'DESC')->get();
		return view('service.allTax', compact('serviceList'));
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

	public function getServiceEditData($id){
        $getService =DB::table('services')->where('id', $id)->first();
        return view('service.editService', compact('getService'));
    }
}
