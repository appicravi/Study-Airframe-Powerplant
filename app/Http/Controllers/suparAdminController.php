<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
class suparAdminController extends Controller{
	
	public function dashboard(){
        $customers =DB::table('users')->count();
		
		//$orders =DB::table('orders')->count();
		$locations=DB::table('users')->count();
		$cleaners=DB::table('users')->count();
		$bookings_complete=DB::table('users')->where('status','=','Completed')->count();
		// $bookings =DB::table('bookings')->select('id','Amount','fname','lname','code','street','status','created_at')->orderBy('id', 'DESC')->limit(5)->get();
		// $bookList = [];
		// if($bookings){
		// 	foreach($bookings as $key=>$val){
		// 		$bookList[$key]['id']=$val->id;
		// 		$bookList[$key]['fname']=$val->fname;
		// 		$bookList[$key]['lname']=$val->lname;
		// 		$bookList[$key]['street']=$val->street;
		// 		$bookList[$key]['Amount']=$val->Amount;
		// 		$bookList[$key]['code']=$val->code;
		// 		$bookList[$key]['status']=$val->status;
		// 		$bookList[$key]['creaetd_at']=$val->created_at;
		// 	}
		// }
	
		
		if(empty(session('user_id')) && empty(session('user_id')) && empty(session('user_id'))){
			return view('suparAdmin.suparadminlogin');
		}else{
			return view('suparAdmin.suparadmindash', compact('customers','locations','cleaners','bookings_complete'));
		}
    }
	
    public function suparAdminLogin(Request $request){
		$phone=$request->phone;
		$password=md5($request->password);
		$suparAdmin = DB::table('suparadmin')->where('phone', $phone)->where('password', $password)->where('status',1)->where('role_id',1)->first();
		if(!empty($suparAdmin)){
			$request->session()->put('username',$phone);
			$request->session()->put('user_id',$suparAdmin->id);
			$request->session()->put('user_name',$suparAdmin->name);
			$request->session()->put('user_email',$suparAdmin->email);
			$request->session()->put('role_id',$suparAdmin->role_id);
			$request->session()->put('login',1);
			$result=array('status'=>true,'message'=> 'Successful.');
		}
		else{
			$result=array('status'=>false,'message'=> 'Invalid Username and Password.');
		}
		echo json_encode($result);
    }
	public function orderStatus(Request $request){
		
		$id=$request->id;
		$status=$request->status;
		$type=$request->type;
		$date = date("Y-m-d h:i:s", time());
		if($status=='Completed'){

					$booking=DB::table('bookings')->where('id',$id)->first();
					$clean=$booking->clean;
					DB::table('booking_schedules')->where('booking_id',$id)->where('clean_num',$clean)->update(['status'=>'Completed','updated_at'=>$date]);
					
					if($clean>1){
						$clean=$clean-1;
						DB::table('bookings')->where('id',$id)->update(['clean'=>$clean,'updated_at'=>$date]);
						$booking_sc=DB::table('booking_schedules')->where('booking_id',$id)->where('clean_num',$clean)->first();
						$data=['sc_date'=>$booking_sc->date,'sc_time'=>$booking_sc->time,'updated_at'=>$date];
						$assign=DB::table('assigns')->where('booking_id',$id)->update($data);
						$booking_status=DB::table('booking_schedules')->where('booking_id',$id)->where('clean_num',$clean)->update(['status'=>'Assign','updated_at'=>$date]);
						
					}
					else{
						DB::table('bookings')->where('id',$id)->update(['status'=>'Completed','updated_at'=>$date]);
						DB::table('assigns')->where('booking_id',$id)->update(['status'=>'Completed','updated_at'=>$date]);
					}			
			}
			else{		
					DB::table('bookings')->where('id',$id)->update(['status'=>$status,'updated_at'=>$date]);
					DB::table('assigns')->where('booking_id',$id)->update(['status'=>$status,'updated_at'=>$date]);
				}
		
		}
	

		public function viewContact(){
			
			$contact=DB::table('contacts')->orderBy('id','DESC')->get();			
			$contactList=[];
			if($contact){
				foreach($contact as $key=>$val){
				   $contactList[$key]['id']=$val->id;
				   $contactList[$key]['name']=$val->name;
				   $contactList[$key]['email']=$val->email;
				   $contactList[$key]['message']=$val->message;				   
				   $contactList[$key]['created_at']=$val->created_at;   
				}
			}
   
			return view('suparAdmin.allContact',compact('contactList'));
   
		}

