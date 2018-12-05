@extends('layouts.app')
@section('content')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">From</th>
      <th scope="col">Offered Product</th>
      <th scope="col">Wanted Product</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    	@forelse($SwappingRequest as $result)
    <tr>
      <td>{{$result->seller_id}}</td>
      <td><a href="/product/{{$result->offeredProduct_id}}">{{$result->offeredProduct_id}}</a></td>
      <td><a href="/product/{{$result->product_id}}">{{$result->product_id}}</a></td>
      <td>{{$result->created_at}}</td>
      <td>{{$result->status}}</td>
      <td>
        @if(!($result->status=="Approved by Admin") && !($result->status=="Rejected by Admin"))
      	<a href="/user/swappingRequest/approve/{{$result->id}}" class="btn btn-primary">Approve</a>
      	<a href="/user/swappingRequest/reject/{{$result->id}}"style="margin-left:15px"class="btn btn-danger">reject</a></td>
        @endif
    </tr>
    @empty
    	<h3>No Swapping Requests found</h3>

    @endforelse

  </tbody>
</table>
@endsection
