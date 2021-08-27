<?php
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;
use Validator;
class userController extends Controller{
	public function userRegister(Request $request){ 
		$id=$request->id;
		$phone=$request->phone;
		$name=$request->name;
		$email=$request->email;
		$address=$request->address;
		$device_id=$request->device_id;
		$type=$request->type;
		$photo = $request->file('photo');
		$password = md5($request->password);
		$result=array('status'=>200,'message'=> 'Photo updated Successful.');
		if(!isset($name)){
			$result=array('status'=>201,'message'=> 'Name is required.');
		}else if(!isset($phone)){
			$result=array('status'=>201,'message'=> 'phone is required.');
		}else if(!isset($email)){
			$result=array('status'=>201,'message'=> 'email is required.');
		}else if(!isset($password)){
			$result=array('status'=>201,'message'=> 'password is required.');
		}else if(!isset($type)){
			$result=array('status'=>201,'message'=> 'type is required.');
		}else{
			$date = date("Y-m-d h:i:s", time());
			if($type=='add_user'){
				$checkSupplier = DB::table('customers')->where('email',$email)->whereOr('phone',$phone)->select('email','phone')->first();
				if($checkSupplier && $checkSupplier->email==$email){
					$result=array('status'=>201,'message'=> 'Email already exists, please try another.');
				}else if($checkSupplier && $checkSupplier->phone==$phone){
					$result=array('status'=>201,'message'=> 'Phone already exists, please try another.');
				}else{
					if(isset($photo)){						
						$extension = $photo->getClientOriginalExtension();
						$filename = time().'.'.$extension;
						$photo->move('public/system/profile/', $filename);
					}else{
						$filename='';
					}
					$data = ['device_id'=>$device_id,'phone'=>$phone,'address'=>$address,'name'=>$name,'email'=>$email, 'created_at'=>$date,'photo'=>$filename, 'updated_at'=>$date,'password'=>$password];
					$addSupplier =DB::table('customers')->insert($data);
					if($addSupplier){
						$result=array('status'=>200,'message'=> 'User added successfully.');
					}else{
						$result=array('status'=>201,'message'=> 'Something went wrong. Please try again.');
					}
				}
			}
			if($type=='edit_user'){
				$checkSupplier =DB::table('customers')->where('id',$id)->first();
					if($checkSupplier){
						if(isset($photo)){
							$extension = $photo->getClientOriginalExtension();
							$filename = time().'.'.$extension;
							$photo->move('public/system/profile/', $filename);
						}else{
							$filename=$checkSupplier->photo ? $checkSupplier->photo : '';
						}
					$data = ['phone'=>$phone ? $phone : $checkSupplier->phone,'address'=>$address ? $address : $checkSupplier->address,'name'=>$name ? $name : $checkSupplier->name,'email'=>$email ? $email : $checkSupplier->email,'photo'=>$filename, 'updated_at'=>$date];
					$updateSupplier =DB::table('customers')->where('id',$id)->update($data);
					if($updateSupplier){
						$result=array('status'=>200,'message'=> 'User updated successfully.');
					}else{
						$result=array('status'=>201,'message'=> 'Something went wrong. Please try again.');
					}
				}else{
					$result=array('status'=>201,'message'=> 'User not found in system');
				}
			}
		}
		echo json_encode($result);
    }

	public function userLogin(Request $request){
		$phone=$request->phone;
		$password=md5($request->password);
		$suparAdmin =DB::table('customers')->where('phone', $phone)->where('password', $password)->select('id','phone','name','email','device_id','address','created_at')->first();
		if(!empty($suparAdmin)){
			$result=array('status'=>200,'data'=>$suparAdmin,'message'=> 'Login Successful.');
		}else{
			$result=array('status'=>201,'message'=> 'Invalid Phone and Password.');
		}
		echo json_encode($result);
    }
	
	public function forgotPassword(Request $request){
		$phone=$request->phone;
		$suparAdmin =DB::table('customers')->where('phone', $phone)->select('id','phone')->first();
		if(!empty($suparAdmin)){
			$otp = 12345;
			$update =DB::table('customers')->where('phone', $phone)->update(['otp'=>$otp]);
			$result=array('status'=>200,'data'=>$suparAdmin,'otp'=>$otp,'message'=> 'OTP sent on you phone. Please check..');
		}else{
			$result=array('status'=>201,'message'=> 'Detail not found.');
		}
		echo json_encode($result);
    }
	public function verifyOtop(Request $request){
		$id=$request->user_id;
		$otp=$request->otp;
		$suparAdmin =DB::table('customers')->where('id', $id)->where('otp', $otp)->select('id','phone','name','email')->first();
		if(!empty($suparAdmin)){
			$result=array('status'=>200,'data'=>$suparAdmin,'message'=> 'OTP Verified Successfully, Redirect to change password');
		}else{
			$result=array('status'=>201,'message'=> 'OTP not matching. Please send correct otp');
		}
		echo json_encode($result);
    }
	public function changePass(Request $request){
		$id=$request->user_id;
		$password=$request->password;
		if(!isset($id)){
			$result=array('status'=>201,'message'=> 'id is required.');
		}else if(!isset($password)){
			$result=array('status'=>201,'message'=> 'password is required.');
		}else{
			DB::table('customers')->where('id',$id)->update(['password'=>md5($password)]);
			$result=array('status'=>200, 'message'=> 'Password updated successfully');
		}
		echo json_encode($result);
    }
	public function customertAdd(){
        $tags =DB::table('tags')->select('id','name')->orderBy('id', 'DESC')->get();
        return view('customer.addCustomer', compact('tags'));
    }
	/*public function customertList(){
        $customertList =DB::table('customers')->orderBy('id', 'DESC')->get();
        return view('customer.allCustomers', compact('customertList'));
    }*/

    public function customertList() {
     $customertList = DB::table('customers')->orderBy('id', 'asc')->get();
     return view('customer.allCustomers', compact('customertList'));
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

	public function getCustomertEditData($id){
		$tags =DB::table('tags')->select('id','name')->orderBy('id', 'DESC')->get();
        $getCustomer =DB::table('customers')->where('id', $id)->first();
        return view('customer.editCustomer', compact('getCustomer','tags'));
    }
	public function profile(Request $request){
		$user_id=$request->user_id;
		$suparAdmin =DB::table('customers')->where('id', $user_id)->first();
		if(!empty($suparAdmin)){
			$result=array('status'=>200,'data'=>$suparAdmin,'message'=> 'Profile Successful.');
		}else{
			$result=array('status'=>201,'message'=> 'Data not found.');
		}
		echo json_encode($result);
    }
	public function profilePhoto(Request $request){
		$user_id=$request->user_id;
		$photo = $request->file('photo');
		$suparAdmin =DB::table('customers')->where('id', $user_id)->first();
		if(!empty($suparAdmin)){
			if(isset($photo)){
				$extension = $photo->getClientOriginalExtension();
				$filename = time().'.'.$extension;
				$photo->move('public/system/profile/', $filename);
			}else{
				$filename=$suparAdmin->photo ? $suparAdmin->photo : '';
			}
			DB::table('customers')->where('id', $user_id)->update(['photo'=>$filename]);
			$result=array('status'=>200,'message'=> 'Photo updated Successful.');
		}else{
			$result=array('status'=>201,'message'=> 'Data not found.');
		}
		echo json_encode($result);
    }
}