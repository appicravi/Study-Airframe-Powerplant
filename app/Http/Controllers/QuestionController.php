<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term;
use App\Models\Question;
use DB;
use Excel;  
use App\Imports\CsvImport;
use Validator;


class QuestionController extends Controller
{
    //
    public function question(Request $request){
        $data = Term::where('parent_id',0)->get();
        return view('question.addQuestion',compact('data'));
    }

    // public function getdata(Request $request){
    //     $parent_id=$request->parent_id;

    //     $data = Term::where('parent_id', $request->parent_id)->get(["name"]);
    //     if($data){
    //         $result = array('status'=>true, 'message'=>'get data succesfully', 'data'=>$data);
    //     }
    //     else{
    //         $result = array('status'=>true, 'message'=>'something went wrong');
    //     }
    //     echo json_encode($result);
    // }
    public function fatch(Request $request){
        $parent_id=$request->parent_id;
        if(isset($parent_id)){
            $data = DB::table('terms')->where('parent_id', $request->parent_id)->get();
           if($data){
                    $result = array('status'=>true, 'message'=>'get data succesfully', 'data'=>$data);
                }
                else{
                    $result = array('status'=>false, 'message'=>'something went wrong');
                }
        }else{
            $result = array('status'=>false, 'message'=>'Select Course');
        }
        
                echo json_encode($result);
    }

    public function getquestion(Request $request){
        // dd($request->all());
        $request['status']=1;
        $que= Question::create($request->all());
        if($que){
            $result = array('status'=>true, 'message'=>'Question Added Successfully');
        }else{
            $result = array('status'=>false, 'message'=>'Something Went Wrong');
        }
        

       
       
        echo json_encode($result);
    }
        
    public function questionlist(Request $request){
        //$questionlist = Question::all();
        $questionlist = DB::table('questions')
        ->join('terms','terms.id','=', 'questions.cource_id')->select('questions.*','terms.name')->get();
        //dd($questionlist);
        $result = Term::where('parent_id',0)->get();
    
        return view('question.adminquestion', compact('questionlist','result'));
    }

    public function edit(Request $request,$id){
        // dd($id);
        $term = Term::where('parent_id',0 )->get();
        $quetion = DB::table('questions')->where('id',$id)->first(); 
        $chapter = Term::where('id',$quetion->chapter_id )->first();
        
            return view('question.editquestion', compact('term','quetion','chapter'));
    }

    public function edit_question(Request $request){
        $id = $request->id;
        $type = $request->type;
        $cource_id = $request->cource_id;
        $chapter_id = $request->chapter_id;
        $question = $request->question;
        $question_explan = $request->question_explan;
        $answer_1 = $request->answer_1;
        $answer_2 = $request->answer_2;
        $answer_3 = $request->answer_3;
        $correct_answer = $request->correct_answer;
        $explaination = $request->explaination;
        $check = DB::table('questions')->where('id', $request->id)->first();
        if($check){
            $data = ['cource_id'=>$cource_id ,'chapter_id'=>$chapter_id,'question'=>$question,
                        'question_explan'=>$question_explan,'answer_1'=>$answer_1, 'answer_2'=>$answer_2, 'answer_3'=>$answer_3,
                            'correct_answer'=>$correct_answer, 'explaination'=>$explaination];
            $update =DB::table('questions')->where('id',$id)->update($data);
            if($update){
                $result=array('status'=>true,'message'=> 'questions updated successfully.');
            }else{
                $result=array('status'=>false,'message'=> 'Something went wrong. Please try again.');
            }
        }else{
            $result=array('status'=>false,'message'=> 'questions not found in system');
        }		
        echo json_encode($result);		
        // return view('question.editquestion', compact('result'));
    }


    public function quiz(Request $request){
        $question = Question::where('chapter_id', $request->chapter_id)->first();
        if($question){
            $result = array('status'=>true, 'message'=>'question fatch sussesfully','data'=>$question);
        }else{
            $result = array('status'=>false, 'something went wrong');
        }
        echo json_encode($result);
    }

