<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;


class CheckoutController extends Controller
{
    public function checkout()
    {   
        
        \Stripe\Stripe::setApiKey('sk_test_51IjKn6SC37oBBROr7yQ5haZUD0i7adGwCtVDBPNBzSd9hWw03WfreZmBAHFl34O1SvaFatQegDGZHeHfrp5VuXzE00skGyek6w');
		   $amount = 4;//session('amount');
		   $amount *= 100;
        $amount = (int) $amount;

        $customer = \Stripe\Customer::create([
            ],
        );
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'INR',
			'description' => 'Payment From Srubbing',
			'payment_method_types' => ['card'],
            'setup_future_usage' => 'off_session',
            'customer' => $customer->id,
            
		]);
		$intent = $payment_intent->client_secret;

		return view('checkout.payment',compact('intent'));

    }

    public function afterPayment(Request $request)
    {
        // $result=$request->plan;
        // echo var_dump($result);
        // $my = json_decode($result, TRUE);
        // echo "   <br><br> hh <br>";
        // echo var_dump($my);
       // echo var_dump(session('result'));
       $today=date("Y-m-d h:i:s", time());
       $email=session('user');
       $bookingsData=session('bookig_data');	
       $bookingsData['customer_id']= $email;
       $bookings=DB::table('bookings')->insert($bookingsData);
       $bookingSchedule=session('booking_schedule');
       $schedule=DB::table('booking_schedules')->insert($bookingSchedule);	

       $bookingdetails=session('booking_details');
       
       $details=DB::table('bookings_details')->insert($bookingdetails);
      
       $clean=$bookingsData['clean'];
       $i=$clean-1;
       $time=$bookingSchedule['time'];
       $date=$bookingSchedule['date'];
       $id=$bookingSchedule['booking_id'];

       while($i>0){
          // echo var_dump($date);
            $date1=date_create($date);
            date_add($date1,date_interval_create_from_date_string("7 days"));
            $date_=date_format($date1,"Y-m-d");
            $data=['booking_id' => $id,'date' => $date_,'time' =>$time,'clean_num'=>$i,'status'=>'Pending','created_at'=>$today, 'updated_at'=>$today];
            $schedule=DB::table('booking_schedules')->insert($data);	
            $date=$date_;
            $i=$i-1;
          
       }

       session(['bookig_data'=>'']);
       session(['booking_schedule'=>'']);
       session(['booking_details'=>'']);       
       return redirect('/user/welcome');
      // return view('users.welcome');
    }

      //// payment cut 
    public function payment(){

        \Stripe\Stripe::setApiKey('sk_test_51IjKn6SC37oBBROr7yQ5haZUD0i7adGwCtVDBPNBzSd9hWw03WfreZmBAHFl34O1SvaFatQegDGZHeHfrp5VuXzE00skGyek6w');

                \Stripe\PaymentMethod::all([
                'customer' => 'cus_JOejwlIwbdD8Hv',
                'type' => 'card',
                ]);

                \Stripe\Stripe::setApiKey('sk_test_51IjKn6SC37oBBROr7yQ5haZUD0i7adGwCtVDBPNBzSd9hWw03WfreZmBAHFl34O1SvaFatQegDGZHeHfrp5VuXzE00skGyek6w');

                

                try {
                \Stripe\PaymentIntent::create([
                    'amount' => 1099,
                    'currency' => 'INR',
                    'customer' => 'cus_JOejwlIwbdD8Hv',
                    'payment_method' => 'pm_1IlrPtSC37oBBROrKs4MJLMk',
                    'shipping' => [
                        'name' => 'Jenny Rosen',
                        'address' => [
                          'line1' => '510 Townsend St',
                          'postal_code' => '98140',
                          'city' => 'San Francisco',
                          'state' => 'CA',
                          'country' => 'US',
                        ],
                      ], 

                    'off_session' => true,
                    'confirm' => true,
                ]);
                } catch (\Stripe\Exception\CardException $e) {
                // Error code will be authentication_required if authentication is needed
                echo 'Error code is:' . $e->getError()->code;
                $payment_intent_id = $e->getError()->payment_intent->id;
                $payment_intent = \Stripe\PaymentIntent::retrieve($payment_intent_id);
                }
    }
}