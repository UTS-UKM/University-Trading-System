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
                <td>Action</td>
            </tr>
        @foreach($swap as $key => $data)
            <tr>
                <th>{{$data->id}}</th>
                <th>{{$data->product_id}}</th>
                <th>{{$data->buyer_id}}</th>
                <th>{{$data->seller_id}}</th>
                <th>{{$data->status}}</th>
                <th>
                <form action="approve" method="post">
                    {{csrf_field()}}
                    <button name="post" value="Approved" class="btn btn-info btn-xs"> <i class="glyphicon glyphicon-ok"></i> Approve</button>
                    <button name="post" value="Rejected" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-remove"></i> Reject</button>
                </form>
            </tr>
        @endforeach
    </table>
    </div>
</div>
@endsection
