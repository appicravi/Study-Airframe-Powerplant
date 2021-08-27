<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;
class deleteController extends Controller{
	public function delete(Request $request){
		$id=$request->id;
		$type=$request->type;
		
		if(!isset($id)){
			$result=array('status'=>false,'message'=> 'id is required.');
		}else if(!isset($type)){
			$result=array('status'=>false,'message'=> 'type is required.');
		}else{
			if($type=='question'){
				$deleteCashier =DB::table('questions')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='location'){
				$deleteCashier =DB::table('locations')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='agent'){
				$deleteBranches =DB::table('users')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='category'){
				$deleteBranches =DB::table('categories')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='product'){
				$deleteBranches =DB::table('products')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='modifier'){
				$deleteBranches =DB::table('modifier')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='role'){
				$deleteBranches =DB::table('roles')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='item'){
				$deleteItems =DB::table('items')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='supplier'){
				$deleteSupplier =DB::table('supplier')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='warehouse'){
				$deleteWarehouse =DB::table('warehouse')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='employee'){
				$deletEmployees =DB::table('employees')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='tax'){
				$deletTaxes =DB::table('taxes')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='floor'){
				$deletFloor =DB::table('floor')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='zone'){
				$deleteZone =DB::table('delivery_zone')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='tag'){
				$deleteTag =DB::table('tags')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='method'){
				$deleteMethod =DB::table('payment_method')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='event'){
				$event =DB::table('temporary_event')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='citem'){
				$citem =DB::table('combo_items_draft')->where('id',$id)->delete();
				$combo_items =DB::table('combo_items')->where('draft_id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='unitOptionDel'){
				$citem =DB::table('item_options')->where('id',$id)->delete();
				$getOption = DB::table('combo_items')->where('draft_id',$request->draftid)->select('options')->first();
				if($getOption){
					$opt = $getOption->options;
					if($opt>0){
						$updateOption = DB::table('combo_items')->where('draft_id',$request->draftid)->update(['options'=>$opt-1]);
					}
				}
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='priceDel'){
				$size_prices =DB::table('size_prices')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='coupon'){
				$coupons =DB::table('coupons')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='discount'){
				$discount =DB::table('discounts')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='customer'){
				$customer =DB::table('users')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='indDelete'){
				$item_ingredient =DB::table('item_ingredient')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='levelDelete'){
				$item_level =DB::table('item_level')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='type'){
				$room_types =DB::table('room_types')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='type'){
				$room_types =DB::table('room_types')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='halltype'){
				$rooms =DB::table('hall_types')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='hall'){
				$halls =DB::table('halls')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else if($type=='report'){
				$reports =DB::table('reports')->where('id',$id)->delete();
				$result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
			}else{
				$result=array('status'=>false,'message'=> 'Something went wrong. Please try again.');
			}
		}
		echo json_encode($result);
    }
	
}