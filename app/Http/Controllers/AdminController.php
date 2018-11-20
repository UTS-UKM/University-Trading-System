<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
        public function approve(){
            $swap = DB::select('select * from swapping_request');
            return view('admin.approval.approve',['swap'=>$swap]);
        }

  

}

 ?>