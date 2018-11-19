@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row col-md-10 col-md-offset-1 custyle">
    <table class="table table-striped custab">
    <thead>
            <tr>
                <td>ID</td>
                <td>Product ID</td>
                <td>Buyer ID</td>
                <td>Seller ID</td>
                <td>Status</td>
                <td class="text-center">Action</td>
            </tr>
        @foreach($swap as $key => $data)
            <tr>
                <th>{{$data->id}}</th>
                <th>{{$data->product_id}}</th>
                <th>{{$data->buyer_id}}</th>
                <th>{{$data->seller_id}}</th>
                <th>{{$data->status}}</th>
                <th class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-ok"></span> Approve</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Reject</a></th>
            </tr>
        @endforeach
    </table>
    </div>
</div>
@endsection
