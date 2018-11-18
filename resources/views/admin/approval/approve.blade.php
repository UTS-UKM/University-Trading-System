@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
            <tr>
                <td>ID</td>
                <td>Product ID</td>
                <td>Buyer ID</td>
                <td>Seller ID</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        @foreach($swap as $key => $data)
            <tr>
                <th>{{$data->id}}</th>
                <th>{{$data->product_id}}</th>
                <th>{{$data->buyer_id}}</th>
                <th>{{$data-seller_id}}</th>
                <th>{{$data-status}}</th>
                <th class="text-center">Action</th>
            </tr>
        @endforeach
    </table>
    </div>
</div>
@endsection
