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
      <td>{{$result->offeredProduct_id}}</td>
      <td>{{$result->product_id}}</td>
      <td>{{$result->created_at}}</td>
      <td>{{$result->status}}</td>
      <td><button class="btn btn-primary">Approve</button><button style="margin-left:15px"class="btn btn-danger">reject</button></td>
    </tr>
    @empty
    	<h3>No Swapping Requests found</h3>

    @endforelse

  </tbody>
</table>
@endsection