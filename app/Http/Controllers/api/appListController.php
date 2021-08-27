<?php
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;
use App\Models\Term;
use Validator;
class appListController extends Controller{

	public function terms(Request $request){
        Term::create($request->all());
		echo "ho gaya";

    }
}