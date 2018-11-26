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

                return redirect ('/home')->with ('success', "Post Created");
    }
	public function create(){
            $requests = new SwappingRequest;
            $$requests->buyer_id = $data['buyer_id'];
            $$requests->save();

	}

}
 ?>