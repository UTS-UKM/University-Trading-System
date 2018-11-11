<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use DB;

class AdminController extends Controller
{
        public function approve(){

            return view('admin.approval.approve');
    }


  

}

 ?>