    public function quizresult(Request $request){
        $user_id = $request->user_id;
        $chapter_id = $request->chapter_id;
        $answers = json_decode($request->answers);
        // dd($answers);
        $result=0;
        foreach($answers as $value){
             //first get coreect anwser from table $ans
             $question = Question::where('id',$value->id)->select('correct_answer')->first();
           
             if($question->correct_answer == $value->ans){
                $result = $result+1;
               
             }
                
        } 

        $precentage = ($result/30)*100;
        $progress = DB::table('progress')->where('user_id',$request->user_id)
        ->where('chapter_id',$request->chapter_id)->first();
  
        if($progress){
            $cp = ($progress->cp*$progress->quiz_count+$precentage)/$progress->quiz_count+1;
            $quiz = $progress->quiz_count+1;
            $update = ['user_id'=>$request->user_id, 'cource_id'=>$request->cource_id,'chapter_id'=>$request->chapter_id,
            'quiz_count'=>$quiz, 'cp'=>$cp];
            $resultupdate = DB::table('progress')->where('user_id', $request->user_id)
            ->where('chapter_id',$request->chapter_id) 
            ->update($update);
            
        }
        else{
            $CP = (0*0+$precentage);
            $Quiz = 1;
            $data = ['user_id'=>$request->user_id, 'cource_id'=>$request->cource_id, 'chapter_id'=>$request->chapter_id,
                'quiz_count'=>$Quiz, 'cp'=>$CP];
                $insert = DB::table('progress')->insert($data);
               
        }
        if($precentage>=0){
            $result = array('status'=>true, 'message'=> 'result get succesfullt','data'=>number_format($precentage,2));
        }else{
            $result = array('status'=>false, 'message'=> 'Something Went Wrong');
        }

      echo json_encode($result);
    }

    public function chapter(Request $request){
        $parent_id=$request->parent_id;
        if(isset($parent_id)){
            $data = DB::table('terms')->where('parent_id', $request->parent_id)->get();
           if($data){
                    $result = array('status'=>true, 'message'=>'get data succesfully', 'data'=>$data);
                }
                else{
                    $result = array('status'=>false, 'message'=>'something went wrong');
                }
        }else{
            $result = array('status'=>false, 'message'=>'Select Course');
        }
        
                echo json_encode($result);
    }


        public function fliter(Request $request){
            $questionlist=[];
            if(!empty($request->key)){
                $questionlist = DB::table('questions')
                ->join('terms','terms.id','=', 'questions.cource_id')
              
                ->select('questions.*','terms.name as course_name' )->where('cource_id',$request->key)->get();
                
            }if(!empty($request->key) && !empty($request->chapter_id)){

                $questionlist = DB::table('questions')
                ->join('terms','terms.id','=', 'questions.cource_id')
                
                ->select('questions.*','terms.name as course_name' )
                // ->where(['cource_id'=>$request->key,'chapter_id'=>$request->chapter_id])
                ->where('cource_id',$request->key)
                ->where('chapter_id',$request->chapter_id)->get();
               
            }
            
            if(is_null($request->key)){
                $questionlist = DB::table('questions')
                ->join('terms','terms.id','=', 'questions.cource_id')
                
                ->select('questions.*','terms.name as course_name' )->get();
               
            }
        
        
            $item='';
            
           if($questionlist){

			foreach($questionlist as $key=>$value){
                $chapter=DB::table('terms')->where('id',$value->chapter_id)->select('name as chapter_name')->first();
                // dd($chapter_name);
				$item .='<tr class="tr-shadow" id="row_'.$value->id.'" style="border-top: 1px solid #ebe8f8;">';
				$item .='<td>'.$value->course_name.'</td><td>'.$chapter->chapter_name.'</td><td>'.$value->type.'</td><td>'.$value->question.'</td><td>'.$value->correct_answer.
                '</td>
                ';

                if($value->status=1){
                    $item .='<td><input id="status" type="checkbox" checked>
                </td>';	
                }else{
                    $item .='<td><input id="status" type="checkbox">
                </td>';	
                }
                			$item.='<td>
                                                    <div class="table-data-feature">
														<a class="item" data-toggle="tooltip" data-placement="top" href="'.url('').'//'.$value->id.'"><i class="zmdi zmdi-edit"></i></a>
                                                        <a class="item deleteme" data-id="'.$value->id.'" data-type="customer" data-token="'.csrf_token().'" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                        
                                                    </div>
                                                </td>';						
				$item.='</tr>';
			}
		}
        $result=array('status'=>true,'data'=>$item,'message'=> 'fliter.');
		echo json_encode($result);

     }


