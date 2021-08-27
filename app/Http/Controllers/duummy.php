<?php

//Appicsoftwares@2018

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;

class bookingController extends Controller
{
     
	public function saveBooking(Request $request){
		$bed=$request->bed;
        $bath=$request->bath;
        $often=$request->often;
        $sub=$request->sub;
        $extra=$request->extra;
        $supply=$request->supply;
		$cutomer_id=session('user');
		//Amount calculate
		$servicharge=DB::table('services')->orderBy('id','ASC')->get();
        if($servicharge){
                 $chagre=[];
                foreach($servicharge as $key=>$val){
                    $chagre[$val->ser_name]=$val->charge;                 
                }           
            $bd=$bed*$chagre['Bed'];
            $bt=$bath*$chagre['Bath'];
            $of=$chagre[$often];
            $sb=$chagre[$sub];
            $ext=$chagre[$extra];
            if($supply=='Yes')
            { $sp=0;}
            else{
                $sp=$chagre['Supply'];
            }
           $Amount=$bd+$bt+$of+$sb+$ext+$sp;

		  $today=date("Y-m-d h:i:s", time());
		  $fname=$request->fname;
		  $lname=$request->lname;
		  $street=$request->street;
		  $apart=$request->apart;
		  $state=$request->state;
		  $city=$request->city;
		  $date=$request->date;
		  $time=$request->time;
		  $sp_req=$request->sp_req;
		  $cleaner=$request->cleaner;
		  $code=$request->code;
		  $supply_message=$request->supply_msg;

		  $bookingsData=['customer_id' =>$cutomer_id,'fname' => $fname,'lname' =>$lname,'street' =>$street,'apartment' =>$apart,'state'=>$state,'city'=> $city,
							'code'=>$code,'sp_request'=>$sp_req,'cleaner_rq'=>$cleaner,'Amount'=>$Amount,'status'=>'Pending','created_at'=>$today,'updated_at'=>$today];

		  $bookings=DB::table('bookings')->insert($bookingsData);
		 
		  $booking_id=DB::table('bookings')->orderBy('id', 'DESC')->first();
		  $bookingSchedule=['booking_id' => $booking_id->id,'date' => $date,'time' =>$time,'created_at'=>$today, 'updated_at'=>$today];
		  $schedule=DB::table('booking_schedules')->insert($bookingSchedule);
		
		  $bookingdetails=['booking_id' => $booking_id->id,'bedroom'=>$bed,'bath'=>$bath,'how_often'=>$often,'subs'=>$sub,'extra'=>$extra,
		                     'supplie'=>$supply,'supply_msg'=>$supply_message,'created_at'=>$today, 'updated_at'=>$today];
		  $details=DB::table('bookings_details')->insert($bookingdetails);
		 $result=array('status'=>true,'message'=>'We Will Assign You a Cleaner Soon');
		 session(['booking_id' => $booking_id->id]);

        }
		else{
			$result=array('status'=>false,'message'=>'Something went wrong. Please try again.');
		}

		if(empty(session('user')) && empty(session('user')) && empty(session('user'))){
			return redirect('/user');
		}
		echo json_encode($result);
	}

    public function bookingList (){
        $bookings =DB::table('bookings')->select('id','Amount','fname','lname','code','street','status','created_at')->orderBy('id', 'DESC')->get();
		$bookList = [];
		if($bookings){
			foreach($bookings as $key=>$val){
				$bookList[$key]['id']=$val->id;
				$bookList[$key]['fname']=$val->fname;
				$bookList[$key]['lname']=$val->lname;
				$bookList[$key]['street']=$val->street;
				$bookList[$key]['Amount']=$val->Amount;
				$bookList[$key]['code']=$val->code;
				$bookList[$key]['status']=$val->status;
				$bookList[$key]['creaetd_at']=$val->created_at;
			}
		}
		if(empty(session('user_id')) && empty(session('user_id')) && empty(session('user_id'))){
			return redirect('/');
		}else{
			return view('bookings.allBookings', compact('bookList'));
		}
        
    }
    public function viewBooking($id){
		$cleaners=DB::table('cleaners')->orderBy('id','ASC')->get();	
		$bookList=DB::table('bookings')
		->join('bookings_details', 'bookings.id', '=', 'bookings_details.booking_id')
		->join('booking_schedules', 'bookings.id', '=', 'booking_schedules.booking_id')
        ->where('bookings.id',$id)->first();

		if(empty(session('user_id')) && empty(session('user_id')) && empty(session('user_id'))){
			return redirect('/');
		}else{
			//echo var_dump($bookList);
			  return view('bookings.viewBookings', compact('bookList','cleaners'));
		}
        
    }
	public function rescheduleList (){
        $reschedules =DB::table('reshedule_requests')->select('id','booking_id','date','time','status','created_at')->orderBy('id', 'DESC')->get();
		$rescheduleList = [];
		if($reschedules){
			foreach($reschedules as $key=>$val){
				$rescheduleList[$key]['id']=$val->id;
				$rescheduleList[$key]['booking_id']=$val->booking_id;
				$rescheduleList[$key]['date']=$val->date;
				$rescheduleList[$key]['time']=$val->time;
				$rescheduleList[$key]['status']=$val->status;
				$rescheduleList[$key]['creaetd_at']=$val->created_at;
			}
		}
		if(empty(session('user_id')) && empty(session('user_id')) && empty(session('user_id'))){
			return redirect('/');
		}else{
			return view('bookings.allReschedule', compact('rescheduleList'));
		}
        
    }

