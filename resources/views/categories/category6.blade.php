@extends('layouts.app')

    @section('content')
        
  
    @forelse($products as $product)
    <div class="row">

        <div class="col-lg-5">
          <div class="card h-100">
               
                <div><img class="col-lg-20" src="{{ asset('images/' . $product->id) . '_1' }}" alt="{{$product->id}}" style="max-width: 80%;
                  max-height: 80%;"></div>
                <div class="card-body">
                    <h4 class="card-title">
              <h4>Item Name:{{$product->product_name}}</h4>
              <h4>Price:RM {{$product->product_price}}</h4>
            
              
            
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>
              

              @empty

<h3>No products</h3>



@endforelse
 
@endsection