        public function fliterbychapter(Request $request){
        
           if(!empty($request->key)){
            
                
                 $question = DB::table('questions')
                 ->join('terms', 'questions.cource_id', '=', 'terms.id')
                 ->select('questions.*','terms.name as course_name' )                 
                  ->where("questions.chapter_id",$request->key)  
                 ->get();
                 
              
           }
           
        //    $question = Question::where('id',$request->$id)->first();
            $item='';
            
           if(!empty($question)){
            
			foreach($question as $key=>$value){
                $chapter=DB::table('terms')->where('id',$value->chapter_id)->select('name as chapter_name')->first();
                // dd($chapter_name);
				$item .='<tr class="tr-shadow" id="row_'.$value->id.'" style="border-top: 1px solid #ebe8f8;">';
				$item .='<td>'.$value->course_name.'</td><td>'.$chapter->chapter_name.'</td><td>'.$value->type.'</td><td>'.$value->question.'</td><td>'.$value->correct_answer.
                '</td>
                ';
                if($value->status=1){
                    $item .='<td><input id="status" type="checkbox" checked>
                </td>';	
                }else{
                    $item .='<td><input id="status" type="checkbox">
                </td>';	
                }
				$item.='<td>
                                                    <div class="table-data-feature">
														<a class="item" data-toggle="tooltip" data-placement="top" href="'.url('').'//'.$value->id.'"><i class="zmdi zmdi-edit"></i></a>
                                                        <a class="item deleteme" data-id="'.$value->id.'" data-type="customer" data-token="'.csrf_token().'" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                        
                                                    </div>
                                                </td>';						
				$item.='</tr>';
			}
        
		}
        $result=array('status'=>true,'data'=>$item,'message'=> 'fliter.');
		echo json_encode($result);
        }

        public function fliterbytype(Request $request){
            
               if(!empty($request->key)){
                
                    
                     $question = DB::table('questions')
                     ->join('terms', 'questions.cource_id', '=', 'terms.id')
                     ->select('questions.*','terms.name as course_name' )                 
                      ->where("questions.type",$request->key)  
                     ->get();
                     
                  
               }
               
          
                $item='';
                
               if(!empty($question)){
                
                foreach($question as $key=>$value){
                    $chapter=DB::table('terms')->where('id',$value->chapter_id)->select('name as chapter_name')->first();
                    // dd($chapter_name);
                    $item .='<tr class="tr-shadow" id="row_'.$value->id.'" style="border-top: 1px solid #ebe8f8;">';
                    $item .='<td>'.$value->course_name.'</td><td>'.$chapter->chapter_name.'</td><td>'.$value->type.'</td><td>'.$value->question.'</td><td>'.$value->correct_answer.
                    '</td>
                    ';
                    if($value->status=1){
                        $item .='<td><input id="status" type="checkbox" checked>
                    </td>';	
                    }else{
                        $item .='<td><input id="status" type="checkbox">
                    </td>';	
                    }
                    $item.='<td>
                                                        <div class="table-data-feature">
                                                            <a class="item" data-toggle="tooltip" data-placement="top" href="'.url('').'//'.$value->id.'"><i class="zmdi zmdi-edit"></i></a>
                                                            <a class="item deleteme" data-id="'.$value->id.'" data-type="customer" data-token="'.csrf_token().'" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                            
                                                        </div>
                                                    </td>';						
                    $item.='</tr>';
                }
            
            }
            $result=array('status'=>true,'data'=>$item,'message'=> 'fliter.');
            echo json_encode($result);
            }


            
        public function fliterbystatus(Request $request){
            
        
            if(isset($request->key)){
             
                 
                  $question = DB::table('questions')
                  ->join('terms', 'questions.cource_id', '=', 'terms.id')
                  ->select('questions.*','terms.name as course_name' )                 
                   ->where("questions.status",$request->key)  
                  ->get();
                  
            }
            
             $item='';
            
            if(!empty($question)){
             
             foreach($question as $key=>$value){
                 $chapter=DB::table('terms')->where('id',$value->chapter_id)->select('name as chapter_name')->first();
                 // dd($chapter_name);
                 $item .='<tr class="tr-shadow" id="row_'.$value->id.'" style="border-top: 1px solid #ebe8f8;">';
                 $item .='<td>'.$value->course_name.'</td><td>'.$chapter->chapter_name.'</td><td>'.$value->type.'</td><td>'.$value->question.'</td><td>'.$value->correct_answer.
                 '</td>
                 ';
                 if($value->status=1){
                    $item .='<td><input id="status" type="checkbox" checked>
                </td>';	
                }else{
                    $item .='<td><input id="status" type="checkbox">
                </td>';	
                }
                 $item.='<td>
                                                     <div class="table-data-feature">
                                                         <a class="item" data-toggle="tooltip" data-placement="top" href="'.url('').'//'.$value->id.'"><i class="zmdi zmdi-edit"></i></a>
                                                         <a class="item deleteme" data-id="'.$value->id.'" data-type="customer" data-token="'.csrf_token().'" data-toggle="tooltip" data-placement="top" href="javascript:void(0)"><i class="zmdi zmdi-delete"></i></a>
                                                         
                                                     </div>
                                                 </td>';						
                 $item.='</tr>';
             }
         
         }
         $result=array('status'=>true,'data'=>$item,'message'=> 'fliter.');
         echo json_encode($result);
         }



