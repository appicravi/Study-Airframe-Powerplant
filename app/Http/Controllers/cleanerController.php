<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use DB;
use Validator;

class cleanerController extends Controller
{
    public function cleanerManager(Request $request){
		$id=$request->id;
		$fname=$request->name;		
		$email=$request->email;
		$phone=$request->phone;
	
		$filename="";
		if($request->hasFile('image')){
		$file=$request->file('image');
		$filename=$file->getClientOriginalName();
		$destination=public_path("images");
		 $file->move($destination,$filename);
		}

		$type=$request->type;
		$password = Hash::make($request->password);

		if(!isset($fname)){
			$result=array('status'=>false,'message'=> 'Name is required.');
		}else{
			$date = date("Y-m-d h:i:s", time());
			if($type=='add_cleaner'){
				$rules = array(
					'email'=>'required',			
					'name'=>'required',
					'phone'=>'required',
				);
				$validation = Validator::make($request->all(), $rules);
				if($validation->passes()) { 
					$data = ['role_id'=>2,'status'=>1,'name'=>$fname,'password'=>$password,'email'=>$email,'phone' =>$phone,'created_at'=>$date, 'updated_at'=>$date,'image'=>$filename];
					$addCleaner=DB::table('users')->insert($data);
					if($addCleaner){
						$result=array('status'=>true,'message'=> 'Agent added successfully.');
					}else{
						$result=array('status'=>false,'message'=> 'Something went wrong. Please try again.');
					}
				}else {
					$errors = $validation->errors()->all();
					$result=array('status'=>false,'errors'=>$errors);
				}
			}
			if($type=='edit_cleaner'){
				$checkCleaner =DB::table('users')->where('id',$id)->first();
				$errors = array();

				
					if($checkCleaner){
						$data = [ 'name'=>$fname ? $fname : $checkCleaner->name,'email'=>$email ? $email : $checkCleaner->email,
						'phone' => $phone ? $phone: $checkCleaner->phone,'image' => $filename ? $filename: $checkCleaner->image,'updated_at'=>$date];
						$updateSupplier =DB::table('users')->where('id',$id)->update($data);
						if($updateSupplier){
							$result=array('status'=>true,'message'=> 'Agent  updated successfully.');
						}else{
							$result=array('status'=>false,'message'=> 'Something went wrong. Please try again.');
						}
					}else{
						$result=array('status'=>false,'message'=> 'Agent not found in system');
					}
				
			}
			
		}
		echo json_encode($result);
    }
	public function cleanerAdd(){
        return view('cleaner.addCleaner');
    }

	 public function viewReview($id){
		 $id =$id;
		 $review=DB::table('reviews')->where('cleaner_id',$id)->get();
		 
		 $reviewList=[];
		 if($review){
			 foreach($review as $key=>$val){
				$reviewList[$key]['id']=$val->id;
				$reviewList[$key]['name']=$val->name;
				$reviewList[$key]['email']=$val->email;
				$reviewList[$key]['rating']=$val->rating;
				$reviewList[$key]['comment']=$val->comment;
				$reviewList[$key]['created_at']=$val->created_at;

			 }
		 }

		 return view('cleaner.Allreview',compact('reviewList'));

	 }

    public function agentList() {
     $cleanerList = DB::table('users')->where('role_id',2)->orderBy('id', 'DESC')->paginate(10);

	//  $cleanerList=[];
	//  if($cleaner){
	// 	foreach($cleaner as $key=>$val){
	// 	   $cleanerList[$key]['id']=$val->id;		   
	// 	   $cleanerList[$key]['first_name']=$val->name;
	// 	   $cleanerList[$key]['email']=$val->email;
	// 	   $cleanerList[$key]['status']=$val->status;
	// 	   $cleanerList[$key]['phone']=$val->phone;
		   
	// 	   // $rating=DB::table('reviews')->where('cleaner_id',$val->id)->count();
	// 	   // $cleanerList[$key]['rating']=$rating;
	// 	}
	// }
     return view('cleaner.allCleaner', compact('cleanerList'));
    }

//     public function fetch_data(Request $request)  {
// 	    if($request->ajax())   {
// 	    	$sort_by = $request->get('sortby');
// 	    	$sort_type = $request->get('sorttype');
//         	$query = $request->get('query');
//         	$query = str_replace(" ", "%", $query);
// 	      	$customertList = DB::table('customers')
// 	                    ->where('id', 'like', '%'.$query.'%')
// 	                    ->orWhere('name', 'like', '%'.$query.'%')
// 	                    ->orWhere('email', 'like', '%'.$query.'%')
// 	                    ->orWhere('phone', 'like', '%'.$query.'%')
// 	                    ->orderBy($sort_by, $sort_type)
// 	                    ->get();
// 	      return view('customer.pagination_data', compact('customertList'))->render();
// 	     }
// }
public function getAgentEditData($id){
   
    $getCleaner =DB::table('users')->where('id', $id)->first();
    return view('cleaner.editCleaner', compact('getCleaner'));
}
}