	public function changeList (){
        $change=DB::table('change_requests')->select('id','booking_id','cleaner_id','status','created_at')->orderBy('id', 'DESC')->get();
		$changeList = [];
	    $cleaners=DB::table('cleaners')->select('first_name','last_name');
		if($change){
			foreach($change as $key=>$val){
				$changeList[$key]['id']=$val->id;
				$changeList[$key]['booking_id']=$val->booking_id;
				$cleaner=DB::table('cleaners')->select('first_name','last_name')->where('id',$val->cleaner_id)->first();
				$name=$cleaner->first_name." ".$cleaner->last_name;
				$changeList[$key]['cleaner']=$name;	
				$changeList[$key]['status']=$val->status;
				$changeList[$key]['creaetd_at']=$val->created_at;
			}
		}
		if(empty(session('user_id')) && empty(session('user_id')) && empty(session('user_id'))){
			return redirect('/');
		}else{
			return view('bookings.allChange', compact('changeList','cleaner'));
		}
        
    }
	
	public function changeReschedule(Request $request){
		$booking_id=$request->booking_id;
		$date=date('Y-m-d h:i:s');
		$reschedules=DB::table('reshedule_requests')->where('booking_id',$booking_id)->first();	
		$data=['date'=>$reschedules->date,'time'=>$reschedules->time,'updated_at'=>$date];
		$bookingSchedule=DB::table('booking_schedules')->where('booking_id',$booking_id)->update($data);
		$Schedule=DB::table('reshedule_requests')->where('booking_id',$booking_id)->update(['status'=>'Rescheduled']);
		if($bookingSchedule){
			$result=array('status'=>true,'message'=>"Reschedule booking");
		}
		else{
			$result=array('status'=>false,'message'=>"Something went wrong");
		}
		if(empty(session('user_id')) && empty(session('user_id')) && empty(session('user_id'))){
			return redirect('/');
		}
        echo json_encode($result);
		
		
		
    }
	public function assignCleaner(Request $request){
		$id=$request->cleaner;
		$date=$request->date;
		$time=$request->time;
		$booking_id=$request->booking_id;
		$today=date('Y-m-d h:m:s');
		 $assignStatus=DB::table('assigns')->where('booking_id',$booking_id)->first();
		 if(!is_null($assignStatus))
		 {
			$result=array('status'=>false,'message'=>'Already Assign');
		 }else{

		$data=['booking_id'=>$booking_id,'cleaner_id'=>$id,'sc_date'=>$date,'sc_time'=>$time,'status'=>'Assign','created_at'=>$today,'updated_at'=>$today];
		$assign=DB::table('assigns')->insert($data);
		$data1=['status'=>'Assign','updated_at'=>$today];
		$status=DB::table('bookings')->where('id','=',$booking_id)->update($data1);
		if($assign){
			$result=array('status'=>true,'message'=>'cleaner Assign');
		}
		else{
				$result=array('status'=>false,'message'=>'Something Went Wrong');
			}
		}
		echo json_encode($result);
	}


	
	public function Paypal($type,$order_id){
		$makeorder = base64_decode($order_id);
		$ordertype = $type;
		$order=[];
		if($ordertype=='item'){
			$item =DB::table('orders')->where('id',$makeorder)->first();
			$order['id'] = $item->id;
			$order['order_id'] = $item->order_id;
			$order['typed'] = $ordertype;
			$order['total'] = $item->total;
		}else if($ordertype=='room'){
			$room =DB::table('room_booking')->where('id',$makeorder)->first();
			$order['id'] = $room->id;
			$order['order_id'] = $room->order_id;
			$order['typed'] = $ordertype;
			$order['total'] = $room->total_amount;
		}else{
			$hall =DB::table('hall_booking')->where('id',$makeorder)->first();
			$order['id'] = $hall->id;
			$order['order_id'] = $hall->order_id;
			$order['typed'] = $ordertype;
			$order['total'] = $hall->total_amount;
		}
		return view('orders.paypal', compact('order'));
        
    }
	
