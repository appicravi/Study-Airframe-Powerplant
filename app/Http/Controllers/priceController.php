<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class priceController extends Controller
{
    function getPrice(Request $request){
        $bed=$request->bed;
        $bath=$request->bath;
        $often=$request->often;
        $sub=$request->sub;
        $supply=$request->supply;
        $Cabinet=$request->Cabinet;
        $Fridge=$request->Fridge;
        $Oven=$request->Oven;
        $Laundry=$request->Laundry;

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
           $result=array('status' => true,'price' =>$price,'saving'=>$saving,'often'=>$often,'tax'=>$tax_,'total'=>$total,'message'=>' Total price');
        
           
        echo json_encode($result);

    }
}

// $bd=DB::table('services')->where('ser_name','Bed')->where('quantity',$bed)->first();
//         $bt=DB::table('services')->where('ser_name','Bath')->where('quantity',$bath)->first();
//         $ds=0;
//         if($often=='onemonth')
//         {
//             $discount=DB::table('services')->where('ser_name',$sub)->first();
//            $ds=$discount->charge;
//         }
//         else{
//             $ds=0;
//         }

//             $bs=$bd->charge;
//             $bst=$bt->charge;

//             $total=$bs+$bst;
//            echo $saving=($total*$ds)/100;

//            $price=$total-$saving;