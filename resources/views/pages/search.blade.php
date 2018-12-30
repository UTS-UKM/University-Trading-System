@extends('layouts.app')

@section('content')


@if(count($data)=="0")
        <div class="col-md-12" align="center">

            <h1 align="center" style="margin:20px">
              No products found under
              <b style="color:red">{{$catByUser}} </b>
                Category </h1>

        </div>
        @else
        <div id="productData">
          @foreach($data as $p)
          <div class="col-xs-6 col-sm-4" >
	    			<div class="itemBox">
	    				<div class="prod">
                            <div><img class="col-lg-20" src="{{ asset('images/' . $product->id) . '_1' }}" alt="{{$product->id}}" style="max-width: 80%;
                                max-height: 80%;"></div>
                              <div class="card-body">
                                  <h4 class="card-title">
                            <h4>Item Name:{{$product->product_name}}</h4>
                            <h4>Price:RM {{$product->product_price}}</h4>
                            <h4>Description:{{$product->product_description}}</h4>
                            
                          
                          </div>
	    			</div>
	    		</div>
          @endforeach
        </div>
          @endif
	    	</div>
		</div>
	</div>
</div>

@endsection