	public function profile(){
        $profile =DB::table('suparadmin')->where('id', 1)->select('id','name','phone','email','profile_image')->first();
		if(empty(session('user_id')) && empty(session('user_id')) && empty(session('user_id'))){
			return redirect('/');
		}else{
			return view('suparAdmin.adminProfile', compact('profile'));
		}
		
    }
	public function profileUpdate(Request $request){
		$id=$request->id;
		$name=$request->name;
		$phone=$request->phone;
		$image = $request->file('image');
		$email=$request->email;
		if(!isset($name)){
			$result=array('status'=>false,'message'=> 'name is required.');
		}else{
			$date = date("Y-m-d h:i:s", time());
			$checkEmployee =DB::table('suparadmin')->where('id',1)->first();
			if($checkEmployee){
					if(isset($image)){
						$extension = $image->getClientOriginalExtension();
						$filename = time().'.'.$extension;
						$image->move('public/system/admin_images/', $filename);
					}else{
						$filename=$checkEmployee->profile_image;
					}
				$data = ['name'=>$name ? $name : $checkEmployee->name,'phone'=>$phone ? $phone : $checkEmployee->phone,'profile_image'=>$filename,'email'=>$email ? $email : $checkEmployee->email, 'updated_at'=>$date];
				$updateEmployee =DB::table('suparadmin')->where('id',1)->update($data);
				if($updateEmployee){
					$result=array('status'=>true,'message'=> 'Profile updated successfully.');
				}else{
					$result=array('status'=>false,'message'=> 'Something went wrong. Please try again.');
				}
			}else{
				$result=array('status'=>false,'message'=> 'Profile not found in system');
			}
			
		}
		echo json_encode($result);
    }
	public function reportList(){
		$branches =DB::table('reports')->orderBy('id', 'DESC')->get();
		$report = [];
		if($branches){
			foreach($branches as $key=>$val){
				$report[$key]['id'] = $val->id;
				$report[$key]['email'] = $val->email;
				$report[$key]['issue'] = $val->issue;
				$report[$key]['date'] = $val->date;
			}
		}
		if(empty(session('user_id')) && empty(session('user_id')) && empty(session('user_id'))){
			return redirect('/');
		}else{
			return view('report.allReports', compact('report'));
		}
        
    }
	
    
	public function globalSearch(Request $request){
		$search_type = $request->search_type;
		$date = $request->date;
		$status = $request->status;
		$html = '';
		if($search_type=='filter_item'){
			if(!empty($date) && empty($status)){
				$query = DB::table('bookings')->where('created_at','LIKE','%'.$date.'%')->get();
			}
			if(!empty($status) && empty($date)){
				$query = DB::table('bookings')->where('status',$status)->get();
			}
			if(!empty($date) && !empty($status)){
				$query = DB::table('bookings')->where('created_at','LIKE','%'.$date.'%')->where('status',$status)->get();
			}
			if(empty($date) && empty($status)){
				$query = DB::table('bookings')->get();
			}
			if($query){
				foreach($query as $key=>$val){
					$html.= '<tr class="tr-shadow" id="row_'.$val->id.'" style="border-top: 1px solid #ebe8f8;">';
					$html.= '<td>#'.$val->id.'</td>';
					$html.= '<td>'.$val->Amount.'</td>';
					$html.= '<td>'.$val->fname."  ".$val->lname.'</td>';
					$html.= '<td>'.$val->street.'</td>';
					$html.= '<td>'.$val->code.'</td>';
					$html.= '<td>'.$val->status.'</td>';
					$html.= '<td>'.$val->created_at.'</td>';
					$html.= '<td><div class="table-data-feature">
					 <a class="item" data-toggle="tooltip" data-placement="top" href="'.url('').'/super-admin/view-booking/'.$val->id.'"><i class="zmdi zmdi-view-list"></i></a>
					</div></td>';
					$html.= '</tr>';
				}				
			}
			$result=array('status'=>200,'data'=>$html,'message'=> 'List loaded successfully');
		}
		if($search_type=='filter_reschedule'){
			if(!empty($date) && empty($status)){
				$query = DB::table('reshedule_requests')->where('created_at','LIKE','%'.$date.'%')->get();
			}
			if(!empty($status) && empty($date)){
				$query = DB::table('reshedule_requests')->where('status',$status)->get();
			}
			if(!empty($date) && !empty($status)){
				$query = DB::table('reshedule_requests')->where('created_at','LIKE','%'.$date.'%')->where('status',$status)->get();
			}
			if(empty($date) && empty($status)){
				$query = DB::table('reshedule_requests')->get();
			}
			if($query){
				foreach($query as $key=>$val){
					$html.= '<tr class="tr-shadow" id="row_'.$val->id.'" style="border-top: 1px solid #ebe8f8;">';
					$html.= '<td>#'.$val->booking_id.'</td>';
					$html.= '<td>'.$val->date.'</td>';
					$html.= '<td>'.$val->time.'</td>';
					$html.= '<td>'.$val->status.'</td>';
					$html.= '<td>'.$val->created_at.'</td>';
					$html.= '<td><div class="table-data-feature">';
					if($val->status=='Rescheduled'){
					 $html.='<button type="button" id="reschedule" class="btn btn-primary small" disabled>Rescheduled</button>';
					}else{
						$html.='<button type="button" id="reschedule" data-id="{{'.$val->booking_id.'}}" class="btn btn-primary small">Reschedule</button>';
					 }
					
					$html.= '</div></td></tr>';
				}				
			}
			$result=array('status'=>200,'data'=>$html,'message'=> 'List loaded successfully');
		}
		if($search_type=='filter_change'){
			if(!empty($date) && empty($status)){
				$query = DB::table('change_requests')->where('created_at','LIKE','%'.$date.'%')->get();
			}
			if(!empty($status) && empty($date)){
				$query = DB::table('change_requests')->where('status',$status)->get();
			}
			if(!empty($date) && !empty($status)){
				$query = DB::table('change_requests')->where('created_at','LIKE','%'.$date.'%')->where('status',$status)->get();
			}
			if(empty($date) && empty($status)){
				$query = DB::table('change_requests')->get();
			}
			if($query){
				foreach($query as $key=>$val){
					$cleaner=DB::table('cleaners')->select('first_name','last_name')->where('id',$val->cleaner_id)->first();
					$name=$cleaner->first_name." ".$cleaner->last_name;
					$html.= '<tr class="tr-shadow" id="row_'.$val->booking_id.'" style="border-top: 1px solid #ebe8f8;">';
					$html.= '<td>#'.$val->booking_id.'</td>';
					$html.= '<td>#'.$name.'</td>';
					$html.= '<td>'.$val->status.'</td>';
					$html.= '<td>'.$val->created_at.'</td>';
					$html.= '<td><div class="table-data-feature">';
					$html.='<input type="hidden" id="book" name="book" value="'.$val->booking_id.'">';
					$html.='<input type="hidden" id="_token" name="_token" value="'.csrf_token().'">';
					if($val->status=='Changed'){
					 $html.='<button type="button" id="Changed" class="btn btn-primary small" disabled>Changed</button>';
					}else{
						$html.='<button type="button" id="change" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary small">Change</button>';
					 }
					
					$html.= '</div></td></tr>';
				}				
			}
			$result=array('status'=>200,'data'=>$html,'message'=> 'List loaded successfully');
		}
        echo json_encode($result);
    }
	public function searchCustomer(Request $request){
		$key=$request->key;
		if(isset($key)){
			$combos =DB::table('users')->where('role_id',1)->where('name','LIKE', '%'.$key.'%')->orderBy('id', 'DESC')->get();
		}else{
			$combos =DB::table('users')->where('role_id',1)->orderBy('id', 'DESC')->get();
		}
		$allCombo=[];
		$item='';
		if($combos){
			foreach($combos as $key=>$val){
				$item .='<tr class="tr-shadow" id="row_'.$val->id.'" style="border-top: 1px solid #ebe8f8;">';
				$item .='<td>'.$val->id.'</td><td>'.$val->name.'</td><td>'.$val->email.'</td><td>'.$val->phone.'</td><td>'.$val->created_at.'</td>';
				$item.='<td>
                                                    <div class="table-data-feature">
														<a class="item" data-toggle="tooltip" data-placement="top" href="'.url('').'/super-admin/edit-user/'.$val->id.'"><i class="zmdi zmdi-edit"></i></a>
                                                        <a class="item deleteme" data-id="'.$val->id.'" data-type="customer" data-token="'.csrf_token().'" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                        
                                                    </div>
                                                </td>';						
				$item.='</tr>';
			}
		}
		$result=array('status'=>true,'data'=>$item,'message'=> 'Options added successfully.');
		echo json_encode($result);
    }

