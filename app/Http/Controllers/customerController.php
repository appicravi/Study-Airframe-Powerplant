<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;
use Validator;
use Carbon\Carbon; 
use App\Models\User;
use App\Models\Password_reset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Mail; 


class customerController extends Controller{

	//Customer Login Check 
	public function customerLogin(Request $request){
		$validator = Validator::make($request->all(),[
			'email' =>'required|unique:customers|email',
			'password' =>'required|min:4',
		]);
		if($validator->fails()){
			$errors=$validator->errors()->all();
			$result=array('status'=>false,'errors'=>$errors);
		}
		$email_status=DB::table('customers')->where('email',$request->email)->first();
		if(is_null($email_status)){
			$result=array('status'=>false,'message'=>'Email Does Not Exist');
		}
		else{
             $auth=DB::table('customers')->where('email',$request->email)->where('password',md5($request->password))->first();
			 if(is_null($auth)){
				 $result=array('status'=>false,'message'=> 'Incorrect Password');
			 }
			 else{
				 if(empty(session('bookig_data')) && empty(session('bookig_data')) && empty(session('bookig_data')))
				{
					 session(['user' => $request->email]);
					 $status=DB::table('bookings')->where('customer_id',$request->email)->where('status','Pending')->first();
					 if($status){
						$result=array('status'=>'welcome','message'=> 'Login Successfully');
					 }else{
						   $status_assign=DB::table('bookings')->where('customer_id',$request->email)->where('status','Assign')->first();
						   if($status_assign){
						      $result=array('status'=>'cleaner','message'=> 'Login Successfully');
						  }else{
							$result=array('status'=>true,'message'=> 'Login Successfully');
						  }
					 }
			     	
					
				 }else
				 {

					session(['user' => $request->email]);	
					$result=array('status'=>'book','message'=> 'Login  Successfully Redirect to payment page');
				 }
			 }

		}
		echo json_encode($result);

	}

	//Customer Sign Up By Customer(own )
	public function customerSignUp(Request $request){

		$validator = Validator::make($request->all(),[
			'name' =>'required',
			'email' =>'required|unique:customers|email',
			'password' =>'required|min:4',
		]);
		if($validator->fails()){
			$errors=$validator->errors()->all();
			$result=array('status'=>false,'errors'=>$errors);
		}
		$email_status=DB::table('customers')->where('email',$request->email)->first();
		if(!is_null($email_status)){
			$result=array('status'=>false,'message'=>'Email Already Exist');
		}
		else{
			$date = date("Y-m-d h:i:s", time());
			$data=['name' =>$request->name,'email' =>$request->email,'password'=>md5($request->password),'created_at'=>$date, 'updated_at'=>$date];
             $auth=DB::table('customers')->insert($data);
			 if(is_null($auth)){
				 $result=array('status'=>false,'message'=> 'Something went wrong. Please try again.');
			 }
			 else{

				if(empty(session('bookig_data')) && empty(session('bookig_data')) && empty(session('bookig_data')))
					{
						session(['user' => $request->email]);
				    $result=array('status'=>true,'message'=> 'Registeration Successfully');
					
				 }
				 else{
					session(['user' => $request->email]);
					$result=array('status'=>'book','message'=>'Registeration Successfully Redirect to payment page' );
				}
			 }

		}
		echo json_encode($result);

	}

	  // Add And Edit Customer Data By Admin
	public function customerManager(Request $request){
		$id=$request->id;
		$name=$request->name;
		$email=$request->email;
		$type=$request->type;
		$phone = $request->phone;

		$filename="";
		if($request->hasFile('image')){
		$file=$request->file('image');
		$filename=$file->getClientOriginalName();
		$destination=public_path("images");
		 $file->move($destination,$filename);
		}
		
		if(!isset($name)){
			$result=array('status'=>false,'message'=> 'Name is required.');
		}else{
			$date = date("Y-m-d h:i:s", time());
			if($type=='add_customer'){

				$rules = array(
					'name'=>'required',
					'email'=>'required|unique:users',			
					// 'phone'=>'required|unique:users',
				);
				$validation = Validator::make($request->all(), $rules);
				if($validation->passes()) { 

					$data = ['role_id'=>1,'status'=>1,'name'=>$name,'email'=>$email,'created_at'=>$date, 'updated_at'=>$date,'image'=>$filename];
					$addSupplier =DB::table('users')->insert($data);
					if($addSupplier){
						$result=array('status'=>true,'message'=> 'User added successfully.');
					}else{
						$result=array('status'=>false,'message'=> 'Something went wrong. Please try again.');
					}
				}else {
					$errors = $validation->errors()->all();
					$result=array('status'=>false,'errors'=>$errors);
				}
			}
			if($type=='edit_customer'){
				$checkSupplier =DB::table('users')->where('id',$id)->first();
				$errors = array();

				
					if($checkSupplier){
						$data = ['name'=>$name ? $name : $checkSupplier->name,'phone'=>$phone ? $phone : $checkSupplier->phone,'email'=>$email ? $email : $checkSupplier->email,'updated_at'=>$date];
						$updateSupplier =DB::table('users')->where('id',$id)->update($data);
						if($updateSupplier){
							$result=array('status'=>true,'message'=> 'User updated successfully.');
						}else{
							$result=array('status'=>false,'message'=> 'Something went wrong. Please try again.');
						}
					}else{
						$result=array('status'=>false,'message'=> 'User not found in system');
					}				
			}
		}
		echo json_encode($result);
    }
	
// Refresh Customer Welcome PAge
	public function refershWelcome(){
	
		$customer_id=session('user');
		$booking=DB::table('bookings')->where('customer_id',$customer_id)->orderBy('id','DESC')->first();

		if($booking->status!='Pending'){
			
			$result=array('status'=>true,'message'=>'Cleaner Info');
		}else{
			$result=array('status'=>false,'message'=>'Cleaner Not Assign');
		}
		echo json_encode($result);
	}

