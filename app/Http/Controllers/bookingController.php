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
		$customer_id=session('user');		
		$bed=$request->bed;
        $bath=$request->bath;
        $often=$request->often;
        $sub=$request->sub;
        $Cabinet=$request->Cabinet;
        $Fridge=$request->Fridge;
        $Oven=$request->Oven;
        $Laundry=$request->Laundry;
		$supply=$request->supply;

        $extra=array();
        if(isset($Cabinet)){
             array_push($extra,$Cabinet);
        }
        if(isset($Fridge)){
            array_push($extra,$Fridge);
       }
       if(isset($Oven)){
        array_push($extra,$Oven);
      }
        if(isset($Laundry)){
            array_push($extra,$Laundry);
        }
        //echo var_dump($extra);
        $servicharge=DB::table('services')->orderBy('id','ASC')->get();
        $bd=DB::table('services')->where('ser_name','Bed')->where('quantity',$bed)->first();
        $bt=DB::table('services')->where('ser_name','Bath')->where('quantity',$bath)->first();
        $ds=0;
        $clean=1;//add
        if($sub=='onemonth')
        {
           $discount=DB::table('services')->where('ser_name',$often)->first();
           $ds=$discount->charge;
           $clean=$discount->quantity;//add
        }        
        $ext=0;
        if(sizeof($extra)!==0)
        {
            for($i=0;$i<sizeof($extra);$i++)
            {
                $extraa=DB::table('services')->where('ser_name',$extra[$i])->first();
                $ext+=$extraa->charge;
            }
            // $extraa=DB::table('services')->where('ser_name',$extra)->first();
            // $ext=$extraa->charge;

        }
            $bs=$bd->charge;
            $bst=$bt->charge;
            $total=$clean*($bs+$bst+$ext);//add
            $saving=(($total*$ds)/100);            
            $price1= $total- $saving;
            $tax=DB::table('services')->where('ser_name','tax')->first();
            $t=$tax->charge;
            $tax_=(($price1*$t)/100); 
            $price=$price1+$tax_;
            $price=round($price,2);
			$Amount=$price;

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
			
			$bookingsData=['customer_id' =>$customer_id,'fname' => $fname,'lname' =>$lname,'street' =>$street,'apartment' =>$apart,'state'=>$state,'city'=> $city,
			'code'=>$code,'sp_request'=>$sp_req,'cleaner_rq'=>$cleaner,'Amount'=>$Amount,'clean'=>$clean,'status'=>'Pending','created_at'=>$today,'updated_at'=>$today];
			
			$booking_id=DB::table('bookings')->orderBy('id', 'DESC')->first();
			$id=$booking_id->id;
			$id1=$id+1;
			$bookingSchedule=['booking_id' => $id1,'date' => $date,'time' =>$time,'clean_num'=>$clean,'status'=>'Pending','created_at'=>$today, 'updated_at'=>$today];
			
			$bookingdetails=['booking_id' => $id1,'bedroom'=>$bed,'bath'=>$bath,'how_often'=>$often,'subs'=>$sub,'extra'=>implode(" ",$extra),
			'supplie'=>$supply,'supply_msg'=>$supply_message,'total_clean'=>$clean,'created_at'=>$today, 'updated_at'=>$today];

			session(['bookig_data'=>$bookingsData]);
			session(['booking_schedule'=>$bookingSchedule]);
			session(['booking_details'=>$bookingdetails]);
			session(['amount'=>$Amount]);

		if(empty(session('user')) && empty(session('user')) && empty(session('user'))){
			$result=array('status'=>false,'message'=>'Sign up first.');	
		}
		else{
			$result=array('status'=>true,'message'=>'Make Payment.');

	   }
		echo json_encode($result);
	 }
  

 public function saveBooking_py(){

	        $email=session('user');
	        $bookingsData=session('bookig_data');	
			$bookingsData['customer_id']= $email;
			$bookings=DB::table('bookings')->insert($bookingsData);
			$bookingSchedule=session('booking_schedule');
			$schedule=DB::table('booking_schedules')->insert($bookingSchedule);			
			$bookingdetails=session('booking_details');
			$details=DB::table('bookings_details')->insert($bookingdetails);
			session(['bookig_data'=>'']);
			session(['booking_schedule'=>'']);
			session(['booking_details'=>'']);
			return view('users.welcome');

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
		$booking=DB::table('bookings')->where('id',$id)->first();
		$clean=$booking->clean;
		$bookList=DB::table('bookings')
		->join('bookings_details', 'bookings.id', '=', 'bookings_details.booking_id')
		->join('booking_schedules', 'bookings.id', '=', 'booking_schedules.booking_id')
        ->where('bookings.id',$id)->where('booking_schedules.clean_num',$clean)->first();

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
	    $cleaners=DB::table('cleaners')->orderBy('id','ASC')->get();
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
			return view('bookings.allChange', compact('changeList','cleaners'));
		}
        
    }
	
	public function changeReschedule(Request $request){
		$booking_id=$request->booking_id;
		$date=date('Y-m-d h:i:s');
		$reschedules=DB::table('reshedule_requests')->where('booking_id',$booking_id)->first();	
		$data=['date'=>$reschedules->date,'time'=>$reschedules->time,'updated_at'=>$date];
		$data1=['sc_date'=>$reschedules->date,'sc_time'=>$reschedules->time,'updated_at'=>$date];
		$assign=DB::table('assigns')->where('booking_id',$booking_id)->update($data1);
		//$bookingSchedule=DB::table('assigns')->where('booking_id',$booking_id)->update($data1);
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
		$type=$request->type;
		if($type=='assign'){
		$id=$request->cleaner;
		$date=$request->date;
		$time=$request->time;
		$booking_id=$request->booking_id;
		$today=date('Y-m-d h:m:s');
		$assignStatus=DB::table('assigns')->where('booking_id',$booking_id)->where('status','Assign')->first();
		 if(!is_null($assignStatus))
		 {
			$result=array('status'=>false,'message'=>'Already Assign');
		 }else{

		$data=['booking_id'=>$booking_id,'cleaner_id'=>$id,'sc_date'=>$date,'sc_time'=>$time,'status'=>'Assign','created_at'=>$today,'updated_at'=>$today];
		$assign=DB::table('assigns')->insert($data);
		$data1=['status'=>'Assign','updated_at'=>$today];
		$status=DB::table('bookings')->where('id','=',$booking_id)->update($data1);

		$clean=DB::table('bookings')->where('id','=',$booking_id)->first();
		$status1=DB::table('booking_schedules')->where('booking_id','=',$booking_id)->where('clean_num',$clean->clean)->update($data1);
		if($assign){
			$result=array('status'=>true,'message'=>'cleaner Assign');
		}
		else{
				$result=array('status'=>false,'message'=>'Something Went Wrong');
			}
		}
	}else{
		$id=$request->cleaner;
		$booking_id=$request->booking_id;
		$data=['booking_id'=>$booking_id,'cleaner_id'=>$id];
		
		$assign=DB::table('assigns')->where('booking_id',$booking_id)->update($data);		
		if($assign){
			DB::table('change_requests')->where('booking_id',$booking_id)->update(['status'=>"Changed"]);
			$result=array('status'=>true,'message'=>'Cleaner changed');
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