	public function searchCleaner(Request $request){
		$key=$request->key;
		if(isset($key)){
			$combos =DB::table('users')->where('role_id',2)->where('name','LIKE', '%'.$key.'%')->orderBy('id', 'DESC')->get();
		}else{
			$combos =DB::table('users')->where('role_id',2)->orderBy('id', 'DESC')->get();
		}
		$allCombo=[];
		$item='';
		if($combos){
			foreach($combos as $key=>$val){
				$item .='<tr class="tr-shadow" id="row_'.$val->id.'" style="border-top: 1px solid #ebe8f8;">';
				$item .='<td>'.$val->id.'</td><td>'.$val->name.'</td><td>'.$val->email.'</td><td>'.$val->phone.'</td><td><a href="#" class="btn btn-secondary">Active</a></td>';
				$item.='<td>
                                                    <div class="table-data-feature">
														<a class="item" data-toggle="tooltip" data-placement="top" href="'.url('').'/super-admin/edit-agent/'.$val->id.'"><i class="zmdi zmdi-edit"></i></a>
                                                        <a class="item deleteme" data-id="'.$val->id.'" data-type="agent" data-token="'.csrf_token().'" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                        
                                                    </div>
                                                </td>';						
				$item.='</tr>';
			}
		}
		$result=array('status'=>true,'data'=>$item,'message'=> 'Options added successfully.');
		echo json_encode($result);
    }
	public function searchLocation(Request $request){
		$key=$request->key;
		if(isset($key)){
			$combos =DB::table('locations')->where('city','LIKE', '%'.$key.'%')->orderBy('id', 'DESC')->get();
		}else{
			$combos =DB::table('locations')->orderBy('id', 'DESC')->get();
		}
		$allCombo=[];
		$item='';
		if($combos){
			foreach($combos as $key=>$val){
				$item .='<tr class="tr-shadow" id="row_'.$val->id.'" style="border-top: 1px solid #ebe8f8;">';
				$item .='<td>'.$val->id.'</td><td>'.$val->code.'</td><td>'.$val->area_name.'</td><td>'.$val->city.'</td>';
				$item.='<td>
                                                    <div class="table-data-feature">
														<a class="item" data-toggle="tooltip" data-placement="top" href="'.url('').'/super-admin/edit-location/'.$val->id.'"><i class="zmdi zmdi-edit"></i></a>
                                                        <a class="item deleteme" data-id="'.$val->id.'" data-type="location" data-token="'.csrf_token().'" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                        
                                                    </div>
                                                </td>';						
				$item.='</tr>';
			}
		}
		$result=array('status'=>true,'data'=>$item,'message'=> 'Options added successfully.');
		echo json_encode($result);
    }