	//payment Screen For Customer
	public function Payment(){
       
        return view('customer.payment');
    }

	public function paymentMake(Request $request){
		$result=array('status'=>200,'message'=>'succesfull');
		echo json_encode($result);
	 }

	//Welcome view for Customer After Booking Confirm 
	public function welcome(){
        
		if(empty(session('user')) && empty(session('user')) && empty(session('user'))){
			return redirect('/user');
		}else
			{
			  $assign_status=DB::table('bookings')->where('customer_id',session('user'))->orderBy('id','DESC')->first();	
               return view('users.welcome',compact('assign_status'));
			}
    }

	//Email View To resert Password for Customer
	public function resetPassword(){
       
        return view('users.Forgetpassword');
    }
	
	//new Password View For customer
	public function enterPassword($token){
       
        return view('users.resetpassword',compact('token'));
    }


	// Send Password Reset Email To Customer

	function sendResetPasswordEmail(Request $request){
        $validate=Validator::make($request->all(),[
            'email' => 'required|email',
        ]);
        if($validate->fails()){
            $result=array('status' =>'Failed',"success" => false,'message' =>'Validation failed','error' =>$validate->errors());
        }
        $email_status=DB::table('customers')->where('email',$request->email)->first();
        if(is_null($email_status)){
			$result=array('status' => false,'status' => false,'message' =>"Email does not exist");

        }
        else{
                $token=Str::random(16);
                $pass= new password_reset();
                $pass->email=$request->email;
                $pass->timestamps=false;
                $pass->token=$token;
                $pass->created_at=Carbon::now();
                $pass->save();
                Mail::send(['text'=>'users.verify'],['token' => $token ],function($message){
                    $message->to("vinod.appic@gmail.com");
                    $message->subject("Reset Password Notification");

                });
                $result=array('status' => true,'message' =>"Password reset link send to your email address");
        }
		echo json_encode($result);
    }

	//Chnage Password By Customer
	function updatePassword(Request $request){
        $validate=Validator::make($request->all(),[
            'password' => 'required|min:4',
            // 'cpassword' => 'required|',
        ]);
        if($validate->fails()){
            return response()->json(['message' =>'validtion  failed','error'=>$validate->errors()]);
        }
        $token_status=DB::table('password_resets')->where('token', $request->r_token)->first();
		
		if(is_null($token_status)){
            $result=array('status'=>false,'message' => "Token Does Not Exist");
        }else{

        $update=DB::table('customers')->where('email' ,$token_status->email)->update(['password'=> md5($request->password)]);

        Password_reset::where('email',$token_status->email)->delete();
        $result=array('status'=>true,'message' =>'Password Reset Success');
		}

		echo json_encode($result);
    }

	//make Paymemt Status



	//Add customer By Admin 
	public function customertAdd(){
       
        return view('customer.addCustomer');
    }
	
	// Check Service Availbale location
	public function locationCheck(Request $request){
		$code=$request->code;

		$location=DB::table('locations')->where('code',$code)->first();
		if($location){
			$result=array('status'=>true,'message'=> 'Our Services Are Available At This Loaction.');
		}else{
			$result=array('status'=>false,'message'=> 'Our Services Are Not Available At This Loaction.');
		}
		echo json_encode($result);
	}