         public function changeQuestionstatus(Request $request){
            $id=$request->id;
            $status=DB::table('questions')->where('id',$id)->first();
            $change='';
            if($status){
                if($status->status){
                        $change=['status'=>0];
                }else{
                    $change=['status'=>1];
                }
                
                DB::table('questions')->where('id',$id)->update($change);
                $result=array("status"=>true,'message'=>'status Changed');
            }else{
                $result=array("status"=>false,'message'=>'Somthing Went Wrong');
            }
            echo json_encode($result);
        }
        
        public function courseapi(Request $request){
                $user_id = $request->user_id;
                $chapter_id = $request->chapter_id;
            $data = DB::table('progress')->where('user_id',$request->user_id)
            ->where('chapter_id', $request->chapter_id)->get();
            if($data){
                $result = array('status'=>true, 'message'=>'get data succesfully','data'=>$data);
            }else{
                $result = array('status'=>false, 'message'=>'something went wrong');
            }
            echo json_encode($result);
        }

        public function importExcel(Request $request)
        {
            // dd($request);
       
            if($request->hasFile('import_file')){
                
                $results= Excel::toArray(new CsvImport, $request->file('import_file')); 
               
                    foreach ($results[0] as $key => $row) {
                     
                        if($key>0){
                               //term table se uski id 
                                
                        $course = DB::table('terms')->where('name',$row[0])->first();
                        $data['cource_id'] = $course->id;
                        //chapter name from terms
                        $chapter = DB::table('terms')->where('name',$row[1])->first();
                        $data['chapter_id'] = $chapter->id;
                        $data['type'] = $row[2];
                        $data['question'] = $row[3];
                        $data['answer_1'] = $row[4];
                        $data['answer_2'] = $row[5];
                        $data['answer_3'] = $row[6];
                        $data['correct_answer'] = $row[7];
                        $data['explaination'] = $row[8];
                        $data['status']=1;
                        
                        
                        if(!empty($data)) {
                            DB::table('questions')->insert($data);
                            // dd($data);
                        }  
                      }
                   }
            }
            
            // Session::put('success', 'Youe file successfully import in database!!!');
            $result = array('status'=>true, 'message'=>'import succesfully');
            echo json_encode($result);
        }
            public function changepassword(Request $request){
                $validate = Validator::make($request->all(),[
                    'oldpassword' => 'required',
                    'newpassword' => 'required|min:5',
                   
                ]);
                if($validate->fails()){
                    $result = array('status'=>false, 'message'=>'validation failed', 'error'=>$validate->errors());
                }
                $token_status=DB::table('password_resets')->where('token', $request->token)->first();
                if(in_null($token_status)){
                    $result=array('status'=>false,'message' => "Token Does Not Exist");
                }
                else{
                    $update=DB::table('users')->where('email' ,$token_status->email)->update(['password'=> md5($request->password)]);
                    Password_reset::where('email',$token_status->email)->delete();
                    $result=array('status'=>true,'message' =>'Password Reset Success');
                }
                echo json_encode($result);
            }

    }




        
    