	public function searchService(Request $request){
		$key=$request->key;
		if(isset($key)){
			$combos =DB::table('services')->where('ser_name','LIKE', '%'.$key.'%')->orderBy('id', 'DESC')->get();
		}else{
			$combos =DB::table('services')->orderBy('id', 'DESC')->get();
		}
		$allCombo=[];
		$item='';
		if($combos){
			foreach($combos as $key=>$val){
				$item .='<tr class="tr-shadow" id="row_'.$val->id.'" style="border-top: 1px solid #ebe8f8;">';
				$item .='<td>'.$val->id.'</td><td>'.$val->ser_name.'</td><td>'.$val->charge.'</td><td>'.$val->created_at.'</td>';
				$item.='<td>
                                                    <div class="table-data-feature">
														<a class="item" data-toggle="tooltip" data-placement="top" href="'.url('').'/super-admin/edit-service/'.$val->id.'"><i class="zmdi zmdi-edit"></i></a>
                                                        <a class="item deleteme" data-id="'.$val->id.'" data-type="service" data-token="'.csrf_token().'" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                        
                                                    </div>
                                                </td>';						
				$item.='</tr>';
			}
		}
		$result=array('status'=>true,'data'=>$item,'message'=> 'Options added successfully.');
		echo json_encode($result);
    }

	public function searchContact(Request $request){
		$key=$request->key;
		if(isset($key)){
			$combos =DB::table('contacts')->where('created_at','LIKE', '%'.$key.'%')->orderBy('id', 'DESC')->get();
		}else{
			$combos =DB::table('contacts')->orderBy('id', 'DESC')->get();
		}
		$allCombo=[];
		$item='';
		if($combos){
			foreach($combos as $key=>$val){
				$item .='<tr class="tr-shadow" id="row_'.$val->id.'" style="border-top: 1px solid #ebe8f8;">';
				$item .='<td>'.$val->id.'</td><td>'.$val->name.'</td><td>'.$val->email.'</td><td>'.$val->message.'</td><td>'.$val->created_at.'</td>';
				$item.='<td>
                                                    <div class="table-data-feature">
													
                                                        <a class="item deleteme" data-id="'.$val->id.'" data-type="contact" data-token="'.csrf_token().'" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                        
                                                    </div>
                                                </td>';						
				$item.='</tr>';
			}
		}
		$result=array('status'=>true,'data'=>$item,'message'=> 'Options added successfully.');
		echo json_encode($result);
    }
}