	// Assignd Cleaner Information to User
	public function cleanerInfo(){

		if(empty(session('user')) && empty(session('user')) && empty(session('user'))){
			return redirect('/user');
		}	   

		$id=session('user'); 
		$booking=DB::table('bookings')->where('customer_id',$id)->orderBy('id','DESC')->where('status',"Assign")->first();
		if(empty($booking) && empty($booking) && empty($booking)){
			return redirect('/booking');
		}
		$bookings_details=DB::table('bookings_details')->where('booking_id',$booking->id)->first();
				
		$booking_schedule=DB::table('booking_schedules')->where('booking_id',$booking->id)->where('status','Assign')->first();

		$assign=DB::table('assigns')->where('booking_id',$booking->id)->first();
		$cleaner_id=$assign->cleaner_id;
		$cleaner=DB::table('cleaners')->where('id',$cleaner_id)->first();
		$avg=DB::table('reviews')->where('cleaner_id',$cleaner_id)->avg('rating');
		$count=DB::table('reviews')->where('cleaner_id',$cleaner_id)->count();
		
		
		 $bookingChange=DB::table('change_requests')->where('booking_id',$booking->id)->orderBy('id','DESC')->first();
		 if($bookingChange){
			$status=$bookingChange->status;
		}else{
			$status="q";
		}

		 $bookingReshedule=DB::table('reshedule_requests')->where('booking_id',$booking->id)->orderBy('id','DESC')->first();
		 if($bookingReshedule){
			$status_resh=$bookingReshedule->status;
		}else{
			$status_resh="q";
		}
		
			return view('users.info', compact('cleaner','assign','avg','status_resh','count','bookings_details','status','booking_schedule','booking'));
						
						
	}

		// Send Reschedule Request to Cleaning
	public function customerReschedule(Request $request){
		$booking_id=$request->booking_id;
		$date=$request->date;
		$time=$request->time;
		$today=date('Y-m-d h:i:s');

		$data=['booking_id'=>$booking_id,'date'=>$date,'time'=>$time,'status'=>'Pending','created_at'=>$today,'updated_at'=>$today];
		$reschedule=DB::table('reshedule_requests')->insert($data);
		if($reschedule){
			$result=array('status'=>true,'message'=> 'Reschedule Request Send .');
		}else{
			$result=array('status'=>false,'message'=> 'Something went wrong. Please try again.');
		}
		echo json_encode($result);
	}

	//All user List To admin 
    public function userList() {
     $customertList = User::where('role_id',1)->orderBy('id', 'DESC')->paginate(10);//DB::table('users')->where('role_id',1)->orderBy('id', 'DESC')->get();
     return view('customer.allCustomers', compact('customertList'));
    }

	// Send Review by Customer 
     public function customerReview(Request $request){
		$date=date('Y-m-d h:i:s');
		$id=$request->cleaner_id;
		$name=$request->name;
		$email=$request->email;
		$comment=$request->comment;
		$rating=$request->rating;
        $data=['cleaner_id'=>$id,'name'=>$name,'email'=>$email,'rating'=>$rating ,'comment'=>$comment,'created_at'=>$date,'updated_at'=>$date];
		$review=DB::table('reviews')->insert($data);
		if($review){
			$result=array('status' =>true,'message'=>'Thank You for your feedback');
		}
		else{
			$result=array('status' =>false,'message'=>'Something went wrong');
		}

		if(empty(session('user')) && empty(session('user')) && empty(session('user'))){
			return redirect('/user');
		}
			echo json_encode($result);
	 }  


	 // Contact Us by Customer 

	 public function customerInTouch(Request $request){
		$date=date('Y-m-d h:i:s');
		$name=$request->name;
		$email=$request->email;
		$comment=$request->comment;
        $data=['name'=>$name,'email'=>$email,'message'=>$comment,'created_at'=>$date,'updated_at'=>$date];
		$review=DB::table('contacts')->insert($data);
		if($review){
			$result=array('status' =>true,'message'=>'Thank You for your Message');
		}
		else{
			$result=array('status' =>false,'message'=>'Something went wrong');
		}

		if(empty(session('user')) && empty(session('user')) && empty(session('user'))){
			return redirect('/user');
		}
			echo json_encode($result);
	 }
	 

	 //Cleaner Change Request By Customer

	 public function customerChange(Request $request){
		$date=date('Y-m-d h:i:s');
		$book_id=$request->booking_id;
		$cleaner_id=$request->cleaner_id;
		$customer_id=$request->customer_id;
        $data=['booking_id'=>$book_id,'cleaner_id'=>$cleaner_id,'customer_id'=>$customer_id ,'status'=>'Pending','created_at'=>$date,'updated_at'=>$date];
		$review=DB::table('change_requests')->insert($data);
		if($review){
			$result=array('status' =>true,'message'=>'We Will Assign New Cleaner Soon');
		}
		else{
			$result=array('status' =>false,'message'=>'Something went wrong');
		}
		if(empty(session('user')) && empty(session('user')) && empty(session('user'))){
			return redirect('/user');
		}
			echo json_encode($result);
	 }

    // Get all Data to edit Customer by Admin

	 public function getUserEditData($id){
        $getCustomer =DB::table('users')->where('id', $id)->first();
        return view('customer.editCustomer', compact('getCustomer'));
    }

    public function changeUserStatus(Request $request){
		$id=$request->id;
		$status=DB::table('users')->where('id',$id)->first();
		$change='';
		if($status){
			if($status->status){
					$change=['status'=>0];
			}else{
				
                $change=['status'=>1];
			}
            DB::table('users')->where('id',$id)->update($change);
			$result=array("status"=>true,'message'=>'status Changed');
		}else{
			$result=array("status"=>false,'message'=>'Somthing Went Wrong');
		}
		echo \json_encode($result);
	}

	
}