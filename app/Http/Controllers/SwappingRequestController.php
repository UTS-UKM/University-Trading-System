<?php 

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\SwappingRequest;
use Illuminate\Http\Request;
use DB;

class SwappingRequestController extends Controller
{
    public function index(){
        $SwappingRequest =DB::table('swapping_request')->where('id',auth()->user()->id)->get(); 

        return view('user.Requests')->with(compact('SwappingRequest'));

    }
    public function store(Request $request){

        $this->validate($request, [
                    'product_id' =>'required',
                    'offeredProduct_id'=>'required',
                    'buyer_id'=>'required',
                    'seller_id'=>'required'
                ]);
                //return 123;
                $swappingRequest = new SwappingRequest;
                $swappingRequest->product_id = $request ->input('product_id');
                $swappingRequest->offeredProduct_id = $request ->input('offeredProduct_id');
                $swappingRequest->buyer_id = $request ->input('buyer_id');
                $swappingRequest->seller_id = $request ->input('seller_id');
                $swappingRequest -> save();

                return redirect ('/home')->with ('success', "SwappingRequest Created");
    }
	public function create(){
            $requests = new SwappingRequest;
            $$requests->buyer_id = $data['buyer_id'];
            $$requests->save();

	}

    public function adminApprove($id){

        DB::table('swapping_request')
       ->where('id', $id)
       ->update([
           'status' => DB::raw("'Approved by Admin'"),
       ]);
       return redirect ('/user/ViewRequests');
    }
    public function adminReject($id){

        DB::table('swapping_request')
       ->where('id', $id)
       ->update([
           'status' => DB::raw("'Rejected By Admin'"),
       ]);
       return redirect ('/user/ViewRequests');
    }
    public function approve($id){

        DB::table('swapping_request')
       ->where('id', $id)
       ->update([
           'status' => DB::raw("'Approved by seller, Waiting for Admin Approval of Transaction'"),
       ]);
       return redirect ('/user/ViewRequests');
    }
    public function reject($id){

        DB::table('swapping_request')
       ->where('id', $id)
       ->update([
           'status' => DB::raw("'Rejected By Seller'"),
       ]);
       return redirect ('/user/ViewRequests');
    }

}
 ?>