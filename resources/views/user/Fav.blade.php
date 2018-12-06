@extends('layouts.app')

@section('content')
<table class="table table-striped table-dark">
<thead>
	<tr>
<th>Product Id</th>	
<th>Product Category</th>	
</tr>
</thead>	
<tbody>
	@forelse($favourites as $favourite)
	<tr>
<td>{{$favourite->favouriteables_id}}</td>	
<td>{{$favourite->favouriteables_type}}</td>	
</tr>
                          @empty

        <h3 style="margin-left:100px;">No Favourites</h3>

        

    @endforelse
</tbody>
</table>
@endsection