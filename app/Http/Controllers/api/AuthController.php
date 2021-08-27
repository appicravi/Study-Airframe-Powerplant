<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
// use App\Models\Password_reset;
use DateTime;
use App\Models\Verification;
use Validator;
use Carbon\Carbon;
use DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class AuthController extends Controller
{
    //
    public function signUp(Request $request){
        $validate= Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            
        ]);
        if($validate->fails()){
            $result=array("status"=>false,"message"=>"Validation Failed","error"=>$validate->errors());
        }else{
               $res = User::where('email',$request->email)->first();
               if($res)
                {
                  $result=array("status"=>false,"message"=>"User  Already Register");                  
                }
                else
                {
                    
                        $user = new User();
                        $user->role_id=1;
                        $user->name=$request->name;
                        $user->email=$request->email;                      
                        $user->status=0;
                        $user->password=Hash::make($request->password);
                        $user->save();
                        $result=array("status"=>true,"message"=>"Registration Done","data"=>$user);
                                      
                    
                }
            }
        
        echo json_encode($result);
    }

    public function Login(Request $request){

        $validate= Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);
        if($validate->fails()){
            $result=array("status"=>false,"message"=>"Validation Failed","error"=>$validate->errors());
        }else{
                // if($request->role_id==2){
                    $user=User::where('email',$request->email)->first();
                    //dd($user);
                    if(!$user){
                        $result=array("status"=>false,"message"=>"Invalid Email");
                    }else{
                        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

                            $result=array("status"=>true,"message"=>"Login Successfully",'data'=>$user);
                        }else{
                            $result=array("status"=>true,"message"=>"Invalid Password");
                        }
                    }
                // }else if($request->role_id == 3){
                //     $user=User::where('email',$request->email)->first();
                //     //dd($user);
                //     if(!$user){
                //         $result=array("status"=>false,"message"=>"Invalid Email");
                //     }else{
                //         if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){

                //             $result=array("status"=>true,"message"=>"Login Successfully",'data'=>$user);
                //         }else{
                //             $result=array("status"=>true,"message"=>"Invalid Password");
                //         }
                //     }
                // }
        }
        echo json_encode($result);
    }

    

    public function verifyOtp(Request $request){
    $email = $request->email;
    $otp = (int)$request->otp; 
    $date1=new DateTime(date('d-m-Y h:i:s',time()));
    $res=Verification::where('username',$request->email)->first();
    
    if($res){
        $date2=new DateTime($res->verify_at);   
        $differance=$date2->diff($date1);
        $diff=$differance->i;
        if($diff<=59){
            $res=Verification::where('otp',$otp)->first();
            
                if($res){
                        Verification::where('username',$request->email)->delete();                     
                        // $res = User::where('email',$request->email)->first();
                        // if($res){
                        //     if($res->role_id== 1 && $res->status == 1){
                        //        $result=array('status'=>true,'is_register'=>false,'message'=>'Login Successfully','data'=>$res); 
                        //     }else{
                        //         $result=array('status'=>false,'message'=>'Account Deactivate',);
                        //     }
                              
                        // }else{
                        //     $result=array('status'=>true,'is_register'=>true,'message'=>'OTP Verified');  
                        // }                      
                        $result=array('status'=>true,'message'=>'OTP Verified');
                       
                    }else{
                        
                        $result=array('status'=>false,'message'=>'Wrong Otp ');
                    }
        }else{
            $result=array('status'=>false,'message'=>'Otp Expired' ,'time'=>$differance);
        }     
    }else{
        $result=array('status'=>false,'message'=>'email not exits ');
    }
    
    echo json_encode($result);
  }

        public function sendotp(Request $request){
           
        
           $user = User::where('email', $request->email)->first();
           if(!$user){
               $result = array('status'=>false, 'message'=>'Email Not Exist');
           }
             
            else{
                $otp=random_int(100000, 999999);
               $stubject = "otp send for your Education app";
               $message =  "Use ".$otp."  as OTP to verify your account on Education.  Don't share with anyone. Try after a few hours incase of login issues - Team Education";
                // $pass = new Password_reset();
                if($this->sendMail($request->email,$stubject,$message)){
                    $verify = new Verification();
                    $verify->username=$request->email;
                    $verify->otp=$otp; 
                   
                    $verify->verify_at=date('d-m-Y h:i:s',time());
                    $verify->save();
                    
                    

                    $result = array('status'=>true, 'message'=>'Forgot password link send your email');
                    
                }else{
                    $result = array('status'=>false, 'message'=>'Something went wrong try aftr sometime ');
                }
        }
            echo json_encode($result);
        }

        public function changepassword(Request $request){
            $validate = Validator::make($request->all(),[
                $email=$request->email,
                $password=$request->password,
            ]);
            if($validate->fails()){
                $result = array('status'=>false, 'message'=>'Validation failed', 'error'=>$validate->errors());
            }else{
                DB::table('users')->where('email', $request->email)->update(['password'=>Hash::make($password)]);
                $result = array('status'=>true, 'message'=>'Password Update Succesfully');
            }
            echo json_encode($result);
        }


        public function sendMail($email,$stubject=NULL,$message=NULL){

            require base_path("vendor/autoload.php");
            $mail = new PHPMailer(true);     // Passing `true` enables exceptions
            try {
                $mail->SMTPDebug = 0;   
                $mail->isSMTP();
                $mail->Host="smtp.gmail.com";
                $mail->Port=587;
                $mail->SMTPSecure="tls";
                $mail->SMTPAuth=true;
                $mail->Username="raviappic@gmail.com";
                $mail->Password="audnjvohywazsdqo";
                $mail->addAddress($email,"User Name");
                $mail->Subject=$stubject;
                $mail->isHTML();
                $mail->Body=$message;
                $mail->setFrom("raviappic@gmail.com");
                $mail->FromName="Education";
                
                if($mail->send())
                {   
                    return 1;                 
                }
                else
                { 
                    return 0;
                }
    
            } catch (Exception $e) {
                 return 0;
            }
        }

}
