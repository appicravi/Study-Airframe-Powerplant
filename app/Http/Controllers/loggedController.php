<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;

class loggedController extends Controller{

	public function logoutUser(Request $request){
		$request->session()->put('user','');
		$request->session()->put('bookig_data','');
		$request->session()->put('booking_schedule','');
		$request->session()->put('booking_details','');
		    
		// $request->session()->put('user_id','');
		// $request->session()->put('role_id','');
		// $request->session()->put('login',0);
		return view('users.home');
		// $result=array('status'=>true, 'message'=> 'Logout successfully.');
		// echo json_encode($result);
    }
	public function logout(Request $request){	
		    
		 $request->session()->put('user_id','');
		 $request->session()->put('role_id','');
		 $request->session()->put('login',0);
		
		 $result=array('status'=>true, 'message'=> 'Logout successfully.');
		
		 echo json_encode($result);
    }

	public function forgotPass(Request $request){
		$email=$request->email;
		if(!isset($email)){
			$result=array('status'=>false,'message'=> 'Email is required.');
		}else{
			$User = Users::where('email_id',$email)->select('id','first_name')->first();
			$Shopkeeper = Shopkeeper::where('email_id',$email)->select('id','first_name')->first();
			$Passenger = Passenger::where('email_id',$email)->select('id')->first();
			$Vendors = Vendors::where('email',$email)->select('id','vendor_name')->first();
			$id = 0;
			$type = '';
			if($User){
				$name = $User->first_name;
				$id = $User->id;
				$type = 'user';
				$result=array('status'=>200,'type'=>'user','id'=>$User->id, 'message'=> 'Fetch data successfully.');
			}else if($Shopkeeper){
				$name = $Shopkeeper->first_name;
				$id = $Shopkeeper->id;
				$type = 'shopkeepar';
				$result=array('status'=>200,'type'=>'shopkeepar','id'=>$Shopkeeper->id, 'message'=> 'Fetch data successfully.');
			}else if($Passenger){
				$id = $Passenger->id;
				$PersonalInfo = PersonalInfo::where('p_id',$id)->select('passenger_name')->first();
				$name = '';
				if($PersonalInfo){
					$name = $PersonalInfo->passenger_name;
				}
				$type = 'passenger';
				$result=array('status'=>200,'type'=>'passenger','id'=>$Passenger->id, 'message'=> 'Fetch data successfully.');
			}else if($Vendors){
				$id = $Vendors->id;
				$name = $Vendors->vendor_name;
				$type = 'vendor';
				$result=array('status'=>200,'type'=>'vendor','id'=>$Vendors->id, 'message'=> 'Fetch data successfully.');
			}else{
				$result=array('status'=>201, 'message'=> 'Email id not exists in our system. Please try anoter');
			}
			if($id>0){ 
				$url = url('/change-password').'?i='.base64_encode($id).'&t='.base64_encode($type);
				$msg = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
					  <head>
						<title>HTML email template</title>
						<meta name="viewport" content="width = 375, initial-scale = -1">
					  </head>

					  <body style="background-color: #ffffff; font-size: 16px;">
						<center>
						  <table align="center" border="0" cellpadding="0" cellspacing="0" style="height:100%; width:600px;">
							  <!-- BEGIN EMAIL -->
							  <tr>
								<td align="center" bgcolor="#ffffff" style="padding:30px">
								   <p style="text-align:left">Hello '.$name.',<br><br> Someone requested that the password for your TrustaBit account be reset.
								  </p>
								  <p>
								  Copyable link : '.$url.'
									<!--<a target="_blank" href="'.$url.'" style="text-decoration:none; background-color: black; border: black 1px solid; color: #fff; padding:10px 10px; display:block;" href="d">
									  <strong>Reset Password</strong></a>-->
								  </p>
								 <p style="text-align:left">This link is good until today at midnight and can only be used once.
									<br><br>If you didn’t request this, you can ignore this email or let us know :)
									Your password won’t change until you create a new password.</p>
								  <p style="text-align:left">
								  Best,<br>The TrustaBit Team
								  </p>
								</td>
							  </tr>
							</tbody>
						  </table>
						</center>
					  </body>
					</html>';
					$to = $email;
					$subject = "TrustaBit Password Reset";
					$header = "From:trustabit@gmail.com \r\n";
					$header .= "MIME-Version: 1.0\r\n";
					$header .= "Content-type: text/html\r\n";
					$mail = mail($to, $subject, $msg, $header);
					if($mail==1){
						$result=array('status'=>200,'url'=>$url, 'message'=> 'Forgot password mail successfully sent on your email address. Please check your inbox');
					}else{
						$result=array('status'=>201, 'message'=> 'Something went wront. Please try again.');
					}
			}
		}
		echo json_encode($result);
    }
	public function changePass(Request $request){
		$id=$request->id;
		$password=$request->password;
		$type=$request->type;
		if(!isset($id)){
			$result=array('status'=>false,'message'=> 'id is required.');
		}else if(!isset($password)){
			$result=array('status'=>false,'message'=> 'password is required.');
		}else if(!isset($type)){
			$result=array('status'=>false,'message'=> 'type is required.');
		}else{
			if($type=='user'){
				Users::where('id',$id)->update(['password'=>md5($password)]);
				$result=array('status'=>200, 'message'=> 'Password updated successfully');
			}else if($type=='shopkeepar'){
				Shopkeeper::where('id',$id)->update(['password'=>md5($password)]);
				$result=array('status'=>200, 'message'=> 'Password updated successfully');
			}else if($type=='passenger'){
				Passenger::where('id',$id)->update(['password'=>md5($password)]);
				$result=array('status'=>200, 'message'=> 'Password updated successfully');
			}else if($type=='vendor'){
				Vendors::where('id',$id)->update(['password'=>md5($password)]);
				$result=array('status'=>200, 'message'=> 'Password updated successfully');
			}else{
				$result=array('status'=>201, 'message'=> 'Something went wrong.');
			}
		}
		echo json_encode($result);
    }
	
}