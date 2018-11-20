<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;
class SwappingRequest extends Model
{

    public function updateSwappingRequest($data)
    {
        $SwappingRequest = $this->find($data['id']); 
        $SwappingRequest->product_id = $data['product_id'];
        $SwappingRequest->offeredProduct_id = $data['offeredProduct_id'];
        $SwappingRequest->buyer_id = $data['buyer_id'];
        $SwappingRequest->seller_id = $data['seller_id'];
        $SwappingRequest->save();
        return 1;
}
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id', 'offeredProduct_id', 'buyer_id', 'seller_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}