	public function paySuccess($type,$order_id){
		$req = $_REQUEST;
		$makeorder = $order_id;
		$ordertype = $type;
		if($ordertype=='item'){
			$item =DB::table('orders')->where('id',$makeorder)->update(['payment_status'=>'Success']);
			$items =DB::table('orders')->where('id',$makeorder)->select('uid')->first();
			DB::table('add_to_cart')->where('uid',$items->uid)->delete();
		}else if($ordertype=='room'){
			$room =DB::table('room_booking')->where('id',$makeorder)->update(['payment_status'=>'Success']);
		}else{
			$hall =DB::table('hall_booking')->where('id',$makeorder)->update(['payment_status'=>'Success']);
		}
		return view('orders.paypalSucess', compact('req'));
        
    }
	public function payCancel($type,$order_id){
		$req = $_REQUEST;
		$makeorder = $order_id;
		$ordertype = $type;
		if($ordertype=='item'){
			$item =DB::table('orders')->where('id',$makeorder)->update(['payment_status'=>'Cancel']);
		}else if($ordertype=='room'){
			$room =DB::table('room_booking')->where('id',$makeorder)->update(['payment_status'=>'Cancel']);
		}else{
			$hall =DB::table('hall_booking')->where('id',$makeorder)->update(['payment_status'=>'Cancel']);
		}
		return view('orders.paypalError');
        
    }
	public function payNotify(Request $request){
		$req = $_REQUEST;
		return view('orders.paypalNotify', compact('req'));
        
    }
}

///////////////////////////
$bed=$request->bed;
$bath=$request->bath;
$often=$request->often;
$sub=$request->sub;
$extra=$request->extra;
$supply=$request->supply;
$cutomer_id=session('user');
//Amount calculate
$servicharge=DB::table('services')->orderBy('id','ASC')->get();
if($servicharge){
		$chagre=[];
		foreach($servicharge as $key=>$val){
			$chagre[$val->ser_name]=$val->charge;                 
		}           
	$bd=$bed*$chagre['Bed'];
	$bt=$bath*$chagre['Bath'];
	$of=$chagre[$often];
	$sb=$chagre[$sub];
	$ext=$chagre[$extra];
	if($supply=='Yes')
	{ $sp=0;}
	else{
		$sp=$chagre['Supply'];
	}
$Amount=$bd+$bt+$of+$sb+$ext+$sp;

$today=date("Y-m-d h:i:s", time());
$fname=$request->fname;
$lname=$request->lname;
$street=$request->street;
$apart=$request->apart;
$state=$request->state;
$city=$request->city;
$date=$request->date;
$time=$request->time;
$sp_req=$request->sp_req;
$cleaner=$request->cleaner;
$code=$request->code;
$supply_message=$request->supply_msg;

$bookingsData=['customer_id' =>$cutomer_id,'fname' => $fname,'lname' =>$lname,'street' =>$street,'apartment' =>$apart,'state'=>$state,'city'=> $city,
					'code'=>$code,'sp_request'=>$sp_req,'cleaner_rq'=>$cleaner,'Amount'=>$Amount,'status'=>'Pending','created_at'=>$today,'updated_at'=>$today];

$bookings=DB::table('bookings')->insert($bookingsData);

$booking_id=DB::table('bookings')->orderBy('id', 'DESC')->first();
$bookingSchedule=['booking_id' => $booking_id->id,'date' => $date,'time' =>$time,'created_at'=>$today, 'updated_at'=>$today];
$schedule=DB::table('booking_schedules')->insert($bookingSchedule);

$bookingdetails=['booking_id' => $booking_id->id,'bedroom'=>$bed,'bath'=>$bath,'how_often'=>$often,'subs'=>$sub,'extra'=>$extra,
					'supplie'=>$supply,'supply_msg'=>$supply_message,'created_at'=>$today, 'updated_at'=>$today];
$details=DB::table('bookings_details')->insert($bookingdetails);
$result=array('status'=>true,'message'=>'We Will Assign You a Cleaner Soon');
session(['booking_id' => $booking_id->id]);

}
else{
	$result=array('status'=>false,'message'=>'Something went wrong. Please try again.');
}