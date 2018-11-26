<?php 

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\SwappingRequest;
use Illuminate\Http\Request;
use DB;

class SwappingRequestController extends Controller
{
	public function create(){

	}
    public function store(Request $request)
    {

        $swappingRequests = new SwappingRequest();
        $data = $this->validate($request, [
            'product_id'=>'required',
            'offeredProduct_id'=>'required',
            'buyer_id'=>'required',
            'seller_id'=>'required',
        ]);
        $swappingRequests->updateSwappingRequest($data);

        return redirect('/home');
    }

}
 ?>